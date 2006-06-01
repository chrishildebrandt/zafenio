<?php
/***************************************************************************
 *                           page_footer_admin.php
 *                            -------------------
 *   begin                : Saturday, Jul 14, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_footer_admin.php,v 1.2 2006/04/28 17:49:43 adrianc602 Exp $
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

global $do_gzip_compress;

// Begin PNphpBB2 Module
@include('modules/' . $ModName . '/pnversion.' . $phpEx);
// End PNphpBB2 Module
//
// Show the overall footer.
//

// Begin PNphpBB2 Module
@include($phpbb_root_path . 'pnversion.' . $phpEx);

$template->set_filenames(array(
	'pnphpbb2_credits' => 'pnphpbb2_credits.tpl')
);

$template->assign_vars(array(
 	'PNPHPBB2_CREDITS' => $lang['Powered_by'] . '<a style="text-decoration:none;" href="http://www.pnphpbb.com" target="_blank">' . '<font color="ff6600"><b><i>PN</i></b></font><font color="0001f0"><b>phpBB2</b></font></a>&nbsp;' . $modversion['copyrite'] . '&nbsp;' . $lang['PNphpBB_group'] . '<br/><a href="' . $phpbb_root_path . 'docs/copyrite.html" onclick="window.open(\'' . $phpbb_root_path . 'docs/copyrite.html\', \'_pnphpbb2_credits\', \'HEIGHT=250,WIDTH=450,scrollbars=yes\');return false;" target="_pnphpbb2_credits">' . $lang['Credits'] . '</a>',
	'CLASS' => 'row1') 
);

$template->pparse('pnphpbb2_credits');
// End PNphpBB2 Module

$template->set_filenames(array(
	'page_footer' => 'admin/page_footer.tpl')
);

$template->assign_vars(array(
	'PHPBB_VERSION' => ($userdata['user_level'] == ADMIN && $userdata['user_id'] != ANONYMOUS) ? '2' . $board_config['version'] : '', 
	'TRANSLATION_INFO' => (isset($lang['TRANSLATION_INFO'])) ? $lang['TRANSLATION_INFO'] : ((isset($lang['TRANSLATION'])) ? $lang['TRANSLATION'] : ''))
);

$template->pparse('page_footer');

//
// Close our DB connection.
//
$db->sql_close();

//
// Compress buffered output if required
// and send to browser
//
if( $do_gzip_compress )
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

exit;

?>