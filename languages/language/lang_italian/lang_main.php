<?php

/***************************************************************************

 *                            lang_main.php [Italian]

 *                              -------------------

 *     begin                : Sat Dec 16 2000

 *     copyright            : (C) 2001 The phpBB Group

 *     email                : support@phpbb.com

 *

 *     $Id: lang_main.php,v 1.4 2003/04/29 22:48:07 bob Exp $

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
/***************************************************************************
 *                            lang_main.php [Italian]
 *                              -------------------
 * Traduzione e supporto Italiano per pnphpbb2
 * www.openitalia.net - staff@openitalia.net
 * Tiraboschi Massimiliano aka TiMax
 * email: timax@envolution.com
 *
 ****************************************************************************/

//

// The format of this file is ---> $lang['message'] = 'text';

//

// You should also try to set a locale and a character encoding (plus direction). The encoding and direction

// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax

// varies ... give it your best guess!

//



$lang['ENCODING'] = 'iso-8859-1';

$lang['DIRECTION'] = 'ltr';

$lang['LEFT'] = 'sinistra';

$lang['RIGHT'] = 'destra';

//$lang['DATE_FORMAT'] = 'd/m/y H:i'; // This should be changed to the default date format for your language, php date() format
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

$lang['Category'] = 'Categoria';

$lang['Topic'] = 'Discussione';

$lang['Topics'] = 'Discussioni';

$lang['Replies'] = 'Risposte';

$lang['Views'] = 'Visto';

$lang['Post'] = 'Messaggio';

$lang['Posts'] = 'Messaggi';

$lang['Posted'] = 'Inviato';

$lang['Username'] = 'Username';

$lang['Password'] = 'Password';

$lang['Email'] = 'Email';

$lang['Poster'] = 'Autore del messaggio';

$lang['Author'] = 'Autore';

$lang['Time'] = 'Data';

$lang['Hours'] = 'Ora';

$lang['Message'] = 'Messaggio';



$lang['1_Day'] = '1 giorno';

$lang['7_Days'] = '7 giorni';

$lang['2_Weeks'] = '2 settimane';

$lang['1_Month'] = '1 mese';

$lang['3_Months'] = '3 mesi';

$lang['6_Months'] = '6 mesi';

$lang['1_Year'] = '1 anno';



$lang['Go'] = 'Vai';

$lang['Jump_to'] = 'Vai a';

$lang['Submit'] = 'Invia';

$lang['Reset'] = 'Cancella';

$lang['Cancel'] = 'Annulla';

$lang['Preview'] = 'Anteprima';

$lang['Confirm'] = 'Conferma';

$lang['Spellcheck'] = 'Controllo ortografico';

$lang['Yes'] = 'S�';

$lang['No'] = 'No';

$lang['Enabled'] = 'Abilitato';

$lang['Disabled'] = 'Disabilitato';

$lang['Error'] = 'Errore';



$lang['Next'] = 'Successivo';

$lang['Previous'] = 'Precedente';

$lang['Goto_page'] = 'Vai a pagina';

$lang['Joined'] = 'Registrato';

$lang['IP_Address'] = 'Indirizzo IP';



$lang['Select_forum'] = 'Seleziona un forum';

$lang['View_latest_post'] = 'Leggi gli ultimi messaggi';

$lang['View_newest_post'] = 'Leggi i nuovi messaggi';

$lang['Page_of'] = 'Pagina <b>%d</b> di <b>%d</b>'; // Replaces with: Page 1 of 2 for example



$lang['ICQ'] = 'Numero ICQ';

$lang['AIM'] = 'Indirizzo AIM';

$lang['MSNM'] = 'MSN messenger';

$lang['YIM'] = 'Yahoo messenger';



$lang['Forum_Index'] = 'Indice del forum';  // eg. sitename Forum Index, %s can be removed if you prefer



$lang['Post_new_topic'] = 'Nuova discussione';

$lang['Reply_to_topic'] = 'Rispondi';

$lang['Reply_with_quote'] = 'Rispondi citando';



$lang['Click_return_topic'] = 'Clicca %squi%s per tornare alla discussione'; // %s's here are for uris, do not remove!

$lang['Click_return_login'] = 'Clicca %squi%s per riprovare';

$lang['Click_return_forum'] = 'Clicca %squi%s per tornare al forum';

$lang['Click_view_message'] = 'Clicca %squi%s per vedere il tuo messaggio';

$lang['Click_return_modcp'] = 'Clicca %squi%s per tornare al pannello di controllo dei moderatori';

$lang['Click_return_group'] = 'Clicca %squi%s per tornare alle informazioni sul gruppo';



$lang['Admin_panel'] = 'Pannello amministrazione';



$lang['Board_disable'] = 'Spiacenti ma questo forum non � al momento disponibile, per favore prova pi� tardi';





//

// Global Header strings

//

$lang['Registered_users'] = 'Utenti registrati:';

$lang['Browsing_forum'] = 'Utenti che stanno navigando nel forum:';

$lang['Online_users_zero_total'] = 'In totale ci sono <b>0</b> utenti in linea :: ';

$lang['Online_users_total'] = 'In totale ci sono <b>%d</b> utenti in linea :: ';

$lang['Online_user_total'] = 'In totale c\'� <b>%d</b> utente in linea :: ';

$lang['Reg_users_zero_total'] = '0 registrati,';

$lang['Reg_users_total'] = '%d registrati, ';

$lang['Reg_user_total'] = '%d registrato, ';

$lang['Hidden_users_zero_total'] = '0 nascosti e ';

$lang['Hidden_user_total'] = '%d nascosto e ';

$lang['Hidden_users_total'] = '%d nascosti e ';

$lang['Guest_users_zero_total'] = '0 visitatori';

$lang['Guest_users_total'] = '%d visitatori';

$lang['Guest_user_total'] = '%d visitatore';

$lang['Record_online_users'] = 'Il massimo numero di utenti in linea � stato <b>%s</b> il %s'; // first %s = number of users, second %s is the date.



$lang['Admin_online_color'] = '%sAmministratore%s';

$lang['Mod_online_color'] = '%sModeratore%s';



$lang['You_last_visit'] = 'La tua ultima visita � stata %s';// %s replaced by date/time

$lang['Current_time'] = 'La data di oggi � %s'; // %s replaced by time



$lang['Search_new'] = 'Leggi i messaggi dall\'ultima visita';

$lang['Search_your_posts'] = 'Leggi i tuoi messaggi';

$lang['Search_unanswered'] = 'Leggi i messaggi senza risposta';



$lang['Register'] = 'Registrati';

$lang['Profile'] = 'Profilo';

$lang['Edit_profile'] = 'Modifica il tuo profilo';

$lang['Search'] = 'Cerca';

$lang['Memberlist'] = 'Lista degli utenti';

$lang['FAQ'] = 'FAQ';

$lang['BBCode_guide'] = 'Guida per i BBCode';

$lang['Usergroups'] = 'Gruppi utenti';

$lang['Last_Post'] = 'Ultimo messaggio';

$lang['Moderator'] = 'Moderatore';

$lang['Moderators'] = 'Moderatori';





//

// Stats block text

//

$lang['Posted_articles_zero_total'] = 'I nostri utenti hanno inviato un totale di <b>0</b> messaggi'; // Number of posts

$lang['Posted_articles_total'] = 'I nostri utenti hanno inviato un totale di <b>%d</b> messaggi'; // Number of posts

$lang['Posted_article_total'] = 'I nostri utenti hanno inviato un totale di <b>%d</b> messaggio'; // Number of posts

$lang['Registered_users_zero_total'] = 'Abbiamo <b>0</b> utenti registrati'; // # registered users

