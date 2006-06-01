<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [German]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     copyright            : (C) 2003 the PNphpBB2 Group
 *     email                : support@pnphpbb.com
 *
 *     $Id: lang_pnphpbb2_admin.php,v 1.8 2003/07/29 17:58:26 bobt Exp $
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

/*********************************************************************************
 * German Translation by:
 * Michael Hille (mihil) web@xp-tipps-tricks.de || http://www.xp-tipps-tricks.de
 ********************************************************************************/
//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

// Installation
$lang['PNphpBB2_Install'] = "PNphpBB2 Installation";
$lang['PNphpBB2_Install_Title'] = "<h4>Installiere PNphpBB2 Tabellen nach " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Install_Complete'] = "<p><b>PNphpBB2 Grundinstallation ist jetzt beendet.<br /><br />Click on the " . $lang['Finish_Install'] . " to return to the PN module administration page, and activate PNphpBB2.<br /><br />Once activated you can access the forum administration page through the PN administration page (PNphpBB2) or with the link at the bottom of the forum.<br /><br />Please be sure to check the General Configuration details and make any required changes. Thank you for choosing PNphpBB2.</b></p>";
// Update
$lang['PNphpBB2_Upgrade'] = "PNphpBB2 Update";
$lang['PNphpBB2_Move_Tables_No'] = "<p><b>Es existieren schon Tabellen in " . $table_prefix . "*. The tables located in " . $old_table_prefix . " can not be moved.</b></p>";
$lang['PNphpBB2_Move_Tables_Yes'] = "<h4>Verschiebe Tabellen zur neuen Stelle</h4>";
$lang['PNphpBB2_Move_Complete'] = "<h4>Verschieben nach " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Database_Type'] = "Datenbank Typ";
$lang['PNphpBB2_Prev_Version'] = "Vorherige Version &nbsp;:: ";
$lang['PNphpBB2_Upgrade_Version'] = "Aktualisierte Version &nbsp;:: ";
$lang['PNphpBB2_Update_Schemas'] = "<h4>Aktualisiere Datenbank Schema</h4>";
$lang['PNphpBB2_No_Updates'] =  "<h4>Keine Aktualisierung erforderlich</h4>";
$lang['PNphpBB2_Update_Data'] = "<h4>Aktualisiere Daten</h4>";
$lang['PNphpBB2_Attach'] = "Attachment Mod Version ";
$lang['PNphpBB2_Updating_Paths'] = "<h4>Aktualisiere Konfigurationspfade</h4>";
$lang['PNphpBB2_Delete_Themes'] = "<h4>L�che alte Themen/Style Datens�ze</h4>";
$lang['PNphpBB2_Install_Themes'] = "<h4>Installiere neue Themen  (PNTheme-1, PNLite-2, subSilver-3)</h4>";
$lang['PNphpBB2_Board_Theme'] = "<h4>Setze Forum Standardthema auf PNTheme</h4>";
$lang['PNphpBB2_User_Theme'] = "<h4>Setze Thema fr alle Benutzer auf PNTheme</h4>";
$lang['PNphpBB2_Clear_Sessions'] = "<h4>L�che ALLE Sessions von der Session Tabelle</h4>";
$lang['PNphpBB2_Cant_SQL'] = "<p>KANN MSSQL-TABELLE NICHT �DERN. BITTE FOLGENDES MANUELL AUSF�REN:<br />IN PHPBB_QUOTA_LIMITS, �dere QUOTA_LIMIT TO VON INT TO BIGINT.</p>";
$lang['PNphpBB2_Update_Complete'] = "<p><b>NphpBB2 Aktualisierung ist nun vollst�dig..<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Falls Du auf irgendwelche Fehler w�rend der Aktualisierung gestossen bist, dann drucke diese Seite und besuch das Forum auf http://www.pnphpbb.com fr weitere Untersttzung.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Bitte aktiviere dieses Modul, bevor Du fortf�rst und berprfe dann die gesamte Konfigurationseinstellungen auf der Administration Seite.<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Wenn das Attachment Modul w�rend dieses Prozesses installiert wurde, dann mu� Du es aktivieren, wenn Du es benutzen m�htest..<br /><br />";
$lang['PNphpBB2_Update_Complete'] .= "Danke, dass Du Dich fr PNphpBB2 entschieden hast.</b></p>";
$lang['PNphpBB2_phpBB_Tables_Found'] = "<h5>phpBB_* Tabellen wurden in deiner PostNuke Datenbank gefunden. Es ist sehr wichtig";
$lang['PNphpBB2_phpBB_Tables_Found'] .= " dass du verstehst was dieses Script tut. </h5>";
$lang['PNphpBB2_three_options'] = "Du Hast drei (3) Optionen zu diesem Zeitpunkt";
$lang['PNphpBB2_option_one'] = "1) Upgrade von einer vorherigen Version  PNphpBB2 .10b, phpBB2pnmod-203,";
$lang['PNphpBB2_option_one'] .= " phpBB2pnmod-203-Attachments, oder phpBB2pnmod-F.";
$lang['PNphpBB2_option_two'] = "2) Upgrade von einer StandAlone phpBB2 (Version 2.0.1-2.0.4)";
$lang['PNphpBB2_option_three'] = "3) Konvertierung abbrechen";
$lang['PNphpBB2_Upgrade_Disclaimer'] = "Wichtig! Wenn du Option zwei (2) waehlst,werden ALLE User ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "in der Postnukedatenbank gloescht und durch die Userinformationen ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "in den phpBB2-tabellen ersetzt</br></br>Wenn dies durchgefhrt wurde, gibt es kein Zurck, darum ";
$lang['PNphpBB2_Upgrade_Disclaimer'] .= "stelle sicher, dass eine aktuelle Sicherung deiner Postnuke und phpBB2 Datenbank vorhanden ist.";
$lang['PNphpBB2_bad_version_1'] = "Du kannst nur von Version 2.0.1 oder hoeher upgraden. Deine Version ist 2";
$lang['PNphpBB2_bad_version_2']  = "</br>Bitte berprfe die Versionsinformationen bevor du fortf�rst.";
$lang['PNphpBB2_bad_version_3'] = "Fuer diese Version ist kein Upgrade erforderlich, Die in der Datenbank gefundene Version ist X$version ";
$lang['PNphpBB2_no_version'] = "Es konnten keine Versionsinformationen eingeholt werden.";
$lang['PNphpBB2_Updating_links'] = "Updating post links";
// Removal
$lang['PNphpBB2_Remove_Prompt'] = "Entferne PNphpBB2";
$lang['PNphpBB2_Remove_Text'] = "Du bist dabei PNphpBB2 und alle damit verbundene Datenbanken von PostNuke (" . $table_prefix . "*).<br /><br />Alle Daten gehen verloren. Bist Du sicher, dass Du das durchfhren m�htest?";
$lang['PNphpBB2_Remove_Title'] = "<h4>Entferne PNphpBB2 Tabellen von " . $table_prefix . "*</h4>";
$lang['PNphpBB2_Remove_Notes'] = "<p><b>Die PNphpBB2 Tabellen sind entfernt worden. Um die Entfernung vollst�dig durchzufhren, gehe zurck zur Modul Administration und entferne PNphpBB2 erneut.</b></p>";

