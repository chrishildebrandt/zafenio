<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [English]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     update               : Sun October 11 2004
 *     copyright            : (C) 2003-2004 the PNphpBB Group
 *     email                : support@pnphpbb.com
 *
 *     $Id: lang_pnphpbb2_admin.php,v 1.14 2004/10/15 20:56:40 carls Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

if ( defined('PNPHPBB_INSTALL') )
{
  // Installation
  $lang['PNphpBB2_Install'] = "Installation de PNphpBB2";
  $lang['PNphpBB2_Installed'] = "PNphpBB2 a bien �t� install� et activ�.";
  $lang['PNphpBB2_Install_Title'] = "Installer les Tables PNphpBB2 vers %s*";
  $lang['PNphpBB2_Install_Complete']  = "<b>L'installation ce base de PNphpBB2 est maintenant termin�e.</b><br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Cliquez sur " . $lang['Finish_Install'] . " pour retourner au module d'administration de PN et activer PNphpBB2.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Vous pouvez acc�der � la page d'administration des forums par la celle d'administration de PN ou par le lien situ� dans la forum.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "V�rifiez les param�tres de Configuration G�n�rale et effectuez les changements n�cessaires SVP. <br /><br /><b>Merci pour avoir choisi PNphpBB2.</b>";
  $lang['Populate_DB_phpBB'] = "Installation des Tables avec les donn�es par d�faut";
  $lang['Populate_DB_PNphpBB'] = "Installation des Tables avec les donn�es sp�cifiques � PNphpbb2";
  $lang['Populate_DB_Admin'] = "Ins�rer les Donn�es sp�cifiques � l'admin dans les Tables";
  $lang['AutoTheme_Support'] = "Vous utilisez un Th�me g�n�r� par AutoTheme sur ce compte ou ce site.<br>Il semble qu'installer PNphpBB2 avec AutoTheme actif puisse causer quelques soucis.</br> Pendant l'installation, basculer votre compte ou site sur un th�me NON GENERE par AutoTheme Theme, effcetuez votre Installation/Mise � jour/Convertion/Suppression et, seulement ensuite, vous pourrez remettre votre th�mz pr�c�dent en service.<br><br>Merci<br>The PNphpBB Group"; 

  // Eciture des permissions pour les styles et les cellules
  $lang['Write_Perm_Desc'] = "V�rification de la localisation du module et des permissions pour le r�pertoire";
  $lang['Write_Perm_1'] = "Le module est bien situ�";
  $lang['Write_Perm_2'] = "Le module DOIT �tre situ� dans modules/PNphpBB2.";
  $lang['Write_Perm_3'] = "./modules/PNphpBB2/templates/PNTheme/styles EST inscriptible.";
  $lang['Write_Perm_4'] = "./modules/PNphpBB2/templates/PNTheme/styles N'EST PAS inscriptible";
  $lang['Write_Perm_5'] = "./modules/PNphpBB2/templates/PNTheme/cellpics EST inscriptible.";
  $lang['Write_Perm_6'] = "./modules/PNphpBB2/templates/PNTheme/cellpics N'EST PAS inscriptible.";
  $lang['Check_Continue'] = "Continuer";
  $lang['Re_Check'] = "Re-V�rifier";  
  $lang['Write_Perm_Correct'] = "Les r�pertoires ci-dessous doivent pouvoir �tre modifi�s par PNphpBB.";
  $lang['Location_Correct'] = "PNphpBB2 doit �tre situ� dans le r�pertoire PNphpBB2 dans les modules.";
  $lang['Current_Location'] = "Vous l'avez localis� dans: ";
  $lang['Write_Perm_Good'] = "Tout parait parfait! Cliquez sur <u>Continuer</u>.";
  $lang['Please_Correct'] = "Corrigez le(s) probl�me(s) SVP et <u>Re-V�rifiez</u>.";

  // Mise � jour
  $lang['PNphpBB2_Upgrade'] = "Mise � jour de PNphpBB2";
  $lang['PNphpBB2_Move_Tables_No'] = "Les Tables existent d�j� dans %s*.<br /><br />Les tables %s* ne peuvent pas �tre d�plac�es.";
  $lang['PNphpBB2_Move_Tables_Yes'] = "D�placer les tables vers un nouvel emplacement";
  $lang['PNphpBB2_Delete_Users'] = "Supprimer des utilisateurs de PostNuke (Sauf l'Admin!)";
  $lang['PNphpBB2_Delete_Groups'] = "Supprimer des ID d'utilisateurd de la table d'adh�sion � un groupe";
  $lang['PNphpBB2_Populate_Users'] = "Alimenter les tables d'utilisateurs et de groupes de PostNuke avec les utilisateurs de phpBB";
  $lang['PNphpBB2_Database_Type'] = "Type de Base de Donn�es";
  $lang['PNphpBB2_Update_phpBB'] = "Mise � jour de phpBB version %s vers la version %s";
  $lang['PNphpBB2_Update_PNphpBB'] = "Mise � jour PNphpBB version %s vers la version %s";
  $lang['PNphpBB2_Update_Attach'] = "Mise � jour d'Attachment Mod version %s vers la version %s";
  $lang['PNphpBB2_Install_PNphpBB'] = "Ex�cuter les changements sp�cifiques � la base de donn�es de PNphpBB %s";
  $lang['PNphpBB2_Optimize_Analyze'] = 'Optimiser les tables';
  $lang['PNphpBB2_Update_Schemas'] = "Optiomiser la base de donn�es schema";
  $lang['PNphpBB2_No_Updates'] =  "Pas de mise � jour n�cessaire";
  $lang['PNphpBB2_Update_Data'] = "Mise � jour des donn�es";
  $lang['PNphpBB2_Attach'] = "Version d'Attachment Mod ";
  $lang['PNphpBB2_Updating_Paths'] = "Mise � jour de la table de configuration";
  $lang['PNphpBB2_Delete_Themes'] = "Supprimer les enregistrements li�s aux anciens th�mes et styles";
  $lang['PNphpBB2_Install_Themes'] = "Installer un nouveau th�me (PNTheme)";
  $lang['PNphpBB2_Board_Theme'] = "Th�me par d�faut du panneau des pr�f�rences pour PNTheme";
  $lang['PNphpBB2_User_Theme'] = "D�finition du th�me pour tous les utilisateurs par PNTheme";
  $lang['PNphpBB2_Clear_Sessions'] = "Effacement de TOUTES les sessions de la table des sessions";
  $lang['PNphpBB2_Cant_SQL'] = "IMPOSSIBLE DE CHANGER LA TABLE MSSQL-TABLE. FAITES LES OPERATIONS SUIVANTES MANUELLEMENT SVP:<br />DANS PHPBB_QUOTA_LIMITS, CHANGEZ QUOTA_LIMIT POUR CEUX QUE VOUS SOUHAITEZ.</p>";
  $lang['PNphpBB2_Update_Complete'] = "La Mise � jour de PNphpBB2 est maintenant compl�te.";
  $lang['PNphpBB2_Update_Complete'] .= "Si vous rencontrez des erreurs pendant le processus, imprimez cette page SVP et rendez vous sur les forums de www.pnphpbb.com pour le support technique.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "Soyez certain d'avoir activ� ce module avant de continuer, puis ajustez les param�tres dans la page d'administration.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "Si attachment mod a �t� install� pendant le processus, soyez certain de l'avoir activ� si vous souhaitez qu'il soit utilisable sur les forums.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "<b>Merci d'avoir choisi PNphpBB!</b>";
  $lang['PNphpBB2_phpBB_Tables_Found'] = "Des Tables phpBB_* ont �t� trouv�es dans votre base de donn�es PostNuke. Il est TRES important";
  $lang['PNphpBB2_phpBB_Tables_Found'] .= " que vous compreniez ce que le script est sur le point de faire.";
  $lang['PNphpBB2_three_options'] = "Vous avez (4) options pour ce point.";
  $lang['PNphpBB2_option_one'] = "1) Mise � jour depuis une version pr�c�dente de PNphpBB2 ou depuis phpBB2pnmod";
  $lang['PNphpBB2_option_two'] = "2) Convertir une version stand-alone de phpBB (Version 2.0.x) vers PNphpBB2";
  $lang['PNphpBB2_option_three'] = "3) R�aliser une NOUVELLE installation de PNphpBB2";
  $lang['PNphpBB2_option_four'] = "4) Annuler l'installation";
  $lang['PNphpBB2_Upgrade_Disclaimer'] = "ATTENTION! Comprenez bien cet <font color=\"red\"><b>AVERTISSEMENT:</b></font><br /><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>Choisir l'option 2 (deux)</b> va effacer TOUS les utilisateurs de votre base de donn�es PostNuke et les remplacera par les informations de vos tables phpBB2.</br><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>Choisir l'option 3 (trois)</b> va r�aliser une NOUVELLE installation de PNphpBB2 et supprimera les tables phpBB_* trouv�es dans vos bases de donn�es PostNuke.</br></br>";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "Une fois que ce sera fait, il n'y aura plus AUCUNE SOLUTION pour revenir en arri�re directement, alors soyez bien s�r d'avoir un backup r�cent de vos bases de donn�es PostNuke et phpBB2.";
  $lang['PNphpBB2_bad_version']  = "Version inadapt�e.<br /><br />La convertion depuis une version Stand-alone n'est possible qu'� partir des versions 2.0.1 ou sup�rieures.<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "Il est aussi possible que vous ayez cette erreur si vous essayez de convertir un forum phpBB 2.1.x(2.2).<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "Informations de version trouv�es: ";
  $lang['PNphpBB2_no_version'] = "Impossible de trouver les informations sur la version.";
  $lang['PNphpBB2_Updating_links'] = "Mise � jour les liens de messages";

  // Suppression
  $lang['PNphpBB2_Remove_Prompt'] = "Supprimer PNphpBB2";
  $lang['PNphpBB2_Removed'] = "PNphpBB2 a bien �t� supprim�.";
  $lang['PNphpBB2_Remove_Text'] = "Vous �tes sur le point de supprimer PNphpBB2 et toutes les tables associ�es de la base de donn�es PostNuke (%s*).<br /><br />Toutes les donn�es seront perdues. Etes-vous s�r de vouloir le faire?";
  $lang['PNphpBB2_Remove_Title'] = "Supprimer les tables PNphpBB2 de %s*";
  $lang['PNphpBB2_Remove_Notes'] = "Les tables PNphpBB2 ont bien �t� supprim�es.";

  // G�n�ral
  $lang['PNphpBB2_Running'] = "En cours";
  $lang['PNphpBB2_Failed'] = "ECHEC";
  $lang['PNphpBB2_ButOK'] = "MAIS OK!";
  $lang['PNphpBB2_Completed'] = "TERMINE";
  $lang['PNphpBB2_Done'] = "Achev�";
  $lang['PNphpBB2_Aborted'] = "Annul�";
  $lang['PNphpBB2_Cancel'] = "Effacement";
  $lang['PNphpBB2_Progress'] = "En Progr�s";
  $lang['PNphpBB2_Some_Failed'] = "Certaines requ�tes ont �chou�. L'�tat et les erreurs sont list�es ci-apr�s:<br />(Certaines actions peuvent �tre n�cessaires pour ajouter, �diter, ou supprimer des tables ou des enregistrements)<br />";
  $lang['PNphpBB2_No_Errors'] = "Pas d'erreur";
  $lang['PNphpBB2_Results'] = "R�sultats";
  $lang['PNphpBB2_Installing'] = "Installation";
  $lang['PNphpBB2_Updating'] = "Mise � jour";
  $lang['PNphpBB2_Important'] = "*** IMPORTANT ***";
}

