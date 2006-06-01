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

// Permissions report�s
$lang['Rules_attach_can'] = 'Vous <b>pouvez</b> joindre des fichiers dans ce forum'; 
$lang['Rules_attach_cannot'] = 'Vous <b>ne pouvez pas</b> joindre de fichier dans ce forum'; 
$lang['Rules_download_can'] = 'Vous<b> pouvez</b> t�l�charger des fichiers dans ce forum';
$lang['Rules_download_cannot'] = 'Vous<b> ne pouvez pas</b> t�l�charger de fichier dans ce forum';
$lang['Sorry_auth_view_attach'] = 'D�sol�, vous n\'�tes pas autoris� � voir ou t�l�charger ce fichier joint';

// Affichage des fichiers joints dans viewtopic.php
$lang['Description'] = 'Description'; // used in Administration Panel too...
$lang['Downloaded'] = 'T�l�charg�';
$lang['Download'] = 'T�l�charger'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Taille du fichier';
$lang['Viewed'] = 'Vu';
$lang['Download_number'] = '%d fois'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'L\'extension \'%s\' a �t� desactiv�e par un administrateur du forum. Le fichier joint n\'est pas affich� par consequent.'; // used in Posts and PM's, replace %s with mime type

// Poster des messages ou des PM, initialisation 
$lang['Attach_posting_cp'] = 'Panneau de Contr�le des Fichiers Joints'; 
$lang['Attach_posting_cp_explain'] = 'Si vous cliquez sur Ajouter un fichier joint la page affichera les champs n�cessaires pour ajouter un fichier.<br />Si vous cliquez sur Fichiers joints post�s la page affichera alors les fichiers d�j� joints � ce message.<br />Si vous souhaitez Remplacer (Envoyer une nouvelle version du fichier) un fichier joint vous devrez cliquer sur ces deux liens. Joignez le fichier comme vous feriez normallement mais ne cliquez pas sur Joindre un fichier, au lieu de cela cliquez sur Envoyer une nouvelle version du fichier en face du fichier que vous souhaiter mettre a jour.'; 

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
$lang['Attachment_php_size_na'] = 'Le fichier joint est trop gros.<br />Impossible d\'obtenir la taille maximum d�finie dans PHP.';
$lang['Attachment_php_size_overrun'] = 'Le fichier joint est trop gros.<br />Taille Max D�finie dans PHP: %d Mo.<br />Veuillez noter que cette taille est d�finie dans le fichier php.ini, cela veut dire que c\'est une valeur d�fini par PHP, et que ce script ne peut pas la modifier.'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'L\'extension %s n\'est pas autoris�e'; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = 'Vous n\'�tes pas autoris� � joindre des fichiers dont l\'extension est %s dans ce Forum'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'Le fichier joint est trop gros.<br />Taille maximun: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'D�sol�, mais la taille maximale de l\'ensemble des fichiers joints a �t� atteinte. Veuillez contacter l\'Administrateur du Forum si vous avez des questions.';
$lang['Too_many_attachments'] = 'Le fichier ne peut �tre ajout� car le nombre maximum de %d fichiers joints est atteint dans ce message'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'L\'image jointe doit �tre d\'une dimension superieure � %d x %d.'; 
$lang['General_upload_error'] = 'Erreur lors de l\'envoi: Impossible d\'envoyer le fichier joint vers %s'; // replace %s with local path 
$lang['Error_empty_add_attachbox'] = 'vous devez entrer les valeurs dans le champs \"Ajouter un fichier joint\"'; 
$lang['Error_missing_old_entry'] = 'Impossible d\'envoyer une nouvelle version de ce fichier joint. Impossible de retrouver l\'ancien fichier.'; 

// Erreurs lors de l'envoi d'un fichier dans un PM
$lang['Attach_quota_sender_pm_reached'] = 'D�sol�, mais le maximum pour les fichiers joints dans votre r�pertoire de messages priv�s a �t� atteint. Supprimez quelques uns des fichiers re�us ou envoy�s.';
$lang['Attach_quota_receiver_pm_reached'] = 'D�sol�, mais la taille maximum totale pour les fichiers joints autoris�e dans le r�pertoire de messages priv�s de \'%s\' as �t� atteinte. Faites le lui savoir ou supprimez quelques fichiers.';

