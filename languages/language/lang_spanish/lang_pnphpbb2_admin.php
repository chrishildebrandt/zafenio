<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [Spanish]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     update               : Sat September 16 2006
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
// 2006-09-16 gnrx   -   Translated update to spanish
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
  $lang['PNphpBB2_Install'] = 'Instalación PNphpBB2';
  $lang['PNphpBB2_Installed'] = 'PNphpBB2 Instalado & Activado.';
  $lang['PNphpBB2_Install_Title'] = 'Instalando tablas PNphpBB2 a %s*';
  $lang['PNphpBB2_Install_Complete']  = '<b>Instalación básica de PNphpBB2 completada.</b><br /><br />';
  $lang['PNphpBB2_Install_Complete'] .= 'Haz click en Finalizar Instalación para regresar a la página de administración de módulos de PN, y activa PNphpBB2.<br /><br />';
  $lang['PNphpBB2_Install_Complete'] .= 'Ahora puedes acceder a la administración de los foros a través de la página de administración de PostNuke o desde el enlace en los foros.<br /><br />';
  $lang['PNphpBB2_Install_Complete'] .= 'Por favor, verifica la información de Configuracón General y realiza los cambios que correspondan. <br /><br /><b>Gracias por elegir PNphpBB2.</b>';
  $lang['Populate_DB_phpBB'] = 'Poblando las tablas con datos de inicio';
  $lang['Populate_DB_PNphpBB'] = 'Poblando tablas con datos específicos de PNphpBB';
  $lang['Populate_DB_Admin'] = 'Insertando datos de administración en las tablas';
  $lang['AutoTheme_Support'] = 'Tú estas usando un AutoTheme generado con esta cuenta o este site.<br>Existen ciertos problemas cuando se instala PNphpBB usando AutoTheme.</br> Por favor, ves a tu cuenta/site y selecciona un NO AutoTheme, realice la Instalación/Actualización/Conversión/Eliminación y luego regrese a su actual theme.<br><br>Gracias<br>El Equipo de PNphpBB'; 

  // Write permitions for styles and cellpics
  $lang['Write_Perm_Desc'] = 'Verificando la localización del módulo y los permisos de los directorios';
  $lang['Write_Perm_1'] = 'El Módulo esta localizado correctamente';
  $lang['Write_Perm_2'] = 'El Módulo TIENE que estar localizado en modules/PNphpBB2.';
  $lang['Write_Perm_3'] = './modules/PNphpBB2/templates/PNTheme/styles ES escribible.';
  $lang['Write_Perm_4'] = './modules/PNphpBB2/templates/PNTheme/styles NO es escribible.';
  $lang['Write_Perm_5'] = './modules/PNphpBB2/templates/PNTheme/cellpics ES escribible.';
  $lang['Write_Perm_6'] = './modules/PNphpBB2/templates/PNTheme/cellpics NO es escribible.';
  $lang['Check_Continue'] = 'Continuar';
  $lang['Re_Check'] = 'Re-Check';  
  $lang['Write_Perm_Correct'] = 'Los directorios de arriba tienen que ser escribibles por PNphpBB2.';
  $lang['Location_Correct'] = 'PNphpBB2 tiene que estar en el directorio PNphpBB2 bajo modules.';
  $lang['Current_Location'] = 'Tienes este localizado en: ';
  $lang['Write_Perm_Good'] = 'Todo se ve muy bien! Por favor, pulse <u>Continuar</u>.';
  $lang['Please_Correct'] = 'Por favor, arrelgue el/los problema/s y <u>Re-Check</u>.';
  $lang['No_GD'] = 'La configuración de tu servidor no parece tener instalada la libreria de imagenes GD. La creación de la imagen Cellpic durante el emparejamiento/configuración del theme, será desactivada.';

  // Update
  $lang['PNphpBB2_Upgrade'] = 'Actualizar PNphpBB2';
  $lang['PNphpBB2_Move_Tables_No'] = 'Existen Tablas en %s*.<br /><br />Las tablas %s* no pueden moverse.';
  $lang['PNphpBB2_Move_Tables_Yes'] = 'Moviendo las tablas a nueva localización';
  $lang['PNphpBB2_Delete_Users'] = 'Borrando usuarios de PostNuke (Excepto Admin!)';
  $lang['PNphpBB2_Delete_Groups'] = 'Borrado user ids desde la tabla del grupo al que pertenece';
  $lang['PNphpBB2_Populate_Users'] = 'Poblando tablas de usuarios y grupos de PostNuke con phpBB users';
  $lang['PNphpBB2_Database_Type'] = 'Tipo de Database ';
  $lang['PNphpBB2_Update_phpBB'] = 'Actualizando phpBB versión %s a version %s';
  $lang['PNphpBB2_Update_PNphpBB'] = 'Actualizando PNphpBB2 versión %s a version %s';
  $lang['PNphpBB2_Update_Attach'] = 'Actualizando Attachment Mod versión %s a versión %s';
  $lang['PNphpBB2_Install_PNphpBB'] = 'Realizando PNphpBB2 %s cambios específicos en la base de datos';
  $lang['PNphpBB2_Optimize_Analyze'] = 'Optimizando tablas';
  $lang['PNphpBB2_Update_Schemas'] = 'Actualizando base de datos schema';
  $lang['PNphpBB2_No_Updates'] =  'No actualización requerida';
  $lang['PNphpBB2_Update_Data'] = 'Actualizando data';
  $lang['PNphpBB2_Attach'] = 'Attachment Mod Versión ';
  $lang['PNphpBB2_Updating_Paths'] = 'Actualizando tabla config';
  $lang['PNphpBB2_Delete_Themes'] = 'Eliminando datos de viejos themes/styles';
  $lang['PNphpBB2_Install_Themes'] = 'Instalando nuevo theme (PNTheme)';
  $lang['PNphpBB2_Board_Theme'] = 'Configurando theme por defecto a PNTheme';
  $lang['PNphpBB2_User_Theme'] = 'Configurando theme para todos los usuarios a PNTheme';
  $lang['PNphpBB2_Clear_Sessions'] = 'Borrando TODAS las sesiones de la tabla de sesiones';
  $lang['PNphpBB2_Cant_SQL'] = 'NO SE PUEDE CAMBIAR MSSQL-TABLA. POR FAVOR, HAGA MANUALMENTE LO SIGUIENTE:<br />EN PHPBB_QUOTA_LIMITS, CAMBIE QUOTA_LIMIT TO FROM INT TO BIGINT.</p>';
  $lang['PNphpBB2_Update_Complete'] = 'Actualización PNphpBB2 completa.';
  $lang['PNphpBB2_Update_Complete'] .= 'Si encuentras algún error durante el proceso, imprime esta página luego visita los foros en www.pnphpbb.com para ayuda.<br /><br />';
  $lang['PNphpBB2_Update_Complete'] .= 'Asegurate activar el módulo antes de continuar, luego revisa todos los datos de configuración en la página de administración.<br /><br />';
  $lang['PNphpBB2_Update_Complete'] .= 'SI el attachment mod fue instalado durante este proceso, asegurate activarlo si deseas utilizarlo.<br /><br />';
  $lang['PNphpBB2_Update_Complete'] .= '<b>Gracias por seleccionar PNphpBB!</b>';
  $lang['PNphpBB2_phpBB_Tables_Found'] = 'tablas phpBB_* fueron encontradas en la database PostNuke. Es MUY importante';
  $lang['PNphpBB2_phpBB_Tables_Found'] .= ' que entiendas lo que el script está apunto de hacer.';
  $lang['PNphpBB2_three_options'] = 'Tienes cuatro (4) opciones en este punto.';
  $lang['PNphpBB2_option_one'] = '1) Actualizar de un aversión previa de PNphpBB2 o phpBB2pnmod';
  $lang['PNphpBB2_option_two'] = '2) Convertir una versión stand alone de phpBB (Version 2.0.x) a PNphpBB2';
  $lang['PNphpBB2_option_three'] = '3) Realizar una NUEVA instalación de PNphpBB2';
  $lang['PNphpBB2_option_four'] = '4) Abortar instalación';
  $lang['PNphpBB2_Upgrade_Disclaimer'] = 'POR FAVOR! entiende lo siguiente <font color=\'red\'><b>WARNINGS:</b></font><br /><br />';
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= '<b>Seleccionar opcion 2 (dos)</b> borrará TODOS los usuarios de tu DATABASE de PN e insertara información de usuarios de las tablas de phpbb.</br><br />';
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= '<b>Seleccionar opcion 3 (tres)</b> hará una NUEVA instalación de PNphpBB2 y dejará las tablas existentes de phpBB_* que fueron encontradas en tu database.</br></br>';
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= 'Una vez esto se realiza NO HAY forma de cancelar este update, asegurate tener backup reciente de tu database de PostNuke y phpBB2.';
  $lang['PNphpBB2_bad_version']  = 'Version mismatch.<br /><br />Conversión Stand alone solo se puede realizar con las versiones 2.0.1 or above.<br /><br />';
  $lang['PNphpBB2_bad_version'] .= 'Tú recibes este error si estas intentando convertir a phpBB 2.1.x(2.2) foro.<br /><br />';
  $lang['PNphpBB2_bad_version'] .= 'Información de versión encontrada: ';
  $lang['PNphpBB2_no_version'] = 'No se pudo obtener informacion de la versión.';
  $lang['PNphpBB2_Updating_links'] = 'Actualizando enlaces de posteos';

  // Removal
  $lang['PNphpBB2_Remove_Prompt'] = 'Remover PNphpBB2';
  $lang['PNphpBB2_Removed'] = 'PNphpBB2 ha sido removido.';
  $lang['PNphpBB2_Remove_Text'] = 'Estas a punto de remover PNphpBB2 y todas sus tablas asociadas de PostNuke (%s*).<br /><br />Toda la data se perderá, estas seguro que quieres hacer esto?';
  $lang['PNphpBB2_Remove_Title'] = 'Removiendo tablas PNphpBB2 de %s*';
  $lang['PNphpBB2_Remove_Notes'] = 'Las tablas de PNphpBB2 han sido removidas.';

  // General
  $lang['PNphpBB2_Running'] = 'Corriendo';
  $lang['PNphpBB2_Failed'] = 'FALLA';
  $lang['PNphpBB2_ButOK'] = 'PERO OK!';
  $lang['PNphpBB2_Completed'] = 'COMPLETADO';
  $lang['PNphpBB2_Done'] = 'Hecho';
  $lang['PNphpBB2_Aborted'] = 'Abortado';
  $lang['PNphpBB2_Cancel'] = 'Cancelación';
  $lang['PNphpBB2_Progress'] = 'Progreso';
  $lang['PNphpBB2_Some_Failed'] = 'Algunas llamadas fallaron, las declaraciones y los errores estan listados abajo:<br />(Algunas acciones pueden necesitar añadir, editar o remover tablas o datos)<br />';
  $lang['PNphpBB2_No_Errors'] = 'No errores';
  $lang['PNphpBB2_Results'] = 'Resultados';
  $lang['PNphpBB2_Installing'] = 'Instalando';
  $lang['PNphpBB2_Updating'] = 'Actualizando';
  $lang['PNphpBB2_Important'] = '*** IMPORTANTE ***';
}

