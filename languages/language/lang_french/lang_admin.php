<?php

/***************************************************************************
 *                            lang_admin.php [French]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2003/02/19 18:33:50 bob Exp $
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

/* CONTRIBUTORS 
	Translation produced by Helix
	http://www.phpbb-fr.com/
*/ 

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Administration G�n�rale';
$lang['Users'] = 'Administration des Utilisateurs';
$lang['Groups'] = 'Administration des Groupes';
$lang['Forums'] = 'Administration des Forums';
$lang['Styles'] = 'Administration des Th�mes';

$lang['Configuration'] = 'Configuration';
$lang['Permissions'] = 'Permissions';
$lang['Manage'] = 'Gestion';
$lang['Disallow'] = 'Interdire un nom d\'utilisateur';
$lang['Prune'] = 'D�lester';
$lang['Mass_Email'] = 'E-mail de Masse';
$lang['Ranks'] = 'Rangs';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Contr�le du bannissement';
$lang['Word_Censor'] = 'Censure';
$lang['Export'] = 'Exporter';
$lang['Create_new'] = 'Cr�er';
$lang['Add_new'] = 'Ajouter';
$lang['Backup_DB'] = 'Sauvegarder la base de donn�es';
$lang['Restore_DB'] = 'Restaurer la base de donn�es';


//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'Vous n\'�tes pas autoris� � administrer ce forum';
$lang['Welcome_phpBB'] = 'Bienvenue sur phpBB';
$lang['Admin_intro'] = 'Merci d\'avoir choisi phpBB comme solution de forum. Cet �cran vous donnera un rapide aper�u des diverses statistiques de votre forum. Vous pouvez revenir sur cette page en cliquant sur le lien <u>Index de l\'Administration</u> dans le volet de gauche. Pour retourner � l\'index de votre forum, cliquez sur le logo phpBB dans le volet de gauche. Les autres liens du volet de gauche vous permettront de contr�ler tous les aspects de votre forum. Chaque page contiendra les instructions n�cessaires concernant l\'utilisation des outils.';
$lang['Main_index'] = 'Index du Forum';
$lang['Forum_stats'] = 'Statistiques du Forum';
$lang['Admin_Index'] = 'Index de l\'Administration';
$lang['Preview_forum'] = 'Aper�u du Forum';

$lang['Click_return_admin_index'] = 'Cliquez %sici%s pour revenir � l\'Index d\'Administration';

$lang['Statistic'] = 'Statistique';
$lang['Value'] = 'Valeur';
$lang['Number_posts'] = 'Nombre de messages';
$lang['Posts_per_day'] = 'Messages par jour';
$lang['Number_topics'] = 'Nombre de sujets';
$lang['Topics_per_day'] = 'Sujets par jour';
$lang['Number_users'] = 'Nombre d\'utilisateurs';
$lang['Users_per_day'] = 'Utilisateurs par jour';
$lang['Board_started'] = 'Ouverture du forum';
$lang['Avatar_dir_size'] = 'Taille du r�pertoire des Avatars';
$lang['Database_size'] = 'Taille de la base de donn�es';
$lang['Gzip_compression'] ='Compression Gzip';
$lang['Not_available'] = 'Non disponible';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Utilitaires de la Base de donn�es';

$lang['Restore'] = 'Restaurer';
$lang['Backup'] = 'Sauvegarder';
$lang['Restore_explain'] = 'Ceci ex�cutera une restauration compl�te de toutes les tables de phpBB � partir d\'un fichier sauvegard�. Si votre serveur le supporte, vous pourrez envoyer au serveur un fichier texte compress� au format gzip et il sera automatiquement d�compress�. <B>ATTENTION</B>: Cette op�ration effacera toutes les donn�es existantes. La restauration peut prendre un certain temps � s\'effectuer, veuillez donc ne pas vous d�placer de cette page tant que l\'op�ration n\'est pas termin�e.';
$lang['Backup_explain'] = 'Ici, vous pouvez sauvegarder toutes les donn�es relatives � phpBB. Si vous avez des tables suppl�mentaires personnalis�es dans la m�me base de donn�es que phpBB et que vous voulez les sauvegarder aussi, veuillez entrer leurs noms, s�par�s par une virgule dans la zone de texte \'Tables Suppl�mentaires\' ci-dessous. Si votre serveur le supporte, vous pourrez compresser le fichier-sauvegarde au format gzip afin de r�duire sa taille avant de le t�l�charger.';

$lang['Backup_options'] = 'Options de Sauvegarde';
$lang['Start_backup'] = 'D�marrer la sauvegarde';
$lang['Full_backup'] = 'Sauvegarde compl�te';
$lang['Structure_backup'] = 'Sauvegarde de la structure uniquement';
$lang['Data_backup'] = 'Sauvegarde des donn�es uniquement';
$lang['Additional_tables'] = 'Tables Suppl�mentaires';
$lang['Gzip_compress'] = 'Compression Gzip';
$lang['Select_file'] = 'S�lectionner un fichier';
$lang['Start_Restore'] = 'D�marrer la restauration';

$lang['Restore_success'] = 'La Base de donn�es a �t� restaur�e avec succ�s.<br /><br />Votre forum devrait revenir dans l\'�tat dans lequel il �tait lorsque la sauvegarde a �t� effectu�e.';
$lang['Backup_download'] = 'Le t�l�chargement va d�buter sous peu; veuillez patienter jusqu\'� ce qu\'il commence.';
$lang['Backups_not_supported'] = 'D�sol�, mais la sauvegarde de base de donn�es n\'est pas support� actuellement par votre syst�me de base de donn�es.';

$lang['Restore_Error_uploading'] = 'Erreur durant l\'envoi de la sauvegarde.';
$lang['Restore_Error_filename'] = 'Probl�me de nom de fichier; veuillez essayer avec un autre fichier.';
$lang['Restore_Error_decompress'] = 'Impossible de d�compresser le fichier gzip; veuillez renvoyer une version non compress�e du fichier.';
$lang['Restore_Error_no_file'] = 'Aucun fichier n\'a �t� envoy�.';


//
// Auth pages
//
$lang['Select_a_User'] = 'S�lectionner un Utilisateur';
$lang['Select_a_Group'] = 'S�lectionner un Groupe';
$lang['Select_a_Forum'] = 'S�lectionner un Forum';
$lang['Auth_Control_User'] = 'Contr�le des Permissions des Utilisateurs';
$lang['Auth_Control_Group'] = 'Contr�le des Permissions des Groupes';
$lang['Auth_Control_Forum'] = 'Contr�le des Permissions des Forums';
$lang['Look_up_User'] = 'Rechercher l\'Utilisateur';
$lang['Look_up_Group'] = 'Rechercher le Groupe';
$lang['Look_up_Forum'] = 'Rechercher le Forum';