$lang['Registered_users_total'] = 'Abbiamo <b>%d</b> utenti registrati'; // # registered users

$lang['Registered_user_total'] = 'Abbiamo <b>%d</b> utente registrato'; // # registered users

$lang['Newest_user'] = 'L\'ultimo utente registrato � <b>%s%s%s</b>'; // a href, username, /a



$lang['No_new_posts_last_visit'] = 'Nessun nuovo messaggio dalla tua ultima visita';

$lang['No_new_posts'] = 'Nessun nuovo messaggio';

$lang['New_posts'] = 'Nuovi messaggi';

$lang['New_post'] = 'Nuovo messaggio';

$lang['No_new_posts_hot'] = 'Nessun nuovo messaggio [ hot ]';

$lang['New_posts_hot'] = 'Nuovi messaggi [ hot ]';

$lang['No_new_posts_locked'] = 'Nessun nuovo messaggio [ chiuso ]';

$lang['New_posts_locked'] = 'Nuovi messaggi [ chiuso ]';

$lang['Forum_is_locked'] = 'Il Forum � chiuso';





//

// Login

//

$lang['Enter_password'] = 'Per favore inserisci il tuo username e la password per entrare';

$lang['Login'] = 'Login';

$lang['Logout'] = 'Esci';



$lang['Forgotten_password'] = 'Ho dimenticato la password';



$lang['Log_me_in'] = 'Login automatico ad ogni visita';



$lang['Error_login'] = 'Hai inserito uno username sbagliato o inattivo o una password non valida';





//

// Index page

//

$lang['Index'] = 'Indice';

$lang['No_Posts'] = 'Nessun messaggio';

$lang['No_forums'] = 'Questo forum � vuoto';



$lang['Private_Message'] = 'Messaggio privato';

$lang['Private_Messages'] = 'Messaggi privati';

$lang['Who_is_Online'] = 'Chi c\'� in linea';



$lang['Mark_all_forums'] = 'Segna come letti';

$lang['Forums_marked_read'] = 'Tutti i forum sono stati segnati come gi� letti';





//

// Viewforum

//

$lang['View_forum'] = 'Vedi il Forum';



$lang['Forum_not_exist'] = 'Il Forum che hai selezionato non esiste';

$lang['Reached_on_error'] = 'Sei arrivato in questa pagina per errore';



$lang['Display_topics'] = 'Mostra prima le discussioni di';

$lang['All_Topics'] = 'Tutte le discussioni';



$lang['Topic_Announcement'] = '<b>Annuncio:</b>';

$lang['Topic_Sticky'] = '<b>Importante:</b>';

$lang['Topic_Moved'] = '<b>Spostato:</b>';

$lang['Topic_Poll'] = '<b>[ Sondaggio ]</b>';



$lang['Mark_all_topics'] = 'Segna tutte le discussioni lette';

$lang['Topics_marked_read'] = 'Le discussioni di questo forum sono state segnate come gi� lette';



$lang['Rules_post_can'] = '<b>Puoi</b> inserire nuove discussioni in questo forum';

$lang['Rules_post_cannot'] = '<b>Non puoi</b> inserire nuove discussioni in questo forum';

$lang['Rules_reply_can'] = '<b>Puoi</b> rispondere alle discussioni in questo forum';

$lang['Rules_reply_cannot'] = '<b>Non puoi</b> rispondere alle discussioni in questo forum';

$lang['Rules_edit_can'] = '<b>Puoi</b> modificare i tuoi messaggi in questo forum';

$lang['Rules_edit_cannot'] = '<b>Non puoi</b> modificare i tuoi messaggi in questo forum';

$lang['Rules_delete_can'] = '<b>Puoi</b> cancellare i tuoi messaggi in questo forum';

$lang['Rules_delete_cannot'] = '<b>Non puoi</b> cancellare i tuoi messaggi in questo forum';

$lang['Rules_vote_can'] = '<b>Puoi</b> votare nei sondaggi in questo forum';

$lang['Rules_vote_cannot'] = '<b>Non puoi</b> votare nei sondaggi in questo forum';

$lang['Rules_moderate'] = '<b>Puoi</b> %smoderare questo forum%s'; // %s replaced by a href links, do not remove!



$lang['No_topics_post_one'] = 'Non ci sono discussioni in questo forum<br />Clicca su <b>Inserisci una nuova discussione</b> per inserirne una';





//

// Viewtopic

//

$lang['View_topic'] = 'Leggi la discussione';



$lang['Guest'] = 'Visitatore';

$lang['Post_subject'] = 'Oggetto';

$lang['View_next_topic'] = 'Successivo';

$lang['View_previous_topic'] = 'Precedente';

$lang['Submit_vote'] = 'Invia voto';

$lang['View_results'] = 'Vedi i risultati';



$lang['No_newer_topics'] = 'Non ci sono nuove discussioni in questo forum';

$lang['No_older_topics'] = 'Non ci sono vecchie discussioni in questo forum';

$lang['Topic_post_not_exist'] = 'La discussione o il messaggio che hai richiesto non esiste';

$lang['No_posts_topic'] = 'Non ci sono messaggi in questa discussione';



$lang['Display_posts'] = 'Mostra prima i messaggi di';

$lang['All_Posts'] = 'Tutti i messaggi';

$lang['Newest_First'] = 'Prima i nuovi';

$lang['Oldest_First'] = 'Prima i vecchi';



$lang['Back_to_top'] = 'Torna in cima';



$lang['Read_profile'] = 'Profilo';

$lang['Send_email'] = 'Invia email';

$lang['Visit_website'] = 'Homepage';

$lang['ICQ_status'] = 'Stato ICQ';

$lang['Edit_delete_post'] = 'Modifica';

$lang['View_IP'] = 'IP';

$lang['Delete_post'] = 'Cancella messaggio';



$lang['wrote'] = 'ha scritto'; // proceeds the username and is followed by the quoted text

$lang['Quote'] = 'Citazione'; // comes before bbcode quote output.

$lang['Code'] = 'Codice'; // comes before bbcode code output.



$lang['Edited_time_total'] = 'Ultima modifica di %s il %s, modificato %d volta in totale'; // Last edited by me on 12 Oct 2001, edited 1 time in total

$lang['Edited_times_total'] = 'Ultima modifica di %s il %s, modificato %d volte in totale'; // Last edited by me on 12 Oct 2001, edited 2 times in total



$lang['Lock_topic'] = 'Chiudi questa discussione';

$lang['Unlock_topic'] = 'Apri questa discussione';

$lang['Move_topic'] = 'Sposta questa discussione';

$lang['Delete_topic'] = 'Cancella questa discussione';

$lang['Split_topic'] = 'Spezza questa discussione';



$lang['Stop_watching_topic'] = 'Smetti di controllare questa discussione';

$lang['Start_watching_topic'] = 'Controlla questa discussione';

$lang['No_longer_watching'] = 'Non stai pi� controllando questa discussione';

$lang['You_are_watching'] = 'Adesso stai controllando questa discussione';



$lang['Total_votes'] = 'Voti totali';



//

// Posting/Replying (Not private messaging!)

//

$lang['Message_body'] = 'Corpo del messaggio';

$lang['Topic_review'] = 'Revisione discussione';



$lang['No_post_mode'] = 'Modo di risposta non specificato'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)



$lang['Post_a_new_topic'] = 'Inserisci una nuova discussione';

$lang['Post_a_reply'] = 'Invia una risposta';

$lang['Post_topic_as'] = 'Inserisci la discussione come';

$lang['Edit_Post'] = 'Modifica il messaggio';

$lang['Options'] = 'Opzioni';



$lang['Post_Announcement'] = 'Annuncio';

