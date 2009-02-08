<?php
/***************************************************************************
 *                                sessions.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: sessions.php 192 2007-01-20 15:17:44Z kronos $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Adds/updates a new session to the database for the given userid.
// Returns the new session ID on success.
//
function session_begin($user_id, $user_ip, $page_id, $auto_create = 0, $enable_autologin = 0, $admin = 0)
{
	global $db, $board_config;
	global $HTTP_COOKIE_VARS, $HTTP_GET_VARS, $SID;

	$cookiename = $board_config['cookie_name'];
	$cookiepath = $board_config['cookie_path'];
	$cookiedomain = $board_config['cookie_domain'];
	$cookiesecure = $board_config['cookie_secure'];

	if ( isset($HTTP_COOKIE_VARS[$cookiename . '_sid']) || isset($HTTP_COOKIE_VARS[$cookiename . '_data']) )
	{
		$session_id = isset($HTTP_COOKIE_VARS[$cookiename . '_sid']) ? $HTTP_COOKIE_VARS[$cookiename . '_sid'] : '';
		$sessiondata = isset($HTTP_COOKIE_VARS[$cookiename . '_data']) ? unserialize(stripslashes($HTTP_COOKIE_VARS[$cookiename . '_data'])) : array();
		$sessionmethod = SESSION_METHOD_COOKIE;
	}
	else
	{
		$sessiondata = array();
		$session_id = ( isset($HTTP_GET_VARS['sid']) ) ? $HTTP_GET_VARS['sid'] : '';
		$sessionmethod = SESSION_METHOD_GET;
	}

	//
	if (!preg_match('/^[A-Za-z0-9]*$/', $session_id)) 
	{
		$session_id = '';
	}

	$page_id = (int) $page_id;

	$last_visit = 0;
	$current_time = time();

// Begin PNphpBB2 Module
/*
	//
	// Are auto-logins allowed?
	// If allow_autologin is not set or is true then they are
	// (same behaviour as old 2.0.x session code)
	//
	if (isset($board_config['allow_autologin']) && !$board_config['allow_autologin'])
	{
		$enable_autologin = $sessiondata['autologinid'] = false;
	}

	// 
	// First off attempt to join with the autologin value if we have one
	// If not, just use the user_id value
	//
	$userdata = array();

	if ($user_id != ANONYMOUS)
	{
		if (isset($sessiondata['autologinid']) && (string) $sessiondata['autologinid'] != '' && $user_id)
		{
			$sql = 'SELECT u.* 
				FROM ' . USERS_TABLE . ' u, ' . SESSIONS_KEYS_TABLE . ' k
				WHERE u.user_id = ' . (int) $user_id . "
					AND u.user_active = 1
					AND k.user_id = u.user_id
					AND k.key_id = '" . md5($sessiondata['autologinid']) . "'";
			if (!($result = $db->sql_query($sql)))
			{
				message_die(CRITICAL_ERROR, 'Error doing DB query userdata row fetch', '', __LINE__, __FILE__, $sql);
			}

			$userdata = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
		
			$enable_autologin = $login = 1;
		}
		else if (!$auto_create)
		{
			$sessiondata['autologinid'] = '';
			$sessiondata['userid'] = $user_id;

			$sql = 'SELECT *
				FROM ' . USERS_TABLE . '
				WHERE user_id = ' . (int) $user_id . '
					AND user_active = 1';
			if (!($result = $db->sql_query($sql)))
			{
				message_die(CRITICAL_ERROR, 'Error doing DB query userdata row fetch', '', __LINE__, __FILE__, $sql);
			}

			$userdata = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			$login = 1;
		}
	}

	//
	// At this point either $userdata should be populated or
	// one of the below is true
	// * Key didn't match one in the DB
	// * User does not exist
	// * User is inactive
	//
	if (!sizeof($userdata) || !is_array($userdata) || !$userdata)
	{
		$sessiondata['autologinid'] = '';
		$sessiondata['userid'] = $user_id = ANONYMOUS;
		$enable_autologin = $login = 0;

		$sql = 'SELECT *
			FROM ' . USERS_TABLE . '
			WHERE user_id = ' . (int) $user_id;
		if (!($result = $db->sql_query($sql)))
		{
			message_die(CRITICAL_ERROR, 'Error doing DB query userdata row fetch', '', __LINE__, __FILE__, $sql);
		}

		$userdata = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
	}
*/

	if (pnUserLoggedIn()) 
	{
	 	$user_id=pnUserGetVar('uid');
		$login=1;

		// Does the user have admin rights?
		$admin_rights = pnSecAuthAction(0, 'PNphpBB2::', '::', ACCESS_ADMIN) ? 1 : 0;
		$admin = $admin_rights;
	
		$sql = "SELECT * FROM " . USERS_TABLE . " WHERE user_id = $user_id";
		$result = $db->sql_query($sql);
		
		if (!($row = $db->sql_fetchrow($result)))
		{
		 	// User was not found in the phpBB2 database, we need to insert it.
			// If the Postnuke user site url is populated add it to their record.
			$user_site_url = (pnUserGetVar('url')) ? "http://" . preg_replace ("'http://'i", '',  pnUserGetVar('url')) : '';
			// If the user has a Postnuke avatar selected copy the avatar name over so it can be used.
			$user_avatar = (pnUserGetVar('pn_user_avatar') != "blank.gif") ? "'" . pnVarPrepForStore(pnUserGetVar('pn_user_avatar')) . "', 3, " : "'' , 0, ";

			// Obtain PN user password
			$sql = "SELECT pn_pass FROM " . pnConfigGetVar('prefix') . "_users WHERE pn_uid='" . $user_id . "'";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, 'Could not obtain PN user table', '', __LINE__, __FILE__, $sql);
			}
      list($pn_user_pass) = $db->sql_fetchrow($result);

			// Insert the user record
			$sql= "INSERT INTO " . USERS_TABLE . " (user_id, username, user_regdate, user_password,	user_email,	user_icq,	user_website,	user_occ,	user_from, user_interests, user_sig, user_sig_bbcode_uid,	user_avatar, user_avatar_type, user_viewemail, user_aim, user_yim, user_msnm, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_timezone, user_dateformat, user_lang, user_style, user_level, user_allow_pm, user_active, user_actkey) VALUES ($user_id, '" . pnVarPrepForStore(pnUserGetVar('uname')) . "', " . time() . ", '" . $pn_user_pass . "', '" . pnVarPrepForStore(pnUserGetVar('email')) . "', '" . pnVarPrepForStore(pnUserGetVar('user_icq')) . "', '" . pnVarPrepForStore($user_site_url) . "', '" . pnVarPrepForStore(pnUserGetVar('user_occ')) . "', '" . pnVarPrepForStore(pnUserGetVar('user_from')) . "', '" . pnVarPrepForStore(pnUserGetVar('user_intrest')) . "', '', '', " . $user_avatar . "0, '" . pnVarPrepForStore(pnUserGetVar('user_aim')) . "', '" . pnVarPrepForStore(pnUserGetVar('user_yim')) . "', '" . pnVarPrepForStore(pnUserGetVar('user_msnm')) . "', " . $board_config['allow_sig'] . ", " . $board_config['allow_smilies'] . ", " . $board_config['allow_html'] . ", " . $board_config['allow_bbcode'] . ", 1, 0, 1, 1, " . (pnUserGetVar('timezone_offset') - 12) . ", '" . $board_config['default_dateformat'] . "', '" . $board_config['default_lang'] . "', " . $board_config['default_style'] . ", $admin_rights, 1, 1, '')";

			if ( !($result = $db->sql_query($sql, BEGIN_TRANSACTION)) )
			{
				message_die(CRITICAL_ERROR, 'Could not insert data into users table', '', __LINE__, __FILE__, $sql);
			}
			
			// Insert new group data for this user
			$sql = "INSERT INTO " . GROUPS_TABLE . " (group_name, group_description, group_single_user, group_moderator)
				VALUES ('', 'Personal User', 1, 0)";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, 'Could not insert data into groups table', '', __LINE__, __FILE__, $sql);
			}
			
			$group_id = $db->sql_nextid();
	    
			$sql = "INSERT INTO " . USER_GROUP_TABLE . " (user_id, group_id, user_pending)
				VALUES ($user_id, $group_id, 0)";
			if( !($result = $db->sql_query($sql, END_TRANSACTION)) )
			{
				message_die(CRITICAL_ERROR, 'Could not insert data into user_group table', '', __LINE__, __FILE__, $sql);
			}
		}
		else
		{
		 	// Update user rights
			$admin_rights = $admin_rights == 0 && $row['user_level'] <> 0 ? $admin_rights = $row['user_level'] : $admin_rights;
		 	// User found lets update the user information
			$user_site_url = (pnUserGetVar('url')) ? "http://" . preg_replace ("'http://'i", '',  pnUserGetVar('url')) : '';
//			$user_avatar = (pnUserGetVar('pn_user_avatar') != "blank.gif") ? "user_avatar = '" . pnVarPrepForStore(pnUserGetVar('pn_user_avatar')) . "', user_avatar_type = 3, " : '';
			$user_avatar = '';

			// Obtain PN user password
			$sql = "SELECT pn_pass FROM " . pnConfigGetVar('prefix') . "_users WHERE pn_uid='" . $user_id . "'";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, 'Could not obtain PN user table', '', __LINE__, __FILE__, $sql);
			}
      list($pn_user_pass) = $db->sql_fetchrow($result);

			// Update the user record
 		  $sql = "UPDATE " . USERS_TABLE . " SET " . $user_avatar . "username = '" . pnVarPrepForStore(pnUserGetVar('uname')) . "' ,user_password = '" . $pn_user_pass . "', user_email =  '" . pnVarPrepForStore(pnUserGetVar('email')) . "', user_icq = '" . pnVarPrepForStore(pnUserGetVar('user_icq')) . "', user_website = '" . pnVarPrepForStore($user_site_url) . "', user_occ = '" . pnVarPrepForStore(pnUserGetVar('user_occ')) . "', user_from = '" . pnVarPrepForStore(pnUserGetVar('user_from')) . "', user_interests = '" . pnVarPrepForStore(pnUserGetVar('user_intrest')) . "', user_aim = '" . pnVarPrepForStore(pnUserGetVar('user_aim')) . "', user_yim = '" . pnVarPrepForStore(pnUserGetVar('user_yim')) . "', user_msnm = '" . pnVarPrepForStore(pnUserGetVar('user_msnm')) . "', user_timezone = " . (pnUserGetVar('timezone_offset') - 12) . ", user_level = " . $admin_rights . " WHERE user_id = $user_id";

			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, 'Could not update users table', '', __LINE__, __FILE__, $sql);
			}
			
			// Update the group tables
			if ( stripslashes($row['username']) != pnUserGetVar('uname') )
			{
			 	 $sql = "UPDATE " . GROUPS_TABLE . "	SET group_name = '" . pnVarPrepForStore(pnUserGetVar('uname')) . "' WHERE group_name = '" . $row['username'] . "'";
				 if ( !$result = $db->sql_query($sql) )
				 {
			 	 		message_die(CRITICAL_ERROR, 'Could not rename users group', '', __LINE__, __FILE__, $sql);
				 }
			}
		}
	}  
	else
	{
		$user_id=ANONYMOUS;
		$login=0;
	}

	$sql = "SELECT * 
		FROM " . USERS_TABLE . " 
		WHERE user_id = $user_id";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, 'Could not obtain lastvisit data from user table', '', __LINE__, __FILE__, $sql);
	}

	$userdata = $db->sql_fetchrow($result);

	if ( $user_id != ANONYMOUS )
	{
		if ( $auto_create )
		{
			if ( $userdata['user_active'] )
			{
				// We have to login automagically
				$login = 1;
			}
			else
			{
				// Autologin is not set. Don't login, set as anonymous user
				$login = 0;
				$user_id = $userdata['user_id'] = ANONYMOUS;

				$sql = 'SELECT * FROM ' . USERS_TABLE . ' WHERE user_id = ' . ANONYMOUS;
				$result = $db->sql_query($sql);
				$userdata = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
			}
		}
		else
		{
			$login = 1;
		}
	}
	else
	{
		$login = 0;
	}
