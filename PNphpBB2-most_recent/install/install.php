<?php
/***************************************************************************
 *                                install.php
 *                            -------------------
 *   begin                : Tuesday, Feb 04, 2003
 *   copyright            : (C) 2003 The PNphpBB Group
 *   email                : support@pnphpbb.com
 *
 *   $Id: install.php 192 2007-01-20 15:17:44Z kronos $
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

global $remove_remarks, $delimiter, $db, $errored, $error_ary;

error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

define('IN_PHPBB', true);

list($dbconn) = pnDBGetConn();
$pntable = pnDBGetTables();

if (!pnSecAuthAction(0, 'PNphpBB2::', '::', ACCESS_ADMIN))
{
    pnredirect("index.php");
    return;
}

$error = false;

// Include some required functions
include($phpbb_root_path . 'includes/constants.' . $phpEx);
// include($phpbb_root_path . 'includes/template.' . $phpEx);

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
		'LABEL'			=> 'MySQL 4.x/5.x',
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

list($dbms, $dbhost, $dbuser, $dbpasswd, $dbname) = get_pndb_config();

$error = false;

// Obtain the server domain
if (empty($_SERVER['HTTP_HOST']))
{
  $server_name = getenv('HTTP_HOST');
}
else
{
  $server_name = $_SERVER['HTTP_HOST'];
}

$server_port = '80';

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

	include($phpbb_root_path . 'includes/db.' . $phpEx);
}

page_header($lang['PNphpBB2_Install'], 'index.php?module=Modules&type=admin&func=list');
page_common_text("-", "center");

$dbms_schema = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
$dbms_basic = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';
$dbms_attach_schema = $phpbb_root_path . 'install/schemas/attach_' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
$dbms_attach_basic = $phpbb_root_path . 'install/schemas/attach_' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';
//$dbms_pnphpbb2_schema = $phpbb_root_path . 'install/schemas/pnphpbb2_' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
$dbms_pnphpbb2_basic = $phpbb_root_path . 'install/schemas/pnphpbb2_' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';


$remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
$delimiter = $available_dbms[$dbms]['DELIM']; 
$delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

$error_ary = array();
$errored = FALSE;

if ($dbms != 'msaccess')
{
	// Load in the sql parser
	include($phpbb_root_path.'includes/sql_parse.'.$phpEx);

	// Ok we have the db info go ahead and read in the relevant schema
	// and work on building the table.. probably ought to provide some
	// kind of feedback to the user as we are working here in order
	// to let them know we are actually doing something.

	$sql_query = @fread(@fopen($dbms_schema, 'r'), @filesize($dbms_schema));
  
	// Ok now lest do the same for the attachment mod schema
	$sql_query .= @fread(@fopen($dbms_attach_schema, 'r'), @filesize($dbms_attach_schema));

	// Ok now lest do the same for the pnphpbb2 schema
  // $sql_query .= @fread(@fopen($dbms_pnphpbb2_schema, 'r'), @filesize($dbms_pnphpbb2_schema));

	$result = evaluate_statement($sql_query, sprintf($lang['PNphpBB2_Install_Title'], $table_prefix) , false, true);

	// Ok tables have been built, let's fill in the basic information
	$sql_query = @fread(@fopen($dbms_basic, 'r'), @filesize($dbms_basic));

	// Ok tables have been built, let's fill in the basic information for the attachment mod
	$sql_query .= @fread(@fopen($dbms_attach_basic, 'r'), @filesize($dbms_attach_basic));

  // Ok tables have been built, let's fill in the basic information for PNphpBB2
	$sql_query .= @fread(@fopen($dbms_pnphpbb2_basic, 'r'), @filesize($dbms_pnphpbb2_basic));
	$result = evaluate_statement($sql_query, $lang['Populate_DB_PNphpBB'], false, true);

}

$sql_query = '';

// Update the default admin user with their information.
$sql_query .= "INSERT INTO " . $table_prefix . "config (config_name, config_value) VALUES ('board_startdate', " . time() . ");";

$sql_query .= "INSERT INTO " . $table_prefix . "config (config_name, config_value) VALUES ('default_lang', '" . str_replace("\'", "''", $language) . "');";

$update_config = array(
	'board_email'	=> pnConfigGetVar('adminmail'),
	'script_path'	=> $phpbb_root_path,
	'server_port'	=> $server_port,
	'server_name'	=> $server_name
);

while (list($config_name, $config_value) = each($update_config))
{
	$sql_query .= "UPDATE " . $table_prefix . "config SET config_value = '$config_value' WHERE config_name = '$config_name';";
}

$admin_name=pnUserGetVar('uname');
// Obtain PN user password
$sql = "SELECT pn_pass FROM " . pnConfigGetVar('prefix') . "_users WHERE pn_uid='2'";

if ( !($result = $db->sql_query($sql)) )
{
 	 message_die(CRITICAL_ERROR, 'Could not obtain PN user table', '', __LINE__, __FILE__, $sql);
}
list($admin_pass_md5) = $db->sql_fetchrow($result);

$sql_query .= "UPDATE " . $table_prefix . "users SET username = '" . str_replace("\'", "''", $admin_name) . "', user_password='" . str_replace("\'", "''", $admin_pass_md5) . "', user_lang = '" . str_replace("\'", "''", $language) . "', user_email='" . str_replace("\'", "''", pnConfigGetVar('adminmail')) . "' WHERE username = 'Admin';";

$sql_query .= "UPDATE " . $table_prefix . "users SET user_regdate = " . time() . ";";

$result = evaluate_statement($sql_query, $lang['Populate_DB_Admin'], false, false);

if ($errored)
{
	page_common_text($lang['PNphpBB2_Some_Failed'], "center");

	for ($i = 0; $i < count($error_ary['sql']); $i++)
	{
		page_common_text("<li>Error :: <b>" . $error_ary['error_code'][$i]['message'] . "</b><br />", "center");
		page_common_text("SQL &nbsp; :: <b>" . $error_ary['sql'][$i] . "</b><br /></li>", "center");
	}
}

$id = pnModGetIDFromName($ModName);

if (defined('PN_VERSION_NUM') && !strcmp(PN_VERSION_NUM, "0.8.", 4)) {
	/* Set module state to 'inactive', this script will terminate execution */
	pnModAPIFunc('Modules', 'admin', 'setstate', array('id' => $id, 'state' => PNMODULE_STATE_INACTIVE));
	/* Cannot auto activate the module */
	page_common_text("<b>Please manually activate the module</b>", "center");
} else {
	if (pnModAPIFunc('Modules', 'admin', 'setstate', array('mid' => $id, 'state' => _PNMODULE_STATE_INACTIVE))) {
		/* Success */
		pnSessionSetVar('statusmsg', $lang['PNphpBB2_Installed']);
		pnModAPIFunc('Modules', 'admin', 'setstate', array('mid' => $id, 'state' => _PNMODULE_STATE_ACTIVE));
	}
}

page_common_text("-", "center");
page_common_text($lang['PNphpBB2_Install_Complete'], "left");
page_common_form('', $lang['Finish_Install']);
page_footer();

/* Terminate execution. pnMod will try a redirect which will fails since we 
 * have already printed stuff on the page.
 */
exit;
?>
