<?php
/***************************************************************************
 *                            pnphpbb2_update.php
 *                            -------------------
 *   begin                : Friday, January 24, 2003
 *   updates		  : Wednesday, June 18, 2003
 *			  : Friday, March 14, 2003
 *                        : Friday, March 28, 2003 - Update for 2.0.5
 *			  : Monday, August 4, 2003 - Update for 2.0.6
 *			  : Thursday, May 4, 2006 - update for 2.0.17
 *
 *   copyright            : (C) 2002-2004 The PNphpBB Group
 *   email                : support@pnphpbb.com
 *
 *   $Id: pnphpbb2_update.php,v 1.13 2004/10/18 13:49:38 carls Exp $
 *
 *   Revision history:
 * 	 
 *	 Complete re-write of first update program. This code removes all redundant
 *   code and adds the ability to raname (ALTER) the original databases to the
 *	 new PostNuke Multi-Aware hierarchie. (phpbb_ to nuke_phpbb_).
 *	 We also give the installer more feedback on what is going on so if there
 *   is a problem, it can be more easaly diagnosed.
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

global $remove_remarks, $delimiter, $db, $errored, $error_ary, $dbms;

if (!pnSecAuthAction(0, 'PNphpBB2::', '::', ACCESS_ADMIN))
{
	pnredirect("index.php");
	return;
}

// Set script timout limit
@set_time_limit(0);

list($dbconn) = pnDBGetConn();
$pntable = pnDBGetTables();

define('IN_PHPBB', true);

$dbms=pnConfigGetVar('dbtype');

$dbhost = pnConfigGetVar('dbhost');
$dbuser = pnConfigGetVar('dbuname');
$dbpasswd = pnConfigGetVar('dbpass');
$dbname = pnConfigGetVar('dbname');

if(!isset($dbms))
{
	die("Could not find database information.");
}

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

include($phpbb_root_path . 'includes/constants.'.$phpEx);
include($phpbb_root_path . 'attach_mod/includes/constants.'.$phpEx);
include($phpbb_root_path . 'includes/functions_admin.'.$phpEx);
include($phpbb_root_path . 'includes/functions_search.'.$phpEx);
include($phpbb_root_path . 'includes/db.'.$phpEx);
include($phpbb_root_path . 'includes/sql_parse.'.$phpEx);

$remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
$delimiter = $available_dbms[$dbms]['DELIM']; 
$delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

page_header($lang['PNphpBB2_Upgrade'], 'index.php?module=Modules&type=admin&func=list');
page_common_text("-", "center");

// Set up the array that will handle the error log.
$error_ary = array();
$errored = false;

// First lets see if we need to move the databases
if (defined("OLD_PHPBB_INSTALLED"))
{
	$continue_move = false;

	// First lets double check to make sure they are there.
	$test = $dbconn->Execute("SELECT user_id FROM phpbb_users");
	if ($test)
	{
		$continue_move = true;
		$test->Close();
	}
	// Let make sure there are no tables in the destination database
	// This would be bad. The sysop already installed or has installed
	// version .1.0c+ STOP!
	$test = $dbconn->Execute("SELECT user_id FROM " . USERS_TABLE);
	if ($test)
	{
		$continue_move = false;
		$test->Close();
	}

	if (!$continue_move)
	{
		// Installer is attempting to upgrade an older version of
		// PNphpBB2 or phpBB2pnmod-F, -203, -203-Attachments and there are
		// already tables in the new location. We can not continue.
		page_common_text(sprintf($lang['PNphpBB2_Move_Tables_No'], $table_prefix, $modversion['old_table_prefix']), "center", true, true);
		page_common_text($lang['PNphpBB2_Upgrade'] . " " . $lang['PNphpBB2_Aborted'], "center", true, true);
		page_common_text("-", "center");
		page_common_form('', $lang['PNphpBB2_Done']);
		page_footer();
		die(44);
		return false;
	}
	else
	{
		// First we need to move the tables.
		$sql_query = "SHOW TABLES LIKE '" . $modversion['old_table_prefix'] . "%';";

		$result = evaluate_statement($sql_query, "", true, false, true);
		if ($result)
		{
			$sql_query = "";
			while ( list($old_table) = $db->sql_fetchrow($result) )
			{
				$new_table = str_replace($modversion['old_table_prefix'], $table_prefix, $old_table);
				$sql_query .= rename_table($old_table, $new_table);
			}
		}

		$result = evaluate_statement($sql_query, $lang['PNphpBB2_Move_Tables_Yes']);

		if (!$errored)
		{
			// Did the rename work?
			// If upgrading from phpBB2pnmod-F, -203 that does not have the attachment mod
			// installed then do not wory about it. Just need to check the users table.
			$continue_upgrade = false;
			$test = $dbconn->Execute("SELECT user_id FROM " . $table_prefix . "users");
			if ($test)
			{
				define("PNPHPBB2_UPGRADE", true);
				$test->Close();
			}
		}
	}
}

// Ok now if we are going to convert a phpBB2 site over to postnuke let do it!			
if (defined("PHPBB2_TO_PNPHPBB2") && !($errored) )
{
	// Two posibilities here. 1. Delete all the PostNuke data?. 2. replace the data?
	// For NOW lets delete all records except the admin user since in order to have a working PostNuke site 
	// the admin (pn_uid = 2) must be populated. Delete ALL the rest
	$sql_query = "DELETE FROM " . pnConfigGetVar('prefix') . "_users WHERE pn_uid > 2;";
	$result = evaluate_statement($sql_query, $lang['PNphpBB2_Delete_Users']);
	 
	// Delete user id's from the group membership table
	$sql_query = "DELETE FROM " . pnConfigGetVar('prefix') . "_group_membership WHERE pn_uid > 2;";
	$result = evaluate_statement($sql_query, $lang['PNphpBB2_Delete_Groups']);
	 
	echo "              <tr>\n";
	echo "                <td>" . $lang['PNphpBB2_Populate_Users'] . "</td>\n";

	$sql_query = "SELECT user_id, username, user_email, user_website, user_regdate, user_icq, user_occ, user_from, user_interests, user_viewemail, user_aim, user_yim, user_msnm, user_password, user_timezone FROM " . USERS_TABLE . " WHERE user_id > 2 ORDER BY user_id";
	$result = $dbconn->Execute($sql_query);
	while (list($user_id, $username, $user_email, $user_website, $user_regdate, $user_icq, $user_occ, $user_from, $user_interests, $user_viewemail, $user_aim, $user_yim, $user_msnm, $user_password, $user_timezone) = $result->fields)
	{
		// Now populated Postnuke's tables.
		$result->MoveNext();
		$sql_query = "INSERT INTO $pntable[users] (pn_uid, pn_uname, pn_email,
										pn_femail, pn_url, pn_user_avatar, pn_user_regdate, pn_user_icq,
										pn_user_occ, pn_user_from, pn_user_intrest, pn_user_sig,
										pn_user_viewemail, pn_user_theme, pn_user_aim, pn_user_yim,
										pn_user_msnm, pn_pass, pn_storynum, pn_umode, pn_uorder,
										pn_thold, pn_noscore, pn_bio, pn_ublockon, pn_ublock,
										pn_theme, pn_commentmax, pn_counter, pn_timezone_offset)
									VALUES ('" . pnVarPrepForStore($user_id) . "', '" . pnVarPrepForStore($username) . "',
													'" . pnVarPrepForStore($user_email) . "','','" . pnVarPrepForStore($user_website) . "',
													'blank.gif', '" . pnVarPrepForStore($user_regdate) . "','" . pnVarPrepForStore($user_icq) . "',
													'" . pnVarPrepForStore($user_occ) . "','" . pnVarPrepForStore($user_from) . "',
													'" . pnVarPrepForStore($user_intrest) . "','','" . pnVarPrepForStore($user_viewemail) . "','',
													'" . pnVarPrepForStore($user_aim) . "','" . pnVarPrepForStore($user_yim) . "',
													'" . pnVarPrepForStore($user_msnm) . "','" . pnVarPrepForStore($user_password) . "',
													'".pnVarPrepForStore(pnConfigGetVar('storyhome'))."','',0,0,0,'',0,'','',
													'".pnVarPrepForStore(pnConfigGetVar('commentlimit'))."', '0', '".pnVarPrepForStore($user_timezone + 12 )."')";
		$result2 = $dbconn->Execute($sql_query);
		if ($dbconn->ErrorNo()<>0)
		{
			error_log ($dbconn->ErrorNo(). ": ".$dbconn->ErrorMsg(). "<br>");
			$errored = true;
			$error = $dbconn->ErrorMsg();
			$error_ary['sql'][] = $sql_query;
			$error_ary['error_code'][] = $dbconn->ErrorMsg();
		}
		else
		{
			// Add user to group
			$column = &$pntable['groups_column'];
			$sql_query2 = "SELECT $column[gid]
											FROM $pntable[groups]
											WHERE $column[name]='". pnConfigGetVar('defaultgroup') . "'";
			$result3 = $dbconn->Execute($sql_query2);
			if ($dbconn->ErrorNo()<>0)
			{
				error_log ($dbconn->ErrorNo(). "Get default group: ".$dbconn->ErrorMsg(). "<br>");
				$errored = true;
				$error = $dbconn->ErrorMsg();
				$error_ary['sql'][] = $sql_query2;
				$error_ary['error_code'][] = $dbconn->ErrorMsg();
			}
			else
			{
				if (!$result3->EOF)
				{
					list($gid) = $result3->fields;
					$result3->Close();
					$column = &$pntable['group_membership_column'];
					$sql_query3 = "INSERT INTO $pntable[group_membership] ($column[gid], $column[uid])
													VALUES (".pnVarPrepForStore($gid).", ".pnVarPrepForStore($user_id).")";
					$result3 = $dbconn->Execute($sql_query3);
					if ($dbconn->ErrorNo()<>0)
					{
						error_log ($dbconn->ErrorNo(). "Create default group membership: ".$dbconn->ErrorMsg(). "<br>");
						$errored = true;
						$error = $dbconn->ErrorMsg();
						$error_ary['sql'][] = $sql_query3;
						$error_ary['error_code'][] = $dbconn->ErrorMsg();
					}
				}
			}
		}
	}
	$result->Close();

	// Check for errors
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

if (defined("PNPHPBB2_UPGRADE") && !($errored))
{
	$message_text = '';
	 
	$sql = "SELECT config_value FROM " . CONFIG_TABLE . " WHERE config_name = 'version';";
	
	if (!($result = $db->sql_query($sql)))
	{
		die("Couldn't obtain phpBB version info");
	}

	$row = $db->sql_fetchrow($result);

	$sql_query = "";
	
	$current_phpbb_version = $row['config_value'];
   
	// Based on version 1.0 and older do the following
	$sql = "SELECT config_value FROM " . CONFIG_TABLE . " WHERE config_name = 'pnphpbb2_version';";
	 
	if (!($result = $db->sql_query($sql)))
	{
  	if (!defined("PHPBB2_TO_PNPHPBB2"))
  	{
    	die("Couldn't obtain PNphpBB version info");
  	}
  	else
  	{
    	$pnphpbb_version = "";
  	}
	}
	else
	{
  	$row = $db->sql_fetchrow($result);
  	$pnphpbb_version = $row['config_value'];
	}

// Trick PNphpBB2 1.2h-RC3(b) into thinking that its at phpBB version 2.0.14
//	if ( $pnphpbb_version = "1.2h-RC3" || $pnphpbb_version = "1.2h-RC3b" )
//	{
//		$current_phpbb_version = ".0.14";
//	}
	
	switch ($current_phpbb_version)
	{
		case '':
			$prev_version =  '<b>&lt; RC-3</b>';
			break;
		case 'RC-3':
			$prev_version =  '<b>RC-3</b>';
			break;
		case 'RC-4':
			$prev_version =  '<b>RC-4</b>';
			break;
		default:
			$prev_version = '<b>2' . $current_phpbb_version . '</b>';
			break;
	}

	//
	// Schema updates
	//
	switch ($current_phpbb_version)
	{
  	case '':
			switch (SQL_LAYER)
			{
			 	case 'mysql':
				case 'mysql4':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " DROP COLUMN user_autologin_key;";

					$sql_query .= "ALTER TABLE " . RANKS_TABLE . " DROP COLUMN rank_max;";

					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
								 	 ADD COLUMN user_session_time int(11) DEFAULT '0' NOT NULL,
									 ADD COLUMN user_session_page smallint(5) DEFAULT '0' NOT NULL,
									 ADD INDEX (user_session_time);";
					$sql_query .= "ALTER TABLE " . SEARCH_TABLE . "
								 	 MODIFY search_id int(11) NOT NULL;";

					$sql_query .= "ALTER TABLE " . TOPICS_TABLE . "
								 	 MODIFY topic_moved_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
									 ADD COLUMN topic_first_post_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
									 ADD INDEX (topic_first_post_id);";

					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN tr_class1_name varchar(50) NULL,
									 ADD COLUMN tr_class2_name varchar(50) NULL,
									 ADD COLUMN tr_class3_name varchar(50) NULL,
									 ADD COLUMN th_class1_name varchar(50) NULL,
									 ADD COLUMN th_class2_name varchar(50) NULL,
									 ADD COLUMN th_class3_name varchar(50) NULL,
									 ADD COLUMN td_class1_name varchar(50) NULL,
									 ADD COLUMN td_class2_name varchar(50) NULL,
									 ADD COLUMN td_class3_name varchar(50) NULL,
									 ADD COLUMN span_class1_name varchar(50) NULL,
									 ADD COLUMN span_class2_name varchar(50) NULL,
									 ADD COLUMN span_class3_name varchar(50) NULL;";
					break;
				case 'postgresql':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
								 	 ADD COLUMN user_session_time int4;";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
								 	 ADD COLUMN user_session_page int2;";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
								 	 ALTER COLUMN user_session_time SET DEFAULT '0';";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
								 	 ALTER COLUMN user_session_page SET DEFAULT '0';";
					$sql_query .= "CREATE INDEX user_session_time_" . $table_prefix . "users_index
								 	 ON " . USERS_TABLE . " (user_session_time);";

					$sql_query .= "ALTER TABLE " . TOPICS_TABLE . "
							 	 ADD COLUMN topic_first_post_id int4;";
					$sql_query .= "CREATE INDEX topic_first_post_id_" . $table_prefix . "topics_index
								 	 ON " . TOPICS_TABLE . " (topic_first_post_id);";

					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN tr_class1_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN tr_class2_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN tr_class3_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN th_class1_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN th_class2_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN th_class3_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN td_class1_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN td_class2_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN td_class3_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN span_class1_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN span_class2_name varchar(50) NULL;";
					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . "
								 	 ADD COLUMN span_class3_name varchar(50) NULL;";
					break;

			  case 'mssql-odbc':
				case 'mssql':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " DROP
								 	 COLUMN user_autologin_key;";

					$sql_query .= "ALTER TABLE " . USERS_TABLE . " ADD
								 	 user_session_time int NOT NULL,
									 user_session_page smallint NOT NULL,
									 CONSTRAINT [DF_" . $table_prefix . "users_user_session_time] DEFAULT (0) FOR [user_session_time],
									 CONSTRAINT [DF_" . $table_prefix . "users_user_session_page] DEFAULT (0) FOR [user_session_page];";
					$sql_query .= "CREATE INDEX [IX_" . $table_prefix . "users]
								 	 ON [" . USERS_TABLE . "]([user_session_time]) ON [PRIMARY];";

					/* ---------------------------------------------------------------------
					DROP FORUM TABLE -- if this may cause you problems you can safely
					comment it out, remember to manually remove the IDENTITY setting on
					the forum_id column
			   	--------------------------------------------------------------------- */
					$sql [] = "ALTER TABLE " . FORUMS_TABLE . " DROP
							 			CONSTRAINT [DF_" . $table_prefix . "forums_forum_posts],
										CONSTRAINT [DF_" . $table_prefix . "forums_forum_topics],
										CONSTRAINT [DF_" . $table_prefix . "forums_forum_last_post_id],
										CONSTRAINT [DF_" . $table_prefix . "forums_prune_enable],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_view],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_read],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_post],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_reply],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_edit],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_delete],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_sticky],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_announce],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_vote],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_pollcreate],
										CONSTRAINT [DF_" . $table_prefix . "forums_auth_attachments];";
					$sql_query .= "CREATE TABLE Tmp_" . FORUMS_TABLE . "
								 	 (forum_id int NOT NULL, cat_id int NOT NULL, forum_name varchar(100) NOT NULL, forum_desc varchar(255) NULL, forum_status smallint NOT NULL, forum_order int NOT NULL, forum_posts int NOT NULL, forum_topics smallint NOT NULL, forum_last_post_id int NOT NULL, prune_next int NULL, prune_enable smallint NOT NULL, auth_view smallint NOT NULL, auth_read smallint NOT NULL, auth_post smallint NOT NULL, auth_reply smallint NOT NULL, auth_edit smallint NOT NULL, auth_delete smallint NOT NULL,	auth_sticky smallint NOT NULL, auth_announce smallint NOT NULL, auth_vote smallint NOT NULL, auth_pollcreate smallint NOT NULL, auth_attachments smallint NOT NULL) ON [PRIMARY];";
					$sql_query .= "ALTER TABLE [Tmp_" . FORUMS_TABLE . "] WITH NOCHECK ADD
								 	 CONSTRAINT [DF_" . $table_prefix . "forums_forum_posts] DEFAULT (0) FOR [forum_posts],
									 CONSTRAINT [DF_" . $table_prefix . "forums_forum_topics] DEFAULT (0) FOR [forum_topics],
									 CONSTRAINT [DF_" . $table_prefix . "forums_forum_last_post_id] DEFAULT (0) FOR [forum_last_post_id],
									 CONSTRAINT [DF_" . $table_prefix . "forums_prune_enable] DEFAULT (0) FOR [prune_enable],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_view] DEFAULT (0) FOR [auth_view],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_read] DEFAULT (0) FOR [auth_read],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_post] DEFAULT (0) FOR [auth_post],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_reply] DEFAULT (0) FOR [auth_reply],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_edit] DEFAULT (0) FOR [auth_edit],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_delete] DEFAULT (0) FOR [auth_delete],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_sticky] DEFAULT (0) FOR [auth_sticky],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_announce] DEFAULT (0) FOR [auth_announce],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_vote] DEFAULT (0) FOR [auth_vote],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_pollcreate] DEFAULT (0) FOR [auth_pollcreate],
									 CONSTRAINT [DF_" . $table_prefix . "forums_auth_attachments] DEFAULT (0) FOR [auth_attachments];";
					$sql_query .= "INSERT INTO Tmp_" . FORUMS_TABLE . " (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments)
								 	 SELECT forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments FROM " . FORUMS_TABLE . " TABLOCKX;";
					$sql_query .= "DROP TABLE " . FORUMS_TABLE . ";";
					$sql_query .= "EXECUTE sp_rename N'Tmp_" . FORUMS_TABLE . "', N'" . FORUMS_TABLE . "', 'OBJECT';";
					$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD
								 	 CONSTRAINT [PK_" . $table_prefix . "forums] PRIMARY KEY CLUSTERED (forum_id) ON [PRIMARY];";
					$sql_query .= "CREATE NONCLUSTERED INDEX [IX_" . $table_prefix . "forums]
								 	 ON " . FORUMS_TABLE . " (cat_id, forum_order, forum_last_post_id) ON [PRIMARY];";
					/* --------------------------------------------------------------
					END OF DROP FORUM -- don't remove anything after this point!
			   	-------------------------------------------------------------- */

					$sql_query .= "DROP INDEX " . RANKS_TABLE . ".IX_" . $table_prefix . "ranks;";
					$sql_query .= "ALTER TABLE " . RANKS_TABLE . " DROP COLUMN rank_max;";
					$sql_query .= "CREATE  INDEX [IX_" . $table_prefix . "ranks]
								 	 ON [" . RANKS_TABLE . "]([rank_min], [rank_special]) ON [PRIMARY];";

					$sql_query .= "DROP INDEX " . TOPICS_TABLE . ".IX_" . $table_prefix . "topics;";
					$sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ADD
								 	 topic_first_post_id int NULL,
									 CONSTRAINT [DF_" . $table_prefix . "topics_topic_first_post_id] FOR [topic_first_post_id];";
					$sql_query .= "CREATE  INDEX [IX_" . $table_prefix . "topics]
								 	 ON [" . TOPICS_TABLE . "]([forum_id], [topic_type], [topic_first_post_id], [topic_last_post_id]) ON [PRIMARY];";

					$sql_query .= "ALTER TABLE " . SEARCH_WORD_TABLE . " DROP
								 	 CONSTRAINT [PK_" . $table_prefix . "search_wordlist];";
					$sql_query .= "CREATE UNIQUE INDEX [IX_" . $table_prefix . "search_wordlist]
								 	 ON [" . SEARCH_WORD_TABLE . "]([word_text]) WITH IGNORE_DUP_KEY ON [PRIMARY];";
					$sql_query .= "CREATE  INDEX [IX_" . $table_prefix . "search_wordlist_1]
								 	 ON [" . SEARCH_WORD_TABLE . "]([word_common]) ON [PRIMARY];";

					$sql_query .= "CREATE INDEX [IX_" . $table_prefix . "search_wordmatch_1]
								 	 ON [" . SEARCH_MATCH_TABLE . "]([word_id]) ON [PRIMARY];";

					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . " ADD
								 	 tr_class1_name varchar(50) NULL,
									 tr_class2_name varchar(50) NULL,
									 tr_class3_name varchar(50) NULL,
									 th_class1_name varchar(50) NULL,
									 th_class2_name varchar(50) NULL,
									 th_class3_name varchar(50) NULL,
									 td_class1_name varchar(50) NULL,
									 td_class2_name varchar(50) NULL,
									 td_class3_name varchar(50) NULL,
									 span_class1_name varchar(50) NULL,
									 span_class2_name varchar(50) NULL,
									 span_class3_name varchar(50) NULL;";
					break;

				case 'msaccess':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " DROP
								 	 COLUMN user_autologin_key;";

					$sql_query .= "ALTER TABLE " . USERS_TABLE . " ADD
								 	 user_session_time int NOT NULL,
									 user_session_page smallint NOT NULL;";
					$sql_query .= "CREATE INDEX user_session_time
								 	 ON " . USERS_TABLE . " (user_session_time);";

					$sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ADD
								 	 topic_first_post_id int NULL;";
					$sql_query .= "CREATE INDEX topic_first_post_id
								 	 ON " . TOPICS_TABLE . " (topic_first_post_id);";

					$sql_query .= "ALTER TABLE " . THEMES_NAME_TABLE . " ADD
								 	 tr_class1_name varchar(50) NULL,
									 tr_class2_name varchar(50) NULL,
									 tr_class3_name varchar(50) NULL,
									 th_class1_name varchar(50) NULL,
									 th_class2_name varchar(50) NULL,
									 th_class3_name varchar(50) NULL,
									 td_class1_name varchar(50) NULL,
									 td_class2_name varchar(50) NULL,
									 td_class3_name varchar(50) NULL,
									 span_class1_name varchar(50) NULL,
									 span_class2_name varchar(50) NULL,
									 span_class3_name varchar(50) NULL;";
					break;

				default:
					die("No DB LAYER found!");
					break;
			}

	  case 'RC-3':
		case 'RC-4':
		case '.0.0':
			switch (SQL_LAYER)
			{
				case 'mysql':
				case 'mysql4':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
								 	 MODIFY COLUMN user_id  mediumint(8) NOT NULL,
									 MODIFY COLUMN user_timezone decimal(5,2) DEFAULT '0' NOT NULL;";
					break;
				case 'postgresql':
							$sql_query .= "ALTER TABLE " . USERS_TABLE . "
										 	 RENAME COLUMN user_timezone TO user_timezone_old;";
							$sql_query .= "ALTER TABLE " . USERS_TABLE . "
										 	 ADD COLUMN user_timezone decimal(5);";
							break;
				case 'mssql':
				case 'mssql-odbc':
						$sql_query .= "ALTER TABLE " . USERS_TABLE . "
									 	 ALTER COLUMN [user_timezone] [decimal] (5,2) NOT NULL;";
						break;
			}

		case '.0.1':
			switch (SQL_LAYER)
			{
			 	case 'mysql':
				case 'mysql4':
					$sql_query .= "ALTER TABLE " . GROUPS_TABLE . "
								 	 MODIFY COLUMN group_id mediumint(8) NOT NULL auto_increment;";
					break;
				case 'mssql':
				case 'mssql-odbc':
					/* ---------------------------------------------------------------------
					DROP GROUP TABLE -- if this may cause you problems you can safely
					comment it out, remember to manually add the IDENTITY setting on
					the group_id column
			   	--------------------------------------------------------------------- */
					$sql_query .= "CREATE TABLE Tmp_" . GROUPS_TABLE . "
								 	 (group_id int IDENTITY (1, 1) NOT NULL, group_type smallint NULL, group_name varchar(50) NOT NULL, group_description varchar(255) NOT NULL, group_moderator int NULL, group_single_user smallint NOT NULL) ON [PRIMARY];";
					$sql_query .= "SET IDENTITY_INSERT " . GROUPS_TABLE . " ON;";
					$sql_query .= "INSERT INTO Tmp_" . GROUPS_TABLE . " (group_id, group_type, group_name, group_description, group_moderator, group_single_user)
								 	 SELECT group_id, group_type, group_name, group_description, group_moderator, group_single_user FROM " . GROUPS_TABLE . " TABLOCKX;";
					$sql_query .= "SET IDENTITY_INSERT " . GROUPS_TABLE . " OFF;";
					$sql_query .= "DROP TABLE " . GROUPS_TABLE . ";";
					$sql_query .= "EXECUTE sp_rename N'Tmp_" . GROUPS_TABLE . "', N'" . GROUPS_TABLE . "', 'OBJECT';";
					$sql_query .= "ALTER TABLE " . GROUPS_TABLE . " ADD
								 	 CONSTRAINT [PK_" . $table_prefix . "groups] PRIMARY KEY CLUSTERED (group_id) ON [PRIMARY];";
					$sql_query .= "CREATE INDEX [IX_" . $table_prefix . "groups]
								 	 ON " . GROUPS_TABLE . " (group_single_user) ON [PRIMARY];";
					/* --------------------------------------------------------------
					END OF DROP GROUP -- don't remove anything after this point!
			    -------------------------------------------------------------- */
					break;
		  }

		case '.0.3':

			switch (SQL_LAYER)
			{
			 	case 'mysql':
				case 'mysql4':
					// Add indexes to post_id in search match table (+ word_id for MS Access)
					$sql_query .= "ALTER TABLE " . SEARCH_MATCH_TABLE . " 
								 	 ADD INDEX post_id (post_id);";

					// Modify user_timezone to decimal(5,2) for mysql ... mysql4/mssql/pgsql/msaccess
					// should be completely unaffected
					// Change default user_notify to 0 
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " 
								 	 MODIFY COLUMN user_timezone decimal(5,2) DEFAULT '0' NOT NULL, 
									 MODIFY COLUMN user_notify tinyint(1) DEFAULT '0' NOT NULL;";

					// Adjust field type for prune_days, prune_freq ... was too small
					$sql_query .= "ALTER TABLE " . PRUNE_TABLE . " 
								 	 MODIFY COLUMN prune_days smallint(5) UNSIGNED NOT NULL, 
									 MODIFY COLUMN prune_freq smallint(5) UNSIGNED NOT NULL;";
					break;

				case 'mssql':
				case 'mssql-odbc':
					// Add missing defaults to MSSQL post table schema
					$sql_query .= "ALTER TABLE [" . POSTS_TABLE . "] WITH NOCHECK ADD
								 	 CONSTRAINT [DF_" . POSTS_TABLE . "_enable_bbcode] DEFAULT (1) FOR [enable_bbcode]
									 CONSTRAINT [DF_" . POSTS_TABLE . "_enable_html] DEFAULT (0) FOR [enable_html]
									 CONSTRAINT [DF_" . POSTS_TABLE . "_enable_smilies] DEFAULT (1) FOR [enable_smilies]
									 CONSTRAINT [DF_" . POSTS_TABLE . "_enable_sig] DEFAULT (1) FOR [enable_sig]
									 CONSTRAINT [DF_" . POSTS_TABLE . "_post_edit_count] DEFAULT (0) FOR [post_edit_count];";

				case 'msaccess':
					// Add indexes to post_id in search match table (+ word_id for MS Access)
					$sql_query .= "CREATE INDEX " . SEARCH_MATCH_TABLE . " 
								 	 ON " . SEARCH_MATCH_TABLE . " ([post_id]);";
					$sql_query .= "CREATE INDEX " . SEARCH_MATCH_TABLE . "_1 
								 	 ON " . SEARCH_MATCH_TABLE . " ([word_id]);";
					break;

				case 'postgresql':
					// Add indexes to post_id in search match table (+ word_id for MS Access)
					$sql_query .= "CREATE INDEX post_id_" . SEARCH_MATCH_TABLE . " 
								 	 ON " . SEARCH_MATCH_TABLE . " (post_id);";

					// Regenerate groups table with incremented group_id for pgsql 
					// ... missing in 2.0.3 ...
					$sql_query .= "CREATE SEQUENCE " . GROUPS_TABLE . "_id_seq start 3 increment 1 maxvalue 2147483647 minvalue 1 cache 1;";
					$sql_query .= "CREATE TABLE tmp_" . GROUPS_TABLE . " 
								 	 AS SELECT group_id, group_name, group_type, group_description, group_moderator, group_single_user 
									 FROM " . GROUPS_TABLE  . ";";
					$sql_query .= "DROP TABLE " . GROUPS_TABLE  . ";";
					$sql_query .= "CREATE TABLE phpbb_groups (group_id int DEFAULT nextval('" . GROUPS_TABLE . "_id_seq'::text) NOT NULL, group_name varchar(40) NOT NULL, group_type int2 DEFAULT '1' NOT NULL, group_description varchar(255) NOT NULL, group_moderator int4 DEFAULT '0' NOT NULL, group_single_user int2 DEFAULT '0' NOT NULL, CONSTRAINT phpbb_groups_pkey PRIMARY KEY (group_id));";
					$sql_query .= "INSERT INTO " . GROUPS_TABLE . " (group_id, group_name, group_type, group_description, group_moderator, group_single_user) 
								 	 SELECT group_id, group_name, group_type, group_description, group_moderator, group_single_user
									 FROM tmp_" . GROUPS_TABLE . ";";
					$sql_query .= "DROP TABLE tmp_" . GROUPS_TABLE . ";";
					break;
			}
		case '.0.4':

			switch (SQL_LAYER)
			{
			 	case 'mssql':
				case 'mssql-odbc':
					// Add missing defaults to MSSQL post table schema, failed in previous updates
					$sql_query .= "ALTER TABLE [" . POSTS_TABLE . "] WITH NOCHECK ADD
					  CONSTRAINT [DF_" . POSTS_TABLE . "_enable_bbcode] DEFAULT (1) FOR [enable_bbcode],
						CONSTRAINT [DF_" . POSTS_TABLE . "_enable_html] DEFAULT (0) FOR [enable_html],
						CONSTRAINT [DF_" . POSTS_TABLE . "_enable_smilies] DEFAULT (1) FOR [enable_smilies],
						CONSTRAINT [DF_" . POSTS_TABLE . "_enable_sig] DEFAULT (1) FOR [enable_sig],
						CONSTRAINT [DF_" . POSTS_TABLE . "_post_edit_count] DEFAULT (0) FOR [post_edit_count];";
					break;
			}

			// Add tables for visual confirmation ... saves me the trouble of writing a seperate
			// script :D
			switch (SQL_LAYER)
			{
			  case 'mysql':
				case 'mysql4':
				  $sql_query .= 'CREATE TABLE ' . $table_prefix . 'confirm (confirm_id char(32) DEFAULT \'\' NOT NULL, session_id char(32) DEFAULT \'\' NOT NULL, code char(6) DEFAULT \'\' NOT NULL, PRIMARY KEY (session_id, confirm_id));';
					break;

				case 'mssql':
				case 'mssql-odbc':
				  $sql_query .= 'CREATE TABLE [' . $table_prefix . 'confirm] ([confirm_id] [char] (32) NOT NULL , [session_id] [char] (32) NOT NULL , [code] [char] (6) NOT NULL ) ON [PRIMARY];';
					$sql_query .= 'ALTER TABLE [' . $table_prefix . 'confirm] WITH NOCHECK ADD CONSTRAINT [PK_' . $table_prefix . 'confirm] PRIMARY KEY  CLUSTERED ( [session_id,confirm_id])  ON [PRIMARY];';
					$sql_query .= 'ALTER TABLE [' . $table_prefix . 'confirm] WITH NOCHECK ADD CONSTRAINT [DF_' . $table_prefix . 'confirm_confirm_id] DEFAULT (\'\') FOR [confirm_id], CONSTRAINT [DF_' . $table_prefix . 'confirm_session_id] DEFAULT (\'\') FOR [session_id], CONSTRAINT [DF_' . $table_prefix . 'confirm_code] DEFAULT (\'\') FOR [code];';
					break;

				case 'msaccess':
					$sql_query .= 'CREATE TABLE ' . $table_prefix . 'confirm (confirm_id char(32) NOT NULL, session_id char(32) NOT NULL, code char(6) NOT NULL);';
					$sql_query .= 'ALTER TABLE ' . $table_prefix . 'confirm ADD (PRIMARY KEY (session_id, confirm_id));';
					break;

				case 'postgresql':
				  $sql_query .= 'CREATE TABLE ' . $table_prefix . 'confirm (confirm_id char(32) DEFAULT \'\' NOT NULL,  session_id char(32) DEFAULT \'\' NOT NULL, code char(6) DEFAULT \'\' NOT NULL, CONSTRAINT phpbb_confirm_pkey PRIMARY KEY (session_id, confirm_id));';
					break;
			}

		case '.0.5':
		case '.0.6':
		case '.0.7':
		case '.0.8':
		case '.0.9':
		case '.0.10':
		case '.0.11':
		case '.0.12':
		case '.0.13':
		case '.0.14':

			switch (SQL_LAYER)
			{
				case 'mysql':
				case 'mysql4':
					$sql_query .= "ALTER TABLE " . SESSIONS_TABLE . "
						ADD COLUMN session_admin tinyint(2) DEFAULT '0' NOT NULL;";
					break;

				case 'postgresql':
					$sql_query .= "ALTER TABLE " . SESSIONS_TABLE . "
						ADD COLUMN session_admin int2;";
					$sql_query .= "ALTER TABLE " . SESSIONS_TABLE . "
						ALTER COLUMN session_admin SET DEFAULT '0';";
					break;

				case 'mssql-odbc':
				case 'mssql':
					$sql_query .= "ALTER TABLE " . SESSIONS_TABLE . " ADD
						session_admin smallint NOT NULL,
						CONSTRAINT [DF_" . $table_prefix . "sessions_session_admin] DEFAULT (0) FOR [session_admin];";
					break;

				case 'msaccess':
					$sql_query .= "ALTER TABLE " . SESSIONS_TABLE . " ADD
						session_admin smallint NOT NULL;";
					break;
			}

		case '.0.15':
		case '.0.16':
		case '.0.17':
			// Add tables for session keys
