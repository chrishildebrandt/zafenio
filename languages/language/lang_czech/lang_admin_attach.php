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
// Czech / conversational (hovorov� �e�tina)

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Ovl�dac� panel';
$lang['Shadow_attachments'] = 'St�nov� p��lohy';
$lang['Forbidden_extensions'] = 'Zak�zan� p��pony';
$lang['Extension_control'] = 'Nastaven� p��pon';
$lang['Extension_group_manage'] = 'Nastaven� p��ponov�ch skupin';
$lang['Special_categories'] = 'Zvl�tn� kategorie';
$lang['Sync_attachments'] = 'Synchronizovat p��lohy';
$lang['Quota_limits'] = 'Kv�tn� omezen�';

// Attachments -> Management
$lang['Attach_settings'] = 'Nastaven� p��loh';
$lang['Manage_attachments_explain'] = 'Zde m��e� zm�nit hlavn� nastaven� souborov�ho plug-inu. Pokud stiskne� tla��tko <em>Ov��it nastaven�</em>, souborov� plug-in provede n�kolik test�, aby se ujistil, �e spr�vn� funguje. Pokud m� probl�my s p�en�en�m soubor�, spus�, pros�m, tento test a obdr�� detailn� chybov� hl�en�.';
$lang['Attach_filesize_settings'] = 'Nastaven� velikosti p��loh';
$lang['Attach_number_settings'] = 'Nastaven� po�tu p��loh';
$lang['Attach_options_settings'] = 'R�zn� nastaven�';

$lang['Upload_directory'] = '�lo�n� adres��';
$lang['Upload_directory_explain'] = 'Vlo� cestu k �lo�n�mu adres��i, relativn� k tv� instalaci phpBB. Nap�. vlo� <em>files</em> pokud se tv� instalace phpBB nach�z� na <em>http://www.yourdomain.com/phpBB2</em> a �lo�n� adres�� na <em>http://www.yourdomain.com/phpBB2/files</em>';
$lang['Attach_img_path'] = 'Ikonka indikuj�c� p��lohu v p��sp�vku';
$lang['Attach_img_path_explain'] = 'Tento obr�zek se zobraz� vedle odkaz� na soubory p��loh v ka�d�m jednotliv�m p��sp�vku. Nech toto pole pr�zdn�, pokud ��dnou ikonku zobrazit nechce�. Toto nastaven� m��e b�t anulov�no nastaven�m v ovl�dac�m panelu p��ponov�ch skupin.';
$lang['Attach_topic_icon'] = 'Ikonka indikuj�c� p��lohu v t�matu';
$lang['Attach_topic_icon_explain'] = 'Tato ikonka se zobraz� u n�zvu ka�d�ho t�matu, kter� obsahuje p��lohu. Nech toto pole pr�zdn�, pokud ��dnou ikonku zobrazit nechce�.';
$lang['Attach_display_order'] = 'Sled zobrazen� p��loh';
$lang['Attach_display_order_explain'] = 'Zde si m��e� zvlolit sled, ve kter�m se se�ad� p��lohy v p��sp�vc�ch a soukrom�ch zpr�v�ch. Mo�nosti jsou: <em>sestupn�</em> (nejnov�j�� p��loha naho�e) a <em>vzestupn�</em> (nejstar�� p��loha naho�e).';
$lang['Show_apcp'] = 'Zobrazit nov� p��lohov� ovl�dac� panel?';
$lang['Show_apcp_explain'] = 'Zde si m��e� zvolit, zda chce� zobrazovat nov� p�epracovan� panel pro p�ikl�d�n� soubor� k p��sp�vk�m, �i zdali chce� z�stat u star�ho rozhran�. P�esnou p�edstavu o tom, co tato volba nab�z�, z�sk�, pokud ob� mo�nosti vyzkou��.';

