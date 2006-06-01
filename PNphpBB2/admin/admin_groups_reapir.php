<?php
/***************************************************************************
 *                          admin_groups_repair.php
 *                          -----------------------
 *   begin                : Friday, July 18, 2003
 *   copyright            : (C) 2003 The PNphpBB Group
 *   email                : support@pnphpbb.com
 *
 *   $Id: admin_groups_reapir.php,v 1.2 2004/09/25 19:21:22 carls Exp $
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

define('IN_PHPBB', 1);

if ( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$phpbb_module['PNphpBB2']['Repair_Groups'] = $filename;

	return;
}

$phpbb_root_path = './modules/' . $ModName . '/';
require($phpbb_root_path . 'extension.inc');
require($phpbb_root_path . 'admin/pagestart.' . $phpEx);
include($phpbb_root_path . 'includes/sql_parse.'.$phpEx);

// Obtain language file
$temp_language = $board_config['default_lang'];
if ( !file_exists(@phpbb_realpath($phpbb_root_path . 'language/lang_' . $temp_language . '/admin/lang_grouprepair.'.$phpEx)) )
{
	$temp_language = 'english';
}
include($phpbb_root_path . 'language/lang_' . $temp_language . '/admin/lang_grouprepair.' . $phpEx);

// Repair group id from 2.0.1 in case it was not fixed in the upgrade :-(
switch (SQL_LAYER)
{
   case 'mysql':
	 case 'mysql4':
	    $sql = "ALTER TABLE " . GROUPS_TABLE . " MODIFY COLUMN group_id mediumint(8) NOT NULL auto_increment;";
			break;
}
if ( ($result = $db->sql_query($sql)) ) 
{ 
    $liste = "<b>" . $lang_admin['GroupPatched'] . "</b>";
}
else
{
 		$liste = "<b>" . $lang_admin['NotUpdated'] . "</b>";
} 


$sql = "SELECT user_id, username 
    FROM " . USERS_TABLE ." 
    WHERE user_id > 0"; 
if ( !($result = $db->sql_query($sql)) ) 
{ 
    message_die(GENERAL_ERROR, 'Could not obtain user list', '', __LINE__, __FILE__, $sql); 
} 
$i = 0;
while ( $row = $db->sql_fetchrow($result) ) 
{ 
	 $i++;
   $username = $row['username']; 
   $user_id = $row['user_id']; 
   $usergroup = ''; 
    
   $sql1 = "SELECT ug.group_id 
          FROM " . USER_GROUP_TABLE ." ug, ". GROUPS_TABLE. " g  
          WHERE ug.user_id = $user_id 
            AND ug.group_id = g.group_id 
            AND g.group_single_user  = 1 
            "; 
              
   if ( ($result1 = $db->sql_query($sql1)) ) 
   { 
	    $row1 = $db->sql_fetchrow($result1); 
      $usergroup =( ( $row1['group_id'] != '' ) ? $row1['group_id'] : 'User has no user group'.$row1 );  
   } 

   if (!($row1['group_id'] != '')) 
   { 
      $sql2 = "SELECT MAX(group_id) AS total FROM " . GROUPS_TABLE; 
      
			if ( !($result2 = $db->sql_query($sql2)) ) 
      { 
         message_die(GENERAL_ERROR, 'Could not obtain next group_id information', '', __LINE__, __FILE__, $sq2l); 
      } 

      if ( !($row2 = $db->sql_fetchrow($result2)) ) 
      { 
         message_die(GENERAL_ERROR, 'Could not obtain next group_id information', '', __LINE__, __FILE__, $sql2); 
      } 
      $group_id = $row2['total'] + 1; 
               
      $sql3 = "INSERT INTO " . GROUPS_TABLE . " (group_id, group_name, group_description, group_single_user, group_moderator) 
         VALUES ($group_id, '', 'Personal User', 1, 0)"; 
      if ( !($result3 = $db->sql_query($sql3, BEGIN_TRANSACTION)) ) 
      { 
         message_die(GENERAL_ERROR, 'Could not insert data into groups table', '', __LINE__, __FILE__, $sql3); 
      } 

      $sql4 = "INSERT INTO " . USER_GROUP_TABLE . " (user_id, group_id, user_pending) 
         VALUES ($user_id, $group_id, 0)"; 
      if( !($result4 = $db->sql_query($sql4, END_TRANSACTION)) ) 
      { 
         message_die(GENERAL_ERROR, 'Could not insert data into user_group table', '', __LINE__, __FILE__, $sql4); 
      } 

      $usergroup = $usergroup . ", " . $lang_admin['AddingGroup'] . " ". $group_id; 
   } 

//   $liste .= ( ( $liste != '' ) ? '<br> ' : '' ) . $username.' <b>'.$usergroup.'</b>'; 
} 

message_die(GENERAL_MESSAGE, $lang_admin['GroupRepairComplete'] . "<br /><br /><b>" . $i . " " . $lang_admin['UsersUpdated'] . "</b>"); 


// Begin PNphpBB2 Module
include($phpbb_root_path . 'admin/page_footer_admin.' . $phpEx);
// End PNphpBB2 Module

?>
