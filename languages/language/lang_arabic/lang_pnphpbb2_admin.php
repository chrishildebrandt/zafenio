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
  $lang['PNphpBB2_Install'] = "����� ��PNphpBB2 ";
  $lang['PNphpBB2_Installed'] = "�� PNphpBB2 ����� ����";
  $lang['PNphpBB2_Install_Title'] = "����� ����� �� PNphpBB2 ��� %s*";
  $lang['PNphpBB2_Install_Complete']  = "<b>��� �� ������� ������� ��PNphpBB2 </b><br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "���� ���  " . $lang['Finish_Install'] . " ������ ��� ���� ������� �������� �� ������ ��� �� ����� �� PNphpBB2.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "������� ������ ��� ���� ������� ��������� �� ���� ���� ������� �� ������ �� �� ���� ������ ������� �� ���� �������<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "���� ������ �� ��������� ������ ��������� ��� ��������� ���� ��������� �� PNphpBB2.</b>";
  $lang['Populate_DB_phpBB'] = "����� ������� �������� �������� ����������";
  $lang['Populate_DB_PNphpBB'] = "����� ����� �� PNphpBB �������� ��������� �������";
  $lang['Populate_DB_Admin'] = "����� ������� ������ �� �������";
  $lang['AutoTheme_Support'] = "���� ���� ��� ������ ������ ���� ������  AutoTheme <br>���� ����� ������ ��� ����� �� PNphpBB ��� ��� ������ �� AutoTheme.</br> ���� ������� ��� ����� �������� ��� �������� ��� ������ ������� / �������/ ������� / ������� ��� �� ����� ������� ����� ��� ��� �������<br><br>���� ��<br> PNphpBB "; 

  // Write permitions for styles and cellpics
  $lang['Write_Perm_Desc'] = "��� ������ �� ���� ���� �������� ������ ����� �� ��������� ��� ��������";
  $lang['Write_Perm_1'] = "���� �������� ������ ����";
  $lang['Write_Perm_2'] = "��� �� ���� �������� ������ �� ������ ������ modules/PNphpBB2.";
  $lang['Write_Perm_3'] = "./modules/PNphpBB2/templates/PNTheme/styles ���� �������";
  $lang['Write_Perm_4'] = "./modules/PNphpBB2/templates/PNTheme/styles ��� ���� �������";
  $lang['Write_Perm_5'] = "./modules/PNphpBB2/templates/PNTheme/cellpics ���� �������";
  $lang['Write_Perm_6'] = "./modules/PNphpBB2/templates/PNTheme/cellpics ��� ���� �������";
  $lang['Check_Continue'] = "�������";
  $lang['Re_Check'] = "����� ������";  
  $lang['Write_Perm_Correct'] = "�������� ������� ��� �� ���� ����� ������� �� ���� �� PNphpBB.";
  $lang['Location_Correct'] = "��� �� ���� ��PNphpBB2 �� ������ PNphpBB2 ��� ����� modules.";
  $lang['Current_Location'] = "��� ��� ����� ��: ";
  $lang['Write_Perm_Good'] = "�� ��� ���� ���� ... ���� ����� ���  <u>�������</u>.";
  $lang['Please_Correct'] = "���� ����� ������� ��� �� ����� ��� <u>����� ������</u>.";

  // Update
  $lang['PNphpBB2_Upgrade'] = "����� ��PNphpBB2 ";
  $lang['PNphpBB2_Move_Tables_No'] = "������� ������ ����� ��  %s*.<br /><br />������� %s* ������ �����.";
  $lang['PNphpBB2_Move_Tables_Yes'] = "��� ������� ��� ������ ������";
  $lang['PNphpBB2_Delete_Users'] = "����� ������� �� ������ ���� �������� ��������";
  $lang['PNphpBB2_Delete_Groups'] = "��� ����� ������� �� ���� ������� �������";
  $lang['PNphpBB2_Populate_Users'] = "����� ����� ������� ���������� �� ������ ���� �������� ����� �� phpBB ";
  $lang['PNphpBB2_Database_Type'] = "��� ����� ��������";
  $lang['PNphpBB2_Update_phpBB'] = "����� �����  �� phpBB ��� %s ��� %s";
  $lang['PNphpBB2_Update_PNphpBB'] = "����� ����� �� PNphpBB ��� %s ��� %s";
  $lang['PNphpBB2_Update_Attach'] = "����� ������ �������� �� ������� %s ��� %s";
  $lang['PNphpBB2_Install_PNphpBB'] = "������ ������� ������� ������ �������� ������ ��� PNphpBB %s ";
  $lang['PNphpBB2_Optimize_Analyze'] = '����� �������';
  $lang['PNphpBB2_Update_Schemas'] = "����� ����� ��������";
  $lang['PNphpBB2_No_Updates'] =  "������ ������� ������";
  $lang['PNphpBB2_Update_Data'] = "����� ��������";
  $lang['PNphpBB2_Attach'] = "����� ������ �������� ";
  $lang['PNphpBB2_Updating_Paths'] = "����� ���� ��������� config table";
  $lang['PNphpBB2_Delete_Themes'] = "��� ������� ������� � ����� ������� themes/style ";
  $lang['PNphpBB2_Install_Themes'] = "����� ������� ������ (PNTheme)";
  $lang['PNphpBB2_Board_Theme'] = "����� ������� ��������� ���� ���� ��  PNTheme";
  $lang['PNphpBB2_User_Theme'] = "����� ������� ��������� ��� ������� ��� PNTheme";
  $lang['PNphpBB2_Clear_Sessions'] = "��� ���� ������� �������� ������� sessions  �� ����� �� sessions ";
  $lang['PNphpBB2_Cant_SQL'] = "CAN'T CHANGE MSSQL-TABLE. PLEASE DO THE FOLLOWING MANUALLY:<br />IN PHPBB_QUOTA_LIMITS, CHANGE QUOTA_LIMIT TO FROM INT TO BIGINT.</p>";
  $lang['PNphpBB2_Update_Complete'] = "��� ����� ����� �� PNphpBB2 ";
  $lang['PNphpBB2_Update_Complete'] .= "��� ���� �� ����� ���� ��� ������� ���� ����� ���� ������� ��� �� ����� www.pnphp.com �� www.fayez2.com����� ��������� .<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "���� �� ��� �� ���� ��� �������� ������ ��� �������� ��� �� ������ �� ��������� �� ���� �������<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "��� ��� ������ �������� ���� ��� ������� ����� �� ����� ��� ����� �� ��������.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "<b>���� ��������� PNphpBB!</b>";
  $lang['PNphpBB2_phpBB_Tables_Found'] = "��� ��� �������� �� ����� ��phpBB_* ������ ����� �� ����� ������ ������ ���� ��� �� ������� ";
  $lang['PNphpBB2_phpBB_Tables_Found'] .= " �� ���� ������� ����� ��� ��������.";
  $lang['PNphpBB2_three_options'] = "���� ����� ������ �� ��� ������";
  $lang['PNphpBB2_option_one'] = "1. ������� �� ������� ������ �� �� PNphpBB2 �� phpBB2pnmod";
  $lang['PNphpBB2_option_two'] = "2. ������� �� ������� ������� ��  phpBB ( 2.0.x) ��� PNphpBB2";
  $lang['PNphpBB2_option_three'] = "3. ��� ����� ���� �� PNphpBB2";
  $lang['PNphpBB2_option_four'] = "3. ����� �������";
  $lang['PNphpBB2_Upgrade_Disclaimer'] = "���� ������  <font color=\"red\"><b>��������� �������</b></font><br /><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>������ ������ ������ </b> ����� �� ������� �� ����� �������� ������� ������ ������� ���� ������ ������ ������� ��������� �� ����� �� phpBB2 </br><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>������ ������ ������</b> ����� ���� ����� �� �� PNphpBB2 ������ ����� ��phpBB_* ������� �������� �� ����� ������ ������ ����</br></br>";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "����� �� ��� ��� �� ���� ���� �� ���� �� ��� ������� ����� �� ���� ����� �� ��� �� ��� ���� ���� �������� �� ����� �������� ������ �������� PostNuke � phpBB2 ";
  $lang['PNphpBB2_bad_version']  = "����� �� �������<br /><br />��� ������� ���� ��� phpBB ������� �� ������� 2.0.1 �� ����<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "����� ��� ���� ��� ��� ����� ����� phpBB 2.1.x(2.2) <br /><br />";
  $lang['PNphpBB2_bad_version'] .= "������� ������� ���� ����� ��������: ";
  $lang['PNphpBB2_no_version'] = "�� ����� �������� ����� ������� �������";
  $lang['PNphpBB2_Updating_links'] = "����� ����� ���������";

  // Removal
  $lang['PNphpBB2_Remove_Prompt'] = "�����  PNphpBB2";
  $lang['PNphpBB2_Removed'] = "��� ����� ��PNphpBB2 ";
  $lang['PNphpBB2_Remove_Text'] = "��� ��� ��� ����� �� PNphpBB2 ����� ������ ��  PostNuke (%s*).<br /><br />����� ���� ��������� �������� ��! �� ��� ����� �� ��߿";
  $lang['PNphpBB2_Remove_Title'] = "����� ����� �� PNphpBB2 �� %s*";
  $lang['PNphpBB2_Remove_Notes'] = "��� ����� ���� ����� ��The PNphpBB2 ";

  // General
  $lang['PNphpBB2_Running'] = "����";
  $lang['PNphpBB2_Failed'] = "���";
  $lang['PNphpBB2_ButOK'] = "��� ... ���!";
  $lang['PNphpBB2_Completed'] = "�����";
  $lang['PNphpBB2_Done'] = "��";
  $lang['PNphpBB2_Aborted'] = "����� �������";
  $lang['PNphpBB2_Cancel'] = "�����";
  $lang['PNphpBB2_Progress'] = "������";
  $lang['PNphpBB2_Some_Failed'] = "���� ��� �������� �� ����� �������ʡ ������ ������� ������� �� ��� ���: <br />�� ����� ��� ���ݡ ���ѡ ���� ��� ������� �� ��������<br />";
  $lang['PNphpBB2_No_Errors'] = "������ �����";
  $lang['PNphpBB2_Results'] = "�������";
  $lang['PNphpBB2_Installing'] = "��� �������";
  $lang['PNphpBB2_Updating'] = "��� �������";
  $lang['PNphpBB2_Important'] = "***��� ��� ***";
}

