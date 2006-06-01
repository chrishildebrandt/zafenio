<?php
/***************************************************************************
 *                              page_header.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_header.php,v 1.2 2006/05/03 18:49:47 adrianc602 Exp $
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

define('HEADER_INC', TRUE);

//
// gzip_compression
//
$do_gzip_compress = FALSE;
// Begin PNphpBB2 Module (Disable GZIP Compression)
/*
if ( $board_config['gzip_compress'] )
{
	$phpver = phpversion();

	$useragent = (isset($HTTP_SERVER_VARS['HTTP_USER_AGENT'])) ? $HTTP_SERVER_VARS['HTTP_USER_AGENT'] : getenv('HTTP_USER_AGENT');

	if ( $phpver >= '4.0.4pl1' && ( strstr($useragent,'compatible') || strstr($useragent,'Gecko') ) )
	{
		if ( extension_loaded('zlib') )
		{
			ob_start('ob_gzhandler');
		}
	}
	else if ( $phpver > '4.0' )
	{
		if ( strstr($HTTP_SERVER_VARS['HTTP_ACCEPT_ENCODING'], 'gzip') )
		{
			if ( extension_loaded('zlib') )
			{
				$do_gzip_compress = TRUE;
				ob_start();
				ob_implicit_flush(0);

				header('Content-Encoding: gzip');
			}
		}
	}
}
*/
// End PNphpBB2 Module (Disable GZIP Compression)

//
// Parse and show the overall header.
//

// Begin PNphpBB2 Module (Daz - Administrator & Moderator Switches)

//
// create switches for Admin stuff - use with care
//
if ($userdata['user_level'] == ADMIN)
{ 
  $template->assign_block_vars('switch_admin', array());
}

//
// create switches for Moderator stuff - use with care
//
if ($userdata['user_level'] == MOD)
{ 
  $template->assign_block_vars('switch_mod', array());
}
// End PNphpBB2 Module

// Begin PNphpBB2 Module (Daz - Admin link anywhere mod)
$admin_link = ( $userdata['user_level'] == ADMIN ) ? '<a href="' . append_sid("admin") . '">' . $lang['Admin_panel'] . '</a>' : '';
// End PNphpBB2 Module

// Begin PNphpBB2 Module
if ($board_config['pnphpbb2_allow_full_page'] == 1 || $board_config['pnphpbb2_full_page'] == 1)
{
 	 if (pnSessionGetVar('fullpage') == 1)
	 {
	 		$template->assign_block_vars('switch_fullpage', array());
      $full_page = true;
	 }
}
// End PNphpBB2 Module

$template->set_filenames(array(
	'overall_header' => ( empty($gen_simple_header) ) ? 'overall_header.tpl' : 'simple_header.tpl')
);

//
// Generate logged in/logged out status
//
if ( $userdata['session_logged_in'] )
{
// Begin PNphpBB2 Module
//	$u_login_logout = 'login.'.$phpEx.'?logout=true&amp;sid=' . $userdata['session_id'];
//	$l_login_logout = $lang['Logout'] . ' [ ' . $userdata['username'] . ' ]';
	$u_login_logout = 'user.' . $phpEx . "?module=NS-User&op=logout";
	$l_login_logout = $lang['Logout'] . ' [ ' . pnVarPrepForDisplay($userdata['username']) . ' ]';
// End PNphpBB2 Module
}
else
{
// Begin PNphpBB2 Module
//	$u_login_logout = 'login.'.$phpEx;
	$u_login_logout = append_sid('login.'.$phpEx);
// Begin PNphpBB2 Module
	$l_login_logout = $lang['Login'];
}

$s_last_visit = ( $userdata['session_logged_in'] ) ? create_date($board_config['default_dateformat'], $userdata['user_lastvisit'], $board_config['board_timezone']) : '';

//
// Get basic (usernames + totals) online
// situation
//
$logged_visible_online = 0;
$logged_hidden_online = 0;
$guests_online = 0;
$online_userlist = '';
$l_online_users = '';

