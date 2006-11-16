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
  $lang['PNphpBB2_Install'] = 'Instalaci�n PNphpBB2';
  $lang['PNphpBB2_Installed'] = 'PNphpBB2 Instalado & Activado.';
  $lang['PNphpBB2_Install_Title'] = 'Instalando tablas PNphpBB2 a %s*';
  $lang['PNphpBB2_Install_Complete']  = '<b>Instalaci�n b�sica de PNphpBB2 completada.</b><br /><br />';
  $lang['PNphpBB2_Install_Complete'] .= 'Haz click en Finalizar Instalaci�n para regresar a la p�gina de administraci�n de m�dulos de PN, y activa PNphpBB2.<br /><br />';
  $lang['PNphpBB2_Install_Complete'] .= 'Ahora puedes acceder a la administraci�n de los foros a trav�s de la p�gina de administraci�n de PostNuke o desde el enlace en los foros.<br /><br />';
  $lang['PNphpBB2_Install_Complete'] .= 'Por favor, verifica la informaci�n de Configurac�n General y realiza los cambios que correspondan. <br /><br /><b>Gracias por elegir PNphpBB2.</b>';
  $lang['Populate_DB_phpBB'] = 'Poblando las tablas con datos de inicio';
  $lang['Populate_DB_PNphpBB'] = 'Poblando tablas con datos espec�ficos de PNphpBB';
  $lang['Populate_DB_Admin'] = 'Insertando datos de administraci�n en las tablas';
  $lang['AutoTheme_Support'] = 'T� estas usando un AutoTheme generado con esta cuenta o este site.<br>Existen ciertos problemas cuando se instala PNphpBB usando AutoTheme.</br> Por favor, ves a tu cuenta/site y selecciona un NO AutoTheme, realice la Instalaci�n/Actualizaci�n/Conversi�n/Eliminaci�n y luego regrese a su actual theme.<br><br>Gracias<br>El Equipo de PNphpBB'; 

  // Write permitions for styles and cellpics
  $lang['Write_Perm_Desc'] = 'Verificando la localizaci�n del m�dulo y los permisos de los directorios';
  $lang['Write_Perm_1'] = 'El M�dulo esta localizado correctamente';
  $lang['Write_Perm_2'] = 'El M�dulo TIENE que estar localizado en modules/PNphpBB2.';
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
  $lang['No_GD'] = 'La configuraci�n de tu servidor no parece tener instalada la libreria de imagenes GD. La creaci�n de la imagen Cellpic durante el emparejamiento/configuraci�n del theme, ser� desactivada.';

  // Update
  $lang['PNphpBB2_Upgrade'] = 'Actualizar PNphpBB2';
  $lang['PNphpBB2_Move_Tables_No'] = 'Existen Tablas en %s*.<br /><br />Las tablas %s* no pueden moverse.';
  $lang['PNphpBB2_Move_Tables_Yes'] = 'Moviendo las tablas a nueva localizaci�n';
  $lang['PNphpBB2_Delete_Users'] = 'Borrando usuarios de PostNuke (Excepto Admin!)';
  $lang['PNphpBB2_Delete_Groups'] = 'Borrado user ids desde la tabla del grupo al que pertenece';
  $lang['PNphpBB2_Populate_Users'] = 'Poblando tablas de usuarios y grupos de PostNuke con phpBB users';
  $lang['PNphpBB2_Database_Type'] = 'Tipo de Database ';
  $lang['PNphpBB2_Update_phpBB'] = 'Actualizando phpBB versi�n %s a version %s';
  $lang['PNphpBB2_Update_PNphpBB'] = 'Actualizando PNphpBB2 versi�n %s a version %s';
  $lang['PNphpBB2_Update_Attach'] = 'Actualizando Attachment Mod versi�n %s a versi�n %s';
  $lang['PNphpBB2_Install_PNphpBB'] = 'Realizando PNphpBB2 %s cambios espec�ficos en la base de datos';
  $lang['PNphpBB2_Optimize_Analyze'] = 'Optimizando tablas';
  $lang['PNphpBB2_Update_Schemas'] = 'Actualizando base de datos schema';
  $lang['PNphpBB2_No_Updates'] =  'No actualizaci�n requerida';
  $lang['PNphpBB2_Update_Data'] = 'Actualizando data';
  $lang['PNphpBB2_Attach'] = 'Attachment Mod Versi�n ';
  $lang['PNphpBB2_Updating_Paths'] = 'Actualizando tabla config';
  $lang['PNphpBB2_Delete_Themes'] = 'Eliminando datos de viejos themes/styles';
  $lang['PNphpBB2_Install_Themes'] = 'Instalando nuevo theme (PNTheme)';
  $lang['PNphpBB2_Board_Theme'] = 'Configurando theme por defecto a PNTheme';
  $lang['PNphpBB2_User_Theme'] = 'Configurando theme para todos los usuarios a PNTheme';
  $lang['PNphpBB2_Clear_Sessions'] = 'Borrando TODAS las sesiones de la tabla de sesiones';
  $lang['PNphpBB2_Cant_SQL'] = 'NO SE PUEDE CAMBIAR MSSQL-TABLA. POR FAVOR, HAGA MANUALMENTE LO SIGUIENTE:<br />EN PHPBB_QUOTA_LIMITS, CAMBIE QUOTA_LIMIT TO FROM INT TO BIGINT.</p>';
  $lang['PNphpBB2_Update_Complete'] = 'Actualizaci�n PNphpBB2 completa.';
  $lang['PNphpBB2_Update_Complete'] .= 'Si encuentras alg�n error durante el proceso, imprime esta p�gina luego visita los foros en www.pnphpbb.com para ayuda.<br /><br />';
  $lang['PNphpBB2_Update_Complete'] .= 'Asegurate activar el m�dulo antes de continuar, luego revisa todos los datos de configuraci�n en la p�gina de administraci�n.<br /><br />';
  $lang['PNphpBB2_Update_Complete'] .= 'SI el attachment mod fue instalado durante este proceso, asegurate activarlo si deseas utilizarlo.<br /><br />';
  $lang['PNphpBB2_Update_Complete'] .= '<b>Gracias por seleccionar PNphpBB!</b>';
  $lang['PNphpBB2_phpBB_Tables_Found'] = 'tablas phpBB_* fueron encontradas en la database PostNuke. Es MUY importante';
  $lang['PNphpBB2_phpBB_Tables_Found'] .= ' que entiendas lo que el script est� apunto de hacer.';
  $lang['PNphpBB2_three_options'] = 'Tienes cuatro (4) opciones en este punto.';
  $lang['PNphpBB2_option_one'] = '1) Actualizar de un aversi�n previa de PNphpBB2 o phpBB2pnmod';
  $lang['PNphpBB2_option_two'] = '2) Convertir una versi�n stand alone de phpBB (Version 2.0.x) a PNphpBB2';
  $lang['PNphpBB2_option_three'] = '3) Realizar una NUEVA instalaci�n de PNphpBB2';
  $lang['PNphpBB2_option_four'] = '4) Abortar instalaci�n';
  $lang['PNphpBB2_Upgrade_Disclaimer'] = 'POR FAVOR! entiende lo siguiente <font color=\'red\'><b>WARNINGS:</b></font><br /><br />';
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= '<b>Seleccionar opcion 2 (dos)</b> borrar� TODOS los usuarios de tu DATABASE de PN e insertara informaci�n de usuarios de las tablas de phpbb.</br><br />';
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= '<b>Seleccionar opcion 3 (tres)</b> har� una NUEVA instalaci�n de PNphpBB2 y dejar� las tablas existentes de phpBB_* que fueron encontradas en tu database.</br></br>';
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= 'Una vez esto se realiza NO HAY forma de cancelar este update, asegurate tener backup reciente de tu database de PostNuke y phpBB2.';
  $lang['PNphpBB2_bad_version']  = 'Version mismatch.<br /><br />Conversi�n Stand alone solo se puede realizar con las versiones 2.0.1 or above.<br /><br />';
  $lang['PNphpBB2_bad_version'] .= 'T� recibes este error si estas intentando convertir a phpBB 2.1.x(2.2) foro.<br /><br />';
  $lang['PNphpBB2_bad_version'] .= 'Informaci�n de versi�n encontrada: ';
  $lang['PNphpBB2_no_version'] = 'No se pudo obtener informacion de la versi�n.';
  $lang['PNphpBB2_Updating_links'] = 'Actualizando enlaces de posteos';

  // Removal
  $lang['PNphpBB2_Remove_Prompt'] = 'Remover PNphpBB2';
  $lang['PNphpBB2_Removed'] = 'PNphpBB2 ha sido removido.';
  $lang['PNphpBB2_Remove_Text'] = 'Estas a punto de remover PNphpBB2 y todas sus tablas asociadas de PostNuke (%s*).<br /><br />Toda la data se perder�, estas seguro que quieres hacer esto?';
  $lang['PNphpBB2_Remove_Title'] = 'Removiendo tablas PNphpBB2 de %s*';
  $lang['PNphpBB2_Remove_Notes'] = 'Las tablas de PNphpBB2 han sido removidas.';

  // General
  $lang['PNphpBB2_Running'] = 'Corriendo';
  $lang['PNphpBB2_Failed'] = 'FALLA';
  $lang['PNphpBB2_ButOK'] = 'PERO OK!';
  $lang['PNphpBB2_Completed'] = 'COMPLETADO';
  $lang['PNphpBB2_Done'] = 'Hecho';
  $lang['PNphpBB2_Aborted'] = 'Abortado';
  $lang['PNphpBB2_Cancel'] = 'Cancelaci�n';
  $lang['PNphpBB2_Progress'] = 'Progreso';
  $lang['PNphpBB2_Some_Failed'] = 'Algunas llamadas fallaron, las declaraciones y los errores estan listados abajo:<br />(Algunas acciones pueden necesitar a�adir, editar o remover tablas o datos)<br />';
  $lang['PNphpBB2_No_Errors'] = 'No errores';
  $lang['PNphpBB2_Results'] = 'Resultados';
  $lang['PNphpBB2_Installing'] = 'Instalando';
  $lang['PNphpBB2_Updating'] = 'Actualizando';
  $lang['PNphpBB2_Important'] = '*** IMPORTANTE ***';
}