// Begin PNphpBB2 Module
/*
			switch (SQL_LAYER)
			{
				case 'mysql':
				case 'mysql4':
					$sql_query .= 'CREATE TABLE ' . $table_prefix . 'sessions_keys (key_id varchar(32) DEFAULT \'0\' NOT NULL, user_id mediumint(8) DEFAULT \'0\' NOT NULL, last_ip varchar(8) DEFAULT \'0\' NOT NULL, last_login int(11) DEFAULT \'0\' NOT NULL, PRIMARY KEY (key_id, user_id), KEY last_login (last_login));';
					break;

				case 'mssql':
				case 'mssql-odbc':
					$sql_query .= 'CREATE TABLE [' . $table_prefix . 'sessions_keys] ([key_id] [char] (32) NOT NULL , [user_id] [int] NOT NULL , [last_ip] [char] (8) NOT NULL , [last_login] [int] NOT NULL) ON [PRIMARY];';

					$sql_query .= 'CREATE INDEX [IX_' . $table_prefix . 'sessions_keys] ON [' . $table_prefix . 'sessions_keys]([key_id], [user_id]) ON [PRIMARY];';
					$sql_query .= 'CREATE  INDEX [IX_' . $table_prefix . 'sessions_keys_1] ON [' . $table_prefix . 'sessions_keys]([last_login]) ON [PRIMARY];';
					break;

				case 'msaccess':
					$sql_query .= 'CREATE TABLE ' . $table_prefix . 'sessions_keys (key_id char(32) NOT NULL, user_id int NOT NULL, last_ip char(8) NOT NULL, last_login int NOT NULL);';
					$sql_query .= 'ALTER TABLE ' . $table_prefix . 'sessions_keys ADD PRIMARY KEY (key_id, user_id);';
					break;

				case 'postgresql':
					$sql_query .= 'CREATE TABLE ' . $table_prefix . 'sessions_keys (key_id char(32) DEFAULT \'0\' NOT NULL, user_id int4 DEFAULT \'0\' NOT NULL, last_ip char(8) DEFAULT \'0\' NOT NULL, last_login int4 DEFAULT \'0\' NOT NULL, CONSTRAINT ' . $table_prefix . 'sessions_keys_pkey PRIMARY KEY (key_id, user_id));';
					$sql_query .= 'CREATE INDEX last_login_' . $table_prefix . 'sessions_keys_index ON ' . $table_prefix . 'sessions_keys (last_login);';
					break;
			}
*/
// End PNphpBB2 Module

		case '.0.18':

			// Add login columns to user table
			switch (SQL_LAYER)
			{
				case 'mysql':
				case 'mysql4':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
						ADD COLUMN user_login_tries smallint(5) UNSIGNED DEFAULT '0' NOT NULL;";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
						ADD COLUMN user_last_login_try int(11) DEFAULT '0' NOT NULL;";
					break;

				case 'postgresql':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
						ADD COLUMN user_login_tries int2;";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
						ALTER COLUMN user_login_tries SET DEFAULT '0';";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
						ADD COLUMN user_last_login_try int4;";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . "
						ALTER COLUMN user_last_login_try SET DEFAULT '0';";
					break;

				case 'mssql-odbc':
				case 'mssql':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " ADD
						user_login_tries smallint NOT NULL,
						CONSTRAINT [DF_" . $table_prefix . "users_user_login_tries] DEFAULT (0) FOR [user_login_tries];";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " ADD
						user_last_login_try int NOT NULL,
						CONSTRAINT [DF_" . $table_prefix . "users_user_last_login_try] DEFAULT (0) FOR [user_last_login_try];";
					break;

				case 'msaccess':
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " ADD
						user_login_tries smallint NOT NULL;";
					$sql_query .= "ALTER TABLE " . USERS_TABLE . " ADD
						user_last_login_try int NOT NULL;";
					break;
			}

		case '.0.19':

			// Add search time to the search table
			switch (SQL_LAYER)
			{
				case 'mysql':
				case 'mysql4':
					$sql_query .= "ALTER TABLE " . SEARCH_TABLE . "
						ADD COLUMN search_time int(11) DEFAULT '0' NOT NULL;";
					break;

				case 'postgresql':
					$sql_query .= "ALTER TABLE " . SEARCH_TABLE . "
						ADD COLUMN search_time int4;";
					$sql_query .= "ALTER TABLE " . SEARCH_TABLE . "
						ALTER COLUMN search_time SET DEFAULT '0';";
					break;

				case 'mssql-odbc':
				case 'mssql':
					$sql_query .= "ALTER TABLE " . SEARCH_TABLE . " ADD
						search_time int NOT NULL,
						CONSTRAINT [DF_" . $table_prefix . "search_results_search_time] DEFAULT (0) FOR [search_time];";
					break;

				case 'msaccess':
					$sql_query .= "ALTER TABLE " . SEARCH_TABLE . " ADD
						search_time int NOT NULL;";
					break;
			}

			break;
	}