// Additional administration links
$lang['Users_aguide'] = 'Guía de Usuarios';
$lang['Forum_Manual'] = 'Manual de Usuario';


// PNphpBB2 config options
$lang['pnphpbb2_settings'] = 'Configuración PNphpBB2';
$lang['pnphpbb2_settings_explain'] = 'Aquí puedes configurar opciones y ajustes especificos de PNphpBB2.';

$lang['pnphpbb2_options'] = 'PNphpBB2 Opciones/Mods';

$lang['pnphpbb2_quickreply'] = 'Usar Respuesta Rápida';
$lang['pnphpbb2_quickreply_explain'] = 'Activar o desactivar el uso de respuesta rápida.';

$lang['pnphpbb2_logo_on'] = 'Mostrar Logo PNphpBB2 en foros';
$lang['pnphpbb2_logo_on_explain'] = 'Activar el logo de PNphpBB2 en el foro. (Si tú no quieres mostrar el logo de PNphpBB2, POR FAVOR, conerve la información de créditos en el botón del foro)';

$lang['pnphpbb2_shorturls'] = 'URLs cortas en mensajes';
$lang['pnphpbb2_shorturls_explain'] = 'Activar o desactivar el uso de URLs cortas en mensajes.';

$lang['pnphpbb2_post_order'] = 'Orden de visualización de mensajes';
$lang['pnphpbb2_post_order_explain'] = 'Por defecto, orden en que se mostraran los mensajes al ver los temas.';
$lang['pnphpbb2_post_order_explain'] .= '<br>(Tú puedes invalidar esta opción en la sección Administración de la Administración de los Foros)';

