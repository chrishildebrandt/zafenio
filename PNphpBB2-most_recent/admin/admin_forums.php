<?php
/***************************************************************************
 *                             admin_forums.php
 *                            -------------------
 *   begin                : Thursday, Jul 12, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: admin_forums.php 192 2007-01-20 15:17:44Z kronos $
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

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
// Begin PNphpBB2 Module
	$phpbb_module['Forums']['Manage'] = $file;
// End PNphpBB2 Module
	return;
}

//
// Load default header
//
// Begin PNphpBB2 Module
// $phpbb_root_path = "./../";
$phpbb_root_path = './modules/' . $ModName . '/';
// End PNphpBB2 Module
require($phpbb_root_path . 'extension.inc');
// Begin PNphpBB2 Module
//require('./pagestart.' . $phpEx);
require($phpbb_root_path . 'admin/pagestart.' . $phpEx);
// End PNphpBB2 Module
include($phpbb_root_path . 'includes/functions_admin.'.$phpEx);

$forum_auth_ary = array(
	"auth_view" => AUTH_ALL, 
	"auth_read" => AUTH_ALL, 
	"auth_post" => AUTH_REG, 
	"auth_reply" => AUTH_REG, 
	"auth_edit" => AUTH_REG, 
	"auth_delete" => AUTH_REG, 
	"auth_sticky" => AUTH_MOD, 
	"auth_announce" => AUTH_MOD, 
	"auth_vote" => AUTH_REG, 
	"auth_pollcreate" => AUTH_REG
);
//-- mod : File Attachment Mod v2 Version 2.4.3 ----------------------------------------------------
if (!intval($attach_config['disable_mod']))
{
	$forum_auth_ary['auth_attachments'] = AUTH_REG;
	$forum_auth_ary['auth_download'] = AUTH_REG;
}
//-- fin : File Attachment Mod v2 Version 2.4.3 ----------------------------------------------------

//
// Mode setting
//
if( isset($HTTP_POST_VARS['mode']) || isset($HTTP_GET_VARS['mode']) )
{
	$mode = ( isset($HTTP_POST_VARS['mode']) ) ? $HTTP_POST_VARS['mode'] : $HTTP_GET_VARS['mode'];
	$mode = htmlspecialchars($mode);
}
else
{
	$mode = "";
}

// ------------------
// Begin function block
//
// Begin PNphpBB2 Categories Hierarchie Mod
//
// check and fix parm
function admin_check_cat()
{
	global $db;

	$res = false;
	// build the cat list
	$sql = "select * from " . CATEGORIES_TABLE . " order by cat_id";
	if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't access list of Categories", "", __LINE__, __FILE__, $sql);
	$last_cat = -1;
	while ( $row = $db->sql_fetchrow($result) ) 
	{
		// corriger la valeur de cat_main
		if ( $row['cat_main'] == $row['cat_id'] ) $row['cat_main'] = 0;
		// alimenter le tableau de hierarchie
		$cat_main[ $row['cat_id'] ] = $row['cat_main'];
		// récupérer l'indice de catégorie le plus grand
		if ( $row['cat_id'] > $last_cat ) $last_cat = $row['cat_id'];
	}  // end while ( $row = $db->sql_fetchrow($result) )
	//
	// push each cat
	for ($i=0; $i <= $last_cat; $i++) if ( isset($cat_main[$i]) )
	{
		$root = false;
		$cur_cat = $i;
		$stack = array();
		$stack[0] = $cur_cat;
		while ( !$root )
		{
			$err = false;
			// la catégorie parente n'existe pas
			$err = ( ($cat_main[$cur_cat] != 0 ) && !isset($cat_main[ $cat_main[$cur_cat] ]) );
			// la catégorie parente est déjà dans la pile (erreur dans le paramétrage)
			for ( $j = 0; ( !$err && ($j < count($stack)) ); $j++ ) $err = ( $cat_main[$cur_cat] == $stack[$j] );
			// corriger la catégorie parente en cas d'erreur
			if ( $err ) $cat_main[$cur_cat] = 0;
			// empiler la valeur du parent
			$stack[] = $cat_main[$cur_cat];
			// remonter d'un niveau
			$root = ($cat_main[$cur_cat] == 0);
			$cur_cat = $cat_main[$cur_cat];
			// signaler qu'il y avait une erreur de paramétrage qui a été corrigée
			if ( $err ) $res = true;
		}  // while ( !$root )
		// mettre à niveau la bdd
		$sql = "update " . CATEGORIES_TABLE . " set cat_main = " . $cat_main[$i] . " where cat_id = $i";
		if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't update list of Categories", "", __LINE__, __FILE__, $sql);
	}  // end for ($i=0; $i <= $last_cat_id; $i++) if ( isset($cat_main[$i]) )
	return $res;
}  // end
//
// get daughter cat per level
function admin_get_cat_list($cat_main, &$cat_row, $level=0, $cat_except=-1)
{
	global $db;

	// lire les catégories filles
	$sql = "select * from " . CATEGORIES_TABLE . " where cat_main = $cat_main order by cat_order, cat_id";
	if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't access list of Categories", "", __LINE__, __FILE__, $sql);
	while ( $row = $db->sql_fetchrow($result) ) $rowlevel[] = $row;
	// empiler ces catégories filles et chercher leurs petites-filles
	for ($i = 0; $i < count($rowlevel); $i++ )
	{
		if ( $rowlevel[$i]['cat_id'] != $cat_except )
		{
			$rowlevel[$i]['level'] = $level;
			$cat_row[] = $rowlevel[$i];
			admin_get_cat_list( $rowlevel[$i]['cat_id'], $cat_row, ($level+1), $cat_except );
		}
	}
}
//
// renumber
function admin_renum_cat()
{
	global $db;

	// fix the param
	$err = admin_check_cat();
	// lire les catégories "à plat"
	$cat_row = array();
	admin_get_cat_list(0, $cat_row);
	// renum
	for ($i=0; $i < count($cat_row); $i++) 
	{
		// get the order number
		$cat_row[$i]['cat_order'] = ($i+1)*10;
		// update db
		$sql = "update " . CATEGORIES_TABLE . " set cat_order = " . $cat_row[$i]['cat_order'] . 
					" where cat_id = " . $cat_row[$i]['cat_id'];
		if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't update list of Categories", "", __LINE__, __FILE__, $sql);
	}
	return $err;
}
//-- add v 1.0.8
//
// move a cat
function admin_move_cat($cat_id, $inc)
{
	global $db;
	//
	// fix the param
	admin_renum_cat();
	//
	// read the cat
	$sql = "select * from " . CATEGORIES_TABLE . " where cat_id = $cat_id";
	if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't access list of Categories", "", __LINE__, __FILE__, $sql);
	if ( !$row = $db->sql_fetchrow($result) ) message_die(GENERAL_ERROR, "Couldn't access Categorie $cat_id", "", __LINE__, __FILE__, $sql);
	//
	// get cat main id and order
	$cat_main  = $row['cat_main'];
	$cat_order = $row['cat_order'];
	//
	// get the prec or next cat
	$sql  = "SELECT * FROM "  . CATEGORIES_TABLE . " WHERE cat_main = $cat_main AND ";
	$sql .= ( $inc < 0 ) ? "cat_order < $cat_order ORDER BY cat_order DESC" : "cat_order > $cat_order ORDER BY cat_order ASC";
	if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't access list of Categories on the same level", "", __LINE__, __FILE__, $sql);
	//
	// first or last of the main category
	if ( !$row = $db->sql_fetchrow($result) ) return false;
	//
	// get a new order
	$new_order = ( $inc < 0 ) ? $row['cat_order'] - 5 : $row['cat_order'] + 5;
	//
	// update db
	$sql = "update " . CATEGORIES_TABLE . " set cat_order = $new_order where cat_id = $cat_id";
	if ( !$result = $db->sql_query($sql) ) message_die(GENERAL_ERROR, "Couldn't update Categories order", "", __LINE__, __FILE__, $sql);
}
//-- add v 1.0.9
function admin_get_list($mode, $id, $select, $with_index=false)
{
	global $lang;

	if ($mode == 'forum') return get_list($mode, $id, $select);

	$row = array();
	admin_get_cat_list( 0, $row, NULL, ( ($select == 0) ? $id : NULL ) );

	$cat_list = "";

	// add Index
	if ($with_index)
	{
		$s = "";
		if ($id == 0) $s = ' selected="selected"';
		$cat_list .= '<option value="0"' . $s . '>' . $lang['Forum_index'] . '</option>\n';
	}

	// add other categories except the current one
	for ($i=0; $i < count($row); $i++ ) if ( ($select != 0) || ($row[$i]['cat_id'] != $id) )
	{
		$s = "";
		if ($row[$i]['cat_id'] == $id) $s = ' selected="selected"';
		$inc = '';
		for ($j=1; $j < $row[$i]['level']; $j++) $inc = '|&nbsp;&nbsp;&nbsp;' . $inc;
		if ( $with_index ) $inc = ( ($row[$i]['level'] > 0) ? '|&nbsp;&nbsp;&nbsp;' : '|--&nbsp;' ) . $inc;
		$inc .= ($row[$i]['level'] > 0) ? '|--&nbsp;' : '';
		$cat_list .= '<option value="' . $row[$i]['cat_id'] . '"' . $s . '>' . $inc . $row[$i]['cat_title'] . '</option>\n';
	}

	return $cat_list;
}
// End PNphpBB2 Categories Hierarchie Mod

function get_info($mode, $id)
{
	global $db;

	switch($mode)
	{
		case 'category':
			$table = CATEGORIES_TABLE;
			$idfield = 'cat_id';
			$namefield = 'cat_title';
			break;

		case 'forum':
			$table = FORUMS_TABLE;
			$idfield = 'forum_id';
			$namefield = 'forum_name';
			break;

		default:
			message_die(GENERAL_ERROR, "Wrong mode for generating select list", "", __LINE__, __FILE__);
			break;
	}
	$sql = "SELECT count(*) as total
		FROM $table";
	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Couldn't get Forum/Category information", "", __LINE__, __FILE__, $sql);
	}
	$count = $db->sql_fetchrow($result);
	$count = $count['total'];

	$sql = "SELECT *
		FROM $table
		WHERE $idfield = $id"; 

	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Couldn't get Forum/Category information", "", __LINE__, __FILE__, $sql);
	}

	if( $db->sql_numrows($result) != 1 )
	{
		message_die(GENERAL_ERROR, "Forum/Category doesn't exist or multiple forums/categories with ID $id", "", __LINE__, __FILE__);
	}

	$return = $db->sql_fetchrow($result);
	$return['number'] = $count;
	return $return;
}

function get_list($mode, $id, $select)
{
	global $db;

	switch($mode)
	{
		case 'category':
			$table = CATEGORIES_TABLE;
			$idfield = 'cat_id';
			$namefield = 'cat_title';
			break;

		case 'forum':
			$table = FORUMS_TABLE;
			$idfield = 'forum_id';
			$namefield = 'forum_name';
			break;

		default:
			message_die(GENERAL_ERROR, "Wrong mode for generating select list", "", __LINE__, __FILE__);
			break;
	}

	$sql = "SELECT *
		FROM $table";
	if( $select == 0 )
	{
		$sql .= " WHERE $idfield <> $id";
	}

	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Couldn't get list of Categories/Forums", "", __LINE__, __FILE__, $sql);
	}

	$cat_list = "";

	while( $row = $db->sql_fetchrow($result) )
	{
		$s = "";
		if ($row[$idfield] == $id)
		{
			$s = " selected=\"selected\"";
		}
		$catlist .= "<option value=\"$row[$idfield]\"$s>" . $row[$namefield] . "</option>\n";
	}

	return($catlist);
}

function renumber_order($mode, $cat = 0)
{
	global $db;

	switch($mode)
	{
		case 'category':
			$table = CATEGORIES_TABLE;
			$idfield = 'cat_id';
			$orderfield = 'cat_order';
			$cat = 0;
			break;

		case 'forum':
			$table = FORUMS_TABLE;
			$idfield = 'forum_id';
			$orderfield = 'forum_order';
			$catfield = 'cat_id';
			break;

		default:
			message_die(GENERAL_ERROR, "Wrong mode for generating select list", "", __LINE__, __FILE__);
			break;
	}

	$sql = "SELECT * FROM $table";
	if( $cat != 0)
	{
		$sql .= " WHERE $catfield = $cat";
	}
	$sql .= " ORDER BY $orderfield ASC";


	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, "Couldn't get list of Categories", "", __LINE__, __FILE__, $sql);
	}

	$i = 10;
	$inc = 10;

	while( $row = $db->sql_fetchrow($result) )
	{
		$sql = "UPDATE $table
			SET $orderfield = $i
			WHERE $idfield = " . $row[$idfield];
		if( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, "Couldn't update order fields", "", __LINE__, __FILE__, $sql);
		}
		$i += 10;
	}

}
//
// End function block
// ------------------

//
// Begin program proper
//
if( isset($HTTP_POST_VARS['addforum']) || isset($HTTP_POST_VARS['addcategory']) )
{
	$mode = ( isset($HTTP_POST_VARS['addforum']) ) ? "addforum" : "addcat";

	if( $mode == "addforum" )
	{
		list($cat_id) = each($HTTP_POST_VARS['addforum']);
		$cat_id = intval($cat_id);
		// 
		// stripslashes needs to be run on this because slashes are added when the forum name is posted
		//
		$forumname = stripslashes($HTTP_POST_VARS['forumname'][$cat_id]);
	}
}

if( !empty($mode) ) 
{
	switch($mode)
	{
		case 'addforum':
		case 'editforum':
			//
			// Show form to create/modify a forum
			//
			if ($mode == 'editforum')
			{
				// $newmode determines if we are going to INSERT or UPDATE after posting?

				$l_title = $lang['Edit_forum'];
				$newmode = 'modforum';
				$buttonvalue = $lang['Update'];

				$forum_id = intval($HTTP_GET_VARS[POST_FORUM_URL]);

				$row = get_info('forum', $forum_id);

				$cat_id = $row['cat_id'];
				$forumname = $row['forum_name'];
				$forumdesc = $row['forum_desc'];
				$forumstatus = $row['forum_status'];

				//
				// start forum prune stuff.
				//
				if( $row['prune_enable'] )
				{
					$prune_enabled = "checked=\"checked\"";
					$sql = "SELECT *
               			FROM " . PRUNE_TABLE . "
               			WHERE forum_id = $forum_id";
					if(!$pr_result = $db->sql_query($sql))
					{
						 message_die(GENERAL_ERROR, "Auto-Prune: Couldn't read auto_prune table.", __LINE__, __FILE__);
        			}

					$pr_row = $db->sql_fetchrow($pr_result);
				}
				else
				{
					$prune_enabled = '';
				}
			}
			else
			{
				$l_title = $lang['Create_forum'];
				$newmode = 'createforum';
				$buttonvalue = $lang['Create_forum'];

				$forumdesc = '';
				$forumstatus = FORUM_UNLOCKED;
				$forum_id = ''; 
				$prune_enabled = '';
			}

// Begin PNphpBB2 Categories Hierarchie Mod
//			$catlist = get_list('category', $cat_id, TRUE);
			$catlist = admin_get_list('category', $cat_id, TRUE);
// End PNphpBB2 Categories Hierarchie Mod

			$forumstatus == ( FORUM_LOCKED ) ? $forumlocked = "selected=\"selected\"" : $forumunlocked = "selected=\"selected\"";
			
			// These two options ($lang['Status_unlocked'] and $lang['Status_locked']) seem to be missing from
			// the language files.
			$lang['Status_unlocked'] = isset($lang['Status_unlocked']) ? $lang['Status_unlocked'] : 'Unlocked';
			$lang['Status_locked'] = isset($lang['Status_locked']) ? $lang['Status_locked'] : 'Locked';
			
			$statuslist = "<option value=\"" . FORUM_UNLOCKED . "\" $forumunlocked>" . $lang['Status_unlocked'] . "</option>\n";
			$statuslist .= "<option value=\"" . FORUM_LOCKED . "\" $forumlocked>" . $lang['Status_locked'] . "</option>\n"; 

// Begin PNphpBB2 Module (Topic/Post sort order) 06-10-2003
			$topic_sort_order = $row['topic_sort_order'];
			$o_selected[$topic_sort_order] = ' selected="selected"';
			$topic_order_select = '<select name="topic_sort_order">';
			$topic_order_select .= '<option value="0"' . $o_selected[0] . '>' . $lang['Last_Post'] . '</option>';
			$topic_order_select .= '<option value="1"' . $o_selected[1] . '>' . $lang['First_Post'] . '</option>';
			$topic_order_select .= '<option value="2"' . $o_selected[2] . '>' . $lang['Sort_Topic_Title'] . '</option>';
			$topic_order_select .= '</select>';

			$post_sort_order = $row['post_sort_order'];
			$o_selected[$post_sort_order] = ' selected="selected"';
			$post_order_select = '<select name="post_sort_order">';
			$post_order_select .= '<option value="2"' . $o_selected[2] . '>' . $lang['First_Post'] . '</option>';
			$post_order_select .= '<option value="1"' . $o_selected[1] . '>' . $lang['Last_Post'] . '</option>';
			$post_order_select .= '<option value="0"' . $o_selected[0] . '>' . $lang['sorted_default'] . '</option>';
			$post_order_select .= '</select>';
			
// End PNphpBB2 Module (Topic/Post sort order)

// Begin PNphpBB2 Module
      if ($row['exclude_global_announce'])
      {
        $exclude_global_announce = "checked=\"checked\"";
      }
      else
      {
        $exclude_global_announce = "";
      }

      if ($row['support_forum'])
      {
        $support_forum = "checked=\"checked\"";
      }
      else
      {
        $support_forum = "";
      }
// End PNphpBB2 Module

			$template->set_filenames(array(
				"body" => "admin/forum_edit_body.tpl")
			);

			$s_hidden_fields = '<input type="hidden" name="mode" value="' . $newmode .'" /><input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />';

			$template->assign_vars(array(
				'S_FORUM_ACTION' => append_sid("admin_forums.$phpEx"),
				'S_HIDDEN_FIELDS' => $s_hidden_fields,
				'S_SUBMIT_VALUE' => $buttonvalue, 
				'S_CAT_LIST' => $catlist,
				'S_STATUS_LIST' => $statuslist,
				'S_PRUNE_ENABLED' => $prune_enabled,
/* Begin PNphpBB2 Module (Topic/Post sort order) 06-20-2003 */
				'S_TOPIC_ORDER_SELECT' => $topic_order_select,
				'L_TOPIC_SORTING' => $lang['topic_sort_order'],
				'S_POST_ORDER_SELECT' => $post_order_select,
				'L_POST_SORTING' => $lang['post_sort_order'],
