<?php
/***************************************************************************
 *                                 modcp.php
 *                            -------------------
 *   begin                : July 4, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: modcp.php,v 1.2 2006/05/03 12:40:49 adrianc602 Exp $
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

/**
 * Moderator Control Panel
 *
 * From this 'Control Panel' the moderator of a forum will be able to do
 * mass topic operations (locking/unlocking/moving/deleteing), and it will
 * provide an interface to do quick locking/unlocking/moving/deleting of
 * topics via the moderator operations buttons on all of the viewtopic pages.
 */
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
include($phpbb_root_path . 'includes/bbcode.'.$phpEx);
include($phpbb_root_path . 'includes/functions_admin.'.$phpEx);

// Begin PNphpBB2 Module
// function block
// Used by the merge function
function get_topic_id($topic)
{
	global $db;
	$topic_id = 0;

	// is this a direct value ?
	$num_topic = intval($topic);
	if ($topic == "$num_topic")
	{
		$topic_id = intval($topic);
	}

	// is it an url with topic id or post id ?
	else
	{
		$name = explode('?', $topic);
		$parms = ( isset($name[1]) ) ? $name[1] : $name[0];
		parse_str($parms, $parm);
		$found = false;
		$topic_id = 0;
		while ((list($key, $val) = each($parm)) && !$found)
		{
			$vals = explode('#', $val);
			$val = $vals[0];
			if (empty($val)) $val = 0;
			switch($key)
			{
				case POST_POST_URL:
					$sql = "SELECT topic_id FROM " . POSTS_TABLE . " WHERE post_id=$val";
					if ( !($result = $db->sql_query($sql)) ) message_die(GENERAL_ERROR, 'Could not get post informations', '', __LINE__, __FILE__, $sql);
					if ($row = $db->sql_fetchrow($result))
					{
						$val = $row['topic_id'];
						$found = true;
					}
					break;
				case POST_TOPIC_URL:
					$found = true;
					break;
			}
			if ($found)
			{
				$topic_id = intval($val);
			}
		}
	}

	return $topic_id;
}
// End PNphpBB2 Module

//
// Obtain initial var settings
//
if ( isset($HTTP_GET_VARS[POST_FORUM_URL]) || isset($HTTP_POST_VARS[POST_FORUM_URL]) )
{
	$forum_id = (isset($HTTP_POST_VARS[POST_FORUM_URL])) ? intval($HTTP_POST_VARS[POST_FORUM_URL]) : intval($HTTP_GET_VARS[POST_FORUM_URL]);
}
else
{
	$forum_id = '';
}

if ( isset($HTTP_GET_VARS[POST_POST_URL]) || isset($HTTP_POST_VARS[POST_POST_URL]) )
{
	$post_id = (isset($HTTP_POST_VARS[POST_POST_URL])) ? intval($HTTP_POST_VARS[POST_POST_URL]) : intval($HTTP_GET_VARS[POST_POST_URL]);
}
else
{
	$post_id = '';
}

if ( isset($HTTP_GET_VARS[POST_TOPIC_URL]) || isset($HTTP_POST_VARS[POST_TOPIC_URL]) )
{
	$topic_id = (isset($HTTP_POST_VARS[POST_TOPIC_URL])) ? intval($HTTP_POST_VARS[POST_TOPIC_URL]) : intval($HTTP_GET_VARS[POST_TOPIC_URL]);
}
else
{
	$topic_id = '';
}

$confirm = ( $HTTP_POST_VARS['confirm'] ) ? TRUE : 0;

//
// Continue var definitions
//
$start = ( isset($HTTP_GET_VARS['start']) ) ? intval($HTTP_GET_VARS['start']) : 0;

$delete = ( isset($HTTP_POST_VARS['delete']) ) ? TRUE : FALSE;
$move = ( isset($HTTP_POST_VARS['move']) ) ? TRUE : FALSE;
$lock = ( isset($HTTP_POST_VARS['lock']) ) ? TRUE : FALSE;
$unlock = ( isset($HTTP_POST_VARS['unlock']) ) ? TRUE : FALSE;
// Begin PNphpBB2 Module
$merge = ( isset($HTTP_POST_VARS['merge']) ) ? TRUE : FALSE;
// End PNphpBB2 Module

if ( isset($HTTP_POST_VARS['mode']) || isset($HTTP_GET_VARS['mode']) )
{
	$mode = ( isset($HTTP_POST_VARS['mode']) ) ? $HTTP_POST_VARS['mode'] : $HTTP_GET_VARS['mode'];
	$mode = htmlspecialchars($mode);
}
else
{
	if ( $delete )
	{
		$mode = 'delete';
	}
	else if ( $move )
	{
		$mode = 'move';
	}
	else if ( $lock )
	{
		$mode = 'lock';
	}
	else if ( $unlock )
	{
		$mode = 'unlock';
	}
// Begin PNphpBB2 Module
	else if ( $merge )
	{
	  $mode = 'merge';
	}
// End PNphpBB2 Module

	else
	{
		$mode = '';
	}
}

// session id check
if (!empty($HTTP_POST_VARS['sid']) || !empty($HTTP_GET_VARS['sid']))
{
	$sid = (!empty($HTTP_POST_VARS['sid'])) ? $HTTP_POST_VARS['sid'] : $HTTP_GET_VARS['sid'];
}
else
{
	$sid = '';
}

//
// Obtain relevant data
//
if ( !empty($topic_id) )
{
// Begin PNphpBB2 Categories Hierarchie Mod
//	$sql = "SELECT f.forum_id, f.forum_name, f.forum_topics
//		FROM " . TOPICS_TABLE . " t, " . FORUMS_TABLE . " f 
//		WHERE t.topic_id = " . $topic_id . "
//			AND f.forum_id = t.forum_id";
	$sql = "SELECT f.forum_id, f.forum_name, f.forum_topics, f.cat_id, t.topic_title 
		FROM " . TOPICS_TABLE . " t, " . FORUMS_TABLE . " f 
		WHERE t.topic_id = " . $topic_id . "
			AND f.forum_id = t.forum_id";
// End PNphpBB2 Categories Hierarchie Mod
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_MESSAGE, 'Topic_post_not_exist');
	}
	$topic_row = $db->sql_fetchrow($result);

	if (!$topic_row)
	{
		message_die(GENERAL_MESSAGE, 'Topic_post_not_exist');
	}

	$forum_topics = ( $topic_row['forum_topics'] == 0 ) ? 1 : $topic_row['forum_topics'];
	$forum_id = $topic_row['forum_id'];
	$forum_name = $topic_row['forum_name'];
// Begin PNphpBB2 Categories Hierarchie Mod
	$cat_id = $topic_row['cat_id'];
	$topic_title = $topic_row['topic_title'];
// End PNphpBB2 Categories Hierarchie Mod
}
else if ( !empty($forum_id) )
{
// Begin PNphpBB2 Categories Hierarchie Mod
//	$sql = "SELECT forum_name, forum_topics
//		FROM " . FORUMS_TABLE . "
//		WHERE forum_id = " . $forum_id;
	$sql = "SELECT forum_name, forum_topics, cat_id 
		FROM " . FORUMS_TABLE . "
		WHERE forum_id = " . $forum_id;
// End PNphpBB2 Categories Hierarchie Mod
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_MESSAGE, 'Forum_not_exist');
	}
	$topic_row = $db->sql_fetchrow($result);

	if (!$topic_row)
	{
		message_die(GENERAL_MESSAGE, 'Forum_not_exist');
	}

	$forum_topics = ( $topic_row['forum_topics'] == 0 ) ? 1 : $topic_row['forum_topics'];
	$forum_name = $topic_row['forum_name'];
// Begin PNphpBB2 Categories Hierarchie Mod
	$cat_id = $topic_row['cat_id'];
	$topic_title = '';
// End PNphpBB2 Categories Hierarchie Mod
}
else
{
	message_die(GENERAL_MESSAGE, 'Forum_not_exist');
}

// Begin PNphpBB2 Categories Hierarchie Mod
$nav_cat_desc = $nav_separator . make_cat_nav_tree($cat_id, true);
$nav_cat_desc .= $nav_separator . '<a href="'.append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id").'" class="nav">'.$forum_name.'</a>';
if ($topic_title != '') $nav_cat_desc .= $nav_separator . '<a href="'.append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id").'" class="nav">'.$topic_title.'</a>';
// End PNphpBB2 Categories Hierarchie Mod

//
// Start session management
//
$userdata = session_pagestart($user_ip, $forum_id);
init_userprefs($userdata);
//
// End session management
//

// session id check
if ($sid == '' || $sid != $userdata['session_id'])
{
	message_die(GENERAL_ERROR, 'Invalid_session');
}

//
// Check if user did or did not confirm
// If they did not, forward them to the last page they were on
//
// Begin PNphpBB2 Module (Merge topics)
// if ( isset($HTTP_POST_VARS['cancel']) )
if ( isset($HTTP_POST_VARS['cancel']) && !isset($HTTP_POST_VARS['select_from']) && !isset($HTTP_POST_VARS['select_to']) )
// End PNphpBB2 Module (Merge topics)
{
	if ( $topic_id )
	{
		$redirect = "viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id";
	}
	else if ( $forum_id )
	{
		$redirect = "viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id";
	}
	else
	{
		$redirect = "index.$phpEx";
	}

	redirect(append_sid($redirect, true));
}

//
// Start auth check
//
$is_auth = auth(AUTH_ALL, $forum_id, $userdata);

if ( !$is_auth['auth_mod'] )
{
	message_die(GENERAL_MESSAGE, $lang['Not_Moderator'], $lang['Not_Authorised']);
}
//
// End Auth Check
//