if (defined('SHOW_ONLINE'))
{

	$user_forum_sql = ( !empty($forum_id) ) ? "AND s.session_page = " . intval($forum_id) : '';
	$sql = "SELECT u.username, u.user_id, u.user_allow_viewonline, u.user_level, s.session_logged_in, s.session_ip
		FROM ".USERS_TABLE." u, ".SESSIONS_TABLE." s
		WHERE u.user_id = s.session_user_id
			AND s.session_time >= ".( time() - 300 ) . "
			$user_forum_sql
		ORDER BY u.username ASC, s.session_ip ASC";
	if( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain user/online information', '', __LINE__, __FILE__, $sql);
	}

	$userlist_ary = array();
	$userlist_visible = array();

	$prev_user_id = 0;
	$prev_user_ip = $prev_session_ip = '';

	while( $row = $db->sql_fetchrow($result) )
	{
		// User is logged in and therefor not a guest
		if ( $row['session_logged_in'] )
		{
			// Skip multiple sessions for one user
			if ( $row['user_id'] != $prev_user_id )
			{
				$style_color = '';
				if ( $row['user_level'] == ADMIN )
				{
// Begin PNphpBB2 Module
//					$row['username'] = '<b>' . $row['username'] . '</b>';
//					$style_color = 'style="color:#' . $theme['fontcolor3'] . '"';
					$row['username'] = '<b>' . pnVarPrepForDisplay($row['username']) . '</b>';
					$style_color = 'style="color:#' . $phpbb_theme['fontcolor3'] . '"';
// End PNphpBB2 Module
				}
				else if ( $row['user_level'] == MOD )
				{
// Begin PNphpBB2 Module
//					$row['username'] = '<b>' . $row['username'] . '</b>';
//					$style_color = 'style="color:#' . $theme['fontcolor2'] . '"';
					$row['username'] = '<b>' . pnVarPrepForDisplay($row['username']) . '</b>';
					$style_color = 'style="color:#' . $phpbb_theme['fontcolor2'] . '"';
// End PNphpBB2 Module
				}

				if ( $row['user_allow_viewonline'] )
				{
					$user_online_link = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '"' . $style_color .'>' . $row['username'] . '</a>';
					$logged_visible_online++;
				}
				else
				{
					$user_online_link = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '"' . $style_color .'><i>' . $row['username'] . '</i></a>';
					$logged_hidden_online++;
				}

				if ( $row['user_allow_viewonline'] || $userdata['user_level'] == ADMIN )
				{
					$online_userlist .= ( $online_userlist != '' ) ? ', ' . $user_online_link : $user_online_link;
				}
			}

			$prev_user_id = $row['user_id'];
		}
		else
		{
			// Skip multiple sessions for one user
			if ( $row['session_ip'] != $prev_session_ip )
			{
				$guests_online++;
			}
		}

		$prev_session_ip = $row['session_ip'];
	}
	$db->sql_freeresult($result);

	if ( empty($online_userlist) )
	{
		$online_userlist = $lang['None'];
	}
	$online_userlist = ( ( isset($forum_id) ) ? $lang['Browsing_forum'] : $lang['Registered_users'] ) . ' ' . $online_userlist;

	$total_online_users = $logged_visible_online + $logged_hidden_online + $guests_online;

	if ( $total_online_users > $board_config['record_online_users'])
	{
		$board_config['record_online_users'] = $total_online_users;
		$board_config['record_online_date'] = time();

		$sql = "UPDATE " . CONFIG_TABLE . "
			SET config_value = '$total_online_users'
			WHERE config_name = 'record_online_users'";
		if ( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not update online user record (nr of users)', '', __LINE__, __FILE__, $sql);
		}

		$sql = "UPDATE " . CONFIG_TABLE . "
			SET config_value = '" . $board_config['record_online_date'] . "'
			WHERE config_name = 'record_online_date'";
		if ( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not update online user record (date)', '', __LINE__, __FILE__, $sql);
		}
	}

	if ( $total_online_users == 0 )
	{
		$l_t_user_s = $lang['Online_users_zero_total'];
	}
	else if ( $total_online_users == 1 )
	{
		$l_t_user_s = $lang['Online_user_total'];
	}
	else
	{
		$l_t_user_s = $lang['Online_users_total'];
	}

	if ( $logged_visible_online == 0 )
	{
		$l_r_user_s = $lang['Reg_users_zero_total'];
	}
	else if ( $logged_visible_online == 1 )
	{
		$l_r_user_s = $lang['Reg_user_total'];
	}
	else
	{
		$l_r_user_s = $lang['Reg_users_total'];
	}

	if ( $logged_hidden_online == 0 )
	{
		$l_h_user_s = $lang['Hidden_users_zero_total'];
	}
	else if ( $logged_hidden_online == 1 )
	{
		$l_h_user_s = $lang['Hidden_user_total'];
	}
	else
	{
		$l_h_user_s = $lang['Hidden_users_total'];
	}

	if ( $guests_online == 0 )
	{
		$l_g_user_s = $lang['Guest_users_zero_total'];
	}
	else if ( $guests_online == 1 )
	{
		$l_g_user_s = $lang['Guest_user_total'];
	}
	else
	{
		$l_g_user_s = $lang['Guest_users_total'];
	}

	$l_online_users = sprintf($l_t_user_s, $total_online_users);
	$l_online_users .= sprintf($l_r_user_s, $logged_visible_online);
	$l_online_users .= sprintf($l_h_user_s, $logged_hidden_online);
	$l_online_users .= sprintf($l_g_user_s, $guests_online);
}

