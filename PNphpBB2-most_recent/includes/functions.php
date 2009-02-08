<?php
/***************************************************************************
 *                               functions.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: functions.php 192 2007-01-20 15:17:44Z kronos $
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
 *
 ***************************************************************************/
// Begin PNphpBB2 Categories Hierarchie Mod
$nav_separator = "&nbsp;&raquo;&nbsp;";
$nav_link_active = true;

// get the depth level
function get_max_depth($cat_id)
{
	global $db;
	if ($cat_id < 0) $cat_id = 0;
	$local_depth = 0;
	$sql = "select * from " . CATEGORIES_TABLE . " where cat_main = $cat_id";
	if( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query categorie parm', '', __LINE__, __FILE__, $sql);
	while ( $row = $db->sql_fetchrow($result) )
	{
		$branch_depth = get_max_depth( $row['cat_id'] );
		if ( $cat_id > 0 ) $branch_depth++;
		if ( $branch_depth > $local_depth ) $local_depth = $branch_depth;
	}
	return $local_depth;
}

// build the cat list sorted
function get_auth_cat_order(&$cat_row, &$cat_list, $cat_main=0, $level=0)
{
	global $db;

	// read daughter cats
	$sql = "select * from " . CATEGORIES_TABLE . " where cat_main = $cat_main order by cat_order, cat_id";
	if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't access list of Categories", "", __LINE__, __FILE__, $sql);
	while ( $row = $db->sql_fetchrow($result) ) $rowlevel[] = $row;
	// push and get the sub- daughter cat
	for ($i = 0; $i < count($rowlevel); $i++ )
	{
		if ( in_array( $rowlevel[$i]['cat_id'], $cat_list ) )
		{
			$rowlevel[$i]['level'] = $level;
			$cat_row[] = $rowlevel[$i];
			get_auth_cat_order( $cat_row, $cat_list, $rowlevel[$i]['cat_id'], ($level+1) );
		}
	}
}

// build the auth cat list
function get_auth_cat()
{
	global $db, $userdata;

	// get the cat id of all auth forums
	$catlist = array();
	$sql = "select * from " . FORUMS_TABLE;
	if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, "Couldn't obtain forum list.", "", __LINE__, __FILE__, $sql);
	while ( $row = $db->sql_fetchrow($result) )
	{
		$is_auth = array();
		$is_auth = auth(AUTH_ALL, $row['forum_id'], $userdata);
		if ( $is_auth['auth_view'] ) $catlist[] = $row['cat_id'];
	}

	// get the mother cat
	$t_cat = $catlist;
	while ( count($t_cat) > 0 )
	{
		$s_cat = implode( ', ', $t_cat );
		$t_cat = array();
		$sql = "select * from " . CATEGORIES_TABLE . " where cat_id in ($s_cat)";
		if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, "Couldn't obtain category list.", "", __LINE__, __FILE__, $sql);
		while ( $row = $db->sql_fetchrow($result) )
		{
			if ( !in_array($row['cat_main'], $catlist) )
			{
				$catlist[] = $row['cat_main'];
				$t_cat[] =  $row['cat_main'];
			}
		}
	}

	// read cat sorted
	$catrows = array();
	get_auth_cat_order( $catrows, $catlist );

	return $catrows;
}
//-- add
// build the nav sentence
function make_cat_nav_tree($cat_id, $with_link)
{
	global $db,$phpEx;
	global $nav_separator, $nav_link_active;

	if ($nav_link_active) $with_link = true;

	$this_cat = "";
	if ($cat_id > 0)
	{
		$sql = "SELECT * FROM ".CATEGORIES_TABLE." WHERE cat_id=$cat_id";
		if( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query categorie parm '.$sql, '', __LINE__, __FILE__, $sql);
		if ( $catw = $db->sql_fetchrow($result) )
		{
			$cat_main  = $catw['cat_main'];
			$cat_title = $catw['cat_title'];
			$this_cat = ($with_link) ? '<a href="'.append_sid("index.$phpEx?c=$cat_id").'" class="nav">'.$cat_title.'</a>' : $cat_title;
			// vérifier si un parent
			if ($cat_main != $cat_id && $cat_main > 0)
			{
				$this_cat = make_cat_nav_tree($cat_main, true) . $nav_separator . $this_cat;
			}
		}
	}
	return $this_cat;
}

//
// build sub categories list
function get_sub_cat($cat_main, $catrow )
{
	global $db;

	if ($cat_main > 0)
	{
		$sql= "SELECT * FROM ".CATEGORIES_TABLE." WHERE cat_id <> $cat_main AND cat_main=$cat_main";
		if( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query categorie sons '.$sql, '', __LINE__, __FILE__, $sql);
		while ( $catw = $db->sql_fetchrow($result) )
		{
			$i = count($catrow);
			$catrow[$i] = $catw;
			if ($catw['cat_id'] > 0)
				$catrow = get_sub_cat($catw['cat_id'],$catrow);
		}
	}
	return $catrow;
}

// build sorted cats array
function get_cat($cat_id)
{
	global $db;
	// phpBB 2.0.9
	$category_rows = array();
	//
	if ($cat_id <= 0)
	       $cat_id = -1;
	if ($cat_id > 0)
	{
		$sql = "SELECT * FROM " . CATEGORIES_TABLE . " WHERE cat_id=$cat_id";
		if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query this categories', '', __LINE__, __FILE__, $sql);
		if ( !($row = $db->sql_fetchrow($result)) ) $cat_id = -1;
	}
	//
	// no cat selected : get all
	if ($cat_id <= 0)
	{
		//-- v 1.0.5
		$sql = "SELECT * FROM " . CATEGORIES_TABLE . " ORDER BY cat_order";
		//-- 
		if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query categories list', '', __LINE__, __FILE__, $sql);
		while ( $row = $db->sql_fetchrow($result) ) $category_rows[] = $row;
	}
	//
	// a cat selected : get it and its sub-cats
	if ($cat_id > 0)
	{
		// add the current one
		$catrow[] = $row;
		// get sub-cats
		$catrow = get_sub_cat($cat_id,$catrow);
		// get cats
		//-- v 1.0.5
		$sql = "SELECT * FROM " . CATEGORIES_TABLE . " ORDER BY cat_order";
		//--
		if( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query categories list', '', __LINE__, __FILE__, $sql);
		while ($row = $db->sql_fetchrow($result) )
		{
			$found = false;
			for ($i=0;( $i<count($catrow) && (!$found) );$i++) $found = ($row['cat_id'] == $catrow[$i]['cat_id']);
			if ($found) $category_rows[] = $row;
		}
	}
	return $category_rows;
}
// End PNphpBB2 Categories Hierarchie Mod

function get_db_stat($mode)
{
	global $db;

	switch( $mode )
	{
		case 'usercount':
			$sql = "SELECT COUNT(user_id) AS total
				FROM " . USERS_TABLE . "
				WHERE user_id <> " . ANONYMOUS;
			break;

		case 'newestuser':
			$sql = "SELECT user_id, username
				FROM " . USERS_TABLE . "
				WHERE user_id <> " . ANONYMOUS . "
				ORDER BY user_id DESC
				LIMIT 1";
			break;

		case 'postcount':
		case 'topiccount':
			$sql = "SELECT SUM(forum_topics) AS topic_total, SUM(forum_posts) AS post_total
				FROM " . FORUMS_TABLE;
			break;
	}

	if ( !($result = $db->sql_query($sql)) )
	{
		return false;
	}

	$row = $db->sql_fetchrow($result);

	switch ( $mode )
	{
		case 'usercount':
			return $row['total'];
			break;
		case 'newestuser':
			return $row;
			break;
		case 'postcount':
			return $row['post_total'];
			break;
		case 'topiccount':
			return $row['topic_total'];
			break;
	}

	return false;
}

// added at phpBB 2.0.11 to properly format the username
function phpbb_clean_username($username)
{
	$username = substr(htmlspecialchars(str_replace("\'", "'", trim($username))), 0, 25);
	$username = phpbb_rtrim($username, "\\");
	$username = str_replace("'", "\'", $username);

	return $username;
}

/**
* This function is a wrapper for ltrim, as charlist is only supported in php >= 4.1.0
* Added in phpBB 2.0.18
*/
function phpbb_ltrim($str, $charlist = false)
{
	if ($charlist === false)
	{
		return ltrim($str);
	}
	
	$php_version = explode('.', PHP_VERSION);

	// php version < 4.1.0
	if ((int) $php_version[0] < 4 || ((int) $php_version[0] == 4 && (int) $php_version[1] < 1))
	{
		while ($str{0} == $charlist)
		{
			$str = substr($str, 1);
		}
	}
	else
	{
		$str = ltrim($str, $charlist);
	}

	return $str;
}

// added at phpBB 2.0.12 to fix a bug in PHP 4.3.10 (only supporting charlist in php >= 4.1.0)
function phpbb_rtrim($str, $charlist = false)
{
	if ($charlist === false)
	{
		return rtrim($str);
	}
	
	$php_version = explode('.', PHP_VERSION);

	// php version < 4.1.0
	if ((int) $php_version[0] < 4 || ((int) $php_version[0] == 4 && (int) $php_version[1] < 1))
	{
		while ($str{strlen($str)-1} == $charlist)
		{
			$str = substr($str, 0, strlen($str)-1);
		}
	}
	else
	{
		$str = rtrim($str, $charlist);
	}

	return $str;
}

/**
* Our own generator of random values
* This uses a constantly changing value as the base for generating the values
* The board wide setting is updated once per page if this code is called
* With thanks to Anthrax101 for the inspiration on this one
* Added in phpBB 2.0.20
*/
function dss_rand()
{
	global $db, $board_config, $dss_seeded;

	$val = $board_config['rand_seed'] . microtime();
	$val = md5($val);
	$board_config['rand_seed'] = md5($board_config['rand_seed'] . $val . 'a');
   
	if($dss_seeded !== true)
	{
		$sql = "UPDATE " . CONFIG_TABLE . " SET
			config_value = '" . $board_config['rand_seed'] . "'
			WHERE config_name = 'rand_seed'";
		
		if( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, "Unable to reseed PRNG", "", __LINE__, __FILE__, $sql);
		}

		$dss_seeded = true;
	}

	return substr($val, 4, 16);
}
//
// Get Userdata, $user can be username or user_id. If force_str is true, the username will be forced.
//
// Begin PNphpBB2 Module
// function get_userdata($user, $force_str = false)
function phpbb_get_userdata($user, $force_str = false)
// End PNphpBB2 Module
{
	global $db;

	if (!is_numeric($user) || $force_str)
	{
		$user = phpbb_clean_username($user);
	}
	else
	{
		$user = intval($user);
	}

	$sql = "SELECT *
		FROM " . USERS_TABLE . " 
		WHERE ";
	$sql .= ( ( is_integer($user) ) ? "user_id = $user" : "username = '" .  str_replace("\'", "''", $user) . "'" ) . " AND user_id <> " . ANONYMOUS;
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Tried obtaining data for a non-existent user', '', __LINE__, __FILE__, $sql);
	}

	return ( $row = $db->sql_fetchrow($result) ) ? $row : false;
}

function make_jumpbox($action, $match_forum_id = 0)
{
	global $template, $userdata, $lang, $db, $nav_links, $phpEx, $SID;
// Begin PNphpBB2 Module
	global $ModName;
// End PNphpBB2 Module

//	$is_auth = auth(AUTH_VIEW, AUTH_LIST_ALL, $userdata);

// Begin PNphpBB2 Categories Hierarchie Mod
/*
	$sql = "SELECT c.cat_id, c.cat_title, c.cat_order
		FROM " . CATEGORIES_TABLE . " c, " . FORUMS_TABLE . " f
		WHERE f.cat_id = c.cat_id
		GROUP BY c.cat_id, c.cat_title, c.cat_order
		ORDER BY c.cat_order";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, "Couldn't obtain category list.", "", __LINE__, __FILE__, $sql);
	}
	
	$category_rows = array();
	while ( $row = $db->sql_fetchrow($result) )
	{
		$category_rows[] = $row;
	}
*/
	$category_rows = array();
	$category_rows = get_auth_cat();
// End PNphpBB2 Categories Hierarchie Mod

	if ( $total_categories = count($category_rows) )
	{
		$sql = "SELECT *
			FROM " . FORUMS_TABLE . "
			ORDER BY cat_id, forum_order";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not obtain forums information', '', __LINE__, __FILE__, $sql);
		}

		$boxstring = '<select name="' . POST_FORUM_URL . '" onchange="if(this.options[this.selectedIndex].value != -1){ forms[\'jumpbox\'].submit() }"><option value="-1">' . $lang['Select_forum'] . '</option>';

		$forum_rows = array();
		while ( $row = $db->sql_fetchrow($result) )
		{
			$forum_rows[] = $row;
		}

		if ( $total_forums = count($forum_rows) )
		{
			for($i = 0; $i < $total_categories; $i++)
			{
				$boxstring_forums = '';
// Begin PNphpBB2 Categories Hierarchie Mod
				$inc = '';
				for ($k = 1; $k < $category_rows[$i]['level']; $k++) $inc = '|&nbsp;&nbsp;&nbsp;' . $inc;
				$inc = ( ($category_rows[$i]['level'] > 0) ? '|&nbsp;&nbsp;&nbsp;' : '|--' ) . $inc;
				$inc .= ($category_rows[$i]['level'] > 0) ? '|--' : '';
// End PNphpBB2 Categories Hierarchie Mod
				for($j = 0; $j < $total_forums; $j++)
				{
// Begin PNphpBB2 Categories Hierarchie Mod
//					if ( $forum_rows[$j]['cat_id'] == $category_rows[$i]['cat_id'] && $forum_rows[$j]['auth_view'] <= AUTH_REG )
//					{
					$do_it = false;
					if ( $forum_rows[$j]['cat_id'] == $category_rows[$i]['cat_id'] )
					{
						$is_auth = array();
						$is_auth = auth(AUTH_ALL, $forum_rows[$j]['forum_id'], $userdata);
						$do_it = $is_auth['auth_view'];
					}
					if ( $do_it )
					{
// End PNphpBB2 Categories Hierarchie Mod

//					if ( $forum_rows[$j]['cat_id'] == $category_rows[$i]['cat_id'] && $is_auth[$forum_rows[$j]['forum_id']]['auth_view'] )
//					{
						$selected = ( $forum_rows[$j]['forum_id'] == $match_forum_id ) ? 'selected="selected"' : '';
// Begin PNphpBB2 Categories Hierarchie Mod
//						$boxstring_forums .=  '<option value="' . $forum_rows[$j]['forum_id'] . '"' . $selected . '>' . $forum_rows[$j]['forum_name'] . '</option>';
						$boxstring_forums .=  '<option value="' . $forum_rows[$j]['forum_id'] . '"' . $selected . '>' . '|&nbsp;&nbsp;&nbsp;' . $inc . '&nbsp;' . $forum_rows[$j]['forum_name'] . '</option>';
// End PNphpBB2 Categories Hierarchie Mod

						//
						// Add an array to $nav_links for the Mozilla navigation bar.
						// 'chapter' and 'forum' can create multiple items, therefore we are using a nested array.
						//
						$nav_links['chapter forum'][$forum_rows[$j]['forum_id']] = array (
							'url' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=" . $forum_rows[$j]['forum_id']),
							'title' => $forum_rows[$j]['forum_name']
						);
								
					}
				}

// Begin PNphpBB2 Categories Hierarchie Mod
/*
				if ( $boxstring_forums != '' )
				{
					$boxstring .= '<option value="-1">&nbsp;</option>';
					$boxstring .= '<option value="-1">' . $category_rows[$i]['cat_title'] . '</option>';
					$boxstring .= '<option value="-1">----------------</option>';
					$boxstring .= $boxstring_forums;
				}
*/
				if ( $i == 0 )
				{
					$boxstring .= '<option value="-1">&nbsp;</option>';
					$boxstring .= '<option value="-1">' . $lang['Forum_index'] . '</option>';
				}
				$boxstring .= '<option value="-1">' . $inc . '[' . $category_rows[$i]['cat_title'] . ']</option>';
				$boxstring .= $boxstring_forums;
// End PNphpBB2 Categories Hierarchie Mod
			}
		}

		$boxstring .= '</select>';
	}
	else
	{
		$boxstring .= '<select name="' . POST_FORUM_URL . '" onchange="if(this.options[this.selectedIndex].value != -1){ forms[\'jumpbox\'].submit() }"></select>';
	}

	// Let the jumpbox work again in sites having additional session id checks.
//	if ( !empty($SID) )
//	{
		$boxstring .= '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" />';
//	}
// Begin PNphpBB2 Module
	$boxstring .= '<input type="hidden" name="op" value="modload" />';  
	$boxstring .= '<input type="hidden" name="name" value=' . $ModName . ' />';  
	$boxstring .= '<input type="hidden" name="file" value="viewforum" />';  
	$boxstring .= '<input type="hidden" name="sid" value="' . $SID . '" />';
// End PNphpBB2 Module

	$template->set_filenames(array(
		'jumpbox' => 'jumpbox.tpl')
	);
	$template->assign_vars(array(
		'L_GO' => $lang['Go'],
		'L_JUMP_TO' => $lang['Jump_to'],
		'L_SELECT_FORUM' => $lang['Select_forum'],

		'S_JUMPBOX_SELECT' => $boxstring,
		'S_JUMPBOX_ACTION' => append_sid($action))
	);
	$template->assign_var_from_handle('JUMPBOX', 'jumpbox');

	return;
}

