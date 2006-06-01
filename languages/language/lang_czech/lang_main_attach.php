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
// Czech / conversational (hovorová èeština)

//
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = "<b>Mùžeš</b> k pøíspìvkùm pøipojovat soubory";
$lang['Rules_attach_cannot'] = "<b>Nemùžeš</b> pøipojovat soubory k pøíspìvkùm";
$lang['Rules_download_can'] = "<b>Mùžeš</b> stahovat a prohlížet pøiložené soubory";
$lang['Rules_download_cannot'] = "<b>Nemùžeš</b> stahovat ani prohlížet pøiložené soubory";
$lang['Sorry_auth_view_attach'] = "Promiò, ale nemáš oprávnìní pro zobrazení nebo stažení tohoto souboru";

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Komentáø'; // used in Administration Panel too...
$lang['Downloaded'] = 'Staženo';
$lang['Download'] = 'Stáhnout'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Velikost';
$lang['Viewed'] = 'Zobrazeno';
$lang['Download_number'] = '%d krát'; // replace %d with count
$lang['Extension_disabled_after_posting'] = "Pøípona '%s' nebyla dosud povolena administrátorem/kou tohoto fóra. Proto není momentálnì pøiložený soubor dostupný."; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = "Pøílohy";
$lang['Attach_posting_cp_explain'] = "<table cellspacing=2 width=100%><tr><td class=gensmall valign=top width=1><b>&middot;</b></td><td class=gensmall valign=top>Klikneš-li na <i>Pøipojit soubor</i>, otevøe se ti panel pro pøidání nové souborové pøílohy.</td></tr><tr><td class=gensmall valign=top><b>&middot;</b></td><td class=gensmall valign=top>Kliknutím na <i>Seznam pøíloh</i> se ti otevøe seznam aktuálních pøíloh (mùžeš je mazat i upravovat)</td></tr><tr><td class=gensmall valign=top><b>&middot;</b></td><td class=gensmall valign=top>Chceš-li pøepsat nìkterý ze souborù (tøeba jeho novìjší verzí), klikni na obì dvì tlaèítka. Potom postupuj jako pøi pøikládání nového souboru, jen nakonec neklikej na <i>Pøipojit soubor</i>, ale klikni na tlaèítko <i>Pøepsat novìjší verzí</i> u stávajícího souboru, který chceš pøepsat. Pokud se komnentáø nemìní, není jej tøeba znovu zadávat.</td></tr></table>";

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = "Pøipojit soubor";
$lang['Add_attachment_title'] = "Pøipojit soubor";
$lang['Add_attachment_explain'] = "Pokud žádný soubor pøikládat nechceš, prostì jen nech tato formuláøová pole prázdná";
$lang['File_name'] = "Soubor";
$lang['File_comment'] = "Komentáø";

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = "Seznam pøíloh";
$lang['Options'] = "Možnosti";
$lang['Update_comment'] = "Aktualizovat komentáø";
$lang['Delete_attachments'] = "Smazat pøílohy";
$lang['Delete_attachment'] = "Smazat pøílohu";
$lang['Delete_thumbnail'] = "Smazat náhled";
$lang['Upload_new_version'] = "Pøepsat novìjší verzí";

// Errors -> Posting Attachments
$lang['Invalid_filename'] = "%s není platné jméno souboru"; // replace %s with given filename
$lang['Attachment_php_size_na'] = "Soubor je pøíliš velký.<br>Nemùžu zjistit maximální definovanou velikost souboru v PHP konfiguraci (php.ini).";
$lang['Attachment_php_size_overrun'] = "Soubor je pøíliš velký.<br>Maximální povolená velikost je: %dMB.<br>Tato velikost je determinována konfigurací PHP (php.ini) a nikoliv administrátorem/kou tohoto fóra."; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = "Pøípona %s nebyla dosud povolena"; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'Pøípona %s nebyla dosud v tomto fóru povolena'; // replace %s with the Extension
$lang['Attachment_too_big'] = "Soubor je pøíliš velký.<br />Maximální povolená velikost je: %d%s."; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = "Promiò, ale celkový diskový prostor vyhrazený všem pøílohám všech uživatelù/ek byl už vyèerpán. Máš-li nìjaké dotazy, kontaktuj administrátora/ku fóra.";
$lang['Too_many_attachments'] = "Tento soubor již nemùže být pøidán. Jeden pøíspìvek totiž nemùže obsahovat více jak %d pøíloh."; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = "Obrázek nesmí být širší než %d bodù nebo vyšší než %d bodù."; 
$lang['General_upload_error'] = "Chyba pøenosu: Není možno zapisovat do %s. Kontaktuj, prosím, administrátora/ku."; // replace %s with local path

