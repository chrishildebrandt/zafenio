<?php
/***************************************************************************
 *                            lang_main_attach.php [Polish]
 *                              -------------------
 *     begin                : Sun Mar 17 2002
 *     copyright            : (C) 2002 Marek Sliwinski
 *     email                : elfy@tolkien.com.pl
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/04/20 09:27:26 bob Exp $
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
$lang['Rules_attach_can'] = '<b>Mo¿esz</b> dodawaæ za³±czniki w tym forum';
$lang['Rules_attach_cannot'] = '<b>Nie mo¿esz</b> dodawaæ za³±czników w tym forum';
$lang['Rules_download_can'] = '<b>Mo¿esz</b> ¶ci±gaæ pliki w tym forum';
$lang['Rules_download_cannot'] = '<b>Nie mo¿esz</b> ¶ci±gaæ plików w tym forum';
$lang['Sorry_auth_view_attach'] = 'Przykro nam, ale nie masz zezwolenia na ogl±danie lub ¶ci±ganie tego za³±cznika';

// Viewtopic -> Display of Attachments
$lang['Download_number'] = 'Plik ¶ci±gniêto lub wy¶wietlono %d raz(y)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Rozszerzenie \'%s\' zosta³o wy³±czone przez Administratora, dlatego ten Za³±cznik nie jest wy¶wietlany.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Panel Kontrolny Wysy³ania Za³±czników';
$lang['Attach_posting_cp_explain'] = 'Je¿eli klikniesz na Dodaj Za³±cznik ujrzysz pola przeznaczone dla dodawania Za³±czników.<br />Je¿eli klikniesz na Wys³ane Za³±czniki ujrzysz listê ju¿ za³±czonych plików i bêdziesz móg³ je edytowaæ.<br />Je¿eli chcesz Zast±piæ Za³±cznik (umie¶ciæ now± wersjê pliku), musisz skorzystaæ z obydwu linków. Najpierw dodaj nazwê za³±cznika jak zwykle (przycisk Dodaj Za³±cznik i pole Nazwa Pliku) ale potem nie klikaj na Wy¶lij Za³±cznik ale na przycisk Umie¶æ Now± Wersjê przy za³±czniku który chcesz uaktualniæ (liczba ¶ci±gniêæ i komentarz pozostan± niezmienione, zast±piony zostanie jedynie plik za³±cznika).';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Wy¶lij Za³±cznik';
$lang['Add_attachment_title'] = 'Dodaj Za³±cznik';
$lang['Add_attachment_explain'] = 'Je¿eli nie chcesz dodaæ za³±cznika do swojego wpisu pozostaw to pole puste';
$lang['File_name'] = 'Nazwa pliku';
$lang['File_comment'] = 'Komentarz do za³±cznika';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Wys³ane Za³±czniki';
$lang['Options'] = 'Opcje';
$lang['Update_comment'] = 'Aktualizuj Komentarz';
$lang['Delete_attachments'] = 'Skasuj Za³±czniki';
$lang['Delete_attachment'] = 'Skasuj Za³±cznik';
$lang['Delete_thumbnail'] = 'Skasuj Miniaturkê';
$lang['Upload_new_version'] = 'Umie¶æ Now± Wersjê';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s - niepoprawna nazwa pliku'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Rozmiar pliku za³±cznika jest za du¿y.<br />Nie mo¿e przekraczaæ limitu ustawionego w PHP przez administratora serwera. Attachment Mod nie jest w stanie ustaliæ ile wynosi ten limit.';
$lang['Attachment_php_size_overrun'] = 'Za³±cznik jest za du¿y.<br />Max. zdefiniowany rozmiar w PHP: %d MB. Ten rozmiar ustawiony jest na serwerze w pliku php.ini i Attachment Mod nie jest w stanie go zmieniæ.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Rozszerzenie pliku %s jest niedozwolone'; // replace %s with extension (e.g. .php)
$lang['Attachment_too_big'] = 'Za³±cznik jest za du¿y.<br />Max. rozmiar: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Przykro nam, ale przestrzeñ dyskowa dla za³±czników zosta³a wyczerpana. Skontaktuj siê z Administratorem je¿eli masz jakie¶ pytania.';
$lang['Too_many_attachments'] = 'Za³±cznik nie mo¿e zostaæ dodany poniewa¿ max. liczba za³±czników we wpisie jest ograniczona do %d '; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Za³±cznik/Obrazek musi byæ mniejszy ni¿ %d pikseli szeroko¶ci i %d pikseli wysoko¶ci';
$lang['General_upload_error'] = 'B³±d ³adowania pliku: Nie mo¿na za³adowaæ za³±cznika %s na serwer'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Musisz wpisaæ nazwê za³±cznika w pole \'Dodaj Za³±cznik\'';
$lang['Error_missing_old_entry'] = 'Uaktualnienie Za³±cznika nie powiod³o siê, nie znaleziono starej wersji Za³±cznika';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Niestety, ale limit pojemno¶ci na wszystkie za³±czniki w twojej Skrzynce Prywatnych Wiadomo¶ci zosta³ wyczerpany. Skasuj czê¶æ otrzymanych/wys³anych za³±czników.';
$lang['Attach_quota_receiver_pm_reached'] = 'Niestety, ale limit pojemno¶ci na wszystkie za³±czniki w Skrzynce Prywatnych Wiadomo¶ci u¿ytkownika \'%s\' zosta³ wyczerpany. Powiadom go o tym lub poczekaj a¿ skasuje czê¶æ swoich za³±czników.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Nie wybra³e¶ za³±cznika do ¶ci±gniêcia lub wy¶wietlenia.';
$lang['Error_no_attachment'] = 'Wybrany Za³±cznik nie istnieje (zosta³ skasowany).';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Na pewno chcesz skasowaæ zaznaczone Za³±czniki?';
$lang['Deleted_attachments'] = 'Zaznaczone Za³±czniki zosta³y skasowane.';
$lang['Error_deleted_attachments'] = 'Skasowanie Za³±czników nie powiod³o siê!';
$lang['Confirm_delete_pm_attachments'] = 'Jeste¶ pewien, ¿e chcesz skasowaæ wszystkie za³±czniki z tego PW?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Funkcja dodawania za³±czników jest wy³±czona.';

$lang['Directory_does_not_exist'] = 'Katalog \'%s\' nie istnieje lub nie zosta³ znaleziony.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Sprawd¼ czy \'%s\' jest nazw± katalogu.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Katalog \'%s\' nie jest dostêpny do zapisu. Musisz ustawiæ uprawnienia do zapisu dla katalogu w którym maj± byæ przechowywane pliki za³±czników (komenda: chmod 777 <nazwa katalogu>). Dopiero wtedy bêdzie mo¿liwe ³±dowanie/zapisywanie za³±czników na serwerze.<br />Je¿eli masz dostêp tylko przez FTP to zmieñ atrybuty katalogu na rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Po³±czenie z serwerem FTP: \'%s\' nie powiod³o siê. Sprawd¼ ustawienia swojego klienta (programu) FTP.';
$lang['Ftp_error_login'] = 'Logowanie do serwera FTP nie powiod³o siê. Sprawd¼ swoj± Nazwê U¿ytkownika \'%s\' i Has³o.';
$lang['Ftp_error_path'] = 'Brak dostêpu do katalogu: \'%s\' serwera FTP. Sprawd¼ ustawienia swojego klienta (programu) FTP.';
$lang['Ftp_error_upload'] = 'Kopiowanie plików na serwer do katalogu: \'%s\' nie powiod³o siê. Sprawd¼ ustawienia swojego klienta (programu) FTP.';
$lang['Ftp_error_delete'] = 'Nie mo¿na skasowaæ plików na serwerze w katalogu: \'%s\'. Sprawd¼ ustawienia swojego klienta (programu) FTP.<br />Inn± przyczyn± tego b³êdu mo¿e byæ nie istniej±cy za³±cznik. Sprawd¼ to najpierw w opcji Fa³szywe Za³±czniki.';

// Attach Rules Window
$lang['Rules_page'] = 'Attachment Rules';
$lang['Attach_rules_title'] = 'Allowed Extension Groups and their Sizes';
$lang['Group_rule_header'] = '%s -> Maximum Upload Size: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Allowed Extensions and Sizes';
$lang['Note_user_empty_group_permissions'] = 'NOTE:<br />You are normally allowed to attach files within this Forum, <br />but since no Extension Group is allowed to be attached here, <br />you are unable to attach anything. If you try, <br />you will receive an Error Message.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Quota wys³anych plików';
$lang['Pm_quota'] = 'PM Quota';
$lang['User_upload_quota_reached'] = 'Przykro nam, ale osi±gn±³e¶ swoj± maksymaln± warto¶æ Quoty Wys³anych Plików czyli %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Za³±czniki u¿ytkownika';
$lang['UACP'] = 'Panel Sterowania Za³±cznikami U¿ytkownika';
$lang['User_uploaded_profile'] = 'Wys³ano: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% z ogó³u';

// Common Variables
$lang['Bytes'] = 'Bajtów';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Szukaj Za³±czników';
$lang['Test_settings'] = 'Przetestuj Ustawienia';
$lang['Not_assigned'] = 'Nie Przypisany';
$lang['No_file_comment_available'] = 'Brak komentarza do pliku';

?>
