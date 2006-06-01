<?php
/***************************************************************************
 *                            lang_admin_attach.php [Spanish]
 *                              -------------------
 *     begin                : Thu Feb 07 2002
 *     copyright            : (C) 2002 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_admin_attach.php,v 1.1 2003/02/21 06:18:30 bob Exp $
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
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Panel de Control';
$lang['Shadow_attachments'] = 'Adjuntos Sombreados';
$lang['Forbidden_extensions'] = 'Extensiones Prohibidas';
$lang['Extension_control'] = 'Control de Extensiones';
$lang['Extension_group_manage'] = 'Control de grupos de extensiones';
$lang['Special_categories'] = 'Categorias Especiales';
$lang['Sync_attachments'] = 'Sincronizar Adjuntos';
$lang['Quota_limits'] = 'Cuotas';

// Attachments -> Management
$lang['Attach_settings'] = 'Configuracion de los adjuntos';
$lang['Manage_attachments_explain'] = 'Aqui podras manejar las configuraciones generales del Attachment mod. Si presionas el boton Probar Configuracion, seran automaticamente probados los sistemas para ver si el Attachment Mod puede funcionar bien en este foro. Si tienes problemas subiendo archivos, has esta prueba para obtener un error mas detallado.';
$lang['Attach_filesize_settings'] = 'Configuracion del tamaño de los Adjuntos';
$lang['Attach_number_settings'] = 'Configuracion de la cantidad de Adjuntos';
$lang['Attach_options_settings'] = 'Opciones de los Adjuntos';

$lang['Upload_directory'] = 'Directorio para los adjuntos';
$lang['Upload_directory_explain'] = 'Ingrese la direccion para guardar los archivos subidos, la direccion es relativa a la de la instalacion del phpBB2. Por ejemplo, ingrese \'files\' si la instalacion fue en http://www.sudominio.com/phpBB2 y su directorio de subida esta en http://www.sudominio.com/phpBB2/files.';
$lang['Attach_img_path'] = 'Icono de los Adjuntos';
$lang['Attach_img_path_explain'] = 'Esta imagen es mostrada al lado de los enlaces de los adjuntos en los mensajes. Deja este campo en blanco si no quieres ningun imagen. Esta opcion es sobreescrita por la que se encuentra en la administracion de grupos de extensiones';
$lang['Attach_topic_icon'] = 'Icono de adjunto en tena';
$lang['Attach_topic_icon_explain'] = 'Esta imagen es mostrada en los foros antes de el titulo de los temas que contienen adjuntos. Deja este dialogo en blanco si no quieres ningun icono';
$lang['Attach_display_order'] = 'Orden de muestra de los adjuntos';
$lang['Attach_display_order_explain'] = 'Aqui puedes elegir como mostrar los adjuntos en mensajes/MPs Ordenamiento descendiente (Adjuntos mas nuevos primero) o Ordenamiento ascendente (Archivos mas viejos primero).';
$lang['Show_apcp'] = 'Mostrar el nuevo sistema de publicacion de adjuntos';
$lang['Show_apcp_explain'] = 'Elija que sistema de publicacion de adjuntos quiere mostrar(si) o el metodo viejo con dos cuadros para publicar adjuntos y editar adjuntos publicados (no) en la ventana de publicacion. La apariencia es muy dificil de explicar pero vale la pena problarlo';

$lang['Max_filesize_attach'] = 'Tamaño del archivo';
$lang['Max_filesize_attach_explain'] = 'Tamaño maximo de los adjuntos. 0 es ilimitado \'ilimitado\'. Esta opcion esta restringida por el servidor. Por ejemplo, si la configuracion de su php no soporta mas de 2MBs, el Attchment mod no puede hacer nada para superarla';
$lang['Attach_quota'] = 'Couta total de Adjuntos';
$lang['Attach_quota_explain'] = 'Espacio maximo para guardar todos los adjuntos de su foro. 0 equivale a \'ilimitado\'.';
$lang['Max_filesize_pm'] = 'Tamaño maximo en la carpeta de los mensajes privados';
$lang['Max_filesize_pm_explain'] = 'Tamaño maximo de almacenamiento de archivos en los mensajes privados de los usuarios. 0 equivale a \'ilimitado\'.';
$lang['Default_quota_limit'] = 'Couta predeterminada';
$lang['Default_quota_limit_explain'] = 'Aqui puedes poner que cuota quieres que tengan los usuarios que se registren a partir de la instalacion del attachment mod. La opcion \'sin limite de cuota\' es por si no usas cuotas, en ese caso se usara la opcion definida en la configuracion general';

$lang['Max_attachments'] = 'Numero maximo de adjuntos';
$lang['Max_attachments_explain'] = 'Cantidad maxima de adjuntos por mensaje.';
$lang['Max_attachments_pm'] = 'Cantidad maxima de adjuntos en un mensaje privado';
$lang['Max_attachments_pm_explain'] = 'Define el numero maximo de adjuntos que puede incluir un usuario en un mensaje privado.';

$lang['Disable_mod'] = 'Deshabilitar Attachmente mod';
$lang['Disable_mod_explain'] = 'Esta opcion es basicamente para probar estilos, deshabilita todo el attachment mod excepto el panel de control';
$lang['PM_Attachments'] = 'Permitir adjuntos en mensajes privados';
$lang['PM_Attachments_explain'] = 'habilita/deshabilita adjuntos en mensajes privados';
$lang['Ftp_upload'] = 'Habilitar FTP';
$lang['Ftp_upload_explain'] = 'Habilita o deshabilita el FTP. Si pones si deberas definir los campos de FTP entonces no se usara el directorio de subida';
$lang['Attachment_topic_review'] = '¿mostrar adjuntos en la ventana de revision del tema?';
$lang['Attachment_topic_review_explain'] = 'Si pones si se mostraran los adjuntos en la ventana de revision al contestar un mensaje';

$lang['Ftp_server'] = 'Servidor FTP';
$lang['Ftp_server_explain'] = 'Aca puedes ingresar la IP o el nombre del servidor para subir archivos. Si dejas esto en blanco se usara el server donde esta el phpBB2. No esta habilitado ftp:// ni nada referente, solo la direccion plana, ejemplo ftp.foo.com o la direccion IP, medio mucho mas rapido';

$lang['Attach_ftp_path'] = 'Camino del FTP para el directorio de subida';
$lang['Attach_ftp_path_explain'] = 'El directorio donde seran alojados los archivos subidos por FTP. Este directorio no debe tener los permisos (CHMOD) alterados. No ingrese aca la IP o el nombre del servidor solo el camino del directorio.<br />Por ejemplo: /home/web/uploads';
$lang['Ftp_download_path'] = 'Link de baja al FTP';
$lang['Ftp_download_path_explain'] = 'Ingrese la url de su servidor FTP, donde los archivos estan guardados.<br />Si estas usando un FTP remoto pone la ruta completa, por ejemplo, http://www.mystorage.com/phpBB2/upload.<br />Si estas usando un servidor local para los archivos, puedes ingresar una ruta relativa, por ejemplo \'upload\'.<br />La barra inicial sera removida. Deja este campo en blanco si la ruta no es accesible desde internet. Con este campo en blanco no podras habilitar el modo de baja fisico';
$lang['Ftp_passive_mode'] = 'Habilitar FTP Pasivo';
$lang['Ftp_passive_mode_explain'] = 'El comando PASV pide al servidor remoto abrir una conexion para los datos y devolver la direccion de este puerto. El servidor remoto se queda escuchando en ese puerto esperando una conexion por parte del cliente.';

$lang['No_ftp_extensions_installed'] = 'No puedes usar el FTP para subir archivos porque las extension de subida de archivos por FTP no estan instaladas en tu PHP';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Here you can delete attachment data from postings when the files are missing from your filesystem, and delete files that are no longer attached to any postings. You can download or view a file if you click on it; if no link is present, the file does not exist.';
$lang['Shadow_attachments_file_explain'] = 'Delete all attachments files that exist on your filesystem and are not assigned to an existing post.';
$lang['Shadow_attachments_row_explain'] = 'Delete all posting attachment data for files that don\'t exist on your filesystem.';
$lang['Empty_file_entry'] = 'Entrada del archivo vacia';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Imagen previa regenerada para: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Sincronizacion de Adjuntos terminada.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Adminitrar Extensiones';
$lang['Manage_extensions_explain'] = 'Aqui puedes manejar las extensiones. Si quieres habilitar o deshabilitar una extension usa el Administrador de grupos de extensiones.';
$lang['Explanation'] = 'Explicacion';
$lang['Extension_group'] = 'Grupos de extensiones';
$lang['Invalid_extension'] = 'Extension no valida';
$lang['Extension_exist'] = 'La extension %s ya existe'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'La extension %s esta prohibida, no estas habilitado para agregar a Extensiones Habilitadas'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Administrar Grupos de extensiones';
$lang['Manage_extension_groups_explain'] = 'Aqui puedes agregar y modificar tus grupos de extensiones, puedes deshabilitar grupos de extensiones, asignarles una categoria especial, cambiar el metodo de bajada, o poner un icono de subida.';
$lang['Special_category'] = 'Categoria especial';
$lang['Category_images'] = 'Imagenes';
$lang['Category_stream_files'] = 'Streamimg';
$lang['Category_swf_files'] = 'Archivos Flash';
$lang['Allowed'] = 'Permitido';
$lang['Allowed_forums'] = 'Foros permitidos';
$lang['Ext_group_permissions'] = 'Grupos de permisos';
$lang['Download_mode'] = 'Metodo de bajada';
$lang['Upload_icon'] = 'Icono';
$lang['Max_groups_filesize'] = 'Tamaño maximo';
$lang['Extension_group_exist'] = 'El grupo de extensiones %s ya existe'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Administrar categorias especiales';
$lang['Manage_categories_explain'] = 'Aqui puedes configurar categorias especiales. Puedes elegir parametro especiales y asginaciones para las categorias especiales asignadas a un grupo de extensiones';
$lang['Settings_cat_images'] = 'Configuraciones para la categoria: Images';
$lang['Settings_cat_streams'] = 'Configuraciones para la categoria: Stream Files';
$lang['Settings_cat_flash'] = 'Configuraciones para la categoria: Flash Files';
$lang['Display_inlined'] = 'Mostrar imagenes en linea';
$lang['Display_inlined_explain'] = 'Choose whether to display images directly within the post (yes) or to display images as a link ?';
$lang['Max_image_size'] = 'Dimensiones maximas de las imagenes';
$lang['Max_image_size_explain'] = 'Aqui puedes definir el tamaño maximo de las imagenes a adjuntar(Ancho x Alto en pixeles).<br />Si pones 0x0 esta funcion se deshabilita. Con algunas imagenes esto puede no funcionar debido a limitaciones de PHP';
$lang['Image_link_size'] = 'Dimensiones para enlazarlas';
$lang['Image_link_size_explain'] = 'Si la imagen alcanza esta medida sera mostrado en enlace en imagen de la foto directamente en el mensaje,<br />Si la vista en linea esta habilitada (Width x Height in pixels).<br />Si pones esto en 0x0, se deshabilitara esta funcion. Esta funcion puede no funcionar con algunas imagenes por limitaciones de PHP.';
$lang['Assigned_group'] = 'Grupo Asignado';

$lang['Image_create_thumbnail'] = 'Crear imagen previa';
$lang['Image_create_thumbnail_explain'] = 'Siempre crear imagen previa. This feature overrides nearly all Settings within this Special Category, except of the Maximum Image Dimensions. With this Feature a Thumbnail will be displayed within the post, the User can click it to open the real Image.<br />Please Note that this feature requires Imagick to be installed, if it\'s not installed or if Safe-Mode is enabled the GD-Extension of PHP will be used. If the Image-Type is not supported by PHP, this Feature will be not used.';
$lang['Image_min_thumb_filesize'] = 'Tamaño minimo para crear imagen previa';
$lang['Image_min_thumb_filesize_explain'] = 'Si la imagen pesa menos del tamaño definido, no se crear imagen previa porque la imagen ya es muy chica.';
$lang['Image_imagick_path'] = 'Imagick (Ruta complera)';
$lang['Image_imagick_path_explain'] = 'Enter the Path to the convert program of imagick, normally /usr/bin/convert (on windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Buscar Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Administrar extensiones prohibidas';
$lang['Manage_forbidden_extensions_explain'] = 'Aqui puedes agregar extensiones prohibidas. Las extensiones php, php3 and php4 estan prohibidas por seguridad, no puedes habilitarlas.';
$lang['Forbidden_extension_exist'] = 'La extension %s ya esta prohibida'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'La extension %s esta en las extensiones permitidas, antes de prohibirla deshabilitala.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permisos de grupos de extensiones -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'Aqui puede restringir extensiones del foro que quieras (Definido en el cuadro de foros permitidos). La opcion predeterminada es TODOS los grupos de extensiones en todos los foros.(Como hacia el Attachmente mod desde su primera version). Solo agregue los foros a los grupos permitidos para habilitarlos, la opcion predeterminada TODOS desparecera cuando agregue foros a la lista. De cualquier manera, usted puede volver a TODOS en cualquier momento. Si agrega un foro nuevo a su sitio y los permisos estan en TODOS nada cambiara. Pero si ya habias restringido el uso de las extensiones en los foros deberas aplicarlo nuevamente a todos los foros nuevos. Es facil hacer eso automaticamente, pero forzaria a tener que editar muchos archivos';
$lang['Note_admin_empty_group_permissions'] = 'NOTA:<br />Within the below listed Forums your Users are normally allowed to attach files, but since no Extension Group is allowed to be attached there, your Users are unable to attach anything. If they try, they will receive Error Messages. Maybe you want to set the Permission \'Post Files\' to ADMIN at these Forums.<br /><br />';
$lang['Add_forums'] = 'Agregar foros';
$lang['Add_selected'] = 'Agregar seleccionados';
$lang['Perm_all_forums'] = 'TODOS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Administrar Cuotas';
$lang['Manage_quotas_explain'] = 'Here you are able to add/delete/change Quota Limits. You are able to assign these Quota Limits to Users and Groups later. To assign a Quota Limit to a User, you have to go to Users->Management, select the User and you will see the Options at the bottom. To assign a Quota Limit to a Group, go to Groups->Management, select the Group to edit it, and you will see the Configuration Settings. If you want to see, which Users and Groups are assigned to a specific Quota Limit, click on \'View\' at the left of the Quota Description.';
$lang['Assigned_users'] = 'Usuarios asignados';
$lang['Assigned_groups'] = 'Grupos asignados';
$lang['Quota_limit_exist'] = 'El limite de couta %s ya existe.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Panel de control de archivos adjuntos';
$lang['Control_panel_explain'] = 'Aqui puedes ver y administrar archivos adjuntos basado en Usuarios, Adjuntos, cantidad de veces vistos, etc...';
$lang['File_comment_cp'] = 'Comentario del Archivo';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Use * como comodin para resultados parciales';
$lang['Size_smaller_than'] = 'Tamaño menos que (bytes)';
$lang['Size_greater_than'] = 'Tamaño mayor que (bytes)';
$lang['Count_smaller_than'] = 'Contador de bajadas menor a';
$lang['Count_greater_than'] = 'Contador de bajadas mayor a';
$lang['More_days_old'] = 'Que tenga mas de esta cantidad de dias de viejo';
$lang['No_attach_search_match'] = 'No se han encontrado ningun adjunto con las carateristicas que busco';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Cantidad de Archivos Adjuntos';
$lang['Total_filesize'] = 'Espacio total utilizado';
$lang['Number_posts_attach'] = 'Numero de mensajes con adjuntos';
$lang['Number_topics_attach'] = 'Numero de temas con adjuntos';
$lang['Number_users_attach'] = 'Cantidad de usuarios que han publicado adjuntos';
$lang['Number_pms_attach'] = 'Adjuntos totales en mensajes privados';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Estadisticas de %s'; // replace %s with username
$lang['Size_in_kb'] = 'Tamaño (KB)';
$lang['Downloads'] = 'Bajadas';
$lang['Post_time'] = 'Hora del mensaje';
$lang['Posted_in_topic'] = 'Publicado en el tema';
$lang['Submit_changes'] = 'Enviar cambios';

// Sort Types
$lang['Sort_Attachments'] = 'Adjuntos';
$lang['Sort_Size'] = 'Tamaño';
$lang['Sort_Filename'] = 'Nombre del Archivo';
$lang['Sort_Comment'] = 'Comentario';
$lang['Sort_Extension'] = 'Extension';
$lang['Sort_Downloads'] = 'Bajadas';
$lang['Sort_Posttime'] = 'Hora de los mensajes';
$lang['Sort_Posts'] = 'Mensajes';

// View Types
$lang['View_Statistic'] = 'Estadisticas';
$lang['View_Search'] = 'Buscar';
$lang['View_Username'] = 'Usuario';
$lang['View_Attachments'] = 'Adjuntos';

// Successfully updated
$lang['Attach_config_updated'] = 'Configuracion de los adjuntos actualizada con exito';
$lang['Click_return_attach_config'] = 'Clickea %saqui%s para volver a la configuracion de los adjuntos';
$lang['Test_settings_successful'] = 'Prueba finalizada, todo parece estar bien.';

// Some basic definitions
$lang['Attachments'] = 'Adjuntos';
$lang['Attachment'] = 'Adjunto';
$lang['Extensions'] = 'Extensiones';
$lang['Extension'] = 'Extension';

// Auth pages
$lang['Auth_attach'] = 'Subir Archivos';
$lang['Auth_download'] = 'Descargar';

?>