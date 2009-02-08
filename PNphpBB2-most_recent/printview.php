<?php
/***************************************************************************
 *                               printview.php
 *                            -------------------
 *  MOD add-on page. Contains GPL code copyright of phpBB group.
 *  Author: Adam Ismay
 *  Version: 1.1 - 20th March 2002 - RC4 fix
 *  Version: 1.0 - 3rd March 2002
 *  $Id: printview.php 192 2007-01-20 15:17:44Z kronos $
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

define('IN_PHPBB', true);
$ModName = basename( dirname( __FILE__ ) );
$phpbb_root_path = './modules/' . $ModName . '/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/bbcode.'.$phpEx);
// Begin PNphpBB2 Module
@include("modules/$ModName/pnversion.$phpEx");
// End PNphpBB2 Module

header ("Cache-Control: no-store, no-cache, must-revalidate");
header ("Cache-Control: pre-check=0, post-check=0, max-age=0", false);
header ("Pragma: no-cache");
header ("Expires: " . gmdate("D, d M Y H:i:s", time()) . " GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

//
// Start session management
//
$userdata = session_pagestart($user_ip, 0);
init_userprefs($userdata);
//
// End session management
//

// Make sure a topic id was passed
if(isset($HTTP_GET_VARS[POST_TOPIC_URL]))
{
	$topic_id = intval($HTTP_GET_VARS[POST_TOPIC_URL]);
}
else if(isset($HTTP_GET_VARS['topic']))
{
	$topic_id = intval($HTTP_GET_VARS['topic']);
}

if( !isset($topic_id) )
{
	message_die(GENERAL_MESSAGE, 'Topic_post_not_exist');
}

$template->set_filenames(array("body" => "viewtopic_print.tpl"));
                                   
$sql = "SELECT t.topic_id, t.topic_title, t.topic_status, t.topic_replies, t.topic_time, t.topic_type, t.topic_vote, f.forum_name, f.forum_status, f.forum_id, f.auth_view, f.auth_read
	FROM " . TOPICS_TABLE . " t, " . FORUMS_TABLE . " f
	WHERE t.topic_id = " . $topic_id . "
		AND f.forum_id = t.forum_id
		$order_sql";
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, "Couldn't obtain topic information", "", __LINE__, __FILE__, $sql);
}

if( !($forum_row = $db->sql_fetchrow($result)) )
{
	message_die(GENERAL_MESSAGE, 'Topic_post_not_exist');
}
$forum_id = $forum_row['forum_id'];
$forum_name = $forum_row['forum_name'];
$topic_title = $forum_row['topic_title'];
$topic_time = $forum_row['topic_time'];

//
// Start auth check
//
$is_auth = array();
$is_auth = auth(AUTH_READ, $forum_id, $userdata, $forum_row);

if( !$is_auth['auth_read'] )
{
	if ( !$userdata['session_logged_in'] )
	{
		$redirect = "t=" . $topic_id;
		header("Location: " . append_sid("login.$phpEx?redirect=printview.$phpEx&$redirect", true));
	}

	$message = sprintf($lang['Sorry_auth_read'], $is_auth['auth_read_type']);

	message_die(GENERAL_MESSAGE, $message);
}
//
// End auth check
//

//
// Right we have auth checked and a topic id so we can fetch the topic data.
//

//
// Decide how to order the post display
//
if(!empty($HTTP_POST_VARS['postorder']) || !empty($HTTP_GET_VARS['postorder']))
{
	$post_order = (!empty($HTTP_POST_VARS['postorder'])) ? $HTTP_POST_VARS['postorder'] : $HTTP_GET_VARS['postorder'];
	$post_time_order = ($post_order == "asc") ? "ASC" : "DESC";
}
else
{
	$post_order = "asc";
	$post_time_order = "ASC";
}

$sql = "SELECT u.username, u.user_id, u.user_posts, u.user_from, u.user_website, u.user_email, u.user_icq, u.user_aim, u.user_yim, u.user_regdate, u.user_msnm, u.user_viewemail, u.user_rank, u.user_sig, u.user_sig_bbcode_uid, u.user_avatar, u.user_avatar_type, u.user_allowavatar, u.user_allowsmile, p.*,  pt.post_text, pt.post_subject, pt.bbcode_uid
	FROM " . POSTS_TABLE . " p, " . USERS_TABLE . " u, " . POSTS_TEXT_TABLE . " pt
	WHERE p.topic_id = $topic_id
		AND pt.post_id = p.post_id
		AND u.user_id = p.poster_id
	ORDER BY p.post_time $post_time_order";
if(!$result = $db->sql_query($sql))
{
	message_die(GENERAL_ERROR, "Couldn't obtain post/user information.", "", __LINE__, __FILE__, $sql);
}

if(!$total_posts = $db->sql_numrows($result))
{
	message_die(GENERAL_MESSAGE, $lang['No_posts_topic']);
}
$postrow = $db->sql_fetchrowset($result);
$db->sql_freeresult($result);

//
// Define censored word matches
//
$orig_word = array();
$replacement_word = array();
obtain_word_list($orig_word, $replacement_word);

//
// Censor topic title
//
if( count($orig_word) )
{
	$topic_title = preg_replace($orig_word, $replacement_word, $topic_title);
}

//
// Loop through the posts
//
for($i = 0; $i < $total_posts; $i++)
{
	$poster_id = $postrow[$i]['user_id'];
	$poster = $postrow[$i]['username'];

	$post_date = create_date($board_config['default_dateformat'], $postrow[$i]['post_time'], $board_config['board_timezone']);
	$post_subject = ( $postrow[$i]['post_subject'] != "" ) ? $postrow[$i]['post_subject'] : "";

	$message = $postrow[$i]['post_text'];
	$bbcode_uid = $postrow[$i]['bbcode_uid'];
 
  // Dont want any HTML on printview
	if( $postrow[$i]['enable_html'] )
	{
		$message = preg_replace("#(<)([\/]?.*?)(>)#is", "&lt;\\2&gt;", $message);
	}
  // But BBcode, links and smilies are OK, possible revision in future version?
	if( $bbcode_uid != "" )
	{
		$message = ( $board_config['allow_bbcode'] ) ? bbencode_second_pass($message, $bbcode_uid) : preg_replace("/\:[0-9a-z\:]+\]/si", "]", $message);
	}
	$message = make_clickable($message);
 	//
	// Replace naughty words
	//
	if( count($orig_word) )
	{
		$post_subject = preg_replace($orig_word, $replacement_word, $post_subject);
		$message = preg_replace($orig_word, $replacement_word, $message);
	}
	if( $board_config['allow_smilies'] )
	{
		if( $postrow[$i]['enable_smilies'] )
		{
			$message = smilies_pass($message);
		}
	}
	$message = str_replace("\n", "\n<br />\n", $message);
 
 	$template->assign_block_vars("postrow", array(
/* Begin PNphpBB2 Module */
 		"POSTER_NAME" => pnVarPrepForDisplay($poster),
