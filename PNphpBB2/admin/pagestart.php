<?php
/***************************************************************************
 *                               pagestart.php
 *                            -------------------
 *   begin                : Thursday, Aug 2, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: pagestart.php,v 1.1 2006/04/25 15:32:02 aboensis Exp $
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

if (!defined('IN_PHPBB'))
{
	die("Hacking attempt");
}

define('IN_ADMIN', true);
// Include files
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

// Begin PNphpBB2 Module
if (!pnSecAuthAction(0, 'PNphpBB2::', '::', ACCESS_ADMIN)) {
	redirect(append_sid("login.$phpEx&redirect=admin", true));
}
// End PNphpBB2 Module

if (!$userdata['session_logged_in'])
{
// Begin PNphpBB2 Module
//	redirect(append_sid("login.$phpEx?redirect=admin/index.$phpEx", true));
 	redirect(append_sid("login.$phpEx?redirect=admin", true));
// End PNphpBB2 Module
}
else if ($userdata['user_level'] != ADMIN)
{
	message_die(GENERAL_MESSAGE, $lang['Not_admin']);
}

// Begin PNphpBB2 Module
/*
if ($HTTP_GET_VARS['sid'] != $userdata['session_id'])
{
	redirect("index.$phpEx?sid=" . $userdata['session_id']);
}

if (!$userdata['session_admin'])
{
	redirect(append_sid("login.$phpEx?redirect=admin/index.$phpEx&admin=1", true));
}
*/
// End PNphpBB2 Module

if (empty($no_page_header))
{
	// Not including the pageheader can be neccesarry if META tags are
	// needed in the calling script.
// Begin PNphpBB2 Module
//	include('./page_header_admin.'.$phpEx);
	include($phpbb_root_path . 'admin/page_header_admin.' . $phpEx);
// End PNphpBB2 Module
}

?>