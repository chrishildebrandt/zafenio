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
define("_MULTIBLOCK_OPTIONS", "нМгягй гАчгфЦи гАнгуи хгАPNphpBB2 ");
define("_SEP_BAR", "цыЕя гАнь гАщгуА");
define("_SHOW_TITLE", "цыЕя зДФгД гАчсЦ");
define('_USER_STRING_LENGTH','гАмо гАгчуЛ Азяж есЦ гАзжФ║ еонА 0 Азяж гАгсЦ ъгЦАг');
					
// Forum stats
define("_DISPLAY_STATS", "езяж емугфМгй гАЦДйоЛ щМ гАчгфЦи");
define("_STATISTICS", "емугфМгй гАЦДйоЛ");
define("_NUMBER_OF_POSTS", "зоо гАЦтгяъгй");
define("_PTS", "гАЦтгяъгй:");
define("_POSTS_PER_DAY", "зоо гАЦтгяъгй МФЦМг");
define("_PD", "МФЦМг:");
define("_NUMBER_TOPICS", "зоо гАЦФгжМз");
define("_TOP", "гАЦФгжМз:");
define("_TOPICS_PER_DAY", "зоо гАЦФгжМз МФЦМг:");
define("_NUMBER_USERS", "зоо гАгзжга");
define("_USR", "гАгзжга:");
define("_USERS_PER_DAY", "гАгзжга гАлоо МФЦМг:");
define("_TOTAL","гАЦлЦФз");


// Members Online
define("_DISPLAY_MEMBERS", "езяж гАгзжга гАЦйФглоФД щМ гАчгфЦи║ АД МъФД пАъ ЦйФщяг епг енйяй чгфЦи ФсьМи");
if (!defined('_AND'))
{
   define('_AND', 'Ф');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'ЦйФглоФД');
}
define('_MEMBERS_ONLINE_TITLE', "гАгзжга гАЦйФглоФД");
define('_NOMEMBERS','АгМФло цзжга ЦйФглоФД мгАМг');
define('_CURRENTLY','АоМДг');
define('_GUEST','ргфя');
define('_GUESTS','рФгя');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','зжФ');
define('_MEMBERS','цзжга');
define('_YOUAREANON','цДй шМя ЦслА ежшь <a href="user.php?op=check_age&module=NS-NewUser"><b>ЕДг ААйслМА</b></a>');
define('_USE_PN_PM','есйноЦ гАйДхМЕ хгАясгфА гАтнуМи гАнгу хгАхФсй ДМФъ');
define('_DISPLAY_TO_ANNON','езяж цсЦга гАгзжга гАЦйФглоФД мйЛ ААрФгя');
define("_AMT_PRIVATEMSG","ъЦМи гАясгфА гАнгуи");
define("_UNREAD_PRIVATEMSG","гАясгфА гАнгуи гАшМя Цчяди");
define("_SEND_PM","еясА ясгАи нгуи!");
define("_USE_PM_SOUND", "гАуФй гАнгу хгАясгАи гАтнуМи (pnimages/)");
define("_INFO_ICON", "гАуФяи гАйМ йзяж щМ уДоФч гАргфя(pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "езяж Цяхз гАонФА щМ гАчгфЦи");
define("_REMEMBER_ME", "езяж нМгя йпъяДМ");

// Catergory List
define("_DISPLAY_CATEGORY", "езяж чгфЦи хйуДМщ гАЦДйоМгй щМ гАчгфЦи");
define("_CATEGORY_LENGTH" , "гАмо гАгчуЛ Азоо гАмяФщ гАЦзяФжи щМ цсЦга гАйугДМщ");
define("_INCLUDE_CATEGORY", "езяж гАйуДМщгй гАйгАМи (CTRL+CLICK )АЦсм гАйуДМщ гАЦнйгя");
define("_FORUM_DRILLDOWN", "езяж гАЦДйоМгй гАщязМи");
define("_FORUM_DRILLDOWN_MAX", "цчуЛ мо Азяж гАЦДйоМгй гАщязМи");
define("_FORUM_CATEGORIES", "гАЦДйоМгй");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "бня гАЦтгяъгй");
define("_DISPLAY_POSTS", "езяж бня гАЦтгяъгй щМ гАЦДйоЛ щМ гАчгфЦи");
define("_DISPLAY_CAT_POSTS", "езяж гАйуДМщ Цз ъА Цтгяъи");