$lang['Post_Sticky'] = 'Importante';

$lang['Post_Normal'] = 'Normale';



$lang['Confirm_delete'] = 'Sei sicuro di voler cancellare questo messaggio?';

$lang['Confirm_delete_poll'] = 'Sei sicuro di voler cancellare questo sondaggio?';



$lang['Flood_Error'] = 'Non puoi inviare un nuovo messaggio cos� presto dopo l\'ultimo inserito, per favore prova di nuovo tra poco';

$lang['Empty_subject'] = 'Devi specificare un oggetto quando inserisci una nuova discussione';

$lang['Empty_message'] = 'Devi scrivere un messaggio per inserirlo';

$lang['Forum_locked'] = 'Questo forum � chiuso. Non puoi inserire, rispondere o modificare le discussioni';

$lang['Topic_locked'] = 'Discussione chiusa';

$lang['No_post_id'] = 'Non � stato specificato nessun ID';

$lang['No_topic_id'] = 'Devi selezionare una discussione a cui rispondere';

$lang['No_valid_mode'] = 'Puoi solo inviare, rispondere, modificare o citare messaggi, per favore torna indietro e prova di nuovo';

$lang['No_such_post'] = 'Questo messaggio non esiste, per favore torna indietro e prova di nuovo';

$lang['Edit_own_posts'] = 'Spiacenti ma puoi modificare solo i tuoi messaggi';

$lang['Delete_own_posts'] = 'Spiacenti ma puoi cancellare solo i tuoi messaggi';

$lang['Cannot_delete_replied'] = 'Spiacenti ma non puoi cancellare i messaggi che hanno una risposta';

$lang['Cannot_delete_poll'] = 'Spiacenti ma non puoi cancellare un sondaggio attivo';

$lang['Empty_poll_title'] = 'Devi inserire un titolo per il tuo sondaggio';

$lang['To_few_poll_options'] = 'Devi inserire almeno due opzioni per il sondaggio';

$lang['To_many_poll_options'] = 'Hai cercato di inserire troppe opzioni per il sondaggio';

$lang['Post_has_no_poll'] = 'Questo messaggio non ha nessun sondaggio';

$lang['Already_voted'] = 'Hai gi� votato in questo sondaggio';

$lang['No_vote_option'] = 'Devi specificare un\'opzione quando voti';



$lang['Add_poll'] = 'Aggiungi un sondaggio';

$lang['Add_poll_explain'] = 'Se non vuoi aggiungere un sondaggio alla tua discussione lascia vuoti i campi';

$lang['Poll_question'] = 'Domanda del sondaggio';

$lang['Poll_option'] = 'Opzione del sondaggio';

$lang['Add_option'] = 'Aggiungi un\'opzione';

$lang['Update'] = 'Aggiorna';

$lang['Delete'] = 'Cancella';

$lang['Poll_for'] = 'Attiva il sondaggio per';

$lang['Days'] = 'Giorni'; // This is used for the Run poll for ... Days + in admin_forums for pruning

$lang['Poll_for_explain'] = '[ Scrivi 0 o lascia vuoto per un sondaggio senza fine ]';

$lang['Delete_poll'] = 'Cancella il sondaggio';



$lang['Disable_HTML_post'] = 'Disabilita HTML in questo messaggio';

$lang['Disable_BBCode_post'] = 'Disabilita il BBCode in questo messaggio';

$lang['Disable_Smilies_post'] = 'Disabilita gli smilies in questo messaggio';



$lang['HTML_is_ON'] = 'HTML � <u>ATTIVO</u>';

$lang['HTML_is_OFF'] = 'HTML � <u>DISATTIVO</u>';

$lang['BBCode_is_ON'] = '%sBBCode%s � <u>ATTIVO</u>'; // %s are replaced with URI pointing to FAQ

$lang['BBCode_is_OFF'] = '%sBBCode%s � <u>DISATTIVO</u>';

$lang['Smilies_are_ON'] = 'Gli smilies sono <u>ATTIVI</u>';

$lang['Smilies_are_OFF'] = 'Gli smilies sono <u>DISATTIVI</u>';



$lang['Attach_signature'] = 'Aggiungi la firma (puoi cambiare la firma nel profilo)';

$lang['Notify'] = 'Avvisami quando viene inviata una risposta';

$lang['Delete_post'] = 'Cancella messaggio';



$lang['Stored'] = 'Il tuo messaggio � stato inserito con successo';

$lang['Deleted'] = 'Il tuo messaggio � stato cancellato con successo';

$lang['Poll_delete'] = 'Il tuo sondaggio � stato cancellato con successo';

$lang['Vote_cast'] = 'Il tuo voto � stato aggiunto';



$lang['Topic_reply_notification'] = 'Notifica di risposta alla discussione';



$lang['bbcode_b_help'] = 'Grassetto: [b]testo[/b]  (alt+b)';

$lang['bbcode_i_help'] = 'Corsivo: [i]testo[/i]  (alt+i)';

$lang['bbcode_u_help'] = 'Sottolineato: [u]testo[/u]  (alt+u)';

$lang['bbcode_q_help'] = 'Citazione: [quote]testo[/quote]  (alt+q)';

$lang['bbcode_c_help'] = 'Codice: [code]codice[/code]  (alt+c)';

$lang['bbcode_l_help'] = 'Lista: [list]testo[/list] (alt+l)';

$lang['bbcode_o_help'] = 'Lista ordinata: [list=]testo[/list]  (alt+o)';

$lang['bbcode_p_help'] = 'Inserisci un\'immagine: [img]http://image_url[/img]  (alt+p)';

$lang['bbcode_w_help'] = 'Inserisci URL: [url]http://url[/url] o [url=http://url]testo URL[/url]  (alt+w)';

$lang['bbcode_a_help'] = 'Chiudi tutti i bbCode tags aperti';

$lang['bbcode_s_help'] = 'Colore font: [color=red]testo[/color]  Suggerimento: puoi anche usare color=#FF0000';

$lang['bbcode_f_help'] = 'Dimensione font: [size=x-small]testo piccolo[/size]';



$lang['Emoticons'] = 'Emoticons';

$lang['More_emoticons'] = 'Guarda altre emoticons';



$lang['Font_color'] = 'Colore font';

$lang['color_default'] = 'Default';

$lang['color_dark_red'] = 'Rosso scuro';

$lang['color_red'] = 'Rosso';

$lang['color_orange'] = 'Arancione';

$lang['color_brown'] = 'Marrone';

$lang['color_yellow'] = 'Giallo';

$lang['color_green'] = 'Verde';

$lang['color_olive'] = 'Oliva';

$lang['color_cyan'] = 'Ciano';

$lang['color_blue'] = 'Blu';

$lang['color_dark_blue'] = 'Blu scuro';

$lang['color_indigo'] = 'Indigo';

$lang['color_violet'] = 'Viola';

$lang['color_white'] = 'Bianco';

$lang['color_black'] = 'Nero';



$lang['Font_size'] = 'Dimensione carattere';

$lang['font_tiny'] = 'Minuscolo';

$lang['font_small'] = 'Piccolo';

$lang['font_normal'] = 'Normale';

$lang['font_large'] = 'Largo';

$lang['font_huge'] = 'Enorme';



$lang['Close_Tags'] = 'Chiudi i tag';

$lang['Styles_tip'] = 'Suggerimento: gli stili possono essere applicati velocemente al testo selezionato';





//

// Private Messaging

//

$lang['Private_Messaging'] = 'Messaggi privati';



$lang['Login_check_pm'] = 'Messaggi privati';

$lang['New_pms'] = '%d nuovi messaggi'; // You have 2 new messages

$lang['New_pm'] = '%d nuovo messaggio'; // You have 1 new message