// End PNphpBB2 Module

	//
	// Initial ban check against user id, IP and email address
	//
	preg_match('/(..)(..)(..)(..)/', $user_ip, $user_ip_parts);

	$sql = "SELECT ban_ip, ban_userid, ban_email 
		FROM " . BANLIST_TABLE . " 
		WHERE ban_ip IN ('" . $user_ip_parts[1] . $user_ip_parts[2] . $user_ip_parts[3] . $user_ip_parts[4] . "', '" . $user_ip_parts[1] . $user_ip_parts[2] . $user_ip_parts[3] . "ff', '" . $user_ip_parts[1] . $user_ip_parts[2] . "ffff', '" . $user_ip_parts[1] . "ffffff')
			OR ban_userid = $user_id";
	if ( $user_id != ANONYMOUS )
	{
		$sql .= " OR ban_email LIKE '" . str_replace("\'", "''", $userdata['user_email']) . "' 
			OR ban_email LIKE '" . substr(str_replace("\'", "''", $userdata['user_email']), strpos(str_replace("\'", "''", $userdata['user_email']), "@")) . "'";
	}
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, 'Could not obtain ban information', '', __LINE__, __FILE__, $sql);
	}

	if ( $ban_info = $db->sql_fetchrow($result) )
	{
		if ( $ban_info['ban_ip'] || $ban_info['ban_userid'] || $ban_info['ban_email'] )
		{
			message_die(CRITICAL_MESSAGE, 'You_been_banned');
		}
	}

	//
	// Create or update the session
	//