define("_TIME_FORMAT", "еонА ьяМчи зяж гАФчй хесйногЦ оФгА гА (PHP)");
define("_DATE_FORMAT", "еонА ьяМчи зяж гАйгяМн хесйногЦ оФгА гА (PHP)");

define("_POST_BY","хФгсьи");
define("_POST_ON","щМ");
define("_POST_AT","гАсгзи");
define("_GOTO_BOARD","[гАонФА ААЦДйоЛ]");
define("_GOTO_POST","епЕх ААЦтгяъи");
define("_BOARD_GUEST","ргфя");
define("_PM_NOTIFICATION","гАясгфА гАнгуи гАлоМои:");

define("_TOPIC_TITLE","гАЦФжФз");
define("_TOPIC_REPLIES","гАяоФо");
define("_TOPIC_VIEWS","гАрМгягй");
define("_POSTER","Poster");
define("_POST_DATE","гАйгяМн");
define("_POST_TIME","гАФчй");

define("_LAST_X_POSTS","зоо гАЦогнАгй гАЦзяФжи");
define("_LAST_X_SCROLL","езяж тяМьг зЦФоМг хгАЦтгяъгй щМ гАчгфЦи");
define("_SCROLL_HEIGHT","ьФА тяМь гАзяж");
define("_SCROLL_IMAGES","езяж гАуФя хлФгя гАЦФгжМз");
define("_GROUP_TOPICS","езяж бня Цтгяъи ЦД ъА ЦФжФз");
define("_TITLE_STRING_LENGTH","цчуЛ мо Азоо гАмяФщ щМ зДгФМД гАЦФгжМз ФгАйуДМщгй║ еонА 0 АзяжЕг ъгЦАи");

define("_MODULE_LINKS", "есйноЦ ьяМчи есйозга гАхягЦл гАЦАмчи щМ гАяФгхь ААЦДйоМгй");
define("_MODULE_LINKS_EXPLAIN", "(ЦкгА http://www.host.com/modules.php?op=modload&name=)");

define("_EXCLUDE_FORUMS","Агйзяж гАЦтгяъгй ЦД гАЦДйоМгй гАйгАМи (CTRL+CLICK АергАи гАЦДйоМгй гАЦнйгяи)");
define("_MODULE_NAME", "есЦ хяДгЦл гАЦДйоМгй гАЦАмч ║ гАгщйягжМ ЕФPNphpBB2");
define("_MODULE_ERROR", "есЦ гАхяДгЦл гАЦАмч цФ зДФгДЕ шМя умМмМД цФ гД гАхяДгЦл АЦ МйЦ йяъМхЕ хзо║ МялЛ йумМм гАФжз");
define("_PREFIX_ERROR", "АЦ Мйзящ гАхяДгЦл зАЛ чФгзо гАхМгДгй чо МъФД ньга щМ гАгсЦ");
define("_TEMPLATE_ERROR","ньга щМ езогогй гАчгАх");
define("_POSTINFO_ERROR","щтАй зЦАМи емжгя гАЦзАФЦгй ЦД чФгзо гАхМгДгй");
define("_SCROLL_SPEED", "сязи гАзяж");
define("_DISPLAY_DATE", "езяж гАйгяМн");
define("_DISPLAY_TIME", "езяж гАФчй");

define("_NUM_USERS","зоо гАгзжга щМ гАчгфЦи");

?>