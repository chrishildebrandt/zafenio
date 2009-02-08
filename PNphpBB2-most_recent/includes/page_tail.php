<?php
/***************************************************************************
 *                              page_tail.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_tail.php 192 2007-01-20 15:17:44Z kronos $
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
	die('Hacking attempt');
}

// Begin PNphpBB2 Module
// global $do_gzip_compress;
// End PNphpBB2 Module

//
// Show the overall footer.
//
// Begin PNphpBB2 Module
if (@is_readable($board_config['template_path'] . '/forum_footer.tpl'))
{
  $template->set_filenames(array(
	  'forum_footer' => 'forum_footer.tpl')
  );

  $template->assign_var_from_handle('FORUM_FOOTER', 'forum_footer');
}
@include($phpbb_root_path . 'pnversion.' . $phpEx);

$template->set_filenames(array(
	'pnphpbb2_credits' => 'pnphpbb2_credits.tpl')
);

$template->assign_vars(array(
	'PNPHPBB2_CREDITS' => $lang['Powered_by'] . '<a style="text-decoration:none;" href="http://www.pnphpbb.com" target="_blank">' . '<font color="ff6600"><b><i>PN</i></b></font><font color="0001f0"><b>phpBB2</b></font></a>&nbsp;' . $modversion['copyrite'] . '&nbsp;' . $lang['PNphpBB_group'] . '<br/><a href="' . $phpbb_root_path . 'docs/copyrite.html" onclick="window.open(\'' . $phpbb_root_path . 'docs/copyrite.html\', \'_pnphpbb2_credits\', \'HEIGHT=250,WIDTH=450,scrollbars=yes\');return false;" target="_pnphpbb2_credits">' . $lang['Credits'] . '</a>',
	'TRANSLATION_INFO' => ( isset($lang['TRANSLATION_INFO']) ) ? $lang['TRANSLATION_INFO'] : '',
	'CLASS' => 'gensmall') 
);

$template->pparse('pnphpbb2_credits');
// End PNphpBB2 Module

$admin_link = ( $userdata['user_level'] == ADMIN ) ? '<a href="admin/index.' . $phpEx . '?sid=' . $userdata['session_id'] . '">' . $lang['Admin_panel'] . '</a><br /><br />' : '';

$template->set_filenames(array(
	'overall_footer' => ( empty($gen_simple_header) ) ? 'overall_footer.tpl' : 'simple_footer.tpl')
);

$template->assign_vars(array(
	'TRANSLATION_INFO' => (isset($lang['TRANSLATION_INFO'])) ? $lang['TRANSLATION_INFO'] : ((isset($lang['TRANSLATION'])) ? $lang['TRANSLATION'] : ''),
	'ADMIN_LINK' => $admin_link)
);

$template->pparse('overall_footer');

//
// Close our DB connection.
//
$db->sql_close();

//
// Compress buffered output if required and send to browser
//
// Begin PNphpBB2 Module
/*
if ( $do_gzip_compress )
{
	//
	// Borrowed from php.net!
	//
	$gzip_contents = ob_get_contents();
	ob_end_clean();

	$gzip_size = strlen($gzip_contents);
	$gzip_crc = crc32($gzip_contents);

	$gzip_contents = gzcompress($gzip_contents, 9);
	$gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);

	echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
	echo $gzip_contents;
	echo pack('V', $gzip_crc);
	echo pack('V', $gzip_size);
}
*/
// End PNphpBB2 Module

// Begin PNphpBB2 Module
if (empty($gen_simple_header) && empty($full_page))
{
   include("footer.php");
}
// End PNphpBB2 Module
exit;

?>