//
// Initialise user settings on page load
function init_userprefs($userdata)
{
// Begin PNphpBB2 Module
//	global $board_config, $theme, $images;
	global $board_config, $phpbb_theme, $images;
// End PNphpBB2 Module
	global $template, $lang, $phpEx, $phpbb_root_path, $db;
	global $nav_links;

	if ( $userdata['user_id'] != ANONYMOUS )
	{
// Begin PNphpBB2 Module
/*
		if ( !empty($userdata['user_lang']))
		{
			$default_lang = phpbb_ltrim(basename(phpbb_rtrim($userdata['user_lang'])), "'");
		}

		if ( !empty($userdata['user_dateformat']) )
		{
			$board_config['default_dateformat'] = $userdata['user_dateformat'];
		}

		if ( isset($userdata['user_timezone']) )
		{
			$board_config['board_timezone'] = $userdata['user_timezone'];
		}
*/
		$board_config['board_timezone'] = pnUserGetVar('timezone_offset') - 12;
// End PNphpBB2 Module
	}
	else
	{
		$default_lang = phpbb_ltrim(basename(phpbb_rtrim($board_config['default_lang'])), "'");
	}

	if ( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $default_lang . '/lang_main.'.$phpEx)) )
	{
		if ( $userdata['user_id'] != ANONYMOUS )
		{
			// For logged in users, try the board default language next
			$default_lang = phpbb_ltrim(basename(phpbb_rtrim($board_config['default_lang'])), "'");
		}
		else
		{
			// For guests it means the default language is not present, try english
			// This is a long shot since it means serious errors in the setup to reach here,
			// but english is part of a new install so it's worth us trying
			$default_lang = 'english';
		}

		if ( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $default_lang . '/lang_main.'.$phpEx)) )
		{
			message_die(CRITICAL_ERROR, 'Could not locate valid language pack');
		}
	}

	// If we've had to change the value in any way then let's write it back to the database
	// before we go any further since it means there is something wrong with it
	if ( $userdata['user_id'] != ANONYMOUS && $userdata['user_lang'] !== $default_lang )
	{
		$sql = 'UPDATE ' . USERS_TABLE . "
			SET user_lang = '" . $default_lang . "'
			WHERE user_lang = '" . $userdata['user_lang'] . "'";

		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(CRITICAL_ERROR, 'Could not update user language info');
		}

		$userdata['user_lang'] = $default_lang;
	}
	elseif ( $userdata['user_id'] === ANONYMOUS && $board_config['default_lang'] !== $default_lang )
	{
		$sql = 'UPDATE ' . CONFIG_TABLE . "
			SET config_value = '" . $default_lang . "'
			WHERE config_name = 'default_lang'";

		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(CRITICAL_ERROR, 'Could not update user language info');
		}

		}

   $board_config['default_lang'] = $default_lang;

	include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_main.' . $phpEx);

	if ( defined('IN_ADMIN') )
	{
// Begin PNphpBB2 Module
//		if( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin.'.$phpEx)) )
		if( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin.'.$phpEx)) || !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_pnphpbb2_admin.'.$phpEx)) )
