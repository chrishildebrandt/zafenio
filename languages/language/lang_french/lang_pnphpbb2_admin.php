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
  $lang['PNphpBB2_Installed'] = "PNphpBB2 a bien été installé et activé.";
  $lang['PNphpBB2_Install_Title'] = "Installer les Tables PNphpBB2 vers %s*";
  $lang['PNphpBB2_Install_Complete']  = "<b>L'installation ce base de PNphpBB2 est maintenant terminée.</b><br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Cliquez sur " . $lang['Finish_Install'] . " pour retourner au module d'administration de PN et activer PNphpBB2.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Vous pouvez accéder à la page d'administration des forums par la celle d'administration de PN ou par le lien situé dans la forum.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "Vérifiez les paramètres de Configuration Générale et effectuez les changements nécessaires SVP. <br /><br /><b>Merci pour avoir choisi PNphpBB2.</b>";
  $lang['Populate_DB_phpBB'] = "Installation des Tables avec les données par défaut";
  $lang['Populate_DB_PNphpBB'] = "Installation des Tables avec les données spécifiques à PNphpbb2";
  $lang['Populate_DB_Admin'] = "Insérer les Données spécifiques à l'admin dans les Tables";
  $lang['AutoTheme_Support'] = "Vous utilisez un Thème généré par AutoTheme sur ce compte ou ce site.<br>Il semble qu'installer PNphpBB2 avec AutoTheme actif puisse causer quelques soucis.</br> Pendant l'installation, basculer votre compte ou site sur un thème NON GENERE par AutoTheme Theme, effcetuez votre Installation/Mise à jour/Convertion/Suppression et, seulement ensuite, vous pourrez remettre votre thèmz précédent en service.<br><br>Merci<br>The PNphpBB Group"; 

  // Eciture des permissions pour les styles et les cellules
  $lang['Write_Perm_Desc'] = "Vérification de la localisation du module et des permissions pour le répertoire";
  $lang['Write_Perm_1'] = "Le module est bien situé";
  $lang['Write_Perm_2'] = "Le module DOIT être situé dans modules/PNphpBB2.";
  $lang['Write_Perm_3'] = "./modules/PNphpBB2/templates/PNTheme/styles EST inscriptible.";
  $lang['Write_Perm_4'] = "./modules/PNphpBB2/templates/PNTheme/styles N'EST PAS inscriptible";
  $lang['Write_Perm_5'] = "./modules/PNphpBB2/templates/PNTheme/cellpics EST inscriptible.";
  $lang['Write_Perm_6'] = "./modules/PNphpBB2/templates/PNTheme/cellpics N'EST PAS inscriptible.";
  $lang['Check_Continue'] = "Continuer";
  $lang['Re_Check'] = "Re-Vérifier";  
  $lang['Write_Perm_Correct'] = "Les répertoires ci-dessous doivent pouvoir être modifiés par PNphpBB.";
  $lang['Location_Correct'] = "PNphpBB2 doit être situé dans le répertoire PNphpBB2 dans les modules.";
  $lang['Current_Location'] = "Vous l'avez localisé dans: ";
  $lang['Write_Perm_Good'] = "Tout parait parfait! Cliquez sur <u>Continuer</u>.";
  $lang['Please_Correct'] = "Corrigez le(s) problème(s) SVP et <u>Re-Vérifiez</u>.";

  // Mise à jour
  $lang['PNphpBB2_Upgrade'] = "Mise à jour de PNphpBB2";
  $lang['PNphpBB2_Move_Tables_No'] = "Les Tables existent déjà dans %s*.<br /><br />Les tables %s* ne peuvent pas être déplacées.";
  $lang['PNphpBB2_Move_Tables_Yes'] = "Déplacer les tables vers un nouvel emplacement";
  $lang['PNphpBB2_Delete_Users'] = "Supprimer des utilisateurs de PostNuke (Sauf l'Admin!)";
  $lang['PNphpBB2_Delete_Groups'] = "Supprimer des ID d'utilisateurd de la table d'adhésion à un groupe";
  $lang['PNphpBB2_Populate_Users'] = "Alimenter les tables d'utilisateurs et de groupes de PostNuke avec les utilisateurs de phpBB";
  $lang['PNphpBB2_Database_Type'] = "Type de Base de Données";
  $lang['PNphpBB2_Update_phpBB'] = "Mise à jour de phpBB version %s vers la version %s";
  $lang['PNphpBB2_Update_PNphpBB'] = "Mise à jour PNphpBB version %s vers la version %s";
  $lang['PNphpBB2_Update_Attach'] = "Mise à jour d'Attachment Mod version %s vers la version %s";
  $lang['PNphpBB2_Install_PNphpBB'] = "Exécuter les changements spécifiques à la base de données de PNphpBB %s";
  $lang['PNphpBB2_Optimize_Analyze'] = 'Optimiser les tables';
  $lang['PNphpBB2_Update_Schemas'] = "Optiomiser la base de données schema";
  $lang['PNphpBB2_No_Updates'] =  "Pas de mise à jour nécessaire";
  $lang['PNphpBB2_Update_Data'] = "Mise à jour des données";
  $lang['PNphpBB2_Attach'] = "Version d'Attachment Mod ";
  $lang['PNphpBB2_Updating_Paths'] = "Mise à jour de la table de configuration";
  $lang['PNphpBB2_Delete_Themes'] = "Supprimer les enregistrements liés aux anciens thèmes et styles";
  $lang['PNphpBB2_Install_Themes'] = "Installer un nouveau thème (PNTheme)";
  $lang['PNphpBB2_Board_Theme'] = "Thème par défaut du panneau des préférences pour PNTheme";
  $lang['PNphpBB2_User_Theme'] = "Définition du thème pour tous les utilisateurs par PNTheme";
  $lang['PNphpBB2_Clear_Sessions'] = "Effacement de TOUTES les sessions de la table des sessions";
  $lang['PNphpBB2_Cant_SQL'] = "IMPOSSIBLE DE CHANGER LA TABLE MSSQL-TABLE. FAITES LES OPERATIONS SUIVANTES MANUELLEMENT SVP:<br />DANS PHPBB_QUOTA_LIMITS, CHANGEZ QUOTA_LIMIT POUR CEUX QUE VOUS SOUHAITEZ.</p>";
  $lang['PNphpBB2_Update_Complete'] = "La Mise à jour de PNphpBB2 est maintenant complète.";
  $lang['PNphpBB2_Update_Complete'] .= "Si vous rencontrez des erreurs pendant le processus, imprimez cette page SVP et rendez vous sur les forums de www.pnphpbb.com pour le support technique.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "Soyez certain d'avoir activé ce module avant de continuer, puis ajustez les paramètres dans la page d'administration.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "Si attachment mod a été installé pendant le processus, soyez certain de l'avoir activé si vous souhaitez qu'il soit utilisable sur les forums.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "<b>Merci d'avoir choisi PNphpBB!</b>";
  $lang['PNphpBB2_phpBB_Tables_Found'] = "Des Tables phpBB_* ont été trouvées dans votre base de données PostNuke. Il est TRES important";
  $lang['PNphpBB2_phpBB_Tables_Found'] .= " que vous compreniez ce que le script est sur le point de faire.";
  $lang['PNphpBB2_three_options'] = "Vous avez (4) options pour ce point.";
  $lang['PNphpBB2_option_one'] = "1) Mise à jour depuis une version précédente de PNphpBB2 ou depuis phpBB2pnmod";
  $lang['PNphpBB2_option_two'] = "2) Convertir une version stand-alone de phpBB (Version 2.0.x) vers PNphpBB2";
  $lang['PNphpBB2_option_three'] = "3) Réaliser une NOUVELLE installation de PNphpBB2";
  $lang['PNphpBB2_option_four'] = "4) Annuler l'installation";
  $lang['PNphpBB2_Upgrade_Disclaimer'] = "ATTENTION! Comprenez bien cet <font color=\"red\"><b>AVERTISSEMENT:</b></font><br /><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>Choisir l'option 2 (deux)</b> va effacer TOUS les utilisateurs de votre base de données PostNuke et les remplacera par les informations de vos tables phpBB2.</br><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>Choisir l'option 3 (trois)</b> va réaliser une NOUVELLE installation de PNphpBB2 et supprimera les tables phpBB_* trouvées dans vos bases de données PostNuke.</br></br>";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "Une fois que ce sera fait, il n'y aura plus AUCUNE SOLUTION pour revenir en arrière directement, alors soyez bien sûr d'avoir un backup récent de vos bases de données PostNuke et phpBB2.";
  $lang['PNphpBB2_bad_version']  = "Version inadaptée.<br /><br />La convertion depuis une version Stand-alone n'est possible qu'à partir des versions 2.0.1 ou supérieures.<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "Il est aussi possible que vous ayez cette erreur si vous essayez de convertir un forum phpBB 2.1.x(2.2).<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "Informations de version trouvées: ";
  $lang['PNphpBB2_no_version'] = "Impossible de trouver les informations sur la version.";
  $lang['PNphpBB2_Updating_links'] = "Mise à jour les liens de messages";

  // Suppression
  $lang['PNphpBB2_Remove_Prompt'] = "Supprimer PNphpBB2";
  $lang['PNphpBB2_Removed'] = "PNphpBB2 a bien été supprimé.";
  $lang['PNphpBB2_Remove_Text'] = "Vous êtes sur le point de supprimer PNphpBB2 et toutes les tables associées de la base de données PostNuke (%s*).<br /><br />Toutes les données seront perdues. Etes-vous sûr de vouloir le faire?";
  $lang['PNphpBB2_Remove_Title'] = "Supprimer les tables PNphpBB2 de %s*";
  $lang['PNphpBB2_Remove_Notes'] = "Les tables PNphpBB2 ont bien été supprimées.";

  // Général
  $lang['PNphpBB2_Running'] = "En cours";
  $lang['PNphpBB2_Failed'] = "ECHEC";
  $lang['PNphpBB2_ButOK'] = "MAIS OK!";
  $lang['PNphpBB2_Completed'] = "TERMINE";
  $lang['PNphpBB2_Done'] = "Achevé";
  $lang['PNphpBB2_Aborted'] = "Annulé";
  $lang['PNphpBB2_Cancel'] = "Effacement";
  $lang['PNphpBB2_Progress'] = "En Progrès";
  $lang['PNphpBB2_Some_Failed'] = "Certaines requètes ont échoué. L'état et les erreurs sont listées ci-après:<br />(Certaines actions peuvent être nécessaires pour ajouter, éditer, ou supprimer des tables ou des enregistrements)<br />";
  $lang['PNphpBB2_No_Errors'] = "Pas d'erreur";
  $lang['PNphpBB2_Results'] = "Résultats";
  $lang['PNphpBB2_Installing'] = "Installation";
  $lang['PNphpBB2_Updating'] = "Mise à jour";
  $lang['PNphpBB2_Important'] = "*** IMPORTANT ***";
}

