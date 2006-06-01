<?php
/***************************************************************************
 *                            lang_admin_attach.php [Dutch]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Matthijs van de Water & Lennard Klein
 *     email                : matthijs@beryllium.net & Lennard.Klein@planet.nl
 *
 *     $Id: lang_admin_attach.php,v 1.1 2003/02/20 15:26:50 bob Exp $
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
$lang['Control_Panel'] = 'Management Paneel';
$lang['Shadow_attachments'] = 'Schaduw Attachments';
$lang['Forbidden_extensions'] = 'Verboden Extensies';
$lang['Extension_control'] = 'Extensie Management';
$lang['Extension_group_manage'] = 'Extensie Groepen Management';
$lang['Special_categories'] = 'Speciale Categorien';
$lang['Sync_attachments'] = 'Synchroniseer Attachments';
$lang['Quota_limits'] = 'Quota Limieten';

// Attachments -> Management
$lang['Attach_settings']  = 'Attachment Instellingen';
$lang['Manage_attachments_explain']  = 'Hier kan je de globale instellingen voor de Attachment Mod veranderen. Als je de Test Instellingen knop indrukt, doet de Attachment Mod een paar systeem controles om er zeker van te zijn dat de Mod goed zal werken. Als je problemen hebt met het uploaden van bestanden, voer a.u.b. deze test uit, om een gedetailleerd fouten-bericht te krijgen.';
$lang['Attach_filesize_settings'] = 'Attachment Bestandsgrootte Instellingen';
$lang['Attach_number_settings'] = 'Attachment Aantal Instellingen';
$lang['Attach_options_settings'] = 'Attachment Opties';

$lang['Upload_directory'] = 'Upload Map';
$lang['Upload_directory_explain'] = 'Voer het relatieve pad van je phpBB2 installatie naar de Attachment upload map in. Bijvoorbeeld, voer \'files\' in als je phpBB2 installatiemap staat op http://www.jouwdomein.com/phpBB2 en de Attachment upload map op http://jouwdomein.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Pad naar een plaatje voor attachments';
$lang['Attach_img_path_explain'] = 'Dit plaatje is weergegeven naast Attachment links in individuele berichten. Laat dit veld leeg als je geen geen plaatje wil tonen. Deze instelling zal worden overschreven door de instelling in Extensie Groepen Management.';
$lang['Attach_topic_icon'] = 'Attachment Onderwerp Plaatje';
$lang['Attach_topic_icon_explain'] = 'Dit plaatje wordt getoond voor een onderwerp waarin attachments geplaatst zijn. Laat dit veld leeg als je geen plaatje wil tonen.';
$lang['Attach_display_order'] = 'Attachment Weergave Volgorde';
$lang['Attach_display_order_explain'] = 'Hier kan je kiezen of je de Attachments wil weergeven in aflopende bestandstijd volgorde (Nieuwste Attachment eerst) of oplopende bestandstijd volgorde (Oudste Attachment eerst).';
$lang['Show_apcp'] = 'Geef het nieuwe Attachment Plaatsen Controle Paneel weer';
$lang['Show_apcp_explain'] = 'Kies of je het Attachment Plaatsen Controle Paneel wil weergeven (ja) of de oude methode met twee Vakken om bestanden te plaatsen en te wijzigen (nee) in je Bericht Plaatsen Scherm. Het uiterlijk ervan is erg moeilijk te beschrijven, daarom is het het beste om het te proberen.';

$lang['Max_filesize_attach'] = 'Bestandsformaat';
$lang['Max_filesize_attach_explain'] = 'Maximum bestandsformaat voor Attachments. Een waarde van 0 betekend \'ongelimiteerd\'. Deze instelling is beperkt door je server configuratie. Bijvoorbeeld, als je PHP configuratie alleen bestanden toelaat die kleiner zijn dan 2 MB, kan dit niet worden overschreven door de Mod.';
$lang['Default_quota_limit'] = 'Standaard Quota Limiet';
$lang['Default_quota_limit_explain'] = 'Hier kan je de Standaard Quota Limiet instellen die automatisch wordt toegewezen aan nieuwe gebruikers en gebruikers zonder ingestelde Quota Limiet. De optie \'Geen Quota Limiet\' is voor het niet gebruiken van Attachment Quotas, maar het gebruiken van de standaard instellingen die je in dit Beheer Paneel hebt ingesteld.';
$lang['Attach_quota'] = 'Attachment Quotum';
$lang['Attach_quota_explain'] = 'Hier kan je een maximum definieren voor ALLE attachments bij elkaar. Een waarde van 0 betekent \'ongelimiteerd\'.';
$lang['Max_filesize_pm'] = 'Maximum Bestandsformaat in Privé Berichten Map';
$lang['Max_filesize_pm_explain'] = 'Maximum Schijfruimte die Attachments kunnen gebruik in de Privé Berichten box van elke gebruiker. Een waarde van 0 betekent \'ongelimiteerd\'.';

$lang['Max_attachments'] = 'Maximum Aantal Attachments';
$lang['Max_attachments_explain'] = 'Het maximum aantal Attachments gebruikt in een bericht.';
$lang['Max_attachments_pm'] = 'Maximum Aantal Attachments in een Privé Bericht';
$lang['Max_attachments_pm_explain'] = 'Het maxmimun aantal attachments in een Privé Bericht.';

$lang['Disable_mod'] = 'Schakel de Attachment Mod uit';
$lang['Disable_mod_explain'] = 'Deze optie is vooral voor het testen van nieuwe templates en thema\'s, hiermee schakel je alle attachment functies uit, behalve die in het Administratiepaneel';
$lang['PM_Attachments'] = 'Sta Attachments in Privé Berichten toe';
$lang['PM_Attachments_explain'] = 'Sta het toevoegen van Attachments aan een Privé Bericht wel/niet toe.';
$lang['Ftp_upload'] = 'Schakel FTP Upload in';
$lang['Ftp_upload_explain'] = 'Schakel de FTP Upload optie in/uit. Als je het op ja zet, moet je de Attachment FTP Instellingen opgeven en de Upload Map wordt niet meer gebruikt.';
$lang['Attachment_topic_review'] = 'Wil je Attachments weergeven in het Onderwerp scherm?';
$lang['Attachment_topic_review_explain'] = 'Als je ja kiest, zullen alle bestanden worden weergegeven in het Onderwerp scherm als je een antwoord plaatst.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Hier kan je het ip-adres of de FTP-hostnaam van de server die je gebruikt voor het uploaden van je bestanden invoeren. Als je dit veld leeg laat, zal de server waar het phpBB2 board op is geinstalleerd worden gebruikt. Merk op dat het niet is toegestaan ftp:// of iets dergelijks in het adres te gebruiken, maar simpelweg ftp.nep.com of, wat een stuk sneller is, het ip-adres.';

$lang['Attach_ftp_path'] = 'FTP Pad naar je upload map';
$lang['Attach_ftp_path_explain'] = 'De map waar je Attachments opgeslagen zullen worden. Deze map hoeft niet ge-chmod te worden. Voer hier geen ip-adres of of ftp-adres in, dit veld is alleen bedoeld voor het FTP pad.<br />Bijvoorbeeld: /home/web/uploads';
$lang['Ftp_download_path'] = 'Download Link naar FTP Pad';
$lang['Ftp_download_path_explain'] = 'Voer het Pad naar je FTP Pad in, waar je Attachments zijn opgeslagen.<br /> Als je een FTP server op afstand gebruikt, voer dan het volledige pad in, bijvoorbeeld http://www.mijnopslag.com/phpBB2/upload.<br />Als je je Lokale Host gebruikt om de bestanden op te slaan, kan je het pad relatief naar de phpBB2 map invoeren, bijvoorbeeld \'upload\'.<br />Een aansluitende / zal worden verwijderd.<br />Laat dit veld leeg, als het FTP pad niet beschikbaar is vanaf het internet. Als dit veld leeg is kan je download-methode niet gebruiken.';
$lang['Ftp_passive_mode'] = 'Schakel FTP Passive modem in';
$lang['Ftp_passive_mode_explain'] = 'Het PASV commando vraagt dat de server op afstand een poort opent voor de data verbinding en het adres van die poort teruggeeft. De server op afstand luistert op die poort en de client verbindt ernaar.';

$lang['No_ftp_extensions_installed'] = 'Je kan de FTP Upload Methoden niet gebruiken, omdat FTP extensies niet in je PHP installatie zijn gecompileerd.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain']  = 'Hier kan je de attachments verwijderen die aan een bericht zijn gekoppeld, maar niet meer op het bestandssysteem aanwezig zijn, en de bestanden verwijderen die op het bestandssysteem aanwezig zijn, maar niet zijn gekoppeld aan een bericht. Je kan een bestand downloaden of bekijken door op de link klikken, als er geen link is, is het bestand niet aanwezig.';
$lang['Shadow_attachments_file_explain']  = 'Verwijder alle Attachments die op het bestandssysteem staan, maar niet aan een bericht zijn gekoppeld.';
$lang['Shadow_attachments_row_explain']  = 'Verwijder alle Attachment informatie voor attachments niet op het bestandssysteem staan.';
$lang['Empty_file_entry'] = 'Leeg bestand record';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Thumbnail gereset voor Attachment: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Attachment Syncronisatie Gedaan.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Beheer Extensies';
$lang['Manage_extensions_explain'] = 'Hier kan je je bestands extensies beheren. Als je een extensie wel/niet wil toestaan dat een extensie wordt geuploadt, gebruik dan Extensie Groepen Managaement a.u.b..';
$lang['Explanation'] = 'Uitleg';
$lang['Extension_group'] = 'Extensie Groep';
$lang['Invalid_extension'] = 'Ongeldige Extensie';
$lang['Extension_exist'] = 'De Extensie %s bestaat al'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'De Extensie %s is verboden, je kan het niet toevoegen aan de toegestane extensies'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Beheer Extensie Groepen';
$lang['Manage_extension_groups_explain'] = 'Hier kan je je extensie groepen toevoegen, verwijderen en wijzigen, je kan extensie groepen uitschakelen, een special categorie aan ze verbinden, het download mechanisme wijzigen en je kan een Upload Icoon definieren dat voor een Attachment dat tot de groep hoort zal worden weergegeven.';
$lang['Special_category'] = 'Speciale Categorie';
$lang['Category_images'] = 'Afbeeldingen';
$lang['Category_stream_files'] = 'Streaming bestanden';
$lang['Category_swf_files'] = 'Flash bestanden';
$lang['Allowed'] = 'Toegestaan';
$lang['Allowed_forums'] = 'Toegestane Forums';
$lang['Ext_group_permissions'] = 'Groep Permissies';
$lang['Download_mode'] = 'Download Modus';
$lang['Upload_icon'] = 'Upload Icoon';
$lang['Max_groups_filesize'] = 'Maximum Bestandsgrootte';
$lang['Extension_group_exist'] = 'De Extensie Groep %s bestaat al'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Beheer Speciale Categorieën';
$lang['Manage_categories_explain'] = 'Hier kan je de Speciale Categorieën configureren. Je kan speciale parameters en voorwaarden specificeren voor de Special Categorieën die aan een Extensie Groep zijn gebonden.';
$lang['Settings_cat_images'] = 'Instellingen voor Speciale Categorie: Afbeeldingen';
$lang['Settings_cat_streams'] = 'Instellingen voor Speciale Categorie: Streaming bestanden';
$lang['Settings_cat_flash'] = 'Instellingen voor Speciale Categorie: Flash bestanden';
$lang['Display_inlined'] = 'Toon Afbeeldingen';
$lang['Display_inlined_explain'] = 'Kies of afbeeldingen direct in het bericht worden getoond (ja), of om abeeldingen weer te geven als een link';
$lang['Max_image_size'] = 'Maximum Afmeting Afbeelding';
$lang['Max_image_size_explain'] = 'Hier kan je de maximum afmeting aangeven van afbeeldingen die Attached worden (Breedte x Hoogte in pixels).<br />Als het op 0x0 staat is deze mogelijkheid uitgeschakeld. Met sommige afbeeldingen zal deze mogelijkheid niet werken vanwege beperkingen van PHP.';
$lang['Image_link_size'] = 'Afbeelding Link Afmeting';
$lang['Image_link_size_explain'] = 'Als de aangegeven afmeting van een afbeelding is weergegeven, zal de afbeelding worden weergegeven als een link, in plaats van het direct weergeven,<br />als Toon Afbeeldingen is ingeschakeld (Breedte x Hoogte in pixels).<br />Als die op 0x0 staat, is deze mogelijkheid uitgeschakeld. Met sommige afbeeldingen zal deze mogelijkheid niet werken vanwege beperkingen van PHP.';
$lang['Assigned_group'] = 'Gebonden Groep';

$lang['Image_create_thumbnail'] = 'Maak Thumbnail';
$lang['Image_create_thumbnail_explain'] = 'Maak altijd een Thumbnail. Deze mogelijkheid gaat boven bijna alle instellingen in deze Special Categorie, behalve die van Maximum Afmeting Afbeelding. Met deze mogelijkheid zal een Thumbnail worden weergegeven in het bericht, de gebruiker kan er op klikken om de echte afbeelding weer te geven.<br />Merk op dat voor deze mogelijkheid Imagick geinstalleerd moet zijn, als het niet is geinstalleerd of als de veilige modus is ingeschakeld zal de  GD-Extensie van PHP worden gebruikt. Als het Afbeeldings-type niet wordt ondersteunt door PHP, zal deze mogelijkheid niet worden gebruikt.';
$lang['Image_min_thumb_filesize'] = 'Minimum Thumbnail Bestandsgrootte';
$lang['Image_min_thumb_filesize_explain'] = 'Als een Afbeelding kleiner is dan deez aangegeven Bestandsgrootte, zal geen Thumbnail worden gemaakt, omdat het klein genoeg is.';
$lang['Image_imagick_path'] = 'Imagick Programma (Volledige Pad)';
$lang['Image_imagick_path_explain'] = 'Voer het Pad in naar het conversie-programma van Imagick, normaal is dit /usr/bin/convert (onder windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Zoek Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Beheer Verboden Extensies';
$lang['Manage_forbidden_extensions_explain'] = 'Hier kan je verboden extensies toevoegen of verwijderen. De extensies php, php3 en php4 zijn automatisch verboden, je kunt deze niet verwijderen.';
$lang['Forbidden_extension_exist'] = 'Verboden extensie %s bestaat al'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'De Extensie %s is gedefinieerd in je toegestane Extensies, verwijder het voor je het hier toevoegt a.u.b.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Extensie Groep Permissies -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Hier kan je de geselecteerde Extensie Groep voor bepaalde forums van jouw keuze restricteren (gedefinieerd in het toegestane forums vak. De standaard is om Groep Extensies toe te staan voor alle forums waar de gebruiker bestanden kan toevoegen (zoals de Attahment Mod het altijd al heeft gedaan). Voeg het forum waar je de Extensie Groep (de Extensies in deze Groep) toegestaan wil toe, de standaard ALLE FORUMS zal verdwijnen als je Forums toevoegd. Je kan ALLE FORUMS altijd toevoegen. Als je forums aan je Board toevoegd en de permissie staat op ALLE FORUMS zal er niets veranderen. Maar als je de toegang tot bepaalde forums hebt vernderd en gerestricteerd, moet je hier terugkomen om je nieuwe Forum toe te voegen. Het is makkelijk om dit automatisch te doen, maar dit zal je verplichten een berg bestanden te wijzigen, daarom heb ik ervoor gekozen het te doen zoals het nu is. Denk er aan dat al je Forums hier zullen staan.';
$lang['Note_admin_empty_group_permissions'] = 'MERK OP:<br />Bij de Forums die hieronder staan, kunnen je gebruikers normaal gesproken bestanden toevoegen, maar aangezien we hier geen Extensie Groep toegevoegd mag worden, kunnen je gebruikers geen bestanden toevoegen. Als ze het proberen, zullen ze Errors krijgen. Misschien wil je de permissie \'Plaats bestande\' op ADMIN zetten op deze Forums.<br /><br />';
$lang['Add_forums'] = 'Voeg Forums Toe';
$lang['Add_selected'] = 'Voeg Geselecteerde Toe';
$lang['Perm_all_forums'] = 'ALLE FORUMS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Beheer Attachment Quota Limieten';
$lang['Manage_quotas_explain'] = 'Hier kan je Quota Limieten toevoegen/verijderen/veranderen. Je kan later Quote Limieten aan Gebruikers of Groepen Toevoegen. Om een Quota limiet aan een gebruiker toe te voegen, ga je naar Gebruikers->Beheer, selecteer de gebruiker en je zal de optie aan de onderkant zien. Om een Quota Limiet aan een groep toe te voegen, ga je naar Groepen->Beheer, selecteer de groep om te veranderen, en je zal de opties zien. Als je wil zien welke Gebruikers en Groepen aan een bepaalde Quota Limiet zijn verbonden, klik dan op \'Laat zien\' aan de linkerkant van de Quota Beschrijving.';
$lang['Assigned_users'] = 'Gebonden Gebruikers';
$lang['Assigned_groups'] = 'Gebonden Groepen';
$lang['Quota_limit_exist'] = 'De Qouta Limiet %s bestaat al.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Attachment Bestanden Controle Panel';
$lang['Control_panel_explain'] = 'Hier kan je alle attachments bekijken en beheren op basis van gebruikers, attachments, downloads, etc.';
$lang['File_comment_cp'] = 'Bestands Commentaar';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Gebruik een * als wildcard voor gedeeltelijke resultaten';
$lang['Size_smaller_than'] = 'Attachment grootte kleiner dan (bytes)';
$lang['Size_greater_than'] = 'Attachment grootte groter dan (bytes)';
$lang['Count_smaller_than'] = 'Aantal downloads is kleiner dan';
$lang['Count_greater_than'] = 'Aantal downloads is groter dan';
$lang['More_days_old'] = 'Meer dan zoveel dagen oud';
$lang['No_attach_search_match'] = 'Je zoekopdracht leverde geen Attachments op';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Aantal Attachments';
$lang['Total_filesize'] = 'Totale Bestandsgrootte';
$lang['Number_posts_attach'] = 'Aantal Berichten met Attachments';
$lang['Number_topics_attach'] = 'Aantal Onderwerpen met Attachments';
$lang['Number_users_attach'] = 'Aantal Gebruikers dat Attachments heeft geplaatst';
$lang['Number_pms_attach'] = 'Totaal Aantal Attachments in Privé Berichten';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Attachment Statistieken voor %s'; // replace %s with username
$lang['Size_in_kb'] = 'Grootte (KB)';
$lang['Downloads'] = 'Downloads';
$lang['Post_time'] = 'Tijd';
$lang['Posted_in_topic']  = 'Geplaatst in Onderwerp';
$lang['Submit_changes'] = 'Verstuur veranderingen';

// Sort Types
$lang['Sort_Attachments'] = 'Attachments';
$lang['Sort_Size'] = 'Grootte';
$lang['Sort_Filename'] = 'Bestandsnaam';
$lang['Sort_Comment'] = 'Beschrijving';
$lang['Sort_Extension'] = 'Extensie';
$lang['Sort_Downloads'] = 'Downloads';
$lang['Sort_Posttime'] = 'Tijd';
$lang['Sort_Posts'] = 'Berichten';

// View Types
$lang['View_Statistic'] = 'Statistiek';
$lang['View_Search'] = 'Zoek';
$lang['View_Username'] = 'Gebruikersnaam';
$lang['View_Attachments'] = 'Attachments';

// Successfully updated
$lang['Attach_config_updated'] = 'Attachment Instelleningen Succesvol Aangepast';
$lang['Click_return_attach_config']  = 'Klik %shier%s om terug te keren naar de Attachment Instellingen';
$lang['Test_settings_successful'] = 'Instellingen Test voltooid, configuratie lijkt in orde.';

// Some basic definitions
$lang['Attachments'] = 'Attachments';
$lang['Attachment'] = 'Attachment';
$lang['Extensions'] = 'Extensies';
$lang['Extension'] = 'Extensie';

// Auth pages
$lang['Auth_attach'] = 'Post Bestanden';
$lang['Auth_download'] = 'Download Bestanden';

?>