$lang['Group_auth_explain'] = 'Ici, vous pouvez modifier les permissions et les statuts de mod�rateurs assign�s � chaque groupe. N\'oubliez pas qu\'en changeant les permissions de groupe, les permissions individuelles d\'utilisateurs pourront toujours autoriser un utilisateur � entrer sur un forum, etc. Vous serez pr�venu le cas �ch�ant.';
$lang['User_auth_explain'] = 'Ici, vous pouvez modifier les permissions et les statuts de mod�rateurs assign�s � chaque utilisateur, individuellement. N\'oubliez pas qu\'en changeant les permissions individuelles d\'utilisateurs, les permissions de groupe pourront toujours autoriser un utilisateur � entrer sur un forum, etc. Vous serez pr�venu le cas �ch�ant.';
$lang['Forum_auth_explain'] = 'Ici, vous pouvez modifier les niveaux d\'acc�s de chaque forum. Vous aurez deux modes pour le faire, un mode simple, et un mode avanc� ; le mode avanc� offre un plus grand contr�le sur le fonctionnement de chaque forum. Rappelez-vous qu\'en modifiant les niveaux d\'acc�s d\'un forum, les utilisateurs du forum pourront en �tre affect�s.';

$lang['Simple_mode'] = 'Mode Simple';
$lang['Advanced_mode'] = 'Mode Avanc�';
$lang['Moderator_status'] = 'Statut de Mod�rateur';

$lang['Allowed_Access'] = 'Acc�s Autoris�';
$lang['Disallowed_Access'] = 'Acc�s Interdit';
$lang['Is_Moderator'] = 'est mod�rateur';
$lang['Not_Moderator'] = 'n\'est pas mod�rateur';

$lang['Conflict_warning'] = 'Avertissement : Conflit des Autorisations';
$lang['Conflict_access_userauth'] = 'Cet utilisateur a toujours les droits d\'acc�s � ce forum gr�ce � son appartenance � un groupe. Vous pouvez modifier les permissions du groupe ou retirer cet utilisateur du groupe pour l\'emp�cher compl�tement d\'avoir les droits d\'acc�s. L\'attribution des droits par les groupes (et les forums concern�s) sont not�s ci-dessous.';
$lang['Conflict_mod_userauth'] = 'Cet utilisateur a toujours les droits de mod�ration � ce forum gr�ce � son appartenance � un groupe. Vous pouvez modifier les permissions du groupe ou retirer cet utilisateur du groupe pour l\'emp�cher compl�tement d\'avoir les droits de mod�ration. L\'attribution des droits par les groupes (et les forums concern�s) sont not�s ci-dessous.';

$lang['Conflict_access_groupauth'] = 'L\'utilisateur suivant (ou les utilisateurs) a toujours les droits d\'acc�s � ce forum gr�ce � ses permissions d\'utilisateur. Vous pouvez modifier les permissions d\'utilisateur pour l\'emp�cher compl�tement d\'avoir les droits d\'acc�s. L\'attribution des droits par les permissions d\'utilisateur (et les forums concern�s) sont not�s ci-dessous.';
$lang['Conflict_mod_groupauth'] = 'L\'utilisateur suivant (ou les utilisateurs) a toujours les droits de mod�ration � ce forum gr�ce � ses permissions d\'utilisateur. Vous pouvez modifier les permissions d\'utilisateur pour l\'emp�cher compl�tement d\'avoir les droits de mod�ration. L\'attribution des droits par les permissions d\'utilisateur (et les forums concern�s) sont not�s ci-dessous.';

$lang['Public'] = 'Public';
$lang['Private'] = 'Priv�';
$lang['Registered'] = 'Enregistr�';
$lang['Administrators'] = 'Administrateurs';
$lang['Hidden'] = 'Invisible';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'TOUS';
$lang['Forum_REG'] = 'MEMBRES';
$lang['Forum_PRIVATE'] = 'PRIVE';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Voir';
$lang['Read'] = 'Lire';
$lang['Post'] = 'Poster';
$lang['Reply'] = 'R�pondre';
$lang['Edit'] = 'Editer';
$lang['Delete'] = 'Supprimer';
$lang['Sticky'] = 'Post-it';
$lang['Announce'] = 'Annoncer';
$lang['Vote'] = 'Voter';
$lang['Pollcreate'] = 'Cr�er un sondage';

$lang['Permissions'] = 'Permissions';
$lang['Simple_Permission'] = 'Permission Simple';

$lang['User_Level'] = 'Niveau de l\'utilisateur';
$lang['Auth_User'] = 'Utilisateur';
$lang['Auth_Admin'] = 'Administrateur';
$lang['Group_memberships'] = 'Effectifs des groupes d\'utilisateurs';
$lang['Usergroup_members'] = 'Ce groupe est compos� des membres suivants';

$lang['Forum_auth_updated'] = 'Permissions du forum mises � jour';
$lang['User_auth_updated'] = 'Permissions de l\'utilisateur mises � jour';
$lang['Group_auth_updated'] = 'Permissions du groupe mises � jour';

$lang['Auth_updated'] = 'Les permissions ont �t� mises � jour';
$lang['Click_return_userauth'] = 'Cliquez %sici%s pour revenir aux Permissions d\'Utilisateurs';
$lang['Click_return_groupauth'] = 'Cliquez %sici%s pour revenir aux Permissions de Groupes';
$lang['Click_return_forumauth'] = 'Cliquez %sici%s pour revenir aux Permissions des Forums';


//
// Banning
//
$lang['Ban_control'] = 'Contr�le du Bannissement';
$lang['Ban_explain'] = 'Ici, vous pouvez contr�ler les bannissement des utilisateurs. Vous pouvez accomplir cela en bannissant soit un utilisateur sp�cifique, soit un intervalle d\'adresses IP ou un nom de serveur. Ces m�thodes emp�cheront un utilisateur d\'atteindre votre forum. Pour emp�cher un utilisateur de s\'enregistrer sous un nom d\'utilisateur diff�rent, vous pouvez �galement bannir une adresse e-mail sp�cifique. Veuillez noter que bannir uniquement l\'adresse e-mail n\'emp�chera pas l\'utilisateur concern� de se connecter ou poster sur votre forum, vous devrez utiliser l\'une des deux m�thodes cit�es ci-dessus.';
$lang['Ban_explain_warn'] = 'Veuillez noter qu\'entrer un intervalle d\'adresses IP aura pour r�sultat de prendre en compte toutes les adresses entre l\'IP de d�part et l\'IP de fin dans la liste de bannissement. Des essais seront effectu�s afin de r�duire le nombre d\'adresses IP ajout�es � la base de donn�es en introduisant des jokers automatiquement aux endroits appropri�s. Si vous devez r�ellement entrer un intervalle, essayez de le garder r�duit ou au mieux, fixez des adresses sp�cifiques.';

