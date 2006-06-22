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
$lang['Control_Panel'] = 'Panneau de Contr�le';
$lang['Shadow_attachments'] = 'Fichiers joints non supprim�s'; // used in modules-list
$lang['Forbidden_extensions'] = 'Extensions Interdites';
$lang['Extension_control'] = 'Contr�le des Extensions'; 
$lang['Extension_group_manage'] = 'Contr�le des groupes d\'extension';
$lang['Special_categories'] = 'Options sp�ciales';
$lang['Sync_attachments'] = 'Resynchroniser les Fichiers Joints';
$lang['Quota_limits'] = 'Limites Quotas';

// Attachments -> Management
$lang['Attach_settings'] = 'Configuration des Fichiers Joints'; 
$lang['Manage_attachments_explain'] = 'Ici vous pouvez configurer les principales propri�t�s du module Fichier Joint.';
$lang['Attach_filesize_settings'] = 'Taille des fichiers joints';
$lang['Attach_number_settings'] = 'Nombre des fichiers joints';
$lang['Attach_options_settings'] = 'Options';
$lang['Attach_display_order'] = 'Ordre d\'affichage des fichiers joints'; 
$lang['Attach_display_order_explain'] = 'Ici vous pouvez decider de la fa�on dont seront affich�s les fichiers joints dans les messages et les MP, du plus recent au plus vieux (Descending) ou le contraire (Ascending).'; 
$lang['Show_apcp'] = 'Afficher le panneau de contr�le des fichiers joints';
$lang['Show_apcp_explain'] = 'Choisissez si vous voulez afficher le panneau de contr�le des fichiers joints (oui) ou l\'ancienne m�thode avec les deux champs pour joindre, �diter des fichiers via le formulaire de r�daction du message. La visualisation de ceci est tr�s dur � expliquer, par cons�quent c\'est � vous de l\'essayer.';

$lang['Upload_directory'] = 'R�pertoire des Uploads'; 
$lang['Upload_directory_explain'] = 'Entrer le chemin relatif depuis votre installation de phpBB2 vers le r�pertoire des fichiers joints charg�s. Par exemple entrez \"files\" si votre forum est install� � http://www.yourdomain.com/phpBB2 et que votre r�pertoire de fichiers joints ets � http://www.yourdomain.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Emplacement de l\'image pour les fichiers joints'; 
$lang['Attach_img_path_explain'] = 'Cette image est affich�e avec le lien avec le fichier joint dans un envoi individuel. Laisser ce champ libre si vous ne voulez pas la voir affich�e.';
$lang['Attach_topic_icon'] = 'Ic�ne pour Sujet avec fichier joint ';
$lang['Attach_topic_icon_explain'] = 'Cette image est affich�e en face d�un sujet dans lequel sont joints des fichiers. Laissez ce champs vide si vous ne voulez pas qu�elle soit affich�e.';

$lang['Max_filesize_attach'] = 'Taille du fichier'; 
$lang['Max_filesize_attach_explain'] = 'Taille Maximum pour les fichiers joints. Une valeur de 0 signifie \'illimit�\'. Ce param�tre est restreint par la configuration de votre serveur. Par exemple, si  votre configuration php autorise seulement un maximum de 2 MO en upload, ceci ne pourra �tre chang� par ce module.'; 
$lang['Attach_quota'] = 'Quota pour les fichiers joints';
$lang['Attach_quota_explain'] = 'Espace disque maximum allou� pour TOUS les fichiers joints qui seront conserv�s sur votre espace web. Une valeur de 0 signifie \'illimit�\'.'; 
$lang['Max_filesize_pm'] = 'Taille maximum des fichiers dans le r�pertoire des messages priv�s';
$lang['Max_filesize_pm_explain'] = 'Espace disque maximun pour les fichiers joints pouvant �tre utilis� dans la bo�te � messages priv�s du membre. Une valeur de 0 signifie \'illimit�\'.';
$lang['Max_filesize_pm_explain'] = 'Espace disque maximum utilisable par les fichiers joints dans chaque boite des messages priv�e.'; 
$lang['Default_quota_limit'] = 'Limite Quotas par d�faut';
$lang['Default_quota_limit_explain'] = 'Ici, vous pouvez s�lectionner la limite par d�faut des Quotas automatiquement assign�e aux nouveaux membres inscris ou aux utilisateurs sans limite de quota d�finie. L\'option \'Aucune limite de Quota\' sert � desactiver les Quotas de fichiers joints, au lieu d\'utiliser les param�tres par d�faut definis dans ce panneau de contr�le.';