// Begin PNphpBB2 Module
// -- Remove session_admin
//	$sql = "UPDATE " . SESSIONS_TABLE . "
//		SET session_user_id = $user_id, session_start = $current_time, session_time = $current_time, session_page = $page_id, session_logged_in = $login, session_admin = $admin
//		WHERE session_id = '" . $session_id . "' 
//			AND session_ip = '$user_ip'";
	$sql = "UPDATE " . SESSIONS_TABLE . "
		SET session_user_id = $user_id, session_start = $current_time, session_time = $current_time, session_page = $page_id, session_logged_in = $login
		WHERE session_id = '" . $session_id . "' 
			AND session_ip = '$user_ip'";
// End PNphpBB2 Module
	if ( !$db->sql_query($sql) || !$db->sql_affectedrows() )
	{
		$session_id = md5(dss_rand());

// Begin PNphpBB2 Module
// -- Remove session_admin
//		$sql = "INSERT INTO " . SESSIONS_TABLE . "
//			(session_id, session_user_id, session_start, session_time, session_ip, session_page, session_logged_in, session_admin)
//			VALUES ('$session_id', $user_id, $current_time, $current_time, '$user_ip', $page_id, $login, $admin)";
		$sql = "INSERT INTO " . SESSIONS_TABLE . "
			(session_id, session_user_id, session_start, session_time, session_ip, session_page, session_logged_in)
			VALUES ('$session_id', $user_id, $current_time, $current_time, '$user_ip', $page_id, $login)";
// End PNphpBB2 Module
		if ( !$db->sql_query($sql) )
		{
			message_die(CRITICAL_ERROR, 'Error creating new session', '', __LINE__, __FILE__, $sql);
		}
	}

	if ( $user_id != ANONYMOUS )
	{
		$last_visit = ( $userdata['user_session_time'] > 0 ) ? $userdata['user_session_time'] : $current_time; 

// Begin PNphpBB2 Module
//		if (!$admin)
//		{
// End PNphpBB2 Module
			$sql = "UPDATE " . USERS_TABLE . " 
				SET user_session_time = $current_time, user_session_page = $page_id, user_lastvisit = $last_visit
				WHERE user_id = $user_id";
			if ( !$db->sql_query($sql) )
			{
				message_die(CRITICAL_ERROR, 'Error updating last visit time', '', __LINE__, __FILE__, $sql);
			}
// Begin PNphpBB2 Module
//		}
// End PNphpBB2 Module

		$userdata['user_lastvisit'] = $last_visit;

// Begin PNphpBB2 Module
/*
		//
		// Regenerate the auto-login key
		//
		if ($enable_autologin)
		{
			$auto_login_key = dss_rand() . dss_rand();
			
			if (isset($sessiondata['autologinid']) && (string) $sessiondata['autologinid'] != '')
			{
				$sql = 'UPDATE ' . SESSIONS_KEYS_TABLE . "
					SET last_ip = '$user_ip', key_id = '" . md5($auto_login_key) . "', last_login = $current_time
					WHERE key_id = '" . md5($sessiondata['autologinid']) . "'";
			}
			else
			{
				$sql = 'INSERT INTO ' . SESSIONS_KEYS_TABLE . "(key_id, user_id, last_ip, last_login)
					VALUES ('" . md5($auto_login_key) . "', $user_id, '$user_ip', $current_time)";
			}

			if ( !$db->sql_query($sql) )
			{
				message_die(CRITICAL_ERROR, 'Error updating session key', '', __LINE__, __FILE__, $sql);
			}
			
			$sessiondata['autologinid'] = $auto_login_key;
			unset($auto_login_key);
		}
		else
		{
			$sessiondata['autologinid'] = '';
		}

//		$sessiondata['autologinid'] = (!$admin) ? (( $enable_autologin && $sessionmethod == SESSION_METHOD_COOKIE ) ? $auto_login_key : '') : $sessiondata['autologinid'];
*/
// End PNphpBB2 Module
		$sessiondata['userid'] = $user_id;
	}

	$userdata['session_id'] = $session_id;
	$userdata['session_ip'] = $user_ip;
	$userdata['session_user_id'] = $user_id;
	$userdata['session_logged_in'] = $login;
	$userdata['session_page'] = $page_id;
	$userdata['session_start'] = $current_time;
	$userdata['session_time'] = $current_time;
