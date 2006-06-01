<?php
/***************************************************************************
 *                            lang_main_attach.php [Greek]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:36:29 bob Exp $
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
// translated by Theodoros Vilaras
//

//
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = '<b>��������</b> �� ����������� ������ �� ���� �� forum';
$lang['Rules_attach_cannot'] = '<b>��� ��������</b> �� ����������� ������ �� ���� �� forum';
$lang['Rules_download_can'] = '<b>��������</b> �� ���������� ������ ��� ���� �� forum';
$lang['Rules_download_cannot'] = '<b>��� ��������</b> �� ���������� ������ ��� ���� �� forum';
$lang['Sorry_auth_view_attach'] = '���������� ���� ��� ����� �������������� �� ����� � �� ���������� ���� �� ��������� ������';

// Viewtopic -> Display of Attachments
$lang['Description'] = '���������'; // used in Administration Panel too...
$lang['Downloaded'] = '���������';
$lang['Download'] = '�������'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = '������� �������';
$lang['Viewed'] = '��������';
$lang['Download_number'] = '%d ����(��)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = '� �������� \'%s\' ���� ��������������� ��� ��� ����������� ��� forum ��� �� �� ������ ���� �� ��������� ������ ��� �����������.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = '������� ������� ���������� �������';
$lang['Attach_posting_cp_explain'] = '��� ��������� �� ��������� �������, �� ���������� �� ������� ��� ��� ��������� �������.<br />��� ��������� �� ���������� ������, �� ����� ��� ����� ��� ��� ���������� ������� ��� �� ����� ��� ���������� �� �� �������������.<br />��� ������ �� ��������������� ��� ��������� ������ (�� ��������� ������� ������ ���) �� ������ �� ��������������� ��� ���� ��� ����������. ��������� �� ���� �� ������ ������� ��� ��� ��������, ���� �� ������ ���� ��� �������� �������, ����� ���� ��� �������� ���� ������� ��� ��������� ������ ��� ������ �� ����������.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = '�������� �������';
$lang['Add_attachment_title'] = '��������� �������';
$lang['Add_attachment_explain'] = '��� ��� ������ �� ����������� ������ ��� ������ ���, ����������� ������ ���� �� ����� ����';
$lang['File_name'] = '����� �������';
$lang['File_comment'] = '������ �������';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = '���������� ������';
$lang['Options'] = '��������';
$lang['Update_comment'] = '�������� �������';
$lang['Delete_attachments'] = '�������� �������';
$lang['Delete_attachment'] = '�������� �������';
$lang['Delete_thumbnail'] = '�������� ����������';
$lang['Upload_new_version'] = '�������� ���� �������';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '�� %s ��� ����� ������ ����� �������'; // replace %s with given filename
$lang['Attachment_php_size_na'] = '�� ������ ����� ���� ������.<br />��� ���� ������� �� ����� � ���� ��� �������� ����� ��� �������� ��� PHP.<br />�� Attachment Mod ��� ������ �� ���� �� ������� ������������ ������� ��� �������� ������� ��� �������� ��� php.ini.';
$lang['Attachment_php_size_overrun'] = '�� ������ ����� ���� ������.<br />������� ������������ �������: %d MB.<br />�� ������ �� ��������� ��� ���� �� ���� ����������� ��� php.ini, ��� ���� �������� ��� ����� ���������� ��� �� PHP ��� �� Attachment Mod ��� ������ �� ������� ���� ��� ����.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = '� �������� %s ��� �����������'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = '��� ����������� �� ��������� ������ �� ��� �������� %s �� ���� �� ���-Forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = '�� ������ ����� ���� ������.<br />������� ������������ �������: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = '����������, ���� ����� ������ ��� ������� �������� ���� �������� ��� ���������� �������. ����������� ������������� �� ��� ����������� ��� forum ��� ����� ������ ���������.';
$lang['Too_many_attachments'] = '��� ���� ������ � �������� ��� ������� ����� ����� ������ ���� ������� ������ ��� %d ���������� ������� �� ���� �� ������.'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = '�� ��������� ������/������ ������ �� ������ �� ����� ��������� ��� %d pixels �� ������ ��� %d pixels �� ����'; 
$lang['General_upload_error'] = '������ ���������: ��� ���� ������ � �������� ��� ������� ��� %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = '������ �� ������������ �� �������� ��� ������� \'��������� �������\' ';
$lang['Error_missing_old_entry'] = '��� ���� ������ � �������� ��� �������, ��� ������� �� ������ ������';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = '����������, ���� ����� ������ ��� ������� �������� ���� �������� ��� ���������� ������� ��� ��� ������� ��� ���������� ��� ���������. ����������� ��������� ������ ��� �� �������� � ������������ ��������� ������.';
$lang['Attach_quota_receiver_pm_reached'] = '����������, ���� � ������� \'%s\' ���� ������ ��� ������� �������� ���� �������� ��� ���������� ������� ��� ��� ������� ��� ���������� ��� ���������. ����������� ���������� ��� �������, � ���������� ��� ���� ��������� ������ ��� �� �������� � ������������ ��������� ������ ���.';

// Errors -> Download
$lang['No_attachment_selected'] = '��� ����� �������� ������ ������ ��� �� ����� � �� ����������.';
$lang['Error_no_attachment'] = '�� ������ ��� ��������� ��� ������� ���';

// Delete Attachments
$lang['Confirm_delete_attachments'] = '����� ������� ��� ������ �� ���������� �� ���������� ������;';
$lang['Deleted_attachments'] = '�� ���������� ������ ����� ���������.';
$lang['Error_deleted_attachments'] = '��� ���� ������ � �������� ��� �������.';
$lang['Confirm_delete_pm_attachments'] = '����� ������� ��� ������ �� ���������� ��� �� ��������� ������ ����� ��� ���������;';

// General Error Messages
$lang['Attachment_feature_disabled'] = '� ���������� ��������� ���������� ����� ����������������.';

$lang['Directory_does_not_exist'] = '� ������� \'%s\' ��� ������� � ��� �������.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Please check if \'%s\' is a directory.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Directory \'%s\' is not writeable. You\'ll have to create the upload path and chmod it to 777 (or change the owner to you httpd-servers owner) to upload files.<br />If you have only plain ftp-access change the \'Attribute\' of the directory to rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = '��� ���� ������ � ������� ���� FTP Server: \'%s\'. ����������� ������� ��� ��������� ��� ��� �� FTP.';
$lang['Ftp_error_login'] = '��� ���� ������ � ������� (login) ���� FTP Server. �� ����� ������ \'%s\' � � ������� ����� ����������. ����������� ������� ��� ��������� ��� ��� �� FTP.';
$lang['Ftp_error_path'] = '��� ����� ������ � �������� (access) ���� ������ ftp: \'%s\'. ����������� ������� ��� ��������� ��� ��� �� FTP.';
$lang['Ftp_error_upload'] = '��� ���� ������ �� �������� (upload) ��� ������� ���� ������ ftp: \'%s\'. ����������� ������� ��� ��������� ��� ��� �� FTP.';
$lang['Ftp_error_delete'] = '��� ���� ������ � �������� ��� ������� ���� ������ ftp: \'%s\'. ����������� ������� ��� ��������� ��� ��� �� FTP.<br /> ���� ��� ����� ��\' ���� �� ������ �� �������� �� ����� � ������� ���������� �������, ����������� ������� ����� ���� ��� ������ ��������� ������.';
$lang['Ftp_error_pasv_mode'] = '�������� �������������/��������������� ��� ����������� FTP (FTP Passive Mode)';

// Attach Rules Window
$lang['Rules_page'] = '������� ����������';
$lang['Attach_rules_title'] = '������������� ������ ���������� ��� �� ������ ����';
$lang['Group_rule_header'] = '%s -> ������� ������� ��� ��������: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = '������������� ���������� ��� ������';
$lang['Note_user_empty_group_permissions'] = '��������:<br />�������� ����������� �� ������������ ������ �� ���� �� Forum, <br />���� ��� �� ������ ��� ��� ����������� ������ ����� ���������� �� �������������� ��� ��������� ���, <br />��� ����� ��� ���������� �� ����������� ���������. ��� ������������, <br />�� ������ ������ ������.<br />';

// Quota Variables
$lang['Upload_quota'] = '��������� ��� �� �������� �������';
$lang['Pm_quota'] = '��������� ��� �� ��������� �������� (PM)';
$lang['User_upload_quota_reached'] = '����������, ����� ������ ��� ������� ���� ��� %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = '���. ����. �����. ������';
$lang['UACP'] = '������� ������� ���������� ������';
$lang['User_uploaded_profile'] = '����������: %s';
$lang['User_quota_profile'] = '����: %s';
$lang['Upload_percent_profile'] = '%d%% ��� ��� �������';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = '��������� ���������� �������';
$lang['Test_settings'] = '������ ���������';
$lang['Not_assigned'] = '��� �������� (Not Assigned)';
$lang['No_file_comment_available'] = '��� ������� ������ �������';
$lang['Attachbox_limit'] = '� ����� ��� ��� ��������� ������� ����� %d%% �������';
$lang['No_quota_limit'] = '��� ������� ���� ����������';
$lang['Unlimited'] = '�����������';

?>