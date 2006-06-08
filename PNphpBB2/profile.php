<?php
/***************************************************************************
 *                                profile.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: profile.php,v 1.2 2006/04/28 17:49:44 adrianc602 Exp $
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
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
//
// End session management
//

// session id check
if (!empty($HTTP_POST_VARS['sid']) || !empty($HTTP_GET_VARS['sid']))
{
	$sid = (!empty($HTTP_POST_VARS['sid'])) ? $HTTP_POST_VARS['sid'] : $HTTP_GET_VARS['sid'];
}
else
{
	$sid = '';
}

// Begin PNphpBB2 Module
if (!$userdata['session_logged_in'])
{
	if ( isset($HTTP_GET_VARS['mode']) || isset($HTTP_POST_VARS['mode']) )
	{
		$mode = ( isset($HTTP_POST_VARS['mode']) ) ? $HTTP_POST_VARS['mode'] : $HTTP_GET_VARS['mode'];
		$mode = htmlspecialchars($mode);
	}
	else
	{
		$mode = '';
	}
	if ( !empty($HTTP_GET_VARS[POST_USERS_URL]) && $HTTP_GET_VARS[POST_USERS_URL] <> ANONYMOUS )
	{
		$user_id = "&" . POST_USERS_URL . "=" . intval($HTTP_GET_VARS[POST_USERS_URL]);
	}
	else
	{
		$user_id = "";
	}
	redirect(append_sid("login.$phpEx?redirect=profile.$phpEx&mode=$mode" . $user_id, true));
}
// End PNphpBB2 Module

//
// Set default email variables
//
// Begin PNphpBB2 Module
//$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($board_config['script_path']));
//$script_name = ( $script_name != '' ) ? $script_name . '/profile.'.$phpEx : 'profile.'.$phpEx;
//$server_name = trim($board_config['server_name']);
//$server_protocol = ( $board_config['cookie_secure'] ) ? 'https://' : 'http://';
//$server_port = ( $board_config['server_port'] <> 80 ) ? ':' . trim($board_config['server_port']) . '/' : '/';

//$server_url = $server_protocol . $server_name . $server_port . $script_name;
// End PNphpBB2 Module

// -----------------------
// Page specific functions
//
function gen_rand_string($hash)
{
	$rand_str = dss_rand();

	return ( $hash ) ? md5($rand_str) : substr($rand_str, 0, 8);
}
//
// End page specific functions
// ---------------------------

//
// Start of program proper
//
if ( isset($HTTP_GET_VARS['mode']) || isset($HTTP_POST_VARS['mode']) )
{
	$mode = ( isset($HTTP_GET_VARS['mode']) ) ? $HTTP_GET_VARS['mode'] : $HTTP_POST_VARS['mode'];
	$mode = htmlspecialchars($mode);

	if ( $mode == 'viewprofile' )
	{
		include($phpbb_root_path . 'includes/usercp_viewprofile.'.$phpEx);
		exit;
	}
// Begin PNphpBB2 Module
/*	else if ( $mode == 'editprofile' || $mode == 'register' )
	{
		if ( !$userdata['session_logged_in'] && $mode == 'editprofile' )
		{
			redirect(append_sid("login.$phpEx?redirect=profile.$phpEx&mode=editprofile", true));
		}

		include($phpbb_root_path . 'includes/usercp_register.'.$phpEx);
		exit;
	}
	else if ( $mode == 'confirm' )
	{
		// Visual Confirmation
		if ( $userdata['session_logged_in'] )
		{
			exit;
		}

		include($phpbb_root_path . 'includes/usercp_confirm.'.$phpEx);
		exit;
	}
	else if ( $mode == 'sendpassword' )
	{
		include($phpbb_root_path . 'includes/usercp_sendpasswd.'.$phpEx);
		exit;
	}
	else if ( $mode == 'activate' )
	{
		include($phpbb_root_path . 'includes/usercp_activate.'.$phpEx);
		exit;
	}
*/
	else if ( $mode == 'editprofile' )
	{
		if ( !$userdata['session_logged_in'] )
		{
			redirect(append_sid("login.$phpEx?redirect=profile.$phpEx&mode=editprofile", true));
		}

		include($phpbb_root_path . 'includes/usercp_register.'.$phpEx);
 		exit;
 	}
// End PNphpBB2 Module
	else if ( $mode == 'email' )
	{
		include($phpbb_root_path . 'includes/usercp_email.'.$phpEx);
		exit;
	}
}

redirect(append_sid("index.$phpEx", true));

?>