if ($sql_query <> "")
{
	 $result = evaluate_statement($sql_query, "", true);
}

if ( $current_phpbb_version <> $modversion['phpbb_version'] || $sql_query <> "" )
{
  echo "              <tr>\n";
  echo "                <td>" . sprintf($lang['PNphpBB2_Update_phpBB'], $prev_version, "<b>2" . $modversion['phpbb_version']) . "</b></td>\n";
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

//
// Data updates
//
unset($sql_query);
$sql_query = '';

$data_update = false;

switch ($current_phpbb_version)
{
	case '':
		$sql_query = "SELECT themes_id FROM " . THEMES_TABLE . " WHERE template_name = 'subSilver';";
		$result = evaluate_statement($sql_query, "", true);
		if ($row = $db->sql_fetchrow($result))
		{
			$theme_id = $row['themes_id'];

			$sql_query = "UPDATE " . THEMES_TABLE . "
				SET head_stylesheet = 'subSilver.css', body_background = '', body_bgcolor = 'E5E5E5', body_text = '000000', body_link = '006699', body_vlink = '5493B4', body_alink = '', body_hlink = 'DD6900', tr_color1 = 'EFEFEF', tr_color2 = 'DEE3E7', tr_color3 = 'D1D7DC', tr_class1 = '', tr_class2 = '', tr_class3 = '', th_color1 = '98AAB1', th_color2 = '006699', th_color3 = 'FFFFFF', th_class1 = 'cellpic1.gif', th_class2 = 'cellpic3.gif', th_class3 = 'cellpic2.jpg', td_color1 = 'FAFAFA', td_color2 = 'FFFFFF', td_color3 = '', td_class1 = 'row1', td_class2 = 'row2', td_class3 = '', fontface1 = 'Verdana, Arial, Helvetica, sans-serif', fontface2 = 'Trebuchet MS', fontface3 = 'Courier, ''Courier New'', sans-serif', fontsize1 = 10, fontsize2 = 11, fontsize3 = 12, fontcolor1 = '444444', fontcolor2 = '006600', fontcolor3 = 'FFA34F', span_class1 = '', span_class2 = '', span_class3 = ''
				WHERE themes_id = $theme_id;";
			evaluate_statement($sql_query, "", true);
			
			$sql_query = "DELETE FROM " . THEMES_NAME_TABLE . "
				WHERE themes_id = $theme_id;";
			evaluate_statement($sql_query, "", true);
			
			$sql_query = "INSERT INTO " . THEMES_NAME_TABLE . " (themes_id, tr_color1_name, tr_color2_name, tr_color3_name, tr_class1_name, tr_class2_name, tr_class3_name, th_color1_name, th_color2_name, th_color3_name, th_class1_name, th_class2_name, th_class3_name, td_color1_name, td_color2_name, td_color3_name, td_class1_name, td_class2_name, td_class3_name, fontface1_name, fontface2_name, fontface3_name, fontsize1_name, fontsize2_name, fontsize3_name, fontcolor1_name, fontcolor2_name, fontcolor3_name, span_class1_name, span_class2_name, span_class3_name)
				VALUES ($theme_id, 'The lightest row colour', 'The medium row color', 'The darkest row colour', '', '', '', 'Border round the whole page', 'Outer table border', 'Inner table border', 'Silver gradient picture', 'Blue gradient picture', 'Fade-out gradient on index', 'Background for quote boxes', 'All white areas', '', 'Background for topic posts', '2nd background for topic posts', '', 'Main fonts', 'Additional topic title font', 'Form fonts', 'Smallest font size', 'Medium font size', 'Normal font size (post body etc)', 'Quote & copyright text', 'Code text colour', 'Main table header text colour', '', '', '');";
			evaluate_statement($sql_query, "", true);
		}
		
		$db->sql_freeresult($result);

		$sql_query = "SELECT MIN(post_id) AS first_post_id, topic_id
			FROM " . POSTS_TABLE . "
			GROUP BY topic_id
			ORDER BY topic_id ASC;";
		$result = evaluate_statement($sql_query, "", true);

		if ($row = $db->sql_fetchrow($result))
		{
			do
			{
				$sql_query = "UPDATE " . TOPICS_TABLE . "
					SET topic_first_post_id = " . $row['first_post_id'] . "
					WHERE topic_id = " . $row['topic_id'] . ";";
				evaluate_statement($sql_query, "", true);
			}
			while ($row = $db->sql_fetchrow($result));
		}
		$db->sql_freeresult($result);

		$sql_query = "SELECT DISTINCT u.user_id
			FROM " . USERS_TABLE . " u, " . USER_GROUP_TABLE . " ug, " . AUTH_ACCESS_TABLE . " aa
			WHERE aa.auth_mod = 1
				AND ug.group_id = aa.group_id
				AND u.user_id = ug.user_id
				AND u.user_level <> " . ADMIN . ";";
		$result = evaluate_statement($sql_query, "", true);

		$mod_user = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$mod_user[] = $row['user_id'];
		}
		$db->sql_freeresult($result);

		if (count($mod_user))
		{
			$sql_query = "UPDATE " . USERS_TABLE . "
				SET user_level = " . MOD . "
				WHERE user_id IN (" . implode(', ', $mod_user) . ");";
			evaluate_statement($sql_query, "", true);
		}

		$sql_query = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('server_name', 'www.myserver.tld');";
		evaluate_statement($sql_query, "", true);

		$sql_query = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('script_path', '$table_prefix');";
		evaluate_statement($sql_query, "", true);

		$sql_query = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('server_port', '80');";
		evaluate_statement($sql_query, "", true);
		
		$sql_query = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('record_online_users', '1')";
		evaluate_statement($sql_query, "", true);

		$sql_query = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('record_online_date', '" . time() . "')";
		evaluate_statement($sql_query, "", true);
	case 'RC-3':
	case 'RC-4':
	case '.0.0':
	case '.0.1':
		if (SQL_LAYER == 'postgresql')
		{
			$sql_query = "SELECT user_id, user_timezone_old
				FROM " . USERS_TABLE . ";";
			$result = evaluate_statement($sql_query, "", true);
			while ($row = $db->sql_fetchrow($result))
			{
				$sql_query = "UPDATE " . USERS_TABLE . "
					SET user_timezone = " . $row['user_timezone_old'] . "
					WHERE user_id = " . $row['user_id'] . ";";
				evaluate_statement($sql_query, "", true);
			}
			$db->sql_freeresult($result);
		}

		$sql_query = "SELECT topic_id, topic_moved_id
			FROM " . TOPICS_TABLE . "
			WHERE topic_moved_id <> 0
				AND topic_status = " . TOPIC_MOVED . ";";
		$result = evaluate_statement($sql_query, "", true);

		$topic_ary = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$topic_ary[$row['topic_id']] = $row['topic_moved_id'];
		}
		$db->sql_freeresult($result);

		while (list($topic_id, $topic_moved_id) = each($topic_ary))
		{
			$sql_query = "SELECT MAX(post_id) AS last_post, MIN(post_id) AS first_post, COUNT(post_id) AS total_posts
				FROM " . POSTS_TABLE . "
				WHERE topic_id = $topic_moved_id;";
			$result = evaluate_statement($sql_query, "", true);

			$sql_query = ($row = $db->sql_fetchrow($result)) ? "UPDATE " . TOPICS_TABLE . 
				"	SET topic_replies = " . ($row['total_posts'] - 1) . ", topic_first_post_id = " . 
				$row['first_post'] . ", topic_last_post_id = " . $row['last_post'] . 
				" WHERE topic_id = $topic_id" : "DELETE FROM " . TOPICS_TABLE . 
				" WHERE topic_id = " . $row['topic_id'] . ";";
			evaluate_statement($sql_query, "", true);
		}

		unset($sql_query);

		sync('all forums');

	case '.0.2':

	case '.0.3':

		// Topics will resync automatically

		// Remove stop words from search match and search words
		$dirname = 'language';
		$dir = opendir($phpbb_root_path . $dirname);

		while ($file = readdir($dir))
		{
			if (preg_match("#^lang_#i", $file) && !is_file($phpbb_root_path . $dirname . "/" . $file) && !is_link($phpbb_root_path . $dirname . "/" . $file) && file_exists($phpbb_root_path . $dirname . "/" . $file . '/search_stopwords.txt'))
			{

				$stopword_list = trim(preg_replace('#([\w\.\-_\+\'±µ-ÿ\\\]+?)[ \n\r]*?(,|$)#', '\'\1\'\2', str_replace("'", "\'", implode(', ', file($phpbb_root_path . $dirname . "/" . $file . '/search_stopwords.txt')))));

				$sql_query = "SELECT word_id 
					FROM " . SEARCH_WORD_TABLE . " 
					WHERE word_text IN ($stopword_list);";
				$result = evaluate_statement($sql_query, "", true);

				$word_id_sql = '';
				if ($row = $db->sql_fetchrow($result))
				{
					do
					{
						$word_id_sql .= (($word_id_sql != '') ? ', ' : '') . $row['word_id'];
					}
					while ($row = $db->sql_fetchrow($result));

					$sql_query = "DELETE FROM " . SEARCH_WORD_TABLE . " 
						WHERE word_id IN ($word_id_sql);";
					evaluate_statement($sql_query, "", true);

					$sql_query = "DELETE FROM " . SEARCH_MATCH_TABLE . " 
						WHERE word_id IN ($word_id_sql);";
					evaluate_statement($sql_query, "", true);	
				}
				$db->sql_freeresult($result);
			}
		}
		closedir($dir);

		// Mark common words ...
		remove_common('global', 4/10);

		// remove superfluous polls ... grab polls with topics then delete polls
		// not in that list
		$sql_query = "SELECT v.vote_id 
			FROM " . TOPICS_TABLE . " t, " . VOTE_DESC_TABLE . " v
			WHERE v.topic_id = t.topic_id";
		$result = evaluate_statement($sql_query, "", true);

		$vote_id_sql = '';
		if ($row = $db->sql_fetchrow($result))
		{
			do
			{
				$vote_id_sql .= (($vote_id_sql != '') ? ', ' : '') . $row['vote_id'];
			}
			while ($row = $db->sql_fetchrow($result));

			$sql_query = "DELETE FROM " . VOTE_DESC_TABLE . " 
				WHERE vote_id NOT IN ($vote_id_sql);";
			evaluate_statement($sql_query, "", true);

			$sql_query = "DELETE FROM " . VOTE_RESULTS_TABLE . " 
				WHERE vote_id NOT IN ($vote_id_sql);";
			evaluate_statement($sql_query, "", true);

			$sql_query = "DELETE FROM " . VOTE_USERS_TABLE . " 
				WHERE vote_id NOT IN ($vote_id_sql);";
			evaluate_statement($sql_query, "", true);
		}
		$db->sql_freeresult($result);

		// update pm counters
		$sql_query = "SELECT privmsgs_to_userid, COUNT(privmsgs_id) AS unread_count 
			FROM " . PRIVMSGS_TABLE . " 
			WHERE privmsgs_type = " . PRIVMSGS_UNREAD_MAIL . " 
			GROUP BY privmsgs_to_userid;";
		$result = evaluate_statement($sql_query, "", true);

		if ($row = $db->sql_fetchrow($result))
		{
			$update_users = array();
			do
			{
				$update_users[$row['unread_count']][] = $row['privmsgs_to_userid'];
			}
			while ($row = $db->sql_fetchrow($result));

			while (list($num, $user_ary) = each($update_users))
			{
				$user_ids = implode(', ', $user_ary);

				$sql_query = "UPDATE " . USERS_TABLE . " 
					SET user_unread_privmsg = $num 
					WHERE user_id IN ($user_ids);";
				evaluate_statement($sql_query, "", true);
			}
			unset($update_list);
		}
		$db->sql_freeresult($result);

		$sql_query = "SELECT privmsgs_to_userid, COUNT(privmsgs_id) AS new_count 
			FROM " . PRIVMSGS_TABLE . " 
			WHERE privmsgs_type = " . PRIVMSGS_NEW_MAIL . " 
			GROUP BY privmsgs_to_userid;";
		$result = evaluate_statement($sql_query, "", true);

		if ($row = $db->sql_fetchrow($result))
		{
			$update_users = array();
			do
			{
				$update_users[$row['new_count']][] = $row['privmsgs_to_userid'];
			}
			while ($row = $db->sql_fetchrow($result));

			while (list($num, $user_ary) = each($update_users))
			{
				$user_ids = implode(', ', $user_ary);

				$sql_query = "UPDATE " . USERS_TABLE . " 
					SET user_new_privmsg = $num 
					WHERE user_id IN ($user_ids);";
				evaluate_statement($sql_query, "", true);
			}
			unset($update_list);
		}
		$db->sql_freeresult($result);

		// Remove superfluous watched topics
		$sql_query = "SELECT t.topic_id 
			FROM " . TOPICS_TABLE . " t, " . TOPICS_WATCH_TABLE . " w
			WHERE w.topic_id = t.topic_id;";
		$result = evaluate_statement($sql_query, "", true);

		$topic_id_sql = '';
		if ($row = $db->sql_fetchrow($result))
		{
			do
			{
				$topic_id_sql .= (($topic_id_sql != '') ? ', ' : '') . $row['topic_id'];
			}
			while ($row = $db->sql_fetchrow($result));

			$sql_query = "DELETE FROM " . TOPICS_WATCH_TABLE . " 
				WHERE topic_id NOT IN ($topic_id_sql);";
			evaluate_statement($sql_query, "", true);
		}
		$db->sql_freeresult($result);

		// Reset any email addresses which are non-compliant ... something
		// not done in the upgrade script and thus which may affect some 
		// mysql users
		switch (SQL_LAYER)
		{
			case 'mysql':
				$sql_query = "UPDATE " . USERS_TABLE . " 
					SET user_email = '' 
					WHERE user_email NOT REGEXP '^[a-zA-Z0-9_\+\.\-]+@.*[a-zA-Z0-9_\-]+\.[a-zA-Z]{2,}$';";
				evaluate_statement($sql_query, "", true);
		}
	case '.0.4':

		// Add the confirmation code switch ... save time and trouble elsewhere
		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('enable_confirm', '0')";
		evaluate_statement($sql_query, "", true);

		$sql_query = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('sendmail_fix', '0')";
		evaluate_statement($sql_query, "", true);

	case '.0.5':
		
		$sql_query = "SELECT user_id, username 
			FROM " . USERS_TABLE;
		$result = evaluate_statement($sql_query, "", true);

		while ($row = $db->sql_fetchrow($result))
		{
			if (!preg_match('#(&gt;)|(&lt;)|(&quot)|(&amp;)#', $row['username']))
			{
				if ($row['username'] != htmlspecialchars($row['username']))
				{
					$sql_query = "UPDATE " . USERS_TABLE . "
						SET username = '" . str_replace("'", "''", htmlspecialchars($row['username'])) . "'
						WHERE user_id = " . $row['user_id'];
					evaluate_statement($sql_query, "", true);
				}
			}
		}
		$db->sql_freeresult($result);
		
	case '.0.6':
	case '.0.7':
	case '.0.8':
	case '.0.9':
	case '.0.10':
	case '.0.11':
	case '.0.12':
	case '.0.13':
	case '.0.14':

		$sql_query = 'UPDATE ' . USERS_TABLE . ' SET user_allowhtml = 1 WHERE user_id = ' . ANONYMOUS;
		evaluate_statement($sql_query, "", true);

	case '.0.15':
	case '.0.16':
	case '.0.17':

		$sql_query = 'UPDATE ' . USERS_TABLE . ' SET user_active = 0 WHERE user_id = ' . ANONYMOUS;
		evaluate_statement($sql_query, "", true);

		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('allow_autologin', '1')";
		evaluate_statement($sql_query, "", true);

		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('max_autologin_time', '0')";
		evaluate_statement($sql_query, "", true);
		
	case '.0.18':

		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('max_login_attempts', '5')";
		evaluate_statement($sql_query, "", true);

		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('login_reset_time', '30')";
		evaluate_statement($sql_query, "", true);

	case '.0.19':

		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('search_flood_interval', '15')";
		evaluate_statement($sql_query, "", true);

		$sql_query = 'INSERT INTO ' . CONFIG_TABLE . " (config_name, config_value)
			VALUES ('rand_seed', '0')";
		evaluate_statement($sql_query, "", true);

		// We reset those having autologin enabled and forcing the re-assignment of a session id
		// since there have been changes to the way these are handled from previous versions
		$sql_query = 'DELETE FROM ' . SESSIONS_TABLE;
		evaluate_statement($sql_query, "", true);