/* End PNphpBB2 Module (Topic/Post sort order) */

/* Begin PNphpBB2 Module */
				'L_EXCLUDE_GLOBAL_ANNOUNCE' => $lang['Exclude_global_announce'],
				'L_EXCLUDE_GBOBAL_ANNOUNCE_EXPLAIN' => $lang['Exclude_global_announce_explain'],
				'S_EXCLUDE_GBOBAL_ANNOUNCE' => $exclude_global_announce,

				'L_SUPPORT_FORUM' => $lang['Support_forum'],
				'L_SUPPORT_FORUM_EXPLAIN' => $lang['Support_forum_explain'],
				'S_SUPPORT_FORUM' => $support_forum,
/* End PNphpBB2 Module */
        
				'L_FORUM_TITLE' => $l_title, 
				'L_FORUM_EXPLAIN' => $lang['Forum_edit_delete_explain'], 
				'L_FORUM_SETTINGS' => $lang['Forum_settings'], 
				'L_FORUM_NAME' => $lang['Forum_name'], 
				'L_CATEGORY' => $lang['Category'], 
				'L_FORUM_DESCRIPTION' => $lang['Forum_desc'],
				'L_FORUM_STATUS' => $lang['Forum_status'],
				'L_AUTO_PRUNE' => $lang['Forum_pruning'],
				'L_ENABLED' => $lang['Enabled'],
				'L_PRUNE_DAYS' => $lang['prune_days'],
				'L_PRUNE_FREQ' => $lang['prune_freq'],
				'L_DAYS' => $lang['Days'],

				'PRUNE_DAYS' => ( isset($pr_row['prune_days']) ) ? $pr_row['prune_days'] : 7,
				'PRUNE_FREQ' => ( isset($pr_row['prune_freq']) ) ? $pr_row['prune_freq'] : 1,
				'FORUM_NAME' => $forumname,
				'DESCRIPTION' => $forumdesc)
			);
			$template->pparse("body");
			break;

		case 'createforum':
			//
			// Create a forum in the DB
			//
			if( trim($HTTP_POST_VARS['forumname']) == "" )
			{
				message_die(GENERAL_ERROR, "Can't create a forum without a name");
			}

			$sql = "SELECT MAX(forum_order) AS max_order
				FROM " . FORUMS_TABLE . "
				WHERE cat_id = " . intval($HTTP_POST_VARS[POST_CAT_URL]);
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't get order number from forums table", "", __LINE__, __FILE__, $sql);
			}
			$row = $db->sql_fetchrow($result);

			$max_order = $row['max_order'];
			$next_order = $max_order + 10;
			
			$sql = "SELECT MAX(forum_id) AS max_id
				FROM " . FORUMS_TABLE;
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't get order number from forums table", "", __LINE__, __FILE__, $sql);
			}
			$row = $db->sql_fetchrow($result);

			$max_id = $row['max_id'];
			$next_id = $max_id + 1;

			//
			// Default permissions of public :: 
			//
			$field_sql = "";
			$value_sql = "";
			while( list($field, $value) = each($forum_auth_ary) )
			{
				$field_sql .= ", $field";
				$value_sql .= ", $value";

			}

			// There is no problem having duplicate forum names so we won't check for it.
