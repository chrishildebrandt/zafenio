<?php
/***************************************************************************
 *			      lang_main.php [English]
 *				-------------------
 *     begin		    : Sat Dec 16 2000
 *     copyright	    : (C) 2001 The phpBB Group
 *     email		    : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2003/04/28 20:11:02 bob Exp $
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
//   Norwegian translation by lanes, shantra & water
// 


//setlocale(LC_ALL, "no");
$lang['ENCODING'] = "iso-8859-1";
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
$lang['Category'] = "Kategori";
$lang['Topic'] = "Tema";
$lang['Topics'] = "Temaer";
$lang['Replies'] = "Svar";
$lang['Views'] = "Visninger";
$lang['Post'] = "Innlegg";
$lang['Posts'] = "Innlegg";
$lang['Posted'] = "Skrevet";
$lang['Username'] = "Brukernavn";
$lang['Password'] = "Passord";
$lang['Email'] = "E-post";
$lang['Poster'] = "Skrevet";
$lang['Author'] = "Av";
$lang['Time'] = "Tid";
$lang['Hours'] = "Timer";
$lang['Message'] = "Innlegg";

$lang['1_Day'] = "1 Dag";
$lang['7_Days'] = "7 Dager";
$lang['2_Weeks'] = "2 Uker";
$lang['1_Month'] = "1 M�ned";
$lang['3_Months'] = "3 M�neder";
$lang['6_Months'] = "6 M�neder";
$lang['1_Year'] = "1 �r";

$lang['Go'] = "G�";
$lang['Jump_to'] = "G� Til";
$lang['Submit'] = "OK";
$lang['Reset'] = "Angre";
$lang['Cancel'] = "Avbryt";
$lang['Preview'] = "Forh�ndsvisning";
$lang['Confirm'] = "Bekreft";
$lang['Spellcheck'] = "Stavekontroll";
$lang['Yes'] = "Ja";
$lang['No'] = "Nei";
$lang['Enabled'] = "P�";
$lang['Disabled'] = "Av";
$lang['Error'] = "Feil";

$lang['Next'] = "Neste";
$lang['Previous'] = "Forrige";
$lang['Goto_page'] = "G� til side";
$lang['Joined'] = "Ble Medlem";
$lang['IP_Address'] = "IP Adresse";

$lang['Select_forum'] = "Velg Forum";
$lang['View_latest_post'] = "Vis Siste Innlegg";
$lang['View_newest_post'] = "Vis Nyeste Innlegg";
$lang['Page_of'] = "Side <b>%d</b> av <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ Nummer";
$lang['AIM'] = "AIM Adresse";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "%s Forum Hovedsiden";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Start Nytt Tema";
$lang['Reply_to_topic'] = "Svar p� Tema";
$lang['Reply_with_quote'] = "Svar med Sitat";

$lang['Click_return_topic'] = "Klikk %sHer%s for � g� tilbake til temaet"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Klikk %sHer%s for � pr�ve igjen";
$lang['Click_return_forum'] = "Klikk %sHer%s for � g� tilbake til forumet";
$lang['Click_view_message'] = "Klikk %sHer%s for � se ditt innlegg";
$lang['Click_return_modcp'] = "Klikk %sHer%s for � g� tilbake til moderator kontrollpanelet";
$lang['Click_return_group'] = "Klikk %sHer%s for � g� tilbake til gruppeinformasjonen";

$lang['Admin_panel'] = "Administrasjonspanel";

$lang['Board_disable'] = "Beklager, forumet er midlertidig nede, pr�v igjen senere";


//
// Global Header strings
//
$lang['Registered_users'] = "Registrerte Brukere :";
$lang['Browsing_forum'] = "Brukere i forumet :";
$lang['Online_users_zero_total'] = "Det er <b>ingen</b> brukere i forumet :: ";
$lang['Online_users_total'] = "Det er <b>%d</b> brukere i forumet :: ";
$lang['Online_user_total'] = "Det er <b>%d</b> bruker i forumet :: ";
$lang['Reg_users_zero_total'] = "ingen Registrerte, ";
$lang['Reg_users_total'] = "%d Registrerte, ";
$lang['Reg_user_total'] = "%d Registrert, ";
$lang['Hidden_users_zero_total'] = "ingen Skjulte og ";
$lang['Hidden_users_total'] = "%d Skjulte og  ";
$lang['Hidden_user_total'] = "%d Skjult og ";
$lang['Guest_users_zero_total'] = "ingen Gjester";
$lang['Guest_users_total'] = "%d Gjester";
$lang['Guest_user_total'] = "%d Gjest";
$lang['Record_online_users'] = "H�yest antall samtidige brukere p� forumet var <b>%s</b> den  %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministrator%s";
$lang['Mod_online_color'] = "%sModerator%s";

$lang['You_last_visit'] = "Du var her sist: %s"; // %s replaced by date/time
$lang['Current_time'] = "Klokken er: %s"; // %s replaced by time

$lang['Search_new'] = "Vis nye innlegg";
$lang['Search_your_posts'] = "Vis dine egne innlegg";
$lang['Search_unanswered'] = "Vis ubesvarte innlegg";

$lang['Register'] = "Bli Medlem";
$lang['Profile'] = "Profil";
$lang['Edit_profile'] = "Endre din Profil";
$lang['Search'] = "S�k";
$lang['Memberlist'] = "Medlemsliste";
$lang['FAQ'] = "Hjelp";
$lang['BBCode_guide'] = "BBCode Veiledning";
$lang['Usergroups'] = "Grupper";
$lang['Last_Post'] = "Siste Innlegg";
$lang['Moderator'] = "Moderator";
$lang['Moderators'] = "Moderatorer";


//
// Stats block text
//
$lang['Posted_article_total'] = "V�re brukere har skrevet <b>%d</b> innlegg"; // Number of posts
$lang['Posted_articles_total'] = "V�re brukere har skrevet <b>%d</b> innlegg"; // Number of posts
$lang['Registered_user_total'] = "Vi har <b>%d</b> registrert bruker"; // # registered users
$lang['Registered_users_total'] = "Vi har <b>%d</b> registrerte brukere"; // # registered users
$lang['Newest_user'] = "Den siste registrerte brukeren er <b>%s%s%s</b>"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "Det er ingen nye innlegg siden ditt siste bes�k";
$lang['No_new_posts'] = "Ingen nye Innlegg";
$lang['New_posts'] = "Nye Innlegg";
$lang['New_post'] = "Nytt Innlegg";
$lang['No_new_posts_hot'] = "Ingen nye Innlegg [ Popul�re ]";
$lang['New_posts_hot'] = "Nye Innlegg [ Popul�re ]";
$lang['No_new_posts_locked'] = "Ingen nye Innlegg [ Stengte ]";
$lang['New_posts_locked'] = "Nye Innlegg [ Stengte ]";
$lang['Forum_is_locked'] = "Forumet er Stengt";


//
// Login
//
$lang['Enter_password'] = "Skriv brukernavn og passord for � logge deg p�.";
$lang['Login'] = "Logg Inn";
$lang['Logout'] = "Logg Ut";

$lang['Forgotten_password'] = "Jeg har glemt passordet";

$lang['Log_me_in'] = "Logg meg p� automatisk hver gang";

$lang['Error_login'] = "Du har skrevet et feil eller ikke-eksisterende brukernavn, eller feil passord.";


//
// Index page
//
$lang['Index'] = "Hovedsiden";
$lang['No_Posts'] = "Ingen Innlegg";
$lang['No_forums'] = "Det er ingen Aktive Forum";

$lang['Private_Message'] = "Privat Melding";
$lang['Private_Messages'] = "Private Meldinger";
$lang['Who_is_Online'] = "Hvem er i Forumene?";

$lang['Mark_all_forums'] = "Marker alle forumene som lest";
$lang['Forums_marked_read'] = "Alle forumene er markert som lest";


//
// Viewforum
//
$lang['View_forum'] = "Vis Forum";

$lang['Forum_not_exist'] = "Forumet du har valgt finnes ikke";
$lang['Reached_on_error'] = "Du har kommet til denne siden ved en feil";

$lang['Display_topics'] = "Vis Temaer fra";
$lang['All_Topics'] = "Alle Temaer";

$lang['Topic_Announcement'] = "<b>Annonsering :</b>";
$lang['Topic_Sticky'] = "<b>Prioritert :</b>";
$lang['Topic_Moved'] = "<b>Flyttet :</b>";
$lang['Topic_Poll'] = "<b>[ Avstemning ]</b>";

$lang['Mark_all_topics'] = "Marker alle temaer som lest";
$lang['Topics_marked_read'] = "Temaene i dette forumet er markert som lest";

$lang['Rules_post_can'] = "Du <b>kan</b> starte nye temaer i dette forumet";
$lang['Rules_post_cannot'] = "Du <b>kan ikke</b> starte nye temaer i dette forumet";
$lang['Rules_reply_can'] = "Du <b>kan</b> svare p� temaer i dette forumet";
$lang['Rules_reply_cannot'] = "Du <b>kan ikke</b> svare p� temaer i dette forumet";
$lang['Rules_edit_can'] = "Du <b>kan</b> endre dine egne innlegg i dette forumet";
$lang['Rules_edit_cannot'] = "Du <b>kan ikke</b> endre dine egne innlegg i dette forumet";
$lang['Rules_delete_can'] = "Du <b>kan</b> slette dine egne innlegg i dette forumet";
$lang['Rules_delete_cannot'] = "Du <b>kan ikke</b> slette dine egne innlegg i dette forumet";
$lang['Rules_vote_can'] = "Du <b>kan</b> delta i avstemninger i dette forumet";
$lang['Rules_vote_cannot'] = "Du <b>kan ikke</b> delta i avstemninger i dette forumet";
$lang['Rules_moderate'] = "Du <b>kan</b> %smoderere dette forumet%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "Det er ingen innlegg i dette forumet<br />Klikk p� <b>Nytt Tema</b> linken p� denne siden for � legge til det f�rste temaet";


//
// Viewtopic
//
$lang['View_topic'] = "Vis Temaet";

$lang['Guest'] = 'Gjest';
$lang['Post_subject'] = "Tittel";
$lang['View_next_topic'] = "Vis Neste Tema";
$lang['View_previous_topic'] = "Vis Forrige Tema";
$lang['Submit_vote'] = "Avgi Stemme";
$lang['View_results'] = "Vis Reslutater";

$lang['No_newer_topics'] = "Det er ingen nyere temaer i dette forumet";
$lang['No_older_topics'] = "Det er ingen eldre temaer i dette forumet";
$lang['Topic_post_not_exist'] = "Temat eller innlegget finnes ikke";
$lang['No_posts_topic'] = "Det finnes ingen innlegg i dette temaet";

$lang['Display_posts'] = "Vis Innlegg fra";
$lang['All_Posts'] = "Alle Innlegg";
$lang['Newest_First'] = "Nyeste F�rst";
$lang['Oldest_First'] = "Eldste F�rst";

$lang['Back_to_top'] = "Til Toppen";

$lang['Read_profile'] = "Vis Medlemmets Profil";
$lang['Send_email'] = "Send e-post til Medlemmet";
$lang['Visit_website'] = "Bes�k Medlemmets Nettside";
$lang['ICQ_status'] = "ICQ Status";
$lang['Edit_delete_post'] = "Endre/Slett dette Innlegget";
$lang['View_IP'] = "Vis Medlemmets IP";
$lang['Delete_post'] = "Slett dette Innlegget";

$lang['wrote'] = "skrev"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Sitat"; // comes before bbcode quote output.
$lang['Code'] = "Kode"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Sist endret av %s den %s, endret %d gang"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Sist endret av %s den %s, endret %d ganger"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Steng dette Temaet";
$lang['Unlock_topic'] = "�pne dette Temaet";
$lang['Move_topic'] = "Flytt dette Temaet";
$lang['Delete_topic'] = "Slett dette Temaet";
$lang['Split_topic'] = "Del dette Temaet";

$lang['Stop_watching_topic'] = "Avslutt Abonnementet p� dette temaet";
$lang['Start_watching_topic'] = "Abonner p� dette temaet";
$lang['No_longer_watching'] = "Abonnementet p� dette temaet er avluttet";
$lang['You_are_watching'] = "Abonnementet p� dette temaet er opprettet";

$lang['Total_votes'] = "Antall stemmer";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Innhold";
$lang['Topic_review'] = "Tema";

$lang['No_post_mode'] = "Handlings modus er ikke spesifisert"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Start et nytt Tema";
$lang['Post_a_reply'] = "Skriv et Svar";
$lang['Post_topic_as'] = "Skriv Temaet som";
$lang['Edit_Post'] = "Endre Innlegget";
$lang['Options'] = "Valg";

$lang['Post_Announcement'] = "Annonsering";
$lang['Post_Sticky'] = "Prioritert";
$lang['Post_Normal'] = "Normal";

$lang['Confirm_delete'] = "Er du sikker p� at du �nsker � slette dette innlegget?";
$lang['Confirm_delete_poll'] = "Er du sikker p� at du �nsker � slette denne avstemningen?";

$lang['Flood_Error'] = "Du kan ikke legge til temaer s� raskt etter hverandre, pr�v igjen om en liten stund";
$lang['Empty_subject'] = "Du m� angi en tittel n�r du starter et nytt tema";
$lang['Empty_message'] = "Du m� legge til innhold i innholdsfeltet";
$lang['Forum_locked'] = "Dette forumet er stengt, du kan ikke starte nye, svare p� eller endre temaer";
$lang['Topic_locked'] = "Dette temaet er stengt, du kan ikke endre innlegget eller starte nye svar";
$lang['No_post_id'] = "Du m� angi hvilket innlegg du �nsker � endre.";
$lang['No_topic_id'] = "Du m� angi hvilket tema du skal svare p�.";
$lang['No_valid_mode'] = "Du har kun lov til � starte nye temaer, svare, endre eller sitere innlegg, g� tilbake og fors�k p� nytt";
$lang['No_such_post'] = "Innlegget finnes ikke, g� tilbake og fors�k p� nytt";
$lang['Edit_own_posts'] = "Du kan bare endre dine egne innlegg";
$lang['Delete_own_posts'] = "Du kan bare slette dine egne innlegg";
$lang['Cannot_delete_replied'] = "Du kan ikke slette innlegg som allerede er besvart";
$lang['Cannot_delete_poll'] = "Du kan ikke slette en aktiv avstemning";
$lang['Empty_poll_title'] = "Du m� angi en tittel p� avstemningen";
$lang['To_few_poll_options'] = "Du m� angi minst 2 alternativer p� avstemningen";
$lang['To_many_poll_options'] = "Du har angitt for mange alternativer p� avstemningen";
$lang['Post_has_no_poll'] = "Dette innlegget har ingen avstemning";

$lang['Add_poll'] = "Legg til en Avstemning";
$lang['Add_poll_explain'] = "La disse feltene v�re blanke dersom du ikke skal legge til en avstemning.";
$lang['Poll_question'] = "Avstemningens sp�rsm�l";
$lang['Poll_option'] = "Avstemningens alternativ";
$lang['Add_option'] = "Legg til alternativ";
$lang['Update'] = "Oppdater";
$lang['Delete'] = "Slett";
$lang['Poll_for'] = "Antall aktive dager";
$lang['Poll_for_explain'] = "[ Skriv 0 eller la feltet v�re tomt for � angi en avstemning uten sluttdato ]";
$lang['Delete_poll'] = "Slett Avstemning";

$lang['Disable_HTML_post'] = "Deaktiver HTML i dette innlegget";
$lang['Disable_BBCode_post'] = "Deaktiver BBCode i dette innlegget";
$lang['Disable_Smilies_post'] = "Deaktiver Smil i dette innlegget";

$lang['HTML_is_ON'] = "HTML er <u>P�</u>";
$lang['HTML_is_OFF'] = "HTML er <u>Av</u>";
$lang['BBCode_is_ON'] = "%sBBCode%s er <u>P�</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBCode%s is <u>Av</u>";
$lang['Smilies_are_ON'] = "Smil er <u>P�</u>";
$lang['Smilies_are_OFF'] = "Smil er <u>Av</u>";

$lang['Attach_signature'] = "Bruk signatur (endre signaturen i profilen)";
$lang['Notify'] = "Varsle svar p� dette Temaet";
$lang['Delete_post'] = "Slett dette Innlegget";

$lang['Stored'] = "Innlegget er lagt til";
$lang['Deleted'] = "Innlegget er slettet";
$lang['Poll_delete'] = "Avstemningen er slettet";
$lang['Vote_cast'] = "Din stemme er registert";

$lang['Topic_reply_notification'] = "Varsel om svar p� Tema";

$lang['bbcode_b_help'] = "Fet tekst: [b]tekst[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Kursiv tekst: [i]tekst[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Understrek tekst: [u]tekst[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Siter tekst: [quote]tekst[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Vis kode: [code]kode[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Liste: [list]tekst[/list] (alt+l)";
$lang['bbcode_o_help'] = "Sortert liste: [list=]tekst[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Legg til bilde: [img]http://bilde_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Legg til URL: [url]http://url[/url] eller [url=http://url]URL tekst[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Lukk alle �pne BBCode tagger";
$lang['bbcode_s_help'] = "Fontfarge: [color=red]tekst[/color]	Tips: du kan ogs� benytte color=#FF0000";
$lang['bbcode_f_help'] = "Fontst�rrelse: [size=x-small]liten tekst[/size]";

$lang['Emoticons'] = "Smil";
$lang['More_emoticons'] = "Vis flere Smil";

$lang['Font_color'] = "Fontfarge";
$lang['color_default'] = "Standard";
$lang['color_dark_red'] = "M�rk R�d";
$lang['color_red'] = "R�d";
$lang['color_orange'] = "Oransje";
$lang['color_brown'] = "Brun";
$lang['color_yellow'] = "Gul";
$lang['color_green'] = "Gr�nn";
$lang['color_olive'] = "Oliven";
$lang['color_cyan'] = "Cyan";
$lang['color_blue'] = "Bl�";
$lang['color_dark_blue'] = "M�rk Bl�";
$lang['color_indigo'] = "Indigo";
$lang['color_violet'] = "Fiolet";
$lang['color_white'] = "Hvit";
$lang['color_black'] = "Sort";

$lang['Font_size'] = "Fontst�rrelse";
$lang['font_tiny'] = "Ekstra liten";
$lang['font_small'] = "Liten";
$lang['font_normal'] = "Vanlig";
$lang['font_large'] = "Stor";
$lang['font_huge'] = "Ekstra stor";

$lang['Close_Tags'] = "Lukk Tagger";
$lang['Styles_tip'] = "Tips: Du kan formatere merket tekst";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Private Meldinger";

$lang['Login_check_pm'] = "Sjekk private meldinger";
$lang['New_pms'] = "Du har %d nye meldinger"; // You have 2 new messages
$lang['New_pm'] = "Du har %d ny melding"; // You have 1 new message
$lang['No_new_pm'] = "Du har ingen nye meldinger";
$lang['Unread_pms'] = "Du har %d uleste meldinger";
$lang['Unread_pm'] = "Du har %d ulest melding";
$lang['No_unread_pm'] = "Du har ingen uleste meldinger";
$lang['You_new_pm'] = "Du har 1 ny melding i Innboksen";
$lang['You_new_pms'] = "Du har nye meldinger i Innboksen";
$lang['You_no_new_pm'] = "Du har ingen nye meldinger";

$lang['Inbox'] = "Innboks";
$lang['Outbox'] = "Utboks";
$lang['Savebox'] = "Lagrede Meldinger";
$lang['Sentbox'] = "Sendte Meldinger";
$lang['Flag'] = "Flag";
$lang['Subject'] = "Tema";
$lang['From'] = "Fra";
$lang['To'] = "Til";
$lang['Date'] = "Dato";
$lang['Mark'] = "Merk";
$lang['Sent'] = "Sendt";
$lang['Saved'] = "Lagret";
$lang['Delete_marked'] = "Slett Merkede";
$lang['Delete_all'] = "Slett Alle";
$lang['Save_marked'] = "Lagre Merkede";
$lang['Save_message'] = "Lagre Melding";
$lang['Delete_message'] = "Slett Melding";

$lang['Display_messages'] = "Vis Meldinger fra"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "Alle Meldinger";

$lang['No_messages_folder'] = "Du har ingen Meldinger i denne katalogen";

$lang['PM_disabled'] = "Private meldinger er deaktivert p� dette forumet";
$lang['Cannot_send_privmsg'] = "Beklager, du har ikke n�dvendige rettigheteter til � sende private meldinger.";
$lang['No_to_user'] = "Du m� spesifisere brukernavnet meldingen skal sendes til.";
$lang['No_such_user'] = "Brukernavnet finnes ikke";

$lang['Disable_HTML_pm'] = "Deaktiver HTML i denne meldingen";
$lang['Disable_BBCode_pm'] = "Deaktiver BBCode i denne meldingen";
$lang['Disable_Smilies_pm'] = "Deaktiver Smil i denne meldingen";

$lang['Message_sent'] = "Meldingen er sendt";

$lang['Click_return_inbox'] = "Klikk %sher%s for � g� tilbake til innboksen";
$lang['Click_return_index'] = "Klikk %sher%s for � g� tilbake til Forumenes hovedside";

$lang['Send_a_new_message'] = "Send en Privat Melding";
$lang['Send_a_reply'] = "Svar p� Privat Melding";
$lang['Edit_message'] = "Endre Privat Melding";

$lang['Notification_subject'] = "Du har mottatt en Privat Melding";

$lang['Find_username'] = "Finn Brukernavn";
$lang['Find'] = "Finn";
$lang['No_match'] = "Ingen treff";

$lang['No_post_id'] = "Ingen meldings-id er spesifisert";
$lang['No_such_folder'] = "Katalogen finnes ikke";
$lang['No_folder'] = "Ingen katalog er spesifisert";

$lang['Mark_all'] = "Merk alle";
$lang['Unmark_all'] = "Fjern merking p� alle";

$lang['Confirm_delete_pm'] = "Er du sikker p� at du �nsker � slette denne meldingen?";
$lang['Confirm_delete_pms'] = "Er du sikker p� at du �nsker � slette disse meldingene?";

$lang['Inbox_size'] = "Innboksen bruker %d%% av tilgjengelig kapasitet"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Sendte meldinger bruker %d%% av tilgjengelig kapasitet";
$lang['Savebox_size'] = "Lagrede meldinger bruker %d%% av tilgjengelig kapasitet";

$lang['Click_view_privmsg'] = "Klikk %sher%s for � g� til Innboksen";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Profil :: %s"; // %s is username
$lang['About_user'] = "Informasjon om %s"; // %s is username

$lang['Preferences'] = "Innstillinger";
$lang['Items_required'] = "Felter merket med * er obligatoriske om ikke annet er angitt.";
$lang['Registration_info'] = "Medlemsinformasjon";
$lang['Profile_info'] = "Profil informasjon";
$lang['Profile_info_warn'] = "Denne informasjon er offentlig tilgjengelig";
$lang['Avatar_panel'] = "Avatar kontrollpanel";
$lang['Avatar_gallery'] = "Avatar galleri";

$lang['Website'] = "Nettside";
$lang['Location'] = "Bosted";
$lang['Contact'] = "Kontakt";
$lang['Email_address'] = "e-postadresse";
$lang['Email'] = "e-post";
$lang['Send_private_message'] = "Send Privat Melding";
$lang['Hidden_email'] = "[ Hidden ]";
$lang['Search_user_posts'] = "S�k etter denne brukerens innlegg";
$lang['Interests'] = "Interesser";
$lang['Occupation'] = "Yrke";
$lang['Poster_rank'] = "Rangering";

$lang['Total_posts'] = "Antall Innlegg";
$lang['User_post_pct_stats'] = "%.2f%% av alle innlegg"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f av innlegg pr. dag"; // 1.5 posts per day
$lang['Search_user_posts'] = "Finn alle %s Innlegg"; // Find all posts by username

$lang['No_user_id_specified'] = "Dette brukernavnet finnes ikke";
$lang['Wrong_Profile'] = "Du kan ikke endre andre medlemmers profil.";
$lang['Only_one_avatar'] = "Du kan bare ha en Avatar";
$lang['File_no_data'] = "Filen p� URL-en du oppgav innheloder ikke data";
$lang['No_connection_URL'] = "Det er ikke mulig � n� URL-en du oppgav";
$lang['Incomplete_URL'] = "URL-en du oppgav er ikke komplett";
$lang['Wrong_remote_avatar_format'] = "URL-en til Avatar-en er ikke gyldig";
$lang['No_send_account_inactive'] = "Passord kan ikke sendes fordi brukerkontoen din er deaktivert, kontakt adminsitrator for mer informasjon.";

$lang['Always_smile'] = "Smil alltid tillatt";
$lang['Always_html'] = "HTML alltid tillatt";
$lang['Always_bbcode'] = "BBCode alltid tillatt";
$lang['Always_add_sig'] = "Bruk alltid signatur";
$lang['Always_notify'] = "Varsle alle svar";
$lang['Always_notify_explain'] = "Sender en e-post hver gang noen svarer i et tema du deltar i. Dette kan du endre for hvert enkelt innlegg.";

$lang['Board_style'] = "Forum Stil";
$lang['Board_lang'] = "Forum Spr�k";
$lang['No_themes'] = "Det er ingen tilgjengelige stiler";
$lang['Timezone'] = "Tidssone";
$lang['Date_format'] = "Datoformat";
$lang['Date_format_explain'] = "Formatet er det samme som benyttes i PHP <a href=\"http://www.php.net/date\" target=\"_other\">date()</a>";
$lang['Signature'] = "Signatur";
$lang['Signature_explain'] = "Signaturen kan legges til i slutten p� alle dine innlegg. Signaturer er bregrenset oppad til %d tegn";
$lang['Public_view_email'] = "Vis alltid e-postadressen";

$lang['Current_password'] = "Passord";
$lang['New_password'] = "Nytt Passord";
$lang['Confirm_password'] = "Bekreft nytt passord";
$lang['Confirm_password_explain'] = "Du m� bekrefte med ditt n�v�rende passord for � skifte passord eller e-postadresse.";
$lang['password_if_changed'] = "Du skal kun skrive inn et passord hvis du �nsker � endre det.";
$lang['password_confirm_if_changed'] = "Du skal kun bekrefte nytt passord hvis du �nsker � endre det.";

$lang['Avatar'] = "Avatar";
$lang['Avatar_explain'] = "Viser et ikon sammen med din brukerinformasjon i innleggene. Det er kun mulig � vise et ikon om gangen, som er maks %d piksler bredt og %d piksler h�yt, og hvor filst�rrelsen ikke overstiger %dkB.";
$lang['Upload_Avatar_file'] = "Last opp en Avatar fra din pc.";
$lang['Upload_Avatar_URL'] = "Hent Avatar fra en URL";
$lang['Upload_Avatar_URL_explain'] = "Skriv in URL-en til bilde du �nsker � benytte som avatar, bilde vil bli kopiert hit.";
$lang['Pick_local_Avatar'] = "Velg Avatar fra galleriet";
$lang['Link_remote_Avatar'] = "Link til en Avatar p� en annen nettside";
$lang['Link_remote_Avatar_explain'] = "Skriv in URL-en til bilde du �nsker � benytte som Avatar.";
$lang['Avatar_URL'] = "Avatar-ens URL";
$lang['Select_from_gallery'] = "Velg Avatar fra galleriet";
$lang['View_avatar_gallery'] = "Vis galleriet";

$lang['Select_avatar'] = "Velg Avatar";
$lang['Return_profile'] = "Avbryt Avatar";
$lang['Select_category'] = "Velg kategori";

$lang['Delete_Image'] = "Slett bilde";
$lang['Current_Image'] = "N�v�rende bilde";

$lang['Notify_on_privmsg'] = "Varsling ved ny(e) privat(e) melding(er)";
$lang['Popup_on_privmsg'] = "Pop-up varsling ved ny privat melding";
$lang['Popup_on_privmsg_explain'] = "Noen stiler kan �pne et nytt vindu for � varsle deg om nye private meldinger";
$lang['Hide_user'] = "Skjul at du er i forumene";

$lang['Profile_updated'] = "Profilen din er oppdatert";
$lang['Profile_updated_inactive'] = "Profilen din er oppdatert, men siden du har endret s� viktige elementer er medlemskapet ditt deaktivert. Det er sendt en e-post til deg med n�dvendig informasjon for � reaktivere medlemsskapet. Hvis administrator m� reaktivere medlemskapet vil det skje i n�rmeste fremtid.";

$lang['Password_mismatch'] = "Passordene du oppgav er ikke like";
$lang['Current_password_mismatch'] = "Passordet du oppgav stemmer ikke med det som er lagret i databasen";
$lang['Password_long'] = "Passordet kan ikke v�re lenger enn 32 tegn.";
$lang['Username_taken'] = "Brukernavnet du �nsker er allerede i bruk.";
$lang['Username_invalid'] = "Brukernavnet du �nsker inneholder ulovlige tegn som f.eks \"";
$lang['Username_disallowed'] = "Forumets administrator har satt brukernavnet du �nsker p� listen over ikke-tillate brukernavn.";
$lang['Email_taken'] = "E-postadressen er allerede i bruk av en annen bruker.";
$lang['Email_banned'] = "Forumets administrator har satt brukernavnet du �nsker p� listen over ikke-tillate e-postadresser.";
$lang['Email_invalid'] = "Denne e-postadressen er ikke gyldig.";
$lang['Signature_too_long'] = "Signaturen er for lang";
$lang['Fields_empty'] = "Du m� fylle ut alle obligatoriske felt";
$lang['Avatar_filetype'] = "Avatar-en m� v�re .jpg, .gif eller .png filer";
$lang['Avatar_filesize'] = "Avatar-en m� v�re mindre enn %d kB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Avatar-en m� v�re mindre enn %d piksler bred og %d piksler h�y";

$lang['Welcome_subject'] = "Velkommen til forumene p� %s"; // Welcome to my.com forums
$lang['New_account_subject'] = "Nytt medlemskap";
$lang['Account_activated_subject'] = "Medlemskapet er aktivert";

$lang['Account_added'] = "Takk for at du registerte deg som medlem, Medlemskapet dit er aktivert. Du kan logge deg p� med brukernavnet og passordet ditt.";
$lang['Account_inactive'] = "Medlemskapet dit er opprettet. Du m� bekrefte medlemskapet, aktiviseringsn�kkelen er sendt til e-postadressen du oppgav.";
$lang['Account_inactive_admin'] = "Medlemskapet dit er opprettet, og m� godkjennes av administrator. N�dvendig informasjon vil bli sendt til e-postadressen du oppgav n�r brukerkontoen din er aktivert.";
$lang['Account_active'] = "Brukerkontoen din er n� aktivert";
$lang['Account_active_admin'] = "Medlemskapet ditt er n� reaktivert";
$lang['Reactivate'] = "Reaktiver medlemsskapet ditt!";
$lang['COPPA'] = "Medlemskapet dit er opprettet, men m� godkjennes, du har motatt en e-post med n�dvendig informasjon.";

$lang['Registration'] = "Betingelser for Medlemskap";
$lang['Reg_agreement'] = "Administrator(ene) og moderator(ene) p� forumene fors�ker � fjerne eller redigere alle st�tende innlegg s� fort som mulig, men det er umulig � overv�ke alle temaer og innlegg. Du m� annerkjenne at alle innlegg i forumene representerer  den enkelte brukers syn og holdninger, og vil ikke stille administrator(ene), moderator(ene), webmaster(ene) og/eller webredakt�r(ene) til ansvar for innholdet i innleggene, med unntak av deres egene innlegg.<br /><br />Du annerkjenner at du ikke har anledning til � skrive st�tende, uanstendig, vulg�rt, injurerende, hatsk, truende, pornografiske eller andre typer innlegg som kan v�re eller er i strid med gjelende lovverk. Om du skriver denne type innlegg vil du bli �yeblikkelig og permanent utestengt fra forumene, og din isp (internettleverand�r) vil bli varslet. IP-adressen i alle innleggene registreres og vil bli benyttet til � opprettholde disse betingelsene. Du godkjenner at webmaster(ene), administrator(ene) og moderator(ene) p� disse formuene har rett til � fjerne, redigere, flytte eller stenge et hvert tema n�r de anser det n�dvendig. Som bruker godtar du at all informasjon du oppgir blir lagret i en database. Denne informasjonen vil ikke bli utlevert til tredjepart uten din godkjenning, men webmaster(ene), administrator(ene) og moderator(ene) kan ikke stilles ansvarlig for hacking ol. som kan medf�re tap av eller innsyn i databasen.<br /><br />Disse forumene bruker cookies (informasjonskapsler) til � lagre informasjon lokalt p� din datamaskin. Cookiene inneholder ikke informasjonen du oppgir, men brukes for � tilby en best mulig brukeropplevelse p� forumene. Din e-postadresse brukes bare i forbindelse med registeringsprosessen, og for � sende nytt passord dersom du �nsker/ber om det.<br /><br />Du godkjenner disse betingelsene ved � klikke p� registeringslinken under.";

$lang['Agree_under_13'] = "Jeg godtar disse betingelsene og er <b>under</b> 13 �r";
$lang['Agree_over_13'] = "Jeg godtar disse betingelsene og er <b>over</b> 13 �r.";
$lang['Agree_not'] = "Jeg godtar ikke disse betingelsene";

$lang['Wrong_activation'] = "Aktiveringsn�kkelen du oppgav stemmer ikke med aktiveringsn�kkelen i databasen.";
$lang['Send_password'] = "Send meg et nytt passord";
$lang['Password_updated'] = "Det nye passordet er generert, og du vil motta en e-post med n�dvendig informasjon for � ta det i bruk";
$lang['No_email_match'] = "e-postadressen du oppgav stemmer ikke med e-postadressen for dette brukernavnet.";
$lang['New_password_activation'] = "Aktiver nytt passord";
$lang['Password_activated'] = "Brukerkontoen din er reaktivert, logg p� med passordet i e-posten du mottok";

$lang['Send_email_msg'] = "Send en e-post";
$lang['No_user_specified'] = "Du har ikke spesifisert et brukernavn";
$lang['User_prevent_email'] = "Dette medlemmet �nsker ikke � motta e-post, pr�v � send en privat melding.";
$lang['User_not_exist'] = "Brukernavnet eksisterer ikke";
$lang['CC_email'] = "Send kopi av denne e-posten til deg selv";
$lang['Email_message_desc'] = "e-posten blir sendt som ren tekst, du kan ikke benytte HTML eller BBCode. Din e-postadreses blir satt som returadresse.";
$lang['Flood_email_limit'] = "Det er ikke mulig � sende e-post n�, pr�ve igjen senere.";
$lang['Recipient'] = "Mottaker";
$lang['Email_sent'] = "e-posten er sendt";
$lang['Send_email'] = "Send e-post";
$lang['Empty_subject_email'] = "Du m� spesifisere et tema for e-posten";
$lang['Empty_message_email'] = "Du m� skrive en melding i e-posten";


//
// Memberslist
//
$lang['Select_sort_method'] = "Sorter etter";
$lang['Sort'] = "Sorter";
$lang['Sort_Top_Ten'] = "10 mest aktive medlemmer";
$lang['Sort_Joined'] = "Ble Medlem";
$lang['Sort_Username'] = "Brukernavn";
$lang['Sort_Location'] = "Bosted";
$lang['Sort_Posts'] = "Antall Innlegg";
$lang['Sort_Email'] = "e-post";
$lang['Sort_Website'] = "Nettside";
$lang['Sort_Ascending'] = "Stigende";
$lang['Sort_Descending'] = "Synkende";
$lang['Order'] = "Sorter";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Gruppekontrollpanel";
$lang['Group_member_details'] = "Gruppemedlemskap";
$lang['Group_member_join'] = "Bli Medlem i en Gruppe";

$lang['Group_Information'] = "Gruppeinformasjon";
$lang['Group_name'] = "Gruppenavn";
$lang['Group_description'] = "Gruppebeskrivelse";
$lang['Group_membership'] = "Gruppemedlemskap";
$lang['Group_Members'] = "Gruppemedlemmer";
$lang['Group_Moderator'] = "Gruppemoderator";
$lang['Pending_members'] = "Medlemskandidater";

$lang['Group_type'] = "Gruppetype";
$lang['Group_open'] = "�pen Gruppe";
$lang['Group_closed'] = "Lukket Gruppe";
$lang['Group_hidden'] = "Skjult Gruppe";

$lang['Current_memberships'] = "Du er medlem i";
$lang['Non_member_groups'] = "Du er ikke medlem i";
$lang['Memberships_pending'] = "Du har s�kt om medlemskap i";

$lang['No_groups_exist'] = "Det finnes ingen grupper";
$lang['Group_not_exist'] = "Denne gruppen finnes ikke";

$lang['Join_group'] = "Send S�knad";
$lang['No_group_members'] = "Det er ingen medlemmer i denne gruppen";
$lang['Group_hidden_members'] = "Denne gruppen er skjult, du har ikke rettigheter til � se medlemslisten.";
$lang['No_pending_group_members'] = "Denne gruppen har ingen ubehandlede s�knader om medlemsskap";
$lang["Group_joined"] = "S�knaden er levert.<br />Du blir varslet n�r s�knaden er behandlet av en gruppemodrator.";
$lang['Group_request'] = "En s�knad om deltagelse i din gruppe er levert";
$lang['Group_approved'] = "Din s�knad er innvilget";
$lang['Group_added'] = "Du er n� lagt til i denne grupppen";
$lang['Already_member_group'] = "Du er allerede medlem av denne gruppen";
$lang['User_is_member_group'] = "Medlemmet du oppgav er allerede medlem av denne gruppen";
$lang['Group_type_updated'] = "Gruppetypen er oppdatert";

$lang['Could_not_add_user'] = "Den valgte brukeren finnes ikke";

$lang['Confirm_unsub'] = "Er du sikker p� at du �nsker � avbryte medlemsskapet i denne gruppen?";
$lang['Confirm_unsub_pending'] = "Din s�knad om medlemskap i denne gruppen er ikke behandlet enda, er du sikker p� at �nsker � avbryte medlemskapet n�?";

$lang['Unsub_success'] = "Medlemskapet ditt i denne er avsluttet.";

$lang['Approve_selected'] = "Godkjend merkede";
$lang['Deny_selected'] = "Avvis merkede";
$lang['Not_logged_in'] = "Du m� v�re p�logget for � s�ke om medlemssakp i en gruppe.";
$lang['Remove_selected'] = "Fjern merkede";
$lang['Add_member'] = "Legg til Medlem";
$lang['Not_group_moderator'] = "Du er ikke gruppemoderator, og har ikke rettigheter til � utf�re denne handlingen.";

$lang['Login_to_join'] = "Du m� logge p� for � s�ke om medlemsskap eller administrere grupper";
$lang['This_open_group'] = "Dette er en �pen gruppe, klikk for � s�ke om medlemsskap";
$lang['This_closed_group'] = "Dette er en lukket gruppe, det er ikke lenger mulig � s�ke om medlemsskap";
$lang['This_hidden_group'] = "Dette er en skjult gruppe, og automatisk oppretting av medlemskap er ikke tillatt.";
$lang['Member_this_group'] = "Du er medlem av denne gruppen";
$lang['Pending_this_group'] = "Din s�knad om medlemskap er ikke behandlet.";
$lang['Are_group_moderator'] = "Du er gruppemoderator";
$lang['None'] = "Ingen";

$lang['Subscribe'] = "S�k om Medlemskap";
$lang['Unsubscribe'] = "Avbryt Medlemsskap";
$lang['View_Information'] = "Vis Gruppeinformasjon";


//
// Search
//
$lang['Search_query'] = "S�kekriterier";
$lang['Search_options'] = "S�keinstillinger";

$lang['Search_keywords'] = "S�k etter stikkord";
$lang['Search_keywords_explain'] = "Du kan benytte <u>AND</u> for � spesificere ord som skal gi treff, <u>OR</u> for � spesifisere ord som kan gi treff og <u>NOT</u> for � spesifisere ord som ikke skal gi treff. Bruk * som wildcard for � s�ke etter deler av ord.";
$lang['Search_author'] = "S�k etter Medlem";
$lang['Search_author_explain'] = "Bruk * som wildcard for � s�ke etter deler av ord";

$lang['Search_for_any'] = "S�k etter enkelt ord eller hele s�kestrengen som angitt";
$lang['Search_for_all'] = "S�k etter alle ordene";

$lang['Return_first'] = "Vis de"; // followed by xxx characters in a select box
$lang['characters_posts'] = "f�rste tegnene i innlegget(ene)";

$lang['Search_title_msg'] = "S�ket skal gj�res innleggenes i tittel og tekst";
$lang['Search_msg_only'] = "S�ket skal bare gj�res i innleggenes tekst";

$lang['Search_previous'] = "Tidsbegrens s�ket"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Sorter etter";
$lang['Sort_Time'] = "Dato";
$lang['Sort_Post_Subject'] = "Innleggets tittel";
$lang['Sort_Topic_Title'] = "Temaets tittel";
$lang['Sort_Author'] = "Av";
$lang['Sort_Forum'] = "Forum";

$lang['Display_results'] = "Vis treff som";
$lang['All_available'] = "Alle tilgjengelige";
$lang['No_searchable_forums'] = "Du har ikke rettigheter til � s�ke i forumene";

$lang['No_search_match'] = "S�ket gav ikke treff";
$lang['Found_search_match'] = "S�ket gav %d treff"; // eg. Search found 1 match
$lang['Found_search_matches'] = "S�ket gav %d treff"; // eg. Search found 24 matches

$lang['Close_window'] = "Lukk vindu";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Det er bare %s som kan skrive annonseringer i dette forumet";
$lang['Sorry_auth_sticky'] = "Det er bare %s som kan skrive prioriterte temaer i dette forumet";
$lang['Sorry_auth_read'] = "Det er bare %s som kan lese temaer i dette forumet";
$lang['Sorry_auth_post'] = "Det er bare %s som kan starte nye temaer i dette forumet";
$lang['Sorry_auth_reply'] = "Det er bare %s som kan svare p� innlegg";
$lang['Sorry_auth_edit'] = "Det er bare %s som kan endre innlegg i dette forumet";
$lang['Sorry_auth_delete'] = "Det er bare %s som kan slette innlegg i dette forumet";
$lang['Sorry_auth_vote'] = "Det er bare %s bare";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>Gjester</b>";
$lang['Auth_Registered_Users'] = "<b>Medlemmer</b>";
$lang['Auth_Users_granted_access'] = "<b>Medlemmer med spesielle rettigheter</b>";
$lang['Auth_Moderators'] = "<b>Moderatorer</b>";
$lang['Auth_Administrators'] = "<b>Administratorer</b>";

$lang['Not_Moderator'] = "Du er ikke Moderator for dette forumet";
$lang['Not_Authorised'] = "Ikke autorisert";

$lang['You_been_banned'] = "Du er utestengt fra dette forumet<br />Kontakt Webmaster eller forum Administrator for hvis du �nsker mer informasjon.";


//
// Viewonline
//
$lang['Reg_user_online'] = "Det er %d medlem og "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Det er %d medlemmer og "; // There ae 5 Registered and
$lang['Hidden_user_online'] = "%d skjult medlem i forumet"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d skjulte medlemmer i forumet"; // 6 Hidden users online
$lang['Guest_users_online'] = "Det er %d gjester i forumet"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Det er %d gjest i forumet"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Det er ingen medlemmer eller gjester i forumet";

$lang['Online_explain'] = "Denne informasjonen er basert p� aktiviteten de siste 5 minuttene.";

$lang['Forum_Location'] = "Lokalisering";
$lang['Last_updated'] = "Sist oppdatert";

$lang['Forum_index'] = "Forum oversikten";
$lang['Logging_on'] = "Logger p�";
$lang['Posting_message'] = "Skriver et Innlegg";
$lang['Searching_forums'] = "S�ker";
$lang['Viewing_profile'] = "Ser p� Profil";
$lang['Viewing_online'] = "Ser p� Hvem er i Forumene?";
$lang['Viewing_member_list'] = "Ser p� medlemslista";
$lang['Viewing_priv_msgs'] = "Leser Private Meldinger";
$lang['Viewing_FAQ'] = "Leser Hjelp";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moderatorkontrollpanel";
$lang['Mod_CP_explain'] = "Du kan moderere dette forumet. Du kan stenge, �pne, flytte og slette flere temaer samtidig.";

$lang['Select'] = "Velg";
$lang['Delete'] = "Slett";
$lang['Move'] = "Flytt";
$lang['Lock'] = "Steng";
$lang['Unlock'] = "�pne";

$lang['Topics_Removed'] = "De markerte temaene er slettet fra databasen.";
$lang['Topics_Locked'] = "De markerte temaene er stengt";
$lang['Topics_Moved'] = "De markerte temaene er flyttet";
$lang['Topics_Unlocked'] = "De markerte temaene er �pnet";
$lang['No_Topics_Moved'] = "Ingen temaer er flyttet";

$lang['Confirm_delete_topic'] = "Er du sikker p� at du �nsker � slette alle merkede temaer?";
$lang['Confirm_lock_topic'] = "Er du sikker p� at du �nsker � stenge alle merkede temaer?";
$lang['Confirm_unlock_topic'] = "Er du sikker p� at du �nsker � �pne alle merkede temaer?";
$lang['Confirm_move_topic'] = "Er du sikker p� at du �nsker � flytte alle merkede temaer?";

$lang['Move_to_forum'] = "Flytt til forum";
$lang['Leave_shadow_topic'] = "Behold en speilet kopi i det opprinnelig forumet.";

$lang['Split_Topic'] = "Del tema kontrollpanel";
$lang['Split_Topic_explain'] = "Du kan dele et tema ved � markere innlegg manuelt eller ved � angi et innlegg temaet skal deles ved.";
$lang['Split_title'] = "Det nye Temaets tittel";
$lang['Split_forum'] = "Flytt Tema til";
$lang['Split_posts'] = "Skill ut markerte Innlegg";
$lang['Split_after'] = "Del ved markert Innlegg";
$lang['Topic_split'] = "Temaet er delt";

$lang['Too_many_error'] = "Du har markert flere innlegg, du kan bare angi 1 innlegg � dele temaet ved!";

$lang['None_selected'] = "Du har ikke markert innlegg som skal skilles ut, g� tilbake og marker minst 1.";
$lang['New_forum'] = "Nytt Forum";

$lang['This_posts_IP'] = "IP for dette innlegget";
$lang['Other_IP_this_user'] = "Andre IP-er dette medlemmet har skrevet fra";
$lang['Users_this_IP'] = "Medlemmer som benytter denne IP-en";
$lang['IP_info'] = "IP Informasjon";
$lang['Lookup_IP'] = "S�k frem IP";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "Alle klokkeslett er %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 timer";
$lang['-11'] = "GMT - 11 timer";
$lang['-10'] = "HST (Hawaii)";
$lang['-9'] = "GMT - 9 timer";
$lang['-8'] = "PST (USA/Kanada)";
$lang['-7'] = "MST (USA/Kanada)";
$lang['-6'] = "CST (USA/Kanada)";
$lang['-5'] = "EST (USA/Kanada)";
$lang['-4'] = "GMT - 4 timer";
$lang['-3.5'] = "GMT - 3.5 timer";
$lang['-3'] = "GMT - 3 timer";
$lang['-2'] = "Mid-Atlantic";
$lang['-1'] = "GMT - 1 time";
$lang['0'] = "GMT";
$lang['1'] = "CET (Europa)";
$lang['2'] = "EET (Europa)";
$lang['3'] = "GMT + 3 timer";
$lang['3.5'] = "GMT + 3.5 timer";
$lang['4'] = "GMT + 4 timer";
$lang['4.5'] = "GMT + 4.5 timer";
$lang['5'] = "GMT + 5 timer";
$lang['5.5'] = "GMT + 5.5 timer";
$lang['6'] = "GMT + 6 timer";
$lang['7'] = "GMT + 7 timer";
$lang['8'] = "WST (Australia)";
$lang['9'] = "GMT + 9 timer";
$lang['9.5'] = "CST (Australia)";
$lang['10'] = "EST (Australia)";
$lang['11'] = "GMT + 11 timer";
$lang['12'] = "GMT + 12 timer";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 timer) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 timer) Midway Island, Samoa";
$lang['tz']['-10'] = "(GMT -10:00 timer) Hawaii";
$lang['tz']['-9'] = "(GMT -9:00 timer) Alaska";
$lang['tz']['-8'] = "(GMT -8:00 timer) Pacific Time (US &amp; Canada), Tijuana";
$lang['tz']['-7'] = "(GMT -7:00 timer) Mountain Time (US &amp; Canada), Arizona";
$lang['tz']['-6'] = "(GMT -6:00 timer) Central Time (US &amp; Canada), Mexico City";
$lang['tz']['-5'] = "(GMT -5:00 timer) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$lang['tz']['-4'] = "(GMT -4:00 timer) Atlantic Time (Canada), Caracas, La Paz";
$lang['tz']['-3.5'] = "(GMT -3:30 timer) Newfoundland";
$lang['tz']['-3'] = "(GMT -3:00 timer) Brassila, Buenos Aires, Georgetown, Falkland Is";
$lang['tz']['-2'] = "(GMT -2:00 timer) Mid-Atlantic, Ascension Is., St. Helena";
$lang['tz']['-1'] = "(GMT -1:00 time) Azores, Cape Verde Islands";
$lang['tz']['0'] = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$lang['tz']['1'] = "(GMT +1:00 time) Oslo, Amsterdam, Berlin, Brussels, Madrid, Paris, Rome";
$lang['tz']['2'] = "(GMT +2:00 timer) Cairo, Helsinki, Kaliningrad, South Africa";
$lang['tz']['3'] = "(GMT +3:00 timer) Baghdad, Riyadh, Moscow, Nairobi";
$lang['tz']['3.5'] = "(GMT +3:30 timer) Tehran";
$lang['tz']['4'] = "(GMT +4:00 timer) Abu Dhabi, Baku, Muscat, Tbilisi";
$lang['tz']['4.5'] = "(GMT +4:30 timer) Kabul";
$lang['tz']['5'] = "(GMT +5:00 timer) Ekaterinburg, Islamabad, Karachi, Tashkent";
$lang['tz']['5.5'] = "(GMT +5:30 timer) Bombay, Calcutta, Madras, New Delhi";
$lang['tz']['6'] = "(GMT +6:00 timer) Almaty, Colombo, Dhaka, Novosibirsk";
$lang['tz']['6.5'] = "(GMT +6:30 timer) Rangoon";
$lang['tz']['7'] = "(GMT +7:00 timer) Bangkok, Hanoi, Jakarta";
$lang['tz']['8'] = "(GMT +8:00 timer) Beijing, Hong Kong, Perth, Singapore, Taipei";
$lang['tz']['9'] = "(GMT +9:00 timer) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$lang['tz']['9.5'] = "(GMT +9:30 timer) Adelaide, Darwin";
$lang['tz']['10'] = "(GMT +10:00 timer) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$lang['tz']['11'] = "(GMT +11:00 timer) Magadan, New Caledonia, Solomon Islands";
$lang['tz']['12'] = "(GMT +12:00 timer) Auckland, Wellington, Fiji, Marshall Island";

$lang['datetime']['Sunday'] = "S�ndag";
$lang['datetime']['Monday'] = "Mandag";
$lang['datetime']['Tuesday'] = "Torsdag";
$lang['datetime']['Wednesday'] = "Onsdag";
$lang['datetime']['Thursday'] = "Torsdag";
$lang['datetime']['Friday'] = "Fredag";
$lang['datetime']['Saturday'] = "L�rdag";
$lang['datetime']['Sun'] = "S�n";
$lang['datetime']['Mon'] = "Man";
$lang['datetime']['Tue'] = "Tir";
$lang['datetime']['Wed'] = "Ons";
$lang['datetime']['Thu'] = "Tor";
$lang['datetime']['Fri'] = "Fre";
$lang['datetime']['Sat'] = "L�r";
$lang['datetime']['January'] = "Januar";
$lang['datetime']['February'] = "Februar";
$lang['datetime']['March'] = "Mars";
$lang['datetime']['April'] = "April";
$lang['datetime']['May'] = "Mai";
$lang['datetime']['June'] = "Juni";
$lang['datetime']['July'] = "Juli";
$lang['datetime']['August'] = "August";
$lang['datetime']['September'] = "September";
$lang['datetime']['October'] = "Oktober";
$lang['datetime']['November'] = "November";
$lang['datetime']['December'] = "Desember";
$lang['datetime']['Jan'] = "Jan";
$lang['datetime']['Feb'] = "Feb";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Apr";
$lang['datetime']['May'] = "Mai";
$lang['datetime']['Jun'] = "Jun";
$lang['datetime']['Jul'] = "Jul";
$lang['datetime']['Aug'] = "Aug";
$lang['datetime']['Sep'] = "Sep";
$lang['datetime']['Oct'] = "Okt";
$lang['datetime']['Nov'] = "Nov";
$lang['datetime']['Dec'] = "Des";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informasjon";
$lang['Critical_Information'] = "Kritisk informasjon";

$lang['General_Error'] = "Generell feil";
$lang['Critical_Error'] = "Kritisk feil";
$lang['An_error_occured'] = "Det oppstod en feil";
$lang['A_critical_error'] = "Det oppstod en kritisk feil";

//
// That's all Folks!
// -------------------------------------------------

?>