// Begin PNphpBB2 Module
//		$sql_query = 'DELETE FROM ' . SESSIONS_KEYS_TABLE;
//		evaluate_statement($sql_query, "", true);
// End PNphpBB2 Module

		break;

	default:
		echo " No updates where required</b></p>\n";
		break;
}

if ( $data_update )
{
  echo "              <tr>\n";
  echo "                <td>" . $lang['PNphpBB2_Update_Data'] . "</td>\n";
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

// Very last thing, update the version
if ( $prev_version <> $modversion['phpbb_version'] )
{
  $sql_query = "UPDATE " . CONFIG_TABLE . "	SET config_value = '" . $modversion['phpbb_version'] . "'	WHERE config_name = 'version';";
  evaluate_statement($sql_query, "", true);
}

// Optimize/vacuum analyze the tables where appropriate 
// this should be done for each version in future along with 
// the version number update
switch (SQL_LAYER)
{
	case 'mysql':
	case 'mysql4':
		$sql_query = 'OPTIMIZE TABLE ' . $table_prefix . 'auth_access, ' . $table_prefix . 'banlist, ' . $table_prefix . 'categories, ' . $table_prefix . 'config, ' . $table_prefix . 'disallow, ' . $table_prefix . 'forum_prune, ' . $table_prefix . 'forums, ' . $table_prefix . 'groups, ' . $table_prefix . 'posts, ' . $table_prefix . 'posts_text, ' . $table_prefix . 'privmsgs, ' . $table_prefix . 'privmsgs_text, ' . $table_prefix . 'ranks, ' . $table_prefix . 'search_results, ' . $table_prefix . 'search_wordlist, ' . $table_prefix . 'search_wordmatch, ' . $table_prefix . 'smilies, ' . $table_prefix . 'themes, ' . $table_prefix . 'themes_name, ' . $table_prefix . 'topics, ' . $table_prefix . 'topics_watch, ' . $table_prefix . 'user_group, ' . $table_prefix . 'users, ' . $table_prefix . 'vote_desc, ' . $table_prefix . 'vote_results, ' . $table_prefix . 'vote_voters, ' . $table_prefix . 'words;';
		evaluate_statement($sql_query, $lang['PNphpBB2_Optimize_Analyze']);
		break;

	case 'postgresql':
		evaluate_statement("VACUUM ANALYZE;", $lang['PNphpBB2_Optimize_Analyze']);
		break;
}

}
// End of Main phpBb update

