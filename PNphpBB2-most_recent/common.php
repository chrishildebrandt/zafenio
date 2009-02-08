<?php
/***************************************************************************
 *                                common.php
 *                            -------------------
 *   begin                : Saturday, Feb 23, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: common.php 192 2007-01-20 15:17:44Z kronos $
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

//
error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

// The following code (unsetting globals)
// Thanks to Matt Kavanagh and Stefan Esser for providing feedback as well as patch files

// PHP5 with register_long_arrays off?
if (@phpversion() >= '5.0.0' && (!@ini_get('register_long_arrays') || @ini_get('register_long_arrays') == '0' || strtolower(@ini_get('register_long_arrays')) == 'off'))
{
	$HTTP_POST_VARS = $_POST;
	$HTTP_GET_VARS = $_GET;
	$HTTP_SERVER_VARS = $_SERVER;
	$HTTP_COOKIE_VARS = $_COOKIE;
	$HTTP_ENV_VARS = $_ENV;
	$HTTP_POST_FILES = $_FILES;

	// _SESSION is the only superglobal which is conditionally set
	if (isset($_SESSION))
	{
		$HTTP_SESSION_VARS = $_SESSION;
	}
}

/* Begin PNphpBB2 Module */
if (!isset($HTTP_POST_VARS) || !isset($HTTP_GET_VARS)) {
	/* PN .763 emulates register_long_arrays = Off */
	$HTTP_POST_VARS = $_POST;
	$HTTP_GET_VARS = $_GET;
	$HTTP_SERVER_VARS = $_SERVER;
	$HTTP_COOKIE_VARS = $_COOKIE;
	$HTTP_ENV_VARS = $_ENV;
	$HTTP_POST_FILES = $_FILES;

	// _SESSION is the only superglobal which is conditionally set
	if (isset($_SESSION))
	{
		$HTTP_SESSION_VARS = $_SESSION;
	}
}
/* End PNphpBB2 Module */

// Protect against GLOBALS tricks
if (isset($HTTP_POST_VARS['GLOBALS']) || isset($HTTP_POST_FILES['GLOBALS']) || isset($HTTP_GET_VARS['GLOBALS']) || isset($HTTP_COOKIE_VARS['GLOBALS']))
{
	die("Hacking attempt");
}

// Protect against HTTP_SESSION_VARS tricks
if (isset($HTTP_SESSION_VARS) && !is_array($HTTP_SESSION_VARS))
{
	die("Hacking attempt");
}

if (@ini_get('register_globals') == '1' || strtolower(@ini_get('register_globals')) == 'on')
{
	// PHP4+ path
	$not_unset = array('HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_COOKIE_VARS', 'HTTP_SERVER_VARS', 'HTTP_SESSION_VARS', 'HTTP_ENV_VARS', 'HTTP_POST_FILES', 'phpEx', 'phpbb_root_path');

	// Not only will array_merge give a warning if a parameter
	// is not an array, it will actually fail. So we check if
	// HTTP_SESSION_VARS has been initialised.
	if (!isset($HTTP_SESSION_VARS) || !is_array($HTTP_SESSION_VARS))
	{
		$HTTP_SESSION_VARS = array();
	}

	// Merge all into one extremely huge array; unset
	// this later
	$input = array_merge($HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_COOKIE_VARS, $HTTP_SERVER_VARS, $HTTP_SESSION_VARS, $HTTP_ENV_VARS, $HTTP_POST_FILES);

	unset($input['input']);
	unset($input['not_unset']);

	while (list($var,) = @each($input))
	{
		if (in_array($var, $not_unset))
		{
			die('Hacking attempt!');
		}
		unset($$var);
	}

	unset($input);
}

