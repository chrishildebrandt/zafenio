<?php
/***************************************************************************
 *                             admin_pnphpbb2.php
 *                            --------------------
 *   begin                : Friday, May 9, 2003
 *   Lat Updated          : Friday, May 16, 2003
 *   copyright            : (C) 2003 The PNphpBB Group
 *   email                : support@pnphpbb.com
 *
 *   $Id: admin_pnphpbb2.php,v 1.6 2004/10/06 19:45:48 carls Exp $
 *
 *
 ***************************************************************************/
/***************************************************************************
 * Portions of this code are from:
 * Mod Title: eXtreme Styles mod
 * Mod Version: 0.5
 * Author: Vjacheslav Trushkin <slava@trushkin.net>
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
	$phpbb_module['PNphpBB2']['Configuration'] = $file;
	return;
}

function check_cache($filename)
{
	// check if filename is valid
	global $str, $template, $lang;
	if(substr($filename, 0, strlen($template->cachedir)) !== $template->cachedir)
	{
		$str .= $lang['xs_check_filename'] . "<br />\n";
		return false;
	}
	else
	{
		// try to open file
		$file = @fopen($filename, 'w');
		if(!$file)
		{
			$str .= sprintf($lang['xs_check_openfile1'], $filename) . "<br />\n";
			// try to create directories
			$dir = substr($filename, strlen($template->cachedir), strlen($filename));
			$dirs = explode('/', $dir);
			$path = $template->cachedir; 
			@umask(0);
			if(!@is_dir($path))
			{
				$str .= sprintf($lang['xs_check_nodir'], $path) . "<br />\n";
				if(!@mkdir($path))
				{
					$str .= sprintf($lang['xs_check_nodir2'], $path) . "<br />\n";
					return false;
				}
				else
				{
					$str .= sprintf($lang['xs_check_createddir'], $path) . "<br />\n";
					@chmod($path, 0777);
				}
			}
			else
			{
				$str .= sprintf($lang['xs_check_dir'] , $path) . "<br />\n";
			}
			if(count($dirs) > 0)
			for($i=0; $i<count($dirs)-1; $i++)
			{
				if($i>0)
				{
					$path .= '/';
				}
				$path .= $dirs[$i];
				if(!@is_dir($path))
				{
					$str .= sprintf($lang['xs_check_nodir'], $path) . "<br />\n";
					if(!@mkdir($path))
					{
						$str .= sprintf($lang['xs_check_nodir2'], $path) . "<br />\n";
						return false;
					}
					else
					{
						$str .= sprintf($lang['xs_check_createddir'], $path) . "<br />\n";
						@chmod($path, 0777);
					}
				}
				else
				{
					$str .= sprintf($lang['xs_check_dir'] , $path) . "<br />\n";
				}
			}
			// try to open file again after directories were created
			$file = @fopen($filename, 'w');
		}
		if(!$file)
		{
			$str .= sprintf($lang['xs_check_openfile2'], $filename) . "<br />\n";
			return false;
		}
		$str .= sprintf($lang['xs_check_ok'], $filename) . "<br />\n";
		fputs($file, '&nbsp;');
		fclose($file);
		@chmod($filename, 0777);
		return true;
	}
}

function PNphpBB2FormSelectMultiple($fieldname, $data, $multiple=0, $size=1, $selected = '', $accesskey='')
{
   if (empty ($fieldname))
   {
      return;
   }

   // Set up selected if required
   if (!empty($selected))
	 {
      for ($i=0; !empty($data[$i]); $i++)
			{
          if ($data[$i]['id'] == $selected)
					{
             $data[$i]['selected'] = 1;
          }
      }
   }

   $c = count($data);
   if ($c < $size)
   {
      $size = $c;
   }
   $output = '<select'
            .' name="'.pnVarPrepForDisplay($fieldname).'"'
            .' id="'.pnVarPrepForDisplay($fieldname).'"'
            .' size="'.pnVarPrepForDisplay($size).'"'
            .(($multiple == 1) ? ' multiple="multiple"' : '')
            .((empty ($accesskey)) ? '' : ' accesskey="'.pnVarPrepForDisplay($accesskey).'"')
            .'>';
   foreach ($data as $datum)
   {
      $output .= '<option'
                .' value="'.pnVarPrepForDisplay($datum['id']).'"'
                .((empty ($datum['selected'])) ? '' : ' selected="selected"')
                .'>'
                .pnVarPrepForDisplay($datum['name'])
                .'</option>';
   }
   $output .= '</select>';
   return $output;
}

$phpbb_root_path = './modules/' . $ModName . '/';
require($phpbb_root_path . 'extension.inc');
require($phpbb_root_path . 'admin/pagestart.' . $phpEx);
//require('includes/pnHTML.php');

if( !empty($setmodules) )
{
	return;
}
@include($phpbb_root_path . 'pnversion.php');

$ver = isset($board_config['pnphpbb2_version']) ? $board_config['pnphpbb2_version'] : 0;

// set config values if there aren't any
$add = array();
$del = array();
$up = array();
if (!isset($board_config['pnphpbb2_version']))
{
 	 $board_config['pnphpbb2_version'] = $modversion['version'];
	 $add[] = 'pnphpbb2_version';
}
elseif ($board_config['pnphpbb2_version'] != $modversion['version'])
{
 			 $board_config['pnphpbb2_version'] = $modversion['version'];
			 $up[] = 'pnphpbb2_version';
}
if (!isset($board_config['pnphpbb2_logo_on']))
{
 	 $board_config['pnphpbb2_logo_on'] = 1;
	 $add[] = 'pnphpbb2_logo_on';
}
if (!isset($board_config['pnphpbb2_quickreply']))
{
 	 $board_config['pnphpbb2_quickreply'] = 1;
	 $add[] = 'pnphpbb2_quickreply';
}
if (!isset($board_config['pnphpbb2_shorturls']))
{
 	 $board_config['pnphpbb2_shorturls'] = 0;
	 $add[] = 'pnphpbb2_shorturls';
}
if (!isset($board_config['pnphpbb2_post_confirm']))
{
 	 $board_config['pnphpbb2_post_confirm'] = 0;
	 $add[] = 'pnphpbb2_post_confirm';
}
if (!isset($board_config['pnphpbb2_post_order']))
{
 	 $board_config['pnphpbb2_post_order'] = 0;
	 $add[] = 'pnphpbb2_post_order';
}
if (!isset($board_config['pnphpbb2_allow_full_page']))
{
 	 $board_config['pnphpbb2_allow_full_page'] = 0;
	 $add[] = 'pnphpbb2_allow_full_page';
}
if (!isset($board_config['pnphpbb2_full_page']))
{
 	 $board_config['pnphpbb2_full_page'] = 0;
	 $add[] = 'pnphpbb2_full_page';
}
if (!isset($board_config['pnphpbb2_pn_pm']))
{
 	 $board_config['pnphpbb2_pn_pm'] = 0;
	 $add[] = 'pnphpbb2_pn_pm';
}
if (!isset($board_config['pnphpbb2_pn_link']))
{
 	 $board_config['pnphpbb2_pn_link'] = "";
	 $add[] = 'pnphpbb2_pn_link';
}
if (!isset($board_config['pnphpbb2_pn_text']))
{
 	 $board_config['pnphpbb2_pn_text'] = "";
	 $add[] = 'pnphpbb2_pn_text';
}
if (!isset($board_config['pnphpbb2_template_compiler']))
{
 	 $board_config['pnphpbb2_template_compiler'] = 0;
	 $add[] = 'pnphpbb2_template_compiler';
}

if (!isset($board_config['pnphpbb2_members_online']))
{
 	 $board_config['pnphpbb2_members_online'] = 1;
	 $add[] = 'pnphpbb2_members_online';
}
if (!isset($board_config['pnphpbb2_members_online_annon']))
{
 	 $board_config['pnphpbb2_members_online_annon'] = 1;
	 $add[] = 'pnphpbb2_members_online_annon';
}
if (!isset($board_config['pnphpbb2_allow_sub_change']))
{
 	 $board_config['pnphpbb2_allow_sub_change'] = 1;
	 $add[] = 'pnphpbb2_allow_sub_change';
}

if (!isset($board_config['pnphpbb2_sub_forum']))
{
 	 $board_config['pnphpbb2_sub_forum'] = 1;
	 $add[] = 'pnphpbb2_sub_forum';
}

if (!isset($board_config['pnphpbb2_enable_announce']))
{
 	 $board_config['pnphpbb2_enable_announce'] = 1;
	 $add[] = 'pnphpbb2_enable_announce';
}

if (!isset($board_config['pnphpbb2_split_global_announce']))
{
 	 $board_config['pnphpbb2_split_global_announce'] = 1;
	 $add[] = 'pnphpbb2_split_global_announce';
}

if (!isset($board_config['pnphpbb2_announcement_duration']))
{
 	 $board_config['pnphpbb2_announcement_duration'] = 7;
	 $add[] = 'pnphpbb2_announcement_duration';
}

if (!isset($board_config['pnphpbb2_split_announce']))
{
 	 $board_config['pnphpbb2_split_announce'] = 1;
	 $add[] = 'pnphpbb2_split_announce';
}

if (!isset($board_config['pnphpbb2_split_sticky']))
{
 	 $board_config['pnphpbb2_split_sticky'] = 1;
	 $add[] = 'pnphpbb2_split_sticky';
}

if (!isset($board_config['pnphpbb2_post_images']))
{
 	 $board_config['pnphpbb2_post_images'] = 1;
	 $add[] = 'pnphpbb2_post_images';
}

if (!isset($board_config['edit_time']))
{
 	 $board_config['edit_time'] = array();
	 $add[] = 'edit_time';
}
if (!isset($board_config['theme_matching']))
{
 	 $board_config['theme_matching'] = 0;
	 $add[] = 'theme_matching';
}

// install/upgrade

if (($ver <> $modversion['version']) || (count($add) > 0) || (count($up) > 0))
{
 	 global $db;
	 if (isset($db) && (@get_class($db) === 'sql_db'))
	 {
	 		// adding new config values
			for ($i=0; $i<count($add); $i++)
			{
			 		$sql = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('" . $add[$i] . "', '" . addslashes($board_config[$add[$i]]) . "')";
					$db->sql_query($sql);
			}
			// removing old configuration variables that aren't used
			for ($i=0; $i<count($del); $i++)
			{
					$sql = "DELETE FROM " . CONFIG_TABLE . " WHERE config_name='" . $del[$i] . "'";
					$db->sql_query($sql);
			}
			// updating variables that should be overwritten
			for ($i=0; $i<count($up); $i++)
			{
					$sql = "UPDATE " . CONFIG_TABLE . " SET config_value='" . addslashes($board_config[$up[$i]]) . "' WHERE config_name='" . $up[$i] . "'";
					$db->sql_query($sql);
			}
	}
}

if (isset($HTTP_POST_VARS['submit']))
{
 	 $vars = array('theme_matching',
                 'pnphpbb2_members_online',
								 'pnphpbb2_members_online_annon',
								 'pnphpbb2_logo_on', 
								 'pnphpbb2_quickreply', 
								 'pnphpbb2_shorturls', 
								 'pnphpbb2_post_order', 
								 'pnphpbb2_post_confirm', 
								 'pnphpbb2_allow_full_page', 
								 'pnphpbb2_full_page',
								 'pnphpbb2_pn_pm',
								 'pnphpbb2_pn_link',
								 'pnphpbb2_pn_text',
								 'pnphpbb2_template_compiler',
								 'pnphpbb2_allow_sub_change',
								 'pnphpbb2_sub_forum',
								 'pnphpbb2_enable_announce',
								 'pnphpbb2_split_global_announce',
								 'pnphpbb2_announcement_duration',
								 'pnphpbb2_split_announce',
								 'pnphpbb2_split_sticky',
								 'pnphpbb2_post_images',
                 'edit_time');

	 if ( $board_config['pnphpbb2_template_compiler'] == 1 )
	 {
	 		array_push($vars, 'xs_use_cache', 
								 'xs_cache_dir', 
								 'xs_cache_dir_absolute', 
								 'xs_auto_compile', 
								 'xs_auto_recompile', 
								 'xs_separator', 
								 'xs_php', 
								 'xs_def_template',
								 'xs_check_switches',
								 'xs_use_isset');
	 }

	 foreach ($vars as $var)
	 {
	 	  $new[$var] = trim($HTTP_POST_VARS[$var]);
			if (addslashes($board_config[$var]) !== $new[$var])
			{
			 	 $sql = "UPDATE " . CONFIG_TABLE . " SET config_value = '{$new[$var]}' WHERE config_name = '{$var}'";
			
				 if ( !$db->sql_query($sql) )
				 {
				 		message_die(GENERAL_ERROR, "Failed to update general configuration for $config_name", "", __LINE__, __FILE__, $sql);
				 }
				 $board_config[$var] = stripslashes($new[$var]);
		  }
	}
	$message = $lang['pnphpbb2_updated'] . "<br /><br />" . sprintf($lang['pnphpbb2_click_return_config'], "<a href=\"" . append_sid("admin_pnphpbb2.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("admin.$phpEx?pane=right") . "\">", "</a>");

	message_die(GENERAL_MESSAGE, $message);
}

$template->set_filenames(array('body' => 'admin/pnphpbb2_config_body.tpl'));

$template->assign_vars(array(
	'L_PNPHPBB2_OPTIONS' => $lang['pnphpbb2_options'],
	'L_YES'				=> $lang['Yes'],
	'L_NO'				=> $lang['No'],
	'L_SUBMIT'			=> $lang['Submit'], 
	'L_RESET'			=> $lang['Reset'], 
	'L_FIRST_POST' => $lang['First_Post'],
	'L_LAST_POST' => $lang['Last_Post'],
	'L_CONFIGURATION_TITLE'	=> $lang['pnphpbb2_settings'],
	'L_CONFIGURATION_EXPLAIN' => $lang['pnphpbb2_settings_explain'],
  'L_PNPHPBB2_LOGO_ON'	=> "<b>" . $lang['pnphpbb2_logo_on'] . "</b>",
	'L_PNPHPBB2_LOGO_ON_EXPLAIN'	=> $lang['pnphpbb2_logo_on_explain'],
	'L_PNPHPBB2_QUICKREPLY'	=> "<b>" . $lang['pnphpbb2_quickreply'] . "</b>",
	'L_PNPHPBB2_QUICKREPLY_EXPLAIN'	=> $lang['pnphpbb2_quickreply_explain'],
	'L_PNPHPBB2_QUICKREPLY_ADV'	=> $lang['Advanced_mode'],
	'L_PNPHPBB2_SHORTURLS'	=> "<b>" . $lang['pnphpbb2_shorturls'] . "</b>",
	'L_PNPHPBB2_SHORTURLS_EXPLAIN'	=> $lang['pnphpbb2_shorturls_explain'],
	'L_PNPHPBB2_POST_CONFIRM'	=> "<b>" . $lang['pnphpbb2_post_confirm'] . "</b>",
	'L_PNPHPBB2_POST_CONFIRM_EXPLAIN'	=> $lang['pnphpbb2_post_confirm_explain'],
	'L_PNPHPBB2_POST_ORDER'	=> "<b>" . $lang['pnphpbb2_post_order'] . "</b>",
	'L_PNPHPBB2_POST_ORDER_EXPLAIN'	=> $lang['pnphpbb2_post_order_explain'],
	'L_PNPHPBB2_ALLOW_FULL_PAGE'	=> "<b>" . $lang['pnphpbb2_allow_full_page'] . "</b>",
	'L_PNPHPBB2_ALLOW_FULL_PAGE_EXPLAIN'	=> $lang['pnphpbb2_allow_full_page_explain'],
	'L_PNPHPBB2_FULL_PAGE'	=> "<b>" . $lang['pnphpbb2_full_page'] . "</b>",
	'L_PNPHPBB2_FULL_PAGE_EXPLAIN'	=> $lang['pnphpbb2_full_page_explain'],
	'L_PNPHPBB2_PN_PM'	=> "<b>" . $lang['pnphpbb2_pn_pm'] . "</b>",
	'L_PNPHPBB2_PN_PM_EXPLAIN'	=> $lang['pnphpbb2_pn_pm_explain'],
	'L_PNPHPBB2_PN_LINK'	=> "<b>" . $lang['pnphpbb2_pn_link'] . "</b>",
	'L_PNPHPBB2_PN_LINK_EXPLAIN'	=> $lang['pnphpbb2_pn_link_explain'],
	'L_PNPHPBB2_PN_TEXT'	=> "<b>" . $lang['pnphpbb2_pn_text'] . "</b>",
	'L_PNPHPBB2_PN_TEXT_EXPLAIN'	=> $lang['pnphpbb2_pn_text_explain'],
	'L_PNPHPBB2_TEMPLATE_COMPILER'	=> "<b>" . $lang['pnphpbb2_template_compiler'] . "</b>",
	'L_PNPHPBB2_TEMPLATE_COMPILER_EXPLAIN'	=> $lang['pnphpbb2_template_compiler_explain'],
	'L_PNPHPBB2_MEMBERS_ONLINE'	=> "<b>" . $lang['pnphpbb2_members_online'] . "</b>",
	'L_PNPHPBB2_MEMBERS_ONLINE_EXPLAIN'	=> $lang['pnphpbb2_members_online_explain'],
	'L_PNPHPBB2_MEMBERS_ONLINE_ANNON'	=> "<b>" . $lang['pnphpbb2_members_online_annon'] . "</b>",
	'L_PNPHPBB2_MEMBERS_ONLINE_ANNON_EXPLAIN'	=> $lang['pnphpbb2_members_online_annon_explain'],
	'L_PNPHPBB2_ALLOW_SUB_CHANGE'	=> "<b>" . $lang['pnphpbb2_allow_sub_change'] . "</b>",
	'L_PNPHPBB2_ALLOW_SUB_CHANGE_EXPLAIN'	=> $lang['pnphpbb2_allow_sub_change_explain'],
	'PNPHPBB2_LOGO_ON'		=> intval($board_config['pnphpbb2_logo_on']),
	'PNPHPBB2_MEMBERS_ONLINE'		=> intval($board_config['pnphpbb2_members_online']),
	'PNPHPBB2_QUICKREPLY'		=> intval($board_config['pnphpbb2_quickreply']),
	'PNPHPBB2_SHORTURLS'		=> intval($board_config['pnphpbb2_shorturls']),
	'PNPHPBB2_POST_CONFIRM' => intval($board_config['pnphpbb2_post_confirm']),
	'PNPHPBB2_POST_ORDER' => intval($board_config['pnphpbb2_post_order']),
	'PNPHPBB2_FULL_PAGE'	=> intval($board_config['pnphpbb2_full_page']),
	'PNPHPBB2_ALLOW_FULL_PAGE'	=> intval($board_config['pnphpbb2_allow_full_page']),
	'PNPHPBB2_PN_PM'	=> intval($board_config['pnphpbb2_pn_pm']),
	'PNPHPBB2_PN_LINK'	=> htmlspecialchars($board_config['pnphpbb2_pn_link']),
	'PNPHPBB2_PN_TEXT'	=> htmlspecialchars($board_config['pnphpbb2_pn_text']),
	'PNPHPBB2_TEMPLATE_COMPILER'	=> intval($board_config['pnphpbb2_template_compiler']),
	'PNPHPBB2_MEMBERS_ONLINE'	=> intval($board_config['pnphpbb2_members_online']),
	'PNPHPBB2_MEMBERS_ONLINE_ANNON'	=> intval($board_config['pnphpbb2_members_online_annon']),
	'PNPHPBB2_ALLOW_SUB_CHANGE'	=> intval($board_config['pnphpbb2_allow_sub_change']),	
	'S_PNPHPBB2_LOGO_ON_YES' => ( $board_config['pnphpbb2_logo_on'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_LOGO_ON_NO' => ( !$board_config['pnphpbb2_logo_on'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_QUICKREPLY_YES' => ( $board_config['pnphpbb2_quickreply'] == 1 ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_QUICKREPLY_NO' => ( $board_config['pnphpbb2_quickreply'] == 0 ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_QUICKREPLY_ADV' => ( $board_config['pnphpbb2_quickreply'] == 2 ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_SHORTURLS_YES' => ( $board_config['pnphpbb2_shorturls'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_SHORTURLS_NO' => ( !$board_config['pnphpbb2_shorturls'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_POST_ORDER_NEWEST' => ( $board_config['pnphpbb2_post_order'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_POST_ORDER_OLDEST' => ( !$board_config['pnphpbb2_post_order'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_POST_CONFIRM_YES' => ( $board_config['pnphpbb2_post_confirm'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_POST_CONFIRM_NO' => ( !$board_config['pnphpbb2_post_confirm'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_ALLOW_FULL_PAGE_YES' => ( $board_config['pnphpbb2_allow_full_page'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_ALLOW_FULL_PAGE_NO' => ( !$board_config['pnphpbb2_allow_full_page'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_FULL_PAGE_YES' => ( $board_config['pnphpbb2_full_page'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_FULL_PAGE_NO' => ( !$board_config['pnphpbb2_full_page'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_PN_PM_YES' => ( $board_config['pnphpbb2_pn_pm'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_PN_PM_NO' => ( !$board_config['pnphpbb2_pn_pm'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_PN_LINK' => htmlspecialchars($board_config['pnphpbb2_pn_link']),
	'S_PNPHPBB2_PN_TEXT' => htmlspecialchars($board_config['pnphpbb2_pn_text']),
	'S_PNPHPBB2_TEMPLATE_COMPILER_YES' => ( $board_config['pnphpbb2_template_compiler'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_TEMPLATE_COMPILER_NO' => ( !$board_config['pnphpbb2_template_compiler'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_MEMBERS_ONLINE_YES' => ( $board_config['pnphpbb2_members_online'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_MEMBERS_ONLINE_NO' => ( !$board_config['pnphpbb2_members_online'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_MEMBERS_ONLINE_ANNON_YES' => ( $board_config['pnphpbb2_members_online_annon'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_MEMBERS_ONLINE_ANNON_NO' => ( !$board_config['pnphpbb2_members_online_annon'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_ALLOW_SUB_CHANGE_YES' => ( $board_config['pnphpbb2_allow_sub_change'] ) ? "checked=\"checked\"" : "",
	'S_PNPHPBB2_ALLOW_SUB_CHANGE_NO' => ( !$board_config['pnphpbb2_allow_sub_change'] ) ? "checked=\"checked\"" : "",
  'L_THEME_MATCHING' => '<b>' . $lang['theme_matching'] . '</b>', 
  'L_THEME_MATCHING_EXPLAIN' => $lang['theme_matching_explain'], 
  'THEME_MATCHING' => intval($board_config['theme_matching']), 
	'S_THEME_MATCHING_YES' => ( $board_config['theme_matching'] ) ? "checked=\"checked\"" : "",
	'S_THEME_MATCHING_NO' => ( !$board_config['theme_matching'] ) ? "checked=\"checked\"" : "",

/* BEGIN - Limited post edit time MOD */ 
  'L_EDIT_TIME' => '<b>' . $lang['edit_time'] . '</b>', 
  'L_EDIT_TIME_EXPLAIN' => $lang['edit_time_explain'], 
  'EDIT_TIME' => intval($board_config['edit_time']), 