// Liens d'administration Additionnels
$lang['Users_aguide'] = "Guide des Utilisateurs";
$lang['Forum_Manual'] = "Manuel des Utilisateurs";


// Configuration des Options de PNphpBB2
$lang['pnphpbb2_settings'] = "Configuration de PNphpBB2";
$lang['pnphpbb2_settings_explain'] = "Ici vous pouvez configurer les options et les r�glages sp�cifiques au module PNphpBB2.";

$lang['pnphpbb2_options'] = "Options et Mods de PNphpBB2";

$lang['pnphpbb2_quickreply'] = "Utiliser les r�ponses rapides";
$lang['pnphpbb2_quickreply_explain'] = "Activer ou d�sactiver les fonctions de r�ponse rapide.";

$lang['pnphpbb2_logo_on'] = "Afficher le Logo PNphpBB2 sur le forum";
$lang['pnphpbb2_logo_on_explain'] = "Activer le PNphpBB2 dans le forum. (Si vous ne souhaitez pas afficher le logo PNphpBB2, Conserver les informations de cr�dit au bas des forums SVP)";

$lang['pnphpbb2_shorturls'] = "URL courts dans les messages";
$lang['pnphpbb2_shorturls_explain'] = "Activer ou d�sactiver la fonction URL courts dans les messages.";