// Additional administration links
$lang['Users_aguide'] = "���� ��������";
$lang['Forum_Manual'] = "���� �������";


// PNphpBB2 config options
$lang['pnphpbb2_settings'] = "������� �� PNphpBB2";
$lang['pnphpbb2_settings_explain'] = "�� ��� ������ ����� �������� ���������� ������ ��������� ������ PNphpBB2";

$lang['pnphpbb2_options'] = "������� �� PNphpBB2 ��������";

$lang['pnphpbb2_quickreply'] = "���� ������ ���� ������";
$lang['pnphpbb2_quickreply_explain'] = "������ ����� �� ����� ����� ���� ������";

$lang['pnphpbb2_logo_on'] = "���� ����� ������ � PNphpBB2 �� �������";
$lang['pnphpbb2_logo_on_explain'] = "��� ��� ������ ������ ����� ����� ������ ����� ��� �� ���� ������";

$lang['pnphpbb2_shorturls'] = "������ �������� �������� �� ���������";
$lang['pnphpbb2_shorturls_explain'] = "����� �� ����� ������� ����� �������� �������� �� ���������";

$lang['pnphpbb2_post_order'] = "����� ����� ��������� �� �������";
$lang['pnphpbb2_post_order_explain'] = "������� ��������� ����� ��� ����� ���� ���������";
$lang['pnphpbb2_post_order_explain'] .= "<br>������ ���� ��� ������ �� ���� ��� ����� �������";