$lang['Max_attachments'] = 'Nombre maximum de fichiers joints';
$lang['Max_attachments_explain'] = 'Ici vous pouvez entrer le nombre maximum de fichiers joints autoris�s dans un message.';
$lang['Max_attachments_pm'] = 'Nombre maximum de fichiers joints dans un message priv�';
$lang['Max_attachments_pm_explain'] = 'Ici vous pouvez entrer le nombre maximum de fichiers joints autoris�s dans un message priv�.';

$lang['Disable_mod'] = 'D�sactiver le module Fichiers Joints';
$lang['Disable_mod_explain'] = 'Cette option est principalement pour tester de nouveaux mod�les (templates) ou th�mes, elle d�sactive toutes les fonctions concernant les fichiers joints, except� le Panneau d\'Administration.';
$lang['PM_Attachments'] = 'Permettre l\'attachement de fichiers joints dans les messages priv�s';
$lang['PM_Attachments_explain'] = 'Permet ou interdit l\'attachement de fichier dans les messages priv�s.';
$lang['Ftp_upload'] = 'Activer l\'Upload par FTP';
$lang['Ftp_upload_explain'] = 'Activer/d�sactiver la possibilit� d\'upload par FTP. Si vous l\'autorisez (oui) vous devrez d�finir les param�tres d\'Upload par FTP et le r�pertoire d\'Upload utilis� pour les fichiers joints.';
$lang['Attachment_topic_review'] = 'Voulez vous que les fichiers joints soient affich�s dans la pr�visualisation?';
$lang['Attachment_topic_review_explain'] = 'En choississant oui, tous les fichiers joints seront affich�s dans la pr�visualisation des posts.';

$lang['Ftp_server'] = 'Serveur FTP d\'envoi';
$lang['Ftp_server_explain'] = 'Entrez ici l\'IP ou le nom de domaine du FTP qui sera utilis� pour envoyer les fichiers. Si vous laissez ce champs vide le serveur o� est install� phpBB sera utilis� par d�faut. Notez qu\'il ne vous faut pas ajouter ftp:// ou autre chose de ce genre � votre adresse, mettre juste ftp.foo.com ou, quelque chose qui sera plus rapide encore, l\'adresse IP directe.';

$lang['Attach_ftp_path'] = 'Chemin FTP vers votre r�pertoire FTP d\'envoi';
$lang['Attach_ftp_path_explain'] = 'Le r�pertoire o� vos fichiers joints seront stock�s. Ce r�pertoire n\'a pas besoin de permissions (chmod) . N\'entrez surtout pas votre adresse IP ou ftp ici, l\'adresse IP par d�faut est celle de votre localhost, ce champ de formulaire est seulement pour le chemin d\'acc�s par ftp. Exemple : /home/web/fichiers';
$lang['Ftp_download_path'] = 'Chemin FTP pour le t�l�chargement';
$lang['Ftp_download_path_explain'] = 'Entrez l\'adresse vers votre r�pertoire FTP, o� les fichiers joints sont conserv�s.<br />Si vous utilisez un serveur � distance FTP, veuillez s\'il vous pla�t entrer l\'adresse complete, par exemple http://www.mystorage.com/phpBB2/upload.<br /> Si vous utilisez le serveur local pour conserver les fichiers, vous pourrez entrer le r�pertoire relatif � votre dossier phpBB2, par exemple \"upload\".<br />Supprimez l\'antislash ( \\ ) qui suivrait. Laissez ce champs vide si le r�pertoire du FTP n\'est pas accessible par l\'Internet. Avec ce champs vide vous ne pourrez utiliser la methode physique de t�l�chargement.';
$lang['Ftp_passive_mode'] = 'Activer le mode passif du FTP';
$lang['Ftp_passive_mode_explain'] = 'La commande PASV requi�re que le serveur � distance ouvre un port pour la connexion des donn�es et retourne l\'adresse de ce port. Le serveur � distance �coute ce port et le clients se connecte � celui-ci.';

