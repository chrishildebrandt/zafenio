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
define("_MULTIBLOCK_OPTIONS", "������ ������� ������ ���PNphpBB2 ");
define("_SEP_BAR", "���� ���� ������");
define("_SHOW_TITLE", "���� ����� �����");
define('_USER_STRING_LENGTH','���� ������ ���� ��� ����� ���� 0 ���� ����� �����');
					
// Forum stats
define("_DISPLAY_STATS", "���� �������� ������� �� �������");
define("_STATISTICS", "�������� �������");
define("_NUMBER_OF_POSTS", "��� ���������");
define("_PTS", "���������:");
define("_POSTS_PER_DAY", "��� ��������� �����");
define("_PD", "�����:");
define("_NUMBER_TOPICS", "��� ��������");
define("_TOP", "��������:");
define("_TOPICS_PER_DAY", "��� �������� �����:");
define("_NUMBER_USERS", "��� �������");
define("_USR", "�������:");
define("_USERS_PER_DAY", "������� ����� �����:");
define("_TOTAL","�������");


// Members Online
define("_DISPLAY_MEMBERS", "���� ������� ���������� �� ������ɡ �� ���� ��� ������ ��� ����� ����� �����");
if (!defined('_AND'))
{
   define('_AND', '�');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', '��������');
}
define('_MEMBERS_ONLINE_TITLE', "������� ����������");
define('_NOMEMBERS','������ ����� �������� �����');
define('_CURRENTLY','�����');
define('_GUEST','����');
define('_GUESTS','����');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','���');
define('_MEMBERS','�����');
define('_YOUAREANON','��� ��� ���� ���� <a href="user.php?op=check_age&module=NS-NewUser"><b>��� �������</b></a>');
define('_USE_PN_PM','������ ������� �������� ������� ����� ������� ����');
define('_DISPLAY_TO_ANNON','���� ����� ������� ���������� ��� ������');
define("_AMT_PRIVATEMSG","���� ������� ������");
define("_UNREAD_PRIVATEMSG","������� ������ ����� �����");
define("_SEND_PM","���� ����� ����!");
define("_USE_PM_SOUND", "����� ����� �������� ������� (pnimages/)");
define("_INFO_ICON", "������ ���� ���� �� ����� ������(pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "���� ���� ������ �� �������");
define("_REMEMBER_ME", "���� ���� ������");

// Catergory List
define("_DISPLAY_CATEGORY", "���� ����� ������ ��������� �� �������");
define("_CATEGORY_LENGTH" , "���� ������ ���� ������ �������� �� ����� ��������");
define("_INCLUDE_CATEGORY", "���� ��������� ������� (CTRL+CLICK )���� ������� �������");
define("_FORUM_DRILLDOWN", "���� ��������� �������");
define("_FORUM_DRILLDOWN_MAX", "���� �� ���� ��������� �������");
define("_FORUM_CATEGORIES", "���������");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "��� ���������");
define("_DISPLAY_POSTS", "���� ��� ��������� �� ������� �� �������");
define("_DISPLAY_CAT_POSTS", "���� ������� �� �� ������");

define("_TIME_FORMAT", "���� ����� ��� ����� �������� ���� �� (PHP)");
define("_DATE_FORMAT", "���� ����� ��� ������� �������� ���� �� (PHP)");

define("_POST_BY","������");
define("_POST_ON","��");
define("_POST_AT","������");
define("_GOTO_BOARD","[������ �������]");
define("_GOTO_POST","���� ��������");
define("_BOARD_GUEST","����");
define("_PM_NOTIFICATION","������� ������ �������:");

define("_TOPIC_TITLE","�������");
define("_TOPIC_REPLIES","������");
define("_TOPIC_VIEWS","��������");
define("_POSTER","Poster");
define("_POST_DATE","�������");
define("_POST_TIME","�����");

define("_LAST_X_POSTS","��� ��������� ��������");
define("_LAST_X_SCROLL","���� ����� ������ ���������� �� �������");
define("_SCROLL_HEIGHT","��� ���� �����");
define("_SCROLL_IMAGES","���� ����� ����� ��������");
define("_GROUP_TOPICS","���� ��� ������ �� �� �����");
define("_TITLE_STRING_LENGTH","���� �� ���� ������ �� ������ �������� ���������ʡ ���� 0 ������ �����");

define("_MODULE_LINKS", "������ ����� ������� ������� ������� �� ������� ���������");
define("_MODULE_LINKS_EXPLAIN", "(���� http://www.host.com/modules.php?op=modload&name=)");

define("_EXCLUDE_FORUMS","������ ��������� �� ��������� ������� (CTRL+CLICK ������ ��������� ��������)");
define("_MODULE_NAME", "��� ������ ��������� ������ � ��������� ��PNphpBB2");
define("_MODULE_ERROR", "��� �������� ������ �� ������ ��� ������ �� �� �������� �� ��� ������ ��ϡ ���� ����� �����");
define("_PREFIX_ERROR", "�� ����� �������� ��� ����� �������� �� ���� ���� �� �����");
define("_TEMPLATE_ERROR","���� �� ������� ������");
define("_POSTINFO_ERROR","���� ����� ����� ��������� �� ����� ��������");
define("_SCROLL_SPEED", "���� �����");
define("_DISPLAY_DATE", "���� �������");
define("_DISPLAY_TIME", "���� �����");

define("_NUM_USERS","��� ������� �� �������");

?>