//
// Do major work ...
//
switch( $mode )
{
	case 'delete':
		if (!$is_auth['auth_delete'])
		{
			message_die(GENERAL_MESSAGE, sprintf($lang['Sorry_auth_delete'], $is_auth['auth_delete_type']));
		}

		$page_title = $lang['Mod_CP'];
		include($phpbb_root_path . 'includes/page_header.'.$phpEx);

		if ( $confirm )
		{
  			if ( empty($HTTP_POST_VARS['topic_id_list']) && empty($topic_id) )
			{
				message_die(GENERAL_MESSAGE, $lang['None_selected']);
			}

			include($phpbb_root_path . 'includes/functions_search.'.$phpEx);

			$topics = ( isset($HTTP_POST_VARS['topic_id_list']) ) ? $HTTP_POST_VARS['topic_id_list'] : array($topic_id);

			$topic_id_sql = '';
			for($i = 0; $i < count($topics); $i++)
			{
				$topic_id_sql .= ( ( $topic_id_sql != '' ) ? ', ' : '' ) . intval($topics[$i]);
			}

			$sql = "SELECT topic_id 
				FROM " . TOPICS_TABLE . "
				WHERE topic_id IN ($topic_id_sql)
					AND forum_id = $forum_id";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not get topic id information', '', __LINE__, __FILE__, $sql);
			}
			
			$topic_id_sql = '';
			while ($row = $db->sql_fetchrow($result))
			{
				$topic_id_sql .= (($topic_id_sql != '') ? ', ' : '') . intval($row['topic_id']);
			}
			$db->sql_freeresult($result);

			if ( $topic_id_sql == '')
			{
				message_die(GENERAL_MESSAGE, $lang['None_selected']);
			}

			$sql = "SELECT poster_id, COUNT(post_id) AS posts 
				FROM " . POSTS_TABLE . " 
				WHERE topic_id IN ($topic_id_sql) 
				GROUP BY poster_id";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not get poster id information', '', __LINE__, __FILE__, $sql);
			}

			$count_sql = array();
			while ( $row = $db->sql_fetchrow($result) )
			{
				$count_sql[] = "UPDATE " . USERS_TABLE . " 
					SET user_posts = user_posts - " . $row['posts'] . " 
					WHERE user_id = " . $row['poster_id'];
			}
			$db->sql_freeresult($result);

			if ( sizeof($count_sql) )
			{
				for($i = 0; $i < sizeof($count_sql); $i++)
				{
					if ( !$db->sql_query($count_sql[$i]) )
					{
						message_die(GENERAL_ERROR, 'Could not update user post count information', '', __LINE__, __FILE__, $sql);
					}
				}
			}
			
			$sql = "SELECT post_id 
				FROM " . POSTS_TABLE . " 
				WHERE topic_id IN ($topic_id_sql)";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not get post id information', '', __LINE__, __FILE__, $sql);
			}

			$post_id_sql = '';
			while ( $row = $db->sql_fetchrow($result) )
			{
				$post_id_sql .= ( ( $post_id_sql != '' ) ? ', ' : '' ) . intval($row['post_id']);
			}
			$db->sql_freeresult($result);

			$sql = "SELECT vote_id 
				FROM " . VOTE_DESC_TABLE . " 
				WHERE topic_id IN ($topic_id_sql)";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not get vote id information', '', __LINE__, __FILE__, $sql);
			}

			$vote_id_sql = '';
			while ( $row = $db->sql_fetchrow($result) )
			{
				$vote_id_sql .= ( ( $vote_id_sql != '' ) ? ', ' : '' ) . $row['vote_id'];
			}
			$db->sql_freeresult($result);

			//
			// Got all required info so go ahead and start deleting everything
			//
			$sql = "DELETE 
				FROM " . TOPICS_TABLE . " 
				WHERE topic_id IN ($topic_id_sql) 
					OR topic_moved_id IN ($topic_id_sql)";
			if ( !$db->sql_query($sql, BEGIN_TRANSACTION) )
			{
				message_die(GENERAL_ERROR, 'Could not delete topics', '', __LINE__, __FILE__, $sql);
			}

			if ( $post_id_sql != '' )
			{
				$sql = "DELETE 
					FROM " . POSTS_TABLE . " 
					WHERE post_id IN ($post_id_sql)";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete posts', '', __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE 
					FROM " . POSTS_TEXT_TABLE . " 
					WHERE post_id IN ($post_id_sql)";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete posts text', '', __LINE__, __FILE__, $sql);
				}

				remove_search_post($post_id_sql);
