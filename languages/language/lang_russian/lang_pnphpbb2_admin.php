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
$lang['PNphpBB2_Install'] = "Инсталляция PNphpBB2";
$lang['PNphpBB2_Install_Title'] = "<h4>Инсталлируем таблицы PNphpBB2 " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Install_Complete'] = "<p><b>Основная установка PNphpBB2 завершена.<br /><br />Нажмите " . $lang['Finish_Install'] . " чтобы вернуться на страницу администрирования, затем активируйте модуль PNphpBB2.<br /><br />Ссылка на управление модулем (PNphpBB2) находится на странице администрирования.<br /><br />Пожалуйста проверьте Основную Конфигурацию Форума преже чем начать использовать его. Спасибо за выбор PNphpBB2.</b></p>";

// Update
$lang['PNphpBB2_Upgrade'] = "Обновление PNphpBB2";
$lang['PNphpBB2_Move_Tables_No'] = "<p><b>Таблицы уже существуют в " . $table_prefix . "*. Таблицы находящиеся в " . $old_table_prefix . " немогут быть удалены.</b></p>";
$lang['PNphpBB2_Move_Tables_Yes'] = "<h4>Перенос таблиц</h4>";
$lang['PNphpBB2_Move_Complete'] = "<h4>Таблицы передвинуты в " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Database_Type'] = "Тип DB";
$lang['PNphpBB2_Prev_Version'] = "Предыдущая версия &nbsp;:: ";
$lang['PNphpBB2_Upgrade_Version'] = "Обновленная версия &nbsp;:: ";
$lang['PNphpBB2_Update_Schemas'] = "<h4>Обновление схеммы БД</h4>";
$lang['PNphpBB2_No_Updates'] =  "<h4>Обновления не требуются</h4>";
$lang['PNphpBB2_Update_Data'] = "<h4>Обновление информации</h4>";
$lang['PNphpBB2_Attach'] = "AВерсия МОДа Вложений ";
$lang['PNphpBB2_Updating_Paths'] = "<h4>Обновление таблиц конфигурации</h4>";
$lang['PNphpBB2_Delete_Themes'] = "<h4>Удаление записей старых тем\стилей</h4>";
$lang['PNphpBB2_Install_Themes'] = "<h4>Установка новых тем (PNTheme-1, PNLite-2, subSilver-3)</h4>";
$lang['PNphpBB2_Board_Theme'] = "<h4>Установка темы по умолчанию - PNTheme</h4>";
$lang['PNphpBB2_User_Theme'] = "<h4>Установка темы для всех пользователей - PNTheme</h4>";
$lang['PNphpBB2_Clear_Sessions'] = "<h4>CУдаление ВСЕХ сессия из таблицы сессий</h4>";
$lang['PNphpBB2_Cant_SQL'] = "<p>НЕВОЗМОЖНО ИЗМЕНИТЬ ТАБЛИЦУ, ПОЖАЛУЙСТА ПРОИЗВЕДИТЕ СЛЕДУЮЩИЕ ДЕЙСТВИЯ:<br />В PHPBB_QUOTA_LIMITS, ИЗМЕНИТЕ QUOTA_LIMIT С INT НА BIGINT.</p>";
$lang['PNphpBB2_Update_Complete'] = "<p><b>Обновление PNphpBB2 завершено<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Если у вас возникли какие-либо ошибки в процессе установки, пожалуйста сохраните эту страницу и посетите форумы на www.pnphpbb.com для получения помощи.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Пожалуйста активируйте модуль, затем проверьте все настройки в Панели Администратора.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Если был установлен МОД вложений, убедитесь что он включен, если вы хотите его использовать.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Спасибо за выбор PNphpBB2</b></p>";
$lang['PNphpBB2_phpBB_Tables_Found'] = "<h5> таблицы phpBB_* были найдены в вашей БД. ОЧЕНЬ важно";
$lang['PNphpBB2_phpBB_Tables_Found'] .= "чтобы вы поняли что делает этот скрипт. </h5>";
$lang['PNphpBB2_three_options'] = "У вас есть три (3) варианта действий.";
$lang['PNphpBB2_option_one'] = "1) Обновить существующую версию PNphpBB2 .10b, phpBB2pnmod-203,";
$lang['PNphpBB2_option_one'] .= " phpBB2pnmod-203-Attachments, или phpBB2pnmod-F.";
$lang['PNphpBB2_option_two'] = "2) Обновить отдельный форум phpBB2 (Version 2.0.1-2.0.4)";
$lang['PNphpBB2_option_three'] = "3) Отменить";
$lang['PNphpBB2_Upgrade_Disclaimer'] = "ВАЖНО! Поймите, что если вы выберите вариант 2, ВСЕ пользователи PostNuke ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "будут заменены пользователями  phpBB2";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "</br></br>Будьте уверенны что вы сделали backup БД PostNuke и phpBB2 ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "";
$lang['PNphpBB2_bad_version_1'] = "Вы можете сделать обновление, только при условии наличия у вас версии не меньше 2.0.1. Ваша версия - 2";
$lang['PNphpBB2_bad_version_2']  = "</br>Пожалуйста проверьте версию прежде чем продолжить.";
$lang['PNphpBB2_bad_version_3'] = "Ваша версия не нуждается в обновлении, Обнаруженная версия -  ";
$lang['PNphpBB2_no_version'] = "невозможно получить инфрмацию о версии.";
$lang['PNphpBB2_Updating_links'] = "Updating post links";

