<?php
/***************************************************************************
 *                            lang_admin_attach.php [Czech/conversational]
 *                            --------------------------------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     plug-in version      : 2.3.5
 *     translation          : mik.mik@aalab.cz
 *     www                  : http://webdesign.aalab.cz/
 *
 *     $Id: lang_admin_attach.php,v 1.1 2003/02/19 18:31:23 bob Exp $
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

// Translation (c) 2002 - 2003 by Robert of www.aalab.cz (mik.mik@atlas.cz)
// Czech / conversational (hovorová èeština)

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Ovládací panel';
$lang['Shadow_attachments'] = 'Stínové pøílohy';
$lang['Forbidden_extensions'] = 'Zakázané pøípony';
$lang['Extension_control'] = 'Nastavení pøípon';
$lang['Extension_group_manage'] = 'Nastavení pøíponovıch skupin';
$lang['Special_categories'] = 'Zvláštní kategorie';
$lang['Sync_attachments'] = 'Synchronizovat pøílohy';
$lang['Quota_limits'] = 'Kvótní omezení';

// Attachments -> Management
$lang['Attach_settings'] = 'Nastavení pøíloh';
$lang['Manage_attachments_explain'] = 'Zde mùeš zmìnit hlavní nastavení souborového plug-inu. Pokud stiskneš tlaèítko <em>Ovìøit nastavení</em>, souborovı plug-in provede nìkolik testù, aby se ujistil, e správnì funguje. Pokud máš problémy s pøenášením souborù, spus, prosím, tento test a obdríš detailní chybové hlášení.';
$lang['Attach_filesize_settings'] = 'Nastavení velikosti pøíloh';
$lang['Attach_number_settings'] = 'Nastavení poètu pøíloh';
$lang['Attach_options_settings'] = 'Rùzná nastavení';

$lang['Upload_directory'] = 'Úlonı adresáø';
$lang['Upload_directory_explain'] = 'Vlo cestu k úlonému adresáøi, relativní k tvé instalaci phpBB. Napø. vlo <em>files</em> pokud se tvá instalace phpBB nachází na <em>http://www.yourdomain.com/phpBB2</em> a úlonı adresáø na <em>http://www.yourdomain.com/phpBB2/files</em>';
$lang['Attach_img_path'] = 'Ikonka indikující pøílohu v pøíspìvku';
$lang['Attach_img_path_explain'] = 'Tento obrázek se zobrazí vedle odkazù na soubory pøíloh v kadém jednotlivém pøíspìvku. Nech toto pole prázdné, pokud ádnou ikonku zobrazit nechceš. Toto nastavení mùe bıt anulováno nastavením v ovládacím panelu pøíponovıch skupin.';
$lang['Attach_topic_icon'] = 'Ikonka indikující pøílohu v tématu';
$lang['Attach_topic_icon_explain'] = 'Tato ikonka se zobrazí u názvu kadého tématu, kterı obsahuje pøílohu. Nech toto pole prázdné, pokud ádnou ikonku zobrazit nechceš.';
$lang['Attach_display_order'] = 'Sled zobrazení pøíloh';
$lang['Attach_display_order_explain'] = 'Zde si mùeš zvlolit sled, ve kterém se seøadí pøílohy v pøíspìvcích a soukromıch zprávách. Monosti jsou: <em>sestupnì</em> (nejnovìjší pøíloha nahoøe) a <em>vzestupnì</em> (nejstarší pøíloha nahoøe).';
$lang['Show_apcp'] = 'Zobrazit novı pøílohovı ovládací panel?';
$lang['Show_apcp_explain'] = 'Zde si mùeš zvolit, zda chceš zobrazovat novì pøepracovanı panel pro pøikládání souborù k pøíspìvkùm, èi zdali chceš zùstat u starého rozhraní. Pøesnou pøedstavu o tom, co tato volba nabízí, získáš, pokud obì monosti vyzkoušíš.';

$lang['Max_filesize_attach'] = 'Maximální velikost souboru';
$lang['Max_filesize_attach_explain'] = 'Toto je maximální akceptovatelná velikost pøiloeného souboru. Hodnota 0 znamená "neomezeno". Tato kvóta je ale do znaèné míry ovlivnìna i nastavením vašeho serveru. Napø. pokud je PHP nakonfigurováno tak, e dovoluje jen nahrání souborù menších ne 2 MB, má tato jeho konfigurace vyšší prioritu.';
$lang['Attach_quota'] = 'Pøílohová kvóta';
$lang['Attach_quota_explain'] = 'Celková disková kapacita vyhrazená VŠEM souborovım pøílohám fóra. Hodnota 0 znamená "neomezeno".';
$lang['Max_filesize_pm'] = 'Maximální celková velikost pøíloh ve slokách soukromé pošty';
$lang['Max_filesize_pm_explain'] = 'Maximální místo, které mohou pøílohy zabírat v kadé ze sloek soukromıch zpráv uivatele/ky. Hodnota 0 znamená "neomezeno".'; 
$lang['Default_quota_limit'] = 'Implicitní kvótní omezení';
$lang['Default_quota_limit_explain'] = 'Zde mùeš nastavit implicitní kvótní omezení automaticky pøiøazovaná novì registrovanım uivatelùm/kám nebo uivatelùm/kám bez dosud stanoveného kvótního omezení. Monost "Bez omezení" vypne pouívání kvót a zohlední jiná nastavení této èásti ovládacího panelu.';

$lang['Max_attachments'] = 'Maximální poèet pøíloh';
$lang['Max_attachments_explain'] = 'Maximální povolenı poèet pøíloh v jednom pøíspìvku.';
$lang['Max_attachments_pm'] = 'Maximální povolenı poèet pøíloh v jedné soukromé zprávì';
$lang['Max_attachments_pm_explain'] = 'Definuje maximální poèet pøíloh, které uivatel/ka mùe vloit do jedné soukromé zprávy.';

$lang['Disable_mod'] = 'Vypnout souborovı plug-in?';
$lang['Disable_mod_explain'] = 'Tato volba je zde hlavnì pro pøípad testování novıch šablon a stylù. Vypne všechny funkce souborového plug-inu, ovšem kromì administrátorského panelu.';
$lang['PM_Attachments'] = 'Povolit pøílohy v soukromıch zprávách?';
$lang['PM_Attachments_explain'] = 'Povolí èi zakáe pøikládání souborù k soukromım zprávám.';
$lang['Ftp_upload'] = 'Povolit ukládání pøes FTP?';
$lang['Ftp_upload_explain'] = 'Povolí nebo zakáe ukládání souborù prostøednictvím FTP protokolu. Pokud jej povolíš, budeš muset vyplnit všechna políèka pro nastavení FTP pøístupu a nastavení úloného adresáøe ji nebude relevantní.';
$lang['Attachment_topic_review'] = 'Chceš, aby se pøílohy zobrazovaly v náhledu?';
$lang['Attachment_topic_review_explain'] = 'Pokud tuto volbu povolíš, budou se v náhledovém oknì pøi odpovídání na pøíspìvky kromì textu pøedchozích pøíspìvkù zobrazovat i jejich souborové pøílohy.';

$lang['Ftp_server'] = 'FTP server';
$lang['Ftp_server_explain'] = 'Sem mùeš napsat buï IP adresu nebo jméno FTP serveru, kterı chceš pro uloení pøíloh pouít. Pokud ponecháš toto políèko volné, bude pouit ten samı server, na kterém phpBB bìí. Napiš buï jen èisté jméno serveru (napø. ftp.aalab.cz) anebo jen jeho IP adresu (v takovém pøípadì by pøipojení bylo rychlejší) a nepøidávej ádná lomítka, nebo dokonce pøedponu <em>ftp://</em>';

$lang['Attach_ftp_path'] = 'Cesta k úlonému adresáøi na FTP serveru';
$lang['Attach_ftp_path_explain'] = 'Adresáø, do kterého se budou pøílohy ukládat. Tento adresáø nemusí mít nastavená ádná zvláštní pøístupová práva (chmod). Prosím, nepiš sem IP adresu ani jméno FTP serveru, toto políèko slouí pouze k vloení adresáøové cesty, jako napø. <em>/home/web/uploads</em>';
$lang['Ftp_download_path'] = 'URL adresa úloného adresáøe na FTP serveru';
$lang['Ftp_download_path_explain'] = 'Vlo kompletní URL adresu, která odpovídá pozici úloného adresáøe na FTP serveru. Prosím, vlo úplnou cestu, napø. <em>http://www.aalab.cz/webdesign/upload</em> lomítko na konci, pokud jej nevymaeš ty, bude vymazáno automaticky. Nachází-li se tvùj úlonı adresáø mimo tvùj nejvyšší WWW adresáø, nech toto políèko nevyplnìné. V takovém pøípadì, ale nebude pøímé fyzické stahování souboru moné.';
$lang['Ftp_passive_mode'] = 'Pasivní reim FTP pøenosu';
$lang['Ftp_passive_mode_explain'] = 'PASV pøíkaz vyádá na vzdáleném serveru otevøení portu pro datové spojení a vrátí adresu tohoto portu. Vzdálenı server na tomto portu naslouchá a klient se k nìmu pøipojuje.';

$lang['No_ftp_extensions_installed'] = 'Nemùeš pouít FTP reim nahrávání souborù, protoe FTP rozšíøení není vkompilováno do tvé instalace PHP.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Tady mùeš vymazat pøílohy z pøíspìvkù, pokud dotyèné soubory chybí a také zde mùeš vymazat soubory, které ji nejsou pøipojeny k ádnému z pøíspìvkù. Kliknutím na jméno souboru si jej mùeš prohlédnout nebo stáhnout na svùj poèítaè. Pokud jméno není aktivní, soubor byl ji nìkdy døíve vymazán.';
$lang['Shadow_attachments_file_explain'] = 'Vymae všechny soubory, které jsou v úloném adresáøi, ale nejsou pøiøazeny k ádnım pøíspìvkùm.';
$lang['Shadow_attachments_row_explain'] = 'Odstraní z pøíspìvkù všechny pøílohy, které odkazují na neexistující soubory.';
$lang['Empty_file_entry'] = 'Soubor nulové velikosti';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Znovu vytvoøen náhled na pøílohu: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Synchronizace pøíloh byla dokonèena.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Nastavení pøípon';
$lang['Manage_extensions_explain'] = 'Zde mùeš pracovat s jednotlivımi pøíponami. Pokud chceš povolit nebo zakázat pøikládání souborù s urèitou pøíponou, uij, prosím, panelu pro nastavení pøíponovıch skupin.';
$lang['Explanation'] = 'Popis';
$lang['Extension_group'] = 'Pøíponová skupina';
$lang['Invalid_extension'] = 'Neplatná pøípona';
$lang['Extension_exist'] = 'Pøípona %s ji v seznamu figuruje'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Pøípona %s je zakázána, proto nemùe bıt pøidána do seznamu povolenıch pøípon.'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Nastavení pøíponovıch skupin';
$lang['Manage_extension_groups_explain'] = 'Zde mùeš pøidávat, mazat, èi mìnit nastavení pøíponovıch skupin. Mùeš tyto skupiny i doèasnì zakázat, pøiøadit je k jedné ze zvláštních kategorií, mìnit zpùsob stahování a mùeš kadé skupinì také pøiøadit vlastní ikonku, která se vdy zobrazí u názvu kadé pøílohy z dané pøíponové skupiny.';
$lang['Special_category'] = 'Zvláštní kategorie';
$lang['Category_images'] = 'Obrázky';
$lang['Category_stream_files'] = 'Streamované soubory';
$lang['Category_swf_files'] = 'Flashové soubory';
$lang['Allowed'] = 'Povolena';
$lang['Allowed_forums'] = 'Povolená fóra';
$lang['Ext_group_permissions'] = 'Oprávnìní pøíponové skupiny';
$lang['Download_mode'] = 'Zpùsob stahování';
$lang['Upload_icon'] = 'Ikonka skupiny';
$lang['Max_groups_filesize'] = 'Maximální velikost souboru';
$lang['Extension_group_exist'] = 'Pøíponová skupina %s ji existuje'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Nastavení zvláštních kategorií';
$lang['Manage_categories_explain'] = 'Zde mùeš mìnit nastavení nìkterıch zvláštních kategorií pøíponovıch skupin.';
$lang['Settings_cat_images'] = 'Nastavení zvláštní kategorie: Obrázky';
$lang['Settings_cat_streams'] = 'Nastavení zvláštní kategorie: Streamované soubory';
$lang['Settings_cat_flash'] = 'Nastavení zvláštní kategorie: Flashové soubory';
$lang['Display_inlined'] = 'Zobrazit obrázky?';
$lang['Display_inlined_explain'] = 'Zvol si, chceš-li obrázky pøímo zobrazit, nebo má-li se jen vygenerovat odkaz na jejich zobrazení/staení.';
$lang['Max_image_size'] = 'Maximální rozmìry obrázku';
$lang['Max_image_size_explain'] = 'Zde mùeš nastavit maximální povolenou velikost obrázku v pixelech (šíøka x vıška). Pokud jako obì hodnoty zadáš 0, nebude velikost nijak omezena. U nìkterıch obrázkù toto nastavení nemusí fungovat, vzhledem k jistım omezením v PHP.';
$lang['Image_link_size'] = 'Hranièní rozmìry obrázku';
$lang['Image_link_size_explain'] = 'Pokud tyto rozmìry nastavíš (opìt šíøka x vıška v pixelech), bude pøi pøekroèení jedné z hodnot obrázek zobrazen jako odkaz a nebude vloen pøímo. Aby pøímì zobrazení fungovalo, musí bıt ovšem povoleno v jednom z pøedchozích nastavení. Pokud zadáš do obou políèek 0, nebude tato funkce aktivní. U nìkterıch obrázkù toto nastavení nemusí fungovat, vzhledem k jistım omezením v PHP.';
$lang['Assigned_group'] = 'Tato kategorie byla pøiøazena tìmto pøíponovım skupinám';

$lang['Image_create_thumbnail'] = 'Vytváøet náhled?';
$lang['Image_create_thumbnail_explain'] = 'Vdy vytvoøí náhled obrázku. Tato volba anuluje takøka všechna ostatní nastavení v této zvláštní kategorii, s vıjimkou <em>Maximálních rozmìrù obrázku</em>. Povolíš-li tuto monost, v pøíspìvku se zobrazí náhled, na kterı mùe uivatel/ka kliknout pro otevøení obrázku v pùvodní velikosti.<br>Vem ale, prosím, v potaz, e pro vyuítí této funkce musí bıt nainstalován program <em>Imagick</em>, anebo, pokud PHP bìí v bezpeèném reimu, bude pouito GD rozšíøení. Typ obrázku ale musí bıt v PHP podporován, jinak nebude tato funkce vyuita.';
$lang['Image_min_thumb_filesize'] = 'Minimální velikost souboru náhledu';
$lang['Image_min_thumb_filesize_explain'] = 'Jestlie bude velikost vytvoøeného náhledu menší ne tato hodnota, ádnı náhled nebude vytvoøen, protoe by byl pøíliš malı.';
$lang['Image_imagick_path'] = '<em>Imagick</em> (úplná cesta k programu)';
$lang['Image_imagick_path_explain'] = 'Zadej cestu k programu <em>Imagick</em>. Obvykle je to <em>/usr/bin/convert</em> (nebo <em>c:/imagemagick/convert.exe</em> ve Windows).';
$lang['Image_search_imagick'] = 'Najít Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Nastavení zakázanıch pøípon';
$lang['Manage_forbidden_extensions_explain'] = 'Zde mùeš pøidávat a mazat poloky v seznamu zakázanıch pøípon. Pøípony <em>php, php3</em> a <em>php4</em> jsou zakázány ji implicitnì z bezpeènostních dùvodù a nelze je ze seznamu vymazat.';
$lang['Forbidden_extension_exist'] = 'Pøípona %s se ji na seznamu zakázanıch pøípon nachází'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'Pøípona %s figuruje na seznamu povolenıch pøípon. Musíš ji nejdøíve z onoho seznamu vymazat a a pak ji mùeš pøidat sem.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Nastavení oprávnìní pro pøíponovou skupinu: %s'; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Pøidej patøièné poloky a nakonec klikni na <em>Zavøít okno</em>. Zde mùeš omezit povolení zvolené pøíponové skupiny jen na urèitá fóra (jsou pak vypsána v poli <em>Povolená fóra</em>). Implicitnì je kadá pøíponová skupina povolena pro všechna fóra, do kterıch mohou uivatelé/ky zasílat pøíspìvky se souborovımi pøílohami (tak tomu bylo obvykle ve všech pøedchozích verzích souborového plug-inu). Jednoduše pøidej do seznamu ta fóra, pro která chceš danou pøíponovou skupinu (a tedy i všechny pøípony v ní obsaené) povolit, implicitní hodnota <em>VŠECHNA FÓRA</em> zmizí a nahradí ji zvolená fóra. K pùvodní hodnotì <em>VŠECHNA FÓRA</em> se ale samozøejmì mùeš kdykoli pozdìji vrátit vybráním pøíslušné poloky. Pokud zaloíš nové fórum a máš nastavenu implicitní hodnotu <em>VŠECHNA FÓRA</em>, nic se nezmìní - daná pøíponová skupina bude povolena i v novì zaloeném fóru. Pokud jsi ale povolil/a tuto pøíponovou skupinu jen pro urèitá fóra, budeš se sem muset vrátit a nové fórum pøidat. Šlo by to lehce zautomatizovat, ale byl/a bys nucen/a editovat mnoho souborù, proto byl doèasnì zvolen tento zpùsob. Nutno zdùraznit, e zde se vdy objeví všechna fóra.';
$lang['Note_admin_empty_group_permissions'] = 'POZNÁMKA:<br>Uivatelé/ky mají sice povoleno v následujících fórech pøikládat soubory k pøíspìvkùm, ale jeliko pro nì nebyla povolena ádná pøíponová skupina, nebudou moci soubory pøikládat. Pokud to zkusí, objeví se jim jen chybové hlášení. Ve fórech, jejich jména následují, bys také mìl/a zkontrolovat oprávnìní, tıkající se pøíkládání souborovıch pøíloh:<br><br>';
$lang['Add_forums'] = 'Seznam fór pro pøidání';
$lang['Add_selected'] = 'Pøidat oznaèená';
$lang['Perm_all_forums'] = 'VŠECHNA FÓRA';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Nastavení pøílohovıch kvótních omezení';
$lang['Manage_quotas_explain'] = 'Zde mùeš pøidávat/mazat/mìnit kvotní omezení. Tato kvótní omezení mùeš pak pøiøadit jednotlivım uivatelùm/kám a uivatelskım skupinám. Pro pøiøazení kvótního omezení nìjaké/mu uivateli/ce, musíš pøejít do ovládacího panelu pro administraci uivatelù/ek, poté vyber uivatele/ku a v dolní èásti nalezneš patøièná nastavení. Pro pøiøazení kvótního omezení uivatelské skupinì, pøejdi do ovládacího panelu pro administraci skupin uivatelù/ek, vyber uivatelskou skupinu a obejví se ti dotyèná nastavení. Chèeš-li si dát zobrazit, kteøí/é uivatelé/ky a uivatelské skupiny jsou pøiøazeny/i k urèitému kvótnímu omezení, klikní na \'Zobrazit\' nalevo od popisu kvóty.';
$lang['Assigned_users'] = 'Pøiøazení/é uivatelé/ky';
$lang['Assigned_groups'] = 'Pøiøazené uivatelské skupiny';
$lang['Quota_limit_exist'] = 'Kvótní omezení %s ji existuje.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Ovládací panel souborového plug-inu';
$lang['Control_panel_explain'] = 'Zde mùeš pracovat se všemi pøílohami a prohlíet je (dle uivatelù/ek, data, poètu shlédnutí/staení, atp.)';
$lang['File_comment_cp'] = 'Komentáø';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Hvìzdièka (*) nahradí èást øetìzce pøi vyhledávání';
$lang['Size_smaller_than'] = 'Velikost pøílohy menší ne (v bajtech)';
$lang['Size_greater_than'] = 'Velikost pøílohy vìtší ne (v bajtech)';
$lang['Count_smaller_than'] = 'Poèet staení/zobrazení je menší ne';
$lang['Count_greater_than'] = 'Poèet staení/zobrazení je vìtší ne';
$lang['More_days_old'] = 'Starší ne tento poèet dní';
$lang['No_attach_search_match'] = 'Nebyly nalezeny ádné pøílohy, které by odpovídaly zadanım kritériím';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Celkovı poèet pøíloh';
$lang['Total_filesize'] = 'Celkovı diskovı prostor, kterı pøílohy zabírají';
$lang['Number_posts_attach'] = 'Poèet pøíspìvkù s pøílohou';
$lang['Number_topics_attach'] = 'Poèet témat s pøílohou';
$lang['Number_users_attach'] = 'Poèet uivatelù/ek, kteøí/ré zaslali alespoò jednu pøílohu';
$lang['Number_pms_attach'] = 'Celkovı poèet pøíloh v soukromıch zprávách';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Pøílohy uivatele/ky %s'; // replace %s with username
$lang['Size_in_kb'] = 'Velikost (kB)';
$lang['Downloads'] = 'Poèet staení/zobrazení';
$lang['Post_time'] = 'Doba zaslání';
$lang['Posted_in_topic'] = 'Téma';
$lang['Submit_changes'] = 'Uloit zmìny';

// Sort Types
$lang['Sort_Attachments'] = 'Názvu pøílohy';
$lang['Sort_Size'] = 'Velikosti';
$lang['Sort_Filename'] = 'Názvu souboru';
$lang['Sort_Comment'] = 'Komentáøe';
$lang['Sort_Extension'] = 'Pøípony';
$lang['Sort_Downloads'] = 'Poètu staení/zobrazení';
$lang['Sort_Posttime'] = 'Doby zaslání';
$lang['Sort_Posts'] = 'Pøíspìvku';

// View Types
$lang['View_Statistic'] = 'Statistiku';
$lang['View_Search'] = 'Vyhledávání';
$lang['View_Username'] = 'Uivatele/ky';
$lang['View_Attachments'] = 'Pøílohy';

// Successfully updated
$lang['Attach_config_updated'] = 'Nové nastavení souborového plug-inu bylo v poøádku uloeno';
$lang['Click_return_attach_config'] = 'Klikni %ssem%s pro návrat do nastavení pøíloh';
$lang['Test_settings_successful'] = 'Testování probìhlo bez problémù a nastavení se zdá bıt v poøádku.';

// Some basic definitions
$lang['Attachments'] = 'Pøílohy';
$lang['Attachment'] = 'Pøíloha';
$lang['Extensions'] = 'Pøípony';
$lang['Extension'] = 'Pøípona';

// Auth pages
$lang['Auth_attach'] = 'Zaslat soubory';
$lang['Auth_download'] = 'Stáhnout soubory';

?>