$lang['pnphpbb2_post_confirm'] = 'Desactivar confirmación en mensaje';
$lang['pnphpbb2_post_confirm_explain'] = 'Esta opción desactiva la pantalla de confirmación al postear en TODOS los mensajes. Desactivando esta opción, el usuario regresará al mensaje del foro y al mensaje que el creó.';

$lang['pnphpbb2_allow_full_page'] = 'Permitir a usuarios minimizar/maximizar vista a pantalla completa del foro';
$lang['pnphpbb2_allow_full_page_explain'] = 'En el foro, permitir a usuarios a minimizar y maximizar el foro a página completa fuera del theme d PostNuke.';

$lang['pnphpbb2_full_page'] = 'Por defecto, vista del foro en página completa (maximizado)';
$lang['pnphpbb2_full_page_explain'] = 'Permite al administrador a mostrar el foro en página completa fuera o dentro del theme de PostNuke.';

$lang['pnphpbb2_pn_pm'] = 'Usar sistema de mensajeria privada de PostNuke';
$lang['pnphpbb2_pn_pm_explain'] = 'Esta opción cambiara TODOS los links al servicio de mensajeria privada de PostNuke, usandose este sistema en el foro.';

$lang['pnphpbb2_pn_link'] = 'Link de regreso a los usuarios a tu site PostNuke';
$lang['pnphpbb2_pn_link_explain'] = 'Esto será un link html válido con el que tus usarios regresaran a la página principal de tu site, si ellos estan usando un style/theme fuera de PostNuke.';

