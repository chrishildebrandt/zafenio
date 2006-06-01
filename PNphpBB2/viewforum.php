<?php
/***************************************************************************
 *                               viewforum.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: viewforum.php,v 1.5 2004/10/06 19:44:25 carls Exp $
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
// Begin PNphpBB2 Module
if (!defined("LOADED_AS_MODULE")) {
	 die ("You can't access this file directly...");
}
// global $pnconfig;
$pntable = pnDBGetTables();
$ModName = basename( dirname( __FILE__ ) );
// End PNphpBB2 Module

define('IN_PHPBB', true);
// Begin PNphpBB2 Module
// $phpbb_root_path = './';
$phpbb_root_path = './modules/' . $ModName . '/';
// End PNphpBB2 Module
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start initial var setup
//
if ( isset($HTTP_GET_VARS[POST_FORUM_URL]) || isset($HTTP_POST_VARS[POST_FORUM_URL]) )
{
	$forum_id = ( isset($HTTP_GET_VARS[POST_FORUM_URL]) ) ? intval($HTTP_GET_VARS[POST_FORUM_URL]) : intval($HTTP_POST_VARS[POST_FORUM_URL]);
}
else if ( isset($HTTP_GET_VARS['forum']))
{
	$forum_id = intval($HTTP_GET_VARS['forum']);
}
else
{
	$forum_id = '';
}

$start = ( isset($HTTP_GET_VARS['start']) ) ? intval($HTTP_GET_VARS['start']) : 0;

if ( isset($HTTP_GET_VARS['mark']) || isset($HTTP_POST_VARS['mark']) )
{
	$mark_read = (isset($HTTP_POST_VARS['mark'])) ? $HTTP_POST_VARS['mark'] : $HTTP_GET_VARS['mark'];
}
else
{
	$mark_read = '';
}
//
// End initial var setup
//

//
// Check if the user has actually sent a forum ID with his/her request
// If not give them a nice error page.
//
if ( !empty($forum_id) )
{
// Begin PNphpBB2 Categories Hierarchie Mod
//	$sql = "SELECT *
//		FROM " . FORUMS_TABLE . "
//		WHERE forum_id = $forum_id";
	$sql = "SELECT *, c.cat_title 
		FROM " . FORUMS_TABLE . " as f, ". CATEGORIES_TABLE ." as c 
		WHERE f.forum_id = $forum_id and f.cat_id = c.cat_id";
// End PNphpBB2 Categories Hierarchie Mod
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain forums information', '', __LINE__, __FILE__, $sql);
	}
}
else
{
	message_die(GENERAL_MESSAGE, 'Forum_not_exist');
}

//
// If the query doesn't return any rows this isn't a valid forum. Inform
// the user.
//
if ( !($forum_row = $db->sql_fetchrow($result)) )
{
	message_die(GENERAL_MESSAGE, 'Forum_not_exist');
}

// Begin PNphpBB2 Categories Hierarchie Mod
//  get cat info
$cat_id = $forum_row['cat_id'];
// End PNphpBB2 Categories Hierarchie Mod

//
// Start session management
//
$userdata = session_pagestart($user_ip, $forum_id);
init_userprefs($userdata);
//
// End session management
//

//
// Start auth check
//
$is_auth = array();
$is_auth = auth(AUTH_ALL, $forum_id, $userdata, $forum_row);

if ( !$is_auth['auth_read'] || !$is_auth['auth_view'] )
{
	if ( !$userdata['session_logged_in'] )
	{
		$redirect = POST_FORUM_URL . "=$forum_id" . ( ( isset($start) ) ? "&start=$start" : '' );
		redirect(append_sid("login.$phpEx?redirect=viewforum.$phpEx&$redirect", true));
	}
	//
	// The user is not authed to read this forum ...
	//
	$message = ( !$is_auth['auth_view'] ) ? $lang['Forum_not_exist'] : sprintf($lang['Sorry_auth_read'], $is_auth['auth_read_type']);

	message_die(GENERAL_MESSAGE, $message);
}
//
// End of auth check
//

//
// Handle marking posts
//
if ( $mark_read == 'topics' )
{
	if ( $userdata['session_logged_in'] )
	{
		$sql = "SELECT MAX(post_time) AS last_post 
			FROM " . POSTS_TABLE . " 
			WHERE forum_id = $forum_id";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not obtain forums information', '', __LINE__, __FILE__, $sql);
		}

		if ( $row = $db->sql_fetchrow($result) )
		{
			$tracking_forums = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) : array();
			$tracking_topics = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) : array();

			if ( ( count($tracking_forums) + count($tracking_topics) ) >= 150 && empty($tracking_forums[$forum_id]) )
			{
				asort($tracking_forums);
				unset($tracking_forums[key($tracking_forums)]);
			}

			if ( $row['last_post'] > $userdata['user_lastvisit'] )
			{
				$tracking_forums[$forum_id] = time();

				setcookie($board_config['cookie_name'] . '_f', serialize($tracking_forums), 0, $board_config['cookie_path'], $board_config['cookie_domain'], $board_config['cookie_secure']);
			}
		}

		$template->assign_vars(array(
			'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id") . '">')
		);
	}

	$message = $lang['Topics_marked_read'] . '<br /><br />' . sprintf($lang['Click_return_forum'], '<a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id") . '">', '</a> ');
	message_die(GENERAL_MESSAGE, $message);
}
//
// End handle marking posts
//

$tracking_topics = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) : '';
$tracking_forums = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) : '';

//
// Do the forum Prune
//
if ( $is_auth['auth_mod'] && $board_config['prune_enable'] )
{
	if ( $forum_row['prune_next'] < time() && $forum_row['prune_enable'] )
	{
		include($phpbb_root_path . 'includes/prune.'.$phpEx);
		require($phpbb_root_path . 'includes/functions_admin.'.$phpEx);
		auto_prune($forum_id);
	}
}
//
// End of forum prune
//

//
// Obtain list of moderators of each forum
// First users, then groups ... broken into two queries
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
// Begin PNphpBB2 Module
//	$moderators[] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . $row['username'] . '</a>';
	$moderators[] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . pnVarPrepForDisplay($row['username']) . '</a>';
// End PNphpBB2 Module
}

$sql = "SELECT g.group_id, g.group_name 
	FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g 
	WHERE aa.forum_id = $forum_id
		AND aa.auth_mod = " . TRUE . " 
		AND g.group_single_user = 0
		AND g.group_type <> ". GROUP_HIDDEN ."
		AND ug.group_id = aa.group_id 
		AND g.group_id = aa.group_id 
	GROUP BY g.group_id, g.group_name  
	ORDER BY g.group_id";
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
}

while( $row = $db->sql_fetchrow($result) )
{
	$moderators[] = '<a href="' . append_sid("groupcp.$phpEx?" . POST_GROUPS_URL . "=" . $row['group_id']) . '">' . $row['group_name'] . '</a>';
}
	
$l_moderators = ( count($moderators) == 1 ) ? $lang['Moderator'] : $lang['Moderators'];
$forum_moderators = ( count($moderators) ) ? implode(', ', $moderators) : $lang['None'];
unset($moderators);

//
// Generate a 'Show topics in previous x days' select box. If the topicsdays var is sent
// then get it's value, find the number of topics with dates newer than it (to properly
// handle pagination) and alter the main query
//
$previous_days = array(0, 1, 7, 14, 30, 90, 180, 364);
$previous_days_text = array($lang['All_Topics'], $lang['1_Day'], $lang['7_Days'], $lang['2_Weeks'], $lang['1_Month'], $lang['3_Months'], $lang['6_Months'], $lang['1_Year']);

if ( !empty($HTTP_POST_VARS['topicdays']) || !empty($HTTP_GET_VARS['topicdays']) )
{
	$topic_days = ( !empty($HTTP_POST_VARS['topicdays']) ) ? intval($HTTP_POST_VARS['topicdays']) : intval($HTTP_GET_VARS['topicdays']);
	$min_topic_time = time() - ($topic_days * 86400);

	$sql = "SELECT COUNT(t.topic_id) AS forum_topics 
		FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p 
		WHERE t.forum_id = $forum_id 
			AND p.post_id = t.topic_last_post_id
			AND p.post_time >= $min_topic_time"; 

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain limited topics count information', '', __LINE__, __FILE__, $sql);
	}
	$row = $db->sql_fetchrow($result);

	$topics_count = ( $row['forum_topics'] ) ? $row['forum_topics'] : 1;
	$limit_topics_time = "AND p.post_time >= $min_topic_time";

	if ( !empty($HTTP_POST_VARS['topicdays']) )
	{
		$start = 0;
	}
}
else
{
	$topics_count = ( $forum_row['forum_topics'] ) ? $forum_row['forum_topics'] : 1;

	$limit_topics_time = '';
	$topic_days = 0;
}

$select_topic_days = '<select name="topicdays">';
for($i = 0; $i < count($previous_days); $i++)
{
	$selected = ($topic_days == $previous_days[$i]) ? ' selected="selected"' : '';
	$select_topic_days .= '<option value="' . $previous_days[$i] . '"' . $selected . '>' . $previous_days_text[$i] . '</option>';
}
$select_topic_days .= '</select>';


//
// All announcement data, this keeps announcements
// on each viewforum page ...
//
$sql = "SELECT t.*, u.username, u.user_id, u2.username as user2, u2.user_id as id2, p.post_time, p.post_username
	FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p, " . USERS_TABLE . " u2
	WHERE t.forum_id = $forum_id 
		AND t.topic_poster = u.user_id
		AND p.post_id = t.topic_last_post_id
		AND p.poster_id = u2.user_id
		AND t.topic_type = " . POST_ANNOUNCE . " 
	ORDER BY t.topic_last_post_id DESC ";
if ( !($result = $db->sql_query($sql)) )
{
   message_die(GENERAL_ERROR, 'Could not obtain topic information', '', __LINE__, __FILE__, $sql);
}

$topic_rowset = array();
$total_announcements = 0;
while( $row = $db->sql_fetchrow($result) )
{
	$topic_rowset[] = $row;
	$total_announcements++;
}

$db->sql_freeresult($result);

//
// Grab all the basic data (all topics except announcements)
// for this forum
//
// Begin PNphpBB2 Module (Topic/Post sort order) 06-10-2003
// 
// Sort def
$sort_method = "t.topic_last_post_id";
$sort_order = "DESC";

$sort_list_desc = $lang['Sort_by']; 
$sort_list_parm = array( 
		't.topic_last_post_id' => $lang['Last_Post'], 
		't.topic_title' => $lang['Sort_Topic_Title'], 
		't.topic_time' => $lang['Sort_Time'], 
		'u.username' => $lang['Sort_Author'], 
); 

if ( isset($HTTP_GET_VARS['sort']) || isset($HTTP_POST_VARS['sort']) ) 
{ 
	 $sort_method = isset($HTTP_GET_VARS['sort']) ? $HTTP_GET_VARS['sort'] : $HTTP_POST_VARS['sort']; 
}
else
{
 	 switch ($forum_row['topic_sort_order'])
	 {
      case 1:
	 	     $sort_method = "t.topic_first_post_id";
				 $sort_order = "ASC";
		 		 break;
	 		case 2:
				 $sort_method = "t.topic_title";
				 $sort_order = "ASC";
		 		 break;
	 		case defualt:
				 $sort_method = "t.topic_last_post_id";
				 $sort_order = "DESC";
	 }
}
// 
// set the sort menu 
$sort_list = '<select name="sort">'; 
while ( list($key, $value) = each($sort_list_parm) ) 
{ 
   $selected = ($sort_method == $key) ? ' selected="selected"' : ''; 
	 $sort_list .= '<option value="'.$key.'"'.$selected.'>'.$value.'</option>'; 
} 
$sort_list .= '</select>'; 
// 
// Order def 
$order_list_desc = $lang['Order']; 
$order_list_parm = array('ASC' => $lang['Sort_Ascending'], 'DESC' => $lang['Sort_Descending']); 

if ( isset($HTTP_GET_VARS['order']) || isset($HTTP_POST_VARS['order']) ) 
{ 
	 $sort_order = isset($HTTP_GET_VARS['order']) ? $HTTP_GET_VARS['order'] : $HTTP_POST_VARS['order']; 
} 
// 
// set the order menu 
$order_list = '<select name="order">'; 
while ( list($key, $value) = each($order_list_parm) ) 
{ 
   $selected = ($sort_order == $key) ? ' selected="selected"' : '';
	 $order_list .= '<option value="'.$key.'"'.$selected.'>'.$value.'</option>'; 
} 
$order_list .= '</select>'; 
// 
// read topics 
//-- delete 

//$sql = "SELECT t.*, u.username, u.user_id, u2.username as user2, u2.user_id as id2, p.post_username, p2.post_username AS post_username2, p2.post_time 
//	FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p, " . POSTS_TABLE . " p2, " . USERS_TABLE . " u2
//	WHERE t.forum_id = $forum_id
//		AND t.topic_poster = u.user_id
//		AND p.post_id = t.topic_first_post_id
//		AND p2.post_id = t.topic_last_post_id
//		AND u2.user_id = p2.poster_id 
//		AND t.topic_type <> " . POST_ANNOUNCE . " 
//		$limit_topics_time
//	ORDER BY t.topic_type DESC, t.topic_last_post_id DESC 
//	LIMIT $start, ".$board_config['topics_per_page'];
$sql = "SELECT t.*, u.username, u.user_id, u2.username as user2, u2.user_id as id2, p.post_username, p2.post_username AS post_username2, p2.post_time 
	FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p, " . POSTS_TABLE . " p2, " . USERS_TABLE . " u2
	WHERE t.forum_id = $forum_id
		AND t.topic_poster = u.user_id
		AND p.post_id = t.topic_first_post_id
		AND p2.post_id = t.topic_last_post_id
		AND u2.user_id = p2.poster_id 
		AND t.topic_type <> " . POST_ANNOUNCE . " 
		$limit_topics_time
	ORDER BY t.topic_type DESC, $sort_method $sort_order  
	LIMIT $start, ".$board_config['topics_per_page'];
// End PNphpBB2 Module (Topic/Post sort order)

if ( !($result = $db->sql_query($sql)) )
{
   message_die(GENERAL_ERROR, 'Could not obtain topic information', '', __LINE__, __FILE__, $sql);
}

$total_topics = 0;
while( $row = $db->sql_fetchrow($result) )
{
	$topic_rowset[] = $row;
	$total_topics++;
}

$db->sql_freeresult($result);

//
// Total topics ...
//
$total_topics += $total_announcements;

//
// Define censored word matches
//
$orig_word = array();
$replacement_word = array();
obtain_word_list($orig_word, $replacement_word);

//
// Post URL generation for templating vars
//
$template->assign_vars(array(
	'L_DISPLAY_TOPICS' => $lang['Display_topics'],

	'U_POST_NEW_TOPIC' => append_sid("posting.$phpEx?mode=newtopic&amp;" . POST_FORUM_URL . "=$forum_id"),

	'S_SELECT_TOPIC_DAYS' => $select_topic_days,
	'S_POST_DAYS_ACTION' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=" . $forum_id . "&amp;start=$start"))
);

//
// User authorisation levels output
//
$s_auth_can = ( ( $is_auth['auth_post'] ) ? $lang['Rules_post_can'] : $lang['Rules_post_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_reply'] ) ? $lang['Rules_reply_can'] : $lang['Rules_reply_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_edit'] ) ? $lang['Rules_edit_can'] : $lang['Rules_edit_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_delete'] ) ? $lang['Rules_delete_can'] : $lang['Rules_delete_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_vote'] ) ? $lang['Rules_vote_can'] : $lang['Rules_vote_cannot'] ) . '<br />';
/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
if (!intval($attach_config['disable_mod']))
{
  attach_build_auth_levels($is_auth, $s_auth_can);
}
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */

// Begin PNphpBB2 Module
$s_auth_line = $lang['Rules_header'] . '&nbsp;';
$s_auth_line .= ( ( $is_auth['auth_post'] ) ? $lang['Rules_post'] : '' ) . ',&nbsp;';
$s_auth_line .= ( ( $is_auth['auth_reply'] ) ? $lang['Rules_reply'] : '' ) . ',&nbsp;';
$s_auth_line .= ( ( $is_auth['auth_edit'] ) ? $lang['Rules_edit'] : '' ) . ',&nbsp;';
$s_auth_line .= ( ( $is_auth['auth_delete'] ) ? $lang['Rules_delete'] : '' ) . ',&nbsp;';
$s_auth_line .= ( ( $is_auth['auth_vote'] ) ? $lang['Rules_vote'] : '' ) . '&nbsp;';
/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
if (!intval($attach_config['disable_mod']))
{
  $s_auth_line .= ( ( $is_auth['auth_attachments'] ) ? $lang['Rules_attach'] : '' ) . ',&nbsp;';
  $s_auth_line .=	( ( $is_auth['auth_download'] ) ? $lang['Rules_download'] : '' ) . ',&nbsp;';
}
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
$s_auth_line = substr($s_auth_line, 0, strlen($s_auth_line) - 7); 