// Do we need to install the attachment mod?
if (defined("ATTACH_INSTALL"))
{
	 //
	 // Here we go
	 //

   $available_dbms = array(
    	"mysql" => array(
    		"SCHEMA" => "attach_mysql", 
    		"DELIM" => ";",
    		"DELIM_BASIC" => ";",
    		"COMMENTS" => "remove_remarks"
    	), 
    	"mysql4" => array(
    		"SCHEMA" => "attach_mysql", 
    		"DELIM" => ";", 
    		"DELIM_BASIC" => ";",
    		"COMMENTS" => "remove_remarks"
    	),
    	"mssql" => array(
    		"SCHEMA" => "attach_mssql", 
    		"DELIM" => "GO", 
    		"DELIM_BASIC" => ";",
    		"COMMENTS" => "remove_comments"
    	),
    	"mssql-odbc" =>	array(
    		"SCHEMA" => "attach_mssql", 
    		"DELIM" => "GO",
    		"DELIM_BASIC" => ";",
    		"COMMENTS" => "remove_comments"
    	),
    	"postgres" => array(
    		"LABEL" => "PostgreSQL 7.x",
    		"SCHEMA" => "attach_postgres", 
    		"DELIM" => ";", 
    		"DELIM_BASIC" => ";",
    		"COMMENTS" => "remove_comments"
    	)
   );

	 $dbms_schema = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';
	 $dbms_basic = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_basic.sql';
	 $remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
	 $delimiter = $available_dbms[$dbms]['DELIM']; 
	 $delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

   if ( !($fp = @fopen($dbms_schema, 'r')) )
   {
   		die("Can't open " . $dbms_schema);
   }
  
   fclose($fp);
  
   if ( !($fp = @fopen($dbms_basic, 'r')) )
   {
   		die("Can't open " . $dbms_basic);
   }
  
 	 fclose($fp);

   $sql_query = "";
   
   //
   // process db schema and basic informations
   //
   $sql_query .= @fread(@fopen($dbms_schema, 'r'), @filesize($dbms_schema));
   $sql_query .= @fread(@fopen($dbms_basic, 'r'), @filesize($dbms_basic));

   $result = evaluate_statement($sql_query, $lang['PNphpBB2_Installing'] . ' ' . $lang['PNphpBB2_Attach'] . ATTACH_VERSION, false, true);
}