// Additional administration links
$lang['Users_aguide'] = 'Gu�a de Usuarios';
$lang['Forum_Manual'] = 'Manual de Usuario';


// PNphpBB2 config options
$lang['pnphpbb2_settings'] = 'Configuraci�n PNphpBB2';
$lang['pnphpbb2_settings_explain'] = 'Aqu� puedes configurar opciones y ajustes especificos de PNphpBB2.';

$lang['pnphpbb2_options'] = 'PNphpBB2 Opciones/Mods';

$lang['pnphpbb2_quickreply'] = 'Usar Respuesta R�pida';
$lang['pnphpbb2_quickreply_explain'] = 'Activar o desactivar el uso de respuesta r�pida.';

$lang['pnphpbb2_logo_on'] = 'Mostrar Logo PNphpBB2 en foros';
$lang['pnphpbb2_logo_on_explain'] = 'Activar el logo de PNphpBB2 en el foro. (Si t� no quieres mostrar el logo de PNphpBB2, POR FAVOR, conerve la informaci�n de cr�ditos en el bot�n del foro)';

$lang['pnphpbb2_shorturls'] = 'URLs cortas en mensajes';
$lang['pnphpbb2_shorturls_explain'] = 'Activar o desactivar el uso de URLs cortas en mensajes.';

