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
$lang['Shadow_attachments'] = 'Skygge Vedhæftninger';
$lang['Forbidden_extensions'] = 'Forbudte endelser';
$lang['Extension_control'] = 'Endelses Kontrol';
$lang['Extension_group_manage'] = 'Endelses Gruppekontrol';
$lang['Special_categories'] = 'Specielle Kategorier';
$lang['Sync_attachments'] = 'Synkroniser Vedhæftninger';

// Attachments -> Management
$lang['Attach_settings'] = 'Vedhæftning Indstillinger';
$lang['Manage_attachments_explain'] = 'Her kan du konfigurere hovedindstillingerne i Attachment Mod. Hvis du trykker på Test indstillinger knappen, vil Attachment Mod lave nogle systemtest, for at være sikker på at Mod virker korrekt. Hvis du har problemer med at uploade filer, skal du køre denne test, for at få en detaljeret fejlbeskrivelse.';
$lang['Attach_filesize_settings'] = 'Vedhæftning filstørrelse indstillinger';
$lang['Attach_number_settings'] = 'Vedhæftning Antal indstillinger';
$lang['Attach_options_settings'] = 'Vedhæftningsmuligheder';

$lang['Upload_directory'] = 'Upload katalog';
$lang['Upload_directory_explain'] = 'Indtast den relative sti fra din phpBB2 installation til Vedhæftning upload katalog. For eksempel , indtast \'filer\' hvis din phpBB2 Installation ligger på http://www.yourdomain.com/phpBB2 og Attachment upload katalog er på http://www.yourdomain.com/phpBB2/filer.';
$lang['Attach_img_path'] = 'Vedhæftning Post Icon';
$lang['Attach_img_path_explain'] = 'Dette billede er vist ved siden af Vedhæfningens link i individuelle postninger. Efterlad dette felt tomt, hvis du ikke vil have vist et icon. Disse indstillinger vil overskrive indstillingerne i Endelse Gruppe Management.';
$lang['Attach_topic_icon'] = 'Vedhæftnings Emne Icon';
$lang['Attach_topic_icon_explain'] = 'Dette billede er vist før emner med vedhæftninger. Feterlad dette felt tomt, hvis du ikke vil have vist et icon.';
$lang['Attach_display_order'] = 'Vedhæftning visningsorden';
$lang['Attach_display_order_explain'] = 'Her kan du vælge om du vil vise vedhæftninger i indlæg/PB i faldende tidsmæssig orden (nyeste vedhæftning først) eller voksende tidsmæssig orden (ældste vedhæftning først).';
$lang['Show_apcp'] = 'Viser nye Vedhæftninger Indlæg Kontrol Panel';
$lang['Show_apcp_explain'] = 'Vælg om du vil have vist Vedhæftninger Indlæg Kontrol Panel (ja) eller den gamle metode med to kasser for vedhæftede filer og rette dine indlagte vedhæftninger (nej) på din skærm. Udseendet af dette er svært at forklare, derfor er det bedst at prøve det.';

$lang['Max_filesize_attach'] = 'Filstørrelse';
$lang['Max_filesize_attach_explain'] = 'Maximum filstørrelse for vedhæftninger (i bytes). 0 som værdi betyder \'ubegrænset\'. Denne indstilling er begrænset af din Server Konfiguration. For eksempel, hvis din php Konfiguration kun tillader et maximum af 2 MB upload, kan dette ikke overskrives af Mod.';
$lang['Attach_quota'] = 'Vedhæftning Kvota';
$lang['Attach_quota_explain'] = 'Maximum diskplads ALLE vedhæftninger kan være på din server.';
$lang['Max_filesize_pm'] = 'Maximum filstørrelse i Privat besked folder';
$lang['Max_filesize_pm_explain'] = 'Maximum diskplads vedhæftninger kan bruge i hver brugers private besked boks.';
$lang['Default_quota_limit'] = 'Default Quota Limit';
$lang['Default_quota_limit_explain'] = 'Here you are able to select the Default Quota Limit automatically assigned to newly registered Users and Users without an defined Quota Limit. The Option \'No Quota Limit\' is for not using any Attachment Quotas, instead using the default Settings you have defined within this Management Panel.';

$lang['Max_attachments'] = 'Maximum antal vedhæftninger';
$lang['Max_attachments_explain'] = 'Det maximale antal vedhæftninger, som er tilladt i et indlæg.';
$lang['Max_attachments_pm'] = 'Maximalt antal vedhæftninger i en privat besked';
$lang['Max_attachments_pm_explain'] = 'Definerer det maksimale antal vedhæftninger, som en bruger er tilladt at inkludere i en privat besked.';

