<?php
/***************************************************************************
 *                                index.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: index.php,v 1.2 2006/05/03 19:29:27 adrianc602 Exp $
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
$phpbb_root_path = './modules/' . $ModName . '/';
// End PNphpBB2 Module
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

// Begin PNphpBB2 Categories Hierarchie Mod
include($phpbb_root_path . 'includes/functions_cat.'.$phpEx);
// End PNphpBB2 Categories Hierarchie Mod

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

// Begin PNphpBB2 Module - Minimize/Maximize Mod
if ( isset($HTTP_GET_VARS['minmax']) || isset($HTTP_POST_VARS['minmax']) && $board_config['pnphpbb2_allow_full_page'] == 1)
{
	 $fullpage = intval(( isset($HTTP_POST_VARS['minmax']) ) ? $HTTP_POST_VARS['minmax'] : $HTTP_GET_VARS['minmax']);
 	 pnSessionSetVar('fullpage', ($fullpage == 1) ? 1 : 0);
} 	 
// End PNphpBB2 Module - Minimize/Maximize Mod

// Begin PNphpBB2 Module - Sub-Category/forum switch mod
if ( isset($HTTP_GET_VARS['subforum']) || isset($HTTP_POST_VARS['subforum']) && $board_config['pnphpbb2_allow_sub_change'] == 1)
{
	 $subforum = ( isset($HTTP_POST_VARS['subforum']) ) ? $HTTP_POST_VARS['subforum'] : $HTTP_GET_VARS['subforum'];
 	 pnSessionSetVar('subforum', $subforum);
} 	 
// End PNphpBB2 Module - Sub-Category/forum switch mod

$viewcat = ( !empty($HTTP_GET_VARS[POST_CAT_URL]) ) ? $HTTP_GET_VARS[POST_CAT_URL] : -1;

if( isset($HTTP_GET_VARS['mark']) || isset($HTTP_POST_VARS['mark']) )
{
	$mark_read = ( isset($HTTP_POST_VARS['mark']) ) ? $HTTP_POST_VARS['mark'] : $HTTP_GET_VARS['mark'];
}
else
{
	$mark_read = '';
}

//
// Handle marking posts
//
if( $mark_read == 'forums' )
{
// Begin PNphpBB2 Categories Hierarchie Mod
	if ( $viewcat < 0 )
	{
// End PNphpBB2 Categories Hierarchie Mod
	if( $userdata['session_logged_in'] )
	{
		setcookie($board_config['cookie_name'] . '_f_all', time(), 0, $board_config['cookie_path'], $board_config['cookie_domain'], $board_config['cookie_secure']);
	}

	$template->assign_vars(array(
		"META" => '<meta http-equiv="refresh" content="3;url='  .append_sid("index.$phpEx") . '">')
	);
// Begin PNphpBB2 Categories Hierarchie Mod
	}
	else
	{
		if( $userdata['session_logged_in'] )
		{
			// get the list of the involved cats
			$catrows = array();
			$catrows = get_cat($viewcat);

			// build the string list
			$catids = array();
			for ( $i=0; $i < count($catrows); $i++) $catids[] = $catrows[$i]['cat_id'];
			$s_cat = implode(', ', $catids);

			// get the list of the involved forums
			$forumids = array();
			$sql = "select * from " . FORUMS_TABLE . " where cat_id in ($s_cat)";
			if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not query new forums information', '', __LINE__, __FILE__, $sql);
			while ( $row = $db->sql_fetchrow($result) ) $forumids[] = $row;

			// mark each forums
			for ( $i=0; $i < count($forumids); $i++ )
			{
				$forum_id = $forumids[$i]['forum_id'];
				$sql = "SELECT MAX(post_time) AS last_post FROM " . POSTS_TABLE . " WHERE forum_id = $forum_id";
				if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not obtain forums information', '', __LINE__, __FILE__, $sql);
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
			}
		}

		$template->assign_vars(array(
			"META" => '<meta http-equiv="refresh" content="3;url='  .append_sid("index.$phpEx?" . POST_CAT_URL . "=$viewcat") . '">')
		);
	}
// End PNphpBB2 Categories Hierarchie Mod
	$message = $lang['Forums_marked_read'] . '<br /><br />' . sprintf($lang['Click_return_index'], '<a href="' . append_sid("index.$phpEx") . '">', '</a> ');

	message_die(GENERAL_MESSAGE, $message);
}
//
// End handle marking posts
//

$tracking_topics = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . "_t"]) : array();
$tracking_forums = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . "_f"]) : array();

//
// If you don't use these stats on your index you may want to consider
// removing them
//
$total_posts = get_db_stat('postcount');
$total_users = get_db_stat('usercount');
$newest_userdata = get_db_stat('newestuser');
$newest_user = $newest_userdata['username'];
$newest_uid = $newest_userdata['user_id'];

if( $total_posts == 0 )
{
	$l_total_post_s = $lang['Posted_articles_zero_total'];
}
else if( $total_posts == 1 )
{
	$l_total_post_s = $lang['Posted_article_total'];
}
else
{
	$l_total_post_s = $lang['Posted_articles_total'];
}

if( $total_users == 0 )
{
	$l_total_user_s = $lang['Registered_users_zero_total'];
}
else if( $total_users == 1 )
{
	$l_total_user_s = $lang['Registered_user_total'];
}
else
{
	$l_total_user_s = $lang['Registered_users_total'];
}


//
// Start page proper
//
// Begin PNphpBB2 Categories Hierarchie Mod
// $sql = "SELECT c.cat_id, c.cat_title, c.cat_order
// 	FROM " . CATEGORIES_TABLE . " c 
// 	ORDER BY c.cat_order";
// if( !($result = $db->sql_query($sql)) )
// {
// 	message_die(GENERAL_ERROR, 'Could not query categories list', '', __LINE__, __FILE__, $sql);
// }
//
// $category_rows = array();
// while ($row = $db->sql_fetchrow($result))
// {
//	$category_rows[] = $row;
// }
// $db->sql_freeresult($result);
//
// get the nav sentence
$nav_cat_desc = make_cat_nav_tree($viewcat, false);
//
// categories array
$category_rows = get_cat($viewcat);
// End PNphpBB2 Categories Hierarchie Mod

if( ( $total_categories = count($category_rows) ) )
{
	//
	// Define appropriate SQL
	//
	switch(SQL_LAYER)
	{
		case 'postgresql':
			$sql = "SELECT f.*, p.post_time, p.post_username, u.username, u.user_id 
				FROM " . FORUMS_TABLE . " f, " . POSTS_TABLE . " p, " . USERS_TABLE . " u
				WHERE p.post_id = f.forum_last_post_id 
					AND u.user_id = p.poster_id  
					UNION (
						SELECT f.*, NULL, NULL, NULL, NULL
						FROM " . FORUMS_TABLE . " f
						WHERE NOT EXISTS (
							SELECT p.post_time
							FROM " . POSTS_TABLE . " p
							WHERE p.post_id = f.forum_last_post_id  
						)
					)
					ORDER BY cat_id, forum_order";
			break;

		case 'oracle':
			$sql = "SELECT f.*, p.post_time, p.post_username, u.username, u.user_id 
				FROM " . FORUMS_TABLE . " f, " . POSTS_TABLE . " p, " . USERS_TABLE . " u
				WHERE p.post_id = f.forum_last_post_id(+)
					AND u.user_id = p.poster_id(+)
				ORDER BY f.cat_id, f.forum_order";
			break;

		default:
			$sql = "SELECT f.*, p.post_time, p.post_username, u.username, u.user_id
				FROM (( " . FORUMS_TABLE . " f
				LEFT JOIN " . POSTS_TABLE . " p ON p.post_id = f.forum_last_post_id )
				LEFT JOIN " . USERS_TABLE . " u ON u.user_id = p.poster_id )
				ORDER BY f.cat_id, f.forum_order";
			break;
	}
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forums information', '', __LINE__, __FILE__, $sql);
	}

	$forum_data = array();
	while( $row = $db->sql_fetchrow($result) )
	{
		$forum_data[] = $row;
	}
	$db->sql_freeresult($result);

	if ( !($total_forums = count($forum_data)) )
	{
		message_die(GENERAL_MESSAGE, $lang['No_forums']);
	}

	//
	// Obtain a list of topic ids which contain
	// posts made since user last visited
	//
	if ($userdata['session_logged_in'])
	{
		// 60 days limit
		if ($userdata['user_lastvisit'] < (time() - 5184000))
		{
			$userdata['user_lastvisit'] = time() - 5184000;
		}

		$sql = "SELECT t.forum_id, t.topic_id, p.post_time 
			FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p 
			WHERE p.post_id = t.topic_last_post_id 
				AND p.post_time > " . $userdata['user_lastvisit'] . " 
				AND t.topic_moved_id = 0"; 
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not query new topic information', '', __LINE__, __FILE__, $sql);
		}

		$new_topic_data = array();
		while( $topic_data = $db->sql_fetchrow($result) )
		{
			$new_topic_data[$topic_data['forum_id']][$topic_data['topic_id']] = $topic_data['post_time'];
		}
		$db->sql_freeresult($result);
	}

	//
	// Obtain list of moderators of each forum
	// First users, then groups ... broken into two queries
	//
	$sql = "SELECT aa.forum_id, u.user_id, u.username 
		FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g, " . USERS_TABLE . " u
		WHERE aa.auth_mod = " . TRUE . " 
			AND g.group_single_user = 1 
			AND ug.group_id = aa.group_id 
			AND g.group_id = aa.group_id 
			AND u.user_id = ug.user_id 
		GROUP BY u.user_id, u.username, aa.forum_id 
		ORDER BY aa.forum_id, u.user_id";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	$forum_moderators = array();
	while( $row = $db->sql_fetchrow($result) )
	{
// Begin PNphpBB2 Module
//		$forum_moderators[$row['forum_id']][] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . $row['username'] . '</a>';
		$forum_moderators[$row['forum_id']][] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . pnVarPrepForDisplay($row['username']) . '</a>';
// End PNphpBB2 Module
	}
	$db->sql_freeresult($result);

	$sql = "SELECT aa.forum_id, g.group_id, g.group_name 
		FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g 
		WHERE aa.auth_mod = " . TRUE . " 
			AND g.group_single_user = 0 
			AND g.group_type <> " . GROUP_HIDDEN . "
			AND ug.group_id = aa.group_id 
			AND g.group_id = aa.group_id 
		GROUP BY g.group_id, g.group_name, aa.forum_id 
		ORDER BY aa.forum_id, g.group_id";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	while( $row = $db->sql_fetchrow($result) )
	{
		$forum_moderators[$row['forum_id']][] = '<a href="' . append_sid("groupcp.$phpEx?" . POST_GROUPS_URL . "=" . $row['group_id']) . '">' . $row['group_name'] . '</a>';
	}
	$db->sql_freeresult($result);

	//
	// Find which forums are visible for this user
	//
	$is_auth_ary = array();
	$is_auth_ary = auth(AUTH_VIEW, AUTH_LIST_ALL, $userdata, $forum_data);

	//
	// Start output of page
	//
	define('SHOW_ONLINE', true);
	$page_title = $lang['Index'];
	include($phpbb_root_path . 'includes/page_header.'.$phpEx);

	$template->set_filenames(array(
		'body' => 'index_body.tpl')
	);
// Begin PNphpBB2 Categories Hierarchie Mod
	if ($nav_cat_desc != "") $nav_cat_desc = $nav_separator . $nav_cat_desc;
	$mark = ($viewcat == -1 ) ? '' : '&amp;' . POST_CAT_URL . '=' . $viewcat;
// End PNphpBB2 Categories Hierarchie Mod

	$template->assign_vars(array(
		'TOTAL_POSTS' => sprintf($l_total_post_s, $total_posts),
		'TOTAL_USERS' => sprintf($l_total_user_s, $total_users),
/* Begin PNphpBB2 Module */
/*		'NEWEST_USER' => sprintf($lang['Newest_user'], '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=$newest_uid") . '">', $newest_user, '</a>'),  */
		'NEWEST_USER' => sprintf($lang['Newest_user'], '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=$newest_uid") . '">', pnVarPrepForDisplay($newest_user), '</a>'), 
/* End PNphpBB2 Module */

		'FORUM_IMG' => $images['forum'],
		'FORUM_NEW_IMG' => $images['forum_new'],
		'FORUM_LOCKED_IMG' => $images['forum_locked'],
/* Begin PNphpBB2 Module */
		'WHOSONLINE' => $images['whosonline'],
		'L_POSTED' => $lang['Posted'],
		'L_LEGEND' => $lang['Legend'],
/* End PNphpBB2 Module */

		'L_FORUM' => $lang['Forum'],
		'L_TOPICS' => $lang['Topics'],
		'L_REPLIES' => $lang['Replies'],
		'L_VIEWS' => $lang['Views'],
		'L_POSTS' => $lang['Posts'],
		'L_LASTPOST' => $lang['Last_Post'], 
		'L_NO_NEW_POSTS' => $lang['No_new_posts'],
		'L_NEW_POSTS' => $lang['New_posts'],
		'L_NO_NEW_POSTS_LOCKED' => $lang['No_new_posts_locked'], 
		'L_NEW_POSTS_LOCKED' => $lang['New_posts_locked'], 
		'L_ONLINE_EXPLAIN' => $lang['Online_explain'], 

		'L_MODERATOR' => $lang['Moderators'], 
		'L_FORUM_LOCKED' => $lang['Forum_is_locked'],
		'L_MARK_FORUMS_READ' => $lang['Mark_all_forums'], 

/* Begin PNphpBB2 Categories Hierarchie Mod */
/*		'U_MARK_READ' => append_sid("index.$phpEx?mark=forums")) */
		'U_MARK_READ' => append_sid("index.$phpEx?mark=forums$mark"))