// End PNphpBB2 Module
		{
			$board_config['default_lang'] = 'english';
		}

		include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin.' . $phpEx);
// Begin PNphpBB2 Module
		include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_pnphpbb2_admin.' . $phpEx);
// End PNphpBB2 Module
	}

/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
	if (!intval($attach_config['disable_mod']))
	{
		include_attach_lang();
	}
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */

// Begin PNphpBB2 Module
	if ( !file_exists($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_pnphpbb2.'.$phpEx) )
	{
		$language = 'english';
	} else {
		$language = $board_config['default_lang'];
	}
	include($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2.' . $phpEx);
// End PNphpBB2 Module

	//
	// Set up style
	//
	if ( !$board_config['override_user_style'] )
	{
		if ( $userdata['user_id'] != ANONYMOUS && $userdata['user_style'] > 0 )
		{
// Begin PNphpBB2 Module
//			if ( $theme = setup_style($userdata['user_style']) )
			if ( $phpbb_theme = setup_style($userdata['user_style']) )
// End PNphpBB2 Module
			{
				return;
			}
		}
	}

// Begin PNphpBB2 Module
//	$theme = setup_style($board_config['default_style']);
	$phpbb_theme = setup_style($board_config['default_style']);
// End PNphpBB2 Module

	//
	// Mozilla navigation bar
	// Default items that should be valid on all pages.
	// Defined here to correctly assign the Language Variables
	// and be able to change the variables within code.
	//
	$nav_links['top'] = array ( 
		'url' => append_sid($phpbb_root_path . 'index.' . $phpEx),
		'title' => sprintf($lang['Forum_Index'], $board_config['sitename'])
	);
	$nav_links['search'] = array ( 
		'url' => append_sid($phpbb_root_path . 'search.' . $phpEx),
		'title' => $lang['Search']
	);
	$nav_links['help'] = array ( 
		'url' => append_sid($phpbb_root_path . 'faq.' . $phpEx),
		'title' => $lang['FAQ']
	);
	$nav_links['author'] = array ( 
		'url' => append_sid($phpbb_root_path . 'memberlist.' . $phpEx),
		'title' => $lang['Memberlist']
	);

	return;
}

function setup_style($style)
{
// Begin PNphpBB2 Module
//	global $db, $board_config, $template, $images, $phpbb_root_path;
	global $db, $board_config, $template, $images, $phpbb_root_path, $phpEx;
// End PNphpBB2 Module

	$sql = 'SELECT *
		FROM ' . THEMES_TABLE . '
		WHERE themes_id = ' . (int) $style;
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(CRITICAL_ERROR, 'Could not query database for theme info');
	}

	if ( !($row = $db->sql_fetchrow($result)) )
	{
		// We are trying to setup a style which does not exist in the database
		// Try to fallback to the board default (if the user had a custom style)
		// and then any users using this style to the default if it succeeds
		if ( $style != $board_config['default_style'])
		{
			$sql = 'SELECT *
				FROM ' . THEMES_TABLE . '
				WHERE themes_id = ' . (int) $board_config['default_style'];
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(CRITICAL_ERROR, 'Could not query database for theme info');
			}

			if ( $row = $db->sql_fetchrow($result) )
			{
				$db->sql_freeresult($result);

				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_style = ' . (int) $board_config['default_style'] . "
					WHERE user_style = $style";
				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(CRITICAL_ERROR, 'Could not update user theme info');
				}
			}
			else
			{
				message_die(CRITICAL_ERROR, "Could not get theme data for themes_id [$style]");
			}
		}
		else
		{
			message_die(CRITICAL_ERROR, "Could not get theme data for themes_id [$style]");
		}
	}