// Begin PNphpBB2 Module (Forum sort order) 06-10-2003 / Exclude from global announcements
//			$sql = "INSERT INTO " . FORUMS_TABLE . " (forum_id, forum_name, cat_id, forum_desc, forum_order, forum_status, prune_enable" . $field_sql . ")
//				VALUES ('" . $next_id . "', '" . str_replace("\'", "''", $HTTP_POST_VARS['forumname']) . "', " . intval($HTTP_POST_VARS[POST_CAT_URL]) . ", '" . str_replace("\'", "''", $HTTP_POST_VARS['forumdesc']) . "', $next_order, " . intval($HTTP_POST_VARS['forumstatus']) . ", " . intval($HTTP_POST_VARS['prune_enable']) . $value_sql . ")";
			$sql = "INSERT INTO " . FORUMS_TABLE . " (forum_id, forum_name, cat_id, forum_desc, forum_order, forum_status, prune_enable, topic_sort_order, post_sort_order, exclude_global_announce, support_forum" . $field_sql . ")
				VALUES ('" . $next_id . "', '" . str_replace("\'", "''", $HTTP_POST_VARS['forumname']) . "', " . intval($HTTP_POST_VARS[POST_CAT_URL]) . ", '" . str_replace("\'", "''", $HTTP_POST_VARS['forumdesc']) . "', $next_order, " . intval($HTTP_POST_VARS['forumstatus']) . ", " . intval($HTTP_POST_VARS['prune_enable']) . ", " . intval($HTTP_POST_VARS['topic_sort_order']) . ", " . intval($HTTP_POST_VARS['post_sort_order']) . ", " . intval($HTTP_POST_VARS['exclude_global_announce']) . ", " . intval($HTTP_POST_VARS['support_forum']) . $value_sql . ")";
