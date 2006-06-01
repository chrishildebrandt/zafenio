<?php
/***************************************************************************
 *                            lang_admin_attach.php [Italian]
 *                              -------------------
 *     begin                : Sat Sep 07 2002
 *     copyright            : (C) 2002 Schiaccia
 *              
 *
 *     $Id: lang_admin_attach.php,v 1.2 2003/04/29 22:48:07 bob Exp $
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
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Pannello di controllo';
$lang['Shadow_attachments'] = 'Allegati ombra';
$lang['Forbidden_extensions'] = 'Estensioni proibite';
$lang['Extension_control'] = 'Controllo estensioni';
$lang['Extension_group_manage'] = 'Controllo gruppi estensioni';
$lang['Special_categories'] = 'Categorie speciali';
$lang['Sync_attachments'] = 'Sincronizza allegati';
$lang['Quota_limits'] = 'Quota limite';

// Attachments -> Management
$lang['Attach_settings'] = 'Impostazioni allegati';
$lang['Manage_attachments_explain'] = 'Qui puoi modificare le impostazioni principali per il modulo allegati. Premendo il pulsante Test Settings, il modulo allegati effettuerà alcuni test sul sistema per verificare il corretto funzionamento del modulo. Se riscontri problemi nell\'upload dei file esegui questo test per ottenere una lista dettagliata degli errori.';
$lang['Attach_filesize_settings'] = 'Impostazioni dimensioni allegati';
$lang['Attach_number_settings'] = 'Impostazioni numero allegati';
$lang['Attach_options_settings'] = 'Opzioni allegati';

$lang['Upload_directory'] = 'Upload Directory';
$lang['Upload_directory_explain'] = 'Inserisci il percorso relativo della Directory Upload rispetto l\'installazione di phpBB2. Ad esempio, inserisci \'files\' se il percorso di installazione di phpBB2 è http://www.yourdomain.com/phpBB2 e la Directory Update degli allegati è http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Icona file allegati';
$lang['Attach_img_path_explain'] = 'Questa immagine sarà visualizzata a fianco dei link degli allegati nei post individuali. Lascia vuoto questo campo se non desideri che sia visualizzata un\'icona. Questa impostazione sarà sovrascritta dalle impostazioni del controllo gruppo estensioni.';
$lang['Attach_topic_icon'] = 'Icona discussioni con allegati';
$lang['Attach_topic_icon_explain'] = 'Questa immagine sarà visualizzata a fianco delle discussioni con allegati. Lascia vuoto questo campo se non desideri che sia visualizzata un\'icona.';
$lang['Attach_display_order'] = 'Ordine visualizzazione allegati';
$lang['Attach_display_order_explain'] = 'Qui puoi scegliere se mostrare gli allegati in messaggi in ordine decrescente (prima i nuovi allegati) o in ordine crescente (prima i vecchi allegati).';
$lang['Show_apcp'] = 'Mostra nuovo pannello di controllo dei post con allegato';
$lang['Show_apcp_explain'] = 'Scegli se mostrare il pannello di controllo post con allegato (si) o il vecchio metodo con due box per file allegati e modifica degli allegati postati (no) all\'interno dello schermata invio. Il suo look è molto difficile da spiegare, quindi è meglio provarlo.';

$lang['Max_filesize_attach'] = 'Dimensioni';
$lang['Max_filesize_attach_explain'] = 'Dimensione massima degli allegati (in byte). Impostalo come 0 per illimitata. Questa impostazione dipende dalle restrizioni imposte dalla configurazione del server. Ad esempio se la configurazione di php permette un massimo di 2 MB di upload, questo limite non può essere sovrascritto dalla mod.';
$lang['Attach_quota'] = 'Quota disco per gli allegati';
$lang['Attach_quota_explain'] = 'Massimo spazio su disco che gli allegati possono occupare nello spazio web.';
$lang['Max_filesize_pm'] = 'Dimensione massima dei file nella cartella dei messaggi privati';
$lang['Max_filesize_pm_explain'] = 'Massimo spazio su disco che gli allegati possono occupare nei messaggi privati di ciascun utente.';
$lang['Default_quota_limit'] = 'Quota Limite di default';
$lang['Default_quota_limit_explain'] = 'Qui puoi selezionare la quota limite di default automaticamente assegnata agli utenti recentemente registrati e utenti senza una quota limite definita. L\'opzione \'nessuna quota limite\' è per non usare alcuna quota per allegato, invece, se usi le preferenze di default lo hai definito nel pannello di gestione.';

$lang['Max_attachments'] = 'Numero massimo di allegati';
$lang['Max_attachments_explain'] = 'Massimo numero di allegati permessi in un messaggio.';
$lang['Max_attachments_pm'] = 'Massimo numero di allegati permessi in un messaggio privato';
$lang['Max_attachments_pm_explain'] = 'Definisce il massimo numero di allegati che un utente può inserire in un messaggio privato.';

$lang['Disable_mod'] = 'Disabilita allegati';
$lang['Disable_mod_explain'] = 'Questa opzione è necessaria per provare nuovi modelli o temi, disabilita tutte le funzioni degli allegati eccetto il pannello di amministrazione.';
$lang['PM_Attachments'] = 'Permetti allegati nei messaggi privati';
$lang['PM_Attachments_explain'] = 'Permetti/vieta gli allegati nei messaggi privati.';
$lang['Ftp_upload'] = 'Abilita Upload FTP';
$lang['Ftp_upload_explain'] = 'Abilita/Disabilita l\'opzione FTP Upload. Se abilitata devi definire le impostazioni FTP per gli allegati; la directory upload non sarà utilizzata.';
$lang['Attachment_topic_review'] = 'Vuoi visualizare gli allegati nella finestra revisione discussioni?';
$lang['Attachment_topic_review_explain'] = 'Se scegli sì, tutti i file allegati saranno visualizzati nella recensione discussione quando posti una risposta.';

$lang['Ftp_server'] = 'FTP upload server';
$lang['Ftp_server_explain'] = 'Devi inserire l\'indirizzo IP o l\'FTP-Hostname del server usato per l\'upload dei files. Lasciando vuoto questo campo verrà utilizzato il server su cui è installato phpBB2. Nota che non è possibile aggiungere ftp:// o altro agli indirizzi, ma solo il nome ftp.foo.com o, molto più semplicemente l\'indirizzo IP.';

$lang['Attach_ftp_path'] = 'Percorso FTP per l\'upload directory';
$lang['Attach_ftp_path_explain'] = 'La directory dove saranno salvati gli allegati. Non è necessario modificare il chmod della directory. Non inserire l\'indirizzo IP o FTP, inserisci soltanto il percorso FTP.<br />Ad esempio: /home/web/uploads';
$lang['Ftp_download_path'] = 'Download link al percorso dell\'FTP ';
$lang['Ftp_download_path_explain'] = 'Inserisci il percorso al percorso FTP, dove sono salvati gli allegati. Inserisci il percorso completo, ad esempio http://www.mystorage.com/phpBB2/upload. Lo slash finale verrà rimosso.<br />Lascia vuoto questo campo se il percorso è esterno alla web-root. Con questo campo vuoto non sarà possibile il physical download method.';
$lang['Ftp_passive_mode'] = 'Permetti FTP Passive Mode';
$lang['Ftp_passive_mode_explain'] = 'La PASV è il comando richiesta con cui il server remoto apre una porta per la connessione dati e riporta l\'indirizzo di quella porta. Il server remoto riceve su quella porta e il client vi si connette.';

$lang['No_ftp_extensions_installed'] = 'Tu non sei abilitato ad utilizzare l\'FTP Upload, perchè le estensioni FTP non sono compilate nella tua installazione di PHP.';
// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Qui è possibile cancellare i dati sugli allegati dai post quando i file sono mancanti nel filesystem, e cancellare file non più allegati ad alcun post. E\' possibile visionare o scaricare i file cliccandoci sopra; se non è presente alcun link, il file è inesistente.';
$lang['Shadow_attachments_file_explain'] = 'Cancella tutti i file degli allegati che esistono nel filesystem ma che non sono assegnati ad alcun post esistente.';
$lang['Shadow_attachments_row_explain'] = 'Cancella tutti i file degli allegati che non esistono nel filesystem.';
$lang['Empty_file_entry'] = 'Campo file vuoto';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Immagine resettata per allegato: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Sincronizzazione allegati terminata.';
// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Gestisci estensioni';
$lang['Manage_extensions_explain'] = 'Qui è possibile gestire le estensioni dei file. Per Permettere/vietare l\'upload di un\'estensione utilizza gestione gruppi estensioni.';
$lang['Explanation'] = 'Spiegazione';
$lang['Extension_group'] = 'Gruppo estensione';
$lang['Invalid_extension'] = 'Estensione non valida';
$lang['Extension_exist'] = 'L\'estensione %s è già esistente'; // replace %s with the Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Gestione Gruppi Estensioni';
$lang['Manage_extension_groups_explain'] = 'DA qui è possibile aggiungere, cancellare e modificare i Gruppi Estensioni, disabilitare i Gruppi Estensioni, assegnargli una Categoria Speciale, modificare le modalità per il download e definire un\' Icona Upload che sarà visualizzata per un Allegati appartenente al Gruppo.';
$lang['Special_category'] = 'Categorie Speciali';
$lang['Category_images'] = 'Immagini';
$lang['Category_wma_files'] = 'File WMA';
$lang['Category_swf_files'] = 'File Flash';
$lang['Allowed'] = 'Permesso';
$lang['Download_mode'] = 'Modalità Download';
$lang['Upload_icon'] = 'Upload Icon';
$lang['Max_groups_filesize'] = 'Dimensione Massima';
$lang['Extension_group_exist'] = 'Il Gruppo Estensioni %s è già esistente'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Gestisci categorie speciali';
$lang['Manage_categories_explain'] = 'Qui puoi configurare le categorie speciali. Puoi impostare parametri speciali e condizioni per le categorie speciali assegnate ad un gruppo estensioni.';
$lang['Settings_cat_images'] = 'Impostazioni per categoria speciale: immagini';
$lang['Settings_cat_streams'] = 'Preferenze per categoria speciale: file stream';
$lang['Settings_cat_flash'] = 'Impostazioni per categoria speciale: file flash';
$lang['Display_inlined'] = 'Visualizza immagini all\'interno';
$lang['Display_inlined_explain'] = 'Scegli se visualizzare le immagini direttamente all\'interno del messaggio (si) o come link esterno ?';
$lang['Max_image_size'] = 'Dimensione massima immagini';
$lang['Max_image_size_explain'] = 'Qui puoi impostare la dimesione massima delle immagini allegate consentita (larghezza x altezza in pixel).<br />Impostata su 0x0, questa caratteristica è disabilitata. A causa di limitazioni imposte da PHP questa caratteristica può non funzionare con alcune immagini.';
$lang['Image_link_size'] = 'Dimensione link immagine';
$lang['Image_link_size_explain'] = 'Se è impostata quando l\'immagine raggiunge una certa dimensione, l\'immagine sarà visualizzata come link, piuttosto che essere visualizzata all\'interno,<br/>Se la visualizzazione all\'interno è abilitata (larghezza x altezza in pixel).<br />Impostata su 0x0, questa proprietà è disabilitata. A causa di limitazioni imposte da PHP questa caratteristica può non funzionare con alcune immagini.';
$lang['Assigned_group'] = 'Gruppo assegnato';

$lang['Image_create_thumbnail'] = 'Crea immagine';
$lang['Image_create_thumbnail_explain'] = 'Crea sempre immagine. Questa caratteristica sovrascrive tutte le impostazioni all\'interno della categoria speciale, ad eccezione della dimesione massima immagini. Con questa impostazione verrà visualizzata un\'immagine all\'interno del messaggio, l\'utente può cliccarla ed aprire l\'immagine reale.<br />Questa caratteristica richiede che Imagick sia installato, se non è installato o se è abilitata la safe-mode sarà utilizzata l\'estensione GD di PHP. Se il formato dell\'immagine non è supportato da PHP, questa caratteristica non sarà utilizzata.';
$lang['Image_min_thumb_filesize'] = 'Dimensione minima immagine';
$lang['Image_min_thumb_filesize_explain'] = 'Quando un\'immagine ha una dimensione inferiore a quella specificata non sarà creata nessuna anteprima.';
$lang['Image_imagick_path'] = 'Programma Imagick (percorso completo)';
$lang['Image_imagick_path_explain'] = 'Inserisci il percorso al programma conversione di imagick, generalmente /usr/bin/convert (o sotto windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Cerca Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Gestisci estensioni proibite';
$lang['Manage_forbidden_extensions_explain'] = 'Qui puoi aggiungere o cancellare le estensioni proibite. Le estensioni php, php3 and php4 sono proibite per default per motivi di sicurezza, non è possibile cancellarle.';
$lang['Forbidden_extension_exist'] = 'L\'estensione proibita %s è già esistente'; // replace %s with the extension

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Pannello di controllo file allegati';
$lang['Control_panel_explain'] = 'Qui è possibile visualizzare e gestire tutti gli allegati per utente, allegati, visite ecc...';
$lang['File_comment_cp'] = 'Commento file';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Utilizza * come carattere jolly per una corrispondenza parziale';
$lang['Size_smaller_than'] = 'Dimensione allegati inferiore a (byte)';
$lang['Size_greater_than'] = 'Dimensione allegati superiore a (byte)';
$lang['Count_smaller_than'] = 'Conteggio download inferiore a';
$lang['Count_greater_than'] = 'Conteggio download superiore a';
$lang['More_days_old'] = 'Vecchio più di alcuni giorni';
$lang['No_attach_search_match'] = 'Non ci sono allegati corrispondenti ai criteri di ricerca';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Numero di allegati';
$lang['Total_filesize'] = 'Dimensione totale';
$lang['Number_posts_attach'] = 'Numero di messaggi con allegati';
$lang['Number_topics_attach'] = 'Numero di discussioni con allegati';
$lang['Number_users_attach'] = 'Numero di allegati inviati';
$lang['Number_pms_attach'] = 'Numero totale di allegati nei messaggi privati';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistiche allegati per %s'; // replace %s with username
$lang['Size_in_kb'] = 'Dimensione (KB)';
$lang['Downloads'] = 'Download';
$lang['Post_time'] = 'Ora inserimento';
$lang['Posted_in_topic'] = 'Inviato nella discussione';
$lang['Submit_changes'] = 'Invia modifiche';

// Sort Types
$lang['Sort_Attachments'] = 'Allegati';
$lang['Sort_Size'] = 'Dimensione';
$lang['Sort_Filename'] = 'Nome del file';
$lang['Sort_Comment'] = 'Commento';
$lang['Sort_Extension'] = 'Estensione';
$lang['Sort_Downloads'] = 'Download';
$lang['Sort_Posttime'] = 'Ora Invio';
$lang['Sort_Posts'] = 'Messaggi';

// View Types
$lang['View_Statistic'] = 'Statistiche';
$lang['View_Search'] = 'Cerca';
$lang['View_Username'] = 'Nome utente';
$lang['View_Attachments'] = 'Allegati';

// Successfully updated
$lang['Attach_config_updated'] = 'Configurazione allegati aggiornata con successo';
$lang['Click_return_attach_config'] = 'Clicca %sHere%s per tornare alla configurazione allegati';
$lang['Test_settings_successful'] = 'Test impostazioni terminato, la configurazione sembra ok.';

// Some basic definitions
$lang['Attachments'] = 'Allegati';
$lang['Attachment'] = 'Allegati';
$lang['Extensions'] = 'Estensioni';
$lang['Extension'] = 'Estensione';

// Auth pages
$lang['Auth_attach'] = 'Invia file';
$lang['Auth_download'] = 'Download File';

$lang['Unable_add_forbidden_extension'] = 'L\'estensione %s è vietata, non puoi aggiungerla alle estensioni permesse'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Gestione gruppi estensioni';
$lang['Manage_extension_groups_explain'] = 'Da qui è possibile aggiungere, cancellare e modificare i gruppi estensioni, disabilitare i gruppi estensioni, assegnargli una categoria speciale, modificare le modalità per il download e definire un\'icona upload che sarà visualizzata per un allegato appartenente al gruppo.';
$lang['Attach_filesize_settings'] = 'Preferenze Allegato Filesize';
$lang['Attach_number_settings'] = 'Attachment Numero Preferenze';
$lang['Attach_options_settings'] = 'Attachment Opzioni';
$lang['Special_category'] = 'Categorie speciali';
$lang['Upload_directory_explain'] = 'Inserisci il relativo path dalla tua installazione di phpBB2 alla Attachments upload directory. Per esempio, inserisci \'files\' se la tua installazione di phpBB2 è locata a http://www.yourdomain.com/phpBB2 e la Attachment Upload Directory è locata a http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Icona Posting Allegato';
$lang['Attach_img_path_explain'] = 'Questa immagine è mostrata vicino ai links Allegato nei postings individuali. Lascia questo campo vuoto se non vuoi mostrare una icona. Questa preferenza sarà sovrascritta da Preferenze in Gestione Estensione Gruppi.';
$lang['Attach_topic_icon'] = 'Allegato Topic Icona';
$lang['Attach_topic_icon_explain'] = 'Questa immagine è mostrata prima di topics con Allegati. Lascia questo campo vuoto se non vuoi mostrare una icona.';
$lang['Attach_display_order'] = 'Mostra Ordine Allegato';
$lang['Attach_display_order_explain'] = 'Qui puoi scegliere se mostrare gli allegati in Posts/PMs in ordine discendente di tempo (Prima gli allegati più recenti) o in ordine di tempo ascendente (Prima gli allegati più vecchi).';
$lang['Show_apcp'] = 'Mostra nuovo Pannello di Controllo dei Post con Allegato';
$lang['Show_apcp_explain'] = 'Scegli se mostrare Il Pannello di Controllo Post con Allegato  (si) o il vecchio metodo con due box per files allegati e editazione degli allegati postati (no) all\'interno dello schermata invio. Il suo look è molto difficile da spiegare, quindi è meglio provarlo.';
$lang['Max_filesize_attach'] = 'Dimensione File';
$lang['Max_filesize_attach_explain'] = 'Dimensione massima per gli allegati. Un valore pari a 0 significa \'illimitato\'. Questa preferenza è limitata dalla configurazione del server. Per esempio. se la tua configurazione php ti permette solo un massimo di 2 MB di uploads, questa non può essere soprascritta.';
$lang['Attach_quota'] = 'Quota Allegato';
$lang['Attach_quota_explain'] = 'Spazio Massimo del Disco in cui TUTTI gli allegati possono essere conservati nel tuo spazio web. Un valore pari a 0 significa \'illimitato\'.';
$lang['Max_filesize_pm'] = 'Dimensione Massima della misura del File nella Cartella Messaggi Privati';
$lang['Max_filesize_pm_explain'] = 'Spazio Massimo del Disco in cui gli Allegati possono essere conservati nel box dei Messaggi privati dell\'utente. Un valore pari a 0 significa \'illimitato\'.';
$lang['Default_quota_limit'] = 'Quota Limite di Default';
$lang['Default_quota_limit_explain'] = 'Qui puoi selezionare la Quota Limite di Default automaticamente assegnata agli Utenti recentemente registrati e Utenti senza una definita Quota Limite. L\'Opzione \'Nessuna Quota Limite\' è per non usare alcuna quota per Allegato, invece, se usi le preferenze di default lo hai definito nel Pannello di Gestione.';
$lang['Max_attachments'] = 'Numero Massimo Di Allegati';
$lang['Max_attachments_explain'] = 'Numero massimo di allegati disponibili in un post.';
$lang['Max_attachments_pm'] = 'Numero Massimo di Allegati in un Messaggio Privato';
$lang['Max_attachments_pm_explain'] = 'Definisci il numero massimo di allegati che un utente può includere in un messaggio privato.';
$lang['Ftp_passive_mode'] = 'Permetti FTP Passive Mode';
$lang['Ftp_passive_mode_explain'] = 'La PASV è il comando richiesta che con cui il server remoto apre una porta per la connessione dati e riporta l\'indirizzo di quella porta. Il server remoto riceve su quella porta e il client vi si connette.';
$lang['No_ftp_extensions_installed'] = 'Non sei autorizzato a usare i metodi di Upload FTP, perchè le estensioni FTP non sono compilate nella tua installazione php.';
$lang['Category_images'] = 'Immagini';
$lang['Sync_thumbnail_resetted'] = 'Thumbnail resettato per Allegato: %s'; // cambia %s col nome del file
$lang['Attach_sync_finished'] = 'Sincronizzazione Allegato Finita.';
$lang['Unable_add_forbidden_extension'] = 'L\'Estensione %s è proibita, non sei autorizzato ad aggiungerla alle Estensioni permesse'; // cambia %s con estensione
$lang['Category_stream_files'] = 'File stream';
$lang['Category_swf_files'] = 'File flash';
$lang['Allowed'] = 'Permesso';
$lang['Allowed_forums'] = 'Forum permessi';
$lang['Ext_group_permissions'] = 'Permessi gruppo';
$lang['Download_mode'] = 'Modalità download';
$lang['Upload_icon'] = 'Icona upload';
$lang['Max_groups_filesize'] = 'Dimensione massima';
$lang['Extension_group_exist'] = 'Il Gruppo estensioni %s è già esistente'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';
$lang['Extension_exist_forbidden'] = 'L\'estensione %s è definita nelle estensioni permesse, per favore, cancellala prima di aggiungerla qui.';  // cambia %s con estensione
// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permessi gruppo estensione -> \'%s\''; // Cambia %s con il nome dei gruppi
$lang['Group_permissions_explain'] = 'Qui puoi restringere il gruppo estensioni selezionato ai forum di tua scelta (definiti nel box permessi forum). Il default è permettere i gruppi estensioni a tutti i forum, l\'utente è autorizzato ad aggiungere file (in modalità normale il mod allegati lo ha fatto dall\'inizio). Aggiungi i forum che vuoi al gruppo estensione (estensioni presso questo gruppo) permesse, di default TUTTI I FORUM spariranno quando li aggiungi alla lista. Puoi riaggiungere TUTTI I FORUM in qualsiasi momento. Se aggiungi un forum alla tua board e il permesso è settato a TUTTI I FORUM, non cambierà niente. Ma se hai cambiato e ristretto l\'accesso ad alcuni forum, devi tornare indietro e controllare per aggiungere il forum recentemente creato. E\'facile farlo automaticamente, ma ti obbligherà a editare vari files, quindi ho scelto la modalità che trovi ora. Tieni bene a mente che tutti i tuoi forum saranno elencati qui.';
$lang['Note_admin_empty_group_permissions'] = 'NOTA:<br />Nei forum elencati sotto i tuoi utenti sono normalmente autorizzati ad allegare file, ma finchè nessun gruppo estensione è autorizzato a esservi collegato, i tuoi utenti saranno impossibilitati ad aggiungere alcunchè. Se provano, riceveranno messaggi di errore. Forse desideri regolare il permesso \'Post Files\' in ADMIN per questi forum.<br /><br />';
$lang['Add_forums'] = 'Aggiungi forum';
$lang['Add_selected'] = 'Aggiungi selezionati';
$lang['Perm_all_forums'] = 'Tutti i forum';
// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Gestisci limiti quota allegato';
$lang['Manage_quotas_explain'] = 'Qui puoi aggiungere/cancellare/cambiare i limiti quota. Puoi assegnare questi limiti quota a utenti e gruppi più tardi. Per assegnare un limite quota ad un utente, devi andare a utenti->gestione, seleziona l\'utente e vedrai le opzioni in basso. Per assegnare un limite quota a un gruppo, vai su gruppi->gestione, seleziona il gruppo da modificare, e vedrai i permessi di configurazione. Se vuoi vedere quali utenti e gruppi sono assegnati a uno specifico limite quota, clicca su \'Vedi\' a sinistra della descrizione quota.';
$lang['Assigned_users'] = 'Utenti assegnati';
$lang['Assigned_groups'] = 'Gruppi assegnati';
$lang['Quota_limit_exist'] = 'Il limite quota %s esiste già.'; // Cambia %s con la descrizione quota

?>