// Liens d'administration Additionnels
$lang['Users_aguide'] = "Guide des Utilisateurs";
$lang['Forum_Manual'] = "Manuel des Utilisateurs";


// Configuration des Options de PNphpBB2
$lang['pnphpbb2_settings'] = "Configuration de PNphpBB2";
$lang['pnphpbb2_settings_explain'] = "Ici vous pouvez configurer les options et les réglages spécifiques au module PNphpBB2.";

$lang['pnphpbb2_options'] = "Options et Mods de PNphpBB2";

$lang['pnphpbb2_quickreply'] = "Utiliser les réponses rapides";
$lang['pnphpbb2_quickreply_explain'] = "Activer ou désactiver les fonctions de réponse rapide.";

$lang['pnphpbb2_logo_on'] = "Afficher le Logo PNphpBB2 sur le forum";
$lang['pnphpbb2_logo_on_explain'] = "Activer le PNphpBB2 dans le forum. (Si vous ne souhaitez pas afficher le logo PNphpBB2, Conserver les informations de crédit au bas des forums SVP)";

$lang['pnphpbb2_shorturls'] = "URL courts dans les messages";
$lang['pnphpbb2_shorturls_explain'] = "Activer ou désactiver la fonction URL courts dans les messages.";

$lang['pnphpbb2_post_order'] = "Ordre de tri des messages sur le forum";
$lang['pnphpbb2_post_order_explain'] = "Ordre d'affichage des message par défaut dans le forum.";
$lang['pnphpbb2_post_order_explain'] .= "<br>(Vous pouvez ignorer cela dans la section de gestion du forum)";

