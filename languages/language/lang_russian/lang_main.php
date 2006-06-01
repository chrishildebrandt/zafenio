<?php
/***************************************************************************
 *                            lang_main.php [Russian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.3 2003/08/02 10:02:46 bobt Exp $
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
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

//russian translate by 10c0 (10c0@needforrace.ru)

$lang['ENCODING'] = 'windows-1251';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = _DATEBRIEF;
// End PNphpBB2 Module
// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';
//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Форум';
$lang['Category'] = 'Категория';
$lang['Topic'] = 'Тема';
$lang['Topics'] = 'Темы';
$lang['Replies'] = 'Ответов';
$lang['Views'] = 'Просмотров';
$lang['Post'] = 'Сообщение';
$lang['Posts'] = 'Сообщений';
$lang['Posted'] = 'Отправлено';
$lang['Username'] = 'Имя пользователя';
$lang['Password'] = 'Пароль';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Пользователь';
$lang['Author'] = 'Автор';
$lang['Time'] = 'Время';
$lang['Hours'] = 'Часов';
$lang['Message'] = 'Сообщение';

$lang['1_Day'] = '1 день';
$lang['7_Days'] = '7 дней';
$lang['2_Weeks'] = '2 недели';
$lang['1_Month'] = '1 месяц';
$lang['3_Months'] = '3 месяца';
$lang['6_Months'] = '6 месцев';
$lang['1_Year'] = '1 год';

$lang['Go'] = 'Go';
$lang['Jump_to'] = 'Перейти к';
$lang['Submit'] = 'Отправить';
$lang['Reset'] = 'Отменить';
$lang['Cancel'] = 'Отмена';
$lang['Preview'] = 'Предв.Просмотр';
$lang['Confirm'] = 'Подтвердить';
$lang['Spellcheck'] = 'Проверка Орфографии';
$lang['Yes'] = 'Да';
$lang['No'] = 'Нет';
$lang['Enabled'] = 'Вкл.';
$lang['Disabled'] = 'Выкл.';
$lang['Error'] = 'Ашиппка';

$lang['Next'] = 'Вперед';
$lang['Previous'] = 'Назад';
$lang['Goto_page'] = 'Перейти';
$lang['Joined'] = 'Зарегистрирован';
$lang['IP_Address'] = 'IP';

$lang['Select_forum'] = 'Выберите форум';
$lang['View_latest_post'] = 'Показать последнее сообщение';
$lang['View_newest_post'] = 'Показать новое сообщение';
$lang['Page_of'] = 'Стрница <b>%d</b> из <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Форумы';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Новая тема';
$lang['Reply_to_topic'] = 'Ответить';
$lang['Reply_with_quote'] = 'Ответить с цитатой';

$lang['Click_return_topic'] = '%sНажмите Сюда чтобы вернуться в тему%s'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '%sНажмите Сюда чтобы попробовать еще раз%s';
$lang['Click_return_forum'] = '%sНажмите Сюда чтобы вернуться в форум%s';
$lang['Click_view_message'] = '%sНажмите Сюда чтобы просмотреть ваше сообщение%s';
$lang['Click_return_modcp'] = '%sНажмите Сюда чтобы вернутсься панель моератора%s';
$lang['Click_return_group'] = '%sНажмите Сюда чтобы вернутсься к информации о группах%s';

$lang['Admin_panel'] = 'Админка';

$lang['Board_disable'] = 'Форум на процедурах. попробуйте зайти позже';


//
// Global Header strings
//
$lang['Registered_users'] = 'Зарегистрированные пользователи:';
$lang['Browsing_forum'] = 'В данный момент форум просмотривают:';
$lang['Online_users_zero_total'] = '<b>0</b> пользователей :: ';
$lang['Online_users_total'] = 'Сейчас <b>%d</b> пользователей olnine :: ';
$lang['Online_user_total'] = 'Сейчас <b>%d</b> пользователь online :: ';
$lang['Reg_users_zero_total'] = '0 зарегистрированных, ';
$lang['Reg_users_total'] = '%d зарегистрированных, ';
$lang['Reg_user_total'] = '%d зарегистрированный, ';
$lang['Hidden_users_zero_total'] = '0 спрятанных ';
$lang['Hidden_user_total'] = '%d спрятанный и ';
$lang['Hidden_users_total'] = '%d спрятанных и ';
$lang['Guest_users_zero_total'] = '0 Гостей';
$lang['Guest_users_total'] = '%d Гостей';
$lang['Guest_user_total'] = '%d Гость';
$lang['Record_online_users'] = 'Больше всего пользователей здесь было <b>%s</b> в %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sАдмин%s';
$lang['Mod_online_color'] = '%sМодер%s';

$lang['You_last_visit'] = 'Последний раз вы здесь были %s'; // %s replaced by date/time
$lang['Current_time'] = 'Московское время %s'; // %s replaced by time

$lang['Search_new'] = 'Показать все сообщения со времени вашего последнего визита';
$lang['Search_your_posts'] = 'Показать ваши сообщения';
$lang['Search_unanswered'] = 'Показать неотвеченные собщения';

$lang['Register'] = 'Регистрация';
$lang['Profile'] = 'Профиль';
$lang['Edit_profile'] = 'Редактировать профиль';
$lang['Search'] = 'Поиск';
$lang['Memberlist'] = 'Список пользователей';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode';
$lang['Usergroups'] = 'Группы';
$lang['Last_Post'] = 'Последнее сообщение';
$lang['Moderator'] = 'Модератор';
$lang['Moderators'] = 'Модераторы';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Всего <b>0</b> сообщений'; // Number of posts
$lang['Posted_articles_total'] = 'Наши пользователи оставили <b>%d</b> сообщений'; // Number of posts
$lang['Posted_article_total'] = 'Наши пользователи оставили <b>%d</b> сообщение'; // Number of posts
$lang['Registered_users_zero_total'] = 'У нас <b>0</b> зарегистрированных пользователей'; // # registered users
$lang['Registered_users_total'] = 'У нас <b>%d</b> зарегистрированных пользователей'; // # registered users
$lang['Registered_user_total'] = 'У нас <b>%d</b> зарегистрированный пользователь'; // # registered users
$lang['Newest_user'] = 'Новый пользователь <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Нет новых сообщений со времени вашего последнего визита';
$lang['No_new_posts'] = 'Нет новых сообщений';
$lang['New_posts'] = 'Новые сообщения';
$lang['New_post'] = 'Новое сообщение';
$lang['No_new_posts_hot'] = 'Нет новых сообщений [ Популярная тема ]';
$lang['New_posts_hot'] = 'Новые сообщения [ Популярная тема ]';
$lang['No_new_posts_locked'] = 'Нет новых сообщений [ Закрытая тема ]';
$lang['New_posts_locked'] = 'Новые сообщения [ Закрытая тема ]';
$lang['Forum_is_locked'] = 'Закрытый форум';


//
// Login
//
$lang['Enter_password'] = 'Введите login и пароль для входа.';
$lang['Login'] = 'Войти ';
$lang['Logout'] = 'Выйти';

$lang['Forgotten_password'] = 'Вспомнить пароль';

$lang['Log_me_in'] = 'Запомнить меня';

$lang['Error_login'] = 'Ошибка';


//
// Index page
//
$lang['Index'] = 'Начало';
$lang['No_Posts'] = 'Нет сообщений';
$lang['No_forums'] = 'Нет форумов';

$lang['Private_Message'] = 'Личное сообщение';
$lang['Private_Messages'] = 'Личные сообщения';
$lang['Who_is_Online'] = 'Сейчас на форуме';

$lang['Mark_all_forums'] = 'Пометить все форумы как прочитанные';
$lang['Forums_marked_read'] = 'Все форумы были помечены как прочитанные';


//
// Viewforum
//
$lang['View_forum'] = 'Просмотреть форум';

$lang['Forum_not_exist'] = 'Форум не существует.';
$lang['Reached_on_error'] = 'Ашиппка.';

$lang['Display_topics'] = 'Показать темы за последние';
$lang['All_Topics'] = 'Все темы';

$lang['Topic_Announcement'] = '<b>Объявление:</b>';
$lang['Topic_Sticky'] = '<b>Важно:</b>';
$lang['Topic_Moved'] = '<b>Перемещено:</b>';
$lang['Topic_Poll'] = '<b>[ Опрос ]</b>';

$lang['Mark_all_topics'] = 'Пометить все темы как прочитанные';
$lang['Topics_marked_read'] = 'Все темы в этом форуме были помечены как прочитанные';

$lang['Rules_post_can'] = 'Вы <b>можете</b> Создавать темы в этом форуме';
$lang['Rules_post_cannot'] = 'Вы <b>не можете</b> Создавать темы в этом форуме';
$lang['Rules_reply_can'] = 'Вы <b>можете</b> отвечать на темы в этом форуме';
$lang['Rules_reply_cannot'] = 'Вы <b>не можете</b> отвечать на темы в этом форуме';
$lang['Rules_edit_can'] = 'Вы <b>можете</b> редактировать свои сообщния в этом форуме';
$lang['Rules_edit_cannot'] = 'Вы <b>не можете</b> редактировать свои сообщния в этом форуме';
$lang['Rules_delete_can'] = 'Вы <b>можете</b> удалять свои сообщения в этом форуме';
$lang['Rules_delete_cannot'] = 'Вы <b>не можете</b> удалять свои сообщения в этом форуме';
$lang['Rules_vote_can'] = 'Вы <b>можете</b> голосовать в опросах в этом форуме';
$lang['Rules_vote_cannot'] = 'Вы <b>не можете</b> голосовать в опросах в этом форуме';
$lang['Rules_moderate'] = 'Вы <b>можете</b> %sбеспредельничать в этом форуме%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'DВ том форуме нет сообщений.<br />Нажмите <b>Создать новую тему</b> чтобы создать тему.';


//
// Viewtopic
//
$lang['View_topic'] = 'Просмотреть тему';

$lang['Guest'] = 'Гость';
$lang['Post_subject'] = 'Тема сообщения';
$lang['View_next_topic'] = 'Следующая тема';
$lang['View_previous_topic'] = 'Предыдущая тема';
$lang['Submit_vote'] = 'Голосовать';
$lang['View_results'] = 'Результаты';

$lang['No_newer_topics'] = 'В этом форуме нет новых тем';
$lang['No_older_topics'] = 'В этом топике нет сам не знаю чего';
$lang['Topic_post_not_exist'] = 'Ашиппка.тема не существует';
$lang['No_posts_topic'] = 'В этой теме нет сообщений';

$lang['Display_posts'] = 'Показать';
$lang['All_Posts'] = 'Все';
$lang['Newest_First'] = 'Сначала новые';
$lang['Oldest_First'] = 'Сначала старые';

$lang['Back_to_top'] = 'Наверх';

$lang['Read_profile'] = 'Профиль пользователя'; 
$lang['Send_email'] = 'Послать email';
$lang['Visit_website'] = 'WWW';
$lang['ICQ_status'] = 'ICQ';
$lang['Edit_delete_post'] = 'Изменить \Удалить сообщение ';
$lang['View_IP'] = 'IP';
$lang['Delete_post'] = 'Удалить сообщение';

$lang['wrote'] = 'писал(а)'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Цитата'; // comes before bbcode quote output.
$lang['Code'] = 'Код'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Последний раз редактировалось %s в %s; всего редактировалось %d раз'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Последний раз редактировалось %s в %s; всего редактировалось %d раза'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Закрыть тему';
$lang['Unlock_topic'] = 'открыть тему';
$lang['Move_topic'] = 'Перенести тему';
$lang['Delete_topic'] = 'Удалить тему';
$lang['Split_topic'] = 'Разделитьтему';

$lang['Stop_watching_topic'] = 'Прекратить следить за этой темой';
$lang['Start_watching_topic'] = 'Отслеживать все ответы в эту тему';
$lang['No_longer_watching'] = 'Больше вы не следите за этой темой';
$lang['You_are_watching'] = 'Вы следите за этой темой';

$lang['Total_votes'] = 'Всего голосовало';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Текст сообщения';
$lang['Topic_review'] = 'Содержание темы';

$lang['No_post_mode'] = 'Не указан режим сообщения'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Новая тема';
$lang['Post_a_reply'] = 'Ответ';
$lang['Post_topic_as'] = 'Создать тему как';
$lang['Edit_Post'] = 'Редактировать';
$lang['Options'] = 'Опции';

$lang['Post_Announcement'] = 'Объявление';
$lang['Post_Sticky'] = 'Важно';
$lang['Post_Normal'] = 'Нормально';

$lang['Confirm_delete'] = 'Вы действительно хотите удалить это сообщение?';
$lang['Confirm_delete_poll'] = 'Вы действительно хотите удалить опрос?';

$lang['Flood_Error'] = 'Вы неможете так быстро отправлять сообщения; пожалуйста подождите немного.';
$lang['Empty_subject'] = 'Вы должны указать тему.';
$lang['Empty_message'] = 'Вы должны указать текст сообщения.';
$lang['Forum_locked'] = 'Этот форум закрыт: Вы не можете создавать темы и оставлять сообщения.';
$lang['Topic_locked'] = 'Тема закрыта: Вы не можете оставлять\ редактировать сообщения.';
$lang['No_post_id'] = 'Вы должны указать сообщение для редактирования';
$lang['No_topic_id'] = 'Вы должны указать тему для ответа';
$lang['No_valid_mode'] = 'Вы можете только создавать темы, отвечать на темы, редактировать сообщения.';
$lang['No_such_post'] = 'Запрошенного сообщения не существует.';
$lang['Edit_own_posts'] = 'К сожалению вы можете редактировать только свои сообщения.';
$lang['Delete_own_posts'] = 'К сожалению вы можете удалять только свои сообщения.';
$lang['Cannot_delete_replied'] = 'К сожалению вы не можете удалить сообщение на которое уже ответили';
$lang['Cannot_delete_poll'] = 'К сожалению вы не можете удалить активный опрос.';
$lang['Empty_poll_title'] = 'Введите заголовок опроса.';
$lang['To_few_poll_options'] = 'Введите как минимум 2 варианта ответа.';
$lang['To_many_poll_options'] = 'Вы попытались ввести слишком много вариантов ответа.';
$lang['Post_has_no_poll'] = 'В этой теме нет опросов.';
$lang['Already_voted'] = 'Вы уже проголосовали в этом опросе.';
$lang['No_vote_option'] = 'Укажите вариант ответа.';

$lang['Add_poll'] = 'Добавить опрос';
$lang['Add_poll_explain'] = 'Если вы не хотите добавлять опрос в этой теме, оставьте это поле пустым.';
$lang['Poll_question'] = 'Вопрос опроса';
$lang['Poll_option'] = 'Вариант ответа';
$lang['Add_option'] = 'Добавить вариант';
$lang['Update'] = 'Обновить';
$lang['Delete'] = 'Удалить';
$lang['Poll_for'] = 'Опрос будет продолжаться';
$lang['Days'] = 'Дней'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ введите  0 чтобы опрос никогда не кончался ]';
$lang['Delete_poll'] = 'Удалить опрос';

$lang['Disable_HTML_post'] = 'Отключить HTML в этом сообщении';
$lang['Disable_BBCode_post'] = 'Отключить BBCode в этом сообщении';
$lang['Disable_Smilies_post'] = 'Отключить Смайлики в этом сообщении';

$lang['HTML_is_ON'] = 'HTML - <u>Вкл.</u>';
$lang['HTML_is_OFF'] = 'HTML - <u>Выкл.</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s - <u>Вкл.</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s - <u>Выкл.</u>';
$lang['Smilies_are_ON'] = 'Смайлы - <u>Вкл.N</u>';
$lang['Smilies_are_OFF'] = 'Смайлы - <u>Выкл.</u>';

$lang['Attach_signature'] = 'Присоединять подпись (изменить подпись можно в профиле)';
$lang['Notify'] = 'Известить меня когда кто-то ответит';
$lang['Delete_post'] = 'Удалить сообщение';

$lang['Stored'] = 'Ваше сообщение отправлено.';
$lang['Deleted'] = 'Ваше сообщение удалено.';
$lang['Poll_delete'] = 'Ваш опрос удален.';
$lang['Vote_cast'] = 'Ваш голос учтен.';

$lang['Topic_reply_notification'] = 'Уведомление ответов на тему';

$lang['bbcode_b_help'] = 'Жирный: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Курсив: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Поодчеркнутый: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Цитата: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Код: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Список: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = 'упорядоченный список: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Картинка: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'закрыть все открытые теги';
$lang['bbcode_s_help'] = 'Цвет: [color=red]text[/color]  Tip: you can also use color=#FF0000';
$lang['bbcode_f_help'] = 'Размер: [size=x-small]small text[/size]';

$lang['Emoticons'] = 'Смайлы';
$lang['More_emoticons'] = 'Больше смайлов';

$lang['Font_color'] = 'Цвет';
$lang['color_default'] = 'По умолчанию';
$lang['color_dark_red'] = 'Темно красный';
$lang['color_red'] = 'Красный';
$lang['color_orange'] = 'Оранжевый';
$lang['color_brown'] = 'Коричневый';
$lang['color_yellow'] = 'Желтый';
$lang['color_green'] = 'Зеленый';
$lang['color_olive'] = 'Оливковый';
$lang['color_cyan'] = 'Синий';
$lang['color_blue'] = 'Голубой';
$lang['color_dark_blue'] = 'Темно-синий';
$lang['color_indigo'] = 'Индиго(фиолетовый)';
$lang['color_violet'] = 'Фиолетовый';
$lang['color_white'] = 'Белый';
$lang['color_black'] = 'Черный';

$lang['Font_size'] = 'Размер шрифта';
$lang['font_tiny'] = 'Очень Маленький';
$lang['font_small'] = 'Маленький';
$lang['font_normal'] = 'Нормальный';
$lang['font_large'] = 'Большой';
$lang['font_huge'] = 'Огромный';

$lang['Close_Tags'] = 'Закрыть теги';
$lang['Styles_tip'] = 'Подсказка: Стиль текста может быть изменен выделением.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Личные сообщения';

$lang['Login_check_pm'] = 'Войти и проверить личные сообщения';
$lang['New_pms'] = 'У вас %d новых сообщений'; // You have 2 new messages
$lang['New_pm'] = 'У вас %d новое сообщение'; // You have 1 new message
$lang['No_new_pm'] = 'У вас нет новых сообщений';
$lang['Unread_pms'] = 'У вас %d непрочитанных сообщений';
$lang['Unread_pm'] = 'У вас %d непрочитанное сообщение';
$lang['No_unread_pm'] = 'У вас нет непрочитанных сообщений';
$lang['You_new_pm'] = 'Вас ожидает личное сообщение';
$lang['You_new_pms'] = 'Вас ожидают личные сообщения';
$lang['You_no_new_pm'] = 'У вас нет личных сообщений';

$lang['Unread_message'] = 'Не читать сообщение';
$lang['Read_message'] = 'Читать сообщение';

$lang['Read_pm'] = 'Прочитать сообщение';
$lang['Post_new_pm'] = 'Отправить сообщение';
$lang['Post_reply_pm'] = 'ответить на сообщение';
$lang['Post_quote_pm'] = 'Цитировать сообщение';
$lang['Edit_pm'] = 'Редактировать сообщение';

$lang['Inbox'] = 'Входящие';
$lang['Outbox'] = 'Посланные';
$lang['Savebox'] = 'Сохраненные';
$lang['Sentbox'] = 'Исходящие';
$lang['Flag'] = 'Флаг';
$lang['Subject'] = 'Тема';
$lang['From'] = 'От';
$lang['To'] = 'Кому';
$lang['Date'] = 'Дата';
$lang['Mark'] = 'Метка';
$lang['Sent'] = 'Послано';
$lang['Saved'] = 'Сохранено';
$lang['Delete_marked'] = 'Удалить помеченные';
$lang['Delete_all'] = 'Удалить все';
$lang['Save_marked'] = 'Сохранить помеченные'; 
$lang['Save_message'] = 'Сохранить сообщение';
$lang['Delete_message'] = 'Удалить сообщение';

$lang['Display_messages'] = 'Показывать сообщения'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Все сообщения';

$lang['No_messages_folder'] = 'В этой папке нет сообщений';

$lang['PM_disabled'] = 'Личные сообщения отключены.';
$lang['Cannot_send_privmsg'] = 'Администратор запретил вам отправлять личные сообщения.';
$lang['No_to_user'] = 'Вы должны указать получателя сообщения.';
$lang['No_such_user'] = 'Нет пользователя с таким именем.';

$lang['Disable_HTML_pm'] = 'Отключить HTML в этом сообщении';
$lang['Disable_BBCode_pm'] = 'Отключить BBCode в этом сообщении';
$lang['Disable_Smilies_pm'] = 'Отключить Смайлы в этом сообщении';

$lang['Message_sent'] = 'Ваше сообщение отправлено.';

$lang['Click_return_inbox'] = 'Нажмите %Сюда%s чтобы вернуться в папку входящие';
$lang['Click_return_index'] = 'Нажмите %Сюда%s чтобы вернуться в начало';

$lang['Send_a_new_message'] = 'Отправить новое личное сообщение';
$lang['Send_a_reply'] = 'Ответить на личное сообщение';
$lang['Edit_message'] = 'Редактировать личное сообщение';

$lang['Notification_subject'] = 'Получено новое личное сообщение!';

$lang['Find_username'] = 'Найти пользователя';
$lang['Find'] = 'Искать';
$lang['No_match'] = 'Не найдено.';

$lang['No_post_id'] = 'Не указан идентификатор сообщения';
$lang['No_such_folder'] = 'Папка не существует';
$lang['No_folder'] = 'Не указана папка';

$lang['Mark_all'] = 'Пометить все';
$lang['Unmark_all'] = 'Отменить выделение';

$lang['Confirm_delete_pm'] = 'Вы действительно хотите удалить это сообщение?';
$lang['Confirm_delete_pms'] = 'Вы действительно хотите удалить эти сообщение?';

$lang['Inbox_size'] = 'Заполнение папки входящие -  %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Заполнение папки Исходящие - %d%%'; 
$lang['Savebox_size'] = 'Заполнение папки Сохраненные %d%%'; 

$lang['Click_view_privmsg'] = 'Нажмите %sСюда%s чтобы попасть в папку Входящие';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Просмотр профиля :: %s'; // %s is username 
$lang['About_user'] = 'Всё о %s'; // %s is username

$lang['Preferences'] = 'Свойства';
$lang['Items_required'] = 'Поля отмеченные * обязательны для заполнения.';
$lang['Registration_info'] = 'Информация';
$lang['Profile_info'] = 'Профмль';
$lang['Profile_info_warn'] = 'эта информация будет доступна всем';
$lang['Avatar_panel'] = 'Управление аватарами';
$lang['Avatar_gallery'] = 'Галлерея аватар';

$lang['Website'] = 'WWW';
$lang['Location'] = 'Откуда ';
$lang['Contact'] = 'Связь с';
$lang['Email_address'] = 'E-mail адрес';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'отправить личное сообщение';
$lang['Hidden_email'] = '[ Спрятанно ]';
$lang['Search_user_posts'] = 'Искать все сообщения пользователя';
$lang['Interests'] = 'Интересы';
$lang['Occupation'] = 'Род дейтельности'; 
$lang['Poster_rank'] = 'Звание';

$lang['Total_posts'] = 'Всего сообщений';
$lang['User_post_pct_stats'] = '%.2f%% от общего числа'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f в день'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Искать все сообщения пользователя %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Пользователь не существует.';
$lang['Wrong_Profile'] = 'Вы не можете редактировать чужой профиль.';

$lang['Only_one_avatar'] = 'Только один тип аватары должен быть указан';
$lang['File_no_data'] = 'По указанному вами адресу ничего нет';
$lang['No_connection_URL'] = 'Соединение с указанным адресом не может быть установлено';
$lang['Incomplete_URL'] = 'Вы ввели неправильный адрес';
$lang['Wrong_remote_avatar_format'] = 'Адрес удаленной аватары неверные';
$lang['No_send_account_inactive'] = 'Ваш аккаунт отключен, свяжитель с администратором';

$lang['Always_smile'] = 'Всегда включать смайлы';
$lang['Always_html'] = 'Всегда разрешать HTML';
$lang['Always_bbcode'] = 'Всегда разрешать BBCode';
$lang['Always_add_sig'] = 'Всегодя присоединять подпись';
$lang['Always_notify'] = 'Всегдя уведомлять об ответах';
$lang['Always_notify_explain'] = 'Форум уведомляет вас об ответе по eamil';

$lang['Board_style'] = 'Style';
$lang['Board_lang'] = 'Язык';
$lang['No_themes'] = 'Нет скинов';
$lang['Timezone'] = 'Временная зона';
$lang['Date_format'] = 'Формат даты';
$lang['Date_format_explain'] = 'Синтаксис идентиччен функции  <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> в PHP.';
$lang['Signature'] = 'Подпись ';
$lang['Signature_explain'] = 'Этот кст будет добавляться к каждому вашему сообщению. Лимит -  %d символов';
$lang['Public_view_email'] = 'Всегда показывать мой email';

$lang['Current_password'] = 'Текщий пароль';
$lang['New_password'] = 'Новый пароль';
$lang['Confirm_password'] = 'Подтверждение пароля';
$lang['Confirm_password_explain'] = 'DВыо лжны подтвердить новый пароль если вы хотите его изменить или вы ввели новый email';
$lang['password_if_changed'] = 'Вым нужно всего лишь ввести новый пароль если вы хотите его поменять';
$lang['password_confirm_if_changed'] = 'Введите подтверждение пароля';

$lang['Avatar'] = 'Аватар';
$lang['Avatar_explain'] = 'Отображает маленькую картинку около ваших сообщений. Только одно изображение может быть показано, ширина не должны быть больше %d пикелей, а высота не больше %d пикселей, размер - не больше %d KB.';
$lang['Upload_Avatar_file'] = 'Загрузить аватар с вашего компьютера';
$lang['Upload_Avatar_URL'] = 'Загрузить аватар с удаленного компьютера';
$lang['Upload_Avatar_URL_explain'] = 'Введите URL аватара с другого сайта';
$lang['Pick_local_Avatar'] = 'Выбрать аватар из галлереи';
$lang['Link_remote_Avatar'] = 'Ссылка на удаленный аватар';
$lang['Link_remote_Avatar_explain'] = 'Введите адрес удаленного аватара';
$lang['Avatar_URL'] = 'URL удаленного аватара';
$lang['Select_from_gallery'] = 'Показывать аватар из галереи';
$lang['View_avatar_gallery'] = 'Показать галлерею';

$lang['Select_avatar'] = 'Выбрать аватар';
$lang['Return_profile'] = 'Отменить';
$lang['Select_category'] = 'Выберите категорию';

$lang['Delete_Image'] = 'Удалить изображение';
$lang['Current_Image'] = 'Текущее изображение';

$lang['Notify_on_privmsg'] = 'Уведомлять меня о новых личных сообщениях';
$lang['Popup_on_privmsg'] = 'открывать новое окно при получении новых личных сообщений'; 
$lang['Popup_on_privmsg_explain'] = '';
$lang['Hide_user'] = 'Прятать ваше прибывание на форуме';

$lang['Profile_updated'] = 'Ваш профиль обновлен';
$lang['Profile_updated_inactive'] = 'Ваш профиль обновлен. Т.к. вы изменили важные поля, ваш аккаунт заблокирован, проверьте eemail или  свяжитесьм с администратором';

$lang['Password_mismatch'] = 'Введенные пароли не совпадают.';
$lang['Current_password_mismatch'] = 'Вы ввели неправильный текущий пароль.';
$lang['Password_long'] = 'Ваш пароль не может быть длннее 32 символов.';
$lang['Too_many_registers'] = 'Слишком много попыток регистрации в вашего адреса.';
$lang['Username_taken'] = 'Имя пользователя уже используется.';
$lang['Username_invalid'] = 'Недопустимые символы в имени';
$lang['Username_disallowed'] = 'Имя пользователя запрещено';
$lang['Email_taken'] = 'Email уже используется';
$lang['Email_banned'] = 'Email запрещен ';
$lang['Email_invalid'] = 'неверный Email ';
$lang['Signature_too_long'] = 'Слишком длинная подпись';
$lang['Fields_empty'] = 'Вы должны заполнить все обязательные поля';
$lang['Avatar_filetype'] = 'Допустимое расширение для аватар .jpg, .gif or .png';
$lang['Avatar_filesize'] = 'Ммакс. размер -  %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Макс. ширина %d пикс. ,высота -  %d пикс.'; 

$lang['Welcome_subject'] = 'Добро пожаловать на %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Новый пользователь';
$lang['Account_activated_subject'] = 'Аккаунт активирован';

$lang['Account_added'] = 'Спасибо за регистрацию. Ваш аккаунт создан. Вы можете войти на форум';
$lang['Account_inactive'] = 'Ваш аккаунт создан. Инструкция для активации вашего аккаунта выслана на указанный email ';
$lang['Account_inactive_admin'] = 'Ваш аккаунт создан.Как только администратор активирует ваш аккаунт, вы будете извещены об этом по email';
$lang['Account_active'] = 'Ваш аккаунт активирован. Спасибо за регистрацию';
$lang['Account_active_admin'] = 'Аккаунт активирован';
$lang['Reactivate'] = 'Реактивировать аккаунт!';
$lang['Already_activated'] = 'Вы уже активировали аккаунт';
$lang['COPPA'] = 'Ваш аккаунт создан, но не подтвержден. PДополнительная информация выслана вам на email.';

$lang['Registration'] = 'Соглашение';
$lang['Reg_agreement'] = 'Администрация форума оставляет за собой право редактировать или удалять сообщения содержащие оскорбления в адрес других участников, либо в адрес администрации. <br /><br />Мнение участников может не совпадать с мнением Администрации.';

$lang['Agree_under_13'] = 'Я согласен(на) с этими условиями и мне <b>меньше</b> 13 лет';
$lang['Agree_over_13'] = 'Я согласен(на) с этими условиями и мне <b>больше</b> или <b>ровно</b> 13 лет';
$lang['Agree_not'] = 'Я не согласен(на) с этими условиями';

$lang['Wrong_activation'] = 'Неправильный код активации';
$lang['Send_password'] = 'Выслать новый пароль'; 
$lang['Password_updated'] = 'Новый пароль создан; пожалуйста проверьте email для получения дополнительно информации.';
$lang['No_email_match'] = 'Неверный email.';
$lang['New_password_activation'] = 'Активация нового пароля';
$lang['Password_activated'] = 'Ваш аккаунт реактивирован. Для входа используйте пароль полученный на ваш email.';

$lang['Send_email_msg'] = 'Послать email';
$lang['No_user_specified'] = 'Пользовательн не указан';
$lang['User_prevent_email'] = 'Пользователь не желает получать email через форум. Попробуйте послать ему личное сообщение';
$lang['User_not_exist'] = 'Пользователь не существует';
$lang['CC_email'] = 'Послать копию письма самому себе';
$lang['Email_message_desc'] = 'Это сообщение посылается как обычный текст.Не используйте BBCode или HTML.Ответ на это письмо придет вам на email';
$lang['Flood_email_limit'] = 'В днный момент вы не можете послать email. Попробуйте позже.';
$lang['Recipient'] = 'Получатель';
$lang['Email_sent'] = 'Письмо отправлено.';
$lang['Send_email'] = 'Послать e-mail';
$lang['Empty_subject_email'] = 'Вы должны указать тему письма.';
$lang['Empty_message_email'] = 'Вы должны указать сообщение';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Неверный код подтверждения';
$lang['Too_many_registers'] = 'Слишком много попыток регистрации с вашего адреса. Попробуйте позже';
$lang['Confirm_code_impaired'] = 'Если вы по каким-либо причинам не можете прочитать этот код, свяжитесь с  %sАдминитратором%s';
$lang['Confirm_code'] = 'Код подтверждения';
$lang['Confirm_code_explain'] = 'Введите код. Строчные и прописные буквы различаются.';
//
// Memberslist
//
$lang['Select_sort_method'] = 'Выберите метод сортировки';
$lang['Sort'] = 'Сортировать';
$lang['Sort_Top_Ten'] = '10 активных пользователей';
$lang['Sort_Joined'] = 'Дата регистрации';
$lang['Sort_Username'] = 'Имя пользователя';
$lang['Sort_Location'] = 'Откуда';
$lang['Sort_Posts'] = 'Всего сообщений';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'WWW';
$lang['Sort_Ascending'] = 'По возрастанию';
$lang['Sort_Descending'] = 'По убыванию';
$lang['Order'] = 'Порядок ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Управление группами';
$lang['Group_member_details'] = 'Управление группами';
$lang['Group_member_join'] = 'Вступить в группу';

$lang['Group_Information'] = 'Информация о группе';
$lang['Group_name'] = 'Имя группы';
$lang['Group_description'] = 'Описание группы';
$lang['Group_membership'] = 'Членство в группе';
$lang['Group_Members'] = 'Члены группы';
$lang['Group_Moderator'] = 'Модератор группы';
$lang['Pending_members'] = 'Ожидающие пользователи';

$lang['Group_type'] = 'Тип группы';
$lang['Group_open'] = 'Открытое членство';
$lang['Group_closed'] = 'закрытое членство';
$lang['Group_hidden'] = 'Скрытая группа';

$lang['Current_memberships'] = 'Группы';
$lang['Non_member_groups'] = 'Non-member groups';
$lang['Memberships_pending'] = 'Memberships pending';

$lang['No_groups_exist'] = 'Группы не существуют';
$lang['Group_not_exist'] = 'группа не существует';

$lang['Join_group'] = 'Вступить в группу';
$lang['No_group_members'] = 'В этой группе нет пользователей';
$lang['Group_hidden_members'] = 'Это спрятанная группа. Вы не можете увидеть ее членов';
$lang['No_pending_group_members'] = 'В этой группе нет ожидающих пользователей';
$lang['Group_joined'] = 'Ваша заявка на вступление в группу принята.<br />Вы будете извещены когда модератор подтвердит заявку.';
$lang['Group_request'] = 'запрос на членство в группе';
$lang['Group_approved'] = 'Ваш запрос удовлетворен';
$lang['Group_added'] = 'Вы добавлены в группу'; 
$lang['Already_member_group'] = 'Вы уже состоите в этой группе';
$lang['User_is_member_group'] = 'Пользователь уже состоит в этой группе';
$lang['Group_type_updated'] = 'Тип группы обновлен';

$lang['Could_not_add_user'] = 'Пользователь не существует';
$lang['Could_not_anon_user'] = 'Анонимного пользователя нельзя включить в группу';

$lang['Confirm_unsub'] = 'Вы действительно хотите выйти из группы?';
$lang['Confirm_unsub_pending'] = 'Ваша заявка еще не рассмотрена; Вы действительно хотите отказаться от членства?';

$lang['Unsub_success'] = 'Вы более не являетесь членом группы';

$lang['Approve_selected'] = 'Подтвердить выбранное';
$lang['Deny_selected'] = 'Отклонить выбранное';
$lang['Not_logged_in'] = 'Вы должны залогиниться чтобы присоедениться к группе';
$lang['Remove_selected'] = 'Удалить выбранное';
$lang['Add_member'] = 'Добавить пользователя';
$lang['Not_group_moderator'] = 'Вы не являетесь модератором этой группы';

$lang['Login_to_join'] = 'Войдите чтобы присоедениться к групппе';
$lang['This_open_group'] = 'Это группа с открытым членством, нажмите чтобы послать заявку модератору';
$lang['This_closed_group'] = 'Это закрытая группа.';
$lang['This_hidden_group'] = 'Это скрытая группа';
$lang['Member_this_group'] = 'Вы член этой группы';
$lang['Pending_this_group'] = 'Ваша заявка на рассмотрении';
$lang['Are_group_moderator'] = 'Вы модератор группы';
$lang['None'] = 'None';

$lang['Subscribe'] = 'Подписаться';
$lang['Unsubscribe'] = 'Отписаться';
$lang['View_Information'] = 'Показать информацию';


//
// Search
//
$lang['Search_query'] = 'Строка поиска';
$lang['Search_options'] = 'Опции поиска';

$lang['Search_keywords'] = 'Искать';
$lang['Search_keywords_explain'] = 'Вы можете использовать <u>AND</u> чтобы определить необходимые слова, <u>OR</u> чтобы определить слова которые могут встречаться в результате <u>NOT</u> чтобы определить слова которые не должны встречаться. Используйте * в виде маски';
$lang['Search_author'] = 'Искать сообщения автора';
$lang['Search_author_explain'] = 'Используйте * в виде маски';
$lang['Search_for_any'] = 'Search for any terms or use query as entered';
$lang['Search_for_all'] = 'Искать все слова';
$lang['Search_title_msg'] = 'Искать в названии темы и тексте сообщения';
$lang['Search_msg_only'] = 'Искать только в тексте сообщения';

$lang['Return_first'] = 'Отображать первые'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'символов';

$lang['Search_previous'] = 'Искать за последние'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Сортировать';
$lang['Sort_Time'] = 'Время сообщения';
$lang['Sort_Post_Subject'] = 'Теме сообщения';
$lang['Sort_Topic_Title'] = 'заголовку темы';
$lang['Sort_Author'] = 'Автору';
$lang['Sort_Forum'] = 'Форуму';

$lang['Display_results'] = 'Отображать результаты как';
$lang['All_available'] = 'Все';
$lang['No_searchable_forums'] = 'У вас недостаточно прав чтобы пользоваться поиском';

$lang['No_search_match'] = 'Ничего не найдено';
$lang['Found_search_match'] = 'Найдено %d совпадение'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Найдено  %d совпадений'; // eg. Search found 24 matches

$lang['Close_window'] = 'Закрыть окно';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Только %s могут создавать объявления в этом форуме.';
$lang['Sorry_auth_sticky'] = 'Только %s могут создавать важные темы в этом форуме.'; 
$lang['Sorry_auth_read'] = 'Только %s могут читать темы в этом форуме.'; 
$lang['Sorry_auth_post'] = 'Только %s могут создавать темы в этом форуме.'; 
$lang['Sorry_auth_reply'] = 'Только %s могут отвечать на темы в этом форуме.';
$lang['Sorry_auth_edit'] = 'Только %s могут редактировать сообщения в этом форуме'; 
$lang['Sorry_auth_delete'] = 'Только %s могут удалять сообщения в этом форуме';
$lang['Sorry_auth_vote'] = 'Только %s могут голосовать в опросах';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>анонимные пользователи</b>';
$lang['Auth_Registered_Users'] = '<b>зарегестрированные пользователи</b>';
$lang['Auth_Users_granted_access'] = '<b>пользователи со специальными правами</b>';
$lang['Auth_Moderators'] = '<b>модераторы</b>';
$lang['Auth_Administrators'] = '<b>админы</b>';

$lang['Not_Moderator'] = 'Вы не модератор этого форума';
$lang['Not_Authorised'] = 'Нет доступа';

$lang['You_been_banned'] = 'Вы забанены.<br />Свяжитесь с администратором.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Сейчас 0 зарегистрированных пользователей и '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Сейчас %d зарегистрированных пользователей и '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Сейчас %d зарегистрированный пользователь и  '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 скрытых пользователей '; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d скрытых пользователей '; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d скрытый пользователь '; // 6 Hidden users online
$lang['Guest_users_online'] = 'Сейчас %d гостей '; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Сейчас 0 Гостей online'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Сейчас  %d  Гость online'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Сейчас на форуме никого нет';

$lang['Online_explain'] = 'Данные основаны на активности пользователей за последние 5 минут';

$lang['Forum_Location'] = 'Местонахождение форума';
$lang['Last_updated'] = 'Последнее обновление';

$lang['Forum_index'] = 'Начало';
$lang['Logging_on'] = 'Вход';
$lang['Posting_message'] = 'отправка сообщения';
$lang['Searching_forums'] = 'Поиск';
$lang['Viewing_profile'] = 'Просмотр профиля';
$lang['Viewing_online'] = 'Просмотр кто онлайн';
$lang['Viewing_member_list'] = 'Просмотр списка пользователей';
$lang['Viewing_priv_msgs'] = 'Просмотр личных сообщений';
$lang['Viewing_FAQ'] = 'Просмотр FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Панель модератора';
$lang['Mod_CP_explain'] = 'Используя нижепреведенную форму вы можете закрывать, открывать, переносить или удалять любое количество тем.';

$lang['Select'] = 'Выбрать';
$lang['Delete'] = 'Удалить';
$lang['Move'] = 'Перенести';
$lang['Lock'] = 'Закрыть';
$lang['Unlock'] = 'Открыть';

$lang['Topics_Removed'] = 'Темы удалены';
$lang['Topics_Locked'] = 'Темы закрыты';
$lang['Topics_Moved'] = 'Темы перенесены';
$lang['Topics_Unlocked'] = 'Темы открыты';
$lang['No_Topics_Moved'] = 'Темы не перенесены';

$lang['Confirm_delete_topic'] = 'Вы действительно хотите удалить тему?';
$lang['Confirm_lock_topic'] = 'Вы действительно хотите закрыть тему?';
$lang['Confirm_unlock_topic'] = 'Вы действительно хотите открыть тему?';
$lang['Confirm_move_topic'] = 'Вы действительно хотите перенести тему?';

$lang['Move_to_forum'] = 'Перенести в форум';
$lang['Leave_shadow_topic'] = 'Оставить ссылку';

$lang['Split_Topic'] = 'Управление разделением темы';
$lang['Split_Topic_explain'] = 'использую нижеприведенную форму вы можете разбить тему на две, вы можете выбрать сообщения или точку разделения';
$lang['Split_title'] = 'Название новой темы';
$lang['Split_forum'] = 'Форум для новой темы';
$lang['Split_posts'] = 'Разделить выбранные сообщения';
$lang['Split_after'] = 'Разделить с выбранного сообщения';
$lang['Topic_split'] = 'Выбранная тема разделена успешно';

$lang['Too_many_error'] = 'Вы выбрали слишком много сообщений. Вы модете выбрать только одно сообщение в качестве точки разделения!';

$lang['None_selected'] = 'Вы не выбрали тему для совершения данной операции. Пожалуйста вернитесь назад и выберите хотя-бы одну тему.';
$lang['New_forum'] = 'Новый форум';

$lang['This_posts_IP'] = 'IP этого сообщения';
$lang['Other_IP_this_user'] = 'IP flадрес которого писал данный пользователь';
$lang['Users_this_IP'] = 'Пользователи писавшие с этого адреса';
$lang['IP_info'] = 'IP Information';
$lang['Lookup_IP'] = 'Look up IP address';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Время в формате %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 ';
$lang['-11'] = 'GMT - 11 ';
$lang['-10'] = 'GMT - 10 ';
$lang['-9'] = 'GMT - 9 ';
$lang['-8'] = 'GMT - 8 ';
$lang['-7'] = 'GMT - 7 ';
$lang['-6'] = 'GMT - 6 ';
$lang['-5'] = 'GMT - 5 ';
$lang['-4'] = 'GMT - 4 ';
$lang['-3.5'] = 'GMT - 3.5 ';
$lang['-3'] = 'GMT - 3 ';
$lang['-2'] = 'GMT - 2 ';
$lang['-1'] = 'GMT - 1 ';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 ';
$lang['2'] = 'GMT + 2 ';
$lang['3'] = 'GMT + 3 ';
$lang['3.5'] = 'GMT + 3.5 ';
$lang['4'] = 'GMT + 4 ';
$lang['4.5'] = 'GMT + 4.5 ';
$lang['5'] = 'GMT + 5 ';
$lang['5.5'] = 'GMT + 5.5 ';
$lang['6'] = 'GMT + 6 ';
$lang['6.5'] = 'GMT + 6.5 ';
$lang['7'] = 'GMT + 7 ';
$lang['8'] = 'GMT + 8 ';
$lang['9'] = 'GMT + 9 ';
$lang['9.5'] = 'GMT + 9.5 ';
$lang['10'] = 'GMT + 10 ';
$lang['11'] = 'GMT + 11 ';
$lang['12'] = 'GMT + 12 ';
$lang['13'] = 'GMT + 13 ';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ';
$lang['tz']['-11'] = 'GMT - 11 ';
$lang['tz']['-10'] = 'GMT - 10 ';
$lang['tz']['-9'] = 'GMT - 9 ';
$lang['tz']['-8'] = 'GMT - 8 ';
$lang['tz']['-7'] = 'GMT - 7 ';
$lang['tz']['-6'] = 'GMT - 6 ';
$lang['tz']['-5'] = 'GMT - 5 ';
$lang['tz']['-4'] = 'GMT - 4 ';
$lang['tz']['-3.5'] = 'GMT - 3.5 ';
$lang['tz']['-3'] = 'GMT - 3 ';
$lang['tz']['-2'] = 'GMT - 2 ';
$lang['tz']['-1'] = 'GMT - 1 ';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 ';
$lang['tz']['2'] = 'GMT + 2 ';
$lang['tz']['3'] = 'GMT + 3 ';
$lang['tz']['3.5'] = 'GMT + 3.5 ';
$lang['tz']['4'] = 'GMT + 4 ';
$lang['tz']['4.5'] = 'GMT + 4.5 ';
$lang['tz']['5'] = 'GMT + 5 ';
$lang['tz']['5.5'] = 'GMT + 5.5 ';
$lang['tz']['6'] = 'GMT + 6 ';
$lang['tz']['6.5'] = 'GMT + 6.5 ';
$lang['tz']['7'] = 'GMT + 7 ';
$lang['tz']['8'] = 'GMT + 8 ';
$lang['tz']['9'] = 'GMT + 9 ';
$lang['tz']['9.5'] = 'GMT + 9.5 ';
$lang['tz']['10'] = 'GMT + 10 ';
$lang['tz']['11'] = 'GMT + 11 ';
$lang['tz']['12'] = 'GMT + 12 ';
$lang['tz']['13'] = 'GMT + 13 ';

$lang['datetime']['Sunday'] = 'Воскресенье';
$lang['datetime']['Monday'] = 'Понедельник';
$lang['datetime']['Tuesday'] = 'Вторник';
$lang['datetime']['Wednesday'] = 'Среда';
$lang['datetime']['Thursday'] = 'Четверг';
$lang['datetime']['Friday'] = 'Пятница';
$lang['datetime']['Saturday'] = 'Суббота';
$lang['datetime']['Sun'] = 'Воскр';
$lang['datetime']['Mon'] = 'Пон';
$lang['datetime']['Tue'] = 'Вт';
$lang['datetime']['Wed'] = 'Ср';
$lang['datetime']['Thu'] = 'Чт';
$lang['datetime']['Fri'] = 'Пт';
$lang['datetime']['Sat'] = 'Субб';
$lang['datetime']['January'] = 'Январь';
$lang['datetime']['February'] = 'Февраль';
$lang['datetime']['March'] = 'Март';
$lang['datetime']['April'] = 'Апрель';
$lang['datetime']['May'] = 'Май';
$lang['datetime']['June'] = 'Июнь';
$lang['datetime']['July'] = 'Июль';
$lang['datetime']['August'] = 'Август';
$lang['datetime']['September'] = 'Сентябрь';
$lang['datetime']['October'] = 'Октябрь';
$lang['datetime']['November'] = 'Ноябрь';
$lang['datetime']['December'] = 'Декабрь';
$lang['datetime']['Jan'] = 'Янв ';
$lang['datetime']['Feb'] = 'Фев ';
$lang['datetime']['Mar'] = 'Март ';
$lang['datetime']['Apr'] = 'Апр ';
$lang['datetime']['May'] = 'Май ';
$lang['datetime']['Jun'] = 'Июнь ';
$lang['datetime']['Jul'] = 'Июль ';
$lang['datetime']['Aug'] = 'Авг ';
$lang['datetime']['Sep'] = 'Сент ';
$lang['datetime']['Oct'] = 'Окт';
$lang['datetime']['Nov'] = 'Ноя ';
$lang['datetime']['Dec'] = 'Дек ';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Информация';
$lang['Critical_Information'] = 'Важная информация';

$lang['General_Error'] = 'Ашиппка';
$lang['Critical_Error'] = 'Критиническая ашиппка';
$lang['An_error_occured'] = 'Случилось страшное';
$lang['A_critical_error'] = 'Случилась страшная критиническая ашиппка';

//
// That's all, Folks!
// -------------------------------------------------

?>