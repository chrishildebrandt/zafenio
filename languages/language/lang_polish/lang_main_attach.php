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
$lang['Rules_attach_can'] = '<b>Mo�esz</b> dodawa� za��czniki w tym forum';
$lang['Rules_attach_cannot'] = '<b>Nie mo�esz</b> dodawa� za��cznik�w w tym forum';
$lang['Rules_download_can'] = '<b>Mo�esz</b> �ci�ga� pliki w tym forum';
$lang['Rules_download_cannot'] = '<b>Nie mo�esz</b> �ci�ga� plik�w w tym forum';
$lang['Sorry_auth_view_attach'] = 'Przykro nam, ale nie masz zezwolenia na ogl�danie lub �ci�ganie tego za��cznika';

// Viewtopic -> Display of Attachments
$lang['Download_number'] = 'Plik �ci�gni�to lub wy�wietlono %d raz(y)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Rozszerzenie \'%s\' zosta�o wy��czone przez Administratora, dlatego ten Za��cznik nie jest wy�wietlany.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Panel Kontrolny Wysy�ania Za��cznik�w';
$lang['Attach_posting_cp_explain'] = 'Je�eli klikniesz na Dodaj Za��cznik ujrzysz pola przeznaczone dla dodawania Za��cznik�w.<br />Je�eli klikniesz na Wys�ane Za��czniki ujrzysz list� ju� za��czonych plik�w i b�dziesz m�g� je edytowa�.<br />Je�eli chcesz Zast�pi� Za��cznik (umie�ci� now� wersj� pliku), musisz skorzysta� z obydwu link�w. Najpierw dodaj nazw� za��cznika jak zwykle (przycisk Dodaj Za��cznik i pole Nazwa Pliku) ale potem nie klikaj na Wy�lij Za��cznik ale na przycisk Umie�� Now� Wersj� przy za��czniku kt�ry chcesz uaktualni� (liczba �ci�gni�� i komentarz pozostan� niezmienione, zast�piony zostanie jedynie plik za��cznika).';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Wy�lij Za��cznik';
$lang['Add_attachment_title'] = 'Dodaj Za��cznik';
$lang['Add_attachment_explain'] = 'Je�eli nie chcesz doda� za��cznika do swojego wpisu pozostaw to pole puste';
$lang['File_name'] = 'Nazwa pliku';
$lang['File_comment'] = 'Komentarz do za��cznika';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Wys�ane Za��czniki';
$lang['Options'] = 'Opcje';
$lang['Update_comment'] = 'Aktualizuj Komentarz';
$lang['Delete_attachments'] = 'Skasuj Za��czniki';
$lang['Delete_attachment'] = 'Skasuj Za��cznik';
$lang['Delete_thumbnail'] = 'Skasuj Miniaturk�';
$lang['Upload_new_version'] = 'Umie�� Now� Wersj�';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s - niepoprawna nazwa pliku'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Rozmiar pliku za��cznika jest za du�y.<br />Nie mo�e przekracza� limitu ustawionego w PHP przez administratora serwera. Attachment Mod nie jest w stanie ustali� ile wynosi ten limit.';
$lang['Attachment_php_size_overrun'] = 'Za��cznik jest za du�y.<br />Max. zdefiniowany rozmiar w PHP: %d MB. Ten rozmiar ustawiony jest na serwerze w pliku php.ini i Attachment Mod nie jest w stanie go zmieni�.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Rozszerzenie pliku %s jest niedozwolone'; // replace %s with extension (e.g. .php)
$lang['Attachment_too_big'] = 'Za��cznik jest za du�y.<br />Max. rozmiar: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Przykro nam, ale przestrze� dyskowa dla za��cznik�w zosta�a wyczerpana. Skontaktuj si� z Administratorem je�eli masz jakie� pytania.';
$lang['Too_many_attachments'] = 'Za��cznik nie mo�e zosta� dodany poniewa� max. liczba za��cznik�w we wpisie jest ograniczona do %d '; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Za��cznik/Obrazek musi by� mniejszy ni� %d pikseli szeroko�ci i %d pikseli wysoko�ci';
$lang['General_upload_error'] = 'B��d �adowania pliku: Nie mo�na za�adowa� za��cznika %s na serwer'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Musisz wpisa� nazw� za��cznika w pole \'Dodaj Za��cznik\'';
$lang['Error_missing_old_entry'] = 'Uaktualnienie Za��cznika nie powiod�o si�, nie znaleziono starej wersji Za��cznika';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Niestety, ale limit pojemno�ci na wszystkie za��czniki w twojej Skrzynce Prywatnych Wiadomo�ci zosta� wyczerpany. Skasuj cz�� otrzymanych/wys�anych za��cznik�w.';
$lang['Attach_quota_receiver_pm_reached'] = 'Niestety, ale limit pojemno�ci na wszystkie za��czniki w Skrzynce Prywatnych Wiadomo�ci u�ytkownika \'%s\' zosta� wyczerpany. Powiadom go o tym lub poczekaj a� skasuje cz�� swoich za��cznik�w.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Nie wybra�e� za��cznika do �ci�gni�cia lub wy�wietlenia.';
$lang['Error_no_attachment'] = 'Wybrany Za��cznik nie istnieje (zosta� skasowany).';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Na pewno chcesz skasowa� zaznaczone Za��czniki?';
$lang['Deleted_attachments'] = 'Zaznaczone Za��czniki zosta�y skasowane.';
$lang['Error_deleted_attachments'] = 'Skasowanie Za��cznik�w nie powiod�o si�!';
$lang['Confirm_delete_pm_attachments'] = 'Jeste� pewien, �e chcesz skasowa� wszystkie za��czniki z tego PW?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Funkcja dodawania za��cznik�w jest wy��czona.';