$lang['pnphpbb2_pn_text'] = 'Texto a mostrar sobre el link';
$lang['pnphpbb2_pn_text_explain'] = 'Este será el texto que se mostrará sobre el link, se puede poner cualquier texto o código html. (Puede contener un link a imagen).';

$lang['pnphpbb2_members_online'] = 'Desactivar el Bloque Quién esta Online en el indice del foro';
$lang['pnphpbb2_members_online_explain'] = 'Esto permite que el administrador desactive el bloque Quién esta Online en el cuadro del indice del foro.';

$lang['pnphpbb2_members_online_annon'] = 'Ocultar Bloque Quién esta Online a los usuarios anónimos';
$lang['pnphpbb2_members_online_annon_explain'] = 'Si no esta desactivado, activar esta opción evitará que los usuarios anónimos vean el Bloque Quién esta Online.';

$lang['pnphpbb2_template_compiler'] = 'Usar el NUEVO compilador de plantillas';
$lang['pnphpbb2_template_compiler_explain'] = 'Usar el eXtreme Styles mod por Vjacheslav Trushkin <slava@trushkin.net> </br>Este mod es una versión fuertemente optimizada del sistema de plantillas de phpBB y tiene algunas características adicionales. Compila y ejecuta archivos mucho más rápido, tiene sistema de caché para acelerar las plantillas muchas veces, permite usar php en plantillas y algunas otras nuevas características para los diseñadores de styles. Esta es una versión de prueba y puede no trabajar con algunos mods.';

$lang['pnphpbb2_updated'] = 'Configuración PNphpBB2 actualizada';
$lang['pnphpbb2_click_return_config'] = 'Click %sAquí%s para regresar a la Configuración de PNphpBB2';

$lang['pnphpbb2_allow_sub_change'] = 'Permitir que los usuarios cambien entre modo categoria/sub-foro';
$lang['pnphpbb2_allow_sub_change_explain'] = 'Esto permite que tú des a tus usuarios la opción de cambiar entre sub-categoria o vista de sub-foro. Si no deseas usar el mod de sub-categoria/foro simplemente no agregues sub-categorias/foros a tu site.';

