<?php
/***************************************************************************
 *                         admin_post_text_replace.php
 *                        -----------------------------
 *   begin                : Friday, August 11, 2003
 *   copyright            : (C) 2003 The PNphpBB Group
 *   email                : support@pnphpbb.com
 *
 *   $Id: admin_post_text_replace.php,v 1.2 2004/09/25 19:21:22 carls Exp $
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
	$phpbb_module['PNphpBB2']['Post_text_replace'] = "$file";

	return;
}

$phpbb_root_path = './modules/' . $ModName . '/';
require($phpbb_root_path . 'extension.inc');
require($phpbb_root_path . 'admin/pagestart.' . $phpEx);
include($phpbb_root_path . 'includes/sql_parse.'.$phpEx);

// Obtain language file
$temp_language = $board_config['default_lang'];
if ( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $temp_language . '/admin/lang_searchreplace.'.$phpEx)) )
{
	$temp_language = 'english';
}
include($phpbb_root_path . 'language/lang_' . $temp_language . '/admin/lang_searchreplace.' . $phpEx);

if( isset($HTTP_POST_VARS['submit']) && !empty($HTTP_POST_VARS['find_text']) && !empty($HTTP_POST_VARS['replace_with']) )
{
  $find_text = $HTTP_POST_VARS['find_text'];
	$replace_with = $HTTP_POST_VARS['replace_with'];
  $sql = "SELECT post_id, post_text FROM " . POSTS_TEXT_TABLE . " WHERE post_text LIKE '%" . pnVarPrepForStore(htmlspecialchars($find_text)) . "%';";
	$result = $db->sql_query($sql);
	$i = 0;
				
	while ($row = $db->sql_fetchrow($result))
	{
	  $i++;
		$changetext = str_replace($find_text, $replace_with, $row['post_text']);
		$sql = "UPDATE " . POSTS_TEXT_TABLE . " SET post_text = '" . pnVarPrepForStore($changetext) . "' WHERE post_id = " . $row['post_id'] . ";";
		if (!$db->sql_query($sql)) {break;}
	}
	$results = $lang_admin['RecChanged'] . $i;
}

if( isset($HTTP_POST_VARS['test']) && !empty($HTTP_POST_VARS['find_text']) && !empty($HTTP_POST_VARS['replace_with']) )
{
  $find_text = $HTTP_POST_VARS['find_text'];
	$replace_with = $HTTP_POST_VARS['replace_with'];
	$sql = "SELECT count(*) FROM " . POSTS_TEXT_TABLE . " WHERE post_text LIKE '%" . pnVarPrepForStore(htmlspecialchars($HTTP_POST_VARS['find_text'])) . "%';";
	if ( $result = $db->sql_query($sql) )
	{
	 	 list($testcount) = $db->sql_fetchrow($result);
		 $results = '<b>' . $lang_admin['RecFound'] . $testcount . '</b>';
		 
		 if ($testcount > 0)
		 {
		 		$sql = "SELECT post_id, post_text FROM " . POSTS_TEXT_TABLE . " WHERE post_text LIKE '%" . pnVarPrepForStore(htmlspecialchars($HTTP_POST_VARS['find_text'])) . "%';";
		 		$result = $db->sql_query($sql);
				$testresults = '<b>' . $lang_admin['TextToChange'] . '</b><br />';
				$i = 0;
				
		 		while ($row = $db->sql_fetchrow($result))
		 		{
				 	$i++;
				  $testresults .= '<b><u>' . $lang_admin['Before'] . '</u></b>' . str_replace($find_text, "<b><u>" . $find_text . "</u></b>", $row['post_text']) . '<br /><br />';
				  $testresults .= '<b><u>' . $lang_admin['After'] . '</u></b>' . str_replace($find_text, "<b><u>" . $replace_with . "</u></b>", $row['post_text']) . '<br /><br />';
					if ($i == 2) break;
		 		}
		 }	 
	}
}

if ( !empty($HTTP_POST_VARS['find_text']) && !empty($HTTP_POST_VARS['replace_with']) )
{
  $find_text = $HTTP_POST_VARS['find_text'];
	$replace_with = $HTTP_POST_VARS['replace_with'];
}

$template->set_filenames(array(
	"body" => "admin/post_text_replace_body.tpl")
);

$template->assign_vars(array(

  "L_RESULTS" => $results . '<br /><br />' . $testresults,
	"S_CONFIG_ACTION" => append_sid("admin_post_text_replace.$phpEx"),
	"L_YES" => $lang['Yes'],
	"L_NO" => $lang['No'],
	"L_CONFIGURATION_TITLE" => $lang_admin['SRTitle'],
	"L_CONFIGURATION_EXPLAIN" => $lang_admin['SRExplain'],
	"L_GENERAL_SETTINGS" => $lang_admin['SRTitle'],
	"L_OLD_LINK" => $lang_admin['SearchFor'], 
	"L_OLD_LINK_EXPLAIN" => $lang_admin['SearchForExplain'], 
	"L_NEW_LINK" => $lang_admin['ReplaceWith'], 
	"L_NEW_LINK_EXPLAIN" => $lang_admin['ReplaceWithExplain'],
	"L_TEST" => $lang_admin['Text'], 
	"L_SUBMIT" => $lang['Submit'], 
	"L_RESET" => $lang['Reset'], 
	"OLD_LINK" => $find_text, 
	"NEW_LINK" => $replace_with)
);

$template->pparse("body");


// Begin PNphpBB2 Module
include($phpbb_root_path . 'admin/page_footer_admin.' . $phpEx);
// End PNphpBB2 Module

?>