$lang['No_new_pm'] = 'Non ci sono nuovi messaggi';

$lang['Unread_pms'] = '%d messaggi non letti';

$lang['Unread_pm'] = '%d messaggio non letto';

$lang['No_unread_pm'] = 'Tutti i messaggi sono stati letti';

$lang['You_new_pm'] = 'Hai un nuovo messaggio in posta in arrivo';

$lang['You_new_pms'] = 'Ci sono nuovi messaggi in posta in arrivo';

$lang['You_no_new_pm'] = 'Non ci sono nuovi messaggi';



$lang['Unread_message'] = 'Messaggi non-letti';

$lang['Read_message'] = 'Messaggi letti';



$lang['Read_pm'] = 'Leggi messaggio';

$lang['Post_new_pm'] = 'Nuovo messaggio';

$lang['Post_reply_pm'] = 'Rispondi';

$lang['Post_quote_pm'] = 'Cita messaggio';

$lang['Edit_pm'] = 'Modifica messaggio';



$lang['Inbox'] = 'Posta in arrivo';

$lang['Outbox'] = 'Posta in uscita';

$lang['Savebox'] = 'Posta salvata';

$lang['Sentbox'] = 'Posta inviata';

$lang['Flag'] = 'Flag';

$lang['Subject'] = 'Oggetto';

$lang['From'] = 'Da';

$lang['To'] = 'A';

$lang['Date'] = 'Data';

$lang['Mark'] = 'Seleziona';

$lang['Sent'] = 'Inviato';

$lang['Saved'] = 'Salvato';

$lang['Delete_marked'] = 'Cancella selezionati';

$lang['Delete_all'] = 'Cancella tutti';

$lang['Save_marked'] = 'Salva selezionati';

$lang['Save_message'] = 'Salva messaggio';

$lang['Delete_message'] = 'Cancella messaggio';



$lang['Display_messages'] = 'Mostra i messaggi di'; // Followed by number of days/weeks/months

$lang['All_Messages'] = 'Tutti i messaggi';



$lang['No_messages_folder'] = 'Non ci sono messaggi in questa cartella';



$lang['PM_disabled'] = 'I messaggi privati sono stati disabilitati dal forum';

$lang['Cannot_send_privmsg'] = 'Spiacenti, ma l\'amministratore del forum ti ha vietato di mandare messaggi privati';

$lang['No_to_user'] = 'Devi specificare uno username per inviare il messaggio';

$lang['No_such_user'] = 'Spiacenti, ma questo utente non esiste';



$lang['Disable_HTML_pm'] = 'Disabilita HTML in questo messaggio';

$lang['Disable_BBCode_pm'] = 'Disabilita BBCode in questo messaggio';

$lang['Disable_Smilies_pm'] = 'Disabilita smilies in questo messaggio';



$lang['Message_sent'] = 'Il tuo messaggio � stato spedito';



$lang['Click_return_inbox'] = 'Clicca %squi%s per tornare alla cartella di posta in arrivo';

$lang['Click_return_index'] = 'Clicca %squi%s per tornare all\'indice';



$lang['Send_a_new_message'] = 'Invia un nuovo messaggio privato';

$lang['Send_a_reply'] = 'Rispondi ad un messaggio privato';

$lang['Edit_message'] = 'Modifica un messaggio privato';



$lang['Notification_subject'] = 'Hai un nuovo messaggio privato';



$lang['Find_username'] = 'Trova un username';

$lang['Find'] = 'Trova';

$lang['No_match'] = 'Nessun risultato';



$lang['No_post_id'] = 'Non � stato specificato nessun ID';

$lang['No_such_folder'] = 'Questa cartella non esiste';

$lang['No_folder'] = 'Nessuna cartella specificata';



$lang['Mark_all'] = 'Seleziona tutti';

$lang['Unmark_all'] = 'Deseleziona tutto';



$lang['Confirm_delete_pm'] = 'Sei sicuro di voler cancellare questo messaggio?';

$lang['Confirm_delete_pms'] = 'Sei sicuro di voler cancellare questi messaggi?';



$lang['Inbox_size'] = 'Cartella di posta in arrivo piena per il %d%%'; // eg. Your Inbox is 50% full

$lang['Sentbox_size'] = 'Cartella di posta in uscita piena per il %d%%';

$lang['Savebox_size'] = 'Cartella di posta salvata piena per il %d%%';



$lang['Click_view_privmsg'] = 'Clicca %squi%s per andare alla cartella di posta in arrivo';





//

// Profiles/Registration

//

$lang['Viewing_user_profile'] = 'Guarda il profilo :: %s'; // %s is username

$lang['About_user'] = 'Tutto su %s'; // %s is username



$lang['Preferences'] = 'Preferenze';

$lang['Items_required'] = 'Le voci contrassegnate con * sono richieste';

$lang['Registration_info'] = 'Informazioni sulla registrazione';

$lang['Profile_info'] = 'Informazioni sul profilo';

$lang['Profile_info_warn'] = 'Queste informazioni saranno visibili da tutti gli utenti';

$lang['Avatar_panel'] = 'Pannello di controllo avatar';

$lang['Avatar_gallery'] = 'Galleria avatar';



$lang['Website'] = 'Sito web';

$lang['Location'] = 'Localit�';

$lang['Contact'] = 'Contatto';

$lang['Email_address'] = 'Indirizzo email';

$lang['Email'] = 'Email';

$lang['Send_private_message'] = 'Messaggio privato';

$lang['Hidden_email'] = '[ Nascosto ]';

$lang['Search_user_posts'] = 'Trova tutti i messaggi di %s';

$lang['Interests'] = 'Interessi';

$lang['Occupation'] = 'Impiego';

$lang['Poster_rank'] = 'Graduatoria utente';



$lang['Total_posts'] = 'Messaggi totali';

$lang['User_post_pct_stats'] = '%.2f%% del totale'; // 1.25% of total

$lang['User_post_day_stats'] = '%.2f messaggi al giorno'; // 1.5 posts per day

$lang['Search_user_posts'] = 'Trova tutti i messaggi di %s'; // Find all posts by username



$lang['No_user_id_specified'] = 'Spiacenti, ma questo utente non esiste';

$lang['Wrong_Profile'] = 'Non puoi modificare un profilo che non � il tuo';



$lang['Only_one_avatar'] = 'Pu� essere specificato un solo tipo di avatar';

$lang['File_no_data'] = 'Il file all\'URL che hai fornito non contiene dati';

$lang['No_connection_URL'] = 'Non � possibile connettersi all\'URL che hai fornito';

$lang['Incomplete_URL'] = 'L\'URL che hai fornito � incompleto';

$lang['Wrong_remote_avatar_format'] = 'L\'URL dell\'avatar remoto non � valido';

$lang['No_send_account_inactive'] = 'Spiacenti, ma la tua password non pu� essere recuperata perch� il tuo account � al momento inattivo. Per favore contatta l\'amministratore del forum per ulteriori informazioni';



$lang['Always_smile'] = 'Abilita sempre gli smilies';

$lang['Always_html'] = 'Abilita sempre i codici HTML';

$lang['Always_bbcode'] = 'Abilita sempre il BBCode';

$lang['Always_add_sig'] = 'Aggiungi sempre la mia firma';

$lang['Always_notify'] = 'Avvisami sempre delle risposte';

$lang['Always_notify_explain'] = 'Manda una email quando qualcuno risponde ad una discussione a cui hai risposto. Questo pu� essere cambiato ogni volta che inserisci un nuovo messaggio.';



$lang['Board_style'] = 'Stile del forum';

$lang['Board_lang'] = 'Linguaggio del forum';

$lang['No_themes'] = 'Non ci sono temi nel database';

