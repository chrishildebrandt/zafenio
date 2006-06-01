<?php
/***************************************************************************
 * Module        : PNphpBB2 (The forum for Postnuke)
 * Filename      : functions_install.php
 * Copyright     : (C) 2003 The PNphpBB Group
 * Contact       : support@pnphpbb.com
 *               : http://www.pnphpbb.com
 *
 * $Id: functions_install.php,v 1.5 2004/10/06 19:50:45 carls Exp $
 *
 ***************************************************************************/

function page_header($text, $form_action = false, $form_name = "install")
{
  global $phpbb_root_path, $phpEx;
  if (!pnModAvailable('Encompass'))
  {
	  include ('header.php');
  }
	OpenTable();
	
	$form_action = ($form_action) ? $form_action : $phpbb_root_path . 'admin/install.' . $phpEx;

	echo "<table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"10\" align=\"center\">\n";
	echo "  <tr>\n";
	echo "    <td width=\"100%\">\n";
	echo "      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n";
	echo "        <tr>\n";
	echo "          <td>\n";
	echo "            <table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">\n";
	echo "              <tr>\n";
	echo "                <td>\n";
	echo "                  <img src= \"" . $phpbb_root_path . "images/logo.gif\" border=\"0\" alt=\"PNphpBB2\" vspace=\"1\">\n";
	echo "                </td>\n";
	echo "                <td align=\"center\" width=\"100%\" valign=\"middle\">\n";
	echo "                  <font style=\"font-size:150%\"><b>" . $text . "</b></font>\n";
	echo "                </td>\n";
	echo "              </tr>\n";
	echo "            </table>\n";
	echo "          </td>\n";
	echo "        </tr>\n";
	echo "        <tr>\n";
	echo "          <td>\n";
	echo "            <br /><br />\n";
	echo "          </td>\n";
	echo "        </tr>\n";
	echo "        <tr>\n";
	echo "          <td align=\"center\">\n";
	echo "            <table width=\"80%\" cellpadding=\"2\" cellspacing=\"1\" border=\"0\">\n";
	echo "              <form action=\"" . $form_action . "\" name=\"" . $form_name . "\" method=\"post\">\n";
  return;
}

function page_footer()
{
  echo "              </form>\n";
	echo "            </table>\n";
	echo "          </td>\n";
	echo "        </tr>\n";
	echo "      </table>\n";
	echo "    </td>\n";
	echo "  </tr>\n";
	echo "</table>\n";
	 
	CloseTable();
  include ('footer.php');
  return;
}

function page_common_form($hidden, $submit)
{
  echo "              <tr>\n";
  echo "                <td>&nbsp;</td>\n";
  echo "              </tr>\n";
	echo "              <tr>\n";
	echo "                <td align=\"center\" colspan=\"2\">" . $hidden . "<input type=\"submit\" style=\"font-size: 110%; font-weight: bold\" value=\"" . $submit . "\"></td>\n";
	echo "              </tr>\n";
  return;
}

function page_common_text($text, $align = "left", $bold = false, $para = true)
{
  if ($text == "-")
  {
    if ($bold)
    {
      $bold = " size=\"5\"";
    }

    echo "              <tr>\n"; 
	  echo "                <td colspan=\"2\"><hr align=\"" . $align . "\"" . $bold . "></td>\n";
	  echo "              </tr>\n";
    return;
  }
  
  if ($bold)
  {
    $text = "<b>" . $text . "</b>";
  }
  
  if ($para)
  {
    $text = "<p>" . $text . "</p>";
  }
  echo "              <tr>\n"; 
	echo "                <td align=\"" . $align . "\" valign=\"center\" colspan=\"2\">" . $text . "</td>\n";
	echo "              </tr>\n";
  return;
}

function page_upgrade_form()
{
	global $lang;

  echo "              <tr>\n";
	echo "                <td align=\"center\" colspan=\"2\">" . $lang["continue_upgrade"] . "</td>\n";
	echo "              </tr>\n";
	echo "              <tr>\n";
	echo "                <td align=\"center\" colspan=\"2\"><input type=\"submit\" name=\"upgrade_now\" value=\"" . $lang["upgrade_submit"] . "\"></td>\n";
	echo "              </tr>\n";
  return;
}