$lang['pnphpbb2_post_confirm'] = "Désactiver la confirmation des messages";
$lang['pnphpbb2_post_confirm_explain'] = "Cela désactivera l'écran de confirmation d'envoi pour TOUS les messages. La désactivation de cette fonction aura pour résultat de voir l'expéditeur d'un message revenir directement au sujet ou au message qu'il aura créé.";

$lang['pnphpbb2_allow_full_page'] = "Autoriser les Utilisateurs à minimiser/maximiser la visualisation du forum en pleine page";
$lang['pnphpbb2_allow_full_page_explain'] = "Cela permet aux utilisateurs de minimiser ou maximiser l'affichage des pages du forum sans les menus gauche et droite, en plein écran.";

$lang['pnphpbb2_full_page'] = "Affichage du forum en plein écran par défaut (affichage maximisé)";
$lang['pnphpbb2_full_page_explain'] = "Permet à l'administrateur d'afficher le forum ou en plein écran ou intégré dans le thème PostNuke.";

$lang['pnphpbb2_pn_pm'] = "Utiliser le système de messages privés de PostNuke";
$lang['pnphpbb2_pn_pm_explain'] = "Cela basculera TOUS les messages privés vers le système de PostNuke en lieu et place de celui du forum.";

$lang['pnphpbb2_pn_link'] = "Lien pour ramener les Utilisateurs vers votre site PostNuke";
$lang['pnphpbb2_pn_link_explain'] = "Cela doit être un lien HTML valide. Il permettra à vos utilisateurs de retourner à votre site dans le système style et thème de PostNuke.";