$lang['pnphpbb2_post_order'] = 'Orden de visualizaci�n de mensajes';
$lang['pnphpbb2_post_order_explain'] = 'Por defecto, orden en que se mostraran los mensajes al ver los temas.';
$lang['pnphpbb2_post_order_explain'] .= '<br>(T� puedes invalidar esta opci�n en la secci�n Administraci�n de la Administraci�n de los Foros)';

$lang['pnphpbb2_post_confirm'] = 'Desactivar confirmaci�n en mensaje';
$lang['pnphpbb2_post_confirm_explain'] = 'Esta opci�n desactiva la pantalla de confirmaci�n al postear en TODOS los mensajes. Desactivando esta opci�n, el usuario regresar� al mensaje del foro y al mensaje que el cre�.';

$lang['pnphpbb2_allow_full_page'] = 'Permitir a usuarios minimizar/maximizar vista a pantalla completa del foro';
$lang['pnphpbb2_allow_full_page_explain'] = 'En el foro, permitir a usuarios a minimizar y maximizar el foro a p�gina completa fuera del theme d PostNuke.';

$lang['pnphpbb2_full_page'] = 'Por defecto, vista del foro en p�gina completa (maximizado)';
$lang['pnphpbb2_full_page_explain'] = 'Permite al administrador a mostrar el foro en p�gina completa fuera o dentro del theme de PostNuke.';