$lang['pnphpbb2_post_order'] = "Ordre de tri des messages sur le forum";
$lang['pnphpbb2_post_order_explain'] = "Ordre d'affichage des message par d�faut dans le forum.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(Vous pouvez ignorer cela dans la section de gestion du forum)";

$lang['pnphpbb2_post_confirm'] = "D�sactiver la confirmation des messages";
$lang['pnphpbb2_post_confirm_explain'] = "Cela d�sactivera l'�cran de confirmation d'envoi pour TOUS les messages. La d�sactivation de cette fonction aura pour r�sultat de voir l'exp�diteur d'un message revenir directement au sujet ou au message qu'il aura cr��.";

$lang['pnphpbb2_allow_full_page'] = "Autoriser les Utilisateurs � minimiser/maximiser la visualisation du forum en pleine page";
$lang['pnphpbb2_allow_full_page_explain'] = "Cela permet aux utilisateurs de minimiser ou maximiser l'affichage des pages du forum sans les menus gauche et droite, en plein �cran.";

$lang['pnphpbb2_full_page'] = "Affichage du forum en plein �cran par d�faut (affichage maximis�)";
$lang['pnphpbb2_full_page_explain'] = "Permet � l'administrateur d'afficher le forum ou en plein �cran ou int�gr� dans le th�me PostNuke.";

