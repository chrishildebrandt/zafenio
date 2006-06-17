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
define("_MULTIBLOCK_OPTIONS", "PNphpBB2 MultiBlock Options");
define("_SEP_BAR", "Показывать разделитель");
define("_SHOW_TITLE", "Показывать название раздела");
define('_USER_STRING_LENGTH','Максимальная длинна имени пользователя (0 = полная длинна)');
					
// Forum stats
define("_DISPLAY_STATS", "Показывать статистику форума в блоке");
define("_STATISTICS", "Статистика форума");
define("_NUMBER_OF_POSTS", "Количество сообщений");
define("_PTS", "Сообщений:");
define("_POSTS_PER_DAY", "Сообщений в день");
define("_PD", "в день:");
define("_NUMBER_TOPICS", "Количество тем");
define("_TOP", "Тем:");
define("_TOPICS_PER_DAY", "Тем в день");
define("_NUMBER_USERS", "Количество пользователей");
define("_USR", "Пользователи:");
define("_USERS_PER_DAY", "Пользователей в день");


// Members Online
define("_DISPLAY_MEMBERS", "Показывать online пользователей  (не работает в центральном блоке)");
if (!defined('_AND'))
{
   define('_AND', 'и');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'online');
}
define('_MEMBERS_ONLINE_TITLE', "Пользователи online");
define('_NOMEMBERS','Никого нет.');
define('_CURRENTLY','Сейчас');
define('_GUEST','гость');
define('_GUESTS','гостей');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','Нет');
define('_MEMBER','пользователь');
define('_MEMBERS','пользователи');
define('_YOUAREANON','Вы анонимный пользователь.');
define('_USE_PN_PM','Использовать систему извещения о новых сообщениях PostNuke');
define('_DISPLAY_TO_ANNON','Показывать online пользователей анонимам');
define("_AMT_PRIVATEMSG","Число личных сообщений");
define("_UNREAD_PRIVATEMSG"," Непрочитанные личные сообщения");
define("_SEND_PM","Послать личное сообщение");
define("_USE_PM_SOUND", "Звук для личного сообщения (pnimages/)");
define("_INFO_ICON", "Картиинка отображаемая в блоке для анонимов (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "Показывать окно входа в блоке");
define("_REMEMBER_ME", "Показывать галочку Запомнить меня");

// Catergory List
define("_DISPLAY_CATEGORY", "Показывать категории в блоке");
define("_CATEGORY_LENGTH" , "Максимальная длингна названия категории");
define("_INCLUDE_CATEGORY", "Отображать следующие категории (CTRL+CLICK для выбора нескольких)");
define("_FORUM_DRILLDOWN", "Allow forum drilldown");
define("_FORUM_DRILLDOWN_MAX", "Maximul number of forums to drilldown");
define("_FORUM_CATEGORIES", "Форумы");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "Последние сообщения из форума");
define("_DISPLAY_POSTS", "Показывать последние сообщения с форума");
define("_DISPLAY_CAT_POSTS", "Показывать категории рядом с каждым сообщением");

define("_TIME_FORMAT", "Введите формат времени (PHP)");
define("_DATE_FORMAT", "Введите формат даты (PHP)");

define("_POST_BY","от");
define("_POST_ON","");
define("_POST_AT"," в");
define("_GOTO_BOARD","[Войти в форум]");
define("_GOTO_POST","Перейти к сообщению");
define("_BOARD_GUEST","Гость");
define("_PM_NOTIFICATION","Новые личные сообщения:");

define("_TOPIC_TITLE","Тема");
define("_TOPIC_REPLIES","Ответов");
define("_TOPIC_VIEWS","Просмотров");
define("_POSTER","Автор");
define("_POST_DATE","Дата");
define("_POST_TIME","Время");

define("_LAST_X_POSTS","Количество записей для отображения");
define("_LAST_X_SCROLL","Прокручивать сообщения из форума в блоке");
define("_SCROLL_HEIGHT","Высота зоны прокрутки");
define("_SCROLL_IMAGES","Показывать изображение следом за темой");
define("_GROUP_TOPICS","Показывать лишь последнее сообщение из каждой темы");
define("_TITLE_STRING_LENGTH","Макс. длинна тем и категорий (0 = полностью)");

define("_EXCLUDE_FORUMS","НЕ отображать сообщения из следующих форумов (CTRL+LEFT CLICK чтобы выбрать несколько)");
define("_MODULE_NAME", "Имя модуля PostNuke (Имя директории) По умолчанию=PNphpBB2");
define("_MODULE_ERROR", "Путь\имя модуля указанны неверно. Пожалуйста исправьте.");
define("_PREFIX_ERROR", "Ошибка префикса форума.невозможно обнаружить базу данных.");
define("_TEMPLATE_ERROR","Неверные настройки шаблонов!");
define("_POSTINFO_ERROR","невозможно получить информацию о PostNuke!");

define("_SCROLL_SPEED", "Скорость прокрутки");
define("_DISPLAY_DATE", "Отображать дату");
define("_DISPLAY_TIME", "Отображать время");
?>