$lang['Disable_mod'] = 'Slå Attachment Mod fra';
$lang['Disable_mod_explain'] = 'Denne mulighed er kun for at teste nye templates eller designs, det slår alle vedhæftningsfunktionerne pånær Administrationspanelet fra.';
$lang['PM_Attachments'] = 'Tillad vedhæftninger i private beskeder';
$lang['PM_Attachments_explain'] = 'Tillad/Forbyd vedhæftninger i private beskeder.';
$lang['Ftp_upload'] = 'Tillad FTP Upload';
$lang['Ftp_upload_explain'] = 'Tillad/Forbyd FTP Upload muligheden. Hvis du siger ja, skal du definere FTP vedhæftning indstillinger og upload kataloget bliver ikke længere brugt.';
$lang['Attachment_topic_review'] = 'Vil du vise vedhæftninger i et emne eksempel vindue ?';
$lang['Attachment_topic_review_explain'] = 'Hvis du vælger ja, vil alle vedhæftninger blive vist i emne eksempel når du poster en kommentar.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Her kan du indtaste IP-Addressen eller FTP-Hostname for serveren, som bruges til at uyploade filer. Hvis du efterlader feltet blankt, vil serveren hvorpå dit phpBB2 Board er installeret blive brugt. Vær opmærksom på, at det ikke er tilladt at tilføje ftp:// eller lignende til adressen, kun ftp.foo.com eller, som er lidt hurtigere brug IP-adressen.';

$lang['Attach_ftp_path'] = 'FTP sti til dit upload katalog';
$lang['Attach_ftp_path_explain'] = 'Kataloget hvor dine vedhæftninger vil blive gemt. Det behøves ikke at blive chmodded. Indtast ikke din IP eller FTP-Addresse her. Dette felt er kun til FTP stien.<br />For eksempel: /home/web/uploads';
$lang['Ftp_download_path'] = 'Download Link til FTP sti';
$lang['Ftp_download_path_explain'] = 'Indtast stien til din FTP sti, hvortil dine vedhæftninger er gemt. Indtast den komplette sti, for eksempel http://www.mystorage.com/phpBB2/upload. Den sidste forward slash vil blive fjernet.<br />Efterlad dette felt tomt, hvis stien er udenfor din webservers katalog. Men med dette felt tomt, kan du ikke benytte den fysiske downloadmetode.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Her kan du slette vedhæftede data fra indlæg når filerne mangler i dit filsystem, og slette filer, som ikke længere er vedhæftet til nogle indlæg. DU kan downloade eller se en fil, hvis du klikker på den; Hvis der ikke er en link, eksisterer filen ikke.';
$lang['Shadow_attachments_file_explain'] = 'Slet alle vedhæftede filer, som eksisterer i dit filsystem, men ikke er med i nogle indlæg.';
$lang['Shadow_attachments_row_explain'] = 'Slet alle vedhæftninger, vhsi der ikke eksisterer en fil i dit filsystem for de vedhæftede data.';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Thumbnail nulstillet for vedhæftning: %s'; // erstattet %s med fysisk filnavn
$lang['Attach_sync_finished'] = 'SYnkronisering af vedhæftninger færdig.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Arranger Endelser';
$lang['Manage_extensions_explain'] = 'Her kan du arrangere dine fil-endelser. Hvis du vil tillade/forbyde en endelse at blive uploaded, burg da Endelse Gruppe Management.';
$lang['Explanation'] = 'Forklaring';
$lang['Extension_group'] = 'Endelse Gruppe';
$lang['Invalid_extension'] = 'Forkert endelse';
$lang['Extension_exist'] = 'endelsen eksister %s allerede'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Endelsen %s er forbudt, DU har ikke tilladelse til at tilføje denne endelse'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Arranger Endelse Grupper';
$lang['Manage_extension_groups_explain'] = 'Her kan du tilføje, slette og ændre dine Endelse Grupper, du kan slå Endelse Grupper fra, tilføje specielle kategorier til dem, ændre download mekanismen og definere et Upload Icon som vil blive vist foran en vedhæftning, som hører til gruppen.';
$lang['Special_category'] = 'Specielle kategori';
$lang['Category_images'] = 'Billeder';
$lang['Category_stream_files'] = 'Streamede Filer';
$lang['Category_swf_files'] = 'Flash Filer';
$lang['Allowed'] = 'tilladte';
$lang['Allowed_forums'] = 'tilladte Forums';
$lang['Ext_group_permissions'] = 'Gruppe rettigheder';
$lang['Download_mode'] = 'Download Mode';
$lang['Upload_icon'] = 'Upload Icon';
$lang['Max_groups_filesize'] = 'Maksimal filstørrelse';
$lang['Extension_group_exist'] = 'Endelse Gruppen %s eksisterer ellerede'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Arranger Specielle Kategorier';
$lang['Manage_categories_explain'] = 'Her kan du konfigurere Specielle Kategorier. Du kan sætte specielle parametre og betingelser for den specielle kategori, som er tilføjet Endelse Gruppe.';
$lang['Settings_cat_images'] = 'Indstillinger for Speciel kategori : Billeder';
$lang['Settings_cat_streams'] = 'Indstillinger for Speciel kategori : Streamede Filer';
$lang['Settings_cat_flash'] = 'Indstillinger for Speciel kategori : Flash Filer';
$lang['Display_inlined'] = 'Vis indlejrede billeder';
$lang['Display_inlined_explain'] = 'Vælg om du vil have vist billedet direkte i indlægget (ja) eller vist billedet som en link ?';
$lang['Max_image_size'] = 'Maksimal Billeddimension';
$lang['Max_image_size_explain'] = 'Her kan du definere den maksimale størrelse på et billede, som er vedhæftet (bredde x højde i pixels).<br />Hvis det er sat til 0x0, er denne facilitet slået fra. Ved nogle billeder vil denne mulighed ikke fungere p.g.a. begrænsninger i PHP.';
$lang['Image_link_size'] = 'Billed Link Dimensioner';
$lang['Image_link_size_explain'] = 'Hvis dimensionerne på et billede er nået, vil billedet blive vist som en link. Istedet for at blive vist indlejret,<br />Hvis indlejret visning er slået til (bredde x højde i pixels).<br />Hvis det er sat til 0x0, er denne facdilitet slået fra. Ved nogle billeder vil denne mulighed ikke fungere p.g.a. begrænsninger i PHP.';
$lang['Assigned_group'] = 'Tilføjet gruppe';

