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
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock Opties");
define("_SEP_BAR", "Laat een scheidingslijn zien");
define("_SHOW_TITLE", "Laat de sectietitel zien");
define('_USER_STRING_LENGTH','Maximale lengte van de gebruikersnaam (0 = volledige lengte)');
					
// Forum stats
define("_DISPLAY_STATS", "Laat de Forum Statistieken zin in het block");
define("_STATISTICS", "FORUM STATISTIEKEN");
define("_NUMBER_OF_POSTS", "Aantal postings");
define("_PTS", "Postings:");
define("_POSTS_PER_DAY", "Postings per dag");
define("_PD", "per dag:");
define("_NUMBER_TOPICS", "Aantal onderwerpen");
define("_TOP", "Onderwerpen:");
define("_TOPICS_PER_DAY", "Onderwerpen per dag");
define("_NUMBER_USERS", "Aantal gebruikers");
define("_USR", "Gebruikers:");
define("_USERS_PER_DAY", "Gebruikers per dag");


// Members Online
define("_DISPLAY_MEMBERS", "Laat gebruikers Online zien in blok(Niet beschikbaar in middenblok)");
if (!defined('_AND'))
{
   define('_AND', 'en');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "LEDEN ONLINE");
define('_NOMEMBERS','op het moment geen leden online.');
define('_CURRENTLY','We hebben');
define('_GUEST','gast');
define('_GUESTS','gasten');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','lid');
define('_MEMBERS','leden');
define('_YOUAREANON','Je bent een anonieme gebruiker. You can register for free by clicking <a href="user.php?op=check_age&module=NS-NewUser"><b>here</b></a>');
define('_USE_PN_PM','Use PostNuke personal message notification');
define('_DISPLAY_TO_ANNON','Display online users to anonymous users');
define("_AMT_PRIVATEMSG","Amount of private message(s)!");
define("_UNREAD_PRIVATEMSG"," Unread private message(s)!");
define("_SEND_PM","Send a private message !");
define("_USE_PM_SOUND", "Sound for personal message (pnimages/)");
define("_INFO_ICON", "Image to display in anonymous box (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "Display Member Login prompt in block");
define("_REMEMBER_ME", "Show remember me check box");

// Catergory List
define("_DISPLAY_CATEGORY", "Display Category List in block");
define("_CATEGORY_LENGTH" , "Maximal character length of categories");
define("_INCLUDE_CATEGORY", "Show the following categories (CTRL+CLICK clears selections)");
define("_FORUM_DRILLDOWN", "Allow forum drilldown");
define("_FORUM_DRILLDOWN_MAX", "Maximul number of forums to drilldown");
define("_FORUM_CATEGORIES", "FORUMS");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "LAST FORUM POSTS");
define("_DISPLAY_POSTS", "Display Last Forum Posts in block");
define("_DISPLAY_CAT_POSTS", "Display Category with each post");

define("_TIME_FORMAT", "Enter time format (PHP)");
define("_DATE_FORMAT", "Enter date format (PHP)");

define("_POST_BY","by");
define("_POST_ON","on");
define("_POST_AT","at");
define("_GOTO_BOARD","[Access Forum]");
define("_GOTO_POST","goto Post");
define("_BOARD_GUEST","Guest");
define("_PM_NOTIFICATION","New private messages:");

define("_TOPIC_TITLE","Topic");
define("_TOPIC_REPLIES","Replies");
define("_TOPIC_VIEWS","Views");
define("_POSTER","Poster");
define("_POST_DATE","Date");
define("_POST_TIME","Time");

define("_LAST_X_POSTS","Number of entries to display");
define("_LAST_X_SCROLL","Scroll forum posts in block");
define("_SCROLL_HEIGHT","Height of scroll area");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Don't show posts of the following forums (CTRL+LEFT CLICK sets/clears selections)");
define("_MODULE_NAME", "PostNuke module name (Directory name) Default=PNphpBB2");
define("_MODULE_ERROR", "Module name/path is not valid, or module not installed. Please correct.");
define("_PREFIX_ERROR", "Forum prefix error, could not locate forum database.");
define("_TEMPLATE_ERROR","Invalid template settings!");
define("_POSTINFO_ERROR","Unable to obtain post-info from database!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>