$lang['pnphpbb2_pn_pm'] = "Utiliser le syst�me de messages priv�s de PostNuke";
$lang['pnphpbb2_pn_pm_explain'] = "Cela basculera TOUS les messages priv�s vers le syst�me de PostNuke en lieu et place de celui du forum.";

$lang['pnphpbb2_pn_link'] = "Lien pour ramener les Utilisateurs vers votre site PostNuke";
$lang['pnphpbb2_pn_link_explain'] = "Cela doit �tre un lien HTML valide. Il permettra � vos utilisateurs de retourner � votre site dans le syst�me style et th�me de PostNuke.";

$lang['pnphpbb2_pn_text'] = "Texte � afficher pour le lien ci-dessous";
$lang['pnphpbb2_pn_text_explain'] = "Cela affichera le texte dans le lien ci-dessous. Cel� peut �tre n'importe quel textes ou code HTML, voire un lien vers une image.";

$lang['pnphpbb2_members_online'] = "D�sactiver le bloc Who's Online dans l'index du forum";
$lang['pnphpbb2_members_online_explain'] = "Cela permet � l'administrateur de d�sactiver le bloc Who's Online dans l'index du forum.";

$lang['pnphpbb2_members_online_annon'] = "Cacher le bloc Who's Online aux visiteurs anonymes";
$lang['pnphpbb2_members_online_annon_explain'] = "Si le bloc n'est pas d�sactiv�, cocher cette option emp�chera les visiteurs anonymes de voir le bloc Who's Online.";

$lang['pnphpbb2_template_compiler'] = "Utiliser le NOUVEAU compilateur de templates";
$lang['pnphpbb2_template_compiler_explain'] = "Utiliser le mod eXtreme Styles cr�� par Vjacheslav Trushkin <slava@trushkin.net> </br>Ce mod est la version tr�s optimis�e du syst�me de templates phpBB et a quelques particularit�s compl�mentaires. Il compile et ex�cute les fichiers beaucoup plus rapidement, utilise le syst�me de cache qui acc�l�re beaucoup les templates, permet d'employer le php dans des templates et offres quelques autres fonctionnalit�s aux designers de style. C'est une version d'essai qui peut ne pas �tre reconnue par certains mods.";

$lang['pnphpbb2_updated'] = "Mise � jour le la configuration de PNphpBB2";
$lang['pnphpbb2_click_return_config'] = "Cliquez %sici%s pour retourner � la configuration de PNphpBB2";

$lang['pnphpbb2_allow_sub_change'] = "Permettez aux utilisateurs de basculer entre les modes cat�gorie et/sous-forums";
$lang['pnphpbb2_allow_sub_change_explain'] = "Cela vous permet de proposer � vos utilisateurs d'avoir la possibilit� de basculer entre les modes d'affichage sous-cat�gories et sous-forums. Si vous ne souhaitez pas utiliser le mode sous-cat�gories / sous-forums, il vous suffit de n'ajoiuter ni sous-cat�gorie, ni sous-forum � votre site.";