//
// Obtain number of new private messages
// if user is logged in
//
if ( ($userdata['session_logged_in']) && (empty($gen_simple_header)) )
{
// Begin PNphpBB2 Module
	if ($board_config['pnphpbb2_pn_pm'])
	{
		$column = &$pntable['priv_msgs_column'];
		$sql = "SELECT count(*) FROM $pntable[priv_msgs] WHERE $column[read_msg] ='0' and $column[to_userid]=" . $userdata['user_id'];
		if ( $result = $db->sql_query($sql) )
		{
		 	 list($unread) = $db->sql_fetchrow($result);
		}
		
		$sql = "SELECT count(*) FROM $pntable[priv_msgs] WHERE $column[to_userid]=" . pnUserGetVar('uid');
		if ( $result = $db->sql_query($sql) )
		{
		 	 list($total) = $db->sql_fetchrow($result);
		}

		$s_privmsg_new = 0;
		$icon_pm = $images['pm_new_msg'];

		if ($unread > 0)
		{
		   $l_message_unread = ( $unread == 1 ) ? $lang['Unread_pm'] : $lang['Unread_pms'];
			 $l_privmsgs_text_unread = sprintf($l_message_unread, $unread);
			 $l_message_new = ( $unread == 1 ) ? $lang['New_pm'] : $lang['New_pms'];
			 $l_privmsgs_text = sprintf($l_message_new, $unread);

		 }
		 else
		 {
		   $l_privmsgs_text = $lang['No_new_pm'];

			 $s_privmsg_new = 0;
			 $icon_pm = $images['pm_no_new_msg'];
		}
	}
	else
	{
	if ( $userdata['user_new_privmsg'] )
	{
		$l_message_new = ( $userdata['user_new_privmsg'] == 1 ) ? $lang['New_pm'] : $lang['New_pms'];
		$l_privmsgs_text = sprintf($l_message_new, $userdata['user_new_privmsg']);

		if ( $userdata['user_last_privmsg'] > $userdata['user_lastvisit'] )
		{
			$sql = "UPDATE " . USERS_TABLE . "
				SET user_last_privmsg = " . $userdata['user_lastvisit'] . "
				WHERE user_id = " . $userdata['user_id'];
			if ( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, 'Could not update private message new/read time for user', '', __LINE__, __FILE__, $sql);
			}

			$s_privmsg_new = 1;
			$icon_pm = $images['pm_new_msg'];
		}
		else
		{
			$s_privmsg_new = 0;
			$icon_pm = $images['pm_new_msg'];
		}
	}
	else
	{
		$l_privmsgs_text = $lang['No_new_pm'];

		$s_privmsg_new = 0;
		$icon_pm = $images['pm_no_new_msg'];
	}

	if ( $userdata['user_unread_privmsg'] )
	{
		$l_message_unread = ( $userdata['user_unread_privmsg'] == 1 ) ? $lang['Unread_pm'] : $lang['Unread_pms'];
		$l_privmsgs_text_unread = sprintf($l_message_unread, $userdata['user_unread_privmsg']);
	}
	else
	{
		$l_privmsgs_text_unread = $lang['No_unread_pm'];
	}
	}
// Begin PNphpBB2 Module
}
else
{
	$icon_pm = $images['pm_no_new_msg'];
	$l_privmsgs_text = $lang['Login_check_pm'];
	$l_privmsgs_text_unread = '';
	$s_privmsg_new = 0;
}

//
// Generate HTML required for Mozilla Navigation bar
//
if (!isset($nav_links))
{
	$nav_links = array();
}

$nav_links_html = '';
$nav_link_proto = '<link rel="%s" href="%s" title="%s" />' . "\n";
while( list($nav_item, $nav_array) = @each($nav_links) )
{
	if ( !empty($nav_array['url']) )
	{
		$nav_links_html .= sprintf($nav_link_proto, $nav_item, append_sid($nav_array['url']), $nav_array['title']);
	}
	else
	{
		// We have a nested array, used for items like <link rel='chapter'> that can occur more than once.
		while( list(,$nested_array) = each($nav_array) )
		{
			$nav_links_html .= sprintf($nav_link_proto, $nav_item, $nested_array['url'], $nested_array['title']);
		}
	}
}

// Begin PNphpBB2 Module - Batpuppy PNTheme
$theme_name = ((pnUserLoggedIn()) && (pnConfigGetVar('theme_change') != 1)) ? pnUserGetTheme() : pnConfigGetVar('Default_Theme');
$fthemepath = $phpbb_theme['template_name'];
$imagepath = $phpbb_root_path . "templates/" . $phpbb_theme['template_name'] . "/images/";

$logosize[3] = "width=\"137\" height=\"47\"";
$minisize = "width=\"13\" height=\"13\"";