$lang['Timezone'] = 'Fuso orario';

$lang['Date_format'] = 'Formato della data';

$lang['Date_format_explain'] = 'La sintassi usata � identica alla funzione PHP <a href=\"http://www.php.net/manual/it/html/function.date.html\" target=\"_other\">data()</a>';

$lang['Signature'] = 'Firma';

$lang['Signature_explain'] = 'Questo � un blocco di testo che pu� essere aggiunto ai tuoi messaggi. C\'� un limite di %d caratteri';

$lang['Public_view_email'] = 'Mostra sempre il mio indirizzo email';



$lang['Current_password'] = 'Password attuale';

$lang['New_password'] = 'Nuova password';

$lang['Confirm_password'] = 'Conferma password';

$lang['Confirm_password_explain'] = 'Devi confermare la tua password attuale se vuoi cambiarla o modificare il tuo indirizzo email';

$lang['password_if_changed'] = 'Devi inserire la password solo se vuoi cambiarla';

$lang['password_confirm_if_changed'] = 'Devi confermare la tua password solo se ne hai inserita una nuova qui sopra';



$lang['Avatar'] = 'Avatar';

$lang['Avatar_explain'] = 'Mostra una piccola immagine grafica sotto i tuoi dettagli nel messaggio. Pu� essere mostrata una sola immagine alla volta, la sua larghezza massima � di %d pixel, l\'altezza di %d pixel e il file deve essere pi� piccolo di %dkB.';

$lang['Upload_Avatar_URL'] = 'Carica l\'avatar da un URL';

$lang['Upload_Avatar_URL_explain'] = 'Inserisci l\'URL dell\'avatar, verr� copiato in questo sito.';

$lang['Pick_local_Avatar'] = 'Seleziona l\'avatar dalla gallery';

$lang['Link_remote_Avatar'] = 'Link ad un avatar off-site';

$lang['Link_remote_Avatar_explain'] = 'Inserisci l\'URL dell\'avatar che vuoi linkare';

$lang['Avatar_URL'] = 'URL dell\'avatar';

$lang['Select_from_gallery'] = 'Seleziona l\'avatar dalla gallery';

$lang['View_avatar_gallery'] = 'Mostra la gallery';



$lang['Select_avatar'] = 'Seleziona l\'avatar';

$lang['Return_profile'] = 'Cancella l\'avatar';

$lang['Select_category'] = 'Seleziona la categoria';



$lang['Delete_Image'] = 'Cancella l\'immagine';

$lang['Current_Image'] = 'Immagine attuale';



$lang['Notify_on_privmsg'] = 'Notifica sui nuovi messaggi privati';

$lang['Popup_on_privmsg'] = 'Finestra di popup sul nuovo messaggio privato';

$lang['Popup_on_privmsg_explain'] = 'Alcuni modelli possono aprire una nuova finestra per informarti quando un nuovo messaggio arriva';

$lang['Hide_user'] = 'Nascondi il tuo stato online';



$lang['Profile_updated'] = 'Il tuo profilo � stato aggiornato';

$lang['Profile_updated_inactive'] = 'Il tuo profilo � stato aggiornato. Hai modificato dettagli importanti anche se il tuo account non � ancora attivo. Controlla la tua email per riattivare il tuo account, o, se richiesta, aspetta la riattivazione da parte dell\'amministratore';



$lang['Password_mismatch'] = 'La password che hai inserito non corrisponde';

$lang['Current_password_mismatch'] = 'La password attuale che hai fornito non corrisponde a quella inserita nel database';

$lang['Password_long'] = 'La tua password non deve essere pi� lunga di 32 caratteri';

$lang['Username_taken'] = 'Spiacenti, ma questo username esiste gi�';

$lang['Username_invalid'] = 'Spiacenti, ma questo username contiene un carattere invalido come \"';

$lang['Username_disallowed'] = 'Spiacenti, ma questo username � stato disabilitato';

$lang['Email_taken'] = 'Spiacenti, ma questo indirizzo email � gi� stato registrato da un utente';

$lang['Email_banned'] = 'Spiacenti, ma questo indirizzo email � stato escluso';

$lang['Email_invalid'] = 'Spiacenti, ma questo indirizzo email non � valido';

$lang['Signature_too_long'] = 'La tua firma � troppo lunga';

$lang['Fields_empty'] = 'Devi riempire i campi richiesti';

$lang['Avatar_filetype'] = 'Il file dell\'avatar deve essere .jpg, .gif o .png';

$lang['Avatar_filesize'] = 'La grandezza del file dell\'avatar deve essere inferiore a %d kB'; // The avatar image file size must be less than 6 kB

$lang['Avatar_imagesize'] = 'L\'avatar deve essere pi� piccolo di %d pixel di larghezza e di %d pixel di altezza';



$lang['Welcome_subject'] = 'Benvenuto nel forum di %s'; // Welcome to my.com forums

$lang['New_account_subject'] = 'Account nuovo utente';

$lang['Account_activated_subject'] = 'Account attivato';



$lang['Account_added'] = 'Grazie per esserti registrato, il tuo account � stato creato. Adesso puoi entrare con il tuo username e password';

$lang['Account_inactive'] = 'Il tuo account � stato creato. Comunque, questo forum richiede l\'attivazione dell\'account. La chiave per l\'attivazione � stata mandata all\'indirizzo email che hai inserito. Per favore controlla la tua email per ulteriori informazioni.';

$lang['Account_inactive_admin'] = 'Il tuo account � stato creato. Comunque questo forum richiede l\'attivazione dell\'account da parte dell\'amministratore. Una email � stata spedita all\'amministratore e sarai informato quando il tuo account sar� attivato';

$lang['Account_active'] = 'Il tuo account � stato attivato. Grazie per esserti registrato.';

$lang['Account_active_admin'] = 'L\'account � stato attivato.';

$lang['Reactivate'] = 'Riattiva il tuo account!';

$lang['Already_activated'] = 'Questo account � gi� stato attivato';

$lang['COPPA'] = 'Il tuo account � stato creato, ma deve essere approvato. Per favore controlla la tua email per ulteriori dettagli.';



$lang['Registration'] = 'Termini per la registrazione';

$lang['Reg_agreement'] = 'Anche se gli amministratori e i moderatori di questo forum cercheranno di rimuovere o modificare tutto il materiale contestabile il pi� velocemente possibile, � comunque impossibile verificare ogni messaggio. Tuttavia sei consapevole che tutti i messaggi di questo forum esprimono il punto di vista e le opinioni dell\'autore e non quelle degli amministratori, dei moderatori o del webmaster (eccetto i messaggi degli stessi) e per questo non sono perseguibili.<br /><br />L\'utente concorda di non inviare messaggi abusivi, osceni, volgari, diffamatori, di odio, minatori, sessuali o qualunque altro materiale che possa violare qualunque legge applicabile. Inserendo messaggi di questo tipo l\'utente verr� immediatamente e permanentemente escluso (e il tuo provider verr� informato). L\'indirizzo IP di tutti i messaggi viene registrato per aiutare a rinforzare queste condizioni. L\'utente concorda che il webmaster, l\'amministratore e i moderatori di questo forum hanno il diritto di rimuovere, modificare, o chiudere ogni discussione ogni volta che lo ritengano necessario. Come utente concordi che ogni informazione che � stata inserita verr� conservata in un database. Poich� queste informazioni non verranno cedute a terzi senza il tuo consenso, il webmaster, l\'amministratore e i moderatori non possono essere ritenuti responsabili per gli attacchi da parte degli hacker che possano compromettere i dati.<br /><br />Questo forum usa i cookie per conservare informazioni sul tuo computer locale. Questi cookie non contengono le informazioni che hai inserito in precedenza, servono soltanto per migliorare il piacere della tua visita. L\'indirizzo email viene utilizzato solo per confermare i dettagli della tua registrazione e per la password (e per inviare una nuova password nel caso dovessi perdere quella attuale).<br /><br />Cliccando Registra qui sotto accetti queste condizioni.';