// End PNphpBB2 Module (Forum sort order) / Exclude from global announcements
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't insert row in forums table", "", __LINE__, __FILE__, $sql);
			}

			if( $HTTP_POST_VARS['prune_enable'] )
			{

				if( $HTTP_POST_VARS['prune_days'] == "" || $HTTP_POST_VARS['prune_freq'] == "")
				{
					message_die(GENERAL_MESSAGE, $lang['Set_prune_data']);
				}

				$sql = "INSERT INTO " . PRUNE_TABLE . " (forum_id, prune_days, prune_freq)
					VALUES('" . $next_id . "', " . intval($HTTP_POST_VARS['prune_days']) . ", " . intval($HTTP_POST_VARS['prune_freq']) . ")";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't insert row in prune table", "", __LINE__, __FILE__, $sql);
				}
			}

// Begin PNphpBB2 Module
//			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");
// End PNphpBB2 Module

			message_die(GENERAL_MESSAGE, $message);

			break;

		case 'modforum':
			// Modify a forum in the DB
			if( isset($HTTP_POST_VARS['prune_enable']))
			{
				if( $HTTP_POST_VARS['prune_enable'] != 1 )
				{
					$HTTP_POST_VARS['prune_enable'] = 0;
				}
			}

// Begin PNphpBB2 Module
			if( isset($HTTP_POST_VARS['exclude_global_announce']))
			{
				if( $HTTP_POST_VARS['exclude_global_announce'] != 1 )
				{
					$HTTP_POST_VARS['exclude_global_announce'] = 0;
				}
			}

			if( isset($HTTP_POST_VARS['support_forum']))
			{
				if( $HTTP_POST_VARS['support_forum'] != 1 )
				{
					$HTTP_POST_VARS['support_forum'] = 0;
				}
			}
// End PNphpBB2 Module

// Begin PNphpBB2 Module (Topic/Post sort order) 06-10-2003
//			$sql = "UPDATE " . FORUMS_TABLE . "
//				SET forum_name = '" . str_replace("\'", "''", $HTTP_POST_VARS['forumname']) . "', cat_id = " . intval($HTTP_POST_VARS[POST_CAT_URL]) . ", forum_desc = '" . str_replace("\'", "''", $HTTP_POST_VARS['forumdesc']) . "', forum_status = " . intval($HTTP_POST_VARS['forumstatus']) . ", prune_enable = " . intval($HTTP_POST_VARS['prune_enable']) . "
//				WHERE forum_id = " . intval($HTTP_POST_VARS[POST_FORUM_URL]);
			$sql = "UPDATE " . FORUMS_TABLE . "
				SET forum_name = '" . str_replace("\'", "''", $HTTP_POST_VARS['forumname']) . "', cat_id = " . intval($HTTP_POST_VARS[POST_CAT_URL]) . ", forum_desc = '" . str_replace("\'", "''", $HTTP_POST_VARS['forumdesc']) . "', forum_status = " . intval($HTTP_POST_VARS['forumstatus']) . ", prune_enable = " . intval($HTTP_POST_VARS['prune_enable']) . ", post_sort_order = " . intval($HTTP_POST_VARS['post_sort_order']) . ", exclude_global_announce = " . intval($HTTP_POST_VARS['exclude_global_announce']) . ", support_forum = " . intval($HTTP_POST_VARS['support_forum']) . ", topic_sort_order = " . intval($HTTP_POST_VARS['topic_sort_order']) . "
				WHERE forum_id = " . intval($HTTP_POST_VARS[POST_FORUM_URL]);