if ( @is_dir($imagepath . $theme_name) )
{  
	 if (is_file($imagepath . $theme_name . "/logo_small.gif"))
	 {
	 		$logosize = getimagesize($imagepath . $theme_name . "/logo_small.gif");
	 }
	 if ( @is_file($imagepath . $theme_name . "/icon_mini_faq.gif") )
	 {
	 		$minisize = getimagesize($imagepath . $theme_name . "/icon_mini_faq.gif");
	 }
}
else
{
 	 if ( @is_file($imagepath . "/logo_small.gif") )
	 {
	 		$logosize = getimagesize($imagepath . "/logo_small.gif");
	 }
	 if ( @is_file($imagepath . "/icon_mini_faq.gif"))
	 {
	 		$minisize = getimagesize($imagepath . "/icon_mini_faq.gif");
	 }
} 
// End PNphpBB2 Module - Batpuppy PNTheme

// Format Timezone. We are unable to use array_pop here, because of PHP3 compatibility
$l_timezone = explode('.', $board_config['board_timezone']);
$l_timezone = (count($l_timezone) > 1 && $l_timezone[count($l_timezone)-1] != 0) ? $lang[sprintf('%.1f', $board_config['board_timezone'])] : $lang[number_format($board_config['board_timezone'])];

// Begin PNphpBB2 Module
// Debug code for sessions
/*
 if (pnSecAuthAction(1, 'PNphpBB2::', '::', ACCESS_ADMIN) && DEBUG)
 {
 	 $sql = "SELECT * FROM " . SESSIONS_TABLE . " ORDER BY session_time DESC";
	 $result = $db->sql_query($sql);
	 if ($result)
	 {
 	 		$sessions  = "<table width=\"100%\" cellspacing=\"1\" cellpadding=\"1\" border=\"1\">";
	 		$sessions .= "<tr><td>Session ID</td\><td>Session User ID</td><td>Session Start</td><td>Session Time</td><td>Session IP</td><td>Session Page</td><td>Session Logged In</td></tr>";

	 		while (($row = $db->sql_fetchrow($result)))
	 		{
         $sessions .= "<tr><td>" . $row['session_id'] . "</td><td>" . $row['session_user_id'] . "</td><td>" . $row['session_start'] . "</td><td>" . $row['session_time'] . "</td><td>" . $row['session_ip'] . "</td><td>" . $row['session_page'] . "</td><td>" . $row['session_logged_in'] . "</td></tr>";
	 		}
	 		$sessions .= "</table>";
	 }
 }
*/
// Debug code for image paths
/*
 	 		$sessions  = "<table width=\"100%\" cellspacing=\"1\" cellpadding=\"1\" border=\"1\">";
	 		$sessions .= "<tr><td>Path varible name</td\><td>Value</td></tr>";

			$sessions .= "<tr><td>board_config['image_lang']</td><td>" . $board_config['image_lang'] . "</td><td></tr>";
      $sessions .= "<tr><td>board_config['path_images']</td><td>" . $board_config['path_images'] . "</td><td></tr>";
			$sessions .= "<tr><td>board_config['path_images_lang']</td><td>" . $board_config['path_images_lang'] . "</td><td></tr>";
			$sessions .= "<tr><td>board_config['path_posticons']</td><td>" . $board_config['path_posticons'] . "</td><td></tr>";
			$sessions .= "<tr><td>board_config['path_ranks']</td><td>" . $board_config['path_ranks'] . "</td><td></tr>";
			$sessions .= "<tr><td>board_config['path_cellpics']</td><td>" . $board_config['path_cellpics'] . "</td><td></tr>";
			$sessions .= "<tr><td>board_config['style_name']</td><td>" . $board_config['style_name'] . "</td><td></tr>";
			
	 		$sessions .= "</table>";
*/			
// End PNphpBB2 Module

//
// The following assigns all _common_ variables that may be used at any point
// in a template.
//

// Begin PNphpBB2 Module
$fullpage = pnSessionGetVar('fullpage');

$info[title] = $page_title;
// End PNphpBB2 Module