/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
				if (!intval($attach_config['disable_mod']))
				{
					delete_attachment(explode(', ', $post_id_sql));
				}
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */

			}

			if ( $vote_id_sql != '' )
			{
				$sql = "DELETE 
					FROM " . VOTE_DESC_TABLE . " 
					WHERE vote_id IN ($vote_id_sql)";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete vote descriptions', '', __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE 
					FROM " . VOTE_RESULTS_TABLE . " 
					WHERE vote_id IN ($vote_id_sql)";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete vote results', '', __LINE__, __FILE__, $sql);
				}

				$sql = "DELETE 
					FROM " . VOTE_USERS_TABLE . " 
					WHERE vote_id IN ($vote_id_sql)";
				if ( !$db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, 'Could not delete vote users', '', __LINE__, __FILE__, $sql);
				}
			}

			$sql = "DELETE 
				FROM " . TOPICS_WATCH_TABLE . " 
				WHERE topic_id IN ($topic_id_sql)";
			if ( !$db->sql_query($sql, END_TRANSACTION) )
			{
				message_die(GENERAL_ERROR, 'Could not delete watched post list', '', __LINE__, __FILE__, $sql);
			}

			sync('forum', $forum_id);

			if ( !empty($topic_id) )
			{
// Begin PNphpBB2 Module
//				$redirect_page = "viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'];
				$redirect_page = append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
				$l_redirect = sprintf($lang['Click_return_forum'], '<a href="' . $redirect_page . '">', '</a>');
			}
			else
			{
// Begin PNphpBB2 Module
//				$redirect_page = "modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'];
				$redirect_page = append_sid("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
				$l_redirect = sprintf($lang['Click_return_modcp'], '<a href="' . $redirect_page . '">', '</a>');
			}

			$template->assign_vars(array(
				'META' => '<meta http-equiv="refresh" content="3;url=' . $redirect_page . '">')
			);

			message_die(GENERAL_MESSAGE, $lang['Topics_Removed'] . '<br /><br />' . $l_redirect);
		}
		else
		{
			// Not confirmed, show confirmation message
			if ( empty($HTTP_POST_VARS['topic_id_list']) && empty($topic_id) )
			{
				message_die(GENERAL_MESSAGE, $lang['None_selected']);
			}

			$hidden_fields = '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" /><input type="hidden" name="mode" value="' . $mode . '" /><input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />';

			if ( isset($HTTP_POST_VARS['topic_id_list']) )
			{
				$topics = $HTTP_POST_VARS['topic_id_list'];
				for($i = 0; $i < count($topics); $i++)
				{
					$hidden_fields .= '<input type="hidden" name="topic_id_list[]" value="' . intval($topics[$i]) . '" />';
				}
			}
			else
			{
				$hidden_fields .= '<input type="hidden" name="' . POST_TOPIC_URL . '" value="' . $topic_id . '" />';
			}

			//
			// Set template files
			//
			$template->set_filenames(array(
				'confirm' => 'confirm_body.tpl')
			);

			$template->assign_vars(array(
				'MESSAGE_TITLE' => $lang['Confirm'],
				'MESSAGE_TEXT' => $lang['Confirm_delete_topic'],

				'L_YES' => $lang['Yes'],
				'L_NO' => $lang['No'],

				'S_CONFIRM_ACTION' => append_sid("modcp.$phpEx"),
				'S_HIDDEN_FIELDS' => $hidden_fields)
			);

			$template->pparse('confirm');

			include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
		}
		break;

	case 'move':
		$page_title = $lang['Mod_CP'];
		include($phpbb_root_path . 'includes/page_header.'.$phpEx);

		if ( $confirm )
		{
			if ( empty($HTTP_POST_VARS['topic_id_list']) && empty($topic_id) )
			{
				message_die(GENERAL_MESSAGE, $lang['None_selected']);
			}

			$new_forum_id = intval($HTTP_POST_VARS['new_forum']);
			$old_forum_id = $forum_id;

// Begin PNphpBB2 Categories Hierarchie Mod
			if ($new_forum_id <= 0 ) message_die(GENERAL_MESSAGE, $lang['Forum_not_exist']);
// End PNphpBB2 Categories Hierarchie Mod

			$sql = 'SELECT forum_id FROM ' . FORUMS_TABLE . '
				WHERE forum_id = ' . $new_forum_id;
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not select from forums table', '', __LINE__, __FILE__, $sql);
			}
			
			if (!$db->sql_fetchrow($result))
			{
				message_die(GENERAL_MESSAGE, 'New forum does not exist');
			}

			$db->sql_freeresult($result);

			if ( $new_forum_id != $old_forum_id )
			{
				$topics = ( isset($HTTP_POST_VARS['topic_id_list']) ) ?  $HTTP_POST_VARS['topic_id_list'] : array($topic_id);

				$topic_list = '';
				for($i = 0; $i < count($topics); $i++)
				{
					$topic_list .= ( ( $topic_list != '' ) ? ', ' : '' ) . intval($topics[$i]);
				}

				$sql = "SELECT * 
					FROM " . TOPICS_TABLE . " 
					WHERE topic_id IN ($topic_list)
						AND forum_id = $old_forum_id
						AND topic_status <> " . TOPIC_MOVED;
				if ( !($result = $db->sql_query($sql, BEGIN_TRANSACTION)) )
				{
					message_die(GENERAL_ERROR, 'Could not select from topic table', '', __LINE__, __FILE__, $sql);
				}

				$row = $db->sql_fetchrowset($result);
				$db->sql_freeresult($result);

				for($i = 0; $i < count($row); $i++)
				{
					$topic_id = $row[$i]['topic_id'];
					
					if ( isset($HTTP_POST_VARS['move_leave_shadow']) )
					{
						// Insert topic in the old forum that indicates that the forum has moved.
						$sql = "INSERT INTO " . TOPICS_TABLE . " (forum_id, topic_title, topic_poster, topic_time, topic_status, topic_type, topic_vote, topic_views, topic_replies, topic_first_post_id, topic_last_post_id, topic_moved_id)
							VALUES ($old_forum_id, '" . addslashes(str_replace("\'", "''", $row[$i]['topic_title'])) . "', '" . str_replace("\'", "''", $row[$i]['topic_poster']) . "', " . $row[$i]['topic_time'] . ", " . TOPIC_MOVED . ", " . POST_NORMAL . ", " . $row[$i]['topic_vote'] . ", " . $row[$i]['topic_views'] . ", " . $row[$i]['topic_replies'] . ", " . $row[$i]['topic_first_post_id'] . ", " . $row[$i]['topic_last_post_id'] . ", $topic_id)";
						if ( !$db->sql_query($sql) )
						{
							message_die(GENERAL_ERROR, 'Could not insert shadow topic', '', __LINE__, __FILE__, $sql);
						}
					}

					$sql = "UPDATE " . TOPICS_TABLE . " 
						SET forum_id = $new_forum_id  
						WHERE topic_id = $topic_id";
					if ( !$db->sql_query($sql) )
					{
						message_die(GENERAL_ERROR, 'Could not update old topic', '', __LINE__, __FILE__, $sql);
					}

					$sql = "UPDATE " . POSTS_TABLE . " 
						SET forum_id = $new_forum_id 
						WHERE topic_id = $topic_id";
					if ( !$db->sql_query($sql) )
					{
						message_die(GENERAL_ERROR, 'Could not update post topic ids', '', __LINE__, __FILE__, $sql);
					}
				}

				// Sync the forum indexes
				sync('forum', $new_forum_id);
				sync('forum', $old_forum_id);

				$message = $lang['Topics_Moved'] . '<br /><br />';

			}
			else
			{
				$message = $lang['No_Topics_Moved'] . '<br /><br />';
			}

			if ( !empty($topic_id) )
			{
// Begin PNphpBB2 Module
//				$redirect_page = "viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id'];
				$redirect_page = append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
				$message .= sprintf($lang['Click_return_topic'], '<a href="' . $redirect_page . '">', '</a>');
			}
			else
			{
// Begin PNphpBB2 Module
//				$redirect_page = "modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'];
				$redirect_page = append_sid("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
				$message .= sprintf($lang['Click_return_modcp'], '<a href="' . $redirect_page . '">', '</a>');
			}

// Begin PNphpBB2 Module
//			$message = $message . '<br \><br \>' . sprintf($lang['Click_return_forum'], '<a href="' . "viewforum.$phpEx?" . POST_FORUM_URL . "=$old_forum_id&amp;sid=" . $userdata['session_id'] . '">', '</a>');
			$message = $message . '<br \><br \>' . sprintf($lang['Click_return_forum'], '<a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$old_forum_id&amp;sid=" . $userdata['session_id']) . '">', '</a>');
// End PNphpBB2 Module

			$template->assign_vars(array(
				'META' => '<meta http-equiv="refresh" content="3;url=' . $redirect_page . '">')
			);

			message_die(GENERAL_MESSAGE, $message);
		}
		else
		{
			if ( empty($HTTP_POST_VARS['topic_id_list']) && empty($topic_id) )
			{
				message_die(GENERAL_MESSAGE, $lang['None_selected']);
			}

			$hidden_fields = '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" /><input type="hidden" name="mode" value="' . $mode . '" /><input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />';

			if ( isset($HTTP_POST_VARS['topic_id_list']) )
			{
				$topics = $HTTP_POST_VARS['topic_id_list'];

				for($i = 0; $i < count($topics); $i++)
				{
					$hidden_fields .= '<input type="hidden" name="topic_id_list[]" value="' . intval($topics[$i]) . '" />';
				}
			}
			else
			{
				$hidden_fields .= '<input type="hidden" name="' . POST_TOPIC_URL . '" value="' . $topic_id . '" />';
			}

			//
			// Set template files
			//
			$template->set_filenames(array(
				'movetopic' => 'modcp_move.tpl')
			);

			$template->assign_vars(array(
/* Begin PNphpBB2 Categories Hierarchie Mod */
				'NAV_CAT_DESC' => $nav_cat_desc,
/* End PNphpBB2 Categories Hierarchie Mod */
				'MESSAGE_TITLE' => $lang['Confirm'],
				'MESSAGE_TEXT' => $lang['Confirm_move_topic'],

				'L_MOVE_TO_FORUM' => $lang['Move_to_forum'], 
				'L_LEAVESHADOW' => $lang['Leave_shadow_topic'], 
				'L_YES' => $lang['Yes'],
				'L_NO' => $lang['No'],

				'S_FORUM_SELECT' => make_forum_select('new_forum', $forum_id), 
				'S_MODCP_ACTION' => append_sid("modcp.$phpEx"),
				'S_HIDDEN_FIELDS' => $hidden_fields)
			);

			$template->pparse('movetopic');

			include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
		}
		break;

	case 'lock':
		if ( empty($HTTP_POST_VARS['topic_id_list']) && empty($topic_id) )
		{
			message_die(GENERAL_MESSAGE, $lang['None_selected']);
		}

		$topics = ( isset($HTTP_POST_VARS['topic_id_list']) ) ?  $HTTP_POST_VARS['topic_id_list'] : array($topic_id);

		$topic_id_sql = '';
		for($i = 0; $i < count($topics); $i++)
		{
			$topic_id_sql .= ( ( $topic_id_sql != '' ) ? ', ' : '' ) . intval($topics[$i]);
		}

		$sql = "UPDATE " . TOPICS_TABLE . " 
			SET topic_status = " . TOPIC_LOCKED . " 
			WHERE topic_id IN ($topic_id_sql) 
				AND forum_id = $forum_id
				AND topic_moved_id = 0";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not update topics table', '', __LINE__, __FILE__, $sql);
		}

		if ( !empty($topic_id) )
		{
// Begin PNphpBB2 Module
//			$redirect_page = "viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id'];
			$redirect_page = append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
			$message = sprintf($lang['Click_return_topic'], '<a href="' . $redirect_page . '">', '</a>');
		}
		else
		{
// Begin PNphpBB2 Module
//			$redirect_page = "modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'];
			$redirect_page = append_sid("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
			$message = sprintf($lang['Click_return_modcp'], '<a href="' . $redirect_page . '">', '</a>');
		}

// Begin PNphpBB2 Module
//		$message = $message . '<br \><br \>' . sprintf($lang['Click_return_forum'], '<a href="' . "viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'] . '">', '</a>');
		$message = $message . '<br \><br \>' . sprintf($lang['Click_return_forum'], '<a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']) . '">', '</a>');
// End PNphpBB2 Module

		$template->assign_vars(array(
			'META' => '<meta http-equiv="refresh" content="3;url=' . $redirect_page . '">')
		);

		message_die(GENERAL_MESSAGE, $lang['Topics_Locked'] . '<br /><br />' . $message);

		break;

	case 'unlock':
		if ( empty($HTTP_POST_VARS['topic_id_list']) && empty($topic_id) )
		{
			message_die(GENERAL_MESSAGE, $lang['None_selected']);
		}

		$topics = ( isset($HTTP_POST_VARS['topic_id_list']) ) ?  $HTTP_POST_VARS['topic_id_list'] : array($topic_id);

		$topic_id_sql = '';
		for($i = 0; $i < count($topics); $i++)
		{
			$topic_id_sql .= ( ( $topic_id_sql != "") ? ', ' : '' ) . intval($topics[$i]);
		}

		$sql = "UPDATE " . TOPICS_TABLE . " 
			SET topic_status = " . TOPIC_UNLOCKED . " 
			WHERE topic_id IN ($topic_id_sql) 
				AND forum_id = $forum_id
				AND topic_moved_id = 0";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not update topics table', '', __LINE__, __FILE__, $sql);
		}

		if ( !empty($topic_id) )
		{
// Begin PNphpBB2 Module
//			$redirect_page = "viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id'];
			$redirect_page = append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
			$message = sprintf($lang['Click_return_topic'], '<a href="' . $redirect_page . '">', '</a>');
		}
		else
		{
// Begin PNphpBB2 Module
//			$redirect_page = "modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'];
			$redirect_page = append_sid("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
			$message = sprintf($lang['Click_return_modcp'], '<a href="' . $redirect_page . '">', '</a>');
		}

// Begin PNphpBB2 Module
//		$message = $message . '<br \><br \>' . sprintf($lang['Click_return_forum'], '<a href="' . "viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'] . '">', '</a>');
		$message = $message . '<br \><br \>' . sprintf($lang['Click_return_forum'], '<a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id']) . '">', '</a>');
