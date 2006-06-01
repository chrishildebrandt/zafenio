<?php

/***************************************************************************
 *                            lang_main.php [Dutch]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.2 2003/04/20 09:26:34 bob Exp $
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
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
// $lang['DATE_FORMAT'] = 'j-n-Y'; // This should be changed to the default date format for your language, php date() format
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
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Categorie';
$lang['Topic'] = 'Onderwerp';
$lang['Topics'] = 'Onderwerpen';
$lang['Replies'] = 'Antwoorden';
$lang['Views'] = 'Bekeken';
$lang['Post'] = 'Bericht';
$lang['Posts'] = 'Berichten';
$lang['Posted'] = 'Geplaatst';
$lang['Username'] = 'Gebruikersnaam';
$lang['Password'] = 'Wachtwoord';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Gebruiker';
$lang['Author'] = 'Auteur';
$lang['Time'] = 'Tijd';
$lang['Hours'] = 'Uren';
$lang['Message'] = 'Bericht';

$lang['1_Day'] = '1 Dag';
$lang['7_Days'] = '7 Dagen';
$lang['2_Weeks'] = '2 Weken';
$lang['1_Month'] = '1 Maand';
$lang['3_Months'] = '3 Maanden';
$lang['6_Months'] = '6 Maanden';
$lang['1_Year'] = '1 Jaar';

$lang['Go'] = ' OK ';
$lang['Jump_to'] = 'Ga naar';
$lang['Submit'] = 'OK';
$lang['Reset'] = 'Herstel';
$lang['Cancel'] = 'Afbreken';
$lang['Preview'] = 'Voorbeeld';
$lang['Confirm'] = 'Bevestig';
$lang['Spellcheck'] = 'Spellings controle';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nee';
$lang['Enabled'] = 'Inschakelen';
$lang['Disabled'] = 'Uitschakelen';
$lang['Error'] = 'Fout';

$lang['Next'] = 'Volgende';
$lang['Previous'] = 'Vorige';
$lang['Goto_page'] = 'Ga naar Pagina';
$lang['Joined'] = 'Geregistreerd op';
$lang['IP_Address'] = 'IP Adres';

$lang['Select_forum'] = 'Kies Forum';
$lang['View_latest_post'] = 'Bekijk laatste bericht';
$lang['View_newest_post'] = 'Bekijk nieuwste bericht';
$lang['Page_of'] = 'Pagina <b>%d</b> van <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Nummer';
$lang['AIM'] = 'AIM Naam';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Forum Index';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Plaats nieuw bericht';
$lang['Reply_to_topic'] = 'Plaats Reactie';
$lang['Reply_with_quote'] = 'Reageer met quote';

$lang['Click_return_topic'] = 'Klik %shier%s om terug te keren naar het onderwerp'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klik %shier%s om het nogmaals te proberen';
$lang['Click_return_forum'] = 'Klik %shier%s om terug te keren naar de onderwerpenlijst';
$lang['Click_view_message'] = 'klik %shier%s om je bericht te bekijken';
$lang['Click_return_modcp'] = 'klik %shier%s om terug te keren naar het Moderator Control Panel';
$lang['Click_return_group'] = 'Klik %shier%s om terug te keren naar het groepen overzicht';

$lang['Admin_panel'] = 'Ga naar Administratiepaneel';

$lang['Board_disable'] = 'Sorry dit Board is tijdelijk buiten gebruik, probeer het later nog eens.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Geregistreerde gebruikers:';
$lang['Browsing_forum'] = 'Gebruikers op dit forum:';
$lang['Online_users_zero_total'] = 'Er zijn in totaal <b>0</b> gebruikers online :: ';
$lang['Online_users_total'] = 'Er zijn in totaal <b>%d</b> gebruikers online :: ';
$lang['Online_user_total'] = 'Er is in totaal <b>%d</b> gebruiker online :: ';
$lang['Reg_users_zero_total'] = '0 Geregistreed, ';
$lang['Reg_users_total'] = '%d Geregisteerd, ';
$lang['Reg_user_total'] = '%d Geregisteerd, ';
$lang['Hidden_users_zero_total'] = '0 Verborgen en ';
$lang['Hidden_user_total'] = '%d Verborgen en ';
$lang['Hidden_users_total'] = '%d Verborgen en ';
$lang['Guest_users_zero_total'] = '0 Gasten';
$lang['Guest_users_total'] = '%d Gasten';
$lang['Guest_user_total'] = '%d Gast';
$lang['Record_online_users'] = 'Grootst aantal gebruikers online was <b>%s</b> op %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sBeheerder%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Je laatste bezoek was op %s'; // %s replaced by date/time
$lang['Current_time'] = 'Het is nu %s'; // %s replaced by time

$lang['Search_new'] = 'Berichten sinds laatste bezoek';
$lang['Search_your_posts'] = 'Bekijk je berichten';
$lang['Search_unanswered'] = 'Bekijk onbeantwoorde berichten';

$lang['Register'] = 'Registreer';
$lang['Profile'] = 'Profiel';
$lang['Edit_profile'] = 'Bewerk je profiel';
$lang['Search'] = 'Zoeken';
$lang['Memberlist'] = 'Gebruikerslijst';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode overzicht';
$lang['Usergroups'] = 'Gebruikersgroepen';
$lang['Last_Post'] = 'Laatste Bericht';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderators';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'De gebruikers hebben in totaal <b>0</b> berichten geplaatst'; // Number of posts
$lang['Posted_articles_total'] = 'De gebruikers hebben in totaal <b>%d</b> berichten geplaatst'; // Number of posts
$lang['Posted_article_total'] = 'De gebruikers hebben in totaal <b>%d</b> bericht geplaatst'; // Number of posts
$lang['Registered_users_zero_total'] = 'We hebben <b>0</b> geregistreerde gebruikers'; // # registered users
$lang['Registered_users_total'] = 'We hebben <b>%d</b> geregistreerde gebruikers'; // # registered users
$lang['Registered_user_total'] = 'We hebben <b>%d</b> geregistreerde gebruiker'; // # registered users
$lang['Newest_user'] = 'De nieuwste gebruiker is <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Geen nieuwe berichten sinds je laatste bezoek.';
$lang['No_new_posts'] = 'Geen nieuwe berichten';
$lang['New_posts'] = 'Nieuwe berichten';
$lang['New_post'] = 'Nieuw bericht';
$lang['No_new_posts_hot'] = 'Geen nieuwe berichten [ Populair ]';
$lang['New_posts_hot'] = 'Nieuwe berichten [ Populair ]';
$lang['No_new_posts_locked'] = 'Geen nieuwe berichten [ Gesloten ]';
$lang['New_posts_locked'] = 'Nieuwe berichten [ Gesloten ]';
$lang['Forum_is_locked'] = 'Forum is gesloten';


//
// Login
//
$lang['Enter_password'] = 'Vul je gebruikersnaam en wachtwoord in om in te loggen';
$lang['Login'] = 'Inloggen';
$lang['Logout'] = 'Uitloggen';

$lang['Forgotten_password'] = 'Wachtwoord vergeten';

$lang['Log_me_in'] = 'Log me automatisch in bij elk bezoek';

$lang['Error_login'] = 'Je hebt een foutieve of inactieve gebruikersnaam of een foutief wachtwoord opgegeven.';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Geen berichten';
$lang['No_forums'] = 'Dit forum heeft geen Berichten';

$lang['Private_Message'] = 'Priv� bericht';
$lang['Private_Messages'] = 'Priv� berichten';
$lang['Who_is_Online'] = 'Wie zijn er Online?';

$lang['Mark_all_forums'] = 'Markeer alle forums als gelezen';
$lang['Forums_marked_read'] = 'Alle forums zijn als gelezen gemarkeerd';


//
// Viewforum
//
$lang['View_forum'] = 'Bekijk onderwerp';

$lang['Forum_not_exist'] = 'Het onderwerp dat je gekozen hebt bestaat niet';
$lang['Reached_on_error'] = 'Er is een fout opgetreden';

$lang['Display_topics'] = 'Onderwerpen van afgelopen';
$lang['All_Topics'] = 'Alle onderwerpen';

$lang['Topic_Announcement'] = '<b>Mededeling:</b>';
$lang['Topic_Sticky'] = '<b>Sticky:</b>';
$lang['Topic_Moved'] = '<b>Verplaatst:</b>';
$lang['Topic_Poll'] = '<b>[ Poll ]</b>';

$lang['Mark_all_topics'] = 'Markeer alle onderwerpen als gelezen';
$lang['Topics_marked_read'] = 'Alle onderwerpen in dit forum zijn als gelezen gemarkeerd';

$lang['Rules_post_can'] = 'Je <b>mag</b> nieuwe onderwerpen plaatsen';
$lang['Rules_post_cannot'] = 'Je <b>mag geen</b> nieuwe onderwerpen plaatsen';
$lang['Rules_reply_can'] = 'Je <b>mag</b> reacties plaatsen';
$lang['Rules_reply_cannot'] = 'Je <b>mag geen</b> reacties plaatsen';
$lang['Rules_edit_can'] = 'Je <b>mag</b> je berichten bewerken';
$lang['Rules_edit_cannot'] = 'Je <b>mag</b> je berichten <b>niet</b> bewerken';
$lang['Rules_delete_can'] = 'Je <b>mag</b> je berichten verwijderen';
$lang['Rules_delete_cannot'] = 'Je <b>mag</b> je berichten <b>niet</b> verwijderen';
$lang['Rules_vote_can'] = 'Je <b>mag</b> stemmen in polls';
$lang['Rules_vote_cannot'] = 'Ja <b>mag niet</b> stemmen in polls';
$lang['Rules_moderate'] = 'Je <b>kunt</b> dit onderdeel %smoderaten%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Er zijn geen berichten in dit Forum.<br />Klik op de <b>Plaats Nieuw Bericht</b> link op deze pagina om een bericht te plaatsen.';


//
// Viewtopic
//
$lang['View_topic'] = 'Bekijk onderwerp';

$lang['Guest'] = 'Gast';
$lang['Post_subject'] = 'Onderwerp';
$lang['View_next_topic'] = 'Volgende onderwerp ';
$lang['View_previous_topic'] = 'Vorige onderwerp';
$lang['Submit_vote'] = 'Breng stem uit';
$lang['View_results'] = 'Bekijk resultaten';

$lang['No_newer_topics'] = 'Er zijn geen nieuwere berichten in dit forum';
$lang['No_older_topics'] = 'Er zijn geen oudere berichten in dit forum';
$lang['Topic_post_not_exist'] = 'Het onderwerp of bericht dat je zoekt bestaat niet';
$lang['No_posts_topic'] = 'Er staan geen reacties in dit onderwerp';

$lang['Display_posts'] = 'Berichten van afgelopen';
$lang['All_Posts'] = 'Alle berichten';
$lang['Newest_First'] = 'Nieuwste eerst';
$lang['Oldest_First'] = 'Oudste eerst';

$lang['Back_to_top'] = 'Naar boven';

$lang['Read_profile'] = 'Bekijk gebruikers profiel';
$lang['Send_email'] = 'Verstuur mail';
$lang['Visit_website'] = 'Bekijk de homepage';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Bewerk/Verwijder dit bericht';
$lang['View_IP'] = 'Bekijk het IP van deze gebruiker';
$lang['Delete_post'] = 'Verwijder dit bericht';

$lang['wrote'] = 'schreef'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Quote'; // comes before bbcode quote output.
$lang['Code'] = 'Code'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Laatst aangepast door %s op %s, in totaal %d keer bewerkt'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Laatst aangepast door %s op %s, in toaal %d keer bewerkt'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Sluit dit onderwerp';
$lang['Unlock_topic'] = 'Open dit onderwerp';
$lang['Move_topic'] = 'Verplaats dit onderwerp';
$lang['Delete_topic'] = 'Verwijder dit onderwerp';
$lang['Split_topic'] = 'Splits dit onderwerp';

$lang['Stop_watching_topic'] = 'Geen abonnement meer op dit onderwerp';
$lang['Start_watching_topic'] = 'Abonneer op dit onderwerp';
$lang['No_longer_watching'] = 'Je bent niet meer geabonneerd op dit onderwerp';
$lang['You_are_watching'] = 'Je bent geabonneerd op dit onderwerp';

$lang['Total_votes'] = 'Totaal aantal stemmen';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Bericht';
$lang['Topic_review'] = 'Onderwerp';

$lang['No_post_mode'] = 'Er is geen actie aangegeven'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Nieuw onderwerp';
$lang['Post_a_reply'] = 'Plaats reactie';
$lang['Post_topic_as'] = 'Soort bericht';
$lang['Edit_Post'] = 'Bewerk bericht';
$lang['Options'] = 'Opties';

$lang['Post_Announcement'] = 'Mededeling';
$lang['Post_Sticky'] = 'Sticky';
$lang['Post_Normal'] = 'Normaal';

$lang['Confirm_delete'] = 'Weet je zeker dat je dit bericht wil verwijderen?';
$lang['Confirm_delete_poll'] = 'Weet je zeker dat je deze Poll wil verwijderen?';

$lang['Flood_Error'] = 'Je kan niet zo snel na je laatst geplaatste bericht een nieuwe plaatsen, probeer het later nog eens.';
$lang['Empty_subject'] = 'Je moet een titel opgeven als je een nieuw onderwerp opent.';
$lang['Empty_message'] = 'Je moet een bericht typen bij het plaatsen van een reactie.';
$lang['Forum_locked'] = 'Dit forum is gesloten. Het plaatsen of bewerken van berichten of onderwerpen is niet mogelijk';
$lang['Topic_locked'] = 'Dit onderwerp is gesloten. Het plaatsen of bewerken van berichten is niet mogelijk';
$lang['No_post_id'] = 'Er is geen PostID opgegeven';
$lang['No_topic_id'] = 'Je moet aangeven op werk onderwerp je wil reageren.';
$lang['No_valid_mode'] = 'Ongeldige actie.';
$lang['No_such_post'] = 'Dat bericht bestaat niet (meer)';
$lang['Edit_own_posts'] = 'Sorry maar je mag alleen je eigen berichten aanpassen';
$lang['Delete_own_posts'] = 'Sorry maar je mag alleen je eigen berichten verwijderen';
$lang['Cannot_delete_replied'] = 'Sorry maar je mag geen berichten verwijderen waar op geantwoord is.';
$lang['Cannot_delete_poll'] = 'Sorry maar je kan geen actieve poll verwijderen.';
$lang['Empty_poll_title'] = 'Je moet een titel voor je Poll invullen.';
$lang['To_few_poll_options'] = 'Je moet minimaal 2 keuzemogelijkheden opgeven';
$lang['To_many_poll_options'] = 'Je hebt te veel keuzemogelijkheden opgegeven.';
$lang['Post_has_no_poll'] = 'Dit onderwerp heeft geen Poll';
$lang['Already_voted'] = 'Je hebt al in deze Poll gestemd';
$lang['No_vote_option'] = 'Je moet een optie selecteren bij het stemmen';

$lang['Add_poll'] = 'Voeg een Poll toe';
$lang['Add_poll_explain'] = 'Wil je geen Poll? Laat deze velden dan leeg.';
$lang['Poll_question'] = 'Poll vraag';
$lang['Poll_option'] = 'Poll keuzes';
$lang['Add_option'] = 'Voeg keuze toe';
$lang['Update'] = 'Bijwerken';
$lang['Delete'] = 'Verwijder';
$lang['Poll_for'] = 'Poll blijft geldig voor';
$lang['Days'] = 'Dagen'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Leeg laten of 0 invullen voor geen einde ]';
$lang['Delete_poll'] = 'Verwijder Poll';

$lang['Disable_HTML_post'] = 'Schakel HTML uit in dit bericht';
$lang['Disable_BBCode_post'] = 'Schakel BBCode uit in dit bericht';
$lang['Disable_Smilies_post'] = 'Schakel Smilies uit in dit bericht';

$lang['HTML_is_ON'] = 'HTML is <u>AAN</u>';
$lang['HTML_is_OFF'] = 'HTML is <u>UIT</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s is <u>AAN</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s is <u>UIT</u>';
$lang['Smilies_are_ON'] = 'Smilies staan <u>AAN</u>';
$lang['Smilies_are_OFF'] = 'Smilies staan <u>UIT</u>';

$lang['Attach_signature'] = 'Onderschrift gebruiken (onderschrift kan aangepast worden in je profiel)';
$lang['Notify'] = 'Waarschuwen als er gereageerd is';
$lang['Delete_post'] = 'Verwijder dit bericht';

$lang['Stored'] = 'Je bericht is geplaatst';
$lang['Deleted'] = 'Je bericht is verwijderd';
$lang['Poll_delete'] = 'Je poll is verwijderd';
$lang['Vote_cast'] = 'Je stem is opgenomen';

$lang['Topic_reply_notification'] = 'Melding van het plaatsen van een reactie';

$lang['bbcode_b_help'] = 'Vette tekst: [b]tekst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Italic tekst: [i]tekst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Underline text: [u]tekst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Quote text: [quote]tekst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Code display: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lijst: [list]tekst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Geordende lijst: [list=]tekst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Afbeelding: [img]http://www.phpbb.nl/fotos/foto.jpg[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Link: [url]http://www.phpbb.nl/[/url] or [url=http://www.phpbb.nl/]Dit is een link[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Alle open BBcode tags sluiten';
$lang['bbcode_s_help'] = 'Letter kleur: [color=red]tekst[/color]  Tip: Je kan ook dit gebruiken: =#FF0000';
$lang['bbcode_f_help'] = 'Letter grootte: [size=small]Kleine tekst[/size]';

$lang['Emoticons'] = 'Emoticons';
$lang['More_emoticons'] = 'Meer Emoticons';

$lang['Font_color'] = 'Letter kleur';
$lang['color_default'] = 'Standaard';
$lang['color_dark_red'] = 'Donkerrood';
$lang['color_red'] = 'Rood';
$lang['color_orange'] = 'Oranje';
$lang['color_brown'] = 'Bruin';
$lang['color_yellow'] = 'Geel';
$lang['color_green'] = 'Groen';
$lang['color_olive'] = 'Olijf';
$lang['color_cyan'] = 'Cyaan';
$lang['color_blue'] = 'Blauw';
$lang['color_dark_blue'] = 'Donkerblauw';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violet';
$lang['color_white'] = 'Wit';
$lang['color_black'] = 'Zwart';

$lang['Font_size'] = 'Letter grootte';
$lang['font_tiny'] = 'Heel klein';
$lang['font_small'] = 'Klein';
$lang['font_normal'] = 'Normaal';
$lang['font_large'] = 'Groot';
$lang['font_huge'] = 'Erg groot';

$lang['Close_Tags'] = 'Sluit tags';
$lang['Styles_tip'] = 'Tip: BBcode kan je toepassen op geselecteerde tekst';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Prive Berichten';

$lang['Login_check_pm'] = 'Log in om je priv� berichten te bekijken';
$lang['New_pms'] = 'Je hebt %d nieuwe berichten'; // You have 2 new messages
$lang['New_pm'] = 'Je hebt %d nieuw bericht'; // You have 1 new message
$lang['No_new_pm'] = 'Je hebt geen nieuwe berichten';
$lang['Unread_pms'] = 'Je hebt %d ongelezen berichten';
$lang['Unread_pm'] = 'Je hebt %d ongelezen bericht';
$lang['No_unread_pm'] = 'Je hebt geen ongelezen berichten';
$lang['You_new_pm'] = 'Er is een nieuwe priv� bericht voor je in je Inbox';
$lang['You_new_pms'] = 'Er zijn nieuwe priv� berichten voor je in je Inbox';
$lang['You_no_new_pm'] = 'Er zijn geen nieuwe priv� berichten voor je';

$lang['Unread_message'] = 'Ongelezen bericht';
$lang['Read_message'] = 'Gelezen bericht';

$lang['Read_pm'] = 'Lees bericht';
$lang['Post_new_pm'] = 'Plaats bericht';
$lang['Post_reply_pm'] = 'Beantwoord bericht';
$lang['Post_quote_pm'] = 'Quote bericht';
$lang['Edit_pm'] = 'Bewerk bericht';

$lang['Inbox'] = 'Inbox';
$lang['Outbox'] = 'Outbox';
$lang['Savebox'] = 'Savebox';
$lang['Sentbox'] = 'Sentbox';
$lang['Flag'] = 'Markeer';
$lang['Subject'] = 'Onderwerp';
$lang['From'] = 'Van';
$lang['To'] = 'Aan';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Markeer';
$lang['Sent'] = 'Verzonden';
$lang['Saved'] = 'Bewaard';
$lang['Delete_marked'] = 'Verwijder geselecteerde berichten';
$lang['Delete_all'] = 'Verwijder alle berichten';
$lang['Save_marked'] = 'Bewaar geselecteerde berichten';
$lang['Save_message'] = 'Bewaar bericht';
$lang['Delete_message'] = 'Verwijder bericht';

$lang['Display_messages'] = 'Bekijk berichten van de afgelopen'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Alle berichten';

$lang['No_messages_folder'] = 'Je hebt geen berichten in deze map';

$lang['PM_disabled'] = 'Priv� berichten zijn niet ingeschakeld op dit forum';
$lang['Cannot_send_privmsg'] = 'De beheerder heeft ervoor gezorgd dat je geen priv� berichten meer kan versturen';
$lang['No_to_user'] = 'Je moet een gebruikersnaam opgeven om een bericht te versturen';
$lang['No_such_user'] = 'Sorry, deze gebruiker bestaat niet';

$lang['Disable_HTML_pm'] = 'Geen HTML in dit bericht';
$lang['Disable_BBCode_pm'] = 'Geen BBCode in dit bericht';
$lang['Disable_Smilies_pm'] = 'Geen Smilies in dit bericht';

$lang['Message_sent'] = 'Je bericht is verzonden';

$lang['Click_return_inbox'] = 'Klik %shier%s om terug te keren naar je Inbox';
$lang['Click_return_index'] = 'Klik %shier%s om terug te keren naar de Hoofdpagina';

$lang['Send_a_new_message'] = 'Stuur een priv� bericht';
$lang['Send_a_reply'] = 'Beantwoord een priv� bericht';
$lang['Edit_message'] = 'Bewerk een priv� bericht';

$lang['Notification_subject'] = 'Er is een nieuw bericht';

$lang['Find_username'] = 'Zoek een gebruiker';
$lang['Find'] = 'Zoek';
$lang['No_match'] = 'Geen resultaat gevonden';

$lang['No_post_id'] = 'Er is geen PostID opgegeven';
$lang['No_such_folder'] = 'Deze map bestaat niet';
$lang['No_folder'] = 'Geen map aangegeven';

$lang['Mark_all'] = 'Selecteer alles';
$lang['Unmark_all'] = 'Selecteer niets';

$lang['Confirm_delete_pm'] = 'Weet je zeker dat je dit bericht wil verwijderen?';
$lang['Confirm_delete_pms'] = 'Weet je zeker dat je deze berichten wil verwijderen?';

$lang['Inbox_size'] = 'Je Inbox is voor %d%% gevuld'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Je Sentbox is voor %d%% gevuld';
$lang['Savebox_size'] = 'Je Savebox is voor %d%% gevuld';

$lang['Click_view_privmsg'] = 'Klik %sHier%s om naar je Inbox te gaan';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profiel van :: %s'; // %s is username
$lang['About_user'] = 'Alles over %s'; // %s is username

$lang['Preferences'] = 'Voorkeuren';
$lang['Items_required'] = 'Onderdelen met een * zijn verplicht';
$lang['Registration_info'] = 'Registratie informatie';
$lang['Profile_info'] = 'Profiel Informatie';
$lang['Profile_info_warn'] = 'Deze informatie is zichtbaar voor de andere gebruikers';
$lang['Avatar_panel'] = 'Avatar paneel';
$lang['Avatar_gallery'] = 'Avatar gallery';

$lang['Website'] = 'Website';
$lang['Location'] = 'Woonplaats';
$lang['Contact'] = 'Contact';
$lang['Email_address'] = 'Email adres';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Stuur priv� bericht';
$lang['Hidden_email'] = '[ Verborgen ]';
$lang['Search_user_posts'] = 'Zoek naar alle berichten van %s';
$lang['Interests'] = 'Interesses';
$lang['Occupation'] = 'Beroep';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = 'Totaal berichten';
$lang['User_post_pct_stats'] = '%.2f%% van het totaal'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f berichten per dag'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Zoek naar alle berichten van %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Sorry maar deze gebruiker bestaat niet';
$lang['Wrong_Profile'] = 'Je kan alleen je eigen profiel bewerken';

$lang['Only_one_avatar'] = 'Je kan maar ��n soort Avatar gebruiken';
$lang['File_no_data'] = 'Het bestand dat je opgaf lijkt leeg te zijn.';
$lang['No_connection_URL'] = 'Er kan geen verbinding gemaakt worden met de server die je hebt opgegeven';
$lang['Incomplete_URL'] = 'De URL die je hebt opgegeven is niet compleet';
$lang['Wrong_remote_avatar_format'] = 'De URL die je hebt opgegeven is niet geldig';
$lang['No_send_account_inactive'] = 'Sorry maar je wachtwoord kan niet opgehaald worden omdat je account uitgeschakeld is. Neem contact op met de forum beheerder voor meer informatie';

$lang['Always_smile'] = 'Gebruik altijd Smilies';
$lang['Always_html'] = 'Gebruik altijd HTML';
$lang['Always_bbcode'] = 'Gebruik altijd BBCode';
$lang['Always_add_sig'] = 'Gebruik altijd een onderschrift';
$lang['Always_notify'] = 'Breng mij standaard op de hoogte van reacties';
$lang['Always_notify_explain'] = 'Stuurt een email als iemand reageert op een onderwerp waar je in gepost hebt. Dit kan altijd veranderd worden als je een bericht plaatst.';

$lang['Board_style'] = 'Forum stijl';
$lang['Board_lang'] = 'Forum taal';
$lang['No_themes'] = 'Geen Themes in database';
$lang['Timezone'] = 'Tijdszone';
$lang['Date_format'] = 'Datum weergave';
$lang['Date_format_explain'] = 'De syntax die gebruikt word is gelijk aan de syntax van de PHP functie <a href=\"http://www.php.net/manual/nl/function.date.php\" target=\"_other\">date()</a>';
$lang['Signature'] = 'Onderschrift';
$lang['Signature_explain'] = 'Dit is een stukje tekst dat onder je berichten wordt gezet. Er is een limiet van %d tekens.';
$lang['Public_view_email'] = 'Iedereen mag mijn Email adres zien';

$lang['Current_password'] = 'Huidige wachtwoord';
$lang['New_password'] = 'Nieuwe wachtwoord';
$lang['Confirm_password'] = 'Bevestig wachtwoord';
$lang['Confirm_password_explain'] = 'Je moet je huidige wachtwoord bevestigen indien je het wil wijzigen of je email adres aanpassen';
$lang['password_if_changed'] = 'Geef alleen een wachtwoord op als je het wilt wijzigen';
$lang['password_confirm_if_changed'] = 'Je hoeft alleen je wachtwoord te bevestigen als je het verandert.';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Laat een kleine afbeelding onder je naam zien in ieder bericht. Je kan maar ��n afbeelding tegelijkertijd gebruiken, de breedte mag niet meer dan %d pixels zijn, de hoogte moet onder de %d pixels blijven. De maximale bestandsgrootte is %dKB';
$lang['Upload_Avatar_file'] = 'Upload Avatar vanaf jouw PC';
$lang['Upload_Avatar_URL'] = 'Upload Avatar vanaf een Internet lokatie (URL)';
$lang['Upload_Avatar_URL_explain'] = 'Geef de URL waar je Avatar staat, de afbeelding wordt gekopieerd naar deze site.';
$lang['Pick_local_Avatar'] = 'Selecteer een Avatar uit de gallery';
$lang['Link_remote_Avatar'] = 'Gebruik Avatar op andere Site';
$lang['Link_remote_Avatar_explain'] = 'Geef de URL van de Avatar die op de andere site staat.';
$lang['Avatar_URL'] = 'URL van de Avatar';
$lang['Select_from_gallery'] = 'Selectecteer een Avatar uit de gallery';
$lang['View_avatar_gallery'] = 'Bekijk gallery';

$lang['Select_avatar'] = 'Selecteer avatar';
$lang['Return_profile'] = 'Afbreken';
$lang['Select_category'] = 'Selecteer categorie';

$lang['Delete_Image'] = 'Verwijder afbeelding';
$lang['Current_Image'] = 'Huidige afbeelding';

$lang['Notify_on_privmsg'] = 'Breng me op de hoogte als ik nieuwe Priv� berichten heb';
$lang['Popup_on_privmsg'] = 'Laat een Pop up zien als ik nieuwe Priv� berichten heb';
$lang['Popup_on_privmsg_explain'] = 'Sommige templates openen een nieuw schermpje (popup) als er nieuwe Priv� berichten zijn';
$lang['Hide_user'] = 'Onzichtbaar in \'Online gebruikers\' lijst';

$lang['Profile_updated'] = 'Je profiel is bijgewerkt';
$lang['Profile_updated_inactive'] = 'Je profiel is bijgewerkt, al heb je wel belangrijke informatie aangepast waardoor je account nu tijdelijk uitgeschakeld is. Controleer je Email om te kijken hoe je je account weer kun activeren of, als dit door de beheerder gedaan word, wacht dan tot de beheerder dit gedaan heeft.';

$lang['Password_mismatch'] = 'De wachtwoorden die je hebt opgegeven komen niet overeen.';
$lang['Current_password_mismatch'] = 'Het huidige wachtwoord wat je hebt opgegeven komt niet overeen met het opgeslagen wachtwoord in de database.';
$lang['Password_long'] = 'Uw wachtwoord mag maximaal uit 32 tekens bestaan';
$lang['Username_taken'] = 'Sorry, maar deze gebruikersnaam is reeds in gebruik';
$lang['Username_invalid'] = 'Sorry, maar deze gebruikersnaam bevat een ongeldig teken zoals \"';
$lang['Username_disallowed'] = 'Sorry, maar deze gebruikersnaam is niet toegelaten';
$lang['Email_taken'] = 'Sorry, maar dit email adres is al gebruikt door een gebruiker';
$lang['Email_banned'] = 'Sorry, maar dit email adres is gebanned';
$lang['Email_invalid'] = 'Sorry, maar dit email adres is ongeldig';
$lang['Signature_too_long'] = 'Je onderschrift is te lang';
$lang['Fields_empty'] = 'Je moet alle verplichte velden invullen';
$lang['Avatar_filetype'] = 'De Avatar moet een .jpg, .gif of .png zijn';
$lang['Avatar_filesize'] = 'De Avatar moet minder dan %dKB groot zijn'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'De Avatar moet minder dan %d pixels breed en %d pixels hoog zijn';

$lang['Welcome_subject'] = 'Welkom op %s '; // Welcome to my.com forums
$lang['New_account_subject'] = 'Nieuw gebruikers account';
$lang['Account_activated_subject'] = 'Account Geactiveerd';

$lang['Account_added'] = 'Dank je wel voor je registratie, je account is aangemaakt. Je kunt nu inloggen met je gebruikersnaam en wachtwoord';
$lang['Account_inactive'] = 'Je account is aangemaakt maar moet nog geactiveerd worden. Een activerings code is opgestuurd naar het Email adres dat je hebt opgegeven. Controleer je Email voor meer informatie';
$lang['Account_inactive_admin'] = 'Je account is aangemaakt maar moet nog geactiveerd worden. Dit moet gedaan worden door een beheerder. Er wordt contact met je opgenomen zodra dit is gebeurd';
$lang['Account_active'] = 'Je account is geactiveerd, bedankt voor je registratie';
$lang['Account_active_admin'] = 'Het account is geactiveerd';
$lang['Reactivate'] = 'Je moet je account opnieuw activeren!';
$lang['Already_activated'] = 'Je hebt je account a geactiveerd';
$lang['COPPA'] = 'Je account is aangemaakt maar moet goedkeuring krijgen, bekijk je Email voor meer details.';

$lang['Registration'] = 'Registratie Voorwaarden';
$lang['Reg_agreement'] = 'De beheerders en modertors van dit forum zullen proberen ongewenst materiaal zo snel mogelijk te verwijderen van de site. Het is echter onmogelijk om ieder bericht te controleren. Door in te stemmen met de voorwaarden erken je dat alle berichten op dit forum de meningen en gezichtspunten van de gebruikers zijn en niet van de beheerders, moderators of webmaster (behalve bij de berichten die door deze mensen geplaatst zijn). Het beheer kan niet aansprakelijk gesteld worden voor de inhoud van berichten van gebruikers.<br /><br />Je geeft verder aan dat je geen kwetsende, obsene, vulgaire, lasterlijke, haatdragende, bedreigende, sexueel-georienteerde berichten plaatst. Verder die je je te houden aan de van toepassing zijnde wetten en regels. Als je je niet houdt aan deze voorwaarden of aanwijzingen van het beheer niet volgt kan je meteen en permanent gebanned worden en zal eventueel je service provider op de hoogte worden gesteld van je gedrag. Het IP adres van je computer wordt bij ieder bericht opgeslagen om het beheer van de site te vereenvoudigen. Verder bewaard het systeem cookies op jouw computer. Deze cookies bevatten geen van de gebruikers informatie die in het profiel opgegeven wordt. Door deze voorwaarden te accepteren stem je er in toe dat bovenstaande gegevens bijgehouden worden. Deze informatie zal niet bekend worden gemaakt aan derden zonder jouw toestemming. Het beheer van de site is niet aansprakelijk voor hack poginen die het gevolg zijn van het eventueel bekend worden van deze informatie.<br /><br />Het beheer van de site heeft het recht alle berichten te verwijderen, bewerken, verplaatsen en hebben het recht onderwerpen en forums te sluiten op het moment dat zij dit passend vinden. Het email adres dat je opgeeft wordt alleen gebrukt voor het bevestigen van je account en wachtwoord en voor het verzenden van een nieuw wachtwoord als je je wachtwoord vergeet.<br >';

$lang['Agree_under_13'] = 'I stem toe met de voorwaarden en ben <b>jonger</b> dan 13 jaar';
$lang['Agree_over_13'] = 'I stem toe met de voorwaarden en ben <b>ouder</b> dan 13 jaar';
$lang['Agree_not'] = 'Ik ben het niet eens met de voorwaarden';

$lang['Wrong_activation'] = 'De activerings code is onjuist';
$lang['Send_password'] = 'Stuur me een nieuw wachtwoord';
$lang['Password_updated'] = 'Een nieuw wachtwoord is aangemaakt, bekijk je Email voor meer details over hoe je deze moet activeren';
$lang['No_email_match'] = 'Het Email adres komt niet overeen met het adres dat bij ons bekend is voor deze gebruiker';
$lang['New_password_activation'] = 'Nieuw wachtwoord activatie';
$lang['Password_activated'] = 'Je account is weer geactiveerd. Gebruik het nieuwe wachtwoord wat je ontvangen hebt om in te loggen';

$lang['Send_email_msg'] = 'Verstuurd een Email bericht';
$lang['No_user_specified'] = 'Geen gebruiker aangegeven';
$lang['User_prevent_email'] = 'Deze gebruiker wenst geen mail te ontvangen, probeer een priv� bericht te sturen';
$lang['User_not_exist'] = 'Deze gebruiker bestaat niet';
$lang['CC_email'] = 'Stuur jezelf een kopie van dit mailbericht';
$lang['Email_message_desc'] = 'Dit bericht word verstuurd als eenvoudige tekst, gebruik geen HTML of BBCode. Het antwoord adres wordt je eigen Emailadres.';
$lang['Flood_email_limit'] = 'Je kan nog geen nieuwe mail versturen, probeer het later nog eens';
$lang['Recipient'] = 'Geadresseerde';
$lang['Email_sent'] = 'De email is verstuurd';
$lang['Send_email'] = 'Verstuur mail';
$lang['Empty_subject_email'] = 'Je moet een onderwerp invullen';
$lang['Empty_message_email'] = 'Je moet een bericht typen hebben om te versturen';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Kies sorteer volgorde';
$lang['Sort'] = 'Sorteer';
$lang['Sort_Top_Ten'] = 'Top Tien Posters';
$lang['Sort_Joined'] = 'Aanmeld datum';
$lang['Sort_Username'] = 'Gebruikersnaam';
$lang['Sort_Location'] = 'Woonplaats';
$lang['Sort_Posts'] = 'Geplaatste berichten';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Website';
$lang['Sort_Ascending'] = 'Oplopend';
$lang['Sort_Descending'] = 'Aflopend';
$lang['Order'] = 'Volgorde';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Groepen Overzicht';
$lang['Group_member_details'] = 'Groepslid details';
$lang['Group_member_join'] = 'Wordt lid van een groep';

$lang['Group_Information'] = 'Groepsinformatie';
$lang['Group_name'] = 'Groepsnaam';
$lang['Group_description'] = 'Groepsomschrijving';
$lang['Group_membership'] = 'Groepslidmaatschap';
$lang['Group_Members'] = 'Groepsleden';
$lang['Group_Moderator'] = 'Groepsmoderator';
$lang['Pending_members'] = 'Nog niet toegelaten gebruikers';

$lang['Group_type'] = 'Groep type';
$lang['Group_open'] = 'Open groep';
$lang['Group_closed'] = 'Gesloten groep';
$lang['Group_hidden'] = 'Verborgen groep';

$lang['Current_memberships'] = 'Huidige leden';
$lang['Non_member_groups'] = 'Niet-leden groep';
$lang['Memberships_pending'] = 'Lidmaatschap in aanvraag';

$lang['No_groups_exist'] = 'Er zijn geen groepen';
$lang['Group_not_exist'] = 'Die groep bestaat niet';

$lang['Join_group'] = 'Word lid';
$lang['No_group_members'] = 'Deze groep heeft geen leden';
$lang['Group_hidden_members'] = 'Deze groep is verborgen, je kan de ledenlijst niet bekijken';
$lang['No_pending_group_members'] = 'Deze groep heeft geen wachtende leden';
$lang['Group_joined'] = 'Je hebt je succesvol aangemeld voor deze groep.<br />Je wordt op de hoogte gesteld als de groepsmoderator je aanmelding goedgekeurd heeft.';
$lang['Group_request'] = 'Verzoek om lid te worden van een groep';
$lang['Group_approved'] = 'Je aanmelding is goedgekeurd';
$lang['Group_added'] = 'Je bent toegevoegd aan deze groep';
$lang['Already_member_group'] = 'Je bent al lid van deze groep';
$lang['User_is_member_group'] = 'Gebruiker is al lid van deze groep';
$lang['Group_type_updated'] = 'Groepstype is veranderd';

$lang['Could_not_add_user'] = 'De gebruiker die je opgaf bestaat niet';
$lang['Could_not_anon_user'] = 'Anonieme gebruikers kunnen geen lid worden van een groep';

$lang['Confirm_unsub'] = 'Weet je zeker dat je je af wil melden van deze groep?';
$lang['Confirm_unsub_pending'] = 'Je aanmelding voor deze groep is nog niet goedgekeurd, weet je zeker dat je je toch af wil melden?';

$lang['Unsub_success'] = 'Je bent afgemeld van deze groep.';

$lang['Approve_selected'] = 'Geselecteerde gebruikers toelaten';
$lang['Deny_selected'] = 'Geselecteerde gebruikers afwijzen';
$lang['Not_logged_in'] = 'Je moet ingelogd zijn om lid te worden.';
$lang['Remove_selected'] = 'Geselecteerde gebruikers verwijderen';
$lang['Add_member'] = 'Lid toevoegen';
$lang['Not_group_moderator'] = 'Je bent niet de moderator van deze groep, daarom kan je deze actie niet uitvoeren.';

$lang['Login_to_join'] = 'Log in om lid te worden of de groep te beheren';
$lang['This_open_group'] = 'Dit is een open groep, klik om lid te worden';
$lang['This_closed_group'] = 'Dit is een gesloten groep, er worden geen nieuwe gebruikers geaccepteerd';
$lang['This_hidden_group'] = 'Dit is een verborgen groep, het automatisch toevoegen van gebruikers is uitgeschakeld';
$lang['Member_this_group'] = 'Je bent lid van deze groep';
$lang['Pending_this_group'] = 'Je lidmaatschap is nog niet goedgekeurd';
$lang['Are_group_moderator'] = 'Je bent de groepsmoderator';
$lang['None'] = 'Geen';

$lang['Subscribe'] = 'Aanmelden';
$lang['Unsubscribe'] = 'Afmelden';
$lang['View_Information'] = 'Bekijk gegevens';


//
// Search
//
$lang['Search_query'] = 'Zoek opdracht';
$lang['Search_options'] = 'Zoek Opties';

$lang['Search_keywords'] = 'Zoek op trefwoorden';
$lang['Search_keywords_explain'] = 'Je kan <u>AND</u> gebruiken om woorden aan te geven die in het resultaat MOETEN voorkomen, <u>OR</u> om woorden aan te geven die MOGEN voorkomen in het resultaat en <u>NOT</u> om woorden aan te geven die NIET in het resultaat mogen voorkomen. Gebruik een * (wildcard) om te zoeken op een deel van een woord.';
$lang['Search_author'] = 'Zoek op Auteur';
$lang['Search_author_explain'] = 'Gebruik een * (wildcard) om op een deel van een naam te zoeken';

$lang['Search_for_any'] = 'Zoek voor <i>een</i> van de woorden of gebruik AND, OR en NOT';
$lang['Search_for_all'] = 'Zoek naar <i>alle</i> woorden';
$lang['Search_title_msg'] = 'Zoek in bericht titel en tekst';
$lang['Search_msg_only'] = 'Zoek alleen in tekst bericht';

$lang['Return_first'] = 'Bekijk eerste'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'tekens van het bericht';

$lang['Search_previous'] = 'Zoek in afgelopen'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sorteer op';
$lang['Sort_Time'] = 'Plaatsings tijd';
$lang['Sort_Post_Subject'] = 'Titel Reactie';
$lang['Sort_Topic_Title'] = 'Titel Onderwerp';
$lang['Sort_Author'] = 'Auteur';
$lang['Sort_Forum'] = 'Onderwerp';

$lang['Display_results'] = 'Geef resultaten weer als';
$lang['All_available'] = 'Alle forums';
$lang['No_searchable_forums'] = 'Je hebt geen rechten om een zoekactie uit te voeren';

$lang['No_search_match'] = 'Er zijn geen resultaten die voldoen aan je zoekopdracht';
$lang['Found_search_match'] = '%d resultaat gevonden'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d resultaten gevonden'; // eg. Search found 24 matches

$lang['Close_window'] = 'Sluit venster';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Sorry, alleen %s kunnen mededelingen plaatsen in dit forum';
$lang['Sorry_auth_sticky'] = 'Sorry, alleen %s kunnen berichten sticky maken in dit forum';
$lang['Sorry_auth_read'] = 'Sorry, alleen %s kunnen onderwerpen lezen in dit forum';
$lang['Sorry_auth_post'] = 'Sorry, alleen %s kunnen berichten plaatsen in dit forum';
$lang['Sorry_auth_reply'] = 'Sorry, alleen %s kunnen reageren op berichten in dit forum';
$lang['Sorry_auth_edit'] = 'Sorry, alleen %s kunnen berichten bewerken in dit forum';
$lang['Sorry_auth_delete'] = 'Sorry, alleen %s kunnen berichten verwijderen in dit forum';
$lang['Sorry_auth_vote'] = 'Sorry, alleen %s kunnen stemmen op polls in dit forum';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>Anonieme gebruikers</b>';
$lang['Auth_Registered_Users'] = '<b>geregistreerde gebruikers</b>';
$lang['Auth_Users_granted_access'] = '<b>Gebruikers met speciale toegangsrechten</b>';
$lang['Auth_Moderators'] = '<b>moderators</b>';
$lang['Auth_Administrators'] = '<b>Beheerders</b>';

$lang['Not_Moderator'] = 'Je ben geen moderator van dit forum';
$lang['Not_Authorised'] = 'Geen toegang';

$lang['You_been_banned'] = 'Je bent gebanned op dit forum.<br />Neem contact op met de webmaster of Forum beheerder voor meer informatie.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Er zijn 0 geregistreerde en '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Er zijn %d geregistreerde en '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Er is %d eregistreerde en '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 verborgen gebruikers online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d verborgen gebruikers online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d verborgen gebruiker online'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Er zijn %d gasten online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Er zijn 0 gasten online'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Er is %d gast online'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Er zijn momenteel geen gebruikers aanwezig';

$lang['Online_explain'] = 'Deze lijst geeft de gebruikers weer die actief waren in de laatste 5 minuten';

$lang['Forum_Location'] = 'Forum Locatie';
$lang['Last_updated'] = 'Laatste Update';

$lang['Forum_index'] = 'Forum index';
$lang['Logging_on'] = 'Inloggen';
$lang['Posting_message'] = 'Bericht plaatsen';
$lang['Searching_forums'] = 'Doorzoeken van forums';
$lang['Viewing_profile'] = 'Weergeven Profiel';
$lang['Viewing_online'] = 'Weergeven online gebruikers';
$lang['Viewing_member_list'] = 'Weergeven gebruikers lijst';
$lang['Viewing_priv_msgs'] = 'Weergeven prive berichten';
$lang['Viewing_FAQ'] = 'Weergeven FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderator Control Panel';
$lang['Mod_CP_explain'] = 'Gebruikmakend van onderstaand formulier, is het mogelijk grootschalige moderatie taken uit te voeren op dit forum. Je kunt elk onderwerp sluiten, openen, verplaatsen of verwijderen';

$lang['Select'] = 'Selecteer';
$lang['Delete'] = 'Verwijder';
$lang['Move'] = 'Verplaats';
$lang['Lock'] = 'Sluit';
$lang['Unlock'] = 'Open';

$lang['Topics_Removed'] = 'De geselecteerde onderwerpen zijn verwijderd uit de database.';
$lang['Topics_Locked'] = 'De geselecteerde onderwerpen zijn gesloten';
$lang['Topics_Moved'] = 'De geselecteerde onderwerpen zijn verplaatst';
$lang['Topics_Unlocked'] = 'De geselecteerde onderwerpen zijn geopend';
$lang['No_Topics_Moved'] = 'Er zijn geen onderwerpen verplaatst';

$lang['Confirm_delete_topic'] = 'Weet je zeker dat je de geselecteerde onderwerpen wil verwijderen?';
$lang['Confirm_lock_topic'] = 'Weet je zeker dat je de geselecteerde onderwerpen wil sluiten?';
$lang['Confirm_unlock_topic'] = 'Weet je zeker dat je de geselecteerde onderwerpen wil openen?';
$lang['Confirm_move_topic'] = 'Weet je zeker dat je de geselecteerde onderwerpen wil verplaatsen?';

$lang['Move_to_forum'] = 'Verplaats naar forum';
$lang['Leave_shadow_topic'] = 'Laat link achter op oude forum';

$lang['Split_Topic'] = 'Control Panel voor splitsen van onderwerpen';
$lang['Split_Topic_explain'] = 'Gebruikmakend van onderstaand formulier kun je een onderwerp splitsen. Dit kan door het apart selecteren van de posts of om te splitsen op de plaats van de geselecteerde post.';
$lang['Split_title'] = 'Titel nieuw onderwerp';
$lang['Split_forum'] = 'Forum voor nieuw onderwerp';
$lang['Split_posts'] = 'Splits geselecteerde berichten';
$lang['Split_after'] = 'Splits vanaf geselecteerd bericht';
$lang['Topic_split'] = 'Het onderwerp is succesvol opgesplitst';

$lang['Too_many_error'] = 'Je hebt teveel berichten geselecteerd. Je kunt maar ��n bericht selecteren om een onderwerp na dit bericht te splitsen!';

$lang['None_selected'] = 'Je hebt geen enkel onderwerp geselecteerd om deze actie op uit te voeren. Ga terug en selecteer minimaal 1 onderwerp.';
$lang['New_forum'] = 'Nieuw onderdeel';

$lang['This_posts_IP'] = 'IP voor dit bericht';
$lang['Other_IP_this_user'] = 'Andere IP\'s waarvan deze gebruiker heeft gepost';
$lang['Users_this_IP'] = 'Berichten van gebruikers op dit IP';
$lang['IP_info'] = 'IP Informatie';
$lang['Lookup_IP'] = 'Zoek IP op';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Tijden zijn in %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 uur';
$lang['-11'] = 'GMT - 11 uur';
$lang['-10'] = 'GMT - 10 uur';
$lang['-9'] = 'GMT - 9 uur';
$lang['-8'] = 'GMT - 8 uur';
$lang['-7'] = 'GMT - 7 uur';
$lang['-6'] = 'GMT - 6 uur';
$lang['-5'] = 'GMT - 5 uur';
$lang['-4'] = 'GMT - 4 uur';
$lang['-3.5'] = 'GMT - 3.5 Hours';
$lang['-3'] = 'GMT - 3 uur';
$lang['-2'] = 'GMT - 2 uur';
$lang['-1'] = 'GMT - 1 uur';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 uur';
$lang['2'] = 'GMT + 2 uur';
$lang['3'] = 'GMT + 3 uur';
$lang['3.5'] = 'GMT + 3.5 Hours';
$lang['4'] = 'GMT + 4 uur';
$lang['4.5'] = 'GMT + 4.5 Hours';
$lang['5'] = 'GMT + 5 uur';
$lang['5.5'] = 'GMT + 5.5 Hours';
$lang['6'] = 'GMT + 6 uur';
$lang['6.5'] = 'GMT + 6.5 Hours';
$lang['7'] = 'GMT + 7 uur';
$lang['8'] = 'GMT + 8 uur';
$lang['9'] = 'GMT + 9 uur';
$lang['9.5'] = 'GMT + 9.5 Hours';
$lang['10'] = 'GMT + 10 uur';
$lang['11'] = 'GMT + 11 uur';
$lang['12'] = 'GMT + 12 uur';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 uur';
$lang['tz']['-11'] = 'GMT - 11 uur';
$lang['tz']['-10'] = 'GMT - 10 uur';
$lang['tz']['-9'] = 'GMT - 9 uur';
$lang['tz']['-8'] = 'GMT - 8 uur';
$lang['tz']['-7'] = 'GMT - 7 uur';
$lang['tz']['-6'] = 'GMT - 6 uur';
$lang['tz']['-5'] = 'GMT - 5 uur';
$lang['tz']['-4'] = 'GMT - 4 uur';
$lang['tz']['-3.5'] = 'GMT - 3.5 uur';
$lang['tz']['-3'] = 'GMT - 3 uur';
$lang['tz']['-2'] = 'GMT - 2 uur';
$lang['tz']['-1'] = 'GMT - 1 uur';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 uur';
$lang['tz']['2'] = 'GMT + 2 uur';
$lang['tz']['3'] = 'GMT + 3 uur';
$lang['tz']['3.5'] = 'GMT + 3.5 uur';
$lang['tz']['4'] = 'GMT + 4 uur';
$lang['tz']['4.5'] = 'GMT + 4.5 uur';
$lang['tz']['5'] = 'GMT + 5 uur';
$lang['tz']['5.5'] = 'GMT + 5.5 uur';
$lang['tz']['6'] = 'GMT + 6 uur';
$lang['tz']['6.5'] = 'GMT + 6.5 uur';
$lang['tz']['7'] = 'GMT + 7 uur';
$lang['tz']['8'] = 'GMT + 8 uur';
$lang['tz']['9'] = 'GMT + 9 uur';
$lang['tz']['9.5'] = 'GMT + 9.5 uur';
$lang['tz']['10'] = 'GMT + 10 uur';
$lang['tz']['11'] = 'GMT + 11 uur';
$lang['tz']['12'] = 'GMT + 12 uur';

$lang['datetime']['Sunday'] = 'Zondag';
$lang['datetime']['Monday'] = 'Maandag';
$lang['datetime']['Tuesday'] = 'Dinsdag';
$lang['datetime']['Wednesday'] = 'Woensdag';
$lang['datetime']['Thursday'] = 'Donderdag';
$lang['datetime']['Friday'] = 'Vrijdag';
$lang['datetime']['Saturday'] = 'Zaterdag';
$lang['datetime']['Sun'] = 'Zo';
$lang['datetime']['Mon'] = 'Ma';
$lang['datetime']['Tue'] = 'Di';
$lang['datetime']['Wed'] = 'Wo';
$lang['datetime']['Thu'] = 'Do';
$lang['datetime']['Fri'] = 'Vr';
$lang['datetime']['Sat'] = 'Za';
$lang['datetime']['January'] = 'Januari';
$lang['datetime']['February'] = 'Februari';
$lang['datetime']['March'] = 'Maart';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Mei';
$lang['datetime']['June'] = 'Juni';
$lang['datetime']['July'] = 'Juli';
$lang['datetime']['August'] = 'Augustus';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mrt';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Mei';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informatie';
$lang['Critical_Information'] = 'Belangrijke Informatie';

$lang['General_Error'] = 'Algemene Fout';
$lang['Critical_Error'] = 'Fatale Fout';
$lang['An_error_occured'] = 'Er is een fout opgetreden';
$lang['A_critical_error'] = 'Er is een fatale fout opgetreden';

//
// That's all Folks!
// -------------------------------------------------

?>