$lang['pnphpbb2_pn_pm'] = 'Usar sistema de mensajeria privada de PostNuke';
$lang['pnphpbb2_pn_pm_explain'] = 'Esta opci�n cambiara TODOS los links al servicio de mensajeria privada de PostNuke, usandose este sistema en el foro.';

$lang['pnphpbb2_pn_link'] = 'Link de regreso a los usuarios a tu site PostNuke';
$lang['pnphpbb2_pn_link_explain'] = 'Esto ser� un link html v�lido con el que tus usarios regresaran a la p�gina principal de tu site, si ellos estan usando un style/theme fuera de PostNuke.';

$lang['pnphpbb2_pn_text'] = 'Texto a mostrar sobre el link';
$lang['pnphpbb2_pn_text_explain'] = 'Este ser� el texto que se mostrar� sobre el link, se puede poner cualquier texto o c�digo html. (Puede contener un link a imagen).';

$lang['pnphpbb2_members_online'] = 'Desactivar el Bloque Qui�n esta Online en el indice del foro';
$lang['pnphpbb2_members_online_explain'] = 'Esto permite que el administrador desactive el bloque Qui�n esta Online en el cuadro del indice del foro.';

$lang['pnphpbb2_members_online_annon'] = 'Ocultar Bloque Qui�n esta Online a los usuarios an�nimos';
$lang['pnphpbb2_members_online_annon_explain'] = 'Si no esta desactivado, activar esta opci�n evitar� que los usuarios an�nimos vean el Bloque Qui�n esta Online.';

$lang['pnphpbb2_template_compiler'] = 'Usar el NUEVO compilador de plantillas';
$lang['pnphpbb2_template_compiler_explain'] = 'Usar el eXtreme Styles mod por Vjacheslav Trushkin <slava@trushkin.net> </br>Este mod es una versi�n fuertemente optimizada del sistema de plantillas de phpBB y tiene algunas caracter�sticas adicionales. Compila y ejecuta archivos mucho m�s r�pido, tiene sistema de cach� para acelerar las plantillas muchas veces, permite usar php en plantillas y algunas otras nuevas caracter�sticas para los dise�adores de styles. Esta es una versi�n de prueba y puede no trabajar con algunos mods.';

$lang['pnphpbb2_updated'] = 'Configuraci�n PNphpBB2 actualizada';
$lang['pnphpbb2_click_return_config'] = 'Click %sAqu�%s para regresar a la Configuraci�n de PNphpBB2';

$lang['pnphpbb2_allow_sub_change'] = 'Permitir que los usuarios cambien entre modo categoria/sub-foro';
$lang['pnphpbb2_allow_sub_change_explain'] = 'Esto permite que t� des a tus usuarios la opci�n de cambiar entre sub-categoria o vista de sub-foro. Si no deseas usar el mod de sub-categoria/foro simplemente no agregues sub-categorias/foros a tu site.';

$lang['pnphpbb2_index_announce'] = 'Mostrar Anuncios en el �ndice del foro';
$lang['pnphpbb2_index_announce_explain'] = 'Esto permitir� mostrar los Anuncios del foro en el �ndice principal del foro.';

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = 'Advertencia: cach� no puede ser escrito.';
$lang['xs_warning_explain'] = 'Comprueba si has creado el directorio d�nde se almacena la cach� y cambia permisos(chmod) a 777 para que el script pueda escribir en la cach�. Si tu servidor esta trabajando en modo seguro (safe mode) puedes considerar el usar'.' como separador de nombre de archivo y toda la cach� podria escribirse en el mismo directorio (ver ajustes del separador abajo).<br /><br />Si la cach� no trabaja en tu servidor por alguna raz�n, no te preocupes, - eXtreme Styles mod aumenta la velocidad del foro, muchas veces sin cach�.';

