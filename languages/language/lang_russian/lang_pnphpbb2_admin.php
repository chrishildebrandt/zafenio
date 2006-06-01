<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [English]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     update               : Thu March 20 2003
 *     copyright            : (C) 2003 the PNphpBB2 Group
 *     email                : support@pnphpbb.com
 *
 *     $Id: lang_pnphpbb2_admin.php,v 1.5 2003/08/02 10:02:46 bobt Exp $
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
$lang['PNphpBB2_Install'] = "����������� PNphpBB2";
$lang['PNphpBB2_Install_Title'] = "<h4>������������ ������� PNphpBB2 " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Install_Complete'] = "<p><b>�������� ��������� PNphpBB2 ���������.<br /><br />������� " . $lang['Finish_Install'] . " ����� ��������� �� �������� �����������������, ����� ����������� ������ PNphpBB2.<br /><br />������ �� ���������� ������� (PNphpBB2) ��������� �� �������� �����������������.<br /><br />���������� ��������� �������� ������������ ������ ����� ��� ������ ������������ ���. ������� �� ����� PNphpBB2.</b></p>";

// Update
$lang['PNphpBB2_Upgrade'] = "���������� PNphpBB2";
$lang['PNphpBB2_Move_Tables_No'] = "<p><b>������� ��� ���������� � " . $table_prefix . "*. ������� ����������� � " . $old_table_prefix . " ������� ���� �������.</b></p>";
$lang['PNphpBB2_Move_Tables_Yes'] = "<h4>������� ������</h4>";
$lang['PNphpBB2_Move_Complete'] = "<h4>������� ����������� � " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Database_Type'] = "��� DB";
$lang['PNphpBB2_Prev_Version'] = "���������� ������ &nbsp;:: ";
$lang['PNphpBB2_Upgrade_Version'] = "����������� ������ &nbsp;:: ";
$lang['PNphpBB2_Update_Schemas'] = "<h4>���������� ������ ��</h4>";
$lang['PNphpBB2_No_Updates'] =  "<h4>���������� �� ���������</h4>";
$lang['PNphpBB2_Update_Data'] = "<h4>���������� ����������</h4>";
$lang['PNphpBB2_Attach'] = "A������ ���� �������� ";
$lang['PNphpBB2_Updating_Paths'] = "<h4>���������� ������ ������������</h4>";
$lang['PNphpBB2_Delete_Themes'] = "<h4>�������� ������� ������ ���\������</h4>";
$lang['PNphpBB2_Install_Themes'] = "<h4>��������� ����� ��� (PNTheme-1, PNLite-2, subSilver-3)</h4>";
$lang['PNphpBB2_Board_Theme'] = "<h4>��������� ���� �� ��������� - PNTheme</h4>";
$lang['PNphpBB2_User_Theme'] = "<h4>��������� ���� ��� ���� ������������� - PNTheme</h4>";
$lang['PNphpBB2_Clear_Sessions'] = "<h4>C�������� ���� ������ �� ������� ������</h4>";
$lang['PNphpBB2_Cant_SQL'] = "<p>���������� �������� �������, ���������� ����������� ��������� ��������:<br />� PHPBB_QUOTA_LIMITS, �������� QUOTA_LIMIT � INT �� BIGINT.</p>";
$lang['PNphpBB2_Update_Complete'] = "<p><b>���������� PNphpBB2 ���������<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "���� � ��� �������� �����-���� ������ � �������� ���������, ���������� ��������� ��� �������� � �������� ������ �� www.pnphpbb.com ��� ��������� ������.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "���������� ����������� ������, ����� ��������� ��� ��������� � ������ ��������������.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "���� ��� ���������� ��� ��������, ��������� ��� �� �������, ���� �� ������ ��� ������������.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "������� �� ����� PNphpBB2</b></p>";
$lang['PNphpBB2_phpBB_Tables_Found'] = "<h5> ������� phpBB_* ���� ������� � ����� ��. ����� �����";
$lang['PNphpBB2_phpBB_Tables_Found'] .= "����� �� ������ ��� ������ ���� ������. </h5>";
$lang['PNphpBB2_three_options'] = "� ��� ���� ��� (3) �������� ��������.";
$lang['PNphpBB2_option_one'] = "1) �������� ������������ ������ PNphpBB2 .10b, phpBB2pnmod-203,";
$lang['PNphpBB2_option_one'] .= " phpBB2pnmod-203-Attachments, ��� phpBB2pnmod-F.";
$lang['PNphpBB2_option_two'] = "2) �������� ��������� ����� phpBB2 (Version 2.0.1-2.0.4)";
$lang['PNphpBB2_option_three'] = "3) ��������";
$lang['PNphpBB2_Upgrade_Disclaimer'] = "�����! �������, ��� ���� �� �������� ������� 2, ��� ������������ PostNuke ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "����� �������� ��������������  phpBB2";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "</br></br>������ �������� ��� �� ������� backup �� PostNuke � phpBB2 ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "";
$lang['PNphpBB2_bad_version_1'] = "�� ������ ������� ����������, ������ ��� ������� ������� � ��� ������ �� ������ 2.0.1. ���� ������ - 2";
$lang['PNphpBB2_bad_version_2']  = "</br>���������� ��������� ������ ������ ��� ����������.";
$lang['PNphpBB2_bad_version_3'] = "���� ������ �� ��������� � ����������, ������������ ������ -  ";
$lang['PNphpBB2_no_version'] = "���������� �������� ��������� � ������.";
$lang['PNphpBB2_Updating_links'] = "Updating post links";

