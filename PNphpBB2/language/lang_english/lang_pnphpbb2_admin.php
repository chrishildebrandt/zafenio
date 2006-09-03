<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [English]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     update               : Sun October 11 2004
 *     copyright            : (C) 2003-2004 the PNphpBB Group
 *     email                : support@pnphpbb.com
 *
 *     $Id: lang_pnphpbb2_admin.php,v 1.14 2004/10/15 20:56:40 carls Exp $
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

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

if ( defined('PNPHPBB_INSTALL') )
{
  // Installation
  $lang['PNphpBB2_Install'] = "PNphpBB2 Installation";
  $lang['PNphpBB2_Installed'] = "PNphpBB2 Installed & Activated.";
  $lang['PNphpBB2_Install_Title'] = "Installing PNphpBB2 tables to %s*";
  $lang['PNphpBB2_Install_Complete']  = "<b>PNphpBB2 basic installation is now complete.</b><br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Click on Finish Installation to return to the PN module administration page, and activate PNphpBB2.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "You can access the forum administration page through the PN administration page or with the link located in the forum.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Please be sure to check the General Configuration details and make any required changes. <br /><br /><b>Thank you for choosing PNphpBB2.</b>";
  $lang['Populate_DB_phpBB'] = "Populating tables with default data";
  $lang['Populate_DB_PNphpBB'] = "Populating tables with PNphpBB specific data";
  $lang['Populate_DB_Admin'] = "Inserting admin specific data into tables";
  $lang['AutoTheme_Support'] = "You are using a AutoTheme generated Theme with this account or site.<br>There are known issues when installing PNphpBB while using AutoTheme.</br> Please switch your account/site to a NON AutoTheme Theme, perform the Install/Upgrade/Conversion/Removal then switch back to your current theme.<br><br>Thank you<br>The PNphpBB Group"; 

  // Write permitions for styles and cellpics
  $lang['Write_Perm_Desc'] = "Checking module location and directory permissions";
  $lang['Write_Perm_1'] = "Module is located correctly";
  $lang['Write_Perm_2'] = "Module MUST be located in modules/PNphpBB2.";
  $lang['Write_Perm_3'] = "./modules/PNphpBB2/templates/PNTheme/styles IS writable.";
  $lang['Write_Perm_4'] = "./modules/PNphpBB2/templates/PNTheme/styles is NOT writable";
  $lang['Write_Perm_5'] = "./modules/PNphpBB2/templates/PNTheme/cellpics IS writable.";
  $lang['Write_Perm_6'] = "./modules/PNphpBB2/templates/PNTheme/cellpics is NOT writable.";
  $lang['Check_Continue'] = "Continue";
  $lang['Re_Check'] = "Re-Check";  
  $lang['Write_Perm_Correct'] = "The above directories must be writable by PNphpBB.";
  $lang['Location_Correct'] = "PNphpBB2 must be located in the directory PNphpBB2 under modules.";
  $lang['Current_Location'] = "You have it located in: ";
  $lang['Write_Perm_Good'] = "Everything looks good! Please click <u>Continue</u>.";
  $lang['Please_Correct'] = "Please correct the problem(s) and <u>Re-Check</u>.";
  $lang['No_GD'] = "Your server configuration does not seem to have the GD images library installed. Cellpic image creation during theme matching will be disabled.";

  // Update
  $lang['PNphpBB2_Upgrade'] = "PNphpBB2 Update";
  $lang['PNphpBB2_Move_Tables_No'] = "Tables currently exist in %s*.<br /><br />The tables %s* can not be moved.";
  $lang['PNphpBB2_Move_Tables_Yes'] = "Moving tables to new location";
  $lang['PNphpBB2_Delete_Users'] = "Deleting users from PostNuke (Except Admin!)";
  $lang['PNphpBB2_Delete_Groups'] = "Delete user id's from the group membership table";
  $lang['PNphpBB2_Populate_Users'] = "Populating PostNuke user and group tables with phpBB users";
  $lang['PNphpBB2_Database_Type'] = "Database type";
  $lang['PNphpBB2_Update_phpBB'] = "Updating phpBB version %s to version %s";
  $lang['PNphpBB2_Update_PNphpBB'] = "Updating PNphpBB version %s to version %s";
  $lang['PNphpBB2_Update_Attach'] = "Updating Attachment Mod version %s to version %s";
  $lang['PNphpBB2_Install_PNphpBB'] = "Performing PNphpBB %s specific database changes";
  $lang['PNphpBB2_Optimize_Analyze'] = 'Optimizing tables';
  $lang['PNphpBB2_Update_Schemas'] = "Updating database schema";
  $lang['PNphpBB2_No_Updates'] =  "No updates required";
  $lang['PNphpBB2_Update_Data'] = "Updating data";
  $lang['PNphpBB2_Attach'] = "Attachment Mod Version ";
  $lang['PNphpBB2_Updating_Paths'] = "Updating config table";
  $lang['PNphpBB2_Delete_Themes'] = "Deleting old themes/style records";
  $lang['PNphpBB2_Install_Themes'] = "Installing new theme (PNTheme)";
  $lang['PNphpBB2_Board_Theme'] = "Setting board default theme to PNTheme";
  $lang['PNphpBB2_User_Theme'] = "Setting theme for all users to PNTheme";
  $lang['PNphpBB2_Clear_Sessions'] = "Clearing ALL sessions from sessions table";
  $lang['PNphpBB2_Cant_SQL'] = "CAN'T CHANGE MSSQL-TABLE. PLEASE DO THE FOLLOWING MANUALLY:<br />IN PHPBB_QUOTA_LIMITS, CHANGE QUOTA_LIMIT TO FROM INT TO BIGINT.</p>";
  $lang['PNphpBB2_Update_Complete'] = "PNphpBB2 update is now complete.";
  $lang['PNphpBB2_Update_Complete'] .= "If you encounter any errors during this process, Please print this page then visit the forums at www.pnphpbb.com for support.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "Be sure to activate this module before continuing, then review all config settings in the administration page.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "If the attachment mod was installed during this process, be sure to enable it if you intend on using it.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "<b>Thank you for choosing PNphpBB!</b>";
  $lang['PNphpBB2_phpBB_Tables_Found'] = "phpBB_* tables have been found in your PostNuke database. It is VERY important";
  $lang['PNphpBB2_phpBB_Tables_Found'] .= " that you understand what this script is about to do.";
  $lang['PNphpBB2_three_options'] = "You have four (4) options at this point.";
  $lang['PNphpBB2_option_one'] = "1) Upgrade from a previous version of PNphpBB2 or phpBB2pnmod";
  $lang['PNphpBB2_option_two'] = "2) Convert a stand alone version of phpBB (Version 2.0.x) to PNphpBB2";
  $lang['PNphpBB2_option_three'] = "3) Perform a NEW install of PNphpBB2";
  $lang['PNphpBB2_option_four'] = "4) Abort installation";
  $lang['PNphpBB2_Upgrade_Disclaimer'] = "PLEASE! Understand the following <font color=\"red\"><b>WARNINGS:</b></font><br /><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>Selecting option 2 (two)</b> will delete ALL users from your existing PN database then insert all user information from the phpBB2 tables.</br><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>Selecting option 3 (three)</b> Will perform a NEW install of PNphpBB2 and leave the existing phpBB_* tables that are found in your PostNuke database.</br></br>";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "Once this is done there is NO WAY to turn back from this upgrade, so be very sure you have a recent backup of your PostNuke and phpBB2 databases.";
  $lang['PNphpBB2_bad_version']  = "Version mismatch.<br /><br />Stand alone conversion is only supported with versions 2.0.1 or above.<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "You would also receive this error if you are attempting to convert a phpBB 2.1.x(2.2) forum.<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "Version information found: ";
  $lang['PNphpBB2_no_version'] = "Could not obtain version information.";
  $lang['PNphpBB2_Updating_links'] = "Updating post links";

  // Removal
  $lang['PNphpBB2_Remove_Prompt'] = "Remove PNphpBB2";
  $lang['PNphpBB2_Removed'] = "PNphpBB2 has been removed.";
  $lang['PNphpBB2_Remove_Text'] = "Your about to remove PNphpBB2 and all its associated tables from PostNuke (%s*).<br /><br />All data will be lost, are you sure you wish to do this?";
  $lang['PNphpBB2_Remove_Title'] = "Removing PNphpBB2 tables from %s*";
  $lang['PNphpBB2_Remove_Notes'] = "The PNphpBB2 tables have been removed.";

  // General
  $lang['PNphpBB2_Running'] = "Running";
  $lang['PNphpBB2_Failed'] = "FAILED";
  $lang['PNphpBB2_ButOK'] = "BUT OK!";
  $lang['PNphpBB2_Completed'] = "COMPLETED";
  $lang['PNphpBB2_Done'] = "Done";
  $lang['PNphpBB2_Aborted'] = "Aborted";
  $lang['PNphpBB2_Cancel'] = "Cancel";
  $lang['PNphpBB2_Progress'] = "Progress";
  $lang['PNphpBB2_Some_Failed'] = "Some queries failed, the statements and errors are listing below:<br />(Some action may be needed to add, edit, or remove tables or records)<br />";
  $lang['PNphpBB2_No_Errors'] = "No errors";
  $lang['PNphpBB2_Results'] = "Results";
  $lang['PNphpBB2_Installing'] = "Installing";
  $lang['PNphpBB2_Updating'] = "Updating";
  $lang['PNphpBB2_Important'] = "*** IMPORTANT ***";
}

