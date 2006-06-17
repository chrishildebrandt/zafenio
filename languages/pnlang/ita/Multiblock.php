<?php
/***************************************************************************
 *                            lang_main.php [Italian]
 *                              -------------------
 * Traduzione e supporto Italiano per pnphpbb2
 * www.openitalia.net - staff@openitalia.net
 * Tiraboschi Massimiliano aka TiMax
 * email: timax@envolution.com
 *
 ****************************************************************************/
// Default time/date formats
define("_TIMEFORMAT","%H:%M");                //%H - hour24, %I - hour12, %M - minute, %p - am/pm
define("_DATEFORMAT","%d. %b");                //%b - month short, %B - month long, %m - month decimal (2 digits),
                                                                                                                                        //%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
                                                                                                                                        // for more options see http://php.net/strftime

// General Block options
define("_MULTIBLOCK_OPTIONS", "Opzioni PNphpBB2 MultiBlock");
define("_SEP_BAR", "Mostra barra di separazione");
define("_SHOW_TITLE", "Mostra titolo sezione");
define('_USER_STRING_LENGTH','Lunghezza massima caratteri per nickname (0 = lunghezza totale)');

// Forum stats
define("_DISPLAY_STATS", "Mostra statistiche forum in blocco");
define("_STATISTICS", "Statistiche Forum");
define("_NUMBER_OF_POSTS", "Numero di messaggi");
define("_PTS", "Messaggi:");
define("_POSTS_PER_DAY", "Messaggi al giorno");
define("_PD", "per giorno:");
define("_NUMBER_TOPICS", "Numero di discussioni");
define("_TOP", "Discussioni:");
define("_TOPICS_PER_DAY", "Discussioni per giorno");
define("_NUMBER_USERS", "Numero utenti");
define("_USR", "Utenti:");
define("_USERS_PER_DAY", "Utenti per giorno");


// Members Online
define("_DISPLAY_MEMBERS", "Mostra utenti online nel blocco (Non disponibile nel blocco centrale)");
if (!defined('_AND'))
{
   define('_AND', 'e');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'on-line');
}
define('_MEMBERS_ONLINE_TITLE', "Utenti on-line");
define('_NOMEMBERS','Nessun utente online.');
define('_CURRENTLY','Abbiamo');
define('_GUEST','ospite');
define('_GUESTS','ospiti');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','No');
define('_MEMBER','utente');
define('_MEMBERS','utenti');
define('_YOUAREANON','Non hai ancora un account?<br /><a href="user.php">Registrati subito</a>.</br>Come</br>utente registrato potrai </br>cambiare tema grafico </br>e utilizzare tutti i servizi offerti.');
define('_USE_PN_PM','Usa messaggi privati');
define('_DISPLAY_TO_ANNON','Mostra utenti online per anonimi');
define("_AMT_PRIVATEMSG","Totale di messaggi privati !");
define("_UNREAD_PRIVATEMSG"," Messaggi privati non letti!");
define("_SEND_PM","Invia un messaggio privato !");
define("_USE_PM_SOUND", "Suono al ricevimento messaggi privati (pnimages/)");
define("_INFO_ICON", "Immagina da visualizzare nel box anonimo (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "Mostra login nel blocco");
define("_REMEMBER_ME", "Mostra casella ricordami");

// Catergory List
define("_DISPLAY_CATEGORY", "Mostra lista categorie nel blocco");
define("_CATEGORY_LENGTH" , "Lunghezza massima caratter per categorie");
define("_INCLUDE_CATEGORY", "Mostra le seguenti categorie (CTRL+CLICK selezioni multiple)");
define("_FORUM_DRILLDOWN", "Mostra titoli forum");
define("_FORUM_DRILLDOWN_MAX", "Numero massimo titoli forum da mostrare");
define("_FORUM_CATEGORIES", "Forums");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "Ultimi messaggi dal forum");
define("_DISPLAY_POSTS", "Mostra ultimi messaggi nel blocco");
define("_DISPLAY_CAT_POSTS", "Mostra categoria per ogni messaggio");

define("_TIME_FORMAT", "Inserisci il formato ora (PHP)");
define("_DATE_FORMAT", "inserisci il formato data (PHP)");

define('_POST_BY','da');
define('_POST_ON','il');
define('_POST_AT','alle');
define('_GOTO_BOARD',"- Accesso Forum -");
define('_GOTO_POST','vai al messaggio');
define('_BOARD_GUEST','Visitatore');
define('_PM_NOTIFICATION','Nuovo messaggio privato:');

define('_TOPIC_TITLE','Discussione');
define('_TOPIC_REPLIES','Risposte');
define('_TOPIC_VIEWS','Letture');
define('_POSTER','Autore');
define('_POST_DATE','Data');
define('_POST_TIME','Ora');

define("_LAST_X_POSTS","Number of entries to display");
define("_LAST_X_SCROLL","Scroll forum posts in block");
define("_SCROLL_HEIGHT","Height of scroll area");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Don't show posts of the following forums (CTRL+CLICK clears selections)");
define("_MODULE_NAME", "Nome directory del modulo Default=PNphpBB2");
define("_MODULE_ERROR", "Il nome o il percorso del modulo non è valido, o il modulo non è installato. Prego correggi.");
define("_PREFIX_ERROR", "Prefisso forum errato, non risco a connettere il database del forum.");
define("_TEMPLATE_ERROR","Invalid template settings!");
define("_POSTINFO_ERROR","Impossibile ottentere informazioni messaaggio dal database!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>