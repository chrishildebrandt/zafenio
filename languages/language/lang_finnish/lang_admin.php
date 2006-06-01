<?php

/***************************************************************************
 *                            lang_admin.php [Finnish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2003/02/19 18:32:45 bob Exp $
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
//	Translation produced by Jorma Aaltonen (bullitt)
//	http://www.pitro.com/
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Yleinen yll�pito';
$lang['Users'] = 'K�ytt�jien yll�pito';
$lang['Groups'] = 'Ryhmien yll�pito';
$lang['Forums'] = 'Foorumien yll�pito';
$lang['Styles'] = 'Tyylien yll�pito';

$lang['Configuration'] = 'Konfigurointi';
$lang['Permissions'] = 'Suojaukset';
$lang['Manage'] = 'Hallinta';
$lang['Disallow'] = 'Kielletyt nimet';
$lang['Prune'] = 'Siivous';
$lang['Mass_Email'] = 'Ryhm�s�hk�posti';
$lang['Ranks'] = 'Tittelit';
$lang['Smilies'] = 'Hymi�t';
$lang['Ban_Management'] = 'Kieltojen hallinta';
$lang['Word_Censor'] = 'Sanasensuuri';
$lang['Export'] = 'Vie';
$lang['Create_new'] = 'Luo';
$lang['Add_new'] = 'Lis��';
$lang['Backup_DB'] = 'Tietokannan varmuuskopiointi';
$lang['Restore_DB'] = 'Varmuuskopion palautus';


//
// Index
//
$lang['Admin'] = 'Yll�pito';
$lang['Not_admin'] = 'Sinulla ei ole oikeutta hallinnoida t�t� sivustoa';
$lang['Welcome_phpBB'] = 'Tervetuloa phpBB:hen';
$lang['Admin_intro'] = 'Kiitoksia, ett� valitsit phpBB:n foorumiratkaisuksi. T�ll� ruudulla n�et pikaisen silm�yksen foorumien erilaisista tilastoinneista. P��set takaisin t�lle sivulle klikkaamalla <u>Hallinnan p��valikko</u> linkki� vasemmalla reunalla. Palataksesi foorumien p��valikkoon, klikkaa phpBB logoa, joka on my�skin vasemmalla reunalla. Muut linkit t�m�n sivun vasemmassa reunassa p��st�v�t sinut yll�pit�m��n jokaista osa-aluetta foorumien toiminnassa. Jokaisella sivulla on ohjeet ty�kalujen k�ytt��n.';
$lang['Main_index'] = 'Foorumien p��valikko';
$lang['Forum_stats'] = 'Foorumien tilastointi';
$lang['Admin_Index'] = 'Hallinnan p��valikko';
$lang['Preview_forum'] = 'Esikatsele Foorumi';

$lang['Click_return_admin_index'] = 'Klikkaa %st�st�%s palataksesi hallinnan p��valikkoon';

$lang['Statistic'] = 'Tilastointi';
$lang['Value'] = 'Arvo';
$lang['Number_posts'] = 'Viestien lukum��r�';
$lang['Posts_per_day'] = 'Viestej� p�iv�ss�';
$lang['Number_topics'] = 'Aiheiden lukum��r�';
$lang['Topics_per_day'] = 'Aiheita p�iv�ss�';
$lang['Number_users'] = 'K�ytt�jien lukum��r�';
$lang['Users_per_day'] = 'K�ytt�ji� p�iv�ss�';
$lang['Board_started'] = 'Sivusto aloitti';
$lang['Avatar_dir_size'] = 'Avatar hakemiston koko';
$lang['Database_size'] = 'Tietokannan koko';
$lang['Gzip_compression'] ="Gzip pakkaus";
$lang['Not_available'] = 'Ei k�ytett�viss�';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Tietokantaty�kalut';

$lang['Restore'] = 'Palauta';
$lang['Backup'] = 'Varmista';
$lang['Restore_explain'] = 'T�ll� toimenpiteell� suoritetaan phpBB tietokannan t�ydellinen palautus. Jos palvelimesi tukee, voit  siirt�� gzip pakatun tekstitiedoston ja se puretaan automaattisesti. <b>VAROITUS</b> Kaikki olemassa oleva tieto korvataan. Palautus voi kest�� pitk��n, �l� poistu t�lt� sivulta ennen kuin toiminto on valmis.';
$lang['Backup_explain'] = 'T�ss� voit varmuuskopioida kaiken phpBB liittyv�n tiedon. Jos sinulla on ylim��r�isi� lis�ttyj� tauluja samassa tietokannassa phpBB:n kanssa ja haluaisit kopioida my�s ne, ole hyv� ja anna taulujen nimet pilkuilla eroteltuna Lis�kent�t teksti-ikkunaan alapuolella. Jos palvelimesi tukee gzip pakkausta voit pakata tiedostot pienemp��n tilaan ennen siirtoa.';

$lang['Backup_options'] = 'Varmuuskopion valinnat';
$lang['Start_backup'] = 'Aloita varmuuskopiointi';
$lang['Full_backup'] = 'T�ysi varmuuskopio';
$lang['Structure_backup'] = 'Vain rakenteen varmuuskopio';
$lang['Data_backup'] = 'Vain tietojen varmuuskopio';
$lang['Additional_tables'] = 'Lis�kent�t';
$lang['Gzip_compress'] = 'Gzip pakattu tiedosto';
$lang['Select_file'] = 'Valitse tiedosto';
$lang['Start_Restore'] = 'Aloita palautus';

$lang['Restore_success'] = 'Tietokanta on onnistuneesti palautettu.<br /><br />Foorumisi on j�lleen siin� tilassa, jossa se oli kun varmuuskopio otettiin.';
$lang['Backup_download'] = 'Tiedoston siirto alkaa hetken kuluttua, ole hyv� ja odota';
$lang['Backups_not_supported'] = 'Valitettavasti tietokantaj�rjestelm�si ei t�ll� hetkell� tue varmuuskopiointia';

$lang['Restore_Error_uploading'] = 'Virhe siirrett�ess� varmuuskopiotiedostoa';
$lang['Restore_Error_filename'] = 'Tiedoston nime�misongelma, ole hyv� ja yrit� toista nime�';
$lang['Restore_Error_decompress'] = 'Gzip pakatun tiedoston purku ei onnistu, ole hyv� ja siirr� pakkaamaton tiedosto';
$lang['Restore_Error_no_file'] = 'Tiedostoa ei siirretty';


//
// Auth pages
//
$lang['Select_a_User'] = 'Valitse k�ytt�j�';
$lang['Select_a_Group'] = 'Valitse ryhm�';
$lang['Select_a_Forum'] = 'Valitse foorumi';
$lang['Auth_Control_User'] = 'K�ytt�j�n oikeuksien m��rittely'; 
$lang['Auth_Control_Group'] = 'Ryhm�n oikeuksien m��rittely'; 
$lang['Auth_Control_Forum'] = 'Foorumin oikeuksien m��rittely'; 
$lang['Look_up_User'] = 'N�yt� k�ytt�j�'; 
$lang['Look_up_Group'] = 'N�yt� ryhm�'; 
$lang['Look_up_Forum'] = 'N�yt� foorumi'; 

$lang['Group_auth_explain'] = 'T�ss� voit muuttaa oikeuksia ja moderaattoristatusta jokaiselle k�ytt�j�ryhm�lle. �l� unohda muuttaessasi ryhm�n oikeuksia, ett� jokin k�ytt�j� voi oikeuksiensa perusteella silti p��st� foorumiin jne. Saat t�llaisessa tilanteessa varoituksen ko. mahdollisuudesta.';
$lang['User_auth_explain'] = 'T�ss� voit muuttaa oikeuksia ja moderaattoristatusta jokaiselle k�ytt�j�lle. �l� unohda muuttaessasi k�ytt�j�n oikeuksia, ett� ryhm�n oikeudet saattavat silti sallia k�ytt�j�n p��st� foorumiin jne. Saat t�llaisessa tilanteessa varoituksen ko. mahdollisuudesta.';
$lang['Forum_auth_explain'] = 'T�ss� voi muuttaa yll�pito-oikeuksia kaikille foorumeille. Sinulla on sek� yksinkertainen, ett� yksityiskohtaisempi mahdollisuus. Yksityiskohtaisempi antaa enemm�n mahdollisuuksia m��ritell� foorumin toimintaa. Muista, ett� foorumin oikeustason muuttaminen vaikuttaa siihen ketk� k�ytt�j�t voivat tehd� tiettyj� toimenpiteit� niiss�.';

$lang['Simple_mode'] = 'Yksinkertainen';
$lang['Advanced_mode'] = 'Yksityiskohtainen';
$lang['Moderator_status'] = 'Moderaattori status';

$lang['Allowed_Access'] = 'K�ytt� sallittu';
$lang['Disallowed_Access'] = 'K�ytt� estetty';
$lang['Is_Moderator'] = 'On moderaattori';
$lang['Not_Moderator'] = 'Ei ole moderaattori';

$lang['Conflict_warning'] = 'Varoitus oikeustasojen ristiriidasta';
$lang['Conflict_access_userauth'] = 'T�ll� k�ytt�j�ll� on yh� oikeus t�h�n foorumiin ryhm�ns� kautta. Voit muuttaa ryhm�n oikeuksia tai poistaa k�ytt�j�n/ryhm�n est��ksesi heilt� p��syn. Ryhm�n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';
$lang['Conflict_mod_userauth'] = 'T�ll� k�ytt�j�ll� on yh� moderaattorin oikeudet t�h�n foorumiin ryhm�ns� kautta. VOit muuttaa ryhm�n oikeuksia tai poistaa k�ytt�j�n/ryhm�n est��ksesi heilt� moderaattorioikeudet. Ryhm�n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';

$lang['Conflict_access_groupauth'] = 'Seuraavalla k�ytt�j�ll� (k�ytt�jill�) on yh� oikeus t�h�n foorumiin k�ytt�j�oikeuksien kautta. VOit muuttaa k�ytt�j�n oikeuksia est��ksesi h�nelt� p��syn foorumiin. K�ytt�j�n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';
$lang['Conflict_mod_groupauth'] = 'Seuraavalla k�ytt�j�ll� (k�ytt�jill�) on yh� moderaattorin oikeudet t�h�n foorumiin k�ytt�j�oikeuksien kautta. VOit muuttaa k�ytt�j�n oikeuksia est��ksesi h�nelt� moderaattorioikeudet foorumiin. K�ytt�j�n oikeudet (ja foorumit joihin vaikuttavat) on mainittu alapuolella.';

$lang['Public'] = 'Yleinen';
$lang['Private'] = 'Yksityinen';
$lang['Registered'] = 'Rekister�ity';
$lang['Administrators'] = 'Yll�pit�j�t';
$lang['Hidden'] = 'Piilotettu';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'KAIKKI';
$lang['Forum_REG'] = 'REKIST.';
$lang['Forum_PRIVATE'] = 'YKSITYINEN';
$lang['Forum_MOD'] = 'MODER.';
$lang['Forum_ADMIN'] = 'YLL�PITO';

$lang['View'] = 'N�yt�';
$lang['Read'] = 'Lue';
$lang['Post'] = 'Kirjoita';
$lang['Reply'] = 'Vastaa';
$lang['Edit'] = 'Muokkaa';
$lang['Delete'] = 'Poista';
$lang['Sticky'] = 'Tiedote';
$lang['Announce'] = 'Ilmoitus'; 
$lang['Vote'] = '��nest�';
$lang['Pollcreate'] = 'Luo ��nestys';

$lang['Permissions'] = 'Oikeudet';
$lang['Simple_Permission'] = 'Yksinkertainen lupa';

$lang['User_Level'] = 'K�ytt�j�taso'; 
$lang['Auth_User'] = 'K�ytt�j�';
$lang['Auth_Admin'] = 'Yll�pit�j�';
$lang['Group_memberships'] = 'K�ytt�j�ryhmien j�senyydet';
$lang['Usergroup_members'] = 'T�ll� ryhm�ll� on seuraavat j�senet';

$lang['Forum_auth_updated'] = 'Foorumin oikeudet p�ivitetty';
$lang['User_auth_updated'] = 'K�ytt�j�oikeudet p�ivitetty';
$lang['Group_auth_updated'] = 'Ryhm�n oikeudet p�ivitetty';

$lang['Auth_updated'] = 'Oikeudet on p�ivitetty';
$lang['Click_return_userauth'] = 'Klikkaa %st�st�%s palataksesi k�ytt�j�oikeuksiin';
$lang['Click_return_groupauth'] = 'Klikkaa %st�st�%s palataksesi ryhm�oikeuksiin';
$lang['Click_return_forumauth'] = 'Klikkaa %st�st�%s palataksesi foorumin oikeuksiin';


//
// Banning
//
$lang['Ban_control'] = 'Porttikieltojen hallinnointi';
$lang['Ban_explain'] = 'T��ll� voit yll�pit�� porttikieltoja. Voit antaa porttikiellon yksitt�iselle k�ytt�j�lle ja/tai ketjulle IP osoitteita tai koneita. N�ill� toimilla estet��n k�ytt�j�n p��sy edes foorumien p��sivulle. Est��ksesi k�ytt�j�� rekister�itym�st� toisella nimell� voit m��ritell� porttikiellon my�s s�hk�postiosoitteelle. Huomaa kuitenkin, ett� pelkk� s�hk�postiosoitteen porttikielto ei est� k�ytt�j�� kirjautumasta tai kirjoittamasta foorumeihin, t�m� estet��n k�ytt�m�ll� jompaa kumpaa kahdesta ensimm�isest� tavasta.';
$lang['Ban_explain_warn'] = 'Huomaa, ett� antamalla IP osoitteiden sarjan, kaikki alku- ja loppuosoitteen v�lill� olevat IP osoitteet asetetaan porttikieltoon. Osoitteiden lukum��r�� tietokannassa pyrit��n v�hent�m��n k�ytt�m�ll� jokerimerkkej� automaattisesti miss� vain mahdollista. Jos todella t�ytyy antaa sarja IP osoitteita, pyri pit�m��n sarja mahdollisimman pienen� tai jos vain mahdollista k�yt� yksitt�isi� osoitteita';

$lang['Select_username'] = 'Valitse k�ytt�j�tunnus';
$lang['Select_ip'] = 'Valitse IP';
$lang['Select_email'] = 'Valitse s�hk�postiosoite';

$lang['Ban_username'] = 'Anna porttikielto yhdelle tai useammalle k�ytt�j�lle';
$lang['Ban_username_explain'] = 'Voit antaa porttikiellon samalla kertaa usealle k�ytt�j�lle k�ytt�en sopivasti yhdistellen tietokoneesi hiirt� ja n�pp�imist��';

$lang['Ban_IP'] = 'Anna porttikielto yhdelle tai useammalle IP:lle tai koneelle';
$lang['IP_hostname'] = 'IP osoite tai koneen nimi';
$lang['Ban_IP_explain'] = 'M��rittele useampi IP osoite tai kone erittelem�ll� ne pilkuilla. M��rittele sarja IP osoitteita sy�tt�m�ll� alku- ja loppuosoitteiden v�liin miinusmerkki (-), jokerina k�ytet��n *';

$lang['Ban_email'] = 'Anna porttikielto yhdelle tai useammalle s�hk�postiosoitteelle';
$lang['Ban_email_explain'] = 'M��ritt��ksesi monta s�hk�postiosoitetta, erittele ne pilkuilla. jokerina k�ytet��n*, esimerkiksi *@hotmail.com';

$lang['Unban_username'] = 'Poista porttikielto yhdelt� tai useammalta k�ytt�j�lt�';
$lang['Unban_username_explain'] = 'Voit poistaa porttikiellon samalla kertaa useammalta k�ytt�j�lt� k�ytt�en sopivasti yhdistellen tietokoneesi hiirt� ja n�pp�imist��';

$lang['Unban_IP'] = 'Poista porttikielto yhdelt� tai useammalta IP osoitteelta';
$lang['Unban_IP_explain'] = 'Voit poistaa porttikiellon samalla kertaa useammalta IP osoitteelta k�ytt�en sopivasti yhdistellen tietokoneesi hiirt� ja n�pp�imist��';

$lang['Unban_email'] = 'Poista porttikielto yhdelt� tai useammalta s�hk�postiosoitteelta';
$lang['Unban_email_explain'] = 'Voit poistaa porttikiellon samalla kertaa useammalta s�hk�postiosoitteelta k�ytt�en sopivasti yhdistellen tietokoneesi hiirt� ja n�pp�imist��';

$lang['No_banned_users'] = 'Ei porttikiellossa olevia k�ytt�j�tunnuksia';
$lang['No_banned_ip'] = 'Ei porttikiellossa olevia IP osoitteita';
$lang['No_banned_email'] = 'Ei porttikiellossa olevia s�hk�postiosoitteita';

$lang['Ban_update_sucessful'] = 'Porttikieltolista on p�ivitetty onnistuneesti';
$lang['Click_return_banadmin'] = 'Klikkaa %st�st�%s palataksesi porttikieltojen yll�pitoon';


//
// Configuration
//
$lang['General_Config'] = 'Yleinen konfigurointi';
$lang['Config_explain'] = 'Alla olevalla lomakkeella voit yll�pit�� sivuston yleisi� toimintoja. K�ytt�jien ja foorumien yll�pitoon on linkit sivun vasemmassa reunassa.';

$lang['Click_return_config'] = 'Klikkaa %st�st�%s palataksesi yleistietojen konfigurointiin';

$lang['General_settings'] = 'Sivuston yleisasetukset';
$lang['Server_name'] = 'Domain nimi';
$lang['Server_name_explain'] = 'Domain nimi jolla sivusto toimii';
$lang['Script_path'] = 'Skriptien polku';
$lang['Script_path_explain'] = 'Polku, jossa phpBB2 sijaitsee suhteessa domain nimeen';
$lang['Server_port'] = 'Palvelimen portti';
$lang['Server_port_explain'] = 'Portti, jossa palvelin toimii, yleens� 80, muuta jos jokin muu';
$lang['Site_name'] = 'Sivuston nimi';
$lang['Site_desc'] = 'Sivuston kuvaus';
$lang['Board_disable'] = 'Passivoi sivusto';
$lang['Board_disable_explain'] = 'T�m� toimenpide est�� sivuston k�yt�n. �l� kirjaudu ulos kun sivusto on passivoituna, et p��se t�ll�in takaisin!';
$lang['Acct_activation'] = 'K�ytt�j�tunnukset aktivoi';
$lang['Acc_None'] = 'Ei kukaan'; // These three entries are the type of activation
$lang['Acc_User'] = 'K�ytt�j�';
$lang['Acc_Admin'] = 'Yll�pito';

$lang['Abilities_settings'] = 'K�ytt�jien ja foorumien perusasetukset';
$lang['Max_poll_options'] = '��nestysvaihtoehtojen maksimi lukum��r�';
$lang['Flood_Interval'] = 'Ylivuoto (flood) tauko';
$lang['Flood_Interval_explain'] = 'Kuinka monta sekuntia k�ytt�j�n pit�� odottaa viestien l�hetysten v�lill�'; 
$lang['Board_email_form'] = 'S�hk�postin k�ytt� sivuston v�lityksell�';
$lang['Board_email_form_explain'] = 'K�ytt�j�t l�hett�v�t toisilleen s�hk�postia sivuston v�lityksell�';
$lang['Topics_per_page'] = 'Aiheita sivulla';
$lang['Posts_per_page'] = 'Viestej� sivulla';
$lang['Hot_threshold'] = 'Suositun viestin raja';
$lang['Default_style'] = 'Oletustyyli';
$lang['Override_style'] = 'Ohita k�ytt�j�n m��rittelem� tyyli';
$lang['Override_style_explain'] = 'Korvaa k�ytt�j�n tyyli oletustyylill�';
$lang['Default_language'] = 'Oletuskieli';
$lang['Date_format'] = 'P�iv�yksen muoto';
$lang['System_timezone'] = 'J�rjestelm�n aikavy�hyke';
$lang['Enable_gzip'] = 'Salli GZip pakkaus';
$lang['Enable_prune'] = 'Salli Foorumien siivous';
$lang['Allow_HTML'] = 'Salli HTML';
$lang['Allow_BBCode'] = 'Salli BBCode';
$lang['Allowed_tags'] = 'Sallitut HTML tagit';
$lang['Allowed_tags_explain'] = 'Erota tagit pilkuilla';
$lang['Allow_smilies'] = 'Salli hymi�t';
$lang['Smilies_path'] = 'Tallennuspolku hymi�ille';
$lang['Smilies_path_explain'] = 'Polku phpBB juurihakemiston alla, esim. images/smilies';
$lang['Allow_sig'] = 'Salli allekirjoitukset';
$lang['Max_sig_length'] = 'Allekirjoituksen maksimipituus';
$lang['Max_sig_length_explain'] = 'K�ytt�j�n allekirjoituksen maksimi merkkim��r�';
$lang['Allow_name_change'] = 'Salli k�ytt�j�tunnuksen vaihto';

$lang['Avatar_settings'] = 'Avatar asetukset';
$lang['Allow_local'] = 'Salli avatar galleria';
$lang['Allow_remote'] = 'Salli et�-avatarit';
$lang['Allow_remote_explain'] = 'Avatarit, jotka on linkattu toiselta sivustolta';
$lang['Allow_upload'] = 'Salli avatarin lataus';
$lang['Max_filesize'] = 'Avatar tiedoston maksimi koko';
$lang['Max_filesize_explain'] = 'Ladatuille avatar tiedostoille';
$lang['Max_avatar_size'] = 'Avatarin maksimikoko';
$lang['Max_avatar_size_explain'] = '(Korkeus x leveys pikselein�)';
$lang['Avatar_storage_path'] = 'Avatarien tallennuspolku';
$lang['Avatar_storage_path_explain'] = 'Polku phpBB juurihakemiston alla, esim. images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar Gallerian polku';
$lang['Avatar_gallery_path_explain'] = ' Polku phpBB juurihakemiston alle valmiiksi tallennetuille kuville, esim. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA asetukset';
$lang['COPPA_fax'] = 'COPPA Faksi numero';
$lang['COPPA_mail'] = 'COPPA postiosoite';
$lang['COPPA_mail_explain'] = 'T�h�n osoitteeseen huoltajat l�hett�v�t COPPA rekister�inti-ilmoitukset';

$lang['Email_settings'] = 'S�hk�posti asetukset';
$lang['Admin_email'] = 'Hallinnon s�hk�postiosoite';
$lang['Email_sig'] = 'S�hk�posti allekirjoitus';
$lang['Email_sig_explain'] = 'T�m� teksti liitet��n kaikkiin t�m�n sivuston l�hett�miin s�hk�posteihin';
$lang['Use_SMTP'] = 'K�yt� SMTP serveri� s�hk�postiin';
$lang['Use_SMTP_explain'] = 'Vastaa kyll�, jos haluat l�hett�� s�hk�postin nimetyn palvelimen kautta, paikallisen mail toiminnon sijasta';
$lang['SMTP_server'] = 'SMTP serverin osoite';
$lang['SMTP_username'] = 'SMTP k�ytt�j�tunnus';
$lang['SMTP_username_explain'] = 'Anna k�ytt�j�tunnus vain jos smtp palvelin vaatii sit�';
$lang['SMTP_password'] = 'SMTP salasana';
$lang['SMTP_password_explain'] = 'Anna salasana vain jos smtp palvelin vaatii sit�';

$lang['Disable_privmsg'] = 'Yksityiset viestit';
$lang['Inbox_limits'] = 'Maks. viestit Saapunut kansiossa';
$lang['Sentbox_limits'] = 'Maks. viestit L�hetetyt kansiossa';
$lang['Savebox_limits'] = 'Maks. viestit Tallennetut kansiossa';

$lang['Cookie_settings'] = 'Cookie asetukset'; 
$lang['Cookie_settings_explain'] = 'Kuinka selaimelle l�hetett�v�t cookiet m��ritell��n. Yleens� oletusarvot ovat riitt�vi�. Jos n�it� on tarvetta muuttaa, tee se huolella. V��r�t asetukset voivat est�� k�ytt�jien kirjautumisen.';
$lang['Cookie_domain'] = 'Cookie domain';
$lang['Cookie_name'] = 'Cookie nimi';
$lang['Cookie_path'] = 'Cookie polku';
$lang['Cookie_secure'] = 'Suojattu cookie  [ https ]';
$lang['Cookie_secure_explain'] = 'Jos palvelimesi toimii SSL:n kautta aktivoi t�m�, muussa tapauksessa j�t� pois k�yt�st�';
$lang['Session_length'] = 'Istunnon pituus [ sekunteja ]';


//
// Forum Management
//
$lang['Forum_admin'] = 'Foorumien hallinta';
$lang['Forum_admin_explain'] = 'T�ll� sivulla voit lis�t�, poistaa, muokata, j�rjestell� ja synkronoida kategorioita ja foorumeita';
$lang['Edit_forum'] = 'Muokkaa foorumia';
$lang['Create_forum'] = 'Luo uusi foorumi';
$lang['Create_category'] = 'Luo uusi kategoria';
$lang['Remove'] = 'Poista';
$lang['Action'] = 'Toiminta';
$lang['Update_order'] = 'P�ivit� j�rjestys';
$lang['Config_updated'] = 'Foorumien konfigurointitiedot p�ivitetty onnistuneesti';
$lang['Edit'] = 'Muokkaa';
$lang['Delete'] = 'Poista';
$lang['Move_up'] = 'Siirr� yl�sp�in';
$lang['Move_down'] = 'Siirr� alasp�in';
$lang['Resync'] = 'Synkronoi';
$lang['No_mode'] = 'Toimintoa ei asetettu';
$lang['Forum_edit_delete_explain'] = 'Alapuolella olevalla lomakkeella voit muokata kaikkia foorumien yleisi� toimintoja. Muihin konfigurointitietoihin p��set sivun vasemman reunan linkeist�';

$lang['Move_contents'] = 'Siirr� kaikki sis�lt�';
$lang['Forum_delete'] = 'Poista foorumi';
$lang['Forum_delete_explain'] = 'Alapuolella olevalla lomakkeella voit poistaa foorumin (tai kategorian) ja voit m��ritell� mihin haluat siirt�� foorumin kaikki aiheet (tai foorumit).';

$lang['Status_locked'] = 'Lukittu';
$lang['Status_unlocked'] = 'Avoin';
$lang['Forum_settings'] = 'Yleiset foorumin asetukset';
$lang['Forum_name'] = 'Foorumin nimi';
$lang['Forum_desc'] = 'Kuvaus';
$lang['Forum_status'] = 'Foorumin status';
$lang['Forum_pruning'] = 'Autosiivous';

$lang['prune_freq'] = 'Tarkista aiheiden ik� joka';
$lang['prune_days'] = 'Poista aiheet, joihin ei ole kirjoitettu';
$lang['Set_prune_data'] = 'Olet m��ritellyt automaattisen siivouksen t�lle foorumille mutta et ole antanut siivoustiheytt� tai p�ivien lukum��r��. Ole hyv� ja anna tiedot';

$lang['Move_and_Delete'] = 'Siirr� ja poista';

$lang['Delete_all_posts'] = 'Poista kaikki viestit';
$lang['Nowhere_to_move'] = 'Ei ole paikkaa johon siirt��';

$lang['Edit_Category'] = 'Muokkaa kategoriaa';
$lang['Edit_Category_explain'] = 'T�ll� lomakkeella m��ritell��n kategorian nimi.';

$lang['Forums_updated'] = 'Foorumi- ja kategoriatiedot p�ivitetty onnistuneesti';

$lang['Must_delete_forums'] = 'Kaikki foorumit on poistettava ennen kuin t�m� kategoria voidaan poistaa';

$lang['Click_return_forumadmin'] = 'Klikkaa %st�st�%s palataksesi foorumien hallintaan';


//
// Smiley Management
//
$lang['smiley_title'] = 'Hymi�iden hallinta';
$lang['smile_desc'] = 'T�ll� sivulla voit lis�t�, poistaa ja muokata hymi�it�, joita k�ytt�j�t voivat k�ytt�� tavallisissa ja yksityisiss� viesteiss�.';

$lang['smiley_config'] = 'Hymi�iden konfigurointi';
$lang['smiley_code'] = 'Hymi�n koodi';
$lang['smiley_url'] = 'Hymi�n kuvatiedosto';
$lang['smiley_emot'] = 'Hymi�n Emotio';
$lang['smile_add'] = 'Lis�� uusi hymi�';
$lang['Smile'] = 'Hymi�';
$lang['Emotion'] = 'Emotio';

$lang['Select_pak'] = 'Valitse kokoelma (.pak) tiedosto';
$lang['replace_existing'] = 'Korvaa olemassa oleva hymi�';
$lang['keep_existing'] = 'S�ilyt� olemassa oleva hymi�';
$lang['smiley_import_inst'] = 'Sinun pit�� purkaa hymi� kokoelma ja ladata kaikki tiedostot oikeaan hymi�-hakemistoon. Valitse sitten oikeat tiedot t�ll� lomakkeella lukeaksesi sis��n hymi�kokoelman.';
$lang['smiley_import'] = 'Hymi�kokoelman sis��nluku';
$lang['choose_smile_pak'] = 'Valitse hymi�kokoelman .pak tiedosto';
$lang['import'] = 'Lue sis��n hymi�t';
$lang['smile_conflicts'] = 'Mit� pit�� tehd� mahdollisissa p��llekk�isyyksiss�';
$lang['del_existing_smileys'] = 'Poista olemassa olevat hymi�t ennen sis��n lukua';
$lang['import_smile_pack'] = 'Lue sis��n hymi�kokoelma';
$lang['export_smile_pack'] = 'Luo hymi�kokoelma';
$lang['export_smiles'] = 'Luodaksesi hymi�kokoelman nykyisist� hymi�ist�, klikkaa %st�st�%s siirt��ksesi hymi� (smiles.pak) tiedoston. Nime� tiedosto s�ilytt�en .pak tarkenne. Luo zip tiedosto joka sis�lt�� kaikki hymi�tiedostot ja t�m�n .pak konfigurointi tiedoston.';

$lang['smiley_add_success'] = 'Hymi�n lis�ys onnistui';
$lang['smiley_edit_success'] = 'Hymi�n p�ivitys onnistui';
$lang['smiley_import_success'] = 'Hymi�kokoelman sis��nluku onnistui!';
$lang['smiley_del_success'] = 'Hymi�n poisto onnistui';
$lang['Click_return_smileadmin'] = 'Klikkaa %st�st�%s palataksesi hymi�iden hallintaan';


//
// User Management
//
$lang['User_admin'] = 'K�ytt�jien hallinta';
$lang['User_admin_explain'] = 'T�ss� voit muuttaa k�ytt�j�n tietoja ja joitain tiettyj� asetuksia. Muokataksesi k�ytt�j�n oikeuksia, k�yt� k�ytt�jien ja ryhmien hallintaan tarkoitettua ty�kalua.';

$lang['Look_up_user'] = 'N�yt� k�ytt�j�';

$lang['Admin_user_fail'] = 'K�ytt�j�tietoja ei voitu p�ivitt��.';
$lang['Admin_user_updated'] = 'K�ytt�j�tietojen p�ivitys onnistui.';
$lang['Click_return_useradmin'] = 'Klikkaa %st�st�%s palataksesi k�ytt�jien hallintaan';

$lang['User_delete'] = 'Poista t�m� k�ytt�j�';
$lang['User_delete_explain'] = 'Klikkaa t�st� poistaaksesi t�m� k�ytt�j�, toimintoa ei voi peruuttaa.';
$lang['User_deleted'] = 'K�ytt�j�n poisto onnistui.';

$lang['User_status'] = 'K�ytt�j� on aktiivinen';
$lang['User_allowpm'] = 'Yksityiset viestit';
$lang['User_allowavatar'] = 'Avatarin k�ytt�';

$lang['Admin_avatar_explain'] = 'T�st� n�et ja voit poistaa k�ytt�j�n nykyisen avatarin.';

$lang['User_special'] = 'Yll�pidon erikoiskent�t';
$lang['User_special_explain'] = 'N�it� kentti� ei tavallinen k�ytt�j� voi muuttaa. T�ss� voit m��ritell� k�ytt�j�n statuksen ja muita asetuksia, joita ei sallita tavallisille k�ytt�jille.';


//
// Group Management
//
$lang['Group_administration'] = 'Ryhmien hallinta';
$lang['Group_admin_explain'] = 'T�ll� lomakkeella voit hallinnoida kaikkia k�ytt�j�ryhmi�. Voit poistaa, luoda ja muokata ryhmi�. Voit valita moderaattorit, muuttaa avoin/suljettu statusta ja m��ritell� ryhm�n nimen sek� kuvauksen';
$lang['Error_updating_groups'] = 'Ryhmien p�ivityksess� tapahtui virhe';
$lang['Updated_group'] = 'Ryhm�n p�ivitys onnistui';
$lang['Added_new_group'] = 'Uuden ryhm�n luonti onnistui';
$lang['Deleted_group'] = 'Ryhm�n poisto onnistui';
$lang['New_group'] = 'Luo uusi ryhm�';
$lang['Edit_group'] = 'Muokkaa ryhm��';
$lang['group_name'] = 'Ryhm�n nimi';
$lang['group_description'] = 'Ryhm�n kuvaus';
$lang['group_moderator'] = 'Ryhm�n moderaattori';
$lang['group_status'] = 'Ryhm�n status';
$lang['group_open'] = 'Avoin ryhm�';
$lang['group_closed'] = 'Suljettu ryhm�';
$lang['group_hidden'] = 'Piilotettu ryhm�';
$lang['group_delete'] = 'Poista ryhm�';
$lang['group_delete_check'] = 'Poista t�m� ryhm�';
$lang['submit_group_changes'] = 'Tallenna muutokset';
$lang['reset_group_changes'] = 'Resetoi muutokset';
$lang['No_group_name'] = 'Ryhm�lle on annettava nimi';
$lang['No_group_moderator'] = 'Ryhm�lle on m��ritett�v� moderaattori';
$lang['No_group_mode'] = 'Ryhm�lle on m��ritelt�v� onko se avoin vai suljettu';
$lang['No_group_action'] = 'Toimintoa ei ole m��ritelty';
$lang['delete_group_moderator'] = 'Poistetaanko ryhm�n entinen moderaattori?';
$lang['delete_moderator_explain'] = 'Jos muutat ryhm�n moderaattoria laita rasti t�h�n ruutuun poistaaksesi vanhan moderaattoritiedon. Muussa tapauksessa �l� laita raksia ja k�ytt�j�st� tulee tavallinen ryhm�n j�sen.';
$lang['Click_return_groupsadmin'] = 'Klikkaa %st�st�%s palataksesi ryhm�n hallintaan.';
$lang['Select_group'] = 'Valitse ryhm�';
$lang['Look_up_group'] = 'N�yt� ryhm�';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Foorumin siivous';
$lang['Forum_Prune_explain'] = 'T�ll� poistetaan kaikki aiheet, joihin ei ole kirjoitettu antamasi p�iv�rajauksen sis�ll�. Jos et anna rajausta, niin kaikki aiheet poistetaan. Aiheita, joissa on aktiivinen ��nestys ja ilmoitustyyppisi� aiheita ei poisteta. N�m� aiheet on poistettava k�sin.';
$lang['Do_Prune'] = 'Suorita siivous';
$lang['All_Forums'] = 'Kaikki foorumit';
$lang['Prune_topics_not_posted'] = 'Siivoa aiheet, joissa ei ole vastauksia annetun ajan sis�ll�';
$lang['Topics_pruned'] = 'Siivottuja aiheita';
$lang['Posts_pruned'] = 'Siivottuja viestej�';
$lang['Prune_success'] = 'Foorumien siivous onnistui';


//
// Word censor
//
$lang['Words_title'] = 'Sanojen sensurointi';
$lang['Words_explain'] = 'T�st� hallintapaneelista voi lis�t�, muokata ja poistaa sanoja jotka automaattisesti sensuroidaan foorumeissa. Lis�ksi k�ytt�j�tunnuksissa ei sallita n�it� sanoja. Jokerit (*) ovat hyv�ksyttyj� sana kent�ss�, esim. *testi* t�sm�� kestotestin kanssa, test* t�sm�� testaus kanssa, *testi t�sm�� epotesti kanssa.';
$lang['Word'] = 'Sana';
$lang['Edit_word_censor'] = 'Muokkaa sanan sensuuria';
$lang['Replacement'] = 'Korvaus';
$lang['Add_new_word'] = 'Lis�� uusi sana';
$lang['Update_word'] = 'P�ivit� sanasensuuri';

$lang['Must_enter_word'] = 'Sinun t�ytyy antaa sana ja sen korvike';
$lang['No_word_selected'] = 'Sanaa ei ole valittu muokattavaksi';

$lang['Word_updated'] = 'Valittu sanasensuuri on p�ivitetty';
$lang['Word_added'] = 'Sanasensuuri on lis�tty';
$lang['Word_removed'] = 'Valittu sanasensuuri on poistettu';

$lang['Click_return_wordadmin'] = 'Klikkaa %st�st�%s palataksesi Sanojen sensurointiin';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'T�st� voit l�hett�� s�hk�postia joko kaikille k�ytt�jille tai tietyn ryhm�n k�ytt�jille. Yll�pidon s�hk�postiosoitteeseen l�hetet��n s�hk�posti ja piilokopio kaikille vastaanottajille. Jos l�het�t isolle ryhm�lle vastaanottajia ole k�rsiv�llinen �l�k� keskeyt� toimintoa. On normaalia, ett� joukkopostitus kest�� pitk��n. Saat ilmoituksen kun komento on suoritettu.';
$lang['Compose'] = 'S�hk�postin luonti'; 

$lang['Recipients'] = 'Vastaanottajat'; 
$lang['All_users'] = 'Kaikki k�ytt�j�t';

$lang['Email_successfull'] = 'Viestisi on l�hetetty';
$lang['Click_return_massemail'] = 'Klikkaa %st�st�%s palataksesi s�hk�postin l�hetykseen';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Tittelien hallinta';
$lang['Ranks_explain'] = 'T�ll� lomakkeella voit muokata, tarkastaa ja poistaa titteleit�. Voit my�s muodostaa erityisi� titteleit� joita voidaan liitt�� k�ytt�jiin k�ytt�j�tietojen yll�pidon kautta';

$lang['Add_new_rank'] = 'Lis�� uusi titteli';

$lang['Rank_title'] = 'Tittelin nimi';
$lang['Rank_special'] = 'M��rit� erikoistitteliksi';
$lang['Rank_minimum'] = 'Minimi viestien m��r�';
$lang['Rank_maximum'] = 'Maksimi viestien m��r�';
$lang['Rank_image'] = 'Tittelin kuvake (Suhteessa phpBB2 juurihakemistoon)';
$lang['Rank_image_explain'] = 'T�ll� voit m��ritell� pienen kuvakkeen tittelille';

$lang['Must_select_rank'] = 'Sinun t�ytyy valita titteli';
$lang['No_assigned_rank'] = 'Erikoistitteleit� ei asetettu';

$lang['Rank_updated'] = 'Tittelin p�ivitys onnistui';
$lang['Rank_added'] = 'Tittelin lis�ys onnistui';
$lang['Rank_removed'] = 'Tittelin poisto onnistui';
$lang['No_update_ranks'] = 'Titteli on poistettu mutta k�ytt�j�tietoja, joilla titteli oli, ei ole p�ivitetty. N�iden k�ytt�jien tiedot on muutettava k�sin';

$lang['Click_return_rankadmin'] = 'Klikkaa %st�st�%s palataksesi Tittelien hallintaan';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Kiellettyjen k�ytt�j�tunnusten hallinta';
$lang['Disallow_explain'] = 'T�ss� voit m��ritell� k�ytt�j�tunnukset, joita ei sallita. Voit k�ytt�� k�ytt�j�tunnuksen m��rittelyss� jokerimerkki� *.  Huomaa, ett� et voi kielt�� k�ytt�j�nime�, joka on jo rekister�ity, vaan t�llainen k�ytt�j�tunnus t�ytyy ensin poistaa ja lis�t� sitten kiellettyjen listalle';

$lang['Delete_disallow'] = 'Poista';
$lang['Delete_disallow_title'] = 'Poista kielletty k�ytt�j�tunnus';
$lang['Delete_disallow_explain'] = 'Voit poistaa kielletyn k�ytt�j�tunnuksen valitsemalla k�ytt�j�tunnus listalta ja klikkaamalla poista';

$lang['Add_disallow'] = 'Lis��';
$lang['Add_disallow_title'] = 'Lis�� kielletty k�ytt�j�tunnus';
$lang['Add_disallow_explain'] = 'Voit kielt�� k�ytt�j�tunnuksen ja k�ytt�� jokerimerkki� * korvaamaan mink� tahansa merkin';

$lang['No_disallowed'] = 'Ei kiellettyj� k�ytt�j�tunnuksia';

$lang['Disallowed_deleted'] = 'Kielletty k�ytt�j�tunnus on poistettu';
$lang['Disallow_successful'] = 'Kielletty k�ytt�j�tunnus on lis�tty';
$lang['Disallowed_already'] = 'Antamaasi tunnusta ei voida kielt��. Se joko on jo listalla, sis�ltyy sensuroituihin sanoihin tai k�ytt�j�tunnus on jo olemassa';

$lang['Click_return_disallowadmin'] = 'Klikkaa %st�st�%s palataksesi Kiellettyjen k�ytt�j�tunnusten hallintaan';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Tyylien hallinta';
$lang['Styles_explain'] = 'T�ss� voit lis�t�, poistaa ja muokata tyylej� (malleja ja teemoja) joita k�ytt�j�t voivat k�ytt��';
$lang['Styles_addnew_explain'] = 'Seuraava listaus sis�lt�� kaikki teemat, jotka ovat k�ytett�viss� malleille (templates) joita sinulla on. T�m�n listan kohteita ei ole asennettu viel� phpBB tietokantaan. Lis�t�ksesi teeman klikkaa vain asenna linkki� kohteen vieress�';

$lang['Select_template'] = 'Valitse malli';

$lang['Style'] = 'Tyyli';
$lang['Template'] = 'Malli';
$lang['Install'] = 'Asenna';
$lang['Download'] = 'Lataa';

$lang['Edit_theme'] = 'Muokkaa teemaa';
$lang['Edit_theme_explain'] = 'Alapuolella olevalla lomakkeella voit muokata valitun teeman asetuksia.';

$lang['Create_theme'] = 'Luo teema';
$lang['Create_theme_explain'] = 'K�yt� alla olevaa lomaketta luodaksesi uuden teeman valitulle mallille. Kun m��rittelet v�rej� (jotka pit�� antaa heksalukuina) et saa k�ytt�� alussa #, Esim. CCCCCC on oikein, #CCCCCC on v��rin';

$lang['Export_themes'] = 'Siirr� teemat';
$lang['Export_explain'] = 'T�ll� lomakkeella voit siirt�� teematiedot valitusta mallista. Valitse malli alla olevasta listasta ja komentojono luo teeman konfigurointitiedoston ja pyrkii tallentamaan sen valitun mallin hakemistoon. Jos tiedostoa ei voi tallentaa annetaan sinulle mahdollisuus ladata tiedosto. Jotta komentojono voisi tallentaa tiedoston on sinun annettava kirjoitusoikeus web palvelimella valittuun mallin hakemistoon. Lis�tietoja phpBB 2 k�ytt�j�n ohjeessa.';

$lang['Theme_installed'] = 'Valittu teema on asennettu onnistuneesti';
$lang['Style_removed'] = 'Valittu tyyli on poistettu tietokannasta. Poistaaksesi kokonaan tyylin j�rjestelm�st� t�ytyy sinun poistaa tyylitiedosto mallien hakemistosta.';
$lang['Theme_info_saved'] = 'Teeman tiedot valitussa mallissa on tallennettu. Sinun t�ytyy nyt palauttaa k�ytt�oikeudeksi pelkk� luku (read-only) tiedostoon theme_info.cfg (ja tarvittaessa valittuun mallihakemistoon)';
$lang['Theme_updated'] = 'Valittu teema on p�ivitetty. Siirr� nyt uudet teeman asetukset';
$lang['Theme_created'] = 'Teema luotu. Siirr� nyt teema konfigurointitiedostoon varmuuden vuoksi, tai k�ytett�v�ksi my�s muualla';

$lang['Confirm_delete_style'] = 'Oletko varma, ett� haluat poistaa t�m�n tyylin';

$lang['Download_theme_cfg'] = 'Siirrossa ei voitu kirjoittaa teeman m��rittelytiedostoon. Klikkaa kuvaketta alapuolella ladataksesi t�m�n tiedoston selaimesi avulla. Kun olet ladannut tiedoston voit siirt�� sen hakemistoon joka sis�lt�� mallitiedostot. Voit sen j�lkeen pakata tiedostot jakeluun tai k�ytt��n muuaalla halutessasi';
$lang['No_themes'] = 'Valitsemassasi mallissa ei ole teemoja. Luodaksesi uuden teeman klikkaa Luo Uusi linkki� sivun vasemmassa reunassa';
$lang['No_template_dir'] = 'Mallihakemistoa ei saatu avattua. Sen luku voi olla estetty selaimelta tai hakemisto voi puuttua';
$lang['Cannot_remove_style'] = 'Et voi poistaa tyyli�, koska se on t�ll� hetkell� oletustyyli. Ole hyv� ja vaihda oletustyyli ja yrit� uudestaan.';
$lang['Style_exists'] = 'Annetun niminen tyyli on jo olemassa, ole hyv� ja anna toinen nimi.';

$lang['Click_return_styleadmin'] = 'Klikkaa %st�st�%s palataksesi Tyylien hallintaan';

$lang['Theme_settings'] = 'Teemojen asetukset';
$lang['Theme_element'] = 'Teeman elementti';
$lang['Simple_name'] = 'Yksinkertainen nimi';
$lang['Value'] = 'Arvo';
$lang['Save_Settings'] = 'Tallenna asetukset';

$lang['Stylesheet'] = 'CSS tyylisivu';
$lang['Background_image'] = 'Taustakuva';
$lang['Background_color'] = 'Taustan v�ri';
$lang['Theme_name'] = 'Teeman nimi';
$lang['Link_color'] = 'Linkin v�ri';
$lang['Text_color'] = 'Tekstin v�ri';
$lang['VLink_color'] = 'K�ytetyn linkin v�ri';
$lang['ALink_color'] = 'Aktiivisen linkin v�ri';
$lang['HLink_color'] = 'Hover linkin v�ri';
$lang['Tr_color1'] = 'Taulukon rivin v�ri 1';
$lang['Tr_color2'] = 'Taulukon rivin v�ri 2';
$lang['Tr_color3'] = 'Taulukon rivin v�ri 3';
$lang['Tr_class1'] = 'Taulukon rivin luokka 1';
$lang['Tr_class2'] = 'Taulukon rivin luokka 2';
$lang['Tr_class3'] = 'Taulukon rivin luokka 3';
$lang['Th_color1'] = 'Taulukon otsikon v�ri 1';
$lang['Th_color2'] = 'Taulukon otsikon v�ri 2';
$lang['Th_color3'] = 'Taulukon otsikon v�ri 3';
$lang['Th_class1'] = 'Taulukon otsikon luokka 1';
$lang['Th_class2'] = 'Taulukon otsikon luokka 2';
$lang['Th_class3'] = 'Taulukon otsikon luokka 3';
$lang['Td_color1'] = 'Taulukon solun v�ri 1';
$lang['Td_color2'] = 'Taulukon solun v�ri 2';
$lang['Td_color3'] = 'Taulukon solun v�ri 3';
$lang['Td_class1'] = 'Taulukon solun luokka 1';
$lang['Td_class2'] = 'Taulukon solun luokka 2';
$lang['Td_class3'] = 'Taulukon solun luokka 3';
$lang['fontface1'] = 'Fontti 1';
$lang['fontface2'] = 'Fontti 2';
$lang['fontface3'] = 'Fontti 3';
$lang['fontsize1'] = 'Fontin koko 1';
$lang['fontsize2'] = 'Fontin koko 2';
$lang['fontsize3'] = 'Fontin koko 3';
$lang['fontcolor1'] = 'Font v�ri 1';
$lang['fontcolor2'] = 'Font v�ri 2';
$lang['fontcolor3'] = 'Font v�ri 3';
$lang['span_class1'] = 'V�listys 1';
$lang['span_class2'] = 'V�listys 2';
$lang['span_class3'] = 'V�listys 3';
$lang['img_poll_size'] = '��nestyksen kuvakkeen koko [px]';
$lang['img_pm_size'] = 'Yksityisviestin statuksen koko [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Tervetuloa phpBB 2 asennukseen';
$lang['Initial_config'] = 'Perus konfiguraatio';
$lang['DB_config'] = 'Tietokanta konfiguraatio';
$lang['Admin_config'] = 'Yll�pidon konfiguraatio';
$lang['continue_upgrade'] = 'Kun olet ladannut konfigurointitiedoston paikalliselle koneelle voit klikata\"jatka p�ivityst�\" painiketta alapuolella jatkaaksesi p�ivityst�.  Ole hyv� ja odota konfigurointitiedoston lataamista kunnes p�ivitys on valmis.';
$lang['upgrade_submit'] = 'Jatka p�ivityst�';

$lang['Installer_Error'] = 'Asennuksen yhteydess� tapahtui virhe';
$lang['Previous_Install'] = 'Aikaisempi asennus l�ydetty';
$lang['Install_db_error'] = 'Tietokannan p�ivityksess� tapahtui virhe';

$lang['Re_install'] = 'Aikaisempi asennus on yh� aktiivinen. <br /><br />Jos haluat asentaa uudestaan phpBB 2:n, klikkaa Yes nappulaa alapuolella. Huomaa kuitenkin, ett� n�in menet�t kaiken olemassa olevan datan, varmuuskopiointia ei suoriteta! Yll�pit�j�n k�ytt�j�tunnus ja salasana joita olet k�ytt�nyt sis��n kirjautumiseen luodaan uudestaan asennuksen j�lkeen, muita asetuksia ei s�ilytet�. <br /><br />Harkitse tarkoin ennen kuin klikkaat Yes!';

$lang['Inst_Step_0'] = 'Kiitos, ett� valintasi on phpBB 2. Jotta asennus voidaan suorittaa loppuun, t�yt� alla olevat yksityiskohdat. Huomaa, ett� tietokannan johon asennus tehd��n,  tulee olla jo olemassa. Jos asennat tietokantaan joka k�ytt�� ODBC:ta, esim. MS Access sinun t�ytyy ensin luoda DSN sille.';

$lang['Start_Install'] = 'Aloita asennus';
$lang['Finish_Install'] = 'Lopeta asennus';

$lang['Default_lang'] = 'Sivuston oletuskieli';
$lang['DB_Host'] = 'Tietokantapalvelimen nimi / DSN';
$lang['DB_Name'] = 'Tietokannan nimi';
$lang['DB_Username'] = 'Tietokannan k�ytt�j�tunnus';
$lang['DB_Password'] = 'Tietokannan salasana';
$lang['Database'] = 'Tietokanta';
$lang['Install_lang'] = 'Valitse asennuskieli';
$lang['dbms'] = 'Tietokannan tyyppi';
$lang['Table_Prefix'] = 'Etuliite tauluille tietokannassa';
$lang['Admin_Username'] = 'Yll�pit�j�n k�ytt�j�tunnus';
$lang['Admin_Password'] = 'Yll�pit�j�n salasana';
$lang['Admin_Password_confirm'] = 'Yll�pit�j�n salasana [ Vahvista ]';

$lang['Inst_Step_2'] = 'Yll�pit�j�n k�ytt�j�tunnus on luotu. T�ss� vaiheessa perusasennus on valmis. Nyt saat seuraavan sivun jolla voit hallinnoida uutta asennustasi. Ole hyv� ja varmista peruskonfiguraation tiedot ja tee tarvittavat muutokset. Kiitoksia, ett� valitsit phpBB 2:n.';

$lang['Unwriteable_config'] = 'Konfigurointitiedostosi ei ole kirjoituskelpoinen t�ll� hetkell�. Kopio konfigurointitiedostosta ladataan sinulle kun klikkaat painiketta alapuolella. Sinun tulee siirt�� t�m� tiedosto samaan hakemistoon kuin phpBB 2. Kun t�m� on tehty kirjaudu sis��n yll�pit�j�n k�ytt�j�tunnuksella ja salasanalla ja k�y yll�pidon hallintasivuilla  (Linkki ilmestyy sivun alareunaan sis��n kirjautumisen j�lkeen) tarkistaaksesi yleiset asetukset. Kiitos kun valitsit phpBB 2:n.';
$lang['Download_config'] = 'Lataa konfigurointitiedosto';

$lang['ftp_choose'] = 'Valitse tiedonsiirtotapa';
$lang['ftp_option'] = '<br />Koska my�s FTP on mahdollista t�ss� PHP versiossa sinulle voidaan antaa mahdollisuus automaattisesti siirt�� ftp:ll� tiedosto oikeaan paikkaan.';
$lang['ftp_instructs'] = 'Olet valinnut tiedoston siirrett�v�ksi automaattisesti ftp:ll�. Ole hyv� ja anna alla kysytyt tiedot, jotta tiedonsiirto onnistuu.  Huomioi, ett� FTP polun tulee olla tarkka polku ftp:ll� phpBB2 asennushakemistoon kuten siirt�isit mit� tahansa tietoa ftp:ll�.';
$lang['ftp_info'] = 'Anna FTP tiedot ';
$lang['Attempt_ftp'] = 'Yritet��n siirt�� konfigurointitiedosto ftp:ll�';
$lang['Send_file'] = 'L�het� tiedosto minulle ja siirr�n sen ftp:ll� manuaalisesti';
$lang['ftp_path'] = 'FTP polku phpBB 2:lle';
$lang['ftp_username'] = 'FTP k�ytt�j�tunnus';
$lang['ftp_password'] = 'FTP salasana';
$lang['Transfer_config'] = 'Aloita siirto';
$lang['NoFTP_config'] = 'Konfigurointitiedoston ftp siirto ei onnistunut. Ole hyv� ja lataa konfigurointitiedosto ja k�yt� ftp:t� manuaalisesti.';

$lang['Install'] = 'Asennus';
$lang['Upgrade'] = 'P�ivitys';


$lang['Install_Method'] = 'Valitse asennustapa';

$lang['Install_No_Ext'] = 'Palvelimen php asetukset eiv�t tue valitsemaasi tietokantaa.';

$lang['Install_No_PCRE'] = 'PhpBB2 tarvitsee moduulin (Perl-Compatible Regular Expressions Module) php:lle jota php asetuksesi eiv�t n�yt� tukevan!';

//
// That's all Folks!
// -------------------------------------------------

?>