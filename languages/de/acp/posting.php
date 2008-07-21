<?php
/**
*
* acp_posting [Deutsch — Du]
*
* @package language
* @version $Id: posting.php 196 2007-05-18 17:37:40Z philipp $
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* (http://www.phpbb.de/go/3/uebersetzer)
* Frank Doerr, Dirk Gaffke, Christopher Gerharz, Ingo Köhler, Philipp Kordowich, Ingo Migliarina, Paul Rauch
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode ist eine spezielle HTML-Implementierung, die eine größere Kontrolle über das, was angezeigt wird, bietet. Hier kannst du benutzerdefinierte BBCodes hinzufügen, ändern oder entfernen.',
	'ADD_BBCODE'				=> 'BBCode hinzufügen',

	'BBCODE_ADDED'				=> 'BBCode erfolgreich hinzugefügt.',
	'BBCODE_EDITED'				=> 'BBCode erfolgreich bearbeitet.',
	'BBCODE_NOT_EXIST'			=> 'Der gewählte BBCode existiert nicht.',
	'BBCODE_HELPLINE'			=> 'Tipp-Anzeige',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Gib hier den Text ein, der in der Tipp-Zeile erscheinen soll, wenn sich der Mauszeiger auf der Schaltfläche befindet.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text für Tipp-Anzeige',
	'BBCODE_INVALID_TAG_NAME'	=> 'Der eingegebene BBCode-Tag ist ungültig.',
	'BBCODE_INVALID'			=> 'Dein BBCode ist in einer unzulässigen Weise aufgebaut.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Dein benutzerdefinierter BBCode-Tag muss sowohl einen öffnenden als auch einen schließenden Tag enthalten.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'Die Name des eingegebenen Tags ist zu lang.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Die eingegebene Tag-Definition ist zu lang. Bitte kürze die Tag-Definition.',
	'BBCODE_USAGE'				=> 'BBCode-Benutzung',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Hier wird eingestellt, wie der BBCode benutzt wird. Ersetze variable Eingaben durch die entsprechenden Tokens (%ssiehe unten%s).',

	'EXAMPLE'						=> 'Beispiel:',
	'EXAMPLES'						=> 'Beispiele:',

	'HTML_REPLACEMENT'				=> 'HTML-Ersetzung',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Hier kannst du die Standard-HTML-Ersetzung eingeben. Vergiss nicht, die oben verwendeten Tokens hier einzusetzen!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokens',
	'TOKENS_EXPLAIN'		=> 'Tokens sind Platzhalter für Benutzereingaben. Die Eingabe wird nur überprüft, wenn sie der eingegebenen Definition entspricht. Wenn nötig, kannst du diese Platzhalter nummerieren, indem du eine Ziffer als letztes Zeichen zwischen den Klammern hinzufügst, z.&nbsp;B. {TEXT1}, {TEXT2}.<br /><br />Innerhalb der HTML-Ersetzung kannst du außerdem jede Sprachvariable, die im Verzeichnis language/ definiert ist, wie folgt benutzen: {L_<em>&lt;STRINGNAME&gt;</em>}, wobei <em>&lt;STRINGNAME&gt;</em> durch den Namen der Variablen mit dem übersetzten Text ersetzt wird. {L_WROTE} wird beispielsweise als „hat geschrieben“ oder dessen Entsprechung, je nach eingestellter Benutzersprache, angezeigt.<br /><br />Beachte, dass nur unten aufgelistete Tokens innerhalb benutzerdefinierter BBCodes verwendet werden können.',
	'TOKEN_DEFINITION'		=> 'Welche Werte sind möglich?',
	'TOO_MANY_BBCODES'		=> 'Du kannst keine weiteren BBCodes mehr erstellen. Bitte lösche einige BBCodes und versuche es erneut.',

	'tokens'	=>	array(
		'TEXT'			=> 'Jeder Text, einschließlich fremder Zeichen, Ziffern usw. Du solltest dieses Token nicht innerhalb von HTML-Tags verwenden, sondern IDENTIFIER oder SIMPLETEXT vorziehen.',
		'SIMPLETEXT'	=> 'Zeichen des lateinischen Alphabets (A-Z), Ziffern, Leerzeichen, Komma, Punkt, Minus, Plus und Unterstrich',
		'IDENTIFIER'	=> 'Zeichen des lateinischen Alphabets (A-Z), Ziffern, Bindestrich und Unterstrich',
		'NUMBER'		=> 'Ziffernfolgen',
		'EMAIL'			=> 'Eine gültige E-Mail-Adresse',
		'URL'			=> 'Eine gültige URL eines beliebigen Protokolls (http, ftp usw. — kann nicht für JavaScript-Exploits verwendet werden). Falls nicht angegeben, wird „http://“ vorangestellt.',
		'LOCAL_URL'		=> 'Eine lokale URL. Muss relativ zur Themenansicht angegeben werden; Protokoll und Domain darf nicht vorangestellt werden.',
		'COLOR'			=> 'Eine HTML-Farbe. Es kann entweder der hexadezimale Wert (z.&nbsp;B. <samp>#FF1234</samp>) oder ein <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS-Farbwert</a> wie z.&nbsp;B. <samp>fuchsia</samp> oder <samp>InactiveBorder</samp> angegeben werden.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Hier kannst du die Symbole hinzufügen, bearbeiten oder entfernen, die Benutzer zu Beiträgen oder Themen hinzufügen können. Diese Themen- und Beitrags-Symbole werden in der Forenübersicht neben der Themenüberschrift bzw. neben der Beitragsüberschrift im Thema angezeigt. Du kannst außerdem Symbol-Pakete installieren und erstellen.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies oder Emoticons sind typischerweise kleine, gelegentlich animierte, Bilder, mit denen man Launen und Gefühle ausdrücken kann. Hier kannst du Smilies, die Benutzer in ihren Beiträgen und Privaten Nachrichten verwenden können, hinzufügen, bearbeiten oder löschen. Es können außerdem Smilie-Pakete installiert und erstellt werden.',
	'ADD_SMILIES'			=> 'Mehrere Smilies hinzufügen',
	'ADD_SMILEY_CODE'		=> 'Zusätzlichen Smilie-Code hinzufügen',
	'ADD_ICONS'				=> 'Mehrere Beitrags-Symbole hinzufügen',
	'AFTER_ICONS'			=> 'Nach %s',
	'AFTER_SMILIES'			=> 'Nach %s',

	'CODE'						=> 'Code',
	'CURRENT_ICONS'				=> 'Derzeitige Beitrags-Symbole',
	'CURRENT_ICONS_EXPLAIN'		=> 'Wähle, was mit den aktuell eingestellten Beitrags-Symbolen geschehen soll.',
	'CURRENT_SMILIES'			=> 'Derzeitige Smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Wähle, was mit den aktuell eingestellten Smilies geschehen soll.',

	'DISPLAY_ON_POSTING'		=> 'Beim Verfassen eines Beitrags anzeigen',
	'DISPLAY_POSTING'			=> 'Auf Verfassen-Seite',
	'DISPLAY_POSTING_NO'		=> 'Nicht auf Verfassen-Seite',

	'EDIT_ICONS'				=> 'Beitrags-Symbole bearbeiten',
	'EDIT_SMILIES'				=> 'Smilies bearbeiten',
	'EMOTION'					=> 'Beschreibung',
	'EXPORT_ICONS'				=> 'Symbol-Paket erzeugen',
	'EXPORT_ICONS_EXPLAIN'		=> '%sMit diesem Link kannst du die Konfiguration der installierten Symbole in eine Datei <samp>icons.pak</samp> schreiben. Diese kann nach dem Download dazu verwendet werden, ein <samp>.zip</samp>- oder <samp>.tgz</samp>-Archiv zu erstellen, welches alle Symbole und die <samp>icons.pak</samp> Konfigurations-Datei enthält.%s',
	'EXPORT_SMILIES'			=> 'Smilie-Paket erzeugen',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sMit diesem Link kannst du die Konfiguration der installierten Smilies in eine Datei <samp>smilies.pak</samp> schreiben. Diese kann nach dem Download dazu verwendet werden, ein <samp>.zip</samp>- oder <samp>.tgz</samp>-Archiv zu erstellen, welches alle Smilies und die <samp>smilies.pak</samp> Konfigurations-Datei enthält.%s',

	'FIRST'			=> 'am Anfang',

	'ICONS_ADD'				=> 'Neues Beitrags-Symbol hinzufügen',
	'ICONS_NONE_ADDED'		=> 'Kein Beitrags-Symbol wurde hinzugefügt.',
	'ICONS_ONE_ADDED'		=> 'Das Beitrags-Symbol wurde erfolgreich hinzugefügt.',
	'ICONS_ADDED'			=> 'Die Beitrags-Symbole wurden erfolgreich hinzugefügt.',
	'ICONS_CONFIG'			=> 'Symbol-Konfiguration',
	'ICONS_DELETED'			=> 'Das Beitrags-Symbol wurde erfolgreich entfernt.',
	'ICONS_EDIT'			=> 'Beitrags-Symbol bearbeiten',
	'ICONS_ONE_EDITED'		=> 'Das Beitrags-Symbol wurde erfolgreich aktualisiert.',
	'ICONS_NONE_EDITED'		=> 'Kein Beitrags-Symbol wurde aktualisiert.',
	'ICONS_EDITED'			=> 'Die Beitrags-Symbole wurden erfolgreich aktualisiert.',
	'ICONS_HEIGHT'			=> 'Höhe',
	'ICONS_IMAGE'			=> 'Symbol',
	'ICONS_IMPORTED'		=> 'Das Symbol-Paket wurde erfolgreich installiert.',
	'ICONS_IMPORT_SUCCESS'	=> 'Das Symbol-Paket wurde erfolgreich importiert.',
	'ICONS_LOCATION'		=> 'Pfad der Bilddatei',
	'ICONS_NOT_DISPLAYED'	=> 'Die folgenden Symbole werden beim Verfassen eines Beitrags nicht angezeigt',
	'ICONS_ORDER'			=> 'Sortierung',
	'ICONS_URL'				=> 'Symbol',
	'ICONS_WIDTH'			=> 'Breite',
	'IMPORT_ICONS'			=> 'Symbol-Paket installieren',
	'IMPORT_SMILIES'		=> 'Smilie-Paket installieren',

	'KEEP_ALL'			=> 'Alle behalten',

	'MASS_ADD_SMILIES'	=> 'Mehrere Smilies hinzufügen',

	'NO_ICONS_ADD'		=> 'Es sind keine Symbole verfügbar, die hinzugefügt werden könnten.',
	'NO_ICONS_EDIT'		=> 'Es sind keine Symbole verfügbar, die geändert werden könnten.',
	'NO_ICONS_EXPORT'	=> 'Es gibt keine Symbole, mit denen ein Paket erstellt werden könnte.',
	'NO_ICONS_PAK'		=> 'Keine Symbol-Pakete gefunden.',
	'NO_SMILIES_ADD'	=> 'Es sind keine Smilies verfügbar, die hinzugefügt werden könnten.',
	'NO_SMILIES_EDIT'	=> 'Es sind keine Smilies verfügbar, die geändert werden könnten.',
	'NO_SMILIES_EXPORT'	=> 'Es gibt keine Smilies, mit denen ein Paket erstellt werden könnte.',
	'NO_SMILIES_PAK'	=> 'Keine Smilie-Pakete gefunden.',

	'PAK_FILE_NOT_READABLE'		=> 'Die <samp>.pak</samp>-Datei konnte nicht gelesen werden.',

	'REPLACE_MATCHES'	=> 'Treffer ersetzen',

	'SELECT_PACKAGE'			=> 'Paket-Datei auswählen',
	'SMILIES_ADD'				=> 'Neuen Smilie hinzufügen',
	'SMILIES_NONE_ADDED'		=> 'Kein Smilie wurde hinzugefügt.',
	'SMILIES_ONE_ADDED'			=> 'Der Smilie wurde erfolgreich hinzugefügt.',
	'SMILIES_ADDED'				=> 'Die Smilies wurden erfolgreich hinzugefügt.',
	'SMILIES_CODE'				=> 'Smilie-Code',
	'SMILIES_CONFIG'			=> 'Smilie-Konfiguration',
	'SMILIES_DELETED'			=> 'Der Smilie wurde erfolgreich entfernt.',
	'SMILIES_EDIT'				=> 'Smilie bearbeiten',
	'SMILIE_NO_CODE'			=> 'Der Smilie „%s“ wurde ignoriert, da kein Smilie-Code angegeben wurde.',
	'SMILIE_NO_EMOTION'			=> 'Der Smilie „%s“ wurde ignoriert, da keine Beschreibung angegeben wurde.',
	'SMILIES_NONE_EDITED'		=> 'Kein Smilie wurde aktualisiert',
	'SMILIES_ONE_EDITED'		=> 'Der Smilie wurde erfolgreich aktualisiert',
	'SMILIES_EDITED'			=> 'Die Smilies wurden erfolgreich aktualisiert',
	'SMILIES_EMOTION'			=> 'Beschreibung',
	'SMILIES_HEIGHT'			=> 'Höhe',
	'SMILIES_IMAGE'				=> 'Smilie-Bild',
	'SMILIES_IMPORTED'			=> 'Das Smilie-Paket wurde erfolgreich installiert.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Das Smilie-Paket wurde erfolgreich importiert.',
	'SMILIES_LOCATION'			=> 'Pfad der Bilddatei',
	'SMILIES_NOT_DISPLAYED'		=> 'Die folgenden Smilies werden beim Verfassen eines Beitrags nicht angezeigt',
	'SMILIES_ORDER'				=> 'Sortierung',
	'SMILIES_URL'				=> 'Smilie',
	'SMILIES_WIDTH'				=> 'Breite',

	'WRONG_PAK_TYPE'	=> 'Das angegebene Paket enthielt ungültige Daten.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Hier kannst du Begriffe einstellen, die automatisch zensiert werden sollen. Außerdem kann man sich nicht mit diesen Begriffen als Benutzernamen registrieren. Platzhalter (*) sind im Begriffs-Feld erlaubt. *test* wird austesten finden, test* testweise und *test wird Sehtest finden.',
	'ADD_WORD'				=> 'Neuen Begriff hinzufügen',

	'EDIT_WORD'		=> 'Wortzensur bearbeiten',
	'ENTER_WORD'	=> 'Du musst einen Begriff und seine Ersetzung eingeben.',

	'NO_WORD'	=> 'Kein Begriff zum Bearbeiten ausgewählt.',

	'REPLACEMENT'	=> 'Ersetzung',

	'UPDATE_WORD'	=> 'Wortzensur aktualisiert',

	'WORD'				=> 'Begriff',
	'WORD_ADDED'		=> 'Wortzensur erfolgreich hinzugefügt.',
	'WORD_REMOVED'		=> 'Die ausgewählte Wortzensur wurde erfolgreich entfernt.',
	'WORD_UPDATED'		=> 'Die ausgewählte Wortzensur wurde erfolgreich aktualisiert.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Über dieses Formular kannst du Ränge anzeigen, hinzufügen, ändern oder entfernen. Es können außerdem Spezialränge erstellt werden, die über die Benutzerverwaltung bestimmten Benutzern zugewiesen werden können.',
	'ADD_RANK'				=> 'Neuen Rang hinzufügen',

	'MUST_SELECT_RANK'		=> 'Du musst einen Rang auswählen.',

	'NO_ASSIGNED_RANK'		=> 'Kein Spezialrang zugewiesen.',
	'NO_RANK_TITLE'			=> 'Du hast keinen Rang-Titel eingegeben.',
	'NO_UPDATE_RANKS'		=> 'Der Rang wurde erfolgreich gelöscht. Allerdings wurden Benutzer, die diesen Rang verwenden, nicht aktualisiert. Du musst den Rang bei diesen Benutzerkonten von Hand zurücksetzen.',

	'RANK_ADDED'			=> 'Rang erfolgreich hinzugefügt.',
	'RANK_IMAGE'			=> 'Rang-Bild',
	'RANK_IMAGE_EXPLAIN'	=> 'Hier kannst du ein kleines Rang-Bild einstellen. Der Pfad kann absolut oder relativ zum phpBB-Verzeichnis angegeben werden.',
	'RANK_MINIMUM'			=> 'Minimale Anzahl an Beiträgen',
	'RANK_REMOVED'			=> 'Der Rang wurde erfolgreich gelöscht.',
	'RANK_SPECIAL'			=> 'Spezialrang',
	'RANK_TITLE'			=> 'Rang-Titel',
	'RANK_UPDATED'			=> 'Rang erfolgreich aktualisiert.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Hier kannst du Benutzernamen einstellen, die nicht benutzt werden dürfen. Verbotene Benutzernamen dürfen * als Platzhalter enthalten. Bitte beachte, dass kein Benutzername verboten werden kann, unter dem bereits ein Benutzer registriert ist. Dieser Benutzer muss vorher gelöscht oder umbenannt werden.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Für einen verbotenen Benutzernamen kannst du * als Platzhalter verwenden, um an dieser Stelle jedes beliebige Zeichen auszuschließen.',
	'ADD_DISALLOW_TITLE'	=> 'Verbotenen Benutzernamen hinzufügen',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Du kannst einen verbotenen Benutzernamen aus dieser Liste entfernen, indem du ihn anklickst und auf Absenden klickst.',
	'DELETE_DISALLOW_TITLE'		=> 'Verbotenen Benutzernamen entfernen',
	'DISALLOWED_ALREADY'		=> 'Der eingegebene Name konnte nicht verboten werden. Entweder steht er bereits in der Liste der verbotenen Namen oder in der Wortzensur oder ein Benutzer ist mit entsprechendem Namen registriert.',
	'DISALLOWED_DELETED'		=> 'Der verbotene Benutzername wurde erfolgreich entfernt.',
	'DISALLOW_SUCCESSFUL'		=> 'Der verbotene Benutzername wurde erfolgreich hinzugefügt.',

	'NO_DISALLOWED'				=> 'Keine verbotenen Benutzernamen',
	'NO_USERNAME_SPECIFIED'		=> 'Du hast keinen Benutzernamen ausgewählt oder eingegeben.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Hier kannst du die Gründe, die für Beitragsmeldungen und Ablehnungsnachrichten von Beiträgen verwendet werden, verwalten. Es gibt einen Standardgrund (mit * markiert), der nicht gelöscht werden kann. Dieser Grund wird normalerweise verwendet, wenn kein anderer Grund passt.',
	'ADD_NEW_REASON'		=> 'Neuen Grund hinzufügen',
	'AVAILABLE_TITLES'		=> 'Verfügbare lokalisierte Titel der Gründe',

	'IS_NOT_TRANSLATED'			=> 'Grund wurde <strong>nicht</strong> lokalisiert',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Grund wurde <strong>nicht</strong> lokalisiert. Wenn du die lokalisierte Version anzeigen möchtest, gib den korrekten Schlüssel aus dem entsprechenden Abschnitt der Sprachdateien an.',
	'IS_TRANSLATED'				=> 'Grund wurde lokalisiert',
	'IS_TRANSLATED_EXPLAIN'		=> 'Grund wurde lokalisiert. Wenn die hier eingegebene Überschrift in der entsprechenden Sprachdatei definiert ist, wird die lokalisierte Version benutzt.',

	'NO_REASON'					=> 'Grund konnte nicht gefunden werden.',
	'NO_REASON_INFO'			=> 'Du musst für diesen Grund eine Überschrift und eine Beschreibung angeben.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Du kannst den Standard-Grund „Anderer“ nicht löschen.',

	'REASON_ADD'				=> 'Meldungs-/Ablehnungs-Grund hinzufügen',
	'REASON_ADDED'				=> 'Meldungs-/Ablehnungs-Grund erfolgreich hinzugefügt.',
	'REASON_ALREADY_EXIST'		=> 'Ein Grund mit dieser Überschrift existiert bereits. Bitte gib eine andere Überschrift ein.',
	'REASON_DESCRIPTION'		=> 'Beschreibung',
	'REASON_DESC_TRANSLATED'	=> 'Beschreibung des Grundes anzeigen',
	'REASON_EDIT'				=> 'Meldungs-/Ablehnungs-Grund bearbeiten',
	'REASON_EDIT_EXPLAIN'		=> 'Hier kannst du Gründe hinzufügen oder bearbeiten. Wenn der Grund übersetzt wurde, wird die lokalisierte Version anstatt der hier eingegebenen Beschreibung benutzt.',
	'REASON_REMOVED'			=> 'Meldungs-/Ablehnungs-Grund erfolgreich entfernt.',
	'REASON_TITLE'				=> 'Überschrift',
	'REASON_TITLE_TRANSLATED'	=> 'Überschrift des Grundes anzeigen',
	'REASON_UPDATED'			=> 'Meldungs-/Ablehnungs-Grund erfolgreich aktualisiert.',

	'USED_IN_REPORTS'		=> 'In Meldungen benutzt',
));

?>