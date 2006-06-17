<?php
// ----------------------------------------------------------------------
// Language File by Carls - carls@pnphpbb.com
// 
// Updated on: 03/22/2003
// ----------------------------------------------------------------------
// Default time/date formats
define("_TIMEFORMAT","%H:%M");		//%H - hour24, %I - hour12, %M - minute, %p - am/pm
define("_DATEFORMAT","%d. %m");		//%b - month short, %B - month long, %m - month decimal (2 digits),
																	//%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
																	// for more options see http://php.net/strftime

// General Block options
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock asetukset");
define("_SEP_BAR", "N�yt� erotin viiva");
define("_SHOW_TITLE", "N�yt� osaston otsake");
define('_USER_STRING_LENGTH','K�ytt�j�nimen maksimipituus (0 = t�yspitk�)');
					
// Forum stats
define("_DISPLAY_STATS", "N�yt� Foorumin tilastot blokissa");
define("_STATISTICS", "FOORUMIN TILASTOT");
define("_NUMBER_OF_POSTS", "Viestien m��r�");
define("_PTS", "Viestej�:");
define("_POSTS_PER_DAY", "Viestej� p�iv�ss�");
define("_PD", "p�iv�ss�:");
define("_NUMBER_TOPICS", "Aiheiden m��r�");
define("_TOP", "Aiheita:");
define("_TOPICS_PER_DAY", "Aiheita p�iv�ss�");
define("_NUMBER_USERS", "J�senten m��r�");
define("_USR", "J�senet:");
define("_USERS_PER_DAY", "J�seni� p�iv�ss�");


// Members Online
define("_DISPLAY_MEMBERS", "N�yt� j�senet Online blokissa (Ei k�ytett�viss� keskiblokissa)");
if (!defined('_AND'))
{
   define('_AND', 'ja');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "J�SENET ONLINE");
define('_NOMEMBERS','T�ll� hetkell� ei j�seni� online.');
define('_CURRENTLY','Meill� on');
define('_GUEST','kesti');
define('_GUESTS','kesti�');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','j�sen');
define('_MEMBERS','j�sent�');
define('_YOUAREANON','Olet kesti. Voit rekister�ity� ilmaiseksi napsauttamalla <a href="user.php?op=check_age&module=NS-NewUser"><b>t�st�</b></a>');
define('_USE_PN_PM','K�yt� PostNuken yksityisviestien ilmoitusta');
define('_DISPLAY_TO_ANNON','N�yt� online k�ytt�j�t nimett�m�lle k�ytt�j�lle');
define("_AMT_PRIVATEMSG","Yksityisviestien m��r�!");
define("_UNREAD_PRIVATEMSG"," Lukemattomat yksityisviestit!");
define("_SEND_PM","L�het� yksityisviesti !");
define("_USE_PM_SOUND", "Yksityisviestien ��ni (pnimages/)");
define("_INFO_ICON", "Vieraslaatikossa n�ytett�v� kuva (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "N�yt� kirjautumiskysely blokissa");
define("_REMEMBER_ME", "N�yt� muista minut tarkistuslaatikko");

// Catergory List
define("_DISPLAY_CATEGORY", "N�yt� kategorialista blokissa");
define("_CATEGORY_LENGTH" , "Kategorioiden maksimipituus merkkein�");
define("_INCLUDE_CATEGORY", "N�yt� seuraavat kategoriat (CTRL+CLICK tyhjent�� valinnat)");
define("_FORUM_DRILLDOWN", "Salli foorumin yksityiskohdat");
define("_FORUM_DRILLDOWN_MAX", "Yksityskohtaisemmin n�ytett�vien foorumien m��r�");
define("_FORUM_CATEGORIES", "FOORUMIT");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "FOORUMIN VIIME VIESTIT");
define("_DISPLAY_POSTS", "N�yt� foorumin viime viestit blokissa");
define("_DISPLAY_CAT_POSTS", "N�yt� jokaisen viestin kategoria");

define("_TIME_FORMAT", "Sy�t� ajan formaatti (PHP)");
define("_DATE_FORMAT", "Sy�t� pvm:n formaatti (PHP)");

define("_POST_BY"," ");
define("_POST_ON","pvm");
define("_POST_AT","klo");
define("_GOTO_BOARD","[Siirry foorumiin]");
define("_GOTO_POST","Lue viesti");
define("_BOARD_GUEST","Kesti");
define("_PM_NOTIFICATION","Uusia yksityisviestej�:");

define("_TOPIC_TITLE","Aihe");
define("_TOPIC_REPLIES","Vastauksia");
define("_TOPIC_VIEWS","Katseluja");
define("_POSTER","L�hett�j�");
define("_POST_DATE","P�iv�m��r�");
define("_POST_TIME","Aika");

define("_LAST_X_POSTS","N�ytett�vien viestien m��r�");
define("_GROUP_TOPICS","N�yt� vain aiheiden viimeisin viesti");
define("_TITLE_STRING_LENGTH","Aiheiden otsikoiden ja kategorioiden maksimipituus (0 = t�yspitk�)");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","�l� n�yt� seuraavien foorumien viestej� (CTRL+CLICK tyhjent�� valinnat)");
define("_MODULE_NAME", "PostNuke moduulin nimi (Hakemiston nimi) Oletusarvo=PNphpBB2");
define("_MODULE_ERROR", "Moduulin nimi/polku ei ole kunnollinen tai moduulia ei ole asennettu. Korjaa.");
define("_PREFIX_ERROR", "Foruumin etuliite virhe, ei l�yt�nyt foorumin tauluja.");
define("_TEMPLATE_ERROR","Virheelliset template asetukset!");
define("_POSTINFO_ERROR","Ei saa luettua viestitietoja tietokannasta!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>