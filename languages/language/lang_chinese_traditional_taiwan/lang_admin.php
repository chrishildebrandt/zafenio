<?php

/***************************************************************************
 *                            lang_admin.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2003/02/19 18:30:42 bob Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *                            Traditional Chinese Translation [�c�餤��y�t]
 *                              -------------------
 *     begin                : Thu Nov 26 2001
 *     by                   : �p�ˤl, OOHOO, �Ӯa�M�h, ��
 *     email                : kyo.yoshika@msa.hinet.net
 *                            webdev@hotmail.com
 *                            sjwu1@ms12.hinet.net
 *                            f8806077@mail.dyu.edu.tw
 *
 *     last modify          : Sun Jun 9 2002
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

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = '�@��޲z';
$lang['Users'] = '�|���޲z';
$lang['Groups'] = '�s�պ޲z';
$lang['Forums'] = '�����޲z';
$lang['Styles'] = '����޲z';

$lang['Configuration'] = '�򥻲պA';
$lang['Permissions'] = '�v���]�w';
$lang['Manage'] = '�޲z�ﶵ';
$lang['Disallow'] = '�T�αb��';
$lang['Prune'] = '�ֳt�R��';
$lang['Mass_Email'] = '�q�l�l��q��';
$lang['Ranks'] = '���ź޲z';
$lang['Smilies'] = '���Ÿ�';
$lang['Ban_Management'] = '���걱��';
$lang['Word_Censor'] = '��r�L�o';
$lang['Export'] = '��X';
$lang['Create_new'] = '�إ�';
$lang['Add_new'] = '�s�W';
$lang['Backup_DB'] = '�ƥ���Ʈw';
$lang['Restore_DB'] = '�٭��Ʈw';


//
// Index
//
$lang['Admin'] = '�t�κ޲z';
$lang['Not_admin'] = '�z�����v�i�J�t�κ޲z����x';
$lang['Welcome_phpBB'] = '�w����{ phpBB 2 �t�κ޲z����x';
$lang['Admin_intro'] = '�P�±z��� phpBB 2 �@���z���Q�װϨt��. �b�o�Ӫ�����, �z�i�H�z�L�@�ǲέp��Ƨֳt���˵��z���Q�װϨt��. �z�i�H�ǥ��I�ﱱ��x���誺<u>����x����</u>�s���^��o�@��. �n�^��z���Q�װϭ���, ���I��b����x���W�誺 phpBB �лx�ϥ�. �b�o�ӵe�����誺��L�s��, �N���\�z����Q�װϨt�Ϊ��Ҧ��޲z�ﶵ, �ӨC�Ӫ����̤]�|���U���\�઺�ϥθѻ�.';
$lang['Main_index'] = '�Q�װϭ���';
$lang['Forum_stats'] = '�Q�װϲέp���';
$lang['Admin_Index'] = '����x����';
$lang['Preview_forum'] = '�w���Q�װ�';

$lang['Click_return_admin_index'] = '�I�� %s�o��%s �^�챱��x����';

$lang['Statistic'] = '�έp���';
$lang['Value'] = '�ƭ�';
$lang['Number_posts'] = '�峹�`��';
$lang['Posts_per_day'] = '�����C�ѵo���峹�`��';
$lang['Number_topics'] = '�D�D�`��';
$lang['Topics_per_day'] = '�����C�ѵo���D�D�`��';
$lang['Number_users'] = '���U�|���`��';
$lang['Users_per_day'] = '�����C�ѵ��U���|���`��';
$lang['Board_started'] = '�Q�װϱҥΤ��';
$lang['Avatar_dir_size'] = '�Y����Ƨ��ɮפj�p';
$lang['Database_size'] = '��Ʈw�ɮפj�p';
$lang['Gzip_compression'] ='Gzip compression';
$lang['Not_available'] = '�L';

$lang['ON'] = '�}��'; // This is for GZip compression
$lang['OFF'] = '����'; 


//
// DB Utils
//
$lang['Database_Utilities'] = '��Ʈw�u��޲z';

$lang['Restore'] = '�٭�';
$lang['Backup'] = '�ƥ�';
$lang['Restore_explain'] = '�b�o�ӿﶵ��, �z�i�H�ϥγƥ����ɮ�, ����a�٭� phpBB 2 �ҨϥΪ���Ʈw���. �p�G�z�����A���䴩 GZIP ���Y����r��, �t�αN�|�ۦ�����z�ҤW�Ǫ����Y��. <b>ĵ�i</b> �٭�ʧ@�N�|�����л\�Ҧ��{�s�����. �t���٭�ʧ@�i��|��O�@�q�ɶ��h����, ����t�Χ����e�Ф��n���}�o�ӭ���.';
$lang['Backup_explain'] = '�b�o�ӿﶵ��, �z�i�H�ƥ��Ҧ� phpBB 2 �Q�װϪ��������. �p�G�z���䥦�ۦ�w�q������b phpBB 2 �Q�װϩҨϥΪ���Ʈw��, �ӥB�z�]�Q�@�ֳƥ��o���B�~�����, �Цb�U�誺 <b>���[�����</b> �椺��J�L�̪��W�r�åγr���ϧO�} (�Ҧp: abc, cde). ���p�z�����A�����䴩 GZIP ���Y�榡, �z�i�H�b�U���e�ϥ� GZIP ���Y�Ӵ���ɮת��j�p.';

$lang['Backup_options'] = '�ƥ��ﶵ';
$lang['Start_backup'] = '�}�l�ƥ�';
$lang['Full_backup'] = '����ƥ�';
$lang['Structure_backup'] = '�u���ƥ��[�c';
$lang['Data_backup'] = '�u���ƥ����';
$lang['Additional_tables'] = '���[�����';
$lang['Gzip_compress'] = 'Gzip ���Y�ɮ�';
$lang['Select_file'] = '����ɮ�';
$lang['Start_Restore'] = '�}�l�٭�';

$lang['Restore_success'] = '��Ʈw�w�g���Q���Q�t���٭�.<br /><br />�Q�װϤw�Q�٭�ܳƥ��ɪ����A.';
$lang['Backup_download'] = '�Э@�ߵ���. �z���ƥ��ɮפU���n�D�Y�N�}�l!';
$lang['Backups_not_supported'] = '��p! �z�Ұ��檺�t���٭�ʧ@�S�����T���Q����';

$lang['Restore_Error_uploading'] = '�W�Ǫ��ƥ��ɮ׿��~';
$lang['Restore_Error_filename'] = '�ɮצW�٦����D, �Э��s����ɮ�';
$lang['Restore_Error_decompress'] = '�L�k���� Gzip �ɮ�, �ХH�¤�r�Ҧ��W��';
$lang['Restore_Error_no_file'] = '�S���W�Ǫ��ɮ�';


//
// Auth pages
//
$lang['Select_a_User'] = '��ܤ@�ӨϥΪ�';
$lang['Select_a_Group'] = '��ܤ@�Ӹs��';
$lang['Select_a_Forum'] = '��ܤ@�Ӫ���';
$lang['Auth_Control_User'] = '�|���v���]�w'; 
$lang['Auth_Control_Group'] = '�s���v���]�w'; 
$lang['Auth_Control_Forum'] = '�����v���]�w'; 
$lang['Look_up_User'] = '�d�߷|��'; 
$lang['Look_up_Group'] = '�d�߸s��'; 
$lang['Look_up_Forum'] = '�d�ߪ���'; 

$lang['Group_auth_explain'] = '�b�o�ӿﶵ��, �z�i�H���s�ժ��v���]�w�Ϋ��w�޲z�����. �Ъ`�N, �Y�ϭק�s���v���]�w, �|���i�ऴ�M�֦��i�J��������|���v��. �p�G�o�ͤW�z����, �t�η|����v���Ĭ�ĵ�i.';
$lang['User_auth_explain'] = '�b�o�ӿﶵ��, �z�i�H���|�����v���]�w�Ϋ��w�޲z�����. �Ъ`�N, �Y�ϭק�|���v���]�w, �|���i�ऴ�M�֦��i�J��������s���v��. �p�G�o�ͤW�z����, �t�η|����v���Ĭ�ĵ�i.';
$lang['Forum_auth_explain'] = '�b�o�ӿﶵ��, �z�i�H��睊�����ϥ��v���]�w. �z�i�H��ܨϥ�²���άO�i���Ҧ��]�w, �i���Ҧ��ണ�ѱz���㪺�v���]�w����. �аO�o�Ҧ������ܳ��N�|�v�T��|���̪������ϥ��v��.';

$lang['Simple_mode'] = '²���Ҧ�';
$lang['Advanced_mode'] = '�i���Ҧ�';
$lang['Moderator_status'] = '�޲z�����';

$lang['Allowed_Access'] = '���\�i�J';
$lang['Disallowed_Access'] = '�T��i�J';
$lang['Is_Moderator'] = '�㪩���޲z�����';
$lang['Not_Moderator'] = '���㪩���޲z�����';

$lang['Conflict_warning'] = '�v���Ĭ�ĵ�i';
$lang['Conflict_access_userauth'] = '�o�ӷ|�����M�i�H�z�L�s�զ��������i�J�S�w������. �z�i�H�ǥ��ܧ�s���v���άO�����o�ӷ|�����s�ո��, �Ө���ӷ|���i�J�������.';
$lang['Conflict_mod_userauth'] = '�o�ӷ|�����M�i�H�z�L�s�զ��������֦������޲z���v��. �z�i�H�ǥ��ܧ�s���v���άO�����o�ӷ|�����v��, �Ө���ӷ|���i�J�������.';

$lang['Conflict_access_groupauth'] = '�U�C�|�����M�i�H�z�L�L�̪��|���v���i�J�S�w������. �z�i�H���|���v���Ө���L�̶i�J�������. �o�Ƿ|�����v���p�U: ';
$lang['Conflict_mod_groupauth'] = '�U�C�|���̵M�i�H�z�L�L�̪��|���v���֦������޲z���v��. �z�i�H���|���v���Ӱ��h�L�̪������޲z�v��. �o�Ƿ|�����v���p�U: ';

$lang['Public'] = '���}';
$lang['Private'] = '�D���}';
$lang['Registered'] = '���U�|��';
$lang['Administrators'] = '�t�κ޲z��';
$lang['Hidden'] = '����';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = '�Ҧ��|��';
$lang['Forum_REG'] = '���U�|��';
$lang['Forum_PRIVATE'] = '�s�զ���';
$lang['Forum_MOD'] = '�����޲z��';
$lang['Forum_ADMIN'] = '�t�κ޲z��';

$lang['View'] = '�˵�';
$lang['Read'] = '�\Ū';
$lang['Post'] = '�o��';
$lang['Reply'] = '�^��';
$lang['Edit'] = '�s��';
$lang['Delete'] = '�R��';
$lang['Sticky'] = '�m��';
$lang['Announce'] = '���i'; 
$lang['Vote'] = '�벼';
$lang['Pollcreate'] = '���ﬡ��';

$lang['Permissions'] = '�v���]�w';
$lang['Simple_Permission'] = '���v��';

$lang['User_Level'] = '�|������'; 
$lang['Auth_User'] = '�|��';
$lang['Auth_Admin'] = '�t�κ޲z��';
$lang['Group_memberships'] = '�|���s�ղM��';
$lang['Usergroup_members'] = '�o�Ӹs�վ֦��H�U����';

$lang['Forum_auth_updated'] = '�����v���]�w����';
$lang['User_auth_updated'] = '�|���v���]�w����';
$lang['Group_auth_updated'] = '�s���v���]�w����';

$lang['Auth_updated'] = '�v���]�w�w�g������s';
$lang['Click_return_userauth'] = '�I�� %s�o��%s ��^�|���v���]�w';
$lang['Click_return_groupauth'] = '�I�� %s�o��%s ��^�s���v���]�w';
$lang['Click_return_forumauth'] = '�I�� %s�o��%s ��^�����v���]�w';


//
// Banning
//
$lang['Ban_control'] = '���걱��';
$lang['Ban_explain'] = '�b�o�ӿﶵ��, �z�i�H����|��������. �z�i�H����@�ӫ��w�d�� IP ��}�άO�q���D���W��, �o�Ǥ�k���O�Ψ��קK�Q���ꪺ�|���i�J�Q�װϭ���. �z�]�i�H���w����q�l�l���}�Ө�����U�|���ϥΤ��P���b�����Ƶ��U. �Ъ`�N��z����@�ӹq�l�l���}��, �N���v�T��|���b�z�Q�װϪ��n�J�άO�o��ʧ@, �z���ӨϥΫe����ؤ覡�䤤���@�ӫإ߫���.';
$lang['Ban_explain_warn'] = '��z��J�@�ӽd�� IP ��}, �N�|�y����ӰϬq�� IP ��}�Q����. �յۨϥθU�Φr�� (*) ���Y�u�q�l�l���}�H�קK���θ�Ʈw�Ŷ�. ���p�z�@�w�n��J�@�ӽd��, �ЫO����²�άO�A����}���A.';

$lang['Select_username'] = '��ܷ|���W��';
$lang['Select_ip'] = '��� IP ��}';
$lang['Select_email'] = '��ܹq�l�l���}';

$lang['Ban_username'] = '����@�өΦh�ӫ��w���|���W��';
$lang['Ban_username_explain'] = '�z�i�H�ϥηƹ��Ϋ���զX (�Ҧp: Ctrl �� Shift), �@������h�ӷ|���W��';

$lang['Ban_IP'] = '����@�өΦh�� IP ��}�άO�q���D���W��';
$lang['IP_hostname'] = 'IP ��}�άO�q���D���W��';
$lang['Ban_IP_explain'] = '�n���w�h�Ӥ��P�� IP ��}�άO�D���W��, �Шϥγr�I \',\' �ӰϹj����. �n���w IP ��}���d��, �Шϥ� \'-\' �ӰϹj�_�l��}�ε�����}, �άO�ϥθU�Φr�� \'*\'';

$lang['Ban_email'] = '����@�өΦh�ӹq�l�l���}';
$lang['Ban_email_explain'] = '�n���w�h�Ӥ��P���q�l�l���}, �Шϥγr�I \',\' �ӰϹj����, �άO�ϥθU�Φr�� \'*\', �Ҧp: *@hotmail.com';

$lang['Unban_username'] = '�Ѱ��@�өΦh�ӫ��ꪺ�|���W��';
$lang['Unban_username_explain'] = '�z�i�H�ϥηƹ��Ϋ���զX (�Ҧp: Ctrl �� Shift), �@���Ѱ��h�ӫ��ꪺ�|���W��';

$lang['Unban_IP'] = '�Ѱ��@�өΦh�ӫ��ꪺ IP ��}';
$lang['Unban_IP_explain'] = '�z�i�H�ϥηƹ��Ϋ���զX (�Ҧp: Ctrl �� Shift), �@���Ѱ��h�ӫ��ꪺ IP ��}';

$lang['Unban_email'] = '�Ѱ��@�өΦh�ӫ��ꪺ�q�l�l���}';
$lang['Unban_email_explain'] = '�z�i�H�ϥηƹ��Ϋ���զX (�Ҧp: Ctrl �� Shift), �@���Ѱ��h�ӫ��ꪺ�q�l�l���}';

$lang['No_banned_users'] = '�S���Q���ꪺ�|���W��';
$lang['No_banned_ip'] = '�S���Q���ꪺ IP ��}';
$lang['No_banned_email'] = '�S���Q���ꪺ�q�l�l���}';

$lang['Ban_update_sucessful'] = '����M��w�g������s';
$lang['Click_return_banadmin'] = '�I�� %s�o��%s ��^���걱��';


//
// Configuration
//
$lang['General_Config'] = '�򥻲պA';
$lang['Config_explain'] = '�z�i�H�ϥΤU�C���ӽվ�@�몺�]�w�ﶵ. �|���Ϊ����]�w�Шϥεe������ (�t�κ޲z) �������s��.';

$lang['Click_return_config'] = '�I�� %s�o��%s ��^�򥻲պA';

$lang['General_settings'] = '�Q�װϰ򥻳]�w';
$lang['Server_name'] = '����W��';
$lang['Server_name_explain'] = '�Q�װϨϥκ���';
$lang['Script_path'] = '�t�ε{���s����|';
$lang['Script_path_explain'] = '�Q�װϹ������쪺���|';
$lang['Server_port'] = '�D���s����';
$lang['Server_port_explain'] = '�D���q�`�ϥ� 80 �ӧ@���s����, ���D�z�ϥΤ��P���s����, �_�h�o���]�w�O���ݧ�諸';
$lang['Site_name'] = '�Q�װϦW��';
$lang['Site_desc'] = '�Q�װϴy�z';
$lang['Board_disable'] = '�Ȯ�����';
$lang['Board_disable_explain'] = '�o�Ӱʧ@�N�|�Ȯ������Q�װ�. ��z����o�Ӱʧ@��, �Фŵn�X, �]���z�N�L�k���s�n�J!';
$lang['Acct_activation'] = '�b���ҥΰʧ@';
$lang['Acc_None'] = '����'; // These three entries are the type of activation
$lang['Acc_User'] = '�ѷ|���ۦ�ҥ�';
$lang['Acc_Admin'] = '�Ѩt�κ޲z���}��';

$lang['Abilities_settings'] = '�|���Ϊ����򥻳]�w';
$lang['Max_poll_options'] = '���ﶵ�ت��̰�����ƥ�';
$lang['Flood_Interval'] = '�������';
$lang['Flood_Interval_explain'] = '�峹�o�����j�ɶ� (��)'; 
$lang['Board_email_form'] = '�|���p��ï';
$lang['Board_email_form_explain'] = '�|���i�H�o�e�q�l�l�󵹰Q�װϪ���L�|��';
$lang['Topics_per_page'] = '�C����ܥD�D��';
$lang['Posts_per_page'] = '�C����ܵo���';
$lang['Hot_threshold'] = '�������D��ܼ�';
$lang['Default_style'] = '�w�]�˦�';
$lang['Override_style'] = '��½�|����ܼ˦�';
$lang['Override_style_explain'] = '�N�|���ҿ諸�˦��אּ�w�]�˦�';
$lang['Default_language'] = '�w�]�y�t';
$lang['Date_format'] = '�ɶ��榡';
$lang['System_timezone'] = '�t�ήɶ�';
$lang['Enable_gzip'] = '�}�� GZip �ɮ����Y�榡';
$lang['Enable_prune'] = '�}�Ҫ����R��Ҧ�';
$lang['Allow_HTML'] = '���\�ϥ� HTML �y�k';
$lang['Allow_BBCode'] = '���\�ϥ� BBCode �N�X';
$lang['Allowed_tags'] = '���\�ϥΪ� HTML ����';
$lang['Allowed_tags_explain'] = '�H�r�I�Ϲj HTML ����';
$lang['Allow_smilies'] = '���\�ϥΪ��Ÿ�';
$lang['Smilies_path'] = '���Ÿ��x�s���|';
$lang['Smilies_path_explain'] = '�b�z phpBB 2 �ڥؿ����U�����|, �Ҧp: images/smilies';
$lang['Allow_sig'] = '���\ñ�W��';
$lang['Max_sig_length'] = 'ñ�W�ɪ���';
$lang['Max_sig_length_explain'] = '�ϥΪ̭ө�ñ�W�̦h�i�ϥΦr��';
$lang['Allow_name_change'] = '���\���n�J�W��';

$lang['Avatar_settings'] = '�ӤH�Y���]�w';
$lang['Allow_local'] = '�ϥΨt�ά�ï';
$lang['Allow_remote'] = '���\�s���Y��';
$lang['Allow_remote_explain'] = '�q�~�����}�s���ӤH�Y��';
$lang['Allow_upload'] = '���\�W���Y��';
$lang['Max_filesize'] = '�Y���ɮפ��i�W�L';
$lang['Max_filesize_explain'] = '�ѨϥΪ̤W���Y���ɮ�';
$lang['Max_avatar_size'] = '�Y���ؤo���i�j��';
$lang['Max_avatar_size_explain'] = '(�� x �e �������)';
$lang['Avatar_storage_path'] = '�ӤH�Y���x�s���|';
$lang['Avatar_storage_path_explain'] = '�b�z phpBB 2 �ڥؿ����U�����|, �Ҧp: images/avatars';
$lang['Avatar_gallery_path'] = '�t�ά�ï�x�s���|';
$lang['Avatar_gallery_path_explain'] = '�b�z phpBB 2 �ڥؿ����U�����|, �Ҧp: images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA (����ൣ�������p�O�@�k) �]�w';
$lang['COPPA_fax'] = 'COPPA �ǯu���X';
$lang['COPPA_mail'] = 'COPPA �l���a�}';
$lang['COPPA_mail_explain'] = '�o�O�Ѯa���H�e COPPA �|�����U�ӽЮѪ��l���a�}';

$lang['Email_settings'] = '�q�l�l��]�w';
$lang['Admin_email'] = '�t�κ޲z���q�l�l��H�c';
$lang['Email_sig'] = '�q�l�l��ñ�W��';
$lang['Email_sig_explain'] = '�o��ñ�W�ɱN�|�Q���[�b�Ҧ��ѰQ�װϨt�ΰe�X���q�l�l��';
$lang['Use_SMTP'] = '�ϥ� SMTP ���A���ǰe�q�l�l��';
$lang['Use_SMTP_explain'] = '���p�z�Q�n�ϥ� SMTP ���A���o�e�q�l�l��п�� \'�O\'';
$lang['SMTP_server'] = 'SMTP ���A������W��';
$lang['SMTP_username'] = 'SMTP �ϥΪ̱b��';
$lang['SMTP_username_explain'] = '�u���b�D�����n�D�����p�U�~�ݭn��J';
$lang['SMTP_password'] = 'SMTP �K�X';
$lang['SMTP_password_explain'] = '�u���b�D�����n�D�����p�U�~�ݭn��J';

$lang['Disable_privmsg'] = '�p�H�T��';
$lang['Inbox_limits'] = '���󧨳̤j�e�q';
$lang['Sentbox_limits'] = '�H�󧨳̤j�e�q';
$lang['Savebox_limits'] = '�x�s���̤j�e�q';

$lang['Cookie_settings'] = 'Cookie �]�w'; 
$lang['Cookie_settings_explain'] = '�o�ǳ]�w����� Cookie ���w�q, �N�@�몺���p, �ϥΨt�ιw�]�ȴN�i�H�F. �p�G�z�n���o�ǳ]�w, �Фp�߳B�z, �����]�w�N�ɭP�|���ݭ��Ƶn�J';
$lang['Cookie_domain'] = 'Cookie ���w���� [ �iŪ�� Cookie ��ƪ����� ]';
$lang['Cookie_name'] = 'Cookie �W��';
$lang['Cookie_path'] = 'Cookie ���|';
$lang['Cookie_secure'] = 'Cookie �[�K [ https ]';
$lang['Cookie_secure_explain'] = '�p�G�z���D���ϥ� SSL �q�T��w, �ж}�ҳo���]�w, �_�h�ЫO�����������A';
$lang['Session_length'] = 'Session �s���ɶ� [ �� ]';


//
// Forum Management
//
$lang['Forum_admin'] = '�����޲z';
$lang['Forum_admin_explain'] = '�b�o�ӱ���O��, �z�i�H�s�W, �R��, �s��έ��s�ƦC���ϩM����, �H�έ��㪩�������������.';
$lang['Edit_forum'] = '�s�誩��';
$lang['Create_forum'] = '�إ߷s����';
$lang['Create_category'] = '�إ߷s����';
$lang['Remove'] = '����';
$lang['Action'] = '����';
$lang['Update_order'] = '��s�¦�';
$lang['Config_updated'] = '�򥻲պA�w�g������s';
$lang['Edit'] = '�s��';
$lang['Delete'] = '�R��';
$lang['Move_up'] = '���W����';
$lang['Move_down'] = '���U����';
$lang['Resync'] = '����������';
$lang['No_mode'] = '�S���]�w�Ҧ�';
$lang['Forum_edit_delete_explain'] = '�z�i�H�ϥΤU�C���ӽվ�@�몺�]�w�ﶵ. �|���Ϊ����]�w�Шϥεe������ (�t�κ޲z) �������s��.';

$lang['Move_contents'] = '����/�R���Ҧ����e';
$lang['Forum_delete'] = '�R������';
$lang['Forum_delete_explain'] = '�z�i�H�ϥΤU�C���ӧR������ (�Τ���), �åi���ʥ]�t�b���������Ҧ��峹.';

$lang['Forum_settings'] = '�����򥻳]�w';
$lang['Forum_name'] = '�����W��';
$lang['Forum_desc'] = '�����y�z';
$lang['Forum_status'] = '�������A';
$lang['Forum_pruning'] = '�w���R��';

$lang['prune_freq'] = '�w�� (�C�j�X��) �ˬd�D�D���A';
$lang['prune_days'] = '�R�� (�b�X�Ѥ�) �S���峹�^�Ъ��D�D';
$lang['Set_prune_data'] = '�z�w�g�}�Ҫ����w���R�媺�\��, ���å����������]�w. �Ц^��W�@�B�]�w����������';

$lang['Move_and_Delete'] = '����/�R��';

$lang['Delete_all_posts'] = '�R���Ҧ��峹';
$lang['Nowhere_to_move'] = '�L�k����';

$lang['Edit_Category'] = '�s����ϦW��';
$lang['Edit_Category_explain'] = '�ϥΥH�U���ק���ϦW��';

$lang['Forums_updated'] = '�����Τ��ϸ�Ƥw�g������s';

$lang['Must_delete_forums'] = '�b�R���o�Ӥ��Ϥ��e, �z�������R�����ϩ��U���Ҧ�����';

$lang['Click_return_forumadmin'] = '�I�� %s�o��%s ��^�����޲z';


//
// Smiley Management
//
$lang['smiley_title'] = '���Ÿ��s��';
$lang['smile_desc'] = '�b�o�ӿﶵ��, �z�i�H�s�W, �R���άO�s����Ÿ��M���y�]�], �H�ѷ|���b�峹�o��άO�p�H�T�����ϥ�.';

$lang['smiley_config'] = '���Ÿ��]�w';
$lang['smiley_code'] = '���Ÿ��N�X';
$lang['smiley_url'] = '������';
$lang['smiley_emot'] = '������';
$lang['smile_add'] = '�W�[�@�ӷs��';
$lang['Smile'] = '��';
$lang['Emotion'] = '�N����';

$lang['Select_pak'] = '��ܪ����y�]�] (.pak) �ɮ�';
$lang['replace_existing'] = '�����{�������Ÿ�';
$lang['keep_existing'] = '�O�d�{�������Ÿ�';
$lang['smiley_import_inst'] = '�z���N���y�]�]�����äW�ǦܾA�����Ÿ��ؿ�.  �M���ܥ��T�����ظ��J���ӯ��y�]�].';
$lang['smiley_import'] = '���J���y�]�] ';
$lang['choose_smile_pak'] = '��ܤ@�ӯ��y�]�] .pak �ɮ�';
$lang['import'] = '���J���Ÿ�';
$lang['smile_conflicts'] = '�b�Ĭ𪺱��p�U�������X���M�w';
$lang['del_existing_smileys'] = '���J�e���R���ª����Ÿ�';
$lang['import_smile_pack'] = '���J���y�]�]';
$lang['export_smile_pack'] = '�إ߯��y�]�]';
$lang['export_smiles'] = '�p�z�Ʊ�N�{�������Ÿ��s�@�����y�]�], ���I�� %s�o��%s �U�� smiles.pak �ɮ�, �ýT�w����ɦW��.pak.';

$lang['smiley_add_success'] = '�s�����Ÿ��w�g���\�[�J';
$lang['smiley_edit_success'] = '���Ÿ��w�g������s';
$lang['smiley_import_success'] = '���y�]�]�w�Q���Q���J!';
$lang['smiley_del_success'] = '���Ÿ��w�Q���Q����';
$lang['Click_return_smileadmin'] = '�I�� %s�o��%s ��^���Ÿ��s��';


//
// User Management
//
$lang['User_admin'] = '�|���޲z';
$lang['User_admin_explain'] = '�b�o�ӱ���O��, �z�i�H�ܧ�|�����ӤH��ƥH�ίS��ﶵ. ���p�z�n�ק�|�����v��, �Шϥη|���θs�պ޲z���v���]�w�\��.';

$lang['Look_up_user'] = '�d�߷|��';

$lang['Admin_user_fail'] = '�L�k��s�|�����ӤH���';
$lang['Admin_user_updated'] = '�|�����ӤH��Ƥw�g������s';
$lang['Click_return_useradmin'] = '�I�� %s�o��%s ��^�|���޲z';

$lang['User_delete'] = '�R���|��';
$lang['User_delete_explain'] = '�Ŀ�o�̱N�|�R���|��, �o�Ӱʧ@�N�L�k�٭�';
$lang['User_deleted'] = '�|���Q���Q�R��.';

$lang['User_status'] = '�|���b���w�ҥ�';
$lang['User_allowpm'] = '���\�ϥΨp�H�T��';
$lang['User_allowavatar'] = '���\�ϥέӤH�Y��';

$lang['Admin_avatar_explain'] = '�z�i�H�R���|�����ӤH�Y��';

$lang['User_special'] = '�޲z���M��';
$lang['User_special_explain'] = '�z�i�H�ܧ�|�����b���ҥΪ��A�Ψ䥦�����v�|�����ﶵ�]�w, �@��|���L�k�ۦ��ܧ�o�ǳ]�w';


//
// Group Management
//
$lang['Group_administration'] = '�s�պ޲z';
$lang['Group_admin_explain'] = '�b�o�ӱ���O��, �z�i�H�޲z�Ҧ����|���s��, �z�i�H�إ�, �R���H�νs��{�����|���s��. �z�٥i�H���w�s�ղժ�, �]�w�s�ռҦ� (�}��/�ʳ�/����) �H�θs�ժ��R�W�M�y�z.';
$lang['Error_updating_groups'] = '�s�է�s�ɵo�Ϳ��~';
$lang['Updated_group'] = '�s�դw�g������s';
$lang['Added_new_group'] = '�s���s�դw�g���\�[�J';
$lang['Deleted_group'] = '�s�դw�Q���Q�R��';
$lang['New_group'] = '�إ߷s�s��';
$lang['Edit_group'] = '�s��s��';
$lang['group_name'] = '�s�զW��';
$lang['group_description'] = '�s�մy�z';
$lang['group_moderator'] = '�s�ղժ�';
$lang['group_status'] = '�s�ռҦ�';
$lang['group_open'] = '�}��s��';
$lang['group_closed'] = '�ʳ��s��';
$lang['group_hidden'] = '���øs��';
$lang['group_delete'] = '�R���s��';
$lang['group_delete_check'] = '�R���o�Ӹs��';
$lang['submit_group_changes'] = '�e�X��s';
$lang['reset_group_changes'] = '�M�����]';
$lang['No_group_name'] = '�z���\���w�@�ӦW�ٵ��o�Ӹs��';
$lang['No_group_moderator'] = '�z���\���w�s�ժ��ժ�';
$lang['No_group_mode'] = '�z�������w�s�ռҦ� (�}��/�ʳ�/����)';
$lang['No_group_action'] = '�S�����w���ʧ@';
$lang['delete_group_moderator'] = '�R���즳���s�ղժ�?';
$lang['delete_moderator_explain'] = '�p�G�z�ܧ�F�s�ղժ�, �Ŀ�o�ӿﶵ�|�N�즳���s�ղժ��q�s�դ�����, �_�h, �Ф��n�Ŀ�, �o�ӷ|���N���Ŭ��s�ժ����q����.';
$lang['Click_return_groupsadmin'] = '�I�� %s�o��%s ��^�s�պ޲z.';
$lang['Select_group'] = '��ܸs��';
$lang['Look_up_group'] = '�d�߸s��';


//
// Prune Administration
//
$lang['Forum_Prune'] = '�����ֳt�R��';
$lang['Forum_Prune_explain'] = '�o�Ӱʧ@�N�R���Ҧ��b���w�ɶ����S���^�Ъ��D�D. �p�G�z�S�����w�ɭ� (���), �Ҧ����D�D���N�|�Q�R��. ���O�L�k�R�����b�i�椤���벼�D�D�άO���i. �z������ʲ����o�ǥD�D.';
$lang['Do_Prune'] = '����R��';
$lang['All_Forums'] = '�Ҧ�����';
$lang['Prune_topics_not_posted'] = '�R���b�X�Ѥ��S���峹�^�Ъ��D�D';
$lang['Topics_pruned'] = '�D�D�R��';
$lang['Posts_pruned'] = '�峹�R��';
$lang['Prune_success'] = '���������峹�R��';


//
// Word censor
//
$lang['Words_title'] = '��r�L�o';
$lang['Words_explain'] = '�b�o�ӱ���O��, �z�i�H�إ�, �s��ΧR���L�o��r, �o�ǫ��w����r�N�|�Q�L�o�åH������r���. ���~, �|���]�N�L�k�ϥΧt���o�ǭ��w��r���W�٨ӵ��U. ���w���W�٤��\�ϥθU�Φr�� (*), �Ҧp: *test*  �]�A detestable, test* �]�A testing, *test �]�A detest.';
$lang['Word'] = '�L�o��r';
$lang['Edit_word_censor'] = '�s��L�o��r';
$lang['Replacement'] = '������r';
$lang['Add_new_word'] = '�s�W�L�o��r';
$lang['Update_word'] = '��s�L�o��r';

$lang['Must_enter_word'] = '�z������J�ݭn�L�o����r�Ψ������r';
$lang['No_word_selected'] = '�z�S����ܭn�s�誺�L�o��r';

$lang['Word_updated'] = '�z�ҿ�ܪ��L�o��r�w�g������s';
$lang['Word_added'] = '�s���L�o��r�w�g���\�[�J';
$lang['Word_removed'] = '�z�ҿ�ܪ��L�o��r�w�Q���Q����';

$lang['Click_return_wordadmin'] = '�I�� %s�o��%s ��^��r�L�o';


//
// Mass Email
//
$lang['Mass_email_explain'] = '�b�o�ӿﶵ��, �z�i�H�o�e�q�l�l��T�����Ҧ����|���άO�S�w���s��. �o�ʹq�l�l��N�Q�H�e�ܨt�κ޲z�����q�l�l��H�c, �åH�K��ƥ����覡�H�e���Ҧ�����H. �p�G����H�ƹL�h, �t�λݭn�������ɶ��Ӱ���o�Ӱʧ@, �Цb�T���e�X����@�ߵ���, <b>����</b>�b�{�ǧ������e��������ʧ@.';
$lang['Compose'] = '�q���T��'; 

$lang['Recipients'] = '����H'; 
$lang['All_users'] = '�Ҧ��|��';

$lang['Email_successfull'] = '�q���T���w�g�H�X';
$lang['Click_return_massemail'] = '�I�� %s�o��%s ��^�q�l�l��q��';


//
// Ranks admin
//
$lang['Ranks_title'] = '���ź޲z';
$lang['Ranks_explain'] = '�b�o�ӱ���O��, �z�i�H�b�s�W, �s��, �˵��H�ΧR�����ŦW��. �o�ǵ��űN�|�Q�Ω�|���޲z���\��.';

$lang['Add_new_rank'] = '�[�J�s������';

$lang['Rank_title'] = '���ŦW��';
$lang['Rank_special'] = '�S����';
$lang['Rank_minimum'] = '�峹�ƶq�ֻ̤ݨD';
$lang['Rank_maximum'] = '�峹�ƶq�̦h�ݨD';
$lang['Rank_image'] = '���Źϥ�';
$lang['Rank_image_explain'] = '�ϥγo�����өw�q���Źϥܪ����|';

$lang['Must_select_rank'] = '�z������ܤ@�ӵ��ŦW��';
$lang['No_assigned_rank'] = '�S�����w������';

$lang['Rank_updated'] = '���ŦW�٤w�g������s';
$lang['Rank_added'] = '�s�����ŦW�٤w�g���\�[�J';
$lang['Rank_removed'] = '���ŦW�٤w�Q���Q����';
$lang['No_update_ranks'] = '���ŦW�٤w�g���Q�����F, ���O����ϥγo�����Ū��|����ƨå���s. �z�������s�]�w�o�Ƿ|��������.';

$lang['Click_return_rankadmin'] = '�I�� %s�o��%s ��^���ź޲z';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = '�T�αb������';
$lang['Disallow_explain'] = '�b�o�ӿﶵ��, �z�i�H����T�Ϊ��|���b���W�� (�i�ϥθU�Φr�� \'*\'). �Ъ`�N, �z�L�k�T�Τw�g���U�ϥΪ��|���W��, �z�������R���o�ӷ|���b��, �~��ϥθT�αb�����\��.';

$lang['Delete_disallow'] = '�R��';
$lang['Delete_disallow_title'] = '�R���T�Ϊ��b���W��';
$lang['Delete_disallow_explain'] = '�z�i�H�q�M�椤����n�������T�αb���W��';

$lang['Add_disallow'] = '�s�W';
$lang['Add_disallow_title'] = '�s�W�T�Ϊ��b���W��';
$lang['Add_disallow_explain'] = '�z�i�H�ϥθU�Φr�� \'*\'�ӸT�νd����j���|���W��';

$lang['No_disallowed'] = '�S���T�Ϊ��b���W��';

$lang['Disallowed_deleted'] = '�z�ҿ�����T�αb���W�٤w�Q���Q����';
$lang['Disallow_successful'] = '�s���T�αb���W�٤w�g���\�[�J';
$lang['Disallowed_already'] = '�L�k�T�αz�ҿ�J���b���W��. �ӱb���W�٥i��w�b�T�βM�椺�Τw�Q���U�ϥ�';

$lang['Click_return_disallowadmin'] = '�I�� %s�o��%s ��^�T�αb������';


//
// Styles Admin
//
$lang['Styles_admin'] = '��������޲z';
$lang['Styles_explain'] = '�ϥγo�ӥ\��z�i�H�W�[, �����κ޲z�U�ؤ��P���������� (�d���ΧG���D�D) ���ѷ|����ܨϥ�.';
$lang['Styles_addnew_explain'] = '�H�U�M��]�t�Ҧ��i�ϥΪ��G���D�D. �o���M��W���G���D�D���|���w�˨� phpBB 2 ����Ʈw��. �n�w�˷s���G���D�D�Ъ������U�k�誺����s��.';

$lang['Select_template'] = '��ܽd���W��';

$lang['Style'] = '����';
$lang['Template'] = '�d��';
$lang['Install'] = '����w��';
$lang['Download'] = '�U��';

$lang['Edit_theme'] = '�s��G���D�D';
$lang['Edit_theme_explain'] = '�z�i�H�ϥΤU�C���s��G���D�D�]�w.';

$lang['Create_theme'] = '�s�W�G���D�D';
$lang['Create_theme_explain'] = '�z�i�H�ϥΤU�C���Ӭ����w���d���W�[�s���G���D�D. ��]�w�C��� (�z�����ϥΤQ���i��X, �Ҧp: FFFFFF) �z����]�t�_�l�r�� #, �|�Ҧp�U.. CCCCCC �����T����ܪk, #CCCCCC �h�O���~��.';

$lang['Export_themes'] = '��X�G���D�D';
$lang['Export_explain'] = '�b�o�Ӫ�����, �z�i�H��X���w�d�����G���D�D���. �ѲM�椤��ܫ��w���d����, �t�αN�|�إߧG���D�D���պA����ɮרøչ��x�s����w���d���ؿ�. �p�G��ƵL�k�x�s, �t�αN���\�z�U���o�Ӹ���ɮ�. �p�G�z�Ʊ�t�ίઽ���x�s�o���ɮ׸��, �z�����}����w�d���ؿ����g�J�v��. �p�G�z�ݭn��h�o�譱����T, �аѦ� phpBB 2 �ϥλ���.';

$lang['Theme_installed'] = '���w���G���D�D�w�g�w�˧���';
$lang['Style_removed'] = '���w����������w�q��Ʈw������. �n�q�z���t�Τ������������o�Ӫ�������, �z�����q /templates �������������d���ؿ�';
$lang['Theme_info_saved'] = '���w���G���D�D��Ƥw�g���\�x�s. �z�����ߧY�ק� theme_info.cfg ����Ū�ݩ� (�p�G�A�Ω���w���d���ؿ�)';
$lang['Theme_updated'] = '���w���G���D�D�w�Q��s. �z������X�s���G���D�D�]�w��';
$lang['Theme_created'] = '�G���D�D�w�Q�إ�. �z������X�G���D�D�]�w�ɮ�, �H�������`���ާ@�θ�Ʀw��';

$lang['Confirm_delete_style'] = '�z�T�w�n�R���o�Ӫ�������?';

$lang['Download_theme_cfg'] = '�t�εL�k�g�J�G���D�D���]�w�ɮ�. �Ы��U���s�ѱz���s�������U���o���ɮ�. ��z�U�����o���ɮץH��, �z�Y�i�N�ɮײ���]�t���d�����ؿ����U. �z�i�H���s�]�˳o���ɮץΥH���t�άO�䥦�z�Q�n���B�z�覡';
$lang['No_themes'] = '�z���w���d���èS���]�t���󪺧G���D�D. �n�إ߷s���G���D�D, �Ы��U���豱��x�� \'�إ�\' �s��';
$lang['No_template_dir'] = '�L�k�}�ҽd���ؿ�. �o���i��O�]�����ؿ��]�w�����iŪ�����ݩʩάO�ɮ׮ڥ����s�b';
$lang['Cannot_remove_style'] = '�z�L�k�����w�]����������. �Х��ܧ󪩭����w�]�����A���դ@��';
$lang['Style_exists'] = '���w����������W�٤w�g�s�b, �Ц^��W�@�B�ÿ�ܤ@�Ӥ��P���W��';

$lang['Click_return_styleadmin'] = '�I�� %s�o��%s ��^��������޲z';

$lang['Theme_settings'] = '�G���D�D�]�w';
$lang['Theme_element'] = '�G���D�D����';
$lang['Simple_name'] = '²���W��';
$lang['Value'] = '�ƭ�';
$lang['Save_Settings'] = '�x�s�]�w';

$lang['Stylesheet'] = 'CSS �˦���';
$lang['Background_image'] = '�I���Ϯ�';
$lang['Background_color'] = '�I���C��';
$lang['Theme_name'] = '�G���D�D�W��';
$lang['Link_color'] = '���`���s���C��';
$lang['Text_color'] = '��r�C��';
$lang['VLink_color'] = '���[�L���s���C�� (visited)';
$lang['ALink_color'] = '�ƹ����U���s���C�� (active)';
$lang['HLink_color'] = '�ƹ����L���s���C�� (hover)';
$lang['Tr_color1'] = '���C�C��@';
$lang['Tr_color2'] = '���C�C��G';
$lang['Tr_color3'] = '���C�C��T';
$lang['Tr_class1'] = '���C�ݩ����O�@';
$lang['Tr_class2'] = '���C�ݩ����O�G';
$lang['Tr_class3'] = '���C�ݩ����O�T';
$lang['Th_color1'] = '���ؼ��D�C��@';
$lang['Th_color2'] = '���ؼ��D�C��G';
$lang['Th_color3'] = '���ؼ��D�C��T';
$lang['Th_class1'] = '���ؼ��D�ݩ����O�@';
$lang['Th_class2'] = '���ؼ��D�ݩ����O�G';
$lang['Th_class3'] = '���ؼ��D�ݩ����O�T';
$lang['Td_color1'] = '��Ʈ��C��@';
$lang['Td_color2'] = '��Ʈ��C��G';
$lang['Td_color3'] = '��Ʈ��C��T';
$lang['Td_class1'] = '��Ʈ��ݩ����O�@';
$lang['Td_class2'] = '��Ʈ��ݩ����O�G';
$lang['Td_class3'] = '��Ʈ��ݩ����O�T';
$lang['fontface1'] = '�r�������@';
$lang['fontface2'] = '�r�������G';
$lang['fontface3'] = '�r�������T';
$lang['fontsize1'] = '�r���j�p�@';
$lang['fontsize2'] = '�r���j�p�G';
$lang['fontsize3'] = '�r���j�p�T';
$lang['fontcolor1'] = '�r���C��@';
$lang['fontcolor2'] = '�r���C��G';
$lang['fontcolor3'] = '�r���C��T';
$lang['span_class1'] = 'Span �ݩ����O�@';
$lang['span_class2'] = 'Span �ݩ����O�G';
$lang['span_class3'] = 'Span �ݩ����O�T';
$lang['img_poll_size'] = '����έp�q�ϥܤj�p [px]';
$lang['img_pm_size'] = '�p�H�T���ϥζq�ϥܤj�p [px]';


//
// Install Process
//
$lang['Welcome_install'] = '�w��w�� phpBB 2 �Q�װϨt��';
$lang['Initial_config'] = '�򥻳]�w';
$lang['DB_config'] = '��Ʈw�]�w';
$lang['Admin_config'] = '�t�κ޲z���]�w';
$lang['continue_upgrade'] = '�b�z�U�����t�γ]�w�� (config.php) ����, �z�i�H���U \'�~��ɯ�\' �����s�~��U�@�B. �Цb�Ҧ��ɯŵ{�ǧ�����A�W�ǳ]�w��.';
$lang['upgrade_submit'] = '�~��ɯ�';

$lang['Installer_Error'] = '�w�˹L�{���o�Ϳ��~';
$lang['Previous_Install'] = '�z�w�����w�˵{��';
$lang['Install_db_error'] = '�b���է�s��Ʈw�ɵo�Ϳ��~';

$lang['Re_install'] = '�z���e�w�˪� phpBB 2 �Q�װϨt�Τ��b�ϥΤ�. <br /><br />�p�G�z�Ʊ歫�s�w�� phpBB 2 �Q�װϨt�νп�� \'�O\' �����s.  �Ъ`�N, ����o�Ӱʧ@�N�|�����Ҧ����{�s���, �ӥB���|�@���󪺳ƥ�! �t�κ޲z���b���αK�X�N�Q���s�إ�, �Ҧ��]�w�]�N���|�Q�O�d. <br /><br />�Цb�z���U \'�O\' �����s�e�ԷV�Ҽ{!';

$lang['Inst_Step_0'] = '�P�±z��� phpBB 2 �Q�װϨt��. �z������g�U�C��ƥH�����w�˵{��. �b�w�˫e, �Х��T�w�z�ҭn�ϥΪ���Ʈw�w�g�إ�.';

$lang['Start_Install'] = '�}�l�w��';
$lang['Finish_Install'] = '�����w��';

$lang['Default_lang'] = '�w�]�Q�װϻy�t';
$lang['DB_Host'] = '��Ʈw���A���D���W��';
$lang['DB_Name'] = '�z����Ʈw�W��';
$lang['DB_Username'] = '��Ʈw�ϥΪ̱b��';
$lang['DB_Password'] = '��Ʈw�K�X';
$lang['Database'] = '�z����Ʈw';
$lang['Install_lang'] = '��ܭn�w�˪��y�t';
$lang['dbms'] = '��Ʈw�榡';
$lang['Table_Prefix'] = '��Ʈw�����r�� (Prefix)';
$lang['Admin_Username'] = '�t�κ޲z���b���W��';
$lang['Admin_Password'] = '�t�κ޲z���K�X';
$lang['Admin_Password_confirm'] = '�t�κ޲z���K�X [ �A�T�{ ]';

$lang['Inst_Step_2'] = '�z���t�κ޲z���b���w�Q�إ�, �Q�װϪ��򥻦w�ˤw�g����, �y�� �z�N�Q���ަܰQ�װϪ��޲z����.  �нT�{�z�w�ˬd�򥻲պA���]�w�ð��A���ק�. �A�@���P�±z��ܨϥ� phpBB 2 �Q�װ�.';

$lang['Unwriteable_config'] = '�z���t�γ]�w�ɵL�k�g�J, �z�i�H�Q�ΤU����s�U���]�w��, �A�N�o���ɮפW�Ǧ� phpBB 2 �Q�װϪ���Ƨ�. �b�����o�ǰʧ@����z�����ϥΨt�κ޲z���b����K�X�n�J�öi�J�t�κ޲z����x (�b�z�n�J��, �U��N�X�{�@�Ӷi�J\"�t�κ޲z����x\"���s��) �ˬd�z���򥻲պA�]�w. �̫�P�±z��ܨϥΦw�� phpBB 2 �Q�װϨt��.';
$lang['Download_config'] = '�U���]�w��';

$lang['ftp_choose'] = '��ܤU���覡';
$lang['ftp_option'] = '<br />�b FTP �]�w������, �z�i�H���զ۰ʤW�Ǫ��\��.';
$lang['ftp_instructs'] = '�z�w�g��ܹ��ըϥ� FTP �h�۰ʦw�˱z�� phpBB 2 �Q�װ�.  �п�J�U�C��ƨ�²�Ƴo�ӹL�{. �Ъ`�N: FTP ���|����z�w�� phpBB 2 �� FTP ���|�����ۦP.';
$lang['ftp_info'] = '��J�z�� FTP ��T';
$lang['Attempt_ftp'] = '���ըϥ� FTP �W�ǳ]�w��:';
$lang['Send_file'] = '�ۦ�W�ǳ]�w��';
$lang['ftp_path'] = '�w�� phpBB 2 �� FTP ���|:';
$lang['ftp_username'] = '�z�� FTP �n�J�W��:';
$lang['ftp_password'] = '�z�� FTP �n�J�K�X:';
$lang['Transfer_config'] = '�}�l�ǿ�';
$lang['NoFTP_config'] = 'FTP �W�ǳ]�w�ɥ���. �ФU���]�w�ɨù��դ�ʤW��.';

$lang['Install'] = '����w��';
$lang['Upgrade'] = '�t�Τɯ�';


$lang['Install_Method'] = '�п�ܦw�˼Ҧ�';

$lang['Install_No_Ext'] = '�z�D���W�� PHP �]�w�ä��䴩�z�ҿ�ܪ���Ʈw���A';

$lang['Install_No_PCRE'] = 'phpBB2 �ݭn�ϥΨ� Perl-Compatible Regular Expressions Module, �ӱz�� PHP �]�w�ä��䴩�o���\��';

//
// That's all Folks!
// -------------------------------------------------

?>