$lang['xs_updated'] = 'Configuraci�n actualizada.';
$lang['xs_updated_explain'] = 'Es necesario actualizar esta p�gina antes  que la nueva configuraci�n tome efecto. <a href="%s">Click aqu�</a> para actualizar la p�gina.';

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
$lang['xs_settings_cache'] = 'Configuraci�n de cach�';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'Usar cach�';
$lang['xs_cache_explain'] = 'La cach� es grabada en el disco y acelerar� el sistema de las plantillas muchas veces porque no habr�a necesidad de compilar la plantilla que se demuestra cada vez.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'Directorio de cach�';
$lang['xs_cache_dir_explain'] = 'Toda la cach� ser� escrita en este diretorio (y/o sub directorios). Archivos con mismo nombre, se sobreescribiran. No ponga "/" despu�s del nombre del directorio, a menos que el nombre del directorio sea el absoluto. Absoluto significa, como la ruta de un archivo que esta en el disco duro del servidor (con confundirlo con URL completa). Relativo significa la ruta empezando por el directorio phpBB.';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'Ruta Absoluta';
$lang['xs_dir_absolute_explain'] = '(como "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'Ruta Relativa';
$lang['xs_dir_relative_explain'] = 'relativa a ruta phpBB foro (como "cach�")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'Automaticamente guardar cach�';
$lang['xs_auto_compile_explain'] = 'Esto compilar� autom�ticamente las plantillas si es necesario y las guardar� en el directorio cach�.';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Automaticamente re-compilar cach�';
$lang['xs_auto_recompile_explain'] = 'Esto re-compilara automaticamente la cache si el archivo de plantilla original fue cambiado.';
// xs_separator
$lang['xs_separator'] = 'Separador nombre de archivo';
$lang['xs_separator_explain'] = 'Si especifica "/" entonces la cache sera guardada en los sub directorios con el nombre de la plantilla (como archivo "subSilver/admin/page_header.php" ser� guardado en el directorio cach� como "subSilver/admin/page_header.php"), si selecciona algo como "." toda la cach� ser� guardada en un directorio (como archivo "subSilver/admin/page_header.php" ser� guardado en el directorio cach� como "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'Extensi�n de archivos cach�';
$lang['xs_php_explain'] = 'Esta es la extensi�n de los archivos cach�. Los archivos se almacenan en formato php as� que la extensi�n por defecto es �php�. No incluir punto';
// xs_def_template
$lang['xs_def_template'] = 'Por defecto el directorio de plantillas';
$lang['xs_def_template_explain'] = 'Si el archivo tpl no se encuentra en el directorio de plantillas corriente (eso pudo suceder si tu modded el phpBB incorrectamente ) entonces el sistema de plantilla buscar� el mismo archivo en este directorio (como si la plantilla actual es "myTemplate" y el script requiere archivo "myTemplate/myfile.tpl" y ese archivo no es all�, el sistema de plantillas buscar� ese archivo como "subSilver/myfile.tpl"). Seleccione para vaciar para desactivar esta caracter�stica.';
// xs_check_switches
$lang['xs_check_switches'] = 'Chequear switches mientras compila';
$lang['xs_check_switches_explain'] = 'Esta caracteristica chequea errores en plantillas. Desconectandolo acelerar� la compilaci�n, pero el compilador puedo saltar algunos errores en plantillas si la plantilla tiene errores.<br /><br />El chequeo elegante comprobar� las plantillas para saber si hay errores y fijar� autom�ticamente todos los errores sabidos (hay pocos errores tipogr�ficos sabidos en diversos mods). Works little bit slower than simple check.<br /><br />Pero a veces la plantilla busca correctamente solo cuando el chequeo de error es desactivado. Esto sucede debido a la mala codificaci�n del HTML - contacte quienquiera que escribi� el archivo tpl si deseas fijar errores.<br /><br />Si la caracteristica cach� esta desactivada entonces para una compilaci�n m�s r�pida es mejor desactivar esto.';
$lang['xs_check_switches_0'] = 'Off';
$lang['xs_check_switches_1'] = 'Chequeo elegante';
$lang['xs_check_switches_2'] = 'Chequeo simple';
// xs_use_isset
$lang['xs_use_isset'] = 'Chequear las variables con el isset() en c�digo compilado';

// Debug info
$lang['xs_debug_header'] = 'Informaci�n de eliminaci�n de errores';
$lang['xs_debug_explain'] = 'Esto es informaci�n de eliminaci�n de errores. Usado para buscar/corregir problemas cuando se configura la cach�.';
$lang['xs_debug_vars'] = 'Variables de la plantilla';
$lang['xs_debug_tpl_name'] = 'Nombre de archivo de la plantilla:';
$lang['xs_debug_cache_filename'] = 'Nombre de archivo de cach�:';
$lang['xs_debug_data'] = 'Datos de eliminaci�n de errores:';

