<?php
/***************************************************************************
 *                            lang_main_attach.php [Arabic]
 *                              -------------------
 *     begin                : Tue May 14 2002
 *     copyright            : (C) 2002 Mahmood Hassan
 *     email                : webmaster@wenak.com
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:29:18 bob Exp $
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
$lang['Rules_attach_can'] = "<b>ЪгЪиэк </b> ЧбнЧо усн нэ хаЧ ЧсуфЪЯь ";
$lang['Rules_attach_cannot'] = "<b>сЧ ЪгЪиэк </b> ЧбнЧо усн нэ хаЧ ЧсуфЪЯь ";
$lang['Rules_download_can'] = "<b>ЪгЪиэк </b> Ъфвэс уснЧЪ нэ хаЧ ЧсуфЪЯь ";
$lang['Rules_download_cannot'] = "<b>сЧ ЪгЪиэк </b>  Ъфвэс уснЧЪ нэ хаЧ ЧсуфЪЯь ";
$lang['Sorry_auth_view_attach'] = 'кнцЧ цспфп лэб уебЭ судЧхЯЩ Уц Ъфвэс хаЧ Чсубно';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'дбЭ'; // used in Administration Panel too...
$lang['Downloaded'] = 'Ъу Ъфвэсх';
$lang['Download'] = 'Ъфвэс'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'ЭЬу Чсусн';
$lang['Viewed'] = 'дцхЯ';
$lang['Download_number'] = '%d убЩ(убЧЪ)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'ЧсХуЪЯЧЯ  \'%s\' Ъу Ъкиэсх уф оШс угФцс ЧсуфЪЯь , цксэх су эЪу кбж хаЧ Чсубно .'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'сцЭЩ ЧсЪЭпу сХсеЧо ЧсубноЧЪ';
$lang['Attach_posting_cp_explain'] = 'ХаЧ оуЪ ШЧсжли ксь Ужн Чсубно , гцн Ъбь ЧсефЯцо ЧсЮЧе сХсеЧо ЧсубноЧЪ .<br />ХаЧ оуЪ ШЧсжли ксь ЧсубноЧЪ ЧсусеоЩ , гцн Ъбь оЧЦуЩ ШЧсуснЧЪ ЧсубноЩ цгЪЪупф уф ЪЭбэбхЧ .<br />ХаЧ блШЪ нэ Ълэб  (ЪЭуэс фгЮЩ ЬЯэЯЩ ) ссубно , нэЬШ ксэп Чсжли ксь ЧсцесЪэф . Усео Чсубно пуЧ Ънкс нэ ЧсЮицЧЪ ЧскЧЯэЩ , цксэх сЧ Ъжли ксь ЧсеЧо Чсубно , нжсЧ кфх оу ШЧсжли ксь ЪЭуэс фгЮЩ ЬЯэЯЩ нэ упЧф ХЯЮЧс Чсубно Чсаэ ЪблШ нэ ЪЭЯэЫх .';

// Posting/PM -> Posting Attachments   
$lang['Add_attachment'] = "Ужн усн ";
$lang['Add_attachment_title'] = "ЧжЧнЩ Чсусн ";
$lang['Add_attachment_explain'] = "ЧЪбп ЧсЮЧфх нЧблЩ ЧаЧ су Ъпф ЪблШ нэ ЧжЧнЩ Уэ убноЧЪ Чсь уцжцкп ";
$lang['File_name'] = "Чгу Чсусн ";
$lang['File_comment'] = "ЧсЪксэо ксь Чсусн ";

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = "ЧсубноЧЪ ЧсусеоЩ ";
$lang['Options'] = 'ЮэЧбЧЪ';
$lang['Update_comment'] = "ЪЭЯэЫ ЧсЪксэо ";
$lang['Delete_attachments'] = "Эан ЧсубноЧЪ ";
$lang['Delete_attachment'] = "Эан Чсубно ";
$lang['Delete_thumbnail'] = 'ХЭан ЧсШеуЩ';
$lang['Upload_new_version'] = 'ЪЭуэс фгЮЩ ЬЯэЯЩ';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = "%s хц усн лэб оЧфцфэ "; // replace %s with given filename
$lang['Attachment_php_size_na'] = "Чсусн Чсубно пШэб ЬЯЧ .<br />лэб оЧЯб ЧсЭецс ксь Уоеь ЭЬу уЭЯЯ нэ  PHP."; 
$lang['Attachment_php_size_overrun'] = "Чсусн Чсубно пШэб ЬЯЧ .<br />Уоеь ЭЬу уЭЯЯ нэ  PHP: %d MB"; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = "ЧсЧуЪЯЧЯ  %s лэб угуцЭ "; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'ХфЪ лэб уебЭ нэ ШХсеЧо уснЧЪ аЧЪ ЧсХуЪЯЧЯ  %s нэ хаЧ ЧсуфЪЯь '; // replace %s with the Extension
$lang['Attachment_too_big'] = "Чсусн Чсубно пШэб ЬЯЧ .<br />Уоеь ЭЬу хц : %d %s"; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = "кнцЧ , соЯ цес ЧсЭЯ ЧсУоеь сЭЬу Чсусн спс ЧсубноЧЪ . ЧсбЬЧС убЧгсЩ угФцс ЧсуфЪЯь ЧаЧ пЧф сЯэп Уэ гФЧс .";
$lang['Too_many_attachments'] = "лэб оЧЯб ксь ЧжЧнЩ Чсубно ,сУф ЧсЭЯ ЧсУоеь скЯЯ ЧсубноЧЪ  нэ хаЧ ЧсуфЪЯь ц хц  %d оЯ ЧфЪхь "; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'эЬШ Уф эпцф уоЧг Чсубно/ЧсецбЩ Уос уф  %d Шпгс цсЧ эЪкЯь  %d Шпгс ШЧсфгШЩ ссХбЪнЧк '; 
$lang['General_upload_error'] = "ЮиУ нэ ЧсЪЭуэс : лэб оЧЯб ксь ЪЭуэс Чсусн Чсь  %s"; // replace %s with local path 

$lang['Error_empty_add_attachbox'] = 'эЬШ ксэп ХЯЮЧс дэЦЧ нэ ЧсефЯцо  \'ЧсеЧо Чсубно \' ';
$lang['Error_missing_old_entry'] = 'лэб оЧЯб ксь ЪЭЯэЫ Чсубно , су эЪу ЧскЫцб ксь ЧсХЯЮЧс ЧсоЯэу ссубно ';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = "кнцЧ , соЯ цес ЧсЭЯ ЧсУоеь сЭЬу ЧсуснЧЪ спс ЧсубноЧЪ нэ ефЯцо бгЧЦсп ЧсЮЧеЩ . ЧсбЬЧС Эан Шкж ЧсубноЧЪ ЧсугЪсуЩ / ЧсубгсЩ .";
$lang['Attach_quota_receiver_pm_reached'] = "кнцЧ , ЧсЭЯ ЧсУоеь сЭЬу Чсусн спс ЧсубноЧЪ нэ ефЯцо ЧсбгЧЦс ЧсЮЧеЩ см '%s' оЯ цес . ЧсбЬЧС ЧЮШЧбх Шасп , Уц ЧфЪйб ЭЪь эоцу/Ъоцу ШЭан Шкж уф убноЧЪх/убноЧЪхЧ.";

// Errors -> Download
$lang['No_attachment_selected'] = "су Ъоу ШЧЮЪэЧб Чсубно ссЪфвэс Уц ЧсудЧхЯЩ .";
$lang['Error_no_attachment'] = "Чсубно ЧсуЮЪЧб сэг сх цЬцЯ ШкЯ ЧсТф ";

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'хс УфЪ уЪУпЯ уф Уфп ЪбэЯ Эан Чсубно ЧсуЮЪЧбП ';
$lang['Deleted_attachments'] = 'соЯ Ъу Эан Чсубно ЧсуЮЪЧб .';
$lang['Error_deleted_attachments'] = 'су эпф ШХгЪиЧкЪфЧ Эан ЧсубноЧЪ .';
$lang['Confirm_delete_pm_attachments'] = 'хс УфЪ уЪУпЯ уф блШЪп нэ Эан Ьуэк ЧсубноЧЪ ЧсусеоЩ нэ ЧсбгЧЦс ЧсЮЧеЩП ';

// General Error Messages
$lang['Attachment_feature_disabled'] = "усЧуЭ Чсубно укисЩ .";

$lang['Directory_does_not_exist'] = "ЧсЯсэс  '%s' лэб уцЬцЯ Уц су эЪу ЧскЫцб ксэх ."; // replace %s with directory
$lang['Directory_is_not_a_dir'] = "ЧсбЬЧС ЧсЪУпЯ ЧаЧ пЧф  '%s' хц ЧсЯсэс ."; // replace %s with directory
$lang['Directory_not_writeable'] = "ЧсЯсэс  '%s' лэб уобцС . эЬШ ксэп ЧфдЧС цЪЭуэс ЧсугЧб ц  chmod Чсь 777 (Уц лэб ЧсуспэЩ Чсь  httpd-servers ЧсЮЧе Шп ) сЪЭуэс ЧсуснЧЪ .<br />If you have only plain ftp-access change the 'Attribute' of the directory to rwxrwxrwx."; // replace %s with directory

$lang['Ftp_error_connect'] = "лэб оЧЯб ксь ЧсЧЪеЧс Шм FTP Server: '%s'. ЧсбЬЧС ЧсЪУпЯ уф  FTP ЧкЯЧЯЧЪ .";
$lang['Ftp_error_login'] = "лэб оЧЯб ксь ЪгЬэс ЧсЯЮцс Чсь  FTP Server. Чгу ЧсугЪЮЯу  '%s' Уц псуЩ Чсубцб лэб еЭэЭЩ . ЧсбЬЧС ЧсЪУпЯ уф ЧкЯЧЯЧЪ  FTP.";
$lang['Ftp_error_path'] = "лэб оЧЯб ксь ЧсЯЮцс нэ Ясэс Чс  ftp : '%s'. ЧсбЬЧС ЧсЪУпЯ уф ЧкЯЧЯЧЪ Чс  FTP .";
$lang['Ftp_error_upload'] = "лэб оЧЯб ксь ЪЭуэс Чсусн Чсь Ясэс Чс  ftp : '%s'.  ЧсбЬЧС ЧсЪУпЯ уф ЧкЯЧЯЧЪ Чс  FTP .";
$lang['Ftp_error_delete'] = "лэб оЧЯб ксь Эан Чсусн уф Ясэс Чс  ftp : '%s'.  ЧсбЬЧС ЧсЪУпЯ уф ЧкЯЧЯЧЪ Чс  FTP .<br />гШШ ТЮб схаЧ ЧсЮиУ хц Уф хаЧ Чсубно лэб уцЬцЯ , ЧсбЬЧС ЧсЪУпЯ уф хаЧ УцсЧ нэ йс ЧсубноЧЪ .";
$lang['Ftp_error_pasv_mode'] = 'Unable to enable/disable FTP Passive Mode';

// Attach Rules Window
$lang['Rules_page'] = 'дбци Чсубно';
$lang['Attach_rules_title'] = 'уЬуцкЩ ЧсХуЪЯЧЯЧЪ ЧсугуцЭЩ цУЭЬЧухЧ ';
$lang['Group_rule_header'] = '%s -> Уоеь ЭЬу ссЪЭуэс : %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'ЧсХуЪЯЧЯЧЪ ЧсугуцЭЩ цЭЬухЧ ';
$lang['Note_user_empty_group_permissions'] = 'усЧЭйЩ:<br />УфЪ угуцЭ сп ШХсеЧо ЧсубноЧЪ нэ хаЧ ЧсуфЪЯь иШэкэЧ , <br />цспф фйбЧ ШУфх цсЧ уЬуцкЩ ссХуЪЯЧЯ угуцЭ ШхЧ ссео хфЧ , <br />нХфх сЧ эупфп сео Уэ дэЦ . ХаЧ ЭЧцсЪ асп , <br />гцн ЪЭес ксь бгЧсЩ ЧсЮиУ .<br />';

// Quota Variables
$lang['Upload_quota'] = 'гон ЧсЪЭуэс';
$lang['Pm_quota'] = 'гон ЧсбгЧЦс ЧсЮЧеЩ';
$lang['User_upload_quota_reached'] = 'кнцЧ , соЯ цесЪ Чсь ЧсЭЯ ЧсУоеь сгон ЧсЪЭуэс цхц  %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'сцЭЩ ЪЭпу ЧсубноЧЪ ссугЪЮЯу';
$lang['UACP'] = 'сцЭЩ ЪЭпу ЧсубноЧЪ ссугЪЮЯу';
$lang['User_uploaded_profile'] = 'Ъу ЧсЪЭуэс: %s';
$lang['User_quota_profile'] = 'Чсгон: %s';
$lang['Upload_percent_profile'] = '%d%% ссуЬуцк Чспсэ';

// Common Variables
$lang['Bytes'] = 'ШЧэЪв';
$lang['KB'] = 'пэсцШЧэЪ';
$lang['MB'] = 'уэлЧШЧэЪ';
$lang['Attach_search_query'] = "ЧШЭЫ кф убноЧЪ";
$lang['Test_settings'] = 'ЪЬбШЩ ЧсХкЯЧЯЧЪ';
$lang['Not_assigned'] = 'лэб упсн ';
$lang['No_file_comment_available'] = "сЧ эцЬЯ Уэ Ъксэо ксь Чсусн ";
$lang['Attachbox_limit'] = 'ефЯцо ЧсубноЧЪ ЧсЮЧе Шп усэЦ Шм %d%% ';
$lang['No_quota_limit'] = 'сЧ ЭЯ ссгон';
$lang['Unlimited'] = 'лэб уЭЯЯ';

?>