$template->assign_vars(array(
/* Begin PNphpBB2 Module */
 	'SESSIONS' => $sessions,
	'CSS_PNTHEME' => $board_config['theme_name'],
 	'CSS_PNPHPBB' => $board_config['style_name'],
/* End PNphpBB2 Module */
	'SITENAME' => $board_config['sitename'],
	'SITE_DESCRIPTION' => $board_config['site_desc'],
	'PAGE_TITLE' => $page_title,
	'LAST_VISIT_DATE' => sprintf($lang['You_last_visit'], $s_last_visit),
	'CURRENT_TIME' => sprintf($lang['Current_time'], create_date($board_config['default_dateformat'], time(), $board_config['board_timezone'])),
	'TOTAL_USERS_ONLINE' => $l_online_users,
	'LOGGED_IN_USER_LIST' => $online_userlist,
	'RECORD_USERS' => sprintf($lang['Record_online_users'], $board_config['record_online_users'], create_date($board_config['default_dateformat'], $board_config['record_online_date'], $board_config['board_timezone'])),
	'PRIVATE_MESSAGE_INFO' => $l_privmsgs_text,
	'PRIVATE_MESSAGE_INFO_UNREAD' => $l_privmsgs_text_unread,
	'PRIVATE_MESSAGE_NEW_FLAG' => $s_privmsg_new,

	'PRIVMSG_IMG' => $icon_pm,

	'L_USERNAME' => $lang['Username'],
	'L_PASSWORD' => $lang['Password'],
	'L_LOGIN_LOGOUT' => $l_login_logout,
	'L_LOGIN' => $lang['Login'],
	'L_LOG_ME_IN' => $lang['Log_me_in'],
	'L_AUTO_LOGIN' => $lang['Log_me_in'],
	'L_INDEX' => sprintf($lang['Forum_Index'], $board_config['sitename']),
	'L_REGISTER' => $lang['Register'],
	'L_PROFILE' => $lang['Profile'],
	'L_SEARCH' => $lang['Search'],
	'L_PRIVATEMSGS' => $lang['Private_Messages'],
	'L_WHO_IS_ONLINE' => $lang['Who_is_Online'],
	'L_MEMBERLIST' => $lang['Memberlist'],
	'L_FAQ' => $lang['FAQ'],
	'L_USERGROUPS' => $lang['Usergroups'],
	'L_SEARCH_NEW' => $lang['Search_new'],
	'L_SEARCH_UNANSWERED' => $lang['Search_unanswered'],
	'L_SEARCH_SELF' => $lang['Search_your_posts'],
/* Begin PNphpBB2 Module */
/*	'L_WHOSONLINE_ADMIN' => sprintf($lang['Admin_online_color'], '<span style="color:#' . $theme['fontcolor3'] . '">', '</span>'), */
/*	'L_WHOSONLINE_MOD' => sprintf($lang['Mod_online_color'], '<span style="color:#' . $theme['fontcolor2'] . '">', '</span>'), */
	'L_WHOSONLINE_ADMIN' => sprintf($lang['Admin_online_color'], '<span style="color:#' . $phpbb_theme['fontcolor3'] . '">', '</span>'),
	'L_WHOSONLINE_MOD' => sprintf($lang['Mod_online_color'], '<span style="color:#' . $phpbb_theme['fontcolor2'] . '">', '</span>'),
	'L_MIN_MAX_IMAGE' => ($fullpage == 1) ? "icon_mini_min.gif" : "icon_mini_max.gif",
	'L_MIN_MAX' => ($fullpage == 1) ? $lang['PNphpBB2_Minimize'] : $lang['PNphpBB2_Maximize'],
	'L_SUBFORUM_IMAGE' => ($subforum == 1) ? "icon_subforum_off.gif" : "icon_subforum_on.gif",
	'L_SUBFORUM' => ($subforum == 1) ? $lang['PNphpBB2_SubForum_Off'] : $lang['PNphpBB2_SubForum_On'],
	'L_ADMIN_INFO' => $lang['Admin_panel'],
/* End PNphpBB2 Module */

	'U_SEARCH_UNANSWERED' => append_sid('search.'.$phpEx.'?search_id=unanswered'),
	'U_SEARCH_SELF' => append_sid('search.'.$phpEx.'?search_id=egosearch'),
	'U_SEARCH_NEW' => append_sid('search.'.$phpEx.'?search_id=newposts'),
	'U_INDEX' => append_sid('index.'.$phpEx),
/* Begin PNphpBB2 Module */
/*	'U_REGISTER' => append_sid('profile.'.$phpEx.'?mode=register'), */
	'U_REGISTER' => 'user.' . $phpEx . '?op=check_age&module=NS-NewUser',
	'ADMIN_LINK' => $admin_link,
	'U_MIN_MAX' => ($fullpage == 1) ? append_sid('index.'.$phpEx.'?minmax=0') : append_sid('index.'.$phpEx.'?minmax=1'),
	'U_SUBFORUM' => ($subforum == 1) ? append_sid('index.'.$phpEx.'?subforum=0') : append_sid('index.'.$phpEx.'?subforum=1'),
	'U_ADMIN_LINK' => append_sid("admin"),
/* End PNphpBB2 Module */
	'U_PROFILE' => append_sid('profile.'.$phpEx.'?mode=editprofile'),
/* Begin PNphpBB2 Module */
/*	'U_PRIVATEMSGS' => append_sid('privmsg.'.$phpEx.'?folder=inbox'), */
	'U_PRIVATEMSGS' => (($board_config['pnphpbb2_pn_pm']) ? 'modules.'.$phpEx.'?op=modload&name=Messages&file=index' : append_sid('privmsg.'.$phpEx.'?folder=inbox')),
/* End PNphpBB2 Module */
	'U_PRIVATEMSGS_POPUP' => append_sid('privmsg.'.$phpEx.'?mode=newpm'),
	'U_SEARCH' => append_sid('search.'.$phpEx),
	'U_MEMBERLIST' => append_sid('memberlist.'.$phpEx),
	'U_MODCP' => append_sid('modcp.'.$phpEx),
	'U_FAQ' => append_sid('faq.'.$phpEx),
	'U_VIEWONLINE' => append_sid('viewonline.'.$phpEx),
/* Begin PNphpBB2 Module */
/*	'U_LOGIN_LOGOUT' => append_sid($u_login_logout), */
	'U_LOGIN_LOGOUT' => $u_login_logout,
/* End PNphpBB2 Module */
	'U_GROUP_CP' => append_sid('groupcp.'.$phpEx),

	'S_CONTENT_DIRECTION' => $lang['DIRECTION'],
	'S_CONTENT_ENCODING' => $lang['ENCODING'],
	'S_CONTENT_DIR_LEFT' => $lang['LEFT'],
	'S_CONTENT_DIR_RIGHT' => $lang['RIGHT'],
/* Begin PNphpBB2 Module */
/*	'S_TIMEZONE' => sprintf($lang['All_times'], $lang[number_format($board_config['board_timezone'])]), */
	'S_TIMEZONE' => sprintf($lang['All_times'], $l_timezone),
/* End PNphpBB2 Module */
	'S_LOGIN_ACTION' => append_sid('login.'.$phpEx),

/* Begin PNphpBB2 Module - Batpuppy PNTheme */
/*
	'T_HEAD_STYLESHEET' => $theme['head_stylesheet'],
	'T_BODY_BACKGROUND' => $theme['body_background'],
	'T_BODY_BGCOLOR' => '#'.$theme['body_bgcolor'],
	'T_BODY_TEXT' => '#'.$theme['body_text'],
	'T_BODY_LINK' => '#'.$theme['body_link'],
	'T_BODY_VLINK' => '#'.$theme['body_vlink'],
	'T_BODY_ALINK' => '#'.$theme['body_alink'],
	'T_BODY_HLINK' => '#'.$theme['body_hlink'],
	'T_TR_COLOR1' => '#'.$theme['tr_color1'],
	'T_TR_COLOR2' => '#'.$theme['tr_color2'],
	'T_TR_COLOR3' => '#'.$theme['tr_color3'],
	'T_TR_CLASS1' => $theme['tr_class1'],
	'T_TR_CLASS2' => $theme['tr_class2'],
	'T_TR_CLASS3' => $theme['tr_class3'],
	'T_TH_COLOR1' => '#'.$theme['th_color1'],
	'T_TH_COLOR2' => '#'.$theme['th_color2'],
	'T_TH_COLOR3' => '#'.$theme['th_color3'],
	'T_TH_CLASS1' => $theme['th_class1'],
	'T_TH_CLASS2' => $theme['th_class2'],
	'T_TH_CLASS3' => $theme['th_class3'],
	'T_TD_COLOR1' => '#'.$theme['td_color1'],
	'T_TD_COLOR2' => '#'.$theme['td_color2'],
	'T_TD_COLOR3' => '#'.$theme['td_color3'],
	'T_TD_CLASS1' => $theme['td_class1'],
	'T_TD_CLASS2' => $theme['td_class2'],
	'T_TD_CLASS3' => $theme['td_class3'],
	'T_FONTFACE1' => $theme['fontface1'],
	'T_FONTFACE2' => $theme['fontface2'],
	'T_FONTFACE3' => $theme['fontface3'],
	'T_FONTSIZE1' => $theme['fontsize1'],
	'T_FONTSIZE2' => $theme['fontsize2'],
	'T_FONTSIZE3' => $theme['fontsize3'],
	'T_FONTCOLOR1' => '#'.$theme['fontcolor1'],
	'T_FONTCOLOR2' => '#'.$theme['fontcolor2'],
	'T_FONTCOLOR3' => '#'.$theme['fontcolor3'],
	'T_SPAN_CLASS1' => $theme['span_class1'],
	'T_SPAN_CLASS2' => $theme['span_class2'],
	'T_SPAN_CLASS3' => $theme['span_class3'],
*/
	'T_MODNAME' => $ModName,
	'T_THEME_NAME' => $phpbb_theme['template_name'],
	'T_HEAD_STYLESHEET' => $phpbb_theme['head_stylesheet'],
	'T_BODY_BACKGROUND' => $phpbb_theme['body_background'],
	'T_BODY_BGCOLOR' => '#'.$phpbb_theme['body_bgcolor'],
	'T_BODY_TEXT' => '#'.$phpbb_theme['body_text'],
	'T_BODY_LINK' => '#'.$phpbb_theme['body_link'],
	'T_BODY_VLINK' => '#'.$phpbb_theme['body_vlink'],
	'T_BODY_ALINK' => '#'.$phpbb_theme['body_alink'],
	'T_BODY_HLINK' => '#'.$phpbb_theme['body_hlink'],
	'T_TR_COLOR1' => '#'.$phpbb_theme['tr_color1'],
	'T_TR_COLOR2' => '#'.$phpbb_theme['tr_color2'],
	'T_TR_COLOR3' => '#'.$phpbb_theme['tr_color3'],
	'T_TR_CLASS1' => $phpbb_theme['tr_class1'],
	'T_TR_CLASS2' => $phpbb_theme['tr_class2'],
	'T_TR_CLASS3' => $phpbb_theme['tr_class3'],
	'T_TH_COLOR1' => '#'.$phpbb_theme['th_color1'],
	'T_TH_COLOR2' => '#'.$phpbb_theme['th_color2'],
	'T_TH_COLOR3' => '#'.$phpbb_theme['th_color3'],
	'T_TH_CLASS1' => $phpbb_theme['th_class1'],
	'T_TH_CLASS2' => $phpbb_theme['th_class2'],
	'T_TH_CLASS3' => $phpbb_theme['th_class3'],
	'T_TD_COLOR1' => '#'.$phpbb_theme['td_color1'],
	'T_TD_COLOR2' => '#'.$phpbb_theme['td_color2'],
	'T_TD_COLOR3' => '#'.$phpbb_theme['td_color3'],
	'T_TD_CLASS1' => $phpbb_theme['td_class1'],
	'T_TD_CLASS2' => $phpbb_theme['td_class2'],
	'T_TD_CLASS3' => $phpbb_theme['td_class3'],
	'T_FONTFACE1' => $phpbb_theme['fontface1'],
	'T_FONTFACE2' => $phpbb_theme['fontface2'],
	'T_FONTFACE3' => $phpbb_theme['fontface3'],
	'T_FONTSIZE1' => $phpbb_theme['fontsize1'],
	'T_FONTSIZE2' => $phpbb_theme['fontsize2'],
	'T_FONTSIZE3' => $phpbb_theme['fontsize3'],
	'T_FONTCOLOR1' => '#'.$phpbb_theme['fontcolor1'],
	'T_FONTCOLOR2' => '#'.$phpbb_theme['fontcolor2'],
	'T_FONTCOLOR3' => '#'.$phpbb_theme['fontcolor3'],
	'T_SPAN_CLASS1' => $phpbb_theme['span_class1'],
	'T_SPAN_CLASS2' => $phpbb_theme['span_class2'],
	'T_SPAN_CLASS3' => $phpbb_theme['span_class3'],
  
	'THEME_IMAGES' => $board_config['image_sub_path'],
	'L_FORUM' => $lang['Forum'],
	'LOGOSIZE' => $logosize[3], 
	'MINISIZE' => $minisize[3], 
/* End PNphpBB2 Module - Batpuppy PNTheme */	

	'NAV_LINKS' => $nav_links_html)
);