// End PNphpBB2 Module (Topic/Post sort order)
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't update forum information", "", __LINE__, __FILE__, $sql);
			}

			if( $HTTP_POST_VARS['prune_enable'] == 1 )
			{
				if( $HTTP_POST_VARS['prune_days'] == "" || $HTTP_POST_VARS['prune_freq'] == "" )
				{
					message_die(GENERAL_MESSAGE, $lang['Set_prune_data']);
				}

				$sql = "SELECT *
					FROM " . PRUNE_TABLE . "
					WHERE forum_id = " . intval($HTTP_POST_VARS[POST_FORUM_URL]);
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't get forum Prune Information","",__LINE__, __FILE__, $sql);
				}

				if( $db->sql_numrows($result) > 0 )
				{
					$sql = "UPDATE " . PRUNE_TABLE . "
						SET	prune_days = " . intval($HTTP_POST_VARS['prune_days']) . ",	prune_freq = " . intval($HTTP_POST_VARS['prune_freq']) . "
				 		WHERE forum_id = " . intval($HTTP_POST_VARS[POST_FORUM_URL]);
				}
				else
				{
					$sql = "INSERT INTO " . PRUNE_TABLE . " (forum_id, prune_days, prune_freq)
						VALUES(" . intval($HTTP_POST_VARS[POST_FORUM_URL]) . ", " . intval($HTTP_POST_VARS['prune_days']) . ", " . intval($HTTP_POST_VARS['prune_freq']) . ")";
				}

				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't Update Forum Prune Information","",__LINE__, __FILE__, $sql);
				}
			}

// Begin PNphpBB2 Module
//			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");
// End PNphpBB2 Module

			message_die(GENERAL_MESSAGE, $message);

			break;
			
		case 'addcat':
			// Create a category in the DB
			if( trim($HTTP_POST_VARS['categoryname']) == '')
			{
				message_die(GENERAL_ERROR, "Can't create a category without a name");
			}

			$sql = "SELECT MAX(cat_order) AS max_order
				FROM " . CATEGORIES_TABLE;
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't get order number from categories table", "", __LINE__, __FILE__, $sql);
			}
			$row = $db->sql_fetchrow($result);

			$max_order = $row['max_order'];
			$next_order = $max_order + 10;

			//
			// There is no problem having duplicate forum names so we won't check for it.
			//
			$sql = "INSERT INTO " . CATEGORIES_TABLE . " (cat_title, cat_order, cat_desc)
				VALUES ('" . str_replace("\'", "''", $HTTP_POST_VARS['categoryname']) . "', $next_order, '')";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't insert row in categories table", "", __LINE__, __FILE__, $sql);
			}

// Begin PNphpBB2 Module
//			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");
// End PNphpBB2 Module

			message_die(GENERAL_MESSAGE, $message);

			break;
			
		case 'editcat':
			//
			// Show form to edit a category
			//
			$newmode = 'modcat';
			$buttonvalue = $lang['Update'];

			$cat_id = intval($HTTP_GET_VARS[POST_CAT_URL]);

			$row = get_info('category', $cat_id);
			$cat_title = $row['cat_title'];
// Begin PNphpBB2 Categories Hierarchie Mod
			$cat_desc  = $row['cat_desc'];
			$cat_main  = $row['cat_main'];
			if ($cat_main <= 0) $cat_main = 0;
			$catlist = admin_get_list('category', $cat_main, TRUE, true);
// End PNphpBB2 Categories Hierarchie Mod

			$template->set_filenames(array(
				"body" => "admin/category_edit_body.tpl")
			);

			$s_hidden_fields = '<input type="hidden" name="mode" value="' . $newmode . '" /><input type="hidden" name="' . POST_CAT_URL . '" value="' . $cat_id . '" />';

			$template->assign_vars(array(
/* Begin PNphpBB2 Categories Hierarchie Mod */
				'L_CAT_DESCRIPTION' => $lang['Category_desc'],
				'CAT_DESCRIPTION' => $cat_desc,
				'S_CAT_LIST' => $catlist,
				'L_CATEGORY_ATTACHMENT' => $lang['Category_attachment'],
/* End PNphpBB2 Categories Hierarchie Mod */
				'CAT_TITLE' => $cat_title,

				'L_EDIT_CATEGORY' => $lang['Edit_Category'], 
				'L_EDIT_CATEGORY_EXPLAIN' => $lang['Edit_Category_explain'], 
				'L_CATEGORY' => $lang['Category'], 

				'S_HIDDEN_FIELDS' => $s_hidden_fields, 
				'S_SUBMIT_VALUE' => $buttonvalue, 
				'S_FORUM_ACTION' => append_sid("admin_forums.$phpEx"))
			);

			$template->pparse("body");
			break;

		case 'modcat':
			// Modify a category in the DB
// Begin PNphpBB2 Categories Hierarchie Mod
//			$sql = "UPDATE " . CATEGORIES_TABLE . "
//				SET cat_title = '" . str_replace("\'", "''", $HTTP_POST_VARS['cat_title']) . "'
//				WHERE cat_id = " . intval($HTTP_POST_VARS[POST_CAT_URL]);
			$sql = "UPDATE " . CATEGORIES_TABLE . "
				SET cat_title = '" . htmlspecialchars(str_replace("\'", "''", $HTTP_POST_VARS['cat_title'])) . "', cat_main = ".intval($HTTP_POST_VARS['cat_main']). ", cat_desc = '" . str_replace("\'", "''", $HTTP_POST_VARS['cat_desc']) . "' ".
				" WHERE cat_id = " . intval($HTTP_POST_VARS[POST_CAT_URL]);
// End PNphpBB2 Categories Hierarchie Mod
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't update forum information", "", __LINE__, __FILE__, $sql);
			}

// Begin PNphpBB2 Module
//			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");
// End PNphpBB2 Module

// Begin PNphpBB2 Categories Hierarchie Mod
			$err = admin_renum_cat();
			if ( $err ) $message = $lang['Category_config_error_fixed'] . "<br /><br />" . $message;