function page_error($error_title, $error)
{
  echo "              <tr>\n";
	echo "                <font style=\"font-size;150%;\">" . $error_title . "</font>\n";
	echo "              </tr>\n";
	echo "              <tr>\n";
	echo "                <td align=\"center\"><strong>" . $error . "</strong></td>\n";
	echo "              </tr>\n";
  return;
}

function evaluate_statement($sql_query, $text, $hide = false, $replace = false, $no_error=false)
{
	global $table_prefix, $remove_remarks, $delimiter, $delimiter_basic, $db, $message_text, $errored, $error_ary, $lang;
	
	$message_text = '';
	$message_text .= $sql_query;
	if ($replace)
	{
		$sql_query = preg_replace('/phpbb_/', $table_prefix, $sql_query);
	}
	
	$sql_query = $remove_remarks($sql_query);
	$sql_query = split_sql_file($sql_query, $delimiter);
	$sql_count = count($sql_query);

  if (!$hide )
	{
    echo "              <tr>\n";
    echo "                <td>" . $text . "</td>\n";
  }
  
	for($i = 0; $i < $sql_count; $i++)
	{
		// $query_text = (strlen($sql_query[$i]) > 60 ) ? substr($sql_query[$i], 0, 55) . " ... " . substr($sql_query[$i], -10) : $sql_query[$i];
		// $message_text = "<td>" . $text . "</td>\n";

		if ( !($result = $db->sql_query($sql_query[$i])) )
		{
			$errored = true;
			$error = $db->sql_error();
			 
      $error_ary['sql'][] = (is_array($sql_query)) ? $sql_query[$i] : $sql_query;
      $error_ary['error_code'][] = $db->sql_error();
		}
	}
  
  if ( !$hide )
  {
    if ( $errored )
    {
      echo "                <td><blink><font color=\"#FF0000\"><b>" . $lang['PNphpBB2_Failed'] . "</b></font></blink></td>\n";
    }
    else
		{
			echo "                <td><b><font color=\"#008000\">" . $lang['PNphpBB2_Completed'] . "</font></b></td>\n";
		}
    echo "              </tr>\n"; 
  }
  
	flush($sql_query);
	
	if ( $errored )
	{
		return (false);
	}
	else
	{
		return $result;
	}
}

function update_config($config_name, $config_value)
{
	global $table_prefix, $remove_remarks, $delimiter, $delimiter_basic, $db, $message_text, $errored, $error_ary, $lang;
  
  $sql_query = "UPDATE " . CONFIG_TABLE . " SET config_value = '" . $config_value . "' WHERE config_name = '" . $config_name . "';";
	evaluate_statement($sql_query, "", true);
  
  return;
}

function update_attach_config($config_name, $config_value)
{
	global $table_prefix, $remove_remarks, $delimiter, $delimiter_basic, $db, $message_text, $errored, $error_ary, $lang;

  $sql_query = "UPDATE " . ATTACH_CONFIG_TABLE . " SET config_value = '" . $config_value . "' WHERE config_name = '" . $config_name . "';";
  evaluate_statement($sql_query, "", true);

  return;
}

//
// Insert a 'new' value into the Configuration Table
//
function insert_into_config($new_config_table = CONFIG_TABLE, $new_name, $default = -1)
{
	global $db, $dbms;

	$sql_query = "SELECT config_name FROM " . $new_config_table . " WHERE config_name='" . $new_name . "';";

	$result = evaluate_statement($sql_query, "", true);

	if ($db->sql_numrows($result) != 0)
	{
		return;
	}

	// Write new config variable
	if ( ($dbms == 'mysql') || ($dbms == 'mysql4') || ($dbms == 'postgres') )
	{
		$sql_query = "INSERT INTO " . $new_config_table . " (config_name, config_value) VALUES ('" . $new_name . "', '" . $default . "');";
	}
	else if ( ($dbms == 'mssql') || ($dbms == 'mssql-odbc') )
	{
		$sql_query = "INSERT INTO " . $new_config_table . " (config_name, config_value) VALUES ('" . $new_name . "', '" . $default . "');";
		$sql_query .= "GO;";
	}
		
	evaluate_statement($sql_query, "", true);

	return;
}