$lang['pnphpbb2_pn_text'] = "Texte à afficher pour le lien ci-dessous";
$lang['pnphpbb2_pn_text_explain'] = "Cela affichera le texte dans le lien ci-dessous. Celà peut être n'importe quel textes ou code HTML, voire un lien vers une image.";

$lang['pnphpbb2_members_online'] = "Désactiver le bloc Who's Online dans l'index du forum";
$lang['pnphpbb2_members_online_explain'] = "Cela permet à l'administrateur de désactiver le bloc Who's Online dans l'index du forum.";

$lang['pnphpbb2_members_online_annon'] = "Cacher le bloc Who's Online aux visiteurs anonymes";
$lang['pnphpbb2_members_online_annon_explain'] = "Si le bloc n'est pas désactivé, cocher cette option empêchera les visiteurs anonymes de voir le bloc Who's Online.";

$lang['pnphpbb2_template_compiler'] = "Utiliser le NOUVEAU compilateur de templates";
$lang['pnphpbb2_template_compiler_explain'] = "Utiliser le mod eXtreme Styles créé par Vjacheslav Trushkin <slava@trushkin.net> </br>Ce mod est la version très optimisée du système de templates phpBB et a quelques particularités complémentaires. Il compile et exécute les fichiers beaucoup plus rapidement, utilise le système de cache qui accélère beaucoup les templates, permet d'employer le php dans des templates et offres quelques autres fonctionnalités aux designers de style. C'est une version d'essai qui peut ne pas être reconnue par certains mods.";

$lang['pnphpbb2_updated'] = "Mise à jour le la configuration de PNphpBB2";
$lang['pnphpbb2_click_return_config'] = "Cliquez %sici%s pour retourner à la configuration de PNphpBB2";

$lang['pnphpbb2_allow_sub_change'] = "Permettez aux utilisateurs de basculer entre les modes catégorie et/sous-forums";
$lang['pnphpbb2_allow_sub_change_explain'] = "Cela vous permet de proposer à vos utilisateurs d'avoir la possibilité de basculer entre les modes d'affichage sous-catégories et sous-forums. Si vous ne souhaitez pas utiliser le mode sous-catégories / sous-forums, il vous suffit de n'ajoiuter ni sous-catégorie, ni sous-forum à votre site.";

