<?php

/***************************************************************************

 *                            lang_main.php [Finnish]

 *                              -------------------

 *     begin                : Tue Dec 18 2001

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

//	Translation produced by Jorma Aaltonen (bullitt)

//	http://www.pitro.com/

//



$lang['ENCODING'] = 'iso-8859-1';

$lang['DIRECTION'] = 'ltr';

$lang['LEFT'] = 'left';

$lang['RIGHT'] = 'right';

//$lang['DATE_FORMAT'] =  "d M Y"; // This should be changed to the default date format for your language, php date() format
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = _DATEBRIEF;
// End PNphpBB2 Module


// This is optional, if you would like a _SHORT_ message output

// along with our copyright message indicating you are the translator

// please add it here.

// $lang['TRANSLATION_INFO'] = 'K��nn�s Jorma Aaltonen, <a href="mailto:jorma&#64;pitro.com">jorma&#64;pitro.com</a>';



//

// Common, these terms are used

// extensively on several pages

//

$lang['Forum'] = 'Foorumi';

$lang['Category'] = 'Kategoria';

$lang['Topic'] = 'Aihe';

$lang['Topics'] = 'Aiheet';

$lang['Replies'] = 'Vastaukset';

$lang['Views'] = 'Luettu';

$lang['Post'] = 'L�het�';

$lang['Posts'] = 'Viestej�';

$lang['Posted'] = 'L�hetetty';

$lang['Username'] = 'K�ytt�j�tunnus';

$lang['Password'] = 'Salasana';

$lang['Email'] = 'S�hk�posti';

$lang['Poster'] = 'L�hett�j�';

$lang['Author'] = 'Kirjoittaja';

$lang['Time'] = 'Aika';

$lang['Hours'] = 'Tunnit';

$lang['Message'] = 'Viesti';



$lang['1_Day'] = '1 p�iv�';

$lang['7_Days'] = '7 p�iv��';

$lang['2_Weeks'] = '2 viikkoa';

$lang['1_Month'] = '1 kuukausi';

$lang['3_Months'] = '3 kuukautta';

$lang['6_Months'] = '6 kuukautta';

$lang['1_Year'] = '1 vuosi';



$lang['Go'] = 'Siirry';

$lang['Jump_to'] = 'Siirry';

$lang['Submit'] = 'L�het�';

$lang['Reset'] = 'Resetoi';

$lang['Cancel'] = 'Peruuta';

$lang['Preview'] = 'Esikatselu';

$lang['Confirm'] = 'Vahvista';

$lang['Spellcheck'] = 'Oikeinkirjoitus';

$lang['Yes'] = 'Kyll�';

$lang['No'] = 'Ei';

$lang['Enabled'] = 'Aktivoitu';

$lang['Disabled'] = 'Ei k�yt�ss�';

$lang['Error'] = 'Virhe';



$lang['Next'] = 'Seuraava';

$lang['Previous'] = 'Edellinen';

$lang['Goto_page'] = 'Siirry sivulle';

$lang['Joined'] = 'Liittynyt';

$lang['IP_Address'] = 'IP osoite';



$lang['Select_forum'] = 'Valitse foorumi';

$lang['View_latest_post'] = 'Katso viimeisin viesti';

$lang['View_newest_post'] = 'Katso uusin viesti';

$lang['Page_of'] = 'Sivu <b>%d</b> Yht. <b>%d</b>'; // Replaces with: Page 1 of 2 for example



$lang['ICQ'] = 'ICQ Numero';

$lang['AIM'] = 'AIM Osoite';

$lang['MSNM'] = 'MSN Messenger';

$lang['YIM'] = 'Yahoo Messenger';



$lang['Forum_Index'] = '%s Foorumin p��valikko';  // eg. sitename Forum Index, %s can be removed if you prefer



$lang['Post_new_topic'] = 'L�het� uusi viesti';

$lang['Reply_to_topic'] = 'Vastaa viestiin';

$lang['Reply_with_quote'] = 'Vastaa lainaamalla viesti�';



$lang['Click_return_topic'] = 'Klikkaa %st�st�%s palataksesi viestiin'; // %s's here are for uris, do not remove!

$lang['Click_return_login'] = 'Klikkaa %st�st�%s yritt��ksesi uudelleen';

$lang['Click_return_forum'] = 'Klikkaa %st�st�%s palataksesi foorumiin';

$lang['Click_view_message'] = 'Klikkaa %st�st�%s n�hd�ksesi viestisi';

$lang['Click_return_modcp'] = 'Klikkaa %st�st�%s palataksesi Moderaattorin ohjauspaneeliin';

$lang['Click_return_group'] = 'Klikkaa %st�st�%s palataksesi ryhm�n tietoihin';



$lang['Admin_panel'] = 'Siirry Hallintapaneeliin';



$lang['Board_disable'] = 'Valitettavasti t�m� sivusto on juuri nyt pois k�yt�st�, yrit� my�hemmin uudestaan';





//

// Global Header strings

//

$lang['Registered_users'] = 'Rekister�ityj� k�ytt�ji�:';

$lang['Browsing_forum'] = 'K�ytt�ji� selaamassa t�t� foorumia:';

$lang['Online_users_zero_total'] = 'Yhteens� <b>0</b> k�ytt�j�� t�ll� hetkell� :: ';

$lang['Online_users_total'] = 'Yhteens� <b>%d</b> k�ytt�j�� t�ll� hetkell� :: ';

$lang['Online_user_total'] = 'Yhteens� <b>%d</b> k�ytt�j� t�ll� hetkell� :: ';

$lang['Reg_users_zero_total'] = '0 Rekister�ity�, ';

$lang['Reg_users_total'] = '%d Rekister�ityj�, ';

$lang['Reg_user_total'] = '%d Rekister�ity, ';

$lang['Hidden_users_zero_total'] = '0 Piilotettua ja ';

$lang['Hidden_user_total'] = '%d Piilotettuja ja ';

$lang['Hidden_users_total'] = '%d Piilotettu ja ';

$lang['Guest_users_zero_total'] = '0 Vierasta';

$lang['Guest_users_total'] = '%d Vieraita';

$lang['Guest_user_total'] = '%d Vieras';

$lang['Record_online_users'] = 'Eniten k�ytt�ji� online on ollut <b>%s</b> ,p�iv�ys %s'; // first %s = number of users, second %s is the date.



$lang['Admin_online_color'] = '%sYll�pit�j�%s';

$lang['Mod_online_color'] = '%sModeraattori%s';



$lang['You_last_visit'] = 'Edellinen k�yntisi oli %s'; // %s replaced by date/time

$lang['Current_time'] = 'Kellonaika on nyt %s'; // %s replaced by time



$lang['Search_new'] = 'Katso viime k�yntisi j�lkeen tulleet uudet viestit';

$lang['Search_your_posts'] = 'Katso omat viestisi';

$lang['Search_unanswered'] = 'Katso viestit joihin ei ole vastattu';



$lang['Register'] = 'Rekister�idy';

$lang['Profile'] = 'K�ytt�j�tiedot';

$lang['Edit_profile'] = 'Muokkaa k�ytt�j�tietoja';

$lang['Search'] = 'Haku';

$lang['Memberlist'] = 'K�ytt�j�lista';

$lang['FAQ'] = 'Ohje';

$lang['BBCode_guide'] = 'BBCode ohje';

$lang['Usergroups'] = 'K�ytt�j�ryhm�t';

$lang['Last_Post'] = 'Viimeinen viesti';

$lang['Moderator'] = 'Moderaattori';

$lang['Moderators'] = 'Moderaattorit';





//

// Stats block text

//

$lang['Posted_articles_zero_total'] = 'K�ytt�j�mme ovat kirjoittaneet yhteens� <b>0</b> viesti�'; // Number of posts

$lang['Posted_articles_total'] = 'K�ytt�j�mme ovat kirjoittaneet yhteens� <b>%d</b> viesti�'; // Number of posts

$lang['Posted_article_total'] = 'K�ytt�j�mme ovat kirjoittaneet yhteens� <b>%d</b> viestin'; // Number of posts

$lang['Registered_users_zero_total'] = 'Meill� on  <b>0</b> rekister�ity� k�ytt�j��'; // # registered users

$lang['Registered_users_total'] = 'Meill� on  <b>%d</b> rekister�ity� k�ytt�j��'; // # registered users

$lang['Registered_user_total'] = 'Meill� on <b>%d</b> rekister�ity k�ytt�j�'; // # registered users

$lang['Newest_user'] = 'Uusin rekister�itynyt k�ytt�j� on <b>%s%s%s</b>'; // a href, username, /a 



$lang['No_new_posts_last_visit'] = 'Ei uusia viestej� edellisen k�yntisi j�lkeen';

$lang['No_new_posts'] = 'Ei uusia viestej�';

$lang['New_posts'] = 'Uusia viestej�';

$lang['New_post'] = 'Uusi viesti';

$lang['No_new_posts_hot'] = 'Ei uusia viestej� [ Suosittu ]';

$lang['New_posts_hot'] = 'Uusia viestej� [ Suosittu ]';

$lang['No_new_posts_locked'] = 'Ei uusia viestej� [ Lukittu ]';

$lang['New_posts_locked'] = 'Uusia viestej� [ Lukittu ]';

$lang['Forum_is_locked'] = 'Foorumi on lukittu';





//

// Login

//

$lang['Enter_password'] = 'Ole hyv� ja anna k�ytt�j�tunnus sek� salasana kirjautumiseen';

$lang['Login'] = 'Kirjaudu sis��n';

$lang['Logout'] = 'Kirjaudu ulos';



$lang['Forgotten_password'] = 'Unohdin salasanani';



$lang['Log_me_in'] = 'Kirjaa minut aina sis��n automaattisesti';



$lang['Error_login'] = 'Annoit v��r�n tai passiivisen k�ytt�j�tunnuksen tai salasana oli v��rin';





//

// Index page

//

$lang['Index'] = 'P��valikko';

$lang['No_Posts'] = 'Ei viestej�';

$lang['No_forums'] = 'T�ll� sivustolla ei ole foorumeita';



$lang['Private_Message'] = 'Yksityisviesti';

$lang['Private_Messages'] = 'Yksityiset viestit';

$lang['Who_is_Online'] = 'Ket� on paikalla';



$lang['Mark_all_forums'] = 'Merkitse kaikki foorumit luetuiksi';

$lang['Forums_marked_read'] = 'Kaikki foorumit on merkitty luetuiksi';





//

// Viewforum

//

$lang['View_forum'] = 'Siirry foorumiin';



$lang['Forum_not_exist'] = 'Valitsemaasi foorumia ei ole olemassa';

$lang['Reached_on_error'] = 'Olet t�ll� sivulla virhetilanteen vuoksi';



$lang['Display_topics'] = 'N�yt� edelliset aiheet';

$lang['All_Topics'] = 'Kaikki aiheet';



$lang['Topic_Announcement'] = '<b>Ilmoitus:</b>';

$lang['Topic_Sticky'] = '<b>Tiedote:</b>';

$lang['Topic_Moved'] = '<b>Siirretty:</b>';

$lang['Topic_Poll'] = '<b>[ ��nestys ]</b>';



$lang['Mark_all_topics'] = 'Merkitse kaikki aiheet luetuiksi';

$lang['Topics_marked_read'] = 'T�m�n foorumin aiheet on merkitty luetuiksi';



$lang['Rules_post_can'] = '<b>Voit</b> kirjoittaa uusia viestej� t�ss� foorumissa';

$lang['Rules_post_cannot'] = '<b>Et voi</b> kirjoittaa uusia viestej� t�ss� foorumissa';

$lang['Rules_reply_can'] = '<b>Voit</b> vastata viesteihin t�ss� foorumissa';

$lang['Rules_reply_cannot'] = '<b>Et voi</b> vastata viesteihin t�ss� foorumissa';

$lang['Rules_edit_can'] = '<b>Voit</b> muokata viestej�si t�ss� foorumissa';

$lang['Rules_edit_cannot'] = '<b>Et voi</b> muokata viestej�si t�ss� foorumissa';

$lang['Rules_delete_can'] = '<b>Voit</b> poistaa viestej�si t�ss� foorumissa';

$lang['Rules_delete_cannot'] = '<b>Et voi</b> poistaa viestej�si t�ss� foorumissa';

$lang['Rules_vote_can'] = '<b>Voit</b> ��nest�� t�ss� foorumissa';

$lang['Rules_vote_cannot'] = '<b>Et voi</b> ��nest�� t�ss� foorumissa';

$lang['Rules_moderate'] = '<b>Voit</b> %smoderoida t�t� foorumia%s'; // %s replaced by a href links, do not remove! 



$lang['No_topics_post_one'] = 'T�ss� foorumissa ei ole viestej�<br />Klikkaa <b>Uusi aihe</b> linkki� t�ll� sivulla kirjoittaaksi viestin';





//

// Viewtopic

//

$lang['View_topic'] = 'N�yt� viesti';



$lang['Guest'] = 'Vieras';

$lang['Post_subject'] = 'Viestin aihe';

$lang['View_next_topic'] = 'N�yt� seuraava aihe';

$lang['View_previous_topic'] = 'N�yt� edellinen aihe';

$lang['Submit_vote'] = '��nest�';

$lang['View_results'] = 'N�yt� tulokset';



$lang['No_newer_topics'] = 'T�ss� foorumissa ei ole uudempia aiheita';

$lang['No_older_topics'] = 'T�ss� foorumissa ei ole vanhempia aiheita';

$lang['Topic_post_not_exist'] = 'Hakemaasi aihetta tai viesti� ei l�ydy';

$lang['No_posts_topic'] = 'Otsikolla ei ole viestej�';



$lang['Display_posts'] = 'N�yt� edelliset viestit';

$lang['All_Posts'] = 'Kaikki viestit';

$lang['Newest_First'] = 'Uusin ensin';

$lang['Oldest_First'] = 'Vanhin ensin';



$lang['Back_to_top'] = 'Takaisin alkuun';



$lang['Read_profile'] = 'N�yt� k�ytt�j�n tiedot'; 

$lang['Send_email'] = 'L�het� s�hk�postia k�ytt�j�lle';

$lang['Visit_website'] = 'K�y l�hett�j�n sivustolla';

$lang['ICQ_status'] = 'ICQ Status';

$lang['Edit_delete_post'] = 'Muokkaa/Poista viesti';

$lang['View_IP'] = 'N�yt� l�hett�j�n IP';

$lang['Delete_post'] = 'Poista viesti';



$lang['wrote'] = 'kirjoitti'; // proceeds the username and is followed by the quoted text

$lang['Quote'] = 'Lainaus'; // comes before bbcode quote output.

$lang['Code'] = 'Koodi'; // comes before bbcode code output.



$lang['Edited_time_total'] = 'Viimeinen muokkaaja, %s pvm %s, muokattu %d kertaa'; // Last edited by me on 12 Oct 2001, edited 1 time in total

$lang['Edited_times_total'] = 'Viimeinen muokkaaja, %s pvm %s, muokattu %d kertaa'; // Last edited by me on 12 Oct 2001, edited 2 times in total



$lang['Lock_topic'] = 'Lukitse aihe';

$lang['Unlock_topic'] = 'Poista aiheen lukitus';

$lang['Move_topic'] = 'Siirr� aihe';

$lang['Delete_topic'] = 'Poista t�m� aihe';

$lang['Split_topic'] = 'Jaa t�m� aihe';



$lang['Stop_watching_topic'] = 'Lopeta aiheen seuraaminen';

$lang['Start_watching_topic'] = 'Seuraa aiheen vastauksia';

$lang['No_longer_watching'] = 'Aihetta ei en�� seurata';

$lang['You_are_watching'] = 'Aihe on nyt seurannassa';



$lang['Total_votes'] = '��ni� yhteens�';



//

// Posting/Replying (Not private messaging!)

//

$lang['Message_body'] = 'Viestin teksti';

$lang['Topic_review'] = 'Aiheen tarkistus';



$lang['No_post_mode'] = 'Viestin muotoa ei ole m��ritetty'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)



$lang['Post_a_new_topic'] = 'Luo uusi aihe';

$lang['Post_a_reply'] = 'Vastaa';

$lang['Post_topic_as'] = 'Viestin muoto';

$lang['Edit_Post'] = 'Muokkaa viesti�';

$lang['Options'] = 'Vaihtoehdot';



$lang['Post_Announcement'] = 'Ilmoitus';

$lang['Post_Sticky'] = 'Tiedote';

$lang['Post_Normal'] = 'Normaali';



$lang['Confirm_delete'] = 'Oletko varma, ett� haluat poistaa t�m�n viestin?';

$lang['Confirm_delete_poll'] = 'Oletko varma, ett� haluat poistaa t�m�n ��nestyksen?';



$lang['Flood_Error'] = 'Et voi tehd� uutta viesti� heti edellisen j�lkeen, ole hyv� ja yrit� hetken kuluttua uudelleen';

$lang['Empty_subject'] = 'Sinun on annettava uudelle aiheelle selite';

$lang['Empty_message'] = 'Sinun on kirjoitettava jotain viestiin';

$lang['Forum_locked'] = 'T�m� foorumi on lukittu, et voi kirjoittaa uusia viestej�, vastata vanhoihin tai muokata viestej�';

$lang['Topic_locked'] = 'T�m� aihe on lukittu, et voi muokata vastauksia tai kirjoittaa uusia vastauksia';

$lang['No_post_id'] = 'Sinun on valittava viesti jota muokkaat';

$lang['No_topic_id'] = 'Sinun on valittava aihe, johon vastaat';

$lang['No_valid_mode'] = 'Voit vain luoda viestej�, vastata, muokata tai lainata viestej�, ole hyv� ja yrit� uudelleen';

$lang['No_such_post'] = 'Haluttua aihetta ei l�ydy, ole hyv� ja yrit� uudelleen';

$lang['Edit_own_posts'] = 'Valitettavasti voit muokata vain omia viestej�si';

$lang['Delete_own_posts'] = 'Valitettavasti voit poistaa vain omia viestej�si';

$lang['Cannot_delete_replied'] = 'Valitettavasti et voi poistaa viestej� joihin on vastattu';

$lang['Cannot_delete_poll'] = 'Valitettavasti et voi poistaa aktiivista ��nestyst�';

$lang['Empty_poll_title'] = 'Sinun on annettava ��nestykselle nimi';

$lang['To_few_poll_options'] = '��nestykselle on annettava v�hint��n kaksi vaihtoehtoa';

$lang['To_many_poll_options'] = 'Annoit liikaa vaihtoehtoja ��nestykseen';

$lang['Post_has_no_poll'] = 'T�ss� viestiss� ei ole ��nestyst�';

$lang['Already_voted'] = 'Olet jo ��nest�nyt t�ss� ��nestyksess�';

$lang['No_vote_option'] = 'Sinun valittava vaihtoehto ��nest�ess�si';



$lang['Add_poll'] = 'Lis�� ��nestys';

$lang['Add_poll_explain'] = 'Jos et halua lis�t� ��nestyst� viestiisi j�t� t�m� kentt� tyhj�ksi';

$lang['Poll_question'] = '��nestyksen aihe';

$lang['Poll_option'] = '��nestysvaihtoehto';

$lang['Add_option'] = 'Lis�� vaihtoehto';

$lang['Update'] = 'P�ivit�';

$lang['Delete'] = 'Poista';

$lang['Poll_for'] = '��nestys on voimassa';

$lang['Days'] = 'P�iv��'; // This is used for the Run poll for ... Days + in admin_forums for pruning

$lang['Poll_for_explain'] = '[ Anna 0 tai j�t� tyhj�ksi ikuiselle ��nestykselle ]';

$lang['Delete_poll'] = 'Poista ��nestys';



$lang['Disable_HTML_post'] = '�l� salli HTML muotoiluja t�ss� viestiss�';

$lang['Disable_BBCode_post'] = '�l� salli BBCode muotoiluja t�ss� viestiss�';

$lang['Disable_Smilies_post'] = '�l� salli hymi�it� t�ss� viestiss�';



$lang['HTML_is_ON'] = 'HTML on <u>P��LL�</u>';

$lang['HTML_is_OFF'] = 'HTML on <u>POIS P��LT�</u>';

$lang['BBCode_is_ON'] = '%sBBCode%s on <u>P��LL�</u>'; // %s are replaced with URI pointing to FAQ

$lang['BBCode_is_OFF'] = '%sBBCode%s on <u>POIS P��LT�</u>';

$lang['Smilies_are_ON'] = 'Hymi�t ovat <u>P��LL�</u>';

$lang['Smilies_are_OFF'] = 'Hymi�t ovat <u>POIS P��LT�</u>';



$lang['Attach_signature'] = 'Liit� allekirjoitus (allekirjoitusta voidaan vaihtaa k�ytt�j�tiedoissa)';

$lang['Notify'] = 'Ilmoita vastauksesta';

$lang['Delete_post'] = 'Poista t�m� viesti';



$lang['Stored'] = 'Viestisi on talletettu';

$lang['Deleted'] = 'Viestisi on poistettu';

$lang['Poll_delete'] = '��nestyksesi on poistettu';

$lang['Vote_cast'] = '��nesi on rekister�ity';



$lang['Topic_reply_notification'] = 'Ilmoitus vastauksesta aiheeseen';



$lang['bbcode_b_help'] = 'Lihavointi: [b]text[/b]  (alt+b)';

$lang['bbcode_i_help'] = 'Kursivointi: [i]text[/i]  (alt+i)';

$lang['bbcode_u_help'] = 'Alleviivaus: [u]text[/u]  (alt+u)';

$lang['bbcode_q_help'] = 'Lainaus: [quote]text[/quote]  (alt+q)';

$lang['bbcode_c_help'] = 'Koodin n�ytt�: [code]code[/code]  (alt+c)';

$lang['bbcode_l_help'] = 'Luettelo: [list]text[/list] (alt+l)';

$lang['bbcode_o_help'] = 'J�rjestetty luettelo: [list=]text[/list]  (alt+o)';

$lang['bbcode_p_help'] = 'Lis�� kuva: [img]http://image_url[/img]  (alt+p)';

$lang['bbcode_w_help'] = 'Lis�� URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';

$lang['bbcode_a_help'] = 'Sulje kaikki avoimet bbCode tagit';

$lang['bbcode_s_help'] = 'Fontin v�ri: [color=red]text[/color]  Vihje: voit k�ytt�� my�s color=#FF0000';

$lang['bbcode_f_help'] = 'Fontin koko: [size=x-small]small text[/size]';



$lang['Emoticons'] = 'Hymi�t';

$lang['More_emoticons'] = 'Lis�� hymi�it�';



$lang['Font_color'] = 'Fontin v�ri';

$lang['color_default'] = 'Oletus';

$lang['color_dark_red'] = 'Tumman punainen';

$lang['color_red'] = 'Punainen';

$lang['color_orange'] = 'Oranssi';

$lang['color_brown'] = 'Ruskea';

$lang['color_yellow'] = 'Keltainen';

$lang['color_green'] = 'Vihre�';

$lang['color_olive'] = 'Oliivi';

$lang['color_cyan'] = 'Cyan';

$lang['color_blue'] = 'Sininen';

$lang['color_dark_blue'] = 'Tumman Sininen';

$lang['color_indigo'] = 'Indigo';

$lang['color_violet'] = 'Violetti';

$lang['color_white'] = 'Valkoinen';

$lang['color_black'] = 'Musta';



$lang['Font_size'] = 'Fontin koko';

$lang['font_tiny'] = 'Eritt�in pieni';

$lang['font_small'] = 'Pieni';

$lang['font_normal'] = 'Normaali';

$lang['font_large'] = 'Iso';

$lang['font_huge'] = 'Eritt�in iso';



$lang['Close_Tags'] = 'Sulje tagit';

$lang['Styles_tip'] = 'Vihje: Tyylej� voi k�ytt�� valittuun tekstiin nopeasti';





//

// Private Messaging

//

$lang['Private_Messaging'] = 'Yksityiset viestit';



$lang['Login_check_pm'] = 'Kirjaudu sis��n tarkistaaksesi yksityiset viestit';

$lang['New_pms'] = 'Sinulla on  %d uutta viesti�'; // You have 2 new messages

$lang['New_pm'] = 'Sinulla on %d uusi viesti'; // You have 1 new message

$lang['No_new_pm'] = 'Sinulla ei ole uusia viestej�';

$lang['Unread_pms'] = 'Sinulla on  %d lukematonta viesti�';

$lang['Unread_pm'] = 'Sinulla on  %d lukematon viesti';

$lang['No_unread_pm'] = 'Sinulla ei ole lukemattomia viestej�';

$lang['You_new_pm'] = 'Uusi yksityinen viesti odottaa postilaatikossasi';

$lang['You_new_pms'] = 'Uusia yksityisi� viestej� odottaa postilaatikossasi';

$lang['You_no_new_pm'] = 'Sinulla ei ole uusia yksityisi� viestej�';



$lang['Unread_message'] = 'Lukematon viesti';

$lang['Read_message'] = 'Lue viesti';



$lang['Read_pm'] = 'Lue viesti';

$lang['Post_new_pm'] = 'Uusi viesti';

$lang['Post_reply_pm'] = 'Vastaa viestiin';

$lang['Post_quote_pm'] = 'Lainaa viesti�';

$lang['Edit_pm'] = 'Muokkaa viesti�';



$lang['Inbox'] = 'Tulevat';

$lang['Outbox'] = 'L�htev�t';

$lang['Savebox'] = 'Tallennetut';

$lang['Sentbox'] = 'L�hetetyt';

$lang['Flag'] = 'Lippu';

$lang['Subject'] = 'Aihe';

$lang['From'] = 'Kenelt�';

$lang['To'] = 'Kenelle';

$lang['Date'] = 'P�iv�ys';

$lang['Mark'] = 'Merkki';

$lang['Sent'] = 'L�hetetty';

$lang['Saved'] = 'Tallennettu';

$lang['Delete_marked'] = 'Poista merkityt';

$lang['Delete_all'] = 'Poista kaikki';

$lang['Save_marked'] = 'Tallenna merkityt'; 

$lang['Save_message'] = 'Tallenna viesti';

$lang['Delete_message'] = 'Poista viesti';



$lang['Display_messages'] = 'N�yt� viestit edellisilt�'; // Followed by number of days/weeks/months

$lang['All_Messages'] = 'Kaikki viestit';



$lang['No_messages_folder'] = 'Sinulla ei ole viestej� t�ss� kansiossa';



$lang['PM_disabled'] = 'Yksityisviestit eiv�t ole k�yt�ss� t�ll� sivustolla';

$lang['Cannot_send_privmsg'] = 'Valitettavasti yll�pito est�� yksityisviestin l�hett�misen';

$lang['No_to_user'] = 'Sinun on annettava vastaanottavan henkil�n k�ytt�j�tunnus';

$lang['No_such_user'] = 'Valitettavasti k�ytt�j�tunnusta ei l�ydy';



$lang['Disable_HTML_pm'] = '�l� salli HTML muotoiluja t�ss� viestiss�';

$lang['Disable_BBCode_pm'] = '�l� salli BBCode muotoiluja t�ss� viestiss�';

$lang['Disable_Smilies_pm'] = '�l� salli hymi�it� t�ss� viestiss�';



$lang['Message_sent'] = 'Viestisi on l�hetetty';



$lang['Click_return_inbox'] = 'Klikkaa %st�st�%s palataksesi saapuvan postin kansioon';

$lang['Click_return_index'] = 'Klikkaa %st�st�%s palataksesi p��sivulle.';



$lang['Send_a_new_message'] = 'L�het� uusi yksityinen viesti';

$lang['Send_a_reply'] = 'Vastaa yksityiseen viestiin';

$lang['Edit_message'] = 'Muokkaa yksityist� viesti�';



$lang['Notification_subject'] = 'Uusi yksityinen viesti on saapunut';



$lang['Find_username'] = 'Etsi k�ytt�j�tunnus';

$lang['Find'] = 'Etsi';

$lang['No_match'] = 'Tietoja ei l�ytynyt';



$lang['No_post_id'] = 'Viestin ID ei ole m��ritelty';

$lang['No_such_folder'] = 'Kansiota ei ole olemassa';

$lang['No_folder'] = 'Kansiota ei ole m��ritelty';



$lang['Mark_all'] = 'Merkitse kaikki';

$lang['Unmark_all'] = 'Poista merkint� kaikista';



$lang['Confirm_delete_pm'] = 'Oletko varma, ett� haluat poistaa t�m�n viestin?';

$lang['Confirm_delete_pms'] = 'Oletko varma, ett� haluat poistaa n�m� viestit?';



$lang['Inbox_size'] = 'Sis��ntulevan postin kansiosta on %d%% k�ytetty'; // eg. Your Inbox is 50% full

$lang['Sentbox_size'] = 'L�htev�n postin kansiosta on %d%% k�ytetty'; 

$lang['Savebox_size'] = 'Tallennetun postin kansiosta on  %d%% k�ytetty'; 



$lang['Click_view_privmsg'] = 'Klikkaa %st�st�%s siirty�ksesi sis��ntulevan postin kansioon';





//

// Profiles/Registration

//

$lang['Viewing_user_profile'] = 'K�ytt�j�tiedot :: %s'; // %s is username 

$lang['About_user'] = 'Kaikki k�ytt�j�st� %s'; // %s is username



$lang['Preferences'] = 'Valinnat';

$lang['Items_required'] = 'Kent�t, jotka on merkitty * ovat pakollisia ellei muuta mainita';

$lang['Registration_info'] = 'Rekister�intitiedot';

$lang['Profile_info'] = 'K�ytt�j�tiedot';

$lang['Profile_info_warn'] = 'N�m� tiedot ovat kaikille n�kyviss�';

$lang['Avatar_panel'] = 'Avatarien ohjauspaneeli';

$lang['Avatar_gallery'] = 'Avatar galleria';



$lang['Website'] = 'Kotisivu';

$lang['Location'] = 'Paikkakunta';

$lang['Contact'] = 'Yhteystiedot';

$lang['Email_address'] = 'S�hk�postiosoite';

$lang['Email'] = 'S�hk�posti';

$lang['Send_private_message'] = 'L�het� yksityinen viesti';

$lang['Hidden_email'] = '[ Piilotettu ]';

$lang['Search_user_posts'] = 'Etsi t�m�n k�ytt�j�n kirjoittamat viestit';

$lang['Interests'] = 'Harrastukset';

$lang['Occupation'] = 'Ammatti'; 

$lang['Poster_rank'] = 'K�ytt�j�titteli';



$lang['Total_posts'] = 'Viestej� yhteens�';

$lang['User_post_pct_stats'] = '%.2f%% kaikista viesteist�'; // 1.25% of total

$lang['User_post_day_stats'] = '%.2f viesti� per p�iv�'; // 1.5 posts per day

$lang['Search_user_posts'] = 'Etsi kaikki viestit, jotka on kirjoittanut %s'; // Find all posts by username



$lang['No_user_id_specified'] = 'Valitettavasti k�ytt�j�tunnusta ei ole olemassa';

$lang['Wrong_Profile'] = 'Et voi muokata toisen k�ytt�j�tunnuksen tietoja.';



$lang['Only_one_avatar'] = 'Voit m��ritell� vain yhden Avatarin';

$lang['File_no_data'] = 'Antamassasi URL:ssa ei ole dataa';

$lang['No_connection_URL'] = 'Yhteytt� antamaasi URL:iin ei saatu';

$lang['Incomplete_URL'] = 'Antamasi URL ei ole t�ydellinen';

$lang['Wrong_remote_avatar_format'] = 'URL ulkoiselle Avatarille ei ole kelvollinen';

$lang['No_send_account_inactive'] = 'Valitettavasti salasanaasi ei voida selvitt�� koska k�ytt�j�tunnuksesi ei ole aktiivinen. Ole hyv� ja ota yhteytt� yll�pitoon mik�li haluat lis�tietoja';



$lang['Always_smile'] = 'Salli aina hymi�t';

$lang['Always_html'] = 'Salli aina HTML';

$lang['Always_bbcode'] = 'Salli aina BBCode';

$lang['Always_add_sig'] = 'Liit� aina allekirjoitus';

$lang['Always_notify'] = 'L�het� aina ilmoitus vastauksista';

$lang['Always_notify_explain'] = 'Saat s�hk�postia kun joku vastaa luomaasi aiheeseen. Voit muuttaa t�t� jokaiselle viestille';



$lang['Board_style'] = 'Sivuston tyyli';

$lang['Board_lang'] = 'Sivuston kieli';

$lang['No_themes'] = 'Ei teemoja tietokannassa';

$lang['Timezone'] = 'Aikavy�hyke';

$lang['Date_format'] = 'P�iv�yksen muoto';

$lang['Date_format_explain'] = 'Syntaksin muoto vastaa PHP:n <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> funktiota';

$lang['Signature'] = 'Allekirjoitus';

$lang['Signature_explain'] = 'T�m� teksti voidaan lis�t� kirjoittamiisi viesteihin. K�yt�ss� on %d merkin rajoitus.';

$lang['Public_view_email'] = 'N�yt� aina s�hk�postiosoitteeni';



$lang['Current_password'] = 'Nykyinen salasana';

$lang['New_password'] = 'Uusi salasana';

$lang['Confirm_password'] = 'Vahvista salasana';

$lang['Confirm_password_explain'] = 'Sinun t�ytyy varmentaa nykyinen salasanasi jos haluat muuttaa sit� tai s�hk�postiosoitettasi';

$lang['password_if_changed'] = 'Anna salasana vain jos haluat vaihtaa sit�';

$lang['password_confirm_if_changed'] = 'Vahvistus tarvitaan vain jos muutit salasanaa yl�puolella olevassa kent�ss�';



$lang['Avatar'] = 'Avatar';

$lang['Avatar_explain'] = 'N�ytt�� pienen graafisen kuvan tietojesi alla viestiruudussa. Vain yksi Avatar kerrallaan, jonka leveys ei voi olla suurempi kuin %d pixeli�, ja korkeus ei voi ylitt�� %d pixeli� ja tiedoston koko korkeintaan %dkB.'; $lang['Upload_Avatar_file'] = 'Lataa Avatar omalta koneeltasi';

$lang['Upload_Avatar_URL'] = 'Lataa Avatar URL:sta';

$lang['Upload_Avatar_URL_explain'] = 'Anna URL, Avatar tiedostoon, tiedosto kopioidaan t�lle palvelimelle.';

$lang['Pick_local_Avatar'] = 'Valitse Avatar galleriasta';

$lang['Link_remote_Avatar'] = 'Linkki ulkopuoliseen Avatariin';

$lang['Link_remote_Avatar_explain'] = 'Anna URL tiedostoon, jonka Avatar kuvan haluat linkitt��.';

$lang['Avatar_URL'] = 'Avatar kuvan URL';

$lang['Select_from_gallery'] = 'Valitse Avatar galleriasta';

$lang['View_avatar_gallery'] = 'N�yt� galleria';



$lang['Select_avatar'] = 'Valitse avatar';

$lang['Return_profile'] = 'Peruuta avatar valinta';

$lang['Select_category'] = 'Valitse categoria';



$lang['Delete_Image'] = 'Poista kuva';

$lang['Current_Image'] = 'Nykyinen kuva';



$lang['Notify_on_privmsg'] = 'Ilmoita uudesta yksityisest� viestist�';

$lang['Popup_on_privmsg'] = 'Pop up ikkuna uudesta yksityisest� viestist�'; 

$lang['Popup_on_privmsg_explain'] = 'Jotkut sivumallit voivat avata uuden ikkunan kun uusi yksityinen viesti saapuu'; 

$lang['Hide_user'] = 'Piilota online status';



$lang['Profile_updated'] = 'K�ytt�j�tietosi on p�ivitetty';

$lang['Profile_updated_inactive'] = 'K�ytt�j�tietosi on p�ivitetty, Olet kuitenkin muuttanut joitakin t�rkeit� tietoja tunnuksesi ei ole aktiivinen. Tarkista s�hk�postistasi kuinka saat tunnuksesi taas aktivoitua. Jos sivuston yll�pito suorittaa aktivoinnin odota kunnes tunnuksesi on j�lleen aktivoitu';



$lang['Password_mismatch'] = 'Antamasi salasanat eiv�t t�sm�nneet';

$lang['Current_password_mismatch'] = 'Antamasi nykyinen salasana ei t�sm�� tietokantaan tallennetun kanssa';

$lang['Password_long'] = 'Salasana saa olla korkeintaan 32 merkki�';

$lang['Username_taken'] = 'Valitettavasti k�ytt�j�tunnus on jo varattu';

$lang['Username_invalid'] = 'Valitettavsti k�ytt�j�tunnus sis�lt�� kielletyn merkin kuten \"';

$lang['Username_disallowed'] = 'Valitettavasti k�ytt�j�tunnus ei ole sallittu';

$lang['Email_taken'] = 'Valitettavasti s�hk�postiosoite on jo k�yt�ss� rekister�idyll� k�ytt�j�ll�';

$lang['Email_banned'] = 'Valitettavasti s�hk�postiosoite on porttikiellossa';

$lang['Email_invalid'] = 'Valitettavasti antamasi s�hk�postiosoite ei ole oikeassa muodossa';

$lang['Signature_too_long'] = 'Allekirjoituksesi on liian pitk�';

$lang['Fields_empty'] = 'Kaikki pakolliset kent�t on t�ytett�v�';

$lang['Avatar_filetype'] = 'Avatarin tiedostotyypin tulee olla .jpg, .gif tai .png';

$lang['Avatar_filesize'] = 'Avatarin tiedoston koko pit�� olla v�hemm�n kuin %d kB'; // The avatar image file size must be less than 6 kB

$lang['Avatar_imagesize'] = 'Avatarin tulee olla v�hemm�n kuin %d pixeli� leve� ja %d pixeli� korkea'; 



$lang['Welcome_subject'] = 'Tervetuloa %s Foorumeihin'; // Welcome to my.com forums

$lang['New_account_subject'] = 'Uusi k�ytt�j�tunnus';

$lang['Account_activated_subject'] = 'K�ytt�j�tunnus aktivoitu';



$lang['Account_added'] = 'Kiitoksia rekister�itymisest�, k�ytt�j�tunnuksesi on luotu. Voit nyt kirjautua sis��n k�ytt�j�tunnuksellasi ja salasanalla';

$lang['Account_inactive'] = 'K�ytt�j�tunnuksesi on luotu. T�m� sivusto vaatii kuitenkin tunnuksen aktivoinnin, aktivointiavain on l�hetetty s�hk�postiosoitteeseen jonka annoit. Tarkista s�hk�postistasi lis�ohjeet.';

$lang['Account_inactive_admin'] = 'K�ytt�j�tunnuksesi on luotu. T�m� sivusto vaatii kuitenkin, ett� yll�pito aktivoi k�ytt�j�tunnuksen. Heille on l�hetetty s�hk�posti ja saat tiedon kun k�ytt�j�tunnuksesi on aktivoitu';

$lang['Account_active'] = 'K�ytt�j�tunnuksesi on aktivoitu. Kiitoksia rekister�itymisest�';

$lang['Account_active_admin'] = 'K�ytt�j�tunnus on nyt aktivoitu';

$lang['Reactivate'] = 'Aktivoi uudelleen k�ytt�j�tunnuksesi!';

$lang['Already_activated'] = 'Olet jo aktivoinut k�ytt�j�tunnukses';

$lang['COPPA'] = 'K�ytt�j�tunnuksesi on luotu mutta vaatii vahvistuksen. Tarkista s�hk�postistasi lis�ohjeet.';



$lang['Registration'] = 'Rekister�intisopimus';

$lang['Reg_agreement'] = 'Vaikka t�m�n sivuston yll�pit�j�t ja moderaattorit pyrkiv�t poistamaan tai muokkaamaan kaiken yleisesti arvelluttavan sis�ll�n niin nopeasti kuin mahdollista, on mahdotonta tarkistaa jokaista viesti�. Tiedostatte siis, ett� viestit sivuilla ovat kirjoittajiensa mielipiteit� eiv�tk� yll�pidon, moderaattoreiden tai webmasterin (lukuunottamatta heid�n itsens� kirjoittamia viestej�) ja siksi he eiv�t ole vastuussa n�ist� kirjoituksista.<br /><br />Suostut olemaan esitt�m�tt� mit��n loukkaavaa, vihamielist�, ep�moraalista tai muutakaan materiaalia joka voisi loukata voimassa olevia lakeja. Toimimalla t�t� vastoin voidaan sinut v�litt�m�sti ja lopullisesti poistaa j�rjestelm�n k�ytt�jist� (tarvittaessa yhteydentarjoajaasi otetaan yhteytt�). Kaikkien viestien IP-osoite tallennetaan t�m�n vuoksi. Suostut siihen, ett� webmaster, yll�pito ja moderaattorit ovat oikeutettuja poistamaan, muokkaamaan, siirt�m��n tai sulkemaan mink� tahansa aiheen milloin tahansa. K�ytt�j�n� suostut siihen, ett� kaikki yll� annettu tieto tallennetaan tietokantaan. T�t� tietoa ei anneta millek��n kolmannelle osapuolelle ilman suostumustasi. Webmaster, yll�pito ja moderaattorit eiv�t ole vastuullisia jos tietoturva vaarantuu hakkerointiyrityksist� tms. johtuen.<br /><br />T�m� sivusto k�ytt�� avusteita (cookies) tallentamaan tietoa paikalliselle tietokoneelle. N�m� avusteet eiv�t sis�ll� mit��n yll� annetuista tiedoista, niiden ainoa tarkoitus on helpottaa k�ytt��. S�hk�postiosoitetta k�ytet��n vain k�ytt�j�n tarvitsemien tietojen l�hett�miseen (Sek� salasanan l�hett�miseen jos unohdat sen).<br /><br /> Klikkaamalla Hyv�ksyn hyv�ksyt n�m� ehdot.';



$lang['Agree_under_13'] = 'Hyv�ksyn ehdot ja olen <b>alle</b> 13 vuotias';

$lang['Agree_over_13'] = 'Hyv�ksyn ehdot ja olen <b>yli</b> tai <b>tasan</b> 13 vuotias';

$lang['Agree_not'] = 'En hyv�ksy ehtoja';



$lang['Wrong_activation'] = 'Antamasi aktivointiavain ei t�sm�� tietokantaan tallennetun kanssa';

$lang['Send_password'] = 'L�het� minulle uusi salasana'; 

$lang['Password_updated'] = 'Uusi salasana on luotu, tarkista s�hk�postistasi lis�ohjeet';

$lang['No_email_match'] = 'Antamasi s�hk�postiosoite ei t�sm�� k�ytt�j�tunnuksen tiedoissa annettuun';

$lang['New_password_activation'] = 'Uuden salasanan aktivointi';

$lang['Password_activated'] = 'K�ytt�j�tunnuksesi on aktivoitu uudelleen. Kirjaudu sis��n k�ytt�en uutta salasanaa joka l�hetettiin s�hk�postiisi';



$lang['Send_email_msg'] = 'L�het� s�hk�postia';

$lang['No_user_specified'] = 'K�ytt�j�� ei ole m��ritelty';

$lang['User_prevent_email'] = 'T�m� k�ytt�j� ei halua vastaanottaa s�hk�postia. Yrit� l�hett�� yksityinen viesti';

$lang['User_not_exist'] = 'K�ytt�j�tunnusta ei ole olemassa';

$lang['CC_email'] = 'L�het� kopio s�hk�postista itsellesi';

$lang['Email_message_desc'] = 'T�m� viesti l�hetet��n pelkk�n� tekstin�, �l� k�yt� HTML tai BBCode koodeja. Paluuosoitteeksi t�lle viestille asetetaan s�hk�postiosoitteesi.';

$lang['Flood_email_limit'] = 'Et voi l�hett�� uutta s�hk�postia nyt, yrit� my�hemmin uudelleen';

$lang['Recipient'] = 'Vastaanottaja';

$lang['Email_sent'] = 'S�hk�posti on l�hetetty';

$lang['Send_email'] = 'L�het� s�hk�posti';

$lang['Empty_subject_email'] = 'Sinun t�ytyy antaa otsikko s�hk�postille';

$lang['Empty_message_email'] = 'Sinun t�ytyy kirjoittaa viesti s�hk�postiin';





//

// Memberslist

//

$lang['Select_sort_method'] = 'Valitse j�rjestys';

$lang['Sort'] = 'J�rjest�';

$lang['Sort_Top_Ten'] = 'Top Ten kirjoittajat';

$lang['Sort_Joined'] = 'Liittymisp�iv�';

$lang['Sort_Username'] = 'K�ytt�j�tunnus';

$lang['Sort_Location'] = 'Paikkakunta';

$lang['Sort_Posts'] = 'Viestej� yhteens�';

$lang['Sort_Email'] = 'S�hk�posti';

$lang['Sort_Website'] = 'Kotisivu';

$lang['Sort_Ascending'] = 'Laskeva';

$lang['Sort_Descending'] = 'Nouseva';

$lang['Order'] = 'Lajittelu';





//

// Group control panel

//

$lang['Group_Control_Panel'] = 'Ryhm�n ohjauspaneeli';

$lang['Group_member_details'] = 'Ryhm�n j�sentiedot';

$lang['Group_member_join'] = 'Liity ryhm��n';



$lang['Group_Information'] = 'Ryhm�n tiedot';

$lang['Group_name'] = 'Ryhm�n nimi';

$lang['Group_description'] = 'Ryhm�n kuvaus';

$lang['Group_membership'] = 'Ryhm�n j�senyys';

$lang['Group_Members'] = 'Ryhm�n j�senet';

$lang['Group_Moderator'] = 'Ryhm�n moderaattori';

$lang['Pending_members'] = 'Odottavat j�senet';



$lang['Group_type'] = 'Ryhm�n tyyppi';

$lang['Group_open'] = 'Avoin ryhm�';

$lang['Group_closed'] = 'Suljettu ryhm�';

$lang['Group_hidden'] = 'Piilotettu ryhm�';



$lang['Current_memberships'] = 'Nykyiset j�senyydet';

$lang['Non_member_groups'] = 'Ryhm�t joissa ei j�senen�';

$lang['Memberships_pending'] = 'J�senyys haussa';



$lang['No_groups_exist'] = 'Ryhmi� ei ole olemassa';

$lang['Group_not_exist'] = 'Ryhm�� ei ole olemassa';



$lang['Join_group'] = 'Liity ryhm��n';

$lang['No_group_members'] = 'T�ss� ryhm�ss� ei ole j�seni�';

$lang['Group_hidden_members'] = 'T�m� ryhm� on piilotettu, et voi katsoa sen tietoja';

$lang['No_pending_group_members'] = 'T�ll� ryhm�ll� ei ole j�seni� odottamassa';

$lang["Group_joined"] = 'Hakemuksesi ryhm��n on j�tetty<br />Ryhm�n moderaattori ilmoittaa sinulle kun j�senyytesi on hyv�ksytty';

$lang['Group_request'] = 'Ryhm��n on tehty j�seneksi liittymispyynt�';

$lang['Group_approved'] = 'Hakemuksesi on hyv�ksytty';

$lang['Group_added'] = 'Sinut on lis�tty t�h�n k�ytt�j�ryhm��n'; 

$lang['Already_member_group'] = 'Olet jo j�sen t�ss� k�ytt�j�ryhm�ss�';

$lang['User_is_member_group'] = 'K�ytt�j� on jo t�m�n ryhm�n j�sen';

$lang['Group_type_updated'] = 'Ryhm�n tyypin p�ivitys suoritettu';



$lang['Could_not_add_user'] = 'Valitsemaasi k�ytt�j�� ei ole olemassa';

$lang['Could_not_anon_user'] = 'Anonyymi k�ytt�j� ei voi olla ryhm�n j�sen';



$lang['Confirm_unsub'] = 'Oletko varma, ett� haluat poistua ryhm�st�?';

$lang['Confirm_unsub_pending'] = 'J�senyytt�si ryhm��n ei ole viel� hyv�ksytty, Oletko varma, ett� haluat perua j�senyyden?';



$lang['Unsub_success'] = 'J�senyytesi t�h�n ryhm��n on poistettu.';



$lang['Approve_selected'] = 'Hyv�ksy valitut';

$lang['Deny_selected'] = 'Hylk�� valitut';

$lang['Not_logged_in'] = 'Sinun t�ytyy kirjautua sis��n voidaksesi liitty� ryhm��n.';

$lang['Remove_selected'] = 'Poista valitut';

$lang['Add_member'] = 'Lis�� j�sen';

$lang['Not_group_moderator'] = 'Et ole t�m�n ryhm�n moderaattori joten et voi suorittaa t�t� toimenpidett�.';



$lang['Login_to_join'] = 'Kirjaudu sis��n liitty�ksesi ryhm��n tai yll�pit��ksesi ryhm�n j�senyystietoja';

$lang['This_open_group'] = 'T�m� on avoin ryhm�, klikkaa hakeaksesi j�senyytt�';

$lang['This_closed_group'] = 'T�m� on suljettu ryhm�, lis�� j�seni� ei hyv�ksyt�';

$lang['This_hidden_group'] = 'T�m� on piilotettu ryhm�, automaattinen k�ytt�jien lis�ys ei ole sallittua';

$lang['Member_this_group'] = 'Olet t�m�n ryhm�n j�sen';

$lang['Pending_this_group'] = 'J�senyytesi t�h�n ryhm��n on k�sittelyss�';

$lang['Are_group_moderator'] = 'Olet ryhm�n moderaattori';

$lang['None'] = 'Ei kukaan';



$lang['Subscribe'] = 'Liity';

$lang['Unsubscribe'] = 'Eroa';

$lang['View_Information'] = 'N�yt� tiedot';





//

// Search

//

$lang['Search_query'] = 'Haku ';

$lang['Search_options'] = 'Haun vaihtoehdot';



$lang['Search_keywords'] = 'Etsi avainsanoja';

$lang['Search_keywords_explain'] = 'Voit k�ytt�� <u>AND</u> m��ritt�m��n sanat joiden t�ytyy l�yty� haussa, <u>OR</u> sanoille jotka voivat olla vaihtoehtoisesti haussa ja <u>NOT</u> m��ritt�m��n sanat, joita ei saa olla haussa. K�yt� * jokerimerkkin�';

$lang['Search_author'] = 'Etsi kirjoittajaa';

$lang['Search_author_explain'] = 'K�yt� * jokerimerkkin�';



$lang['Search_for_any'] = 'Hae mill� tahansa ehdolla tai k�yt� annettua hakujonoa';

$lang['Search_for_all'] = 'Etsi kaikilla annetuilla ehdoilla';

$lang['Search_title_msg'] = 'Etsi viestin aiheesta ja tekstist�';

$lang['Search_msg_only'] = 'Etsi vain viestin tekstist�';



$lang['Return_first'] = 'N�yt� ensimm�iset'; // followed by xxx characters in a select box

$lang['characters_posts'] = 'merkki� viestist�';



$lang['Search_previous'] = 'Hae edelliset'; // followed by days, weeks, months, year, all in a select box



$lang['Sort_by'] = 'J�rjest�';

$lang['Sort_Time'] = 'Viestin aika';

$lang['Sort_Post_Subject'] = 'Viestin otsikko';

$lang['Sort_Topic_Title'] = 'Aiheen otsikko';

$lang['Sort_Author'] = 'Kirjoittaja';

$lang['Sort_Forum'] = 'Foorumi';



$lang['Display_results'] = 'N�yt� tulokset';

$lang['All_available'] = 'Kaikki mahdolliset';

$lang['No_searchable_forums'] = 'Sinulle ei ole lupaa etsi� foorumeista t�ll� sivustolla';



$lang['No_search_match'] = 'Yksik��n aihe tai viesti ei vastannut hakuehtoja';

$lang['Found_search_match'] = 'Haussa l�ytyi %d osuma'; // eg. Search found 1 match

$lang['Found_search_matches'] = 'Haussa l�ytyi %d osumaa'; // eg. Search found 24 matches



$lang['Close_window'] = 'Sulje ikkuna';





//

// Auth related entries

//

// Note the %s will be replaced with one of the following 'user' arrays

$lang['Sorry_auth_announce'] = 'Valitettavasti vain %s voivat tehd� ilmoituksia t�ss� foorumissa';

$lang['Sorry_auth_sticky'] = 'Valitettavasti vain %s voivat tehd� tiedotuksia t�ss� foorumissa'; 

$lang['Sorry_auth_read'] = 'Valitettavasti vain %s voivat lukea aiheita t�ss� foorumissa'; 

$lang['Sorry_auth_post'] = 'Valitettavasti vain %s voivat luoda aiheita t�ss� foorumissa'; 

$lang['Sorry_auth_reply'] = 'Valitettavasti vain %s voivat kirjoittaa vastauksia t�ss� foorumissa'; 

$lang['Sorry_auth_edit'] = 'Valitettavasti vain %s voivat muokata viestej� t�ss� foorumissa'; 

$lang['Sorry_auth_delete'] = 'Valitettavasti vain %s voivat poistaa viestej� t�ss� foorumissa'; 

$lang['Sorry_auth_vote'] = 'Valitettavasti vain %s voivat ��nest�� t�ss� foorumissa'; 



// These replace the %s in the above strings

$lang['Auth_Anonymous_Users'] = '<b>rekister�itym�tt�m�t k�ytt�j�t</b>';

$lang['Auth_Registered_Users'] = '<b>rekister�idyt k�ytt�j�t</b>';

$lang['Auth_Users_granted_access'] = '<b>k�ytt�j�t, joille on erikoisoikeuksia</b>';

$lang['Auth_Moderators'] = '<b>moderaattorit</b>';

$lang['Auth_Administrators'] = '<b>yll�pit�j�t</b>';



$lang['Not_Moderator'] = 'Et ole t�m�n foorumin moderaattori';

$lang['Not_Authorised'] = 'Sinulla ei ole lupaa';



$lang['You_been_banned'] = 'Sinulla on porttikielto t�h�n foorumiin<br />Ole hyv� ja ota yhteytt� webmasteriin tai yll�pitoon jos haluat lis�tietoja';





//

// Viewonline

//

$lang['Reg_users_zero_online'] = 'T�ll� hetkell� on 0 rekister�ity� k�ytt�j�� ja '; // There ae 5 Registered and

$lang['Reg_user_online'] = 'T�ll� hetkell� on %d rekister�ity k�ytt�j� ja '; // There ae 5 Registered and

$lang['Reg_users_online'] = 'T�ll� hetkell� on %d rekister�ity� k�ytt�j�� ja '; // There ae 5 Registered and

$lang['Hidden_users_zero_online'] = '0 piilotettua k�ytt�j�� online'; // 6 Hidden users online

$lang['Hidden_user_online'] = '%d piilotettu k�ytt�j� online'; // 6 Hidden users online

$lang['Hidden_users_online'] = '%d piilotettua k�ytt�j�� online'; // 6 Hidden users online

$lang['Guest_users_online'] = 'T�ll� hetkell� on  %d vierasta online'; // There are 10 Guest users online

$lang['Guest_users_zero_online'] = 'T�ll� hetkell� on 0 vierailijaa online'; // There are 10 Guest users online

$lang['Guest_user_online'] = 'T�ll� hetkell� on  %d vieras online'; // There is 1 Guest user online

$lang['No_users_browsing'] = 'T�ll� hetkell� foorumeilla ei ole k�ytt�ji�';



$lang['Online_explain'] = 'Tieto perustuu viimeisen viiden minuutin aikana olleisiin aktiiveihin k�ytt�jiin';



$lang['Forum_Location'] = 'Sijainti foorumissa';

$lang['Last_updated'] = 'Viimeksi p�ivitetty';



$lang['Forum_index'] = 'Foorumin p��valikko';

$lang['Logging_on'] = 'Kirjautuu';

$lang['Posting_message'] = 'L�hett�� viesti�';

$lang['Searching_forums'] = 'Etsii foorumeita';

$lang['Viewing_profile'] = 'Katsoo  k�ytt�j�tietoja';

$lang['Viewing_online'] = 'Katsoo keit� on online';

$lang['Viewing_member_list'] = 'Katsoo k�ytt�j�listaa';

$lang['Viewing_priv_msgs'] = 'Katsoo yksityisi� viestej�';

$lang['Viewing_FAQ'] = 'Katsoo ohjeita';





//

// Moderator Control Panel

//

$lang['Mod_CP'] = 'Moderaattorin ohjauspaneeli';

$lang['Mod_CP_explain'] = 'K�ytt�m�ll� alla olevaa lomaketta voit suorittaa useita moderointitoimia t�ss� foorumissa. Voit lukita, vapauttaa, siirt�� tai poistaa mit� tahansa aiheita.';



$lang['Select'] = 'Valitse';

$lang['Delete'] = 'Poista';

$lang['Move'] = 'Siirr�';

$lang['Lock'] = 'Lukitse';

$lang['Unlock'] = 'Vapauta';



$lang['Topics_Removed'] = 'Valitut aiheet on onnistuneesti poistettu tietokannasta.';

$lang['Topics_Locked'] = 'Valitut aiheet on lukittu';

$lang['Topics_Moved'] = 'Valitut aiheet on siirretty';

$lang['Topics_Unlocked'] = 'Valitut aiheet on vapautettu';

$lang['No_Topics_Moved'] = 'Aiheita ei siirretty';



$lang['Confirm_delete_topic'] = 'Oletko varma, ett� haluat poistaa valitun/valitut aiheen/aiheet?';

$lang['Confirm_lock_topic'] = 'Oletko varma, ett� haluat lukita valitun/valitut aiheen/aiheet?';

$lang['Confirm_unlock_topic'] = 'Oletko varma, ett� haluat vapauttaa valitun/valitut aiheen/aiheet?';

$lang['Confirm_move_topic'] = 'Oletko varma, ett� haluat siirt�� valitun/valitut aiheen/aiheet?';



$lang['Move_to_forum'] = 'Siirr� foorumiin';

$lang['Leave_shadow_topic'] = 'J�t� varjo-otsikko vanhaan foorumiin.';



$lang['Split_Topic'] = 'Aiheen jakamisen hallintapaneeli';

$lang['Split_Topic_explain'] = 'K�ytt�m�ll� alla olevaa lomaketta voit jakaa aiheen kahtia, joko valitsemalla viestit erikseen tai jakamalla valitusta kohdasta';

$lang['Split_title'] = 'Uuden aiheen otsikko';

$lang['Split_forum'] = 'Uuden aiheen foorumi';

$lang['Split_posts'] = 'Jaa valitut viestit';

$lang['Split_after'] = 'Valitun viestin jako';

$lang['Topic_split'] = 'Valittu aihe on onnistuneesti jaettu';



$lang['Too_many_error'] = 'Olet valinnut liikaa viestej�. Voit valita vain yhden viestin, josta aihe jaetaan!';



$lang['None_selected'] = 'Et ole valinnut yht��n aihetta. Ole hyv� ja valitse ainakin yksi.';

$lang['New_forum'] = 'Uusi foorumi';



$lang['This_posts_IP'] = 'T�m�n viestin IP';

$lang['Other_IP_this_user'] = 'Muut IP\'t joista k�ytt�j� on kirjoittanut';

$lang['Users_this_IP'] = 'K�ytt�j�t, jotka kirjoittavat t�st� IP:st�';

$lang['IP_info'] = 'IP Informaatio';

$lang['Lookup_IP'] = 'Tarkista IP';





//

// Timezones ... for display on each page

//

$lang['All_times'] = 'Kaikki ajat ovat %s'; // eg. All times are GMT - 12 Hours (times from next block)



$lang['-12'] = 'GMT - 12 tuntia';

$lang['-11'] = 'GMT - 11 tuntia';

$lang['-10'] = 'GMT - 10 tuntia';

$lang['-9'] = 'GMT - 9 tuntia';

$lang['-8'] = 'GMT - 8 tuntia';

$lang['-7'] = 'GMT - 7 tuntia';

$lang['-6'] = 'GMT - 6 tuntia';

$lang['-5'] = 'GMT - 5 tuntia';

$lang['-4'] = 'GMT - 4 tuntia';

$lang['-3.5'] = 'GMT - 3.5 tuntia';

$lang['-3'] = 'GMT - 3 tuntia';

$lang['-2'] = 'GMT - 2 tuntia';

$lang['-1'] = 'GMT - 1 tuntia';

$lang['0'] = 'GMT';

$lang['1'] = 'GMT + 1 tunti';

$lang['2'] = 'GMT + 2 tuntia';

$lang['3'] = 'GMT + 3 tuntia';

$lang['3.5'] = 'GMT + 3.5 tuntia';

$lang['4'] = 'GMT + 4 tuntia';

$lang['4.5'] = 'GMT + 4.5 tuntia';

$lang['5'] = 'GMT + 5 tuntia';

$lang['5.5'] = 'GMT + 5.5 tuntia';

$lang['6'] = 'GMT + 6 tuntia';

$lang['6.5'] = 'GMT + 6.5 tuntia';

$lang['7'] = 'GMT + 7 tuntia';

$lang['8'] = 'GMT + 8 tuntia';

$lang['9'] = 'GMT + 9 tuntia';

$lang['9.5'] = 'GMT + 10 tuntia';

$lang['10'] = 'GMT + 11 tuntia';

$lang['11'] = 'GMT + 11 tuntia';

$lang['12'] = 'GMT + 12 tuntia';



// These are displayed in the timezone select box

$lang['tz']['-12'] = 'GMT -12:00 tuntia';

$lang['tz']['-11'] = 'GMT -11:00 tuntia';

$lang['tz']['-10'] = 'GMT -10:00 tuntia';

$lang['tz']['-9'] = 'GMT -9:00 tuntia';

$lang['tz']['-8'] = 'GMT -8:00 tuntia';

$lang['tz']['-7'] = 'GMT -7:00 tuntia';

$lang['tz']['-6'] = 'GMT -6:00 tuntia';

$lang['tz']['-5'] = 'GMT -5:00 tuntia';

$lang['tz']['-4'] = 'GMT -4:00 tuntia';

$lang['tz']['-3.5'] = 'GMT -3:30 tuntia';

$lang['tz']['-3'] = 'GMT -3:00 tuntia';

$lang['tz']['-2'] = 'GMT -2:00 tuntia';

$lang['tz']['-1'] = 'GMT -1:00 tuntia';

$lang['tz']['0'] = 'GMT';

$lang['tz']['1'] = 'GMT +1:00 tuntia';

$lang['tz']['2'] = 'GMT +2:00 tuntia';

$lang['tz']['3'] = 'GMT +3:00 tuntia';

$lang['tz']['3.5'] = 'GMT +3:30 tuntia';

$lang['tz']['4'] = 'GMT +4:00 tuntia';

$lang['tz']['4.5'] = 'GMT +4:30 tuntia';

$lang['tz']['5'] = 'GMT +5:00 tuntia';

$lang['tz']['5.5'] = 'GMT +5:30 tuntia';

$lang['tz']['6'] = 'GMT +6:00 tuntia';

$lang['tz']['6.5'] = 'GMT +6:30 tuntia';

$lang['tz']['7'] = 'GMT +7:00 tuntia';

$lang['tz']['8'] = 'GMT +8:00 tuntia';

$lang['tz']['9'] = 'GMT +9:00 tuntia';

$lang['tz']['9.5'] = 'GMT +9:30 tuntia';

$lang['tz']['10'] = 'GMT +10:00 tuntiak';

$lang['tz']['11'] = 'GMT +11:00 tuntia';

$lang['tz']['12'] = 'GMT +12:00 tuntia';



$lang['datetime']['Sunday'] = 'Sunnuntai';

$lang['datetime']['Monday'] = 'Maanantai';

$lang['datetime']['Tuesday'] = 'Tiistai';

$lang['datetime']['Wednesday'] = 'Keskiviikko';

$lang['datetime']['Thursday'] = 'Torstai';

$lang['datetime']['Friday'] = 'Perjantai';

$lang['datetime']['Saturday'] = 'Lauantai';

$lang['datetime']['Sun'] = 'Sun';

$lang['datetime']['Mon'] = 'Maa';

$lang['datetime']['Tue'] = 'Tii';

$lang['datetime']['Wed'] = 'Kes';

$lang['datetime']['Thu'] = 'Tor';

$lang['datetime']['Fri'] = 'Per';

$lang['datetime']['Sat'] = 'Lau';

$lang['datetime']['January'] = 'Tammikuu';

$lang['datetime']['February'] = 'Helmikuu';

$lang['datetime']['March'] = 'Maaliskuu';

$lang['datetime']['April'] = 'Huhtikuu';

$lang['datetime']['May'] = 'Toukokuu';

$lang['datetime']['June'] = 'Kes�kuu';

$lang['datetime']['July'] = 'Hein�kuu';

$lang['datetime']['August'] = 'Elokuu';

$lang['datetime']['September'] = 'Syyskuu';

$lang['datetime']['October'] = 'Lokakuu';

$lang['datetime']['November'] = 'Marraskuu';

$lang['datetime']['December'] = 'Joulukuu';

$lang['datetime']['Jan'] = 'Tam';

$lang['datetime']['Feb'] = 'Hel';

$lang['datetime']['Mar'] = 'Maa';

$lang['datetime']['Apr'] = 'Huh';

$lang['datetime']['May'] = 'Tou';

$lang['datetime']['Jun'] = 'Kes';

$lang['datetime']['Jul'] = 'Hei';

$lang['datetime']['Aug'] = 'Elo';

$lang['datetime']['Sep'] = 'Syy';

$lang['datetime']['Oct'] = 'Lok';

$lang['datetime']['Nov'] = 'Nov';

$lang['datetime']['Dec'] = 'Jou';



//

// Errors (not related to a

// specific failure on a page)

//

$lang['Information'] = 'Informaatio';

$lang['Critical_Information'] = 'T�rke�� informaatiota';



$lang['General_Error'] = 'Yleinen virhe';

$lang['Critical_Error'] = 'Kriittinen virhe';

$lang['An_error_occured'] = 'Tapahtui virhe';

$lang['A_critical_error'] = 'Tapahtui kriittinen virhe';



//

// That's all Folks!

// -------------------------------------------------



?>