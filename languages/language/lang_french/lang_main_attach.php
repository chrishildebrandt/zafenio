<?php
/***************************************************************************
 *                            lang_main_attach.php [French]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Lionel F. Lebeau
 *     email                : lionel.lebeau@noos.fr
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/19 18:33:50 bob Exp $
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

/****************************************************************
# Translators:
#
# Lionel F. Lebeau <lionel.lebeau@noos.fr> (From the beginning -> 2.1.0)
# Roger Nifle < rnifle@coherences.com > (Version 2.1.0 -> 2.2.4)
# Ralendil <http://civs.org/> and FX (Version 2.3.1 => 2.3.3)
#
****************************************************************/ 

//
// Attachment Mod Main Language Variables
//

// Permissions reportés
$lang['Rules_attach_can'] = 'Vous <b>pouvez</b> joindre des fichiers dans ce forum'; 
$lang['Rules_attach_cannot'] = 'Vous <b>ne pouvez pas</b> joindre de fichier dans ce forum'; 
$lang['Rules_download_can'] = 'Vous<b> pouvez</b> télécharger des fichiers dans ce forum';
$lang['Rules_download_cannot'] = 'Vous<b> ne pouvez pas</b> télécharger de fichier dans ce forum';
$lang['Sorry_auth_view_attach'] = 'Désolé, vous n\'êtes pas autorisé à voir ou télécharger ce fichier joint';

// Affichage des fichiers joints dans viewtopic.php
$lang['Description'] = 'Description'; // used in Administration Panel too...
$lang['Downloaded'] = 'Téléchargé';
$lang['Download'] = 'Télécharger'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Taille du fichier';
$lang['Viewed'] = 'Vu';
$lang['Download_number'] = '%d fois'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'L\'extension \'%s\' a été desactivée par un administrateur du forum. Le fichier joint n\'est pas affiché par consequent.'; // used in Posts and PM's, replace %s with mime type

// Poster des messages ou des PM, initialisation 
$lang['Attach_posting_cp'] = 'Panneau de Contrôle des Fichiers Joints'; 
$lang['Attach_posting_cp_explain'] = 'Si vous cliquez sur Ajouter un fichier joint la page affichera les champs nécessaires pour ajouter un fichier.<br />Si vous cliquez sur Fichiers joints postés la page affichera alors les fichiers déjà joints à ce message.<br />Si vous souhaitez Remplacer (Envoyer une nouvelle version du fichier) un fichier joint vous devrez cliquer sur ces deux liens. Joignez le fichier comme vous feriez normallement mais ne cliquez pas sur Joindre un fichier, au lieu de cela cliquez sur Envoyer une nouvelle version du fichier en face du fichier que vous souhaiter mettre a jour.'; 

// Joindre des fichiers dans les MP et les messages
$lang['Add_attachment'] = 'Joindre un fichier';
$lang['Add_attachment_title'] = 'Joindre des fichiers';
$lang['Add_attachment_explain'] ='Si vous ne voulez pas joindre un fichier, laissez les champs vides'; 
$lang['File_name'] = 'Nom du fichier'; 
$lang['File_comment'] = 'Ajouter un commentaire'; 

// Fichiers joints
$lang['Posted_attachments'] = 'Afficher les fichiers joints';
$lang['Options'] = 'Options';
$lang['Update_comment'] = 'Modifier le Commentaire';
$lang['Delete_attachments'] = 'Supprimer les fichiers joints'; 
$lang['Delete_attachment'] = 'Supprimer ce fichier';
$lang['Delete_thumbnail'] = 'Supprimer la miniature';
$lang['Upload_new_version'] = 'Envoyer une nouvelle version du fichier';

// Erreurs lors de l'envoi d'un fichier dans un post
$lang['Invalid_filename'] = '%s est un fichier invalide'; // replace %s with given filename 
$lang['Attachment_php_size_na'] = 'Le fichier joint est trop gros.<br />Impossible d\'obtenir la taille maximum définie dans PHP.';
$lang['Attachment_php_size_overrun'] = 'Le fichier joint est trop gros.<br />Taille Max Définie dans PHP: %d Mo.<br />Veuillez noter que cette taille est définie dans le fichier php.ini, cela veut dire que c\'est une valeur défini par PHP, et que ce script ne peut pas la modifier.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'L\'extension %s n\'est pas autorisée'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Vous n\'êtes pas autorisé à joindre des fichiers dont l\'extension est %s dans ce Forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Le fichier joint est trop gros.<br />Taille maximun: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Désolé, mais la taille maximale de l\'ensemble des fichiers joints a été atteinte. Veuillez contacter l\'Administrateur du Forum si vous avez des questions.';
$lang['Too_many_attachments'] = 'Le fichier ne peut être ajouté car le nombre maximum de %d fichiers joints est atteint dans ce message'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'L\'image jointe doit être d\'une dimension superieure à %d x %d.'; 
$lang['General_upload_error'] = 'Erreur lors de l\'envoi: Impossible d\'envoyer le fichier joint vers %s'; // replace %s with local path 
$lang['Error_empty_add_attachbox'] = 'vous devez entrer les valeurs dans le champs \"Ajouter un fichier joint\"'; 
$lang['Error_missing_old_entry'] = 'Impossible d\'envoyer une nouvelle version de ce fichier joint. Impossible de retrouver l\'ancien fichier.'; 