$lang['Agree_under_13'] = 'Accetto queste condizioni e ho <b>meno</b> di 13 anni';

$lang['Agree_over_13'] = 'Accetto queste condizioni';

$lang['Agree_not'] = 'Non accetto queste condizioni';



$lang['Wrong_activation'] = 'La chiave di attivazione che hai fornito non corrisponde a nessuna nel database';

$lang['Send_password'] = 'Inviami una nuova password';

$lang['Password_updated'] = 'Una nuova password � stata creata, per favore controlla la tua email per maggiori dettagli su come attivarla';

$lang['No_email_match'] = 'L\'indirizzo email che hai fornito non corrisponde a quello inserito per questo username';

$lang['New_password_activation'] = 'Attivazione nuova password';

$lang['Password_activated'] = 'Il tuo account � stato riattivato. Per entrare usa la password che hai ricevuto nella email';



$lang['Send_email_msg'] = 'Invia un messaggio email';

$lang['No_user_specified'] = 'Non � stato specificato nessun utente';

$lang['User_prevent_email'] = 'Questo utente non gradisce ricevere email. Prova ad inviare un messaggio privato';

$lang['User_not_exist'] = 'Questo utente non esiste';

$lang['CC_email'] = 'Invia una copia di questa email a te stesso';

$lang['Email_message_desc'] = 'Questo messaggio verr� inviato come testo, non includere nessun codice HTML o BBCode. L\'indirizzo per la risposta per questo messaggio � il tuo indirizzo email.';

$lang['Flood_email_limit'] = 'Non puoi inviare un\'altra email al momento. Prova pi� tardi.';

$lang['Recipient'] = 'Cestino';

$lang['Email_sent'] = 'Questa email � stata inviata';

$lang['Send_email'] = 'Invia email';

$lang['Empty_subject_email'] = 'Devi specificare un oggetto per l\'email';

$lang['Empty_message_email'] = 'Devi inserire un messaggio da inviare';





//

// Memberslist

//

$lang['Select_sort_method'] = 'Seleziona un ordine';

$lang['Sort'] = 'Ordina';

$lang['Sort_Top_Ten'] = 'I migliori 10 autori';

$lang['Sort_Joined'] = 'Data di registrazione';

$lang['Sort_Username'] = 'Username';

$lang['Sort_Location'] = 'Localit�';

$lang['Sort_Posts'] = 'Messaggi totali';

$lang['Sort_Email'] = 'Email';

$lang['Sort_Website'] = 'Sito web';

$lang['Sort_Ascending'] = 'Crescente';

$lang['Sort_Descending'] = 'Decrescente';

$lang['Order'] = 'Ordina';





//

// Group control panel

//

$lang['Group_Control_Panel'] = 'Pannello di controllo gruppo';

$lang['Group_member_details'] = 'Dettagli utenti gruppo';

$lang['Group_member_join'] = 'Iscrivi un gruppo utenti';



$lang['Group_Information'] = 'Informazioni sul gruppo';

$lang['Group_name'] = 'Nome gruppo';

$lang['Group_description'] = 'Descrizione gruppo';

$lang['Group_membership'] = 'Appartenenza al gruppo';

$lang['Group_Members'] = 'Utenti del gruppo';

$lang['Group_Moderator'] = 'Moderatore del gruppo';

$lang['Pending_members'] = 'Utenti in attesa';



$lang['Group_type'] = 'Tipo di gruppo';

$lang['Group_open'] = 'Gruppo aperto';

$lang['Group_closed'] = 'Gruppo chiuso';

$lang['Group_hidden'] = 'Gruppo nascosto';



$lang['Current_memberships'] = 'Utenti attuali';

$lang['Non_member_groups'] = 'Gruppi non di utenti';

$lang['Memberships_pending'] = 'Utenti in attesa';



$lang['No_groups_exist'] = 'Non esistono gruppi';

$lang['Group_not_exist'] = 'Quel gruppo di utenti non esiste';



$lang['Join_group'] = 'Iscriviti ad un gruppo';

$lang['No_group_members'] = 'Questo gruppo non ha utenti';

$lang['Group_hidden_members'] = 'Questo gruppo � nascosto, non puoi vedere i suoi utenti';

$lang['No_pending_group_members'] = 'Questo gruppo non ha utenti in attesa';

$lang['Group_joined'] = 'Ti sei iscritto a questo gruppo con successo.<br />Sarai avvisato quando la tua iscrizione verr� approvata dal moderatore del gruppo.';

$lang['Group_request'] = 'C\'� una richiesta di iscrizione al tuo gruppo';

$lang['Group_approved'] = 'La tua richiesta � stata approvata';

$lang['Group_added'] = 'Sei stato aggiunto a questo gruppo utenti';

$lang['Already_member_group'] = 'Sei gi� un utente di questo gruppo';

$lang['User_is_member_group'] = 'E\' gi� un utente di questo gruppo';

$lang['Group_type_updated'] = 'Tipo di gruppo aggiornato con successo';



$lang['Could_not_add_user'] = 'L\'utente che hai selezionato non esiste';

$lang['Could_not_anon_user'] = 'L\'utente anonimo non pu� essere utente di un gruppo';



$lang['Confirm_unsub'] = 'Sei sicuro di volerti cancellare da questo gruppo?';

$lang['Confirm_unsub_pending'] = 'La tua iscrizione a questo gruppo non � ancora stata approvata, sei sicuro di volerti cancellare?';



$lang['Unsub_success'] = 'Sei stato cancellato da questo gruppo';



$lang['Approve_selected'] = 'Approvazione selezionata';

$lang['Deny_selected'] = 'Rifiuto selezionato';

$lang['Not_logged_in'] = 'Per iscriverti ad un gruppo devi essere registrato.';

$lang['Remove_selected'] = 'Rimuovi selezionati';

$lang['Add_member'] = 'Aggiungi utente';

$lang['Not_group_moderator'] = 'Non sei il moderatore di questo gruppo, quindi non puoi eseguire questa azione.';



$lang['Login_to_join'] = 'Entra per iscriverti o gestire un gruppo di utenti';

$lang['This_open_group'] = 'Questo � un gruppo aperto, clicca per richiedere l\'adesione';

$lang['This_closed_group'] = 'Questo � un gruppo chiuso, non si accettano altri utenti';

$lang['This_hidden_group'] = 'Questo � un gruppo nascosto, non � permesso aggiungere nuovi utenti automaticamente';

$lang['Member_this_group'] = 'Sei un utente di questo gruppo';

$lang['Pending_this_group'] = 'La tua iscrizione a questo gruppo � in attesa';

$lang['Are_group_moderator'] = 'Sei il moderatore di questo gruppo';

$lang['None'] = 'Nessuno';



$lang['Subscribe'] = 'Iscriviti';

$lang['Unsubscribe'] = 'Cancella';

$lang['View_Information'] = 'Guarda informazioni';





//

// Search

//

$lang['Search_query'] = 'Frase di ricerca';

$lang['Search_options'] = 'Opzioni di ricerca';



$lang['Search_keywords'] = 'Ricerca per parole chiave';

$lang['Search_keywords_explain'] = 'Puoi usare <u>AND</u> per definire le parole che devono essere nel risultato della ricerca, <u>OR</u> per definire le parole che potrebbero essere nel risultato e <u>NOT</u> per definire le parole che non devono essere nel risultato. Usa * come abbrevazione per parole parziali';

