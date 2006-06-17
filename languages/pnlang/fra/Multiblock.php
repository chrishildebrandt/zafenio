<?php
// ----------------------------------------------------------------------
// Language File by Carls - carls@pnphpbb.com
// French version by DuNs from http://ww.dunslab.net
// Updated on: 03/28/2003
// ----------------------------------------------------------------------
// Default time/date formats
define("_TIMEFORMAT","%H:%M");		//%H - hour24, %I - hour12, %M - minute, %p - am/pm
define("_DATEFORMAT","%d. %b");		//%b - month short, %B - month long, %m - month decimal (2 digits),
																	//%a - dayofweek short, %A - dayofweek long, %y - year (2 digits), %Y - year (4 digits)
																	// for more options see http://php.net/strftime

// General Block options
define("_MULTIBLOCK_OPTIONS", "Options du MultiBlock PNphpBB2");
define("_SEP_BAR", "Afficher la barre de s�paration");
define("_SHOW_TITLE", "Afficher le titre de section");
define('_USER_STRING_LENGTH','Nombre maximal de caract�res pour les utilisateurs (0 = nom complet)');
					
// Forum stats
define("_DISPLAY_STATS", "Afficher les statistiques dans le block");
define("_STATISTICS", "Statistiques");
define("_NUMBER_OF_POSTS", "Nb. de messages");
define("_PTS", "Messages :");
define("_POSTS_PER_DAY", "Messages par jour");
define("_PD", "par jour :");
define("_NUMBER_TOPICS", "Nb. de sujets");
define("_TOP", "Sujets :");
define("_TOPICS_PER_DAY", "Sujets par jour");
define("_NUMBER_USERS", "Nb. d'util.");
define("_USR", "Utilisateurs :");
define("_USERS_PER_DAY", "Util. par jour");


// Members Online
define("_DISPLAY_MEMBERS", "Afficher les utilisateurs en ligne dans le bloc (non disponible si afficher en bloc central)");
if (!defined('_AND'))
{
   define('_AND', 'et');
}
if (!defined('_ONLINE'))
{
   define('_ONLINE', 'en ligne');
}
define('_MEMBERS_ONLINE_TITLE', "Membres en ligne");
define('_NOMEMBERS','Actuellement aucun membre en ligne.');
define('_CURRENTLY','Nous avons');
define('_GUEST','invit�');
define('_GUESTS','invit�s');
// Added _NOGUESTS to solve translation problems for a few languages.
// Defaults to 0 guests, but can be changed to no in english (currently no guests) and whatever needed for other languages
define('_NOGUESTS','0');
define('_MEMBER','membre');
define('_MEMBERS','membres');
define('_YOUAREANON','Vous �tes un utilisateur anonyme. Vous pouvez vous enregistrer gratuitement en cliquant <a href="user.php?op=check_age&module=NS-NewUser"><b>ici</b></a>');
define('_USE_PN_PM','Utiliser le syst�me de messagerie personnel de PostNuke');
define('_DISPLAY_TO_ANNON','Afficher les utilisateurs en ligne pour les visiteurs anonymes');
define("_AMT_PRIVATEMSG","Quantit� de message(s) priv�(s)!");
define("_UNREAD_PRIVATEMSG"," Message(s) priv�(s) non lu(s)!");
define("_SEND_PM","Envoyer un message priv� !");
define("_USE_PM_SOUND", "Sons pour les messages personnels (pnimages/)");
define("_INFO_ICON", "Image � afficher pour les boites utilisateurs anonymes (pnimages/)");

// Login prompt
define("_DISPLAY_LOGIN", "Afficher la boite de connexion dans le bloc");
define("_REMEMBER_ME", "Afficher la case � cocher Se souvenir");

// Catergory List
define("_DISPLAY_CATEGORY", "Afficher la liste des cat�gories dans le bloc");
define("_CATEGORY_LENGTH" , "Nombre maximal de caract�res pour les cat�gories");
define("_INCLUDE_CATEGORY", "Afficher les cat�gories suivantes (CTRL+CLICK annule la s�lection)");
define("_FORUM_DRILLDOWN", "Autoriser le d�tail");
define("_FORUM_DRILLDOWN_MAX", "Nombre maximal de forums � d�tailler");
define("_FORUM_CATEGORIES", "Forums");

// Last forum Posts
define("_FORUM_POSTS_TITLE", "Derniers messages...");
define("_DISPLAY_POSTS", "Afficher les derniers messages du Forum dans le bloc");
define("_DISPLAY_CAT_POSTS", "Afficher la cat�gorie de chaque message");

define("_TIME_FORMAT", "Entrer le format de l'heure (PHP)");
define("_DATE_FORMAT", "Entrer le format de la date (PHP)");

define("_POST_BY","");
define("_POST_ON","le");
define("_POST_AT","�");
define("_GOTO_BOARD","[Acc�der au Forum]");
define("_GOTO_POST","aller au message");
define("_BOARD_GUEST","Invit�");
define("_PM_NOTIFICATION","Nouveau message priv� :");

define("_TOPIC_TITLE","Sujet");
define("_TOPIC_REPLIES","R�ponses");
define("_TOPIC_VIEWS","Vues");
define("_POSTER","Auteur");
define("_POST_DATE","Date");
define("_POST_TIME","Heure");

define("_LAST_X_POSTS","Nombre d'entr�es �  afficher");
define("_GROUP_TOPICS","Afficher seulement le dernier message de chaque sujet");
define("_TITLE_STRING_LENGTH","Nombre maximal de caract�res pour le titre du sujet et de la cat�gorie (0 = complet)");
define("_SCROLL_IMAGES","Display images next to topics");
define("_GROUP_TOPICS","Show only the last post of every topic");
define("_TITLE_STRING_LENGTH","Maximal character length of topic titles & categories (0 = full length)");

define("_EXCLUDE_FORUMS","Ne pas afficher les messages de forums suivants (CTRL+CLICK annule la s�lection)");
define("_MODULE_NAME", "Nom du module PostNuke (nom du r�pertoire) par d�faut=PNphpBB2");
define("_MODULE_ERROR", "Le nom ou le chemin du module n'est pas valide, ou le module n'est pas install� correctement. Veuillez corriger le probl�me.");
define("_PREFIX_ERROR", "Erreur de prefix du Forum, impossible de toruver la base de donn�es du forum.");
define("_TEMPLATE_ERROR","Configuration invalide du template");
define("_POSTINFO_ERROR","Impossible d'obtenir les messages � partir de la base!");
define("_SCROLL_SPEED", "Scroll Speed");
define("_DISPLAY_DATE", "Display Date");
define("_DISPLAY_TIME", "Display Time");
?>