// End PNphpBB2 Categories Hierarchie Mod

			message_die(GENERAL_MESSAGE, $message);

			break;
			
		case 'deleteforum':
			// Show form to delete a forum
			$forum_id = intval($HTTP_GET_VARS[POST_FORUM_URL]);

			$select_to = '<select name="to_id">';
			$select_to .= "<option value=\"-1\"$s>" . $lang['Delete_all_posts'] . "</option>\n";
			$select_to .= get_list('forum', $forum_id, 0);
			$select_to .= '</select>';

			$buttonvalue = $lang['Move_and_Delete'];

			$newmode = 'movedelforum';

			$foruminfo = get_info('forum', $forum_id);
			$name = $foruminfo['forum_name'];

			$template->set_filenames(array(
				"body" => "admin/forum_delete_body.tpl")
			);

			$s_hidden_fields = '<input type="hidden" name="mode" value="' . $newmode . '" /><input type="hidden" name="from_id" value="' . $forum_id . '" />';

			$template->assign_vars(array(
				'NAME' => $name, 

				'L_FORUM_DELETE' => $lang['Forum_delete'], 
				'L_FORUM_DELETE_EXPLAIN' => $lang['Forum_delete_explain'], 
				'L_MOVE_CONTENTS' => $lang['Move_contents'], 
				'L_FORUM_NAME' => $lang['Forum_name'], 

				"S_HIDDEN_FIELDS" => $s_hidden_fields,
				'S_FORUM_ACTION' => append_sid("admin_forums.$phpEx"), 
				'S_SELECT_TO' => $select_to,
				'S_SUBMIT_VALUE' => $buttonvalue)
			);

			$template->pparse("body");
			break;

		case 'movedelforum':
			//
			// Move or delete a forum in the DB
			//
			$from_id = intval($HTTP_POST_VARS['from_id']);
			$to_id = intval($HTTP_POST_VARS['to_id']);
			$delete_old = intval($HTTP_POST_VARS['delete_old']);

			// Either delete or move all posts in a forum
			if($to_id == -1)
			{
				// Delete polls in this forum
				$sql = "SELECT v.vote_id 
					FROM " . VOTE_DESC_TABLE . " v, " . TOPICS_TABLE . " t 
					WHERE t.forum_id = $from_id 
						AND v.topic_id = t.topic_id";
				if (!($result = $db->sql_query($sql)))
				{
					message_die(GENERAL_ERROR, "Couldn't obtain list of vote ids", "", __LINE__, __FILE__, $sql);
				}

				if ($row = $db->sql_fetchrow($result))
				{
					$vote_ids = '';
					do
					{
						$vote_ids = (($vote_ids != '') ? ', ' : '') . $row['vote_id'];
					}
					while ($row = $db->sql_fetchrow($result));

					$sql = "DELETE FROM " . VOTE_DESC_TABLE . " 
						WHERE vote_id IN ($vote_ids)";
					$db->sql_query($sql);

					$sql = "DELETE FROM " . VOTE_RESULTS_TABLE . " 
						WHERE vote_id IN ($vote_ids)";
					$db->sql_query($sql);

					$sql = "DELETE FROM " . VOTE_USERS_TABLE . " 
						WHERE vote_id IN ($vote_ids)";
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);
				
				include($phpbb_root_path . "includes/prune.$phpEx");
				prune($from_id, 0, true); // Delete everything from forum
			}
			else
			{
				$sql = "SELECT *
					FROM " . FORUMS_TABLE . "
					WHERE forum_id IN ($from_id, $to_id)";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't verify existence of forums", "", __LINE__, __FILE__, $sql);
				}

				if($db->sql_numrows($result) != 2)
				{
					message_die(GENERAL_ERROR, "Ambiguous forum ID's", "", __LINE__, __FILE__);
				}
				$sql = "UPDATE " . TOPICS_TABLE . "
					SET forum_id = $to_id
					WHERE forum_id = $from_id";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't move topics to other forum", "", __LINE__, __FILE__, $sql);
				}
				$sql = "UPDATE " . POSTS_TABLE . "
					SET	forum_id = $to_id
					WHERE forum_id = $from_id";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't move posts to other forum", "", __LINE__, __FILE__, $sql);
				}
				sync('forum', $to_id);
			}

			// Alter Mod level if appropriate - 2.0.4
			$sql = "SELECT ug.user_id 
				FROM " . AUTH_ACCESS_TABLE . " a, " . USER_GROUP_TABLE . " ug 
				WHERE a.forum_id <> $from_id 
					AND a.auth_mod = 1
					AND ug.group_id = a.group_id";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't obtain moderator list", "", __LINE__, __FILE__, $sql);
			}

			if ($row = $db->sql_fetchrow($result))
			{
				$user_ids = '';
				do
				{
					$user_ids .= (($user_ids != '') ? ', ' : '' ) . $row['user_id'];
				}
				while ($row = $db->sql_fetchrow($result));

				$sql = "SELECT ug.user_id 
					FROM " . AUTH_ACCESS_TABLE . " a, " . USER_GROUP_TABLE . " ug 
					WHERE a.forum_id = $from_id 
						AND a.auth_mod = 1 
						AND ug.group_id = a.group_id
						AND ug.user_id NOT IN ($user_ids)";
				if( !$result2 = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't obtain moderator list", "", __LINE__, __FILE__, $sql);
				}
					
				if ($row = $db->sql_fetchrow($result2))
				{
					$user_ids = '';
					do
					{
						$user_ids .= (($user_ids != '') ? ', ' : '' ) . $row['user_id'];
					}
					while ($row = $db->sql_fetchrow($result2));

					$sql = "UPDATE " . USERS_TABLE . " 
						SET user_level = " . USER . " 
						WHERE user_id IN ($user_ids) 
							AND user_level <> " . ADMIN;
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);

			}
			$db->sql_freeresult($result2);

			$sql = "DELETE FROM " . FORUMS_TABLE . "
				WHERE forum_id = $from_id";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't delete forum", "", __LINE__, __FILE__, $sql);
			}
			
			$sql = "DELETE FROM " . AUTH_ACCESS_TABLE . "
				WHERE forum_id = $from_id";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't delete forum", "", __LINE__, __FILE__, $sql);
			}
			
			$sql = "DELETE FROM " . PRUNE_TABLE . "
				WHERE forum_id = $from_id";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't delete forum prune information!", "", __LINE__, __FILE__, $sql);
			}