// Begin PNphpBB2 Module
//	$userdata['session_admin'] = $admin;
//	$userdata['session_key'] = $sessiondata['autologinid'];
// End PNphpBB2 Module

	setcookie($cookiename . '_data', serialize($sessiondata), $current_time + 31536000, $cookiepath, $cookiedomain, $cookiesecure);
	setcookie($cookiename . '_sid', $session_id, 0, $cookiepath, $cookiedomain, $cookiesecure);

	$SID = 'sid=' . $session_id;

	return $userdata;
}

//
// Checks for a given user session, tidies session table and updates user
// sessions at each page refresh
//
function session_pagestart($user_ip, $thispage_id)
{
	global $db, $lang, $board_config;
	global $HTTP_COOKIE_VARS, $HTTP_GET_VARS, $SID;

	$cookiename = $board_config['cookie_name'];
	$cookiepath = $board_config['cookie_path'];
	$cookiedomain = $board_config['cookie_domain'];
	$cookiesecure = $board_config['cookie_secure'];

	$current_time = time();
	unset($userdata);

	if ( isset($HTTP_COOKIE_VARS[$cookiename . '_sid']) || isset($HTTP_COOKIE_VARS[$cookiename . '_data']) )
	{
		$sessiondata = isset( $HTTP_COOKIE_VARS[$cookiename . '_data'] ) ? unserialize(stripslashes($HTTP_COOKIE_VARS[$cookiename . '_data'])) : array();
		$session_id = isset( $HTTP_COOKIE_VARS[$cookiename . '_sid'] ) ? $HTTP_COOKIE_VARS[$cookiename . '_sid'] : '';
		$sessionmethod = SESSION_METHOD_COOKIE;
	}
	else
	{
		$sessiondata = array();
		$session_id = ( isset($HTTP_GET_VARS['sid']) ) ? $HTTP_GET_VARS['sid'] : '';
		$sessionmethod = SESSION_METHOD_GET;
	}

	// 
	if (!preg_match('/^[A-Za-z0-9]*$/', $session_id))
	{
		$session_id = '';
	}

	$thispage_id = (int) $thispage_id;

	//
	// Does a session exist?
	//
	if ( !empty($session_id) )
	{
		//
		// session_id exists so go ahead and attempt to grab all
		// data in preparation
		//
		$sql = "SELECT u.*, s.*
			FROM " . SESSIONS_TABLE . " s, " . USERS_TABLE . " u
			WHERE s.session_id = '$session_id'
				AND u.user_id = s.session_user_id";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(CRITICAL_ERROR, 'Error doing DB query userdata row fetch', '', __LINE__, __FILE__, $sql);
		}

		$userdata = $db->sql_fetchrow($result);

		//
		// Did the session exist in the DB?
		//
		if ( isset($userdata['user_id']) )
		{
// Begin PNphpBB2 Module
		 	// OK we found a session, now determine if it should be logged in or not
			// Fix by Allan (Poster on PNphpBB.com)
			/* Adsense interferes with PNphpBB2 session handling.
			 * Adsense agent scans the page to find relevant words
			 * and appears as an anonymous user, forcing the expire
			 * of the session.
			 */
			$is_adsense = isset($HTTP_SERVER_VARS['HTTP_USER_AGENT']) && strstr($_SERVER['HTTP_USER_AGENT'], 'Google');
			if (!pnUserLoggedIn() && $userdata['user_id'] <> ANONYMOUS && !$is_adsense)
			{
			 	 // PN user not logged in so this session should not be logged in.
				 session_end($userdata['session_id'], $userdata['user_id']);
				 unset($sessiondata['userid']);
				 if ( !($userdata = session_begin(ANONYMOUS, $user_ip, $thispage_id, FALSE)) )
				 {
				 		message_die(CRITICAL_ERROR, 'Error creating user session', '', __LINE__, __FILE__, $sql);
				 }
				 init_userprefs($userdata);
				 Return $userdata;
			}
			
			if (pnUserLoggedIn() && $userdata['user_id'] <> pnUserGetVar('uid') )
			{
			 	 // PN user not logged in so this session should not be logged in.
				 session_end($userdata['session_id'], $userdata['user_id']);
				 if ( !($userdata = session_begin(pnUserGetVar('uid'), $user_ip, $thispage_id, FALSE)) )
				 {
				 		message_die(CRITICAL_ERROR, 'Error creating user session', '', __LINE__, __FILE__, $sql);
				 }
			}
// End PNphpBB2 Module

			//
			// Do not check IP assuming equivalence, if IPv4 we'll check only first 24
			// bits ... I've been told (by vHiker) this should alleviate problems with 
			// load balanced et al proxies while retaining some reliance on IP security.
			//
			$ip_check_s = substr($userdata['session_ip'], 0, 6);
			$ip_check_u = substr($user_ip, 0, 6);

			if ($ip_check_s == $ip_check_u)
			{
				$SID = ($sessionmethod == SESSION_METHOD_GET || defined('IN_ADMIN')) ? 'sid=' . $session_id : '';

				//
				// Only update session DB a minute or so after last update
				//
				if ( $current_time - $userdata['session_time'] > 60 )
				{
					// A little trick to reset session_admin on session re-usage
// Begin PNphpBB2 Module
//					$update_admin = (!defined('IN_ADMIN') && $current_time - $userdata['session_time'] > ($board_config['session_length']+60)) ? ', session_admin = 0' : '';
// End PNphpBB2 Module

					$sql = "UPDATE " . SESSIONS_TABLE . " 
						SET session_time = $current_time, session_page = $thispage_id$update_admin
						WHERE session_id = '" . $userdata['session_id'] . "'";
					if ( !$db->sql_query($sql) )
					{
						message_die(CRITICAL_ERROR, 'Error updating sessions table', '', __LINE__, __FILE__, $sql);
					}

					if ( $userdata['user_id'] != ANONYMOUS )
					{
						$sql = "UPDATE " . USERS_TABLE . " 
							SET user_session_time = $current_time, user_session_page = $thispage_id
							WHERE user_id = " . $userdata['user_id'];
						if ( !$db->sql_query($sql) )
						{
							message_die(CRITICAL_ERROR, 'Error updating sessions table', '', __LINE__, __FILE__, $sql);
						}
					}

					session_clean($userdata['session_id']);

					setcookie($cookiename . '_data', serialize($sessiondata), $current_time + 31536000, $cookiepath, $cookiedomain, $cookiesecure);
					setcookie($cookiename . '_sid', $session_id, 0, $cookiepath, $cookiedomain, $cookiesecure);
				}

				// Add the session_key to the userdata array if it is set
				if ( isset($sessiondata['autologinid']) && $sessiondata['autologinid'] != '' )
				{
					$userdata['session_key'] = $sessiondata['autologinid'];
				}

				return $userdata;
			}
		}
	}

	//
	// If we reach here then no (valid) session exists. So we'll create a new one,
	// using the cookie user_id if available to pull basic user prefs.
	//
	$user_id = ( isset($sessiondata['userid']) ) ? intval($sessiondata['userid']) : ANONYMOUS;

	if ( !($userdata = session_begin($user_id, $user_ip, $thispage_id, TRUE)) )
	{
		message_die(CRITICAL_ERROR, 'Error creating user session', '', __LINE__, __FILE__, $sql);
	}

	return $userdata;

}

