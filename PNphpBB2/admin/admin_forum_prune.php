<?php
/***************************************************************************
*                             admin_forum_prune.php
*                              -------------------
*     begin                : Mon Jul 31, 2001
*     copyright            : (C) 2001 The phpBB Group
*     email                : support@phpbb.com
*
*     $Id: admin_forum_prune.php,v 1.2 2004/09/25 19:21:22 carls Exp $
*
****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_PHPBB', true);

if ( !empty($setmodules) )
{
	$filename = basename(__FILE__);
// Begin PNphpBB2 Module
//	$module['Forums']['Prune'] = $filename;
	$phpbb_module['Forums']['Prune'] = $filename;
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
require($phpbb_root_path . 'includes/prune.'.$phpEx);
require($phpbb_root_path . 'includes/functions_admin.'.$phpEx); 

//
// Get the forum ID for pruning
//
if( isset($HTTP_GET_VARS[POST_FORUM_URL]) || isset($HTTP_POST_VARS[POST_FORUM_URL]) )
{
	$forum_id = ( isset($HTTP_POST_VARS[POST_FORUM_URL]) ) ? $HTTP_POST_VARS[POST_FORUM_URL] : $HTTP_GET_VARS[POST_FORUM_URL];
// Begin PNphpBB2 Categories Hierarchie Mod
	$cat_id = -1;
	if ( substr($forum_id, 0, 1) == 'C' ) $cat_id = intval( substr($forum_id, 1) );
	$forum_sql = '';
	if ( $cat_id > -1 )
	{
		$catrows = get_cat($cat_id);
		$catids = array();
		for ( $i = 0; $i < count($catrows); $i++ ) $catids[] = $catrows[$i]['cat_id'];
		$s_cat = implode(', ', $catids);
		if ( $s_cat != '' ) $forum_sql = " AND f.cat_id in ($s_cat)";
	}
	else
// End PNphpBB2 Categories Hierarchie Mod

	if( $forum_id == -1 )
	{
		$forum_sql = '';
	}
	else
	{
		$forum_id = intval($forum_id);
		$forum_sql = "AND forum_id = $forum_id";
	}
}
else
{
	$forum_id = '';
	$forum_sql = '';
}
//
// Get a list of forum's or the data for the forum that we are pruning.
//
// Begin PNphpBB2 Module
// $sql = "SELECT f.*
//	FROM " . FORUMS_TABLE . " f, " . CATEGORIES_TABLE . " c
//	WHERE c.cat_id = f.cat_id
//	$forum_sql
//	ORDER BY c.cat_order ASC, f.forum_order ASC";
$sql = "SELECT f.*, c.*
	FROM " . FORUMS_TABLE . " f, " . CATEGORIES_TABLE . " c
	WHERE c.cat_id = f.cat_id
	$forum_sql
	ORDER BY c.cat_order ASC, f.forum_order ASC";
// End PNphpBB2 Module
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not obtain list of forums for pruning', '', __LINE__, __FILE__, $sql);
}

$forum_rows = array();
while( $row = $db->sql_fetchrow($result) )
{
	$forum_rows[] = $row;
}

//
// Check for submit to be equal to Prune. If so then proceed with the pruning.
//
if( isset($HTTP_POST_VARS['doprune']) )
{
	$prunedays = ( isset($HTTP_POST_VARS['prunedays']) ) ? intval($HTTP_POST_VARS['prunedays']) : 0;

	// Convert days to seconds for timestamp functions...
	$prunedate = time() - ( $prunedays * 86400 );

	$template->set_filenames(array(
		'body' => 'admin/forum_prune_result_body.tpl')
	);

	for($i = 0; $i < count($forum_rows); $i++)
	{
		$p_result = prune($forum_rows[$i]['forum_id'], $prunedate);
		sync('forum', $forum_rows[$i]['forum_id']);
	
// Begin PNphpBB2 Module
//		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
//		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
		$row_color = ( !($i % 2) ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module
	
		$template->assign_block_vars('prune_results', array(
			'ROW_COLOR' => '#' . $row_color, 
			'ROW_CLASS' => $row_class, 
			'FORUM_NAME' => $forum_rows[$i]['forum_name'],
			'FORUM_TOPICS' => $p_result['topics'],
			'FORUM_POSTS' => $p_result['posts'])
		);
	}

	$template->assign_vars(array(
		'L_FORUM_PRUNE' => $lang['Forum_Prune'],
		'L_FORUM' => $lang['Forum'],
		'L_TOPICS_PRUNED' => $lang['Topics_pruned'],
		'L_POSTS_PRUNED' => $lang['Posts_pruned'],
		'L_PRUNE_RESULT' => $lang['Prune_success'])
	);
}
else
{
	//
	// If they haven't selected a forum for pruning yet then
	// display a select box to use for pruning.
	//
	if( empty($HTTP_POST_VARS[POST_FORUM_URL]) )
	{
		//
		// Output a selection table if no forum id has been specified.
		//
		$template->set_filenames(array(
			'body' => 'admin/forum_prune_select_body.tpl')
		);

// Begin PNphpBB2 Categories Hierarchie Mod
/*
		$select_list = '<select name="' . POST_FORUM_URL . '">';
		$select_list .= '<option value="-1">' . $lang['All_Forums'] . '</option>';

		for($i = 0; $i < count($forum_rows); $i++)
		{
			$select_list .= '<option value="' . $forum_rows[$i]['forum_id'] . '">' . $forum_rows[$i]['forum_name'] . '</option>';
		}
		$select_list .= '</select>';
*/
		$select_list = make_forum_select(POST_FORUM_URL, false, '', true);