$template->set_filenames(array(
	'authbody' => 'auth_list.tpl')
);

$template->assign_vars(array(
	'L_FORUM_OPTIONS' => $lang['Rules_header'],
	'L_AUTH_POST' => $lang['Rules_post'],
	'S_AUTH_POST' => ( ( $is_auth['auth_post'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ), 
	'L_AUTH_REPLY' => $lang['Rules_reply'],
	'S_AUTH_REPLY' => ( ( $is_auth['auth_reply'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ),
	'L_AUTH_EDIT' => $lang['Rules_edit'],
	'S_AUTH_EDIT' => ( ( $is_auth['auth_edit'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ),
	'L_AUTH_DELETE' => $lang['Rules_delete'],
	'S_AUTH_DELETE' => ( ( $is_auth['auth_delete'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ),
	'L_AUTH_VOTE' => $lang['Rules_vote'],
	'S_AUTH_VOTE' => ( ( $is_auth['auth_vote'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ),
	'L_AUTH_MODERATE' => ( ( $is_auth['auth_mod'] ) ? sprintf($lang['Rules_moderate_table'], '<a href="' . append_sid("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;start=" . $start . "&amp;sid=" . $userdata['session_id']) . '">', '</a>') : ''),
	'S_AUTH_MODERATE' => ( ( $is_auth['auth_mod'] ) ? 'bgcolor="#00FF00"' : '' ))
);

/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
if (!intval($attach_config['disable_mod']))
{
  $template->assign_vars(array(
	  'L_AUTH_ATTACH' => $lang['Rules_attach'],
	  'S_AUTH_ATTACH' => ( ( $is_auth['auth_attachments'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ),
	  'L_AUTH_DOWNLOAD' => $lang['Rules_download'],
	  'S_AUTH_DOWNLOAD' => ( ( $is_auth['auth_download'] ) ? 'bgcolor="#00FF00"' : 'bgcolor="#FF0000"' ))
  );
  $template->assign_block_vars('switch_attachments',array());
}
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */

$template->assign_var_from_handle('AUTHLIST', 'authbody');
// End PNphpBB2 Module


if ( $is_auth['auth_mod'] )
{
// Begin PNphpBB2 Module
//	$s_auth_can .= sprintf($lang['Rules_moderate'], "<a href=\"modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;start=" . $start . "&amp;sid=" . $userdata['session_id'] . '">', '</a>');
	$s_auth_can .= sprintf($lang['Rules_moderate'], '<a href="' . append_sid("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;start=" . $start . "&amp;sid=" . $userdata['session_id']) . '">', '</a>');
// End PNphpBB2 Module
}

//
// Mozilla navigation bar
//
$nav_links['up'] = array(
	'url' => append_sid('index.'.$phpEx),
	'title' => sprintf($lang['Forum_Index'], $board_config['sitename'])
);

//
// Dump out the page header and load viewforum template
//
define('SHOW_ONLINE', true);
$page_title = $lang['View_forum'] . ' - ' . $forum_row['forum_name'];
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

$template->set_filenames(array(
	'body' => 'viewforum_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);
// Begin PNphpBB2 Categories Hierarchie Mod
// get nav sentence
$nav_cat_desc = make_cat_nav_tree($cat_id, true);
if ($nav_cat_desc != "") $nav_cat_desc = $nav_separator . $nav_cat_desc;
// End PNphpBB2 Categories Hierarchie Mod

$template->assign_vars(array(
	'FORUM_ID' => $forum_id,
	'FORUM_NAME' => $forum_row['forum_name'],
	'MODERATORS' => $forum_moderators,
	'POST_IMG' => ( $forum_row['forum_status'] == FORUM_LOCKED ) ? $images['post_locked'] : $images['post_new'],

	'FOLDER_IMG' => $images['folder'],
	'FOLDER_NEW_IMG' => $images['folder_new'],
	'FOLDER_HOT_IMG' => $images['folder_hot'],
	'FOLDER_HOT_NEW_IMG' => $images['folder_hot_new'],
	'FOLDER_LOCKED_IMG' => $images['folder_locked'],
	'FOLDER_LOCKED_NEW_IMG' => $images['folder_locked_new'],
	'FOLDER_STICKY_IMG' => $images['folder_sticky'],
	'FOLDER_STICKY_NEW_IMG' => $images['folder_sticky_new'],
	'FOLDER_ANNOUNCE_IMG' => $images['folder_announce'],
	'FOLDER_ANNOUNCE_NEW_IMG' => $images['folder_announce_new'],

/* Begin PNphpBB2 Mod */
	'NAV_CAT_DESC' => $nav_cat_desc,
	'L_SORT_METHOD' => $sort_list_desc, 
	'S_SORT_METHOD' => $sort_list, 
	'L_ORDER' => $order_list_desc, 
	'S_ORDER' => $order_list, 
	'L_LEGEND' => $lang['Legend'],
	'S_AUTH_LINE' => $s_auth_line,
	'SEARCHBOX' => make_searchbox("search.php?mode=results", $forum_id),
/* End PNphpBB2 Module */

	'L_TOPICS' => $lang['Topics'],
	'L_REPLIES' => $lang['Replies'],
	'L_VIEWS' => $lang['Views'],
	'L_POSTS' => $lang['Posts'],
	'L_LASTPOST' => $lang['Last_Post'], 
	'L_MODERATOR' => $l_moderators, 
	'L_MARK_TOPICS_READ' => $lang['Mark_all_topics'], 
	'L_POST_NEW_TOPIC' => ( $forum_row['forum_status'] == FORUM_LOCKED ) ? $lang['Forum_locked'] : $lang['Post_new_topic'], 
	'L_NO_NEW_POSTS' => $lang['No_new_posts'],
	'L_NEW_POSTS' => $lang['New_posts'],
	'L_NO_NEW_POSTS_LOCKED' => $lang['No_new_posts_locked'], 
	'L_NEW_POSTS_LOCKED' => $lang['New_posts_locked'], 
	'L_NO_NEW_POSTS_HOT' => $lang['No_new_posts_hot'],
	'L_NEW_POSTS_HOT' => $lang['New_posts_hot'],
	'L_ANNOUNCEMENT' => $lang['Post_Announcement'], 
	'L_STICKY' => $lang['Post_Sticky'], 
	'L_POSTED' => $lang['Posted'],
	'L_JOINED' => $lang['Joined'],
	'L_AUTHOR' => $lang['Author'],

	'S_AUTH_LIST' => $s_auth_can, 

	'U_VIEW_FORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL ."=$forum_id"),

	'U_MARK_READ' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;mark=topics"))
);
//
// End header
//

//
// Okay, lets dump out the page ...
//
if( $total_topics )
{
// Begin PNphpBB2 Module (Split Annouce/Sticky)
	$prec_topic_real_type = -1;
// End PNphpBB2 Module (Split Annouce/Sticky)

	for($i = 0; $i < $total_topics; $i++)
	{
		$topic_id = $topic_rowset[$i]['topic_id'];

		$topic_title = ( count($orig_word) ) ? preg_replace($orig_word, $replacement_word, $topic_rowset[$i]['topic_title']) : $topic_rowset[$i]['topic_title'];

// Begin PNphpBB2 Module (Support Status Mod)
		$topic_title_status = '';
		if ( $forum_row['support_forum'] && $topic_rowset[$i]['topic_type'] == 0)
		{
			$support_status = intval($topic_rowset[$i]['support_status']);

			if (intval($support_status) > 0 && intval($support_status) <= count($lang['support_status']) )
			{
				$topic_title_status = '<font style="color:' . $lang['support_color'][$support_status] . ';">(' . $lang['support_status'][$support_status] . ')</font> ';
			}
		}
// End PNphpBB2 Module (Support Status Mod)
    
		$replies = $topic_rowset[$i]['topic_replies'];

		$topic_type = $topic_rowset[$i]['topic_type'];

		if( $topic_type == POST_ANNOUNCE )
		{
			$topic_type = $lang['Topic_Announcement'] . ' ';
		}
		else if( $topic_type == POST_STICKY )
		{
			$topic_type = $lang['Topic_Sticky'] . ' ';
		}
		else
		{
			$topic_type = '';		
		}

		if( $topic_rowset[$i]['topic_vote'] )
		{
			$topic_type .= $lang['Topic_Poll'] . ' ';
		}
		
		if( $topic_rowset[$i]['topic_status'] == TOPIC_MOVED )
		{
			$topic_type = $lang['Topic_Moved'] . ' ';
			$topic_id = $topic_rowset[$i]['topic_moved_id'];

			$folder_image =  $images['folder'];
			$folder_alt = $lang['Topics_Moved'];
			$newest_post_img = '';
		}
		else
		{
			if( $topic_rowset[$i]['topic_type'] == POST_ANNOUNCE )
			{
				$folder = $images['folder_announce'];
				$folder_new = $images['folder_announce_new'];
			}
			else if( $topic_rowset[$i]['topic_type'] == POST_STICKY )
			{
				$folder = $images['folder_sticky'];
				$folder_new = $images['folder_sticky_new'];
			}
			else if( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED )
			{
				$folder = $images['folder_locked'];
				$folder_new = $images['folder_locked_new'];
			}
			else
			{
				if($replies >= $board_config['hot_threshold'])
				{
					$folder = $images['folder_hot'];
					$folder_new = $images['folder_hot_new'];
				}
				else
				{
					$folder = $images['folder'];
					$folder_new = $images['folder_new'];
				}
			}

			$newest_post_img = '';
			if( $userdata['session_logged_in'] )
			{
				if( $topic_rowset[$i]['post_time'] > $userdata['user_lastvisit'] ) 
				{
					if( !empty($tracking_topics) || !empty($tracking_forums) || isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all']) )
					{
						$unread_topics = true;

						if( !empty($tracking_topics[$topic_id]) )
						{
							if( $tracking_topics[$topic_id] >= $topic_rowset[$i]['post_time'] )
							{
								$unread_topics = false;
							}
						}

						if( !empty($tracking_forums[$forum_id]) )
						{
							if( $tracking_forums[$forum_id] >= $topic_rowset[$i]['post_time'] )
							{
								$unread_topics = false;
							}
						}

						if( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all']) )
						{
							if( $HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all'] >= $topic_rowset[$i]['post_time'] )
							{
								$unread_topics = false;
							}
						}

						if( $unread_topics )
						{
							$folder_image = $folder_new;
							$folder_alt = $lang['New_posts'];

							$newest_post_img = '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;view=newest") . '"><img src="' . $images['icon_newest_reply'] . '" alt="' . $lang['View_newest_post'] . '" title="' . $lang['View_newest_post'] . '" border="0" /></a> ';
						}
						else
						{
							$folder_image = $folder;
							$folder_alt = ( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];

							$newest_post_img = '';
						}
					}
					else
					{
						$folder_image = $folder_new;
						$folder_alt = ( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['New_posts'];

						$newest_post_img = '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;view=newest") . '"><img src="' . $images['icon_newest_reply'] . '" alt="' . $lang['View_newest_post'] . '" title="' . $lang['View_newest_post'] . '" border="0" /></a> ';
					}
				}
				else 
				{
					$folder_image = $folder;
					$folder_alt = ( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];

					$newest_post_img = '';
				}
			}
			else
			{
				$folder_image = $folder;
				$folder_alt = ( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];

				$newest_post_img = '';
			}
		}

		if( ( $replies + 1 ) > $board_config['posts_per_page'] )
		{
			$total_pages = ceil( ( $replies + 1 ) / $board_config['posts_per_page'] );
			$goto_page = ' [ <img src="' . $images['icon_gotopost'] . '" alt="' . $lang['Goto_page'] . '" title="' . $lang['Goto_page'] . '" />' . $lang['Goto_page'] . ': ';

			$times = 1;
			for($j = 0; $j < $replies + 1; $j += $board_config['posts_per_page'])
			{
				$goto_page .= '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=" . $topic_id . "&amp;start=$j") . '">' . $times . '</a>';
				if( $times == 1 && $total_pages > 4 )
				{
					$goto_page .= ' ... ';
					$times = $total_pages - 3;
					$j += ( $total_pages - 4 ) * $board_config['posts_per_page'];
				}
				else if ( $times < $total_pages )
				{
					$goto_page .= ', ';
				}
				$times++;
			}
			$goto_page .= ' ] ';
		}
		else
		{
			$goto_page = '';
		}
		
		$view_topic_url = append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id");

		$topic_author = ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '=' . $topic_rowset[$i]['user_id']) . '">' : '';
// Begin PNphpBB2 Module
//		$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? $topic_rowset[$i]['username'] : ( ( $topic_rowset[$i]['post_username'] != '' ) ? $topic_rowset[$i]['post_username'] : $lang['Guest'] );
		$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? pnVarPrepForDisplay($topic_rowset[$i]['username']) : ( ( $topic_rowset[$i]['post_username'] != '' ) ? pnVarPrepForDisplay($topic_rowset[$i]['post_username']) : $lang['Guest'] );
// End PNphpBB2 Module

		$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? '</a>' : '';

		$first_post_time = create_date($board_config['default_dateformat'], $topic_rowset[$i]['topic_time'], $board_config['board_timezone']);

		$last_post_time = create_date($board_config['default_dateformat'], $topic_rowset[$i]['post_time'], $board_config['board_timezone']);

// Begin PNphpBB2 Module
//		$last_post_author = ( $topic_rowset[$i]['id2'] == ANONYMOUS ) ? ( ($topic_rowset[$i]['post_username2'] != '' ) ? $topic_rowset[$i]['post_username2'] . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $topic_rowset[$i]['id2']) . '">' . $topic_rowset[$i]['user2'] . '</a>';
		$last_post_author = ( $topic_rowset[$i]['id2'] == ANONYMOUS ) ? ( ($topic_rowset[$i]['post_username2'] != '' ) ? pnVarPrepForDisplay($topic_rowset[$i]['post_username2']) . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $topic_rowset[$i]['id2']) . '">' . pnVarPrepForDisplay($topic_rowset[$i]['user2']) . '</a>';
// End PNphpBB2 Module

		$last_post_url = '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $topic_rowset[$i]['topic_last_post_id']) . '#' . $topic_rowset[$i]['topic_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" border="0" /></a>';

		$views = $topic_rowset[$i]['topic_views'];
		
// Begin PNphpBB2 Module
//		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
//		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
		$row_color = ( !($i % 2) ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module

		$template->assign_block_vars('topicrow', array(
/* Begin PNphpBB2 Module (Message Icons) */
			'ICON' => ( $topic_rowset[$i]['topic_icon'] == 0) ? "&nbsp" : "<img " . $board_config['posticons_size'] . " src=\"" . $board_config['path_posticons'] . "/image_" . $topic_rowset[$i]['topic_icon'] . ".gif\" alt=\"" . $topic_rowset[$i]['topic_icon'] . "\" border=\"0\">", 
/* End PNphpBB2 Module (Message Icons) */
			'ROW_COLOR' => $row_color,
			'ROW_CLASS' => $row_class,
			'FORUM_ID' => $forum_id,
			'TOPIC_ID' => $topic_id,
			'TOPIC_FOLDER_IMG' => $folder_image, 
			'TOPIC_AUTHOR' => $topic_author, 
			'GOTO_PAGE' => $goto_page,
			'REPLIES' => $replies,
			'NEWEST_POST_IMG' => $newest_post_img, 
/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
			'TOPIC_ATTACHMENT_IMG' => (!intval($attach_config['disable_mod'])) ? topic_attachment_image($topic_rowset[$i]['topic_attachment']) : '', 
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
/* Begin PNphpBB2 Module (Support Status Mod) */
/*			'TOPIC_TITLE' => $topic_title, */
			'TOPIC_TITLE' => $topic_title_status . $topic_title,
/* End PNphpBB2 Module (Support Status Mod) */
			'TOPIC_TYPE' => $topic_type,
			'VIEWS' => $views,
			'FIRST_POST_TIME' => $first_post_time, 
			'LAST_POST_TIME' => $last_post_time, 
			'LAST_POST_AUTHOR' => $last_post_author, 
			'LAST_POST_IMG' => $last_post_url, 

			'L_TOPIC_FOLDER_ALT' => $folder_alt, 

			'U_VIEW_TOPIC' => $view_topic_url)
		);
// Begin PNphpBB2 Module (Split Annouce/Sticky)
		$topic_real_type = $topic_rowset[$i]['topic_type'];

		// if no split between global and standard announcement, group them with standard announcement
		if ( (!$switch_split_global_announce) && ($topic_real_type == POST_GLOBAL_ANNOUNCE) ) $topic_real_type = POST_ANNOUNCE; 

		// if no split between announce and sticky, group them with sticky
		if ( (!$switch_split_announce) && ($topic_real_type == POST_ANNOUNCE) ) $topic_real_type = POST_STICKY; 

		// if no split between sticky and normal, group them with normal
		if ( (!$switch_split_sticky) && ($topic_real_type == POST_STICKY) ) $topic_real_type = POST_NORMAL;

		// check prec type
		$is_rupt = false;
		if ($prec_topic_real_type != $topic_real_type)
		{
			if ($prec_topic_real_type == -1) $is_rupt = ( $topic_real_type != POST_NORMAL );
			if ($prec_topic_real_type != -1) $is_rupt = true;
		}

		// send to screen
		if ( $is_rupt )
		{
			$title = '';
			switch ($topic_real_type)
			{
				case POST_GLOBAL_ANNOUNCE:
					$title = $lang['Post_global_announcement'];
					break;
				case POST_ANNOUNCE:
					$title = $lang['Post_Announcement'];
					break;

				case POST_STICKY:
					$title = $lang['Post_Sticky'];
					break;

				case POST_NORMAL:
					$title = $lang['Topics'];
					break;

				default:
					$title = '???';
					break;
			}

			$template->assign_block_vars('topicrow.topictype', array(
				'TITLE' => $title,
				)
			);
		}
		$prec_topic_real_type = $topic_real_type;
// End PNphpBB2 Module (Split Annouce/Sticky)
	}

	$topics_count -= $total_announcements;
	
// Begin PNphpBB2 Module (Topic/Post sort order)
// -- Remove --
/*
	$template->assign_vars(array(
		'PAGINATION' => generate_pagination("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;topicdays=$topic_days", $topics_count, $board_config['topics_per_page'], $start), 
		'PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $topics_count / $board_config['topics_per_page'] )), 
		'L_GOTO_PAGE' => $lang['Goto_page'])
	);
*/
// -- Add --
 	generate_pagination("viewforum&" . POST_FORUM_URL . "=$forum_id&topicdays=$topic_days" . ( ($forum_row['forum_type'] == FORUM_TYPE_TOPIC_SORT_TITLE) ? "&sort=$sort_method&order=$sort_order" : "" ), $topics_count, $board_config['topics_per_page'], $start, true);
// End PNphpBB2 Module (Topic/Post sort order)
}
else
{
	//
	// No topics
	//
	$no_topics_msg = ( $forum_row['forum_status'] == FORUM_LOCKED ) ? $lang['Forum_locked'] : $lang['No_topics_post_one'];
	$template->assign_vars(array(
		'L_NO_TOPICS' => $no_topics_msg)
	);

	$template->assign_block_vars('switch_no_topics', array() );

}

//
// Parse the page and print
//
$template->pparse('body');

//
// Page footer
//
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>