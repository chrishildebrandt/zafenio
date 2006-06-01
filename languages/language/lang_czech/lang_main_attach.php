<?php
/***************************************************************************
 *                            lang_main_attach.php [Czech/conversational]
 *                            -------------------------------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *     plug-in version      : 2.3.5
 *     translation          : mik.mik@aalab.cz
 *     www                  : http://www.aalab.cz
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:31:23 bob Exp $
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
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = "<b>M��e�</b> k p��sp�vk�m p�ipojovat soubory";
$lang['Rules_attach_cannot'] = "<b>Nem��e�</b> p�ipojovat soubory k p��sp�vk�m";
$lang['Rules_download_can'] = "<b>M��e�</b> stahovat a prohl�et p�ilo�en� soubory";
$lang['Rules_download_cannot'] = "<b>Nem��e�</b> stahovat ani prohl�et p�ilo�en� soubory";
$lang['Sorry_auth_view_attach'] = "Promi�, ale nem� opr�vn�n� pro zobrazen� nebo sta�en� tohoto souboru";

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Koment��'; // used in Administration Panel too...
$lang['Downloaded'] = 'Sta�eno';
$lang['Download'] = 'St�hnout'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Velikost';
$lang['Viewed'] = 'Zobrazeno';
$lang['Download_number'] = '%d kr�t'; // replace %d with count
$lang['Extension_disabled_after_posting'] = "P��pona '%s' nebyla dosud povolena administr�torem/kou tohoto f�ra. Proto nen� moment�ln� p�ilo�en� soubor dostupn�."; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = "P��lohy";
$lang['Attach_posting_cp_explain'] = "<table cellspacing=2 width=100%><tr><td class=gensmall valign=top width=1><b>&middot;</b></td><td class=gensmall valign=top>Klikne�-li na <i>P�ipojit soubor</i>, otev�e se ti panel pro p�id�n� nov� souborov� p��lohy.</td></tr><tr><td class=gensmall valign=top><b>&middot;</b></td><td class=gensmall valign=top>Kliknut�m na <i>Seznam p��loh</i> se ti otev�e seznam aktu�ln�ch p��loh (m��e� je mazat i upravovat)</td></tr><tr><td class=gensmall valign=top><b>&middot;</b></td><td class=gensmall valign=top>Chce�-li p�epsat n�kter� ze soubor� (t�eba jeho nov�j�� verz�), klikni na ob� dv� tla��tka. Potom postupuj jako p�i p�ikl�d�n� nov�ho souboru, jen nakonec neklikej na <i>P�ipojit soubor</i>, ale klikni na tla��tko <i>P�epsat nov�j�� verz�</i> u st�vaj�c�ho souboru, kter� chce� p�epsat. Pokud se komnent�� nem�n�, nen� jej t�eba znovu zad�vat.</td></tr></table>";

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = "P�ipojit soubor";
$lang['Add_attachment_title'] = "P�ipojit soubor";
$lang['Add_attachment_explain'] = "Pokud ��dn� soubor p�ikl�dat nechce�, prost� jen nech tato formul��ov� pole pr�zdn�";
$lang['File_name'] = "Soubor";
$lang['File_comment'] = "Koment��";

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = "Seznam p��loh";
$lang['Options'] = "Mo�nosti";
$lang['Update_comment'] = "Aktualizovat koment��";
$lang['Delete_attachments'] = "Smazat p��lohy";
$lang['Delete_attachment'] = "Smazat p��lohu";
$lang['Delete_thumbnail'] = "Smazat n�hled";
$lang['Upload_new_version'] = "P�epsat nov�j�� verz�";

// Errors -> Posting Attachments
$lang['Invalid_filename'] = "%s nen� platn� jm�no souboru"; // replace %s with given filename
$lang['Attachment_php_size_na'] = "Soubor je p��li� velk�.<br>Nem��u zjistit maxim�ln� definovanou velikost souboru v PHP konfiguraci (php.ini).";
$lang['Attachment_php_size_overrun'] = "Soubor je p��li� velk�.<br>Maxim�ln� povolen� velikost je: %dMB.<br>Tato velikost je determinov�na konfigurac� PHP (php.ini) a nikoliv administr�torem/kou tohoto f�ra."; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = "P��pona %s nebyla dosud povolena"; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'P��pona %s nebyla dosud v tomto f�ru povolena'; // replace %s with the Extension
$lang['Attachment_too_big'] = "Soubor je p��li� velk�.<br />Maxim�ln� povolen� velikost je: %d%s."; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = "Promi�, ale celkov� diskov� prostor vyhrazen� v�em p��loh�m v�ech u�ivatel�/ek byl u� vy�erp�n. M�-li n�jak� dotazy, kontaktuj administr�tora/ku f�ra.";
$lang['Too_many_attachments'] = "Tento soubor ji� nem��e b�t p�id�n. Jeden p��sp�vek toti� nem��e obsahovat v�ce jak %d p��loh."; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = "Obr�zek nesm� b�t �ir�� ne� %d bod� nebo vy��� ne� %d bod�."; 
$lang['General_upload_error'] = "Chyba p�enosu: Nen� mo�no zapisovat do %s. Kontaktuj, pros�m, administr�tora/ku."; // replace %s with local path

$lang['Error_empty_add_attachbox'] = "Pro p�id�n� souboru je t�eba vyplnit v�echna pot�ebn� pol��ka.";
$lang['Error_missing_old_entry'] = "Nen� mo�n� aktualizovat p��lohu. Star� verze nebyla nalezena.";

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = "Promi�, ale maxim�ln� povolen� d�lka soubor� v soukrom�ch zpr�v�ch byla p�ekro�ena. Pros�m, sma� n�kter� ze star��ch p��loh tv�ch p�ijat�ch/odeslan�ch soukrom�ch zpr�v.";
$lang['Attach_quota_receiver_pm_reached'] = "Promi�, ale u�ivatel/ka, kter�/mu chce� poslat soukromou zpr�vu s p��lohou, p�ekro�il/a maxim�ln� povolenou d�lku soubor� '%s' v soukrom�ch zpr�v�ch. Upozorni jej/ji, a� sma�e n�kter� ze star��ch p��loh sv�ch p�ijat�ch/odeslan�ch soukrom�ch zpr�v.";

// Errors -> Download
$lang['No_attachment_selected'] = "Je t�eba nejd��ve zvolit p��lohu, kterou chcete zobrazit nebo st�hnout.";
$lang['Error_no_attachment'] = "Zvolen� p��loha ji� neexistuje.";

// Delete Attachments
$lang['Confirm_delete_attachments'] = "Opravdu chce� smazat tyto p��lohy?";
$lang['Deleted_attachments'] = "Ozna�en� p��lohy byly �sp�n� vymaz�ny.";
$lang['Error_deleted_attachments'] = "Chyba: Nem��u smazat tyto p��lohy. Kontaktuj, pros�m, administr�tora/ku f�ra.";
$lang['Confirm_delete_pm_attachments'] = "Opravdu chce� smazat v�echny p��lohy t�to soukrom� zpr�vy?";

// General Error Messages
$lang['Attachment_feature_disabled'] = "Funkce pro p�ikl�d�n� soubor� k p��sp�vk�m byla do�asn� vypnuta.";

$lang['Directory_does_not_exist'] = "Adres�� \'%s\' bu� neexistuje, nebo nem��e b�t nalezen."; // replace %s with directory
$lang['Directory_is_not_a_dir'] = "Pros�m, ov��, jestli je \'%s\' opravdu adres��."; // replace %s with directory
$lang['Directory_not_writeable'] = "Do adres��e \'%s\' nen� mo�no zapisovat."; // replace %s with directory

$lang['Ftp_error_connect'] = "Spojen� k FTP serveru \'%s\' se nezda�ilo. Pros�m, ov�� nastaven�.";
$lang['Ftp_error_login'] = "P�ihl�en� k FTP serveru se nezda�ilo. U�ivatelsk� jm�no \'%s\' nebo heslo nejsou spr�vn�. Pros�m, ov�� nastaven�.";
$lang['Ftp_error_path'] = "Vzd�len� FTP adres�� nebyl nalezen: \'%s\'. Pros�m, ov�� nastaven�.";
$lang['Ftp_error_upload'] = "Nebyl povolen p��stup k vzd�len�mu FTP adres��i \'%s\'. Pros�m, ov�� nastaven�.";
$lang['Ftp_error_delete'] = "Nen� mo�n� mazat soubory ve vzd�len�m FTP adres��i \'%s\'. Pros�m, ov�� nastaven�.<br>Dal��m vysv�tlen�m tohoto probl�mu by bylo to, kdyby tato p��loha ji� neexistovala. Pros�m, ov�� st�nov� p��lohy v panelu administr�tora/ky.";
$lang['Ftp_error_pasv_mode'] = 'Nelze vypnout/zapnout pasivn� re�im FTP p�enosu';

// Attach Rules Window
$lang['Rules_page'] = 'Pravidla pro p��pony';
$lang['Attach_rules_title'] = 'Povolen� skupiny p��pon a jejich velikost';
$lang['Group_rule_header'] = '%s -> Maxim�ln� povolen� velikost: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Povolen� p��pony a jejich velikost';
$lang['Note_user_empty_group_permissions'] = 'POZN�MKA:<br>M� sice povoleno p�ikl�dat soubory k p��sp�vk�m v tomto f�ru, ale jeliko� v tomto konkr�tn�m f�ru nebyla povolena ��dn� skupina p��pon, nebude� moci soubory p�ikl�dat. Pokud to zkus�, objev� se ti jen chybov� hl�en�.';

// Quota Variables
$lang['Upload_quota'] = 'P��lohy';
$lang['Pm_quota'] = 'Soukrom� zpr�vy';
$lang['User_upload_quota_reached'] = 'Promi�, ale p�es�hl/a jsi maxim�ln� povolenou kv�tu pro p�ikl�d�n� souborov�ch p��loh. Tato kv�ta v tv�m p��pad� �in� %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Nastaven�';
$lang['UACP'] = 'U�ivatelsk� ovl�dac� panel souborov�ch p��loh';
$lang['User_uploaded_profile'] = 'Vyu�ito: %s';
$lang['User_quota_profile'] = 'Kv�ta: %s';
$lang['Upload_percent_profile'] = '%d%% z povolen� kv�ty';

// Common Variables
$lang['Bytes'] = "Bajt�";
$lang['KB'] = "kB";
$lang['MB'] = "MB";
$lang['Attach_search_query'] = "Hledat p��lohy";
$lang['Test_settings'] = "Ov��it nastaven�";
$lang['Not_assigned'] = "Nep�i�azeno";
$lang['No_file_comment_available'] = "Koment�� nen� dostupn�";
$lang['Attachbox_limit'] = 'Tv�j p��lohov� box je z %d%% pln�';
$lang['No_quota_limit'] = 'Bez omezen�';
$lang['Unlimited'] = 'Neomezeno';

?>