// End PNphpBB2 Categories Hierarchie Mod

		//
		// Assign the template variables.
		//
		$template->assign_vars(array(
			'L_FORUM_PRUNE' => $lang['Forum_Prune'],
			'L_SELECT_FORUM' => $lang['Select_a_Forum'], 
			'L_LOOK_UP' => $lang['Look_up_Forum'],

			'S_FORUMPRUNE_ACTION' => append_sid("admin_forum_prune.$phpEx"),
			'S_FORUMS_SELECT' => $select_list)
		);
	}
	else
	{
// Begin PNphpBB2 Categories Hierarchie Mod
//		$forum_id = intval($HTTP_POST_VARS[POST_FORUM_URL]);
		$forum_id = $HTTP_POST_VARS[POST_FORUM_URL];
// End PNphpBB2 Categories Hierarchie Mod
		
		//
		// Output the form to retrieve Prune information.
		//
		$template->set_filenames(array(
			'body' => 'admin/forum_prune_body.tpl')
		);

		$forum_name = ( $forum_id == -1 ) ? $lang['All_Forums'] : $forum_rows[0]['forum_name'];
// Begin PNphpBB2 Categories Hierarchie Mod
		if ($cat_id > -1 )
		{
			if ($cat_id == 0)
			{
				$forum_name = $lang['All_Forums'];
			}
			else
			{
				$sql = "select * from " . CATEGORIES_TABLE . " where cat_id = $cat_id";
				if(!($result = $db->sql_query($sql)))
					message_die(GENERAL_ERROR, 'Could not query category', '', __LINE__, __FILE__, $sql);
				if ($row = $db->sql_fetchrow($result))
					$forum_name = $row['cat_title'];
			}
		}
// End PNphpBB2 Categories Hierarchie Mod

		$prune_data = $lang['Prune_topics_not_posted'] . " "; 
		$prune_data .= '<input class="post" type="text" name="prunedays" size="4"> ' . $lang['Days'];

		$hidden_input = '<input type="hidden" name="' . POST_FORUM_URL . '" value="' . $forum_id . '" />';

		//
		// Assign the template variables.
		//
		$template->assign_vars(array(
			'FORUM_NAME' => $forum_name,

/* Begin PNphpBB2 Categories Hierarchie Mod */
/*			'L_FORUM' => $lang['Forum'], */ 
			'L_FORUM' => ( $cat_id > 0 ) ? $lang['Category'] : $lang['Forum'], 
/* End PNphpBB2 Categories Hierarchie Mod */
			'L_FORUM_PRUNE' => $lang['Forum_Prune'], 
			'L_FORUM_PRUNE_EXPLAIN' => $lang['Forum_Prune_explain'], 
			'L_DO_PRUNE' => $lang['Do_Prune'],

			'S_FORUMPRUNE_ACTION' => append_sid("admin_forum_prune.$phpEx"),
			'S_PRUNE_DATA' => $prune_data,
			'S_HIDDEN_VARS' => $hidden_input)
		);
	}
}
//
// Actually output the page here.
//
$template->pparse('body');

// Begin PNphpBB2 Module
// include('./page_footer_admin.'.$phpEx);
include($phpbb_root_path . 'admin/page_footer_admin.' . $phpEx);
// End PNphpBB2 Module

?>