// End PNphpBB2 Module

		$template->assign_vars(array(
			'META' => '<meta http-equiv="refresh" content="3;url=' . $redirect_page . '">')
		);

		message_die(GENERAL_MESSAGE, $lang['Topics_Unlocked'] . '<br /><br />' . $message);

		break;

	case 'split':
		$page_title = $lang['Mod_CP'];
		include($phpbb_root_path . 'includes/page_header.'.$phpEx);

		$post_id_sql = '';

		if (isset($HTTP_POST_VARS['split_type_all']) || isset($HTTP_POST_VARS['split_type_beyond']))
		{
			$posts = $HTTP_POST_VARS['post_id_list'];

			for ($i = 0; $i < count($posts); $i++)
			{
				$post_id_sql .= (($post_id_sql != '') ? ', ' : '') . intval($posts[$i]);
			}
		}

		if ($post_id_sql != '')
		{
			$sql = "SELECT post_id 
				FROM " . POSTS_TABLE . "
				WHERE post_id IN ($post_id_sql)
					AND forum_id = $forum_id";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not get post id information', '', __LINE__, __FILE__, $sql);
			}
			
			$post_id_sql = '';
			while ($row = $db->sql_fetchrow($result))
			{
				$post_id_sql .= (($post_id_sql != '') ? ', ' : '') . intval($row['post_id']);
			}
			$db->sql_freeresult($result);

			if ($post_id_sql == '')
			{
				message_die(GENERAL_MESSAGE, $lang['None_selected']);
			}

			$sql = "SELECT post_id, poster_id, topic_id, post_time
				FROM " . POSTS_TABLE . "
				WHERE post_id IN ($post_id_sql) 
				ORDER BY post_time ASC";
			if (!($result = $db->sql_query($sql)))
			{
				message_die(GENERAL_ERROR, 'Could not get post information', '', __LINE__, __FILE__, $sql);
			}

			if ($row = $db->sql_fetchrow($result))
			{
				$first_poster = $row['poster_id'];
				$topic_id = $row['topic_id'];
				$post_time = $row['post_time'];

				$user_id_sql = '';
				$post_id_sql = '';
				do
				{
					$user_id_sql .= (($user_id_sql != '') ? ', ' : '') . intval($row['poster_id']);
					$post_id_sql .= (($post_id_sql != '') ? ', ' : '') . intval($row['post_id']);;
				}
				while ($row = $db->sql_fetchrow($result));

				$post_subject = trim(htmlspecialchars($HTTP_POST_VARS['subject']));
				if (empty($post_subject))
				{
					message_die(GENERAL_MESSAGE, $lang['Empty_subject']);
				}

				$new_forum_id = intval($HTTP_POST_VARS['new_forum_id']);
				$topic_time = time();

// Begin PNphpBB2 Categories Hierarchie Mod
				if ($new_forum_id <= 0 ) message_die(GENERAL_MESSAGE, $lang['Forum_not_exist']);
// End PNphpBB2 Categories Hierarchie Mod
				
				$sql = 'SELECT forum_id FROM ' . FORUMS_TABLE . '
					WHERE forum_id = ' . $new_forum_id;
				if ( !($result = $db->sql_query($sql)) )
				{
					message_die(GENERAL_ERROR, 'Could not select from forums table', '', __LINE__, __FILE__, $sql);
				}
			
				if (!$db->sql_fetchrow($result))
				{
					message_die(GENERAL_MESSAGE, 'New forum does not exist');
				}

				$db->sql_freeresult($result);

				$sql  = "INSERT INTO " . TOPICS_TABLE . " (topic_title, topic_poster, topic_time, forum_id, topic_status, topic_type)
					VALUES ('" . str_replace("\'", "''", $post_subject) . "', $first_poster, " . $topic_time . ", $new_forum_id, " . TOPIC_UNLOCKED . ", " . POST_NORMAL . ")";
				if (!($db->sql_query($sql, BEGIN_TRANSACTION)))
				{
					message_die(GENERAL_ERROR, 'Could not insert new topic', '', __LINE__, __FILE__, $sql);
				}

				$new_topic_id = $db->sql_nextid();

				// Update topic watch table, switch users whose posts
				// have moved, over to watching the new topic
				$sql = "UPDATE " . TOPICS_WATCH_TABLE . " 
					SET topic_id = $new_topic_id 
					WHERE topic_id = $topic_id 
						AND user_id IN ($user_id_sql)";
				if (!$db->sql_query($sql))
				{
					message_die(GENERAL_ERROR, 'Could not update topics watch table', '', __LINE__, __FILE__, $sql);
				}

				$sql_where = (!empty($HTTP_POST_VARS['split_type_beyond'])) ? " post_time >= $post_time AND topic_id = $topic_id" : "post_id IN ($post_id_sql)";

				$sql = 	"UPDATE " . POSTS_TABLE . "
					SET topic_id = $new_topic_id, forum_id = $new_forum_id 
					WHERE $sql_where";
				if (!$db->sql_query($sql, END_TRANSACTION))
				{
					message_die(GENERAL_ERROR, 'Could not update posts table', '', __LINE__, __FILE__, $sql);
				}

				sync('topic', $new_topic_id);
				sync('topic', $topic_id);
				sync('forum', $new_forum_id);
				sync('forum', $forum_id);

				$template->assign_vars(array(
/* Begin PNphpBB2 Module */
/*					'META' => '<meta http-equiv="refresh" content="3;url=' . "viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id'] . '">') */
					'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id']) . '">')
/* End PNphpBB2 Module */
				);

// Begin PNphpBB2 Module
//				$message = $lang['Topic_split'] . '<br /><br />' . sprintf($lang['Click_return_topic'], '<a href="' . "viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id'] . '">', '</a>');
				$message = $lang['Topic_split'] . '<br /><br />' . sprintf($lang['Click_return_topic'], '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id']) . '">', '</a>');
