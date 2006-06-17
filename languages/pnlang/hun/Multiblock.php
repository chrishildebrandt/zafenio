<?php
// ----------------------------------------------------------------------
// Language File by Carls - carls@pnphpbb.com
// 
// Updated on: 03/27/2006
// ----------------------------------------------------------------------
// Default time/date formats
define("_TIMEFORMAT","%H:%M");		//%H - hour24, %I - hour12, %M - minute, %p - am/pm
define("_DATEFORMAT","%d. %b");		//%b - month short, %B - month long, %m - month decimal (2 digits),
																	//%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
																	// for more options see http://php.net/strftime

// General Block options
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock Options");
define("_SEP_BAR", "Show separator bar");
define("_SHOW_TITLE", "Show section title");
define('_USER_STRING_LENGTH','Maximal character length of user names (0 = full length)');

// Forum stats
define("_DISPLAY_STATS", "Display Forum Statistics in block");
define("_STATISTICS", "FORUM STATISTICS");
define("_NUMBER_OF_POSTS", "Number of posts");
define("_PTS", "Posts:");
define("_POSTS_PER_DAY", "Posts per day");
define("_PD", "Daily");
define("_TOTAL", "Total");
define("_NUMBER_TOPICS", "Number of topics");
define("_TOP", "Topics:");
define("_TOPICS_PER_DAY", "Topics per day");
define("_NUMBER_USERS", "Number of users");
define("_USR", "Users:");
define("_USERS_PER_DAY", "Users per day");

// Members Online
define("_DISPLAY_MEMBERS", "Display Members Online in block (Not available in center block)");
if (!defined('_AND'))
{
	define('_AND', 'and');
}
if (!defined('_ONLINE'))
{
	define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "MEMBERS ONLINE");
define('_NOMEMBERS','Currently no members online.');
define('_CURRENTLY','We have');
define('_GUEST','guest');
define('_GUESTS','guests');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','No');
define('_MEMBER','member');
define('_MEMBERS','members');
define('_YOUAREANON','You are an anonymous user. You can register for free by clicking <a href="user.php?op=check_age&amp;module=NS-NewUser"><b>here</b></a>');
define('_USE_PN_PM','Use PostNuke personal message notification');
define('_DISPLAY_TO_ANNON','Display online users to anonymous users');
define("_AMT_PRIVATEMSG","Amount of private message(s)!");
define("_UNREAD_PRIVATEMSG"," Unread private message(s)!");
define("_SEND_PM","Send a private message !");
define("_USE_PM_SOUND", "Sound for personal message (pnimages/)");
define("_INFO_ICON", "Image to display in anonymous box (pnimages/)");
define("_NUM_USERS", "Maximum number of users to show online");

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
define("_RE","Re");

define("_LAST_X_POSTS","Number of entries to display");
define("_LAST_X_SCROLL","Scroll forum posts in block");
define("_SCROLL_HEIGHT","Height of scroll area");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_DISPLAY_REPLIES","Display reply subject if avaiable, as last post");
define("_LINE_COLOR","Separator line color");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Don't show posts of the following forums (CTRL+LEFT CLICK sets/clears selections)");
define("_MODULE_NAME", "PostNuke module name (Directory name) Default=PNphpBB2");
define("_MODULE_LINKS", "Use module calls for links to forum.");
define("_MODULE_LINKS_EXPLAIN", "(Example: http://www.host.com/modules.php?op=modload&name=)");
define("_MODULE_ERROR", "Module name/path is not valid, or module not installed. Please correct.");
define("_PREFIX_ERROR", "Forum prefix error, could not locate forum database.");
define("_TEMPLATE_ERROR","Invalid template settings!");
define("_POSTINFO_ERROR","Unable to obtain post-info from database!");

define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>