// Begin PNphpBB2 Module
//	$template_path = 'templates/' ;
	$template_path = $phpbb_root_path . 'templates/' ;
	$template_name = $row['template_name'] ;
	
	$board_config['template_path'] = $template_path . $template_name;
	
	// Get the Postnuke theme name	
	$theme_name = ((pnUserLoggedIn()) && (pnConfigGetVar('theme_change') != 1)) ? pnUserGetTheme() : pnConfigGetVar('Default_Theme');
	$board_config['theme_name'] = $theme_name;

	// Image path (Non-Language dependant)
	$imagedir = $template_path . $template_name . "/images";
	
	if ( @is_dir(@phpbb_realpath( $imagedir . "/" . $theme_name)) )
	{
	 	 $board_config['path_images'] = $imagedir . "/" . $theme_name;
		 $board_config['image_sub_path'] = $theme_name . '/';
	}
	else
	{
	 	 $board_config['path_images'] = $imagedir;
		 $board_config['image_sub_path'] = '';
	}
	
	$current_template_path = $board_config['path_images'];
	
	// Image language path
	// Postnuke language files or regualr images for secific language
	$imagedir = $board_config['path_images'] . "/lang_" . $board_config['default_lang'];
	if ( @is_dir(@phpbb_realpath($imagedir)) ) 
	{
	 	 // Ok cool lets use it
		 $board_config['path_images_lang'] = $imagedir;
		 $board_config['image_lang'] = $board_config['default_lang'];
	}
	else
	{
		 $imagedir = $template_path . $template_name . "/images/lang_" . $board_config['default_lang'];
		 if ( @is_dir(@phpbb_realpath($imagedir)) )
		 {
		 		$board_config['path_images_lang'] = $imagedir;
				$board_config['image_lang'] = $board_config['default_lang'];
		 }
		 else
		 {
		 		$imagedir = $board_config['path_images'] . "/lang_english";
				$board_config['path_images_lang'] = ( @is_dir(@phpbb_realpath( $imagedir)) ) ? $imagedir : $template_path . $template_name . '/images/lang_english';
				$board_config['image_lang'] = "english";
		 }
	}

	// Image post icons
	$imagedir = $template_path . $template_name . "/posticons/" . $theme_name; 
	$board_config['path_posticons'] = ( @is_dir(@phpbb_realpath($imagedir)) ) ? $imagedir : $phpbb_root_path . "images/posticons";

	// Get a default Post Icon size
	$board_config['posticons_size'] = 'width="15" height="15"';
	if ( @is_file($board_config['path_posticons'] . "/posticons_size." . $phpEx) )
	{
		@include($board_config['path_posticons'] . "/posticons_size." . $phpEx);
	}

//	$dir = @opendir($board_config['path_posticons']);
//  $temp_w_size = 15;
//  $temp_h_size = 15;
//	while( $file = @readdir($dir) )
//	{
//	  if ( preg_match('/image_(\d+)\.gif$/is', $file, $num) )
//		{
//			 if ($num[1] > 0 and $num[1] < 256)
//			 {
//	 	 	 		$post_images[$num_post_images] = $num[1];
//					$postimagesize = getimagesize($board_config['path_posticons'] . '/' . $file);
//         if ( $postimagesize[0] > $temp_w_size )
//          {
//           $temp_w_size = $postimagesize[0];
//          }
//          if ( $postimagesize[1] > $temp_h_size )
//          {
//            $temp_h_size = $postimagesize[1];
//          }
//          // $board_config['posticons_size'] = $postimagesize[3];
//          // echo $postimagesize[3];
//		 	 }
//		}
//	}
//	@closedir($dir);
//	$board_config['posticons_size'] = 'width="' . $temp_w_size . '" height="' . $temp_h_size . '"';
	
	// Rank images
	// Postnuke language files or regualr images for secific language
	$imagedir = $template_path . $template_name . "/ranks/" . $theme_name . "/lang_" . $board_config['default_lang'];
	if ( @is_dir(@phpbb_realpath($imagedir)) ) 
	{
	 	 // Ok cool lets use it
		 $board_config['path_ranks'] = $imagedir;
	}
	else
	{
		 $imagedir = $template_path . $template_name . "/ranks/lang_" . $board_config['default_lang'];
		 if ( @is_dir(@phpbb_realpath($imagedir)) )
		 {
		 		$board_config['path_ranks'] = $imagedir;
		 }
		 else
		 {
		 		$imagedir = $template_path . $template_name . "/ranks/lang_english";
				$board_config['path_ranks'] = ( @is_dir(@phpbb_realpath( $imagedir)) ) ? $imagedir : $phpbb_root_path . 'images/ranks';
		 }
	}
	
	// Stylename & cellpic path
	$style_name = $template_path . $template_name . "/styles/" . $theme_name . ".css";
	$cellpics_path = $template_path . $template_name . "/cellpics/" . $theme_name;
  
	// Here we will switch gears and if the style sheet does not exist for the current PN theme, we will create it!
	// However if the admin has not turned the theme matching function on we will try and find a style sheet
	// based on the current theme, and use it. If not then we will use the defualt style sheet and cellpics.
	if ( $board_config['theme_matching'] )
	{
		if ( @!is_file($style_name) )
		{
			// Could not find the style sheet for this theme soooo.....
			// Create a temparary template container to build the style sheet
			// $board_config['style_name'] = $template_path . $template_name . "/styles/default.css";
			$stylesheet = new Template($template_path . $template_name);
			include_once($phpbb_root_path . 'includes/functions_styles.'.$phpEx);
			$succ = create_css ( $stylesheet, $theme_name);
			if (!$succ)
			{
				$board_config['style_name'] = $template_path . $template_name . "/styles/default.css";
				$board_config['path_cellpics'] = $template_path . $template_name . "/cellpics/default";
			}
		}
	}  

	// Find the style sheet for the current theme no style sheet then use defualt.
	$board_config['style_name'] = ( @is_readable($style_name) ) ? $style_name : $template_path . $template_name . "/styles/default.css";

	// Find the cell pics for the current theme no cell pics then use defualt ones.
	$board_config['path_cellpics'] = ( @is_readable($cellpics_path) ) ? $cellpics_path : $template_path . $template_name . "/cellpics/default";

	$template = new Template($template_path . $template_name);