$lang['Image_create_thumbnail'] = 'Opret Thumbnail';
$lang['Image_create_thumbnail_explain'] = 'Opret altid en Thumbnail. Denne facilitet har højere prioritet end næsten alle andre i Speciel Kategori, undtagelsen er Maksimal Billed Dimension. Med denne facilitet vil en Thumbnail blive vist i et indlæg, og brugeren kan klikke på det for at åbne det rigtige billede.<br />Vær opmærksom på at denne facilitet kræver at Imagick er installeret, hvis ikke eller hvis Safe-Mode er slået til vil GD-Endelsen i PHP blive brugt. Hvis billedtypen ikke er supporteret af PHP, vil denne facilitet ikke blive benyttet.';
$lang['Image_min_thumb_filesize'] = 'Minimum Thumbnail Filstørrelse';
$lang['Image_min_thumb_filesize_explain'] = 'Hvis et billede er mindre end den definerede filstørrelse, vil der ikke blive oprettet en Thumbnail, fordi den er lille nok.';
$lang['Image_imagick_path'] = 'Imagick Program (Komplet sti)';
$lang['Image_imagick_path_explain'] = 'Indtast stien til konverteringsprogrammet imagick, normalt /usr/bin/convert (på windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Søg efter Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Arranger Forbudte Endelser';
$lang['Manage_forbidden_extensions_explain'] = 'Her kan du tilføje og slette forbudte endelser. Endelserne php, php3 and php4 er forbudte som standard p.g.a. sikkerhedsmæssige årsager. Du kan ikke slette disse.';
$lang['Forbidden_extension_exist'] = 'Den forbudte endelse %s eksisterer allerede'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Endelsen %s er defineret i dine tilladte endelser, slet den venligst inden du tilføjer den her.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Endelse Gruppe Rettigheder -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Her kan du begrænse den valgte Endelse Gruppe til bestemte forums (Defineret i den Tilladte Forums boks). Standard er at tillade Endelse Grupper til alle forums som brugeren er i stand til at vedhæfte filer i (Sådan har Attachment Mod fungeret siden begyndelsen). Bare tilføj de forums du vil have Endelse Gruppen (Endelsen indenfpr denne gruppe) til at være tilladt der. Standarden ALL FORUMS vil forsvinde når du tilføjer forums til listen. Du er istand til at tilføje ALL FORUMS på ethvert givent tidspunkt. Hvis du tilføjer et forum til dit board og rettighederne er sat til ALLE FORUMS vil ingenting ske. Men hvis du har ændret og give begrænsede muligheder til nogle bestemte forums, må du vende tilbage hertil for at tilføje dit nye oprette forum. Det er nemt at gøre dette automatisk, men dette vil kræver at du ændrer en masse filer. Derfor har jeg valgt som det er nu. Hav i tankerne, at alle dine forums vil blive vist her.';
$lang['Note_admin_empty_group_permissions'] = 'NOTE:<br />I den nedenfor viste forums vil dine brugere altid have tilladelse til at vedghæfte filer, men da ingen Endelse Gruppen er tilladt at vedhæfte her, vil dine bruger eikke kunne vedhæfte nogenting. Hvis de forsøger vil de få en fejlmeddelelser. Måske du vil sætte rettighederne i \'Post Filer\' til ADMIN i disse forums.<br /><br />';
$lang['Add_forums'] = 'Tilføj forums';
$lang['Add_selected'] = 'Tilføj valgte';
$lang['Perm_all_forums'] = 'ALLE FORUMS';

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Fil Vedhæftning Kontrol Panel';
$lang['Control_panel_explain'] = 'Her kan du se og arrangere alle vedhæftninger baseret på brugere, vedhæftninger, visninger etc...';
$lang['File_comment_cp'] = 'Fil Kommentar';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Brug * som wildcard for delvis match';
$lang['Size_smaller_than'] = 'Vedhæftning størrelse er mindre end (bytes)';
$lang['Size_greater_than'] = 'Vedhæftning størrelse er større end (bytes)';
$lang['Count_smaller_than'] = 'Download tæller er mindre end';
$lang['Count_greater_than'] = 'Download tæller er større end';
$lang['More_days_old'] = 'Ældre end dette antal dage gammelt';
$lang['No_attach_search_match'] = 'Ingen vedhæftninger opfyldte dine søgekriterier';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Antal vedhæftninger';
$lang['Total_filesize'] = 'Total Filstørrelse';
$lang['Number_posts_attach'] = 'Antal indlæg med vedhæftninger';
$lang['Number_topics_attach'] = 'Antal emner med vedhæftninger';
$lang['Number_users_attach'] = 'Uafhængige brugers postede vedhæftninger';
$lang['Number_pms_attach'] = 'Total antal vedhæftninger i private beskeder';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistik for vedhæftninger %s'; // replace %s with username
$lang['Size_in_kb'] = 'Størrelse (KB)';
$lang['Downloads'] = 'Downloads';
$lang['Post_time'] = 'Post Time';
$lang['Posted_in_topic'] = 'Indlagt i Emner';
$lang['Submit_changes'] = 'Tilføj ændringer';