$lang['No_ftp_extensions_installed'] = 'Vous ne pouvez utiliser la methode d\'upload par FTP, car les extensions FTP n\'ont pas �t� compil�es lors de l\'installation de PHP.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Ici vous pouvez supprimer les liens vers des fichiers joints qui n\'existent plus, et les fichiers joints qui ne sont plus li�s � des messages. Vous pouvez t�l�charger ou voir un fichier en cliquant dessus, s\'il n\'y a aucun lien, le fichier n\'existe pas.';
$lang['Shadow_attachments_file_explain'] = 'Supprimer tous les fichiers joints qui restent sur le serveur et ne sont pas li�s � un message existant.';
$lang['Shadow_attachments_row_explain'] = 'Supprimer toutes les informations concernant les fichiers joints n\'existant plus sur le serveur.';
$lang['Empty_file_entry'] = 'Entr�e du fichier vide';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Miniature recr��e pour le fichier joint: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Synchronisation des fichiers joints Termin�e.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Gestions des Extensions';
$lang['Manage_extensions_explain'] = 'Ici vous pouvez g�rer les extensions de vos fichiers. Si vous voullez autoriser/interdire l\'upload d\'une extension, veuillez utilis� le panneau Extensions Interdites.';
$lang['Explanation'] = 'Descriptions';
$lang['Extension_group'] = 'Groupe d\'extension ';
$lang['Invalid_extension'] = 'Extension Invalide';
$lang['Extension_exist'] = 'L\'extension %s existe d�j�'; // replace %s with the extension 
$lang['Unable_add_forbidden_extension'] = 'L\'extension %s est interdite, vous ne pouvez donc pas l\'ajouter aux extensions autoris�es'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'G�rer des groupes d\'extensions';
$lang['Manage_extension_groups_explain'] = 'Ici, vous pouvez ajouter, supprimer et modifier vos groupes d\'extension. Vous pouvez aussi d�sactiver un groupe d\'extension, lui assigner une categorie sp�ciale, changer le mode de t�l�chargement et definir une icone qui sera affich� devant tous les fichiers joints du groupe.';
$lang['Special_category'] = 'Option sp�ciale';
$lang['Category_images'] = 'Images';
$lang['Category_stream_files'] = 'Fichiers Stream';
$lang['Category_swf_files'] = 'Fichiers Flash';
$lang['Allowed'] = 'Permis';
$lang['Allowed_forums'] = 'Forums permis';
$lang['Ext_group_permissions'] = 'Permissions des groupes';
$lang['Download_mode'] = 'T�l�chargement';
$lang['Upload_icon'] = 'Image associ�e';
$lang['Max_groups_filesize'] = 'Taille maximum des fichiers';
$lang['Extension_group_exist'] = 'Le Groupe d\'extension %s existe d�j�'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Gestion des Options Sp�ciales';
$lang['Manage_categories_explain'] = 'Ici, vous pouvez configurer les options sp�ciales. Vous pouvez activer des options relatives aux groupes sp�ciaux.';
$lang['Settings_cat_images'] = 'Options sp�ciales pour les Images';
$lang['Settings_cat_streams'] = 'Options sp�ciales pour les fichiers Stream';
$lang['Settings_cat_flash'] = 'Options sp�ciales pour les fichiers Flash';
$lang['Display_inlined'] = 'Afficher les images dans le sujet';
$lang['Display_inlined_explain'] = 'Choississez la mani�r� d\'afficher les images: dans le sujet (oui) ou � l\'aide d\'un lien?';
$lang['Max_image_size'] = 'Dimensions maximun des images';
$lang['Max_image_size_explain'] = 'Ici vous pouvez definir la dimension maximun autoris�e pour les images upload�es. (Largeur x Hauteur en pixels).<br />Si 0x0 est entr�, cette option est d�sactiv�e. Avec certaines images cette option ne fonctionnera pas d�e aux limitations du PHP install� sur le serveur.';
$lang['Image_link_size'] = 'Dimensions de l\'image affich�e avec un lien';
$lang['Image_link_size_explain'] = 'Si la dimension des images est definie elle sera affich�e en lien.<br />Si la vue dans le post a �t� s�lectionn�e (Largeur x Hauteur en pixels).<br />Si 0x0 est entr�, cette option est d�sactiv�e. Avec certaines images cette options ne fonctionnera pas, d�e au limitation du PHP install� sur le serveur.';
$lang['Assigned_group'] = 'Groupe assign�';