// End PNphpBB2 Module
	if ( $template )
	{
		$current_template_path = $template_path . $template_name;
		

// Begin PNphpBB2 Module
//		$img_lang = ( file_exists(@phpbb_realpath($current_template_path . '/images/lang_' . $board_config['default_lang'])) ) ? $board_config['default_lang'] : 'english';
//		$img_lang = ( file_exists(@phpbb_realpath($phpbb_root_path . $current_template_path . '/images/lang_' . $board_config['default_lang'])) ) ? $board_config['default_lang'] : 'english';
		$img_lang = $board_config['image_lang'];
// End PNphpBB2 Module

// Begin PNphpBB2 Module
		include($template_path . $template_name . '/' . $template_name . '.cfg');
// End PNphpBB2 Module

		if ( !defined('TEMPLATE_CONFIG') )
		{
			message_die(CRITICAL_ERROR, "Could not open $template_name template config file", '', __LINE__, __FILE__);
		}

// Begin PNphpBB2 Module
//		$img_lang = ( file_exists(@phpbb_realpath($phpbb_root_path . $current_template_path . '/images/lang_' . $board_config['default_lang'])) ) ? $board_config['default_lang'] : 'english';
// End PNphpBB2 Module

		while( list($key, $value) = @each($images) )
		{
			if ( !is_array($value) )
			{
// Begin PNphpBB2 Module
//				$images[$key] = $phpbb_root_path . str_replace('{LANG}', 'lang_' . $img_lang, $value);
				$images[$key] = str_replace('{LANG}', 'lang_' . $board_config['image_lang'], $value);
// End PNphpBB2 Module
			}
		}
	}

	return $row;
}

function encode_ip($dotquad_ip)
{
	$ip_sep = explode('.', $dotquad_ip);
	return sprintf('%02x%02x%02x%02x', $ip_sep[0], $ip_sep[1], $ip_sep[2], $ip_sep[3]);
}

function decode_ip($int_ip)
{
	$hexipbang = explode('.', chunk_split($int_ip, 2, '.'));
	return hexdec($hexipbang[0]). '.' . hexdec($hexipbang[1]) . '.' . hexdec($hexipbang[2]) . '.' . hexdec($hexipbang[3]);
}

//
// Create date/time from format and timezone
//
function create_date($format, $gmepoch, $tz)
{
// Begin PNphpBB2 Module
/*
	global $board_config, $lang;
	static $translate;

	if ( empty($translate) && $board_config['default_lang'] != 'english' )
	{
		@reset($lang['datetime']);
		while ( list($match, $replace) = @each($lang['datetime']) )
		{
			$translate[$match] = $replace;
		}
	}

	return ( !empty($translate) ) ? strtr(@gmdate($format, $gmepoch + (3600 * $tz)), $translate) : @gmdate($format, $gmepoch + (3600 * $tz));
*/
	return ml_ftime($format, GetUserTime( $gmepoch ));
// End PNphpBB2 Module
}