// Removal
$lang['PNphpBB2_Remove_Prompt'] = "������� PNphpBB2";
$lang['PNphpBB2_Remove_Text'] = "�� ������ ������� PNphpBB2 � ��� ��������� ������� (" . $table_prefix . "*).<br /><br />��� ������ ����� ���������, �� �������� ��� ������ ��� �������?";
$lang['PNphpBB2_Remove_Title'] = "<h4>�������� ������ PNphpBB2 �� " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Remove_Notes'] = "<p><b>������� PNphpBB2 �������. ����� ��������� ������� -��������� �� �������� ����������������� � ������� PNphpBB2 �����.</b></p>";

// General
$lang['PNphpBB2_Running'] = "�����������";
$lang['PNphpBB2_Failed'] = "������";
$lang['PNphpBB2_ButOK'] = "�� ��!";
$lang['PNphpBB2_Completed'] = "���������";
$lang['PNphpBB2_Done'] = "�������";
$lang['PNphpBB2_Aborted'] = "��������";
$lang['PNphpBB2_Cancel'] = "��������";
$lang['PNphpBB2_Progress'] = "<h4>��������</h4>";
$lang['PNphpBB2_Some_Failed'] = "<p><b>��������� ��������� ��������� �������, ��������� �������� ����:<br />(�������� ��� �������� � ������ ��������, �������� ��� ������� ��������� ������)</b></p><br />";
$lang['PNphpBB2_No_Errors'] = "<h4>��� ������</h4>";
$lang['PNphpBB2_Results'] = "<h4>���������</h4>";
$lang['PNphpBB2_Installing'] = "���������";
$lang['PNphpBB2_Updating'] = "U����������";
$lang['PNphpBB2_Important'] = "�����";

