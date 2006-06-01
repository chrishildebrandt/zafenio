<?php
/***************************************************************************
 *                            lang_main_attach.php [Dutch]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Matthijs van de Water & Lennard Klein
 *     email                : matthijs@beryllium.net & lennard.klein@planet.nl
 *
 *     $Id: lang_main_attach.php,v 1.3 2003/02/23 19:36:51 bob Exp $
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
$lang['Rules_attach_can'] = 'Je <b>mag</b> attachments plaatsen in dit forum';
$lang['Rules_attach_cannot'] = 'Je mag <b>geen</b> attachments plaatsen in dit forum';
$lang['Rules_download_can'] = 'Je <b>mag</b> bestanden downloaden in dir forum';
$lang['Rules_download_cannot'] = 'Je mag <b>geen</b> bestanden downloaden in die forum';
$lang['Sorry_auth_view_attach'] = 'Sorry, maar je mag dit attachment niet downloaden';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Beschrijving'; // used in Administration Panel too...
$lang['Downloaded'] = 'Gedownload';
$lang['Download'] = 'Download'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Bestandsgrootte';
$lang['Viewed'] = 'Weergegeven';
$lang['Download_number'] = '%d keer'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'De extentie  \'%s\' is door een beheerder uitgeschakeld, daarom kan dit attachment niet worden weergegeven'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Attachment Toevoegen Controle Paneel';
$lang['Attach_posting_cp_explain'] = 'Als je op Voeg Attachment Toe klikt, zie je het vak om attachments toe te voegen.<br />Als je op Geplaatste Attachments klikt, zie je een lijst van al toegevoegde bestanden en kan je ze wijzigen.<br />Als je een attachment wil vervangen (Nieuwe versie uploaden), moet je op beide klikken. Voeg het attachment toe zoals je normaal zou doen, maar klik daarna niet op Voeg Attachment Toe, maar op Upload Nieuwe Versie bij de attachments die je wil vervangen.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Voeg Attachment Toe';
$lang['Add_attachment_title'] = 'Voeg een Attachment toe';
$lang['Add_attachment_explain'] = 'Als je geen attachment wil toevoegen aan je bericht, laat deze velden dan leeg';
$lang['File_name'] = 'Bestandsnaam';
$lang['File_comment'] = 'Bestand Beschrijving';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Geplaatste Attachments';
$lang['Options'] = 'Opties';
$lang['Update_comment'] = 'Beschrijving Bijwerken';
$lang['Delete_attachments'] = 'Verwijder Attachments';
$lang['Delete_attachment'] = 'Verwijder Attachment';
$lang['Delete_thumbnail'] = 'Verwijder Thumbnail';
$lang['Upload_new_version'] = 'Upload Nieuwe Versie';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s is een ongeldige bestandsnaam'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Het Attachment is te groot.<br />Kon de maximum grootte gedefinieerd in PHP niet ophalen.<br />De Attachment Mod is niet in staat de maximum upload grootte gedefinieerd in php.ini te bepalen.';
$lang['Attachment_php_size_overrun'] = 'Het Attachment is te groot.<br />Maximaal toegestane grootte in PHP: %d MB.<br />Merk hierbij op dat dit bepaald is in php.ini, dit betekent dat het bepaald is door PHP en de Attachment Mod kan deze waarde niet vervangen'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'De extentie %s is niet toegestaan'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Je hebt geen toestemming bestanden met de extensie %s te plaatsen in dit forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Het Attachment is te groot.<br />Maximale Grootte: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Sorry, maar de maximaal toegestane bestandsgrootte voor alle attachments is bereikt. Neem contact op met de beheerder als je hierover vragen hebt.';
$lang['Too_many_attachments'] = 'Het attachment kan niet toegevoegd worden, omdat het maximale aantal van %d attachments in dit bericht bereikt is'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Het Attachment/de aafbelding moet minder dan %d pixels breed en %d pixels hoog zijn';
$lang['General_upload_error'] = 'Upload fout: Kan het attachment niet uploaden naar %s'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Je moet een waarde invoeren in het \'Voeg een Attachment Toe\' vak';
$lang['Error_missing_old_entry'] = 'Niet in staat Attachment te vervangen, kon oude Attachment niet vinden';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Sorry, maar de maximum bestandsgrootte voor alle attachments in je prive-berichten map is bereikt. Verwijder een paar van je verzonden/ontvangen Attachments a.u.b.';
$lang['Attach_quota_receiver_pm_reached'] = 'Sorry, maar de maximum bestandsgrootte voor alle attachments in de prive-berichten map van \'%s\' is bereikt. Laat hem dit a.u.b. weten, of wacht tot hij/zij een paar van zijn/haar attachments heeft verwijderd.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Je hebt geen attachment geselecteerd om te downloaden of bekijken';
$lang['Error_no_attachment'] = 'Het geselecteerde attachment bestaat niet meer';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Weet je zeker dat je het geselecteerde attachment wil verwijderen?';
$lang['Deleted_attachments'] = 'De geselecteerde attachments zijn verwijderd.';
$lang['Error_deleted_attachments'] = 'Kon de attachments niet verwijderen.';
$lang['Confirm_delete_pm_attachments'] = 'Weer je zeker dat je alle attachments die in deze PM zijn geplaats wil verwijderen?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'De Attachment Optie is uitgeschakeld';

$lang['Directory_does_not_exist'] = 'De Directory \'%s\' bestaat niet of kan niet gevonden worden'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Het lijkt erop dat \'%s\' geen directory is.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'De Directory \'%s\' is niet beschrijfbaar. Je moet de upload directory aanmaken en deze 777 chmod-den (of de eigenaar naar je de eigenaar van je webserver veranderen) om bestanden te kunnen uploaden.<br />Als je alleen FTP toegang hebt, verander dan de \'Attribute\' van de directory naar rwxrwxrwx.'; // replace %s with director

$lang['Ftp_error_connect'] = 'Kon geen verbinding maken met de FTP server: \'%s\'.';
$lang['Ftp_error_login'] = 'Kon niet inloggen bij de FTP Server. De Gebruikersnaam \'%s\' of het wachtwoord is fout. Controleer je FTP-instellingen a.u.b.';
$lang['Ftp_error_path'] = 'Kon geen toegang krijgen tot de ftp map: \'%s\'. Controleer je FTP-instellingen a.u.b.';
$lang['Ftp_error_upload'] = 'Kon geen bestanden uploaden naar ftp map: \'%s\'. Controleer je FTP-instellingen a.u.b.';
$lang['Ftp_error_delete'] = 'Kon geen bestanden verwijderen in de ftp map: \'%s\'. Controleer je FTP-instellingen a.u.b.<br />Een andere reden hiervoor zou het niet-bestaan van het attachment kunnen zijn. Controleer dit a.u.b. eerst in Schaduw Attachments.';
$lang['Ftp_error_pasv_mode'] = 'Kan FTP Passive modus niet in/uitschakelen';

// Attach Rules Window
$lang['Rules_page'] = 'Attachment Regels';
$lang['Attach_rules_title'] = 'Toegestane Enstensie Groepen en hun grootten';
$lang['Group_rule_header'] = '%s -> Maximum Upload Grootte: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Toegestane Extensies en Grootten';
$lang['Note_user_empty_group_permissions'] = 'MERK OP:<br />Je hebt normaal gesproken toestemming om bestanden toe te voegen in dit forum, maar aangezien er hier geen Extensie Groep is toegestaan, <br />kan je niks toevoegen. Als je het probeert, <br />zal je een Error krijgen.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Upload Quota';
$lang['Pm_quota'] = 'PB Quota';
$lang['User_upload_quota_reached'] = 'Sorry, je hebt je maximum Quota Limiet van %d %s bereikt'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Gebruiker ABP';
$lang['UACP'] = 'Gebruiker Attachment Beheer Paneel';
$lang['User_uploaded_profile'] = 'Geupload: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% van het totaal';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Zoek Attachments';
$lang['Test_settings'] = 'Test Instellingen';
$lang['Not_assigned'] = 'Niet Gebonden';
$lang['No_file_comment_available'] = 'Geen Bestands Beschrijving beschikbaar';
$lang['Attachbox_limit'] = 'Je Attachbox is %d%% vol';
$lang['No_quota_limit'] = 'Geen Quota Limiet';
$lang['Unlimited'] = 'Ongelimiteerd';

?>