// Additional administration links
$lang['Users_aguide'] = "Users Guide";
$lang['Forum_Manual'] = "User Manual";


// PNphpBB2 config options
$lang['pnphpbb2_settings'] = "PNphpBB2 Configuration";
$lang['pnphpbb2_settings_explain'] = "Here you can configure options and settings specific to the PNphpBB2 module.";

$lang['pnphpbb2_options'] = "PNphpBB2 Options/Mods";

$lang['pnphpbb2_quickreply'] = "Use Quick reply";
$lang['pnphpbb2_quickreply_explain'] = "Enable or disable the use of the quick reply feature.";

$lang['pnphpbb2_logo_on'] = "Display PNphpBB2 Logo in forum";
$lang['pnphpbb2_logo_on_explain'] = "Enable the PNphpBB2 in the forum. (If you do not whish to display the PNphpBB2 logo, PLEASE retain the credit information at the bottom of the forum)";

$lang['pnphpbb2_shorturls'] = "Short URL's in posts";
$lang['pnphpbb2_shorturls_explain'] = "Enable or disable the use of the short URL's in posts.";

$lang['pnphpbb2_post_order'] = "Topic post sort order";
$lang['pnphpbb2_post_order_explain'] = "Default order in which post are displayed in while viewing topics.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(You can override this within the forum management section)";