$lang['Select_username'] = 'S�lectionner un Nom d\'utilisateur';
$lang['Select_ip'] = 'S�lectionner une adresse IP';
$lang['Select_email'] = 'S�lectionner une adresse e-mail';

$lang['Ban_username'] = 'Bannir un ou plusieurs utilisateurs sp�cifiques';
$lang['Ban_username_explain'] = 'Vous pouvez bannir plusieurs utilisateurs d\'une fois en utilisant la combinaison appropri�e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['Ban_IP'] = 'Bannir une ou plusieurs adresses IP ou noms de serveurs';
$lang['IP_hostname'] = 'Adresses IP ou noms de serveurs';
$lang['Ban_IP_explain'] = 'Pour sp�cifier plusieurs IP ou noms de serveurs diff�rents, s�parez-les par des virgules. Pour sp�cifier un intervalle d\'adresses IP, s�parez le d�but et la fin avec un trait d\'union (-), pour sp�cifier un joker, utilisez une �toile (*)';

$lang['Ban_email'] = 'Bannir une ou plusieurs adresses e-mail';
$lang['Ban_email_explain'] = 'Pour sp�cifier plus d\'une adresse e-mail, s�parez-les par des virgules. Pour sp�cifier un joker pour le nom d\'utilisateur, utilisez * ; par exemple *@hotmail.com';

$lang['Unban_username'] = 'D�bannir un ou plusieurs utilisateurs sp�cifiques';
$lang['Unban_username_explain'] = 'Vous pouvez d�bannir plusieurs utilisateurs en une fois en utilisant la combinaison appropri�e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['Unban_IP'] = 'D�bannir une ou plusieurs adresses IP';
$lang['Unban_IP_explain'] = 'Vous pouvez d�bannir plusieurs adresses IP en une fois en utilisant la combinaison appropri�e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['Unban_email'] = 'D�bannir une ou plusieurs adresses e-mail';
$lang['Unban_email_explain'] = 'Vous pouvez d�bannir plusieurs adresses e-mail en une fois en utilisant la combinaison appropri�e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['No_banned_users'] = 'Aucun noms d\'utilisateurs bannis';
$lang['No_banned_ip'] = 'Aucune adresses IP bannies';
$lang['No_banned_email'] = 'Aucune adresses e-mail bannies';

$lang['Ban_update_sucessful'] = 'La liste de bannissement a �t� mise � jour avec succ�s';
$lang['Click_return_banadmin'] = 'Cliquez %sici%s pour revenir au Contr�le du Bannissement';


//
// Configuration
//
$lang['General_Config'] = 'Configuration G�n�rale';
$lang['Config_explain'] = 'Le formulaire ci-dessous vous permettra de personnaliser toutes les options g�n�rales du forum. Pour les Utilisateurs et les Forums, utilisez les liens relatifs sur le volet de gauche.';

$lang['Click_return_config'] = 'Cliquez %sici%s pour revenir � Configuration G�n�rale';

$lang['General_settings'] = 'Options G�n�rales du Forum';
$lang['Server_name'] = 'Nom de domaine';
$lang['Server_name_explain'] = 'Le nom de domaine � partir duquel ce forum fonctionne';
$lang['Script_path'] = 'Chemin du script';
$lang['Script_path_explain'] = 'Le chemin relatif de phpBB2 par rapport au nom de domaine';
$lang['Server_port'] = 'Port du serveur';
$lang['Server_port_explain'] = 'Le port utilis� par votre serveur est habituellement le 80. Modifier uniquement si diff�rent';
$lang['Site_name'] = 'Nom du site';
$lang['Site_desc'] = 'Description du site';
$lang['Board_disable'] = 'D�sactiver le forum';
$lang['Board_disable_explain'] = 'Ceci rendra le forum indisponible aux utilisateurs. Ne vous d�connectez pas lorsque vous d�sactivez le forum, vous ne pourrez plus vous reconnecter !';
$lang['Acct_activation'] = 'Activation du compte';
$lang['Acc_None'] = 'Aucune'; // These three entries are the type of activation
$lang['Acc_User'] = 'Utilisateur';
$lang['Acc_Admin'] = 'Administrateur';


$lang['Abilities_settings'] = 'Options de Base de l\'Utilisateur et du Forum';
$lang['Max_poll_options'] = 'Nombre maximal d\'options pour les sondages';
$lang['Flood_Interval'] = 'Intervalle de Flood';
$lang['Flood_Interval_explain'] = 'Nombre de secondes durant lequel un utilisateur doit patienter avant de pouvoir reposter.';
$lang['Board_email_form'] = 'Messagerie e-mail via le forum';
$lang['Board_email_form_explain'] = 'Les Utilisateurs s\'envoient des e-mail par ce forum';
$lang['Topics_per_page'] = 'Sujets Par Page';
$lang['Posts_per_page'] = 'Messages Par Page';
$lang['Hot_threshold'] = 'Seuil de Messages pour �tre Populaire';
$lang['Default_style'] = 'Th�me par D�faut';
$lang['Override_style'] = 'Annuler le th�me de l\'utilisateur';
$lang['Override_style_explain'] = 'Remplace le th�me de l\'utilisateur par le th�me par d�faut';
$lang['Default_language'] = 'Langue par d�faut';
$lang['Date_format'] = 'Format de la Date';
$lang['System_timezone'] = 'Fuseau Horaire';
$lang['Enable_gzip'] = 'Activer la Compression GZip';
$lang['Enable_prune'] = 'Activer le D�lestage du Forum';
$lang['Allow_HTML'] = 'Autoriser le HTML';
$lang['Allow_BBCode'] = 'Autoriser le BBCode';
$lang['Allowed_tags'] = 'Balises HTML autoris�es';
$lang['Allowed_tags_explain'] = 'S�parez les balises avec des virgules';
$lang['Allow_smilies'] = 'Autoriser les Smilies';
$lang['Smilies_path'] = 'Chemin de stockage des Smilies';
$lang['Smilies_path_explain'] = 'Chemin sous votre r�pertoire phpBB, ex : images/smiles';
$lang['Allow_sig'] = 'Autoriser les Signatures';
$lang['Max_sig_length'] = 'Longueur Maximale de la signature';
$lang['Max_sig_length_explain'] = 'Nombre maximal de caract�res dans la signature de l\'utilisateur';
$lang['Allow_name_change'] = 'Autoriser les changements de Nom d\'utilisateur';