$lang['Max_filesize_attach'] = 'Maxim�ln� velikost souboru';
$lang['Max_filesize_attach_explain'] = 'Toto je maxim�ln� akceptovateln� velikost p�ilo�en�ho souboru. Hodnota 0 znamen� "neomezeno". Tato kv�ta je ale do zna�n� m�ry ovlivn�na i nastaven�m va�eho serveru. Nap�. pokud je PHP nakonfigurov�no tak, �e dovoluje jen nahr�n� soubor� men��ch ne� 2 MB, m� tato jeho konfigurace vy��� prioritu.';
$lang['Attach_quota'] = 'P��lohov� kv�ta';
$lang['Attach_quota_explain'] = 'Celkov� diskov� kapacita vyhrazen� V�EM souborov�m p��loh�m f�ra. Hodnota 0 znamen� "neomezeno".';
$lang['Max_filesize_pm'] = 'Maxim�ln� celkov� velikost p��loh ve slo�k�ch soukrom� po�ty';
$lang['Max_filesize_pm_explain'] = 'Maxim�ln� m�sto, kter� mohou p��lohy zab�rat v ka�d� ze slo�ek soukrom�ch zpr�v u�ivatele/ky. Hodnota 0 znamen� "neomezeno".'; 
$lang['Default_quota_limit'] = 'Implicitn� kv�tn� omezen�';
$lang['Default_quota_limit_explain'] = 'Zde m��e� nastavit implicitn� kv�tn� omezen� automaticky p�i�azovan� nov� registrovan�m u�ivatel�m/k�m nebo u�ivatel�m/k�m bez dosud stanoven�ho kv�tn�ho omezen�. Mo�nost "Bez omezen�" vypne pou��v�n� kv�t a zohledn� jin� nastaven� t�to ��sti ovl�dac�ho panelu.';

$lang['Max_attachments'] = 'Maxim�ln� po�et p��loh';
$lang['Max_attachments_explain'] = 'Maxim�ln� povolen� po�et p��loh v jednom p��sp�vku.';
$lang['Max_attachments_pm'] = 'Maxim�ln� povolen� po�et p��loh v jedn� soukrom� zpr�v�';
$lang['Max_attachments_pm_explain'] = 'Definuje maxim�ln� po�et p��loh, kter� u�ivatel/ka m��e vlo�it do jedn� soukrom� zpr�vy.';

$lang['Disable_mod'] = 'Vypnout souborov� plug-in?';
$lang['Disable_mod_explain'] = 'Tato volba je zde hlavn� pro p��pad testov�n� nov�ch �ablon a styl�. Vypne v�echny funkce souborov�ho plug-inu, ov�em krom� administr�torsk�ho panelu.';
$lang['PM_Attachments'] = 'Povolit p��lohy v soukrom�ch zpr�v�ch?';
$lang['PM_Attachments_explain'] = 'Povol� �i zak�e p�ikl�d�n� soubor� k soukrom�m zpr�v�m.';
$lang['Ftp_upload'] = 'Povolit ukl�d�n� p�es FTP?';
$lang['Ftp_upload_explain'] = 'Povol� nebo zak�e ukl�d�n� soubor� prost�ednictv�m FTP protokolu. Pokud jej povol�, bude� muset vyplnit v�echna pol��ka pro nastaven� FTP p��stupu a nastaven� �lo�n�ho adres��e ji� nebude relevantn�.';
$lang['Attachment_topic_review'] = 'Chce�, aby se p��lohy zobrazovaly v n�hledu?';
$lang['Attachment_topic_review_explain'] = 'Pokud tuto volbu povol�, budou se v n�hledov�m okn� p�i odpov�d�n� na p��sp�vky krom� textu p�edchoz�ch p��sp�vk� zobrazovat i jejich souborov� p��lohy.';

$lang['Ftp_server'] = 'FTP server';
$lang['Ftp_server_explain'] = 'Sem m��e� napsat bu� IP adresu nebo jm�no FTP serveru, kter� chce� pro ulo�en� p��loh pou��t. Pokud ponech� toto pol��ko voln�, bude pou�it ten sam� server, na kter�m phpBB b��. Napi� bu� jen �ist� jm�no serveru (nap�. ftp.aalab.cz) anebo jen jeho IP adresu (v takov�m p��pad� by p�ipojen� bylo rychlej��) a nep�id�vej ��dn� lom�tka, nebo dokonce p�edponu <em>ftp://</em>';