$lang['pnphpbb2_post_confirm'] = "Disable post confirmation";
$lang['pnphpbb2_post_confirm_explain'] = "This will disable the posting confirmation screen for ALL posts. Disabling this will result in the user being taken back to the forum topic and the post that they made.";

$lang['pnphpbb2_allow_full_page'] = "Allow users to minimize/maximize full page view of forum";
$lang['pnphpbb2_allow_full_page_explain'] = "While in the forum, allow users to minimize and maximize forum to full page width outside of the PostNuke theme.";

$lang['pnphpbb2_full_page'] = "Default forum to full page (maximize) view";
$lang['pnphpbb2_full_page_explain'] = "Allows administrator to display forum in either full page view or within the PostNuke theme.";

$lang['pnphpbb2_pn_pm'] = "Use PostNuke's Private messaging system";
$lang['pnphpbb2_pn_pm_explain'] = "This will switch ALL the links to the private messaging system over to the ones used in PostNuke rather than use the forums PM system.";

$lang['pnphpbb2_pn_link'] = "Link to return users back to your PostNuke site";
$lang['pnphpbb2_pn_link_explain'] = "This will be a valid html link that will return your used back to your main site, if they are using a out of PostNuke style/theme.";

$lang['pnphpbb2_pn_text'] = "Text to display for above link";
$lang['pnphpbb2_pn_text_explain'] = "This will be the text for the above link, it can be any text or html code. (Can contain a image link).";

