<?php
/***************************************************************************
 *                            lang_main_attach.php [Italian]
 *                              -------------------
 *     begin                : Sat Sep 07 2002
 *     copyright            : (C) 2002 Schiaccia
 *     
 *
 *     $Id: lang_main_attach.php,v 1.2 2003/04/29 22:48:08 bob Exp $
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
$lang['Rules_attach_can'] = '<b>puoi</b> allegare file in questo forum';
$lang['Rules_attach_cannot'] = '<b>non puoi</b> allegare file in questo forum';
$lang['Rules_download_can'] = '<b>puoi</b> scaricare file in questo forum';
$lang['Rules_download_cannot'] = '<b>non puoi</b> scaricare file in questo forum';
$lang['Sorry_auth_view_attach'] = 'Spiacente ma non sei abilitato a visualizzare o scaricare questo allegato';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Descrizione'; // used in Administration Panel too...
$lang['Downloaded'] = 'Scaricato';
$lang['Download'] = 'Scarica'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Dimensione';
$lang['Viewed'] = 'Visto';
$lang['Download_number'] = '%d Volta(e)'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'L\'estensione \'%s\' è stata disattivata da un amministratore del forum, perciò questo allegato non è visualizzato.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Pannello di controllo allegait';
$lang['Attach_posting_cp_explain'] = 'Cliccando su aggiungi allegato, verrà visualizzato un box per allegare file.<br />Cliccando su allegati inviati, verrano visualizzati i file allegati e potrai editarli.<br />Se vuoi sostituire un allegato, devi cliccare su entrambi i link. Aggiungi l\'allegato come faresti normalmente, successivamente non cliccare su aggiungi allegato, clicca invece su aggiorna nuova versione all\'allegato che vuoi aggiornare.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Aggiungi allegato';
$lang['Add_attachment_title'] = 'Aggiungi un allegato';
$lang['Add_attachment_explain'] = 'Se non vuoi aggiungere un allegato al tuo messaggio, lascia vuoto questo campo';
$lang['File_name'] = 'Nome file';
$lang['File_comment'] = 'Commento file';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Allegati inviati';
$lang['Options'] = 'Opzioni';
$lang['Update_comment'] = 'Aggiorna commento';
$lang['Delete_attachments'] = 'Cancella allegati';
$lang['Delete_attachment'] = 'Cancella allegato';
$lang['Delete_thumbnail'] = 'Cancella anteprima';
$lang['Upload_new_version'] = 'Invia nuova versione';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s non è un nome di file valido'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'L\'allegato è troppo grande.<br />Impossibile prendere il limite massimo definito in PHP.<br />Il mod allegati non è in grado di determinare la dimensione massima per l\'upload definita in php.ini.';
$lang['Attachment_php_size_overrun'] = 'L\'allegato è troppo grande.<br />Dimensione massima upload: %d MB.<br />Questa dimensione è definita in php.ini, è cioè impostata da PHP e il mod allegati non può modificare questo valore.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'L\'estensione %s non è permessa'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Non puoi inviare file con l\'estensione %s in questo forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'L\'allegato è troppo grande.<br />Dimensione massima: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Spiacente, è stata raggiunta la dimensione massima per gli allegati. Contatta l\'amministratore del forum.';
$lang['Too_many_attachments'] = 'L\'allegato non può essere aggiunto perchè è stato raggiunto il numero massimo di %d allegati in questo messaggio'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'L\'allegato/immagine deve essere inferiore a %d pixel in larghezza e %d pixel in altezza';
$lang['General_upload_error'] = 'Errore upload: non è stato possibile l\'upload dell\'allegato su %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'devi inserire i valori nel box \'aggiungi un allegato\'';
$lang['Error_missing_old_entry'] = 'Impossibile aggiornare allegato, impossibile trovare la precedente versione allegata';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Spiacente ma è stata raggiunta la dimensione massima per gli allegati nella cartella dei tuoi messaggi privati. Cancella qualche allegato ricevuto/spedito.';
$lang['Attach_quota_receiver_pm_reached'] = 'Spiacente ma è stata raggiunta la dimensione massima per gli allegati nella cartella dei messaggi privati di \'%s\' .Informalo del problema, o attendi che abbia cancellato alcuni dei suoi allegati.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Non hai selezionato alcun allegato da scaricare o visualizzare.';
$lang['Error_no_attachment'] = 'L\'allegato selezionato non esiste';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Vuoi veramente cancellare gli allegati selezionati?';
$lang['Deleted_attachments'] = 'Gli allegati selezionati sono stati cancellati.';
$lang['Error_deleted_attachments'] = 'Impossibile cancellare questi allegati.';
$lang['Confirm_delete_pm_attachments'] = 'Vuoi veramente cancellare tutti gli allegati di questo PM?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'La funzione allegati è disabilitata.';

$lang['Directory_does_not_exist'] = 'La directory \'%s\' non esiste o non può essere trovata.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Controlla se \'%s\' è una directory.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Impossibile scrivere nella directory \'%s\' . Devi creare un percorso per l\'upload ed impostare i permessi in scrittura o modificare il proprietario della risorsa per l\'upload dei file.<br />Se hai solo l\'accesso ftp cambia \'attributo\' della directory in rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Impossibile connettersi al server FTP: \'%s\'. Controlla le impostazioni dell\'FTP.';
$lang['Ftp_error_login'] = 'Impossibile effettuare il login al server FTP. L\'username \'%s\' o la password sono errati. Controlla le impostazioni dell\'FTP.';
$lang['Ftp_error_path'] = 'Impossibile accedere alla directory ftp: \'%s\'. Controlla le impostazioni dell\'FTP.';
$lang['Ftp_error_upload'] = 'Impossibile l\'upload dei file nella directory ftp: \'%s\'. Controlla le impostazioni dell\'FTP.';
$lang['Ftp_error_delete'] = 'Impossibile cancellare i file nella directory ftp: \'%s\'. Controlla le impostazioni dell\'FTP<br />Un\'altra possibile ragione per questo errore potrebbe essere l\'inesistenza dell\'allegato, verificalo negli \'allegati ombra\'.';
$lang['Ftp_error_pasv_mode'] = 'Impossibile abilitare/disabilitare FTP Passive Mode';

// Attach Rules Window
$lang['Rules_page'] = 'Regole allegati';
$lang['Attach_rules_title'] = 'Gruppo estensioni permesse e loro dimensioni';
$lang['Group_rule_header'] = '%s -> Dimensione massima upload: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Estensioni permesse e dimensioni';
$lang['Note_user_empty_group_permissions'] = 'NOTA:<br />Tu sei normalmente autorizzato ad allegare file in questo forum, <br />ma siccome nessun gruppo estensioni è stato autorizzato ad allegare file qui, <br />non puoi allegare niente. Se provi, <br />riceverai un messaggio di errore.<br />';
// Quota Variables
$lang['Upload_quota'] = 'Quota upload';
$lang['Pm_quota'] = 'Quota messaggi privati';
$lang['User_upload_quota_reached'] = 'Spiacente, hai raggiunto la quota massima di upload: %d %s'; // replace %d with Size, %s with Size Lang (MB for example)
// User Attachment Control Panel
$lang['User_acp_title'] = 'Pannello di controllo utente';
$lang['UACP'] = 'Pannello di controllo allegati utente';
$lang['User_uploaded_profile'] = 'Inviati: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% del totale';
// Common Variables
$lang['Bytes'] = 'Byte';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Cerca allegati';
$lang['Test_settings'] = 'Prova impostazioni';
$lang['Not_assigned'] = 'Non assegnato';
$lang['No_file_comment_available'] = 'Commento file non disponibile';

// Additions for 2.3.6
$lang['Description'] = 'Descrizione'; // usato in Pannello Amministrazione
$lang['Downloaded'] = 'Downloadato';
$lang['Download'] = 'Download'; // questa Variabile Linguaggio è definita anche in lang_admin.php, ma non vi possiamo accedere da il file linguaggio principale
$lang['Filesize'] = 'Dimensione File';
$lang['Viewed'] = 'Visti';
$lang['Disallowed_extension_within_forum'] = 'Non ti è permesso postare Files con estensione %s in questo Forum'; // cambia %s con Estensione
$lang['Ftp_error_pasv_mode'] = 'Non permesso abilitare/disabilitare FTP Passive Mode';
$lang['Rules_page'] = 'Regole allegato';
$lang['Attach_rules_title'] = 'Gruppi Estensioni permessi e loro Dimensioni';
$lang['Group_rule_header'] = '%s -> Misura Massima Upload: %s'; // Cambia prima %s con Gruppo Estensione, e la seconda con la STRINGA dimensione
$lang['Allowed_extensions_and_sizes'] = 'Estensioni permesse e Dimensioni';
$lang['Note_user_empty_group_permissions'] = 'NOTA:<br />Ti è normalmente permesso aggiungere files in questo forum, <br />ma da quando a nessun Gruppo Estensione è permesso di essere collegato qui, <br /> non ti potrà essere possibile aggiungere alcunchè. Se provi a farlo, <br />riceverai un Messaggio di Errore.<br />';
$lang['Upload_quota'] = 'Upload Quota';
$lang['Pm_quota'] = 'PM Quota';
$lang['User_upload_quota_reached'] = 'Spiacente, hai raggiunto il tuo limite di quota massimo di %d %s'; // cambia %d con misura, %s con misura Lang (MB per esempio)
$lang['User_acp_title'] = 'Utente CPA';
$lang['UACP'] = 'Utente Controllo Pannello Allegato';
$lang['User_uploaded_profile'] = 'Uploadato: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% di totale';
$lang['Attachbox_limit'] = 'Il tuo box allegati è %d%% pieno';
$lang['No_quota_limit'] = 'Nessun limite quota';
$lang['Unlimited'] = 'Illimitato';

?>