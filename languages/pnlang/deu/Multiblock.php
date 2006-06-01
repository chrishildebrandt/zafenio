<?php
// ----------------------------------------------------------------------
// German Language File by Mike - realcf@gmx.de
//
// Updated on: 03/23/2003
// ----------------------------------------------------------------------
// Default time/date formats
define("_TIMEFORMAT","%H:%M");		//%H - hour24, %I - hour12, %M - minute, %p - am/pm
define("_DATEFORMAT","%d. %b");		//%b - month short, %B - month long, %m - month decimal (2 digits),
																	//%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
																	// for more options see http://php.net/strftime

// General Block options
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock Optionen");
define("_SEP_BAR", "Zeige Trennbalken");
define("_SHOW_TITLE", "Zeige Sektionstitel");
define("_USER_STRING_LENGTH","Maximale Zeichenlänger der Benutzernamen (0 = ungekürzt)");
					
// Forum stats
define("_DISPLAY_STATS", "Zeige 'Forum Statistik' im Block");
define("_STATISTICS", "FORUM STATISTIK");
define("_NUMBER_OF_POSTS", "Anzahl Beiträge");
define("_PTS", "Beiträge:");
define("_POSTS_PER_DAY", "Beiträge pro Tag");
define("_PD", "pro Tag:");
define("_NUMBER_TOPICS", "Anzahl Themen");
define("_TOP", "Themen:");
define("_TOPICS_PER_DAY", "Themen pro Tag");
define("_NUMBER_USERS", "Anzahl Benutzer");
define("_USR", "Mitglieder:");
define("_USERS_PER_DAY", "Benutzer pro Tag");


// Members Online
define("_DISPLAY_MEMBERS", "Zeige 'Online Benutzer' im block (Nicht verfügbar im mittleren Block)");
if (!defined('_AND'))
{
   define('_AND', 'und');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
if (!defined('_REMEMBERME')) {
    define('_REMEMBERME','in Cookie speichern');
}
define('_MEMBERS_ONLINE_TITLE', "ANGEMELDETE MITGLIEDER");
define('_NOMEMBERS','Keine Mitglieder online.');
define('_CURRENTLY','Wir haben');
define('_GUEST','Gast');
define('_GUESTS','Gäste');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','Mitglied');
define('_MEMBERS','Mitglieder');
define('_YOUAREANON','Du bist ein anonymer Benutzer. Du kannst Dich umsonst <a href="user.php?op=check_age&module=NS-NewUser"><b>hier</b></a> registrieren');
define('_USE_PN_PM','Benutze PostNuke persönliche Nachricht Mitteilung');
define('_DISPLAY_TO_ANNON','Zeige angemeldete Mitglieder für anonyme Benutzer');
define("_AMT_PRIVATEMSG","Anzahl privater Nachrichten!");
define("_UNREAD_PRIVATEMSG","Ungelesene private Nachrichten!");
define("_SEND_PM","sende eine private Nachricht!");
define("_USE_PM_SOUND", "Sound für private Nachricht (pnimages/)");
define("_INFO_ICON", "Bild zum Anzeigen in dem 'anonymer Benuter' Feld (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN","Zeige Anmeldedialog im Block");
define("_REMEMBER_ME", "Zeige 'in Cookie speichern' Auswahl");

// Catergory List
define("_DISPLAY_CATEGORY", "Zeige Kategorienliste im Block");
define("_CATEGORY_LENGTH" , "Maximale Zeichenlänge von Kategorien");
define("_INCLUDE_CATEGORY", "Zeige folgende Kategorien (Mehrfachauswahl möglich)");
define("_FORUM_DRILLDOWN", "Erlaube Forumauflistung");
define("_FORUM_DRILLDOWN_MAX", "Maximale Anzahl von Foren (0 = unbegrenzt)");
define("_FORUM_CATEGORIES", "FOREN");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "LETZTE FORUM-BEITRÄGE");
define("_DISPLAY_POSTS", "Zeige 'Letzte Forum-Beiträge' im Block");
define("_DISPLAY_CAT_POSTS", "Zeige Kategorie für jeden Beitrag");

define("_TIME_FORMAT", "Zeit Format (PHP)");
define("_DATE_FORMAT", "Datum Format (PHP)");

define("_POST_BY","von");
define("_POST_ON","am");
define("_POST_AT","um");
define("_GOTO_BOARD","(zum Forum)");
define("_GOTO_POST","lese Beitrag");
define("_BOARD_GUEST","Gast");
define("_PM_NOTIFICATION","Neue private Nachrichten:");

define("_TOPIC_TITLE","Themen");
define("_TOPIC_REPLIES","Antw.");
define("_TOPIC_VIEWS","Aufrufe");
define("_POSTER","Autor");
define("_POST_DATE","Datum");
define("_POST_TIME","Zeit");

define("_LAST_X_POSTS","Anzahl der Beiträge");
define("_GROUP_TOPICS","Zeige nur den letzten Beitrag eines Themas");
define("_TITLE_STRING_LENGTH","Maximale Zeichenlänge von Themen & Kategorien (0 = ungekürzt)");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Zeige keine Einträge aus folgenden Foren (Mehrfachauswahl möglich)");
define("_MODULE_NAME","PostNuke Modulname (Verzeichnisname) Default=PNphpBB2");
define("_MODULE_ERROR","Modulname/pfad ist ungültig, oder das Module ist nicht installiert. Bitte korrigieren.");
define("_PREFIX_ERROR","Forum Prefix Fehler, konnte Forum Datenbank nicht finden.");
define("_TEMPLATE_ERROR","Ungültige Template Einstellungen!");
define("_POSTINFO_ERROR","Konnte post-info nicht von Datenbank erhalten!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>