// Erreurs lors d'un t�l�chargement
$lang['No_attachment_selected'] = 'Vous n\'avez pas s�lectionn� de fichier joint � t�l�charger ou � visualiser.';
$lang['Error_no_attachment'] = 'Le fichier joint s�l�ctionn� n\'existe plus';

// Effacer un fichier joint
$lang['Confirm_delete_attachments'] = '�tes vous sur de vouloir supprimer le(s) fichier(s) ?';
$lang['Deleted_attachments'] = 'Les fichiers s�lectionn�s ont �t� supprim�s.';
$lang['Error_deleted_attachments'] = 'Impossible de supprimer le(s) fichier(s)';
$lang['Confirm_delete_pm_attachments'] = '�tes vous s�r de vouloir supprimer tous les fichiers affich�s dans ce Message priv� ?';

// Messages d'erreur g�n�rale
$lang['Attachment_feature_disabled'] = 'La Fonction Fichiers Joints est d�sactiv�e.';

$lang['Directory_does_not_exist'] = 'Le r�pertoire \'%s\' n\'existe pas ou n\'a pas �t� trouv�.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'V�rifiez que \'%s\' est un r�pertoire.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'Le r�pertoire \'%s\' n\'est pas inscriptible. Vous devez cr�er le chemin de chargement et les droits d\'acc�s � 777 (or change the owner to you httpd-servers owner) pour charger les fichiers.<br />Si vous avez acc�s par ftp-access changez les attributs du r�pertoire comme ceci rwxrwxrwx.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'Connection impossible avec le serveur FTP: \'%s\'. V�rifiez vos param�tres ftp.';
$lang['Ftp_error_login'] = 'Connection impossible avec le serveur FTP. Le nom \'%s\' ou le mot de passe est faux. V�rifiez vos param�tres ftp.';
$lang['Ftp_error_path'] = 'Connection impossible avec le serveur FTP: \'%s\'. V�rifiez vos param�tres ftp..';
$lang['Ftp_error_upload'] = 'Envoi impossible sur le serveur FTP: \'%s\'. V�rifiez vos param�tres ftp..';
$lang['Ftp_error_delete'] = 'Supression de fichiers impossible avec le serveur FTP: \'%s\'. V�rifiez vos param�tres ftp.<br />Une autre raison pour cette erreur peut �tre la non existence du fichier regardez d\'abord dans les fichiers joints cach�s.';
$lang['Ftp_error_pasv_mode'] = 'Impossible d\'activer/d�sactiver le mode passif du FTP';

// Attach Rules Window
$lang['Rules_page'] = 'Permissions relatives aux fichiers joints';
$lang['Attach_rules_title'] = 'Permissions du groupe pour les extensions et la taille des fichiers';
$lang['Allowed_extensions_and_sizes'] = 'Extensions et tailles Autoris�es';
$lang['Group_rule_header'] = '%s -> Taille maximun d\'un envoi: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Note_user_empty_group_permissions'] = 'NOTE:<br />Il vous est permis de joindre des fichiers dans ce Forum, <br />mais tant qu\'aucun groupe d\'extension ne sera autoris�, <br />vous serez dans l\'incapacit� de joindre un fichier. Si vous essayez, <br />vous aurez un message d\'erreur.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Quota Upload';
$lang['Pm_quota'] = 'Quota MP';
$lang['User_upload_quota_reached'] = 'D�sol�, vous avez atteint votre quota limite maximum d\'Upload de %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'PCA membre';
$lang['UACP'] = 'Panneau de Contr�le des fichiers joints du membre';
$lang['User_uploaded_profile'] = 'Upload�: %s';
$lang['User_quota_profile'] = 'Quota: %s';
$lang['Upload_percent_profile'] = '%d%% du total';

// Common Variables
$lang['Bytes'] = 'Octets'; 
$lang['KB'] = 'Ko'; 
$lang['MB'] = 'Mo'; 
$lang['Attach_search_query'] = 'Recherche de Fichiers Joints';
$lang['Test_settings'] = 'Tester';
$lang['Not_assigned'] = 'Non assign�';
$lang['No_file_comment_available'] = 'Pas de Commentaire Disponible';
$lang['Attachbox_limit'] = 'Votre bo�te des fichiers joint est %d%% pleine';
$lang['No_quota_limit'] = 'Pas de limite de quotas';
$lang['Unlimited'] = 'Illimit�';
?>