/* BEGIN - Limited post edit time MOD */
 
/* Begin PNphpBB2 Split Announcements/Stickys */
	"L_PNPHPBB2_ANNOUNCEMENT_SETTINGS" => $lang['announce_settings'],

	"L_PNPHPBB2_ENABLE_ACCOUNCE" => "<b>" . $lang['enable_announce'] . "</b>",
	"L_PNPHPBB2_ENABLE_ACCOUNCE_EXPLAIN" => $lang['enable_announce_explain'],
	"PNPHPBB2_ENABLE_ACCOUNCE" => intval($board_config['pnphpbb2_enable_announce']),
	"PNPHPBB2_ENABLE_ACCOUNCE_YES" => ( $board_config['pnphpbb2_enable_announce'] ) ? "checked=\"checked\"" : "",
	"PNPHPBB2_ENABLE_ACCOUNCE_NO" => ( !$board_config['pnphpbb2_enable_announce'] ) ? "checked=\"checked\"" : "",
	
	"L_PNPHPBB2_ANNOUNCEMENT_DURATION" => "<b>" . $lang['announcement_duration'] . "</b>",
	"L_PNPHPBB2_ANNOUNCEMENT_DURATION_EXPLAIN" => $lang['announcement_duration_explain'],
	"PNPHPBB2_ANNOUNCEMENT_DURATION" => intval($board_config['pnphpbb2_announcement_duration']),
	
	"L_PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE" => "<b>" . $lang['split_global_announce'] . "</b>",
	"PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE" => intval($board_config['pnphpbb2_split_global_announce']),
	"PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE_YES" => ( $board_config['pnphpbb2_split_global_announce'] ) ? "checked=\"checked\"" : "",
	"PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE_NO" => ( !$board_config['pnphpbb2_split_global_announce'] ) ? "checked=\"checked\"" : "",
	"L_PNPHPBB2_SPLIT_ANNOUNCE"        => "<b>" . $lang['split_announce'] . "</b>",
	"PNPHPBB2_SPLIT_ANNOUNCE" => intval($board_config['pnphpbb2_split_announce']),	
	"PNPHPBB2_SPLIT_ANNOUNCE_YES"      => ( $board_config['pnphpbb2_split_announce'] ) ? "checked=\"checked\"" : "",
	"PNPHPBB2_SPLIT_ANNOUNCE_NO"       => ( !$board_config['pnphpbb2_split_announce'] ) ? "checked=\"checked\"" : "",
	"L_PNPHPBB2_SPLIT_STICKY"          => "<b>" . $lang['split_sticky'] . "</b>",
	"PNPHPBB2_SPLIT_STICKY" => intval($board_config['pnphpbb2_split_sticky']),
	"PNPHPBB2_SPLIT_STICKY_YES"        => ( $board_config['pnphpbb2_split_sticky'] ) ? "checked=\"checked\"" : "",
	"PNPHPBB2_SPLIT_STICKY_NO"         => ( !$board_config['pnphpbb2_split_sticky'] ) ? "checked=\"checked\"" : "",