//
// addslashes to vars if magic_quotes_gpc is off
// this is a security precaution to prevent someone
// trying to break out of a SQL statement.
//
if( !get_magic_quotes_gpc() )
{
	if( is_array($HTTP_GET_VARS) )
	{
		while( list($k, $v) = each($HTTP_GET_VARS) )
		{
			if( is_array($HTTP_GET_VARS[$k]) )
			{
				while( list($k2, $v2) = each($HTTP_GET_VARS[$k]) )
				{
					$HTTP_GET_VARS[$k][$k2] = addslashes($v2);
				}
				@reset($HTTP_GET_VARS[$k]);
			}
			else
			{
				$HTTP_GET_VARS[$k] = addslashes($v);
			}
		}
		@reset($HTTP_GET_VARS);
	}

	if( is_array($HTTP_POST_VARS) )
	{
		while( list($k, $v) = each($HTTP_POST_VARS) )
		{
			if( is_array($HTTP_POST_VARS[$k]) )
			{
				while( list($k2, $v2) = each($HTTP_POST_VARS[$k]) )
				{
					$HTTP_POST_VARS[$k][$k2] = addslashes($v2);
				}
				@reset($HTTP_POST_VARS[$k]);
			}
			else
			{
				$HTTP_POST_VARS[$k] = addslashes($v);
			}
		}
		@reset($HTTP_POST_VARS);
	}

	if( is_array($HTTP_COOKIE_VARS) )
	{
		while( list($k, $v) = each($HTTP_COOKIE_VARS) )
		{
			if( is_array($HTTP_COOKIE_VARS[$k]) )
			{
				while( list($k2, $v2) = each($HTTP_COOKIE_VARS[$k]) )
				{
					$HTTP_COOKIE_VARS[$k][$k2] = addslashes($v2);
				}
				@reset($HTTP_COOKIE_VARS[$k]);
			}
			else
			{
				$HTTP_COOKIE_VARS[$k] = addslashes($v);
			}
		}
		@reset($HTTP_COOKIE_VARS);
	}
}

//
// Define some basic configuration arrays this also prevents
// malicious rewriting of language and otherarray values via
// URI params
//
$board_config = array();
$userdata = array();
// Begin PNphpBB2 Module
$phpbb_theme = array();
// End PNphpBB2 Module
$images = array();
$lang = array();
$nav_links = array();
$dss_seeded = false;
$gen_simple_header = FALSE;

// Begin PNphpBB2 Module
// include($phpbb_root_path . 'config.'.$phpEx);

include($phpbb_root_path . 'includes/functions.'.$phpEx);

list($dbms, $dbhost, $dbuser, $dbpasswd, $dbname) = get_pndb_config();
$table_prefix = pnConfigGetVar('prefix') . "_phpbb_";

list($dbconn) = pnDBGetConn(); 
$pntable = pnDBGetTables(); 

// Can we find the users table?
$test = $dbconn->Execute("SELECT user_id FROM " . $table_prefix . "users LIMIT 1");
if ($test) {
   define('PHPBB_INSTALLED', true);
	 $test->Close();
}
// End PNphpBB2 Module

if( !defined("PHPBB_INSTALLED") )
{
// Begin PNphpBB2 Module
//	header('Location: ' . $phpbb_root_path . 'install/install.' . $phpEx);
	die("Unable to access " . $table_prefix . "users table, Instalation was either not completed or table is missing.");
// End PNphpBB2 Module

	exit;
}

include($phpbb_root_path . 'includes/constants.'.$phpEx);
// Begin PNphpBB2 Module
// include($phpbb_root_path . 'includes/template.'.$phpEx);
// End PNphpBB2 Module
include($phpbb_root_path . 'includes/sessions.'.$phpEx);
include($phpbb_root_path . 'includes/auth.'.$phpEx);
// Begin PNphpBB2 Module
// include($phpbb_root_path . 'includes/functions.'.$phpEx);
// End PNphpBB2 Module
include($phpbb_root_path . 'includes/db.'.$phpEx);

// We do not need this any longer, unset for safety purposes
unset($dbpasswd);