$lang['Avatar_settings'] = 'Option des Avatars';
$lang['Allow_local'] = 'Activer la gallerie des avatars';
$lang['Allow_remote'] = 'Activer les avatars � distance';
$lang['Allow_remote_explain'] = 'Les avatars sont stock�s sur un autre site web';
$lang['Allow_upload'] = 'Activer l\'envoi d\'avatar';
$lang['Max_filesize'] = 'Taille Maximale du Fichier Avatar';
$lang['Max_filesize_explain'] = 'Pour les avatars envoy�s';
$lang['Max_avatar_size'] = 'Dimensions Maximales de l\'Avatar';
$lang['Max_avatar_size_explain'] = '(Hauteur x Largeur en pixels)';
$lang['Avatar_storage_path'] = 'Chemin de stockage des Avatars';
$lang['Avatar_storage_path_explain'] = 'Chemin sous votre r�pertoire phpBB, ex : images/avatars';
$lang['Avatar_gallery_path'] = 'Chemin de la Gallerie des Avatars';
$lang['Avatar_gallery_path_explain'] = 'Chemin sous votre r�pertoire phpBB pour les images pr�-charg�es, ex : images/avatars/gallery';

$lang['COPPA_settings'] = 'Options COPPA';
$lang['COPPA_fax'] = 'Num�ro de Fax COPPA';
$lang['COPPA_mail'] = 'Adresse postale de la COPPA';
$lang['COPPA_mail_explain'] = 'Ceci est l\'adresse postale o� les parents enverront le formulaire d\'enregistrement COPPA';

$lang['Email_settings'] = 'Options de l\'e-mail';
$lang['Admin_email'] = 'Adresse e-mail de l\'Administrateur';
$lang['Email_sig'] = 'Signature e-mail';
$lang['Email_sig_explain'] = 'Ce texte sera attach� � tous les e-mails que le forum enverra';
$lang['Use_SMTP'] = 'Utiliser un serveur SMTP pour l\'e-mail';
$lang['Use_SMTP_explain'] = 'Dites oui si vous voulez ou devez envoyer des e-mails par un serveur sp�cifique au lieu de la fonction locale mail()';
$lang['SMTP_server'] = 'Adresse du serveur SMTP';
$lang['SMTP_username'] = 'Nom d\'utilisateur SMTP';
$lang['SMTP_username_explain'] = 'Entrez un nom d\'utilisateur pour votre serveur SMTP seulement si n�cessaire';
$lang['SMTP_password'] = 'Mot de passe SMTP';
$lang['SMTP_password_explain'] = 'Entrez un mot de passe pour votre serveur SMTP seulement si n�cessaire';

$lang['Disable_privmsg'] = 'Messagerie Priv�e';
$lang['Inbox_limits'] = 'Messages Max dans la Bo�te de r�ception';
$lang['Sentbox_limits'] = 'Messages Max dans la Bo�te des messages envoy�s';
$lang['Savebox_limits'] = 'Message Max dans la Bo�te des Archives';

$lang['Cookie_settings'] = 'Options du Cookie';
$lang['Cookie_settings_explain'] = 'Ces d�tails d�finissent la mani�re dont les cookies sont envoy�s au navigateur internet des utilisateurs. Dans la majeure partie des cas, les valeurs par d�faut devraient �tre suffisantes. Si vous avez besoin de les modifier, faites le avec pr�caution -- des valeurs incorrectes pourraient emp�cher les utilisateurs de se connecter.';
$lang['Cookie_domain'] = 'Domaine du cookie';
$lang['Cookie_name'] = 'Nom du cookie';
$lang['Cookie_path'] = 'Chemin du cookie';
$lang['Cookie_secure'] = 'Cookie s�curis�';
$lang['Cookie_secure_explain'] = 'Si votre serveur fonctionne via SSL, activez cette fonction, sinon laissez l� d�sactiv�e';
$lang['Session_length'] = 'Dur�e de la session [ secondes ]';


//
// Forum Management
//
$lang['Forum_admin'] = 'Administration des Forums';
$lang['Forum_admin_explain'] = 'Depuis ce panneau de contr�le, vous pouvez ajouter, supprimer, �diter, r�ordonner et resynchroniser vos cat�gories et forums.';
$lang['Edit_forum'] = 'Editer un forum';
$lang['Create_forum'] = 'Cr�er un nouveau forum';
$lang['Create_category'] = 'Cr�er une nouvelle cat�gorie';
$lang['Remove'] = 'Enlever';
$lang['Action'] = 'Action';
$lang['Update_order'] = 'Mettre � jour l\'Ordre';
$lang['Config_updated'] = 'Configuration du Forum mise � jour avec succ�s';
$lang['Edit'] = 'Editer';
$lang['Delete'] = 'Supprimer';
$lang['Move_up'] = 'Monter';
$lang['Move_down'] = 'Descendre';
$lang['Resync'] = 'Resynchroniser';
$lang['No_mode'] = 'Aucun mode n\'a �t� d�fini';
$lang['Forum_edit_delete_explain'] = 'Le formulaire ci-dessous vous permettra de personnaliser toutes les options g�n�rales du forum. Pour les configurations Utilisateurs et Forums, utilisez les liens relatifs dans le volet de gauche.';

$lang['Move_contents'] = 'D�placer tout le contenu vers';
$lang['Forum_delete'] = 'Supprimer un Forum';
$lang['Forum_delete_explain'] = 'Le formulaire ci-dessous vous permettra de supprimer un forum (ou une cat�gorie) et d�cider o� vous voulez mettre les messages (ou les forums) qu\'il contenait.';

$lang['Status_locked'] = 'Verrouill�';
$lang['Status_unlocked'] = 'D�verrouill�';
$lang['Forum_settings'] = 'Options G�n�rales des Forums';
$lang['Forum_name'] = 'Nom du Forum';
$lang['Forum_desc'] = 'Description';
$lang['Forum_status'] = 'Statut du forum';
$lang['Forum_pruning'] = 'Auto-d�lestage';

$lang['prune_freq'] = 'V�rifier l\'age des sujets tous les ';
$lang['prune_days'] = 'Retirer les sujets n\'ayant pas eu de r�ponses depuis';
$lang['Set_prune_data'] = 'Vous avez activer l\'auto-d�lestage pour ce forum mais n\'avez pas d�fini une fr�quence ou un nombre de jours � d�lester. Veuillez revenir en arri�re et le faire';

$lang['Move_and_Delete'] = 'D�placer et Supprimer';

$lang['Delete_all_posts'] = 'Supprimer tous les messages';
$lang['Nowhere_to_move'] = 'Nul part o� d�placer';

$lang['Edit_Category'] = 'Editer une Cat�gorie';
$lang['Edit_Category_explain'] = 'Utilisez ce formulaire pour modifer le nom d\'une cat�gorie.';

$lang['Forums_updated'] = 'Informations du Forum et de la Cat�gorie mises � jour avec succ�s';

$lang['Must_delete_forums'] = 'Vous devez supprimer tous vos forums avant de pouvoir supprimer cette cat�gorie';