/**
* Terminates the specified session
* It will delete the entry in the sessions table for this session,
* remove the corresponding auto-login key and reset the cookies
*/
function session_end($session_id, $user_id)
{
	global $db, $lang, $board_config, $userdata;
	global $HTTP_COOKIE_VARS, $HTTP_GET_VARS, $SID;

	$cookiename = $board_config['cookie_name'];
	$cookiepath = $board_config['cookie_path'];
	$cookiedomain = $board_config['cookie_domain'];
	$cookiesecure = $board_config['cookie_secure'];

	$current_time = time();

	if (!preg_match('/^[A-Za-z0-9]*$/', $session_id))
	{
		return;
	}
	
	//
	// Delete existing session
	//
	$sql = 'DELETE FROM ' . SESSIONS_TABLE . " 
		WHERE session_id = '$session_id' 
			AND session_user_id = $user_id";
	if ( !$db->sql_query($sql) )
	{
		message_die(CRITICAL_ERROR, 'Error removing user session', '', __LINE__, __FILE__, $sql);
	}

// Begin PNphpBB2 Module
/*
	//
	// Remove this auto-login entry (if applicable)
	//
	if ( isset($userdata['session_key']) && $userdata['session_key'] != '' )
	{
		$autologin_key = md5($userdata['session_key']);
		$sql = 'DELETE FROM ' . SESSIONS_KEYS_TABLE . '
			WHERE user_id = ' . (int) $user_id . "
				AND key_id = '$autologin_key'";
		if ( !$db->sql_query($sql) )
		{
			message_die(CRITICAL_ERROR, 'Error removing auto-login key', '', __LINE__, __FILE__, $sql);
		}
	}
*/
// End PNphpBB2 Module

	//
	// We expect that message_die will be called after this function,
	// but just in case it isn't, reset $userdata to the details for a guest
	//
	$sql = 'SELECT *
		FROM ' . USERS_TABLE . '
		WHERE user_id = ' . ANONYMOUS;
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, 'Error obtaining user details', '', __LINE__, __FILE__, $sql);
	}
	if ( !($userdata = $db->sql_fetchrow($result)) )
	{
		message_die(CRITICAL_ERROR, 'Error obtaining user details', '', __LINE__, __FILE__, $sql);
	}
	$db->sql_freeresult($result);


	setcookie($cookiename . '_data', '', $current_time - 31536000, $cookiepath, $cookiedomain, $cookiesecure);
	setcookie($cookiename . '_sid', '', $current_time - 31536000, $cookiepath, $cookiedomain, $cookiesecure);

	return true;
}