// Begin PNphpBB2 Module
if ( $board_config['pnphpbb2_logo_on'] == 1 )
{
	$template->assign_block_vars('switch_logo_on', array());
}

if (@is_readable($board_config['template_path'] . '/forum_header.tpl'))
{
  $template->set_filenames(array(
	  'forum_header' => 'forum_header.tpl')
  );

  $template->assign_var_from_handle('FORUM_HEADER', 'forum_header');
}

if ( $board_config['pnphpbb2_allow_full_page'] == 1 )
{
	$template->assign_block_vars('switch_allow_full_page', array());
}
if ( $board_config['pnphpbb2_allow_sub_change'] == 1 )
{
	$template->assign_block_vars('switch_allow_sub_change', array());
}

//if ( empty($board_config['privmsg_disable']) )
//{
// 	 $template->assign_block_vars('switch_privmsg', array());
//}
// End PNphpBB2 Module


//
// Login box?
//
if ( !$userdata['session_logged_in'] )
{
	$template->assign_block_vars('switch_user_logged_out', array());
// Begin PNphpBB2 Module
/*
	//
	// Allow autologin?
	//
	if (!isset($board_config['allow_autologin']) || $board_config['allow_autologin'] )
	{
		$template->assign_block_vars('switch_allow_autologin', array());
		$template->assign_block_vars('switch_user_logged_out.switch_allow_autologin', array());
	}
*/
// End PNphpBB2 Module
}
else
{
	$template->assign_block_vars('switch_user_logged_in', array());

	if ( !empty($userdata['user_popup_pm']) )
	{
		$template->assign_block_vars('switch_enable_pm_popup', array());
	}
}

