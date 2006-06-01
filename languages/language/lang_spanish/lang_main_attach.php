<?php
/***************************************************************************
 *                            lang_main_attach.php [Spanish]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_main_attach.php,v 1.1 2003/02/21 06:18:30 bob Exp $
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
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = '<b>Puede</b> adjuntar archivos en este foro';
$lang['Rules_attach_cannot'] = '<b>No puede</b> adjuntar archivos en este foro';
$lang['Rules_download_can'] = '<b>Puede</b> descargar archivos de este foro';
$lang['Rules_download_cannot'] = '<b>No Puede</b> descargar archivos de este foro';
$lang['Sorry_auth_view_attach'] = 'Lo sentimos pero no tiene autorizacion para ver este archivo adjunto';

// Viewtopic -> Display of Attachments
$lang['Description'] = 'Descripcion'; // used in Administration Panel too...
$lang['Downloaded'] = 'Descargado';
$lang['Download'] = 'Descargar'; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = 'Tamaño';
$lang['Viewed'] = 'Visto';
$lang['Download_number'] = '%d veces'; // replace %d with count
$lang['Extension_disabled_after_posting'] = 'La extension \'%s\' no esta habilitada, este adjunto no sera mostrado hasta que un administrador habilite la extension.'; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = 'Panel de control de publicacion de adjuntos';
$lang['Attach_posting_cp_explain'] = 'Si clickeas en Agregar un adjunto, veras el cuadro para agregar adjuntos.<br />Si clickeas en adjuntos publicados, veras una lista de archivos adjuntados. Podras editar estos.<br />Si queres remplazar (Subir una nueva version), tendras que clickear dos links. Agregue el adjunto como lo haria normalmente, de ahi en adelante no haga click en Agregar Adjunto, haga click en Actualizar Version junto al adjunto que quiere actualizar.';

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = 'Agregar un Adjunto';
$lang['Add_attachment_title'] = 'Agregar un Adjunto';
$lang['Add_attachment_explain'] = 'Si no quieres agregar archivos adjuntos a tu mensaje deja en blanco estos campos';
$lang['File_name'] = 'Nombre del archivo';
$lang['File_comment'] = 'Comentario del archivo';

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = 'Adjuntos agregados';
$lang['Options'] = 'Opciones';
$lang['Update_comment'] = 'Actualizar comentario';
$lang['Delete_attachments'] = 'Eliminar adjuntos';
$lang['Delete_attachment'] = 'Eliminar adjunto';
$lang['Delete_thumbnail'] = 'Eliminar imagen preliminar';
$lang['Upload_new_version'] = 'Subir nueva version';

// Errors -> Posting Attachments
$lang['Invalid_filename'] = '%s es un nombre no valido'; // replace %s with given filename
$lang['Attachment_php_size_na'] = 'El adjunto es muy grande.<br />No se pudo determinar cuanto es el maximo soportado por php.<br />El File Attachment mod no pudo determinar el tamaño maximo en el php.ini';
$lang['Attachment_php_size_overrun'] = 'El adjunto es muy grande.<br />El tamaño maximo de subida son: %d MB.<br />Nota que esto esta definido en el php.ini, por lo tanto no hay manera de que el Attachment MOD pueda pasar este tamaño'; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = 'La extension %s no esta permitida'; // replace %s with extension (e.g. .php) 
$lang['Disallowed_extension_within_forum'] = 'No puede publicar mensajes con adjuntos con la extension %s en este foro'; // replace %s with the Extension
$lang['Attachment_too_big'] = 'El adjunto es demasiado grande.<br />El tamaño maximo es: %d %s'; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = 'Lo sentimos pero el tamaño total de adjuntos esta completo, comunicate con un administrador para mas informacion';
$lang['Too_many_attachments'] = 'No se pueden agregar mas adjuntos porque el maximo de %d ha sido alcanzado'; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = 'La imagen no puede tener mas de %d pixeles de ancho y %d pixeles de largo'; 
$lang['General_upload_error'] = 'Error: no se ha podido subir adjunto a %s.'; // replace %s with local path

$lang['Error_empty_add_attachbox'] = 'Tienes que ingresar algo en el camp \'Agregar un adjunto\'';
$lang['Error_missing_old_entry'] = 'Mo se ha podido actualizar el adjunto, no se ha podido encontrar la entrada anterior.';

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = 'Lo sentimos pero ha alcanzado el limite de mensajes privados en sus carpetas. Pro favot borre algunos adjuntos de su carpeta enviados por ejemplo.';
$lang['Attach_quota_receiver_pm_reached'] = 'Lo sentimos pero el destinatario ha alcanzado el limite de mensajes privados en sus carpetas. Avisale que borre algo para poder enviarle los archivos.';

// Errors -> Download
$lang['No_attachment_selected'] = 'No has seleccionado un archivo para ver o bajar';
$lang['Error_no_attachment'] = 'El adjunto selccionado no existe';

// Delete Attachments
$lang['Confirm_delete_attachments'] = '¿Esta seguro que desea borrar los archivos adjuntos?';
$lang['Deleted_attachments'] = 'Los adjuntos seleccionados han sido borrados.';
$lang['Error_deleted_attachments'] = 'No se han podido borrar los archivos adjutos';
$lang['Confirm_delete_pm_attachments'] = '¿Esta seguro que desea borrar todos los archivos adjuntos que hay en este mensaje privado?';

// General Error Messages
$lang['Attachment_feature_disabled'] = 'Los archivos adjuntos estan deshabilitados';

$lang['Directory_does_not_exist'] = 'El direcotrio \'%s\' no existe o no se ha podido acceder.'; // replace %s with directory
$lang['Directory_is_not_a_dir'] = 'Comprueba si \'%s\' es un directorio.'; // replace %s with directory
$lang['Directory_not_writeable'] = 'No se ha podido escribir en \'%s\'.Tienes que poner los permisos del directorio en 777.'; // replace %s with directory

$lang['Ftp_error_connect'] = 'No se ha podido conectar al servidor FTP: \'%s\'. Por favor comprueba la configuracion FTP';
$lang['Ftp_error_login'] = 'No se ha podido entrar al servidor. El usuario \'%s\' o la contraseña son incorrectos.';
$lang['Ftp_error_path'] = 'No se ha podido acceder al directorio: \'%s\'. Chequea las configuraciones FTP';
$lang['Ftp_error_upload'] = 'No se pueden subir archivos al servidor FTP: \'%s\'. Chequea las configuraciones FTP.';
$lang['Ftp_error_delete'] = 'No se pueden eliminar archivos: \'%s\'. Chequea las configuraciones FTP.<br />Es probable que el adjunto no exista.';
$lang['Ftp_error_pasv_mode'] = 'No se ha podido habilitar o deshabilitar el modo pasivo del FTP';

// Attach Rules Window
$lang['Rules_page'] = 'Reglas de los Adjuntos';
$lang['Attach_rules_title'] = 'Extensiones y tamaños permitidos';
$lang['Group_rule_header'] = '%s -> Tamaño maximo de subida: %s'; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = 'Extensiones y tamaños permitidos';
$lang['Note_user_empty_group_permissions'] = 'NOTE:<br />You are normally allowed to attach files within this Forum, <br />but since no Extension Group is allowed to be attached here, <br />you are unable to attach anything. If you try, <br />you will receive an Error Message.<br />';

// Quota Variables
$lang['Upload_quota'] = 'Cuota';
$lang['Pm_quota'] = 'Cuota de mensajes privados';
$lang['User_upload_quota_reached'] = 'Lo sentimos pero has alcanzado el limite de tu cuota de %d %s'; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = 'Panel de control de adjuntos del usuario';
$lang['UACP'] = 'Panel de control de adjuntos del usuario';
$lang['User_uploaded_profile'] = 'Subidos: %s';
$lang['User_quota_profile'] = 'Cuota: %s';
$lang['Upload_percent_profile'] = '%d%% del total';

// Common Variables
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['Attach_search_query'] = 'Buscar Adjuntos';
$lang['Test_settings'] = 'Probar configuracion';
$lang['Not_assigned'] = 'Sin asignar';
$lang['No_file_comment_available'] = 'Sin comentario';
$lang['Attachbox_limit'] = 'Estas usando el %d%% de tu cuota';
$lang['No_quota_limit'] = 'Sin limite de couta';
$lang['Unlimited'] = 'Ilimitado';

?>