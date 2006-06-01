<?php
/***************************************************************************
 *                            lang_main.php [Czech]
 *                            ---------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : azu@atmplus.cz
 *     www                  : http://phpbb.atmplus.cz
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

$lang['ENCODING'] = "Windows-1250";
$lang['DIRECTION'] = "LTR";
$lang['LEFT'] = "LEFT";
$lang['RIGHT'] = "RIGHT";
//$lang['DATE_FORMAT'] =  "d. m. Y"; // This should be changed to the default date format for your language, php date() format
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
$lang['Forum'] = "F�rum";
$lang['Category'] = "Kategorie";
$lang['Topic'] = "T�ma";
$lang['Topics'] = "T�mata";
$lang['Replies'] = "Odpov�di";
$lang['Views'] = "Shl�dnuto";
$lang['Post'] = "P��sp�vek";
$lang['Posts'] = "P��sp�vky";
$lang['Posted'] = "Zaslal";
$lang['Username'] = "U�ivatel";
$lang['Password'] = "Heslo";
$lang['Email'] = "E-mail";
$lang['Poster'] = "Odes�latel";
$lang['Author'] = "Autor";
$lang['Time'] = "�as";
$lang['Hours'] = "Hodin";
$lang['Message'] = "Zpr�va";

$lang['1_Day'] = "1 den";
$lang['7_Days'] = "1 t�den";
$lang['2_Weeks'] = "2 t�dny";
$lang['1_Month'] = "1 m�s�c";
$lang['3_Months'] = "3 m�s�ce";
$lang['6_Months'] = "6 m�s�c�";
$lang['1_Year'] = "1 rok";

$lang['Go'] = "jdi";
$lang['Jump_to'] = "P�ejdi na";
$lang['Submit'] = "Odeslat";
$lang['Reset'] = "P�vodn� hodnoty";
$lang['Cancel'] = "Storno";
$lang['Preview'] = "N�hled";
$lang['Confirm'] = "Potvrdit";
$lang['Spellcheck'] = "Kontrola pravopisu";
$lang['Yes'] = "Ano";
$lang['No'] = "Ne";
$lang['Enabled'] = "Povoleno";
$lang['Disabled'] = "Zak�z�no";
$lang['Error'] = "Chyba";

$lang['Next'] = "Dal��";
$lang['Previous'] = "P�edchoz�";
$lang['Goto_page'] = "Jdi na str�nku";
$lang['Joined'] = "Zalo�en";
$lang['IP_Address'] = "IP Adresa";

$lang['Select_forum'] = "Zvolte f�rum";
$lang['View_latest_post'] = "Zobrazit posledn� p��sp�vek";
$lang['View_newest_post'] = "Zobraz nejnov�j�� p��sp�vky";
$lang['Page_of'] = "Strana <b>%d</b> z <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ";
$lang['AIM'] = "AOL Instant Messenger";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "Obsah f�ra %s";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "odeslat nov� t�ma";
$lang['Reply_to_topic'] = "Odpov�d�t na t�ma";
$lang['Reply_with_quote'] = "Odpov�d�t s cit�tem";

$lang['Click_return_topic'] = "Klikn�te %szde%s pro n�vrat do seznamu t�mat"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Klikn�te %szde%s pro opakov�n� volby";
$lang['Click_return_forum'] = "Klikn�te %szde%s pro n�vrat do na obsah f�ra";
$lang['Click_view_message'] = "Klikn�te %szde%s pro zobrazen� va�� zpr�vy";
$lang['Click_return_modcp'] = "Klikn�te %szde%s pro n�vrat do moder�torsk�ho ovl�dac�ho panelu";
$lang['Click_return_group'] = "Klikn�te %szde%s pro n�vrat do informac� o skupin�ch";

$lang['Admin_panel'] = "Administrace f�ra";

$lang['Board_disable'] = "Promi�te, ale toto f�rum je moment�ln� nedostupn�, zkuste opakovat volbu poz�dji";


//
// Global Header strings
//
$lang['Registered_users'] = "Registrovan� u�ivatel�:";
$lang['Browsing_forum'] = "U�ivatel� prohl�ej�c� toto f�rum:";
$lang['Online_users_zero_total'] = "Celkem je zde p��tomno <b>0</b> u�ivatel�  : ";
$lang['Online_users_total'] = "Celkem je zde p��tomno <b>%d</b> u�ivatel� : ";
$lang['Online_user_total'] = "Celkem je zde p��tomen  <b>%d</b> u�ivatel : ";
$lang['Reg_users_zero_total'] = "0 registrovan�ch, ";
$lang['Reg_users_total'] = "%d registrovan�ch, ";
$lang['Reg_user_total'] = "%d registrovan�, ";
$lang['Hidden_users_zero_total'] = "0 skryt�ch a ";
$lang['Hidden_user_total'] = "%d skryt� a ";
$lang['Hidden_users_total'] = "%d skryt�ch a ";
$lang['Guest_users_zero_total'] = "0 anonymn�ch";
$lang['Guest_users_total'] = "%d Anonymn�ch";
$lang['Guest_user_total'] = "%d Anonymn�";
$lang['Record_online_users'] = "Nejv�ce zde bylo sou�asn� p��tomno <b>%s</b> u�ivatel� dne %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministr�to�i%s";
$lang['Mod_online_color'] = "%sModer�to�i%s";

$lang['You_last_visit'] = "Naposledy jste zde byl %s"; // %s replaced by date/time
$lang['Current_time'] = "Pr�v� je %s"; // %s replaced by time

$lang['Search_new'] = "Zobrazit nov� p��sp�vky od posledn� n�v�t�vy";
$lang['Search_your_posts'] = "Zobrazit va�e p��sp�vky";
$lang['Search_unanswered'] = "Zobrazit p��sp�vky bez odpov�d�";

$lang['Register'] = "Registrace";
$lang['Profile'] = "Nastaven�";
$lang['Edit_profile'] = "Zm�na nastaven�";
$lang['Search'] = "Hledat";
$lang['Memberlist'] = "Seznam u�ivatel�";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "Pr�vodce zna�kami";
$lang['Usergroups'] = "U�ivatelsk� skupiny";
$lang['Last_Post'] = "Posledn� p��sp�vek";
$lang['Moderator'] = "Moder�tor";
$lang['Moderators'] = "Moder�to�i";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "U�ivatel� zaslali celkem <b>0</b> p��sp�vk�"; // Number of posts
$lang['Posted_articles_total'] = "U�ivatel� zaslali celkem <b>%d</b> p��sp�vk�"; // Number of posts
$lang['Posted_article_total'] = "U�ivatel� zaslali celkem <b>%d</b> p��sp�vek"; // Number of posts
$lang['Registered_users_zero_total'] = "Je zde <b>0</b> registrovan�ch u�ivatel�"; // # registered users
$lang['Registered_users_total'] = "Je zde <b>%d</b> registrovan�ch u�ivatel�"; // # registered users
$lang['Registered_user_total'] = "Je zde <b>%d</b> registrovan� u�ivatel"; // # registered users
$lang['Newest_user'] = "Nejnov�j��m registrovan�m u�ivatelem je <b>%s%s%s</b>"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "��dn� nov� p��sp�vky od va�� posledn� n�v�t�vy";
$lang['No_new_posts'] = "��dn� nov� p��sp�vky";
$lang['New_posts'] = "Nov� p��sp�vky";
$lang['New_post'] = "Nov� p��sp�vek";
$lang['No_new_posts_hot'] = "��dn� nov� p��sp�vky [ obl�ben� ]";
$lang['New_posts_hot'] = "Nov� p��sp�vky [ obl�ben� ]";
$lang['No_new_posts_locked'] = "��dn� nov� p��sp�vky [ zamknuto ]";
$lang['New_posts_locked'] = "Nov� p��sp�vky [ zamknuto ]";
$lang['Forum_is_locked'] = "F�rum je zamknuto";


//
// Login
//
$lang['Enter_password'] = "Zadejte pros�m va�e u�ivatelsk� jm�no a heslo";
$lang['Login'] = "P�ihl�en�";
$lang['Logout'] = "Odhl�en�";

$lang['Forgotten_password'] = "Zapom�li jste svoje heslo ?";

$lang['Log_me_in'] = "P�ihl�sit automaticky p�i p��t� n�v�t�v�";

$lang['Error_login'] = "Bylo zad�no neplatn� u�ivatelsk� jm�no nebo heslo";


//
// Index page
//
$lang['Index'] = "F�rum";
$lang['No_Posts'] = "��dn� p��sp�vky";
$lang['No_forums'] = "��dn� f�ra";

$lang['Private_Message'] = "Soukrom� zpr�va";
$lang['Private_Messages'] = "Soukrom� zpr�vy";
$lang['Who_is_Online'] = "Kdo je p��tomen";

$lang['Mark_all_forums'] = "Ozna�it v�echna f�ra jako p�e�ten�";
$lang['Forums_marked_read'] = "V�echna f�ra byla ozna�ena jako p�e�ten�";


//
// Viewforum
//
$lang['View_forum'] = "Zobrazit f�rum";

$lang['Forum_not_exist'] = "Zvolen� f�rum neexistuje";
$lang['Reached_on_error'] = "Do�lo k chyb� na t�to str�nce";

$lang['Display_topics'] = "Zobrazit t�mata za p�edchoz�";
$lang['All_Topics'] = "V�echna t�mata";

$lang['Topic_Announcement'] = "<b>Ozn�men�:</b>";
$lang['Topic_Sticky'] = "<b>D�le�it�:</b>";
$lang['Topic_Moved'] = "<b>P�esunout:</b>";
$lang['Topic_Poll'] = "<b>[ Hlasov�n� ]</b>";

$lang['Mark_all_topics'] = "Ozna�it v�echna t�mata jako p�e�ten�";
$lang['Topics_marked_read'] = "T�mata tohoto f�ra byla ozna�ena jako p�e�ten�";

$lang['Rules_post_can'] = "<b>M��ete</b> odes�lat nov� t�ma do tohoto f�ra";
$lang['Rules_post_cannot'] = "<b>Nem��ete</b> odes�lat nov� t�ma do tohoto f�ra";
$lang['Rules_reply_can'] = "<b>M��ete</b> odpov�dat na t�mata v tomto f�ru";
$lang['Rules_reply_cannot'] = "<b>Nem��ete</b> odpov�dat na t�mata v tomto f�ru";
$lang['Rules_edit_can'] = "<b>M��ete</b> upravovat sv� p��sp�vky v tomto f�ru";
$lang['Rules_edit_cannot'] = "<b>Nem��ete</b> upravovat sv� p��sp�vky v tomto f�ru";
$lang['Rules_delete_can'] = "<b>M��ete</b> mazat sv� p��sp�vky v tomto f�ru";
$lang['Rules_delete_cannot'] = "<b>Nem��ete</b> mazat sv� p��sp�vky v tomto f�ru";
$lang['Rules_vote_can'] = "<b>M��ete</b> hlasovat v tomto f�ru";
$lang['Rules_vote_cannot'] = "<b>Nem��ete</b> hlasovat v tomto f�ru";
$lang['Rules_moderate'] = "<b>M��ete</b> %smoderovat toto f�rum%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "Toto f�rum neobsahuje ��dn� t�mata<br />Klikn�te na odkaz <b>Nov� t�ma</b> pro p�id�n� nov�ho t�matu.";


//
// Viewtopic
//
$lang['View_topic'] = "Zobrazit t�ma";

$lang['Guest'] = 'Anonymn�';
$lang['Post_subject'] = "P�edm�t";
$lang['View_next_topic'] = "Zobrazit n�sleduj�c� t�ma";
$lang['View_previous_topic'] = "Zobrazit p�edchoz� t�ma";
$lang['Submit_vote'] = "Odeslat hlas";
$lang['View_results'] = "Zobrazit v�sledek";

$lang['No_newer_topics'] = "V tomto f�ru nejsou ��dn� nov�j�� t�mata";
$lang['No_older_topics'] = "V tomto f�ru nejsou ��dn� star�� t�mata";
$lang['Topic_post_not_exist'] = "T�ma nebo p��sp�vek kter� po�adujete nebyl nalezen";
$lang['No_posts_topic'] = "Pro toto t�ma neexistuj� ��dn� p��sp�vky";

$lang['Display_posts'] = "Zobrazit p��sp�vky z p�edchoz�ch";
$lang['All_Posts'] = "V�echny p��sp�vky";
$lang['Newest_First'] = "Nejd��ve nejnov�j��";
$lang['Oldest_First'] = "Nejd��ve nejstar��";

$lang['Back_to_top'] = "N�vrat nahoru";

$lang['Read_profile'] = "Zobrazit informace o autorovi";
$lang['Send_email'] = "Odeslat e-mail autorovi";
$lang['Visit_website'] = "Zobrazit autorovi WWW str�nky";
$lang['ICQ_status'] = "ICQ stav";
$lang['Edit_delete_post'] = "Upravit/Odstranit tento p��sp�vek";
$lang['View_IP'] = "Zobrazit IP adresu odes�latele";
$lang['Delete_post'] = "Odstranit tento p��sp�vek";

$lang['wrote'] = "napsal"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "citace"; // comes before bbcode quote output.
$lang['Code'] = "k�d"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Naposledy upravil %s dne %s, celkov� upraveno %d kr�t"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Naposledy upravil %s dne %s, celkov� upraveno %d kr�t"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Zamknout toto t�ma";
$lang['Unlock_topic'] = "Odemknout toto t�ma";
$lang['Move_topic'] = "P�esunout toto t�ma";
$lang['Delete_topic'] = "Odstranit toto t�ma";
$lang['Split_topic'] = "Rozd�lit toto t�ma";

$lang['Stop_watching_topic'] = "Ukon�it sledov�n� tohoto t�matu";
$lang['Start_watching_topic'] = "Sledovat odpov�di na toto t�ma";
$lang['No_longer_watching'] = "P�estal(a) jste sledovat toto t�ma";
$lang['You_are_watching'] = "Za�al(a) jste sledovat toto t�ma";

$lang['Total_votes'] = "Celkem hlas�";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "T�lo zpr�vy";
$lang['Topic_review'] = "P�ehled t�matu";

$lang['No_post_mode'] = "Nebyl zvolen typ odesl�n�"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Odeslat nov� t�ma";
$lang['Post_a_reply'] = "Odeslat odpov��";
$lang['Post_topic_as'] = "Odeslat t�ma jako";
$lang['Edit_Post'] = "Upravit p��sp�vek";
$lang['Options'] = "P�edvolby";

$lang['Post_Announcement'] = "Ozn�men�";
$lang['Post_Sticky'] = "D�le�it�";
$lang['Post_Normal'] = "Norm�ln�";

$lang['Confirm_delete'] = "Opravdu chcete odstranit tento p��sp�vek ?";
$lang['Confirm_delete_poll'] = "Opravdu chcete odstranit toto va�e hlasov�n� ?";

$lang['Flood_Error'] = "Nem��ete odeslat nov� p��sp�vek takto brzy po p�edchoz�m p��sp�vku, chv�li vy�kejte a zkuste to znovu";
$lang['Empty_subject'] = "Mus�te zadat text p�edm�tu";
$lang['Empty_message'] = "Mus�te zadat text p��sp�vku";
$lang['Forum_locked'] = "Toto f�rum je zamknuto, nem��ete zde ps�t ani upravovat p��sp�vky";
$lang['Topic_locked'] = "Toto t�ma je zamknuto bez mo�nosti �pravy p��sp�vk� a psan� odpov�d�";
$lang['No_post_id'] = "Mus�te zvolit p��sp�vek pro �pravu";
$lang['No_topic_id'] = "Mus�te zvolit t�ma na kter� chcete odpov�d�t";
$lang['No_valid_mode'] = "M��ete jen odes�lat, upravovat nebo citovat p��sp�vky, prove�te n�vrat zp�t a zkuste to znovu";
$lang['No_such_post'] = "Takov�to p��sp�vek neexistuje, prove�te n�vrat zp�t a zkuste to znovu";
$lang['Edit_own_posts'] = "Promi�te, ale m��ete upravovat jen sv� p��sp�vky";
$lang['Delete_own_posts'] = "Promi�te, ale m��ete mazat jen sv� p��sp�vky";
$lang['Cannot_delete_replied'] = "Promi�te, ale nem��ete mazat p��sp�vky, na kter� bylo odpov�zeno";
$lang['Cannot_delete_poll'] = "Promi�te, ale nem��ete vymazat aktivn� hlasov�n�";
$lang['Empty_poll_title'] = "Mus�te napsat hlasovac� ot�zku";
$lang['To_few_poll_options'] = "Mus�te napsat alespo� dv� hlasovac� mo�nosti";
$lang['To_many_poll_options'] = "Pokou��te se napsat p��li� mnoho hlasovac�ch mo�nost�";
$lang['Post_has_no_poll'] = "Tento p��sp�vek nem� hlasov�n�";
$lang['Already_voted'] = "V tomto hlasov�n� jste ji� hlasoval(a)";
$lang['No_vote_option'] = "P�i hlasov�n� mus�te zvolit n�kterou z mo�nost�";

$lang['Add_poll'] = "P�idat Hlasov�n�";
$lang['Add_poll_explain'] = "Jestli�e nechcete p�idat mo�nost hlasov�n� k tomuto t�matu, nechte pole pr�zdn�";
$lang['Poll_question'] = "Hlasovac� ot�zka";
$lang['Poll_option'] = "Mo�n� odpov�di";
$lang['Add_option'] = "P�idat odpov��";
$lang['Update'] = "Aktualizovat";
$lang['Delete'] = "Odstranit";
$lang['Poll_for'] = "D�lka trv�n�";
$lang['Days'] = "dn�"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "(zadejte 0 nebo nevypl�ujte pro neomezenou dobu hlasov�n�)";
$lang['Delete_poll'] = "Delete Poll";

$lang['Disable_HTML_post'] = "Zak�zat HTML v tomto p��sp�vku";
$lang['Disable_BBCode_post'] = "Zak�zat zna�ky v tomto p��sp�vku";
$lang['Disable_Smilies_post'] = "Zak�zat Smajl�ky v tomto p��sp�vku";

$lang['HTML_is_ON'] = "HTML: <u>POVOLENO</u>";
$lang['HTML_is_OFF'] = "HTML: <u>VYPNUTO</u>";
$lang['BBCode_is_ON'] = "%sZna�ky%s: <u>POVOLENY</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sZna�ky%s: <u>VYPNUTY</u>";
$lang['Smilies_are_ON'] = "Smajl�ky: <u>POVOLENY</u>";
$lang['Smilies_are_OFF'] = "Smajl�ky: <u>VYPNUTY</u>";

$lang['Attach_signature'] = "P�ipojit podpis (podpis m��ete zm�nit ve va�em nastaven�)";
$lang['Notify'] = "Upozornit mne, p�ijde-li odpov��";
$lang['Delete_post'] = "Odstranit tento p��sp�vek";

$lang['Stored'] = "Va�e zpr�va byla �sp�n� odesl�na";
$lang['Deleted'] = "Va�e zpr�va byla �sp�n� odstran�na";
$lang['Poll_delete'] = "V�s hlas byl �sp�n� odstran�n";
$lang['Vote_cast'] = "V� hlas byl p�ijat";

$lang['Topic_reply_notification'] = "Upozorn�n� na odpov��";

$lang['bbcode_b_help'] = "Tu�n�: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Kurz�va: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Podtr�en�: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Citace: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Zobrazen� k�du: [code]code[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Seznam: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "Uspo��dan� seznam: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Vlo�it obr�zek: [img]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Vlo�it URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Zav�e v�echny otev�en� zna�ky";
$lang['bbcode_s_help'] = "Barva p�sma: [color=red]text[/color]  Typ: m��ete pou��t tak� color=#FF0000";
$lang['bbcode_f_help'] = "Velikost p�sma: [size=x-small]mal� text[/size]";

$lang['Emoticons'] = "Smajl�ky (emotikony)";
$lang['More_emoticons'] = "Zobrazit dal�� smajl�ky (emotikony)";

$lang['Font_color'] = "Barva p�sma";
$lang['color_default'] = "V�choz�";
$lang['color_dark_red'] = "Ka�tanov�";
$lang['color_red'] = "�erven�";
$lang['color_orange'] = "Oran�ov�";
$lang['color_brown'] = "Hn�d�";
$lang['color_yellow'] = "�lut�";
$lang['color_green'] = "Zelen�";
$lang['color_olive'] = "Olivov�";
$lang['color_cyan'] = "Akvamar�nov�";
$lang['color_blue'] = "Modr�";
$lang['color_dark_blue'] = "Tmav� modr�";
$lang['color_indigo'] = "Fialov�";
$lang['color_violet'] = "Fuchsiov�";
$lang['color_white'] = "B�l�";
$lang['color_black'] = "�ern�";

$lang['Font_size'] = "Velikost p�sma";
$lang['font_tiny'] = "Drobn�";
$lang['font_small'] = "Mal�";
$lang['font_normal'] = "V�choz�";
$lang['font_large'] = "Velk�";
$lang['font_huge'] = "Obrovsk�";

$lang['Close_Tags'] = "zav��t zna�ky";
$lang['Styles_tip'] = "Typ: Styl m��ete aplikovat rychleji na ozna�en�m textu";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Soukrom� zpr�vy";

$lang['Login_check_pm'] = "P�ihl�sit, pro kontrolu soukrom�ch zpr�v";
$lang['New_pms'] = "M�te %d nov�ch zpr�vy"; // You have 2 new messages
$lang['New_pm'] = "M�te %d novou zpr�vu"; // You have 1 new message
$lang['No_new_pm'] = "Nem�te nov� zpr�vy";
$lang['Unread_pms'] = "M�te %d nep�e�ten� zpr�vy";
$lang['Unread_pm'] = "M�te %d nep�e�tenou zpr�vu";
$lang['No_unread_pm'] = "Nem�te nep�e�ten� zpr�vy";
$lang['You_new_pm'] = "Nov� soukrom� zpr�va �ek� na p�e�ten� v doru�en�ch zpr�v�ch";
$lang['You_new_pms'] = "Nov� soukrom� zpr�vy �ekaj� na p�e�ten� v doru�en�ch zpr�v�ch";
$lang['You_no_new_pm'] = "��dn� nov� soukrom� zpr�vy ne�ekaj�";

$lang['Unread_message'] = 'Nep�e�ten� zpr�va';
$lang['Read_message'] = '��st zpr�vu';

$lang['Read_pm'] = '��st zpr�vu';
$lang['Post_new_pm'] = 'Poslat zpr�vu';
$lang['Post_reply_pm'] = 'Odpov�d�t na zpr�vu';
$lang['Post_quote_pm'] = 'Citovat ze zpr�vy';
$lang['Edit_pm'] = 'Upravit zpr�vu';

$lang['Inbox'] = "Doru�en�";
$lang['Outbox'] = "Nedoru�en�";
$lang['Savebox'] = "Ulo�en�";
$lang['Sentbox'] = "Odeslan�";
$lang['Flag'] = "P��znak";
$lang['Subject'] = "P�edm�t";
$lang['From'] = "Od";
$lang['To'] = "Komu";
$lang['Date'] = "Datum";
$lang['Mark'] = "Ozna�it";
$lang['Sent'] = "Zasl�no";
$lang['Saved'] = "Ulo�eno";
$lang['Delete_marked'] = "Odstranit ozna�en�";
$lang['Delete_all'] = "Odstranit v�e";
$lang['Save_marked'] = "Ulo�it ozna�en�";
$lang['Save_message'] = "Ulo�it zpr�vu";
$lang['Delete_message'] = "Odstranit zpr�vu";

$lang['Display_messages'] = "Zobrazit zpr�vy za p�edchoz�"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "V�echny zpr�vy";

$lang['No_messages_folder'] = "Nem�te ��dn� zpr�vy v t�to slo�ce";

$lang['PM_disabled'] = "Soukrom� zpr�vy zde byly vypnuty";
$lang['Cannot_send_privmsg'] = "Promi�te, ale administr�tor v�m neumo�nil zas�l�n� soukrom�ch zpr�v";
$lang['No_to_user'] = "Mus�te zadat u�ivatelsk� jm�no aby jste mohl(a) odeslat tuto zpr�vu";
$lang['No_such_user'] = "Tento u�ivatel nen� registrov�n";

$lang['Disable_HTML_pm'] = "Zak�zat HTML v t�to zpr�v�";
$lang['Disable_BBCode_pm'] = "Zak�zat Zna�ky v t�to zpr�v�";
$lang['Disable_Smilies_pm'] = "Zak�zat smajl�ky (emotikony) v t�to zpr�v�";

$lang['Message_sent'] = "Va�e zpr�va byla odesl�na";

$lang['Click_return_inbox'] = "Klikn�te %szde%s pro n�vrat do doru�en�ch";
$lang['Click_return_index'] = "Klikn�te %szde%s pro n�vrat na obsah";

$lang['Send_a_new_message'] = "Odeslat novou soukromou zpr�vu";
$lang['Send_a_reply'] = "Odpov�d�t na soukromou zpr�vu";
$lang['Edit_message'] = "Upravit soukromou zpr�vu";

$lang['Notification_subject'] = "P�i�la nov� soukrom� zpr�va";

$lang['Find_username'] = "Hledat u�ivatele";
$lang['Find'] = "Hledat";
$lang['No_match'] = "��dn� v�sledek";

$lang['No_post_id'] = "Nebylo zvoleno ID zpr�vy";
$lang['No_such_folder'] = "Po�adovan� slo�ka neexistuje";
$lang['No_folder'] = "Nebyla zvolena slo�ka";

$lang['Mark_all'] = "Ozna�it v�e";
$lang['Unmark_all'] = "Odzna�it v�e";

$lang['Confirm_delete_pm'] = "Opravdu chcete odstranit tuto zpr�va ?";
$lang['Confirm_delete_pms'] = "Opravdu chcete odstranit tyto zpr�vy ?";

$lang['Inbox_size'] = "Schr�nka je zapln�na z %d%%"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Schr�nka je zapln�na z %d%%";
$lang['Savebox_size'] = "Schr�nka je zapln�na z %d%%";

$lang['Click_view_privmsg'] = "Klikn�te %szde%s pro zobrazen� obsahu p��choz�ch zpr�v";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Informace o u�ivateli: %s"; // %s is username
$lang['About_user'] = "V�e o u�ivateli %s"; // %s is username

$lang['Preferences'] = "Mo�nosti";
$lang['Items_required'] = "Pole ozna�en� \"*\" jsou povinn� a mus� b�t vypln�na";
$lang['Registration_info'] = "Registra�n� �daje";
$lang['Profile_info'] = "Osobn� �daje";
$lang['Profile_info_warn'] = "Tyto informace budou ve�ejn� zobraziteln�";
$lang['Avatar_panel'] = "Obr�zky postavi�ek";
$lang['Avatar_gallery'] = "Galerie postavi�ek";

$lang['Website'] = "WWW";
$lang['Location'] = "Bydli�t�";
$lang['Contact'] = "Kontakt";
$lang['Email_address'] = "E-mailov� adresa";
$lang['Email'] = "E-mail";
$lang['Send_private_message'] = "Odeslat soukromou zpr�vu";
$lang['Hidden_email'] = "[ skryt� ]";
$lang['Search_user_posts'] = "Hledat p��sp�vky tohoto u�ivatele";
$lang['Interests'] = "Z�jmy";
$lang['Occupation'] = "Povol�n�";
$lang['Poster_rank'] = "Odesilatelovo hodnocen�";

$lang['Total_posts'] = "P��sp�vk�";
$lang['User_post_pct_stats'] = "%.2f%% ze v�ech p��sp�vk�"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f p��sp�vk� za den"; // 1.5 posts per day
$lang['Search_user_posts'] = "Hledat v�echny p��sp�vky od u�ivatele %s"; // Find all posts by username

$lang['No_user_id_specified'] = "Promi�te, ale tento u�ivatel neexistuje";
$lang['Wrong_Profile'] = "Nem��ete modifikovat toto nastaven�, jeliko� nejste jeho vlastn�kem";

$lang['Only_one_avatar'] = "M��e b�t zvolen pouze jeden obr�zek postavi�ky";
$lang['File_no_data'] = "Soubor na zadan� URL adrese neobsahuje ��dn� data";
$lang['No_connection_URL'] = "Nelze nav�zat spojen� se zadanou URL adresou";
$lang['Incomplete_URL'] = "V�mi zadan� URL adresa nen� kompletn�";
$lang['Wrong_remote_avatar_format'] = "URL adresa vzd�len�ho obr�zku postavi�ky nen� dostupn�";
$lang['No_send_account_inactive'] = "Promi�te, ale va�e heslo nem��e b�t nalezeno, proto�e je v� ��et moment�ln� aktivn�. Pro v�ce informac� kontaktujte administr�tora tohoto f�ra";

$lang['Always_smile'] = "V�dy povolit smajl�ky";
$lang['Always_html'] = "V�dy povolit HTML";
$lang['Always_bbcode'] = "V�dy povolit zna�ky";
$lang['Always_add_sig'] = "V�dy p�ipojit m�j podpis";
$lang['Always_notify'] = "V�dy mn� upozornit na odpov�di";
$lang['Always_notify_explain'] = "Po�le e-mail kdy� n�kdo odpov� na v�mi poslan� t�ma. Toto m��e b�t zm�n�no kdykoli p�ed odesl�n�m";

$lang['Board_style'] = "Vzhled f�ra";
$lang['Board_lang'] = "Jazyk f�ra";
$lang['No_themes'] = "Vzhled nen� v datab�zi";
$lang['Timezone'] = "�asov� p�smo";
$lang['Date_format'] = "Form�t datumu a �asu";
$lang['Date_format_explain'] = "Pou�it� syntaxe je shodn� s PHP funkc� <a href=\"http://www.php.net/date\" target=\"_other\">date()</a>";
$lang['Signature'] = "Podpis";
$lang['Signature_explain'] = "Text, kter� m��e b�t p�id�v�n do va�ich p��sp�vk�<br>Maxim�ln� %d znak�";
$lang['Public_view_email'] = "V�dy zobrazovat mou e-mailovou adresu";

$lang['Current_password'] = "Aktu�ln� Heslo";
$lang['New_password'] = "Nov� heslo";
$lang['Confirm_password'] = "Potvrzen� hesla";
$lang['Confirm_password_explain'] = "Pokud chcete zm�nit heslo nebo upravit e-mailovou adresu mus�te zadat va�e aktu�ln� heslo";
$lang['password_if_changed'] = "Vypl�te pokud chcete zm�nit aktu�ln� heslo";
$lang['password_confirm_if_changed'] = "Vypl�te pro potvrzen�, pokud chcete zm�nit va�e aktu�ln� heslo";

$lang['Avatar'] = "Obr�zek postavi�ky";
$lang['Avatar_explain'] = "Zobrazit mal� obr�zek postavi�ky pod podrobnostmi v p��sp�vc�ch. Pouze jeden obr�zek postavi�ky bude zobrazen, jeho ���ka by nem�la b�t v�t�� ne� %d bod� a v��ka %d bod� a velikost souboru by nem�la p�esahovat %dkB.";
$lang['Upload_Avatar_file'] = "P�ihraj obr�zek postavi�ky ze sv�ho po��ta�e";
$lang['Upload_Avatar_URL'] = "P�ihr�t obr�zek postavi�ky z URL";
$lang['Upload_Avatar_URL_explain'] = "Zadejte URL um�st�n� obr�zku postavi�ky, pro zkop�rov�n� na tento server.";
$lang['Pick_local_Avatar'] = "Zvolte obr�zek postavi�ky z galerie";
$lang['Link_remote_Avatar'] = "Odkaz na vzd�len� obr�zek postavi�ky";
$lang['Link_remote_Avatar_explain'] = "Zadejte URL um�st�n� obr�zku postavi�ky, na kter� chcete odk�zat.";
$lang['Avatar_URL'] = "URL adresa obr�zku s postavi�kou";
$lang['Select_from_gallery'] = "Zvolte obr�zek postavi�ky z galerie";
$lang['View_avatar_gallery'] = "Zobrazit galerii postavi�ek";

$lang['Select_avatar'] = "Zvolte obr�zek postavi�ky";
$lang['Return_profile'] = "N�vrat do nastaven�";
$lang['Select_category'] = "Volba kategorie";

$lang['Delete_Image'] = "Odstranit obr�zek";
$lang['Current_Image'] = "Aktu�ln� obr�zek";

$lang['Notify_on_privmsg'] = "Upozornit na p��chod nov� soukrom� zpr�vy";
$lang['Popup_on_privmsg'] = "Otev��t nov� okno p�i p��chodu nov� soukrom� zpr�vy";
$lang['Popup_on_privmsg_explain'] = "N�kter� �ablony mohou otev��t nov� okno, aby v�s informovaly o nov� p��choz� soukrom� zpr�v�";
$lang['Hide_user'] = "Skr�t va�� p��tomnost ve f�ru";

$lang['Profile_updated'] = "V�e nastaven� bylo aktualizov�no";
$lang['Profile_updated_inactive'] = "Va�e nastaven� bylo aktualizov�no, ale jeliko� jste zm�nil(a) d�le�it� informace je nyn� v� ��et neaktivn�. Zkontrolujte v� e-mail pro informace jak jej znovu aktivovat, nebo pokud je nutn� administr�torsk� aktivace po�kejte a� administr�tor v� ��et znovu aktivuje";

$lang['Password_mismatch'] = "Zadan� hesla se neshoduj�";
$lang['Current_password_mismatch'] = "V�mi zadan� aktu�ln� heslo nen� spr�vn�";
$lang['Password_long'] = "Va�e heslo nesm� p�esahovat 32 znak�";
$lang['Username_taken'] = "Promi�te, ale tento u�ivatel je ji� registrov�n";
$lang['Username_invalid'] = "Promi�te, ale toto u�ivatelsk� jm�no obsahuje nepovolen� znaky \"";
$lang['Username_disallowed'] = "Promi�te, ale toto u�ivatelsk� jm�no je zak�z�no";
$lang['Email_taken'] = "Promi�te, ale tuto e-mailovou adresu m� ji� registrov�na n�kter� u�ivatel";
$lang['Email_banned'] = "Promi�te, ale tato e-mailov� adresa byla zak�z�na";
$lang['Email_invalid'] = "Promi�te, tato e-mailov� adresa nen� platn�";
$lang['Signature_too_long'] = "V� podpis je p��li� dlouh�";
$lang['Fields_empty'] = "Mus�te zadat po�adovan� �daje";
$lang['Avatar_filetype'] = "Obr�zek postavi�ky mus� b�t typu .jpg, .gif nebo .png";
$lang['Avatar_filesize'] = "Soubor obr�zku postavi�ky mus� b�t men�� ne� %d kB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Obr�zek postavi�ky mus� m�t ���ku maxim�ln� %d bod� a v��ku %d bod�";

$lang['Welcome_subject'] = "V�tejte na %s f�ru"; // Welcome to my.com forums
$lang['New_account_subject'] = "Nov� u�ivatelsk� ��et";
$lang['Account_activated_subject'] = "��et aktivov�n";

$lang['Account_added'] = "D�kujeme za registraci, v� ��et byl vytvo�en. Nyn� se m��ete p�ihl�sit pod sv�m jm�nem a heslem";
$lang['Account_inactive'] = "V� u�ivatelsk� ��et byl vytvo�en. Ov�em toto f�rum vy�aduje aktivaci ��tu. Aktiva�n� kl��em, v�m byl zasl�n na v�mi poskytnutou e-mailovou adresu. Bli��� informace obdr��te na va�� e-mailovou adresu";
$lang['Account_inactive_admin'] = "V� u�ivatelsk� ��et byl vytvo�en. Ov�em toto f�rum vy�aduje aktivaci ��tu administr�torem. Po aktivaci administr�torem, budete vyrozum�n(a) na va�� e-mailovou adresu";
$lang['Account_active'] = "V� ��et byl aktivov�n. D�kujeme za registraci";
$lang['Account_active_admin'] = "��et byl aktivov�n";
$lang['Reactivate'] = "P�eaktivujte sv�j ��et!";
$lang['Already_activated'] = 'V� ��et jste ji� aktivoval';
$lang['COPPA'] = "V� ��et byl vytvo�en ale nemus� b�t je�t� akceptov�n. Pro potvrzen� si p�e�t�te bli��� informace v zaslan�m e-mailu";

$lang['Registration'] = "Registra�n� podm�nky";
$lang['Reg_agreement'] = "A�koliv se administr�to�i a moder�to�i tohoto f�ra pokus� odstranit nebo upravit jak�koliv v�eobecn� ne��douc� materi�l tak rychle jak jen to je mo�n�, je nemo�n� prohl�dnou ka�d� p��sp�vek. Proto vemte na v�dom�, �e v�echny p��sp�vky do tohoto f�ra vyjad�uj� pohledy a n�zory autora p��sp�vku a ne administr�tor�, moder�tor� a webmastera (mimo p��sp�vky od t�chto lid�) a proto za n� nemohou b�t zodpov�dn�.<br><br>Souhlas�te s t�m, �e nebudete pos�lat ��dn� hanliv�, neslu�n�, vulg�rn�, nen�vistn�, zastra�uj�c�, sexu�ln� orientovan� nebo jin� materi�ly, kter� mohou poru�ovat z�kony. Pos�l�n� takov�ch materi�l� v�m m��e p�ivodit okam�it� a permanentn� vyho�t�n� z f�ra (a v� ISP bude o va�� �innosti informov�n). IP adresa v�ech p��sp�vk� je zaznamen�v�na pro p��pad pot�eby vynucen� t�chto podm�nek. Souhlas�te, �e webmaster, administr�tor a moder�to�i tohoto f�ra maj� pr�vo odstranit, upravit, p�esunout nebo ukon�it jak�koliv t�ma kdykoliv zjist� �e odporuje t�mto podm�nk�m. Jako u�ivatel souhlas�te, �e jak�koliv informace kter� vlo��te budou ulo�eny v datab�zi. Dokud nebudou tyto informace prozrazeny t�et� stran� bez va�eho svolen� nemohou b�t webmaster, administr�tor a moder�to�i �in�ni zodpov�dn�mi za jak�koliv hackersk� pokusy kter� mohou v�st k tomu, �e data budou kompromitov�na.<br><br>Syst�m tohoto f�ra pou��v� cookies k ukl�d�n� informac� na va�em po��ta�i. Tato cookies neobsahuj� ��dn� informace, kter� jste vlo�il, slou�� jen ke zv��en� va�eho pohodl� p�i prohl�en�. E-mailov� adresa je pou��v�na jen pro potvrzen� va�ich registra�n�ch detail� a hesla (a pro posl�ni nov�ho hesla, pokud jste zapom�l aktu�ln�).<br><br>Kliknut�m na Registraci n�e souhlas�te b�t v�zan� t�mito podm�nkami.";

$lang['Agree_under_13'] = "Souhlas�m s t�mito podm�nkami a je mi <b>m�n�</b> ne� 13 let";
$lang['Agree_over_13'] = "Souhlas�m s t�mito podm�nkami a je mi <b>v�ce</b> ne� 13 let";
$lang['Agree_not'] = "Nesouhlas�m s t�mito podm�nkami";

$lang['Wrong_activation'] = "V�mi poskytnut� aktiva�n� kl�� neodpov�d� se neshoduje s ��dn�m z datab�ze";
$lang['Send_password'] = "Za�lete mi nov� heslo";
$lang['Password_updated'] = "Nov� heslo bylo vytvo�eno, o�ek�vejte e-mail s informacemi jak jej aktivovat";
$lang['No_email_match'] = "E-mailov� adresa nesouhlas� s adresou p�i�azenou k va�emu u�ivatelsk�mu jm�nu";
$lang['New_password_activation'] = "Aktivace nov�ho hesla";
$lang['Password_activated'] = "V� ��et byl reaktivov�n. Pro p�ihl�en� pou�ijte heslo, kter� v�m bylo zasl�no e-mailem";

$lang['Send_email_msg'] = "Odeslat e-mailovou zpr�vu";
$lang['No_user_specified'] = "Nebyl zvolen ��dn� u�ivatel";
$lang['User_prevent_email'] = "Tento u�ivatel si nep�eje p�ij�mat odpov�di e-mailem. Zkuste mu zaslat soukromou zpr�vu";
$lang['User_not_exist'] = "Tento u�ivatel neexistuje";
$lang['CC_email'] = "Odeslat kopii tohoto e-mailu sob�";
$lang['Email_message_desc'] = "Tato zpr�va bude zasl�na jako prost� text, nebude obsahovat ��dn� HTML ani zna�ky. Adresa pro odpov�� na tuto zpr�vu bude nastavena na va�i e-mailovou adresu.";
$lang['Flood_email_limit'] = "Nem��ete nyn� odeslat dal�� e-mail, zkuste opakovat pozd�ji";
$lang['Recipient'] = "P��jemce";
$lang['Email_sent'] = "E-mail byl odesl�n";
$lang['Send_email'] = "Odeslat e-mail";
$lang['Empty_subject_email'] = "Mus�te zadat p�edm�t e-mailu";
$lang['Empty_message_email'] = "Mus�te zadat text zpr�vy";


//
// Memberslist
//
$lang['Select_sort_method'] = "Set��dit dle";
$lang['Sort'] = "Set��dit";
$lang['Sort_Top_Ten'] = "Nej�ast�j�� p�isp�vatel�";
$lang['Sort_Joined'] = "Data registrace";
$lang['Sort_Username'] = "Jm�na u�ivatele";
$lang['Sort_Location'] = "Bydli�t�";
$lang['Sort_Posts'] = "Po�tu p��sp�vk�";
$lang['Sort_Email'] = "E-mailu";
$lang['Sort_Website'] = "WWW str�nky";
$lang['Sort_Ascending'] = "Vzestupn�";
$lang['Sort_Descending'] = "Sestupn�";
$lang['Order'] = "Dle po�ad�";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Skupina - Ovl�dac� panel";
$lang['Group_member_details'] = "Detaily �lenstv� ve skupin�";
$lang['Group_member_join'] = "Vstoupit do skupiny";

$lang['Group_Information'] = "Informace o skupin�";
$lang['Group_name'] = "Jm�no skupiny";
$lang['Group_description'] = "Popis skupiny";
$lang['Group_membership'] = "Va�e �lenstv�";
$lang['Group_Members'] = "�lenov� Skupiny";
$lang['Group_Moderator'] = "Moder�tor skupiny";
$lang['Pending_members'] = "�ekaj�c� �lenov�";

$lang['Group_type'] = "Typ skupiny";
$lang['Group_open'] = "Otev�en� skupina";
$lang['Group_closed'] = "Uzav�en� skupina";
$lang['Group_hidden'] = "Skryt� skupina";

$lang['Current_memberships'] = "Aktu�ln� �lenstv�";
$lang['Non_member_groups'] = "Skupiny bez �len�";
$lang['Memberships_pending'] = "�ekac� �lenstv�";

$lang['No_groups_exist'] = "Neexistuje ��dn� skupina";
$lang['Group_not_exist'] = "Tato skupina neexistuje";

$lang['Join_group'] = "P�ihl�sit se do skupiny";
$lang['No_group_members'] = "Tato skupina nem� �leny";
$lang['Group_hidden_members'] = "Tato skupina je skryt�, nem��ete vid�t seznam jej�ch �len�";
$lang['No_pending_group_members'] = "Tato skupina nem� �ekaj�c� �leny";
$lang["Group_joined"] = "�sp�n� jste vstoupil do t�to skupiny<br>Budete informov�n a� bude v� vstup moder�torem t�to skupiny odsouhlasen";
$lang['Group_request'] = "Va�e ��dost o vstup do skupiny byla odesl�na";
$lang['Group_approved'] = "Va�e ��dost byla odsouhlasena";
$lang['Group_added'] = "Byl jste p�ijat do t�to skupiny";
$lang['Already_member_group'] = "Ji� jste �lenem t�to skupiny";
$lang['User_is_member_group'] = "U�ivatel ji� je �lenem t�to skupiny";
$lang['Group_type_updated'] = "Typ skupiny byl �sp�n� aktualizov�n";

$lang['Could_not_add_user'] = "Zvolen� u�ivatel neexistuje";
$lang['Could_not_anon_user'] = "Anonymn� u�ivatel nem��e b�t �lenem skupiny";

$lang['Confirm_unsub'] = "Opravdu chcete ukon�it �lenstv� v t�to skupin� ?";
$lang['Confirm_unsub_pending'] = "Va�e �lenstv� v t�to skupin� zat�m nebylo odsouhlaseno, opravdu je chcete ukon�it ?";

$lang['Unsub_success'] = "P�estal jste b�t �lenem t�to skupiny";

$lang['Approve_selected'] = "Akceptovat zvolen�";
$lang['Deny_selected'] = "Zam�tnout zvolen�";
$lang['Not_logged_in'] = " Pro vstup do skupiny mus�te b�t p�ihl�en.";
$lang['Remove_selected'] = "Odstranit zvolen�";
$lang['Add_member'] = "P�idat �lena";
$lang['Not_group_moderator'] = "Nejste moder�torem t�to skupiny, proto nem��ete prov�st tuto akci";

$lang['Login_to_join'] = "P�ihl�sit pro vstup do skupiny nebo �pravy �lenstv�";
$lang['This_open_group'] = "Toto je otev�en� skupina, klikn�te pro po��d�n� o �lenstv�";
$lang['This_closed_group'] = "Toto je uzav�en� skupina, ��dn� dal�� u�ivatel� nejsou p��j�m�ni";
$lang['This_hidden_group'] = "Toto je skryt� skupina, automatick� p�id�v�n� u�ivatel� nen� dovoleno";
$lang['Member_this_group'] = "Jste �lenem t�to skupiny";
$lang['Pending_this_group'] = "Va�e �lenstv� v t�to skupin� �ek� na odsouhlasen�";
$lang['Are_group_moderator'] = "Jste moder�torem skupiny";
$lang['None'] = "nikdo nen� p��tomen";

$lang['Subscribe'] = "Po��dat o �lenstv�";
$lang['Unsubscribe'] = "Ukon�it �lenstv�";
$lang['View_Information'] = "Zobrazit informace";


//
// Search
//
$lang['Search_query'] = "Hledan� �et�zec";
$lang['Search_options'] = "Mo�nosti hled�n�";

$lang['Search_keywords'] = "Kl��ov� slova";
$lang['Search_keywords_explain'] = "M��ete pou��t <u>AND</u> pro slova, kter� mus� b�t ve v�sledc�ch, <u>OR</u> pro takov�, kter� tam mohou n�le�et a <u>NOT</u> pro takov�, kter� by ve v�sledc�ch nem�la b�t. Znak \"*\" nahrad� ��st �et�zce p�i vyhled�v�n�";
$lang['Search_author'] = "Autora";
$lang['Search_author_explain'] = "Znak \"*\" nahrad� ��st �et�zce p�i vyhled�v�n�";

$lang['Search_for_any'] = "Hledej kter�koliv slovo nebo v�raz jak je zadan�";
$lang['Search_for_all'] = "Hledej v�echna slova";
$lang['Search_title_msg'] = "Hledej n�zev t�matu a text zpr�vy";
$lang['Search_msg_only'] = "Hledat jen text zpr�vy";

$lang['Return_first'] = "Zobraz prvn�ch"; // followed by xxx characters in a select box
$lang['characters_posts'] = "znak� ze p��sp�vku";

$lang['Search_previous'] = "Prohledej p�edchoz�"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Set��dit dle";
$lang['Sort_Time'] = "�as odesl�n�";
$lang['Sort_Post_Subject'] = "P�edm�tu";
$lang['Sort_Topic_Title'] = "Hlavi�ky t�matu";
$lang['Sort_Author'] = "Autora";
$lang['Sort_Forum'] = "F�ra";

$lang['Display_results'] = "Zobrazit v�sledek jako";
$lang['All_available'] = "V�echny dostupn�";
$lang['No_searchable_forums'] = "Pokud nechcete povolit vyhled�v�n� v libovoln�ch f�rech tohoto serveru";

$lang['No_search_match'] = "��dn� t�ma nebo p��sp�vek nebyl nalezen dle zvolen�ch krit�ri�";
$lang['Found_search_match'] = "Byl nalezen %d v�sledek hled�n�"; // eg. Search found 1 match
$lang['Found_search_matches'] = "bylo nalezeno %d v�sledk� hled�n�"; // eg. Search found 24 matches

$lang['Close_window'] = "Zav��t okno";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Promi�te, ale jen %s mohou pos�lat ozn�men� do tohoto f�ra";
$lang['Sorry_auth_sticky'] = "Promi�te, ale jen %s mohou pos�lat d�le�it� zpr�vy do tohoto f�ra";
$lang['Sorry_auth_read'] = "Promi�te, ale jen %s mohou ��st t�mata v tomto f�ru";
$lang['Sorry_auth_post'] = "Promi�te, ale jen %s mohou pos�lat t�mata do tohoto f�ra";
$lang['Sorry_auth_reply'] = "Promi�te, ale jen %s mohou odpov�dat na p��sp�vky v tomto f�ru";
$lang['Sorry_auth_edit'] = "Promi�te, ale jen %s mohou upravovat p��sp�vky v tomto f�ru";
$lang['Sorry_auth_delete'] = "Promi�te, ale jen %s mohou mazat p��sp�vky v tomto f�ru";
$lang['Sorry_auth_vote'] = "Promi�te, ale jen %s mohou hlasovat v hlasov�n� tohoto f�ra";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>Anonymn� u�ivatel�</b>";
$lang['Auth_Registered_Users'] = "<b>Registrovan� u�ivatel�</b>";
$lang['Auth_Users_granted_access'] = "<b>u�ivatel� se zvl�tn�m opr�vn�n�m</b>";
$lang['Auth_Moderators'] = "<b>Moder�to�i</b>";
$lang['Auth_Administrators'] = "<b>Administr�to�i</b>";

$lang['Not_Moderator'] = "Nejste moder�torem tohoto f�ra";
$lang['Not_Authorised'] = "Neautorizovan�";

$lang['You_been_banned'] = "Byl jste vyk�z�n z tohoto f�ra<br>Pros�m kontaktujte webmastera nebo administr�tora tohoto f�ra pro z�sk�n� bli���ch informac�";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Je zde 0 registrovan�ch u�ivatel� a "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Je zde %d registrovan�ch u�ivatel� a "; // There ae 5 Registered and
$lang['Reg_user_online'] = "Je zde %d registrovan� u�ivatel a "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 skryt�ch u�ivatel�"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d skryt�ch u�ivatel�"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d skryt� u�ivatel"; // 6 Hidden users online
$lang['Guest_users_online'] = "Je zde %d anonymn�ch u�ivatel�"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "Je zde 0 anonymn�ch u�ivatel�"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Je zde %d anonymn� u�ivatel"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Moment�ln� zde nejsou ��dn� u�ivatel�";

$lang['Online_explain'] = "Tato data jsou zalo�ena na aktivit� u�ivatel� b�hem posledn�ch 5 minut";

$lang['Forum_Location'] = "Nach�z� se";
$lang['Last_updated'] = "Posledn� aktualizace";

$lang['Forum_index'] = "Obsah f�ra";
$lang['Logging_on'] = "P�ihla�uje se";
$lang['Posting_message'] = "Odes�l� zpr�vu";
$lang['Searching_forums'] = "Prohled�v� f�ra";
$lang['Viewing_profile'] = "Prohl�� nastaven�";
$lang['Viewing_online'] = "Prohl�� seznam p��tomn�ch u�ivatel�";
$lang['Viewing_member_list'] = "Prohl�� seznam u�ivatel�";
$lang['Viewing_priv_msgs'] = "Prohl�� soukrom� zpr�vy";
$lang['Viewing_FAQ'] = "prohl�� FAQ";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moder�tor - Ovl�dac� panel";
$lang['Mod_CP_explain'] = "Pomoc� n�sleduj�c�ho formul��e m��ete prov�d�t hromadn� z�sahy do tohoto f�ra. M��ete zamykat, odemykat, p�esouvat a mazat jak�koliv po�et t�mat";

$lang['Select'] = "Zvolit";
$lang['Delete'] = "Odstranit";
$lang['Move'] = "P�esunout";
$lang['Lock'] = "Zamknout";
$lang['Unlock'] = "Odemknout";

$lang['Topics_Removed'] = "Zvolen� t�mata byla �sp�n� odstran�na z datab�ze.";
$lang['Topics_Locked'] = "Zvolen� t�mata byla uzamknuta";
$lang['Topics_Moved'] = "Zvolen� t�mata byla p�esunuta";
$lang['Topics_Unlocked'] = "Zvolen� t�mata byla odemknuta";
$lang['No_Topics_Moved'] = "��dn� t�mata nebyla p�esunuta";

$lang['Confirm_delete_topic'] = "Opravdu chcete odstranit zvolen� t�mata ?";
$lang['Confirm_lock_topic'] = "Opravdu chcete zamknout zvolen� t�mata ?";
$lang['Confirm_unlock_topic'] = "Opravdu chcete odemknout zvolen� t�mata ?";
$lang['Confirm_move_topic'] = "Opravdu chcete p�esunout zvolen� t�mata ?";

$lang['Move_to_forum'] = "P�esunout do f�ra";
$lang['Leave_shadow_topic'] = "Ponechat st�nov� t�ma ve star�m f�ru.";

$lang['Split_Topic'] = "Rozd�len� t�matu - Ovl�dac� panel";
$lang['Split_Topic_explain'] = "Pomoc� n�sleduj�c�ho formul��e m��ete t�ma rozd�lit na dv�, bu� vybr�n�m p��sp�vk� jednotliv�, nebo rozd�len�m od vybran�ho p��sp�vku";
$lang['Split_title'] = "Titulek nov�ho t�matu";
$lang['Split_forum'] = "Forum pro nov� t�ma";
$lang['Split_posts'] = "Rozd�lit vybran� p��sp�vky";
$lang['Split_after'] = "Rozd�lit od vybran�ho p��sp�vku";
$lang['Topic_split'] = "Vybran� t�ma bylo �sp�n� rozd�leno";

$lang['Too_many_error'] = "Vybal(a) jste p��li� mnoho p��sp�vk�. M��ete vybrat pouze jeden p��sp�vek, od kter�ho chcete t�ma rozd�lit!";

$lang['None_selected'] = "Nebylo vybr�n� ��dn� t�ma pro vykon�n� t�to operace. Prove�te n�vrat zp�t a zvolte alespo� jedno t�ma";
$lang['New_forum'] = "Nov� f�rum";

$lang['This_posts_IP'] = "IP adresa p��sp�vku";
$lang['Other_IP_this_user'] = "Dal�� IP adresy ze kter�ch u�ivatel odes�lal p��sp�vky";
$lang['Users_this_IP'] = "U�ivatel� zas�laj�c� p��sp�vek z t�to IP adresy";
$lang['IP_info'] = "Informace o IP adres��e";
$lang['Lookup_IP'] = "Hledat IP adresu";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "�asy uv�d�ny v %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 hodin";
$lang['-11'] = "GMT - 11 hodin";
$lang['-10'] = "GMT - 10 hodin";
$lang['-9'] = "GMT - 9 hodin";
$lang['-8'] = "GMT - 8 hodin";
$lang['-7'] = "GMT - 7 hodin";
$lang['-6'] = "GMT - 6 hodin";
$lang['-5'] = "GMT - 5 hodin";
$lang['-4'] = "GMT - 4 hodiny";
$lang['-3.5'] = "GMT - 3.5 hodiny";
$lang['-3'] = "GMT - 3 hodiny";
$lang['-2'] = "GMT - 2 hodiny";
$lang['-1'] = "GMT - 1 hodina";
$lang['0'] = "GMT";
$lang['1'] = "GMT + 1 hodina";
$lang['2'] = "GMT + 2 hodiny";
$lang['3'] = "GMT + 3 hodiny";
$lang['3.5'] = "GMT + 3.5 hodiny";
$lang['4'] = "GMT + 4 hodiny";
$lang['4.5'] = "GMT + 4.5 hodiny";
$lang['5'] = "GMT + 5 hodin";
$lang['5.5'] = "GMT + 5.5 hodiny";
$lang['6'] = "GMT + 6 hodin";
$lang['6.5'] = "GMT + 6.5 hodiny";
$lang['7'] = "GMT + 7 hodin";
$lang['8'] = "GMT + 8 hodin";
$lang['9'] = "GMT + 9 hodin";
$lang['9.5'] = "GMT + 9.5 hodin";
$lang['10'] = "GMT + 10 hodin";
$lang['11'] = "GMT + 11 hodin";
$lang['12'] = "GMT + 12 hodin";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 hodin) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 hodin) Midway Island, Samoa";
$lang['tz']['-10'] = "(GMT -10:00 hodin) Hawaii";
$lang['tz']['-9'] = "(GMT -9:00 hodin) Alaska";
$lang['tz']['-8'] = "(GMT -8:00 hodin) Pacific Time (US &amp; Canada), Tijuana";
$lang['tz']['-7'] = "(GMT -7:00 hodin) Mountain Time (US &amp; Canada), Arizona";
$lang['tz']['-6'] = "(GMT -6:00 hodin) Central Time (US &amp; Canada), Mexico City";
$lang['tz']['-5'] = "(GMT -5:00 hodin) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$lang['tz']['-4'] = "(GMT -4:00 hodiny) Atlantic Time (Canada), Caracas, La Paz";
$lang['tz']['-3.5'] = "(GMT -3.5 hodiny) Newfoundland";
$lang['tz']['-3'] = "(GMT -3:00 hodiny) Brassila, Buenos Aires, Georgetown, Falkland Is";
$lang['tz']['-2'] = "(GMT -2:00 hodiny) Mid-Atlantic, Ascension Is., St. Helena";
$lang['tz']['-1'] = "(GMT -1:00 hodina) Azores, Cape Verde Islands";
$lang['tz']['0'] = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$lang['tz']['1'] = "(GMT +1:00 hodina) Prague, Amsterdam, Berlin, Brussels, Madrid, Paris";
$lang['tz']['2'] = "(GMT +2:00 hodiny) Cairo, Helsinki, Kaliningrad, South Africa";
$lang['tz']['3'] = "(GMT +3:00 hodiny) Baghdad, Riyadh, Moscow, Nairobi";
$lang['tz']['3.5'] = "(GMT +3.5 hodiny) Tehran";
$lang['tz']['4'] = "(GMT +4:00 hodiny) Abu Dhabi, Baku, Muscat, Tbilisi";
$lang['tz']['4.5'] = "(GMT +4.5 hodiny) Kabul";
$lang['tz']['5'] = "(GMT +5:00 hodin) Ekaterinburg, Islamabad, Karachi, Tashkent";
$lang['tz']['5.5'] = "(GMT +5.5 hodiny) Bombay, Calcutta, Madras, New Delhi";
$lang['tz']['6'] = "(GMT +6:00 hodin) Almaty, Colombo, Dhaka, Novosibirsk";
$lang['tz']['6.5'] = "(GMT +6.5 hodiny) Rangoon";
$lang['tz']['7'] = "(GMT +7:00 hodin) Bangkok, Hanoi, Jakarta";
$lang['tz']['8'] = "(GMT +8:00 hodin) Beijing, Hong Kong, Perth, Singapore, Taipei";
$lang['tz']['9'] = "(GMT +9:00 hodin) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$lang['tz']['9.5'] = "(GMT +9.5 hodiny) Adelaide, Darwin";
$lang['tz']['10'] = "(GMT +10:00 hodin) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$lang['tz']['11'] = "(GMT +11:00 hodin) Magadan, New Caledonia, Solomon Islands";
$lang['tz']['12'] = "(GMT +12:00 hodin) Auckland, Wellington, Fiji, Marshall Island";

$lang['datetime']['Sunday'] = "ned�le";
$lang['datetime']['Monday'] = "pond�l�";
$lang['datetime']['Tuesday'] = "�ter�";
$lang['datetime']['Wednesday'] = "st�eda";
$lang['datetime']['Thursday'] = "�tvrtek";
$lang['datetime']['Friday'] = "p�tek";
$lang['datetime']['Saturday'] = "sobota";
$lang['datetime']['Sun'] = "ne";
$lang['datetime']['Mon'] = "po";
$lang['datetime']['Tue'] = "�t";
$lang['datetime']['Wed'] = "st";
$lang['datetime']['Thu'] = "�t";
$lang['datetime']['Fri'] = "p�";
$lang['datetime']['Sat'] = "so";
$lang['datetime']['January'] = "leden";
$lang['datetime']['February'] = "�nor";
$lang['datetime']['March'] = "b�ezen";
$lang['datetime']['April'] = "duben";
$lang['datetime']['May'] = "kv�ten";
$lang['datetime']['June'] = "�erven";
$lang['datetime']['July'] = "�ervenec";
$lang['datetime']['August'] = "srpen";
$lang['datetime']['September'] = "z���";
$lang['datetime']['October'] = "��jen";
$lang['datetime']['November'] = "listopad";
$lang['datetime']['December'] = "prosinec";
$lang['datetime']['Jan'] = "leden";
$lang['datetime']['Feb'] = "�nor";
$lang['datetime']['Mar'] = "b�ezen";
$lang['datetime']['Apr'] = "duben";
$lang['datetime']['May'] = "kv�ten";
$lang['datetime']['Jun'] = "�erven";
$lang['datetime']['Jul'] = "�ervenec";
$lang['datetime']['Aug'] = "srpen";
$lang['datetime']['Sep'] = "z���";
$lang['datetime']['Oct'] = "��jen";
$lang['datetime']['Nov'] = "listopad";
$lang['datetime']['Dec'] = "prosinec";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informace";
$lang['Critical_Information'] = "Kritick� informace";

$lang['General_Error'] = "V�eobecn� chyba";
$lang['Critical_Error'] = "kritick� chyba";
$lang['An_error_occured'] = "Objevila se chyba";
$lang['A_critical_error'] = "Objevila se kritick� chyba";


?>