$lang['Search_author'] = 'Cerca per autore';

$lang['Search_author_explain'] = 'Usa * come abbreviazione per parole parziali';



$lang['Search_for_any'] = 'Cerca per ogni parola oppure usa la frase esatta';

$lang['Search_for_all'] = 'Cerca tutti i termini';

$lang['Search_title_msg'] = 'Cerca nel titolo della discussione e nel testo del messaggio';

$lang['Search_msg_only'] = 'Cerca solo nel testo del messaggio';



$lang['Return_first'] = 'Dai i primi'; // followed by xxx characters in a select box

$lang['characters_posts'] = 'caratteri del messaggio';



$lang['Search_previous'] = 'Cerca i messaggi di'; // followed by days, weeks, months, year, all in a select box



$lang['Sort_by'] = 'Ordina per';

$lang['Sort_Time'] = 'Data messaggio';

$lang['Sort_Post_Subject'] = 'Oggetto messaggio';

$lang['Sort_Topic_Title'] = 'Titolo discussione';

$lang['Sort_Author'] = 'Autore';

$lang['Sort_Forum'] = 'Forum';



$lang['Display_results'] = 'Mostra i risultati come';

$lang['All_available'] = 'Tutto disponibile';

$lang['No_searchable_forums'] = 'Non hai il permesso di cercare nel forum di questo sito';



$lang['No_search_match'] = 'Nessuna discussione o messaggio con questo criterio di ricerca';

$lang['Found_search_match'] = 'La ricerca ha trovato %d risultato'; // eg. Search found 1 match

$lang['Found_search_matches'] = 'La ricerca ha trovato %d risultati'; // eg. Search found 24 matches



$lang['Close_window'] = 'Chiudi finestra';





//

// Auth related entries

//

// Note the %s will be replaced with one of the following 'user' arrays

$lang['Sorry_auth_announce'] = 'Spiacenti, ma solo %s possono inviare annunci in questo forum';

$lang['Sorry_auth_sticky'] = 'Spiacenti, ma solo %s possono inviare messaggi importanti in questo forum';

$lang['Sorry_auth_read'] = 'Spiacenti, ma solo %s possono leggere le discussioni in questo forum';

$lang['Sorry_auth_post'] = 'Spiacenti, ma solo %s possono inserire discussioni in questo forum';

$lang['Sorry_auth_reply'] = 'Spiacenti, ma solo %s possono rispondere ai messaggi in questo forum';

$lang['Sorry_auth_edit'] = 'Spiacenti, ma solo %s possono modificare i messaggi in questo forum';

$lang['Sorry_auth_delete'] = 'Spiacenti, ma solo %s possono cancellare i messaggi in questo forum';

$lang['Sorry_auth_vote'] = 'Spiacenti, ma solo %s possono votare nei sondaggi in questo forum';



// These replace the %s in the above strings

$lang['Auth_Anonymous_Users'] = '<b>gli utenti anonimi</b>';

$lang['Auth_Registered_Users'] = '<b>gli utenti registrati</b>';

$lang['Auth_Users_granted_access'] = '<b>gli utenti con accesso speciale</b>';

$lang['Auth_Moderators'] = '<b>i moderatori</b>';

$lang['Auth_Administrators'] = '<b>gli amministratori</b>';



$lang['Not_Moderator'] = 'Non sei un moderatore di questo forum';

$lang['Not_Authorised'] = 'Non autorizzato';



$lang['You_been_banned'] = 'Sei stato escluso da questo forum<br />per favore contatta il webmaster o l\'amministratore per ulteriori informazioni';





//

// Viewonline

//

$lang['Reg_users_zero_online'] = 'Ci sono 0 utenti registrati e '; // There ae 5 Registered and

$lang['Reg_users_online'] = 'Ci sono %d utenti registrati e '; // There ae 5 Registered and

$lang['Reg_user_online'] = 'C\'� %d utente registrato e '; // There ae 5 Registered and

$lang['Hidden_users_zero_online'] = '0 utenti nascosti in linea'; // 6 Hidden users online

$lang['Hidden_users_online'] = '%d utenti nascosti in linea'; // 6 Hidden users online

$lang['Hidden_user_online'] = '%d utente nascosto in linea'; // 6 Hidden users online

$lang['Guest_users_online'] = 'Ci sono %d visitatori in linea'; // There are 10 Guest users online

$lang['Guest_users_zero_online'] = 'Ci sono 0 visitatori in linea'; // There are 10 Guest users online

$lang['Guest_user_online'] = 'C\'� %d visitatore in linea'; // There is 1 Guest user online

$lang['No_users_browsing'] = 'Al momento non ci sono utenti nel forum';



$lang['Online_explain'] = 'Questi dati si basano sugli utenti in linea negli ultimi cinque minuti';



$lang['Forum_Location'] = 'Localit� del forum';

$lang['Last_updated'] = 'Ultimo aggiornamento';



$lang['Forum_index'] = 'Indice forum';

$lang['Logging_on'] = 'Sta entrando';

$lang['Posting_message'] = 'Sta inviando un messaggio';

$lang['Searching_forums'] = 'Sta cercando nei forum';

$lang['Viewing_profile'] = 'Sta guardando il profilo';

$lang['Viewing_online'] = 'Sta guardando chi c\'� in linea';

$lang['Viewing_member_list'] = 'Sta guardando la lista degli utenti';

$lang['Viewing_priv_msgs'] = 'Sta guardando i messaggi privati';

$lang['Viewing_FAQ'] = 'Sta guardando le FAQ';





//

// Moderator Control Panel

//

$lang['Mod_CP'] = 'Pannello di controllo moderatori';

$lang['Mod_CP_explain'] = 'Utilizzando il modulo qui sotto puoi eseguire operazioni di massa su questo forum. Puoi bloccare, sbloccare, spostare o cancellare qualunque numero di discussioni.';



$lang['Select'] = 'Seleziona';

$lang['Delete'] = 'Cancella';

$lang['Move'] = 'Sposta';

$lang['Lock'] = 'Chiudi';

$lang['Unlock'] = 'Riapri';



$lang['Topics_Removed'] = 'Le discussioni selezionate sono state rimosse dal database con successo.';

$lang['Topics_Locked'] = 'Le discussioni selezionate sono state chiuse';

$lang['Topics_Moved'] = 'Le discussioni selezionate sono state spostate';

$lang['Topics_Unlocked'] = 'Le discussioni selezionate sono state ri-aperte';

$lang['No_Topics_Moved'] = 'Non � stato spostato nessuna discussione';



$lang['Confirm_delete_topic'] = 'Sei sicuro di voler eliminare le discussioni selezionate ?';

$lang['Confirm_lock_topic'] = 'Sei sicuro di voler chiudere i topics selezionati ?';

$lang['Confirm_unlock_topic'] = 'Sei sicuro di voler ri-aprire le discussioni selezionate ?';

$lang['Confirm_move_topic'] = 'Sei sicuro di voler spostare le discussioni selezionate ?';



$lang['Move_to_forum'] = 'Vai al forum';

$lang['Leave_shadow_topic'] = 'Lascia una discussione ombra nel vecchio forum';



$lang['Split_Topic'] = 'Pannello di controllo per la divisione delle discussioni';

$lang['Split_Topic_explain'] = 'Utilizzando il modulo qui sotto puoi dividere una discussione in due, sia selezionando i messaggi individualmente, sia dividendo la discussione da un messaggio selezionato in poi';

$lang['Split_title'] = 'Titolo nuova discussione';

$lang['Split_forum'] = 'Forum per la nuova discussione';

$lang['Split_posts'] = 'Dividi i messaggi selezionati';