// Sort Types
$lang['Sort_Attachments'] = 'Vedhæftninger';
$lang['Sort_Size'] = 'Størrelse';
$lang['Sort_Filename'] = 'Filnavn';
$lang['Sort_Comment'] = 'Kommentar';
$lang['Sort_Extension'] = 'Endelse';
$lang['Sort_Downloads'] = 'Downloads';
$lang['Sort_Posttime'] = 'Post Time';
$lang['Sort_Posts'] = 'Indlæg';

// View Types
$lang['View_Statistic'] = 'Statistik';
$lang['View_Search'] = 'Søg';
$lang['View_Username'] = 'Brugernavn';
$lang['View_Attachments'] = 'Vedhæftninger';

// Successfully updated
$lang['Attach_config_updated'] = 'Vedhæftning Konfiguration opdateret';
$lang['Click_return_attach_config'] = 'Klik %sHere%s for at returnere til Vedhæftning Konfiguration';
$lang['Test_settings_successful'] = 'test af indstillinger færdig, konfiguration ser ud til at være ok.';

// Some basic definitions
$lang['Attachments'] = 'Vedhæftninger';
$lang['Attachment'] = 'Vedhæftning';
$lang['Extensions'] = 'Endelser';
$lang['Extension'] = 'Endelse';

// Auth pages
$lang['Auth_attach'] = 'Post Filer';
$lang['Auth_download'] = 'Download Filer';

?>