$lang['pnphpbb2_post_confirm'] = "����� ����� ����� �������";
$lang['pnphpbb2_post_confirm_explain'] = "���� ������� ������ ����� ���� ����� ���������.����� ��� ����� ����� ������ ��� ������� ���� ���� ��� ��� ����� �������� ������.";

$lang['pnphpbb2_allow_full_page'] = "���� ������� ������ ������ ����� ��� �������";
$lang['pnphpbb2_allow_full_page_explain'] = "�� ���� ������� ������ ������ ������� ������ �� ����� ������� ���� ���� ������ ����";

$lang['pnphpbb2_full_page'] = "���� ������� ����� ���� �������";
$lang['pnphpbb2_full_page_explain'] = "���� ������� ������ ������ ������ ��� ���� ����� ��������� ���� ������� ����� ���� ���� ���� ���� ������ ����";

$lang['pnphpbb2_pn_pm'] = "������ ���� ������ ���� ������� ������";
$lang['pnphpbb2_pn_pm_explain'] = "��� ������� ����� ������� ����� ������� ������ ����� ������� ���� ���� �� ���� ������� ������ ������ �������";

$lang['pnphpbb2_pn_link'] = "���� ����� ���������� ��� ����� ������";
$lang['pnphpbb2_pn_link_explain'] = "���� ������ ���� ����� ���������� ��� ������ ������� �� ���� ���� ������� �� ������ ����� ������";

