<?php
/***************************************************************************
 *                            admin_rebuild_search.php
 *                            -------------------
 *   time                 : Thursday, January 30, 2003
 *   author               : Peter Wyss
 *   email                : wysspeter@bluewin.ch
 *   version              : 1.2
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

define('IN_PHPBB', 1);

if ( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$phpbb_module['PNphpBB2']['Rebuild_search_index'] = "$file";

	return;
}

//
// Include required files, get $phpEx and check permissions
//
$no_page_header = TRUE;
$phpbb_root_path = './modules/' . $ModName . '/';
require($phpbb_root_path . 'extension.inc');
require($phpbb_root_path . 'admin/pagestart.' . $phpEx);

// Obtain language file
$temp_language = $board_config['default_lang'];
if ( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $temp_language . '/admin/lang_rebuildsearch.'.$phpEx)) )
{
	$temp_language = 'english';
}
include($phpbb_root_path . 'language/lang_' . $temp_language . '/admin/lang_rebuildsearch.' . $phpEx);


if(( isset($HTTP_POST_VARS['rebuild'])) OR ($HTTP_GET_VARS['start_id'] > 0))
{
	include($phpbb_root_path . 'includes/functions_search.'.$phpEx);
	
	if ($HTTP_GET_VARS['start_id']==0)
	{
	// Empty wordlist tables

	$sql = "DELETE FROM " . SEARCH_WORD_TABLE;
	$result = $db->sql_query($sql);
		if ( !$result )
		{
			message_die(GENERAL_ERROR, $lang_admin_wsr['Error_Empty'] . SEARCH_WORD_TABLE . $lang_admin_wsr['Error_Table'], "",__LINE__, __FILE__, $sql);
		}
	$sql = "DELETE FROM " . SEARCH_MATCH_TABLE;
	$result = $db->sql_query($sql);
		if ( !$result )
		{
			message_die(GENERAL_ERROR, $lang_admin_wsr['Error_Empty'] . SEARCH_MATCH_TABLE . $lang_admin_wsr['Error_Table'], "",__LINE__, __FILE__, $sql);
		}
	}
	$sql = "SELECT count(*) as pcount FROM " . POSTS_TEXT_TABLE;
	
	$result = $db->sql_query($sql);
		if ( !$result )
		{
			message_die(GENERAL_ERROR, $lang_admin_wsr['Error_Find_Posts'], "",__LINE__, __FILE__, $sql);
		}

	$postcount = $db->sql_fetchrow($result);
	$nextpage = 0;
	for( $i = $HTTP_GET_VARS['start_id']; $i < $postcount[pcount]; $i++ )
	{

		if ($i == $HTTP_GET_VARS['start_id'] + 100)
		{
		$nextpage=1;
		break;
		}
		$sql = "SELECT post_id FROM " . POSTS_TEXT_TABLE . " LIMIT " . $i . ",1";
		$result = $db->sql_query($sql);
			if ( !$result )
			{
				message_die(GENERAL_ERROR, $lang_admin_wsr['Error_Find_Posts'], "",__LINE__, __FILE__, $sql);
			}
		$posts = $db->sql_fetchrow($result);
		$activeid = $posts['post_id'];
		$sql = "SELECT * FROM " . POSTS_TEXT_TABLE . " WHERE post_id = " . $activeid;
		$result = $db->sql_query($sql);
			if ( !$result )
			{
				message_die(GENERAL_ERROR, $lang_admin_wsr['Error_Find_Posts'], "",__LINE__, __FILE__, $sql);
			}

		$activepost = $db->sql_fetchrowset($result);
		add_search_words('single', $activepost[0]['post_id'], stripslashes($activepost[0]['post_text']), stripslashes($activepost[0]['post_subject']));
	}	
	
	if ($nextpage==1)
	{
	$template->assign_vars(array(
		'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid("admin_rebuild_search.$phpEx?start_id=$i") . '">')
	);
	$message = $i . $lang_admin_wsr['Posts_Complete'];

	$message .= "<br /><br />" . sprintf($lang_admin_wsr['Click_Here'], "<a href=\"" . append_sid("admin_rebuild_search.$phpEx?start_id=$i") . "\">", "</a>");

	message_die(GENERAL_MESSAGE, $message);
	}
	else
	{
	$message = $lang_admin_wsr['Rebuild_Successful'];

	$message .= "<br /><br />" . sprintf($lang_admin_wsr['Return_Rebuild'], "<a href=\"" . append_sid("admin_rebuild_search.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang_admin_wsr['Return_Index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");

	message_die(GENERAL_MESSAGE, $message);
	}

}


$template->set_filenames(array(
	"body" => "admin/rebuild_search_body.tpl")
);

$template->assign_vars(array(
	"S_FORM_ACTION" => append_sid("admin_rebuild_search.$phpEx?start_id=0"),

	"L_INFO" => $output_info,
	"L_REBUILD_SEARCH_TITLE" => $lang_admin_wsr['Rebuild_Search_Title'],
	"L_REBUILD_SEARCH_EXPLAIN" => $lang_admin_wsr['Rebuild_Search_Explaine'],
	"L_REBUILD_SEARCH_SUBMIT" => $lang_admin_wsr['Button_Rebuild'])
);

include($phpbb_root_path . 'admin/page_header_admin.'.$phpEx);
$template->pparse("body");
include($phpbb_root_path . 'admin/page_footer_admin.'.$phpEx);

unset($lang_admin_wsr);
?>