$lang['pnphpbb2_index_announce'] = "Afficher les annonces sur l'index du forum";
$lang['pnphpbb2_index_announce_explain'] = "Cela vous permet d'Afficher les annonces sur la page d'index du forum.";

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = 'Attention: le cache n\'est pas inscriptible.';
$lang['xs_warning_explain'] = 'Cochez cette case si vous avez cr�� un r�pertoire pour le cache, et changez le mode d\'acc�s (chmod 777) pour que le script puisse inscrire le cache. Si votre serveur travaille en safe mode vous devez penser � mettre un "." comme s�parateur entre les noms de fichiers pour pouvoir �crire tout le cache dans le m�me r�pertoire (Voir les r�glages de s�parateur ci-dessous).<br /><br />Si le cache ne fonctionne pas sur votre serveur, quelle qu\'en soit la raison, ne vous inqui�tez pas - le mod eXtreme Styles acc�l�re beaucoup l\'affichage de vos th�mes m�me sans cache.';

$lang['xs_updated'] = 'Configuration mise � jour.';
$lang['xs_updated_explain'] = 'Vous devez rafra�chir cette page pour que la nouvelle configuration prenne effet. <a href="%s">Cliquez ici</a> pour rafra�chir la page.';

// Barre de navigation ACP
$lang['Extreme_Styles'] = 'eXtreme Styles';
if(empty($lang['Updates']))
{
	$lang['Updates'] = 'Met � jour';
}
if(empty($lang['Styles']))
{
	$lang['Styles'] = 'les Styles';
}

// Headers
$lang['xs_settings'] = 'Pr�f�rences pour eXtreme Styles mod v%s';
$lang['xs_settings_cache'] = 'Configuration du Cache';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Utiliser le cache';
$lang['xs_cache_explain'] = 'Le cache est enregistr� sur votre disque et acc�l�rera beacoup vos templates parce qu\'ils n\'auront plus besoin d\'�tre compil�s � chaque affichage.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'R�pertoire du Cache';
$lang['xs_cache_dir_explain'] = 'Tout le cache sera �crit dans ce r�pertoire (et/ou sous-r�pertoire). Les fichiers avec le m�me nom seront r��crits par dessus leur pr�d�cesseur. Ne mettez pas de "/" avant le nom du r�pertoire sauf s\'il s\'agit d\'une adresse absolue. Une adresse absolue est une adresse sur le serveur. (Ne vous trompez pas dans l\'URL). Les chemins relatifs commencent par le r�pertoire phpBB.';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Chemin absolu';
$lang['xs_dir_absolute_explain'] = '(exemple : "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Chemin relatif';
$lang['xs_dir_relative_explain'] = 'relatif au chemin du forum phpBB (comme pour le "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Enregistrement automatique du cache';
$lang['xs_auto_compile_explain'] = 'Cela compilera automatiquement les templates et les enregistrera dans le r�pertoire cache.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Recompiler automatiquement le cache';
$lang['xs_auto_recompile_explain'] = 'Cela recompilera automatiquement le cache si les fichiers du template d\'origine a �t� chang�.';
// xs_separator
$lang['xs_separator'] = 'S�parateur des noms de fichiers';
$lang['xs_separator_explain'] = 'Si vous choisissez "/" le cache sera enregistr� dans des sous-r�pertoires par noms de templates (par exemple le fichier "subSilver/admin/page_header.php" serait enregistr� dans "subSilver/admin/page_header.php"). Si vous choisissez un point "." le cache sera enregistr� dans un r�pertoire (par exemple le fichier "subSilver/admin/page_header.php" sera enregistr� dans le r�pertoire de cache "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'Extension des noms de fichiers pour le cache';
$lang['xs_php_explain'] = 'Ce sont les extensions des fichiers mis en cache. Les fichiers �tant stock� en php, leur extension par d�faut est "php". Donc n\'incluez pas de point SVP';
// xs_def_template
$lang['xs_def_template'] = 'R�pertoire par d�faut des templates';
$lang['xs_def_template_explain'] = 'Si le fichier des templates n\'est pas trouv� dans le r�pertoire actuel des templates,  (par exemple si votre r�pertoire actuel est "myTemplate" alors que le script a besoin du fichier "myTemplate/myfile.tpl" et que ce fichier n\est pas le r�pertoire des templates, le syst�me va chercher un r�pertoire comme "subSilver/myfile.tpl"). Cochez pour vider et d�sactiver cette fonction.';
// xs_check_switches
$lang['xs_check_switches'] = 'V�rifiez les bascules en compilant';
$lang['xs_check_switches_explain'] = 'Cette fonction v�rifie les erreurs dans les templates. La d�sactiver acc�l�rera la compilation, mais le compileur risque de ne pas voir certaines erreurs dans les templates s\'ils en comportent.<br /><br />Un contr�le intelligent v�rifiera les erreurs de templates et arrangera automatiquement celles qui sont connues (Il y a quelques erreurs d�j� connues dans diff�rents mods). Cela ralentit peu par rapport � une simple v�rification.<br /><br />Mais il arrive parfois que les templates ne semblent fonctionner correctement que lorsque la v�rification des erreurs est d�sactiv�e. Cela arrive en cas de mauvais codage HTML - Contactez l\'auteur du code si vous ne trouvez pas les erreurs � corriger.<br /><br />Si la fonction cache est d�sactiv�e pour une compilation plus rapide, il serait mieux de d�sactiver les v�rifications.';
$lang['xs_check_switches_0'] = 'Off';
$lang['xs_check_switches_1'] = 'Contr�le Intelligent';
$lang['xs_check_switches_2'] = 'Contr�le Simple';
// xs_use_isset
$lang['xs_use_isset'] = 'V�rifier les variables avec isset() dans le code compil�';

