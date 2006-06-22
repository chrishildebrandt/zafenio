<?php
// ----------------------------------------------------------------------
// Language File by Carls - carls@pnphpbb.com
// 
// Updated on: 03/22/2003
// ----------------------------------------------------------------------
// Default time/date formats
define("_TIMEFORMAT","%H:%M");		//%H - hour24, %I - hour12, %M - minute, %p - am/pm
define("_DATEFORMAT","%d. %b");		//%b - month short, %B - month long, %m - month decimal (2 digits),
																	//%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
																	// for more options see http://php.net/strftime

// General Block options
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlok indstillinger");
define("_SEP_BAR", "Vis skillelinje");
define("_SHOW_TITLE", "Vis sektionstitle");
define('_USER_STRING_LENGTH','Maks. antal tegn i brugernavne (0 = Fuld længde)');
					
// Forum stats
define("_DISPLAY_STATS", "Vis forum statistik i blokken");
define("_STATISTICS", "FORUM STATISTIK");
define("_NUMBER_OF_POSTS", "Antal indlæg");
define("_PTS", "Indlæg:");
define("_POSTS_PER_DAY", "Indlæg pr. dag");
define("_PD", "pr. dag:");
define("_NUMBER_TOPICS", "Antal emner");
define("_TOP", "Emner:");
define("_TOPICS_PER_DAY", "Emner pr. dag");
define("_NUMBER_USERS", "Antal brugere");
define("_USR", "Brugere:");
define("_USERS_PER_DAY", "Brugere pr. dag");


// Members Online
define("_DISPLAY_MEMBERS", "Vis online brugere i blokken (Ikke muligt i centerblok)");
if (!defined('_AND'))
{
   define('_AND', 'og');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "ONLINE BRUGERE");
define('_NOMEMBERS','Ingen brugere online.');
define('_CURRENTLY','Vi har');
define('_GUEST','gæst');
define('_GUESTS','gæster');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','Ingen');
define('_MEMBER','bruger');
define('_MEMBERS','brugere');
define('_YOUAREANON','Du er anonym bruger. <a href="user.php?op=check_age&amp;module=NS-NewUser"><b>Du kan registrere gratis ved at klikke her</b></a>');
define('_USE_PN_PM','Brug PostNuke besked indikation');
define('_DISPLAY_TO_ANNON','Vis online brugere for anonyme brugere');
define("_AMT_PRIVATEMSG","Antal beskeder!");
define("_UNREAD_PRIVATEMSG"," Ulæste beskeder!");
define("_SEND_PM","Send en besked !");
define("_USE_PM_SOUND", "Lyd for ny besked (pnimages/)");
define("_INFO_ICON", "Billede der skal vises i anonym boks (pnimages/)");
define("_NUM_USERS", "Antal online brugere der maks. skal vises");

// Login prompt
define("_DISPLAY_LOGIN", "Vis bruger login i blokken");
define("_REMEMBER_ME", "Vis Husk mig afkrydsningsfelt");

// Catergory List
define("_DISPLAY_CATEGORY", "Vis kategori liste i blok");
define("_CATEGORY_LENGTH" , "Maks antal tegn i kategorier");
define("_INCLUDE_CATEGORY", "Vis følgende kategorier (CTRL+KLIK fjerner markering)");
define("_FORUM_DRILLDOWN", "Tillad bred oversigt");
define("_FORUM_DRILLDOWN_MAX", "Maks. antal kategorie i bred oversigt");
define("_FORUM_CATEGORIES", "KATEGORIER");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "Nyeste forum indlæg");
define("_DISPLAY_POSTS", "Vis nyeste indlæg i blokken");
define("_DISPLAY_CAT_POSTS", "Vis kategori for hvert indlæg");

define("_TIME_FORMAT", "Angiv tids format (PHP)");
define("_DATE_FORMAT", "Angiv dato format (PHP)");

define("_POST_BY","af");
define("_POST_ON","på");
define("_POST_AT","i");
define("_GOTO_BOARD","[Gå til forum]");
define("_GOTO_POST","Gå til indlæg");
define("_BOARD_GUEST","Gæst");
define("_PM_NOTIFICATION","Ny besked:");

define("_TOPIC_TITLE","Emne");
define("_TOPIC_REPLIES","Svar");
define("_TOPIC_VIEWS","Visninger");
define("_POSTER","Forfatter");
define("_POST_DATE","Dato");
define("_POST_TIME","Tidspunkt");

define("_LAST_X_POSTS","Antal indlæg der skla vises");
define("_LAST_X_SCROLL","Vis indlæg som rullepanel i blokken");
define("_SCROLL_HEIGHT","Højde på rullepanel");
define("_SCROLL_IMAGES","Vis billeder ved indlæg");
define("_GROUP_TOPICS","Vis kun det nyeste indlæg for hvert emne");
define("_TITLE_STRING_LENGTH","Maks. antal tegn i emne- og kategori titler (0 = Fuld længde)");

define("_EXCLUDE_FORUMS","Vis ikke følgende forummer (CTRL+KLIK sætter/fjerner markering)");
define("_MODULE_NAME", "PostNuke modulnavn (Mappenavn) Standard=PNphpBB2");
define("_MODULE_LINKS", "Brug modulkald for links til forum.");
define("_MODULE_LINKS_EXPLAIN", "(Eksempel: http://www.host.com/modules.php?op=modload&name=)");
define("_MODULE_ERROR", "Modulnavn-/ sti er ikke gyldig, eller modulet er ikke installeret. Ret venligst dette.");
define("_PREFIX_ERROR", "Forum prefix fejl, kunne ikke finde forum database.");
define("_TEMPLATE_ERROR","Ugyldig tema opsætning!");
define("_POSTINFO_ERROR","Kunne ikke hente indlæg fra databasen!");

define("_SCROLL_SPEED", "Rulle hastighed");
define("_DISPLAY_DATE", "Vis dato");
define("_DISPLAY_TIME", "Vis tidspunkt");
?>