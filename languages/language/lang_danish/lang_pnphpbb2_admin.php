<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [English]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     update               : Thu May 17 2003
 *     copyright            : (C) 2003 the PNphpBB2 Group
 *     email                : support@pnphpbb.com
 *
 *     $Id: lang_pnphpbb2_admin.php,v 1.6 2003/08/07 19:35:09 carls Exp $
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

// Installation
$lang['PNphpBB2_Install'] = "PNphpBB2 Installation";
$lang['PNphpBB2_Install_Title'] = "<h4>Installing PNphpBB2 tables to " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Install_Complete'] = "<p><b>PNphpBB2 basic installation is now complete.<br /><br />Click on the " . $lang['Finish_Install'] . " to return to the PN module administration page, and activate PNphpBB2.<br /><br />Once activated you can access the forum administration page through the PN administration page (PNphpBB2) or with the link at the bottom of the forum.<br /><br />Please be sure to check the General Configuration details and make any required changes. Thank you for choosing PNphpBB2.</b></p>";

// Update
$lang['PNphpBB2_Upgrade'] = "PNphpBB2 Update";
$lang['PNphpBB2_Move_Tables_No'] = "<p><b>Tables currently exist in " . $table_prefix . "*. The tables located in " . $old_table_prefix . " can not be moved.</b></p>";
$lang['PNphpBB2_Move_Tables_Yes'] = "<h4>Moving tables to new location</h4>";
$lang['PNphpBB2_Move_Complete'] = "<h4>Move complete to " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Database_Type'] = "Database type";
$lang['PNphpBB2_Prev_Version'] = "Previous version &nbsp;:: ";
$lang['PNphpBB2_Upgrade_Version'] = "Updated version &nbsp;:: ";
$lang['PNphpBB2_Update_Schemas'] = "<h4>Updating database schema</h4>";
$lang['PNphpBB2_No_Updates'] =  "<h4>No updates required</h4>";
$lang['PNphpBB2_Update_Data'] = "<h4>Updating data</h4>";
$lang['PNphpBB2_Attach'] = "Attachment Mod Version ";
$lang['PNphpBB2_Updating_Paths'] = "<h4>Updating config table</h4>";
$lang['PNphpBB2_Delete_Themes'] = "<h4>Deleting old themes/style records</h4>";
$lang['PNphpBB2_Install_Themes'] = "<h4>Installing new themes (PNTheme-1, PNLite-2, subSilver-3)</h4>";
$lang['PNphpBB2_Board_Theme'] = "<h4>Setting board default theme to PNTheme</h4>";
$lang['PNphpBB2_User_Theme'] = "<h4>Setting theme for all users to PNTheme</h4>";
$lang['PNphpBB2_Clear_Sessions'] = "<h4>Clearing ALL sessions from sessions table</h4>";
$lang['PNphpBB2_Cant_SQL'] = "<p>CANT CHANGE MSSQL-TABLE. PLEASE DO THE FOLLOWING MANUALLY:<br />IN PHPBB_QUOTA_LIMITS, CHANGE QUOTA_LIMIT TO FROM INT TO BIGINT.</p>";
$lang['PNphpBB2_Update_Complete'] = "<p><b>PNphpBB2 update is now complete.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "If you encounter any errors during this process, Please print this page then visit the forums at www.pnphpbb.com for support.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Be sure to activate this module before continuing, then review all config settings in the administration page.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "If the attachment mod was installed during this process, be sure to enable it if you intend on using it.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Thank you for choosing PNphpBB2</b></p>";
$lang['PNphpBB2_phpBB_Tables_Found'] = "<h5>phpBB_* tables have been found in your PostNuke database. it is VERY important";
$lang['PNphpBB2_phpBB_Tables_Found'] .= " that you understand what this script is about to do. </h5>";
$lang['PNphpBB2_three_options'] = "You have three (3) options at this point.";
$lang['PNphpBB2_option_one'] = "1) Upgrade from a previous version of PNphpBB2 .10b, phpBB2pnmod-203,";
$lang['PNphpBB2_option_one'] .= " phpBB2pnmod-203-Attachments, or phpBB2pnmod-F.";
$lang['PNphpBB2_option_two'] = "2) Upgrade from a stand alone version of phpBB2 (Version 2.0.1-2.0.4)";
$lang['PNphpBB2_option_three'] = "3) Abort conversion";
$lang['PNphpBB2_Upgrade_Disclaimer'] = "PLEASE! Understand that if you choose option two (2), any and ALL users ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "will be deleted from your Postnuke database and replaced with the user ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "information from the phpBB2 tables</br></br>Once this is done there is NO WAY to turn back from this upgrade, so ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "be very sure you have a recent backup of your Postnuke and phpBB2 databases.";
$lang['PNphpBB2_bad_version_1'] = "You can only upgrade if you are using version 2.0.1 or above. Your version is 2";
$lang['PNphpBB2_bad_version_2']  = "</br>Please check version information before attempting to continue.";
$lang['PNphpBB2_bad_version_3'] = "Your version does not require upgrading, The version found in the database is ";
$lang['PNphpBB2_no_version'] = "Could not obtain version information.";
$lang['PNphpBB2_Updating_links'] = "Updating post links";

