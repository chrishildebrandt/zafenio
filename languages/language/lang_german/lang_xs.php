<?php

$lang['xs_warning'] = 'Warnung: Cache kann nicht geschrieben werden.';
$lang['xs_warning_explain'] = 'Prüfe ob das Verzeichnis für den Cache angelegt wurde und ob die Berechtigungen darauf richtig sind (chmod 777), damit das Skript dort den Cache schreiben kann. Wenn der Server in safe mode läuft sollte "." als Filename-Trennzeichen verwendet werden, damit der Cache in das selbe Verzeichnis geschrieben wird (siehe see Trennzeichen-Einstellungen unten).';

$lang['xs_updated'] = 'Konfiguration upgedatet.';
$lang['xs_updated_explain'] = 'Die Seite muss neu geladen werden, damit die Konfigurationsänderungen angewandt werden können.';

// ACP navigation bar
$lang['Extreme_Styles'] = 'eXtreme Styles';

// Headers
$lang['xs_settings'] = 'eXtreme Styles mod v%s Einstellungen';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Verwende Cache';
$lang['xs_cache_explain'] = 'der Cache wird auf der Festplatte gespeichert und beschleunigt das Template-System häufig, weil die Templates nicht bei jeder Ansicht neu kompiliert werden müssen.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'Cache Verzeichnis';
$lang['xs_cache_dir_explain'] = 'Der gesamte Cache wird in dieses Verzeichnis geschrieben (und/oder Unterverzeichnis). Files mit gleichen Filenamen werden überschrieben. Setze kein "/" vor Verzeichnisnamen wenn sie nicht absolut sind. Absolut bedeutet kompletter Pfad auf der Festplatte des Servers (nicht mit absolutem Url verwechseln). Relativ bedeutet den Pfad beginnend mit dem  PNphpBB Verzeichnis.';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Absoluter Pfad';
$lang['xs_dir_absolute_explain'] = '(wie "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Relativer Pfad';
$lang['xs_dir_relative_explain'] = 'relativ zum PNphpBB Forum Pfad (wie "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Automatisch Cache speichern';
$lang['xs_auto_compile_explain'] = 'Dabei werden Templates automatisch wenn nötig kompiliert und im Cache-Verzeichnis gespeichert.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Automatisch Cache re-kompilieren';
$lang['xs_auto_recompile_explain'] = 'Dabei wird der Cache automatisch re-kompiliert, wenn das originale Template Fiel geändert wurde.';
// xs_separator
$lang['xs_separator'] = 'Filename-Trennzeichen';
$lang['xs_separator_explain'] = 'Wenn auf "/" gesetzt wird der Cache in Unterverzeichnissen nach Templatenamen angelegt (z.B. File "subSilver/admin/page_header.php" wird im Cacheverzeichis als "subSilver/admin/page_header.php" gespeichert). Wenn auf etwas anderes, wie "." gesetzt, dann wird der gesammte Cache in einem Verzeichnis angelegt(z.B. File "subSilver/admin/page_header.php" wird im Cacheverzeichnis als "subSilver.admin.page_header.php" gespeichert)';
// xs_php
$lang['xs_php'] = 'Erweiterung der Cache Filenamen';
$lang['xs_php_explain'] = 'Dies ist die Erweiterung der gecachten Files. Files werden im php-Format gespeichert, daher ist die default eErweiterung "php". Den Punkt nicht mit anführen.';
// xs_def_template
$lang['xs_def_template'] = 'Default Template Verzeichnis';
$lang['xs_def_template_explain'] = 'Wenn das tpl File im aktiven Verzeichnis nicht gefunden wird (was bei nicht korrekt gemoddeten PNphpBB möglich ist), dann sucht das Templatesystem nach dem selben File in diesem Verzeichnis (z.B. wenn das aktive Verzeichnis "myTemplate" ist und das Skript "myTemplate/myfile.tpl" sucht und nicht findet, dann sucht das Templatesystem nach diesem File über "subSilver/myfile.tpl"). Zur Deaktivierung dieser Funktion leer lassen.';

?>