/* End PNphpBB2 Split Announcements/Stickys */
	
/* Begin PNphpBB2 Categories Hierarchie Mod */
	"L_PNPHPBB2_SUB_FORUM" => "<b>" . $lang['Use_sub_forum'] . "</b>",
	"L_PNPHPBB2_SUB_FORUM_EXPLAIN" => $lang['Use_sub_forum_explain'],
	"PNPHPBB2_SUB_FORUM_YES" => ( $board_config['pnphpbb2_sub_forum'] ) ? "checked=\"checked\"" : "",
	"PNPHPBB2_SUB_FORUM_NO" => ( !$board_config['pnphpbb2_sub_forum'] ) ? "checked=\"checked\"" : "",
	"PNPHPBB2_SUB_FORUM" => intval($board_config['pnphpbb2_sub_forum']),
	"L_PNPHPBB2_HIERARCHY_SETTINGS" => $lang['Hierarchy_setting'],
/* End PNphpBB2 Categories Hierarchie Mod */
	'S_MODE_ACTION' => append_sid('admin_pnphpbb2.' . $phpEx)	
	));

if ( $board_config['pnphpbb2_template_compiler'] == 1 )
{

 	 // test cache
	 $filename = $template->make_filename('_xs_test.tpl');
	 $filename2 = $template->make_filename_cache($filename);
	 $str = '';
	 if (!check_cache($filename2))
	 {
	 		$template->assign_block_vars('switch_xs_warning', array());
	 }
	 @unlink($filename2);
	 $debug1 = $str;

	 // test cache
	 $filename3 = $template->make_filename('admin/_admin_xs_test.tpl');
	 $filename4 = $template->make_filename_cache($filename3);
	 $str = '';
	 check_cache($filename4);
	 @unlink($filename4);
	 $debug2 = $str;

	 // add realpath
	 if (@function_exists('realpath') && @realpath($phpbb_root_path . 'includes/template.'.$phpEx))
	 {
	 		$str = @realpath($filename);
			if ($str && ($str !== $filename))
			{
			 	 $filename = $filename . '<br />(' . $str . ')';
			}
			$str = @realpath($filename2);
			if ($str && ($str !== $filename2))
			{
			 	 $filename2 = $filename2 . '<br />(' . $str . ')';
			}
			$str = @realpath($filename3);
			if ($str && ($str !== $filename3))
			{
			 	 $filename3 = $filename3 . '<br />(' . $str . ')';
			}
			$str = @realpath($filename4);
			if ($str && ($str !== $filename4))
			{
			 	 $filename4 = $filename4 . '<br />(' . $str . ')';
			}
	 }

	 $template->assign_block_vars('switch_xs_config', array());

	 $template->assign_vars(array(
	 'L_XS_WARNING'		=> $lang['xs_warning'],
	 'L_XS_WARNING_EXPLAIN'	=> $lang['xs_warning_explain'],
	 'L_XS_UPDATED'		=> $lang['xs_updated'],
	 'L_XS_UPDATED_EXPLAIN'	=> $lang['xs_updated_explain'],
	 /* title */
	 'L_XS_SETTINGS'		=> sprintf($lang['xs_settings'], $template->xs_versiontxt),
	 'L_XS_SETTINGS_CACHE'	=> $lang['xs_settings_cache'],
	 /* xs_use_cache */
	 'L_XS_USE_CACHE'	=> "<b>" . $lang['xs_use_cache'] . "</b>",
	 'L_XS_CACHE_EXPLAIN'	=> $lang['xs_cache_explain'],
	 /* xs_cache_dir */
	 'L_XS_CACHE_DIR'	=> "<b>" . $lang['xs_cache_dir'] . "</b>",
	 'L_XS_CACHE_DIR_EXPLAIN'	=> $lang['xs_cache_dir_explain'],
	 'L_XS_DIR_ABSOLUTE'	=> $lang['xs_dir_absolute'],
	 'L_XS_DIR_ABSOLUTE_EXPLAIN'	=> $lang['xs_dir_absolute_explain'],
	 'L_XS_DIR_RELATIVE'	=> $lang['xs_dir_relative'],
	 'L_XS_DIR_RELATIVE_EXPLAIN'	=> $lang['xs_dir_relative_explain'],
	 /* xs_auto_compile */
	 'L_XS_AUTO_COMPILE'	=> "<b>" . $lang['xs_auto_compile'] . "</b>",
	 'L_XS_AUTO_COMPILE_EXPLAIN'	=> $lang['xs_auto_compile_explain'],
	 /* xs_auto_recompile */
	 'L_XS_AUTO_RECOMPILE'	=> "<b>" . $lang['xs_auto_recompile'] . "</b>",
	 'L_XS_AUTO_RECOMPILE_EXPLAIN'	=> $lang['xs_auto_recompile_explain'],
	 /* xs_separator */
	 'L_XS_SEPARATOR'	=> "<b>" . $lang['xs_separator'] . "</b>",
	 'L_XS_SEPARATOR_EXPLAIN'	=> $lang['xs_separator_explain'],
	 /* xs_php */
	 'L_XS_PHP'			=> "<b>" . $lang['xs_php'] . "</b>",
	 'L_XS_PHP_EXPLAIN'	=> $lang['xs_php_explain'],
	 /* xs_def_template */
	 'L_XS_DEF_TEMPLATE'	=> "<b>" . $lang['xs_def_template'] . "</b>",
	 'L_XS_DEF_TEMPLATE_EXPLAIN'	=> $lang['xs_def_template_explain'],
	 /* xs_check_switches */
	 'L_XS_CHECK_SWITCHES'	=> "<b>" . $lang['xs_check_switches'] . "</b>",
	 'L_XS_CHECK_SWITCHES_EXPLAIN'	=> $lang['xs_check_switches_explain'],
	 'L_XS_CHECK_SWITCHES_0'		=> $lang['xs_check_switches_0'],
	 'L_XS_CHECK_SWITCHES_1'		=> $lang['xs_check_switches_1'],
	 'L_XS_CHECK_SWITCHES_2'		=> $lang['xs_check_switches_2'],
	 /* xs_use_isset */
	 'L_XS_USE_ISSET'	=> "<b>" . $lang['xs_use_isset'] . "</b>",
	 /* variables */
	 'XS_USE_CACHE'		=> intval($board_config['xs_use_cache']),
	 'XS_CACHE_DIR'		=> htmlspecialchars($board_config['xs_cache_dir']),
	 'XS_CACHE_DIR_ABSOLUTE' => intval($board_config['xs_cache_dir_absolute']),
	 'XS_AUTO_COMPILE'	=> intval($board_config['xs_auto_compile']),
	 'XS_AUTO_RECOMPILE'	=> intval($board_config['xs_auto_recompile']),
	 'XS_SEPARATOR'		=> htmlspecialchars($board_config['xs_separator']),
	 'XS_PHP'			=> htmlspecialchars($board_config['xs_php']),
	 'XS_DEF_TEMPLATE'	=> htmlspecialchars($board_config['xs_def_template']),
	 'XS_CHECK_SWITCHES'	=> intval($board_config['xs_check_switches']),
	 'XS_USE_ISSET'				=> intval($board_config['xs_use_isset']),
	 /* debug info */
	 'L_XS_DEBUG_HEADER'			=> $lang['xs_debug_header'],
	 'L_XS_DEBUG_EXPLAIN'		=> $lang['xs_debug_explain'],
	 'L_XS_DEBUG_VARS'			=> $lang['xs_debug_vars'],
	 'L_XS_DEBUG_TPL_NAME'		=> $lang['xs_debug_tpl_name'],
	 'L_XS_DEBUG_CACHE_FILENAME'	=> $lang['xs_debug_cache_filename'],
	 'L_XS_DEBUG_DATA'			=> $lang['xs_debug_data'],
   'XS_DEBUG_HDR1'			=> sprintf($lang['xs_check_hdr'], '_xs_test.tpl'),
	 'XS_DEBUG_HDR2'			=> sprintf($lang['xs_check_hdr'], 'admin/_xs_test.tpl'),
	 'XS_DEBUG_FILENAME1'	=> $filename,
	 'XS_DEBUG_FILENAME2'	=> $filename2,
	 'XS_DEBUG_FILENAME3'	=> $filename3,
	 'XS_DEBUG_FILENAME4'	=> $filename4,
	 'XS_DEBUG_DATA'			=> $debug1,
	 'XS_DEBUG_DATA2'		=> $debug2
	));
}

$template->pparse('body');
include($phpbb_root_path . 'admin/page_footer_admin.' . $phpEx);
?>