// Removal
$lang['PNphpBB2_Remove_Prompt'] = "Remove PNphpBB2";
$lang['PNphpBB2_Remove_Text'] = "Your about to remove PNphpBB2 and all its associated tables from PostNuke (" . $table_prefix . "*).<br /><br />All data will be lost, are you sure you wish to do this?";
$lang['PNphpBB2_Remove_Title'] = "<h4>Removing PNphpBB2 tables from " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Remove_Notes'] = "<p><b>The PNphpBB2 tables have been removed. To complete the removal process, return to the module administration page and remove PNphpBB2 again.</b></p>";

// General
$lang['PNphpBB2_Running'] = "Running";
$lang['PNphpBB2_Failed'] = "FAILED";
$lang['PNphpBB2_ButOK'] = "BUT OK!";
$lang['PNphpBB2_Completed'] = "COMPLETED";
$lang['PNphpBB2_Done'] = "Done";
$lang['PNphpBB2_Aborted'] = "Aborted";
$lang['PNphpBB2_Cancel'] = "Cancel";
$lang['PNphpBB2_Progress'] = "<h4>Progress</h4>";
$lang['PNphpBB2_Some_Failed'] = "<p><b>Some queries failed, the statements and errors are listing below:<br />(Some action may be needed to add, edit, or remove tables or records)</b></p><br />";
$lang['PNphpBB2_No_Errors'] = "<h4>No errors</h4>";
$lang['PNphpBB2_Results'] = "<h4>Results</h4>";
$lang['PNphpBB2_Installing'] = "Installing";
$lang['PNphpBB2_Updating'] = "Updating";
$lang['PNphpBB2_Important'] = "IMPORTANT";

// Additional administration links
$lang['Users_aguide'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/attach_user_guide.html\" target=\"_blank\">Users Guide</a>";
$lang['Forum_Manual'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/PNphpBB2_Users_Guide.html\" target=\"_blank\">User Manual</a>";


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

$lang['pnphpbb2_post_order'] = "Forum post sort order";
$lang['pnphpbb2_post_order_explain'] = "Default order in which post are displayed in while viewing topics.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(You can override this within the forum management section)";

$lang['pnphpbb2_post_confirm'] = "Disable post confirmation";
$lang['pnphpbb2_post_confirm_explain'] = "This will disable the posting confirmation screen for ALL posts. Disabling this will result in the user being taken back to the forum topic and the post that they made.";

$lang['pnphpbb2_allow_full_page'] = "Allow users to minimize/maximize full page view of forum";
$lang['pnphpbb2_allow_full_page_explain'] = "While in the forum, allow users to minimize and maximize forum to full page width outside of the Postnuke theme.";

$lang['pnphpbb2_full_page'] = "Default forum to full page (maximize) view";
$lang['pnphpbb2_full_page_explain'] = "Allows administrator to display forum in either full page view or within the Postnuke theme.";

$lang['pnphpbb2_pn_pm'] = "Use Postnuke's Private messaging system";
$lang['pnphpbb2_pn_pm_explain'] = "This will switch ALL the links to the private messaging system over to the ones used in Postnuke rather than use the fourms PM system.";

$lang['pnphpbb2_pn_link'] = "Link to return users back to your Postnuke site";
$lang['pnphpbb2_pn_link_explain'] = "This will be a valid html link that will return your used back to your main site, if they are using a out of Postnuke style/theme.";

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

// Categories Hierarchie Mod
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

$lang['forum_announce_exclude'] = "Do <u>NOT</u> show announcements for following forums (CTRL+LEFT CLICK sets/clears selections)";
//$lang['forum_announce_exclude_explain'] = "This will enable or disable forum announcements on index page.";

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
$lang['Rank_image_explain'] .= '<br/>This is relative to PNphpBB2 root path if you include a path relative to the where the images are located.<br/>(NOTE: If only the image is specified (image.gif), then an attempt will be made to use the image based on the template name, Postnuke theme, and language.)'; 

$lang['PNphpBB_Version'] = 'PNphpBB2 Version';
$lang['phpBB_Version'] = 'phpBB Version';
// limited post edit time MOD 
$lang['edit_time'] = 'Post Edit time'; 
$lang['edit_time_explain'] = 'The time (in minutes) the user has to edit his/her post. Setting this value to 0, the time is unlimited.'; 

// Enable-Disable theme matching functions
$lang['theme_matching'] = "Aktiver tema matching";
$lang['theme_matching_explain'] = "Aktiver eller deaktiver tema matching mulighede. Tema matching vil pr�ve p� at oprette et style sheet og et s�t cell pics for det nuv�rende tema hvis dette ikke allerede findes. <br><b>Bem�rk:</b> Hvis tema matching er deaktiveret vil forummet bruge default.css og cellpics fra roden af cellpics folderen.";

// Exclude forum from global announcments
$lang['Exclude_global_announce'] = 'Exclude this forum from global announcments';
$lang['Exclude_global_announce_explain'] = 'If this option is selected this forum will be excluded from listing its announcments on the index.';

// Support forum
$lang['Support_forum'] = 'This is a support forum';
$lang['Support_forum_explain'] = 'If this forum will be sued as a support forum, you can choose this option to display a list of user defined status flags on the topic level to indicate the status of the service request. This item can be updated by the administrator or moderator of the forum.';

//
// That's all Folks!
// -------------------------------------------------
?>