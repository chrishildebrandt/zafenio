<?php
/***************************************************************************
 *                            lang_admin_attach.php [English]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_admin_attach.php,v 1.1 2003/02/19 18:32:45 bob Exp $
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
$lang['Control_Panel'] = 'Ohjauspaneeli';
$lang['Shadow_attachments'] = 'Varjoliitteet';
$lang['Forbidden_extensions'] = 'Kielletyt tiedostotyypit';
$lang['Extension_control'] = 'Tiedostotyyppien hallinta';
$lang['Extension_group_manage'] = 'Tiedostotyyppiryhmien hallinta';
$lang['Special_categories'] = 'Erityiskategoriat';
$lang['Sync_attachments'] = 'Synkronoi liitteet';
$lang['Quota_limits'] = 'Kokorajoitukset';

// Attachments -> Management
$lang['Attach_settings'] = 'Liiteasetukset';
$lang['Manage_attachments_explain'] = 'T‰‰ll‰ voit m‰‰ritt‰‰ liitemuutoksen p‰‰asetukset. Jos painat testaa asetukset painiketta, Liitemuutos tekee joitakin j‰rjestelm‰testej‰ varmistaakseen ett‰ muutos toimii kunnolla. Jos tiedostojen latauksen kanssa on ongelmia, aja testi, saadaksesi yksityiskohtaisen virhesanoman.';
$lang['Attach_filesize_settings'] = 'Liiteiden kokoasetukset';
$lang['Attach_number_settings'] = 'Liitteiden lukum‰‰r‰asetukset';
$lang['Attach_options_settings'] = 'Liiteoptiot';

$lang['Upload_directory'] = 'Talletus kansio';
$lang['Upload_directory_explain'] = 'Syˆt‰ suhteellinen polku phpBB2 asennuksesta liitteiden lataus hakemistoon. Esimerkiksi, kirjoita \'files\' jos phpBB2 asennuksesi sijainti on http://www.yourdomain.com/phpBB2 ja liitteiden lataus hakemiston sijainti on http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Liitteiden lis‰ys ikoni';
$lang['Attach_img_path_explain'] = 'T‰m‰ kuva n‰ytet‰‰n liitelinkkien vieress‰ yksitt‰isiss‰ viesteiss‰. J‰t‰ t‰m‰ kentt‰ tyhj‰ksi, jos et halua n‰ytt‰‰ ikonia. Tiedostotyyppiryhmien hallinnan asetus voittaa t‰m‰n asetuksen.';
$lang['Attach_topic_icon'] = 'Liite aihe ikoni';
$lang['Attach_topic_icon_explain'] = 'T‰m‰ kuva n‰ytet‰‰n ennen aiheita, joissa on liitteit‰. J‰t‰ t‰m‰ kentt‰ tyhj‰ksi, jos et halua n‰ytt‰‰ ikonia.';
$lang['Attach_display_order'] = 'Liitteiden n‰yttˆj‰rjestys';
$lang['Attach_display_order_explain'] = 'Voit valita n‰ytet‰‰nkˆ Viestien/Yksityisviestien liitteet tiedoston ajan mukaan laskevassa (Uusin liite ensinm‰isen‰) vai nousevassa j‰rjestyksess‰ (Vanhin liite ensimm‰isen‰).';
$lang['Show_apcp'] = 'N‰yt‰ uusi Liitteiden lis‰yksen ohjauspaneeli';
$lang['Show_apcp_explain'] = 'Valitse n‰ytet‰‰nkˆ Liitteiden lis‰yksen ohjauspaneeli(kyll‰) vai vanha menetelm‰, jossa on kaksi laatikkoa liitteiden lis‰ykseen ja lis‰ttyjen liitteiden muuttamiseen (ei) viestien lis‰ysn‰ytˆll‰. N‰kym‰‰ on vaikea kuvailla, siksi on paras kokeilla.';

$lang['Max_filesize_attach'] = 'Tiedoston koko';
$lang['Max_filesize_attach_explain'] = 'Liitteiden suurin sallittu tiedosto koko. Arvo 0 tarkoittaa \'rajoittamaton\'. Palvelimen konfiguraatio rajoittaa t‰t‰ asetusta. Jos esimerkiksi php konfiguraatio sallii korkeintaan 2 MB tiedostojen latauksen, t‰t‰ ei voida ylitt‰‰ muutoksessa.';
$lang['Attach_quota'] = 'Liitteiden koko rajoitus';
$lang['Attach_quota_explain'] = 'Kaikkien liiteiden k‰ytt‰m‰ suurin mahdollinen tila. Arvo 0 tarkoittaa \'rajoittamaton\'.';
$lang['Max_filesize_pm'] = 'Suurin liitetiedostojen k‰ytt‰m‰ tila yksityisviestien kansiossa';
$lang['Max_filesize_pm_explain'] = 'Suurin liitetiedostojen k‰ytt‰m‰ tila k‰ytt‰j‰n yksityisviesti laatikossa. Arvo 0 tarkoittaa \'rajoittamaton\'.';
$lang['Default_quota_limit'] = 'Oletus koko rajoitus';
$lang['Default_quota_limit_explain'] = 'T‰ss‰ voit asettaa oletus koko rajoituksen, jota automaattisesti k‰ytet‰‰n uusilla k‰ytt‰jill‰ ja k‰ytt‰jill‰ joille ei ole m‰‰ritelty koko rajoitusta. Valinta \'Ei koko rajoitusta\' tarkoittaa ei mit‰‰n rajoitusta, sen sijaan k‰ytet‰‰n oletusasetusta joka on m‰‰ritelty hallintapaneelissa.';

$lang['Max_attachments'] = 'Liitteiden maksimi m‰‰r‰';
$lang['Max_attachments_explain'] = 'Yhdess‰ viestiss‰ sallittujen liitteiden maksimim‰‰r‰.';
$lang['Max_attachments_pm'] = 'Yhdess‰ yksityisviestiss‰ sallittujen liitteiden maksimim‰‰r‰';
$lang['Max_attachments_pm_explain'] = 'M‰‰rit‰ k‰ytt‰j‰n yhdess‰ yksityisviestiss‰ sallittujen liitteiden maksimi m‰‰r‰.';

$lang['Disable_mod'] = 'Poista Liitteiden lis‰ys k‰ytˆst‰';
$lang['Disable_mod_explain'] = 'T‰m‰ valinta on tarkoitettu p‰‰asiassa uusien templatien ja teemojen testaukseen, se ottaa pois k‰ytˆst‰ kaikki liite toiminnot hallintapaneelia lukuunottamatta.';
$lang['PM_Attachments'] = 'Salli liitteet yksityisviesteiss‰';
$lang['PM_Attachments_explain'] = 'Salli/est‰ tiedostojen lis‰ys yksityisviesteihin.';
$lang['Ftp_upload'] = 'Salli FTP lataus';
$lang['Ftp_upload_explain'] = 'Salli/est‰ FTP lataus optio. Jos arvoksi on asetettu kyll‰, sinun on m‰‰ritelt‰v‰ FTP liitteet asetukset ja tiedostojen lataushakemistoa ei en‰‰ k‰ytet‰.';
$lang['Attachment_topic_review'] = 'Haluatko n‰ytt‰‰ liittet aiheen esikatselu ikkunassa ?';
$lang['Attachment_topic_review_explain'] = 'Jos valitset kyll‰, kaikki liitetyt tiedostot n‰ytet‰‰n aiheen esikatseluikkunassa kun l‰het‰t vastauksen.';

$lang['Ftp_server'] = 'FTP lataus palvelin';
$lang['Ftp_server_explain'] = 'T‰ss‰ voit syˆtt‰‰ lataamiseen k‰ytett‰v‰n palvelimen IP-osoitteen FTP-is‰nt‰nimen. Jos j‰t‰t t‰m‰n kent‰n tyhj‰ksi, k‰ytet‰‰n palvelinta jolle phpBB2 on asennettu. Huomaa, ett‰ osoitteeseen ei saa lis‰t‰ ftp:// tai vastaavaa osoitteeseen, vain pelkk‰ ftp.foo.com tai pelkk‰ IP-osoite, mik‰ on paljon nopeampaa.';

$lang['Attach_ftp_path'] = 'FTP polku talletushakemistoon';
$lang['Attach_ftp_path_explain'] = 'Hakemisto, johon liitteet talleteaan. T‰h‰n hakemistoon ei tarvitse k‰ytt‰‰ CHMOD-komentoa. ƒl‰ syˆt‰ IP tai FTP-osoitettasi t‰h‰n, t‰m‰ kentt‰ on tarkoitetettu vain FTP-polulle.<br />Esimerkiksi: /home/web/uploads';
$lang['Ftp_download_path'] = 'Latauslinkin FTP Polku';
$lang['Ftp_download_path_explain'] = 'Syˆt‰ FTP polkusi, jonne liitteet talletaan, URL.<br />Jos k‰yt‰t et‰ FTP palvelinta, syˆt‰ koko url, esimerkiksi http://www.mystorage.com/phpBB2/upload.<br />Jos k‰yt‰t paikallista palvelinta tiedostojen tallentamiseen, voit antaa url:in suhteellisena phpBB2-hakemistoon n‰hden, esimerkiksi \'upload\'.<br />Alussa oleva etukeno poistetaan. J‰t‰ kentt‰ tyhj‰ksi, jos FTP-polku ei ole k‰ytett‰visss‰ Internetist‰ k‰sin. Kun t‰m‰ kentt‰ on tyhj‰ et voi k‰ytt‰‰ fyysist‰ latausta.';
$lang['Ftp_passive_mode'] = 'K‰yt‰ passiivista FTP-moodia';
$lang['Ftp_passive_mode_explain'] = 'PASV-komento pyyt‰‰ et‰palvelinta avaamaan portti datayhteydelle ja palauttamaan yhteyden porttiosoite. Et‰palvelin kuuntelee t‰ss‰ portissa ja asiakas kytkeytyy siihen.';

$lang['No_ftp_extensions_installed'] = 'Et voi k‰ytt‰‰ FTP-lataus metoodia, koska FTP-laajennuksia ei oke k‰‰nnetty PHP-asennukseen.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'T‰ss‰ voit poistaa liitteet viesteist‰, kun tiedostot puuuttuvat tiedostoj‰rjestelm‰st‰si ja poistaa tiedostot, jotka eiv‰t en‰‰ ole mink‰‰n viestin liitteen‰. Voit ladata tiedoston tai katsoa sit‰, jos napsautat sit‰; jos linkki‰ ei ole, tiedostoa ei ole olemassa.';
$lang['Shadow_attachments_file_explain'] = 'Poista kaikki liitetiedostot, jotka ovat tiedostoj‰rjestelm‰ss‰ ja joita ei ole liitetty olemassa olevaan viestiin.';
$lang['Shadow_attachments_row_explain'] = 'Poista kaikki viestien viittaukset liitetiedostoihin, joita ei ole tiedostoj‰rjestelm‰ss‰si.';
$lang['Empty_file_entry'] = 'Tyhj‰ tiedosto viittaus';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Resetoitu esikatselukuvat liitteisin: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Liitteiden synkronointi valmis.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Hallitse tiedostotyyppej‰';
$lang['Manage_extensions_explain'] = 'T‰ss‰ voit hallita tiedostotyyppej‰. Jos haluat sallia/est‰‰ tiedostotyypin latauksen, k‰yt‰ tiedostotyyppiryhmien hallintaa.';
$lang['Explanation'] = 'Selitys';
$lang['Extension_group'] = 'Tiedostotyyppiryhm‰';
$lang['Invalid_extension'] = 'Virheellinen tiedostotyyppi';
$lang['Extension_exist'] = 'Tiedostotyyppi %s on jo olemassa'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Tiedostotyyppi %s on kielletty, et voi lis‰t‰ sit‰ sallittuihin tiedostotyyppeihin'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Hallitse tiedostotyyppiryhmi‰';
$lang['Manage_extension_groups_explain'] = 'T‰ss‰ voit lis‰t‰, poistaa tai muuttaa tiedostotyyppiryhmi‰, voit est‰‰ tiedostotyyppiryhmien k‰ytˆn, liitt‰‰ ne erikoiskategoriaan, muuttaa talletus tapaa ja m‰‰ritt‰‰ talletus ikonin, joka n‰ytet‰‰n ryhm‰‰n kuuluvan liitteen edess‰.';
$lang['Special_category'] = 'Erityisryhm‰';
$lang['Category_images'] = 'Kuvat';
$lang['Category_stream_files'] = 'Stream-tiedostot';
$lang['Category_swf_files'] = 'Flash-tiedostot';
$lang['Allowed'] = 'Sallitut';
$lang['Allowed_forums'] = 'Sallitut foorumit';
$lang['Ext_group_permissions'] = 'Ryhm‰oikeudet';
$lang['Download_mode'] = 'Talletusmoodi';
$lang['Upload_icon'] = 'Talletusikoni';
$lang['Max_groups_filesize'] = 'Suurin sallittu koko';
$lang['Extension_group_exist'] = 'Tiedostotyyppiryhm‰ %s on jo olemassa'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Hallitse erikoiskategorioita';
$lang['Manage_categories_explain'] = 'T‰‰ll‰ voit tehd‰ asetuksia erikoiskategorioihin. Voit m‰‰ritell‰ erityisparametreja ja -ehtoja tiedostyyppiryhm‰‰n liitettyyn erityiskategoriaan.';
$lang['Settings_cat_images'] = 'Erikoiskategorian asetukset: kuvat';
$lang['Settings_cat_streams'] = 'Erikoiskategorian asetukset: Stream-tiedostot';
$lang['Settings_cat_flash'] = 'Erikoiskategorian asetukset: Flash-tiedostot';
$lang['Display_inlined'] = 'N‰yt‰ kuvat viestiss‰';
$lang['Display_inlined_explain'] = 'Valitse n‰ytet‰‰nkˆ kuvat suoraan viestiss‰ (kyll‰) vai n‰ytet‰‰nkˆ kuvat linkkin‰ ?';
$lang['Max_image_size'] = 'Kuvan suurimmat sallitut mitat';
$lang['Max_image_size_explain'] = 'T‰‰ll‰ voit m‰‰ritt‰‰ liitett‰v‰n kuvan suurimmat sallitut mitat (leveys x korkeus pikselein‰).<br />Jos arvot ovat 0x0, ominaisuus on estetty. T‰m‰ ominaisuus ei toimi joidenkin kuvien kanssa johtuen PHP:n rajoituksista.';
$lang['Image_link_size'] = 'Linkkin‰ n‰ytett‰v‰n mitat';
$lang['Image_link_size_explain'] = 'Jos kuva saavuttaa n‰m‰ mitat, kuva n‰ytet‰‰n linkkin‰ eik‰ viestiss‰,<br />jos viestiss‰ n‰ytt‰minen on sallittu (leveys x korkeus pikselein‰).<br />Jos arvot ovat 0x0, ominaisuus on estetty. T‰m‰ ominaisuus ei toimi joidenkin kuvien kanssa johtuen PHP:n rajoituksista.';
$lang['Assigned_group'] = 'Liitetty ryhm‰‰n';

$lang['Image_create_thumbnail'] = 'Luo esikatselukuva';
$lang['Image_create_thumbnail_explain'] = 'Luo aina esikatselukuva. T‰m‰ ominaisuus ohittaa melkein kaikki asetukset t‰ss‰ erityiskategoriassa lukuunottamatta suurimpia sallittuja mittoja. T‰m‰ ominaisuus n‰ytt‰‰ esikatselukuva viestiss‰, k‰ytt‰j‰ voi napsauttaa sit‰ avatakseen oikean kuvan.<br />Huomaa, ett‰ t‰m‰ ominaisuus vaatii, ett‰ Imagick on asennettu, jos se ei ole asennettu tai jos Safe-Mode on p‰‰ll‰ PHP:ss‰ k‰ytet‰‰n PHP:n GD-laajennusta. Jos PHP ei tue kuvatyyppi‰, ominaisuutta ei k‰ytet‰.';
$lang['Image_min_thumb_filesize'] = 'Esikatselukuvan minimi tiedostokoko';
$lang['Image_min_thumb_filesize_explain'] = 'Jos kuva on pienempi kuin m‰‰ritelty tiedostokoko, esikatselukuvia ei luoda, koska kuva on riitt‰v‰n pieni.';
$lang['Image_imagick_path'] = 'Imagick ohjelma (t‰ydellinen polku)';
$lang['Image_imagick_path_explain'] = 'Anna Imagick muutosohjelman polku, yleens‰ /usr/bin/convert (Windowsissa: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Etsi Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Hallitse kiellettyj‰ tiedostotyyppej‰';
$lang['Manage_forbidden_extensions_explain'] = 'T‰‰ll‰ voit lis‰t‰ tai poistaa kiellettyj‰ tiedostotyyppej‰. Tiedostotyypit php, php3 and php4 ovat turvallisuussyist‰ kielletty, niit‰ ei voi poistaa kielletyist‰ tyypeist‰.';
$lang['Forbidden_extension_exist'] = 'Kielletty tiedostotyyppi %s on jo olemassa'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Tiedostotyyppi %s on m‰‰ritelty sallituissa tiedostotyypeiss‰, poista se niist‰ ennen kuin lis‰‰t sen t‰nne.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Tiedostotyyppiryhmien oikeudet -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'T‰‰ll‰ voit rajata valitut tiedostotyyppiryhm‰t haluamiisi foorumeihin (m‰‰ritelty sallitut foorumit laatikossa). Oletusarvona on sallia tiedostotyyppiryhm‰t kaikilla foorumeilla, joilla k‰ytt‰j‰ voi liitt‰‰ tiedostoaja (Liit‰nt‰ muutoksen alkuper‰inen normaali k‰yt‰ntˆ). Lis‰‰ haluamasi foorumit tiedostotyyppiryhm‰‰n (t‰m‰n ryhm‰n tiedostotyypit) k‰ytett‰v‰ksi, oletusarvo KAIKKI FOORUMIT h‰vi‰‰, kun lis‰‰t foorumeita luetteloon. Voit koska tahansa lis‰t‰ KAIKKI FOORUMIT. Jos lis‰‰t foorumin ja oikeuksiksi on asettettu KAIKKI FOORUMIT mik‰‰n ei muutu. Mutta jos olet muuttanut ja rajoittabut k‰ytˆn joihinkin foorumeihin, sinun on halutessesi lis‰tt‰v‰ uusi luotu foorumi. Se helposti teht‰viss‰ automaattisesti, mutta se vaatii usean tiedoston muokkaamista, siksi olen valinnut nykyisen k‰yt‰nnˆn. Muista, ett‰ kaikki foorumisi luetellaan t‰‰ll‰.';
$lang['Note_admin_empty_group_permissions'] = 'HUOMAA:<br />Alla luetelluissa foorumeissa k‰ytt‰j‰t saavat normaalisti liitt‰‰ tiedostoja, mutta koska niiss‰ ei ole sallittu yht‰‰n tiedostyyppi ryhm‰‰, k‰ytt‰j‰t eiv‰t voi liitt‰‰ mit‰‰n. Jos he yritt‰v‰t he saavat virheilmoituksen. Haluat ehk‰ asettaa oikeuden \'Liit‰ tiedostoja\' n‰iss‰ foorumeissa ADMIN-k‰ytt‰j‰lle.<br /><br />';
$lang['Add_forums'] = 'Lis‰‰ foorumit';
$lang['Add_selected'] = 'Lis‰‰ valitut';
$lang['Perm_all_forums'] = 'KAIKKI FOORUMIT';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Hallitse liitteiden koko rajoituksia';
$lang['Manage_quotas_explain'] = 'T‰‰ll‰ voit lis‰t‰/poistaa/muuttaa koko rajoituksia. Voit asettaa n‰m‰ koko rajoitukset k‰ytt‰jille ja ryhmille myˆhemmin. Asettaaksesi koko rajoituksen k‰ytt‰j‰lle sinun on valittava K‰ytt‰j‰t->Hallinta, valitse k‰ytt‰j‰ ja n‰et optiot alhaalla. Asettaaksesi koko rajoituksen ryhm‰lle valitse Ryhm‰t->Hallinta, valitse ryhm‰ muokataksesi sit‰ ja n‰et konfiguraatio asetukset. Jos haluat n‰hd‰, mille k‰ytt‰jille ja ryhmille on asetettu tietty koko rajoitus, napsauta \'N‰yt‰\' koko rajoituskuvauksen vasemmalla puolella.';
$lang['Assigned_users'] = 'Asetetut k‰ytt‰j‰t';
$lang['Assigned_groups'] = 'Asetetut ryhm‰t';
$lang['Quota_limit_exist'] = 'Koko rajoitus %s on jo olemassa.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Tiedostoliitteiden hallintapaneeli';
$lang['Control_panel_explain'] = 'Voit katsoa ja hallita t‰‰lt‰ kaikkia liitteit‰ perustuen k‰ytt‰jiin, liitteisiin, katseluihin jne. ...';
$lang['File_comment_cp'] = 'Tiedoston kommentti';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'K‰yt‰ * mit‰ tahansa tarkoittavana osittain vastaavana for partial matches';
$lang['Size_smaller_than'] = 'Liitteen koko pienempi kuin (tavua)';
$lang['Size_greater_than'] = 'Liitteen koko suurempi kuin (tavua)';
$lang['Count_smaller_than'] = 'Latausten lukum‰‰r‰ pienempi kuin';
$lang['Count_greater_than'] = 'Latausten lukum‰‰r‰ on suurempi kuin';
$lang['More_days_old'] = 'Vanhempi kuin n‰in monta p‰iv‰‰';
$lang['No_attach_search_match'] = 'Yksik‰‰n liite ei vastannut hakuehtoja';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Liitteiden lukum‰‰r‰';
$lang['Total_filesize'] = 'Tiedostokoko yhteens‰';
$lang['Number_posts_attach'] = 'Liitteellisten viestien m‰‰r‰';
$lang['Number_topics_attach'] = 'Liitteellisten aiheiden m‰‰r‰';
$lang['Number_users_attach'] = 'Liitteit‰ k‰ytt‰neiden k‰ytt‰jien m‰‰r‰';
$lang['Number_pms_attach'] = 'Liitteellisten yksityisviestien m‰‰r‰';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'K‰ytt‰j‰n %s tilastot'; // replace %s with username
$lang['Size_in_kb'] = 'Koko (KB)';
$lang['Downloads'] = 'Lataukset';
$lang['Post_time'] = 'Liit‰nt‰aika';
$lang['Posted_in_topic'] = 'Liitetty aiheeseen';
$lang['Submit_changes'] = 'L‰het‰ muutokset';

// Sort Types
$lang['Sort_Attachments'] = 'Liitteet';
$lang['Sort_Size'] = 'Koko';
$lang['Sort_Filename'] = 'Tiedoston nimi';
$lang['Sort_Comment'] = 'Kommentti';
$lang['Sort_Extension'] = 'Tiedostotyyppi';
$lang['Sort_Downloads'] = 'Lataukset';
$lang['Sort_Posttime'] = 'Liit‰nt‰aika';
$lang['Sort_Posts'] = 'Liitteet';

// View Types
$lang['View_Statistic'] = 'Tilastot';
$lang['View_Search'] = 'Hae';
$lang['View_Username'] = 'K‰ytt‰j‰';
$lang['View_Attachments'] = 'Liitteet';

// Successfully updated
$lang['Attach_config_updated'] = 'Liitekonfiguraation p‰ivitys onnistui';
$lang['Click_return_attach_config'] = 'Napsauta %st‰st‰%s palataksesi liitteiden asetuksiin';
$lang['Test_settings_successful'] = 'Asetukset testattu, asetukset n‰ytt‰v‰t olevan kunnossa.';

// Some basic definitions
$lang['Attachments'] = 'Liitteet';
$lang['Attachment'] = 'Liite';
$lang['Extensions'] = 'Tiedostotyypit';
$lang['Extension'] = 'Tiedostotyyppi';

// Auth pages
$lang['Auth_attach'] = 'Liit‰ tiedostot';
$lang['Auth_download'] = 'Lataa tiedostot';

?>