// Additional administration links
$lang['Users_aguide'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/attach_user_guide.html\" target=\"_blank\">����������� ������������</a>";
$lang['Forum_Manual'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/phpBB_2_0_Users_Guide.html\" target=\"_blank\">����������</a>";

// PNphpBB2 config options
$lang['pnphpbb2_settings'] = "������������ PNphpBB2";
$lang['pnphpbb2_settings_explain'] = "����� �� ������ ������ ��������� ����������� ��� ������ PNphpBB2";
$lang['pnphpbb2_options'] = "PNphpBB2 �����\����";
$lang['pnphpbb2_quickreply'] = "������������ ������� �����";
$lang['pnphpbb2_quickreply_explain'] = "���������\��������� ������� �������� ������.";
$lang['pnphpbb2_logo_on'] = "���������� PNphpBB2 ����� ������";
$lang['pnphpbb2_logo_on_explain'] = "���\���� ���� ������� ������ (���� �� �� ������� ������������ ���� � ����� �����, ���������� �������� ������� Credits ����� ��������)";
$lang['pnphpbb2_shorturls'] = "�������� URL � ����������";
$lang['pnphpbb2_shorturls_explain'] = "���\���� �������� URL.";
$lang['pnphpbb2_post_order'] = "�������� ���������� ��������� � �������";
$lang['pnphpbb2_post_order_explain'] = "������� ������ ���������� ��� �� ���������.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(�� ������ �������������� ���� �������� � ���������� �o������)";
$lang['pnphpbb2_post_confirm'] = "��������� �������������";
$lang['pnphpbb2_post_confirm_explain'] = "����� ����� ��������� ������������� ������� ���������. � ���������� ����������, ������������ ����� ����� �������� ��������� ����� ��������� �� �������� ����.";
$lang['pnphpbb2_allow_full_page'] = "��������� ��������������\���������������";
$lang['pnphpbb2_allow_full_page_explain'] = "������������ ����� ������������� ����� �� ��������� header � footer Postnuke";
$lang['pnphpbb2_full_page'] = "Default forum to full page (maximize) view";
$lang['pnphpbb2_full_page_explain'] = "Allows administrator to display forum in either full page view or within the Postnuke theme.";
$lang['pnphpbb2_pn_pm'] = "������������ ������� ������ ��������� PostNuke";
$lang['pnphpbb2_pn_pm_explain'] = "������������ ������� ������ ��������� PostNuke ������ ������� �� ������.";
$lang['pnphpbb2_pn_link'] = "������ ����� ���������� ������������� �� ����";
$lang['pnphpbb2_pn_link_explain'] = "This will be a valid html link that will return your used back to your main site, if they are using a out of Postnuke style/theme.";
$lang['pnphpbb2_pn_text'] = "����� ������";
$lang['pnphpbb2_pn_text_explain'] = "This will be the text for the above link, it can be any text or html code. (Can contain a image link).";
$lang['pnphpbb2_members_online'] = "��������� ���� ��� ������ �� ������ �� ������� �������� ������";
$lang['pnphpbb2_members_online_explain'] = "��������� �������������� ��������� ���� ��� ����� �� ������, �� ������� �������� ������.";
$lang['pnphpbb2_members_online_annon'] = "������� ���� ��� ������ �� ������ �� ��������";
$lang['pnphpbb2_members_online_annon_explain'] = "";
$lang['pnphpbb2_template_compiler'] = "������������ ����� ���������� ��������";
$lang['pnphpbb2_template_compiler_explain'] = "Use the eXtreme Styles mod by Vjacheslav Trushkin <slava@trushkin.net> </br>This mod is heavily optimized version of phpBB templates system and has some additional features. It compiles and executes files much faster, has cache system that speeds up templates many times, allows to use php in templates and few other new features to style designers. This is a test version and might not work with some mods.";
$lang['pnphpbb2_updated'] = "������������ PNphpBB2 ���������";
$lang['pnphpbb2_click_return_config'] = "%s������� ���� ����� ��������� � ������������ PNphpBB2%s";
$lang['pnphpbb2_allow_sub_change'] = "��������� ������������� ����������� ������ ����������� ������� (���������\���-������)";
$lang['pnphpbb2_allow_sub_change_explain'] = "This will allow you to give your users the option of switching between sub-category, or sub-forum view. If you do not wish to use the sub-category/forum mod simply do not add sub-category/forums to your site.";
$lang['pnphpbb2_index_announce'] = "���������� ���������� �� ������� �������� ������";
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
$lang['Category_attachment'] = "������������ � ���������";
$lang['Use_sub_forum'] = "���������� ���-��������� ��� ������";
$lang['Use_sub_forum_explain'] = "��������� ��������������� ����������� ����� �������� ����������� ���-������� ��� ���-��������� (��� � vBulletin board).";
$lang['Category_desc'] = "��������";
$lang['Hierarchy_setting'] = "��������� �������� ���������";
$lang['Category_config_error_fixed'] = "������ � ���������� ���������  ����������";

// Split Announcements/Stickys
$lang['announce_settings'] = "��������� ����������";
$lang['enable_announce'] = "���������� ���������� �� ������� �������� ������";
$lang['enable_announce_explain'] = "���\���� ����������� ���������� �� ������� �������� �������.";
$lang['forum_announce_exclude'] = "<u>�� ����������</u> ���������� ��� ��������� ������� (CTRL+LEFT CLICK ����� ������� ���������)";
//$lang['forum_announce_exclude_explain'] = "This will enable or disable forum announcements on index page.";
$lang['announcement_duration'] = "������������ ���������� �� ������� �������� �������";
$lang['announcement_duration_explain'] = "����� <strong>����</strong> � ������� ������� ���������� ����� ������������ �� ������� ��������� �������.";
$lang['announcement_duration_explain'] .= "<br/>(������� <b>0 (����)</b> ����� ���������� ������������ ������)";
$lang['split_global_announce'] = "�������� ���������� ����������";
$lang['split_announce'] = "�������� ���������� �� �������";
$lang['split_sticky'] = "�������� ������ ���� �� �������";

// Topic & Post sort options
$lang['topic_sort_order'] = "������� ���������� ���";
$lang['post_sort_order'] = "������� ���������� ���������";
$lang['First_Post'] = "������ ���������";
$lang['sorted_default'] = "�� ���������";
// Replacement Rank image admin
$lang['Rank_image'] = '����������� ����������� � ������';
$lang['Rank_image_explain'] = '����������� ��������� ����������� ��� ����������� ������ ������������.';
$lang['Rank_image_explain'] .= '<br/>���� ������������ ����� PNphpBB2<br/>(����������: ���� �� ������� ������ ��� ����������� (image.gif), ����� ������������ ����������� �� ����� � ������ ������, ���� PostNuke ��� ����� � ��������� �������.)';
//
// That's all Folks!
// -------------------------------------------------

?>