// General
$lang['PNphpBB2_Running'] = "Laeuft";
$lang['PNphpBB2_Failed'] = "Fehlgeschlagen";
$lang['PNphpBB2_ButOK'] = "ABER OK!";
$lang['PNphpBB2_Completed'] = "Komplett";
$lang['PNphpBB2_Done'] = "Fertig";
$lang['PNphpBB2_Aborted'] = "Abgebrochen";
$lang['PNphpBB2_Cancel'] = "Abbrechen";
$lang['PNphpBB2_Progress'] = "<h4>Fortschritt</h4>";
$lang['PNphpBB2_Some_Failed'] = "<p><b>Einige Abfragen sind fehlgeschlagen. Die Abfragen und Fehler sind unten aufgefhrt:<br />(Einige Aktionen sind notwendig um Tabellen oder Datens�ze hinzuzufgen, zu �dern oder zu l�chen)</b></p><br />";
$lang['PNphpBB2_No_Errors'] = "<h4>Keine Fehler</h4>";
$lang['PNphpBB2_Results'] = "<h4>Ergebnisse</h4>";
$lang['PNphpBB2_Installing'] = "Installiere";
$lang['PNphpBB2_Updating'] = "Aktualisiere";
$lang['PNphpBB2_Important'] = "WICHTIG";

