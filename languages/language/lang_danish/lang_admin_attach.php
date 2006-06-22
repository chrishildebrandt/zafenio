<?php
/***************************************************************************
 *                            lang_admin_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_admin_attach.php,v 1.26 2002/11/02 12:56:41 meik Exp $
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
$lang['Control_Panel'] = 'Kontrol Panel';
$lang['Shadow_attachments'] = 'Skygge Vedh�ftninger';
$lang['Forbidden_extensions'] = 'Forbudte endelser';
$lang['Extension_control'] = 'Endelses Kontrol';
$lang['Extension_group_manage'] = 'Endelses Gruppekontrol';
$lang['Special_categories'] = 'Specielle Kategorier';
$lang['Sync_attachments'] = 'Synkroniser Vedh�ftninger';

// Attachments -> Management
$lang['Attach_settings'] = 'Vedh�ftning Indstillinger';
$lang['Manage_attachments_explain'] = 'Her kan du konfigurere hovedindstillingerne i Attachment Mod. Hvis du trykker p� Test indstillinger knappen, vil Attachment Mod lave nogle systemtest, for at v�re sikker p� at Mod virker korrekt. Hvis du har problemer med at uploade filer, skal du k�re denne test, for at f� en detaljeret fejlbeskrivelse.';
$lang['Attach_filesize_settings'] = 'Vedh�ftning filst�rrelse indstillinger';
$lang['Attach_number_settings'] = 'Vedh�ftning Antal indstillinger';
$lang['Attach_options_settings'] = 'Vedh�ftningsmuligheder';

$lang['Upload_directory'] = 'Upload katalog';
$lang['Upload_directory_explain'] = 'Indtast den relative sti fra din phpBB2 installation til Vedh�ftning upload katalog. For eksempel , indtast \'filer\' hvis din phpBB2 Installation ligger p� http://www.yourdomain.com/phpBB2 og Attachment upload katalog er p� http://www.yourdomain.com/phpBB2/filer.';
$lang['Attach_img_path'] = 'Vedh�ftning Post Icon';
$lang['Attach_img_path_explain'] = 'Dette billede er vist ved siden af Vedh�fningens link i individuelle postninger. Efterlad dette felt tomt, hvis du ikke vil have vist et icon. Disse indstillinger vil overskrive indstillingerne i Endelse Gruppe Management.';
$lang['Attach_topic_icon'] = 'Vedh�ftnings Emne Icon';
$lang['Attach_topic_icon_explain'] = 'Dette billede er vist f�r emner med vedh�ftninger. Feterlad dette felt tomt, hvis du ikke vil have vist et icon.';
$lang['Attach_display_order'] = 'Vedh�ftning visningsorden';
$lang['Attach_display_order_explain'] = 'Her kan du v�lge om du vil vise vedh�ftninger i indl�g/PB i faldende tidsm�ssig orden (nyeste vedh�ftning f�rst) eller voksende tidsm�ssig orden (�ldste vedh�ftning f�rst).';
$lang['Show_apcp'] = 'Viser nye Vedh�ftninger Indl�g Kontrol Panel';
$lang['Show_apcp_explain'] = 'V�lg om du vil have vist Vedh�ftninger Indl�g Kontrol Panel (ja) eller den gamle metode med to kasser for vedh�ftede filer og rette dine indlagte vedh�ftninger (nej) p� din sk�rm. Udseendet af dette er sv�rt at forklare, derfor er det bedst at pr�ve det.';

$lang['Max_filesize_attach'] = 'Filst�rrelse';
$lang['Max_filesize_attach_explain'] = 'Maximum filst�rrelse for vedh�ftninger (i bytes). 0 som v�rdi betyder \'ubegr�nset\'. Denne indstilling er begr�nset af din Server Konfiguration. For eksempel, hvis din php Konfiguration kun tillader et maximum af 2 MB upload, kan dette ikke overskrives af Mod.';
$lang['Attach_quota'] = 'Vedh�ftning Kvota';
$lang['Attach_quota_explain'] = 'Maximum diskplads ALLE vedh�ftninger kan v�re p� din server.';
$lang['Max_filesize_pm'] = 'Maximum filst�rrelse i Privat besked folder';
$lang['Max_filesize_pm_explain'] = 'Maximum diskplads vedh�ftninger kan bruge i hver brugers private besked boks.';
$lang['Default_quota_limit'] = 'Default Quota Limit';
$lang['Default_quota_limit_explain'] = 'Here you are able to select the Default Quota Limit automatically assigned to newly registered Users and Users without an defined Quota Limit. The Option \'No Quota Limit\' is for not using any Attachment Quotas, instead using the default Settings you have defined within this Management Panel.';

$lang['Max_attachments'] = 'Maximum antal vedh�ftninger';
$lang['Max_attachments_explain'] = 'Det maximale antal vedh�ftninger, som er tilladt i et indl�g.';
$lang['Max_attachments_pm'] = 'Maximalt antal vedh�ftninger i en privat besked';
$lang['Max_attachments_pm_explain'] = 'Definerer det maksimale antal vedh�ftninger, som en bruger er tilladt at inkludere i en privat besked.';

$lang['Disable_mod'] = 'Sl� Attachment Mod fra';
$lang['Disable_mod_explain'] = 'Denne mulighed er kun for at teste nye templates eller designs, det sl�r alle vedh�ftningsfunktionerne p�n�r Administrationspanelet fra.';
$lang['PM_Attachments'] = 'Tillad vedh�ftninger i private beskeder';
$lang['PM_Attachments_explain'] = 'Tillad/Forbyd vedh�ftninger i private beskeder.';
$lang['Ftp_upload'] = 'Tillad FTP Upload';
$lang['Ftp_upload_explain'] = 'Tillad/Forbyd FTP Upload muligheden. Hvis du siger ja, skal du definere FTP vedh�ftning indstillinger og upload kataloget bliver ikke l�ngere brugt.';
$lang['Attachment_topic_review'] = 'Vil du vise vedh�ftninger i et emne eksempel vindue ?';
$lang['Attachment_topic_review_explain'] = 'Hvis du v�lger ja, vil alle vedh�ftninger blive vist i emne eksempel n�r du poster en kommentar.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Her kan du indtaste IP-Addressen eller FTP-Hostname for serveren, som bruges til at uyploade filer. Hvis du efterlader feltet blankt, vil serveren hvorp� dit phpBB2 Board er installeret blive brugt. V�r opm�rksom p�, at det ikke er tilladt at tilf�je ftp:// eller lignende til adressen, kun ftp.foo.com eller, som er lidt hurtigere brug IP-adressen.';

$lang['Attach_ftp_path'] = 'FTP sti til dit upload katalog';
$lang['Attach_ftp_path_explain'] = 'Kataloget hvor dine vedh�ftninger vil blive gemt. Det beh�ves ikke at blive chmodded. Indtast ikke din IP eller FTP-Addresse her. Dette felt er kun til FTP stien.<br />For eksempel: /home/web/uploads';
$lang['Ftp_download_path'] = 'Download Link til FTP sti';
$lang['Ftp_download_path_explain'] = 'Indtast stien til din FTP sti, hvortil dine vedh�ftninger er gemt. Indtast den komplette sti, for eksempel http://www.mystorage.com/phpBB2/upload. Den sidste forward slash vil blive fjernet.<br />Efterlad dette felt tomt, hvis stien er udenfor din webservers katalog. Men med dette felt tomt, kan du ikke benytte den fysiske downloadmetode.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Her kan du slette vedh�ftede data fra indl�g n�r filerne mangler i dit filsystem, og slette filer, som ikke l�ngere er vedh�ftet til nogle indl�g. DU kan downloade eller se en fil, hvis du klikker p� den; Hvis der ikke er en link, eksisterer filen ikke.';
$lang['Shadow_attachments_file_explain'] = 'Slet alle vedh�ftede filer, som eksisterer i dit filsystem, men ikke er med i nogle indl�g.';
$lang['Shadow_attachments_row_explain'] = 'Slet alle vedh�ftninger, vhsi der ikke eksisterer en fil i dit filsystem for de vedh�ftede data.';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Thumbnail nulstillet for vedh�ftning: %s'; // erstattet %s med fysisk filnavn
$lang['Attach_sync_finished'] = 'SYnkronisering af vedh�ftninger f�rdig.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Arranger Endelser';
$lang['Manage_extensions_explain'] = 'Her kan du arrangere dine fil-endelser. Hvis du vil tillade/forbyde en endelse at blive uploaded, burg da Endelse Gruppe Management.';
$lang['Explanation'] = 'Forklaring';
$lang['Extension_group'] = 'Endelse Gruppe';
$lang['Invalid_extension'] = 'Forkert endelse';
$lang['Extension_exist'] = 'endelsen eksister %s allerede'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Endelsen %s er forbudt, DU har ikke tilladelse til at tilf�je denne endelse'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Arranger Endelse Grupper';
$lang['Manage_extension_groups_explain'] = 'Her kan du tilf�je, slette og �ndre dine Endelse Grupper, du kan sl� Endelse Grupper fra, tilf�je specielle kategorier til dem, �ndre download mekanismen og definere et Upload Icon som vil blive vist foran en vedh�ftning, som h�rer til gruppen.';
$lang['Special_category'] = 'Specielle kategori';
$lang['Category_images'] = 'Billeder';
$lang['Category_stream_files'] = 'Streamede Filer';
$lang['Category_swf_files'] = 'Flash Filer';
$lang['Allowed'] = 'tilladte';
$lang['Allowed_forums'] = 'tilladte Forums';
$lang['Ext_group_permissions'] = 'Gruppe rettigheder';
$lang['Download_mode'] = 'Download Mode';
$lang['Upload_icon'] = 'Upload Icon';
$lang['Max_groups_filesize'] = 'Maksimal filst�rrelse';
$lang['Extension_group_exist'] = 'Endelse Gruppen %s eksisterer ellerede'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Arranger Specielle Kategorier';
$lang['Manage_categories_explain'] = 'Her kan du konfigurere Specielle Kategorier. Du kan s�tte specielle parametre og betingelser for den specielle kategori, som er tilf�jet Endelse Gruppe.';
$lang['Settings_cat_images'] = 'Indstillinger for Speciel kategori : Billeder';
$lang['Settings_cat_streams'] = 'Indstillinger for Speciel kategori : Streamede Filer';
$lang['Settings_cat_flash'] = 'Indstillinger for Speciel kategori : Flash Filer';
$lang['Display_inlined'] = 'Vis indlejrede billeder';
$lang['Display_inlined_explain'] = 'V�lg om du vil have vist billedet direkte i indl�gget (ja) eller vist billedet som en link ?';
$lang['Max_image_size'] = 'Maksimal Billeddimension';
$lang['Max_image_size_explain'] = 'Her kan du definere den maksimale st�rrelse p� et billede, som er vedh�ftet (bredde x h�jde i pixels).<br />Hvis det er sat til 0x0, er denne facilitet sl�et fra. Ved nogle billeder vil denne mulighed ikke fungere p.g.a. begr�nsninger i PHP.';
$lang['Image_link_size'] = 'Billed Link Dimensioner';
$lang['Image_link_size_explain'] = 'Hvis dimensionerne p� et billede er n�et, vil billedet blive vist som en link. Istedet for at blive vist indlejret,<br />Hvis indlejret visning er sl�et til (bredde x h�jde i pixels).<br />Hvis det er sat til 0x0, er denne facdilitet sl�et fra. Ved nogle billeder vil denne mulighed ikke fungere p.g.a. begr�nsninger i PHP.';
$lang['Assigned_group'] = 'Tilf�jet gruppe';

$lang['Image_create_thumbnail'] = 'Opret Thumbnail';
$lang['Image_create_thumbnail_explain'] = 'Opret altid en Thumbnail. Denne facilitet har h�jere prioritet end n�sten alle andre i Speciel Kategori, undtagelsen er Maksimal Billed Dimension. Med denne facilitet vil en Thumbnail blive vist i et indl�g, og brugeren kan klikke p� det for at �bne det rigtige billede.<br />V�r opm�rksom p� at denne facilitet kr�ver at Imagick er installeret, hvis ikke eller hvis Safe-Mode er sl�et til vil GD-Endelsen i PHP blive brugt. Hvis billedtypen ikke er supporteret af PHP, vil denne facilitet ikke blive benyttet.';
$lang['Image_min_thumb_filesize'] = 'Minimum Thumbnail Filst�rrelse';
$lang['Image_min_thumb_filesize_explain'] = 'Hvis et billede er mindre end den definerede filst�rrelse, vil der ikke blive oprettet en Thumbnail, fordi den er lille nok.';
$lang['Image_imagick_path'] = 'Imagick Program (Komplet sti)';
$lang['Image_imagick_path_explain'] = 'Indtast stien til konverteringsprogrammet imagick, normalt /usr/bin/convert (p� windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'S�g efter Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Arranger Forbudte Endelser';
$lang['Manage_forbidden_extensions_explain'] = 'Her kan du tilf�je og slette forbudte endelser. Endelserne php, php3 and php4 er forbudte som standard p.g.a. sikkerhedsm�ssige �rsager. Du kan ikke slette disse.';
$lang['Forbidden_extension_exist'] = 'Den forbudte endelse %s eksisterer allerede'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Endelsen %s er defineret i dine tilladte endelser, slet den venligst inden du tilf�jer den her.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Endelse Gruppe Rettigheder -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Her kan du begr�nse den valgte Endelse Gruppe til bestemte forums (Defineret i den Tilladte Forums boks). Standard er at tillade Endelse Grupper til alle forums som brugeren er i stand til at vedh�fte filer i (S�dan har Attachment Mod fungeret siden begyndelsen). Bare tilf�j de forums du vil have Endelse Gruppen (Endelsen indenfpr denne gruppe) til at v�re tilladt der. Standarden ALL FORUMS vil forsvinde n�r du tilf�jer forums til listen. Du er istand til at tilf�je ALL FORUMS p� ethvert givent tidspunkt. Hvis du tilf�jer et forum til dit board og rettighederne er sat til ALLE FORUMS vil ingenting ske. Men hvis du har �ndret og give begr�nsede muligheder til nogle bestemte forums, m� du vende tilbage hertil for at tilf�je dit nye oprette forum. Det er nemt at g�re dette automatisk, men dette vil kr�ver at du �ndrer en masse filer. Derfor har jeg valgt som det er nu. Hav i tankerne, at alle dine forums vil blive vist her.';
$lang['Note_admin_empty_group_permissions'] = 'NOTE:<br />I den nedenfor viste forums vil dine brugere altid have tilladelse til at vedgh�fte filer, men da ingen Endelse Gruppen er tilladt at vedh�fte her, vil dine bruger eikke kunne vedh�fte nogenting. Hvis de fors�ger vil de f� en fejlmeddelelser. M�ske du vil s�tte rettighederne i \'Post Filer\' til ADMIN i disse forums.<br /><br />';
$lang['Add_forums'] = 'Tilf�j forums';
$lang['Add_selected'] = 'Tilf�j valgte';
$lang['Perm_all_forums'] = 'ALLE FORUMS';

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Fil Vedh�ftning Kontrol Panel';
$lang['Control_panel_explain'] = 'Her kan du se og arrangere alle vedh�ftninger baseret p� brugere, vedh�ftninger, visninger etc...';
$lang['File_comment_cp'] = 'Fil Kommentar';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Brug * som wildcard for delvis match';
$lang['Size_smaller_than'] = 'Vedh�ftning st�rrelse er mindre end (bytes)';
$lang['Size_greater_than'] = 'Vedh�ftning st�rrelse er st�rre end (bytes)';
$lang['Count_smaller_than'] = 'Download t�ller er mindre end';
$lang['Count_greater_than'] = 'Download t�ller er st�rre end';
$lang['More_days_old'] = '�ldre end dette antal dage gammelt';
$lang['No_attach_search_match'] = 'Ingen vedh�ftninger opfyldte dine s�gekriterier';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Antal vedh�ftninger';
$lang['Total_filesize'] = 'Total Filst�rrelse';
$lang['Number_posts_attach'] = 'Antal indl�g med vedh�ftninger';
$lang['Number_topics_attach'] = 'Antal emner med vedh�ftninger';
$lang['Number_users_attach'] = 'Uafh�ngige brugers postede vedh�ftninger';
$lang['Number_pms_attach'] = 'Total antal vedh�ftninger i private beskeder';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistik for vedh�ftninger %s'; // replace %s with username
$lang['Size_in_kb'] = 'St�rrelse (KB)';
$lang['Downloads'] = 'Downloads';
$lang['Post_time'] = 'Post Time';
$lang['Posted_in_topic'] = 'Indlagt i Emner';
$lang['Submit_changes'] = 'Tilf�j �ndringer';

// Sort Types
$lang['Sort_Attachments'] = 'Vedh�ftninger';
$lang['Sort_Size'] = 'St�rrelse';
$lang['Sort_Filename'] = 'Filnavn';
$lang['Sort_Comment'] = 'Kommentar';
$lang['Sort_Extension'] = 'Endelse';
$lang['Sort_Downloads'] = 'Downloads';
$lang['Sort_Posttime'] = 'Post Time';
$lang['Sort_Posts'] = 'Indl�g';

// View Types
$lang['View_Statistic'] = 'Statistik';
$lang['View_Search'] = 'S�g';
$lang['View_Username'] = 'Brugernavn';
$lang['View_Attachments'] = 'Vedh�ftninger';

// Successfully updated
$lang['Attach_config_updated'] = 'Vedh�ftning Konfiguration opdateret';
$lang['Click_return_attach_config'] = 'Klik %sHere%s for at returnere til Vedh�ftning Konfiguration';
$lang['Test_settings_successful'] = 'test af indstillinger f�rdig, konfiguration ser ud til at v�re ok.';

// Some basic definitions
$lang['Attachments'] = 'Vedh�ftninger';
$lang['Attachment'] = 'Vedh�ftning';
$lang['Extensions'] = 'Endelser';
$lang['Extension'] = 'Endelse';

// Auth pages
$lang['Auth_attach'] = 'Post Filer';
$lang['Auth_download'] = 'Download Filer';

?>