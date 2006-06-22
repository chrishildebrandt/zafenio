<?php

/***************************************************************************
 *                            lang_admin.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.3.2.1 2002/05/24 13:40:47 psotfx Exp $
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
// Translation done by Ken Christensen (Dalixam)

// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Normal Administrator";
$lang['Users'] = "Bruger Administrator";
$lang['Groups'] = "Gruppe Administrator";
$lang['Forums'] = "Forum Administrator";
$lang['Styles'] = "Layout Administrator";

$lang['Configuration'] = "Konfiguration";
$lang['Permissions'] = "Tilladelser";
$lang['Manage'] = "Redigering";
$lang['Disallow'] = "Forbyd specifikke Navne";
$lang['Prune'] = "Besk�r";
$lang['Mass_Email'] = "Gruppe email";
$lang['Ranks'] = "Niveauer";
$lang['Smilies'] = "Smilies";
$lang['Ban_Management'] = "Forbyd Kontrol";
$lang['Word_Censor'] = "Ordcensurerer";
$lang['Export'] = "Eksport�r";
$lang['Create_new'] = "Opret";
$lang['Add_new'] = "Tilf�j";
$lang['Backup_DB'] = "Backup Database";
$lang['Restore_DB'] = "Genopret Database";


//
// Index
//
$lang['Admin'] = "Administration";
$lang['Not_admin'] = "Du er ikke autoriseret til at redigere dette forum";
$lang['Welcome_phpBB'] = "Velkommen til phpBB";
$lang['Admin_intro'] = "Tak fordi du valgte phpBB som dit forum. Denne sk�rm vil give dig et hurtigt overblik over alle de forskellige statistikker, der er tilg�ngelige om dit forum. Du kan komme tilbage til denne side ved at klikke p� <u>Administrationsindex</u> linket i venstre side. For at vende tilbage til indexsiden af dit forum skal du klikke p� phpBB logoet, der ogs� befinder sig i venstre side. De andre links i venstre side lader dig kontrollere og redigere hver eneste aspekt af dit forum, hver enkelt side indeholder instruktioner om, hvordan du bruger de forskellige v�rkt�jer.";
$lang['Main_index'] = "Forumindeks";
$lang['Forum_stats'] = "Forum Statistikker";
$lang['Admin_Index'] = "Administrationsindeks";
$lang['Preview_forum'] = "Se et smugkig p� Forumet";

$lang['Click_return_admin_index'] = "Klik %sHer%s for at vende tilbage til Administrationsindexet";

$lang['Statistic'] = "Statistikker";
$lang['Value'] = "V�rdi";
$lang['Number_posts'] = "Antal indl�g";
$lang['Posts_per_day'] = "Indl�g pr dag";
$lang['Number_topics'] = "Antal emner";
$lang['Topics_per_day'] = "Emner pr dag";
$lang['Number_users'] = "Antal brugere";
$lang['Users_per_day'] = "Brugere pr dag";
$lang['Board_started'] = "Forum oprettelse";
$lang['Avatar_dir_size'] = "Avatar-bibliotekets st�rrelse";
$lang['Database_size'] = "Database-st�rrelse";
$lang['Gzip_compression'] ="Gzip komprimering";
$lang['Not_available'] = "Ikke tilg�ngelig";

$lang['ON'] = "Sl�et til"; // Dette er for GZip komprimering
$lang['OFF'] = "Sl�et fra"; 


//
// DB Utils
//
$lang['Database_Utilities'] = "Database-v�rkt�jer";

$lang['Restore'] = "Genopret";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Dette vil genoprette alle phpBB tabeller fra en gemt fil. Hvis din server underst�tter det, kan du uploade en gzip komprimeret tekstfil og s� bliver den automatisk dekomprimeret. <b>ADVARSEL</b> Dette vil overskrive alle eksisterende data. Genoprettelsen kan tage lang tid at udf�re, forlad venligst ikke denne side f�r den er fuldf�rt.";
$lang['Backup_explain'] = "Her kan du lave en backup, af alle dine data, der relaterer til phpBB. Hvis du har andre tabeller i din database, som du ogs� �nsker, at lave en backup af, skal du indtaste deres navne adskilt af kommaer i Yderligere Tabeller feltet nedenunder. Hvis din server underst�tter det, kan du gzip komprimere filen f�r du downloader den for at reducere dens st�rrrelse.";

$lang['Backup_options'] = "Backup muligheder";
$lang['Start_backup'] = "Start backup";
$lang['Full_backup'] = "Fuld backup";
$lang['Structure_backup'] = "Kun Struktur backup";
$lang['Data_backup'] = "Kun Data backup";
$lang['Additional_tables'] = "Yderligere Tabeller";
$lang['Gzip_compress'] = "Gzip komprim�r fil";
$lang['Select_file'] = "V�lg en fil";
$lang['Start_Restore'] = "Start Genopret";

$lang['Restore_success'] = "Databasen er blevet succesfuldt genoprettet.<br /><br />Dit forum skulle nu v�re i den tilstand, det var, da backuppen blev foretaget";
$lang['Backup_download'] = "Din download vil begynde om kort tid, vent venligst til den begynder";
$lang['Backups_not_supported'] = "Desv�rre, backups af databaser fra dit database-system underst�ttes p� nuv�rende tidspunkt ikke";

$lang['Restore_Error_uploading'] = "Der skete en fejl under uploading af backup-filen";
$lang['Restore_Error_filename'] = "Der er et problem med filens navn, pr�v venligst med en alternativ fil";
$lang['Restore_Error_decompress'] = "Gzip-filen kan ikke dekomprimeres, upload venligst en ren tekstversion";
$lang['Restore_Error_no_file'] = "Ingen fil blev uploaded";


//
// Auth pages
//
$lang['Select_a_User'] = "V�lg en Bruger";
$lang['Select_a_Group'] = "V�lg en Gruppe";
$lang['Select_a_Forum'] = "V�lg et Forum";
$lang['Auth_Control_User'] = "Brugerrettigheder kontrolside"; 
$lang['Auth_Control_Group'] = "Grupperettigheder kontrolside"; 
$lang['Auth_Control_Forum'] = "Forumrettigheder kontrolside"; 
$lang['Look_up_User'] = "Sl� Brugeren op"; 
$lang['Look_up_Group'] = "Sl� Gruppen op"; 
$lang['Look_up_Forum'] = "Vis forum"; 

$lang['Group_auth_explain'] = "Her kan du �ndre rettighederne og redakt�rstatussen, tilskrevet til hver enkelt brugergruppe. Glem ikke n�r du �ndrer grupperettigheder, at individuelle brugerrettigheder m�ske stadig tillader, at brugeren har adgang til forumerne, etc. Du bliver advaret, hvis dette er tilf�ldet.";
$lang['User_auth_explain'] = "Her kan du �ndre rettighederne og redakt�rstatussen, tilskrevet til hver enkelt bruger. Glem ikke n�r du �ndrer brugerrettigheder, at grupperettigheder m�ske stadig tillader, at brugeren har adgang til forumerne, etc. Du bliver advaret, hvis dette er tilf�ldet.";
$lang['Forum_auth_explain'] = "Her kan du �ndre autoriseringsniveauer for de enkelte forumer. Du har b�de en simpel og avanceret metode til r�dighed. Den avancerede metode tillader st�rre kontrol af hvert enkelt forum. Husk, at n�r du �ndrer forumernes autoriseringsniveauerne, p�virker det hvilke brugere, der kan udf�re de forskellige ting i dem.";

$lang['Simple_mode'] = "Simpel Metode";
$lang['Advanced_mode'] = "Avanceret Metode";
$lang['Moderator_status'] = "Redakt�r status";

$lang['Allowed_Access'] = "Tilladt Adgang";
$lang['Disallowed_Access'] = "N�gtet Adgang";
$lang['Is_Moderator'] = "Er Redakt�r";
$lang['Not_Moderator'] = "Er ikke Redakt�r";

$lang['Conflict_warning'] = "Advarsel om Autoriseringskonflikt";
$lang['Conflict_access_userauth'] = "Denne bruger har stadig adgangsrettigheder til dette forum via et gruppemedlemsskab. Du skal nok �ndre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre, at de har adgangsrettigheder. Gruppens rettigheder (og forumerne involveret) er n�vnt nedenunder.";
$lang['Conflict_mod_userauth'] = "Denne bruger har stadig redakt�rrettigheder til dette forum via et gruppemedlemsskab. Du skal nok �ndre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre, at de har redakt�rrettigheder. Gruppens rettigheder (og forumerne involveret) er n�vnt nedenunder.";

$lang['Conflict_access_groupauth'] = "Den f�lgende bruger (eller brugere) har stadig adgangsrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have adgangsrettigheder. Brugernes rettigheder (og forumerne involveret) er n�vnt nedenunder.";
$lang['Conflict_mod_groupauth'] = "Den f�lgende bruger (eller brugere) har stadig redakt�rrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have redakt�rrettigheder. Brugernes rettigheder (og forumerne involveret) er n�vnt nedenunder.";

$lang['Public'] = "Offentlig";
$lang['Private'] = "Privat";
$lang['Registered'] = "Registeret";
$lang['Administrators'] = "Administratorer";
$lang['Hidden'] = "Skjult";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "ALLE";
$lang['Forum_REG'] = "REGISTRERET";
$lang['Forum_PRIVATE'] = "PRIVAT";
$lang['Forum_MOD'] = "REDAKT�R";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Se";
$lang['Read'] = "L�se";
$lang['Post'] = "Indl�g";
$lang['Reply'] = "Svar";
$lang['Edit'] = "�ndre";
$lang['Delete'] = "Slet";
$lang['Sticky'] = "Oplag";
$lang['Announce'] = "Bekendtg�re"; 
$lang['Vote'] = "Stem";
$lang['Pollcreate'] = "Opret afstemning";

$lang['Permissions'] = "Rettigheder";
$lang['Simple_Permission'] = "Simpel Rettighed";

$lang['User_Level'] = "Brugerniveau"; 
$lang['Auth_User'] = "Bruger";
$lang['Auth_Admin'] = "Administrator";
$lang['Group_memberships'] = "Medlemsskaber til brugergrupper";
$lang['Usergroup_members'] = "Denne gruppe har f�lgende medlemmer";

$lang['Forum_auth_updated'] = "Forumrettigheder opdateret";
$lang['User_auth_updated'] = "Brugerrettigheder opdateret";
$lang['Group_auth_updated'] = "Grupperettigheder opdateret";

$lang['Auth_updated'] = "Rettigheder er blevet opdateret";
$lang['Click_return_userauth'] = "Klik %sHer%s for at vende tilbage til Brugerrettigheder";
$lang['Click_return_groupauth'] = "Klik %sHer%s for at vende tilbage til Grupperettigheder";
$lang['Click_return_forumauth'] = "Klik %sHer%s for at vende tilbage til Forumrettigheder";


//
// Banning
//
$lang['Ban_control'] = "Kontrollering af bandlysninger";
$lang['Ban_explain'] = "Her kan du kontrollere bandlysning af brugere. Du kan opn� dette, ved enten at bandlyse en specifik bruger, en eller flere IP adresser eller domainnavne. Disse metoder forhindrer en bruger i overhovedet at f� adgang til dit forums indexside. For at forhindre, at en bruger registrerer sig under en andet brugernavn, kan du ogs� bandlyse en email adresse. Husk, bandlysning af en email adresse vil ikke forhindre den bruger i at logge p� eller komme med nye indl�g p� dit forum, du skal bruge en af de f�rstn�vnte metoder for, at forhindre dette.";
$lang['Ban_explain_warn'] = "Bem�rk venligst, at hvis du indtaster en r�kke IP adresser vil dette resultere i, at alle adresserne mellem start og slut bliver tilf�jet listen over bandlyste IP adresser. Fors�g p�, at minimere antallet af adresser tilf�jet til databasen, vil blive foretaget ved automatisk at introducere jokere, n�r det er passende. Hvis du virkelig vil indtaste en r�kke adresser, s� pr�v at minimere r�kken eller endnu bedre, indtast specifikke adresser.";

$lang['Select_username'] = "V�lg et Brugernavn";
$lang['Select_ip'] = "V�lg en IP Adresse";
$lang['Select_email'] = "V�lg en Email Adresse";

$lang['Ban_username'] = "Bandlys en eller flere specifikke brugere";

$lang['Ban_IP'] = "Bandlys en eller flere IP adresser eller domainnavne";
$lang['IP_hostname'] = "IP adresser eller domainnavne";
$lang['Ban_IP_explain'] = "For at angive flere IP adresser eller domainnavne skal du adskille dem med kommaer. For at angive en r�kke IP adresser skal du adskille starten og slutningen med en bindestreg (-), for at angive en joker skal du bruge *";

$lang['Ban_email'] = "Bandlys en eller flere adresser";
$lang['Ban_email_explain'] = "For at angive flere email adresser skal du adskille dem med kommaer. For at angive en joker skal du bruge *, for eksempel *@hotmail.com";

$lang['Unban_username'] = "Oph�v bandlysning p� en eller flere brugere";
$lang['Unban_username_explain'] = "Du kan oph�ve bandlysning af flere brugere p� en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.";

$lang['Unban_IP'] = "Oph�v bandlysning p� en eller flere IP adresser";
$lang['Unban_IP_explain'] = "Du kan oph�ve bandlysning p� en eller flere IP adresser p� en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.";

$lang['Unban_email'] = "Oph�v bandlysning p� en eller flere email adresser.";
$lang['Unban_email_explain'] = "Du kan oph�ve bandlysning p� flere email adresser p� en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.";

$lang['No_banned_users'] = "Ingen bandlyste brugernavne";
$lang['No_banned_ip'] = "Ingen bandlyste IP adresser";
$lang['No_banned_email'] = "Ingen bandlyste email adresser";

$lang['Ban_update_sucessful'] = "Listen med oplysningerne om bandlysninger er succesfuldt opdateret.";
$lang['Click_return_banadmin'] = "Klik %sHer%s for at vende tilbage til Kontrollering af bandlysninger";


//
// Configuration
//
$lang['General_Config'] = "Generel Konfiguration";
$lang['Config_explain'] = "Nedenst�ende skema giver dig mulighed for, at tilpasse alle de generelle forumindstillinger. For Bruger og Forumindstilninger, brug de relaterende links i venstre side.";

$lang['Click_return_config'] = "Klik %sHer%s for at vende tilbage til Generel Konfiguration";

$lang['General_settings'] = "Generelle forumindstillinger";
$lang['Server_name'] = "Dom�nenavn";
$lang['Server_name_explain'] = "Dom�net dette forum ligger p�";
$lang['Script_path'] = "Script Adresse";
$lang['Script_path_explain'] = "Adressen til phpBB2 p� dom�nenavnet";
$lang['Server_port'] = "Server Port";
$lang['Server_port_explain'] = "Porten hvorp� din server k�rer. Det er normalt 80, �ndre kun hvis n�dvendigt";
$lang['Site_name'] = "Sidens navn";
$lang['Site_desc'] = "Beskrivelse af siden";
$lang['Board_disable'] = "Sl� forumet fra";
$lang['Board_disable_explain'] = "Dette vil g�re forumet utilg�ngeligt for brugere. Du m� ikke logge ud, n�r du har sl�et forumet fra. Du vil ikke kunne logge p� igen!";
$lang['Acct_activation'] = "Aktivering af Konto";
$lang['Acc_None'] = "Ingen"; // These three entries are the type of activation
$lang['Acc_User'] = "Bruger";
$lang['Acc_Admin'] = "Administrator";

$lang['Abilities_settings'] = "Generelle Bruger- og Forumindstillinger";
$lang['Max_poll_options'] = "Maximum antal afstemningsmuligheder";
$lang['Flood_Interval'] = "Sekunder mellem indl�g";
$lang['Flood_Interval_explain'] = "Antal sekunder en bruger skal vente, f�r et nyt indl�g kan skrives."; 
$lang['Board_email_form'] = "Bruger-email via forum";
$lang['Board_email_form_explain'] = "Brugere kan sende hinanden email via dette forum";
$lang['Topics_per_page'] = "Emner pr side";
$lang['Posts_per_page'] = "Indl�g pr side";
$lang['Hot_threshold'] = "Indl�g for popul�re emner";
$lang['Default_style'] = "Standard layout";
$lang['Override_style'] = "Overskriv brugers valg";
$lang['Override_style_explain'] = "Erstatter brugernes valg med det, der er standard";
$lang['Default_language'] = "Standard Sprog";
$lang['Date_format'] = "Dato Format";
$lang['System_timezone'] = "Tidszone";
$lang['Enable_gzip'] = "Sl� GZip Komprimering til";
$lang['Enable_prune'] = "Sl� Forumbesk�ring til";
$lang['Allow_HTML'] = "Tillad HTML";
$lang['Allow_BBCode'] = "Tillad BBCode";
$lang['Allowed_tags'] = "Tilladte HTML kommandoer (tags)";
$lang['Allowed_tags_explain'] = "Adskil kommandoer med kommaer";
$lang['Allow_smilies'] = "Tillad Smilies";
$lang['Smilies_path'] = "Adressen hvor dine Smilies opbevares";
$lang['Smilies_path_explain'] = "Adressen under din phpBB folder, f.eks. images/smilies";
$lang['Allow_sig'] = "Tillad Underskrifter";
$lang['Max_sig_length'] = "Maksimal l�ndge p� underskrifter";
$lang['Max_sig_length_explain'] = "Maksimale antal tegn i brugernes underskrifter";
$lang['Allow_name_change'] = "Tillad, at brugerne kan �ndre brugernavn";

$lang['Avatar_settings'] = "Avatar Indstillinger";
$lang['Allow_local'] = "Sl� galleri-avatars til";
$lang['Allow_remote'] = "Sl� udefra avatars til";
$lang['Allow_remote_explain'] = "Avatars, der befinder sig p� en anden hjemmeside";
$lang['Allow_upload'] = "Sl� uploading af avatar til";
$lang['Max_filesize'] = "Maksimal st�rrelse p� Avatar-Filer";
$lang['Max_filesize_explain'] = "G�lder de avatars, der uploades";
$lang['Max_avatar_size'] = "Maksimal st�rrelse p� Avatars";
$lang['Max_avatar_size_explain'] = "(H�jde x Bredde i pixels)";
$lang['Avatar_storage_path'] = "Adressen hvor Avatars opbevares";
$lang['Avatar_storage_path_explain'] = "Adressen under din phpBB folder, f.eks. images/avatars";
$lang['Avatar_gallery_path'] = "Adressen p� Avatar-Galleriet";
$lang['Avatar_gallery_path_explain'] = "Adressen under din phpBB folder, f.eks. images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA Indstillinger";
$lang['COPPA_fax'] = "COPPA Fax Nummer";
$lang['COPPA_mail'] = "COPPA Adresse";
$lang['COPPA_mail_explain'] = "Dette er adressen, hvortil for�ldre vil sende COPPA blanketterne";

$lang['Email_settings'] = "Email Indstillinger";
$lang['Admin_email'] = "Email adresse p� Administrator";
$lang['Email_sig'] = "Email Underskrift";
$lang['Email_sig_explain'] = "Dette tekst vil slutte alle emails, afsendt af forumet";
$lang['Use_SMTP'] = "Brug en SMTP Server for email";
$lang['Use_SMTP_explain'] = "V�lg ja hvis du vil, eller skal, sende email via en specifik server istedet for den normale email funktion.";
$lang['SMTP_server'] = "SMTP Server Adresse";
$lang['SMTP_username'] = "SMTP Brugernavn";
$lang['SMTP_username_explain'] = "Indtast kun et brugernavn, hvis din smtp server kr�ver det";
$lang['SMTP_password'] = "SMTP Kodeord";
$lang['SMTP_password_explain'] = "Indtast kun et kodeord, hvis din smtp server kr�ver det";

$lang['Disable_privmsg'] = "Private Beskeder";
$lang['Inbox_limits'] = "Maksimale antal indl�g i Indbakke";
$lang['Sentbox_limits'] = "Maksimale antal indl�g i Sendt-bakken";
$lang['Savebox_limits'] = "Maksimale antal indl�g i Gemt-bakken";

$lang['Cookie_settings'] = "Cookie indstillinger"; 
$lang['Cookie_settings_explain'] = "Disse kontrollere, hvordan en cookie defineres af en browser. I de fleste tilf�lde skulle standard indstillingerne v�re gode nok. Hvis du har brug for at �ndre dem, s� pas p�, forkerte indstillinger kan resultere i, at brugere ikke kan logge p�.";
$lang['Cookie_name'] = "Cookie navn";
$lang['Cookie_domain'] = "Cookie domain";
$lang['Cookie_path'] = "Cookie adresse";
$lang['Session_length'] = "L�ngde p� Session [ sekunder ]";
$lang['Cookie_secure'] = "Cookie sikkerhed [ https ]";
$lang['Cookie_secure_explain'] = "Sl� dette til hvis din server k�rer via SSL ellers lad det v�re sl�et fra";


//
// Forum Management
//
$lang['Forum_admin'] = "Forum Administration";
$lang['Forum_admin_explain'] = "Fra denne kan du tilf�je, slette, �ndre, omorganisere og gensynkronisere kategorier og forums.";
$lang['Edit_forum'] = "�ndre forum";
$lang['Create_forum'] = "Opret nyt forum";
$lang['Create_category'] = "Opret ny kategori";
$lang['Remove'] = "Fjern";
$lang['Action'] = "Udf�r";
$lang['Update_order'] = "Opdat�r Order";
$lang['Config_updated'] = "Forum Konfiguration Succesfuldt Opdateret";
$lang['Edit'] = "�ndre";
$lang['Delete'] = "Slet";
$lang['Move_up'] = "Ryk op";
$lang['Move_down'] = "Ryk ned";
$lang['Resync'] = "Re-synkronis�r";
$lang['No_mode'] = "Ingen memode blev valgt";
$lang['Forum_edit_delete_explain'] = "Skemaet nedenunder vil g�re det muligt for dig, at tilpasse alle de generelle forum indstillinger. For Bruger og de enkelte Forums indstillinger skal du bruge linkene til venstre.";

$lang['Move_contents'] = "Flyt alt indhold";
$lang['Forum_delete'] = "Slet Forum";
$lang['Forum_delete_explain'] = "Skemaet nedenunder vil g�re det muligt for dig, at slette et forum (eller en kategori) og bestemme, hvor du vil placere alle emner (eller forums) det/den indeholdt.";

$lang['Forum_settings'] = "Generelle Forum Indstillinger";
$lang['Forum_name'] = "Forumets navn";
$lang['Forum_desc'] = "Beskrivelse";
$lang['Forum_status'] = "Forum status";
$lang['Forum_pruning'] = "Automatisk sletning";

$lang['prune_freq'] = 'Tjek for emners alder hver';
$lang['prune_days'] = "Fjern emner, der ikke er blevet skrevet indl�g til i";
$lang['Set_prune_data'] = "Du har sl�et automatisk sletning til for dette forum, men du indtastede ikke et antal dage, hvorefter emner skal slettes. G� venligst tilbage og g�r dette.";

$lang['Move_and_Delete'] = "Flyt og Slet";

$lang['Delete_all_posts'] = "Slet alle indl�g";
$lang['Nowhere_to_move'] = "Ingen steder at flytte til";

$lang['Edit_Category'] = "�ndre Kategori";
$lang['Edit_Category_explain'] = "Brug dette skema til at �ndre navnet p� en kategori.";

$lang['Forums_updated'] = "Forum og Kategori information succesfuldt opdateret";

$lang['Must_delete_forums'] = "Du skal slette alle forums, f�r du kan slette denne kategori";

$lang['Click_return_forumadmin'] = "Klik %sHer%s for at vende tilbage til Forum Administration";


//
// Smiley Management
//
$lang['smiley_title'] = "Smiles V�rkt�jer";
$lang['smile_desc'] = "Fra denne side, kan du tilf�je, slette og �ndre de smileys dine brugere kan bruge i deres indl�g og private beskeder.";

$lang['smiley_config'] = "Smiley Indstillinger";
$lang['smiley_code'] = "Smiley Kode";
$lang['smiley_url'] = "Smiley Billede Fil";
$lang['smiley_emot'] = "Smiley Udtryk";
$lang['smile_add'] = "Tilf�j en ny Smiley";
$lang['Smile'] = "Smil";
$lang['Emotion'] = "Udtryk";

$lang['Select_pak'] = "V�lg Pakke (.pak) Fil";
$lang['replace_existing'] = "Erstat eksisterende Smiley";
$lang['keep_existing'] = "Behold eksisterende Smiley";
$lang['smiley_import_inst'] = "Du skal pakke zip filen ud og uploade alle filerne til den p�regnede Smiley folder til din installation.  S� skal du v�lge den korrekte information p� dette skema for at importere smiley pakken.";
$lang['smiley_import'] = "Smiley Pakke Import";
$lang['choose_smile_pak'] = "V�lg en Smile Pakke .pak fil";
$lang['import'] = "Import�r Smileys";
$lang['smile_conflicts'] = "Hvad skal g�res i tilf�lde af konflikter";
$lang['del_existing_smileys'] = "Slet eksisterende smileys inden importering";
$lang['import_smile_pack'] = "Import�r Smiley Pakke";
$lang['export_smile_pack'] = "Opret Smiley Pakke";
$lang['export_smiles'] = "For at oprette en smiley pakke med dine nuv�rende installerede smileys, klik %sHer%s for at downloade smiles.pak filen. Giv den et passende navn og s�rg for, at den beholder .pak efternavnet. Lav s� en zip fil der indeholder alle smiley billederne plus denne .pak konfigurationsfil.";

$lang['smiley_add_success'] = "Smileyen blev succesfuldt tilf�jet";
$lang['smiley_edit_success'] = "Smileyen blev succesfuldt opdateret";
$lang['smiley_import_success'] = "Smiley Pakken blev succesfuldt importeret!";
$lang['smiley_del_success'] = "Smileyen blev succesfuldt fjernet";
$lang['Click_return_smileadmin'] = "Klik %sHer%s for at vende tilbage til Smiley Administration";


//
// User Management
//
$lang['User_admin'] = "Bruger Administration";
$lang['User_admin_explain'] = "Her kan du �ndre dine brugers informationer og specifikke indstillinger. For at �ndre brugernes rettigheder, brug venligst bruger og gruppe indstillingssystemet.";

$lang['Look_up_user'] = "Sl� bruger op";

$lang['Admin_user_fail'] = "Brugerens profil kunne ikke opdaters.";
$lang['Admin_user_updated'] = "Brugerens profil blev succesfuldt opdateret.";
$lang['Click_return_useradmin'] = "Klik %sHer%s for at vende tilbage til Bruger Administration";

$lang['User_delete'] = "Slet denne bruger";
$lang['User_delete_explain'] = "Klik her for at slette denne bruger. Det er permenent.";
$lang['User_deleted'] = "Brugeren blev succesfuldt slettet.";

$lang['User_status'] = "Brugeren er aktiv";
$lang['User_allowpm'] = "Kan sende Private Beskeder";
$lang['User_allowavatar'] = "Kan vise en avatar";

$lang['Admin_avatar_explain'] = "Her kan du se og slette brugerens nuv�rende avatar.";

$lang['User_special'] = "Specialle kun-administrator felter";
$lang['User_special_explain'] = "Disse felter kan ikke �ndres af brugerne. Her kan du bestemme deres status og �ndre indstillinger, de ikke har adgang til.";


//
// Group Management
//
$lang['Group_administration'] = "Gruppe Administration";
$lang['Group_admin_explain'] = "Fra dette panel kan du administere alle dine brugergrupper, du kan; slette, oprette og �ndre eksisterende grupper. Du kan v�lge redakt�rer, sl� grupper til og fra og bestemme gruppens navn og beskrivelse";
$lang['Error_updating_groups'] = "Der opstod en fejl under opdateringen af grupperne";
$lang['Updated_group'] = "Gruppen blev succesfuldt opdateret";
$lang['Added_new_group'] = "Den nye gruppe blev succesfuldt oprettet";
$lang['Deleted_group'] = "Gruppen blev succesfuldt slettet";
$lang['New_group'] = "Opret en ny gruppe";
$lang['Edit_group'] = "�ndre gruppe";
$lang['group_name'] = "Gruppens navn";
$lang['group_description'] = "Gruppens beskrivelse";
$lang['group_moderator'] = "Grupperedakt�r";
$lang['group_status'] = "Gruppestatus";
$lang['group_open'] = "�ben gruppe";
$lang['group_closed'] = "Lukket gruppe";
$lang['group_hidden'] = "Skjult gruppe";
$lang['group_delete'] = "Slet gruppe";
$lang['group_delete_check'] = "Slet denne gruppe";
$lang['submit_group_changes'] = "Tilf�j �ndringer";
$lang['reset_group_changes'] = "Nulstil �ndringer";
$lang['No_group_name'] = "Du skal v�lge et navn til denne gruppe";
$lang['No_group_moderator'] = "Du skal v�lge en redakt�r til denne gruppe";
$lang['No_group_mode'] = "Du skal v�lge en status for denne gruppe, �ben eller lukket";
$lang['delete_group_moderator'] = "Slet den gamle grupperedakt�r?";
$lang['delete_moderator_explain'] = "Hvis du �ndrer grupperedakt�ren, s�t kryds i dette felt for at slette den gamle redakt�r fra gruppen. Hvis du ikke s�tter kryds, bliver brugeren et normalt medlem af gruppen.";
$lang['Click_return_groupsadmin'] = "Klik %sHer%s for at vende tilbage til Gruppe Administration.";
$lang['Select_group'] = "V�lg en gruppe";
$lang['Look_up_group'] = "Vis Gruppe";
$lang['No_group_action'] = 'Ingen mentode var valgt';


//
// Prune Administration
//
$lang['Forum_Prune'] = "Forum Besk�ring";
$lang['Forum_Prune_explain'] = "Dette vil slette enhvert emne, som der ikke er skrevet indl�g til, i det antal dage du v�lger. Hvis du ikke indtaster et nummer, bliver alle emner slettet. Emner, hvor der stadig er �bne afstemninger, vil ikke blive slettet, ligesom Annonceringer heller ikke slettes. Du skal slette disse emner manuelt.";
$lang['Do_Prune'] = "Udf�r besk�ring";
$lang['All_Forums'] = "Alle Forums";
$lang['Prune_topics_not_posted'] = "Slet emner uden nye indl�g i";
$lang['Topics_pruned'] = "Emner slettet";
$lang['Posts_pruned'] = "Indl�g slettet";
$lang['Prune_success'] = "Besk�ring af forums var succesfuldt";


//
// Word censor
//
$lang['Words_title'] = "Censurering af ord";
$lang['Words_explain'] = "Fra denne side kan du tilf�je, �ndre og fjerne ord, der automatisk censureres i dine forums. Folk kan heller ikke registrere med et brugernavn, der indeholder disse ord. Jokere (*) kan bruges i ordfelterne, f.eks. *test* vil matche utestet, test* vil matche tester, *test ville matche utest.";
$lang['Word'] = "Ord";
$lang['Edit_word_censor'] = "�ndre ordcensur�r";
$lang['Replacement'] = "Erstatning";
$lang['Add_new_word'] = "Tilf�j nyt ord";
$lang['Update_word'] = "Opdat�r ordcensur�r";

$lang['Must_enter_word'] = "Du skal indtaste et ord og det ords erstatning";
$lang['No_word_selected'] = "Intet ord er valgt til �ndring";

$lang['Word_updated'] = "Den valgte ordcensur�r blev succesfuldt opdateret";
$lang['Word_added'] = "Ordcensureren blev succesfuldt tilf�jet";
$lang['Word_removed'] = "Den valgte ordcensur�r blev succesfuldt fjernet";

$lang['Click_return_wordadmin'] = "Klik %sHer%s for at vende tilbage til Censurering af ord";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Her kan du sende email til alle dine brugere eller alle brugere i en specifik gruppe. For at g�re dette, bliver en email sent til alle de administrative email adresser angivet og en kopi sendes til alle modtagere. Hvis du emailer en stor gruppe mennesker, skal du v�re t�lmodig efter, at du har sendt emailen og stop ikke siden, n�r den er halvvejs. Det er normalt, at det tager lang tid, du f�r at vide, n�r emailen er f�rdigsendt.";
$lang['Compose'] = "Skriv"; 

$lang['Recipients'] = "Modtagere"; 
$lang['All_users'] = "Alle Brugere";

$lang['Email_successfull'] = "Din besked er afsendt";
$lang['Click_return_massemail'] = "Klik %sHer%s for at vende tilbage til Gruppe email";


//
// Ranks admin
//
$lang['Ranks_title'] = "Niveau Administration";
$lang['Ranks_explain'] = "Ved at bruge denne side kan du tilf�je, �ndre, se og slette niveauer. Du kan ogs� oprettte specifikke niveauer, som kan gives til en bruger, gennem brugerv�rkt�jerne.";

$lang['Add_new_rank'] = "Tilf�j nyt niveau";

$lang['Rank_title'] = "Niveau Titel";
$lang['Rank_special'] = "Lav til Specialt Niveau";
$lang['Rank_minimum'] = "Minimum Indl�g";
$lang['Rank_maximum'] = "Maximum Indl�g";
$lang['Rank_image'] = "Niveau Billede (Relativ til phpBB2 hovedfolderen)";
$lang['Rank_image_explain'] = "Bestem her, om et lille billede skal bruges sammen med niveauet.";

$lang['Must_select_rank'] = "Du skal v�lge et niveau";
$lang['No_assigned_rank'] = "Intet specialt niveau tilvalgt";

$lang['Rank_updated'] = "Niveauet blev succesfuldt opdateret";
$lang['Rank_added'] = "Niveauet blev succesfuldt tilf�jet";
$lang['Rank_removed'] = "Niveauet blev succesfuldt slettet";

$lang['Click_return_rankadmin'] = "Klik %sHer%s for at vende tilbage til Niveau Administration";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Forbyd Brugernavn V�rkt�jer";
$lang['Disallow_explain'] = "Her kan du kontrollere, hvilke brugernavne der er tilladt. Forbudte brugernavne m� indeholde en joker, betegnet som et *. Bem�rk venligst, at du ikke kan forbyde et brugernavn, der allerede er registreret, du skal f�rst slette det navn og s� forbyde det.";

$lang['Delete_disallow'] = "Slet";
$lang['Delete_disallow_title'] = "Fjern et forbudt brugernavn";
$lang['Delete_disallow_explain'] = "Du kan fjerne et forbudt brugernavn ved at v�lge brugernavnet fra denne liste og trykke p� knappen";

$lang['Add_disallow'] = "Tilf�j";
$lang['Add_disallow_title'] = "Tilf�j et forbudt brugernavn";
$lang['Add_disallow_explain'] = "Du kan forbyde et brugernavn ved at bruge jokeren * istedet for et tegn";

$lang['No_disallowed'] = "Ingen forbudte brugernavne";

$lang['Disallowed_deleted'] = "Det forbudte brugernavn blev succesfuldt fjernet";
$lang['Disallow_successful'] = "Det forbudte brugernavn blev succesfuldt tilf�jet";
$lang['Disallowed_already'] = "Navnet du indtastede, kunne ikke forbydes. Enten eksisterer det allerede i listen, eksisterer i ord censureringslisten eller en bruger har valgt det brugernavn";

$lang['Click_return_disallowadmin'] = "Klik %sHer%s for at vende tilbage til Forbyd Brugernavn V�rkt�jer";


//
// Styles Admin
//
$lang['Styles_admin'] = "Layout Administration";
$lang['Styles_explain'] = "Ved brug af disse v�rkt�jer kan du tilf�je, fjerne og �ndre layouts (formskemaer og design), der er tilg�ngelige for dine brugere";
$lang['Styles_addnew_explain'] = "Den f�lgende liste indeholder alle de designs, der er tilg�ngelige for de formskemaer, du har. Navnene p� listen er endnu ikke installeret i phpBB databasen. For at installere skal du bare klikke p� install�r linket ved siden af navnet";

$lang['Select_template'] = "V�lg et formskema";

$lang['Style'] = "Layout";
$lang['Template'] = "Formskema";
$lang['Install'] = "Install�r";
$lang['Download'] = "Download";

$lang['Edit_theme'] = "�ndre Design";
$lang['Edit_theme_explain'] = "I skemaet nedenunder kan du �ndre indstillingerne for det valgte design";

$lang['Create_theme'] = "Opret Design";
$lang['Create_theme_explain'] = "Brug skemaet nedenunder for at oprette et nyt design til det valgte formskema. N�r du indtaster farver (for hvilket du skal bruge hexadecimal systemet) skal du ikke bruge # tegnet, f.eks. CCCCCC er brugbart, #CCCCCC er ikke";

$lang['Export_themes'] = "Eksport�r Designs";
$lang['Export_explain'] = "I dette panel kan du eksportere design-dataen for et valgt formskema. V�lg formskemaet fra listen nedenunder og databasen vil skabe design konfigurationsfilen og fors�ge at gemme den i det valgte formskemas bibliotek. Hvis den ikke kan gemme filen, vil du f� muligheden for, at downloade den. For at databasen kan gemme filen, skal du give den lov til at gemme i biblioteket for det valgte formskema. For mere information om dette, se phpBB2 Brugerguiden.";

$lang['Theme_installed'] = "Det valgte design blev succesfuldt installeret.";
$lang['Style_removed'] = "Det valgte design blev succesfuldt fjernet fra databasen. For permanent at fjerne dette design fra dit system, skal du slette designet fra dit formskema bibliotek.";
$lang['Theme_info_saved'] = "Design informationen for det valgte formskema er blevet gemt. Du skal nu give rettighederne tilbage i theme_info.cfg filen (og hvis du �nsker, s�tte det valgte formskema bibliotek) til l�s-kun (read-only)";
$lang['Theme_updated'] = "Det valgte design er opdateret. Du skal nu eksportere de nye design indstillinger";
$lang['Theme_created'] = "Design oprettet. Du skal nu eksportere designet og design konfigurationsfilen som backup eller brug andensteds.";

$lang['Confirm_delete_style'] = "Er du sikker p�, at du vil slette dette layout";

$lang['Download_theme_cfg'] = "Databasen kunne ikke skrive til design informationsfilen. Klik p� knappen nedenunder for at downloade filen. N�r den er downloadet skal du uploade den i det bibliotek, der indeholder formskema filerne. Du kan s� pakke filerne til distribution eller brug andensteds, hvis du �nsker.";
$lang['No_themes'] = "Formskemaet du valgte, har ingen designs. For at oprette et nyt design skal du klikke p� Opret Nyt Design i venstre side";
$lang['No_template_dir'] = "Formskema biblioteket kunne ikke �bnes. Det er muligvis ikke l�seligt af serveren eller ogs� eksisterer det ikke.";
$lang['Cannot_remove_style'] = "Du kan ikke fjerne layoutet eftersom det p� nuv�rende tidspunkt er det layout, der er standard for forumet. �ndre standardlayoutet og pr�v igen.";
$lang['Style_exists'] = "Det valgte layout navn eksisterer allerede, g� venligst tilbage og v�lg et andet.";

$lang['Click_return_styleadmin'] = "Klik %sHer%s for at vende tilbage til Layout Administration";

$lang['Theme_settings'] = "Design indstillinger";
$lang['Theme_element'] = "Design Element";
$lang['Simple_name'] = "Simpelt Navn";
$lang['Value'] = "V�rdi";
$lang['Save_Settings'] = "Gem Indstillinger";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Baggrundsbillede";
$lang['Background_color'] = "Baggrundsfarve";
$lang['Theme_name'] = "Design Navn";
$lang['Link_color'] = "Linkfarve";
$lang['Text_color'] = "Tekstfarve";
$lang['VLink_color'] = "Bes�gt Linkfarve";
$lang['ALink_color'] = "Aktiv Linkfarve";
$lang['HLink_color'] = "Sv�ver Linkfarve";
$lang['Tr_color1'] = "Tabelr�kke Farve 1";
$lang['Tr_color2'] = "Tabelr�kke Farve 2";
$lang['Tr_color3'] = "Tabelr�kke Farve 3";
$lang['Tr_class1'] = "Tabelr�kke Klasse 1";
$lang['Tr_class2'] = "Tabelr�kke Klasse 2";
$lang['Tr_class3'] = "Tabelr�kke Klasse 3";
$lang['Th_color1'] = "Tabeltop Farve 1";
$lang['Th_color2'] = "Tabeltop Farve 2";
$lang['Th_color3'] = "Tabeltop Farve 3";
$lang['Th_class1'] = "Tabeltop Klasse 1";
$lang['Th_class2'] = "Tabeltop Klasse 2";
$lang['Th_class3'] = "Tabeltop Klasse 3";
$lang['Td_color1'] = "Tabelcelle Farve 1";
$lang['Td_color2'] = "Tabelcelle Farve 2";
$lang['Td_color3'] = "Tabelcelle Farve 3";
$lang['Td_class1'] = "Tabelcelle Klasse 1";
$lang['Td_class2'] = "Tabelcelle Klasse 2";
$lang['Td_class3'] = "Tabelcelle Klasse 3";
$lang['fontface1'] = "Skrifttype 1";
$lang['fontface2'] = "Skrifttype 2";
$lang['fontface3'] = "Skrifttype 3";
$lang['fontsize1'] = "Skriftst�rrelse 1";
$lang['fontsize2'] = "Skriftst�rrelse 2";
$lang['fontsize3'] = "Skriftst�rrelse 3";
$lang['fontcolor1'] = "Skriftfarve 1";
$lang['fontcolor2'] = "Skriftfarve 2";
$lang['fontcolor3'] = "Skriftfarve 3";
$lang['span_class1'] = "Span Klasse 1";
$lang['span_class2'] = "Span Klasse 2";
$lang['span_class3'] = "Span Klasse 3";
$lang['img_poll_size'] = "Afstemningsbillede St�rrelse [px]";
$lang['img_pm_size'] = "Private Beskeder Status St�rrelse [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Velkommen til phpBB 2 Installationen";
$lang['Initial_config'] = "Generel Konfiguration";
$lang['DB_config'] = "Database Konfiguration";
$lang['Admin_config'] = "Administrator Konfiguration";
$lang['continue_upgrade'] = "N�r du har downloadet din config fil til din harddisk, kan du\"Forts�t Opgradering\" knap nedenunder for at for at forts�tte opgraderingen. Vent venligst med at uploade config filen indtil opgraderingen er f�rdig.";
$lang['upgrade_submit'] = "Forts�t Opgradering";

$lang['Installer_Error'] = "En fejl opstod under installationen";
$lang['Previous_Install'] = "En tidligere installation er fundet";
$lang['Install_db_error'] = "En fejl opstod under fors�get p� at opgradere databasen";

$lang['Re_install'] = "Din tidligere installation er stadig aktiv. <br /><br />Hvis du vil geninstallere phpBB 2 skal du klikke p� Ja knappen nedenunder. Bem�rk venligst, at hvis du g�r det, vil det slette alle eksisterende data. Ingen backups vil blive lavet! Det administrator brugernavn og kodeord du har brugt til at logge p� forumet, vil blive genskabt efter geninstallationen. Ingen andre indstillinger bliver gemt. <br /><br />T�nk dig om inden du trykker Ja!";

$lang['Inst_Step_0'] = "Tak fordi du valgte phpBB 2. For at f�rdigg�re installationen skal du indtaste de relevante oplysninger nedenunder. Bem�rk venligst, at den database du installer i, skal allerede v�re oprettet. Hvis du installerer en database, der bruger ODBC, f.eks. MS Access skal du oprette en DSN for den inden du forts�tter.";

$lang['Start_Install'] = "Start Installation";
$lang['Finish_Install'] = "F�rdigg�r Installation";

$lang['Default_lang'] = "Standardsproget p� forumet";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "Navnet p� din Database";
$lang['DB_Username'] = "Database Brugernavn";
$lang['DB_Password'] = "Database Kodeord";
$lang['Database'] = "Din Database";
$lang['Install_lang'] = "V�lg Sprog for Installationen";
$lang['dbms'] = "Database Type";
$lang['Table_Prefix'] = "Fornavn for tabeller i databasen";
$lang['Admin_Username'] = "Administrator Brugernavn";
$lang['Admin_Password'] = "Administrator Kodeord";
$lang['Admin_Password_confirm'] = "Administrator Kodeord [ Bekr�ft ]";

$lang['Inst_Step_2'] = "Dit administrator brugernavn er oprettet.  P� nuv�rende tidspunkt er den basale installation f�rdig. Du bliver nu sendt videre til en side, hvor du kan administrere din nye installation. Tjek venligst de Generelle Konfigurations indstillinger og lav de �nskede �ndringer. Tak fordi du valgte phpBB 2.";

$lang['Unwriteable_config'] = "Der kan i �jeblikket ikke skrives til din config fil. En kopi af config filen vil blive downloadet til dig, n�r du trykker p� knappen nedenunder. Du skal uploade denne fil til det samme bibliotek, som phpBB 2. N�r dette er gjort, skal du logge p�, med dit administrator navn og kodeord du valgte p� det forrige skema, og g� ind p� administrator kontrol centeret (et link vil v�re tilg�ngeligt nederst p� hver side, n�r f�rst du er logget p�) for at tjekke den genrelle konfiguration. Tak fordi du valgte phpBB 2.";
$lang['Download_config'] = "Download Config";

$lang['ftp_choose'] = "V�lg Download Metode";
$lang['ftp_option'] = "<br />Eftersom FTP udvidelser er tilg�ngelige i denne version af PHP kan du ogs� f�rst pr�ve automatisk at uploade config filen til det rette bibliotek.";
$lang['ftp_instructs'] = "Du har valgt automatisk at uploade filen til det bibliotek, der indeholder phpBB 2.  Indtast venligst de kr�vede oplysninger nedenunder, s� den automatiske uploading kan foretages. Bem�rk at FTP adressen skal v�re den n�jagtige adresse via FTP til din phpBB2 installation, som hvis du brugte en FTP klient til at uploade filen.";
$lang['ftp_info'] = "Indtast din FTP Information";
$lang['Attempt_ftp'] = "Fors�g at uploade config filen til det passende bibliotek";
$lang['Send_file'] = "Bare send filen til mig og s� uploader jeg den manuelt";
$lang['ftp_path'] = "FTP adresse til phpBB 2";
$lang['ftp_username'] = "Dit FTP Brugernavn";
$lang['ftp_password'] = "Dit FTP Kodeord";
$lang['Transfer_config'] = "Start Upload";
$lang['NoFTP_config'] = "Fors�get p� automatisk at uploade config filen slog fejl. Download venligst filen og upload den manuelt.";

$lang['Install'] = "Install�r";
$lang['Upgrade'] = "Upgrad�r";


$lang['Install_Method'] = "V�lg installationsmetode";

$lang['Install_No_Ext'] = "Php Konfigurationen p� din server underst�tter ikke den type af database, som du har valgt"; 

$lang['Install_No_PCRE'] = "PhpBB2 Kr�ver \"Perl-Compatible Regular Expressions\" Modulet til php, hvilket din php konfiguration ikke lader til at underst�tte!"; 

//
// That's all Folks!
// -------------------------------------------------

?>