/* End PNphpBB2 Module */
 		"POST_DATE" => $post_date,
		"POST_SUBJECT" => $post_subject,
		"MESSAGE" => $message)
	);
}

//
// Set up all the other template variables
//
$page_title = $lang['View_topic'] ." - $topic_title";
$template->assign_vars(array(
  "FORUM_ID" => $forum_id,
  "FORUM_NAME" => $forum_name,
  "TOPIC_ID" => $topic_id,
  "TOPIC_TITLE" => $topic_title,
	'SITENAME' => pnConfigGetVar('sitename'),
	'SITE_DESCRIPTION' => pnConfigGetVar('slogan'),
	"PAGE_TITLE" => $page_title,
	"L_POSTED" => $lang['Posted'],
	"L_POST_SUBJECT" => $lang['Post_subject'],
	"L_POSTED" => $lang['Posted'],
	"L_AUTHOR" => $lang['Author'],
	"L_SUBJECT" => $lang['Subject'],
	"L_MESSAGE" => $lang['Message'],
	"L_FORUM" => $lang['Forum'],
/* Begin PNphpBB2 Module */
	"T_FONTFACE1" => $phpbb_theme['fontface1'],
	"T_FONTSIZE2" => $phpbb_theme['fontsize2'],
 	'PNPHPBB2_CREDITS' => $lang['Powered_by'] . '<a style="text-decoration:none;" href="http://www.pnphpbb.com" target="_blank">' . '<font color="ff6600"><b><i>PN</i></b></font><font color="0001f0"><b>phpBB2</b></font></a>&nbsp;' . $modversion['copyrite'] . '&nbsp;' . $lang['PNphpBB_group'] . '<br/><a href="' . $phpbb_root_path . 'docs/copyrite.html" onclick="window.open(\'' . $phpbb_root_path . 'docs/copyrite.html\', \'_pnphpbb2_credits\', \'HEIGHT=250,WIDTH=450,scrollbars=yes\');return false;" target="_pnphpbb2_credits">' . $lang['Credits'] . '</a>',
/* End PNphpBB2 Module */
	"S_CONTENT_DIRECTION" => $lang['DIRECTION'],
	"S_CONTENT_ENCODING" => $lang['ENCODING'],
	'S_TIMEZONE' => sprintf($lang['All_times'], $lang[number_format($board_config['board_timezone'])]),
	"L_TOPICS" => $lang['Topics'])
);

//
// Right, thats got it all, send out to template.
//
$template->pparse("body");
$db->sql_close();

exit;
?>