// Erreurs lors de l'envoi d'un fichier dans un PM
$lang['Attach_quota_sender_pm_reached'] = 'Désolé, mais le maximum pour les fichiers joints dans votre répertoire de messages privés a été atteint. Supprimez quelques uns des fichiers reçus ou envoyés.';
$lang['Attach_quota_receiver_pm_reached'] = 'Désolé, mais la taille maximum totale pour les fichiers joints autorisée dans le répertoire de messages privés de \'%s\' as été atteinte. Faites le lui savoir ou supprimez quelques fichiers.';

// Erreurs lors d'un téléchargement
$lang['No_attachment_selected'] = 'Vous n\'avez pas sélectionné de fichier joint à télécharger ou à visualiser.';
$lang['Error_no_attachment'] = 'Le fichier joint séléctionné n\'existe plus';

// Effacer un fichier joint
$lang['Confirm_delete_attachments'] = 'Êtes vous sur de vouloir supprimer le(s) fichier(s) ?';
$lang['Deleted_attachments'] = 'Les fichiers sélectionnés ont été supprimés.';
$lang['Error_deleted_attachments'] = 'Impossible de supprimer le(s) fichier(s)';
$lang['Confirm_delete_pm_attachments'] = 'Êtes vous sûr de vouloir supprimer tous les fichiers affichés dans ce Message privé ?';

// Messages d'erreur générale
$lang['Attachment_feature_disabled'] = 'La Fonction Fichiers Joints est désactivée.';

$lang['Directory_does_not_exist'] = 'Le répertoire \'%s\' n\'existe pas ou n\'a pas été trouvé.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Vérifiez que \'%s\' est un répertoire.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Le répertoire \'%s\' n\'est pas inscriptible. Vous devez créer le chemin de chargement et les droits d\'accès à 777 (or change the owner to you httpd-servers owner) pour charger les fichiers.<br />Si vous avez accès par ftp-access changez les attributs du répertoire comme ceci rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Connection impossible avec le serveur FTP: \'%s\'. Vérifiez vos paramètres ftp.';
$lang['Ftp_error_login'] = 'Connection impossible avec le serveur FTP. Le nom \'%s\' ou le mot de passe est faux. Vérifiez vos paramètres ftp.';
$lang['Ftp_error_path'] = 'Connection impossible avec le serveur FTP: \'%s\'. Vérifiez vos paramètres ftp..';
$lang['Ftp_error_upload'] = 'Envoi impossible sur le serveur FTP: \'%s\'. Vérifiez vos paramètres ftp..';
$lang['Ftp_error_delete'] = 'Supression de fichiers impossible avec le serveur FTP: \'%s\'. Vérifiez vos paramètres ftp.<br />Une autre raison pour cette erreur peut être la non existence du fichier regardez d\'abord dans les fichiers joints cachés.';
$lang['Ftp_error_pasv_mode'] = 'Impossible d\'activer/désactiver le mode passif du FTP';

// Attach Rules Window
$lang['Rules_page'] = 'Permissions relatives aux fichiers joints';
$lang['Attach_rules_title'] = 'Permissions du groupe pour les extensions et la taille des fichiers';
$lang['Allowed_extensions_and_sizes'] = 'Extensions et tailles Autorisées';
$lang['Group_rule_header'] = '%s -> Taille maximun d\'un envoi: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Note_user_empty_group_permissions'] = 'NOTE:<br />Il vous est permis de joindre des fichiers dans ce Forum, <br />mais tant qu\'aucun groupe d\'extension ne sera autorisé, <br />vous serez dans l\'incapacité de joindre un fichier. Si vous essayez, <br />vous aurez un message d\'erreur.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Quota Upload';
$lang['Pm_quota'] = 'Quota MP';
$lang['User_upload_quota_reached'] = 'Désolé, vous avez atteint votre quota limite maximum d\'Upload de %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'PCA membre';
$lang['UACP'] = 'Panneau de Contrôle des fichiers joints du membre';
$lang['User_uploaded_profile'] = 'Uploadé: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% du total';

// Common Variables
$lang['Bytes'] = 'Octets'; 
$lang['KB'] = 'Ko'; 
$lang['MB'] = 'Mo'; 
$lang['Attach_search_query'] = 'Recherche de Fichiers Joints';
$lang['Test_settings'] = 'Tester';
$lang['Not_assigned'] = 'Non assigné';
$lang['No_file_comment_available'] = 'Pas de Commentaire Disponible';
$lang['Attachbox_limit'] = 'Votre boîte des fichiers joint est %d%% pleine';
$lang['No_quota_limit'] = 'Pas de limite de quotas';
$lang['Unlimited'] = 'Illimité';
?>