//
// Pagination routine, generates
// page number sequence
//
function generate_pagination($base_url, $num_items, $per_page, $start_item, $add_prevnext_text = TRUE)
{
// Begin PNphpBB2 Module
/*
	global $lang;

	$total_pages = ceil($num_items/$per_page);

	if ( $total_pages == 1 )
	{
		return '';
	}

	$on_page = floor($start_item / $per_page) + 1;

	$page_string = '';
	if ( $total_pages > 10 )
	{
		$init_page_max = ( $total_pages > 3 ) ? 3 : $total_pages;

		for($i = 1; $i < $init_page_max + 1; $i++)
		{
			$page_string .= ( $i == $on_page ) ? '<b>' . $i . '</b>' : '<a href="' . append_sid($base_url . "&amp;start=" . ( ( $i - 1 ) * $per_page ) ) . '">' . $i . '</a>';
			if ( $i <  $init_page_max )
			{
				$page_string .= ", ";
			}
		}

		if ( $total_pages > 3 )
		{
			if ( $on_page > 1  && $on_page < $total_pages )
			{
				$page_string .= ( $on_page > 5 ) ? ' ... ' : ', ';

				$init_page_min = ( $on_page > 4 ) ? $on_page : 5;
				$init_page_max = ( $on_page < $total_pages - 4 ) ? $on_page : $total_pages - 4;

				for($i = $init_page_min - 1; $i < $init_page_max + 2; $i++)
				{
					$page_string .= ($i == $on_page) ? '<b>' . $i . '</b>' : '<a href="' . append_sid($base_url . "&amp;start=" . ( ( $i - 1 ) * $per_page ) ) . '">' . $i . '</a>';
					if ( $i <  $init_page_max + 1 )
					{
						$page_string .= ', ';
					}
				}

				$page_string .= ( $on_page < $total_pages - 4 ) ? ' ... ' : ', ';
			}
			else
			{
				$page_string .= ' ... ';
			}

			for($i = $total_pages - 2; $i < $total_pages + 1; $i++)
			{
				$page_string .= ( $i == $on_page ) ? '<b>' . $i . '</b>'  : '<a href="' . append_sid($base_url . "&amp;start=" . ( ( $i - 1 ) * $per_page ) ) . '">' . $i . '</a>';
				if( $i <  $total_pages )
				{
					$page_string .= ", ";
				}
			}
		}
	}
	else
	{
		for($i = 1; $i < $total_pages + 1; $i++)
		{
			$page_string .= ( $i == $on_page ) ? '<b>' . $i . '</b>' : '<a href="' . append_sid($base_url . "&amp;start=" . ( ( $i - 1 ) * $per_page ) ) . '">' . $i . '</a>';
			if ( $i <  $total_pages )
			{
				$page_string .= ', ';
			}
		}
	}

	if ( $add_prevnext_text )
	{
		if ( $on_page > 1 )
		{
			$page_string = ' <a href="' . append_sid($base_url . "&amp;start=" . ( ( $on_page - 2 ) * $per_page ) ) . '">' . $lang['Previous'] . '</a>&nbsp;&nbsp;' . $page_string;
		}

		if ( $on_page < $total_pages )
		{
			$page_string .= '&nbsp;&nbsp;<a href="' . append_sid($base_url . "&amp;start=" . ( $on_page * $per_page ) ) . '">' . $lang['Next'] . '</a>';
		}

	}

	$page_string = $lang['Goto_page'] . ' ' . $page_string;
*/
	global $template, $lang, $board_config;

	$total_pages = ceil($num_items/$per_page);

	if ($total_pages <= 1 || !$num_items)
	{
		return false;
	}

	$on_page = floor($start_item / $per_page) + 1;

	$page_string_style .= ($on_page == 1) ? '<span class="pi_current">1</span>' : '<span class="pi_firstlast"><a href="' . append_sid($base_url . "&amp;start=" . (($on_page - 2) * $per_page)) . '" title="' . $lang['Previous'] . '"></a></span>&nbsp;<span class="pi_link"><a href="' . append_sid($base_url) . '">1</a></span>';
	$page_string .= ($on_page == 1) ? '<b>1</b>' : '<a href="' . append_sid($base_url . "&amp;start=" . (($on_page - 2) * $per_page)) . '">' . $lang['Previous'] . '</a>&nbsp;&nbsp;<a href="' . append_sid($base_url) . '">1</a>';

	if ($total_pages > 5)
	{
		$start_cnt = min(max(1, $on_page - 4), $total_pages - 5);
		$end_cnt = max(min($total_pages, $on_page + 4), 6);

		$page_string_style .= ($start_cnt > 1) ? '<span class="pi_plain">...</span>' : '';
		$page_string .= ($start_cnt > 1) ? ' ... ' : ', ';

		for($i = $start_cnt + 1; $i < $end_cnt; $i++)
		{
			$page_string_style .= ($i == $on_page) ? '<span class="pi_current">' . $i . '</span>' : '<span class="pi_link"><a href="' . append_sid($base_url . "&amp;start=" . (($i - 1) * $per_page)) . '">' . $i . '</a></span>';
			$page_string .= ($i == $on_page) ? '<b>' . $i . '</b>' : '<a href="' . append_sid($base_url . "&amp;start=" . (($i - 1) * $per_page)) . '">' . $i . '</a>';
			if ($i < $end_cnt - 1)
			{
				$page_string .= ', ';
			}
		}

		$page_string_style .= ($end_cnt < $total_pages) ? '<span class="pi_plain">...</span>' : '';
		$page_string .= ($end_cnt < $total_pages) ? ' ... ' : ', ';

	}
	else
	{
		$page_string .= ', ';

		for($i = 2; $i < $total_pages; $i++)
		{
			$page_string_style .= ($i == $on_page) ? '<span class="pi_current">' . $i . '</span>' : '<span class="pi_link"><a href="' . append_sid($base_url . "&amp;start=" . (($i - 1) * $per_page)) . '">' . $i . '</a></span>';
			$page_string .= ($i == $on_page) ? '<b>' . $i . '</b>' : '<a href="' . append_sid($base_url . "&amp;start=" . (($i - 1) * $per_page)) . '">' . $i . '</a>';

			if ($i < $total_pages)
			{
				$page_string .= ', ';
			}
		}
	}
  
	$page_string_style .= ($on_page == $total_pages) ? '<span class="pi_current">' . $total_pages . '</span>' : '<span class="pi_link"><a href="' . append_sid($base_url . '&amp;start=' . (($total_pages - 1) * $per_page)) . '">' . $total_pages . '</a></span>&nbsp;<span class="pi_firstlast"><a href="' . append_sid($base_url . "&amp;start=" . ($on_page * $per_page)) . '" title="' . $lang['Next'] . '">></a></span>';
	$page_string .= ($on_page == $total_pages) ? '<b>' . $total_pages . '</b>' : '<a href="' . append_sid($base_url . '&amp;start=' . (($total_pages - 1) * $per_page)) . '">' . $total_pages . '</a>&nbsp;&nbsp;<a href="' . append_sid($base_url . "&amp;start=" . ($on_page * $per_page)) . '">' . $lang['Next'] . '</a>';

	$page_number = sprintf($lang['Page_of'], ( floor( $start_item / $per_page ) + 1 ), ceil( $num_items / $per_page ));

	$template->assign_vars(array(
			'BASE_URL'					=> append_sid($base_url),
			'ON_PAGE'					=> $on_page,
			'PER_PAGE'					=> $per_page,
			'PAGINATION'				=> $page_string,
			'PAGINATION_STYLE'			=> $page_string_style,
			'PAGE_NUMBER'				=> $page_number, 
			'PAGE_NUMBER_STYLE'			=> '<span class="pi_link">' . $page_number . '</span>', 
			'PAGE_NUMBER_JUMP'			=> '<a href="javascript:jumpto();">' . $page_number . '</a>', 
			'PAGE_NUMBER_JUMP_STYLE'	=> '<span class="pi_link"><a href="javascript:jumpto();">' . $page_number . '</a></span>', 
			'L_GOTO_PAGE'				=> $lang['Goto_page'],
			'L_GOTO_PAGE_STYLE'			=> '<span class="pi_link">' . $lang['Goto_page'] . '</span>',
			'L_GOTO_PAGE_JUMP'			=> '<a href="javascript:jumpto();">' . $lang['Goto_page'] . '</a>',
			'L_GOTO_PAGE_JUMP_STYLE'	=> '<span class="pi_link"><a href="javascript:jumpto();">' . $lang['Goto_page'] . '</a></span>',
			'L_JUMP_PAGE'				=> $lang['Jump_Page'])
	);
	// Turn on script on page
	$template->assign_block_vars('switch_enable_jump', array());

	// Turn on pagination
	$template->assign_block_vars('switch_pagination', array());
// End PNphpBB2 Module

	return $page_string;
}

//
// This does exactly what preg_quote() does in PHP 4-ish
// If you just need the 1-parameter preg_quote call, then don't bother using this.
//
function phpbb_preg_quote($str, $delimiter)
{
	$text = preg_quote($str);
	$text = str_replace($delimiter, '\\' . $delimiter, $text);
	
	return $text;
}

//
// Obtain list of naughty words and build preg style replacement arrays for use by the
// calling script, note that the vars are passed as references this just makes it easier
// to return both sets of arrays
//
function obtain_word_list(&$orig_word, &$replacement_word)
{
	global $db;

	//
	// Define censored word matches
	//
	$sql = "SELECT word, replacement
		FROM  " . WORDS_TABLE;
	if( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not get censored words from database', '', __LINE__, __FILE__, $sql);
	}

	if ( $row = $db->sql_fetchrow($result) )
	{
		do 
		{
			$orig_word[] = '#\b(' . str_replace('\*', '\w*?', preg_quote($row['word'], '#')) . ')\b#i';
			$replacement_word[] = $row['replacement'];
		}
		while ( $row = $db->sql_fetchrow($result) );
	}

	return true;
}