$lang['pnphpbb2_members_online'] = "Disable Who's Online block on forum index";
$lang['pnphpbb2_members_online_explain'] = "This will allow the administrator to disable the Who's Online block at the bottom of the forum index.";

$lang['pnphpbb2_members_online_annon'] = "Hide Who's Online block from anonymous users";
$lang['pnphpbb2_members_online_annon_explain'] = "If not disabled, setting this option will prevent anonymous users from seeing the Who's Online block.";

$lang['pnphpbb2_template_compiler'] = "Use the NEW template compiler";
$lang['pnphpbb2_template_compiler_explain'] = "Use the eXtreme Styles mod by Vjacheslav Trushkin <slava@trushkin.net> </br>This mod is heavily optimized version of phpBB templates system and has some additional features. It compiles and executes files much faster, has cache system that speeds up templates many times, allows to use php in templates and few other new features to style designers. This is a test version and might not work with some mods.";

$lang['pnphpbb2_updated'] = "PNphpBB2 Configuration updated";
$lang['pnphpbb2_click_return_config'] = "Click %sHere%s to return to PNphpBB2 Configuration";

$lang['pnphpbb2_allow_sub_change'] = "Allow users to switch category/sub-forum mode";
$lang['pnphpbb2_allow_sub_change_explain'] = "This will allow you to give your users the option of switching between sub-category, or sub-forum view. If you do not wish to use the sub-category/forum mod simply do not add sub-category/forums to your site.";

$lang['pnphpbb2_index_announce'] = "Display announcements on forum index";
$lang['pnphpbb2_index_announce_explain'] = "This will allow you to display forum announcements on the main forum index.";

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = 'Warning: cache cannot be written.';
$lang['xs_warning_explain'] = 'Check if you have created directory where cache is stored and changed access mode (chmod) to 777 so script could write cache there. If your server is running in safe mode you might consider using "." as filename separator so all cache would be written in same directory (see separator setting below).<br /><br />If cache doesn\'t work on your server for some reason don\'t worry - eXtreme Styles mod increases forum speed many times even without cache.';

$lang['xs_updated'] = 'Configuration updated.';
$lang['xs_updated_explain'] = 'You need to refresh this page before new configuration takes effect. <a href="%s">Click here</a> to refresh page.';

// ACP navigation bar
$lang['Extreme_Styles'] = 'eXtreme Styles';
if(empty($lang['Updates']))
{
	$lang['Updates'] = 'Updates';
}
if(empty($lang['Styles']))
{
	$lang['Styles'] = 'Styles';
}