$lang['Image_create_thumbnail'] = 'Cr�er une miniature';
$lang['Image_create_thumbnail_explain'] = 'Toujours cr�er une miniature. Cette option prends le pas sur tout ce qui pourrait �tre defini dans les options sp�ciales except� la taille maximun de l\'image. Avec ceci une miniature sera affich�e dans le sujet, l\'utilisateur devra cliquer sur cette miniature pour afficher l\'image.<br />Noter que ceci n�cessite que Imagick soit install�, si ce n\'est pas le cas ou si PHP est en Safe mode cette options sera desactiv�.';
$lang['Image_min_thumb_filesize'] = 'Taille minimun des miniatures';
$lang['Image_min_thumb_filesize_explain'] = 'Si un fichier image envoy� a une taille plus petite que la taille minimun des miniatures, aucune miniature ne sera cr��, car l\'image est trop petite.';
$lang['Image_imagick_path'] = 'Image par Imagick (adresse complete jusqu\'au dossier).'; 
$lang['Image_imagick_path_explain'] = 'Entrez le dossier o� se trouve le programme imagick, normallement /usr/bin/convert (dans windows: c:/imagemagick/convert.exe).'; 
$lang['Image_search_imagick'] = 'Rechercher Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'G�rer les Extensions Interdites'; 
$lang['Manage_forbidden_extensions_explain'] = 'Ici vous pouvez ajouter ou supprimer les extensions interdites. Attention, il est d�conseill� de supprimer les extensions php.';
$lang['Forbidden_extension_exist'] = 'Cette extension est d�j� interdite !'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'L\'extension %s est une extension autoris�e, s\'il vous plait effacez la avant de l\'ajouter ici.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permissions des groupes pour utiliser les extensions -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Ici vous pouvez restreindre les groupes d\'extensions autoris�s � une partie des forums (definis dans le champs forums autoris�s). Par d�faut le groupe d\'extension est autoris� pour tous les forums o� l\'utilisateur peut ajouter des fichiers joints (de la m�me fa�on que ce Mod a fonctionn� depuis son d�but). Ajoutez juste les forums o� vous souhaitez que le groupe d\'extensions soit permis (the Extensions within this Group), l\'option par d�faut TOUS LES FORUMS dispara�tra quand vous ajouterez des forums � la liste. Vous pourrez revenir � l\'option TOUS LES FORUMS � n\'importe quel moment. Si vous ajoutez un forum � votre Board  et que la permission est TOUS LES FORUMS rien ne sera chang�. Mais si vous changez et restreignez l\'acc�s d\'un forum vous devrez revenir ici afin d\'ajouter ce nouveau forum cr��. Cela serait facile de faire faire cela de mani�re automatique, mais cela vous forcerez � proc�der � bien des modifications de vos fichiers phpBB, c\'est pourquoi cette m�thode a �t� choisie. S\'il vous plait gardez � l\'esprit que tous vos forums sont list�s ici.';
$lang['Note_admin_empty_group_permissions'] = 'NOTE:<br />Dans la liste des forums ci-dessous vos utilisateurs joindre normallement des fichiers joint, mais tant qu\'aucun groupe d\'extension n\'est autoris�  ici vos utilisateurs ne pourront joindre de fichiers. Si ils essayent, ils auront alors un message d\'erreur. Peut �tre voudrez vous mettre la permission de \' Joindre des fichiers\' sur ADMIN dans ces forums.<br /><br />';
$lang['Add_forums'] = 'Ajouter les forums';
$lang['Add_selected'] = 'Ajouter la s�lection';
$lang['Perm_all_forums'] = 'TOUS LES FORUMS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Gestion des limites des Quotas des Fichiers Joints';
$lang['Manage_quotas_explain'] = 'Ici, vous pouvez ajouter/effacer/changer les limites des Quotas. Vous pourrez assigner ces limites de quotas � des membres ou des groupes plus tard. Pour assigner une limite de quota � un membre, vous devez aller dans Membres->Gestion, selectionner le membre et vous verrez l\'option en bas de page. Pour assigner une limite de Quota � un Groupe, allez dans Groupes->Gestion, selectionnez le groupe � �diter, et vous pourrez voir les parametres de configurations. Si vous voulez voir, quels membres et groupes se voient assign�s une limite de quota sp�cifique, cliquez sur \'Voir\' � la gauche de la description du quota.';
$lang['Assigned_users'] = 'Membres assign�s';
$lang['Assigned_groups'] = 'Groupes assign�s';
$lang['Quota_limit_exist'] = 'Le Quota %s existe d�j�.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Panneau de Contr�le des Fichiers Joints';
$lang['Control_panel_explain'] = 'Ici vous pouvez visualiser et g�rer tous les Fichiers Joints en fonction des Utilisateurs, Fichiers Joints, Groupes Mimes etc...';
$lang['File_comment_cp'] = 'Commentaire';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Utilisez * comme un joker pour des recherches partielles';
$lang['Size_smaller_than'] = 'Taille du fichier joint inf�rieure � (octets)';
$lang['Size_greater_than'] = 'Taille du fichier joint sup�rieure � (octets)';
$lang['Count_smaller_than'] = 'Nombre de t�l�chargements inf�rieur �';
$lang['Count_greater_than'] = 'Nombre de t�l�chargements sup�rieur �';
$lang['More_days_old'] = 'Ancien de plus de';
$lang['No_attach_search_match'] = 'Aucun fichier joint ne correspond � vos crit�res de recherche';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Nombre de fichiers joints';
$lang['Total_filesize'] = 'Taille totale';
$lang['Number_posts_attach'] = 'Nombre de messages avec fichier joints';
$lang['Number_topics_attach'] = 'Nombre de sujets avec fichiers joints';
$lang['Number_users_attach'] = 'Nombre d\'utilisateurs ayant joint un fichier';
$lang['Number_pms_attach'] = 'Nombre total de fichiers joints dans les messages priv�s';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistiques sur les fichiers joints pour %s'; // replace %s with username
$lang['Size_in_kb'] = 'Taille (KB)';
$lang['Downloads'] = 'T�l�chargements';
$lang['Post_time'] = 'Date';
$lang['Posted_in_topic'] = 'Sujet';
$lang['Submit_changes'] = 'Valider';