$lang['Attach_ftp_path'] = 'Cesta k �lo�n�mu adres��i na FTP serveru';
$lang['Attach_ftp_path_explain'] = 'Adres��, do kter�ho se budou p��lohy ukl�dat. Tento adres�� nemus� m�t nastaven� ��dn� zvl�tn� p��stupov� pr�va (chmod). Pros�m, nepi� sem IP adresu ani jm�no FTP serveru, toto pol��ko slou�� pouze k vlo�en� adres��ov� cesty, jako nap�. <em>/home/web/uploads</em>';
$lang['Ftp_download_path'] = 'URL adresa �lo�n�ho adres��e na FTP serveru';
$lang['Ftp_download_path_explain'] = 'Vlo� kompletn� URL adresu, kter� odpov�d� pozici �lo�n�ho adres��e na FTP serveru. Pros�m, vlo� �plnou cestu, nap�. <em>http://www.aalab.cz/webdesign/upload</em> lom�tko na konci, pokud jej nevyma�e� ty, bude vymaz�no automaticky. Nach�z�-li se tv�j �lo�n� adres�� mimo tv�j nejvy��� WWW adres��, nech toto pol��ko nevypln�n�. V takov�m p��pad�, ale nebude p��m� fyzick� stahov�n� souboru mo�n�.';
$lang['Ftp_passive_mode'] = 'Pasivn� re�im FTP p�enosu';
$lang['Ftp_passive_mode_explain'] = 'PASV p��kaz vy��d� na vzd�len�m serveru otev�en� portu pro datov� spojen� a vr�t� adresu tohoto portu. Vzd�len� server na tomto portu naslouch� a klient se k n�mu p�ipojuje.';

$lang['No_ftp_extensions_installed'] = 'Nem��e� pou��t FTP re�im nahr�v�n� soubor�, proto�e FTP roz���en� nen� vkompilov�no do tv� instalace PHP.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Tady m��e� vymazat p��lohy z p��sp�vk�, pokud doty�n� soubory chyb� a tak� zde m��e� vymazat soubory, kter� ji� nejsou p�ipojeny k ��dn�mu z p��sp�vk�. Kliknut�m na jm�no souboru si jej m��e� prohl�dnout nebo st�hnout na sv�j po��ta�. Pokud jm�no nen� aktivn�, soubor byl ji� n�kdy d��ve vymaz�n.';
$lang['Shadow_attachments_file_explain'] = 'Vyma�e v�echny soubory, kter� jsou v �lo�n�m adres��i, ale nejsou p�i�azeny k ��dn�m p��sp�vk�m.';
$lang['Shadow_attachments_row_explain'] = 'Odstran� z p��sp�vk� v�echny p��lohy, kter� odkazuj� na neexistuj�c� soubory.';
$lang['Empty_file_entry'] = 'Soubor nulov� velikosti';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Znovu vytvo�en n�hled na p��lohu: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Synchronizace p��loh byla dokon�ena.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Nastaven� p��pon';
$lang['Manage_extensions_explain'] = 'Zde m��e� pracovat s jednotliv�mi p��ponami. Pokud chce� povolit nebo zak�zat p�ikl�d�n� soubor� s ur�itou p��ponou, u�ij, pros�m, panelu pro nastaven� p��ponov�ch skupin.';
$lang['Explanation'] = 'Popis';
$lang['Extension_group'] = 'P��ponov� skupina';
$lang['Invalid_extension'] = 'Neplatn� p��pona';
$lang['Extension_exist'] = 'P��pona %s ji� v seznamu figuruje'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'P��pona %s je zak�z�na, proto nem��e b�t p�id�na do seznamu povolen�ch p��pon.'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Nastaven� p��ponov�ch skupin';
$lang['Manage_extension_groups_explain'] = 'Zde m��e� p�id�vat, mazat, �i m�nit nastaven� p��ponov�ch skupin. M��e� tyto skupiny i do�asn� zak�zat, p�i�adit je k jedn� ze zvl�tn�ch kategori�, m�nit zp�sob stahov�n� a m��e� ka�d� skupin� tak� p�i�adit vlastn� ikonku, kter� se v�dy zobraz� u n�zvu ka�d� p��lohy z dan� p��ponov� skupiny.';
$lang['Special_category'] = 'Zvl�tn� kategorie';
$lang['Category_images'] = 'Obr�zky';
$lang['Category_stream_files'] = 'Streamovan� soubory';
$lang['Category_swf_files'] = 'Flashov� soubory';
$lang['Allowed'] = 'Povolena';
$lang['Allowed_forums'] = 'Povolen� f�ra';
$lang['Ext_group_permissions'] = 'Opr�vn�n� p��ponov� skupiny';
$lang['Download_mode'] = 'Zp�sob stahov�n�';
$lang['Upload_icon'] = 'Ikonka skupiny';
$lang['Max_groups_filesize'] = 'Maxim�ln� velikost souboru';
$lang['Extension_group_exist'] = 'P��ponov� skupina %s ji� existuje'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Nastaven� zvl�tn�ch kategori�';
$lang['Manage_categories_explain'] = 'Zde m��e� m�nit nastaven� n�kter�ch zvl�tn�ch kategori� p��ponov�ch skupin.';
$lang['Settings_cat_images'] = 'Nastaven� zvl�tn� kategorie: Obr�zky';
$lang['Settings_cat_streams'] = 'Nastaven� zvl�tn� kategorie: Streamovan� soubory';
$lang['Settings_cat_flash'] = 'Nastaven� zvl�tn� kategorie: Flashov� soubory';
$lang['Display_inlined'] = 'Zobrazit obr�zky?';
$lang['Display_inlined_explain'] = 'Zvol si, chce�-li obr�zky p��mo zobrazit, nebo m�-li se jen vygenerovat odkaz na jejich zobrazen�/sta�en�.';
$lang['Max_image_size'] = 'Maxim�ln� rozm�ry obr�zku';
$lang['Max_image_size_explain'] = 'Zde m��e� nastavit maxim�ln� povolenou velikost obr�zku v pixelech (���ka x v��ka). Pokud jako ob� hodnoty zad� 0, nebude velikost nijak omezena. U n�kter�ch obr�zk� toto nastaven� nemus� fungovat, vzhledem k jist�m omezen�m v PHP.';
$lang['Image_link_size'] = 'Hrani�n� rozm�ry obr�zku';
$lang['Image_link_size_explain'] = 'Pokud tyto rozm�ry nastav� (op�t ���ka x v��ka v pixelech), bude p�i p�ekro�en� jedn� z hodnot obr�zek zobrazen jako odkaz a nebude vlo�en p��mo. Aby p��m� zobrazen� fungovalo, mus� b�t ov�em povoleno v jednom z p�edchoz�ch nastaven�. Pokud zad� do obou pol��ek 0, nebude tato funkce aktivn�. U n�kter�ch obr�zk� toto nastaven� nemus� fungovat, vzhledem k jist�m omezen�m v PHP.';
$lang['Assigned_group'] = 'Tato kategorie byla p�i�azena t�mto p��ponov�m skupin�m';