$lang['pnphpbb2_index_announce'] = 'Mostrar Anuncios en el índice del foro';
$lang['pnphpbb2_index_announce_explain'] = 'Esto permitirá mostrar los Anuncios del foro en el índice principal del foro.';

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = 'Advertencia: caché no puede ser escrito.';
$lang['xs_warning_explain'] = 'Comprueba si has creado el directorio dónde se almacena la caché y cambia permisos(chmod) a 777 para que el script pueda escribir en la caché. Si tu servidor esta trabajando en modo seguro (safe mode) puedes considerar el usar'.' como separador de nombre de archivo y toda la caché podria escribirse en el mismo directorio (ver ajustes del separador abajo).<br /><br />Si la caché no trabaja en tu servidor por alguna razón, no te preocupes, - eXtreme Styles mod aumenta la velocidad del foro, muchas veces sin caché.';

$lang['xs_updated'] = 'Configuración actualizada.';
$lang['xs_updated_explain'] = 'Es necesario actualizar esta página antes  que la nueva configuración tome efecto. <a href="%s">Click aquí</a> para actualizar la página.';

// ACP navigation bar
$lang['Extreme_Styles'] = 'eXtreme Styles';
if(empty($lang['Updates']))
{
	$lang['Updates'] = 'Actualizaciones';
}
if(empty($lang['Styles']))
{
	$lang['Styles'] = 'Styles';
}

// Headers
$lang['xs_settings'] = 'Ajustes de eXtreme Styles mod v%s';
$lang['xs_settings_cache'] = 'Configuración de caché';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Usar caché';
$lang['xs_cache_explain'] = 'La caché es grabada en el disco y acelerará el sistema de las plantillas muchas veces porque no habría necesidad de compilar la plantilla que se demuestra cada vez.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'Directorio de caché';
$lang['xs_cache_dir_explain'] = 'Toda la caché será escrita en este diretorio (y/o sub directorios). Archivos con mismo nombre, se sobreescribiran. No ponga "/" después del nombre del directorio, a menos que el nombre del directorio sea el absoluto. Absoluto significa, como la ruta de un archivo que esta en el disco duro del servidor (con confundirlo con URL completa). Relativo significa la ruta empezando por el directorio phpBB.';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Ruta Absoluta';
$lang['xs_dir_absolute_explain'] = '(como "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Ruta Relativa';
$lang['xs_dir_relative_explain'] = 'relativa a ruta phpBB foro (como "caché")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Automaticamente guardar caché';
$lang['xs_auto_compile_explain'] = 'Esto compilará automáticamente las plantillas si es necesario y las guardará en el directorio caché.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Automaticamente re-compilar caché';
$lang['xs_auto_recompile_explain'] = 'Esto re-compilara automaticamente la cache si el archivo de plantilla original fue cambiado.';
// xs_separator
$lang['xs_separator'] = 'Separador nombre de archivo';
$lang['xs_separator_explain'] = 'Si especifica "/" entonces la cache sera guardada en los sub directorios con el nombre de la plantilla (como archivo "subSilver/admin/page_header.php" será guardado en el directorio caché como "subSilver/admin/page_header.php"), si selecciona algo como "." toda la caché será guardada en un directorio (como archivo "subSilver/admin/page_header.php" será guardado en el directorio caché como "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'Extensión de archivos caché';
$lang['xs_php_explain'] = 'Esta es la extensión de los archivos caché. Los archivos se almacenan en formato php así que la extensión por defecto es “php”. No incluir punto';
// xs_def_template
$lang['xs_def_template'] = 'Por defecto el directorio de plantillas';
$lang['xs_def_template_explain'] = 'Si el archivo tpl no se encuentra en el directorio de plantillas corriente (eso pudo suceder si tu modded el phpBB incorrectamente ) entonces el sistema de plantilla buscará el mismo archivo en este directorio (como si la plantilla actual es "myTemplate" y el script requiere archivo "myTemplate/myfile.tpl" y ese archivo no es allí, el sistema de plantillas buscará ese archivo como "subSilver/myfile.tpl"). Seleccione para vaciar para desactivar esta característica.';
// xs_check_switches
$lang['xs_check_switches'] = 'Chequear switches mientras compila';
$lang['xs_check_switches_explain'] = 'Esta caracteristica chequea errores en plantillas. Desconectandolo acelerará la compilación, pero el compilador puedo saltar algunos errores en plantillas si la plantilla tiene errores.<br /><br />El chequeo elegante comprobará las plantillas para saber si hay errores y fijará automáticamente todos los errores sabidos (hay pocos errores tipográficos sabidos en diversos mods). Works little bit slower than simple check.<br /><br />Pero a veces la plantilla busca correctamente solo cuando el chequeo de error es desactivado. Esto sucede debido a la mala codificación del HTML - contacte quienquiera que escribió el archivo tpl si deseas fijar errores.<br /><br />Si la caracteristica caché esta desactivada entonces para una compilación más rápida es mejor desactivar esto.';
$lang['xs_check_switches_0'] = 'Off';
$lang['xs_check_switches_1'] = 'Chequeo elegante';
$lang['xs_check_switches_2'] = 'Chequeo simple';
// xs_use_isset
$lang['xs_use_isset'] = 'Chequear las variables con el isset() en código compilado';