// Begin PNphpBB2 Module
//			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");
// End PNphpBB2 Module

			message_die(GENERAL_MESSAGE, $message);

			break;
			
		case 'deletecat':
			//
			// Show form to delete a category
			//
			$cat_id = intval($HTTP_GET_VARS[POST_CAT_URL]);

			$buttonvalue = $lang['Move_and_Delete'];
			$newmode = 'movedelcat';
			$catinfo = get_info('category', $cat_id);
			$name = $catinfo['cat_title'];

			if ($catinfo['number'] == 1)
			{
				$sql = "SELECT count(*) as total
					FROM ". FORUMS_TABLE;
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't get Forum count", "", __LINE__, __FILE__, $sql);
				}
				$count = $db->sql_fetchrow($result);
				$count = $count['total'];

				if ($count > 0)
				{
					message_die(GENERAL_ERROR, $lang['Must_delete_forums']);
				}
				else
				{
					$select_to = $lang['Nowhere_to_move'];
				}
			}
			else
			{
				$select_to = '<select name="to_id">';
// Begin PNphpBB2 Categories Hierarchie Mod
//				$select_to .= get_list('category', $cat_id, 0);
				$select_to .= admin_get_list('category', $cat_id, 0);
// End PNphpBB2 Categories Hierarchie Mod
				$select_to .= '</select>';
			}

			$template->set_filenames(array(
				"body" => "admin/forum_delete_body.tpl")
			);

			$s_hidden_fields = '<input type="hidden" name="mode" value="' . $newmode . '" /><input type="hidden" name="from_id" value="' . $cat_id . '" />';

			$template->assign_vars(array(
				'NAME' => $name, 

				'L_FORUM_DELETE' => $lang['Forum_delete'], 
				'L_FORUM_DELETE_EXPLAIN' => $lang['Forum_delete_explain'], 
				'L_MOVE_CONTENTS' => $lang['Move_contents'], 
				'L_FORUM_NAME' => $lang['Forum_name'], 
				
				'S_HIDDEN_FIELDS' => $s_hidden_fields,
				'S_FORUM_ACTION' => append_sid("admin_forums.$phpEx"), 
				'S_SELECT_TO' => $select_to,
				'S_SUBMIT_VALUE' => $buttonvalue)
			);

			$template->pparse("body");
			break;

		case 'movedelcat':
			//
			// Move or delete a category in the DB
			//
			$from_id = intval($HTTP_POST_VARS['from_id']);
			$to_id = intval($HTTP_POST_VARS['to_id']);

			if (!empty($to_id))
			{
				$sql = "SELECT *
					FROM " . CATEGORIES_TABLE . "
					WHERE cat_id IN ($from_id, $to_id)";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't verify existence of categories", "", __LINE__, __FILE__, $sql);
				}
				if($db->sql_numrows($result) != 2)
				{
					message_die(GENERAL_ERROR, "Ambiguous category ID's", "", __LINE__, __FILE__);
				}

				$sql = "UPDATE " . FORUMS_TABLE . "
					SET cat_id = $to_id
					WHERE cat_id = $from_id";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't move forums to other category", "", __LINE__, __FILE__, $sql);
				}
// Begin PNphpBB2 Categories Hierarchie Mod
				$sql = "UPDATE " . CATEGORIES_TABLE . "
					SET cat_main = $to_id
					WHERE cat_main = $from_id";
				if( !$result = $db->sql_query($sql) )
				{
					message_die(GENERAL_ERROR, "Couldn't move sub-categories to other category", "", __LINE__, __FILE__, $sql);
				}
// End PNphpBB2 Categories Hierarchie Mod
			}

			$sql = "DELETE FROM " . CATEGORIES_TABLE ."
				WHERE cat_id = $from_id";
				
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't delete category", "", __LINE__, __FILE__, $sql);
			}

// Begin PNphpBB2 Module
//			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");
			$message = $lang['Forums_updated'] . "<br /><br />" . sprintf($lang['Click_return_forumadmin'], "<a href=\"" . append_sid("admin_forums.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");
// End PNphpBB2 Module

// Begin PNphpBB2 Categories Hierarchie Mod
			$err = admin_renum_cat();
			if ( $err ) $message = $lang['Category_config_error_fixed'] . "<br /><br />" . $message;
// End PNphpBB2 Categories Hierarchie Mod

			message_die(GENERAL_MESSAGE, $message);

			break;

		case 'forum_order':
			//
			// Change order of forums in the DB
			//
			$move = intval($HTTP_GET_VARS['move']);
			$forum_id = intval($HTTP_GET_VARS[POST_FORUM_URL]);

			$forum_info = get_info('forum', $forum_id);

			$cat_id = $forum_info['cat_id'];

			$sql = "UPDATE " . FORUMS_TABLE . "
				SET forum_order = forum_order + $move
				WHERE forum_id = $forum_id";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't change category order", "", __LINE__, __FILE__, $sql);
			}

			renumber_order('forum', $forum_info['cat_id']);
			$show_index = TRUE;

			break;
			
		case 'cat_order':
			//
			// Change order of categories in the DB
			//
			$move = intval($HTTP_GET_VARS['move']);
			$cat_id = intval($HTTP_GET_VARS[POST_CAT_URL]);

// Begin PNphpBB2 Categories Hierarchie Mod
/*			
			$sql = "UPDATE " . CATEGORIES_TABLE . "
				SET cat_order = cat_order + $move
				WHERE cat_id = $cat_id";
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't change category order", "", __LINE__, __FILE__, $sql);
			}

			renumber_order('category');
*/
			admin_move_cat($cat_id, $move);
			admin_renum_cat();
// End PNphpBB2 Categories Hierarchie Mod
			$show_index = TRUE;

			break;

		case 'forum_sync':
			sync('forum', intval($HTTP_GET_VARS[POST_FORUM_URL]));
			$show_index = TRUE;

			break;

		default:
			message_die(GENERAL_MESSAGE, $lang['No_mode']);
			break;
	}

	if ($show_index != TRUE)
	{
// Begin PNphpBB2 Module
//		include('./page_footer_admin.'.$phpEx);
		include($phpbb_root_path . 'admin/page_footer_admin.' . $phpEx);
// End PNphpBB2 Module
		exit;
	}
}

//
// Start page proper
//
$template->set_filenames(array(
	"body" => "admin/forum_admin_body.tpl")
);

$template->assign_vars(array(
	'S_FORUM_ACTION' => append_sid("admin_forums.$phpEx"),
	'L_FORUM_TITLE' => $lang['Forum_admin'], 
	'L_FORUM_EXPLAIN' => $lang['Forum_admin_explain'], 
	'L_CREATE_FORUM' => $lang['Create_forum'], 
	'L_CREATE_CATEGORY' => $lang['Create_category'], 
	'L_EDIT' => $lang['Edit'], 
	'L_DELETE' => $lang['Delete'], 
	'L_MOVE_UP' => $lang['Move_up'], 
/* Begin PNphpBB2 Module */
	'L_PERMISSIONS' => $lang['Permissions'],
/* End PNphpBB2 Module */
	'L_MOVE_DOWN' => $lang['Move_down'], 
	'L_RESYNC' => $lang['Resync'])
);