$lang['Image_create_thumbnail'] = 'Vytv��et n�hled?';
$lang['Image_create_thumbnail_explain'] = 'V�dy vytvo�� n�hled obr�zku. Tato volba anuluje tak�ka v�echna ostatn� nastaven� v t�to zvl�tn� kategorii, s v�jimkou <em>Maxim�ln�ch rozm�r� obr�zku</em>. Povol�-li tuto mo�nost, v p��sp�vku se zobraz� n�hled, na kter� m��e u�ivatel/ka kliknout pro otev�en� obr�zku v p�vodn� velikosti.<br>Vem ale, pros�m, v potaz, �e pro vyu��t� t�to funkce mus� b�t nainstalov�n program <em>Imagick</em>, anebo, pokud PHP b�� v bezpe�n�m re�imu, bude pou�ito GD roz���en�. Typ obr�zku ale mus� b�t v PHP podporov�n, jinak nebude tato funkce vyu�ita.';
$lang['Image_min_thumb_filesize'] = 'Minim�ln� velikost souboru n�hledu';
$lang['Image_min_thumb_filesize_explain'] = 'Jestli�e bude velikost vytvo�en�ho n�hledu men�� ne� tato hodnota, ��dn� n�hled nebude vytvo�en, proto�e by byl p��li� mal�.';
$lang['Image_imagick_path'] = '<em>Imagick</em> (�pln� cesta k programu)';
$lang['Image_imagick_path_explain'] = 'Zadej cestu k programu <em>Imagick</em>. Obvykle je to <em>/usr/bin/convert</em> (nebo <em>c:/imagemagick/convert.exe</em> ve Windows).';
$lang['Image_search_imagick'] = 'Naj�t Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Nastaven� zak�zan�ch p��pon';
$lang['Manage_forbidden_extensions_explain'] = 'Zde m��e� p�id�vat a mazat polo�ky v seznamu zak�zan�ch p��pon. P��pony <em>php, php3</em> a <em>php4</em> jsou zak�z�ny ji� implicitn� z bezpe�nostn�ch d�vod� a nelze je ze seznamu vymazat.';
$lang['Forbidden_extension_exist'] = 'P��pona %s se ji� na seznamu zak�zan�ch p��pon nach�z�'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'P��pona %s figuruje na seznamu povolen�ch p��pon. Mus� ji nejd��ve z onoho seznamu vymazat a a� pak ji m��e� p�idat sem.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Nastaven� opr�vn�n� pro p��ponovou skupinu: %s'; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'P�idej pat�i�n� polo�ky a nakonec klikni na <em>Zav��t okno</em>. Zde m��e� omezit povolen� zvolen� p��ponov� skupiny jen na ur�it� f�ra (jsou pak vyps�na v poli <em>Povolen� f�ra</em>). Implicitn� je ka�d� p��ponov� skupina povolena pro v�echna f�ra, do kter�ch mohou u�ivatel�/ky zas�lat p��sp�vky se souborov�mi p��lohami (tak tomu bylo obvykle ve v�ech p�edchoz�ch verz�ch souborov�ho plug-inu). Jednodu�e p�idej do seznamu ta f�ra, pro kter� chce� danou p��ponovou skupinu (a tedy i v�echny p��pony v n� obsa�en�) povolit, implicitn� hodnota <em>V�ECHNA F�RA</em> zmiz� a nahrad� ji zvolen� f�ra. K p�vodn� hodnot� <em>V�ECHNA F�RA</em> se ale samoz�ejm� m��e� kdykoli pozd�ji vr�tit vybr�n�m p��slu�n� polo�ky. Pokud zalo�� nov� f�rum a m� nastavenu implicitn� hodnotu <em>V�ECHNA F�RA</em>, nic se nezm�n� - dan� p��ponov� skupina bude povolena i v nov� zalo�en�m f�ru. Pokud jsi ale povolil/a tuto p��ponovou skupinu jen pro ur�it� f�ra, bude� se sem muset vr�tit a nov� f�rum p�idat. �lo by to lehce zautomatizovat, ale byl/a bys nucen/a editovat mnoho soubor�, proto byl do�asn� zvolen tento zp�sob. Nutno zd�raznit, �e zde se v�dy objev� v�echna f�ra.';
$lang['Note_admin_empty_group_permissions'] = 'POZN�MKA:<br>U�ivatel�/ky maj� sice povoleno v n�sleduj�c�ch f�rech p�ikl�dat soubory k p��sp�vk�m, ale jeliko� pro n� nebyla povolena ��dn� p��ponov� skupina, nebudou moci soubory p�ikl�dat. Pokud to zkus�, objev� se jim jen chybov� hl�en�. Ve f�rech, jejich� jm�na n�sleduj�, bys tak� m�l/a zkontrolovat opr�vn�n�, t�kaj�c� se p��kl�d�n� souborov�ch p��loh:<br><br>';
$lang['Add_forums'] = 'Seznam f�r pro p�id�n�';
$lang['Add_selected'] = 'P�idat ozna�en�';
$lang['Perm_all_forums'] = 'V�ECHNA F�RA';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Nastaven� p��lohov�ch kv�tn�ch omezen�';
$lang['Manage_quotas_explain'] = 'Zde m��e� p�id�vat/mazat/m�nit kvotn� omezen�. Tato kv�tn� omezen� m��e� pak p�i�adit jednotliv�m u�ivatel�m/k�m a u�ivatelsk�m skupin�m. Pro p�i�azen� kv�tn�ho omezen� n�jak�/mu u�ivateli/ce, mus� p�ej�t do ovl�dac�ho panelu pro administraci u�ivatel�/ek, pot� vyber u�ivatele/ku a v doln� ��sti nalezne� pat�i�n� nastaven�. Pro p�i�azen� kv�tn�ho omezen� u�ivatelsk� skupin�, p�ejdi do ovl�dac�ho panelu pro administraci skupin u�ivatel�/ek, vyber u�ivatelskou skupinu a obejv� se ti doty�n� nastaven�. Ch�e�-li si d�t zobrazit, kte��/� u�ivatel�/ky a u�ivatelsk� skupiny jsou p�i�azeny/i k ur�it�mu kv�tn�mu omezen�, klikn� na \'Zobrazit\' nalevo od popisu kv�ty.';
$lang['Assigned_users'] = 'P�i�azen�/� u�ivatel�/ky';
$lang['Assigned_groups'] = 'P�i�azen� u�ivatelsk� skupiny';
$lang['Quota_limit_exist'] = 'Kv�tn� omezen� %s ji� existuje.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Ovl�dac� panel souborov�ho plug-inu';
$lang['Control_panel_explain'] = 'Zde m��e� pracovat se v�emi p��lohami a prohl�et je (dle u�ivatel�/ek, data, po�tu shl�dnut�/sta�en�, atp.)';
$lang['File_comment_cp'] = 'Koment��';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Hv�zdi�ka (*) nahrad� ��st �et�zce p�i vyhled�v�n�';
$lang['Size_smaller_than'] = 'Velikost p��lohy men�� ne� (v bajtech)';
$lang['Size_greater_than'] = 'Velikost p��lohy v�t�� ne� (v bajtech)';
$lang['Count_smaller_than'] = 'Po�et sta�en�/zobrazen� je men�� ne�';
$lang['Count_greater_than'] = 'Po�et sta�en�/zobrazen� je v�t�� ne�';
$lang['More_days_old'] = 'Star�� ne� tento po�et dn�';
$lang['No_attach_search_match'] = 'Nebyly nalezeny ��dn� p��lohy, kter� by odpov�daly zadan�m krit�ri�m';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Celkov� po�et p��loh';
$lang['Total_filesize'] = 'Celkov� diskov� prostor, kter� p��lohy zab�raj�';
$lang['Number_posts_attach'] = 'Po�et p��sp�vk� s p��lohou';
$lang['Number_topics_attach'] = 'Po�et t�mat s p��lohou';
$lang['Number_users_attach'] = 'Po�et u�ivatel�/ek, kte��/r� zaslali alespo� jednu p��lohu';
$lang['Number_pms_attach'] = 'Celkov� po�et p��loh v soukrom�ch zpr�v�ch';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'P��lohy u�ivatele/ky %s'; // replace %s with username
$lang['Size_in_kb'] = 'Velikost (kB)';
$lang['Downloads'] = 'Po�et sta�en�/zobrazen�';
$lang['Post_time'] = 'Doba zasl�n�';
$lang['Posted_in_topic'] = 'T�ma';
$lang['Submit_changes'] = 'Ulo�it zm�ny';