// Debug info
$lang['xs_debug_header'] = 'Información de eliminación de errores';
$lang['xs_debug_explain'] = 'Esto es información de eliminación de errores. Usado para buscar/corregir problemas cuando se configura la caché.';
$lang['xs_debug_vars'] = 'Variables de la plantilla';
$lang['xs_debug_tpl_name'] = 'Nombre de archivo de la plantilla:';
$lang['xs_debug_cache_filename'] = 'Nombre de archivo de caché:';
$lang['xs_debug_data'] = 'Datos de eliminación de errores:';

$lang['xs_check_hdr'] = 'Chequeando caché para %s';
$lang['xs_check_filename'] = 'Error: nombre de archivo inválido';
$lang['xs_check_openfile1'] = 'Error: no se puede abrir el archivo "%s". Intentará crear directorios...';
$lang['xs_check_openfile2'] = 'Error: no se puede abrir el archivo "%s" por segunda vez. Giving up...';
$lang['xs_check_nodir'] = 'Chequeando "%s" - directorio no encontrado.';
$lang['xs_check_nodir2'] = 'Error: no se puede crear el directorio "%s" - puede ser que necesites comprobar permisos.';
$lang['xs_check_createddir'] = 'Directorio creado  "%s"';
$lang['xs_check_dir'] = 'Chequeando "%s" - directorio existe.';
$lang['xs_check_ok'] = 'Archivo abierto "%s" para la escritura. Todo parece que esta correcto.';

// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = 'Plantilla';
$lang['xs_styles_style'] = 'Estilo';
$lang['xs_styles_user'] = 'Usuarios';
$lang['xs_styles_options'] = 'Opciones';
$lang['xs_styles_set_default'] = 'seleccionar predeterminado';
$lang['xs_styles_no_override'] = 'no invalidar los ajustes del usuario';
$lang['xs_styles_do_override'] = 'invalidar ajustes de usuario';
$lang['xs_styles_switch_all'] = 'ajustar todos los usuarios a este style';
$lang['xs_styles_switch_all2'] = 'ajustar todos los usuarios a:';
$lang['xs_styles_defstyle'] = 'Estilo por defecto';
$lang['xs_styles_available'] = 'Estilos disponibles';

// Categories Hierarchies Mod
$lang['Category_attachment'] = 'Adjuntar a Categoria';
$lang['Use_sub_forum'] = 'Mostrar las sub-categorias como foros';
$lang['Use_sub_forum_explain'] = 'Permite que el administrador seleccione por defecto la vista de sub-doro o la vista de sub-categoria (como vBulletin).';
$lang['Category_desc'] = 'Descripción';
$lang['Hierarchy_setting'] = 'Ajustes de la jerarquía de las categorías';
$lang['Category_config_error_fixed'] = 'Un error en el setup de la categoria a sido correctamente corregido';