$lang['pnphpbb2_index_announce'] = "Afficher les annonces sur l'index du forum";
$lang['pnphpbb2_index_announce_explain'] = "Cela vous permet d'Afficher les annonces sur la page d'index du forum.";

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = 'Attention: le cache n\'est pas inscriptible.';
$lang['xs_warning_explain'] = 'Cochez cette case si vous avez créé un répertoire pour le cache, et changez le mode d\'accès (chmod 777) pour que le script puisse inscrire le cache. Si votre serveur travaille en safe mode vous devez penser à mettre un "." comme séparateur entre les noms de fichiers pour pouvoir écrire tout le cache dans le même répertoire (Voir les réglages de séparateur ci-dessous).<br /><br />Si le cache ne fonctionne pas sur votre serveur, quelle qu\'en soit la raison, ne vous inquiétez pas - le mod eXtreme Styles accélère beaucoup l\'affichage de vos thèmes même sans cache.';

$lang['xs_updated'] = 'Configuration mise à jour.';
$lang['xs_updated_explain'] = 'Vous devez rafraîchir cette page pour que la nouvelle configuration prenne effet. <a href="%s">Cliquez ici</a> pour rafraîchir la page.';

// Barre de navigation ACP
$lang['Extreme_Styles'] = 'eXtreme Styles';
if(empty($lang['Updates']))
{
	$lang['Updates'] = 'Met à jour';
}
if(empty($lang['Styles']))
{
	$lang['Styles'] = 'les Styles';
}

// Headers
$lang['xs_settings'] = 'Préférences pour eXtreme Styles mod v%s';
$lang['xs_settings_cache'] = 'Configuration du Cache';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Utiliser le cache';
$lang['xs_cache_explain'] = 'Le cache est enregistré sur votre disque et accélèrera beacoup vos templates parce qu\'ils n\'auront plus besoin d\'être compilés à chaque affichage.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'Répertoire du Cache';
$lang['xs_cache_dir_explain'] = 'Tout le cache sera écrit dans ce répertoire (et/ou sous-répertoire). Les fichiers avec le même nom seront réécrits par dessus leur prédécesseur. Ne mettez pas de "/" avant le nom du répertoire sauf s\'il s\'agit d\'une adresse absolue. Une adresse absolue est une adresse sur le serveur. (Ne vous trompez pas dans l\'URL). Les chemins relatifs commencent par le répertoire phpBB.';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Chemin absolu';
$lang['xs_dir_absolute_explain'] = '(exemple : "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Chemin relatif';
$lang['xs_dir_relative_explain'] = 'relatif au chemin du forum phpBB (comme pour le "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Enregistrement automatique du cache';
$lang['xs_auto_compile_explain'] = 'Cela compilera automatiquement les templates et les enregistrera dans le répertoire cache.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Recompiler automatiquement le cache';
$lang['xs_auto_recompile_explain'] = 'Cela recompilera automatiquement le cache si les fichiers du template d\'origine a été changé.';
// xs_separator
$lang['xs_separator'] = 'Séparateur des noms de fichiers';
$lang['xs_separator_explain'] = 'Si vous choisissez "/" le cache sera enregistré dans des sous-répertoires par noms de templates (par exemple le fichier "subSilver/admin/page_header.php" serait enregistré dans "subSilver/admin/page_header.php"). Si vous choisissez un point "." le cache sera enregistré dans un répertoire (par exemple le fichier "subSilver/admin/page_header.php" sera enregistré dans le répertoire de cache "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'Extension des noms de fichiers pour le cache';
$lang['xs_php_explain'] = 'Ce sont les extensions des fichiers mis en cache. Les fichiers étant stocké en php, leur extension par défaut est "php". Donc n\'incluez pas de point SVP';
// xs_def_template
$lang['xs_def_template'] = 'Répertoire par défaut des templates';
$lang['xs_def_template_explain'] = 'Si le fichier des templates n\'est pas trouvé dans le répertoire actuel des templates,  (par exemple si votre répertoire actuel est "myTemplate" alors que le script a besoin du fichier "myTemplate/myfile.tpl" et que ce fichier n\est pas le répertoire des templates, le système va chercher un répertoire comme "subSilver/myfile.tpl"). Cochez pour vider et désactiver cette fonction.';
// xs_check_switches
$lang['xs_check_switches'] = 'Vérifiez les bascules en compilant';
$lang['xs_check_switches_explain'] = 'Cette fonction vérifie les erreurs dans les templates. La désactiver accélèrera la compilation, mais le compileur risque de ne pas voir certaines erreurs dans les templates s\'ils en comportent.<br /><br />Un contrôle intelligent vérifiera les erreurs de templates et arrangera automatiquement celles qui sont connues (Il y a quelques erreurs déjà connues dans différents mods). Cela ralentit peu par rapport à une simple vérification.<br /><br />Mais il arrive parfois que les templates ne semblent fonctionner correctement que lorsque la vérification des erreurs est désactivée. Cela arrive en cas de mauvais codage HTML - Contactez l\'auteur du code si vous ne trouvez pas les erreurs à corriger.<br /><br />Si la fonction cache est désactivée pour une compilation plus rapide, il serait mieux de désactiver les vérifications.';
$lang['xs_check_switches_0'] = 'Off';
$lang['xs_check_switches_1'] = 'Contrôle Intelligent';
$lang['xs_check_switches_2'] = 'Contrôle Simple';
// xs_use_isset
$lang['xs_use_isset'] = 'Vérifier les variables avec isset() dans le code compilé';