// Additional administration links
$lang['Users_aguide'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/attach_user_guide.html\" target=\"_blank\">Users Guide</a>";
$lang['Forum_Manual'] = "<a href=\"" . pnGetBaseURL() . "modules/PNphpBB2/docs/phpBB_2_0_Users_Guide.html\" target=\"_blank\">User Manual</a>";
// PNphpBB2 config options
$lang['pnphpbb2_settings'] = "PNphpBB2 Konfiguration";
$lang['pnphpbb2_settings_explain'] = "Hier kannst du Optionen und Einstellungen des PNphpBB2-Modules vornehmen.";
$lang['pnphpbb2_options'] = "PNphpBB2 Optionen/Mods";
$lang['pnphpbb2_quickreply'] = "Benutze Schnelle Antwort (QuickReply).";
$lang['pnphpbb2_quickreply_explain'] = "Aktiviere oder Deaktiviere das Schnelle Antwort Feature.";
$lang['pnphpbb2_logo_on'] = "Zeige das PNphpBB2 Logo im Forum";
$lang['pnphpbb2_logo_on_explain'] = "Aktiviere das PNphpBB2-Logo im Forum. (Falls du das Logo nicht anzeigen moechtest,behalte BITTE die Credits Information im Fuss des Forums bei)";
$lang['pnphpbb2_shorturls'] = "Kurze URL's in Beitraegen";
$lang['pnphpbb2_shorturls_explain'] = "Aktiviere oder Deaktiviere die Nutzung kurzer URL's in Beitr�en.";
$lang['pnphpbb2_post_order'] = "Art der Sortierung der Forum Beitr�e";
$lang['pnphpbb2_post_order_explain'] = "Standardeinstellung der Anzeige von Beitraegen.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(Dies kann durch die Einstellungen im Forum berschrieben werden)";
$lang['pnphpbb2_post_confirm'] = "Deaktiviere Beitragsbestaetigung";
$lang['pnphpbb2_post_confirm_explain'] = "Dies deaktiviert den Beitragsbestaetigungbildschirm fuer alle Beitraege. Bei Deaktivierung wird der User automatisch zurck zum Thema und dem geschriebenen Beitrag geleitet.";

$lang['pnphpbb2_allow_full_page'] = "Erlaube das Minimieren/Maximieren (Vollbildansicht) des Forums";
$lang['pnphpbb2_allow_full_page_explain'] = "Gestattet Usern das Forum zur Vollbildansicht zu Maximieren/Minimieren unabh�gig von den Themeinstellungenen";

$lang['pnphpbb2_full_page'] = "Voreinstellung Forum als Vollbild (Maximieren) Ansicht";
$lang['pnphpbb2_full_page_explain'] = "Ermoeglicht dem Administrator die Ansicht des Forums entweder als Vollbildanzeige oder innerhalb des Postnuketheme.";
$lang['pnphpbb2_pn_pm'] = "Benutze Postnuke's Private Messaging System";
$lang['pnphpbb2_pn_pm_explain'] = "Erm�licht das Postnuke's Private Messaging System durch das Forum Private Messaging System zu ersetzten.";
$lang['pnphpbb2_pn_link'] = "Link um User zurck zur Postnuke Seite zu leiten";
$lang['pnphpbb2_pn_link_explain'] = "Dies muss ein gueltiger Html-Link sein der zurck zur Hauptseite fuehrt, bei Anzeige des Forums ausserhalb des Postnukethemes.";
$lang['pnphpbb2_pn_text'] = "Text der fuer den Link agezeigt werden soll";
$lang['pnphpbb2_pn_text_explain'] = "Dies ist der Text fuer den Link, es kann irgendein Text oder Html-Code sein. (Kann einen Image-Link enthalten).";
$lang['pnphpbb2_members_online'] = "Deaktiviere Who's Online block im Forum index";
$lang['pnphpbb2_members_online_explain'] = "Gestattet dem Administrator den Who's Online Block im Fuss des Forumindex zu deaktivieren.";
$lang['pnphpbb2_members_online_annon'] = "Verstecke den  Who's Online Block vor anonymen Usern";
$lang['pnphpbb2_members_online_annon_explain'] = "Falls nicht deaktiviert, verhindert diese Einstellung die Anzeige des Who's Online Block fuer Anonyme User.";
$lang['pnphpbb2_template_compiler'] = "Benutze den neuen template compiler";
$lang['pnphpbb2_template_compiler_explain'] = "Benutze das eXtreme Styles mod von Vjacheslav Trushkin <slava@trushkin.net> </br>Dieses Modul ist eine stark optimierte Version des phpBB templates system und hat einige zus�zliche Features. Es compiliert und fhrt Dateien viel schneller aus, besitzt ein Cache system welches Templates deutlich beschleunigt, erlaubt die Nutzung von php in Templates und einige andere neue Features. Dies ist eine Testversion und arbeitet evtl. mit manchen Modulen nicht korrekt zusammen.";
$lang['pnphpbb2_updated'] = "PNphpBB2 Konfiguration updated";
$lang['pnphpbb2_click_return_config'] = "Klicke %sHier%s um zur PNphpBB2 Konfiguration zurckzukehren";

$lang['pnphpbb2_allow_sub_change'] = "Erlaube Usern umzuschalten zwischen Kategorie/Sub-forum Modus";
$lang['pnphpbb2_allow_sub_change_explain'] = "Gestattet den Usern die Wahl zwischen der Anzeige als Sub-Kategorie, oder Sub-Forum Ansicht. Falls die Benutzung des sub-category/forum mod nicht moechtest erstelle einfach keine sub-category/Foren.";

$lang['pnphpbb2_index_announce'] = "Anzeige von Ankuendigungen im Forum-Index";
$lang['pnphpbb2_index_announce_explain'] = "Ermoeglicht die Anzeige von Ankuendigungen in der Forenuebersicht.";
// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>
$lang['xs_warning'] = 'Warnung: Cache konnte nicht geschrieben werden!.';
$lang['xs_warning_explain'] = '�erpruefe ob der Ordner erstellt wurde in dem der Cache gespeichert wird und aendere die Berechtigung (chmod) auf 777 damit das Script den Cache dort anlegen kann. Falls der Server im safe mode l�ft solltest du "." als Dateinamenseparator verwenden damit saemtlicher Cache im selben Verzeichnis gespeichert wird (siehe die Separatoreinstellungen unten).<br /><br />Falls der Cache aus irgendwelchen Gruenden auf deinem Server nicht arbeitet  keine Sorge - eXtreme Styles mod beschleinigt die Forumgeschwindigkeit haeufig ohne Cache.';
$lang['xs_updated'] = 'Konfiguration updated.';
$lang['xs_updated_explain'] = 'Diese Seite muss aktualisiert werden bevor die neue Konfiguration wirksam wird. <a href="%s">Klick hier</a> zum aktualisieren.';
// ACP navigation bar
$lang['Extreme_Styles'] = 'eXtreme Styles';
if(empty($lang['Updates']))
{
	$lang['Updates'] = 'Updates';
}
if(empty($lang['Styles']))
{
	$lang['Styles'] = 'Styles';
}
// Headers
$lang['xs_settings'] = 'eXtreme Styles mod v%s Einstellungen';
$lang['xs_settings_cache'] = 'Cache Konfiguration';
// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Benutze Cache';
$lang['xs_cache_explain'] = 'Der Cache ist gespeichert und beschleunigt das Templatessystem darum ist es nicht noetig Templates jedesmal zu Kompilieren.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'Cache Verzeichnis';
$lang['xs_cache_dir_explain'] = 'Gesamter Cache wird in das Verzeichnis geschrieben (und/oder Unterverzeichnisse). Dateien mit gleichem Namen werden ueberschrieben. Benutze nicht "/" vor dem Verzeichnisnamen es sei denn der Verzeichnisname ist absolut. Absolut bedeutet Kompletter Pfad als Datei ist auf einer Server Hard disk (verwechsel es nicht mit der absoluten URL) Relativ bedeutet der Pfad startet mit dem PNphpBB Verzeichnis..';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Absoluter Pfad';
$lang['xs_dir_absolute_explain'] = '(like "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Relativer Pfad';
$lang['xs_dir_relative_explain'] = 'relativ zum phpBB Forum Pfad (z.B: "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Automatisch Cache speichern';
$lang['xs_auto_compile_explain'] = 'Dies Kompiliert automatisch Templates falls noetig und speichert im Cacheverzeichnis.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Automatisch Cache re-kompilieren';
$lang['xs_auto_recompile_explain'] = 'Dies Re-kompiliert automatisch den Cache wenn original Templatedateien geaendert wurden.';
// xs_separator
$lang['xs_separator'] = 'Dateinamen Separator';
$lang['xs_separator_explain'] = 'Wenn gesetzt auf "/" wird der Cache in Unterverzeichnisse abhaengig vom Templatenamen gespeichert (z.B. "subSilver/admin/page_header.php" wird gespeichert im Cacheverzeichnis "subSilver/admin/page_header.php"), falls er gestzt wird wie z.B. "." wird der gesamte Cache in einem Verzeichnis gespeichert (z.B. "subSilver/admin/page_header.php" wird im Cacheverzeichnis gespeichert als "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'Dateinamenerweiterungen von Cachedateien';
$lang['xs_php_explain'] = 'Dies ist die Dateinamenerweiterung von Cachedateien. Dateien werden im php Format gespeichert die Grundeinstellung der Erweiterung ist "php". ohne Punkt (dot)';
// xs_def_template
$lang['xs_def_template'] = 'Standard Template Verzeichnis';
$lang['xs_def_template_explain'] = 'Falls die tpl Datei nicht im aktuellen Templateverzeichnis gefunden wurde (kann passieren wenn phpBB nicht korrekt gmodded wurde) sucht das Templatesystem nach gleichen Dateien in diesem Verzeichnis (wenn z.B das aktuelle Template "myTemplate" ist, erwartet das Script  "myTemplate/myfile.tpl"  und die Datei ist nicht dort, sucht das Templatesystem nach Dateien wie "subSilver/myfile.tpl"). Setze leer um dies Feature zu deaktivieren.';
// xs_check_switches
$lang['xs_check_switches'] = 'Checke Schalter waehrend des kompilierens';
$lang['xs_check_switches_explain'] = 'Dieses Feature ueberprueft auf Fehler in Templates. Das Abschalten erh�t das Tempo des Kompilierens, aber der Kompiler bersieht m�liche Fehler in den Templates.<br /><br />Smart Check berprft Templates auf Fehler und repariert automatisch alle gefundenen Fehler (Es gibt einige bekannte Fehler in verschiedenen Mods). Arbeitet ein wenig langsamer als Simple Check.<br /><br />Aber manchmal sehen die Templates genauer aus wenn der Error Check deaktiviert ist. Dies geschieht bei schlechter html-codierung - Markiere wer auch immer tpl Dateien schreibt wenn du Fehler beheben willst.<br /><br />Falls das Cache-Feature deaktiviert ist, dann ist es besser, dies fuer eine schnellere Kompilierung abzuschalten.';
$lang['xs_check_switches_0'] = 'Aus';
$lang['xs_check_switches_1'] = 'Smart check';
$lang['xs_check_switches_2'] = 'Simple check';
// xs_use_isset
$lang['xs_use_isset'] = 'Checke Variablen mit isset() im Kompilierten Code';
// Debug info
$lang['xs_debug_header'] = 'Debug info';
$lang['xs_debug_explain'] = 'Dies ist die Debug Info. Benutze sie um Probleme zu finden und zu beheben bei konfigurieren des Cache.';
$lang['xs_debug_vars'] = 'Template Variablen';
$lang['xs_debug_tpl_name'] = 'Template Dateiname:';
$lang['xs_debug_cache_filename'] = 'Cache Dateiname:';
$lang['xs_debug_data'] = 'Debug data:';
$lang['xs_check_hdr'] = 'Checke cache fuer %s';
$lang['xs_check_filename'] = 'Fehler: ungueltiger Dateiname';
$lang['xs_check_openfile1'] = 'Fehler: kann Datei "%s" nicht oeffnen. Versuche Verzeichnis zu erstellen...';
$lang['xs_check_openfile2'] = 'Fehler: kann Datei "%s" zum zweiten Mal nicht oeffnen. Gebe auf...';
$lang['xs_check_nodir'] = 'Ueberpruefe "%s" - kein solches Verzeichnis.';
$lang['xs_check_nodir2'] = 'Fehler: Kann Verzeichnis "%s" nicht erstellen - ueberpruefe Berechtigungen.';
$lang['xs_check_createddir'] = 'Verzeichnis erstellt "%s"';
$lang['xs_check_dir'] = 'Ueberpruefe "%s" - Verzeichnis vorhanden.';
$lang['xs_check_ok'] = 'Oeffne Datei "%s" zum schreiben. Scheint alles in Ordnung zu sein.';
// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = 'Template';
$lang['xs_styles_style'] = 'Style';
$lang['xs_styles_user'] = 'Users';
$lang['xs_styles_options'] = 'Optionen';
$lang['xs_styles_set_default'] = 'setzte Standard';
$lang['xs_styles_no_override'] = 'User Einstellungen nicht ueberschreiben';
$lang['xs_styles_do_override'] = 'User Einstellungen ueberschreiben';
$lang['xs_styles_switch_all'] = 'aktiviere diesen Style fuer alle User';
$lang['xs_styles_switch_all2'] = 'wechsele alle User zu';
$lang['xs_styles_defstyle'] = 'Standard Style';
$lang['xs_styles_available'] = 'Verfuegbaren Styles';
// Categories Hierarchie Mod
$lang['Category_attachment'] = "Hinzufuegen zu Kategorie";
$lang['Use_sub_forum'] = "Zeige Ssub-Kategorien als Foren";
$lang['Use_sub_forum_explain'] = "Erlaube Administratoren die Standardeinstellung als Sub-Forum Ansicht oder Sub-Kategorie Ansicht (vBulletin-like).";
$lang['Category_desc'] = "Beschreibung";
$lang['Hierarchy_setting'] = "Kategorien Hierarchie Einstellungen";
$lang['Category_config_error_fixed'] = "Ein Fehler im Kategorien-setup wurde behoben";

// Split Announcements/Stickys
$lang['announce_settings'] = "Ankuendigungen Einstellungen";
$lang['enable_announce'] = "Zeige Forum-Ankuendigungen im Index";
$lang['enable_announce_explain'] = "Dies Aktiviert/Deaktiviert Forum-Ankuendigungen auf der Indexseite.";

$lang['forum_announce_exclude'] = "Zeige <u>Keine</u> Ankuendigungen fuer folgende Foren (CTRL+LEFT CLICK setzt/entfernt Auswahl)";
//$lang['forum_announce_exclude_explain'] = "Dies Aktiviert/Deaktiviert Forum-Ankuendigungen auf der Indexseite.";
$lang['announcement_duration'] = "Ankuendigungsdauer auf der Indexseite";
$lang['announcement_duration_explain'] = "Anzahl der <strong>Tage</strong> die Ankndigungen auf der Indexseite angezeigt werden.";
$lang['announcement_duration_explain'] .= "<br/>(Eingabe <b>0 (Null)</b> zeigt Ankuendigungen auf unbestimmte Zeit)";
$lang['split_global_announce'] = "Teile global Ankuendigungen";
$lang['split_announce'] = "Teile Ankuendigungen in Foren";
$lang['split_sticky'] = "Teile zusammhaengend (sticky) in Foren";

// Topic & Post sort options
$lang['topic_sort_order'] = "Themensortierung";
$lang['post_sort_order'] = "Beitragssortierung";
$lang['First_Post'] = "Erster Beitrag";
$lang['sorted_default'] = "Board Grundeinstellung";
// Replacement Rank image admin
$lang['Rank_image'] = 'Rank Image';
$lang['Rank_image_explain'] = 'Benutze dies um ein kleines Bild festzulegen zugehoerend zum Rang.';
$lang['Rank_image_explain'] .= '<br/>Der Pfad ist relativ zum PNphpBB2 Root-Verzeichnis wenn du einen Pfad eingibst in dem die Grafiken gespeichert sind.<br/>(Beachte: Wenn nur der Imagename angegeben wird (image.gif), dann wird versucht ein Image zu benutzten basierend auf den Templatenamen, Postnuke theme, und language.)';
// Enable-Disable theme matching functions
$lang['theme_matching'] = "Enable Theme Matching";
$lang['theme_matching_explain'] = "Enable or disable the use of the theme matching feature. Theme matching will attempt to create a style sheet and a set of cell pics for the current theme if a set is not already available. <br><b>Note:</b> With theme matching disabled the forum will uses default.css and cellpics found in the root of the cellpics directory.";

$lang['PNphpBB_Version'] = 'PNphpBB2 Version';
$lang['phpBB_Version'] = 'phpBB Version';

// limited post edit time MOD 
$lang['edit_time'] = 'Post Edit time'; 
$lang['edit_time_explain'] = 'The time (in minutes) the user has to edit his/her post. Setting this value to 0, the time is unlimited.'; 
//
// That's all Folks!
// -------------------------------------------------

?>