// Split Announcements/Stickys
$lang['announce_settings'] = 'Ajustes de Anuncios';
$lang['enable_announce'] = 'Mostrar Anuncios del foro en el índice';
$lang['enable_announce_explain'] = 'Esta opción activa o desactiva los Anuncios del foro en la página índice.';

$lang['announcement_duration'] = 'Duración de los Anuncios en el índice';
$lang['announcement_duration_explain'] = 'Número de <strong>días</strong> para mostrar los Anuncios del Foro en la página índice.';
$lang['announcement_duration_explain'] .= '<br/>(Introduciendo <b>0 (Cero)</b> los Anuncios serán mostrados indefinidamente)';

$lang['split_global_announce'] = 'Dividir Anuncio Global';
$lang['split_announce'] = 'Dividir Anuncios en los Foros';
$lang['split_sticky'] = 'Dividir Temas fijos en los Foros';

// Topic & Post sort options
$lang['topic_sort_order'] = 'Orden del Tema';
$lang['post_sort_order'] = 'Orden del Mensaje';
$lang['First_Post'] = 'Primer mensaje';
$lang['sorted_default'] = 'Predeterminado del Foro';

// Replacement Rank image admin
$lang['Rank_image'] = 'Imagen de Rango';
$lang['Rank_image_explain'] = 'Utilizar esto para definir una imagen pequeña asociada al rango.';
$lang['Rank_image_explain'] .= '<br/>Esto es relativo a la ruta raiz de PNphpBB2 si incluyes una ruta relativa a donde se localizan las imágenes.<br/>(NOTA: Si solamente se especifica la imagen (image.gif), entonces se utilizará la imagen basada en el nombre de la plantilla, theme PostNuke, y lenguaje.)'; 
$lang['Admin_intro'] = 'Gracias por elegir PNphpBB como tu solución de foro. Esta pantalla te dará una descripción rápida de toda la variada estadística de tu foro. Tú puedes regresar a esta página clicando en el link de <u>Índice del Administrador</u> en el panel izquierdo. Para regresar al índice de tu foro, clica en el logo de PNphpBB también en el panel izquierdo. Los otros links del lado izquierdo de esta pantalla permitirán que controles cada aspecto de tu foro. Cada pantalla tendrá instrucciones de cómo utilizar las herramientas.';

$lang['PNphpBB_Version'] = 'Versión de PNphpBB';
$lang['phpBB_Version'] = 'Versión de phpBB';
$lang['PNphpBB_Config'] = 'Configuración de PNphpBB';
$lang['Utility'] = 'Utilidades';

// limited post edit time MOD 
$lang['edit_time'] = 'Tiempo de Editar mensaje'; 
$lang['edit_time_explain'] = 'El tiempo (en minutos) que el usuario tiene para editar su mensaje. Ajustar este valor a 0, el tiempo es ilimitado.'; 

// Enable-Disable theme matching functions
$lang['theme_matching'] = 'Activar emparejar Theme';
$lang['theme_matching_explain'] = 'Activar o desactivar el uso de la caracteristica de emparejar theme. Emparejar theme procurará crear una hoja del estilo y un sistema de cellpics para el theme actual si un sistema no esta ya disponible. <br><b>Nota:</b> Con emparejador de theme desactivado el foro usará default.css y cellpics encontrados en el directorio raiz de cellpics.';

// Exclude forum from global announcments
$lang['Exclude_global_announce'] = 'Excluir este foro de Anuncios Gloables';
$lang['Exclude_global_announce_explain'] = 'Si se selecciona esta opción este foro será excluido de mostrar sus anuncios en el índice .';

// Support forum
$lang['Support_forum'] = 'Esto es un foro de soporte';
$lang['Support_forum_explain'] = 'Si este foro es demandado como foro de la ayuda, puedes elegir esta opción para mostrar una lista del estado de los flags definidos por el usuario en el nivel de tema para indicar el estado de la petición del servicio. Este item puede ser actualizado por el administrador o moderador del foro.';

// Gravatars
$lang['Allow_gravatars'] = "Permitir <a href=\"http://www.gravatar.com\">Gravatars</a>";
//
// ¡Esto es todo amigos!
// -------------------------------------------------

?>
