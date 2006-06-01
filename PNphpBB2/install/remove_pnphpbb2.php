<?php
/***************************************************************************
 *                            remove_pnphpbb2.php
 *                            -------------------
 *   begin                : Tuesday, Mar 13, 2003
 *   copyright            : (C) 2003 The PNphpBB Group
 *   email                : support@pnphpbb.com
 *
 *   $Id: remove_pnphpbb2.php,v 1.8 2004/10/20 18:27:11 carls Exp $
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
// PNphpBB2 databse table removal utility.
// This script can ONLY be called from withing the pninit script
// If its called from anywhere else it will die!
// Administrator of PostNuke as well as it being called as a module
// MUST be satisfied before deletion can proceed.
//
// NOTE: The PNphpBB2 directory MUST exist to run this script
// 
// global $table_prefix, $remove_remarks, $delimiter, $db, $errored, $error_ary;
global $table_prefix, $remove_remarks, $delimiter, $db, $errored, $error_ary;

if (!defined("LOADED_AS_MODULE"))
{
	 die ("You can't access this file directly...");
}

error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

// Begin main prog
define('IN_PHPBB', true);

// Begin PNphpBB2 Module
if (empty($ModName))
{
	 $ModName = ($HTTP_GET_VARS['name']) ? $HTTP_GET_VARS['name'] : "PNphpBB2";
}
$phpbb_root_path = './modules/' . $ModName . '/';

list($dbconn) = pnDBGetConn();
$pntable = pnDBGetTables();

include($phpbb_root_path . 'extension.inc');

if (!pnSecAuthAction(0, 'PNphpBB2::', '::', ACCESS_ADMIN)) {
	 pnredirect("index.php");
}

// Get PostNuke's Default Language and use this for PNphpBB2 default.
if (!function_exists('getPNlanguage'))
{
  include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
}
$language = getPNlanguage();

// If no language files exist for PostNuke language then use english
if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx))
{
  $language = "english";
}

define('PNPHPBB_INSTALL', true);
include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);
include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_main.' . $phpEx);
include($phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx);

$dbms=pnConfigGetVar('dbtype');

$dbhost = pnConfigGetVar('dbhost');
$dbuser = pnConfigGetVar('dbuname');
$dbpasswd = pnConfigGetVar('dbpass');
$dbname = pnConfigGetVar('dbname');

$admin_name=pnUserGetVar('uname');

$error = false;

include($phpbb_root_path . 'includes/constants.' . $phpEx);
include($phpbb_root_path . 'attach_mod/includes/constants.' . $phpEx);
include_once($phpbb_root_path . 'install/includes/functions_install.' . $phpEx);
include($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
include($phpbb_root_path . 'includes/functions_search.' . $phpEx);
include($phpbb_root_path . 'includes/sql_parse.' . $phpEx);

// Define schema info
$available_dbms = array(
	'mysql'=> array(
		'LABEL'			=> 'MySQL 3.x',
		'SCHEMA'		=> 'mysql', 
		'DELIM'			=> ';',
		'DELIM_BASIC'	=> ';',
		'COMMENTS'		=> 'remove_remarks'
	), 
	'mysql4' => array(
		'LABEL'			=> 'MySQL 4.x',
		'SCHEMA'		=> 'mysql', 
		'DELIM'			=> ';', 
		'DELIM_BASIC'	=> ';',
		'COMMENTS'		=> 'remove_remarks'
	), 
	'postgres' => array(
		'LABEL'			=> 'PostgreSQL 7.x',
		'SCHEMA'		=> 'postgres', 
		'DELIM'			=> ';', 
		'DELIM_BASIC'	=> ';',
		'COMMENTS'		=> 'remove_comments'
	), 
	'mssql' => array(
		'LABEL'			=> 'MS SQL Server 7/2000',
		'SCHEMA'		=> 'mssql', 
		'DELIM'			=> 'GO', 
		'DELIM_BASIC'	=> ';',
		'COMMENTS'		=> 'remove_comments'
	),
	'msaccess' => array(
		'LABEL'			=> 'MS Access [ ODBC ]',
		'SCHEMA'		=> '', 
		'DELIM'			=> '', 
		'DELIM_BASIC'	=> ';',
		'COMMENTS'		=> ''
	),
	'mssql-odbc' =>	array(
		'LABEL'			=> 'MS SQL Server [ ODBC ]',
		'SCHEMA'		=> 'mssql', 
		'DELIM'			=> 'GO',
		'DELIM_BASIC'	=> ';',
		'COMMENTS'		=> 'remove_comments'
	)
);

if (isset($dbms))
{
	switch($dbms)
	{
		case 'msaccess':
		case 'mssql-odbc':
			$check_exts = 'odbc';
			$check_other = 'odbc';
			break;

		case 'mssql':
			$check_exts = 'mssql';
			$check_other = 'sybase';
			break;

		case 'mysql':
			case 'mysql4':
			$check_exts = 'mysql';
			$check_other = 'mysql';
			break;

		case 'postgres':
			$check_exts = 'pgsql';
			$check_other = 'pgsql';
			break;
	}

	if (!extension_loaded($check_exts) && !extension_loaded($check_other))
	{	
		page_header($lang['Install'], '');
		page_error($lang['Installer_Error'], $lang['Install_No_Ext']);
		page_footer();
		exit;
	}

	include($phpbb_root_path.'includes/db.'.$phpEx);
}

$remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
$delimiter = $available_dbms[$dbms]['DELIM']; 
$delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

$removed = false;

page_header($lang['PNphpBB2_Remove_Prompt'], "index.php?module=Modules&type=admin&func=list");
page_common_text("-", "center");

$error_ary = array();
$errored = FALSE;

$sql_query = "SHOW TABLES LIKE '" . $table_prefix . "_%';";
$result = evaluate_statement($sql_query, '', true);
if ($result)
{
  $sql_query = "";
  while ( list($drop_table) = $db->sql_fetchrow($result) )
  {
    $sql_query .= "DROP TABLE `" . $drop_table . "`;";
  }
}

evaluate_statement($sql_query, sprintf($lang['PNphpBB2_Remove_Title'], $table_prefix));

if ($errored)
{
	page_common_text($lang['PNphpBB2_Some_Failed'], "center");

	for ($i = 0; $i < count($error_ary['sql']); $i++)
	{
		page_common_text("<li>Error :: <b>" . $error_ary['error_code'][$i]['message'] . "</b><br />", "center");
		page_common_text("SQL &nbsp; :: <b>" . $error_ary['sql'][$i] . "</b><br /></li>", "center");
	}

	page_common_text($lang['PNphpBB2_Some_Failed'], "left");
}
else
{
  $removed = true;
}

page_common_text("-", "center");
page_common_text($lang['PNphpBB2_Remove_Notes'], "left");

page_common_form($s_hidden_fields, _OK);
page_footer();
?>