$lang['Error_empty_add_attachbox'] = "Pro pøidání souboru je tøeba vyplnit všechna potøebná políèka.";
$lang['Error_missing_old_entry'] = "Není možné aktualizovat pøílohu. Stará verze nebyla nalezena.";

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = "Promiò, ale maximální povolená délka souborù v soukromých zprávách byla pøekroèena. Prosím, smaž nìkteré ze starších pøíloh tvých pøijatých/odeslaných soukromých zpráv.";
$lang['Attach_quota_receiver_pm_reached'] = "Promiò, ale uživatel/ka, které/mu chceš poslat soukromou zprávu s pøílohou, pøekroèil/a maximální povolenou délku souborù '%s' v soukromých zprávách. Upozorni jej/ji, a smaže nìkteré ze starších pøíloh svých pøijatých/odeslaných soukromých zpráv.";

// Errors -> Download
$lang['No_attachment_selected'] = "Je tøeba nejdøíve zvolit pøílohu, kterou chcete zobrazit nebo stáhnout.";
$lang['Error_no_attachment'] = "Zvolená pøíloha již neexistuje.";

// Delete Attachments
$lang['Confirm_delete_attachments'] = "Opravdu chceš smazat tyto pøílohy?";
$lang['Deleted_attachments'] = "Oznaèené pøílohy byly úspìšnì vymazány.";
$lang['Error_deleted_attachments'] = "Chyba: Nemùžu smazat tyto pøílohy. Kontaktuj, prosím, administrátora/ku fóra.";
$lang['Confirm_delete_pm_attachments'] = "Opravdu chceš smazat všechny pøílohy této soukromé zprávy?";

// General Error Messages
$lang['Attachment_feature_disabled'] = "Funkce pro pøikládání souborù k pøíspìvkùm byla doèasnì vypnuta.";

$lang['Directory_does_not_exist'] = "Adresáø \'%s\' buï neexistuje, nebo nemùže být nalezen."; // replace %s with directory
$lang['Directory_is_not_a_dir'] = "Prosím, ovìø, jestli je \'%s\' opravdu adresáø."; // replace %s with directory
$lang['Directory_not_writeable'] = "Do adresáøe \'%s\' není možno zapisovat."; // replace %s with directory

$lang['Ftp_error_connect'] = "Spojení k FTP serveru \'%s\' se nezdaøilo. Prosím, ovìø nastavení.";
$lang['Ftp_error_login'] = "Pøihlášení k FTP serveru se nezdaøilo. Uživatelské jméno \'%s\' nebo heslo nejsou správné. Prosím, ovìø nastavení.";
$lang['Ftp_error_path'] = "Vzdálený FTP adresáø nebyl nalezen: \'%s\'. Prosím, ovìø nastavení.";
$lang['Ftp_error_upload'] = "Nebyl povolen pøístup k vzdálenému FTP adresáøi \'%s\'. Prosím, ovìø nastavení.";
$lang['Ftp_error_delete'] = "Není možné mazat soubory ve vzdáleném FTP adresáøi \'%s\'. Prosím, ovìø nastavení.<br>Dalším vysvìtlením tohoto problému by bylo to, kdyby tato pøíloha již neexistovala. Prosím, ovìø stínové pøílohy v panelu administrátora/ky.";
$lang['Ftp_error_pasv_mode'] = 'Nelze vypnout/zapnout pasivní režim FTP pøenosu';

// Attach Rules Window
$lang['Rules_page'] = 'Pravidla pro pøípony';
$lang['Attach_rules_title'] = 'Povolené skupiny pøípon a jejich velikost';
$lang['Group_rule_header'] = '%s -> Maximální povolená velikost: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Povolené pøípony a jejich velikost';
$lang['Note_user_empty_group_permissions'] = 'POZNÁMKA:<br>Máš sice povoleno pøikládat soubory k pøíspìvkùm v tomto fóru, ale jelikož v tomto konkrétním fóru nebyla povolena žádná skupina pøípon, nebudeš moci soubory pøikládat. Pokud to zkusíš, objeví se ti jen chybové hlášení.';

// Quota Variables
$lang['Upload_quota'] = 'Pøílohy';
$lang['Pm_quota'] = 'Soukromé zprávy';
$lang['User_upload_quota_reached'] = 'Promiò, ale pøesáhl/a jsi maximální povolenou kvótu pro pøikládání souborových pøíloh. Tato kvóta v tvém pøípadì èiní %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Nastavení';
$lang['UACP'] = 'Uživatelský ovládací panel souborových pøíloh';
$lang['User_uploaded_profile'] = 'Využito: %s';
$lang['User_quota_profile'] = 'Kvóta: %s';
$lang['Upload_percent_profile'] = '%d%% z povolené kvóty';

// Common Variables
$lang['Bytes'] = "Bajtù";
$lang['KB'] = "kB";
$lang['MB'] = "MB";
$lang['Attach_search_query'] = "Hledat pøílohy";
$lang['Test_settings'] = "Ovìøit nastavení";
$lang['Not_assigned'] = "Nepøiøazeno";
$lang['No_file_comment_available'] = "Komentáø není dostupný";
$lang['Attachbox_limit'] = 'Tvùj pøílohový box je z %d%% plný';
$lang['No_quota_limit'] = 'Bez omezení';
$lang['Unlimited'] = 'Neomezeno';

?>