// Removal
$lang['PNphpBB2_Remove_Prompt'] = "Удалить PNphpBB2";
$lang['PNphpBB2_Remove_Text'] = "Вы хотите удалить PNphpBB2 и все связанные таблицы (" . $table_prefix . "*).<br /><br />Все данные будут потерянны, вы уверенны что хотите это сделать?";
$lang['PNphpBB2_Remove_Title'] = "<h4>Удаление таблиц PNphpBB2 из " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Remove_Notes'] = "<p><b>Таблицы PNphpBB2 удалены. Чтобы завершить процесс -вернитесь на страницу Администрирования и Удалите PNphpBB2 снова.</b></p>";

// General
$lang['PNphpBB2_Running'] = "Выполняется";
$lang['PNphpBB2_Failed'] = "ОШИБКА";
$lang['PNphpBB2_ButOK'] = "Но ОК!";
$lang['PNphpBB2_Completed'] = "Завершено";
$lang['PNphpBB2_Done'] = "Сделано";
$lang['PNphpBB2_Aborted'] = "Прервано";
$lang['PNphpBB2_Cancel'] = "Отменить";
$lang['PNphpBB2_Progress'] = "<h4>Прогресс</h4>";
$lang['PNphpBB2_Some_Failed'] = "<p><b>Неудалось выполнить некоторые запросы, выражения показаны ниже:<br />(возможно вам придется в ручную добавить, изменить или удалить некоторые записи)</b></p><br />";
$lang['PNphpBB2_No_Errors'] = "<h4>Нет ошибок</h4>";
$lang['PNphpBB2_Results'] = "<h4>Результат</h4>";
$lang['PNphpBB2_Installing'] = "Установка";
$lang['PNphpBB2_Updating'] = "UОбновление";
$lang['PNphpBB2_Important'] = "ВАЖНО";