// Add no-cache control for cookies if they are set
//$c_no_cache = (isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_sid']) || isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_data'])) ? 'no-cache="set-cookie", ' : '';

// Work around for "current" Apache 2 + PHP module which seems to not
// cope with private cache control setting
if (!empty($HTTP_SERVER_VARS['SERVER_SOFTWARE']) && strstr($HTTP_SERVER_VARS['SERVER_SOFTWARE'], 'Apache/2'))
{
	header ('Cache-Control: no-cache, pre-check=0, post-check=0');
}
else
{
	header ('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
}
header ('Expires: 0');
header ('Pragma: no-cache');

// Begin PNphpBB2 Module
global $additional_header; 
$additional_header[] = "<link rel=\"StyleSheet\" href=\"".$board_config['style_name']."\" type=\"text/css\">\n";

if (empty($gen_simple_header) && empty($full_page))
{
	include("header.php");
}
// End PNphpBB2 Module

// Begin PNphpBB2 Categories Hierarchie Mod
if (!isset($board_config['sub_forum']) )
{
	$sqlw = "insert into ".CONFIG_TABLE." (config_name,config_value) VALUES('sub_forum','1')";
	if ( !($resultw = $db->sql_query($sqlw)) ) message_die(GENERAL_ERROR, 'Could not add key sub_forum in config table', '', __LINE__, __FILE__, $sql);
}

$sub_forum = ($board_config['pnphpbb2_allow_sub_change'] == 1) ? pnSessionGetVar('subforum') : $board_config['pnphpbb2_sub_forum'];

$template->assign_vars(array(
	'NAV_SEPARATOR' => $nav_separator,
	)
);
// End PNphpBB2 Categories Hierarchie Mod

// Begin PNphpBB2 Split Announcements/Stickys
// split global announce
$switch_split_global_announce = isset($lang['Post_global_announcement']);
if ( isset($lang['Post_global_announcement']) && !isset( $board_config['split_global_announce'] ) )
{
	$sqlw = "insert into ".CONFIG_TABLE." (config_name,config_value) VALUES('split_global_announce','" . $switch_split_global_announce . "')";
	if ( !($resultw = $db->sql_query($sqlw)) ) message_die(GENERAL_ERROR, 'Could not add key split_annonce in config table', '', __LINE__, __FILE__, $sql);
	$board_config['split_global_announce'] = $switch_split_global_announce;
}
if ( isset($lang['Post_global_announcement']) && isset( $board_config['split_global_announce'] ) )
{
	$switch_split_global_announce = $board_config['split_global_announce'];
}

// split standard announce
$switch_split_announce = true;
if ( !isset( $board_config['split_announce'] ) )
{
	$sqlw = "insert into ".CONFIG_TABLE." (config_name,config_value) VALUES('split_announce','" . $switch_split_announce . "')";
	if ( !($resultw = $db->sql_query($sqlw)) ) message_die(GENERAL_ERROR, 'Could not add key split_annonce in config table', '', __LINE__, __FILE__, $sql);
	$board_config['split_announce'] = $switch_split_announce;
}
if ( isset( $board_config['split_announce'] ) )
{
	$switch_split_announce = $board_config['split_announce'];
}

// split sticky
$switch_split_sticky = true;
if ( !isset( $board_config['split_sticky'] ) )
{
	$sqlw = "insert into ".CONFIG_TABLE." (config_name,config_value) VALUES('split_sticky','" . $switch_split_sticky . "')";
	if ( !($resultw = $db->sql_query($sqlw)) ) message_die(GENERAL_ERROR, 'Could not add key split_sticky in config table', '', __LINE__, __FILE__, $sql);
	$board_config['split_sticky'] = $switch_split_sticky;
}
if ( isset( $board_config['split_sticky'] ) )
{
	$switch_split_sticky = $board_config['split_sticky'];
}
// End PNphpBB2 Split Announcements/Stickys

// Begin PNphpBB2 Module Return to Postnuke from phpBB2 template
if ( $fullpage )
{
	$template->assign_block_vars('switch_pn_link', array());

	$template->assign_vars(array(
		'PNPHPBB2_PN_LINK' => $board_config['pnphpbb2_pn_link'],
		'PNPHPBB2_PN_TEXT' => $board_config['pnphpbb2_pn_text'])
	);
   
	if (!defined('PNPHPBB_TEMPLATE'))
  {
		$template->set_filenames(array(
			'pnphpbb2_navbar' => 'navbar.tpl')
		);
  	$template->pparse('pnphpbb2_navbar');
  }
}
// End PNphpBB2 Module Return to Postnuke from phpBB2 template

$template->pparse('overall_header');

?>