if (defined("ATTACH_UPDATE") && !defined("ATTACH_INSTALL"))
{
  //
	// Update File for updating Attachment Mod V2.x.x to V2.3.10
	//

	$available_dbms = array(
	  "mysql" => array(
      "SCHEMA" => "attach_mysql", 
		  "DELIM" => ";",
		  "DELIM_BASIC" => ";",
		  "COMMENTS" => "remove_remarks"
		), 
		"mysql4" => array(
		  "SCHEMA" => "attach_mysql", 
		  "DELIM" => ";", 
		  "DELIM_BASIC" => ";",
		  "COMMENTS" => "remove_remarks"
		),
		"mssql" => array(
		  "SCHEMA" => "attach_mssql", 
		  "DELIM" => "GO", 
		  "DELIM_BASIC" => ";",
		  "COMMENTS" => "remove_comments"
		),
		"mssql-odbc" =>	array(
		  "SCHEMA" => "attach_mssql", 
		  "DELIM" => "GO",
		  "DELIM_BASIC" => ";",
		  "COMMENTS" => "remove_comments"
		),
		"postgres" => array(
		  "LABEL" => "PostgreSQL 7.x",
		  "SCHEMA" => "attach_postgres", 
		  "DELIM" => ";", 
		  "DELIM_BASIC" => ";",
		  "COMMENTS" => "remove_comments"
	  )
  );


	$remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
	$delimiter = $available_dbms[$dbms]['DELIM']; 
	$delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

	// page_common_text('<h4>' . $lang['PNphpBB2_Updating'] . ' ' . $lang['PNphpBB2_Attach'] . ATTACH_VERSION . '</h4>', "center");

	$attach_version = '';

	$sql = "SELECT config_value FROM " . ATTACH_CONFIG_TABLE . " WHERE config_name = 'attach_version';";
	if (!($result = $db->sql_query($sql)))
	{
		die("Couldn't obtain version info");
	}

  $row = $db->sql_fetchrow($result);

  $sql = "";
  
  $attach_version = trim($row['config_value']);
  
	// if ($attach_version == '')
	// {
	// 	$attach_version = ATTACH_VERSION;
	// 	$attach_version = trim($attach_version);
	// }

	//
	// Add two fields to the config table
	//
  switch ( $attach_version )
  {
	  case '':
    case '2.3.6';
	    //page_common_text("<b>Add new fields to the config table...</b>", "center");
	    insert_into_config(ATTACH_CONFIG_TABLE, 'display_order', '0');
	    insert_into_config(ATTACH_CONFIG_TABLE, 'img_imagick', '');
	    insert_into_config(ATTACH_CONFIG_TABLE, 'show_apcp', '1');
	    insert_into_config(ATTACH_CONFIG_TABLE, 'attach_version', '2.3.10');
	    insert_into_config(ATTACH_CONFIG_TABLE, 'default_upload_quota', '0');
	    insert_into_config(ATTACH_CONFIG_TABLE, 'default_pm_quota', '0');
	    insert_into_config(ATTACH_CONFIG_TABLE, 'ftp_pasv_mode', '1');

	    $sql_query = "UPDATE phpbb_attachments_config SET config_value = '2.3.10' WHERE config_name = 'attach_version';";
	    $result = evaluate_statement($sql_query, "", true, true, false);

	    if (($dbms == 'mysql') || ($dbms == 'mysql4'))
	    {
	 	    $sql_query = "SHOW INDEX FROM phpbb_attachments_desc;";
	 	    $result = evaluate_statement($sql_query, "", true, true, false);
 	  
        $filetime_bool = false;
		    $physical_filename_bool = false;
		    $filesize_bool = false;
	
		    if ($result)
		    {
		      $rows = $db->sql_fetchrowset($result);
			    for ($i = 0; $i < count($rows); $i++)
			    {
			      if (trim($rows[$i]['Key_name']) == 'filetime')
				    {
				      $filetime_bool = true;
				    }

				    if (trim($rows[$i]['Key_name']) == 'physical_filename')
				    {
				      $physical_filename_bool = true;
			      }
			
				    if (trim($rows[$i]['Key_name']) == 'filesize')
				    {
				      $filesize_bool = true;
			      }
			    }   
		    }
	
		    if (!$filetime_bool)
		    {
		      evaluate_statement("ALTER TABLE phpbb_attachments_desc ADD INDEX (filetime);", "", true, true, false);
		    }

		    if (!$physical_filename_bool)
		    {
		      evaluate_statement("ALTER TABLE phpbb_attachments_desc ADD INDEX (physical_filename(10));", "", true, true, false);
		    }

		    if (!$filesize_bool)
		    {
		      evaluate_statement("ALTER TABLE phpbb_attachments_desc ADD INDEX (filesize);", "", true, true, false);
		    }
	    }

      if (!row_in_schema('phpbb_extension_groups', 'forum_permissions'))
	    {
	      if (($dbms == 'mysql') || ($dbms == 'mysql4'))
		    {
		      $sql_query = "ALTER TABLE phpbb_extension_groups ADD forum_permissions VARCHAR(255) DEFAULT '' NOT NULL;";
		    }
		    else if ( $dbms == "postgres" )
		    {
		      $sql_query = '
			      ALTER TABLE phpbb_extension_groups ADD forum_permissions varchar(255);
				    UPDATE phpbb_extension_groups SET forum_permissions = \'\';
				    ALTER TABLE phpbb_extension_groups ALTER COLUMN forum_permissions SET DEFAULT \'\';
				    ALTER TABLE phpbb_extension_groups ADD CONSTRAINT forum_permissions_notnull CHECK (forum_permissions NOTNULL);
		      ';
		    }
		    else if ( ($dbms == "mssql") || ($dbms == "mssql-odbc") )
		    {
		      $sql_query = "ALTER TABLE [phpbb_extension_groups] WITH NOCHECK ADD 
			      [forum_permissions] [varchar] (255)
				    GO	";
	      }

	      evaluate_statement($sql_query, "", true, true, false);
      }

	    if (!table_exist('phpbb_quota_limits'))
	    {
		    //
		    // Add two new Tables and the basic data for them
		    //
		    //  page_common_text("<h2>Add Quota Tables...</h2>", "center");
		    $sql_query = fill_new_table_data($dbms);
		    evaluate_statement($sql_query, "", true, true, false);
	    }
    case '2.3.6';
	 	  if ( ($dbms == "mysql") || ($dbms == "mysql4") )
	 	  {
	 		  $sql_query = "ALTER TABLE phpbb_quota_limits CHANGE quota_limit quota_limit bigint(20) UNSIGNED DEFAULT '0' NOT NULL;"; 
		    evaluate_statement($sql_query, "", true, true, false);
	 	  }
	 	  else if ( ($dbms == "mssql") || ($dbms == "mssql-odbc") )
		  {
        page_common_text($lang['PNphpBB2_Cant_SQL'], "center");
		  }
    case '2.3.7';
    case '2.3.8';
      insert_into_config(ATTACH_CONFIG_TABLE, 'use_gd2', '0');

      $attach_update = true;
    default;
  }
  
// Begin PNphpBB2 Attachment Mod
	$cache_dir = $phpbb_root_path . '/attach_cache';
// End PNphpBB2 Attachment Mod
	$cache_file = $cache_dir . '/attach_config.php';

	if ((file_exists($cache_dir)) && (is_dir($cache_dir)))
	{
		if (file_exists($cache_file))
		{
		 	 @unlink($cache_file);
		}
	}

  if ( $attach_update == true )
  {

    $sql_query = "UPDATE phpbb_attachments_config SET config_value = '" . ATTACH_VERSION . "' WHERE config_name = 'attach_version';";
    $result = evaluate_statement($sql_query, "", true, true, false);

    echo "              <tr>\n";
    echo "                <td>" . sprintf($lang['PNphpBB2_Update_Attach'], "<b>" . $attach_version . "</b>", "<b>" . ATTACH_VERSION) . "</b></td>\n";
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
}

// Always set Default Gzip Compression OFF
update_config("gzip_compress", "0");

switch ($pnphpbb_version)
{
	case '':
	case '1.0':
	
	  // Begin PNphpBB2 update for paths and default theme to PNTheme
		update_config("script_path", "modules/PNphpBB2/");
		update_config("smilies_path", "images/smiles");
		update_config("avatar_path", "images/avatars/upload");
		update_config("avatar_gallery_path", "images/avatars/gallery");	
		update_attach_config("upload_dir", "files");

    // Now delete ALL the themes/styles and replace them with the new ones!
		$sql_query = "DELETE FROM " . THEMES_TABLE . ";";
		evaluate_statement($sql_query, "", true);

		// Now add them back in in order.
		$available_dbms = array(
			"mysql" => array(
			  "SCHEMA" => "mysql", 
			 	"DELIM" => ";",
			 	"DELIM_BASIC" => ";",
			 	"COMMENTS" => "remove_remarks"
			), 
			"mysql4" => array(
			  "SCHEMA" => "mysql", 
			 	"DELIM" => ";", 
			 	"DELIM_BASIC" => ";",
			 	"COMMENTS" => "remove_remarks"
			),
			"mssql" => array(
			  "SCHEMA" => "mssql", 
			 	"DELIM" => "GO", 
			 	"DELIM_BASIC" => ";",
			 	"COMMENTS" => "remove_comments"
			),
			"mssql-odbc" =>	array(
			 	"SCHEMA" => "mssql", 
			 	"DELIM" => "GO",
			 	"DELIM_BASIC" => ";",
			 	"COMMENTS" => "remove_comments"
			),
			"postgres" => array(
			 	"LABEL" => "PostgreSQL 7.x",
			 	"SCHEMA" => "postgres", 
			 	"DELIM" => ";", 
			 	"DELIM_BASIC" => ";",
			 	"COMMENTS" => "remove_comments"
			)
		);

		$dbms_themes = $phpbb_root_path . 'install/schemas/' . $available_dbms[$dbms]['SCHEMA'] . '_themes.sql';

		$remove_remarks = $available_dbms[$dbms]['COMMENTS'];;
		$delimiter = $available_dbms[$dbms]['DELIM']; 
		$delimiter_basic = $available_dbms[$dbms]['DELIM_BASIC']; 

		if ( !($fp = @fopen($dbms_themes, 'r')) )
		{
		 	 die("Can't open " . $dbms_themes);
		}

		fclose($fp);

		$sql_query = @fread(@fopen($dbms_themes, 'r'), @filesize($dbms_themes));
		$result = evaluate_statement($sql_query, "", true, true, false);

		// Set the board defualt to PNTheme
		update_config("default_style", "1");

		// Now reset all the users themes to PNTheme
		$sql_query = "UPDATE " . USERS_TABLE . " SET user_style = '1';";
		$result = evaluate_statement($sql_query, "", true);

		// Clear the session table
		$sql_query = "DELETE FROM " . SESSIONS_TABLE . ";";
		evaluate_statement($sql_query, "", true);

	case '1.1':
	case '1.1a':
	  // Version 1.2 Updates to the config table
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_version', $modversion['version']);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_logo_on', 1);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_quickreply', 1);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_shorturls', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_post_confirm', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_post_order', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_allow_full_page', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_full_page', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_pn_pm', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_pn_link', "");
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_pn_text', "");
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_template_compiler', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_members_online', 1);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_members_online_annon', 1);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_allow_sub_change', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_sub_forum', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_enable_announce', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_split_global_announce', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_announcement_duration', 7);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_split_announce', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_split_sticky', 0);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_post_images', 1);
		insert_into_config(CONFIG_TABLE, 'pnphpbb2_forum_announce_exclude', serialize(array()));
		
    // eXtreme Styles mod
    insert_into_config(CONFIG_TABLE, 'xs_cache_dir', 'cache');
    insert_into_config(CONFIG_TABLE, 'xs_cache_dir_absolute', 0);
    insert_into_config(CONFIG_TABLE, 'xs_auto_compile', 1);
    insert_into_config(CONFIG_TABLE, 'xs_auto_recompile', 1);
    insert_into_config(CONFIG_TABLE, 'xs_use_cache', 1);
    insert_into_config(CONFIG_TABLE, 'xs_separator', '/');
    insert_into_config(CONFIG_TABLE, 'xs_php', $phpEx);
    insert_into_config(CONFIG_TABLE, 'xs_def_template', 'PNTheme');
    insert_into_config(CONFIG_TABLE, 'xs_use_isset', 1);
    insert_into_config(CONFIG_TABLE, 'xs_check_switches', 1);

		switch (SQL_LAYER)
		{
			case 'mysql':
			case 'mysql4':
				# -- Topic and Post icons
				$sql_query = "ALTER TABLE " . POSTS_TABLE . " ADD COLUMN post_icon TINYINT (2) UNSIGNED DEFAULT '0' NOT NULL;";
				$sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ADD COLUMN topic_icon TINYINT (2) UNSIGNED DEFAULT '0' NOT NULL;";
				
				# -- Forum sub-categories
				$sql_query .= "ALTER TABLE " . CATEGORIES_TABLE . " ADD COLUMN cat_main MEDIUMINT(8) UNSIGNED DEFAULT '0' NOT NULL;";
				$sql_query .= "ALTER TABLE " . CATEGORIES_TABLE . " ADD COLUMN cat_desc TEXT NOT NULL;";

				# -- Forum sort options
				$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN topic_sort_order TINYINT (2) DEFAULT '0' NOT NULL;";
				$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN post_sort_order TINYINT (2) DEFAULT '0' NOT NULL;";

				evaluate_statement($sql_query, "", true);

				break;
			case 'postgresql':
				# -- Topic and Post icons
				$sql_query = "ALTER TABLE " . POSTS_TABLE . " ADD COLUMN post_icon int2;";
				$sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ADD COLUMN topic_icon int2;";
				$sql_query .= "ALTER TABLE " . USERS_TABLE . " ALTER COLUMN post_icon SET DEFAULT '0';";
				$sql_query .= "ALTER TABLE " . USERS_TABLE . " ALTER COLUMN topic_icon SET DEFAULT '0';";

				# -- Forum sub-categories
				$sql_query .= "ALTER TABLE " . CATEGORIES_TABLE . " ADD COLUMN cat_main MEDIUMINT(8) UNSIGNED DEFAULT '0' NOT NULL;";
				$sql_query .= "ALTER TABLE " . CATEGORIES_TABLE . " ADD COLUMN cat_desc TEXT NOT NULL;";

				# -- Topic and Post icons
				$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN topic_sort_order int2;";
				$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN topic_sort_order int2;";
				$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ALTER COLUMN topic_sort_order SET DEFAULT '0';";
				$sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ALTER COLUMN topic_sort_order SET DEFAULT '0';";

				evaluate_statement($sql_query, "", true);
				
				break;
			case 'mssql-odbc':
			case 'mssql':
			default:
				die("No DB LAYER found!");
				break;
		}
	case '1.2':
		update_attach_config("upload_image", "images/attach_mod/icon_clip.gif");
		update_attach_config("topic_icon", "images/attach_mod/icon_clip.gif");
    
    $data_update = true;
}

