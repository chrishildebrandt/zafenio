<?php
/***************************************************************************
 *                            lang_main_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:32:46 bob Exp $
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
$lang['Rules_attach_can'] = '<b>Voit</b> k‰ytt‰‰ foorumissa liitetiedostaja';
$lang['Rules_attach_cannot'] = '<b>Et voi</b> k‰ytt‰‰ foorumissa liitetiedostoja';
$lang['Rules_download_can'] = '<b>Voit</b> ladata tiedostoja foorumista';
$lang['Rules_download_cannot'] = '<b>Et voi</b> ladata tiedostoja foorumista';
$lang['Sorry_auth_view_attach'] = 'Sinulla ei valitettavasti ole oikeuksia katsoa tai ladata t‰t‰ liitett‰';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Kuvaus'; // used in Administration Panel too...
$lang['Downloaded'] = 'Ladattu';
$lang['Download'] = 'Lataa'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Tiedostokoko';
$lang['Viewed'] = 'Katsottu';
$lang['Download_number'] = 'Tiedosto on ladattu tai sit‰ on katsottu %d kertaa'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'Liitetyypin \'%s\' katselut estettiin yll‰pidon toimesta, siksi t‰t‰ liitett‰ ei n‰ytet‰.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Liitteiden l‰hetyksen ohjaus';
$lang['Attach_posting_cp_explain'] = 'Jos napsautat Lis‰‰ liite, n‰et liitteen lis‰ys laatikon.<br />Jos napsautat Lis‰tyt liitteet, n‰et listan jo lis‰tyist‰ liitteist‰ ja voit muokata niit‰.<br />Jos haluat Vaihtaa (Lis‰t‰ uuden version) liitteen, sinun on napsautettava molempia linkkej‰. Lis‰‰ liite normaalisti, sen j‰lkeen ‰l‰ napsauta Lis‰‰ liite, vaan napsauta Lataa uusi versio liitteess‰, jonka haluat vaihtaa.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Lis‰‰ liite';
$lang['Add_attachment_title'] = 'Lis‰‰ liite';
$lang['Add_attachment_explain'] = 'Jos et halua lis‰t‰ liitett‰ viestiisi, j‰t‰ kent‰t tyhj‰ksi';
$lang['File_name'] = 'Tiedoston nimi';
$lang['File_comment'] = 'Tiedoston kommentti';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Lis‰tyt liitteet';
$lang['Options'] = 'Optiot';
$lang['Update_comment'] = 'P‰ivit‰ kommentti';
$lang['Delete_attachments'] = 'Poista liitteet';
$lang['Delete_attachment'] = 'Poista liite';
$lang['Delete_thumbnail'] = 'Poista esikatselukuva';
$lang['Upload_new_version'] = 'Lis‰‰ uusi versio';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s on virheellinen tiedostonnimi'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'Liite on liian iso.<br />Ei saatu selville PHP:ss‰ m‰‰ritelty‰ maksimi kokoa.<br />Liite Mod  ei saanut selville php.ini tiedostossa m‰‰ritelty‰ maksimi tiedoston kokoa.';
$lang['Attachment_php_size_overrun'] = 'Tiedosto on liian suuri.<br />Suurin sallittu koko: %d MB.<br />Huomaa, ett‰ t‰m‰ koko on m‰‰ritelty php.ini tiedostossa, mik‰ tarkoittaa, ett‰ se on asetettu PHP:ss‰ ja Liite Mod ei voi muuttaa t‰t‰ arvoa.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'Tiedostotyyppi‰ %s ei sallita'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Tiedostotyyppi‰ %s ei sallita foorumissa'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Liite on liian suuri.<br />Maksimi koko on: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Valitettavasti kaikkien liitteiden yhteinen maksimitila on jo k‰ytetty. Ota yhteytt‰ yll‰pit‰j‰‰n, jos sinulla on kysytt‰v‰‰.';
$lang['Too_many_attachments'] = 'Liitett‰ ei voida lis‰t‰, koska t‰ss‰ viestiss‰ on jo maksimi sallittu m‰‰r‰ liitteit‰: %d liitett‰'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'Liitteen/Kuvan on oltava v‰hemm‰n kuin %d pikseli‰ leve‰ ja %d pikseli‰ korkea'; 
$lang['General_upload_error'] = 'Lis‰ys virhe: Liitett‰ ei voitu lis‰t‰ hakemistoon %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Sinun on syˆtett‰v‰ arvot \'Lis‰‰ liite\' laatikkoon';
$lang['Error_missing_old_entry'] = 'Litett‰ ei voitu p‰ivitt‰‰, vanhaa liitett‰ ei lˆydetty';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Valitettavasti kaikkien liitteiden maksimikoko Yksityisviesti kansiossasi on saavutettu. Poista joitakin saapuneita/l‰hetettyj‰ liitteit‰.';
$lang['Attach_quota_receiver_pm_reached'] = 'Valitettavasti kaikkien liiteiden maksimikoko \'%s\' yksityisviesti kansiossa on saavutettu. Kerro h‰nelle asiasta, tai odota kunnes h‰n on poistanut osan liitteist‰‰n.';

// Errors -> Download
$lang['No_attachment_selected'] = 'Et ole valinnut liitett‰ ladattavaksi tai katseltavaksi.';
$lang['Error_no_attachment'] = 'Valittua liitett‰ ei en‰‰ ole';

// Delete Attachments
$lang['Confirm_delete_attachments'] = 'Haluatko todella poistaa valitut liitteet?';
$lang['Deleted_attachments'] = 'Valitut liitteet on poistettu.';
$lang['Error_deleted_attachments'] = 'Liitett‰ ei voitu poistaa.';
$lang['Confirm_delete_pm_attachments'] = 'Haluatko todella poistaa kaikki t‰h‰n yksityisviestiin liittyv‰t liitteet?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Liiteominaisuus on pois k‰ytˆst‰.';

$lang['Directory_does_not_exist'] = 'Hakemistoa \'%s\' ei ole tai sit‰ ei lˆydetty.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Tarkista, jos \'%s\' on hakemisto.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Hakemistoon \'%s\' ei voi kirjoittaa. Sinun on luotava latauspolku ja muutettava (chmod) oikeuksiksi 777 (tai muutettava omistajaksi httpd-palvelun omistaja) jotta tiedostoja voidaan tallentaa.<br />Jos sinulla on pelk‰st‰‰nn ftp-oikeudet muuta hakemiston \'Oikeuksiksi\' rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Ei saanut yhteytt‰ FTP palvelimeen: \'%s\'. Tarkista FTP-asetuksesi.';
$lang['Ftp_error_login'] = 'Ei voinut kirjautua FTP-palvelimeen. K‰ytt‰j‰nimi \'%s\' tai salasana on v‰‰r‰. Tarkista FTP-asetuksesi.';
$lang['Ftp_error_path'] = 'Ei voinut k‰ytt‰‰ ftp hekemistoa: \'%s\'. Tarkista FTP-asetuksesi.';
$lang['Ftp_error_upload'] = 'Ei voinut tallettaa tiedostoaja ftp hakemistoon: \'%s\'. Tarkista FTP-asetuksesi.';
$lang['Ftp_error_delete'] = 'Ei voinut poistaa tiedostoja ftp hakemistossa: \'%s\'. Tarkista FTP-asetuksesi.<br />Toinen mahdollinen syy t‰h‰n virheesseen voi olla liitteen puuttuminent, tarkista t‰m‰ ensin varjo liitteist‰.';
$lang['Ftp_error_pasv_mode'] = 'FTP passiivimoodin sallinta/esto ei onnistu';

// Attach Rules Window
$lang['Rules_page'] = 'Liites‰‰nnˆt';
$lang['Attach_rules_title'] = 'Sallitut tiedostotyypit ja niiden koot';
$lang['Group_rule_header'] = '%s -> Latauksen suurin sallittu koko on: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Sallitut tyypit ja koot';
$lang['Note_user_empty_group_permissions'] = 'HUOMAA:<br />Saat normaalisti liitt‰‰ tiedostoja t‰ss‰ foorumissa, <br /> mutta koska mit‰‰n tiedostotyyppi‰ ei ole sallittu k‰ytt‰‰ t‰‰ll‰, <br />et voi liitt‰‰ mit‰‰n. Jos yrit‰t, <br />saat virheilmoituksen.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Lataus rajoitus';
$lang['Pm_quota'] = 'YV rajoitus';
$lang['User_upload_quota_reached'] = 'Valittettavasti olet saavuttanut lataus rajoitus rajan %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'K‰ytt‰j‰n LOP';
$lang['UACP'] = 'K‰ytt‰j‰n liite ohjauspaneeli';
$lang['User_uploaded_profile'] = 'Ladattu: %s';
$lang['User_quota_profile'] = 'Rajoitus: %s';
$lang['Upload_percent_profile'] = '%d%% kaikesta';

// Common Variables
$lang['Bytes'] = 'tavua';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Hae liitteit‰';
$lang['Test_settings'] = 'Testaa asetukset';
$lang['Not_assigned'] = 'Ei m‰‰ritetty';
$lang['No_file_comment_available'] = 'Ei tiedosto kommenttia';
$lang['Attachbox_limit'] = 'Liitelaatikkosi on %d%% t‰ynn‰';
$lang['No_quota_limit'] = 'Ei koko rajoitusta';
$lang['Unlimited'] = 'Rajoittamaton';

?>