$lang['Click_return_forumadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Forums';


//
// Smiley Management
//
$lang['smiley_title'] = 'Utilitaire d\'Edition des Smilies';
$lang['smile_desc'] = 'Depuis cette page vous pouvez ajouter, retirer et �diter les �motic�nes ou smilies que les utilisateurs utilisent dans leurs messages et messages priv�s.';

$lang['smiley_config'] = 'Configuration des Smilies';
$lang['smiley_code'] = 'Code du Smiley';
$lang['smiley_url'] = 'Fichier Image du Smiley';
$lang['smiley_emot'] = 'Emoticon du Smiley';
$lang['smile_add'] = 'Ajouter un nouveau Smiley';
$lang['Smile'] = 'Smile';
$lang['Emotion'] = 'Emotion';

$lang['Select_pak'] = 'Selectionner le Fichier Pack (.pak)';
$lang['replace_existing'] = 'Remplacer les Smilies existants';
$lang['keep_existing'] = 'Conserver les Smilies existants';
$lang['smiley_import_inst'] = 'Vous devez d�zipper le pack de smilies et envoyer tous les fichiers dans le r�pertoire de Smilies appropri� pour l\'installation. Ensuite s�lectionnez les informations correctes dans ce formulaire pour pour importer le pack de smilies.';
$lang['smiley_import'] = 'Importer un Pack de Smilies';
$lang['choose_smile_pak'] = 'Choisir un Pack de Smilies, fichier .pak';
$lang['import'] = 'Importer les Smilies';
$lang['smile_conflicts'] = 'Que doit-il �tre fait en cas de conflits ?';
$lang['del_existing_smileys'] = 'Supprimer les smilies existants avant l\'importation';
$lang['import_smile_pack'] = 'Importer un Pack de Smilies';
$lang['export_smile_pack'] = 'Cr�er un Pack de Smilies';
$lang['export_smiles'] = 'Pour cr�er un pack de smilies � partir de vos smilies actuellement install�s, cliquez %sici%s pour t�l�charger le fichier .pak de smilies. Nommez ce fichier de fa�on appropri�e afin de vous assurer de conserver l\'extension de fichier .pak. Ensuite, cr�ez un fichier zip contenant toutes les images de vos smilies plus le fichier de configuration .pak.';

$lang['smiley_add_success'] = 'Le Smiley a �t� ajout� avec succ�s';
$lang['smiley_edit_success'] = 'Le Smiley a �t� mis � jour avec succ�s';
$lang['smiley_import_success'] = 'Le Pack de Smilies a �t� import� avec succ�s !';
$lang['smiley_del_success'] = 'Le Smiley a �t� retir� avec succ�s';
$lang['Click_return_smileadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Smilies';


//
// User Management
//
$lang['User_admin'] = 'Administration des Utilisateurs';
$lang['User_admin_explain'] = 'Ici, vous pouvez changer les informations des utilisateurs et certaines options sp�cifiques. Pour modifier les permissions des utilisateurs, veuillez utiliser le syst�me de permissions d\'utilisateurs et de groupes.';

$lang['Look_up_user'] = 'Rechercher l\'utilisateur';

$lang['Admin_user_fail'] = 'Impossible de mettre � jour le profil de l\'utilisateur.';
$lang['Admin_user_updated'] = 'Le profil de l\'utilisateur a �t� mis � jour avec succ�s.';
$lang['Click_return_useradmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Utilisateurs';

$lang['User_delete'] = 'Supprimer cet utilisateur';
$lang['User_delete_explain'] = 'Cliquez ici pour supprimer cet utilisateur; ceci ne peut pas �tre r�tabli.';
$lang['User_deleted'] = 'L\'utilisateur a �t� supprim� avec succ�s.';

$lang['User_status'] = 'L\'utilisateur est actif';
$lang['User_allowpm'] = 'Peut envoyer des Messages Priv�s';
$lang['User_allowavatar'] = 'Peut afficher un avatar';

$lang['Admin_avatar_explain'] = 'Ici vous pouvez voir et supprimer l\'avatar actuel de l\'utilisateur.';

$lang['User_special'] = 'Champs sp�ciaux pour administrateurs uniquement';
$lang['User_special_explain'] = 'Ces champs ne peuvent pas �tre modif�es par l\'utilisateur. Ici, vous pouvez d�finir leur statut et d\'autres options non donn�es aux utilisateurs.';


//
// Group Management
//
$lang['Group_administration'] = 'Administration des Groupes';
$lang['Group_admin_explain'] = 'Depuis ce panneau, vous pouvez administrer tous vos groupes d\'utilisateurs, vous pouvez : supprimer, cr�er et �diter les groupes existants. Vous pouvez choisir des mod�rateurs, alterner le statut ouvert/ferm� d\'un groupe et d�finir le nom  et la description d\'un groupe';
$lang['Error_updating_groups'] = 'Il y a eu une erreur durant la mise � jour des groupes';
$lang['Updated_group'] = 'Le groupe a �t� mis � jour avec succ�s';
$lang['Added_new_group'] = 'Le nouveau groupe a �t� cr�� avec succ�s';
$lang['Deleted_group'] = 'Le groupe a �t� supprim� avec succ�s';
$lang['New_group'] = 'Cr�er un nouveau groupe';
$lang['Edit_group'] = 'Editer un groupe';
$lang['group_name'] = 'Nom du groupe';
$lang['group_description'] = 'Description du groupe';
$lang['group_moderator'] = 'Mod�rateur du groupe';
$lang['group_status'] = 'Statut du groupe';
$lang['group_open'] = 'Groupe ouvert';
$lang['group_closed'] = 'Groupe ferm�';
$lang['group_hidden'] = 'Groupe invisible';
$lang['group_delete'] = 'Supprimer un groupe';
$lang['group_delete_check'] = 'Supprimer ce groupe';
$lang['submit_group_changes'] = 'Envoyer les modifications';
$lang['reset_group_changes'] = 'Remettre � zero';
$lang['No_group_name'] = 'Vous devez sp�cifier un nom pour ce groupe';
$lang['No_group_moderator'] = 'Vous devez sp�cifier un mod�rateur pour ce groupe';
$lang['No_group_mode'] = 'Vous devez sp�cifier un mode pour ce groupe, ouvert ou ferm�';
$lang['No_group_action'] = 'Aucune action n\'a �t� sp�cifi�e';
$lang['delete_group_moderator'] = 'Supprimer l\'ancien mod�rateur du groupe ?';
$lang['delete_moderator_explain'] = 'Si vous changez le mod�rateur du groupe, cochez cette case pour enlever l\'ancien mod�rateur de ce groupe. Sinon, vous pouvez ne pas la cocher, et l\'utilisateur deviendra un membre r�gulier de ce groupe.';
$lang['Click_return_groupsadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Groupes.';
$lang['Select_group'] = 'S�lectionner un groupe';
$lang['Look_up_group'] = 'Rechercher le groupe';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'D�lester un Forum';
$lang['Forum_Prune_explain'] = 'Ceci supprimera tous les sujets n\'ayant pas eu de r�ponses depuis le nombre de jours que vous aurez choisi. Si vous n\'entrez pas de nombre, tous les sujets seront supprim�s. Par contre cela ne supprimera ni les sujets dans lesquels un sondage est encore en cours, ni les annonces. Vous devrez supprimer ces sujets manuellement.';
$lang['Do_Prune'] = 'Faire le D�lestage';
$lang['All_Forums'] = 'Tous les Forums';
$lang['Prune_topics_not_posted'] = 'D�lester les sujets sans r�ponses depuis cette p�riode (en jours)';
$lang['Topics_pruned'] = 'Sujets d�lest�s';
$lang['Posts_pruned'] = 'Messages d�lest�s';
$lang['Prune_success'] = 'Le d�lestage des forums s\'est d�roul� avec succ�s';


//
// Word censor
//
$lang['Words_title'] = 'Censure des Mots';
$lang['Words_explain'] = 'Depuis ce panneau de contr�le, vous pouvez ajouter, �diter, et retirer les mots qui seront automatiquement censur�s sur vos forums. De plus, les gens ne seront pas autoris�s � s\'inscrire avec des noms d\'utilisateurs contenant ces mots. Les jokers (*) sont accept�s dans le champ \'Mot\', ex : *test* concordera avec detestable, test* concordera avec testing, et *test avec detest.';
$lang['Word'] = 'Mot';
$lang['Edit_word_censor'] = 'Editer la censure du mot';
$lang['Replacement'] = 'Remplacement';
$lang['Add_new_word'] = 'Ajouter un nouveau mot';
$lang['Update_word'] = 'Mettre � jour la censure du mot';

$lang['Must_enter_word'] = 'Vous devez entrer un mot et son rempla�ant';
$lang['No_word_selected'] = 'Aucun mot s�lectionn� pour l\'�dition';

$lang['Word_updated'] = 'Le mot censur� s�lectionn� a �t� mis � jour avec succ�s';
$lang['Word_added'] = 'Le mot censur� a �t� ajout� avec succ�s';
$lang['Word_removed'] = 'Le mot censur� s�lectionn� a �t� retir� avec succ�s';

$lang['Click_return_wordadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration de la Censure des Mots';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Ici, vous pouvez envoyer le m�me e-mail � tous les utilisateurs du forum ou seulement � ceux d\'un groupe donn�. Pour ce faire, un e-mail sera envoy� en copie cach�e � partir de l\'adresse e-mail d\'administration vers ses destinataires. L\'envoi massif d\'e-mail prend un certain temps, soyez patients apr�s l\'envoi et n\'interrompez pas le chargement de la page, vous serez averti automatiquement de la fin de l\'op�ration.';
$lang['Compose'] = 'Composer';

$lang['Recipients'] = 'Destinataires';
$lang['All_users'] = 'Tous les Utilisateurs';

$lang['Email_successfull'] = 'Votre message a �t� envoy�';
$lang['Click_return_massemail'] = 'Cliquez %sici%s pour revenir au formulaire de l\'E-mail de Masse';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administration des Rangs';
$lang['Ranks_explain'] = 'En utilisant ce formulaire vous pouvez ajouter, �diter, voir et supprimer des rangs. Vous pouvez �galement cr�er des rangs personnalis�s qui pourront �tre assign�s � des utilisateurs sp�cifiques par l\'outil de Gestion des Utilisateurs';

$lang['Add_new_rank'] = 'Ajouter un nouveau rang';

$lang['Rank_title'] = 'Titre du Rang';
$lang['Rank_special'] = 'D�finir en tant que Rang Sp�cial';
$lang['Rank_minimum'] = 'Messages Minimum';
$lang['Rank_maximum'] = 'Messages Maximum';
$lang['Rank_image'] = 'Image du Rang (relatif au chemin de phpBB2)';
$lang['Rank_image_explain'] = 'Utilisez ceci pour associer une petite image avec le rang en question';

$lang['Must_select_rank'] = 'Vous devez s�lectionner un rang';
$lang['No_assigned_rank'] = 'Aucun rang sp�cial assign�';

$lang['Rank_updated'] = 'Le rang a �t� mis � jour avec succ�s';
$lang['Rank_added'] = 'Le rang a �t� ajout� avec succ�s';
$lang['Rank_removed'] = 'Le rang a �t� supprim� avec succ�s';
$lang['No_update_ranks'] = 'Le rang a �t� supprim� avec succ�s, toutefois, les comptes des utilisateurs n\'ont pas �t� mis � jour. Vous devrez remettre � z�ro manuellement leur rang.';

$lang['Click_return_rankadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Rangs';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Contr�le des Noms d\'utilisateurs Interdits';
$lang['Disallow_explain'] = 'Ici, vous pouvez contr�ler les noms d\'utilisateurs qui seront interdits � l\'usage. Les noms d\'utilisateurs interdits peuvent contenir un caract�re joker (*). Veuillez noter que vous ne pourrez pas interdire un nom d\'utilisateur d�j� enregistr�, vous devrez d\'abord supprimer le compte de l\'utilisateur et ensuite interdire le nom d\'utilisateur';

$lang['Delete_disallow'] = 'Supprimer';
$lang['Delete_disallow_title'] = 'Retirer un Nom d\'utilisateur Interdit';
$lang['Delete_disallow_explain'] = 'Vous pouvez retirer un nom d\'utilisateur interdit en s�lectionnant le nom d\'utilisateur depuis la liste et en cliquant sur Supprimer';

$lang['Add_disallow'] = 'Ajouter';
$lang['Add_disallow_title'] = 'Ajouter un nom d\'utilisateur interdit';
$lang['Add_disallow_explain'] = 'Vous pouvez interdire un nom d\'utilisateur en utilisant le caract�re joker *';

$lang['No_disallowed'] = 'Aucun Nom d\'utilisateur Interdit';

$lang['Disallowed_deleted'] = 'Le nom d\'utilisateur interdit a �t� retir� avec succ�s';
$lang['Disallow_successful'] = 'Le nom d\'utilisateur interdit a �t� ajout� avec succ�s';
$lang['Disallowed_already'] = 'Le nom que vous avez entr� ne peut �tre interdit. Soit il existe d�j� dans la liste, soit il est dans la liste des mots censur�s, ou soit il est d�j� enregistr�';

$lang['Click_return_disallowadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Noms d\'utilisateurs Interdits';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administration des Th�mes';
$lang['Styles_explain'] = 'En utilisant cet outil, vous pouvez ajouter, �diter, supprimer et g�rer les th�mes (mod�les de documents et th�mes) disponibles aupr�s des utilisateurs.';
$lang['Styles_addnew_explain'] = 'La liste suivante contient tous les th�mes actuellement disponibles pour le mod�le de document courant. Les �l�ments sur cette liste n\'ont pas encore �t� install�s dans la base de donn�es de phpBB. Pour installer un th�me, il suffit de cliquer sur le lien \'Installer\' � c�t� d\'une entr�e';

$lang['Select_template'] = 'S�lectionner un Mod�le de document';

$lang['Style'] = 'Th�me';
$lang['Template'] = 'Mod�le de document';
$lang['Install'] = 'Installer';
$lang['Download'] = 'T�l�charger';

$lang['Edit_theme'] = 'Editer un Th�me';
$lang['Edit_theme_explain'] = 'Dans le formulaire ci-dessous, vous pouvez �diter les param�tres pour le th�me s�lectionn�';

$lang['Create_theme'] = 'Cr�er un Th�me';
$lang['Create_theme_explain'] = 'Utilisez le formulaire ci-dessous pour cr�er un nouveau th�me pour un mod�le de document s�lectionn�. Lorsque vous entrerez les couleurs (pour lesquelles vous devrez utiliser une notation hexad�cimale), vous ne devrez pas inclure le # initial, ex : CCCCCC est valide, #CCCCCC ne l\'est pas';

$lang['Export_themes'] = 'Exporter des Th�mes';
$lang['Export_explain'] = 'Dans ce panneau, vous pourrez exporter les donn�es de ce th�me pour un mod�le de document s�lectionn�. S�lectionnez le mod�le de document depuis la liste ci-dessous, et le script cr��ra le fichier de configuration du th�me et essaiera de le copier dans le r�pertoire s�lectionn� des mod�les de documents. S\'il ne peut pas le copier lui-m�me, il vous proposera de le t�l�charger. Afin que le script puisse copier le fichier, vous devez donner les droits d\'�criture pour le r�pertoire sur le serveur. Pour plus d\'informations � propos de cela, allez voir le Guide de l\'utilisateur de phpBB 2.';

$lang['Theme_installed'] = 'Le th�me s�lectionn� a �t� install� avec succ�s';
$lang['Style_removed'] = 'Le th�me s�lectionn� a �t� retir� de la base de donn�es. Pour enlever compl�tement ce th�me de votre syst�me, vous devez supprimer les fichiers appropri�s dans le r�pertoire du mod�le de document.';
$lang['Theme_info_saved'] = 'Les informations du th�me pour le mod�le de document s�lectionn� ont �t� sauvegard�es. Vous devriez restreindre les permissions du fichier theme_info.cfg (et si possible dans le r�pertoire du mod�le de document s�lectionn�) � la lecture seule';
$lang['Theme_updated'] = 'Le th�me s�lectionn� a �t� mis � jour. Vous devriez exporter maintenant les nouveaux param�tres du th�me';
$lang['Theme_created'] = 'Th�me cr��. Vous devriez exporter maintenant le th�me vers le fichier de configuration du th�me pour le conserver en lieu s�r ou l\'utiliser ailleurs';

$lang['Confirm_delete_style'] = 'Etes-vous s�r de vouloir supprimer ce th�me';

$lang['Download_theme_cfg'] = 'L\'exportateur n\'arrive pas � �crire le fichier des informations du th�me. Cliquez sur le bouton ci-dessous pour t�l�charger ce fichier avec votre navigateur internet. Une fois t�l�charg�, vous pourrez le transf�rer vers le r�pertoire contenant les mod�les de documents. Vous pourrez ensuite cr�er un pack des fichiers pour le distribuer ou l\'utiliser ailleurs si vous le d�sirez';
$lang['No_themes'] = 'Le mod�le de document que vous avez s�lectionn� n\'a pas de th�me. Pour cr�er un nouveau th�me, cliquez sur Cr�er un Nouveau Th�me sur le volet de gauche';
$lang['No_template_dir'] = 'Impossible d\'ouvrir le r�pertoire du mod�le de document. Il peut �tre illisible par le serveur ou ne pas exister';
$lang['Cannot_remove_style'] = 'Vous ne pouvez pas enlever le th�me s�lectionn� tant qu\'il est utilis� par le forum en tant que th�me par d�faut. Veuillez changer le th�me par d�faut et r�essayer.';
$lang['Style_exists'] = 'Le nom du th�me choisi existe d�j�, veuillez revenir en arri�re et choisir un nom diff�rent.';

$lang['Click_return_styleadmin'] = 'Cliquez %sici%s pour revenir � l\'Administration des Th�mes';

$lang['Theme_settings'] = 'Option du Th�me';
$lang['Theme_element'] = 'El�ment du Th�me';
$lang['Simple_name'] = 'Nom Simple';
$lang['Value'] = 'Valeur';
$lang['Save_Settings'] = 'Sauver les Param�tres';

$lang['Stylesheet'] = 'Feuille de style CSS';
$lang['Background_image'] = 'Image de Fond';
$lang['Background_color'] = 'Couleur de Fond';
$lang['Theme_name'] = 'Nom du Th�me';
$lang['Link_color'] = 'Couleur du Lien';
$lang['Text_color'] = 'Couleur du Texte';
$lang['VLink_color'] = 'Couleur du Lien Visit�';
$lang['ALink_color'] = 'Couleur du Lien Actif';
$lang['HLink_color'] = 'Couleur du Lien survol�';
$lang['Tr_color1'] = 'Table Rang�e Couleur 1';
$lang['Tr_color2'] = 'Table Rang�e Couleur 2';
$lang['Tr_color3'] = 'Table Rang�e Couleur 3';
$lang['Tr_class1'] = 'Table Rang�e Class 1';
$lang['Tr_class2'] = 'Table Rang�e Class 2';
$lang['Tr_class3'] = 'Table Rang�e Class 3';
$lang['Th_color1'] = 'Table En-t�te Couleur 1';
$lang['Th_color2'] = 'Table En-t�te Couleur 2';
$lang['Th_color3'] = 'Table En-t�te Couleur 3';
$lang['Th_class1'] = 'Table En-t�te Class 1';
$lang['Th_class2'] = 'Table En-t�te Class 2';
$lang['Th_class3'] = 'Table En-t�te Class 3';
$lang['Td_color1'] = 'Table Cellule Couleur 1';
$lang['Td_color2'] = 'Table Cellule Couleur 2';
$lang['Td_color3'] = 'Table Cellule Couleur 3';
$lang['Td_class1'] = 'Table Cellule Class 1';
$lang['Td_class2'] = 'Table Cellule Class 2';
$lang['Td_class3'] = 'Table Cellule Class 3';
$lang['fontface1'] = 'Nom de la Police 1';
$lang['fontface2'] = 'Nom de la Police 2';
$lang['fontface3'] = 'Nom de la Police 3';
$lang['fontsize1'] = 'Taille Police 1';
$lang['fontsize2'] = 'Taille Police 2';
$lang['fontsize3'] = 'Taille Police 3';
$lang['fontcolor1'] = 'Couleur Police 1';
$lang['fontcolor2'] = 'Couleur Police 2';
$lang['fontcolor3'] = 'Couleur Police 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Taille Image Sondage [px]';
$lang['img_pm_size'] = 'Tauille Statut Message Priv� [px]';

//
// Install Process
//
$lang['Welcome_install'] = 'Bienvenue � l\'Installation de phpBB 2';
$lang['Initial_config'] = 'Configuration de Base';
$lang['DB_config'] = 'Configuration de la Base de donn�es';
$lang['Admin_config'] = 'Configuration du compte Administrateur';
$lang['continue_upgrade'] = 'Une fois que vous avez t�l�charg� le fichier config vers votre ordinateur, vous pouvez cliquer sur le boutton \'Continuer la Mise � jour\' ci-dessous pour progresser dans le processus de mise � jour. Veuillez attendre la fin du processus de mise � jour avant d\'envoyer le fichier config.';
$lang['upgrade_submit'] = 'Continuer la Mise � jour';

$lang['Installer_Error'] = 'Une erreur s\'est produite durant l\'installation';
$lang['Previous_Install'] = 'Une installation pr�c�dente a �t� d�tect�e';
$lang['Install_db_error'] = 'Une erreur s\'est produite en essayant de mettre � jour la base de donn�es';

$lang['Re_install'] = 'Votre installation pr�c�dente est toujours active. <br /><br />Si vous voulez r�installer phpBB 2, cliquez sur le bouton Oui ci-dessous. Vous �tes conscient qu\'en faisant cela, vous d�truirez toutes les donn�es existantes, aucune sauvegarde ne sera faites ! le nom d\'utilisateur de l\'administrateur et le mot de passe que vous utilisez pour vous connecter au forum sera recr�� apr�s la r�installation, rien d\'autre ne sera fait conserv�. <br /><br />R�fl�chissez bien avant d\'appuyer sur Oui!';

$lang['Inst_Step_0'] = 'Merci d\'avoir choisi phpBB 2. Afin d\'achever cette installation, veuillez remplir les d�tails demand�s ci-dessous. Veuillez noter que la base de donn�es dans laquelle vous installez devrait d�j� exister. Si vous �tes en train d\'installer sur une base de donn�es qui utilise ODBC, MS Access par exemple, vous devez d\'abord lui cr�er un SGBD avant de continuer.';

$lang['Start_Install'] = 'D�marrer l\'Installation';
$lang['Finish_Install'] = 'Finir l\'Installation';

$lang['Default_lang'] = 'Langue par D�faut du Forum';
$lang['DB_Host'] = 'Nom du Serveur de Base de donn�es / SGBD';
$lang['DB_Name'] = 'Nom de votre Base de donn�es';
$lang['DB_Username'] = 'Nom d\'utilisateur';
$lang['DB_Password'] = 'Mot de passe';
$lang['Database'] = 'Votre Base de donn�es';
$lang['Install_lang'] = 'Choisissez la Langue pour l\'Installtion';
$lang['dbms'] = 'Type de la Base de donn�es';
$lang['Table_Prefix'] = 'Pr�fixe des tables';
$lang['Admin_Username'] = 'Nom d\'utilisateur';
$lang['Admin_Password'] = 'Mot de passe';
$lang['Admin_Password_confirm'] = 'Mot de passe [ Confirmer ]';

$lang['Inst_Step_2'] = 'Votre compte d\'administration a �t� cr��. A ce point, l\'installation de base est termin�e. Vous allez �tre redirig� vers une nouvelle page qui vous permettra d\'administrer votre nouvelle installation. Veuillez vous assurer de v�rifier les d�tails de la Configuration G�n�rale et d\'op�rer les changements qui s\'imposent. Merci d\'avoir choisi phpBB 2.';

$lang['Unwriteable_config'] = 'Votre fichier config est en lecture seule actuellement. Une copie du fichier config va vous �tre propos� en t�l�chargement apr�s avoir avoir cliqu� sur le boutton ci-dessous. Vous devrez envoyer ce fichier dans le m�me r�pertoire o� est install� phpBB 2. Une fois termin�, vous pourrez vous connecter en utilisant vos nom d\'utilisateur et mot de passe d\'administrateur que vous avez fourni pr�c�demment, et visiter le Panneau d\'Administration (un lien appara�tra en bas de chaque page une fois connect�) pour v�rifier la Configuration G�n�rale. Merci d\'avoir choisi phpBB 2.';
$lang['Download_config'] = 'T�l�charger Config';

$lang['ftp_choose'] = 'Choisir le M�thode de T�l�chargement';
$lang['ftp_option'] = '<br />Tant que les extensions FTP seront activ�s dans cette version de PHP, l\'option d\'essayer d\'envoyer automatiquement le fichier config sur un ftp peut vous �tre donn�e.';
$lang['ftp_instructs'] = 'Vous avez choisi de transf�rer automatiquement via FTP le fichier vers le compte contenant phpBB 2. Veuillez compl�ter les informtions ci-dessous afin de faciliter cette op�ration. Notez que le chemin FTP doit �tre le chemin exact vers le r�pertoire o� est install� phpBB2 comme si vous �tiez en train d\'envoyer le fichier avec n\'importe quel client FTP.';
$lang['ftp_info'] = 'Entrez vos informations FTP';
$lang['Attempt_ftp'] = 'Essayer de transf�rer config vers un serveur ftp';
$lang['Send_file'] = 'Juste m\'envoyer le fichier et je l\'enverrai manuellement sur le serveur ftp';
$lang['ftp_path'] = 'Chemin de phpBB2 FTP';
$lang['ftp_username'] = 'Votre Nom d\'utilisateur FTP';
$lang['ftp_password'] = 'Votre Mot de passe FTP';
$lang['Transfer_config'] = 'D�marrer le Transfert';
$lang['NoFTP_config'] = 'La tentative d\'envoi du fichier config par FTP a �chou�. Veuillez t�l�charger le fichier config et l\'envoyer manuellement sur votre serveur FTP.';

$lang['Install'] = 'Installation';
$lang['Upgrade'] = 'Mise � jour';

$lang['Install_Method'] = 'Choix du type d\'installation';

$lang['Install_No_Ext'] = 'La configuration de php sur votre serveur ne supporte pas le type de base de donn�es que vous avez choisi';

$lang['Install_No_PCRE'] = 'phpBB2 requiert le support des expressions r�guli�res Perl pour PHP, mais votre configuration de PHP ne le supporte apparemment pas !';

//
// That's all Folks!
// -------------------------------------------------

?>