// Check for some new config table items if they are not there add them
$sql = "SELECT config_value FROM " . CONFIG_TABLE . " WHERE config_name = 'edit_time';";
if (!($result = $db->sql_query($sql)))
{
  insert_into_config(CONFIG_TABLE, 'edit_time', 0);
}

$sql = "SELECT config_value FROM " . CONFIG_TABLE . " WHERE config_name = 'theme_matching';";
if (!($result = $db->sql_query($sql)))
{
  insert_into_config(CONFIG_TABLE, 'theme_matching', 0);
}

// Remove old config vars from config table
$sql = "SELECT config_value FROM " . CONFIG_TABLE . " WHERE config_name = 'pnphpbb2_forum_announce_exclude';";
if ( $result = $db->sql_query($sql) )
{
  drop_from_config(CONFIG_TABLE, 'pnphpbb2_forum_announce_exclude');
}

$sql = "SELECT * FROM " . FORUMS_TABLE . " WHERE support_forum LIMIT 1";
if (!($result = $db->sql_query($sql)))
{
  switch (SQL_LAYER)
	{
		case 'mysql':
		case 'mysql4':
      # -- Support Status
      $sql_query = "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN support_forum TINYINT (1) DEFAULT '0' NOT NULL;";
      $sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ADD COLUMN support_status TINYINT (3) DEFAULT '0' NOT NULL;"; 

      # -- Exclude forum from global announcments
      $sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN exclude_global_announce TINYINT (1) DEFAULT '0' NOT NULL;";

			evaluate_statement($sql_query, "", true);
			break;
		case 'postgresql':
      # -- Support Status
      $sql_query = "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN support_forum int2;";
      $sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ADD COLUMN support_status int2;";
      $sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ALTER COLUMN support_forum SET DEFAULT '0' NOT NULL;";
      $sql_query .= "ALTER TABLE " . TOPICS_TABLE . " ALTER COLUMN support_status SET DEFAULT '0' NOT NULL;";

      # -- Exclude forum from global announcments
      $sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ADD COLUMN exclude_global_announce int2;";
      $sql_query .= "ALTER TABLE " . FORUMS_TABLE . " ALTER COLUMN exclude_global_announce SET DEFAULT '0' NOT NULL;";
			
      evaluate_statement($sql_query, "", true);
			break;
		case 'mssql-odbc':
		case 'mssql':
      # -- Support status
      $sql_query = "ALTER TABLE [" . FORUMS_TABLE . "] ADD COLUMN [support_forum] [smallint] DEFAULT '0' NOT NULL;";
      $sql_query .= "ALTER TABLE [" . TOPICS_TABLE . "] ADD COLUMN [support_status] [smallint] DEFAULT '0' NOT NULL;"; 

      # -- Exclude forum from global announcments
      $sql_query = "ALTER TABLE [" . FORUMS_TABLE . "] ADD COLUMN [exclude_global_announce] [smallint] DEFAULT '0' NOT NULL;";

      evaluate_statement($sql_query, "", true);
			break;

		default:
			die("No DB LAYER found!");
			break;
	}
}