// End PNphpBB2 Module
				message_die(GENERAL_MESSAGE, $message);
			}
		}
		else
		{
			//
			// Set template files
			//
			$template->set_filenames(array(
				'split_body' => 'modcp_split.tpl')
			);

			$sql = "SELECT u.username, p.*, pt.post_text, pt.bbcode_uid, pt.post_subject, p.post_username
				FROM " . POSTS_TABLE . " p, " . USERS_TABLE . " u, " . POSTS_TEXT_TABLE . " pt
				WHERE p.topic_id = $topic_id
					AND p.poster_id = u.user_id
					AND p.post_id = pt.post_id
				ORDER BY p.post_time ASC";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Could not get topic/post information', '', __LINE__, __FILE__, $sql);
			}

			$s_hidden_fields = '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" /><input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" /><input type="hidden" name="' . POST_TOPIC_URL . '" value="' . $topic_id . '" /><input type="hidden" name="mode" value="split" />';

			if( ( $total_posts = $db->sql_numrows($result) ) > 0 )
			{
				$postrow = $db->sql_fetchrowset($result);

				$template->assign_vars(array(
/* Begin PNphpBB2 Categories Hierarchie Mod */
					'NAV_CAT_DESC' => $nav_cat_desc,
/* End PNphpBB2 Categories Hierarchie Mod */
					'L_SPLIT_TOPIC' => $lang['Split_Topic'],
					'L_SPLIT_TOPIC_EXPLAIN' => $lang['Split_Topic_explain'],
					'L_AUTHOR' => $lang['Author'],
					'L_MESSAGE' => $lang['Message'],
					'L_SELECT' => $lang['Select'],
					'L_SPLIT_SUBJECT' => $lang['Split_title'],
					'L_SPLIT_FORUM' => $lang['Split_forum'],
					'L_POSTED' => $lang['Posted'],
					'L_SPLIT_POSTS' => $lang['Split_posts'],
					'L_SUBMIT' => $lang['Submit'],
					'L_SPLIT_AFTER' => $lang['Split_after'], 
					'L_POST_SUBJECT' => $lang['Post_subject'], 
					'L_MARK_ALL' => $lang['Mark_all'], 
					'L_UNMARK_ALL' => $lang['Unmark_all'], 
					'L_POST' => $lang['Post'], 

					'FORUM_NAME' => $forum_name, 

					'U_VIEW_FORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"), 

					'S_SPLIT_ACTION' => append_sid("modcp.$phpEx"),
					'S_HIDDEN_FIELDS' => $s_hidden_fields,
					'S_FORUM_SELECT' => make_forum_select("new_forum_id", false, $forum_id))
				);

				//
				// Define censored word matches
				//
				$orig_word = array();
				$replacement_word = array();
				obtain_word_list($orig_word, $replacement_word);

				for($i = 0; $i < $total_posts; $i++)
				{
					$post_id = $postrow[$i]['post_id'];
					$poster_id = $postrow[$i]['poster_id'];
					$poster = $postrow[$i]['username'];

					$post_date = create_date($board_config['default_dateformat'], $postrow[$i]['post_time'], $board_config['board_timezone']);

					$bbcode_uid = $postrow[$i]['bbcode_uid'];
					$message = $postrow[$i]['post_text'];
					$post_subject = ( $postrow[$i]['post_subject'] != '' ) ? $postrow[$i]['post_subject'] : $topic_title;

					//
					// If the board has HTML off but the post has HTML
					// on then we process it, else leave it alone
					//
					if ( !$board_config['allow_html'] )
					{
						if ( $postrow[$i]['enable_html'] )
						{
							$message = preg_replace('#(<)([\/]?.*?)(>)#is', '&lt;\\2&gt;', $message);
						}
					}

					if ( $bbcode_uid != '' )
					{
						$message = ( $board_config['allow_bbcode'] ) ? bbencode_second_pass($message, $bbcode_uid) : preg_replace('/\:[0-9a-z\:]+\]/si', ']', $message);
					}

					if ( count($orig_word) )
					{
						$post_subject = preg_replace($orig_word, $replacement_word, $post_subject);
						$message = preg_replace($orig_word, $replacement_word, $message);
					}

					$message = make_clickable($message);

					if ( $board_config['allow_smilies'] && $postrow[$i]['enable_smilies'] )
					{
						$message = smilies_pass($message);
					}

					$message = str_replace("\n", '<br />', $message);
					
// Begin PNphpBB2 Module
//					$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
//					$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
					$row_color = ( !($i % 2) ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
					$row_class = ( !($i % 2) ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module

					$checkbox = ( $i > 0 ) ? '<input type="checkbox" name="post_id_list[]" value="' . $post_id . '" />' : '&nbsp;';
					
					$template->assign_block_vars('postrow', array(
						'ROW_COLOR' => '#' . $row_color,
						'ROW_CLASS' => $row_class,
/* Begin PNphpBB2 Module */
/*						'POSTER_NAME' => $poster, */
						'POSTER_NAME' => pnVarPrepForDisplay($poster),
/* End PNphpBB2 Module */
						'POST_DATE' => $post_date,
						'POST_SUBJECT' => $post_subject,
						'MESSAGE' => $message,
						'POST_ID' => $post_id,
						
						'S_SPLIT_CHECKBOX' => $checkbox)
					);
				}

				$template->pparse('split_body');
			}
		}
		break;

// Begin PNphpBB2 Module
	case 'merge':

		$page_title = $lang['Merge_topics'];
		include ($phpbb_root_path . 'includes/page_header.'.$phpEx);

		// from topic
		$from_topic = isset($HTTP_POST_VARS['from_topic']) ? strtolower(trim(htmlspecialchars($HTTP_POST_VARS['from_topic']))) : '';
		if (empty($from_topic) && (isset($HTTP_GET_VARS[POST_TOPIC_URL]) || isset($HTTP_GET_VARS[POST_POST_URL])))
		{
		  $from_topic = (isset($HTTP_GET_VARS[POST_TOPIC_URL])) ? intval($HTTP_GET_VARS[POST_TOPIC_URL]) : POST_POST_URL . '=' . intval($HTTP_GET_VARS[POST_POST_URL]);
		}
		$from_topic_id = get_topic_id($from_topic);

		// to topic
		$to_topic = isset($HTTP_POST_VARS['to_topic']) ? strtolower(trim(htmlspecialchars($HTTP_POST_VARS['to_topic']))) : '';
		$to_topic_id =  get_topic_id($to_topic);

		// topic title
		$topic_title = '';
		if (isset($HTTP_POST_VARS['topic_title']))
		{
		  $topic_title = htmlspecialchars(trim(stripslashes($HTTP_POST_VARS['topic_title'])));
		}

		// start
		if (isset($HTTP_POST_VARS['start']))
		{
		  $start = intval($start);
		}

		// buttons
		$submit = isset($HTTP_POST_VARS['submit']);
		$confirm = isset($HTTP_POST_VARS['confirm']);
		$cancel = isset($HTTP_POST_VARS['cancel']);
		$shadow = isset($HTTP_POST_VARS['shadow']);
		if ($cancel)
		{
		  $submit = false;
		}
		$select_from = isset($HTTP_POST_VARS['select_from']);
		$select_to = isset($HTTP_POST_VARS['select_to']);
		$page_prec = isset($HTTP_POST_VARS['page_prec']);
		$page_next = isset($HTTP_POST_VARS['page_next']);

		// check if a selection has been made
		$topic_selected = 0;
		if (isset($HTTP_POST_VARS['topic_selected']))
		{
		  $topic_selected = intval($HTTP_POST_VARS['topic_selected']);
		}

		if ($submit && !empty($topic_selected))
		{
		  $submit = false;
			if ($select_from)
			{
			  $from_topic = $topic_selected;
				$from_topic_id = $topic_selected;
			}
			if ($select_to)
			{
			  $to_topic = $topic_selected;
				$to_topic_id = $topic_selected;
			}
			$select_from = false;
			$select_to = false;
		}

		// titles
		$from_title = '';
		if (!empty($from_topic_id))
		{
		  $sql = "SELECT topic_title FROM " . TOPICS_TABLE . " WHERE topic_id=$from_topic_id";
			if ( !($result = $db->sql_query($sql)) )
			{ 
			  message_die(GENERAL_ERROR, 'Could not get from-topic informations', '', __LINE__, __FILE__, $sql);
			}
			if ($row = $db->sql_fetchrow($result))
			{
			  $from_title = $row['topic_title'];
			}
		}
		$to_title = '';
		if (!empty($to_topic_id))
		{
		  $sql = "SELECT topic_title FROM " . TOPICS_TABLE . " WHERE topic_id=$to_topic_id";
			if ( !($result = $db->sql_query($sql)) ) 
			{
			  message_die(GENERAL_ERROR, 'Could not get to-topic informations', '', __LINE__, __FILE__, $sql);
			}
			if ($row = $db->sql_fetchrow($result))
			{
			  $to_title = $row['topic_title'];
			}
		}

		// selection
		if (($select_from || $select_to) && (!$cancel))
		{
		  $list_forums = make_forum_select(POST_FORUM_URL, false, $forum_id);

			// how many records in the forum
			$nbpages = 0;
			$per_page = intval($board_config['topics_per_page']);
			if (!empty($forum_id))
			{
		    $sql = "SELECT COUNT(*) as number FROM " . TOPICS_TABLE . " WHERE forum_id=$forum_id AND topic_status <> " . TOPIC_MOVED;
				if ( !($result = $db->sql_query($sql)) )
				{
			    message_die(GENERAL_ERROR, 'Could not get topics informations', '', __LINE__, __FILE__, $sql);
				}
				$num_items = $db->sql_fetchrow($result);
				$nbpages = ceil($num_items['number'] / $per_page) - 1;
				if ($nbpages < 0)
				{
			    $nbpages = 0;
				}
			}

			// change current page
			if ($page_prec && ($start > 0))
			{
		    $start--;
			}
			if ($page_next && ($start < $nbpages))
			{
		    $start++;
			}

			$pagination = '';
			if ($nbpages > 1)
			{
		    if ($start > 0)
				{
			    $pagination .= '<input type="submit" name="page_prec" value="«" class="liteoption" />&nbsp;';
				}
				$pagination .= sprintf($lang['Page_of'], ($start+1), ($nbpages+1)) . '&nbsp;';
				if ($start < $nbpages)
				{
			    $pagination .= '<input type="submit" name="page_next" value="»" class="liteoption" />';
				}
			}

			// template name
			$template->set_filenames(array(
		    'body' => 'modcp_select_body.tpl')
			);
			// header
			$template->assign_vars(array(
		    'L_SELECT'		=> $lang['Select'],
		  	'L_TITLE'		=> ($select_from) ? $lang['Merge_topic_from'] : $lang['Merge_topic_to'],
				'L_REPLIES'		=> $lang['Replies'],
				'L_AUTHOR'		=> $lang['Author'],
				'L_VIEWS'		=> $lang['Views'],
				'L_LASTPOST'	=> $lang['Last_Post'],
				'L_GO'			=> $lang['Go'],
				'L_SELECT'		=> $lang['Select'],
				'L_CANCEL'		=> $lang['Cancel'],
				'S_LIST_FORUMS'	=> $list_forums,
				'PAGINATION'	=> $pagination,
				'L_NO_TOPICS'	=> $lang['No_search_match']	)
			);

			// read the forum
			$start_topic = $start * $per_page;
			$sql = "SELECT t.*, u.username, u.user_id, u2.username as user2, u2.user_id as id2, p.post_username, p2.post_username AS post_username2, p2.post_time 
		          FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p, " . POSTS_TABLE . " p2, " . USERS_TABLE . " u2
							WHERE t.forum_id = $forum_id
						 	 AND t.topic_poster = u.user_id
						 	 AND p.post_id = t.topic_first_post_id
						 	 AND p2.post_id = t.topic_last_post_id
						 	 AND u2.user_id = p2.poster_id 
							ORDER BY t.topic_type DESC, t.topic_last_post_id DESC 
							LIMIT $start_topic, $per_page";
		
			if ( !($result = $db->sql_query($sql)) )
			{
		    message_die(GENERAL_ERROR, 'Could not get topics informations', '', __LINE__, __FILE__, $sql);
			}
			
			$topics_data = array();
			while ($row = $db->sql_fetchrow($result))
			{
		    $topic_rowset[] = $row;
			}

			// values
			for ($i=0; $i < count($topic_rowset); $i++)
			{
		    // topic type
				$folder = $images['folder'];
				if($topic_rowset['topic_replies'] >= $board_config['hot_threshold'])
				{
			    $folder = $images['folder_hot'];
				}
				if( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED )
				{
			    $folder = $images['folder_locked'];
				}
				$l_type = '';
				switch( $topic_rowset[$i]['topic_type'] )
				{
			    case POST_ANNOUNCE:
				    $l_type = $lang['Topic_Announcement'];
						$folder = $images['folder_announce'];
						break;
					case POST_STICKY:
				    $l_type = $lang['Topic_Sticky'];
						$folder = $images['folder_sticky'];
						break;
				}
				// topic author
				$topic_author  = ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '=' . $topic_rowset[$i]['user_id']) . '">' : '';
// Begin PNphpBB2 Module
				$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? pnVarPrepForDisplay($topic_rowset[$i]['username']) : ( ( $topic_rowset[$i]['post_username'] != '' ) ? pnVarPrepForDisplay($topic_rowset[$i]['post_username']) : $lang['Guest'] );
// End PNphpBB2 Module
				$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? '</a>' : '';
				$last_post_time = create_date($board_config['default_dateformat'], $topic_rowset[$i]['post_time'], $board_config['board_timezone']);
// Begin PNphpBB2 Module
				$last_post_author = ( $topic_rowset[$i]['id2'] == ANONYMOUS ) ? ( ($topic_rowset[$i]['post_username2'] != '' ) ? pnVarPrepForDisplay($topic_rowset[$i]['post_username2']) . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $topic_rowset[$i]['id2']) . '">' . pnVarPrepForDisplay($topic_rowset[$i]['user2']) . '</a>';
// End PNphpBB2 Module

				$template->assign_block_vars('topicrow', array(
			    'TOPIC_ID'			=> $topic_rowset[$i]['topic_id'],
					'TOPIC_FOLDER_IMG'	=> $folder,
					'TOPIC_TYPE'		=> ($l_type != '') ? $l_type . '&nbsp;' : '',
					'TOPIC_TITLE'		=> $topic_rowset[$i]['topic_title'],
					'REPLIES'			=> $topic_rowset[$i]['topic_replies'],
					'TOPIC_AUTHOR'		=> $topic_author,
					'VIEWS'				=> $topic_rowset[$i]['topic_views'],
					'LAST_POST_TIME'	=> $last_post_time,
					'LAST_POST_AUTHOR'	=> $last_post_author,
					'U_VIEW_TOPIC'		=> append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . '=' . $topic_rowset[$i]['topic_id'])	)
				);
			}
			if (count($topic_rowset) == 0)
			{
		    $template->assign_block_vars('no_topics', array());
			}

			// system
			$s_hidden_fields  = '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" />';
			$s_hidden_fields .= '<input type="hidden" name="topic_title" value="' . addslashes($topic_title) . '" />';
			$s_hidden_fields .= '<input type="hidden" name="from_topic" value="' . $from_topic . '" />';
			$s_hidden_fields .= '<input type="hidden" name="to_topic" value="' . $to_topic . '" />';
			$s_hidden_fields .= '<input type="hidden" name="submit" value="1" />';
			$s_hidden_fields .= '<input type="hidden" name="mode" value="' . $mode . '" />';
			
			if ($shadow) 
			{
		    $s_hidden_fields .= '<input type="hidden" name="shadow" value="1" />';
			}
			if ($select_from)
			{
		    $s_hidden_fields .= '<input type="hidden" name="select_from" value="1" />';
			}
			if ($select_to)
			{
		    $s_hidden_fields .= '<input type="hidden" name="select_to" value="1" />';
			}
			$s_hidden_fields .= '<input type="hidden" name="start" value="' . $start . '" />';
			$template->assign_vars(array(
		    'S_ACTION'			=> append_sid("modcp.$phpEx"),
				'S_HIDDEN_FIELDS'	=> $s_hidden_fields )
			);
	
			// footer
			$template->pparse('body');
			include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
		}
	  // submission
		if ($submit)
		{
	    // init
			$error = false;
			$error_msg = '';
			$message = '';

			// check if the from topic exists and get the forum_id
			$found = false;
			$from_forum_id = 0;
			$from_poll = false;
			if (!empty($from_topic_id))
			{
		    $sql = "SELECT forum_id, topic_vote FROM " . TOPICS_TABLE . " WHERE topic_id=$from_topic_id";
				if ( !($result = $db->sql_query($sql)) )
				{
			    message_die(GENERAL_ERROR, 'Could not get topic informations', '', __LINE__, __FILE__, $sql);
				}
				if ($row = $db->sql_fetchrow($result))
				{
			    $from_forum_id = $row['forum_id'];
					$from_poll = $row['topic_vote'];
					$found = true;
				}
			}
			if (!$found)
			{
		    $error = true;
				$error_msg .= (($error_msg != '') ? '<br />' : '') . $lang['Merge_from_not_found'];
			}

			// check if the from topic exists and get the forum_id
			$found = false;
			$to_forum_id = 0;
			$to_poll = false;
			if (!empty($to_topic_id))
			{
		    $sql = "SELECT forum_id, topic_vote FROM " . TOPICS_TABLE . " WHERE topic_id=$to_topic_id";
				if ( !($result = $db->sql_query($sql)) )
				{
			    message_die(GENERAL_ERROR, 'Could not get topic informations', '', __LINE__, __FILE__, $sql);
				}
				if ($row = $db->sql_fetchrow($result))
				{
			    $to_forum_id = $row['forum_id'];
					$to_poll = $row['topic_vote'];
					$found = true;
		  	}
			}
			if (!$found)
			{
		    $error = true;
				$error_msg .= (($error_msg != '') ? '<br />' : '') . $lang['Merge_to_not_found'];
			}

			// verify the topics are not the same
			if (!$error)
			{
		    if ($from_topic_id == $to_topic_id)
				{
			    $error = true;
					$error_msg .= (($error_msg != '') ? '<br />' : '') . $lang['Merge_topics_equals'];
				}
			}

			// check authorizations
			if (!empty($from_forum_id))
			{
		    $is_auth = auth(AUTH_ALL, $from_forum_id, $userdata);
				if ( !$is_auth['auth_mod'] )
				{
			    $error = true;
					$error_msg .= (($error_msg != '') ? '<br />' : '') . $lang['Merge_from_not_authorized'];
				}
			}
			if (!empty($to_forum_id))
			{
		    $is_auth = auth(AUTH_ALL, $to_forum_id, $userdata);
				if ( !$is_auth['auth_mod'] )
				{
			    $error = true;
					$error_msg .= (($error_msg != '') ? '<br />' : '') . $lang['Merge_to_not_authorized'];
				}
			}

			//
			// warnings
			//
			// add here warnings regarding ie mycalendar

			// does from topic has a poll ?
			if ($from_poll)
			{
		    if ($to_poll)
				{
			    $message .= (($message != '') ? '<br />' : '') . $lang['Merge_poll_from_and_to'];
				}
				else
				{
			    $message .= (($message != '') ? '<br />' : '') . $lang['Merge_poll_from'];
				}
			}

			// error found
			if ($error)
			{
		    message_die(GENERAL_ERROR, $error_msg);
			}

			// ask for confirmation or process
			if ($confirm)
			{
		    // process poll
				if ($from_poll)
			  {
			    if ($to_poll)
					{
				    // delete the vote
						$vote_id = 0;
						$sql = "SELECT vote_id FROM " . VOTE_DESC_TABLE . " WHERE topic_id=$from_topic_id";
						if ( !$result=$db->sql_query($sql) )
						{
					    message_die(GENERAL_ERROR, 'Could not read vote description', '', __LINE__, __FILE__, $sql);
						}
						if ($row=$db->sql_fetchrow($result))
						{
					    $vote_id = $row['vote_id'];
						}
						if (!empty($vote_id))
						{
					    // delete voters
							$sql = "DELETE FROM " . VOTE_USERS_TABLE . " WHERE vote_id=$vote_id";
							if ( !$db->sql_query($sql) )
							{
						    message_die(GENERAL_ERROR, 'Could not delete votes', '', __LINE__, __FILE__, $sql);
							}
							// delete results
							$sql = "DELETE FROM " . VOTE_RESULTS_TABLE . " WHERE vote_id=$vote_id";
							if ( !$db->sql_query($sql) )
							{
						    message_die(GENERAL_ERROR, 'Could not delete vote results', '', __LINE__, __FILE__, $sql);
							}
							// delete description
							$sql = "DELETE FROM " . VOTE_DESC_TABLE . " WHERE vote_id=$vote_id";
							if ( !$db->sql_query($sql) )
							{
						    message_die(GENERAL_ERROR, 'Could not delete vote description', '', __LINE__, __FILE__, $sql);
							}
						}
					}
					else
					{
				    // grab the poll to the new topic
						$sql = "UPDATE " . VOTE_DESC_TABLE . "
						        SET topic_id=$to_topic_id
										WHERE topic_id=$from_topic_id";
						if ( !$db->sql_query($sql) )
						{
					    message_die(GENERAL_ERROR, 'Could not update vote desc information', '', __LINE__, __FILE__, $sql);
						}
					}
				}

				// here you can add the process of ie mycalendar dates
				// check if the destination is already watched
				$sql = "SELECT * FROM " . TOPICS_WATCH_TABLE . " WHERE topic_id=$to_topic_id";
				if ( !$result=$db->sql_query($sql) )
				{
			    message_die(GENERAL_ERROR, 'Could not read topics watch informations', '', __LINE__, __FILE__, $sql);
				}
				$user_ids = array();
				while ($row = $db->sql_fetchrow($result))
				{
				  $user_ids[] = $row['user_id'];
				}
				$sql_user = '';
				if (!empty($user_ids))
				{
			    $sql_user = " AND user_id NOT IN (" . implode(', ', $user_ids) . ")";
				}
				// grab the topics watch to the new topic
				$sql = "UPDATE " . TOPICS_WATCH_TABLE . " SET topic_id=$to_topic_id WHERE topic_id=$from_topic_id" . $sql_user;
				if ( !$db->sql_query($sql) )
				{
			    message_die(GENERAL_ERROR, 'Could not update topics watch table', '', __LINE__, __FILE__, $sql);
				}
				// clean up the old topics watch
				$sql = "DELETE FROM " . TOPICS_WATCH_TABLE . " WHERE topic_id=$from_topic_id";
				if ( !$db->sql_query($sql) )
				{
			    message_die(GENERAL_ERROR, 'Could not delete topics watch table', '', __LINE__, __FILE__, $sql);
				}

				// process the posts
				$sql = "UPDATE " . POSTS_TABLE . " SET forum_id=$to_forum_id, topic_id=$to_topic_id WHERE topic_id=$from_topic_id";
				if ( !$db->sql_query($sql) )
				{
			    message_die(GENERAL_ERROR, 'Could not update posts information', '', __LINE__, __FILE__, $sql);
				}

				// get the old topic data for a shadow
				$sql = "SELECT * FROM " . TOPICS_TABLE . " WHERE topic_id=$from_topic_id";
				if ( !$result = $db->sql_query($sql) )
				{
			    message_die(GENERAL_ERROR, 'Could not read from-topic informations', '', __LINE__, __FILE__, $sql);
				}
				$topic_data = $db->sql_fetchrow($result);

				if ($shadow)
				{
			    // transform the merged topic in a shadow
					$sql = "UPDATE " . TOPICS_TABLE . " 
						      SET topic_status=" . TOPIC_MOVED . ", topic_type=" . POST_NORMAL . ", topic_moved_id=$to_topic_id
									WHERE topic_id=$from_topic_id";
				  if ( !$db->sql_query($sql) )
					{
				    message_die(GENERAL_ERROR, 'Could not set shadow topic', '', __LINE__, __FILE__, $sql);
					}
				}
				else
				{
			    // delete the old topic
					$sql = "DELETE FROM " . TOPICS_TABLE . " WHERE topic_id=$from_topic_id";
					if ( !$db->sql_query($sql) )
					{
				    message_die(GENERAL_ERROR, 'Could not update delete topic merged', '', __LINE__, __FILE__, $sql);
					}
				}

				// update the topic title
				if (!empty($topic_title))
				{
			    $sql = "UPDATE " . TOPICS_TABLE . " SET topic_title='" . str_replace("\'", "''", $topic_title) . "' WHERE topic_id=$to_topic_id";
					if ( !$db->sql_query($sql) )
					{
				    message_die(GENERAL_ERROR, 'Could not update topic title', '', __LINE__, __FILE__, $sql);
					}
				}

				// synchronise the destination topic, and the both forums
				sync('topic', $to_topic_id);
				if ($from_forum_id != $to_forum_id)
				{
			    sync('forum', $from_forum_id);
				}
				sync('forum', $to_forum_id);
	
				// send end message
				$template->assign_vars(array(
			    'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$to_topic_id") . '">')
					);
				message_die(GENERAL_MESSAGE, $lang['Merge_topic_done'] . '<br /><br />' . sprintf($lang['Click_return_topic'], '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$to_topic_id") . '" class="gen">', '</a>')  . '<br /><br />' . sprintf($lang['Click_return_index'], '<a href="' . append_sid("index.$phpEx") . '" class="gen">', '</a>'));
				break;
			}
			else
			{
		    // ask for confirmation
				$message .= (($message != '') ? '<br />' : '') . sprintf($lang['Merge_confirm_process'], $from_title, $to_title);

				$template->set_filenames(array(
			    'body' => 'confirm_body.tpl')
				);

				$s_hidden_fields  = '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" />';
				$s_hidden_fields .= '<input type="hidden" name="topic_title" value="' . addslashes($topic_title) . '" />';
				$s_hidden_fields .= '<input type="hidden" name="from_topic" value="' . $from_topic . '" />';
				$s_hidden_fields .= '<input type="hidden" name="to_topic" value="' . $to_topic . '" />';
				$s_hidden_fields .= '<input type="hidden" name="submit" value="1" />';
				$s_hidden_fields .= '<input type="hidden" name="submit" value="1" />';
				$s_hidden_fields .= '<input type="hidden" name="' . POST_TOPIC_URL . '" value="' . $topic_id . '" />';
				$s_hidden_fields .= '<input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />';
				$s_hidden_fields .= '<input type="hidden" name="mode" value="' . $mode . '" />';

				if ($shadow)
				{
			    $s_hidden_fields .= '<input type="hidden" name="shadow" value="1" />';
				}

				// header
				$template->assign_vars(array(
			    'MESSAGE_TITLE'		=> $page_title,
					'MESSAGE_TEXT'		=> $message,
					'L_YES'				=> $lang['Yes'],
					'L_NO'				=> $lang['No'],
					'S_CONFIRM_ACTION'	=> append_sid("modcp.$phpEx"),
					'S_HIDDEN_FIELDS'	=> $s_hidden_fields )
				);
		
				// footer
				$template->pparse('body');
				include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
			}
		}

		//
		// template name
		//
		$template->set_filenames(array(
	    'body' => 'modcp_merge.tpl')
		);
		
		//
		// header
		//
		$template->assign_vars(array(
	    'L_TITLE'				=> $page_title,
			'L_TOPIC_TITLE'			=> $lang['Merge_title'],
			'L_TOPIC_TITLE_EXPLAIN'	=> $lang['Merge_title_explain'],
			'L_FROM_TOPIC'			=> $lang['Merge_topic_from'],
			'L_FROM_TOPIC_EXPLAIN'	=> $lang['Merge_topic_from_explain'],
			'L_TO_TOPIC'			=> $lang['Merge_topic_to'],
			'L_TO_TOPIC_EXPLAIN'	=> $lang['Merge_topic_to_explain'],
			'L_SHADOW'				=> $lang['Leave_shadow_topic'],
			'L_SUBMIT'				=> $lang['Submit'],
			'L_CANCEL'				=> $lang['Cancel'],
			'L_REFRESH'				=> $lang['Refresh'],
			'L_SEARCH'				=> $lang['Select']	)
		);
		
		if (!empty($to_title) && empty($topic_title))
		{
	    $topic_title = $to_title;
		}

		// values
		$template->assign_vars(array(
	    'TOPIC_TITLE'	=> $topic_title,
			'FROM_TOPIC'	=> $from_topic,
			'TO_TOPIC'		=> $to_topic,
			'SHADOW'		=> ($shadow) ? 'checked="checked"' : ''	)
		);

		// system
		$s_hidden_fields  = '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" />';
		$s_hidden_fields .= '<input type="hidden" name="' . POST_TOPIC_URL . '" value="' . $topic_id . '" />';
		$s_hidden_fields  .= '<input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />';
		$s_hidden_fields .= '<input type="hidden" name="mode" value="' . $mode . '" />';

		$template->assign_vars(array(
	    'S_ACTION'			=> append_sid("modcp.$phpEx"),
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields	)
		);
			
		//
		// footer						
		 //
		$template->pparse('body');
		include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
	  break;
// End PNphpBB2 Module
	
	case 'ip':
		$page_title = $lang['Mod_CP'];
		include($phpbb_root_path . 'includes/page_header.'.$phpEx);

		$rdns_ip_num = ( isset($HTTP_GET_VARS['rdns']) ) ? $HTTP_GET_VARS['rdns'] : "";

		if ( !$post_id )
		{
			message_die(GENERAL_MESSAGE, $lang['No_such_post']);
		}

		//
		// Set template files
		//
		$template->set_filenames(array(
			'viewip' => 'modcp_viewip.tpl')
		);

		// Look up relevent data for this post
		$sql = "SELECT poster_ip, poster_id 
			FROM " . POSTS_TABLE . " 
			WHERE post_id = $post_id
				AND forum_id = $forum_id";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not get poster IP information', '', __LINE__, __FILE__, $sql);
		}
		
		if ( !($post_row = $db->sql_fetchrow($result)) )
		{
			message_die(GENERAL_MESSAGE, $lang['No_such_post']);
		}

		$ip_this_post = decode_ip($post_row['poster_ip']);
		$ip_this_post = ( $rdns_ip_num == $ip_this_post ) ? htmlspecialchars(gethostbyaddr($ip_this_post)) : $ip_this_post;

		$poster_id = $post_row['poster_id'];

		$template->assign_vars(array(
			'L_IP_INFO' => $lang['IP_info'],
			'L_THIS_POST_IP' => $lang['This_posts_IP'],
			'L_OTHER_IPS' => $lang['Other_IP_this_user'],
			'L_OTHER_USERS' => $lang['Users_this_IP'],
			'L_LOOKUP_IP' => $lang['Lookup_IP'], 
			'L_SEARCH' => $lang['Search'],

			'SEARCH_IMG' => $images['icon_search'], 

			'IP' => $ip_this_post, 
				
/* Begin PNphpBB2 Module */
/*			'U_LOOKUP_IP' => "modcp.$phpEx?mode=ip&amp;" . POST_POST_URL . "=$post_id&amp;" . POST_TOPIC_URL . "=$topic_id&amp;rdns=$ip_this_post&amp;sid=" . $userdata['session_id']) */
			'U_LOOKUP_IP' => append_sid("modcp.$phpEx?mode=ip&amp;" . POST_POST_URL . "=$post_id&amp;" . POST_TOPIC_URL . "=$topic_id&amp;rdns=$ip_this_post&amp;sid=" . $userdata['session_id']))
/* End PNphpBB2 Module */
		);

		//
		// Get other IP's this user has posted under
		//
		$sql = "SELECT poster_ip, COUNT(*) AS postings 
			FROM " . POSTS_TABLE . " 
			WHERE poster_id = $poster_id 
			GROUP BY poster_ip 
			ORDER BY " . (( SQL_LAYER == 'msaccess' ) ? 'COUNT(*)' : 'postings' ) . " DESC";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not get IP information for this user', '', __LINE__, __FILE__, $sql);
		}

		if ( $row = $db->sql_fetchrow($result) )
		{
			$i = 0;
			do
			{
				if ( $row['poster_ip'] == $post_row['poster_ip'] )
				{
					$template->assign_vars(array(
						'POSTS' => $row['postings'] . ' ' . ( ( $row['postings'] == 1 ) ? $lang['Post'] : $lang['Posts'] ))
					);
					continue;
				}

				$ip = decode_ip($row['poster_ip']);
				$ip = ( $rdns_ip_num == $row['poster_ip'] || $rdns_ip_num == 'all') ? htmlspecialchars(gethostbyaddr($ip)) : $ip;

// Begin PNphpBB2 Module
//				$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
//				$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
				$row_color = ( !($i % 2) ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
				$row_class = ( !($i % 2) ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module

				$template->assign_block_vars('iprow', array(
					'ROW_COLOR' => '#' . $row_color, 
					'ROW_CLASS' => $row_class, 
					'IP' => $ip,
					'POSTS' => $row['postings'] . ' ' . ( ( $row['postings'] == 1 ) ? $lang['Post'] : $lang['Posts'] ),

/* Begin PNphpBB2 Module */
/*					'U_LOOKUP_IP' => "modcp.$phpEx?mode=ip&amp;" . POST_POST_URL . "=$post_id&amp;" . POST_TOPIC_URL . "=$topic_id&amp;rdns=" . $row['poster_ip'] . "&amp;sid=" . $userdata['session_id']) */
					'U_LOOKUP_IP' => append_sid("modcp.$phpEx?mode=ip&amp;" . POST_POST_URL . "=$post_id&amp;" . POST_TOPIC_URL . "=$topic_id&amp;rdns=" . $row['poster_ip'] . "&amp;sid=" . $userdata['session_id']))
/* End PNphpBB2 Module */
				);

				$i++; 
			}
			while ( $row = $db->sql_fetchrow($result) );
		}

		//
		// Get other users who've posted under this IP
		//
		$sql = "SELECT u.user_id, u.username, COUNT(*) as postings 
			FROM " . USERS_TABLE ." u, " . POSTS_TABLE . " p 
			WHERE p.poster_id = u.user_id 
				AND p.poster_ip = '" . $post_row['poster_ip'] . "'
			GROUP BY u.user_id, u.username
			ORDER BY " . (( SQL_LAYER == 'msaccess' ) ? 'COUNT(*)' : 'postings' ) . " DESC";
		if ( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not get posters information based on IP', '', __LINE__, __FILE__, $sql);
		}

		if ( $row = $db->sql_fetchrow($result) )
		{
			$i = 0;
			do
			{
				$id = $row['user_id'];
				$username = ( $id == ANONYMOUS ) ? $lang['Guest'] : $row['username'];

// Begin PNphpBB2 Module
//				$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
//				$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
				$row_color = ( !($i % 2) ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
				$row_class = ( !($i % 2) ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module

				$template->assign_block_vars('userrow', array(
					'ROW_COLOR' => '#' . $row_color, 
					'ROW_CLASS' => $row_class, 
/* Begin PNphpBB2 Module */
/*					'USERNAME' => $username, */
					'USERNAME' => pnVarPrepForDisplay($username),
/* End PNphpBB2 Module */
					'POSTS' => $row['postings'] . ' ' . ( ( $row['postings'] == 1 ) ? $lang['Post'] : $lang['Posts'] ),
/* Begin PNphpBB2 Module */
/*					'L_SEARCH_POSTS' => sprintf($lang['Search_user_posts'], $username),  */
					'L_SEARCH_POSTS' => sprintf($lang['Search_user_posts'], pnVarPrepForDisplay($username)), 
/* End PNphpBB2 Module */

					'U_PROFILE' => ($id == ANONYMOUS) ? "modcp.$phpEx?mode=ip&amp;" . POST_POST_URL . "=" . $post_id . "&amp;" . POST_TOPIC_URL . "=" . $topic_id . "&amp;sid=" . $userdata['session_id'] : append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=$id"),
					'U_SEARCHPOSTS' => append_sid("search.$phpEx?search_author=" . (($id == ANONYMOUS) ? 'Anonymous' : urlencode($username)) . "&amp;showresults=topics"))

				);

				$i++; 
			}
			while ( $row = $db->sql_fetchrow($result) );
		}

		$template->pparse('viewip');

		break;

	default:
		$page_title = $lang['Mod_CP'];
		include($phpbb_root_path . 'includes/page_header.'.$phpEx);

		$template->assign_vars(array(
/* Begin PNphpBB2 Categories Hierarchie Mod */
			'NAV_CAT_DESC' => $nav_cat_desc,
/* End PNphpBB2 Categories Hierarchie Mod */
			'FORUM_NAME' => $forum_name,

			'L_MOD_CP' => $lang['Mod_CP'],
			'L_MOD_CP_EXPLAIN' => $lang['Mod_CP_explain'],
			'L_SELECT' => $lang['Select'],
			'L_DELETE' => $lang['Delete'],
			'L_MOVE' => $lang['Move'],
			'L_LOCK' => $lang['Lock'],
			'L_UNLOCK' => $lang['Unlock'],
			'L_TOPICS' => $lang['Topics'], 
			'L_REPLIES' => $lang['Replies'], 
			'L_LASTPOST' => $lang['Last_Post'], 
			'L_SELECT' => $lang['Select'], 

			'U_VIEW_FORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"), 
			'S_HIDDEN_FIELDS' => '<input type="hidden" name="sid" value="' . $userdata['session_id'] . '" /><input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />',
			'S_MODCP_ACTION' => append_sid("modcp.$phpEx"))
		);

		$template->set_filenames(array(
			'body' => 'modcp_body.tpl')
		);
		make_jumpbox('modcp.'.$phpEx);

		//
		// Define censored word matches
		//
		$orig_word = array();
		$replacement_word = array();
		obtain_word_list($orig_word, $replacement_word);

		$sql = "SELECT t.*, u.username, u.user_id, p.post_time
			FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p
			WHERE t.forum_id = $forum_id
				AND t.topic_poster = u.user_id
				AND p.post_id = t.topic_last_post_id
			ORDER BY t.topic_type DESC, p.post_time DESC
			LIMIT $start, " . $board_config['topics_per_page'];
		if ( !($result = $db->sql_query($sql)) )
		{
	   		message_die(GENERAL_ERROR, 'Could not obtain topic information', '', __LINE__, __FILE__, $sql);
		}

		while ( $row = $db->sql_fetchrow($result) )
		{
			$topic_title = '';

			if ( $row['topic_status'] == TOPIC_LOCKED )
			{
				$folder_img = $images['folder_locked'];
				$folder_alt = $lang['Topic_locked'];
			}
			else
			{
				if ( $row['topic_type'] == POST_ANNOUNCE )
				{
					$folder_img = $images['folder_announce'];
					$folder_alt = $lang['Topic_Announcement'];
				}
				else if ( $row['topic_type'] == POST_STICKY )
				{
					$folder_img = $images['folder_sticky'];
					$folder_alt = $lang['Topic_Sticky'];
				}
				else 
				{
					$folder_img = $images['folder'];
					$folder_alt = $lang['No_new_posts'];
				}
			}

			$topic_id = $row['topic_id'];
			$topic_type = $row['topic_type'];
			$topic_status = $row['topic_status'];
			
			if ( $topic_type == POST_ANNOUNCE )
			{
				$topic_type = $lang['Topic_Announcement'] . ' ';
			}
			else if ( $topic_type == POST_STICKY )
			{
				$topic_type = $lang['Topic_Sticky'] . ' ';
			}
			else if ( $topic_status == TOPIC_MOVED )
			{
				$topic_type = $lang['Topic_Moved'] . ' ';
			}
			else
			{
				$topic_type = '';		
			}
	
			if ( $row['topic_vote'] )
			{
				$topic_type .= $lang['Topic_Poll'] . ' ';
			}
	
			$topic_title = $row['topic_title'];
			if ( count($orig_word) )
			{
				$topic_title = preg_replace($orig_word, $replacement_word, $topic_title);
			}

// Begin PNphpBB2 Module
//			$u_view_topic = "modcp.$phpEx?mode=split&amp;" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id'];
			$u_view_topic = append_sid("modcp.$phpEx?mode=split&amp;" . POST_TOPIC_URL . "=$topic_id&amp;sid=" . $userdata['session_id']);
// End PNphpBB2 Module
			$topic_replies = $row['topic_replies'];

			$last_post_time = create_date($board_config['default_dateformat'], $row['post_time'], $board_config['board_timezone']);

			$template->assign_block_vars('topicrow', array(
				'U_VIEW_TOPIC' => $u_view_topic,

				'TOPIC_FOLDER_IMG' => $folder_img, 
				'TOPIC_TYPE' => $topic_type, 
				'TOPIC_TITLE' => $topic_title,
				'REPLIES' => $topic_replies,
				'LAST_POST_TIME' => $last_post_time,
				'TOPIC_ID' => $topic_id,
/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
				'TOPIC_ATTACHMENT_IMG' => (!intval($attach_config['disable_mod'])) ? topic_attachment_image($row['topic_attachment']) : '',
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
					
				'L_TOPIC_FOLDER_ALT' => $folder_alt)
			);
		}

// Begin PNphpBB2 Module
/*
// -- Remove --
		$template->assign_vars(array(
			'PAGINATION' => generate_pagination("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;sid=" . $userdata['session_id'], $forum_topics, $board_config['topics_per_page'], $start),
			'PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $forum_topics / $board_config['topics_per_page'] )), 
			'L_GOTO_PAGE' => $lang['Goto_page'])
		);
*/
// -- Add --
    generate_pagination("modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&sid=" . $userdata['session_id'], $forum_topics, $board_config['topics_per_page'], $start);
// End PNphpBB2 Module

		$template->pparse('body');

		break;
}

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>