/**
* Removes expired sessions and auto-login keys from the database
*/
function session_clean($session_id)
{
	global $board_config, $db;

	//
	// Delete expired sessions
	//
	$sql = 'DELETE FROM ' . SESSIONS_TABLE . ' 
		WHERE session_time < ' . (time() - (int) $board_config['session_length']) . " 
			AND session_id <> '$session_id'";
	if ( !$db->sql_query($sql) )
	{
		message_die(CRITICAL_ERROR, 'Error clearing sessions table', '', __LINE__, __FILE__, $sql);
	}

// Begin PNphpBB2 Module
/*
	//
	// Delete expired auto-login keys
	// If max_autologin_time is not set then keys will never be deleted
	// (same behaviour as old 2.0.x session code)
	//
	if (!empty($board_config['max_autologin_time']) && $board_config['max_autologin_time'] > 0)
	{
		$sql = 'DELETE FROM ' . SESSIONS_KEYS_TABLE . '
			WHERE last_login < ' . (time() - (86400 * (int) $board_config['max_autologin_time']));
		$db->sql_query($sql);
	}
*/
// End PNphpBB2 Module

	return true;
}

/**
* Reset all login keys for the specified user
* Called on password changes
*/
// Begin PNphpBB2 Module
/*
function session_reset_keys($user_id, $user_ip)
{
	global $db, $userdata, $board_config;

	$key_sql = ($user_id == $userdata['user_id'] && !empty($userdata['session_key'])) ? "AND key_id != '" . md5($userdata['session_key']) . "'" : '';

	$sql = 'DELETE FROM ' . SESSIONS_KEYS_TABLE . '
		WHERE user_id = ' . (int) $user_id . "
			$key_sql";

	if ( !$db->sql_query($sql) )
	{
		message_die(CRITICAL_ERROR, 'Error removing auto-login keys', '', __LINE__, __FILE__, $sql);
	}

	$where_sql = 'session_user_id = ' . (int) $user_id;
	$where_sql .= ($user_id == $userdata['user_id']) ? " AND session_id <> '" . $userdata['session_id'] . "'" : '';
	$sql = 'DELETE FROM ' . SESSIONS_TABLE . "
		WHERE $where_sql";
	if ( !$db->sql_query($sql) )
	{
		message_die(CRITICAL_ERROR, 'Error removing user session(s)', '', __LINE__, __FILE__, $sql);
	}

	if ( !empty($key_sql) )
	{
		$auto_login_key = dss_rand() . dss_rand();

		$current_time = time();
		
		$sql = 'UPDATE ' . SESSIONS_KEYS_TABLE . "
			SET last_ip = '$user_ip', key_id = '" . md5($auto_login_key) . "', last_login = $current_time
			WHERE key_id = '" . md5($userdata['session_key']) . "'";
		
		if ( !$db->sql_query($sql) )
		{
			message_die(CRITICAL_ERROR, 'Error updating session key', '', __LINE__, __FILE__, $sql);
		}

		// And now rebuild the cookie
		$sessiondata['userid'] = $user_id;
		$sessiondata['autologinid'] = $auto_login_key;
		$cookiename = $board_config['cookie_name'];
		$cookiepath = $board_config['cookie_path'];
		$cookiedomain = $board_config['cookie_domain'];
		$cookiesecure = $board_config['cookie_secure'];

		setcookie($cookiename . '_data', serialize($sessiondata), $current_time + 31536000, $cookiepath, $cookiedomain, $cookiesecure);
		
		$userdata['session_key'] = $auto_login_key;
		unset($sessiondata);
		unset($auto_login_key);
	}
}
*/
// End PNphpBB2 Module