$lang['pnphpbb2_pn_text'] = "���� ���� ����� ��� ������ �����";
$lang['pnphpbb2_pn_text_explain'] = "����� ��� �� ���� ������� ������ ������� ��� ������ �� ���� ��� ���� ������ �� ��� ���� �����";

$lang['pnphpbb2_members_online'] = "����� ����� �� ���������� �� ������ �������� �������";
$lang['pnphpbb2_members_online_explain'] = "��� ������ ����� ������� �� ����� ����� �� ���������� ���� ������ �������� �������";

$lang['pnphpbb2_members_online_annon'] = "����� ����� �� ���������� �� ������ ����� ������";
$lang['pnphpbb2_members_online_annon_explain'] = "��� �� ��� ������ ��� ������� �������� ��� ����� ������� �� ����� ������";

$lang['pnphpbb2_template_compiler'] = "������ ����� ������� ������";
$lang['pnphpbb2_template_compiler_explain'] = "������ ������ eXtreme Styles mod  </br>��� �������� ���� ��� ����� ������ ���� ���� ������� �� �� phpBB ��� ��� ���� ������ �� �������� ������. ��� ��� ������ ������ ������ ������� ����� ����� ��� ����� ���� ��� ������ ����� ������� ���� ����� ����� �������� ���� ��� �� �� ������� ������ �� ��������. ���� ������ �� ��� �� ����� ������ ��� ������ ���� �� ��� ������� �� ��������";

$lang['pnphpbb2_updated'] = "�� ����� ������� ��PNphpBB2 ";
$lang['PNphpBB2_Upgrade'] = "������� ��PNphpBB2 ";
$lang['pnphpbb2_click_return_config'] = "����  %s��� %s ������ ��� ������� ��PNphpBB2";

$lang['pnphpbb2_allow_sub_change'] = "���� ������� ������ ���� �������/ ������� ������";
$lang['pnphpbb2_allow_sub_change_explain'] = "��� ������� ����� ������� �������� �� ���� ������ ����� ��������� �� ���������� ������� ��� ��� ������ �� ������ ��� ������� ���� ����� ������ ������ �� ������� ����� �� �����";

$lang['pnphpbb2_index_announce'] = "���� ��������� ��� ������ ��������";
$lang['pnphpbb2_index_announce_explain'] = "����� ��� ������� ���� ������� ������� ��� ������ �������� �������";

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = '����� : ������ ����� �����.';
$lang['xs_warning_explain'] = '���� �� ��� �� ����� ����� ����� ���� ���� ���� ��� ��� �� ������ ������ ���� �� ���� ���  (chmod) to 777 ���� ���� �������� ������� ����. ��� ��� ������� ���� �� ������ ����� ��� ������� �� ���� ������ �� ���� ���� ����� ���  "." �� ������� �������<br /><br />��� �� ���� ����� ��� ������� ��� ���� ��� eXtreme Styles mod ������ ����� ���� ������� ���� ��� ��� ���� �����';

$lang['xs_updated'] = '�� ����� ���������';
$lang['xs_updated_explain'] = '����� ��� �� ���� ��� ������ ��� �� ���� ��������� ������� ��� �������. <a href="%s">���� ���</a> ������ ����� ������.';

// ACP navigation bar
$lang['Extreme_Styles'] = '����� eXtreme ';
if(empty($lang['Updates']))
{

}
if(empty($lang['Styles']))
{

}

// Headers
$lang['xs_settings'] = '������� ������ eXtreme Styles  v%s ';
$lang['xs_settings_cache'] = '������� �����';