$lang['Directory_does_not_exist'] = 'Katalog \'%s\' nie istnieje lub nie zosta� znaleziony.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Sprawd� czy \'%s\' jest nazw� katalogu.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Katalog \'%s\' nie jest dost�pny do zapisu. Musisz ustawi� uprawnienia do zapisu dla katalogu w kt�rym maj� by� przechowywane pliki za��cznik�w (komenda: chmod 777 <nazwa katalogu>). Dopiero wtedy b�dzie mo�liwe ��dowanie/zapisywanie za��cznik�w na serwerze.<br />Je�eli masz dost�p tylko przez FTP to zmie� atrybuty katalogu na rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Po��czenie z serwerem FTP: \'%s\' nie powiod�o si�. Sprawd� ustawienia swojego klienta (programu) FTP.';
$lang['Ftp_error_login'] = 'Logowanie do serwera FTP nie powiod�o si�. Sprawd� swoj� Nazw� U�ytkownika \'%s\' i Has�o.';
$lang['Ftp_error_path'] = 'Brak dost�pu do katalogu: \'%s\' serwera FTP. Sprawd� ustawienia swojego klienta (programu) FTP.';
$lang['Ftp_error_upload'] = 'Kopiowanie plik�w na serwer do katalogu: \'%s\' nie powiod�o si�. Sprawd� ustawienia swojego klienta (programu) FTP.';
$lang['Ftp_error_delete'] = 'Nie mo�na skasowa� plik�w na serwerze w katalogu: \'%s\'. Sprawd� ustawienia swojego klienta (programu) FTP.<br />Inn� przyczyn� tego b��du mo�e by� nie istniej�cy za��cznik. Sprawd� to najpierw w opcji Fa�szywe Za��czniki.';

// Attach Rules Window
$lang['Rules_page'] = 'Attachment Rules';
$lang['Attach_rules_title'] = 'Allowed Extension Groups and their Sizes';
$lang['Group_rule_header'] = '%s -> Maximum Upload Size: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Allowed Extensions and Sizes';
$lang['Note_user_empty_group_permissions'] = 'NOTE:<br />You are normally allowed to attach files within this Forum, <br />but since no Extension Group is allowed to be attached here, <br />you are unable to attach anything. If you try, <br />you will receive an Error Message.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Quota wys�anych plik�w';
$lang['Pm_quota'] = 'PM Quota';
$lang['User_upload_quota_reached'] = 'Przykro nam, ale osi�gn��e� swoj� maksymaln� warto�� Quoty Wys�anych Plik�w czyli %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Za��czniki u�ytkownika';
$lang['UACP'] = 'Panel Sterowania Za��cznikami U�ytkownika';
$lang['User_uploaded_profile'] = 'Wys�ano: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% z og�u';

// Common Variables
$lang['Bytes'] = 'Bajt�w';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Szukaj Za��cznik�w';
$lang['Test_settings'] = 'Przetestuj Ustawienia';
$lang['Not_assigned'] = 'Nie Przypisany';
$lang['No_file_comment_available'] = 'Brak komentarza do pliku';

?>
