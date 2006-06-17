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
define("_SEP_BAR", "Näytä erotin viiva");
define("_SHOW_TITLE", "Näytä osaston otsake");
define('_USER_STRING_LENGTH','Käyttäjänimen maksimipituus (0 = täyspitkä)');
					
// Forum stats
define("_DISPLAY_STATS", "Näytä Foorumin tilastot blokissa");
define("_STATISTICS", "FOORUMIN TILASTOT");
define("_NUMBER_OF_POSTS", "Viestien määrä");
define("_PTS", "Viestejä:");
define("_POSTS_PER_DAY", "Viestejä päivässä");
define("_PD", "päivässä:");
define("_NUMBER_TOPICS", "Aiheiden määrä");
define("_TOP", "Aiheita:");
define("_TOPICS_PER_DAY", "Aiheita päivässä");
define("_NUMBER_USERS", "Jäsenten määrä");
define("_USR", "Jäsenet:");
define("_USERS_PER_DAY", "Jäseniä päivässä");


// Members Online
define("_DISPLAY_MEMBERS", "Näytä jäsenet Online blokissa (Ei käytettävissä keskiblokissa)");
if (!defined('_AND'))
{
   define('_AND', 'ja');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "JÄSENET ONLINE");
define('_NOMEMBERS','Tällä hetkellä ei jäseniä online.');
define('_CURRENTLY','Meillä on');
define('_GUEST','kesti');
define('_GUESTS','kestiä');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','jäsen');
define('_MEMBERS','jäsentä');
define('_YOUAREANON','Olet kesti. Voit rekisteröityä ilmaiseksi napsauttamalla <a href="user.php?op=check_age&module=NS-NewUser"><b>tästä</b></a>');
define('_USE_PN_PM','Käytä PostNuken yksityisviestien ilmoitusta');
define('_DISPLAY_TO_ANNON','Näytä online käyttäjät nimettömälle käyttäjälle');
define("_AMT_PRIVATEMSG","Yksityisviestien määrä!");
define("_UNREAD_PRIVATEMSG"," Lukemattomat yksityisviestit!");
define("_SEND_PM","Lähetä yksityisviesti !");
define("_USE_PM_SOUND", "Yksityisviestien ääni (pnimages/)");
define("_INFO_ICON", "Vieraslaatikossa näytettävä kuva (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "Näytä kirjautumiskysely blokissa");
define("_REMEMBER_ME", "Näytä muista minut tarkistuslaatikko");

// Catergory List
define("_DISPLAY_CATEGORY", "Näytä kategorialista blokissa");
define("_CATEGORY_LENGTH" , "Kategorioiden maksimipituus merkkeinä");
define("_INCLUDE_CATEGORY", "Näytä seuraavat kategoriat (CTRL+CLICK tyhjentää valinnat)");
define("_FORUM_DRILLDOWN", "Salli foorumin yksityiskohdat");
define("_FORUM_DRILLDOWN_MAX", "Yksityskohtaisemmin näytettävien foorumien määrä");
define("_FORUM_CATEGORIES", "FOORUMIT");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "FOORUMIN VIIME VIESTIT");
define("_DISPLAY_POSTS", "Näytä foorumin viime viestit blokissa");
define("_DISPLAY_CAT_POSTS", "Näytä jokaisen viestin kategoria");

define("_TIME_FORMAT", "Syötä ajan formaatti (PHP)");
define("_DATE_FORMAT", "Syötä pvm:n formaatti (PHP)");

define("_POST_BY"," ");
define("_POST_ON","pvm");
define("_POST_AT","klo");
define("_GOTO_BOARD","[Siirry foorumiin]");
define("_GOTO_POST","Lue viesti");
define("_BOARD_GUEST","Kesti");
define("_PM_NOTIFICATION","Uusia yksityisviestejä:");

define("_TOPIC_TITLE","Aihe");
define("_TOPIC_REPLIES","Vastauksia");
define("_TOPIC_VIEWS","Katseluja");
define("_POSTER","Lähettäjä");
define("_POST_DATE","Päivämäärä");
define("_POST_TIME","Aika");

define("_LAST_X_POSTS","Näytettävien viestien määrä");
define("_GROUP_TOPICS","Näytä vain aiheiden viimeisin viesti");
define("_TITLE_STRING_LENGTH","Aiheiden otsikoiden ja kategorioiden maksimipituus (0 = täyspitkä)");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Älä näytä seuraavien foorumien viestejä (CTRL+CLICK tyhjentää valinnat)");
define("_MODULE_NAME", "PostNuke moduulin nimi (Hakemiston nimi) Oletusarvo=PNphpBB2");
define("_MODULE_ERROR", "Moduulin nimi/polku ei ole kunnollinen tai moduulia ei ole asennettu. Korjaa.");
define("_PREFIX_ERROR", "Foruumin etuliite virhe, ei löytänyt foorumin tauluja.");
define("_TEMPLATE_ERROR","Virheelliset template asetukset!");
define("_POSTINFO_ERROR","Ei saa luettua viestitietoja tietokannasta!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>