// Infos de d�buggage
$lang['xs_debug_header'] = 'Infos de d�buggage';
$lang['xs_debug_explain'] = 'Ce sont les Infos de d�buggage. Elles sont utilis�es pour trouver et fixer les probl�mes pendant la configuration du cache.';
$lang['xs_debug_vars'] = 'Variables des Templates';
$lang['xs_debug_tpl_name'] = 'Nom de fichier pour les Templates:';
$lang['xs_debug_cache_filename'] = 'Nom de fichier pour le Cache:';
$lang['xs_debug_data'] = 'Donn�es de d�buggage:';

$lang['xs_check_hdr'] = 'V�rifier le cache pour %s';
$lang['xs_check_filename'] = 'Erreur: Nom de fichier invalide';
$lang['xs_check_openfile1'] = 'Erreur: Impossible d\'ouvrir le fichier "%s". Le programme va tenter de cr�er les r�pertoires...';
$lang['xs_check_openfile2'] = 'Erreur: Impossible d\'ouvrir le fichier "%s" pour la seconde fois. Refus...';
$lang['xs_check_nodir'] = 'V�rification de "%s" - Aucun r�pertoire.';
$lang['xs_check_nodir2'] = 'Erreur: Impossible de cr�er le r�pertoire "%s" - Vous devriez v�rifier vos permissions.';
$lang['xs_check_createddir'] = 'R�pertoire "%s" cr��';
$lang['xs_check_dir'] = 'V�rification de l\'existence du r�pertoire "%s".';
$lang['xs_check_ok'] = 'Ouverture du fichier "%s" pour �criture. Tout semble �tre ok.';

// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = 'Template';
$lang['xs_styles_style'] = 'Style';
$lang['xs_styles_user'] = 'Utilisateurs';
$lang['xs_styles_options'] = 'Options';
$lang['xs_styles_set_default'] = 'r�glages par d�faut';
$lang['xs_styles_no_override'] = 'Ne pas ignorer les choix des Utilisateurs';
$lang['xs_styles_do_override'] = 'Ignorer les choix des Utilisateurs';
$lang['xs_styles_switch_all'] = 'basculer tous les utilisateurs vers ce style';
$lang['xs_styles_switch_all2'] = 'basculer tous les utilisateurs vers:';
$lang['xs_styles_defstyle'] = 'style par d�faut';
$lang['xs_styles_available'] = 'Styles disponibles';

// Categories Hierarchies Mod
$lang['Category_attachment'] = "Li� � la Cat�gorie";
$lang['Use_sub_forum'] = "Afficher les sous-cat�gories comme des forums";
$lang['Use_sub_forum_explain'] = "Permet � l'administrateur d'afficher les sous-forums par d�faut ou les sous-cat�gories (vBulletin-like).";
$lang['Category_desc'] = "Description";
$lang['Hierarchy_setting'] = "R�glages de la Hi�rarchie des Cat�gories";
$lang['Category_config_error_fixed'] = "Une erreur a �t� r�par�e dans le setup de la cat�gorie";