// Headers
$lang['xs_settings'] = 'eXtreme Styles mod v%s settings';
$lang['xs_settings_cache'] = 'Cache configuration';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Use cache';
$lang['xs_cache_explain'] = 'Cache is saved to disk and it will speed up templates system many times because there would be no need to compile template every time it is shown.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'Cache directory';
$lang['xs_cache_dir_explain'] = 'All cache will be written in that directory (and/or sub directories). Files with same filenames will be overwritten. Do not put "/" before directory name unless directory name is absolute. Absolute means complete path as file is in server hard disk (do not mistake it for absolute URL). Relative means path starting with phpBB directory.';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Absolute path';
$lang['xs_dir_absolute_explain'] = '(like "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Relative path';
$lang['xs_dir_relative_explain'] = 'relative to phpBB forum path (like "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Automatically save cache';
$lang['xs_auto_compile_explain'] = 'This will automatically compile templates if needed and save to cache directory.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Automatically re-compile cache';
$lang['xs_auto_recompile_explain'] = 'This will automatically re-compile cache if original template file was changed.';
// xs_separator
$lang['xs_separator'] = 'Filename separator';
$lang['xs_separator_explain'] = 'If set to "/" then cache will be saved in sub directories by template name (like file "subSilver/admin/page_header.php" would be saved to cache directory as "subSilver/admin/page_header.php"), if set to something else like "." then all cache will be saved to one directory (like file "subSilver/admin/page_header.php" would be saved to cache directory as "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'Extension of cache filenames';
$lang['xs_php_explain'] = 'This is extension of cached files. Files are stored in php format so default extension is "php". Do not include dot';
// xs_def_template
$lang['xs_def_template'] = 'Default template directory';
$lang['xs_def_template_explain'] = 'If tpl file is not found in current template directory (that might happen if you modded phpBB incorrectly) then template system will look for same file in this directory (like if current template is "myTemplate" and script requires file "myTemplate/myfile.tpl" and that file isn\'t there template system will look for that file as "subSilver/myfile.tpl"). Set to empty to disable this feature.';
// xs_check_switches
$lang['xs_check_switches'] = 'Check switches while compiling';
$lang['xs_check_switches_explain'] = 'This feature checks for errors in templates. Turning it off will speed up compilation, but compiler might skip some errors in templates if template has errors.<br /><br />Smart check will check templates for errors and automatically fix all known errors (there are few known typos in different mods). Works little bit slower than simple check.<br /><br />But sometimes template looks properly only when error check is disabled. This happens because of bad html coding - contact whoever wrote tpl file if you want to fix errors.<br /><br />If cache feature is disabled then for faster compilation it is better to turn this off.';
$lang['xs_check_switches_0'] = 'Off';
$lang['xs_check_switches_1'] = 'Smart check';
$lang['xs_check_switches_2'] = 'Simple check';
// xs_use_isset
$lang['xs_use_isset'] = 'Check variables with isset() in compiled code';

// Debug info
$lang['xs_debug_header'] = 'Debug info';
$lang['xs_debug_explain'] = 'This is debug info. Used to find/fix problems when configuring cache.';
$lang['xs_debug_vars'] = 'Template variables';
$lang['xs_debug_tpl_name'] = 'Template filename:';
$lang['xs_debug_cache_filename'] = 'Cache filename:';
$lang['xs_debug_data'] = 'Debug data:';

$lang['xs_check_hdr'] = 'Checking cache for %s';
$lang['xs_check_filename'] = 'Error: invalid filename';
$lang['xs_check_openfile1'] = 'Error: cannot open file "%s". Will try to create directories...';
$lang['xs_check_openfile2'] = 'Error: cannot open file "%s" for the second time. Giving up...';
$lang['xs_check_nodir'] = 'Checking "%s" - no such directory.';
$lang['xs_check_nodir2'] = 'Error: cannot create directory "%s" - you might need to check permissions.';
$lang['xs_check_createddir'] = 'Created directory "%s"';
$lang['xs_check_dir'] = 'Checking "%s" - directory exists.';
$lang['xs_check_ok'] = 'Opened file "%s" for writing. Everything seems to be ok.';

// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = 'Template';
$lang['xs_styles_style'] = 'Style';
$lang['xs_styles_user'] = 'Users';
$lang['xs_styles_options'] = 'Options';
$lang['xs_styles_set_default'] = 'set default';
$lang['xs_styles_no_override'] = 'do not override user settings';
$lang['xs_styles_do_override'] = 'override user settings';
$lang['xs_styles_switch_all'] = 'switch all users to this style';
$lang['xs_styles_switch_all2'] = 'switch all users to:';
$lang['xs_styles_defstyle'] = 'default style';
$lang['xs_styles_available'] = 'Available styles';