//
// This is general replacement for die(), allows templated
// output in users (or default) language, etc.
//
// $msg_code can be one of these constants:
//
// GENERAL_MESSAGE : Use for any simple text message, eg. results 
// of an operation, authorisation failures, etc.
//
// GENERAL ERROR : Use for any error which occurs _AFTER_ the 
// common.php include and session code, ie. most errors in 
// pages/functions
//
// CRITICAL_MESSAGE : Used when basic config data is available but 
// a session may not exist, eg. banned users
//
// CRITICAL_ERROR : Used when config data cannot be obtained, eg
// no database connection. Should _not_ be used in 99.5% of cases
//
function message_die($msg_code, $msg_text = '', $msg_title = '', $err_line = '', $err_file = '', $sql = '')
{
// Begin PNphpBB2 Module
//	global $db, $template, $board_config, $theme, $lang, $phpEx, $phpbb_root_path, $ModName, $nav_links, $gen_simple_header, $images;
	global $db, $template, $board_config, $phpbb_theme, $lang, $phpEx, $phpbb_root_path, $ModName, $nav_links, $images;
// End PNphpBB2 Module
	global $userdata, $user_ip, $session_length;
	global $starttime;

	if(defined('HAS_DIED'))
	{
		die("message_die() was called multiple times. This isn't supposed to happen. Was message_die() used in page_tail.php?");
	}
	
	define('HAS_DIED', 1);
	

	$sql_store = $sql;
	
	//
	// Get SQL error if we are debugging. Do this as soon as possible to prevent 
	// subsequent queries from overwriting the status of sql_error()
	//
	if ( DEBUG && ( $msg_code == GENERAL_ERROR || $msg_code == CRITICAL_ERROR ) )
	{
		$sql_error = $db->sql_error();

		$debug_text = '';

		if ( $sql_error['message'] != '' )
		{
			$debug_text .= '<br /><br />SQL Error : ' . $sql_error['code'] . ' ' . $sql_error['message'];
		}

		if ( $sql_store != '' )
		{
			$debug_text .= "<br /><br />$sql_store";
		}

		if ( $err_line != '' && $err_file != '' )
		{
			$debug_text .= '<br /><br />Line : ' . $err_line . '<br />File : ' . basename($err_file);
		}
	}

	if( empty($userdata) && ( $msg_code == GENERAL_MESSAGE || $msg_code == GENERAL_ERROR ) )
	{
		$userdata = session_pagestart($user_ip, PAGE_INDEX);
		init_userprefs($userdata);
	}

	//
	// If the header hasn't been output then do it
	//
	if ( !defined('HEADER_INC') && $msg_code != CRITICAL_ERROR )
	{
		if ( empty($lang) )
		{
			if ( !empty($board_config['default_lang']) )
			{
				include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_main.'.$phpEx);
			}
			else
			{
				include($phpbb_root_path . 'language/lang_english/lang_main.'.$phpEx);
			}
		}

// Begin PNphpBB2 Module
		if ( empty($template) || empty($phpbb_theme) )
		{
			$phpbb_theme = setup_style($board_config['default_style']);
		}
// End PNphpBB2 Module

		//
		// Load the Page Header
		//
		if ( !defined('IN_ADMIN') )
		{
			include($phpbb_root_path . 'includes/page_header.'.$phpEx);
		}
		else
		{
			include($phpbb_root_path . 'admin/page_header_admin.'.$phpEx);
		}
	}

	switch($msg_code)
	{
		case GENERAL_MESSAGE:
			if ( $msg_title == '' )
			{
				$msg_title = $lang['Information'];
			}
			break;

		case CRITICAL_MESSAGE:
			if ( $msg_title == '' )
			{
				$msg_title = $lang['Critical_Information'];
			}
			break;

		case GENERAL_ERROR:
			if ( $msg_text == '' )
			{
				$msg_text = $lang['An_error_occured'];
			}

			if ( $msg_title == '' )
			{
				$msg_title = $lang['General_Error'];
			}
			break;

		case CRITICAL_ERROR:
			//
			// Critical errors mean we cannot rely on _ANY_ DB information being
			// available so we're going to dump out a simple echo'd statement
			//
			include($phpbb_root_path . 'language/lang_english/lang_main.'.$phpEx);

			if ( $msg_text == '' )
			{
				$msg_text = $lang['A_critical_error'];
			}

			if ( $msg_title == '' )
			{
// Begin PNphpBB2 Module
//				$msg_title = 'phpBB : <b>' . $lang['Critical_Error'] . '</b>';
				$msg_title = 'PNphpBB : <b>' . $lang['Critical_Error'] . '</b>';
// End PNphpBB2 Module
			}
			break;
	}

	//
	// Add on DEBUG info if we've enabled debug mode and this is an error. This
	// prevents debug info being output for general messages should DEBUG be
	// set TRUE by accident (preventing confusion for the end user!)
	//
	if ( DEBUG && ( $msg_code == GENERAL_ERROR || $msg_code == CRITICAL_ERROR ) )
	{
		if ( $debug_text != '' )
		{
			$msg_text = $msg_text . '<br /><br /><b><u>DEBUG MODE</u></b>' . $debug_text;
		}
	}

	if ( $msg_code != CRITICAL_ERROR )
	{
		if ( !empty($lang[$msg_text]) )
		{
			$msg_text = $lang[$msg_text];
		}

		if ( !defined('IN_ADMIN') )
		{
			$template->set_filenames(array(
				'message_body' => 'message_body.tpl')
			);
		}
		else
		{
			$template->set_filenames(array(
				'message_body' => 'admin/admin_message_body.tpl')
			);
		}

		$template->assign_vars(array(
			'MESSAGE_TITLE' => $msg_title,
			'MESSAGE_TEXT' => $msg_text)
		);
		$template->pparse('message_body');

		if ( !defined('IN_ADMIN') )
		{
			include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
		}
		else
		{
			include($phpbb_root_path . 'admin/page_footer_admin.'.$phpEx);
		}
	}
	else
	{
		echo "<html>\n<body>\n" . $msg_title . "\n<br /><br />\n" . $msg_text . "</body>\n</html>";
	}

	exit;
}

//
// This function is for compatibility with PHP 4.x's realpath()
// function.  In later versions of PHP, it needs to be called
// to do checks with some functions.  Older versions of PHP don't
// seem to need this, so we'll just return the original value.
// dougk_ff7 <October 5, 2002>
function phpbb_realpath($path)
{
	global $phpbb_root_path, $phpEx;

	return (!@function_exists('realpath') || !@realpath($phpbb_root_path . 'includes/functions.'.$phpEx)) ? $path : @realpath($path);
}

