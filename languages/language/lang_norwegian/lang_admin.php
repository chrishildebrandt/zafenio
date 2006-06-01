<?php

/***************************************************************************
 *                            lang_admin.php [Norwegian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2003/04/28 20:11:02 bob Exp $
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
//   Norwegian translation by lanes, shantra & water
// 

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Generell Admin.";
$lang['Users'] = "Bruker Admin.";
$lang['Groups'] = "Gruppe Admin.";
$lang['Forums'] = "Forum Admin.";
$lang['Styles'] = "Stil Admin.";

$lang['Configuration'] = "Konfigurasjon";
$lang['Permissions'] = "Rettigheter";
$lang['Manage'] = "Administrer";
$lang['Disallow'] = "Forby Brukernavn";
$lang['Prune'] = "Sletting";
$lang['Mass_Email'] = "Gruppe Epost";
$lang['Ranks'] = "Rangering";
$lang['Smilies'] = "Smil";
$lang['Ban_Management'] = "Utesteng Oversikt";
$lang['Word_Censor'] = "Sensurer Ord";
$lang['Export'] = "Eksporter";
$lang['Create_new'] = "Opprett Tema";
$lang['Add_new'] = "Legg til";
$lang['Backup_DB'] = "Database Backup";
$lang['Restore_DB'] = "Gjennopprett Databasen";


//
// Index
//
$lang['Admin'] = "Administrasjon";
$lang['Not_admin'] = "Du har ikke rettigheter til � administrere dette forumet";
$lang['Welcome_phpBB'] = "Velkommen til phpBB";
$lang['Admin_intro'] = "Takk for at du valgte phpBB. P� denne siden finner du enkel statestikk for ditt forum. Du kommer tilbake til denne siden ved � klikke p� <u>Admin Hovedsiden</u> i venstre ramme. Klikk p� phpBB logoen hvis du �nsker � g� til forumets hovedside. Resten av linkene i venstre ramme leder til de forskjellige kontroll funksjonene for forumet. Hvert enkelt kontrollpanel har forklaringer for hvordan det skal brukes.";
$lang['Main_index'] = "Forum Hovedsiden";
$lang['Forum_stats'] = "Forum Statistikk";
$lang['Admin_Index'] = "Admin Hovedsiden";
$lang['Preview_forum'] = "Forh�ndsvis Forumet";

$lang['Click_return_admin_index'] = "Klikk %sHer%s for � returnere til Admin Hovedsiden";

$lang['Statistic'] = "Statistikk";
$lang['Number_posts'] = "Antall Innlegg";
$lang['Posts_per_day'] = "Innlegg pr. Dag";
$lang['Number_topics'] = "Antall Emner";
$lang['Topics_per_day'] = "Emner pr. Dag";
$lang['Number_users'] = "Antall Brukere";
$lang['Users_per_day'] = "Brukere pr. Dag";
$lang['Board_started'] = "Forum Opprettet";
$lang['Avatar_dir_size'] = "Avatar Katalog St�rrelse";
$lang['Database_size'] = "Database St�rrelse";
$lang['Gzip_compression'] ="Gzip Kompresjon";
$lang['Not_available'] = "Ikke Tilgjengelig";

$lang['ON'] = "P�"; // This is for GZip compression
$lang['OFF'] = "Av";


//
// DB Utils
//
$lang['Database_Utilities'] = "Database Verkt�y";

$lang['Restore'] = "Gjennopprett";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Her kan du gjenopprette alle phpBB tabellene fra en lagret backup fil. Dersom serveren din st�tter det kan du laste opp en gzip komprimert fil og den vil automatisk bli pakket ut. <b>ADVARSEL</b> Dette vil overskrive alle eksisterende data! Gjenopprettelsen kan ta lang tid, ikke g� vekk fra denne siden f�r gjenopprettingen er fullf�rt.";
$lang['Backup_explain'] = "Her kan du ta backup av phpBB relaterte data. Hvis du �nsker � ta backup av ekstra tabeller i samme database kan du gj�re det ved � skrive inn navnene, komma separert, i feltet Tilleggs-Tabeller. Dersom serveren din har st�tte for det kan du ogs� gzip komprimere filen f�r du laster den ned.";

$lang['Backup_options'] = "Backup Valg";
$lang['Start_backup'] = "Start Backup";
$lang['Full_backup'] = "Komplett Backup";
$lang['Structure_backup'] = "Struktur Backup";
$lang['Data_backup'] = "Data Backup";
$lang['Additional_tables'] = "Tilleggs-Tabeller";
$lang['Gzip_compress'] = "Gzip Komprimer Filen";
$lang['Select_file'] = "Velg en Fil";
$lang['Start_Restore'] = "Start Gjennoppretting";

$lang['Restore_success'] = "Databasen er gjennopprettet.<br /><br />Forumet er n� gjennopprettet slik det var n�r backup'en ble tatt.";
$lang['Backup_download'] = "Nedlastningen begynner, vent til den begynner.";
$lang['Backups_not_supported'] = "Beklager, database backup er ikke tilgjengelig for din database p� dette tidspunktet";

$lang['Restore_Error_uploading'] = "Det oppstod en feil under opplastningen av filen";
$lang['Restore_Error_filename'] = "Det er et problem med filnavnet, pr�v en annen fil";
$lang['Restore_Error_decompress'] = "Serveren kan ikke pakke ut filen, last opp en ren-tekst versjon av filen.";
$lang['Restore_Error_no_file'] = "Det ble ikke lastet opp noen fil";


//
// Auth pages
//
$lang['Select_a_User'] = "Velg Medlem";
$lang['Select_a_Group'] = "Velg Gruppe";
$lang['Select_a_Forum'] = "Velg Forum";
$lang['Auth_Control_User'] = "Medlems-Rettigheter Kontrollpanel";
$lang['Auth_Control_Group'] = "Gruppe-Rettigheter Kontrollpanel";
$lang['Auth_Control_Forum'] = "Forum-Rettigheter Kontrollpanel";
$lang['Look_up_User'] = "Finn Medlem";
$lang['Look_up_Group'] = "Finn Gruppe";
$lang['Look_up_Forum'] = "Finn Forum";

$lang['Group_auth_explain'] = "Her kan du forandre rettigheter og moderator status som er deligert til den enkelte bruker gruppen. Husk at selv om du forandrer gruppe rettigheter vil enkeltbruker rettigheter fortsatt tillate brukeren tilgang til forumene, etc. Du vil bli varslet hvis dette er tilfelle.";
$lang['User_auth_explain'] = "Her kan du forandre rettigheter og moderator status som er deligert til den enkelte bruker gruppen. Husk at selv om du forandrer gruppe rettigheter vil enkeltbruker rettigheter fortsatt tillate brukeren tilgang til forumene, etc. Du vil bli varslet hvis dette er tilfelle.";
$lang['Forum_auth_explain'] = "Her kan du forandre rettighetsniv�er for hvert enkelt forum. Du vil ha en enkel og en mer avansert m�te � gj�re dette p�, avansert tilbyr st�rre kontroll for hver enkelt forum operasjon. Husk at hvis du forandrer rettighetsniv�et til et forum, vil dette p�virke hvilke brukere som kan utf�re ulike operasjoner i det.";

$lang['Simple_mode'] = "Enkel Modus";
$lang['Advanced_mode'] = "Avansert Modus";
$lang['Moderator_status'] = "Moderator Status";

$lang['Allowed_Access'] = "Tillat Tilgang";
$lang['Disallowed_Access'] = "Nekt Tilgang";
$lang['Is_Moderator'] = "Er Moderator";
$lang['Not_Moderator'] = "Er ikke Moderator";

$lang['Conflict_warning'] = "Autorisasjons-Konflikt Advarsel";
$lang['Conflict_access_userauth'] = "Denne brukeren har fortsatt tilgangsrettigheter til dette forumet via gruppe medlemsskap. Du vil kanskje forandre p� grupperettighetene eller slette denne brukergruppen for � sikre deg at de ikke har tilgangsrettigheter. Gruppens rettigheter (og forumene involvert) vises nedenfor.";
$lang['Conflict_mod_userauth'] = "Denne brukeren har fortsatt moderator rettigheter til dette forumet via gruppe medlemsskap. Du vil kanskje forandre p� grupperettighetene eller slette denne brukergruppen for � sikre deg at de ikke har moderator rettigheter. Gruppens rettigheter (og forumene involvert) vises nedenfor.";

$lang['Conflict_access_groupauth'] = "F�lgende bruker (eller brukere) har fortsatt tilgangsrettigheter til dette forumet via deres bruker rettighets instillinger. Du vil kanskje forandre bruker rettighetene for � sikre deg at de ikke har tilgangsrettigheter. Brukerens rettigheter (og forumene involvert) vises nedenfor.";
$lang['Conflict_mod_groupauth'] = "F�lgende bruker (eller brukere) har fortsatt moderator rettigheter til dette forumet via deres bruker rettighets instillinger. Du vil kanskje forandre bruker rettighetene for � sikre deg at de ikke har moderator rettigheter. Brukerens rettigheter (og forumene involvert) vises nedenfor.";

$lang['Public'] = "Offentlig";
$lang['Private'] = "Privat";
$lang['Registered'] = "Registrert";
$lang['Administrators'] = "Administratorer";
$lang['Hidden'] = "Skjult";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "ALLE";
$lang['Forum_REG'] = "REG";
$lang['Forum_PRIVATE'] = "PRIVAT";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Vis";
$lang['Read'] = "Lese";
$lang['Post'] = "Poste";
$lang['Reply'] = "Svare";
$lang['Edit'] = "Endre";
$lang['Delete'] = "Slette";
$lang['Sticky'] = "Prioritet";
$lang['Announce'] = "Annonsering";
$lang['Vote'] = "Stemme";
$lang['Pollcreate'] = "Lage Avstemning";

$lang['Permissions'] = "Rettigheter";
$lang['Simple_Permission'] = "Enkle Rettigheter";

$lang['User_Level'] = "Rettighetsniv�";
$lang['Auth_User'] = "Medlem";
$lang['Auth_Admin'] = "Administrator";
$lang['Group_memberships'] = "Medlem av gruppe(ne)";
$lang['Usergroup_members'] = "Denne gruppen har f�lgende medlemmer*";

$lang['Forum_auth_updated'] = "Forum rettighetene er oppdatert";
$lang['User_auth_updated'] = "Medlems rettighetene er oppdatert";
$lang['Group_auth_updated'] = "Gruppe rettighetene er oppdatert";

$lang['Auth_updated'] = "Rettighetene er oppdatert";
$lang['Click_return_userauth'] = "Klikk %sHer%s for � g� tilbake til Medlemsrettighetene";
$lang['Click_return_groupauth'] = "Klikk %sHer%s for � g� tilbake til Grupperettighetene";
$lang['Click_return_forumauth'] = "Klikk %sHer%s for � g� tilbake til Forumrettighetene";


//
// Banning
//
$lang['Ban_control'] = "Utestengelse";
$lang['Ban_explain'] = "Her kan du kontrollere utestengelse av brukere. Du kan oppn� dette ved � utestenge enten eller begge av en spesifisert bruker eller en individuell rekke av IP adresser eller domene adresser. Disse metodene utelukker en bruker i � n� hovedsiden til forumet ditt. For � utestenge en bruker i � registrere seg under et annet brukernavn kan du ogs� spesifisere en utestengt epost adresse. Husk at utestengelse av en epost adresse alene ikke vil forhindre brukeren i � logge seg p� eller skrive innlegg i forumet ditt, du burde bruke en av de to f�rste metodene for � oppn� dette.";
$lang['Ban_explain_warn'] = "Husk at ved � skrive inn en rekke av IP adresser resulterer i at alle adressene mellom start og slutt vil bli f�rt opp i utestengt listen. Fors�k vil bli gjort for � minimere antallet av adresser som blir lagret i databasen ved � introdusere wildcards automatisk der hvor det passer. Hvis du virkelig m� skrive inn en rekke med adresser, pr�v � lag den minst mulig eller med fordel skriv inn spesifiserte adresser.";

$lang['Select_username'] = "Velg Medlem";
$lang['Select_ip'] = "Velg IP";
$lang['Select_email'] = "Velg Epost Adresse";

$lang['Ban_username'] = "Utesteng en eller flere brukernavn";
$lang['Ban_username_explain'] = "Du kan utestenge en eller flere brukernavn vha. riktig mus og tastatur kombinasjon.";

$lang['Ban_IP'] = "Utesteng en eller flere IP adresser eller domener";
$lang['IP_hostname'] = "IP adresse eller domener";
$lang['Ban_IP_explain'] = "Du kan angi flere IP adresser eller domener ved � skille dem med komma (,). Du kan ogs� angi en hel IP serie ved bruke bindestrek (-) mellom f�rste og siste IP adresse, og du kan bruke wildcard (*).";

$lang['Ban_email'] = "Utesteng en eller flere epost adresser";
$lang['Ban_email_explain'] = "Du kan angi flere epost adresser ved � skille dem med komma (,), og du kan bruke wildcard (*) f.eks. *@hotmail.com";

$lang['Unban_username'] = "Opphev utestengelsen for en eller flere brukernavn";
$lang['Unban_username_explain'] = "Du kan oppheve utestengelsen for flere brukernavn samtidig ved � bruke passende kombinasjon av musepeker og tastatur for din datamaskin og nettleser";

$lang['Unban_IP'] = "Opphev utestengelsen for en eller flere IP adresser";
$lang['Unban_IP_explain'] = "Du kan oppheve utestengelsen for flere IP adresser samtidig ved � bruke passende kombinasjon av musepeker og tastatur for din datamaskin og nettleser";

$lang['Unban_email'] = "Opphev utestengelsen for en eller flere epost adresser";
$lang['Unban_email_explain'] = "Du kan oppheve utestengelsen for flere epost adresser samtidig ved � bruke passende kombinasjon av musepeker og tastatur for din datamaskin og nettleser";

$lang['No_banned_users'] = "Ingen utestengte brukernavn";
$lang['No_banned_ip'] = "Ingen utestengte IP adresser";
$lang['No_banned_email'] = "Ingen utestengte epost adresser";

$lang['Ban_update_sucessful'] = "Utestengt listen er oppdatert";
$lang['Click_return_banadmin'] = "Klikk %sHer%s for � returnere til Utesteng Oversikt";


//
// Configuration
//
$lang['General_Config'] = "Generell Konfigurasjon";
$lang['Config_explain'] = "Feltene under vil tillate deg i � tilpasse alle de generelle konfigurasjons mulighetene. For Bruker og Forum konfigurasjon bruk relaterte linker i den venstre rammen.";

$lang['Click_return_config'] = "Klikk %sHer%s for � returnere til Generell Konfigurasjon";

$lang['General_settings'] = "Generelle Forum Innstillinger";
$lang['Server_name'] = "Domene navn";
$lang['Server_name_explain'] = "Domene navnet dette forumet ligger under.";
$lang['Script_path'] = "Sti";
$lang['Script_path_explain'] = "Sti, relativ i forhold til domenet, til phpBB2 katalogen.";
$lang['Server_port'] = "Server Port";
$lang['Server_port_explain'] = "Porten servern kj�rer p�, du skal bare endre denne dersom serveren kj�rer p� en annen port.";
$lang['Site_name'] = "Nettsidens Navn";
$lang['Site_desc'] = "Beskrivelse av Nettsiden";
$lang['Board_disable'] = "Sl� Av Forumet";
$lang['Board_disable_explain'] = "Dette vil gj�re forumet utilgjengelig for brukerne. Ikke logg ut n�r du sl�r av forumet, du vil ikke kunne logge inn igjen!";
$lang['Acct_activation'] = "Aktiver Konto Aktivering";
$lang['Acc_None'] = "Ingen"; // These three entries are the type of activation
$lang['Acc_User'] = "Bruker";
$lang['Acc_Admin'] = "Administrator";

$lang['Abilities_settings'] = "Bruker og Forum Enkle Innstillinger";
$lang['Max_poll_options'] = "Maksimalt Antall Valg P� Avstemninger.";
$lang['Flood_Interval'] = "Oversv�m Intervall";
$lang['Flood_Interval_explain'] = "Antall sekunder en bruker m� vente mellom innlegg";
$lang['Board_email_form'] = "Bruker Epost via Forumet";
$lang['Board_email_form_explain'] = "Brukere sender epost til hverandre via dette forumet";
$lang['Topics_per_page'] = "Emner pr Side";
$lang['Posts_per_page'] = "Innlegg pr Side";
$lang['Hot_threshold'] = "Antall svar for at emnene skal bli \"popul�re\"";
$lang['Default_style'] = "Standard Stil";
$lang['Override_style'] = "Overstyr Brukernes Valg av Stil";
$lang['Override_style_explain'] = "Overstyrer brukernes egne valg av stil, og viser forumene med standard stilen.";
$lang['Default_language'] = "Standard Spr�k";
$lang['Date_format'] = "Dato Format";
$lang['System_timezone'] = "Systemets Tidssone";
$lang['Enable_gzip'] = "Aktiv�r GZip Komprimering";
$lang['Enable_prune'] = "Aktiv�r Forum Sletting";
$lang['Allow_HTML'] = "Tillat HTML";
$lang['Allow_BBCode'] = "Tillat BBCode";
$lang['Allowed_tags'] = "Lovlige HTML Tagger";
$lang['Allowed_tags_explain'] = "Skill tagger med komma";
$lang['Allow_smilies'] = "Tillat Smil";
$lang['Smilies_path'] = "Sti til Smil-Katalogen";
$lang['Smilies_path_explain'] = "Sti under phpBB rot katalogen, f.eks. images/smiles (eller images/smil)";
$lang['Allow_sig'] = "Tillat Signaturer";
$lang['Max_sig_length'] = "Maksimal Signatur Lengde";
$lang['Max_sig_length_explain'] = "Maksimalt antall tegn i brukernes signaturer.";
$lang['Allow_name_change'] = "Tillat Endringer i Brukernavn";

$lang['Avatar_settings'] = "Avatar Innstillinger";
$lang['Allow_local'] = "Aktiv�r Avatar Galleri";
$lang['Allow_remote'] = "Tillat Eksterne Avatars";
$lang['Allow_remote_explain'] = "Avatars linket fra en annen nettside";
$lang['Allow_upload'] = "Tillat Opplasting av Avatar";
$lang['Max_filesize'] = "Maksimal Avatar Filst�rrelse";
$lang['Max_filesize_explain'] = "For opplastede avatar filer";
$lang['Max_avatar_size'] = "Maksimal Avatar St�rrelse";
$lang['Max_avatar_size_explain'] = "(H�yde x Bredde i piksler)";
$lang['Avatar_storage_path'] = "Avatar Lagrings Sti";
$lang['Avatar_storage_path_explain'] = "Sti under phpBB rot katalogen, f.eks.  images/avatars";
$lang['Avatar_gallery_path'] = "Avatar Galleri Sti";
$lang['Avatar_gallery_path_explain'] = "Sti under phpBB rot katalogen, for forumets egne avatars, f.eks. images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA Innstillinger";
$lang['COPPA_fax'] = "COPPA Faksnummer";
$lang['COPPA_mail'] = "COPPA Postadresse";
$lang['COPPA_mail_explain'] = "Dette er postadressen som foreldre sender COPPA registreringsskjemaet til.";

$lang['Email_settings'] = "Epost Innstillinger";
$lang['Admin_email'] = "Administrator Epost Adresse";
$lang['Email_sig'] = "Epost Signatur";
$lang['Email_sig_explain'] = "Denne signaturen blir lagt p� all epost som sendes fra forumet.";
$lang['Use_SMTP'] = "Bruk en SMTP Server";
$lang['Use_SMTP_explain'] = "Marker Ja hvis du �nsker eller m� sende epost via en SMTP server isteden for den lokale epostfunksjonaliteten.";
$lang['SMTP_server'] = "SMTP Server Adresse";
$lang['SMTP_username'] = "SMTP Brukernavn";
$lang['SMTP_username_explain'] = "Brukernavn fylles ut bare dersom SMTP serveren krever det.";
$lang['SMTP_password'] = "SMTP Passord";
$lang['SMTP_password_explain'] = "Passord fylles ut bare dersom SMTP serveren krever det.";

$lang['Disable_privmsg'] = "Private Meldinger";
$lang['Inbox_limits'] = "Maks Meldinger i Innboks";
$lang['Sentbox_limits'] = "Maks Meldinger i Sendte Meldinger";
$lang['Savebox_limits'] = "Maks Meldinger i Lagrede Meldinger";

$lang['Cookie_settings'] = "Cookie Innstillinger";
$lang['Cookie_settings_explain'] = "Disse kontrollerer hvordan cookien som blir sendt til nettlesere blir definert. I de fleste tilfeller vil standard innstillingene v�re tilsrekkelig. Hvis du trenger � forandre disse gj�r det med forsiktighet, feilaktige innstillinger kan forhindre brukere i � logge inn.";
$lang['Cookie_name'] = "Cookie Navn";
$lang['Cookie_domain'] = "Cookie Domene";
$lang['Cookie_path'] = "Cookie Sti";
$lang['Session_length'] = "Session Tid [ sekunder ]";
$lang['Cookie_secure'] = "Cookie Sikker [ https ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Forum Administrasjon";
$lang['Forum_admin_explain'] = "Fra dette panelet kan du opprette, slette, endre, flytte og resynkronisere kategorier og forumer";
$lang['Edit_forum'] = "Endre Forum";
$lang['Create_forum'] = "Opprett Nytt Forum";
$lang['Create_category'] = "Opprett Ny Kategori";
$lang['Remove'] = "Slett";
$lang['Action'] = "Utf�r";
$lang['Update_order'] = "Oppdater Rekkef�lge";
$lang['Config_updated'] = "Forum konfigurasjonen er n� oppdatert";
$lang['Edit'] = "Endre";
$lang['Delete'] = "Slett";
$lang['Move_up'] = "Flytt Opp";
$lang['Move_down'] = "Flytt Ned";
$lang['Resync'] = "Synkroniser";
$lang['No_mode'] = "Ingen modus var satt";
$lang['Forum_edit_delete_explain'] = "Feltene under vil tillate deg � konfigurere generelle forum valg. For Bruker og Forum konfigurasjon bruk relaterte linker i rammen til venstre";

$lang['Move_contents'] = "Flytt Alt Innhold";
$lang['Forum_delete'] = "Slett Forum";
$lang['Forum_delete_explain'] = "Feltene under vil tillate deg � slette et forum (eller kategori) og velge hvor du �nsker � plassere alle emnene (eller forumene) det inneholdt.";

$lang['Forum_settings'] = "Generalle Forum-Innstillinger";
$lang['Forum_name'] = "Forum Navn";
$lang['Forum_desc'] = "Beskrivelse";
$lang['Forum_status'] = "Forum Status";
$lang['Forum_pruning'] = "Auto-Sletting";

$lang['prune_freq'] = 'Sjekk for emne alder hver';
$lang['prune_days'] = "Slett emner som ikke har blitt svart i";
$lang['Set_prune_data'] = "Du har aktivert auto-sletting for dette forumet men har ikke satt en frekvens eller antall dager til � slette. Vennligst returner og gj�r s�";

$lang['Move_and_Delete'] = "Flytt og Slett";

$lang['Delete_all_posts'] = "Slett alle meldinger";
$lang['Nowhere_to_move'] = "Ingen steder � flytte til";

$lang['Edit_Category'] = "Endre Kategori";
$lang['Edit_Category_explain'] = "Her kan du endre kategorienes navn.";

$lang['Forums_updated'] = "Forum og kategori informasjonen er oppdatert";

$lang['Must_delete_forums'] = "Du m� slette alle forumene f�r du kan slette denne kategorien";

$lang['Click_return_forumadmin'] = "Klikk %sHer%s for � g� tilbake til Forum Administrasjon";


//
// Smiley Management
//
$lang['smiley_title'] = "Smil Kontrollpanel";
$lang['smile_desc'] = "Her kan du opprette, slette og endre smil som brukerne dine kan bruke i deres innlegg og private meldinger.";

$lang['smiley_config'] = "Smil Konfigurasjon";
$lang['smiley_code'] = "Smil Kode";
$lang['smiley_url'] = "Smil Bildefil";
$lang['smiley_emot'] = "Smil F�lelse";
$lang['smile_add'] = "Legg til Nytt Smil";
$lang['Smile'] = "Smil";
$lang['Emotion'] = "F�lelse";

$lang['Select_pak'] = "Velg pakke (.pak) fil";
$lang['replace_existing'] = "Erstatt eksisterende smil";
$lang['keep_existing'] = "Behold eksisterende smil";
$lang['smiley_import_inst'] = "Du burde pakke ut smil pakken (zip) for s� � laste opp alle filene til den passende smil (smiles) katalogen for innstallasjon. Deretter velg korrekt informasjon i feltene under for � importere smil pakken.";
$lang['smiley_import'] = "Importer Smil Pakke";
$lang['choose_smile_pak'] = "Velg Smil-pakke .pak fil";
$lang['import'] = "Importer Smil";
$lang['smile_conflicts'] = "Hva burde gj�res hvis det blir konflikter";
$lang['del_existing_smileys'] = "Slett eksisterende smil f�r import";
$lang['import_smile_pack'] = "Importer Smil Pakke";
$lang['export_smile_pack'] = "Lag Smil Pakke";
$lang['export_smiles'] = "For � lage en smil pakke fra dine eksisterende installerte smil, klikk %sHer%s for � laste ned smiles.pak filen. Navngi denne filen etter �nske men husk � beholde .pak endelsen. Deretter lag en zip fil som inneholder alle smil bildene pluss denne .pak konfigurasjons filen.";

$lang['smiley_add_success'] = "Smilet er n� lagret";
$lang['smiley_edit_success'] = "Smilet er n� oppdatert";
$lang['smiley_import_success'] = "Smil Pakken er n� importert!";
$lang['smiley_del_success'] = "Smilet er n� slettet";
$lang['Click_return_smileadmin'] = "Klikk %sHer%s for � returnere til Smil Administrasjon";


//
// User Management
//
$lang['User_admin'] = "Bruker Administrasjon";
$lang['User_admin_explain'] = "Her kan du forandre dine brukeres informasjon og noen spesifike valg. For � endre brukernes rettigheter vennligst bruk bruker og gruppe rettighets systemet.";

$lang['Look_up_user'] = "Vis Bruker";

$lang['Admin_user_fail'] = "Kunne ikke oppdatere brukerens profil.";
$lang['Admin_user_updated'] = "Brukerens profil er n� oppdatert.";
$lang['Click_return_useradmin'] = "Klikk %sHer%s for � returnere til Bruker Administrasjon";

$lang['User_delete'] = "Slett denne brukeren";
$lang['User_delete_explain'] = "Klikk her for � slette denne brukeren, dette kan ikke omgj�res.";
$lang['User_deleted'] = "Brukeren er slettet.";

$lang['User_status'] = "Brukeren er aktiv";
$lang['User_allowpm'] = "Kan Sende Private Meldinger";
$lang['User_allowavatar'] = "Kan Vise Avatar";

$lang['Admin_avatar_explain'] = "Her kan du se og slette brukerens avatar";

$lang['User_special'] = "Spesielle Kun-Admin Felt";
$lang['User_special_explain'] = "Disse feltene kan ikke endres av brukerne. Her kan du sette deres status og andre valg som ikke blir gitt til brukere.";


//
// Group Management
//
$lang['Group_administration'] = "Gruppe Administrasjon";
$lang['Group_admin_explain'] = "Fra dette panelet kan du administrere alle dine brukergrupper, du kan; slette, opprette og endre eksisterende grupper. Du kan velge moderatorer, �pne/stenge gruppe status og sette gruppenavn og beskrivelse.";
$lang['Error_updating_groups'] = "Det oppstod en feil med oppdateringen av gruppene";
$lang['Updated_group'] = "Gruppen er n� oppdatert";
$lang['Added_new_group'] = "En ny gruppe er n� opprettet";
$lang['Deleted_group'] = "Gruppen er n� slettet";
$lang['New_group'] = "Opprett en Ny Gruppe";
$lang['Edit_group'] = "Endre Gruppe";
$lang['group_name'] = "Gruppe Navn";
$lang['group_description'] = "Gruppe Beskrivelse";
$lang['group_moderator'] = "Gruppe Moderator";
$lang['group_status'] = "Gruppe Status";
$lang['group_open'] = "�pen Gruppe";
$lang['group_closed'] = "Lukket Gruppe";
$lang['group_hidden'] = "Skjult Gruppe";
$lang['group_delete'] = "Slett Gruppen";
$lang['group_delete_check'] = "Slett denne gruppen";
$lang['submit_group_changes'] = "OK";
$lang['reset_group_changes'] = "Angre";
$lang['No_group_name'] = "Du m� spesifisere et navn for denne gruppen";
$lang['No_group_moderator'] = "Du m� spesifisere en moderator for denne gruppen";
$lang['No_group_mode'] = "Du m� spesifisere om gruppen skal v�re �pen eller stengt";
$lang['delete_group_moderator'] = "Slett den gamle gruppe moderatoren?";
$lang['delete_moderator_explain'] = "Hvis du forandrer gruppe moderatoren, merk denne boksen for � slette den gamle moderatoren fra gruppen. Ellers, ikke merk den, og brukeren vil bli et vanlig medlem av gruppen.";
$lang['Click_return_groupsadmin'] = "Klikk %sHer%s for � returnere til Gruppe Administrasjon.";
$lang['Select_group'] = "Velg Gruppe";
$lang['Look_up_group'] = "Finn Gruppe";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Forum Sletting";
$lang['Forum_Prune_explain'] = "Dette vil slette alle emner hvor det ikke har blitt postet innlegg innen det antall dager som du velger. Hvis du ikke skriver inn et nummer s� vil alle emnene bli slettet. Det vil ikke slette emner som inneholder aktive avstemninger eller annonseringer. Disse emnene m� du slette manuelt.";
$lang['Do_Prune'] = "Utf�r Slettingen";
$lang['All_Forums'] = "Alle Forumene";
$lang['Prune_topics_not_posted'] = "Slett emner uten innlegg i dette antall dager";
$lang['Topics_pruned'] = "Emnene er slettet";
$lang['Posts_pruned'] = "Innleggene er slettet";
$lang['Prune_success'] = "Slettingen er gjennomf�rt";


//
// Word censor
//
$lang['Words_title'] = "Ord Sensur Administrasjon";
$lang['Words_explain'] = "Fra dette kontrollpanelet kan du opprette, endre og slette ord som vil bli automatisk sensurert i forumene dine. I tillegg vil folk ikke kunne registrere seg med brukernavn som inneholder disse ordene. Wildcards (*) blir akseptert i ord feltet, f.eks. *ord* vil passe til bordet, ord* vil passe til ordet, *ord vil passe til bord.";
$lang['Word'] = "Ord";
$lang['Edit_word_censor'] = "Ord Sensur";
$lang['Replacement'] = "Erstattning";
$lang['Add_new_word'] = "Legg til et Nytt Ord";
$lang['Update_word'] = "Oppdater Sensurlisten";

$lang['Must_enter_word'] = "Du m� skrive inn et ord som dets erstattning";
$lang['No_word_selected'] = "Ingen ord er valgt for erstattning";

$lang['Word_updated'] = "Den valgte ord erstattningen er n� oppdatert";
$lang['Word_added'] = "Den valgte ord erstattningen er n� opprettet";
$lang['Word_removed'] = "Den valgte ord erstattningen er n� slettet";

$lang['Click_return_wordadmin'] = "Klikk %sHer%s for � returnere til Ord Sensur Administrasjon";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Her kan du sende en epost melding til enten alle dine brukere, eller alle brukerne i en gruppe. For � gj�re dette, vil en epost bli sendt ut til administratorens epost adresse, med en blind carbon kopi som blir sendt til alle mottakerene. Hvis du sender en epost til en stor gruppe av mennesker vennligst ha t�lmodighet etter at du har trykket send, og ikke stopp siden mens den jobber. Det er normalt ved gruppe epost at det tar lang tid, du vil bli varslet n�r sendingen er fullf�rt.";
$lang['Compose'] = "Ny Melding";

$lang['Recipients'] = "Mottakere";
$lang['All_users'] = "Alle Brukere";

$lang['Email_successfull'] = "Meldingen er sendt";
$lang['Click_return_massemail'] = "Klikk %sHer%s for � returnere til Gruppe Epost siden";


//
// Ranks admin
//
$lang['Ranks_title'] = "Rang Administrasjon";
$lang['Ranks_explain'] = "Ved � bruke feltene under kan du opprette, endre, se og slette rangeringer. Du kan ogs� opprette unike rangeringer som kan bli lagt til en bruker via bruker administrasjonen";

$lang['Add_new_rank'] = "Opprett Ny Rang";

$lang['Rank_title'] = "Rang Tittel";
$lang['Rank_special'] = "Sett som Spesiell Rang";
$lang['Rank_minimum'] = "Minimum Innlegg";
$lang['Rank_maximum'] = "Maksimum Innlegg";
$lang['Rank_image'] = "Rang Bilde (Relativ til phpBB2 rot sti)";
$lang['Rank_image_explain'] = "Bruk denne til � definere et lite bilde assosiert til rangen";

$lang['Must_select_rank'] = "Du m� velge en rang";
$lang['No_assigned_rank'] = "Ingen spesiell rang er tildelt";

$lang['Rank_updated'] = "Rangen er n� oppdatert";
$lang['Rank_added'] = "Rangen er n� opprettet";
$lang['Rank_removed'] = "Rangen er n� slettet";

$lang['Click_return_rankadmin'] = "Klikk %sHer%s for � returnere til Rang Administrasjon";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Forby Brukernavn Administrasjon";
$lang['Disallow_explain'] = "Her kan du forby u�nskede brukernavn, hvis et navn er i bruk m� du slette det f�r du kan forby det.";

$lang['Delete_disallow'] = "Slett";
$lang['Delete_disallow_title'] = "Slett et Forbudt Brukernavn";
$lang['Delete_disallow_explain'] = "Du kan fjerne et forbudt brukernavn ved � velge brukernavnet fra denne listen og trykke slett";

$lang['Add_disallow'] = "Legg Til";
$lang['Add_disallow_title'] = "Forby et Brukernavn";
$lang['Add_disallow_explain'] = "Du kan forby et brukernavn ved � bruke wildcard tegnet * til � passe alle tegn";

$lang['No_disallowed'] = "Det er ingen forbudte brukernavn";

$lang['Disallowed_deleted'] = "Brukernavnet er slettet fra listen over forbudte brukernavn";
$lang['Disallow_successful'] = "Brukernavnet er lagt til listen over forbudte brukernavn";
$lang['Disallowed_already'] = "Navnet du skrev inn kunne ikke bli forbudt. Enten eksisterer navnet allerede i listen, navnet eksisterer i ord sensur listen, eller det finnes et likt brukernavn";

$lang['Click_return_disallowadmin'] = "Klikk %sHer%s for � returnere til Forby Brukernavn Administrasjon";


//
// Styles Admin
//
$lang['Styles_admin'] = "Stil Administrasjon";
$lang['Styles_explain'] = "Her kan du opprette, slette og endre stiler (templates og tema) som er tilgjengelig for dine brukere";
$lang['Styles_addnew_explain'] = "Listen nedenfor inneholder alle temaene som er tilgjengelig for eksisterende templates som du har. Oppf�ringene i denne listen har enda ikke blitt installert i phpBB databasen. For � innstallere et tema klikk p� installer linken ved siden av en oppf�ring";

$lang['Select_template'] = "Velg en Template";

$lang['Style'] = "Stil";
$lang['Template'] = "Template";
$lang['Install'] = "Installer";
$lang['Download'] = "Last Ned";

$lang['Edit_theme'] = "Endre Tema";
$lang['Edit_theme_explain'] = "Nedenfor kan du endre innstillingene for det valgte temaet";

$lang['Create_theme'] = "Opprett Tema";
$lang['Create_theme_explain'] = "Nedenfor kan du opprette et nytt tema for en valgt template. N�r du skriver inn farger (bruk hexadesimaler) m� du ikke inkludere det f�rste tegnet #, m.a.o. CCCCCC er lov, #CCCCCC er ikke lov.";

$lang['Export_themes'] = "Eksporter Tema";
$lang['Export_explain'] = "Her kan du eksportere temaets data for en valgt template. Velg templaten fra listen under og scriptet vil lage tema konfigurasjonsfilen og pr�ve � lagre den i den valgte template katalogen. Hvis den ikke klarer � lagre filen selv vil den gi deg muligheten til � laste den ned. For at scriptet skal kunne lagre filen m� du gi skriverettigheter til serveren for den valgte katalogen. For mer informasjon om dette se i phpBB 2 bruker guiden.";

$lang['Theme_installed'] = "Det valgte temaet er installert";
$lang['Style_removed'] = "Den valgte stilen er blitt slettet fra databasen. For � slette denne stilen fullstendig m� du slette den fra templates katalogen.";
$lang['Theme_info_saved'] = "Tema informasjonen for den valgte templaten er blitt lagret. Du burde n� endre tilbake rettighetene for theme_info.cfg (og den valgte template katalogen) til read-only";
$lang['Theme_updated'] = "Det valgte temaet er blitt oppdatert. Du burde n� eksportere de nye tema instillingene";
$lang['Theme_created'] = "Temaet er opprettet. Du burde n� eksportere temaet til tema konfigurasjonsfilen for lagring eller til bruk andre steder";

$lang['Confirm_delete_style'] = "Er du sikker p� at du �nsker � slette denne stilen?";

$lang['Download_theme_cfg'] = "Eksport�ren kunne ikke skrive tema informasjonsfilen. Klikk p� knappen under for � laste ned denne filen. N�r du har lastet ned filen kan du overf�re den til katalogen som inneholder template filene. Du kan deretter pakke filene for distribusjon eller bruke dem andre steder hvis du �nsker.";
$lang['No_themes'] = "Templaten du valgte har ingen tema knyttet til seg. For � lage et nytt tema klikk p� Opprett Tema i rammen til venstre";
$lang['No_template_dir'] = "Kunne ikke �pne template katalogen. Den kan v�re ulesbar for serveren eller at den ikke eksisterer";
$lang['Cannot_remove_style'] = "Du kan ikke flytte den valgte stilen fordi den er satt som standard i forumet. Du kan endre standard stilen og pr�ve igjen.";
$lang['Style_exists'] = "Stil navnet som du valgte finnes allerede, vennligst g� tilbake og velg et annet navn.";

$lang['Click_return_styleadmin'] = "Klikk %sHer%s for � g� tilbake til Stil Administrasjonen";

$lang['Theme_settings'] = "Tema Innstillinger";
$lang['Theme_element'] = "Tema Elementer";
$lang['Simple_name'] = "Enkelt Navn";
$lang['Value'] = "Verdi";
$lang['Save_Settings'] = "Lagre Innstillinger";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Background Image";
$lang['Background_color'] = "Background Color";
$lang['Theme_name'] = "Tema Navn";
$lang['Link_color'] = "Link Color";
$lang['Text_color'] = "Text Color";
$lang['VLink_color'] = "Visited Link Color";
$lang['ALink_color'] = "Active Link Color";
$lang['HLink_color'] = "Hover Link Color";
$lang['Tr_color1'] = "Table Row Color 1";
$lang['Tr_color2'] = "Table Row Color 2";
$lang['Tr_color3'] = "Table Row Color 3";
$lang['Tr_class1'] = "Table Row Class 1";
$lang['Tr_class2'] = "Table Row Class 2";
$lang['Tr_class3'] = "Table Row Class 3";
$lang['Th_color1'] = "Table Header Color 1";
$lang['Th_color2'] = "Table Header Color 2";
$lang['Th_color3'] = "Table Header Color 3";
$lang['Th_class1'] = "Table Header Class 1";
$lang['Th_class2'] = "Table Header Class 2";
$lang['Th_class3'] = "Table Header Class 3";
$lang['Td_color1'] = "Table Cell Color 1";
$lang['Td_color2'] = "Table Cell Color 2";
$lang['Td_color3'] = "Table Cell Color 3";
$lang['Td_class1'] = "Table Cell Class 1";
$lang['Td_class2'] = "Table Cell Class 2";
$lang['Td_class3'] = "Table Cell Class 3";
$lang['fontface1'] = "Font Face 1";
$lang['fontface2'] = "Font Face 2";
$lang['fontface3'] = "Font Face 3";
$lang['fontsize1'] = "Font Size 1";
$lang['fontsize2'] = "Font Size 2";
$lang['fontsize3'] = "Font Size 3";
$lang['fontcolor1'] = "Font Color 1";
$lang['fontcolor2'] = "Font Color 2";
$lang['fontcolor3'] = "Font Color 3";
$lang['span_class1'] = "Span Class 1";
$lang['span_class2'] = "Span Class 2";
$lang['span_class3'] = "Span Class 3";
$lang['img_poll_size'] = "Avstemning Bilde St�rrelse [px]";
$lang['img_pm_size'] = "Privat Melding Status St�rrelse [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Velkommen til phpBB 2 Installasjon";
$lang['Initial_config'] = "Standard Konfigurasjon";
$lang['DB_config'] = "Database Konfigurasjon";
$lang['Admin_config'] = "Admin Konfigurasjon";
$lang['continue_upgrade'] = "N�r du har lastet ned din config fil til din lokale maskin kan du trykke p� \"Fortsett Oppgradering\" knappen nedenfor for � fortsette oppgraderings prosessen. Vennligst vent med � laste opp config filen til oppgraderings prosessen er fullf�rt.";
$lang['upgrade_submit'] = "Fortsett Oppgradering";

$lang['Installer_Error'] = "En feil har oppst�tt under installasjonen";
$lang['Previous_Install'] = "En tidligere installasjon har blitt oppdaget";
$lang['Install_db_error'] = "En feil har oppst�tt under oppdateringen av databasen";

$lang['Re_install'] = "Din tidligere installasjon er fortsatt aktiv. <br /><br />Hvis du vil re-installere phpBB 2 m� du trykke p� Ja knappen under. Vennligst v�r oppmerksom p� at hvis du gj�r dette s� vil alle eksisterende data bli slettet, ingen backups vil bli laget! Administrator brukernavnet og passordet som du har brukt for � logge deg inn p� forumet vil bli laget p� nytt etter re-installasjonen, ingen andre innstillinger vil bli beholdt. <br /><br />Tenk godt igjennom det f�r du trykker Ja!";

$lang['Inst_Step_0'] = "Takk for at du valgte phpBB 2. For � avslutte installasjonen vennligst fyll ut detaljene som blir etterspurt nedenfor. Vennligst noter at databasen som du installerer inn p� m� allerede eksistere. Hvis du installerer inn p� en database som bruker ODBC, f.eks. MS Access m� du f�rst lage en DSN f�r du fortsetter.";

$lang['Start_Install'] = "Start Installasjon";
$lang['Finish_Install'] = "Fullf�r Installasjon";

$lang['Default_lang'] = "Standard Forum Spr�k";
$lang['DB_Host'] = "Database Servernavn / db_host";
$lang['DB_Name'] = "Ditt Databasenavn / db_navn";
$lang['Database'] = "Din Database";
$lang['Install_lang'] = "Velg Installasjonsspr�k";
$lang['dbms'] = "Database Type";
$lang['Table_Prefix'] = "Prefix for Database Tabellene";
$lang['Admin_Username'] = "Administrator Brukernavn";
$lang['Admin_Password'] = "Administrator Passord";
$lang['Admin_Password_confirm'] = "Administrator Passord [ Bekreft ]";

$lang['Inst_Step_2'] = "Ditt admin brukernavn er blitt laget. P� dette tidspunktet er den grunnleggene installasjonen fullf�rt. Du vil n� bli overf�rt til en side hvor du kan administrere din nye installasjon. Vennligst sjekk Generell Konfigurasjon detaljene og gj�r de n�dvendige forandringene. Takk for at du valgte phpBB 2.";

$lang['Unwriteable_config'] = "Din config fil er uskrivbar. En kopi av config filen vil bli lastet ned til deg n�r du trykker p� knappen under. Du m� laste opp denne filen til den samme katalogen som phpBB 2. N�r dette er gjort logger du deg inn som administrator ved � bruke brukernavnet og passordet som du oppgav tidligere under intallasjonen og bes�k administrasjonspanelet (en link vil vises nederst p� alle sidene n�r du har logget inn) for � sjekke den generelle konfigurasjonen. Takk for at du valgte phpBB 2.";
$lang['Download_config'] = "Last ned Config";

$lang['ftp_choose'] = "Velg Nedlastings Metode";
$lang['ftp_option'] = "<br />Siden FTP extensions er aktivert i denne versionen av PHP kan du bli gitt muligheten for f�rst � automatisk pr�ve � ftp'e filen til rett sted.";
$lang['ftp_instructs'] = "Du har valgt � automatisk ftp'e filen til kontoen som inneholder phpBB 2. Vennligst skriv inn informasjonen nedenfor for � benytte deg av denne prosessen. Husk at FTP stien skal v�re den eksakte stien til din phpBB 2 installasjon akkurat som om du benytter ditt vanlige FTP program.";
$lang['ftp_info'] = "Skriv inn din FTP informasjon";
$lang['Attempt_ftp'] = "Overf�r config.php til serveren vha. FTP";
$lang['Send_file'] = "Send config.php til meg, slik at jeg kan laste den opp manuelt vha. FTP";
$lang['ftp_path'] = "FTP sti til phpBB 2";
$lang['ftp_username'] = "Ditt FTP Brukernavn";
$lang['ftp_password'] = "Ditt FTP Passord";
$lang['Transfer_config'] = "Start Overf�rsel";
$lang['NoFTP_config'] = "Det gikk ikke � overf�re config.php vha. FTP. Vennligst last ned config.php og FTP den til serveren manuelt."; 


$lang['Install'] = "Installer";
$lang['Upgrade'] = "Oppgrader";

$lang['Install_Method'] = "Velg Installasjons Metode";

$lang['Install_No_Ext'] = "PHP konfigurasjonen p� din server st�tter ikke den databasen du har valgt";

$lang['Install_No_PCRE'] = "phpBB2 krever at PHP er konfigurert med \"Perl Compatible Regular Expressions Module for PHP\", det tyder p� at PHP p� din server ikke er konfigurert med st�tte for denne modulen.";

//
// That's all Folks!
// -------------------------------------------------

?>
