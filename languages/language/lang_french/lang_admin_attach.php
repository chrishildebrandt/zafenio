<?php
/***************************************************************************
 *                            lang_admin_attach.php [French]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_admin_attach.php,v 1.1 2003/02/19 18:33:50 bob Exp $
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
// Translators: 
//	Lionel F. Lebeau <lionel.lebeau@noos.fr> (From the beginning -> 2.1.0)
//	Roger Nifle < rnifle@coherences.com > (Version 2.1.0 -> 2.2.4)
//	Ralendil and FX (Version 2.3.1 => 2.3.3)
// 

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Panneau de Contrôle';
$lang['Shadow_attachments'] = 'Fichiers joints non supprimés'; // used in modules-list
$lang['Forbidden_extensions'] = 'Extensions Interdites';
$lang['Extension_control'] = 'Contrôle des Extensions'; 
$lang['Extension_group_manage'] = 'Contrôle des groupes d\'extension';
$lang['Special_categories'] = 'Options spéciales';
$lang['Sync_attachments'] = 'Resynchroniser les Fichiers Joints';
$lang['Quota_limits'] = 'Limites Quotas';

// Attachments -> Management
$lang['Attach_settings'] = 'Configuration des Fichiers Joints'; 
$lang['Manage_attachments_explain'] = 'Ici vous pouvez configurer les principales propriétés du module Fichier Joint.';
$lang['Attach_filesize_settings'] = 'Taille des fichiers joints';
$lang['Attach_number_settings'] = 'Nombre des fichiers joints';
$lang['Attach_options_settings'] = 'Options';
$lang['Attach_display_order'] = 'Ordre d\'affichage des fichiers joints'; 
$lang['Attach_display_order_explain'] = 'Ici vous pouvez decider de la façon dont seront affichés les fichiers joints dans les messages et les MP, du plus recent au plus vieux (Descending) ou le contraire (Ascending).'; 
$lang['Show_apcp'] = 'Afficher le panneau de contrôle des fichiers joints';
$lang['Show_apcp_explain'] = 'Choisissez si vous voulez afficher le panneau de contrôle des fichiers joints (oui) ou l\'ancienne méthode avec les deux champs pour joindre, éditer des fichiers via le formulaire de rédaction du message. La visualisation de ceci est très dur à expliquer, par conséquent c\'est à vous de l\'essayer.';

$lang['Upload_directory'] = 'Répertoire des Uploads'; 
$lang['Upload_directory_explain'] = 'Entrer le chemin relatif depuis votre installation de phpBB2 vers le répertoire des fichiers joints chargés. Par exemple entrez \"files\" si votre forum est installé à http://www.yourdomain.com/phpBB2 et que votre répertoire de fichiers joints ets à http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Emplacement de l\'image pour les fichiers joints'; 
$lang['Attach_img_path_explain'] = 'Cette image est affichée avec le lien avec le fichier joint dans un envoi individuel. Laisser ce champ libre si vous ne voulez pas la voir affichée.';
$lang['Attach_topic_icon'] = 'Icône pour Sujet avec fichier joint ';
$lang['Attach_topic_icon_explain'] = 'Cette image est affichée en face d’un sujet dans lequel sont joints des fichiers. Laissez ce champs vide si vous ne voulez pas qu’elle soit affichée.';

$lang['Max_filesize_attach'] = 'Taille du fichier'; 
$lang['Max_filesize_attach_explain'] = 'Taille Maximum pour les fichiers joints. Une valeur de 0 signifie \'illimité\'. Ce paramètre est restreint par la configuration de votre serveur. Par exemple, si  votre configuration php autorise seulement un maximum de 2 MO en upload, ceci ne pourra être changé par ce module.'; 
$lang['Attach_quota'] = 'Quota pour les fichiers joints';
$lang['Attach_quota_explain'] = 'Espace disque maximum alloué pour TOUS les fichiers joints qui seront conservés sur votre espace web. Une valeur de 0 signifie \'illimité\'.'; 
$lang['Max_filesize_pm'] = 'Taille maximum des fichiers dans le répertoire des messages privés';
$lang['Max_filesize_pm_explain'] = 'Espace disque maximun pour les fichiers joints pouvant être utilisé dans la boîte à messages privés du membre. Une valeur de 0 signifie \'illimité\'.';
$lang['Max_filesize_pm_explain'] = 'Espace disque maximum utilisable par les fichiers joints dans chaque boite des messages privée.'; 
$lang['Default_quota_limit'] = 'Limite Quotas par défaut';
$lang['Default_quota_limit_explain'] = 'Ici, vous pouvez sélectionner la limite par défaut des Quotas automatiquement assignée aux nouveaux membres inscris ou aux utilisateurs sans limite de quota définie. L\'option \'Aucune limite de Quota\' sert à desactiver les Quotas de fichiers joints, au lieu d\'utiliser les paramètres par défaut definis dans ce panneau de contrôle.';

$lang['Max_attachments'] = 'Nombre maximum de fichiers joints';
$lang['Max_attachments_explain'] = 'Ici vous pouvez entrer le nombre maximum de fichiers joints autorisés dans un message.';
$lang['Max_attachments_pm'] = 'Nombre maximum de fichiers joints dans un message privé';
$lang['Max_attachments_pm_explain'] = 'Ici vous pouvez entrer le nombre maximum de fichiers joints autorisés dans un message privé.';

$lang['Disable_mod'] = 'Désactiver le module Fichiers Joints';
$lang['Disable_mod_explain'] = 'Cette option est principalement pour tester de nouveaux modèles (templates) ou thèmes, elle désactive toutes les fonctions concernant les fichiers joints, excepté le Panneau d\'Administration.';
$lang['PM_Attachments'] = 'Permettre l\'attachement de fichiers joints dans les messages privés';
$lang['PM_Attachments_explain'] = 'Permet ou interdit l\'attachement de fichier dans les messages privés.';
$lang['Ftp_upload'] = 'Activer l\'Upload par FTP';
$lang['Ftp_upload_explain'] = 'Activer/désactiver la possibilité d\'upload par FTP. Si vous l\'autorisez (oui) vous devrez définir les paramètres d\'Upload par FTP et le répertoire d\'Upload utilisé pour les fichiers joints.';
$lang['Attachment_topic_review'] = 'Voulez vous que les fichiers joints soient affichés dans la prévisualisation?';
$lang['Attachment_topic_review_explain'] = 'En choississant oui, tous les fichiers joints seront affichés dans la prévisualisation des posts.';

$lang['Ftp_server'] = 'Serveur FTP d\'envoi';
$lang['Ftp_server_explain'] = 'Entrez ici l\'IP ou le nom de domaine du FTP qui sera utilisé pour envoyer les fichiers. Si vous laissez ce champs vide le serveur où est installé phpBB sera utilisé par défaut. Notez qu\'il ne vous faut pas ajouter ftp:// ou autre chose de ce genre à votre adresse, mettre juste ftp.foo.com ou, quelque chose qui sera plus rapide encore, l\'adresse IP directe.';

$lang['Attach_ftp_path'] = 'Chemin FTP vers votre répertoire FTP d\'envoi';
$lang['Attach_ftp_path_explain'] = 'Le répertoire où vos fichiers joints seront stockés. Ce répertoire n\'a pas besoin de permissions (chmod) . N\'entrez surtout pas votre adresse IP ou ftp ici, l\'adresse IP par défaut est celle de votre localhost, ce champ de formulaire est seulement pour le chemin d\'accès par ftp. Exemple : /home/web/fichiers';
$lang['Ftp_download_path'] = 'Chemin FTP pour le téléchargement';
$lang['Ftp_download_path_explain'] = 'Entrez l\'adresse vers votre répertoire FTP, où les fichiers joints sont conservés.<br />Si vous utilisez un serveur à distance FTP, veuillez s\'il vous plaît entrer l\'adresse complete, par exemple http://www.mystorage.com/phpBB2/upload.<br /> Si vous utilisez le serveur local pour conserver les fichiers, vous pourrez entrer le répertoire relatif à votre dossier phpBB2, par exemple \"upload\".<br />Supprimez l\'antislash ( \\ ) qui suivrait. Laissez ce champs vide si le répertoire du FTP n\'est pas accessible par l\'Internet. Avec ce champs vide vous ne pourrez utiliser la methode physique de téléchargement.';
$lang['Ftp_passive_mode'] = 'Activer le mode passif du FTP';
$lang['Ftp_passive_mode_explain'] = 'La commande PASV requière que le serveur à distance ouvre un port pour la connexion des données et retourne l\'adresse de ce port. Le serveur à distance écoute ce port et le clients se connecte à celui-ci.';

$lang['No_ftp_extensions_installed'] = 'Vous ne pouvez utiliser la methode d\'upload par FTP, car les extensions FTP n\'ont pas été compilées lors de l\'installation de PHP.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Ici vous pouvez supprimer les liens vers des fichiers joints qui n\'existent plus, et les fichiers joints qui ne sont plus liés à des messages. Vous pouvez télécharger ou voir un fichier en cliquant dessus, s\'il n\'y a aucun lien, le fichier n\'existe pas.';
$lang['Shadow_attachments_file_explain'] = 'Supprimer tous les fichiers joints qui restent sur le serveur et ne sont pas liés à un message existant.';
$lang['Shadow_attachments_row_explain'] = 'Supprimer toutes les informations concernant les fichiers joints n\'existant plus sur le serveur.';
$lang['Empty_file_entry'] = 'Entrée du fichier vide';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Miniature recréée pour le fichier joint: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Synchronisation des fichiers joints Terminée.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Gestions des Extensions';
$lang['Manage_extensions_explain'] = 'Ici vous pouvez gérer les extensions de vos fichiers. Si vous voullez autoriser/interdire l\'upload d\'une extension, veuillez utilisé le panneau Extensions Interdites.';
$lang['Explanation'] = 'Descriptions';
$lang['Extension_group'] = 'Groupe d\'extension ';
$lang['Invalid_extension'] = 'Extension Invalide';
$lang['Extension_exist'] = 'L\'extension %s existe déjà'; // replace %s with the extension 
$lang['Unable_add_forbidden_extension'] = 'L\'extension %s est interdite, vous ne pouvez donc pas l\'ajouter aux extensions autorisées'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Gérer des groupes d\'extensions';
$lang['Manage_extension_groups_explain'] = 'Ici, vous pouvez ajouter, supprimer et modifier vos groupes d\'extension. Vous pouvez aussi désactiver un groupe d\'extension, lui assigner une categorie spéciale, changer le mode de téléchargement et definir une icone qui sera affiché devant tous les fichiers joints du groupe.';
$lang['Special_category'] = 'Option spéciale';
$lang['Category_images'] = 'Images';
$lang['Category_stream_files'] = 'Fichiers Stream';
$lang['Category_swf_files'] = 'Fichiers Flash';
$lang['Allowed'] = 'Permis';
$lang['Allowed_forums'] = 'Forums permis';
$lang['Ext_group_permissions'] = 'Permissions des groupes';
$lang['Download_mode'] = 'Téléchargement';
$lang['Upload_icon'] = 'Image associée';
$lang['Max_groups_filesize'] = 'Taille maximum des fichiers';
$lang['Extension_group_exist'] = 'Le Groupe d\'extension %s existe déjà'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Gestion des Options Spéciales';
$lang['Manage_categories_explain'] = 'Ici, vous pouvez configurer les options spéciales. Vous pouvez activer des options relatives aux groupes spéciaux.';
$lang['Settings_cat_images'] = 'Options spéciales pour les Images';
$lang['Settings_cat_streams'] = 'Options spéciales pour les fichiers Stream';
$lang['Settings_cat_flash'] = 'Options spéciales pour les fichiers Flash';
$lang['Display_inlined'] = 'Afficher les images dans le sujet';
$lang['Display_inlined_explain'] = 'Choississez la maniéré d\'afficher les images: dans le sujet (oui) ou à l\'aide d\'un lien?';
$lang['Max_image_size'] = 'Dimensions maximun des images';
$lang['Max_image_size_explain'] = 'Ici vous pouvez definir la dimension maximun autorisée pour les images uploadées. (Largeur x Hauteur en pixels).<br />Si 0x0 est entré, cette option est désactivée. Avec certaines images cette option ne fonctionnera pas dûe aux limitations du PHP installé sur le serveur.';
$lang['Image_link_size'] = 'Dimensions de l\'image affichée avec un lien';
$lang['Image_link_size_explain'] = 'Si la dimension des images est definie elle sera affichée en lien.<br />Si la vue dans le post a été sélectionnée (Largeur x Hauteur en pixels).<br />Si 0x0 est entré, cette option est désactivée. Avec certaines images cette options ne fonctionnera pas, dûe au limitation du PHP installé sur le serveur.';
$lang['Assigned_group'] = 'Groupe assigné';

$lang['Image_create_thumbnail'] = 'Créer une miniature';
$lang['Image_create_thumbnail_explain'] = 'Toujours créer une miniature. Cette option prends le pas sur tout ce qui pourrait être defini dans les options spéciales excepté la taille maximun de l\'image. Avec ceci une miniature sera affichée dans le sujet, l\'utilisateur devra cliquer sur cette miniature pour afficher l\'image.<br />Noter que ceci nécessite que Imagick soit installé, si ce n\'est pas le cas ou si PHP est en Safe mode cette options sera desactivé.';
$lang['Image_min_thumb_filesize'] = 'Taille minimun des miniatures';
$lang['Image_min_thumb_filesize_explain'] = 'Si un fichier image envoyé a une taille plus petite que la taille minimun des miniatures, aucune miniature ne sera créé, car l\'image est trop petite.';
$lang['Image_imagick_path'] = 'Image par Imagick (adresse complete jusqu\'au dossier).'; 
$lang['Image_imagick_path_explain'] = 'Entrez le dossier où se trouve le programme imagick, normallement /usr/bin/convert (dans windows: c:/imagemagick/convert.exe).'; 
$lang['Image_search_imagick'] = 'Rechercher Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Gérer les Extensions Interdites'; 
$lang['Manage_forbidden_extensions_explain'] = 'Ici vous pouvez ajouter ou supprimer les extensions interdites. Attention, il est déconseillé de supprimer les extensions php.';
$lang['Forbidden_extension_exist'] = 'Cette extension est déjà interdite !'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'L\'extension %s est une extension autorisée, s\'il vous plait effacez la avant de l\'ajouter ici.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permissions des groupes pour utiliser les extensions -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Ici vous pouvez restreindre les groupes d\'extensions autorisés à une partie des forums (definis dans le champs forums autorisés). Par défaut le groupe d\'extension est autorisé pour tous les forums où l\'utilisateur peut ajouter des fichiers joints (de la même façon que ce Mod a fonctionné depuis son début). Ajoutez juste les forums où vous souhaitez que le groupe d\'extensions soit permis (the Extensions within this Group), l\'option par défaut TOUS LES FORUMS disparaîtra quand vous ajouterez des forums à la liste. Vous pourrez revenir à l\'option TOUS LES FORUMS à n\'importe quel moment. Si vous ajoutez un forum à votre Board  et que la permission est TOUS LES FORUMS rien ne sera changé. Mais si vous changez et restreignez l\'accès d\'un forum vous devrez revenir ici afin d\'ajouter ce nouveau forum créé. Cela serait facile de faire faire cela de manière automatique, mais cela vous forcerez à procéder à bien des modifications de vos fichiers phpBB, c\'est pourquoi cette méthode a été choisie. S\'il vous plait gardez à l\'esprit que tous vos forums sont listés ici.';
$lang['Note_admin_empty_group_permissions'] = 'NOTE:<br />Dans la liste des forums ci-dessous vos utilisateurs joindre normallement des fichiers joint, mais tant qu\'aucun groupe d\'extension n\'est autorisé  ici vos utilisateurs ne pourront joindre de fichiers. Si ils essayent, ils auront alors un message d\'erreur. Peut être voudrez vous mettre la permission de \' Joindre des fichiers\' sur ADMIN dans ces forums.<br /><br />';
$lang['Add_forums'] = 'Ajouter les forums';
$lang['Add_selected'] = 'Ajouter la sélection';
$lang['Perm_all_forums'] = 'TOUS LES FORUMS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Gestion des limites des Quotas des Fichiers Joints';
$lang['Manage_quotas_explain'] = 'Ici, vous pouvez ajouter/effacer/changer les limites des Quotas. Vous pourrez assigner ces limites de quotas à des membres ou des groupes plus tard. Pour assigner une limite de quota à un membre, vous devez aller dans Membres->Gestion, selectionner le membre et vous verrez l\'option en bas de page. Pour assigner une limite de Quota à un Groupe, allez dans Groupes->Gestion, selectionnez le groupe à éditer, et vous pourrez voir les parametres de configurations. Si vous voulez voir, quels membres et groupes se voient assignés une limite de quota spécifique, cliquez sur \'Voir\' à la gauche de la description du quota.';
$lang['Assigned_users'] = 'Membres assignés';
$lang['Assigned_groups'] = 'Groupes assignés';
$lang['Quota_limit_exist'] = 'Le Quota %s existe déjà.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Panneau de Contrôle des Fichiers Joints';
$lang['Control_panel_explain'] = 'Ici vous pouvez visualiser et gérer tous les Fichiers Joints en fonction des Utilisateurs, Fichiers Joints, Groupes Mimes etc...';
$lang['File_comment_cp'] = 'Commentaire';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Utilisez * comme un joker pour des recherches partielles';
$lang['Size_smaller_than'] = 'Taille du fichier joint inférieure à (octets)';
$lang['Size_greater_than'] = 'Taille du fichier joint supérieure à (octets)';
$lang['Count_smaller_than'] = 'Nombre de téléchargements inférieur à';
$lang['Count_greater_than'] = 'Nombre de téléchargements supérieur à';
$lang['More_days_old'] = 'Ancien de plus de';
$lang['No_attach_search_match'] = 'Aucun fichier joint ne correspond à vos critères de recherche';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Nombre de fichiers joints';
$lang['Total_filesize'] = 'Taille totale';
$lang['Number_posts_attach'] = 'Nombre de messages avec fichier joints';
$lang['Number_topics_attach'] = 'Nombre de sujets avec fichiers joints';
$lang['Number_users_attach'] = 'Nombre d\'utilisateurs ayant joint un fichier';
$lang['Number_pms_attach'] = 'Nombre total de fichiers joints dans les messages privés';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistiques sur les fichiers joints pour %s'; // replace %s with username
$lang['Size_in_kb'] = 'Taille (KB)';
$lang['Downloads'] = 'Téléchargements';
$lang['Post_time'] = 'Date';
$lang['Posted_in_topic'] = 'Sujet';
$lang['Submit_changes'] = 'Valider';

// Sort Types
$lang['Sort_Attachments'] = 'Fichiers joints';
$lang['Sort_Size'] = 'Taille';
$lang['Sort_Filename'] = 'Fichier';
$lang['Sort_Comment'] = 'Commentaire';
$lang['Sort_Extension'] = 'Extension'; 
$lang['Sort_Downloads'] = 'Téléchargements';
$lang['Sort_Posttime'] = 'Date';
$lang['Sort_Posts'] = 'Messages';

// View Types
$lang['View_Statistic'] = 'Statistiques';
$lang['View_Search'] = 'Rechercher';
$lang['View_Username'] = 'Nom des utilisateurs';
$lang['View_Attachments'] = 'Fichiers Joints';

// Successfully updated
$lang['Attach_config_updated'] = 'Configuration des fichiers joints mise à jour avec succès'; 
$lang['Click_return_attach_config'] = 'Cliquer %sIci%s pour retourner à la Configuration des Fichiers Joints';
$lang['Test_settings_successful'] = 'Tests de configuration finis, la configuration du mod semble être bonne.';

// Some basic definitions
$lang['Attachments'] = 'Fichiers joints'; 
$lang['Attachment'] = 'Fichier joint';
$lang['Extensions'] = 'Extensions'; 
$lang['Extension'] = 'Extension'; 

// Auth pages
$lang['Auth_attach'] = 'Fichiers joints';
$lang['Auth_download'] = 'Télécharger les fichiers';
$lang['Shadow_attachments'] = 'Fichiers joints non supprimés '; // used in modules-list
?>