<?php
// ----------------------------------------------------------------------
// Language File by Gargamel - gargamel@pf.pl
// 
// Updated on: 04/08/2003
// ----------------------------------------------------------------------

// Default time/date formats
define("_TIMEFORMAT","%H:%M");
define("_DATEFORMAT","%d. %b");

// General Block options
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock - Opcje");
define("_SEP_BAR", "Poka� pasek rozdzielaj�cy");
define("_SHOW_TITLE", "Poka� tytu� sekcji");
define('_USER_STRING_LENGTH','Maksymalna d�ugo�� nazw u�ytkownik�w (0 = pe�na)');
					
// Forum stats
define("_DISPLAY_STATS", "Wy�wietlaj w bloku statystyki Forum");
define("_STATISTICS", "STATYSTYKI FORUM");
define("_NUMBER_OF_POSTS", "Liczba post�w");
define("_PTS", "Posty:");
define("_POSTS_PER_DAY", "Post�w dziennie");
define("_PD", "dziennie:");
define("_NUMBER_TOPICS", "Liczba w�tk�w");
define("_TOP", "W�tki:");
define("_TOPICS_PER_DAY", "W�tk�w dziennie");
define("_NUMBER_USERS", "Liczba u�ytkownik�w");
define("_USR", "U�ytkownicy:");
define("_USERS_PER_DAY", "U�ytkownik�w dziennie");


// Members Online
define("_DISPLAY_MEMBERS", "Pokazuj u�ytkownik�w aktualnie przegl�daj�cych forum (Niedost�pne dla bloku �rodkowego)");
if (!defined('_AND'))
{
   define('_AND', 'i');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "U�YTKOWNICY ONLINE");
define('_NOMEMBERS','W tej chwili nie ma �adnego u�ytkownika.');
define('_CURRENTLY','Mamy');
define('_GUEST','go�cia');
define('_GUESTS','go�ci');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','u�ytkownik');
define('_MEMBERS','u�ytkownik�w');
// define('_YOUAREANON','Jeste� anonimowym u�ytkownikiem. Mo�esz si� zarejestrowa� <a href="user.php?op=check_age&module=NS-NewUser"><b>tutaj</b></a>');
define('_YOUAREANON','');
define('_USE_PN_PM','U�ywaj PostNukeowych powiadomie� o prywatnych wiadomo�ciach');
define('_DISPLAY_TO_ANNON','Pokazuj u�ytkownik�w online anonimowym odwiedzaj�cym');
define("_AMT_PRIVATEMSG"," Liczba prywatnych wiadomo�ci!");
define("_UNREAD_PRIVATEMSG"," Nieprzeczytane prywatne wiadomo�ci!");
define("_SEND_PM","Wy�lij prywatn� wiadomo��!");
define("_USE_PM_SOUND", "D�wi�k dla prywatnej wiadomo�ci (pnimages/)");
define("_INFO_ICON", "Obrazek, kt�ry ma by� wy�wietlany w bloku dla anonimowych (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "Wy�wietlaj pola logowania");
define("_REMEMBER_ME", "Wy�wietlaj pole 'zapami�taj mnie'");

// Catergory List
define("_DISPLAY_CATEGORY", "Wy�wietlaj list� kategorii w bloku");
define("_CATEGORY_LENGTH" , "Maksymalna liczba znak�w dla kategorii");
define("_INCLUDE_CATEGORY", "Pokazuj nast�puj�ce kategorie (CTRL+KLIK usuwa wyb�r)");
define("_FORUM_DRILLDOWN", "Allow forum drilldown");
define("_FORUM_DRILLDOWN_MAX", "Maximul number of forums to drilldown");
define("_FORUM_CATEGORIES", "FORA");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "OSTATNIE POSTY");
define("_DISPLAY_POSTS", "Wy�wietlaj ostatnie posty w bloku");
define("_DISPLAY_CAT_POSTS", "Z ka�dym postem wy�wietlaj jego kategori�");

define("_TIME_FORMAT", "Wprowad� format czasu (PHP)");
define("_DATE_FORMAT", "Wprowad� format daty (PHP)");

define("_POST_BY","");
define("_POST_ON","dnia");
define("_POST_AT","o godz.");
define("_GOTO_BOARD","[Wejd� na Forum]");
define("_GOTO_POST","wy�wietl Posta");
define("_BOARD_GUEST","Go��");
define("_PM_NOTIFICATION","Nowe pryw. wiadomo�ci:");

define("_TOPIC_TITLE","W�tek");
define("_TOPIC_REPLIES","Odpowiedzi");
define("_TOPIC_VIEWS","Wy�wietle�");
define("_POSTER","Autor");
define("_POST_DATE","Data");
define("_POST_TIME","Czas");

define("_LAST_X_POSTS","Liczba wy�wietlanych pozycji");
define("_GROUP_TOPICS","Pokazuj tylko ostatni post z ka�dego w�tku");
define("_TITLE_STRING_LENGTH","Maksymalna ilo�� znak�w w tytu�ach w�tk�w i kategorii (0 = pe�ne)");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Nie pokazuj post�w z nast�puj�cych for (CTRL+KLIK usuwa wyb�r)");
define("_MODULE_NAME", "Nazwa modu�u (Nazwa katalogu) Domy�lnie=PNphpBB2");
define("_MODULE_ERROR", "Nazwa modu�u/�cie�ka jest nieprawid�owa, lub modu� nie jest zainstalowany. Do roboty przy naprawie! Ale ju�!.");
define("_PREFIX_ERROR", "B��d prefiksa forum, nie uda�o si� zlokalizowa� bazy danych.");
define("_TEMPLATE_ERROR","Nieprawid�owe ustawienia schematu!");
define("_POSTINFO_ERROR","Nie mo�na uzyska� informacji z bazy danych!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>
