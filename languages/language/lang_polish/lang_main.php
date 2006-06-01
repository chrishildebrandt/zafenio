<?php
/***************************************************************************
 *                            lang_main.php [Polish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2003/04/20 09:27:26 bob Exp $
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
// Translation by Mike Paluchowski and Radek Kmiecicki
// http://www.phpbb.pl/
//


setlocale(LC_ALL, "pl");
$lang['ENCODING'] = "iso-8859-2";
$lang['DIRECTION'] = "ltr";
$lang['LEFT'] = "left";
$lang['RIGHT'] = "right";
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = _DATEBRIEF;
// End PNphpBB2 Module
//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Forum";
$lang['Category'] = "Kategoria";
$lang['Topic'] = "Temat";
$lang['Topics'] = "Tematy";
$lang['Replies'] = "Odpowiedzi";
$lang['Views'] = "Wy�wietle�";
$lang['Post'] = "Post";
$lang['Posts'] = "Posty";
$lang['Posted'] = "Wys�any";
$lang['Username'] = "U�ytkownik";
$lang['Password'] = "Has�o";
$lang['Email'] = "Email";
$lang['Poster'] = "Wys�a�";
$lang['Author'] = "Autor";
$lang['Time'] = "Czas";
$lang['Hours'] = "Godzin";
$lang['Message'] = "Wiadomo��";

$lang['1_Day'] = "1 Dzie�";
$lang['7_Days'] = "7 Dni";
$lang['2_Weeks'] = "2 Tygodnie";
$lang['1_Month'] = "1 Miesi�c";
$lang['3_Months'] = "3 Miesi�ce";
$lang['6_Months'] = "6 Miesi�cy";
$lang['1_Year'] = "1 Rok";

$lang['Go'] = "Id�";
$lang['Jump_to'] = "Skocz do";
$lang['Submit'] = "Wy�lij";
$lang['Reset'] = "Wyczy��";
$lang['Cancel'] = "Anuluj";
$lang['Preview'] = "Podgl�d";
$lang['Confirm'] = "Zatwierd�";
$lang['Spellcheck'] = "Sprawd� pisowni�";
$lang['Yes'] = "Tak";
$lang['No'] = "Nie";
$lang['Enabled'] = "W��czony";
$lang['Disabled'] = "Wy��czony";
$lang['Error'] = "B��d";

$lang['Next'] = "Nast�pny";
$lang['Previous'] = "Poprzedni";
$lang['Goto_page'] = "Id� do strony";
$lang['Joined'] = "Do��czy�";
$lang['IP_Address'] = "Adres IP";

$lang['Select_forum'] = "Wybierz forum";
$lang['View_latest_post'] = "Zobacz ostatni post";
$lang['View_newest_post'] = "Zobacz najnowszy post";
$lang['Page_of'] = "Strona <b>%d</b> z <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "Numer ICQ";
$lang['AIM'] = "Adres AIM";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "Forum %s Strona G��wna";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Napisz nowy temat";
$lang['Reply_to_topic'] = "Odpowiedz do tematu";
$lang['Reply_with_quote'] = "Odpowiedz z cytatem";

$lang['Click_return_topic'] = "Kliknij %sTutaj%s aby powr�ci� do tematu"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Kliknij %sTutaj%s aby spr�bowa� ponownie";
$lang['Click_return_forum'] = "Kliknij %sTutaj%s aby powr�ci� na forum";
$lang['Click_view_message'] = "Kliknij %sTutaj%s aby zobaczy� swoj� wiadomo��";
$lang['Click_return_modcp'] = "Kliknij %sTutaj%s aby powr�ci� do Panelu Kontrolnego Moderacji";
$lang['Click_return_group'] = "Kliknij %sTutaj%s aby powr�ci� do informacji o grupach";

$lang['Admin_panel'] = "Panel Administracyjny";

$lang['Board_disable'] = "Przepraszamy, ale to forum jest obecnie niedost�pne. Zapraszamy p�niej";
$lang['Board_unavailable'] = 'Przepraszamy, ale forum jest obecnie niedost�pne. Spr�buj za kilka minut';

//
// Global Header strings
//
$lang['Registered_users'] = "Zarejestrowani U�ytkownicy:";
$lang['Browsing_forum'] = "U�ytkownicy przegl�daj�cy to forum:";
$lang['Online_users_zero_total'] = "Na Forum jest <b>0</b> u�ytkownik�w :: ";
$lang['Online_users_total'] = "Na Forum jest <b>%d</b> u�ytkownik�w :: ";
$lang['Online_user_total'] = "Na Forum jest <b>%d</b> u�ytkownik :: ";
$lang['Reg_users_zero_total'] = "0 Zarejestrowanych, ";
$lang['Reg_users_total'] = "%d Zarejestrowanych, ";
$lang['Reg_user_total'] = "%d Zarejestrowany, ";
$lang['Hidden_users_zero_total'] = "0 Ukrytych i ";
$lang['Hidden_users_total'] = "%d Ukrytych i ";
$lang['Hidden_user_total'] = "%d Ukrytych i ";
$lang['Guest_users_zero_total'] = "0 Go�ci";
$lang['Guest_users_total'] = "%d Go�ci";
$lang['Guest_user_total'] = "%d Go��";
$lang['Record_online_users'] = "Najwi�cej u�ytkownik�w <b>%s</b> by�o obecnych %s"; // first %s = number of users, second %s is the date.

$lang['Legend'] = 'Legenda';
$lang['Admin_online_color'] = "%sAdministrator%s";
$lang['Mod_online_color'] = "%sModerator%s";
$lang['User_online_color'] = '%sU�ytkownik%s';

$lang['You_last_visit'] = "Ostatnio odwiedzi�e� nas %s"; // %s replaced by date/time
$lang['Current_time'] = "Obecny czas to %s"; // %s replaced by time

$lang['Search_new'] = "Zobacz posty od ostatniej wizyty";
$lang['Search_your_posts'] = "Zobacz swoje posty";
$lang['Search_unanswered'] = "Zobacz posty bez odpowiedzi";

$lang['Register'] = "Rejestracja";
$lang['Profile'] = "Profil";
$lang['Edit_profile'] = "Zmie� sw�j profil";
$lang['Search'] = "Szukaj";
$lang['Memberlist'] = "U�ytkownicy";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "Przewodnik BBCode";
$lang['Usergroups'] = "Grupy";
$lang['Last_Post'] = "Ostatni Post";
$lang['Moderator'] = "Moderator";
$lang['Moderators'] = "Moderatorzy";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Nasi u�ytkownicy napisali <b>0</b> wiadomo�ci"; // Number of posts
$lang['Posted_articles_total'] = "Nasi u�ytkownicy napisali <b>%d</b> wiadomo�ci"; // Number of posts
$lang['Posted_article_total'] = "Nasi u�ytkownicy napisali <b>%d</b> wiadomo��"; // Number of posts
$lang['Registered_users_zero_total'] = "Mamy <b>0</b> zarejestrowanych u�ytkownik�w"; // # registered users
$lang['Registered_users_total'] = "Mamy <b>%d</b> zarejestrowanych u�ytkownik�w"; // # registered users
$lang['Registered_user_total'] = "Mamy <b>%d</b> zarejestrowanego u�ytkownika"; // # registered users
$lang['Newest_user'] = "Ostatnio zarejestrowa� si� <b>%s%s%s</b>"; // a href, username, /a 

$lang['No_new_posts_last_visit'] = "Brak nowych post�w od twojej ostatniej wizyty";
$lang['No_new_posts'] = "Brak nowych post�w";
$lang['New_posts'] = "Nowe posty";
$lang['New_post'] = "Nowy post";
$lang['No_new_posts_hot'] = "Brak nowych post�w [ Popularny ]";
$lang['New_posts_hot'] = "Nowe posty [ Popularny ]";
$lang['No_new_posts_locked'] = "Brak nowych post�w [ Zablokowany ]";
$lang['New_posts_locked'] = "Nowe posty [ Zablokowany ]";
$lang['Forum_is_locked'] = "Forum Zablokowane";


//
// Login
//
$lang['Enter_password'] = "Wpisz nazw� u�ytkownika i has�o by si� zalogowa�";
$lang['Login'] = "Zaloguj";
$lang['Logout'] = "Wyloguj";

$lang['Forgotten_password'] = "Zapomnia�em has�a";

$lang['Log_me_in'] = "Zaloguj mnie automatycznie przy ka�dej wizycie";

$lang['Error_login'] = "Poda�e� nieprawid�owe lub nieaktywne dane u�ytkownika";


//
// Index page
//
$lang['Index'] = "Indeks";
$lang['No_Posts'] = "Brak Post�w";
$lang['No_forums'] = "Brak For";

$lang['Private_Message'] = "Prywatna Wiadomo��";
$lang['Private_Messages'] = "Prywatne Wiadomo�ci";
$lang['Who_is_Online'] = "Kto jest na Forum";

$lang['Mark_all_forums'] = "Oznacz wszystkie fora jako przeczytane";
$lang['Forums_marked_read'] = "Wszystkie fora oznaczono jako przeczytane";


//
// Viewforum
//
$lang['View_forum'] = "Zobacz Forum";

$lang['Forum_not_exist'] = "Wybrane przez Ciebie forum nie istnieje";
$lang['Reached_on_error'] = "Dotar�e� na t� stron� w wyniku b��du";

$lang['Display_topics'] = "Wy�wietl tematy z ostatnich";
$lang['All_Topics'] = "Wszystkie Tematy";

$lang['Topic_Announcement'] = "<b>Og�oszenie:</b>";
$lang['Topic_Sticky'] = "<b>Przyklejony:</b>";
$lang['Topic_Moved'] = "<b>Przesuni�ty:</b>";
$lang['Topic_Poll'] = "<b>[ Ankieta ]</b>";

$lang['Mark_all_topics'] = "Oznacz wszystkie tematy jako przeczytane";
$lang['Topics_marked_read'] = "Tematy na tym forum zosta�y oznaczone jako przeczytane";

$lang['Rules_post_can'] = "<b>Mo�esz</b> pisa� nowe tematy";
$lang['Rules_post_cannot'] = "<b>Nie mo�esz</b> pisa� nowych temat�w";
$lang['Rules_reply_can'] = "<b>Mo�esz</b> odpowiada� w tematach";
$lang['Rules_reply_cannot'] = "<b>Nie mo�esz</b> odpowiada� w tematach";
$lang['Rules_edit_can'] = "<b>Mo�esz</b> zmienia� swoje posty";
$lang['Rules_edit_cannot'] = "<b>Nie mo�esz</b> zmienia� swoich post�w";
$lang['Rules_delete_can'] = "<b>Mo�esz</b> usuwa� swoje posty";
$lang['Rules_delete_cannot'] = "<b>Nie mo�esz</b> usuwa� swoich post�w";
$lang['Rules_vote_can'] = "<b>Mo�esz</b> g�osowa� w ankietach";
$lang['Rules_vote_cannot'] = "<b>Nie mo�esz</b> g�osowa� w ankietach";
$lang['Rules_moderate'] = "<b>Mo�esz</b> %smoderowa� to forum%s"; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = "Nie ma �adnych post�w na tym forum<br />Kliknij na przycisk <b>Nowy Temat</b> aby co� napisa�";

$lang['Stop_watching_forum'] = 'Przesta� �ledzi� to forum';
$lang['Start_watching_forum'] = 'Powiadom mnie o nowych postach na tym forum';
$lang['No_longer_watching_forum'] = 'Przesta�e� �ledzi� to forum';
$lang['You_are_watching_forum'] = 'Rozpocz��e� �ledzenie tego forum';


//
// Viewtopic
//
$lang['View_topic'] = "Zobacz temat";

$lang['Guest'] = 'Go��';
$lang['Post_subject'] = "Temat postu";
$lang['View_next_topic'] = "Zobacz nast�pny temat";
$lang['View_previous_topic'] = "Zobacz poprzedni temat";
$lang['Submit_vote'] = "Wy�lij G�os";
$lang['View_results'] = "Zobacz Wyniki";

$lang['No_newer_topics'] = "Nie ma nowszych temat�w na tym forum";
$lang['No_older_topics'] = "Nie ma starszych temat�w na tym forum";
$lang['Topic_post_not_exist'] = "Wybrany przez Ciebie temat lub post nie istnieje";
$lang['No_posts_topic'] = "Nie istniej� �adne posty dla tego tematu";

$lang['Display_posts'] = "Wy�wietl posty z ostatnich";
$lang['All_Posts'] = "Wszystkie Posty";
$lang['Newest_First'] = "Najpierw Nowsze";
$lang['Oldest_First'] = "Najpierw Starsze";

$lang['Back_to_top'] = "Powr�t do g�ry";

$lang['Read_profile'] = "Zobacz profil autora"; 
$lang['Send_email'] = "Wy�lij email do autora";
$lang['Visit_website'] = "Odwied� stron� autora";
$lang['ICQ_status'] = "Status ICQ";
$lang['Edit_delete_post'] = "Zmie�/Usu� ten post";
$lang['View_IP'] = "Zobacz IP autora";
$lang['Delete_post'] = "Usu� ten post";

$lang['wrote'] = "napisa�"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Cytat"; // comes before bbcode quote output.
$lang['Code'] = "Kod"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Ostatnio zmieniony przez %s dnia %s, w ca�o�ci zmieniany %d raz"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Ostatnio zmieniony przez %s dnia %s, w ca�o�ci zmieniany %d razy"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Zablokuj ten temat";
$lang['Unlock_topic'] = "Odblokuj ten temat";
$lang['Move_topic'] = "Przesu� ten temat";
$lang['Delete_topic'] = "Usu� ten temat";
$lang['Split_topic'] = "Podziel ten temat";

$lang['Stop_watching_topic'] = "Przesta� �ledzi� ten temat";
$lang['Start_watching_topic'] = "�led� odpowiedzi w tym temacie";
$lang['No_longer_watching'] = "Przesta�e� �ledzi� ten temat";
$lang['You_are_watching'] = "Rozpocz��e� �ledzenie tego tematu";

$lang['Total_votes'] = "Wszystkich G�os�w";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Tre�� wiadomo�ci";
$lang['Topic_review'] = "Przegl�d tematu";

$lang['No_post_mode'] = "Nie okre�lono typu postu";

$lang['Post_a_new_topic'] = "Napisz nowy temat";
$lang['Post_a_reply'] = "Napisz odpowied�";
$lang['Post_topic_as'] = "Napisz temat jako";
$lang['Edit_Post'] = "Zmie� post";
$lang['Options'] = "Opcje";

$lang['Post_Announcement'] = "Og�oszenie";
$lang['Post_Sticky'] = "Przyklejony";
$lang['Post_Normal'] = "Normalny";

$lang['Confirm_delete'] = "Czy na pewno chcesz usun�� ten post?";
$lang['Confirm_delete_poll'] = "Czy na pewno chcesz usun�� t� ankiet�?";

$lang['Flood_Error'] = "Nie mo�esz wys�a� nowego postu tak szybko po poprzednim, zaczekaj chwil� i spr�buj ponownie";
$lang['Empty_subject'] = "Musisz wpisa� temat je�li wysy�asz nowy w�tek";
$lang['Empty_message'] = "Musisz wpisa� wiadomo�� przed wys�aniem";
$lang['Forum_locked'] = "To forum jest zablokowane, nie mo�esz pisa� dodawa� ani zmienia� na nim czegokolwiek";
$lang['Topic_locked'] = "Ten temat jest zablokowany bez mo�liwo�ci zmiany post�w lub pisania odpowiedzi";
$lang['No_post_id'] = "Musisz wybra� post do edycji";
$lang['No_topic_id'] = "Musisz wybra� temat do wys�ania odpowiedzi";
$lang['No_valid_mode'] = "Mo�esz jedynie pisa� nowe, odpowiada�, zmienia� lub cytowa� wiadomo�ci, wr�� i spr�buj ponownie";
$lang['No_such_post'] = "Taki post nie istnieje, wr�� i spr�buj ponownie";
$lang['Edit_own_posts'] = "Przepraszamy, ale mo�esz zmienia� jedynie swoje posty";
$lang['Delete_own_posts'] = "Przepraszamy, ale mo�esz usuwa� jedynie swoje posty";
$lang['Cannot_delete_replied'] = "Przepraszamy, ale nie mo�esz usuwa� post�w, kt�re uzyska�y odpowied�";
$lang['Cannot_delete_poll'] = "Przepraszamy, ale nie mo�esz usun�� aktywnej ankiety";
$lang['Empty_poll_title'] = "Musisz wpisa� tytu� dla ankiety";
$lang['To_few_poll_options'] = "Musisz wpisa� przynajmniej dwie opcje ankiety";
$lang['To_many_poll_options'] = "Poda�e� zbyt wiele opcji dla ankiety";
$lang['Post_has_no_poll'] = "Ten post nie ma ankiety";
$lang['Already_voted'] = 'Odda�e� ju� g�os w tej ankiecie';
$lang['No_vote_option'] = 'Musisz wybra� opcj� podczas g�osowania';

$lang['Add_poll'] = "Dodaj Ankiet�";
$lang['Add_poll_explain'] = "Je�eli nie chcesz dodawa� ankiety do tego tematu, pozostaw pola puste";
$lang['Poll_question'] = "Pytanie do ankiety";
$lang['Poll_option'] = "Opcja ankiety";
$lang['Add_option'] = "Dodaj opcj�";
$lang['Update'] = "Aktualizuj";
$lang['Delete'] = "Usu�";
$lang['Poll_for'] = "Czas trwania";
$lang['Days'] = "Dni"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "[ Wpisz 0 lub pozostaw puste dla nieko�cz�cej si� ankiety ]";
$lang['Delete_poll'] = "Usu� Ankiet�";

$lang['Disable_HTML_post'] = "Wy��cz HTML w tym po�cie";
$lang['Disable_BBCode_post'] = "Wy��cz BBCode w tym po�cie";
$lang['Disable_Smilies_post'] = "Wy��cz U�mieszki w tym po�cie";

$lang['HTML_is_ON'] = "HTML: <u>TAK</u>";
$lang['HTML_is_OFF'] = "HTML: <u>NIE</u>";
$lang['BBCode_is_ON'] = "%sBBCode%s: <u>TAK</u>";
$lang['BBCode_is_OFF'] = "%sBBCode%s: <u>NIE</u>";
$lang['Smilies_are_ON'] = "U�mieszki: <u>TAK</u>";
$lang['Smilies_are_OFF'] = "U�mieszki: <u>NIE</u>";

$lang['Attach_signature'] = "Dodaj podpis (mo�e by� zmieniony w profilu)";
$lang['Notify'] = "Powiadom mnie gdy kto� odpowie";
$lang['Delete_post'] = "Usu� ten post";

$lang['Stored'] = "Twoja wiadomo�� zosta�a zapisana";
$lang['Deleted'] = "Twoja wiadomo�� zosta�a usuni�ta";
$lang['Poll_delete'] = "Twoja ankieta zosta�a usuni�ta";
$lang['Vote_cast'] = "Tw�j g�os zosta� zapisany";

$lang['Topic_reply_notification'] = "Powiadomienie o Odpowiedzi";

$lang['bbcode_b_help'] = "Tekst pogrubiony: [b]tekst[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Tekst kursyw�: [i]tekst[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Tekst podkre�lony: [u]tekst[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Cytat: [quote]tekst[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Poka� kod: [code]kod[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Lista: [list]tekst[/list] (alt+l)";
$lang['bbcode_o_help'] = "Lista uporz�dkowana: [list=]tekst[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Wstaw obrazek: [img]http://adres_obrazka[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Wstaw adres: [url]http://adres[/url] or [url=http://adres]Tekst adresu[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Zamknij wszystkie otwarte tagi bbCode";
$lang['bbcode_s_help'] = "Kolor czcionki: [color=red]tekst[/color]  Rada: mo�esz tak�e poda� color=#FF0000";
$lang['bbcode_f_help'] = "Rozmiar czcionki: [size=x-small]ma�y tekst[/size]";

$lang['Emoticons'] = "Ikony Emocji";
$lang['More_emoticons'] = "Wi�cej Ikon";

$lang['Font_color'] = "Kolor";
$lang['color_default'] = "Domy�lny";
$lang['color_dark_red'] = "Ciemnoczerwony";
$lang['color_red'] = "Czerwony";
$lang['color_orange'] = "Pomara��zowy";
$lang['color_brown'] = "Br�zowy";
$lang['color_yellow'] = "��ty";
$lang['color_green'] = "Zielony";
$lang['color_olive'] = "Oliwkowy";
$lang['color_cyan'] = "B��kitny";
$lang['color_blue'] = "Niebieski";
$lang['color_dark_blue'] = "Ciemnoniebieski";
$lang['color_indigo'] = "Purpurowy";
$lang['color_violet'] = "Fioletowy";
$lang['color_white'] = "Bia�y";
$lang['color_black'] = "Czarny";

$lang['Font_size'] = "Rozmiar";
$lang['font_tiny'] = "Minimalny";
$lang['font_small'] = "Ma�y";
$lang['font_normal'] = "Normalny";
$lang['font_large'] = "Du�y";
$lang['font_huge'] = "Ogromny";

$lang['Close_Tags'] = "Zamknij Tagi";
$lang['Styles_tip'] = "Rada: Style mog� by� stosowane szybko do zaznaczonego tekstu";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Prywatne Wiadomo�ci";

$lang['Login_check_pm'] = "Zaloguj si�, by sprawdzi� wiadomo�ci";
$lang['New_pms'] = "Masz %d nowych wiadomo�ci"; // You have 2 new messages
$lang['New_pm'] = "Masz %d now� wiadomo��"; // You have 1 new message
$lang['No_new_pm'] = "Nie masz nowych wiadomo�ci";
$lang['Unread_pms'] = "Masz %d nieprzeczytanych wiadomo�ci";
$lang['Unread_pm'] = "Masz %d nieprzeczytan� wiadomo��";
$lang['No_unread_pm'] = "Nie masz nieprzeczytanych wiadomo�ci";
$lang['You_new_pm'] = "Nowa prywatna wiadomo�� czeka na Ciebie w Skrzynce";
$lang['You_new_pms'] = "Nowe prywatne wiadomo�ci czekaj� na Ciebie w Skrzynce";
$lang['You_no_new_pm'] = "Nie ma dla Ciebie �adnych nowych prywatnych wiadomo�ci";
$lang['Unread_message'] = 'Nowa wiadomo��';
$lang['Read_message'] = 'Przeczytana wiadomo��';

$lang['Read_pm'] = 'Odczytaj wiadomo��';
$lang['Post_new_pm'] = 'Napisz wiadomo��';
$lang['Post_reply_pm'] = 'Odpowiedz na wiadomo��';
$lang['Post_quote_pm'] = 'Cytuj wiadomo��';
$lang['Edit_pm'] = 'Zmie� wiadomo��';

$lang['Inbox'] = "Skrzynka";
$lang['Outbox'] = "Do Wys�ania";
$lang['Savebox'] = "Zapisane";
$lang['Sentbox'] = "Wys�ane";
$lang['Flag'] = "Flaga";
$lang['Subject'] = "Temat";
$lang['From'] = "Od";
$lang['To'] = "Do";
$lang['Date'] = "Data";
$lang['Mark'] = "Zaznacz";
$lang['Sent'] = "Wys�ana";
$lang['Saved'] = "Zapisana";
$lang['Delete_marked'] = "Usu� Zaznaczone";
$lang['Delete_all'] = "Usu� Wszystkie";
$lang['Save_marked'] = "Zapisz Zaznaczone"; 
$lang['Save_message'] = "Zapisz Wiadomo��";
$lang['Delete_message'] = "Usu� Wiadomo��";

$lang['Display_messages'] = "Wy�wietl wiadomo�ci z ostatnich"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "Wszystkie Wiadomo�ci";

$lang['No_messages_folder'] = "Nie masz wiadomo�ci w tym folderze";

$lang['PM_disabled'] = "Prywatne Wiadomo�ci zosta�y wy��czone na tym forum";
$lang['Cannot_send_privmsg'] = "Przepraszam, ale administrator zabroni� Ci wysy�a� prywatnych wiadomo�ci";
$lang['No_to_user'] = "Musisz wpisa� nazw� u�ytkownika aby wys�a� t� wiadomo��";
$lang['No_such_user'] = "Taki u�ytkownik nie istnieje";

$lang['Disable_HTML_pm'] = "Wy��cz HTML w tej wiadomo�ci";
$lang['Disable_BBCode_pm'] = "Wy��cz BBCode w tej wiadomo�ci";
$lang['Disable_Smilies_pm'] = "Wy��cz U�mieszki w tej wiadomo�ci";

$lang['Message_sent'] = "Twoja wiadomo�� zosta�a wys�ana";

$lang['Click_return_inbox'] = "Kliknij %sTutaj%s aby powr�ci� do Skrzynki";
$lang['Click_return_index'] = "Kliknij %sTutaj%s aby powr�ci� do Strony G��wnej";

$lang['Send_a_new_message'] = "Wy�lij now� prywatn� wiadomo��";
$lang['Send_a_reply'] = "Odpowiedz na prywatn� wiadomo��";
$lang['Edit_message'] = "Zmie� prywatn� wiadomo��";

$lang['Notification_subject'] = "Nadesz�a nowa Prywatna Wiadomo��";

$lang['Find_username'] = "Znajd� u�ytkownika";
$lang['Find'] = "Znajd�";
$lang['No_match'] = "Nie znaleziono pasuj�cych";

$lang['No_post_id'] = "Nie okre�lono ID postu";
$lang['No_such_folder'] = "Nie istnieje taki folder";
$lang['No_folder'] = "Nie okre�lono folderu";

$lang['Mark_all'] = "Zaznacz wszystkie";
$lang['Unmark_all'] = "Odznacz wszystkie";

$lang['Confirm_delete_pm'] = "Czy na pewno chcesz usun�� t� wiadomo��?";
$lang['Confirm_delete_pms'] = "Czy na pewno chcesz usun�� te wiadomo�ci?";

$lang['Inbox_size'] = "Wiadomo�ci w Skrzynce zajmuj� %d%%"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Wys�ane wiadomo�ci zajmuj� %d%%";
$lang['Savebox_size'] = "Zapisane wiadomo�ci zajmuj� %d%%";

$lang['Click_view_privmsg'] = "Kliknij %sTutaj%s aby odwiedzi� twoj� Skrzynk�";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Przedstawiamy profil :: %s"; // %s is username 
$lang['About_user'] = "Wszystko o %s";

$lang['Preferences'] = "Preferencje";
$lang['Items_required'] = "Pola oznaczone * s� wymagane, chyba �e napisano inaczej";
$lang['Registration_info'] = "Infomacje Rejestracji";
$lang['Profile_info'] = "Informacje Profilu";
$lang['Profile_info_warn'] = "Te informacje b�d� widoczne publicznie";
$lang['Avatar_panel'] = "Panel kontrolny emblemat�w";
$lang['Avatar_gallery'] = "Galeria Emblemat�w";

$lang['Website'] = "Strona WWW";
$lang['Location'] = "Sk�d";
$lang['Contact'] = "Kontakt z";
$lang['Email_address'] = "Adres email";
$lang['Email'] = "Email";
$lang['Send_private_message'] = "Wy�lij prywatn� wiadomo��";
$lang['Hidden_email'] = "[ Ukryty ]";
$lang['Search_user_posts'] = "Szukaj post�w tego u�ytkownika";
$lang['Interests'] = "Zainteresowania";
$lang['Occupation'] = "Zaw�d"; 
$lang['Poster_rank'] = "Ranga";

$lang['Total_posts'] = "Post�w";
$lang['User_post_pct_stats'] = "%d%% z ca�o�ci";
$lang['User_post_day_stats'] = "%.2f post�w dziennie";
$lang['Search_user_posts'] = "Znajd� wszystkie posty %s";

$lang['No_user_id_specified'] = "Przepraszamy, ale ten u�ytkownik nie istnieje";
$lang['Wrong_Profile'] = "Nie mo�esz zmienia� cudzego profilu.";

$lang['Only_one_avatar'] = "Mo�na okre�li� tylko jeden typ emblematu";
$lang['File_no_data'] = "Plik pod podanym adresem nie zawiera �adnych danych";
$lang['No_connection_URL'] = "Nie mo�na by�o po��czy� si� z podanym przez Ciebie adresem";
$lang['Incomplete_URL'] = "Wpisany adres jest niekompletny";
$lang['Wrong_remote_avatar_format'] = "Podany adres emblematu nie jest prawid�owy";
$lang['No_send_account_inactive'] = "Przepraszamy, ale Twoje has�o nie mo�e by� odzyskane gdy� Twoje konto jest obecnie nieaktywne. Skontaktuj si� z administratorem aby uzyska� wi�cej informacji";

$lang['Always_smile'] = "Zawsze w��czaj U�mieszki";
$lang['Always_html'] = "Zawsze w��czaj HTML";
$lang['Always_bbcode'] = "Zawsze w��czaj BBCode";
$lang['Always_add_sig'] = "Zawsze dodawaj m�j podpis";
$lang['Always_notify'] = "Zawsze powiadamiaj o odpowiedziach";
$lang['Always_notify_explain'] = "Wysy�a email gdy kto� odpowie w temacie, w kt�rym napisa�e� wiadomo��. Mo�esz to zmieni� przy ka�dej napisanej wiadomo�ci";

$lang['Board_style'] = "Styl Forum";
$lang['Board_lang'] = "J�zyk Forum";
$lang['No_themes'] = "Brak Szablon�w w bazie danych";
$lang['Timezone'] = "Strefa Czasowa";
$lang['Date_format'] = "Format Daty";
$lang['Date_format_explain'] = "Sk�adnia jest identyczna z funkcj� <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> w PHP";
$lang['Signature'] = "Podpis";
$lang['Signature_explain'] = "To jest blok tekstu, kt�ry mo�e by� dodawany do Twoich post�w. Ma limit %d znak�w";
$lang['Public_view_email'] = "Zawsze pokazuj m�j Adres Email";

$lang['Current_password'] = "Obecne Has�o";
$lang['New_password'] = "Nowe Has�o";
$lang['Confirm_password'] = "Potwierd� Has�o";
$lang['Confirm_password_explain'] = "Musisz potwierdzi� obecne has�o je�li chcesz je zmieni� lub poda� inny adres email";
$lang['password_if_changed'] = "Musisz podawa� has�o tylko je�li chcesz je zmieni�";
$lang['password_confirm_if_changed'] = "Musisz potwierdza� has�o tylko je�li chcesz je zmieni�";

$lang['Avatar'] = "Emblemat";
$lang['Avatar_explain'] = "Wy�wietla ma�y obrazek pod informacjami o Tobie przy ka�dym po�cie. Tylko jeden obrazek mo�e by� wy�wietlany, jego szeroko�� nie mo�e by� wi�ksza ni� %d pikseli, wysoko�� wi�ksza ni� %d pikseli, a rozmiar wi�kszy ni� %dkB.";
$lang['Upload_Avatar_file'] = "Wy�lij Emblemat z twojego komputera";
$lang['Upload_Avatar_URL'] = "Wy�lij Emblemat z adresu";
$lang['Upload_Avatar_URL_explain'] = "Wpisz adres, pod kt�rym zlokalizowany jest Tw�j Emblemat, zostanie on skopiowany na t� stron�.";
$lang['Pick_local_Avatar'] = "Wybierz Emblemat z galerii";
$lang['Link_remote_Avatar'] = "Odno�nik do zewn�trznego Emblematu";
$lang['Link_remote_Avatar_explain'] = "Wpisz adres Emblematu, kt�ry chcesz wykorzysta�.";
$lang['Avatar_URL'] = "Adres Obrazu Emblematu";
$lang['Select_from_gallery'] = "Wybierz Emblemat z galerii";
$lang['View_avatar_gallery'] = "Poka� galeri�";

$lang['Select_avatar'] = "Wybierz Emblemat";
$lang['Return_profile'] = "Anuluj Wyb�r";
$lang['Select_category'] = "Wybierz Kategori�";

$lang['Delete_Image'] = "Usu� Obraz";
$lang['Current_Image'] = "Obecny Obraz";

$lang['Notify_on_privmsg'] = "Powiadom o Prywatnej Wiadomo�ci";
$lang['Popup_on_privmsg'] = "Otw�rz okno przy nadej�ciu Wiadomo�ci"; 
$lang['Popup_on_privmsg_explain'] = "Niekt�re szablony mog� otwiera� nowe okno aby poinformowa� o nadej�ciu nowej Prywatnej Wiadomo�ci"; 
$lang['Hide_user'] = "Ukryj moj� obecno�� na forum";

$lang['Profile_updated'] = "Tw�j profil zosta� zaktualizowany";
$lang['Profile_updated_inactive'] = "Tw�j profil zosta� zmieniony jednak�e zmodyfikowa�e� istotne dane i Twoje konto zosta�o deaktywowane. Otrzymasz wiadomo�� email z instrukcjami jak reaktywowa� Twoje konto, lub b�dziesz musia� poczeka� a� administrator dokona reaktywacji";

$lang['Password_mismatch'] = "Wpisane has�a nie pasuj� do siebie";
$lang['Current_password_mismatch'] = "Wpisane przez Ciebie has�o nie pasuje do zapisanego w bazie danych";
$lang['Password_long'] = "Twoje has�o nie mo�e mie� wi�cej ni� 32 znaki";
$lang['Username_taken'] = "Przepraszamy, ale ta nazwa u�ytkownika jest ju� zaj�ta";
$lang['Username_invalid'] = "Nazwa u�ytkownika nie mo�e zawiera� znak�w takich jak \"";
$lang['Username_disallowed'] = "Ta nazwa u�ytkownika zosta�a zakazana";
$lang['Email_taken'] = "Ten adres email zosta� ju� zarejestrowany wraz z innym u�ytkownikiem";
$lang['Email_banned'] = "Ten adres email zosta� wyrzucony z forum";
$lang['Email_invalid'] = "Ten adres email jest nieprawid�owy";
$lang['Signature_too_long'] = "Tw�j podpis jest za d�ugi";
$lang['Fields_empty'] = "Musisz wype�ni� wymagane pola";
$lang['Avatar_filetype'] = "Emblemat musi by� typu .jpg, .gif lub .png";
$lang['Avatar_filesize'] = "Rozmiar emblematu musi by� wi�kszy ni� 0 kB i mniejszy ni�"; // followed by xx kB, xx being the size
$lang['Avatar_imagesize'] = "Emblemat musi by� mniejszy ni� %d pikseli szeroko�ci i %d pikseli wysoko�ci"; 

$lang['Welcome_subject'] = "Witamy na Forum %s";
$lang['New_account_subject'] = "Nowe Konto";
$lang['Account_activated_subject'] = "Konto Aktywowane";

$lang['Account_added'] = "Dzi�kujemy za rejestracj�, Twoje konto zosta�o utworzone. Mo�esz zalogowa� si� korzystaj�c z podanych wcze�niej nazwy u�ytkownika i has�a.";
$lang['Account_inactive'] = "Twoje konto zosta�o utworzone. To Forum jednak�e wymaga aktywacji kont, poprzez podanie klucza aktywuj�cego, kt�ry otrzymasz w specjalnej wiadomo�ci email. W niej te� znajdziesz dalsze instrukcje post�powania.";
$lang['Account_inactive_admin'] = "Twoje konto zosta�o utworzone. To Forum jednak�e wymaga aktywacji kont przez administratora. Zosta� ju� do niego wys�any email powiadamiaj�cy o utworzeniu nowego konta i wkr�tce zostanie ono aktywowane";
$lang['Account_active'] = "Twoje konto zosta�o niniejszym aktywowane. Dzi�kujemy za rejestracj�";
$lang['Account_active_admin'] = "Konto zosta�o aktywowane";
$lang['Reactivate'] = "Reaktywuj soje konto!";
$lang['Already_activated'] = 'Twoje konto zosta�o ju� aktywowane';
$lang['COPPA'] = "Twoje konto zosta�o utworzone ale musi jeszcze zosta� zaakceptowane. Otrzymasz specjalny email z instrukcjami.";

$lang['Registration'] = "Warunki Rejestracji";
$lang['Reg_agreement'] = "Administratorzy i moderatorzy podejm� starania maj�ce na celu usuwanie wszelkich uznawanych za obra�liwe materia��w jak najszybciej, jednak�e nie jest mo�liwe przeczytanie ka�dej wiadomo�ci. Zgadzasz si� wi�c, �e zawarto�� ka�dego postu na tym forum wyra�a pogl�dy i opinie jego autora a nie administrator�w, moderator�w czy webmaster�w (poza wiadomo�ciami pisanymi przez nich) i nie ponosz� oni za te tre�ci odpowiedzialno�ci.<br /><br />Zgadzasz si� nie pisa� �adnych obra�liwych, obscenicznych, wulgarnych, oszczerczych, nienawistnych, zawieraj�cych gro�by i innych materia��w, kt�re mog� by� sprzeczne z prawem. Z�amanie tej zasady mo�e by� przyczyn� natychmiastowego i trwa�ego usuni�cia z listy u�ytkownik�w (wraz z powiadomieniem odpowiednich w�adz). Aby wspom�c te dzia�ania rejestrowane s� adresy IP autor�w. Przyjmujesz do wiadomo�ci, �e webmaster, administrator i moderatorzy tego forum maj� prawo do do usuwania, zmiany lub zamykania ka�dego w�tku w ka�dej chwili je�li zajdzie taka potrzeba. Jako u�ytkownik zgadzasz si�, �e wszystkie informacje, kt�re wpiszesz b�d� przechowywane w bazie danych. Informacje te nie b�d� podawane bez twojej zgody �adnym osobom ani podmiotom trzecim, jednak�e webmaster, administrator i moderatorzy nie b�d� obarczeni odpowiedzialno�ci� za w�amania hackerskie prowadz�ce do pozyskania tych danych.<br /><br />Skrypt tego forum wykorzystuje cookies do przechowywania informacji na twoim komputerze. Te cookies nie zawieraj� �adnych informacji, kt�re poda�e� i s�u�� jedynie u�atwieniu korzystania z forum. Adres email jest wykorzystywany jedynie dla potwierdzenia podanych informacji oraz has�a (i dla przes�ania nowego has�a, gdyby� zapomnia� stare).<br /><br />Klikaj�c odno�nik Rejestracja na dole zgadzasz si� na te warunki.";

$lang['Agree_under_13'] = "Zgadzam Si� na te warunki i mam <b>poni�ej</b> 13 lat";
$lang['Agree_over_13'] = "Zgadzam Si� na te warunki i mam <b>powy�ej</b> 13 lat";
$lang['Agree_not'] = "Nie zgadzam si� na te warunki";

$lang['Wrong_activation'] = "Podany przez ciebie klucz aktywacyjny nie pasuje do �adnego w bazie danych";
$lang['Send_password'] = "Wy�lij mi nowe has�o";
$lang['Password_updated'] = "Nowe has�o zosta�o utworzone. Otrzymasz email z informacjami jak je aktywowa�";
$lang['No_email_match'] = "Adres email, kt�ry poda�e� nie pasuje do zapisanego razem z baz� danych";
$lang['New_password_activation'] = "Aktywacja nowego has�a";
$lang['Password_activated'] = "Twoje konto zosta�o reaktywowane. Aby si� zalogowa� u�yj has�a podanego w email'u, kt�ry otrzyma�e�";

$lang['Send_email_msg'] = "Wy�lij mi email";
$lang['No_user_specified'] = "Nie okre�lono �adnego u�ytkownika";
$lang['User_prevent_email'] = "Ten u�ytkownik nie �yczy sobie otrzymywa� email'i. Spr�buj wys�a� mu prywatn� wiadomo��.";
$lang['User_not_exist'] = "Ten u�ytkownik nie istnieje";
$lang['CC_email'] = "Wy�lij kopi� tego email'a do siebie";
$lang['Email_message_desc'] = "Wiadomo�� zostanie wys�ana jako zwyk�y tekst, nie wstawiaj znacznik�w HTML ani BBCode. Jako adres zwrotny zostanie wstawiony tw�j adres email.";
$lang['Flood_email_limit'] = "Nie mo�esz teraz wys�a� kolejnego email'a. Spr�buj ponownie za jaki� czas.";
$lang['Recipient'] = "Odbiorca";
$lang['Email_sent'] = "Email zosta� wys�any";
$lang['Send_email'] = "Wy�lij email";
$lang['Empty_subject_email'] = "Musisz okre�li� temat dla email'a";
$lang['Empty_message_email'] = "Musisz wpisa� wiadomo�� do wys�ania";


//
// Memberslist
//
$lang['Select_sort_method'] = "Metoda sortowania";
$lang['Sort'] = "Sortuj";
$lang['Sort_Top_Ten'] = "10 Najaktywniejszych";
$lang['Sort_Joined'] = "Data przy��czenia";
$lang['Sort_Username'] = "Nazwa U�ytkownika";
$lang['Sort_Location'] = "Sk�d";
$lang['Sort_Posts'] = "Wszystkich Post�w";
$lang['Sort_Email'] = "Email";
$lang['Sort_Website'] = "Strona";
$lang['Sort_Ascending'] = "Rosn�co";
$lang['Sort_Descending'] = "Malej�co";
$lang['Order'] = "Porz�dek";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Panel Kontrolny Grupy";
$lang['Group_member_details'] = "Szczeg�y Cz�onkostwa w Grupie";
$lang['Group_member_join'] = "Do��cz do Grupy";

$lang['Group_Information'] = "Informacje o Grupie";
$lang['Group_name'] = "Nazwa Grupy";
$lang['Group_description'] = "Opis Grupy";
$lang['Group_membership'] = "Twoje cz�onkostwo";
$lang['Group_Members'] = "Cz�onkowie Grupy";
$lang['Group_Moderator'] = "Moderator Grupy";
$lang['Pending_members'] = "Cz�onkowie Oczekuj�cy";

$lang['Group_type'] = "Typ grupy";
$lang['Group_open'] = "Grupa otwarta";
$lang['Group_closed'] = "Grupa zamkni�ta";
$lang['Group_hidden'] = "Grupa ukryta";

$lang['Current_memberships'] = "Obecni cz�onkowie";
$lang['Non_member_groups'] = "Grupy bez cz�onkostw";
$lang['Memberships_pending'] = "Oczekuj�ce Cz�onkostwa";

$lang['No_groups_exist'] = "�adna Grupa nie Istnieje";
$lang['Group_not_exist'] = "Taka grupa nie istnieje";

$lang['Join_group'] = "Do��cz";
$lang['No_group_members'] = "Ta grupa nie ma cz�onk�w";
$lang['Group_hidden_members'] = "Tak grupa jest ukryta, nie mo�esz zobaczy� listy jej cz�onk�w";
$lang['No_pending_group_members'] = "Ta grupa nie ma cz�onk�w oczekuj�cych";
$lang["Group_joined"] = "Zosta�e� do��czony do tej grupy<br />Zostaniesz powiadomionu kiedy Twoje cz�onkostwo zostanie zaakceptowane przez moderatora";
$lang['Group_request'] = "Twoja pro�ba o przy��czenie do grupy zosta�a wys�ana";
$lang['Group_approved'] = "Twoja pro�ba zosta�a zaakceptowana";
$lang['Group_added'] = "Zosta�e� dodany do tej grupy"; 
$lang['Already_member_group'] = "Jeste� ju� cz�onkiem tej grupy";
$lang['User_is_member_group'] = "U�ytkownik jest ju� cz�onkiem tej grupy";
$lang['Group_type_updated'] = "Zaktualizowano typ grupy";

$lang['Could_not_add_user'] = "Wybrany u�ytkownik nie istnieje";
$lang['Could_not_anon_user'] = "Anonimowy nie mo�e by� cz�onkiem grupy";

$lang['Confirm_unsub'] = "Czy na pewno chcesz opu�ci� t� grup�?";
$lang['Confirm_unsub_pending'] = "Twoje cz�onkostwo w tej grupie nie zosta�o jeszcze zaakceptowane, czy na pewno chcesz je zako�czy�?";

$lang['Unsub_success'] = "Przesta�e� by� cz�onkiem tej grupy.";

$lang['Approve_selected'] = "Zaakceptuj Wybrane";
$lang['Deny_selected'] = "Odrzu� Wybrane";
$lang['Not_logged_in'] = "Musisz si� zalogowa� by do��czy� do grupy.";
$lang['Remove_selected'] = "Usu� Wybrane";
$lang['Add_member'] = "Dodaj Cz�onka";
$lang['Not_group_moderator'] = "Nie jeste� moderatorem tej grupy i nie mo�esz wykona� tego dzia�ania.";

$lang['Login_to_join'] = "Zaloguj si� aby do��czy� do grupy lub zarz�dza� jej cz�onkostwem";
$lang['This_open_group'] = "To jest grupa otwarta, kliknij aby poprosi� o cz�onkostwo";
$lang['This_closed_group'] = "To jest grupa zamkni�ta, nowi cz�onkowie nie b�d� przyjmowani";
$lang['This_hidden_group'] = "To jest grupa ukryta, automatyczne dodawanie cz�onk�w nie jest dozwolone";
$lang['Member_this_group'] = "Jeste� cz�onkiem tej grupy";
$lang['Pending_this_group'] = "Twoje cz�onkowstwo w tej grupie czeka na akceptacj�";
$lang['Are_group_moderator'] = "Jeste� moderatorem tej grupy";
$lang['None'] = "Brak";

$lang['Subscribe'] = "Do��cz";
$lang['Unsubscribe'] = "Opu��";
$lang['View_Information'] = "Zobacz Informacje";


//
// Search
//
$lang['Search_query'] = "Poszukiwane Zapytanie";
$lang['Search_options'] = "Opcje Wyszukiwania";

$lang['Search_keywords'] = "Szukaj S��w Kluczowych";
$lang['Search_keywords_explain'] = "Mo�esz u�ywa� <u>AND</u> aby okre�la�, kt�re s�owa musz� znale�� si� w wynikach, <u>OR</u> dla tych, kt�re mog� si� tam znale�� i <u>NOT</u> dla tych, kt�re nie mog� wyst�pi�. Znak * zast�puje dowolny ci�g znak�w. Aby szuka� zwrotu umie�� go wewn�trz &quot;&quot;";
$lang['Search_author'] = "Szukaj Autora";
$lang['Search_author_explain'] = "U�yj * jako zamiennika dowolnego ci�gu znak�w";

$lang['Search_for_any'] = "Szukaj kt�regokolwiek s�owa lub wyra�enia jak je wpisano";
$lang['Search_for_all'] = "Szukaj wszystkich s��w";
$lang['Search_title_msg'] = "Przeszukaj tytu� i tekst wiadomo�ci"; 
$lang['Search_msg_only'] = "Przeszukaj tylko tekst wiadomo�ci"; 

$lang['Return_first'] = "Poka� pierwsze"; // followed by xxx characters in a select box
$lang['characters_posts'] = "znak�w z postu";

$lang['Search_previous'] = "Przeszukaj ostanie"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Sortuj wed�ug";
$lang['Sort_Time'] = "Czas Wys�ania";
$lang['Sort_Post_Subject'] = "Temat Postu";
$lang['Sort_Topic_Title'] = "Tytu� Tematu";
$lang['Sort_Author'] = "Autor";
$lang['Sort_Forum'] = "Forum";

$lang['Display_results'] = "Poka� wyniki jako";
$lang['All_available'] = "Wszystkie dost�pne";
$lang['No_searchable_forums'] = "Nie masz uprawnie� do przeszukiwania kt�egokolwiek forum na tej stronie";

$lang['No_search_match'] = "Nie znaleziono temat�w ani post�w pasuj�cych do Twoich kryteri�w";
$lang['Found_search_match'] = "Znaleziono %d wynik"; // eg. Search found 1 match
$lang['Found_search_matches'] = "Znaleziono %d wynik�w"; // eg. Search found 24 matches

$lang['Close_window'] = "Zamknij Okno";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Przepraszamy, ale tylko %s mog� pisa� og�oszenia na tym forum";
$lang['Sorry_auth_sticky'] = "Przepraszamy, ale tylko %s mog� pisa� tematy przyklejone na tym forum"; 
$lang['Sorry_auth_read'] = "Przepraszamy, ale tylko %s mog� czyta� tematy na tym forum"; 
$lang['Sorry_auth_post'] = "Przepraszamy, ale tylko %s mog� pisa� tematy na tym forum"; 
$lang['Sorry_auth_reply'] = "Przepraszamy, ale tylko %s mog� odpowiada� na posty na tym forum"; 
$lang['Sorry_auth_edit'] = "Przepraszamy, ale tylko %s mog� zmienia� posty na tym forum"; 
$lang['Sorry_auth_delete'] = "Przepraszamy, ale tylko %s mog� usuwa� posty na tym forum"; 
$lang['Sorry_auth_vote'] = "Przepraszamy, ale tylko %s mog� g�osowa� w ankietach na tym forum"; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>anonimowi u�ytkownicy</b>";
$lang['Auth_Registered_Users'] = "<b>zarejestrowani u�ytkownicy</b>";
$lang['Auth_Users_granted_access'] = "<b>u�ytkownicy z uprawnieniami dost�pu</b>";
$lang['Auth_Moderators'] = "<b>moderatorzy</b>";
$lang['Auth_Administrators'] = "<b>administratorzy</b>";

$lang['Not_Moderator'] = "Nie jeste� moderatorem tego forum";
$lang['Not_Authorised'] = "Nieautoryzowany";

$lang['You_been_banned'] = "Zosta�e� wyrzucony z tego forum<br />Skontaktuj si� z webmasterem lub administratorem forum w celu uzyskania dalszych informacji";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Na Forum jest 0 Zarejestrowanych i "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Na forum jest %d Zarejestrowanych i ";
$lang['Reg_user_online'] = "Na forum jest %d Zarejestrowany u�ytkownik i "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 Ukrytych u�ytkownik�w"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d Ukrytych u�ytkownik�w";
$lang['Hidden_user_online'] = "%d Ukryty u�ytkownik"; // 6 Hidden users online
$lang['Guest_users_zero_online'] = "Na Forum jest 0 Go�ci"; // There are 10 Guest users online
$lang['Guest_users_online'] = "Na Forum jest %d Go�ci";
$lang['Guest_user_online'] = "Na Forum jest %d Go��";
$lang['No_users_browsing'] = "Obecnie nie ma �adnych u�ytkownik�w na tym forum";

$lang['Online_explain'] = "Te dane pokazuj� u�ytkownik�w aktywnych przez ostatnie 5 minut";

$lang['Forum_Location'] = "Lokalizacja";
$lang['Last_updated'] = "Ostatnia Aktualizacja";

$lang['Forum_index'] = "Strona G��wna";
$lang['Logging_on'] = "Loguje si�";
$lang['Posting_message'] = "Pisze wiadomo��";
$lang['Searching_forums'] = "Przeszukuje fora";
$lang['Viewing_profile'] = "Ogl�da profil";
$lang['Viewing_online'] = "Przegl�da list� obecnych na forum";
$lang['Viewing_member_list'] = "Ogl�da list� u�ytkownik�w";
$lang['Viewing_priv_msgs'] = "Ogl�da Prywatne Wiadomo�ci";
$lang['Viewing_FAQ'] = "Ogl�da FAQ";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Panel Kontrolny Moderacji";
$lang['Mod_CP_explain'] = "Korzystaj�c z poni�szego formularza mo�esz przeprowadzi� zbiorow� moderacj� na tym forum. Mo�esz blokowa�, odblokowywa�, przenosi� i usuwa� dowoln� ilo�� temat�w. Je�eli to forum jest ustawione jako prywatne mo�esz tak�e cz�ciowo decydowa�, kt�rzy u�ytkownicy mog� mie� do niego dost�p.";

$lang['Select'] = "Wybierz";
$lang['Delete'] = "Usu�";
$lang['Move'] = "Przenie�";
$lang['Lock'] = "Zablokuj";
$lang['Unlock'] = "Odblokuj";

$lang['Topics_Removed'] = "Wybrane tematy zosta�y usuni�te z bazy danych.";
$lang['Topics_Locked'] = "Wybrane tematy zosta�y zablokowane";
$lang['Topics_Moved'] = "Wybrane tematy zosta�y przeniesione";
$lang['Topics_Unlocked'] = "Wybrane tematy zosta�y odblokowane";
$lang['No_Topics_Moved'] = "Nie przeniesiono �adnego tematu";

$lang['Confirm_delete_topic'] = "Czy na pewno chcesz usun�� wybrane tematy?";
$lang['Confirm_lock_topic'] = "Czy na pewno chcesz zablokowa� wybrane tematy?";
$lang['Confirm_unlock_topic'] = "Czy na pewno chcesz odblokowa� wybrane tematy?";
$lang['Confirm_move_topic'] = "Czy na pewno chcesz przenie�� wybrane tematy?";

$lang['Move_to_forum'] = "Przenie� do forum";
$lang['Leave_shadow_topic'] = "Pozostaw odno�nik na starym forum.";

$lang['Split_Topic'] = "Panel Kontrolny Dzielenia Temat�w";
$lang['Split_Topic_explain'] = "U�ywaj�c poni�szego formularza mo�esz podzieli� temat na dwa, wybieraj�c posty, kt�re maj� zosta� wydzielone lub dziel�c od jednego zaznaczonego postu";
$lang['Split_title'] = "Tytu� nowego tematu";
$lang['Split_forum'] = "Forum dla nowego tematu";
$lang['Split_posts'] = "Wydziel wybrane posty";
$lang['Split_after'] = "Wydziel od wybranego postu";
$lang['Topic_split'] = "Wybrany temat zosta� podzielony";

$lang['Too_many_error'] = "Wybra�e� zbyt wiele post�w. Mo�esz wybra� tylko jeden, od kt�rego chcesz dzieli� temat!";

$lang['None_selected'] = "Nie wybra�e� �adnych temat�w do wykonania tej operacji. Prosz� wr�� i wybierz przynajmniej jeden.";
$lang['New_forum'] = "Nowe forum";

$lang['This_posts_IP'] = "IP dla tego postu";
$lang['Other_IP_this_user'] = "Inne IP, z kt�rych pisa� ten u�ytkownik";
$lang['Users_this_IP'] = "U�ytkownicy pisz�cy z tego IP";
$lang['IP_info'] = "Informacja o IP";
$lang['Lookup_IP'] = "Szukaj IP";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "Wszystkie czasy w strefie %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 Godzin";
$lang['-11'] = "GMT - 11 Godzin";
$lang['-10'] = "HST (Hawaje)";
$lang['-9'] = "GMT - 9 Godzin";
$lang['-8'] = "PST (U.S./Kanada)";
$lang['-7'] = "MST (U.S./Kanada)";
$lang['-6'] = "CST (U.S./Kanada)";
$lang['-5'] = "EST (U.S./Kanada)";
$lang['-4'] = "GMT - 4 Godziny";
$lang['-3.5'] = "GMT - 3.5 Godziny";
$lang['-3'] = "GMT - 3 Godziny";
$lang['-2'] = "�rodkowy Atlantyk";
$lang['-1'] = "GMT - 1 Godzina";
$lang['0'] = "GMT";
$lang['1'] = "CET (Europa)";
$lang['2'] = "EET (Europa)";
$lang['3'] = "GMT + 3 Godziny";
$lang['3.5'] = "GMT + 3.5 Godziny";
$lang['4'] = "GMT + 4 Godziny";
$lang['4.5'] = "GMT + 4.5 Godziny";
$lang['5'] = "GMT + 5 Godzin";
$lang['5.5'] = "GMT + 5.5 Godzin";
$lang['6'] = "GMT + 6 Godzin";
$lang['6.5'] = 'GMT + 6.5 Godziny';
$lang['7'] = "GMT + 7 Godzin";
$lang['8'] = "WST (Australia)";
$lang['9'] = "GMT + 9 Godzin";
$lang['9.5'] = "CST (Australia)";
$lang['10'] = "EST (Australia)";
$lang['11'] = "GMT + 11 Godzin";
$lang['12'] = "GMT + 12 Godzin";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 hours) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 hours) Wyspa Midway, Samoa";
$lang['tz']['10'] = "(GMT -10:00 hours) Hawaje";
$lang['tz']['-9'] = "(GMT -9:00 hours) Alaska";
$lang['tz']['-8'] = "(GMT -8:00 hours) Pacific Time (US &amp; Kanada)";
$lang['tz']['-7'] = "(GMT -7:00 hours) Mountain Time (US &amp; Kanada)";
$lang['tz']['-6'] = "(GMT -6:00 hours) Central Time (US &amp; Kanada), Mexico City";
$lang['tz']['-5'] = "(GMT -5:00 hours) Eastern Time (US &amp; Kanada), Bogota, Lima, Quito";
$lang['tz']['-4'] = "(GMT -4:00 hours) Atlantic Time (Canada), Caracas, La Paz";
$lang['tz']['-3.5'] = "(GMT -3:30 hours) Nowa Funflandia";
$lang['tz']['-3'] = "(GMT -3:00 hours) Brazylia, Buenos Aires, Georgetown, Falklandy";
$lang['tz']['-2'] = "(GMT -2:00 hours) �r-Atlantyk, Wyspa Ascension, �w. Helena";
$lang['tz']['-1'] = "(GMT -1:00 hours) Azory, Wyspy Cape Verde";
$lang['tz']['0'] = "(GMT) Casablanca, Dublin, Edynburg, Londyn, Lisbona, Monrovia";
$lang['tz']['1'] = "(GMT +1:00 hours) Berlin, Bruksela, Kopenhaga, Madryd, Pary�, Rzym";
$lang['tz']['2'] = "(GMT +2:00 hours) Kaliningrad, Po�. Afryka";
$lang['tz']['3'] = "(GMT +3:00 hours) Bagdad, Riyadh, Moskwa, Nairobi";
$lang['tz']['3.5'] = "(GMT +3:30 hours) Teheran";
$lang['tz']['4'] = "(GMT +4:00 hours) Abu Dhabi, Baku, Muscat, Tbilisi";
$lang['tz']['4.5'] = "(GMT +4:30 hours) Kabul";
$lang['tz']['5'] = "(GMT +5:00 hours) Ekaterinburg, Islamabad, Karaczi, Taszkent";
$lang['tz']['5.5'] = "(GMT +5:30 hours) Bombaj, Kalkuta, Madras, Nowe Delhi";
$lang['tz']['6'] = "(GMT +6:00 hours) Almaty, Colombo, Dhaka";
$lang['tz']['6.5'] = "(GMT +6:30 hours) Rangoon";
$lang['tz']['7'] = "(GMT +7:00 hours) Bangkok, Hanoi, D�akarta";
$lang['tz']['8'] = "(GMT +8:00 hours) Pekin, Hong Kong, Perth, Singapur, Taipei";
$lang['tz']['9'] = "(GMT +9:00 hours) Osaka, Sapporo, Seoul, Tokyo, Jakuck";
$lang['tz']['9.5'] = "(GMT +9:30 hours) Adelaide, Darwin";
$lang['tz']['10'] = "(GMT +10:00 hours) Melbourne, Papua Nowa Gwinea, Sydney, W�adywostok";
$lang['tz']['11'] = "(GMT +11:00 hours) Magadan, Nowa Kaledonia, Wyspy Salomona";
$lang['tz']['12'] = "(GMT +12:00 hours) Auckland, Wellington, Fid�i, Wyspy Marshalla";

$lang['datetime']['Sunday'] = "Niedziela";
$lang['datetime']['Monday'] = "Poniedzia�ek";
$lang['datetime']['Tuesday'] = "Wtorek";
$lang['datetime']['Wednesday'] = "�roda";
$lang['datetime']['Thursday'] = "Czwartek";
$lang['datetime']['Friday'] = "Pi�tek";
$lang['datetime']['Saturday'] = "Sobota";
$lang['datetime']['Sun'] = "Nie";
$lang['datetime']['Mon'] = "Pon";
$lang['datetime']['Tue'] = "Wto";
$lang['datetime']['Wed'] = "Sro";
$lang['datetime']['Thu'] = "Czw";
$lang['datetime']['Fri'] = "Pi�";
$lang['datetime']['Sat'] = "Sob";
$lang['datetime']['January'] = "Stycze�";
$lang['datetime']['February'] = "Luty";
$lang['datetime']['March'] = "Marzec";
$lang['datetime']['April'] = "Kwiecie�";
$lang['datetime']['May'] = "Maj";
$lang['datetime']['June'] = "Czerwiec";
$lang['datetime']['July'] = "Lipiec";
$lang['datetime']['August'] = "Sierpie�";
$lang['datetime']['September'] = "Wrzesie�";
$lang['datetime']['October'] = "Pa�dziernik";
$lang['datetime']['November'] = "Listopad";
$lang['datetime']['December'] = "Grudzie�";
$lang['datetime']['Jan'] = "Sty";
$lang['datetime']['Feb'] = "Lut";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Kwi";
$lang['datetime']['May'] = "Maj";
$lang['datetime']['Jun'] = "Cze";
$lang['datetime']['Jul'] = "Lip";
$lang['datetime']['Aug'] = "Sie";
$lang['datetime']['Sep'] = "Wrz";
$lang['datetime']['Oct'] = "Pa�";
$lang['datetime']['Nov'] = "Lis";
$lang['datetime']['Dec'] = "Gru";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informacja";
$lang['Critical_Information'] = "Istotna Informacja";

$lang['General_Error'] = "B��d Og�lny";
$lang['Critical_Error'] = "B��d Krytyczny";
$lang['An_error_occured'] = "Wyst�pi� B��d";
$lang['A_critical_error'] = "Wyst�pi� Krytyczny B��d";

//
// That's all Folks!

// -------------------------------------------------

?>