//
// Drop a value from the Configuration Table
//
function drop_from_config($new_config_table = CONFIG_TABLE, $drop_name)
{
	global $db, $dbms;

	$sql_query = "SELECT config_name FROM " . $new_config_table . " WHERE config_name='" . $drop_name . "';";

	$result = evaluate_statement($sql_query, "", true);

	if ($db->sql_numrows($result) != 0)
	{
	  // Drop config variable
	  if ( ($dbms == 'mysql') || ($dbms == 'mysql4') || ($dbms == 'postgres') )
	  {
		  $sql_query = "DELETE FROM " . $new_config_table . " WHERE config_name='" . $drop_name . "';";
	  }
	  else if ( ($dbms == 'mssql') || ($dbms == 'mssql-odbc') )
	  {
		  $sql_query = "DELETE FROM " . $new_config_table . " WHERE config_name='" . $drop_name . "';";
		  $sql_query .= "GO;";
	  }
		
	  evaluate_statement($sql_query, "", true);
  }
	return;
}

//
// Check if table exist
//
function table_exist($table)
{
	global $db, $table_prefix;
	
	$sql_query = "SELECT * FROM " . $table . ";";
	$sql_query = preg_replace('/phpbb_/', $table_prefix, $sql_query);

	$result = evaluate_statement($sql_query, "", true);

	if (!$result)
	{
		return (false);
	}
	else
	{
		return (true);
	}
}

//
// Check if a given row is present in table $table
//
function row_in_schema($table, $key)
{
	global $db, $table_prefix;

	$sql_query = "SELECT " . $key . " FROM " . $table . ";";
	$sql_query = preg_replace('/phpbb_/', $table_prefix, $sql_query);

	$result = evaluate_statement($sql_query, "", true);

	if ($result)
	{
		return (true);
	}
	else
	{
		return (false);
	}
}