// Options
// xs_use_cache
$lang['xs_use_cache'] = '������ �����';
$lang['xs_cache_explain'] = '����� ����� �� ����� ������� �� ����� ���� ������� ���� �� ���� ���� �� ��� ������� ������� �� ��� ���� ����.';
// xs_cache_dir
$lang['xs_cache_dir'] = '���� �����';
$lang['xs_cache_dir_explain'] = '���� ����� �� ����� ��� ��� ������ � / �� �������� �������. ������� ����� ������ ��� ����� ��� ���� �����. ������  "/" ��� ��� ������ ��� ��� ��� ��� ������ ������ �����. ������ ���� ������ ������ ���� ��� ����� ����� �� ������� ���� �� ������ ���� ���� ����� ������ ������. ��� ������ ����� ������ ������ �� ���� phpBB ';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = '������ ������';
$lang['xs_dir_absolute_explain'] = '(��� "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = '������ ������';
$lang['xs_dir_relative_explain'] = '������ ������� ����� ����� ��phpBB  (��� "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = '��� ����� �������';
$lang['xs_auto_compile_explain'] = '����� ��� ������� ���� ������� �������� ������� ��� ����� ����� � ������� �� ���� �����';
// xs_auto_recompile
$lang['xs_auto_recompile'] = '�� ������ ������ ����� �������';
$lang['xs_auto_recompile_explain'] = '����� ��� ������� ������ ������ ����� ������� ��� �� ����� ��� ������ ������';
// xs_separator
$lang['xs_separator'] = '����� ��� �����';
$lang['xs_separator_explain'] = '��� ������� �� "/" ��� ���� ����� �� ���� ���� ���� ������ (���� "subSilver/admin/page_header.php" ����� ��� ���� ����� �  "subSilver/admin/page_header.php"),���� ����� ��� ��� ��� ��� "." ��� ����� ����� ��� ���� ���� (���� "subSilver/admin/page_header.php" ����� ��� ���� ����� � "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = '������ ��� �����';
$lang['xs_php_explain'] = '��� �� ������ ��� ����. ������� ���� ��� ��� php ������ ������.';
// xs_def_template
$lang['xs_def_template'] = '���� ������ ���������';
$lang['xs_def_template_explain'] = '��� �� ��� ��� ��tpl ������ �� ���� ������ ������ ���� �� ���� ����� ��� ����� �������� ������ ����� ��� ���� ������ ����� �� ��� ����� �� ��� ������ ����� ����� ������ ��� �������';
// xs_check_switches
$lang['xs_check_switches'] = '���� �� �������� ���� ��������';
$lang['xs_check_switches_explain'] = '��� ������� ������ �� ������� �� �������. �� ������� ��� ���� �������� ����� ����� �� ������� ��� ���� ������<br /><br /> ������ ����� ������ �� ���� ������� �� ������ ��� �� ����� ������� �������� ������� ����� ������ �� ��� ������� ���� ���� ����� �� ������ ������<br /><br />���� ������ �� ���� ������� ���� ��� ����� ��� ������� ���� �� ���� �� ����� ������ ������ ����<br /><br />��� ���� ����� ����� ����� ��� ������ ����� ��� ������� ������ ��������';
$lang['xs_check_switches_0'] = '����';
$lang['xs_check_switches_1'] = '���� ���';
$lang['xs_check_switches_2'] = '���� ����';
// xs_use_isset
$lang['xs_use_isset'] = '���� �� ��������� ����� ������ ���� isset() �� ����� �������';

// Debug info
$lang['xs_debug_header'] = '������� �������';
$lang['xs_debug_explain'] = '�� ��� ������ ������ ��� ������� �� ������� ��� ����� �����';
$lang['xs_debug_vars'] = '������� ������';
$lang['xs_debug_tpl_name'] = '��� ��� ������';
$lang['xs_debug_cache_filename'] = '��� ��� �����';
$lang['xs_debug_data'] = '������ ������';

$lang['xs_check_hdr'] = '������ �� ����� � %s';
$lang['xs_check_filename'] = '���� : ��� ����� ��� ����';
$lang['xs_check_openfile1'] = '���� : ������ ��� �����  "%s". ������ �������� ����� ������';
$lang['xs_check_openfile2'] = '���� : ������ ��� �����  "%s" ����� �������: ��� ������ �������� !';
$lang['xs_check_nodir'] = '���� ������ "%s" ������  ���� ��� ������';
$lang['xs_check_nodir2'] = '����: ������ ����� ������ "%s"���� ����� ���� ������ �� ��������� �� ������';
$lang['xs_check_createddir'] = '�� ����� ������ "%s"';
$lang['xs_check_dir'] = '���� ������ "%s" ������ ����� ����';
$lang['xs_check_ok'] = '�� ��� �����  "%s" ������� ��� ��� ���� ��� ������ ';

// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = '������';
$lang['xs_styles_style'] = '�����';
$lang['xs_styles_user'] = '�������';
$lang['xs_styles_options'] = '��������';
$lang['xs_styles_set_default'] = '����� ����� ���������';
$lang['xs_styles_no_override'] = '�������� ������� �����';
$lang['xs_styles_do_override'] = '����� ������� �����';
$lang['xs_styles_switch_all'] = '��� ���� ������� ��� ��� �����';
$lang['xs_styles_switch_all2'] = '��� ���� ������� ��� :';
$lang['xs_styles_defstyle'] = '����� ���������';
$lang['xs_styles_available'] = '������� �������';

// Categories Hierarchies Mod
$lang['Category_attachment'] = "���� ��������";
$lang['Use_sub_forum'] = "���� ��������� ������� ��������";
$lang['Use_sub_forum_explain'] = "���� �������� ������ �������� ��� ��� ��������� ������� �� ��������� �������";
$lang['Category_desc'] = "�����";
$lang['Hierarchy_setting'] = "������� �������� �������";
$lang['Category_config_error_fixed'] = "���� �� ����� ������� �� ������";

// Split Announcements/Stickys
$lang['announce_settings'] = "������� �������";
$lang['enable_announce'] = "��� ������� ������� �� ������ ��������";
$lang['enable_announce_explain'] = "��� ������� ����� �� ���� ��� ������� ������� �� ������ ��������";

$lang['announcement_duration'] = "��� �������";
$lang['announcement_duration_explain'] = "��� <strong>������ </strong> ���� ������� ������� �� ������ ��������";
$lang['announcement_duration_explain'] .= "<br/>�����  <b>0</b> ����� ������� ����� ��� �����";

$lang['split_global_announce'] = "��� ��������� ������";
$lang['split_announce'] = "��� ��������� ��� ���������";
$lang['split_sticky'] = "��� ������� ������ ��� ���������";

// Topic & Post sort options
$lang['topic_sort_order'] = "����� ����� ��������";
$lang['post_sort_order'] = "����� ����� ���������";
$lang['First_Post'] = "��� ������";
$lang['sorted_default'] = "����� ���������";

// Replacement Rank image admin
$lang['Rank_image'] = '���� �������';
$lang['Rank_image_explain'] = '������ ��� ������� ������ ������ ������� ���� ������ �� �������';
$lang['Rank_image_explain'] .= '<br/>��� ������ �� ������� ��� ���� �� PNphpBB2  ��� ����� ����� ����� ��� ���� ������<br/>���� ��� ��� ����� ��� ������ ���� (image.gif),��� �������� ������ �������� ��� ������ �� ����� ������ ���� �� ��� �����'; 
$lang['Admin_intro'] = '���� ��������� �� PNphpBB . ��� ������ ������ ���� ����� ������ ���������� �� ������. ������ ������ ��� ��� ������ ������ ��� ���� ������� �������� �� ������� ��������. �� ���� ������� �� ���� ������ ������� ������ ��� ��������� �������� ������ �� ������� �������. ';

$lang['PNphpBB_Version'] = '����� ��PNphpBB2 ';
$lang['phpBB_Version'] = '����� ��phpBB ';

// limited post edit time MOD 
$lang['edit_time'] = '����� ������ ������ ���������'; 
$lang['edit_time_explain'] = '����� �������� ����� ���� �������� ��� �� ����� ��������� ��� ����� ���� ���� ���� ��� ����� ��� �����'; 

// Enable-Disable theme matching functions
$lang['theme_matching'] = "����� ������ ����� ������� ������ ������";
$lang['theme_matching_explain'] = "������� ����� ������ ����� ������� ������ �� ���� ��� �������. ��� ������� ������ ����� ��� ��� (Style Sheet ) ���� �������� ��� �������. ���� ������ �� ���� ��� ��� ����� �� ���� ����� �������";

// Exclude forum from global announcments
$lang['Exclude_global_announce'] = '������� ��� ������� �� ��������� ������';
$lang['Exclude_global_announce_explain'] = '��� ��� ������� ��� ������ ���� ���� ��� ������� ������ �� ��������� ������';

// Support forum
$lang['Support_forum'] = '��� ����� �����';
$lang['Support_forum_explain'] = '��� ��� ������� ��� ������� ������ ��� ���� ����� ������� �� ������ ������ ����� ���� ������� �������� �� ����� ����� ��� ������';

//
// That's all Folks!
// -------------------------------------------------

?>