// Infos de débuggage
$lang['xs_debug_header'] = 'Infos de débuggage';
$lang['xs_debug_explain'] = 'Ce sont les Infos de débuggage. Elles sont utilisées pour trouver et fixer les problèmes pendant la configuration du cache.';
$lang['xs_debug_vars'] = 'Variables des Templates';
$lang['xs_debug_tpl_name'] = 'Nom de fichier pour les Templates:';
$lang['xs_debug_cache_filename'] = 'Nom de fichier pour le Cache:';
$lang['xs_debug_data'] = 'Données de débuggage:';

$lang['xs_check_hdr'] = 'Vérifier le cache pour %s';
$lang['xs_check_filename'] = 'Erreur: Nom de fichier invalide';
$lang['xs_check_openfile1'] = 'Erreur: Impossible d\'ouvrir le fichier "%s". Le programme va tenter de créer les répertoires...';
$lang['xs_check_openfile2'] = 'Erreur: Impossible d\'ouvrir le fichier "%s" pour la seconde fois. Refus...';
$lang['xs_check_nodir'] = 'Vérification de "%s" - Aucun répertoire.';
$lang['xs_check_nodir2'] = 'Erreur: Impossible de créer le répertoire "%s" - Vous devriez vérifier vos permissions.';
$lang['xs_check_createddir'] = 'Répertoire "%s" créé';
$lang['xs_check_dir'] = 'Vérification de l\'existence du répertoire "%s".';
$lang['xs_check_ok'] = 'Ouverture du fichier "%s" pour écriture. Tout semble être ok.';

// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = 'Template';
$lang['xs_styles_style'] = 'Style';
$lang['xs_styles_user'] = 'Utilisateurs';
$lang['xs_styles_options'] = 'Options';
$lang['xs_styles_set_default'] = 'réglages par défaut';
$lang['xs_styles_no_override'] = 'Ne pas ignorer les choix des Utilisateurs';
$lang['xs_styles_do_override'] = 'Ignorer les choix des Utilisateurs';
$lang['xs_styles_switch_all'] = 'basculer tous les utilisateurs vers ce style';
$lang['xs_styles_switch_all2'] = 'basculer tous les utilisateurs vers:';
$lang['xs_styles_defstyle'] = 'style par défaut';
$lang['xs_styles_available'] = 'Styles disponibles';

// Categories Hierarchies Mod
$lang['Category_attachment'] = "Lié à la Catégorie";
$lang['Use_sub_forum'] = "Afficher les sous-catégories comme des forums";
$lang['Use_sub_forum_explain'] = "Permet à l'administrateur d'afficher les sous-forums par défaut ou les sous-catégories (vBulletin-like).";
$lang['Category_desc'] = "Description";
$lang['Hierarchy_setting'] = "Réglages de la Hiérarchie des Catégories";
$lang['Category_config_error_fixed'] = "Une erreur a été réparée dans le setup de la catégorie";