// Categories Hierarchies Mod
$lang['Category_attachment'] = "Attached to Category";
$lang['Use_sub_forum'] = "Display the sub-categories as forums";
$lang['Use_sub_forum_explain'] = "Allows administrator to default to sub-forum view or sub-category view (vBulletin-like).";
$lang['Category_desc'] = "Description";
$lang['Hierarchy_setting'] = "Categories Hierarchy settings";
$lang['Category_config_error_fixed'] = "An error in the category setup has been fixed";

// Split Announcements/Stickys
$lang['announce_settings'] = "Announcement Settings";
$lang['enable_announce'] = "Display forum announcements on index";
$lang['enable_announce_explain'] = "This will enable or disable forum announcements on index page.";

$lang['announcement_duration'] = "Announce duration on the index";
$lang['announcement_duration_explain'] = "Number of <strong>days</strong> to display forum announcements on index page.";
$lang['announcement_duration_explain'] .= "<br/>(Entering <b>0 (Zero)</b> will display announcements indefinitely)";

$lang['split_global_announce'] = "Split global announcement";
$lang['split_announce'] = "Split announcement within forums";
$lang['split_sticky'] = "Split sticky within forums";

// Topic & Post sort options
$lang['topic_sort_order'] = "Topic sort order";
$lang['post_sort_order'] = "Post sort order";
$lang['First_Post'] = "First post";
$lang['sorted_default'] = "Board default";

// Replacement Rank image admin
$lang['Rank_image'] = 'Rank Image';
$lang['Rank_image_explain'] = 'Use this to define a small image associated with the rank.';
$lang['Rank_image_explain'] .= '<br/>This is relative to PNphpBB2 root path if you include a path relative to the where the images are located.<br/>(NOTE: If only the image is specified (image.gif), then an attempt will be made to use the image based on the template name, PostNuke theme, and language.)'; 
$lang['Admin_intro'] = 'Thank you for choosing PNphpBB as your forum solution. This screen will give you a quick overview of all the various statistics of your board. You can get back to this page by clicking on the <u>Admin Index</u> link in the left pane. To return to the index of your board, click the PNphpBB logo also in the left pane. The other links on the left hand side of this screen will allow you to control every aspect of your forum experience. Each screen will have instructions on how to use the tools.';

$lang['PNphpBB_Version'] = 'PNphpBB Version';
$lang['phpBB_Version'] = 'phpBB Version';
$lang['PNphpBB_Config'] = 'PNphpBB Config';
$lang['Utility'] = 'Utilities';

// limited post edit time MOD 
$lang['edit_time'] = 'Post Edit time'; 
$lang['edit_time_explain'] = 'The time (in minutes) the user has to edit his/her post. Setting this value to 0, the time is unlimited.'; 

// Enable-Disable theme matching functions
$lang['theme_matching'] = "Enable Theme Matching";
$lang['theme_matching_explain'] = "Enable or disable the use of the theme matching feature. Theme matching will attempt to create a style sheet and a set of cell pics for the current theme if a set is not already available. <br><b>Note:</b> With theme matching disabled the forum will uses default.css and cellpics found in the root of the cellpics directory.";

// Exclude forum from global announcments
$lang['Exclude_global_announce'] = 'Exclude this forum from global announcments';
$lang['Exclude_global_announce_explain'] = 'If this option is selected this forum will be excluded from listing its announcments on the index.';

// Support forum
$lang['Support_forum'] = 'This is a support forum';
$lang['Support_forum_explain'] = 'If this forum will be sued as a support forum, you can choose this option to display a list of user defined status flags on the topic level to indicate the status of the service request. This item can be updated by the administrator or moderator of the forum.';

// Gravatars
$lang['Allow_gravatars'] = "Allow <a href=\"http://www.gravtar.com\">Gravatars</a>";
//
// That's all Folks!
// -------------------------------------------------

?>