//
// Append $SID to a url. Borrowed from phplib and modified. This is an
// extra routine utilised by the session code above and acts as a wrapper
// around every single URL and form action. If you replace the session
// code you must include this routine, even if it's empty.
//
function append_sid($url, $non_html_amp = false)
{
// Begin PNphpBB2 Module
/*
	global $SID;

	if ( !empty($SID) && !preg_match('#sid=#', $url) )
	{
		$url .= ( ( strpos($url, '?') !== false ) ?  ( ( $non_html_amp ) ? '&' : '&amp;' ) : '?' ) . $SID;
	}
*/	
 	global $SID, $phpEx, $ModName, $HTTP_SERVER_VARS;

	$url = str_replace("." . $phpEx, "", $url);   // Do away with extensions (Should do this before we get here)
	$url = str_replace("?", "&", $url);     // Changes initial ? for &
	$url = str_replace("&amp;", '&', $url); // Replace all &amp;'s with &

  $module_url = "index." . $phpEx . "?name=" . $ModName . "&file=";
  // $module_url = "modules." . $phpEx . "?op=modload&name=" . $ModName . "&file=";
	
	list($admin_file, $admin_module) = explode("_", $url);
	if ($admin_file == "admin")
  {		
	  $url = $module_url . $admin_file . "&pnadmin=" . $url;
	}
	else
	{
 	  $url = $module_url . $url;
	}

  if ( !empty($SID) && !eregi('sid=', $url) && !strstr($HTTP_SERVER_VARS['HTTP_USER_AGENT'] ,'Googlebot') && !strstr($HTTP_SERVER_VARS['HTTP_USER_AGENT'] ,'slurp@inktomi.com;')) 
	{
		$url .= ( ( strpos($url, '?') != false ) ? '&' : '?' ) . $SID;
	}
  
  $url = ( $non_html_amp ) ? $url : str_replace("&", "&amp;", $url);
// End PNphpBB2 Module

	return $url;
}

?>