// Séparation des Annonces et des Stickys
$lang['announce_settings'] = "Réglages des Annonces";
$lang['enable_announce'] = "Afficher les Annonces dans l'Index du Forum";
$lang['enable_announce_explain'] = "Cela activera ou désactivera les Annonces sur la page d'index du forum.";

$lang['announcement_duration'] = "Durée de publication d'une Announce dans l'index";
$lang['announcement_duration_explain'] = "Nombre de <strong>jours</strong> pendant lesquels une Annonce est affichée sur la page d'index.";
$lang['announcement_duration_explain'] .= "<br/>(Entrer <b>0 (Zero)</b> affichera les Annonces indéfiniment)";

$lang['split_global_announce'] = "Séparation des Annonces Générales";
$lang['split_announce'] = "Séparer les Annonces des forums";
$lang['split_sticky'] = "Séparer les Stickies des forums";

// Options des sujets et des messages
$lang['topic_sort_order'] = "Ordre de tri des Sujets";
$lang['post_sort_order'] = "Ordre de tri des Messages";
$lang['First_Post'] = "Premier Message";
$lang['sorted_default'] = "Forum par défaut";

// Remplacement de l'image du rang de l'administrateur
$lang['Rank_image'] = 'Image de Rang';
$lang['Rank_image_explain'] = 'Utiliser cette fonction pour définir une petite image associée au rang.';
$lang['Rank_image_explain'] .= '<br/>C\'est le chemin au root de PNphpBB2 si vous indiquez un chemin relatif vers l\'emplacement des images.<br/>(A NOTER: Si l\'Image est précisée (image.gif), une tentative sera faite pour utiliser l\'image basée sur le nom dans les répertoires PostNuke theme et langage.)'; 
$lang['Admin_intro'] = 'Merci d\'avoir choisi PNphpBB pour vos forums. Cet écran va vous donner un apperçu rapide des différentes statistiques de vos forums. Vous pouvez revenir en arrière en cliquant sur le lien <u>Admin Index</u> dans le panneau de gauche. Pour retourner à l\'index de votre forum, cliquez sur le logo PNphpBB, également dans le panneau de gauche. Les autres liens, sur le coté droit de cet écran, vous permettront de contrôler tous les aspects de vos forums. Chaque écran comporte des instructions sur la manière d\'utiliser les différents outils.';

$lang['PNphpBB_Version'] = 'Version de PNphpBB2';
$lang['phpBB_Version'] = 'Version de phpBB';

// limited post edit time MOD 
$lang['edit_time'] = 'Délai pour éditer un message'; 
$lang['edit_time_explain'] = 'C\'est le délai (en minutes) pendant lesquel l\'utilisateur est autorisé à éditer son message. Si cette valeur est laissée à 0, il n\'y a aucun délai.'; 

// Activer/Désactiver la mise en concordance du thème
$lang['theme_matching'] = "Activer la mise en concordance du thème";
$lang['theme_matching_explain'] = "Activer ou Désactiver la fonction de mise en concordance du thème. La Mise en Concordance du Thème matching tentera de créer une feuille de style et un jeu d'images pour les cellules en concordance avec le thème actuel si ce jeu n'est pas déjà disponible. <br><b>A Noter:</b> Avec la mise en Concordance des thèmes désactivée, le forum utilisera default.css et les images de cellules trouvées dans le root du répertoire cellpics.";

// Exclure un forum des Annonces Générales
$lang['Exclude_global_announce'] = 'Exclure ce forum des Annonces Générales';
$lang['Exclude_global_announce_explain'] = 'Si cette option est sélectionnée ce forum sera exclu de la liste des forums permettant l\'affichage des annonces générales dans leur Index.';

// Support forum
$lang['Support_forum'] = 'This is a support forum';
$lang['Support_forum_explain'] = 'If this forum will be sued as a support forum, you can choose this option to display a list of user defined status flags on the topic level to indicate the status of the service request. This item can be updated by the administrator or moderator of the forum.';

//
// That's all Folks!
// -------------------------------------------------

?>