// Sort Types
$lang['Sort_Attachments'] = 'N�zvu p��lohy';
$lang['Sort_Size'] = 'Velikosti';
$lang['Sort_Filename'] = 'N�zvu souboru';
$lang['Sort_Comment'] = 'Koment��e';
$lang['Sort_Extension'] = 'P��pony';
$lang['Sort_Downloads'] = 'Po�tu sta�en�/zobrazen�';
$lang['Sort_Posttime'] = 'Doby zasl�n�';
$lang['Sort_Posts'] = 'P��sp�vku';

// View Types
$lang['View_Statistic'] = 'Statistiku';
$lang['View_Search'] = 'Vyhled�v�n�';
$lang['View_Username'] = 'U�ivatele/ky';
$lang['View_Attachments'] = 'P��lohy';

// Successfully updated
$lang['Attach_config_updated'] = 'Nov� nastaven� souborov�ho plug-inu bylo v po��dku ulo�eno';
$lang['Click_return_attach_config'] = 'Klikni %ssem%s pro n�vrat do nastaven� p��loh';
$lang['Test_settings_successful'] = 'Testov�n� prob�hlo bez probl�m� a nastaven� se zd� b�t v po��dku.';

// Some basic definitions
$lang['Attachments'] = 'P��lohy';
$lang['Attachment'] = 'P��loha';
$lang['Extensions'] = 'P��pony';
$lang['Extension'] = 'P��pona';

// Auth pages
$lang['Auth_attach'] = 'Zaslat soubory';
$lang['Auth_download'] = 'St�hnout soubory';

?>