/* End PNphpBB2 Categories Hierarchie Mod */
	);

// Begin PNphpBB2 Module
	if ( !$board_config['pnphpbb2_members_online'] && (!$board_config['pnphpbb2_members_online_annon'] || $userdata['session_logged_in']))
	{
	 	 $template->assign_block_vars('switch_members_online', array());
	}
// End PNphpBB2 Module

// Begin PNphpBB2 Module (Announcements)
	if ($board_config['pnphpbb2_enable_announce'] == 1)
	{
	//
	$announcement_duration = 7;
	if ( isset( $board_config['pnphpbb2_announcement_duration'] ) )
	{
		$announcement_duration = $board_config['pnphpbb2_announcement_duration'];
	}
	$time_floor = ($announcement_duration == 0) ? 0 : time() - ( ($announcement_duration-1) * 24 * 3600 );

	$sql = 'select t.*, p.post_id, p.post_time, p.post_username, p.post_icon, f.*, u.username, u.user_id ' .
			' from ' . TOPICS_TABLE . ' as t, ' . POSTS_TABLE . ' as p, ' . FORUMS_TABLE . ' as f, ' . USERS_TABLE . ' as u ' .
			' where p.post_id = t.topic_last_post_id and f.forum_id = t.forum_id and p.poster_id=u.user_id' . 
			' and t.topic_type   = "' . POST_ANNOUNCE . '" '.
			' and t.topic_status <> ' . TOPIC_MOVED .
			' and p.post_time    >= ' . $time_floor .
			' and f.exclude_global_announce <> 1' .
			' order by p.post_time desc';

	if ( !($result = $db->sql_query($sql)) ) 
	{
		 message_die(GENERAL_ERROR, 'Could not query topic list :'. $sql, '', __LINE__, __FILE__, $sql);
	}

	while ($row = $db->sql_fetchrow($result))
	{
		$w_is_auth = array();
		$w_is_auth = auth(AUTH_ALL, $row['forum_id'], $userdata);
		if( $w_is_auth['auth_view'] && $w_is_auth['auth_read'] ) $topicrow[] = $row;
	}
	if ( count($topicrow) > 0 )
	{
		$template->assign_block_vars('switch_annonce',array(
			'L_ANNONCE' => $lang['Post_Announcement']."s"
			)
		);
		for ($i=0;$i<count($topicrow);$i++)
		{
			$folder = $images['folder_announce'];
			$folder_new = $images['folder_announce_new'];

			$folder_image = $folder;
			$folder_alt = $lang['Post_Announcement'];
			$newest_post_img = '';
			if( $userdata['session_logged_in'] )
			{
				if( $topicrow[$i]['post_time'] > $userdata['user_lastvisit'] ) 
				{
					if( !empty($tracking_topics) || !empty($tracking_forums) || isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all']) )
					{
						$unread_topics = true;

						if( !empty($tracking_topics[ $topicrow[$i]['topic_id'] ]) )
						{
							if( $tracking_topics[ $topicrow[$i]['topic_id'] ] >= $topicrow[$i]['post_time'] ) $unread_topics = false;
						}

						if( !empty($tracking_forums[ $topicrow[$i]['forum_id'] ]) )
						{
							if( $tracking_forums[ $topicrow[$i]['forum_id'] ] >= $topicrow[$i]['post_time'] ) $unread_topics = false;
						}

						if( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all']) )
						{
							if( $HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all'] >= $topicrow[$i]['post_time'] ) $unread_topics = false;
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
							$folder_alt = ( $topicrow[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];

							$newest_post_img = '';
						}
					}
					else
					{
						$folder_image = $folder_new;
						$folder_alt = ( $topicrow[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['New_posts'];

						$newest_post_img = '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;view=newest") . '"><img src="' . $images['icon_newest_reply'] . '" alt="' . $lang['View_newest_post'] . '" title="' . $lang['View_newest_post'] . '" border="0" /></a> ';
					}
				}
				else 
				{
					$folder_image = $folder;
					$folder_alt = ( $topicrow[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];

					$newest_post_img = '';
				}
			}
			else
			{
				$folder_image = $folder;
				$folder_alt = ( $topicrow[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];

				$newest_post_img = '';
			}
			
			if ( $topicrow[$i]['topic_last_post_id'] )
			{
			 	 $last_post_time = create_date($board_config['default_dateformat'], $topicrow[$i]['post_time'], $board_config['board_timezone']);
				 $last_post = $last_post_time . '<br />';
// Begin PNphpBB2 Module
				 $last_post .= ( $topicrow[$i]['user_id'] == ANONYMOUS ) ? ( ($topicrow[$i]['post_username'] != '' ) ? pnVarPrepForDisplay($topicrow[$i]['post_username']) . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $topicrow[$i]['user_id']) . '">' . pnVarPrepForDisplay($topicrow[$i]['username']) . '</a> ';
// End PNphpBB2 Module
				 $last_post .= '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $topicrow[$i]['topic_last_post_id']) . '#' . $topicrow[$i]['topic_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
			}
			else
			{
			 	 $last_post = $lang['No_Posts'];
			}
			$topic_url = append_sid("viewtopic.$phpEx?".POST_TOPIC_URL."=".$topicrow[$i]['topic_id']);
			$forum_url = append_sid("viewforum.$phpEx?".POST_FORUM_URL."=".$topicrow[$i]['forum_id']);
			$template->assign_block_vars('switch_annonce.topicrow',array(
/* Begin PNphpBB2 Module (Message Icons) */
	 			'ICON' => ( $topicrow[$i]['topic_icon'] == 0) ? "&nbsp;" : "<img " . $board_config['posticons_size'] . " src=\"" . $board_config['path_posticons'] . "/image_" . $topicrow[$i]['topic_icon'] . ".gif\" alt=\"" . $topicrow[$i]['topic_icon'] . "\" border=\"0\">",
/* End PNphpBB2 Module (Message Icons) */
				'TOPIC_FOLDER_IMG'   => $folder_image,
				'L_TOPIC_FOLDER_ALT' => $folder_alt,
				'U_VIEW_TOPIC'       => $topic_url,
				'TOPIC_TITLE'        => $topicrow[$i]['topic_title'],
				'U_VIEW_FORUM'       => $forum_url,
				'FORUM_TITLE'        => $topicrow[$i]['forum_name'],
				'LAST_POST' 				 => $last_post
				)
			);
		}
	}
	}
// End PNphpBB2 Module (Announcements)


// Begin PNphpBB2 Categories Hierarchie Mod
	$template->assign_vars(array(
		'NAV_CAT_DESC' => $nav_cat_desc)
	);
// End PNphpBB2 Categories Hierarchie Mod

	//
 	// Let's decide which categories we should display
 	//
 	$display_categories = array();
 
 	for ($i = 0; $i < $total_forums; $i++ )
 	{
 		if ($is_auth_ary[$forum_data[$i]['forum_id']]['auth_view'])
 		{
 			$display_categories[$forum_data[$i]['cat_id']] = true;
 		}
 	}
 
 	//
	// Okay, let's build the index
	//

// Begin PNphpBB2 Categories Hierarchie Mod
//	for($i = 0; $i < $total_categories; $i++)
//	{
//		$cat_id = $category_rows[$i]['cat_id'];
//
//		//
//		// Should we display this category/forum set?
//		//
//		$display_forums = false;
//		for($j = 0; $j < $total_forums; $j++)
//		{
//			if ( $is_auth_ary[$forum_data[$j]['forum_id']]['auth_view'] && $forum_data[$j]['cat_id'] == $cat_id )
//			{
//				$display_forums = true;
//			}
//		}
//
//		//
//		// Yes, we should, so first dump out the category
//		// title, then, if appropriate the forum list
//		//
//		if (isset($display_categories[$cat_id]) && $display_categories[$cat_id])
//		{
//			$template->assign_block_vars('catrow', array(
//				'CAT_ID' => $cat_id,
//				'CAT_DESC' => $category_rows[$i]['cat_title'],
//				'U_VIEWCAT' => append_sid("index.$phpEx?" . POST_CAT_URL . "=$cat_id"))
//			);
//
//			if ( $viewcat == $cat_id || $viewcat == -1 )
//			{
//				for($j = 0; $j < $total_forums; $j++)
//				{
//					if ( $forum_data[$j]['cat_id'] == $cat_id )
//					{
//						$forum_id = $forum_data[$j]['forum_id'];
//
//						if ( $is_auth_ary[$forum_id]['auth_view'] )
//						{
//							if ( $forum_data[$j]['forum_status'] == FORUM_LOCKED )
//							{
//								$folder_image = $images['forum_locked']; 
//								$folder_alt = $lang['Forum_locked'];
//							}
//							else
//							{
//								$unread_topics = false;
//								if ( $userdata['session_logged_in'] )
//								{
//									if ( !empty($new_topic_data[$forum_id]) )
//									{
//										$forum_last_post_time = 0;
//
//										while( list($check_topic_id, $check_post_time) = @each($new_topic_data[$forum_id]) )
//										{
//											if ( empty($tracking_topics[$check_topic_id]) )
//											{
//												$unread_topics = true;
//												$forum_last_post_time = max($check_post_time, $forum_last_post_time);
//
//											}
//											else
//											{
//												if ( $tracking_topics[$check_topic_id] < $check_post_time )
//												{
//													$unread_topics = true;
//													$forum_last_post_time = max($check_post_time, $forum_last_post_time);
//												}
//											}
//										}
//
//										if ( !empty($tracking_forums[$forum_id]) )
//										{
//											if ( $tracking_forums[$forum_id] > $forum_last_post_time )
//											{
//												$unread_topics = false;
//											}
//										}
//
//										if ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all']) )
//										{
//											if ( $HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all'] > $forum_last_post_time )
//											{
//												$unread_topics = false;
//											}
//										}
//
//									}
//								}
//
//								$folder_image = ( $unread_topics ) ? $images['forum_new'] : $images['forum']; 
//								$folder_alt = ( $unread_topics ) ? $lang['New_posts'] : $lang['No_new_posts']; 
//							}
//
//							$posts = $forum_data[$j]['forum_posts'];
//							$topics = $forum_data[$j]['forum_topics'];
//
//							if ( $forum_data[$j]['forum_last_post_id'] )
//							{
//								$last_post_time = create_date($board_config['default_dateformat'], $forum_data[$j]['post_time'], $board_config['board_timezone']);
//
//								$last_post = $last_post_time . '<br />';
//
// // Begin PNphpBB2 Module
//								$last_post .= ( $forum_data[$j]['user_id'] == ANONYMOUS ) ? ( ($forum_data[$j]['post_username'] != '' ) ? pnVarPrepForDisplay($forum_data[$j]['post_username']) . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $forum_data[$j]['user_id']) . '">' . pnVarPrepForDisplay($forum_data[$j]['username']) . '</a> ';
// // End PNphpBB2 Module
//								
//								$last_post .= '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
//							}
//							else
//							{
//								$last_post = $lang['No_Posts'];
//							}
//
//							if ( count($forum_moderators[$forum_id]) > 0 )
//							{
//								$l_moderators = ( count($forum_moderators[$forum_id]) == 1 ) ? $lang['Moderator'] : $lang['Moderators'];
//								$moderator_list = implode(', ', $forum_moderators[$forum_id]);
//							}
//							else
//							{
//								$l_moderators = '&nbsp;';
//								$moderator_list = '&nbsp;';
//							}
//
//// Begin PNphpBB2 Module
//							$row_color = ( !($i % 2) ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
//							$row_class = ( !($i % 2) ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
//// End PNphpBB2 Module
//
//							$template->assign_block_vars('catrow.forumrow',	array(
//								'ROW_COLOR' => '#' . $row_color,
//								'ROW_CLASS' => $row_class,
//								'FORUM_FOLDER_IMG' => $folder_image, 
//								'FORUM_NAME' => $forum_data[$j]['forum_name'],
//								'FORUM_DESC' => $forum_data[$j]['forum_desc'],
//								'POSTS' => $forum_data[$j]['forum_posts'],
//								'TOPICS' => $forum_data[$j]['forum_topics'],
//								'LAST_POST' => $last_post,
//								'MODERATORS' => $moderator_list,
//
//								'L_MODERATOR' => $l_moderators, 
//								'L_FORUM_FOLDER_ALT' => $folder_alt, 
//
//								'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"))
//							);
//						}
//					}
//				}
//			}
//		}
//	} // for ... categories

	$max_depth = ( !$sub_forum ) ? get_max_depth($viewcat) : 0;
	$template->assign_vars(array(
		'INC_SPAN' => $max_depth + 2)
	);

	enhance_cat($viewcat);

	// display the index
	$found=false;
	for ($i=0; ($i < $total_categories) && !$found; $i++)
	{
		if ( ($viewcat==-1 && $category_rows[$i]['cat_main']==0) || ($viewcat > 0 && $category_rows[$i]['cat_id']==$viewcat) )
		{
			display_index_cat($category_rows[$i], $sub_forum, true);
			$found = ($viewcat > 0);
		}
	}
// End PNphpBB2 Categories Hierarchie Mod

}// if ... total_categories
else
{
	message_die(GENERAL_MESSAGE, $lang['No_forums']);
}

//
// Generate the page
//
$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>