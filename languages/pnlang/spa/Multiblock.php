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
define("_MULTIBLOCK_OPTIONS","Opciones para PNphpBB2 Multibloque");
define("_SEP_BAR","Mostrar barra separadora");
define("_SHOW_TITLE","Mostrar título sección");
define('_USER_STRING_LENGTH','Numero de caracteres máximo para los nombres de usuarios (0 = sin límite)');
					
// Forum stats
define("_DISPLAY_STATS","Muestra estadisticas del foro en el bloque");
define("_STATISTICS","ESTADISTICAS FORO");
define("_NUMBER_OF_POSTS","Número de mensajes");
define("_PTS","Mensajes:");
define("_POSTS_PER_DAY","Mensajes por día");
define("_PD","por día:");
define("_NUMBER_TOPICS","Número de temas");
define("_TOP", "Temas:");
define("_TOPICS_PER_DAY","Temas por día");
define("_NUMBER_USERS","Número de usuarios");
define("_USR","Usuarios:");
define("_USERS_PER_DAY","Usuarios por día");


// Members Online
define("_DISPLAY_MEMBERS","Muestra a los usuarios en linea en el bloque (no disponible para el bloque central)");
if (!defined('_AND'))
{
   define('_AND', 'y');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'en linea');
}
define('_MEMBERS_ONLINE_TITLE',"Usuarios EN LINEA");
define('_NOMEMBERS','No hay usuarios en linea.');
define('_CURRENTLY','Tenemos');
define('_GUEST','invitado');
define('_GUESTS','invitados');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','usuario');
define('_MEMBERS','usuarios');
define('_YOUAREANON','Eres un usuario anónimo. Puedes registrarte gratis haciendo click <a href="user.php?op=check_age&module=NS-NewUser"><b>aquí</b></a>');
define('_USE_PN_PM','Usar la notificación de mensaje de PostNuke');
define('_DISPLAY_TO_ANNON','Muestra usuarios en linea como usuarios anonimos');
define("_AMT_PRIVATEMSG","¡Cantidad de mensaje(s) privado(s)!");
define("_UNREAD_PRIVATEMSG","¡Mensaje(s) privado(s) no leido(s)!");
define("_SEND_PM","¡Envia un mensaje privado!");
define("_USE_PM_SOUND", "Sonido para mensaje personal (pnimages/)");
define("_INFO_ICON", "Imagen para mostrar en bloque anonimo (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN","Muestra entrada de usuario en el bloque");
define("_REMEMBER_ME","Muestra opción recordarme");

// Catergory List
define("_DISPLAY_CATEGORY","Muestra lista de categorías en el bloque");
define("_CATEGORY_LENGTH","Número de caracteres máximo de las categorias");
define("_INCLUDE_CATEGORY","Muestra las siguientes categorías (CTRL+CLICK limpia selección)");
define("_FORUM_DRILLDOWN","Permite foros drilldown");
define("_FORUM_DRILLDOWN_MAX","Número máximo de foros drilldown");
define("_FORUM_CATEGORIES","FOROS");

// Last forum Posts
define("_FORUM_POSTS_TITLE","ULTIMOS MENSAJES");
define("_DISPLAY_POSTS", "Muestra últimos mensajes en el bloque");
define("_DISPLAY_CAT_POSTS", "Muestra categoria en cada mensaje");

define("_TIME_FORMAT", "Entra formato de hora (PHP)");
define("_DATE_FORMAT", "Entra formato de fecha (PHP)");

define("_POST_BY","por");
define("_POST_ON","el");
define("_POST_AT","a las");
define("_GOTO_BOARD","[Entra al Foro]");
define("_GOTO_POST","ir a mensaje");
define("_BOARD_GUEST","Invitado");
define("_PM_NOTIFICATION","Nuevo mensaje privado:");

define("_TOPIC_TITLE","Temas");
define("_TOPIC_REPLIES","Respuestas");
define("_TOPIC_VIEWS","Lecturas");
define("_POSTER","Autor");
define("_POST_DATE","Fecha");
define("_POST_TIME","Hora");

define("_LAST_X_POSTS","Número de entradas a mostrar");
define("_GROUP_TOPICS","Sólo muestra los últimos mensajes de cada tema");
define("_TITLE_STRING_LENGTH","Número de caracteres máximos para los títulos de temas y categorías (0 = sin límite)");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","No mostrar mensajes de los siguientes foros (CTRL+CLICK para seleccionar)");
define("_MODULE_NAME","Nombre modulo PostNuke (nombre del directorio) Por defecto=PNphpBB2");
define("_MODULE_ERROR","Nombre/ruta del modulo invalida, o el modulo no esta instalado. Por favor corregir.");
define("_PREFIX_ERROR","Error en el prefix de tablas del foro, no es posible localizarlas en la base de datos.");
define("_TEMPLATE_ERROR","¡Configuración invalida en Estilos!");
define("_POSTINFO_ERROR","imposible obtener información de mensajes desde la base de datos!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>