$lang['Split_after'] = 'Dividi dal messaggio selezionato';

$lang['Topic_split'] = 'La discussione selezionata � stata divisa con successo';



$lang['Too_many_error'] = 'Hai selezionato troppi messaggi. Puoi selezionare solo il messaggio da cui dividere la discussione';



$lang['None_selected'] = 'Non hai selezionato nessuna discussione nella quale eseguire questa operazione. Per favore torna indietro e selezionane almeno uno.';

$lang['New_forum'] = 'Nuovo forum';



$lang['This_posts_IP'] = 'Indirizzo IP per questo messaggio';

$lang['Other_IP_this_user'] = 'Altri indirizzo IP utilizzati da questo utente';

$lang['Users_this_IP'] = 'Utenti che utilizzano questo indirizzo IP';

$lang['IP_info'] = 'Informazioni sull\'indirizzo IP';

$lang['Lookup_IP'] = 'Cerca l\'indirizzo IP';





//

// Timezones ... for display on each page

//

$lang['All_times'] = 'Tutti i fusi orari sono %s'; // eg. All times are GMT - 12 Hours (times from next block)



$lang['-12'] = 'GMT - 12 ore';

$lang['-11'] = 'GMT - 11 ore';

$lang['-10'] = 'GMT - 10 ore';

$lang['-9'] = 'GMT - 9 ore';

$lang['-8'] = 'GMT - 8 ore';

$lang['-7'] = 'GMT - 7 ore';

$lang['-6'] = 'GMT - 6 ore';

$lang['-5'] = 'GMT - 5 ore';

$lang['-4'] = 'GMT - 4 ore';

$lang['-3.5'] = 'GMT - 3.5 ore';

$lang['-3'] = 'GMT - 3 ore';

$lang['-2'] = 'GMT - 2 ore';

$lang['-1'] = 'GMT - 1 ore';

$lang['0'] = 'GMT';

$lang['1'] = 'GMT + 1 ora';

$lang['2'] = 'GMT + 2 ore';

$lang['3'] = 'GMT + 3 ore';

$lang['3.5'] = 'GMT + 3.5 ore';

$lang['4'] = 'GMT + 4 ore';

$lang['4.5'] = 'GMT + 4.5 ore';

$lang['5'] = 'GMT + 5 ore';

$lang['5.5'] = 'GMT + 5.5 ore';

$lang['6'] = 'GMT + 6 ore';

$lang['6.5'] = 'GMT + 6.5 ore';

$lang['7'] = 'GMT + 7 ore';

$lang['8'] = 'GMT + 8 ore';

$lang['9'] = 'GMT + 9 ore';

$lang['9.5'] = 'GMT + 9.5 ore';

$lang['10'] = 'GMT + 10 ore';

$lang['11'] = 'GMT + 11 ore';

$lang['12'] = 'GMT + 12 ore';



// These are displayed in the timezone select box

$lang['tz']['-12'] = 'GMT -12:00 ore';

$lang['tz']['-11'] = 'GMT -11:00 ore';

$lang['tz']['-10'] = 'GMT -10:00 ore';

$lang['tz']['-9'] = 'GMT -9:00 ore';

$lang['tz']['-8'] = 'GMT -8:00 ore';

$lang['tz']['-7'] = 'GMT -7:00 ore';

$lang['tz']['-6'] = 'GMT -6:00 ore';

$lang['tz']['-5'] = 'GMT -5:00 ore';

$lang['tz']['-4'] = 'GMT -4:00 ore';

$lang['tz']['-3.5'] = 'GMT -3:30 ore';

$lang['tz']['-3'] = 'GMT -3:00 ore';

$lang['tz']['-2'] = 'GMT -2:00 ore';

$lang['tz']['-1'] = 'GMT -1:00 ora';

$lang['tz']['0'] = 'GMT';

$lang['tz']['1'] = 'GMT +1:00 ora';

$lang['tz']['2'] = 'GMT +2:00 ore';

$lang['tz']['3'] = 'GMT +3:00 ore';

$lang['tz']['3.5'] = 'GMT +3:30 ore';

$lang['tz']['4'] = 'GMT +4:00 ore';

$lang['tz']['4.5'] = 'GMT +4:30 ore';

$lang['tz']['5'] = 'GMT +5:00 ore';

$lang['tz']['5.5'] = 'GMT +5:30 ore';

$lang['tz']['6'] = 'GMT +6:00 ore';

$lang['tz']['6.5'] = 'GMT +6:30 ore';

$lang['tz']['7'] = 'GMT +7:00 ore';

$lang['tz']['8'] = 'GMT +8:00 ore';

$lang['tz']['9'] = 'GMT +9:00 ore';

$lang['tz']['9.5'] = 'GMT +9:30 ore';

$lang['tz']['10'] = 'GMT +10:00 ore';

$lang['tz']['11'] = 'GMT +11:00 ore';

$lang['tz']['12'] = 'GMT +12:00 ore';
$lang['tz']['13'] = 'GMT + 13 Hours';


$lang['datetime']['Sunday'] = 'Domenica';

$lang['datetime']['Monday'] = 'Luned�';

$lang['datetime']['Tuesday'] = 'Marted�';

$lang['datetime']['Wednesday'] = 'Mercoled�';

$lang['datetime']['Thursday'] = 'Gioved�';

$lang['datetime']['Friday'] = 'Venerd�';

$lang['datetime']['Saturday'] = 'Sabato';

$lang['datetime']['Sun'] = 'Dom';

$lang['datetime']['Mon'] = 'Lun';

$lang['datetime']['Tue'] = 'Mar';

$lang['datetime']['Wed'] = 'Mer';

$lang['datetime']['Thu'] = 'Gio';

$lang['datetime']['Fri'] = 'Ven';

$lang['datetime']['Sat'] = 'Sab';

$lang['datetime']['January'] = 'Gennaio';

$lang['datetime']['February'] = 'Febbraio';

$lang['datetime']['March'] = 'Marzo';

$lang['datetime']['April'] = 'Aprile';

$lang['datetime']['May'] = 'Maggio';

$lang['datetime']['June'] = 'Giugno';

$lang['datetime']['July'] = 'Luglio';

$lang['datetime']['August'] = 'Agosto';

$lang['datetime']['September'] = 'Settembre';

$lang['datetime']['October'] = 'Ottobre';

$lang['datetime']['November'] = 'Novembre';

$lang['datetime']['December'] = 'Dicembre';

$lang['datetime']['Jan'] = 'Gen';

$lang['datetime']['Feb'] = 'Feb';

$lang['datetime']['Mar'] = 'Mar';

$lang['datetime']['Apr'] = 'Apr';

$lang['datetime']['May'] = 'Mag';

$lang['datetime']['Jun'] = 'Giu';

$lang['datetime']['Jul'] = 'Lug';

$lang['datetime']['Aug'] = 'Ago';

$lang['datetime']['Sep'] = 'Set';

$lang['datetime']['Oct'] = 'Ott';

$lang['datetime']['Nov'] = 'Nov';

$lang['datetime']['Dec'] = 'Dic';



//

// Errors (not related to a

// specific failure on a page)

//

$lang['Information'] = 'Informazione';

$lang['Critical_Information'] = 'Informazione critica';



$lang['General_Error'] = 'Errore generale';

$lang['Critical_Error'] = 'Errore critico';

$lang['An_error_occured'] = 'Si � verificato un errore';

$lang['A_critical_error'] = 'Si � verificato un errore critico';
$lang['TRANSLATION_INFO'] = 'Supporto italiano by <a href="http://www.openitalia.net/" >Open Italia</a>';


//

// That's all Folks!

// -------------------------------------------------



?>