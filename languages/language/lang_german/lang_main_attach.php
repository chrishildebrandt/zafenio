<?php
/***************************************************************************
 *                            lang_main_attach.php [German]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:34:30 bob Exp $
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
$lang['Rules_attach_can'] = 'Du <b>kannst</b> Dateien in diesem Forum posten';
$lang['Rules_attach_cannot'] = 'Du <b>kannst</b> Dateien in diesem Forum <b>nicht</b> posten';
$lang['Rules_download_can'] = 'Du <b>kannst</b> Dateien in diesem Forum herunterladen';
$lang['Rules_download_cannot'] = 'Du <b>kannst</b> Dateien in diesem Forum <b>nicht</b> herunterladen';
$lang['Sorry_auth_view_attach'] = 'Entschuldigung, aber du bist nicht autorisiert dieses Attachment anzugucken oder herunterzuladen.';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Beschreibung';
$lang['Downloaded'] = 'Heruntergeladen';
$lang['Download'] = 'Download';
$lang['Filesize'] = 'Dateigröße';
$lang['Viewed'] = 'Angeschaut';
$lang['Download_number'] = '%d mal'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Die Dateiendung \'%s\' wurde vom Board Admin deaktiviert, deshalb wird die Datei nicht angezeigt.'; // used in Posts and PM's, replace %s with Extension

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Attachment Kontrollzentrum';
$lang['Attach_posting_cp_explain'] = 'Wenn du auf \'Attachment hinzufügen\' klickst, dann siehst du eine Box zum Hinzufügen von Attachments.<br />Wenn du auf \'gepostete Attachments\' klickst, dann siehst du eine Liste der bereits hinzugefügten Attachments, du kannst sie dann nach Belieben editieren.<br />Wenn du ein Attachment ersetzen (Neue Version hochladen) möchtest, dann musst du beide Links anklicken. Füge das Attachment so hinzu wie du es normalerweise tun würdest, klicke aber nicht auf \'Attachment hinzufügen\', sondern klicke bei dem Attachment das du austauschen möchtest auf \'Neue Version hochladen\'.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Attachment hinzufügen';
$lang['Add_attachment_title'] = 'Attachment hinzufügen';
$lang['Add_attachment_explain'] = 'Wenn du kein Attachment hinzufügen möchtest, dann lasse die Felder einfach leer';
$lang['File_name'] = 'Dateiname';
$lang['File_comment'] = 'Kommentar';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'gepostete Attachments';
$lang['Options'] = 'Optionen';
$lang['Update_comment'] = 'Kommentar aktualisieren';
$lang['Delete_attachments'] = 'Attachments löschen';
$lang['Delete_attachment'] = 'Attachment löschen';
$lang['Delete_thumbnail'] = 'Thumbnail löschen';
$lang['Upload_new_version'] = 'Neue Version hochladen';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s ist ein ungültiger Dateiname'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Das Attachment ist zu groß.<br />Vorgegebene Maximale Größe von PHP kann nicht ermittelt werden.<br />Das Attachment Mod kann die in der php.ini definierte Größe nicht ermitteln.'; 
$lang['Attachment_php_size_overrun'] = 'Das Attachment ist zu groß.<br />Vorgegebene Maximale Größe in der php.ini: %d MB<br />Bitte beachte das diese Größe in der php.ini definiert ist, das bedeutet, daß es von PHP gesetzt wurde und vom Attachment Mod nicht überschrieben werden kann.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Die Erweiterung %s ist hier verboten'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Die Erweiterung %s ist in diesem Forum verboten';
$lang['Attachment_too_big'] = 'Das Attachment ist zu groß.<br />Maximale Größe: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Entschuldingung, aber die maximale Größe aller Attachments wurde erreicht. Bitte kontaktiere den Board Administrator wenn du Fragen hast.';
$lang['Too_many_attachments'] = 'Attachment kann nicht hinzugefügt werden, da die maximale Anzahl von %d Attachments in dieser Nachricht erreicht wurde'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Das Attachment/Bild muss kleiner als %dx%d Pixel sein.'; 
$lang['General_upload_error'] = 'Upload Error: Kann das Attachment %s nicht hochladen.'; // replace %s with local path 

$lang['Error_empty_add_attachbox'] = 'Du musst Daten in dem Feld für das hinzufügen von Attachments eintragen.';
$lang['Error_missing_old_entry'] = 'Unmöglich das Attachment zu aktualisieren, alter Attachment Eintrag kann nicht gefunden werden.';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Entschuldigung, aber die maximale Größe aller Attachments in deinen Privaten Nachrichten wurde erreicht. Bitte lösche einige Attachments von deinen empfangenen/gesendeten Privaten Nachrichten.';
$lang['Attach_quota_receiver_pm_reached'] = 'Entschuldigung, aber die maximale Größe aller Attachments in der Privaten Nachrichten Box von \'%s\' wurde erreicht. Bitte lass ihm/ihr das wissen oder warte bis er/sie einige Attachments gelöscht hat.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Du hast kein Attachment zum Herunterladen oder Betrachten angegeben.';
$lang['Error_no_attachment'] = 'Das ausgewählte Attachment existiert leider nicht mehr';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Bist du sicher, daß du die ausgewählten Attachments löschen möchtest';
$lang['Deleted_attachments'] = 'Die ausgewählten Attachments wurden gelöscht';
$lang['Error_deleted_attachments'] = 'Das Attachment konnte nicht gelöscht werden';
$lang['Confirm_delete_pm_attachments'] = 'Bist du sicher alle Attachments in dieser Privaten Nachricht zu löschen?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Das Attachment Feature ist abgeschaltet.';

$lang['Directory_does_not_exist'] = 'Das Verzeichnis \'%s\' existiert nicht oder kann nicht gefunden werden.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Bitte prüfe ob \'%s\' ein Verzeichnis ist.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Das Verzeichnis \'%s\' ist nicht schreibbar. Du musst das Upload Verzeichnis erstellen und zu 777 chmodden (oder den Besitzer des Verzeichnisses auf den Besitzer des HTTP-Servers stellen) um Dateien hochladen zu können.<br />Wenn du nur FTP-Zugriff hast, dann ändere das \'Attribut\' des Verzeichnisses auf rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Kann den FTP-Server nicht erreichen: \'%s\'. Bitte prüfe die FTP Einstellungen.';
$lang['Ftp_error_login'] = 'Login Fehlgeschlagen. Der Benutzername \'%s\' oder das Passwort sind falsch. Bitte prüfe die FTP Einstellungen.';
$lang['Ftp_error_path'] = 'Kann FTP Verzeichnis nicht finden oder darauf zugreifen: \'%s\'. Bitte prüfe die FTP Einstellungen.';
$lang['Ftp_error_upload'] = 'Kann Dateien nicht in das FTP Verzeichnis hochladen: \'%s\'. Bitte prüfe die FTP Einstellungen.';
$lang['Ftp_error_delete'] = 'Kann Dateien im FTP Verzeichnis nicht löschen: \'%s\'. Bitte prüfe die FTP Einstellungen.<br />Ein anderer Grund für diesen Fehler kann das nicht vorhandensein eines Attachments sein, bitte prüfe das erst im Menü Shadow Attachments.';
$lang['Ftp_error_pasv_mode'] = 'Kann den FTP Passiv Modus nicht ein-/ausschalten.';

// Attach Rules Window
$lang['Rules_page'] = 'Attachment Regeln';
$lang['Attach_rules_title'] = 'Erlaubte Dateierweiterungen und deren Dateigrößen';
$lang['Group_rule_header'] = '%s -> Maximale Upload Größe: %s';
$lang['Allowed_extensions_and_sizes'] = 'Erlaubte Dateierweiterungen';
$lang['Note_user_empty_group_permissions'] = 'BEACHTE:<br />Es ist normalerweise erlaubt Dateien in diesem Forum zu posten, <br />aber da hier alle Dateierweiterungen verboten wurden <br />ist es unmöglich eine Datei zu posten. Wenn du es <br />versuchst, dann wirst du eine Fehlernachricht erhalten.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Upload Quota';
$lang['Pm_quota'] = 'PM Quota';
$lang['User_upload_quota_reached'] = 'Du hast deine maximale Upload Quota Grenze von %d %s erreicht';

// User Attachment Control Panel
$lang['User_acp_title'] = 'Benutzer ACP';
$lang['UACP'] = 'Benutzer Attachment Kontrollzentrum';
$lang['User_uploaded_profile'] = 'Hochgeladen: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = 'Insgesamt %d%%';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Suche Attachments';
$lang['Test_settings'] = 'Einstellungen Testen';
$lang['Not_assigned'] = 'Nicht zugewiesen';
$lang['No_file_comment_available'] = 'Kein Datei-Kommentar verfügbar';
$lang['Attachbox_limit'] = 'Deine Attachbox ist zu %d%% voll';
$lang['No_quota_limit'] = 'Keine Quota Grenze';
$lang['Unlimited'] = 'Unbegrenzt';

?>