$lang['xs_check_hdr'] = 'Chequeando cach� para %s';
$lang['xs_check_filename'] = 'Error: nombre de archivo inv�lido';
$lang['xs_check_openfile1'] = 'Error: no se puede abrir el archivo "%s". Intentar� crear directorios...';
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
$lang['Category_desc'] = 'Descripci�n';
$lang['Hierarchy_setting'] = 'Ajustes de la jerarqu�a de las categor�as';
$lang['Category_config_error_fixed'] = 'Un error en el setup de la categoria a sido correctamente corregido';

// Split Announcements/Stickys
$lang['announce_settings'] = 'Ajustes de Anuncios';
$lang['enable_announce'] = 'Mostrar Anuncios del foro en el �ndice';
$lang['enable_announce_explain'] = 'Esta opci�n activa o desactiva los Anuncios del foro en la p�gina �ndice.';

$lang['announcement_duration'] = 'Duraci�n de los Anuncios en el �ndice';
$lang['announcement_duration_explain'] = 'N�mero de <strong>d�as</strong> para mostrar los Anuncios del Foro en la p�gina �ndice.';
$lang['announcement_duration_explain'] .= '<br/>(Introduciendo <b>0 (Cero)</b> los Anuncios ser�n mostrados indefinidamente)';

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
$lang['Rank_image_explain'] = 'Utilizar esto para definir una imagen peque�a asociada al rango.';
$lang['Rank_image_explain'] .= '<br/>Esto es relativo a la ruta raiz de PNphpBB2 si incluyes una ruta relativa a donde se localizan las im�genes.<br/>(NOTA: Si solamente se especifica la imagen (image.gif), entonces se utilizar� la imagen basada en el nombre de la plantilla, theme PostNuke, y lenguaje.)'; 
$lang['Admin_intro'] = 'Gracias por elegir PNphpBB como tu soluci�n de foro. Esta pantalla te dar� una descripci�n r�pida de toda la variada estad�stica de tu foro. T� puedes regresar a esta p�gina clicando en el link de <u>�ndice del Administrador</u> en el panel izquierdo. Para regresar al �ndice de tu foro, clica en el logo de PNphpBB tambi�n en el panel izquierdo. Los otros links del lado izquierdo de esta pantalla permitir�n que controles cada aspecto de tu foro. Cada pantalla tendr� instrucciones de c�mo utilizar las herramientas.';

$lang['PNphpBB_Version'] = 'Versi�n de PNphpBB';
$lang['phpBB_Version'] = 'Versi�n de phpBB';
$lang['PNphpBB_Config'] = 'Configuraci�n de PNphpBB';
$lang['Utility'] = 'Utilidades';

// limited post edit time MOD 
$lang['edit_time'] = 'Tiempo de Editar mensaje'; 
$lang['edit_time_explain'] = 'El tiempo (en minutos) que el usuario tiene para editar su mensaje. Ajustar este valor a 0, el tiempo es ilimitado.'; 

// Enable-Disable theme matching functions
$lang['theme_matching'] = 'Activar emparejar Theme';
$lang['theme_matching_explain'] = 'Activar o desactivar el uso de la caracteristica de emparejar theme. Emparejar theme procurar� crear una hoja del estilo y un sistema de cellpics para el theme actual si un sistema no esta ya disponible. <br><b>Nota:</b> Con emparejador de theme desactivado el foro usar� default.css y cellpics encontrados en el directorio raiz de cellpics.';

// Exclude forum from global announcments
$lang['Exclude_global_announce'] = 'Excluir este foro de Anuncios Gloables';
$lang['Exclude_global_announce_explain'] = 'Si se selecciona esta opci�n este foro ser� excluido de mostrar sus anuncios en el �ndice .';

// Support forum
$lang['Support_forum'] = 'Esto es un foro de soporte';
$lang['Support_forum_explain'] = 'Si este foro es demandado como foro de la ayuda, puedes elegir esta opci�n para mostrar una lista del estado de los flags definidos por el usuario en el nivel de tema para indicar el estado de la petici�n del servicio. Este item puede ser actualizado por el administrador o moderador del foro.';

// Gravatars
$lang['Allow_gravatars'] = "Permitir <a href=\"http://www.gravatar.com\">Gravatars</a>";
//
// �Esto es todo amigos!
// -------------------------------------------------

?>