function redirect($url)
{
	global $db, $board_config;

	if (!empty($db))
	{
		$db->sql_close();
	}

	if (strstr(urldecode($url), "\n") || strstr(urldecode($url), "\r") || strstr(urldecode($url), ';url'))
	{
		message_die(GENERAL_ERROR, 'Tried to redirect to potentially insecure url.');
	}
// Begin PNphpBB2 Module
	pnredirect ($url);
	exit;
// End PNphpBB2 Module

	$server_protocol = ($board_config['cookie_secure']) ? 'https://' : 'http://';
	$server_name = preg_replace('#^\/?(.*?)\/?$#', '\1', trim($board_config['server_name']));
	$server_port = ($board_config['server_port'] <> 80) ? ':' . trim($board_config['server_port']) : '';
	$script_name = preg_replace('#^\/?(.*?)\/?$#', '\1', trim($board_config['script_path']));
	$script_name = ($script_name == '') ? $script_name : '/' . $script_name;
	$url = preg_replace('#^\/?(.*?)\/?$#', '/\1', trim($url));

	// Redirect via an HTML form for PITA webservers
	if (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE')))
	{
		header('Refresh: 0; URL=' . $server_protocol . $server_name . $server_port . $script_name . $url);
		echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><meta http-equiv="refresh" content="0; url=' . $server_protocol . $server_name . $server_port . $script_name . $url . '"><title>Redirect</title></head><body><div align="center">If your browser does not support meta redirection please click <a href="' . $server_protocol . $server_name . $server_port . $script_name . $url . '">HERE</a> to be redirected</div></body></html>';
		exit;
	}

	// Behave as per HTTP/1.1 spec for others
	header('Location: ' . $server_protocol . $server_name . $server_port . $script_name . $url);
	exit;
}

// Begin PNphpBB2 Module
// Taken from Postnuke and modified so that the language filename would stay in english.
// the PN languagelist function was being used, but once the langue is changed the returned language name was
// no longer in english :-(
function getPNlanguage()
{
	pnBlockLoad('Core', 'thelang');
// All entries use ISO 639-2/T
	$lang['ara'] = "Arabic";
	$lang['alb'] = "Albanian"; 
	$lang['bul'] = "Bulgarian";
	$lang['zho'] = "Chinese";
	$lang['cat'] = "Catalan";
	$lang['ces'] = "Czech";
	$lang['hrv'] = "Croatian HRV";
	$lang['cro'] = "Croatian CRO";
	$lang['dan'] = "Danish";
	$lang['nld'] = "Dutch";
	$lang['eng'] = "English";
	$lang['epo'] = "Esperanto";
	$lang['est'] = "Estonian";
	$lang['fin'] = "Finnish";
	$lang['fra'] = "French";
	$lang['deu'] = "German";
	$lang['ell'] = "Greek";
	$lang['heb'] = "Hebrew";
	$lang['hun'] = "Hungarian";
	$lang['isl'] = "Icelandic";
	$lang['ind'] = "Indonesian";
	$lang['ita'] = "Italian";
	$lang['jpn'] = "Japanese";
	$lang['kor'] = "Korean";
	$lang['lav'] = "Latvian";
	$lang['lit'] = "Lithuanian";
	$lang['mas'] = "Malay";
	$lang['mkd'] = "Macedonian";
	$lang['nor'] = "Norwegian";
	$lang['pol'] = "Polish";
	$lang['por'] = "Portuguese";
	$lang['ron'] = "Romanian";
	$lang['rus'] = "Russian";
	$lang['slv'] = "Slovenian";
	$lang['spa'] = "Spanish";
	$lang['swe'] = "Swedish";
	$lang['tha'] = "Thai";
	$lang['tur'] = "Turkish";
	$lang['ukr'] = "Ukrainian";
	$lang['yid'] = "Yiddish";

	return strtolower($lang[pnSessionGetVar('lang')]);
}

// Obtain rank images based on absolute path or template/theme path
function get_rank_image ($rank_image)
{
 	global $board_config, $phpbb_root_path;
	
	$dirs = explode('/', $rank_image);
	if (count($dirs) > 1)
	{
	 	 return ($phpbb_root_path . $rank_image);
	}
	$tmprank = $board_config['path_ranks'] . "/" . $rank_image;
	if ( @is_file($tmprank) )
	{
	 	 return $tmprank;
	}
	else
	{
	 	 return ($phpbb_root_path . 'images/ranks/' . $rank_image);
	}
}

// Added Searchbox
function make_searchbox($action, $match_forum_id = 0)
{
	global $lang, $phpbb_theme;

	$boxstring  = '<form method="post" action="' . append_sid($action) . '">';
	$boxstring .= '<input type="hidden" name="search_forum" value="' . $match_forum_id . '">';
	$boxstring .= '<input type="hidden" name="show_results" value="topics">';
	$boxstring .= '<input type="hidden" name="search_terms" value="any">';
	$boxstring .= '<input type="hidden" name="search_fields" value="all">' . $lang['Search'] . ': ';
	$boxstring .= '<input type="text" name="search_keywords" value="" size="20" maxlength="150" class="button" style="border: 1px solid #' . $phpbb_theme['body_vlink'] . '" />&nbsp;';
	$boxstring .= '<input type="submit" name="submit" value="' . $lang['Go'] . '" alt="' . $lang['Go'] . '" class="catbutton" /></form>';

	return $boxstring;
}

// Begin PNphpBB2 Module - Online/Offline status
function online_offline_status ($user_id, $forum_mod)
{
 	global $lang, $board_config, $userdata, $images, $phpbb_theme, $phpEx;
	$status['color'] = '';
	if ( $user_id['user_id'] != ANONYMOUS )
	{
		if ( $user_id['user_allow_viewonline'] && !$board_config['pnphpbb2_members_online'] )
		{
			if ( $user_id['user_session_time'] >= (time()-60) )
	 	 	{
				// Check admin/mod status
				if ( $user_id['user_level'] == ADMIN )
				{
					$status['image'] = ( $images['user_admin'] ) ? '<a href="' . append_sid("viewonline.$phpEx") . '"><img src="' .  $images['user_admin'] . '" alt="' . sprintf($lang['Admin_online_color'], '', '') . '" title="' . sprintf($lang['Admin_online_color'], '', '') . '" border="0" hspace="3" align="top" /></a>' : '';
					$status['color'] = 'style="color:#' . $phpbb_theme['fontcolor3'] . '"';
				}
				else if ( $forum_mod )
				{
			 		$status['image'] = ( $images['user_mod'] ) ? '<a href="' . append_sid("viewonline.$phpEx") . '"><img src="' .  $images['user_mod'] . '" alt="' . $lang['Moderator'] . '" title="' . $lang['Moderator'] . '" border="0" hspace="3" align="top" /></a>' : '';
					$status['color'] = 'style="color:#' . $phpbb_theme['fontcolor2'] . '"';
				}
				else
				{						
					$status['image'] = ( $images['user_online'] ) ? '<a href="' . append_sid("viewonline.$phpEx") . '"><img src="' .  $images['user_online'] . '" alt="' . $lang['Online'] . '" title="' . $lang['Online'] . '" border="0" hspace="3" align="top" /></a>' : '';
				}	
				$status['text'] = $lang['Status'] . '<b><a href="' . append_sid("viewonline.$phpEx") . '"' . $status['color'] . '>' . $lang['Online'] . '</a></b>';
			}
			else
			{
   				$status['text'] = $lang['Status'] . $lang['Offline'];
				$status['image'] = ( $images['user_offline'] ) ? '<img src="' .  $images['user_offline'] . '" alt="' . $lang['Offline'] . '" title="' . $lang['Offline'] . '" hspace="3" align="top" />' : '';
			}
		}
	}
	else
	{
		$status['text'] = "";
		$status['image'] = "";
	}
	
	return $status;
}
// End PNphpBB2 Module - Online/Offline status

function forum_mod_status ($forum_id)
{
	global $db;
	// Gather list of moderators for this forums and store them in an array
	// that then can be searched for while displaying posts. This will only need
	// to be called once per viewtopic ;-)
	//

	$sql = "SELECT u.user_id, u.username 
	  FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g, " . USERS_TABLE . " u
		WHERE aa.forum_id = $forum_id 
		  AND aa.auth_mod = " . TRUE . " 
		 	AND g.group_single_user = 1
		 	AND ug.group_id = aa.group_id 
			AND g.group_id = aa.group_id 
			AND u.user_id = ug.user_id 
	  GROUP BY u.user_id, u.username  
		ORDER BY u.user_id";
	if ( !($result = $db->sql_query($sql)) )
	{
	  message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	$moderators = array();
	while( $row = $db->sql_fetchrow($result) )
	{
	  $moderators[] = $row['user_id'];
	}
	return $moderators;
}

function get_pndb_config() {
	if (defined('PN_VERSION_NUM') && !strcmp(PN_VERSION_NUM, "0.8.", 4)) {
		/* PN 0.8 */
		return array(	$GLOBALS['PNConfig']['DBInfo']['default']['dbtype'],
				$GLOBALS['PNConfig']['DBInfo']['default']['dbhost'],
				$GLOBALS['PNConfig']['DBInfo']['default']['dbuname'],
				$GLOBALS['PNConfig']['DBInfo']['default']['dbpass'],
				$GLOBALS['PNConfig']['DBInfo']['default']['dbname']
		);
	} else {
		/* Older versions */
		return array(	pnConfigGetVar('dbtype'),
				pnConfigGetVar('dbhost'),
				pnConfigGetVar('dbuname'),
				pnConfigGetVar('dbpass'),
				pnConfigGetVar('dbname')
		);
	}
}

// End PNphpBB2 Module

?>