// S�paration des Annonces et des Stickys
$lang['announce_settings'] = "R�glages des Annonces";
$lang['enable_announce'] = "Afficher les Annonces dans l'Index du Forum";
$lang['enable_announce_explain'] = "Cela activera ou d�sactivera les Annonces sur la page d'index du forum.";

$lang['announcement_duration'] = "Dur�e de publication d'une Announce dans l'index";
$lang['announcement_duration_explain'] = "Nombre de <strong>jours</strong> pendant lesquels une Annonce est affich�e sur la page d'index.";
$lang['announcement_duration_explain'] .= "<br/>(Entrer <b>0 (Zero)</b> affichera les Annonces ind�finiment)";

$lang['split_global_announce'] = "S�paration des Annonces G�n�rales";
$lang['split_announce'] = "S�parer les Annonces des forums";
$lang['split_sticky'] = "S�parer les Stickies des forums";

// Options des sujets et des messages
$lang['topic_sort_order'] = "Ordre de tri des Sujets";
$lang['post_sort_order'] = "Ordre de tri des Messages";
$lang['First_Post'] = "Premier Message";
$lang['sorted_default'] = "Forum par d�faut";

// Remplacement de l'image du rang de l'administrateur
$lang['Rank_image'] = 'Image de Rang';
$lang['Rank_image_explain'] = 'Utiliser cette fonction pour d�finir une petite image associ�e au rang.';
$lang['Rank_image_explain'] .= '<br/>C\'est le chemin au root de PNphpBB2 si vous indiquez un chemin relatif vers l\'emplacement des images.<br/>(A NOTER: Si l\'Image est pr�cis�e (image.gif), une tentative sera faite pour utiliser l\'image bas�e sur le nom dans les r�pertoires PostNuke theme et langage.)'; 
$lang['Admin_intro'] = 'Merci d\'avoir choisi PNphpBB pour vos forums. Cet �cran va vous donner un apper�u rapide des diff�rentes statistiques de vos forums. Vous pouvez revenir en arri�re en cliquant sur le lien <u>Admin Index</u> dans le panneau de gauche. Pour retourner � l\'index de votre forum, cliquez sur le logo PNphpBB, �galement dans le panneau de gauche. Les autres liens, sur le cot� droit de cet �cran, vous permettront de contr�ler tous les aspects de vos forums. Chaque �cran comporte des instructions sur la mani�re d\'utiliser les diff�rents outils.';

$lang['PNphpBB_Version'] = 'Version de PNphpBB2';
$lang['phpBB_Version'] = 'Version de phpBB';

// limited post edit time MOD 
$lang['edit_time'] = 'D�lai pour �diter un message'; 
$lang['edit_time_explain'] = 'C\'est le d�lai (en minutes) pendant lesquel l\'utilisateur est autoris� � �diter son message. Si cette valeur est laiss�e � 0, il n\'y a aucun d�lai.'; 

// Activer/D�sactiver la mise en concordance du th�me
$lang['theme_matching'] = "Activer la mise en concordance du th�me";
$lang['theme_matching_explain'] = "Activer ou D�sactiver la fonction de mise en concordance du th�me. La Mise en Concordance du Th�me matching tentera de cr�er une feuille de style et un jeu d'images pour les cellules en concordance avec le th�me actuel si ce jeu n'est pas d�j� disponible. <br><b>A Noter:</b> Avec la mise en Concordance des th�mes d�sactiv�e, le forum utilisera default.css et les images de cellules trouv�es dans le root du r�pertoire cellpics.";

// Exclure un forum des Annonces G�n�rales
$lang['Exclude_global_announce'] = 'Exclure ce forum des Annonces G�n�rales';
$lang['Exclude_global_announce_explain'] = 'Si cette option est s�lectionn�e ce forum sera exclu de la liste des forums permettant l\'affichage des annonces g�n�rales dans leur Index.';

// Support forum
$lang['Support_forum'] = 'This is a support forum';
$lang['Support_forum_explain'] = 'If this forum will be sued as a support forum, you can choose this option to display a list of user defined status flags on the topic level to indicate the status of the service request. This item can be updated by the administrator or moderator of the forum.';

//
// That's all Folks!
// -------------------------------------------------

?>