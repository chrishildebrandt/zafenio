<?php
/** 
*
* attachment mod admin [Spanish]
*
* @package attachment_mod
* @version $Id: lang_admin_attach.php,v 1.3 2005/11/20 13:38:55 acydburn Exp $
* @copyright (c) 2002 Meik Sievertsen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
	$lang = array();
}

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
$lang['Attach_topic_icon'] = 'Icono de adjunto en tema';
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

$lang['Disable_mod'] = 'Deshabilitar Attachment mod';
$lang['Disable_mod_explain'] = 'Esta opción es basicamente para probar estilos, deshabilita todo el attachment mod excepto el panel de control';
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
$lang['Shadow_attachments_explain'] = 'Aquí tú puedes eliminar los datos de los adjuntos de los mensajes cuando faltan de tu sistema de archivos, y eliminar los archivos que no estan unidos a ningun mensaje. Tú puedes descargar o ver el archivo si tú clicas en el; si no hay link presente, el archivo no existe.';
$lang['Shadow_attachments_file_explain'] = 'Eliminar todos los archivos adjuntos que existen en tu sistema de archivos y no estan asignados a ningun mensaje existente.';
$lang['Shadow_attachments_row_explain'] = 'Eliminar todos los datos de adjuntos para los archivos que no existen en tu sistema de archivos.';
$lang['Empty_file_entry'] = 'Entrada del archivo vacia';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Imagen previa regenerada para: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Sincronizacion de Adjuntos terminada.';
$lang['Sync_topics'] = 'Sincronizar Temas';
$lang['Sync_posts'] = 'Sincronizar Mensajes';
$lang['Sync_thumbnails'] = 'Sincronizar Thumbnails';


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
$lang['Display_inlined_explain'] = 'Elegir si mostrar las imagenes directamente dentro del mensaje (si) o mostrar las imagenes como un link?';
$lang['Max_image_size'] = 'Dimensiones maximas de las imagenes';
$lang['Max_image_size_explain'] = 'Aqui puedes definir el tamaño maximo de las imagenes a adjuntar(Ancho x Alto en pixeles).<br />Si pones 0x0 esta funcion se deshabilita. Con algunas imagenes esto puede no funcionar debido a limitaciones de PHP';
$lang['Image_link_size'] = 'Dimensiones para enlazarlas';
$lang['Image_link_size_explain'] = 'Si la imagen alcanza esta medida sera mostrado en enlace en imagen de la foto directamente en el mensaje,<br />Si la vista en linea esta habilitada (Width x Height in pixels).<br />Si pones esto en 0x0, se deshabilitara esta funcion. Esta funcion puede no funcionar con algunas imagenes por limitaciones de PHP.';
$lang['Assigned_group'] = 'Grupo Asignado';

$lang['Image_create_thumbnail'] = 'Crear imagen previa';
$lang['Image_create_thumbnail_explain'] = 'Siempre crear imagen previa. Esta característica elimina casi todos los ajustes dentro de esta categoría especial, excepto el Dimensiones Maximas de Imagen. Con esta caracteristica un Thumbnail será mostrado dentro del mensaje, el Usuario puede clicar para abrir la imagen real.<br />Por favor, tenga en cuenta que esta característica requiere tener instalado Imagick, si no esta instalado o si Safe-Mode esta activado el GD-Extension de PHP será usado. Si la Image-Type no es soportado por PHP, esta característica no será usada.';
$lang['Image_min_thumb_filesize'] = 'Tamaño minimo para crear imagen previa';
$lang['Image_min_thumb_filesize_explain'] = 'Si la imagen pesa menos del tamaño definido, no se creará imagen previa porque la imagen ya es muy pequeña.';
$lang['Image_imagick_path'] = 'Imagick (Ruta complera)';
$lang['Image_imagick_path_explain'] = 'Entre la ruta del programa convertidor de imagick, normalmente /usr/bin/convert (en windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Buscar Imagick';

$lang['Use_gd2'] = 'Usar extensión GD2';
$lang['Use_gd2_explain'] = 'PHP puede ser compilado con la Extensión GD1 o GD2 para manipulación de imagen. Para crear correctamente Thumbnails sin imagemagick el Attachment Mod usa dos metodos diferentes, basados en tu selección de aquí. Si tus thumbnails estan en mala calidad o fijados arriba, prueba a cambiar estos ajustes.';
$lang['Attachment_version'] = 'Versión Attachment Mod %s'; // %s is the version number

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
$lang['Perm_all_forums'] = 'TODOS LOS FOROS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Administrar Cuotas';
$lang['Manage_quotas_explain'] = 'Aquí tu puedes añadir/borrar/cambiar los Limites de Quota. Tú puedes asignar estos Limites de Quotas a Usuarios y Grupos más adelante. Para asignar un Limite de Quota a un Usuario, tú tienes que ir a Usuarios->Administración, seleccionar el Usuario y puedes ver las Opciones en el fondo. Para asignar un Limite de Quota a un Grupo, ves a Grupos->Administración, selecciona el Grupo a editar, y verás los Ajustes de Configuración. Si deseas ver, que Usuarios y Grupos estan asignados a un Limite de Quota especifico, clica en \'Ver\' a la izquierda de la Descripción de Quota.';
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
$lang['No_attach_search_match'] = 'No se a encontrado ningun adjunto con las carateristicas que busco';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Número de adjuntos';
$lang['Total_filesize'] = 'Tamaño del archivo';
$lang['Number_posts_attach'] = 'Número de mensajes con adjuntos';
$lang['Number_topics_attach'] = 'Número de Temas con adjuntos';
$lang['Number_users_attach'] = 'Usuarios independientes postearon Adjuntos';
$lang['Number_pms_attach'] = 'Total de adjuntos en Mensajes Privados';

// Control Panel -> Adjuntos
$lang['Statistics_for_user'] = 'Estadísticas de Attachment para %s'; // replace %s with username
$lang['Size_in_kb'] = 'Tamaño (KB)';
$lang['Downloads'] = 'Descargas';
$lang['Post_time'] = 'Hora de mensaje';
$lang['Posted_in_topic'] = 'Posteado en Tema';
$lang['Submit_changes'] = 'Enviar Cambios';

// Sort Types
$lang['Sort_Attachments'] = 'Adjuntos';
$lang['Sort_Size'] = 'Tamaño';
$lang['Sort_Filename'] = 'Nombre de archivo';
$lang['Sort_Comment'] = 'Comentario';
$lang['Sort_Extension'] = 'Extensión';
$lang['Sort_Downloads'] = 'Descargas';
$lang['Sort_Posttime'] = 'Hora de mensaje';
$lang['Sort_Posts'] = 'Mensajes';

// View Types
$lang['View_Statistic'] = 'Estadísticas';
$lang['View_Search'] = 'Buscar';
$lang['View_Username'] = 'Nombre de Usuario';
$lang['View_Attachments'] = 'Adjuntos';

// Successfully updated
$lang['Attach_config_updated'] = 'Configuración de Adjuntos Actualizada Exitosamente';
$lang['Click_return_attach_config'] = 'Haz click aqui %sAquí%s para regresar a la Configuración de Adjuntos';
$lang['Test_settings_successful'] = 'Test de ajustes finalizado, la configuración parece correcta.';

// Some basic definitions
$lang['Attachments'] = 'Adjuntos';
$lang['Attachment'] = 'Adjunto';
$lang['Extensions'] = 'Extensiones';
$lang['Extension'] = 'Extension';

// Auth pages
$lang['Auth_attach'] = 'Subir Archivos';
$lang['Auth_download'] = 'Descargar Archivos';

?>