function fill_new_table_data($dbms)
{
	
	$data = '';

	if ( ($dbms == 'mysql') || ($dbms == 'mysql4') )
	{
		$data = 'CREATE TABLE phpbb_quota_limits 
						   (quota_limit_id mediumint(8) unsigned NOT NULL auto_increment,
						 	 quota_desc varchar(20) NOT NULL default \'\', quota_limit bigint(20)
						 	 unsigned NOT NULL default \'0\', PRIMARY KEY  (quota_limit_id));

						 CREATE TABLE phpbb_attach_quota (
  					   user_id mediumint(8) unsigned NOT NULL default \'0\',
  					 	 group_id mediumint(8) unsigned NOT NULL default \'0\',
  					 	 quota_type smallint(2) NOT NULL default \'0\',
  					 	 quota_limit_id mediumint(8) unsigned NOT NULL default \'0\',
  					 	 KEY quota_type (quota_type)
						 );

						 INSERT INTO phpbb_quota_limits (quota_limit_id, quota_desc, quota_limit) VALUES (1, \'Low\', 262144);
						 INSERT INTO phpbb_quota_limits (quota_limit_id, quota_desc, quota_limit) VALUES (2, \'Medium\', 2097152);
						 INSERT INTO phpbb_quota_limits (quota_limit_id, quota_desc, quota_limit) VALUES (3, \'High\', 5242880);
						';
	}
	else if ( ($dbms == "mssql") || ($dbms == "mssql-odbc") )
	{
		$data = 'BEGIN TRANSACTION
						 GO

						 CREATE TABLE [phpbb_quota_limits] (
  					   [quota_limit_id] [int] IDENTITY (1, 1) NOT NULL ,
  						 [quota_desc] [varchar] (20) NOT NULL,
  						 [quota_limit] [bigint] NOT NULL
							 ) ON [PRIMARY];
						 GO

						 ALTER TABLE [phpbb_quota_limits] WITH NOCHECK ADD 
						   CONSTRAINT [PK_phpbb_quota_limits] PRIMARY KEY  CLUSTERED 
							 (
							   [quota_limit_id]
								 	)  ON [PRIMARY]
						 GO

						 ALTER TABLE [phpbb_quota_limits] WITH NOCHECK ADD 
						   CONSTRAINT [DF_phpbb_quota_limits_quota_limit] DEFAULT (0) FOR [quota_limit];
						 GO;

						 CREATE TABLE [phpbb_attach_quota] (
  					   [user_id] [int] NOT NULL,
  						 [group_id] [int] NOT NULL,
  						 [quota_type] [tinyint] NOT NULL,
  						 [quota_limit_id] [int] NOT NULL
						 );
						 GO

						 ALTER TABLE [phpbb_attach_quota] WITH NOCHECK ADD 
						   CONSTRAINT [DF_phpbb_attach_quota_user_id] DEFAULT (0) FOR [user_id],
							 CONSTRAINT [DF_phpbb_attach_quota_group_id] DEFAULT (0) FOR [group_id],
							 CONSTRAINT [DF_phpbb_attach_quota_quota_type] DEFAULT (0) FOR [quota_type],
							 CONSTRAINT [DF_phpbb_attach_quota_quota_limit_id] DEFAULT (0) FOR [quota_limit_id]
						 GO

						 COMMIT
						 GO

						 BEGIN TRANSACTION
						 GO

						 SET IDENTITY_INSERT phpbb_quota_limits ON;

						 INSERT INTO phpbb_quota_limits (quota_limit_id, quota_desc, quota_limit) VALUES (1, \'Low\', 262144);
						 INSERT INTO phpbb_quota_limits (quota_limit_id, quota_desc, quota_limit) VALUES (2, \'Medium\', 2097152);
						 INSERT INTO phpbb_quota_limits (quota_limit_id, quota_desc, quota_limit) VALUES (3, \'High\', 5242880);

						 SET IDENTITY_INSERT phpbb_quota_limits OFF;

						 COMMIT
						 GO

						';
	}
	else if ($dbms == 'postgres')
	{
		$data = 'CREATE SEQUENCE phpbb_quota_limits_quota_limit_id_seq start 1 increment 1 maxvalue 2147483647 minvalue 1 cache 1;

						 CREATE TABLE phpbb_quota_limits (
  					   quota_limit_id int4 DEFAULT nextval(\'phpbb_quota_limits_quota_limit_id_seq\'::text) NOT NULL,
  						 quota_desc varchar(20) DEFAULT \'\' NOT NULL,
  						 quota_limit int8 DEFAULT 0 NOT NULL,
  						 CONSTRAINT phpbb_quota_limits_pkey PRIMARY KEY (quota_limit_id)
						 );

						 CREATE TABLE phpbb_attach_quota (
  					   user_id int4 DEFAULT 0 NOT NULL,
  						 group_id int4 DEFAULT 0 NOT NULL,
  						 quota_type int2 DEFAULT 0 NOT NULL,
  						 quota_limit_id int4 DEFAULT 0 NOT NULL
						 );
						 CREATE INDEX quota_type_phpbb_attach_quota_index ON phpbb_attach_quota (quota_type);

						 INSERT INTO phpbb_quota_limits (quota_desc, quota_limit) VALUES (\'Low\', 262144);
						 INSERT INTO phpbb_quota_limits (quota_desc, quota_limit) VALUES (\'Medium\', 2097152);
						 INSERT INTO phpbb_quota_limits (quota_desc, quota_limit) VALUES (\'High\', 5242880);

						';
	}

	return $data;
}

function rename_table($source_tablename, $dest_tablename)
{
	global $dbms;

	if ( ($dbms == 'mysql') || ($dbms == 'mysql4') )
	{
		$sql_query = 'ALTER TABLE ' . $source_tablename . ' RENAME ' . $dest_tablename . ';';
	}
	else if ( ($dbms == 'mssql') || ($dbms == 'mssql-odbc') )
	{
		$sql_query = "sp_rename '" . $source_tablename . "', '" . $dest_tablename . "';";
		$sql_query .= "GO;";
	}
	else if ($dbms == 'postgres')
	{
		$sql_query = 'ALTER TABLE ' . $source_tablename . ' RENAME TO ' . $dest_tablename . ';';
	}

//	evaluate_statement($sql_query, true, false, true);
  return $sql_query;
}
/*
function delete_all_from_dir($dir)
{
  // delete everything in the directory
  if ($handle = @opendir($dir))
  {
    while (($file = readdir($handle)) !== false)
    {
      if ($file == "." || $file == "..")
      {
        continue;
      }
      clearstatchache()
      if (is_dir($dir . $file))
      {
        // call self for this directory
        delete_all_from_dir($dir . $file . "/");
        chmod($dir.$file,0777);
        rmdir($dir.$file); //remove this directory
      }
      else
      {
        chmod($dir.$file,0777);
        unlink($dir.$file); // remove this file
      }
    }
  }
@closedir($handle);
return;
} 
*/
?>