//
// Obtain and encode users IP
//
// I'm removing HTTP_X_FORWARDED_FOR ... this may well cause other problems such as
// private range IP's appearing instead of the guilty routable IP, tough, don't
// even bother complaining ... go scream and shout at the idiots out there who feel
// "clever" is doing harm rather than good ... karma is a great thing ... :)
//
$client_ip = ( !empty($HTTP_SERVER_VARS['REMOTE_ADDR']) ) ? $HTTP_SERVER_VARS['REMOTE_ADDR'] : ( ( !empty($HTTP_ENV_VARS['REMOTE_ADDR']) ) ? $HTTP_ENV_VARS['REMOTE_ADDR'] : getenv('REMOTE_ADDR') );
$user_ip = encode_ip($client_ip);

//
// Setup forum wide options, if this fails
// then we output a CRITICAL_ERROR since
// basic forum information is not available
//
$sql = "SELECT *
	FROM " . CONFIG_TABLE;
if( !($result = $db->sql_query($sql)) )
{
	message_die(CRITICAL_ERROR, "Could not query config information", "", __LINE__, __FILE__, $sql);
}

while ( $row = $db->sql_fetchrow($result) )
{
	$board_config[$row['config_name']] = $row['config_value'];
}
// Begin PNphpBB2 Module
// Set defaults that can not be used with PN
if ($board_config['pnphpbb2_template_compiler'] == 1)
{
 	 include($phpbb_root_path . 'includes/xs_template.'.$phpEx);
}
else
{
 	 include($phpbb_root_path . 'includes/template.'.$phpEx);
}
$board_config['default_dateformat'] = _DATETIMEBRIEF;

$board_config['server_name'] = pnGetBaseURL();
$board_config['module_url'] = "index." . $phpEx . "?name=" . $ModName . "&file=";
// $board_config['module_url'] = "modules." . $phpEx . "?op=modload&name=" . $ModName . "&file=";

$board_config['sitename'] = pnConfigGetVar('sitename'); 
$board_config['site_desc'] = pnConfigGetVar('slogan'); 
$board_config['require_activation'] = 0;
// $board_config['gzip_compress'] = pnConfigGetVar('UseCompression');
$board_config['gzip_compress'] = 0;
$board_config['allow_namechange'] = 0;
$board_config['cookie_secure'] = 0;
$board_config['default_lang'] = getPNlanguage();
$board_config['board_timezone'] = pnConfigGetVar('timezone_offset') - 12;
$board_config['board_email'] = pnConfigGetVar('adminmail'); 
@include_once($phpbb_root_path . 'pnversion.'.$phpEx);

$fullpage = pnSessionGetVar('fullpage');
if ($fullpage === false)
{
 	 pnSessionSetVar('fullpage', $board_config['pnphpbb2_full_page']);
}
$subforum = pnSessionGetVar('subforum');
if ($subforum === false)
{
 	 pnSessionSetVar('subforum', $board_config['pnphpbb2_sub_forum']);
}
$board_config['avatar_gallery_path']= $phpbb_root_path. $board_config['avatar_gallery_path'];
$board_config['avatar_path']= $phpbb_root_path. $board_config['avatar_path'];

/* -- mod : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */
include($phpbb_root_path . 'attach_mod/attachment_mod.'.$phpEx);
/* -- fin : File Attachment Mod v2 Version 2.4.3 ---------------------------------------------------- */

// Check to see if admin removed the install directory

if (!DEBUG && file_exists($phpbb_root_path . 'install'))
// End PNphpBB2 Module
{
	message_die(GENERAL_MESSAGE, 'Please_remove_install_contrib');
}

//
// Show 'Board is disabled' message if needed.
//
if( $board_config['board_disable'] && !defined("IN_ADMIN") && !defined("IN_LOGIN") )
{
	message_die(GENERAL_MESSAGE, 'Board_disable', 'Information');
}

?>