// Additional administration links
$lang['Users_aguide'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/attach_user_guide.html\" target=\"_blank\">Руководство пользователя</a>";
$lang['Forum_Manual'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/phpBB_2_0_Users_Guide.html\" target=\"_blank\">Инструкция</a>";

// PNphpBB2 config options
$lang['pnphpbb2_settings'] = "Конфигурация PNphpBB2";
$lang['pnphpbb2_settings_explain'] = "Здесь вы можете задать настройки специфичные для модуля PNphpBB2";
$lang['pnphpbb2_options'] = "PNphpBB2 Опции\МОДы";
$lang['pnphpbb2_quickreply'] = "Использовать Быстрый Ответ";
$lang['pnphpbb2_quickreply_explain'] = "Разрешить\запретить функцию быстрого ответа.";
$lang['pnphpbb2_logo_on'] = "Отображать PNphpBB2 логов форуме";
$lang['pnphpbb2_logo_on_explain'] = "Вкл\Выкл лого наверху форума (Если вы не желаете использовать лого в шапке сайта, ПОЖАЛУЙСТА оставьте Надпись Credits внизу страницы)";
$lang['pnphpbb2_shorturls'] = "КОроткие URL в сообщениях";
$lang['pnphpbb2_shorturls_explain'] = "Вкл\Выкл короткие URL.";
$lang['pnphpbb2_post_order'] = "Варианты сортировки сообщений в форумах";
$lang['pnphpbb2_post_order_explain'] = "Порядок показа заголовков тем по умолчанию.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(Вы можете переопределить этот параметр в Управлении Фoрумами)";
$lang['pnphpbb2_post_confirm'] = "Отключить подтверждения";
$lang['pnphpbb2_post_confirm_explain'] = "Здесь можно отключить подтверждение посылки сообщения. В результате отключения, пользователь сразу после отправки сообщения будет перенесен на страницу темы.";
$lang['pnphpbb2_allow_full_page'] = "Разрешить Минимизировать\максимизировать";
$lang['pnphpbb2_allow_full_page_explain'] = "Пользователи могут просматривать форум НЕ отображая header и footer Postnuke";
$lang['pnphpbb2_full_page'] = "Default forum to full page (maximize) view";
$lang['pnphpbb2_full_page_explain'] = "Allows administrator to display forum in either full page view or within the Postnuke theme.";
$lang['pnphpbb2_pn_pm'] = "Использовать систему Личных Сообщений PostNuke";
$lang['pnphpbb2_pn_pm_explain'] = "Использовать систему личных сообщений PostNuke вместо системы ЛС форума.";
$lang['pnphpbb2_pn_link'] = "Ссылка чтобы возвращать пользоватеелй на сайт";
$lang['pnphpbb2_pn_link_explain'] = "This will be a valid html link that will return your used back to your main site, if they are using a out of Postnuke style/theme.";
$lang['pnphpbb2_pn_text'] = "Текст Ссылки";
$lang['pnphpbb2_pn_text_explain'] = "This will be the text for the above link, it can be any text or html code. (Can contain a image link).";
$lang['pnphpbb2_members_online'] = "Отключить блок Кто сейчас На Форуме на главной странице форума";
$lang['pnphpbb2_members_online_explain'] = "Позволяет администратору отключить блок Кто сечас на форуме, на главной странице форума.";
$lang['pnphpbb2_members_online_annon'] = "Прятать блок Кто Сейчас На Форуме от анонимов";
$lang['pnphpbb2_members_online_annon_explain'] = "";
$lang['pnphpbb2_template_compiler'] = "Использовать НОВЫЙ компилятор шаблонов";
$lang['pnphpbb2_template_compiler_explain'] = "Use the eXtreme Styles mod by Vjacheslav Trushkin <slava@trushkin.net> </br>This mod is heavily optimized version of phpBB templates system and has some additional features. It compiles and executes files much faster, has cache system that speeds up templates many times, allows to use php in templates and few other new features to style designers. This is a test version and might not work with some mods.";
$lang['pnphpbb2_updated'] = "Конфигурация PNphpBB2 обновлена";
$lang['pnphpbb2_click_return_config'] = "%sНажмите сюда чтобы вернуться к конфигурации PNphpBB2%s";
$lang['pnphpbb2_allow_sub_change'] = "Разрешить пользователям переключать режимы отображения форумов (категории\под-форумы)";
$lang['pnphpbb2_allow_sub_change_explain'] = "This will allow you to give your users the option of switching between sub-category, or sub-forum view. If you do not wish to use the sub-category/forum mod simply do not add sub-category/forums to your site.";
$lang['pnphpbb2_index_announce'] = "Показывать Объявления на главной странице форума";
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
$lang['Category_attachment'] = "Присоеденено к категории";
$lang['Use_sub_forum'] = "Отображать под-категории как форумы";
$lang['Use_sub_forum_explain'] = "Позволяет администраторам переключать между режимами отображения под-форумов или под-категорий (как в vBulletin board).";
$lang['Category_desc'] = "Описание";
$lang['Hierarchy_setting'] = "Настройки Иерархии категорий";
$lang['Category_config_error_fixed'] = "Ошибка в настройках категорий  исправлена";

// Split Announcements/Stickys
$lang['announce_settings'] = "Настройка Объявлений";
$lang['enable_announce'] = "Отображать объявления на главной странице форума";
$lang['enable_announce_explain'] = "Вкл\Выкл отображения объявлений на главной странице форумов.";
$lang['forum_announce_exclude'] = "<u>НЕ показывать</u> объявления для следующих форумов (CTRL+LEFT CLICK чтобы выбрать несколько)";
//$lang['forum_announce_exclude_explain'] = "This will enable or disable forum announcements on index page.";
$lang['announcement_duration'] = "Длительность объявления на главной странице форумов";
$lang['announcement_duration_explain'] = "Число <strong>дней</strong> в течении которых Объявление будет отображаться на главной страницце форумов.";
$lang['announcement_duration_explain'] .= "<br/>(Введите <b>0 (Ноль)</b> чтобы объявление отображалось всегда)";
$lang['split_global_announce'] = "Отделять глобальные Объявления";
$lang['split_announce'] = "Отделять Объявления на форумах";
$lang['split_sticky'] = "Отделять важные темы на форумах";

// Topic & Post sort options
$lang['topic_sort_order'] = "Порядок сортировки тем";
$lang['post_sort_order'] = "Порядок сортировки сообщений";
$lang['First_Post'] = "Первое сообщение";
$lang['sorted_default'] = "По умолчанию";
// Replacement Rank image admin
$lang['Rank_image'] = 'Изображение присвоенное к званию';
$lang['Rank_image_explain'] = 'Используйте небольшое изображение для отображения звания пользователя.';
$lang['Rank_image_explain'] .= '<br/>Путь относительно корня PNphpBB2<br/>(ПРИМЕЧАНИЕ: Если вы укажете только имя изображения (image.gif), будет использовано изображение из папки с Скином форума, Темы PostNuke или папки с языковыми файлами.)';
//
// That's all Folks!
// -------------------------------------------------

?>
