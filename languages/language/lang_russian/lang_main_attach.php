<?php
/***************************************************************************
 *                            lang_main_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.2 2003/08/02 10:02:46 bobt Exp $
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

//russian translate by 10c0 (10c0@needforrace.ru)
// Auth Related Entries
$lang['Rules_attach_can'] = 'Вы <b>можете</b> присоединять файлы в этом форуме';
$lang['Rules_attach_cannot'] = 'Вы <b>неможете</b> присоединять файлы в этом форуме';
$lang['Rules_download_can'] = 'Вы <b>можете</b> скачивать файлы в этом форуме';
$lang['Rules_download_cannot'] = 'Вы <b>неможете</b> скачивать файлы в этом форуме';
$lang['Sorry_auth_view_attach'] = 'К сожалению вы не имеете права просматривать или скачивать это вложение';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Описание'; // used in Administration Panel too...
$lang['Downloaded'] = 'Скачано';
$lang['Download'] = 'Скачать'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Размер';
$lang['Viewed'] = 'Просмотрено';
$lang['Download_number'] = '%d Раз(а)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'недопустимое разрешение файла \'%s\' '; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Управление вложениями';
$lang['Attach_posting_cp_explain'] = 'Если вы нажмете на Добавить сложение - вы увидите форму для создания волжения.<br />Если вы нажмете на Добавленные вложения - вы увидите список добавленых вложений и сможете их отредактировать <br />Если вы захотите заменить (Закачать новую версию) вам необходимы обе ссылки. Добавьте вложение как вы обычно это делаете, не нажимайте снова на Добавить вложение, нажмите на Обновить вложение около файла, который вы хотите обновить.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Добавить вложение';
$lang['Add_attachment_title'] = 'Добавить вложение';
$lang['Add_attachment_explain'] = 'Если вы не хотите присоединять вложения к вашему сообщению, оставьте это поле пустым';
$lang['File_name'] = 'Имя файла';
$lang['File_comment'] = 'Комментарий';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Вложения';
$lang['Options'] = 'Опции';
$lang['Update_comment'] = 'Обновить комментарий';
$lang['Delete_attachments'] = 'Удалить вложения';
$lang['Delete_attachment'] = 'Удалить вложение';
$lang['Delete_thumbnail'] = 'Удалить thumbnail';
$lang['Upload_new_version'] = 'Закачать н овую версию';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s неправильное имя файла'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Вложение слишком большое.<br /><br />';
$lang['Attachment_php_size_overrun'] = 'Вложение слишком большое.<br />Максимальный размер: %d MB.<br />'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Это расширение файла запрещено'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Вам запрещено выкладывать файлы с расширением %s в этом форуме'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Вложение слишком большое.<br />Максимальный размер: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'К сожалению достигнут предел допустимого размера всех вложений.Свяжитесь с администрацией.';
$lang['Too_many_attachments'] = 'Слишком много вложений.Максимально число -  %d вложений в одном сообщении'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Вложеная картинка должна быть меньше %d пикс. в ширину и %d пикс. в высоту'; 
$lang['General_upload_error'] = 'Ошибка закачки вложения: невозможно загрузить вложение в  %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Вы должны что-то ввести в поле \'Добавить вложение\' ';
$lang['Error_missing_old_entry'] = 'Невозможно обновить вложение, старое вложение не обнаружено';




// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'К сожалению был достигнут максимальный размер всех вложений в вашей папке Входящие. Пожалуйста удалите некоторые файлы.';
$lang['Attach_quota_receiver_pm_reached'] = 'К сожалению был достигнут максимальный размер всех вложений у \'%s\'. Пожалуйста дайте ему\ей знать.И попросите его\ее удалить некоторые файлы.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Вы не выбрали вложение для просмотра\скачивания';
$lang['Error_no_attachment'] = 'Выбранное вложение больше не существует';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Вы действительно хотите удалить выбранные вложения??';
$lang['Deleted_attachments'] = 'Выбранные вложения успешно удалены.';
$lang['Error_deleted_attachments'] = 'Невозможно удалить вложения.';
$lang['Confirm_delete_pm_attachments'] = 'Вы действительно хотите удалить все вложения в этом Личном Сообщении?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Вложения отключены.';

$lang['Directory_does_not_exist'] = 'Директория \'%s\' не существует или не найдена.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Пожалуйста проверьше что  \'%s\' - директория.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Невозможно записать файлы в \'%s\'. Вам необходимо создать директорию для закачек и установить права доступа 777 или установите \'аттрибуты\' директории -  rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Невозможно соедениться с FTP сервером : \'%s\'. Пожалуйста проверьте настройки.';
$lang['Ftp_error_login'] = 'Невозможно войти на FTP сервер. Имя пользователя \'%s\' или пароль неправильные. Пожалуйста проверьте настройки.';
$lang['Ftp_error_path'] = 'Нет доступа к ftp директории : \'%s\'. Пожалуйста проверьте настройки.';
$lang['Ftp_error_upload'] = 'Невозможно загрузить файлы в ftp директорию : \'%s\'. Пожалуйста проверьте настройки.';
$lang['Ftp_error_delete'] = 'Невозможно удалить фалы из ftp директории : \'%s\'. Пожалуйста проверьте настройки.<br />Another reason for this error could be the non-existence of the Attachment, please check this first in Shadow Attachments.';
$lang['Ftp_error_pasv_mode'] = 'Невозможно Включить\Выключить Пассивный режим FTP';


// Attach Rules Window
$lang['Rules_page'] = 'Правила для вложений';
$lang['Attach_rules_title'] = 'Разрешенные группы разрешений и их размер';
$lang['Group_rule_header'] = '%s -> Максимальный размер: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Разрешенные размеры и расширения';
$lang['Note_user_empty_group_permissions'] = 'Примечание:<br />Обычно вы можете добавлять вложения в форум, <br />но как только устанавливаются специальные права для вложений, <br />вы не сможете использовать вложения. Если вы попытаетесь, <br />вы получите сообщение об ошибке.<br />';



// Quota Variables
$lang['Upload_quota'] = 'Квота закачек';
$lang['Pm_quota'] = 'Квота личных сообщений';
$lang['User_upload_quota_reached'] = 'К сожалению вы достигли лимита квоты закачек %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Панель управления вложениями';
$lang['UACP'] = 'Панель управления вложениями';
$lang['User_uploaded_profile'] = 'Закачано: %s';
$lang['User_quota_profile'] = 'Квота: %s';
$lang['Upload_percent_profile'] = '%d%%';

// Common Variables
$lang['Bytes'] = 'Байт';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Поиск вложений';
$lang['Test_settings'] = 'тестировать настройки';
$lang['Not_assigned'] = 'Не предписано';
$lang['No_file_comment_available'] = 'Нет комментария к файлу';
$lang['Attachbox_limit'] = 'Вы закачали %d%% от максимального размера закачек';
$lang['No_quota_limit'] = 'Нет ограничения';
$lang['Unlimited'] = 'Неограничено';

?>