// Sort Types
$lang['Sort_Attachments'] = 'Fichiers joints';
$lang['Sort_Size'] = 'Taille';
$lang['Sort_Filename'] = 'Fichier';
$lang['Sort_Comment'] = 'Commentaire';
$lang['Sort_Extension'] = 'Extension'; 
$lang['Sort_Downloads'] = 'T�l�chargements';
$lang['Sort_Posttime'] = 'Date';
$lang['Sort_Posts'] = 'Messages';

// View Types
$lang['View_Statistic'] = 'Statistiques';
$lang['View_Search'] = 'Rechercher';
$lang['View_Username'] = 'Nom des utilisateurs';
$lang['View_Attachments'] = 'Fichiers Joints';

// Successfully updated
$lang['Attach_config_updated'] = 'Configuration des fichiers joints mise � jour avec succ�s'; 
$lang['Click_return_attach_config'] = 'Cliquer %sIci%s pour retourner � la Configuration des Fichiers Joints';
$lang['Test_settings_successful'] = 'Tests de configuration finis, la configuration du mod semble �tre bonne.';

// Some basic definitions
$lang['Attachments'] = 'Fichiers joints'; 
$lang['Attachment'] = 'Fichier joint';
$lang['Extensions'] = 'Extensions'; 
$lang['Extension'] = 'Extension'; 

// Auth pages
$lang['Auth_attach'] = 'Fichiers joints';
$lang['Auth_download'] = 'T�l�charger les fichiers';
$lang['Shadow_attachments'] = 'Fichiers joints non supprim�s '; // used in modules-list
?>