// Begin PNphpBB2 Categories Hierarchie Mod
/*
$sql = "SELECT cat_id, cat_title, cat_order
	FROM " . CATEGORIES_TABLE . "
	ORDER BY cat_order";
if( !$q_categories = $db->sql_query($sql) )
{
	message_die(GENERAL_ERROR, "Could not query categories list", "", __LINE__, __FILE__, $sql);
}

if( $total_categories = $db->sql_numrows($q_categories) )
{
	$category_rows = $db->sql_fetchrowset($q_categories);
*/
admin_renum_cat();
// get cats array
$category_rows = array();
admin_get_cat_list(0, $category_rows);
// get max inc level
$max_inc = 0;
for ($i = 0; $i < count($category_rows); $i++)
{
	if ($max_inc < $category_rows[$i]['level'])
		$max_inc = $category_rows[$i]['level'];
}
$template->assign_vars(array(
	'INC_SPAN' => ($max_inc+7),
	)
);

// display cats and forums
if( $total_categories = count($category_rows) )
{
// End PNphpBB2 Categories Hierarchie Mod

	$sql = "SELECT *
		FROM " . FORUMS_TABLE . "
		ORDER BY cat_id, forum_order";
	if(!$q_forums = $db->sql_query($sql))
	{
		message_die(GENERAL_ERROR, "Could not query forums information", "", __LINE__, __FILE__, $sql);
	}

	if( $total_forums = $db->sql_numrows($q_forums) )
	{
		$forum_rows = $db->sql_fetchrowset($q_forums);
	}

	//
	// Okay, let's build the index
	//
	$gen_cat = array();

	for($i = 0; $i < $total_categories; $i++)
	{
		$cat_id = $category_rows[$i]['cat_id'];

		$template->assign_block_vars("catrow", array( 
			'S_ADD_FORUM_SUBMIT' => "addforum[$cat_id]", 
			'S_ADD_FORUM_NAME' => "forumname[$cat_id]", 

			'CAT_ID' => $cat_id,
			'CAT_DESC' => $category_rows[$i]['cat_title'],

/* Begin PNphpBB2 Categories Hierarchie Mod */
			'CAT_DESCRIPTION' => $category_rows[$i]['cat_desc'],
			'INC_SPAN' => $max_inc - $category_rows[$i]['level']+3,
			'INC_SPAN_ALL' => $max_inc - $category_rows[$i]['level']+7,
/* End PNphpBB2 Categories Hierarchie Mod */

			'U_CAT_EDIT' => append_sid("admin_forums.$phpEx?mode=editcat&amp;" . POST_CAT_URL . "=$cat_id"),
			'U_CAT_DELETE' => append_sid("admin_forums.$phpEx?mode=deletecat&amp;" . POST_CAT_URL . "=$cat_id"),
			'U_CAT_MOVE_UP' => append_sid("admin_forums.$phpEx?mode=cat_order&amp;move=-15&amp;" . POST_CAT_URL . "=$cat_id"),
			'U_CAT_MOVE_DOWN' => append_sid("admin_forums.$phpEx?mode=cat_order&amp;move=15&amp;" . POST_CAT_URL . "=$cat_id"),
/* Begin PNphpBB2 Module */
/*			'U_VIEWCAT' => append_sid($phpbb_root_path."index.$phpEx?" . POST_CAT_URL . "=$cat_id")) */
			'U_VIEWCAT' => append_sid("index.$phpEx?" . POST_CAT_URL . "=$cat_id"))
/* End PNphpBB2 Module */
		);
// Begin PNphpBB2 Categories Hierarchie Mod
		for ($k=0; $k < $category_rows[$i]['level']; $k++) $template->assign_block_vars("catrow.inc", array());
// End PNphpBB2 Categories Hierarchie Mod

		for($j = 0; $j < $total_forums; $j++)
		{
			$forum_id = $forum_rows[$j]['forum_id'];
			
			if ($forum_rows[$j]['cat_id'] == $cat_id)
			{

				$template->assign_block_vars("catrow.forumrow",	array(
					'FORUM_NAME' => $forum_rows[$j]['forum_name'],
					'FORUM_DESC' => $forum_rows[$j]['forum_desc'],
					'ROW_COLOR' => $row_color,
					'NUM_TOPICS' => $forum_rows[$j]['forum_topics'],
					'NUM_POSTS' => $forum_rows[$j]['forum_posts'],
/* Begin PNphpBB2 Categories Hierarchie Mod */
					'INC_SPAN' => $max_inc - $category_rows[$i]['level']+1,
/* End PNphpBB2 Categories Hierarchie Mod */

/* Begin PNphpBB2 Module */
/*					'U_VIEWFORUM' => append_sid($phpbb_root_path."viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"), */
					'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"),
/* End PNphpBB2 Module */
					'U_FORUM_EDIT' => append_sid("admin_forums.$phpEx?mode=editforum&amp;" . POST_FORUM_URL . "=$forum_id"),
					'U_FORUM_DELETE' => append_sid("admin_forums.$phpEx?mode=deleteforum&amp;" . POST_FORUM_URL . "=$forum_id"),
					'U_FORUM_MOVE_UP' => append_sid("admin_forums.$phpEx?mode=forum_order&amp;move=-15&amp;" . POST_FORUM_URL . "=$forum_id"),
					'U_FORUM_MOVE_DOWN' => append_sid("admin_forums.$phpEx?mode=forum_order&amp;move=15&amp;" . POST_FORUM_URL . "=$forum_id"),
/* Begin PNphpBB2 Module */
					'U_FORUM_PERMISSIONS' => append_sid("admin_forumauth.$phpEx?" . POST_FORUM_URL . "=" . $forum_id),
/* End PNphpBB2 Module */
					'U_FORUM_RESYNC' => append_sid("admin_forums.$phpEx?mode=forum_sync&amp;" . POST_FORUM_URL . "=$forum_id"))
				);
// Begin PNphpBB2 Categories Hierarchie Mod
				for ($k=0; $k < $category_rows[$i]['level']; $k++) $template->assign_block_vars("catrow.forumrow.inc", array());
// End PNphpBB2 Categories Hierarchie Mod

			}// if ... forumid == catid
			
		} // for ... forums

	} // for ... categories

}// if ... total_categories

$template->pparse("body");

// Begin PNphpBB2 Module
// include('./page_footer_admin.'.$phpEx);
include($phpbb_root_path . 'admin/page_footer_admin.' . $phpEx);
// End PNphpBB2 Module

?>