update_config('pnphpbb2_version', $modversion['version']);

if ( $pnphpbb_version <> $modversion['version'] )
{
  echo "              <tr>\n";
  if ( $pnphpbb_version == "" )
  {
    echo "                <td>" . sprintf($lang['PNphpBB2_Install_PNphpBB'], $modversion['version']) . "</td>\n";
  }
  else
  {
    echo "                <td>" . sprintf($lang['PNphpBB2_Update_phpBB'], $pnphpbb_version, $modversion['version']) . "</td>\n";
  }
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

page_common_text("-", "center");

if ( $errored )
{
 	 page_common_text($lang['PNphpBB2_Some_Failed'], "left", true);
	 
	 for ($i = 0; $i < count($error_ary['sql']); $i++)
	 {
		 	page_common_text("<li>Error :: <b>" . $error_ary['error_code'][$i]['message'] . "</b><br />", "left");
			page_common_text("SQL &nbsp; :: <b>" . $error_ary['sql'][$i] . "</b><br /></li>", "left");
	 }			 
}
else
{
	 page_common_text($lang['PNphpBB2_No_Errors'], "left", true);
}

$id = pnModGetIDFromName($ModName);
if (pnModAPIFunc('Modules', 'admin', 'setstate', array('mid' => $id, 'state' => _PNMODULE_STATE_INACTIVE)))
{
 	 // Success
  pnSessionSetVar('statusmsg', $lang['PNphpBB2_Installed']);

  // Get the new version information...
  // Code taken from Postnuke Modules API function modules_adminapi_upgrade
  // Since we do not return to the module init code in Postnuke it is
  // Nesasary for us to manualy update the module version.
  $modulestable = $pntable['modules'];
  $modulescolumn = &$pntable['modules_column'];
  $sql = "UPDATE $modulestable
		SET $modulescolumn[version] = '" . pnVarPrepForStore($modversion['version']) . "',
			$modulescolumn[admin_capable] = '" . pnVarPrepForStore($modversion['admin']) . "',
			$modulescolumn[description] = '" . pnVarPrepForStore($modversion['description']) . "'
		WHERE $modulescolumn[id] = " . pnVarPrepForStore($id);
  $dbconn->Execute($sql);
  pnModAPIFunc('Modules', 'admin', 'setstate', array('mid' => $id, 'state' => _PNMODULE_STATE_ACTIVE));
}

page_common_text($lang['PNphpBB2_Update_Complete'], "left");

page_common_form('', $lang['PNphpBB2_Done']);
page_footer();
exit;
?>
