<?php
/***************************************************************************
 *                            lang_main_attach.php [Chinese]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     Translation          : Sp Lin , splin@cpalm.idv.tw (For Attachment Mod 2.32)
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:30:42 bob Exp $
 *
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
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = '�z <b>�i�H</b> �b�o�Ӫ������[�ɮ�';
$lang['Rules_attach_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ������[�ɮ�';
$lang['Rules_download_can'] = '�z <b>�i�H</b> �b�o�Ӫ����U���ɮ�';
$lang['Rules_download_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ����U���ɮ�';
$lang['Sorry_auth_view_attach'] = '�藍�_�A���O�z�S���Q���v�˵��ΤU���o�Ӫ��[�ɮסC';

// Viewtopic -> Display of Attachments
$lang['Download_number'] = '�ɮפw�Q�U�� %d ��'; // replace %d with count
$lang['Extension_disabled_after_posting'] = '���ɦW \'%s\' �w�Q�t�κ޲z�����ΡA�]���o�Ӫ��[�ɮ׬O���Q��ܪ��C'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = '���[�ɮ׵o����x';
$lang['Attach_posting_cp_explain'] = '�p�G�z�I��u�s�W���[�ɮסv�A�z�N�i�H�ݨ����[�ɮת���ܲ��C<br />�W�Ƿs�������A�p�G�z���Q�n�U�����ƳQ�k�s�ӧ�s����ª����ɮסC<br />�p��W�Ƿs�����ɮסA���I��u�o�����[�ɮײM��v�A�A�I��u�s�W���[�ɮסv�A�A�I[�s�W���[�ɮ�]�����u�s���v�A<br />��ܷs�������ɮפ���A�A�I��[�o�����[�ɮײM��]�����u�W�Ƿs�������v�C';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = '�s�W���[�ɮ�';
$lang['Add_attachment_title'] = '�s�W���[�ɮ�';
$lang['Add_attachment_explain'] = '�p�G�z���Q�n�s�W���[�ɮר�z���峹���A�ЫO�����ťէY�i�C';
$lang['File_name'] = '�ɦW';
$lang['File_comment'] = '�ɮ׵���';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = '�o�����[�ɮײM��';
$lang['Options'] = '�ﶵ';
$lang['Update_comment'] = '��s����';
$lang['Delete_attachments'] = '�R�����[�ɮ�';
$lang['Delete_attachment'] = '�R�����[�ɮ�';
$lang['Delete_thumbnail'] = '�R���Y��';
$lang['Upload_new_version'] = '�W�Ƿs������';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s �O�@�ӵL�Ī��ɦW'; // replace %s with given filename
$lang['Attachment_php_size_na'] = '���[�ɮפӤj�F�C<br />�L�k���o�b PHP �w�q���j�p����C<br />���[�ɮ׼ҲլO�L�k�T�w�w�q�b php.ini �����̤j�W�Ǥj�p�C';
$lang['Attachment_php_size_overrun'] = '���[�ɮפӤj�F�C<br />�̤j�W�Ǥj�p: %d MB�C<br />�Ъ`�N���Ӥj�p�O�w�q�b php.ini�A�o�Ӥu�㥦�O�� PHP �ҳ]�w�ӥB���[�ɮ׼ҲյL�k��½�o�ӼƭȡC'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = '���ɦW %s �O���Q���\��'; // replace %s with extension (e.g. .php) 
$lang['Attachment_too_big'] = '���[�ɮפӤj�F�C<br />�̤j���j�p: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = '�藍�_�A���O�w�F��������[�ɮ׳̤j���ɮפj�p����C�p�G�z�����D���p���t�κ޲z���C';
$lang['Too_many_attachments'] = '���[�ɮ׵L�k�Q�s�W�A�ѩ�̤j����C%d �Ӫ����[�ɮצb�o�ӵo��w�����C'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = '���[�ɮ�/�Ϥ������p��e�� %d �����M���� %d ����'; 
$lang['General_upload_error'] = '�W�ǿ��~: �L�k�W�Ǫ��[�ɮר� %s �C'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = '�z�������b�u�s�W���[�ɮסv��ܲ����I��u�s���v�M��b�z�n��s�������I��u�W�Ƿs�������v�C';
$lang['Error_missing_old_entry'] = '�L�k��s���[�ɮסA�L�k����ª����[�ɮ׶��ءC';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = '�藍�_�A���O�b�z���p�H�T������X�w�F��������[�ɮ׳̤j�ɮת��j�p����C�ЧR���@�Ǧb�z������X/�H���X�����[�ɮסC';
$lang['Attach_quota_receiver_pm_reached'] = '�藍�_�A���O�b�p�H�T������X�� \'%s\' �w�F��������[�ɮת��̤j�ɮת��j�p����C�����L�̪��D�A�ε��ݪ���L/�o�R���@�Ǧb�L��/�o�����[�ɮסC';

// Errors -> Download
$lang['No_attachment_selected'] = '�z�S����ܤ@�Ӫ��[�ɮרӤU�����˵��C';
$lang['Error_no_attachment'] = '��ܪ����[�ɮצA�]���s�b�F�C';

// Delete Attachments
$lang['Confirm_delete_attachments'] = '�z�T�w�z�Q�n�R����ܪ����[�ɮ�?';
$lang['Deleted_attachments'] = '��ܪ����[�ɮפw�Q�R���C';
$lang['Error_deleted_attachments'] = '�L�k�R�����[�ɮסC';
$lang['Confirm_delete_pm_attachments'] = '�z�T�w�z�Q�n�R���w�o��b�o�� PM �����������[�ɮ׶�?';

// General Error Messages
$lang['Attachment_feature_disabled'] = '���[�ɮץ\��w�Q���ΡC';

$lang['Directory_does_not_exist'] = '��Ƨ� \'%s\' ���s�b�άO�䤣��C'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = '�p�G \'%s\' �O�@�Ӹ�Ƨ��Ю֨��C'; // replace %s with directory
$lang['Directory_not_writeable'] = '��Ƨ� \'%s\' �O���i�g�J���C�z�N�ݭn�إߤW�Ǹ��|���ܧ��ݩʬ� 777 (���ܧ�֦��̬��z httpd-���A�����֦���) �n�W���ɮסC<br />�p�G�z�u�n������ ftp-�s�� �ܧ��Ƨ��� \'�ݩ�\' �� rwxrwxrwx�C'; // replace %s with directory

$lang['Ftp_error_connect'] = '�L�k�s�u�� FTP ���A��: \'%s\'�C���ˬd�z�� FTP-�]�w�C';
$lang['Ftp_error_login'] = '�L�k�n�J�� FTP ���A���C�o�Τ�W�� \'%s\' �αK�X�O���~���C���ˬd�z�� FTP-�]�w�C';
$lang['Ftp_error_path'] = '�L�k�s�� FTP ��Ƨ�: \'%s\'�C���ˬd�z�� FTP �]�w�C';
$lang['Ftp_error_upload'] = '�L�k�W���ɮר� FTP ��Ƨ�: \'%s\'�C���ˬd�z�� FTP �]�w�C';
$lang['Ftp_error_delete'] = '�L�k�R���b FTP ��Ƨ����ɮ�: \'%s\'�C���ˬd�z�� FTP �]�w�C<br />��L���z�ѹ��o�ӿ��~�L�k�Q���s�b�����[�ɮסA�Х��b���F�ɮ��ˬd�C';

// Common Variables
$lang['Bytes'] = '�줸��';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = '�j�M���[�ɮ�';
$lang['Test_settings'] = '���ճ]�w';
$lang['Not_assigned'] = '���Q���w';
$lang['No_file_comment_available'] = '�L�i�Ϊ��ɮ׵���';

// 2.3.4
$lang['Disallowed_extension_within_forum'] = '�A���Q���\���[�ɮת����ɦW�� %s ��o�@����';
$lang['Attach_rules_title'] = '�w���\���ɦW�s�թM�L�̪��j�p';
$lang['Group_rule_header'] = '%s -> �̤j�W�Ǫ��j�p: %s';
$lang['Allowed_extensions_and_sizes'] = '���\�����ɦW�M�j�p';
$lang['Note_user_empty_group_permissions'] = '�`�N:<br />�A�q�`���\���[�ɮש�o�Ӫ����A<br />���O�۱q�S�����ɦW�s�զb�o�̳Q���\���[�A<br />�A�L�k���[�����ɮסC�p�G�A�յ۪��[�ɮסA<br />�A�N�|������~�T���C<br />';

//2.3.5
$lang['Description'] = '�ɮ״y�z'; 
$lang['Downloaded'] = '�U������'; 
$lang['Download'] = '�U��'; 
$lang['Filesize'] = '�ɮפj�p'; 
$lang['Viewed'] = '�s������'; 
$lang['Ftp_error_pasv_mode'] = '�L�k �ϥ�/���� FTP �Q�ʼҦ�(PASV)'; 
$lang['Rules_page'] = '���[�ɮ׳W�h'; 
$lang['Upload_quota'] = '�W�ǰt�B'; 
$lang['Pm_quota'] = '�p�H�T���t�B'; 
$lang['User_upload_quota_reached'] = '�藍�_�A�A�w�F��A���̤j���W�ǰt�B���� %d %s'; 
$lang['User_acp_title'] = '�|���ɮת��[����x'; 
$lang['UACP'] = '�|���ɮת��[����x'; 
$lang['User_uploaded_profile'] = '�w�W���ɮסG%s'; 
$lang['User_quota_profile'] = '�t�B����G%s'; 
$lang['Upload_percent_profile'] = '������ %d%%'; 
$lang['Attachbox_limit'] = '�A�����[�ɮײ��w�ϥ� %d%% '; 
$lang['No_quota_limit'] = '�S���t�B����'; 
$lang['Unlimited'] = '�S������';

?>