<?php
/***************************************************************************
 *                            lang_admin.php [Spanish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2003/02/21 06:18:30 bob Exp $
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Administraci�n General";
$lang['Users'] = "Administraci�n de los Usuarios";
$lang['Groups'] = "Administraci�n de los Grupos";
$lang['Forums'] = "Administraci�n de los Foros";
$lang['Styles'] = "Administraci�n de los Estilos";

$lang['Configuration'] = "Configuraci�n";
$lang['Permissions'] = "Permisos";
$lang['Manage'] = "Management";
$lang['Disallow'] = "Deshabilitar nombres de usuario";
$lang['Prune'] = "Purgar";
$lang['Mass_Email'] = "Correo Masivo";
$lang['Ranks'] = "Rangos";
$lang['Smilies'] = "Emoticons";
$lang['Ban_Management'] = "Control de Exclusion";
$lang['Word_Censor'] = "Palabras Censuradas";
$lang['Export'] = "Exportar";
$lang['Create_new'] = "Crear";
$lang['Add_new'] = "Agregar";
$lang['Backup_DB'] = "Backup de la Base de Datos";
$lang['Restore_DB'] = "Restaurar la Base de Datos";


//
// Index
//
$lang['Admin'] = "Administraci�n";
$lang['Not_admin'] = "Usted no esta autorizado para administrar este Foro";
$lang['Welcome_phpBB'] = "Bienvenido a phpBB";
$lang['Admin_intro'] = "Gracias por elegir phpBB como su soluci�n para su foro. Esta pantalla le dar� una s�ntesis de las principales estad�sticas de su foro. Puede regresar a esta p�gina clickeando en el link de <u>Indice del Administrador</u> en el panel de la izquierda. Para regresar al �ndice de su foto, clickee el logo de phpBB tambi�n ubicado en el panel izquierdo. Los otros links ubicados a la izquierda de esta pantalla le permitir�n controlar todos los aspectos de este foro, cada pantalla tendr� instrucciones de como utilizar las herramientas.";
$lang['Main_index'] = "Indice del Foro";
$lang['Forum_stats'] = "Estad�sticas del Foro";
$lang['Admin_Index'] = "Indice del Administrador";
$lang['Preview_forum'] = "Vista previa del Foro";

$lang['Click_return_admin_index'] = "presione %sAqui%s para retornar al Indice del Administrador";

$lang['Statistic'] = "Estad�stica";
$lang['Value'] = "Valor";
$lang['Number_posts'] = "Cantidad de env�os";
$lang['Posts_per_day'] = "Env�os por d�a";
$lang['Number_topics'] = "Cantidad de t�picos";
$lang['Topics_per_day'] = "T�picos por d�a";
$lang['Number_users'] = "Cantidad de usuarios";
$lang['Users_per_day'] = "Usuarios por d�a";
$lang['Board_started'] = "Fecha de inicio del Foro";
$lang['Avatar_dir_size'] = "Tama�o del directorio de Im�genes";
$lang['Database_size'] = "Tama�o de la Base de Datos";
$lang['Gzip_compression'] ="Tipo de Compresi�n Gzip";
$lang['Not_available'] = "No est� disponible";

$lang['ON'] = "ON"; // This is for GZip compression
$lang['OFF'] = "OFF"; 


//
// DB Utils
//
$lang['Database_Utilities'] = "Utilitarios de la Base de Datos";

$lang['Restore'] = "Restaurar";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Esto restaurar� todas las tablas de phpBB desde un archivo previamente guardado. Si su servidor lo soporta usted puede subir un archivo de texto comprimido mediante el gzip y �ste sera automaticamente descomprimido automaticamente. <b>ATENCION</b> Esto sobre-escribir� la informaci�n existente. La restauraci�n puede durar unos minutos, por favor qu�dese en esta p�gina hasta que el proceso se haya completado.";
$lang['Backup_explain'] = "Desde aqui usted puede hacer una copia de seguridad (backup) de toda la informaci�n relacionado con phpBB. Si usted tiene tablas adicionales en la misma Base de Datos de las que quisiera realizar un backup ingrese sus nombres separados por comas en el campo de Tablas Adicionales. Si su servidor lo soporta puede utilizar el gzip para comprimir el archivo y reducir su tama�a antes de descargarlo.";

$lang['Backup_options'] = "Opciones del Backup";
$lang['Start_backup'] = "Comenzar el Backup";
$lang['Full_backup'] = "Backup completo";
$lang['Structure_backup'] = "S�lo la Estructura";
$lang['Data_backup'] = "S�lo los Datos";
$lang['Additional_tables'] = "Tablas adicionales";
$lang['Gzip_compress'] = "Compresi�n en un archivo Gzip";
$lang['Select_file'] = "Seleccionar un archivo";
$lang['Start_Restore'] = "Comenzar la Restauraci�n";

$lang['Restore_success'] = "La Base de Datos ha sido Restaurada.<br /><br />Su Foro deberia volver a la normalidad una vez realizado el proceso.";
$lang['Backup_download'] = "La descarga comenzara enseguida, por favor espere un momento";
$lang['Backups_not_supported'] = "Disculpe pero la opcion de backup de su Base de Datos no esta soportada por su sistema";

$lang['Restore_Error_uploading'] = "Error subiendo el archivo backup";
$lang['Restore_Error_filename'] = "Error en el nombre de archivo, por favor intenet con un archivo diferente";
$lang['Restore_Error_decompress'] = "No se puede descomprimir un archivo gzip, por favor subalo en una version de texto";
$lang['Restore_Error_no_file'] = "Ningun archivo ha sido subido";


//
// Auth pages
//
$lang['Select_a_User'] = "Seleccionar un Usuario";
$lang['Select_a_Group'] = "Seleccionar un Grupo";
$lang['Select_a_Forum'] = "Seleccionar un Foro";
$lang['Auth_Control_User'] = "Control de Permisos a los Usuario"; 
$lang['Auth_Control_Group'] = "Control de Permisos a los Grupos"; 
$lang['Auth_Control_Forum'] = "Control de Permisos a los Foros"; 
$lang['Look_up_User'] = "Observar un Usuario";
$lang['Look_up_Group'] = "Observar un Grupo"; 
$lang['Look_up_Forum'] = "Observar un Foro"; 

$lang['Group_auth_explain'] = "Desde aqu� podr� cambiar los permisos y el estado del moderador asignado a cada grupo de usuarios. Recuerde que cambiando los permisos del Grupo, que los permisos individuales cambiar�n una vez que la persona ingrese al foro. Usted ser� advertido en este caso.";
$lang['User_auth_explain'] = "Desde aqu� usted puede cambiar los permisos y estado del moderador asignado a cada usuario. Tenga presente que cambiando los permisos de un usuario los permisos del grupo permaneceran sin cambiar hasta que el usuario entre a los foros. Usted ser� advertido en este caso.";
$lang['Forum_auth_explain'] = "Desde aqu� puede cambiar los niveles de autorizaci�n de cada foro. Para realizar esto tiene dos modos; uno simple y otro avanzado. Este �ltimo le brindar� mayor control para la operaci�n y el funcionamiento de cada foro. Tenga en cuenta que al cambiar los niveles de cada foro puede afectar el funcionamiento de cada usuario seg�n el foro y los permisos que tenga el usuario.";

$lang['Simple_mode'] = "Modalidad Simple";
$lang['Advanced_mode'] = "Modalidad Avanzada";
$lang['Moderator_status'] = "Estado del Moderador";

$lang['Allowed_Access'] = "Acseso Permitido";
$lang['Disallowed_Access'] = "Acseso no Permitido";
$lang['Is_Moderator'] = "con Moderador";
$lang['Not_Moderator'] = "sin Moderador";

$lang['Conflict_warning'] = "Advertencia de Conflicto en Autorizaci�n";
$lang['Conflict_access_userauth'] = "Este usuario a�n posee acceso a este foro debido al Grupo al cual pertenece. Usted deber� cambiar los permisos del grupo o borrar al usuario del Grupo para preveer que el usuario no tenga acceso a este foro. Los derechos del Grupo y el Usuario se explican abajo.";
$lang['Conflict_mod_userauth'] = "Este usuario todav�a posee derechos de Moderador a trav�s de un Grupo al cual pertence. Usted deber� cambiar los permisos del grupo o borrar al usuario de dicho Grupo para estar seguro que este usuario no tenga acceso al foro con permisos de Moderar. Los derechos se explican abajo.";

$lang['Conflict_access_groupauth'] = "El siguiente usuario (o usuarios) todav�a tiene acceso a este foro debido a los permisos que tiene como Usuario. Para que no tenga acceso a este foro usted deber� cambiar sus permisos. Los derechos de Usuarios se explican abajo.";
$lang['Conflict_mod_groupauth'] = "El siguiente usuario (o usuarios) todav�a posee derechos de Moderador en este foro. Para que no tenga acceso a este foro usted deber� cambiar sus permisos de usuario. Los derechos de Usuarios se explican abajo.";

$lang['Public'] = "P�blico";
$lang['Private'] = "Privado";
$lang['Registered'] = "Registrado";
$lang['Administrators'] = "Administrador";
$lang['Hidden'] = "Oculto";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "TODOS";
$lang['Forum_REG'] = "REG";
$lang['Forum_PRIVATE'] = "PRIVADOS";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Ver";
$lang['Read'] = "Leer";
$lang['Post'] = "Envio";
$lang['Reply'] = "Respuesta";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Borrar";
$lang['Sticky'] = "PostIt";
$lang['Announce'] = "Anuncio";
$lang['Vote'] = "Votar";
$lang['Pollcreate'] = "Crear una encuesta";

$lang['Permissions'] = "Permisos";
$lang['Simple_Permission'] = "Permiso Simple";

$lang['User_Level'] = "Nivel de Usuario";
$lang['Auth_User'] = "Usuario";
$lang['Auth_Admin'] = "Administrador";
$lang['Group_memberships'] = "Grupo de Usuarios";
$lang['Usergroup_members'] = "Este Grupo contiene los siguientes Usuarios";

$lang['Forum_auth_updated'] = "Permiso del Foro actualizado";
$lang['User_auth_updated'] = "Permiso del usuario actualizado";
$lang['Group_auth_updated'] = "Permiso del Grupo actualizado";

$lang['Auth_updated'] = "los permisos han sido cambiados";
$lang['Click_return_userauth'] = "Presione %saqui%s para vovler a ver los Permisos de los Usuarios";
$lang['Click_return_groupauth'] = "Presione %saqui%s para vovler a ver los Permisos del Grupo";
$lang['Click_return_forumauth'] = "Presione %saqui%s para vovler a ver los Permisos del Foro";


//
// Banning
//
$lang['Ban_control'] = "Control de Exclusi�n";
$lang['Ban_explain'] = "Desde aqu� usted puede banear a un usuario. Puede banear a los usuarios por su nombre, por su direcci�n IP, o por su Hostname. Este m�todo previene que un usuario tenga acceso a la p�gina principal del foro. Para prevenir que el Usuario se registre con una nueva cuenta tambi�n puede bannear su direcci�n de email. Tenga en cuenta que baneando una direcci�n de email no evitar� que el usuario pueda ingresar al foro ni que publique mensajes. Para realizar eso deber� utilizar uno de los dos m�todos explicados anteriormente.";
$lang['Ban_explain_warn'] = "Tenga en cuenta que colocando un RANGO de direcciones IP usted banea a todas las direcciones que se encuentran dentro del Rango de la lista de bans.  Si realmente debe utilizar un rango intente utilizar uno peque�o para asi no banear a otros usuarios.";

$lang['Select_username'] = "Selecione un Nombre de Usuario";
$lang['Select_ip'] = "Seleccione una direcci�n IP";
$lang['Select_email'] = "Seleccione una direcci�n de Email";

$lang['Ban_username'] = "Banear a uno o varios Usuarios";


$lang['Ban_IP'] = "Banear una o varias direcciones IP o HOSTNAMES";
$lang['IP_hostname'] = "Direcciones IP o HOSTNAMES";
$lang['Ban_IP_explain'] = "Para especificar diferentes IPs o Nombres de Dominio, sep�relos con comas. Para especificar un rango de direcciones IP separe el comienzo y el final utilizando un gui�n (-), para especificar un comod�n utilize el *";

$lang['Ban_email'] = "Banear una o varias direcciones de email";
$lang['Ban_email_explain'] = "Para especificar m�s de un email, col�quelos separados por comas. Para especificar un comod�n de usarios utilece *, por ejemplo *@hotmail.com";

$lang['Unban_username'] = "Quitar ban de uno o varios Usuarios";
$lang['Unban_username_explain'] = "Usted puede quitar el ban de m�ltiples Usuarios usando la correcta combinaci�n de mouse y teclado de su computadora y navegador";

$lang['Unban_IP'] = "Quitar ban de una o varias Direcciones IP";
$lang['Unban_IP_explain'] = "Usted puede quitar el ban a m�ltiples direcciones IP usando la correcta combinaci�n de mouse y teclado de su computadora y navegador";

$lang['Unban_email'] = "Quitar ban de una o varias direcciones de email";
$lang['Unban_email_explain'] = "Usted puede quitar el ban de m�ltiples direcciones de email usando la correcta combinaci�n del mouse y teclado de su computadora y navegador";

$lang['No_banned_users'] = "No hay Usuarios baneados";
$lang['No_banned_ip'] = "No hay direcciones de IP baneadas";
$lang['No_banned_email'] = "No hay direcciones de email baneadas";

$lang['Ban_update_sucessful'] = "La lista de BAN ha sido actualizada correctamente";
$lang['Click_return_banadmin'] = "Presione %sAqu�%s para volver al Panel de Control de BANS";


//
// Configuration
//
$lang['General_Config'] = "Configuraci�n General";
$lang['Config_explain'] = "El siguiente formulario, le permitir� cambiar las opciones de su foro. Para la configuraci�n de Usuarios y Foros use los enlaces de la izquierda.";

$lang['Click_return_config'] = "Presione %sAqu�%s para volver a la Configuraci�n General";

$lang['General_settings'] = "Configuraci�n General del Foro";
$lang['Server_name'] = "Nombre de Dominio";
$lang['Server_name_explain'] = "El nombre de dominio en el que corre este Foro";
$lang['Script_path'] = "Path del Script";
$lang['Script_path_explain'] = "El path en donde phpBB2 est� ubicado, relativo al nombre de dominio";
$lang['Server_port'] = "Puerto del Servidor";
$lang['Server_port_explain'] = "El puerto en el que corre el servidor, generalmente 80. Solo cambiar si difiere de este valor.";
$lang['Site_name'] = "Nombre del Sitio";
$lang['Site_desc'] = "Descripci�n del Sito";
$lang['Board_disable'] = "Desactivar Foro";
$lang['Board_disable_explain'] = "Esto har� que el los Usuarios no tengan acceso al Foro. No se desloguee mientras desactiva el Foro, ya que no podr� volver a loguearse nuevamente";
$lang['Acct_activation'] = "Activar cuenta";
$lang['Acc_None'] = "Ninguna"; // These three entries are the type of activation
$lang['Acc_User'] = "Usuario";
$lang['Acc_Admin'] = "Administrador";

$lang['Abilities_settings'] = "Configuraci�n B�sica de Usuario y del Foro";
$lang['Max_poll_options'] = "N�mero m�ximo de items en Encuentas";
$lang['Flood_Interval'] = "Intervalo de Flood";
$lang['Flood_Interval_explain'] = "Cantidad de segundos que el usuario debe esperar para publicar topicos";
$lang['Board_email_form'] = "Email de Usuarios a trav�s del Foro";
$lang['Board_email_form_explain'] = "Los usuarios se env�an emails mediante el Foro";
$lang['Topics_per_page'] = "T�picos por Pagina";
$lang['Posts_per_page'] = "Respuestas por Pagina";
$lang['Hot_threshold'] = "Cantidad de respuestas para ser considerado Popular";
$lang['Default_style'] = "Estilo por defecto";
$lang['Override_style'] = "Ignorar el estilo del Usuario";
$lang['Override_style_explain'] = "Se utilizar� el estilo seleccionado por defecto sin importar la elecci�n del usuario";
$lang['Default_language'] = "Lenguaje por Defecto";
$lang['Date_format'] = "Formato de la Fecha";
$lang['System_timezone'] = "Zona Horaria";
$lang['Enable_gzip'] = "Activar la Compresion GZip";
$lang['Enable_prune'] = "Habilitar Pruning en el Foro";
$lang['Allow_HTML'] = "Permitir HTML";
$lang['Allow_BBCode'] = "Permitir BBCode";
$lang['Allowed_tags'] = "Permitir HTML tags";
$lang['Allowed_tags_explain'] = "Separare tags con comas";
$lang['Allow_smilies'] = "Permitir Emoticons";
$lang['Smilies_path'] = "Almacenaje de la ruta de los Emoticons";
$lang['Smilies_path_explain'] = "Ruta desde el directorio phpBB , ejemplo images/smilies";
$lang['Allow_sig'] = "Permitir Firmas";
$lang['Max_sig_length'] = "M�xima longitud de la Firma";
$lang['Max_sig_length_explain'] = "M�ximo cantidad de caracteres de la Firma";
$lang['Allow_name_change'] = "Permitir el Cambio del Nombre de Usuario";

$lang['Avatar_settings'] = "Configuraci�n de los Avatars";
$lang['Allow_local'] = "Habilitar galer�as de Avatars";
$lang['Allow_remote'] = "Habilitar Avatars Remotos";
$lang['Allow_remote_explain'] = "Permitir mostrar Avatars guardados en otros sitios web";
$lang['Allow_upload'] = "Habilitar upload de Avatars";
$lang['Max_filesize'] = "Tama�o m�ximo para las im�genes";
$lang['Max_filesize_explain'] = "Limita la cantidad de bytes que puede tener un Avatar";
$lang['Max_avatar_size'] = "M�ximo Tama�o del Avatar";
$lang['Max_avatar_size_explain'] = "(Altura x Ancho en pixels)";
$lang['Avatar_storage_path'] = "Ruta del Avatar";
$lang['Avatar_storage_path_explain'] = "Ruta dentro de phpBB donde se encuentran los Avatars, ejemplo images/avatars";
$lang['Avatar_gallery_path'] = "Ruta de la Galer�a de Avatars";
$lang['Avatar_gallery_path_explain'] = "Ruta dentro de phpBB de la galer�a, e.g. images/avatars/gallery";

$lang['COPPA_settings'] = "Configuraciones COPPA";
$lang['COPPA_fax'] = "N�mero de Fax COPPA";
$lang['COPPA_mail'] = "Direcci�n de Correo COPPA";
$lang['COPPA_mail_explain'] = "Esta es la direcci�n de correo donde los padres deben enviar el formulario COPPA";

$lang['Email_settings'] = "Configuraci�n del Email";
$lang['Admin_email'] = "Direcci�n de email del Administrador";
$lang['Email_sig'] = "Firma";
$lang['Email_sig_explain'] = "Este texto se a�adir� al final de cada email";
$lang['Use_SMTP'] = "Usar servidor SMTP para Email";
$lang['Use_SMTP_explain'] = "Diga si usted puede y/o debe enviar los emails por un servidor SMTP";
$lang['SMTP_server'] = "Direcci�n SMTP del Servidor";
$lang['SMTP_username'] = "Nombre de usuario del SMTP";
$lang['SMTP_username_explain'] = "Ingrese un nombre de usuario solamente si su servidor SMTP lo requiere";
$lang['SMTP_password'] = "Contrase�a del SMTP";
$lang['SMTP_password_explain'] = "Ingrese una contrase�a solamente si su servidor SMTP lo requiere";

$lang['Disable_privmsg'] = "Mensaje Privado";
$lang['Inbox_limits'] = "M�xima cantidad de mensajes en la Bandeja de Entrada";
$lang['Sentbox_limits'] = "M�xima cantidad de mensajes en la Bandeja de Salida";
$lang['Savebox_limits'] = "M�xima cantidad de mensajes en La Carpeta para Guardar";

$lang['Cookie_settings'] = "Configuraci�n de las Cookies"; 
$lang['Cookie_settings_explain'] = "Esto controla como se env�an las cookies al Navegador, en la mayor�a de los casos la configuraci�n preestablecida sera m�s que suficiente. Si necesita cambiar esto tenga cuidado, ya que en caso de configurarlo mal podr�a hacer que sus Usuarios no puedan Ingresar al Foro";
$lang['Cookie_domain'] = "Dominio de la Cookie";
$lang['Cookie_name'] = "Nombre de la Cookie";
$lang['Cookie_path'] = "Ruta de la Cookie";
$lang['Cookie_secure'] = "Cookie segura [ https ]";
$lang['Cookie_secure_explain'] = "Si su servidor est� corriendo via SSL marque esta opci�n de otra manera d�jelo deshabilitado";
$lang['Session_length'] = "Duraci�n de la sesi�n [ segundos ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Administraci�n del Foro";
$lang['Forum_admin_explain'] = "Desde este panel usted puede a�adir, borrar, editar, y re-ordenar categor�as y Foros";
$lang['Edit_forum'] = "Editar el Foro";
$lang['Create_forum'] = "Crear un nuevo Foro";
$lang['Create_category'] = "Crear una nueva Categor�a";
$lang['Remove'] = "Quitar";
$lang['Action'] = "Acci�n";
$lang['Update_order'] = "Actualizar Orden";
$lang['Config_updated'] = "Configuraci�n del Foro actualizada satisfactoriamente";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Borrar";
$lang['Move_up'] = "Hacia arriba";
$lang['Move_down'] = "Hacia abajo";
$lang['Resync'] = "sincronizar";
$lang['No_mode'] = "Ning�n modo ha sido seleccionado";
$lang['Forum_edit_delete_explain'] = "El siguiente formulario le permitir� personalizar las opciones del Foro. Para la configuraci�n de usuarios y Foros utilice los enlaces de la izquierda.";

$lang['Move_contents'] = "Mover todos los contenidos";
$lang['Forum_delete'] = "Borrar el Foro";
$lang['Forum_delete_explain'] = "El siguiente formulario le permitir� Borrar alg�n foro (o categor�a) y decir donde desea colocar todos los T�picos y Categor�as.";

$lang['Forum_settings'] = "Configuraci�n General del Foro";
$lang['Forum_name'] = "Nombre del Foro";
$lang['Forum_desc'] = "Descripci�n";
$lang['Forum_status'] = "Estado del Foro";
$lang['Forum_pruning'] = "Auto-pruning";

$lang['prune_freq'] = 'Chequear t�picos y edad';//Ver Pruning!
$lang['prune_days'] = "Remover T�picos que no tienen respuesta";
$lang['Set_prune_data'] = "Usted ha seleccionado la opci�n Auto-pruning para este foro pero no ha seleccionado la frecuencia o cantidad de d�as para el PRUNE. Por favor regrese y efect�e los cambios";

$lang['Move_and_Delete'] = "Mover y Borrar";

$lang['Delete_all_posts'] = "Borrar todos los Temas";
$lang['Nowhere_to_move'] = "Nowhere to move too";

$lang['Edit_Category'] = "Editar Categor�a";
$lang['Edit_Category_explain'] = "Utilice este formulario para Editar categor�as";

$lang['Forums_updated'] = "La informaci�n del Foro y sus categor�as han sido actualizadas satisfactoriamente";

$lang['Must_delete_forums'] = "Necesita Borrar todos los foros antes de borrar una Categor�a";

$lang['Click_return_forumadmin'] = "Presione %sAqu�%s para volver a la Administraci�n del Foro";


//
// Smiley Management
//
$lang['smiley_title'] = "Utilitario para la edici�n de Smilies";
$lang['smile_desc'] = "Desde esta p�gina usted puede a�adir, quitar o editar alg�n emoticon para que los Usuarios utilicen en el foro y en los mensajes Privados";

$lang['smiley_config'] = "Configuraci�n de Smiley";
$lang['smiley_code'] = "C�dido de Smiley";
$lang['smiley_url'] = "Archivo de Imagen del Smiley";
$lang['smiley_emot'] = "Smiley Emotion";
$lang['smile_add'] = "A�adir un nuevo Smiley";
$lang['Smile'] = "Smile";
$lang['Emotion'] = "Emoci�n";

$lang['Select_pak'] = "Seleccione el archivo .pak";
$lang['replace_existing'] = "Reemplazar Smiles Existentes";
$lang['keep_existing'] = "Mantener Smiles Existentes";
$lang['smiley_import_inst'] = "Usted debe descomprimir el paquete de Smiles y subir todos los archivos en el directorio de Smiles para as� lograr su correcta instalaci�n. Luego seleccione la informaci�n correcta desde este formulario para as� poder importar los Smiles";
$lang['smiley_import'] = "Importar paquete de Smiles";
$lang['choose_smile_pak'] = "Escoger archivo de paquete (.pak)";
$lang['import'] = "Importar Smileys";
$lang['smile_conflicts'] = "Que se deber�a realizar en caso de conflicto";
$lang['del_existing_smileys'] = "Borrar los smiles existentes antes de importarlos";
$lang['import_smile_pack'] = "Importar Paquete de Smileys";
$lang['export_smile_pack'] = "Crear un paquete de Smileys";
$lang['export_smiles'] = "Para crear un paquete de Smiles de sus smileys instalados, presione %sAqu�%s para bajar el archivo smiles.pak. Nombre este archivo de forma apropiada pero aseg�rese de mantener la extension .pak. Luego cree un archivo zip que contenga todos los smileys m�s el archivo .pak.";

$lang['smiley_add_success'] = "Los Smileys han sido a�adidos satisfactoriamente";
$lang['smiley_edit_success'] = "Los Smileys han sido actualizados satisfactoriamente ";
$lang['smiley_import_success'] = "El paquete de Smileys ha sido importado correctamente.";
$lang['smiley_del_success'] = "Los Smileys han sido removidos satisfactoriamente.";
$lang['Click_return_smileadmin'] = "Presione %sAqu�%s para volver al Panel de Smiles";


//
// User Management
//
$lang['User_admin'] = "Administraci�n de Usuarios";
$lang['User_admin_explain'] = "Desde aqu� usted puede cambiar la informaci�n del usuario. Para modificar los permisos de un Usuario por favor utilice el Sistema de Permisos de usuarios y Grupos.";

$lang['Look_up_user'] = "Observar Usuario";

$lang['Admin_user_fail'] = "No se ha logrado actualizar el perfil del Usuario";
$lang['Admin_user_updated'] = "El perfil del Usuario ha sido actualizado satisfactoriamente";
$lang['Click_return_useradmin'] = "Presione %sAqu�%s para volver al Panel de Administraci�n de Usuarios";

$lang['User_delete'] = "Borrar Usuario";
$lang['User_delete_explain'] = "Presione aqu� para borrar este Usuario. Tenga en cuenta que luego no podr� restaurarlo.";
$lang['User_deleted'] = "El Usuario ha sido borrado satisfactoriamente.";

$lang['User_status'] = "Usuario Activo";
$lang['User_allowpm'] = "Puede enviar mensajes privados";
$lang['User_allowavatar'] = "Puede motrar su Avatar";

$lang['Admin_avatar_explain'] = "Desde aqu� puede ver y borrar el Avatar del Usuario";

$lang['User_special'] = "Campos especiales para Administradores";
$lang['User_special_explain'] = "Estos campos no est�n disponibles para que los Usuarios lo modifiquen. Desde aqu� usted puede configurar el status y otras opciones que los Usuarios no pueden modificar.";


//
// Group Management
//
$lang['Group_administration'] = "Administraci�n de Grupos";
$lang['Group_admin_explain'] = "Desde este panel puede modificar los Grupos, usted puede borrar, crear y editar los Grupos existentes. Tambi�n puede escoger los Moderadores y cambiar el nombre del Grupo y su descripci�n";
$lang['Error_updating_groups'] = "Ha ocurrido un error actualizando el Grupo";
$lang['Updated_group'] = "El Grupo ha sido actualizado correctamente";
$lang['Added_new_group'] = "El Nuevo Grupo ha sido creado";
$lang['Deleted_group'] = "El Grupo ha sido borrado";
$lang['New_group'] = "Crear Nuevo Grupo";
$lang['Edit_group'] = "Editar Grupo";
$lang['group_name'] = "Nombre del Grupo";
$lang['group_description'] = "Descripci�n del Grupo";
$lang['group_moderator'] = "Moderador del Grupo";
$lang['group_status'] = "Status del Grupo";
$lang['group_open'] = "Grupo Abierto";
$lang['group_closed'] = "Grupo Cerrado";
$lang['group_hidden'] = "Grupo Oculto";
$lang['group_delete'] = "Borrar Grupo";
$lang['group_delete_check'] = "Borrar este Grupo";
$lang['submit_group_changes'] = "Aceptar Cambios";
$lang['reset_group_changes'] = "Anular Cambios";
$lang['No_group_name'] = "Debe especificar un Nombre para este Grupo";
$lang['No_group_moderator'] = "Debe especificar un Moderador para este Grupo";
$lang['No_group_mode'] = "Debe especificar el modo de este Grupo, Abrierto o Cerrado";
$lang['delete_group_moderator'] = "�Borrar el antiguo moderador del Grupo?";
$lang['delete_moderator_explain'] = "Si est� cambiando el moderador del Grupo, seleccione esta casilla para remover el antiguo Moderador del Grupo. Sino el Usuario se convertir� en un miembro regular.";
$lang['Click_return_groupsadmin'] = "Presione %sAqu�%s para volver al Panel de Administraci�n de Grupos.";
$lang['Select_group'] = "Seleccione un Grupo";
$lang['Look_up_group'] = "Observar un Grupo";
$lang['No_group_action'] = 'No se especific� una acci�n'; 


//
// Prune Administration
//
$lang['Forum_Prune'] = "Prune de Foros";
$lang['Forum_Prune_explain'] = "Esto borrar� todos los t�picos en los que no se hayan publicado nuevos mensajes en los d�as que usted seleccion�. Si no ingresa un n�mero entonces todos los t�picos ser�n borrados. No se borrar�n t�picos en los que hay encuestas que est�n corriendo ni anuncios. Tendr� que remover estos t�picos en forma manual.";
$lang['Do_Prune'] = "Realizar el Prune";
$lang['All_Forums'] = "Todos los Foros";
$lang['Prune_topics_not_posted'] = "Borrar t�picos sin respuestas de una antig�edad de estos d�as";
$lang['Topics_pruned'] = "T�picos borrados";
$lang['Posts_pruned'] = "Mensajes borrados";
$lang['Prune_success'] = "El Pruning de los foros fue exitoso";


//
// Word censor
//
$lang['Words_title'] = "Control de Palabras Censuradas";
$lang['Words_explain'] = "Desde aqu� usted puede a�adir, editar, y quitar palabras que autom�ticamente ser�n censuradas de sus foros. Estas palabras no podr�n ser escogidas como nombres de usuarios. Los Asteriscos (*) son aceptados en los campos de las palabras, ejemplo *prueba* , prueba* (acaparar�a pruebalo), *test (acaparar�a enprueba).";
$lang['Word'] = "Palabra";
$lang['Edit_word_censor'] = "Editar el Censor de Palabras";
$lang['Replacement'] = "Reemplazar";
$lang['Add_new_word'] = "Agregar nueva palabra";
$lang['Update_word'] = "Actualizar censor de palabras";

$lang['Must_enter_word'] = "Debe colocar una palabra y su otra palabra para el reemplazo";
$lang['No_word_selected'] = "No se ha seleccionado una palabra para el reemplazo";

$lang['Word_updated'] = "Se han realizado los cambios satisfactoriamente";
$lang['Word_added'] = "La nueva palabra ha sido a�adida con �xito";
$lang['Word_removed'] = "La palabra ha sido removida del Censurador de Palabras";

$lang['Click_return_wordadmin'] = "Clickee %sAqu�%s para regresar al Administrador de Palabras Censuradas";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Desde aqu� usted puede enviar mensajes de email a todos sus Usuarios y Grupos. Al hacer esto un email ser� enviado desde el email administrativo inidicado previamente. Si env�a este email a un Grupo numeroso por favor sea paciente y espere a que termine de cargar la p�gina. Es normal que tarde unos cuantos minutos, usted sera notificado una vez finalizado el env�o.";
$lang['Compose'] = "Escribir"; 

$lang['Recipients'] = "Emails"; 
$lang['All_users'] = "A todos los Usuarios";

$lang['Email_successfull'] = "Su email ha sido enviado";
$lang['Click_return_massemail'] = "Presione %sAqu�%s para volver al Panel para Enviar emails Masivos";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administraci�n de Rangos";
$lang['Ranks_explain'] = "Usando este formulario usted puede a�adir, editar, ver y borrar rangos. Usted tambi�n puede crear rangos";

$lang['Add_new_rank'] = "A�adir Rango";

$lang['Rank_title'] = "T�tulo del Rango";
$lang['Rank_special'] = "Seleccionar como Rangp Especial";
$lang['Rank_minimum'] = "M�nima cantidad de Mensajes";
$lang['Rank_maximum'] = "M�xima cantidad de Mensajes";
$lang['Rank_image'] = "Im�gen del rango (tenga en cuenta la ruta del foro phpBB2)";
$lang['Rank_image_explain'] = "Utilice esto para definir una peque�a imagen para este rango";

$lang['Must_select_rank'] = "Debe seleccionar un Rango";
$lang['No_assigned_rank'] = "No se ha seleccionado un Rango";

$lang['Rank_updated'] = "El Rango ha sido actualizado";
$lang['Rank_added'] = "El nuevo Rango se ha a�adido";
$lang['Rank_removed'] = "El Rango ha sido borrado";

$lang['Click_return_rankadmin'] = "Presione %sAqu�%s para volver al Panel de Adminstraci�n de Rangos";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Control de Admisi�n de Usuario";
$lang['Disallow_explain'] = "Desde aqu� puede controlar los nombres de usuario que desea que no sean utilizados. Para lograr esto debe utilizar comodines con asteriscos (*). Recuerde que no puede prohibir nombres de usuario que ya est�n siendo utilizados. Antes de prohibir dichos nombres debe borrar a los usuarios que lo usen.";

$lang['Delete_disallow'] = "Borrar";
$lang['Delete_disallow_title'] = "Borrar un nombre de usuario no permitido";
$lang['Delete_disallow_explain'] = "Usted puede remover nombres de usuario no permitidos seleccionando el nombre de usuario de la lista y clickeando en Aceptar";

$lang['Add_disallow'] = "A�adir";
$lang['Add_disallow_title'] = "A�adir un nombre de usuario no permitido";
$lang['Add_disallow_explain'] = "Usted puede no permitir un nombre de usuario utilizando m�scaras con asteriscos(*)";

$lang['No_disallowed'] = "Nombres de usuarios no permitidos";

$lang['Disallowed_deleted'] = "El nombre de usuario no permitido ha sido borrado";
$lang['Disallow_successful'] = "El nombre de usuario no permitido ha sido agregado";
$lang['Disallowed_already'] = "El nombre de usuario no permitido que ha seleccionado no puede ser seleccionado. Debido a que ya existe en la lista, o existe en la Lista de Palabras Censuradas, o bien ya se encuentra en la lista de usuarios no permitidos";

$lang['Click_return_disallowadmin'] = "Presione %sAqui%s para volver al Control de Admisi�n de Usuario";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administraci�n de Estilos";
$lang['Styles_explain'] = "Desde aqu� usted puede f�cilmente a�adir, quitar y administrar los estilos (plantillas y temas) disponibles para sus usuarios";
$lang['Styles_addnew_explain'] = "La siguiente lista contiene todos los temas que est�n disponibles para las plantillas. Los items de la lista no han sido instalados en la base de los foros phpBB. Para hacer eso simplemente haga clic en el enlace que figura al lado de cada opci�n";

$lang['Select_template'] = "Seleccione una Plantilla";

$lang['Style'] = "Estilo";
$lang['Template'] = "Plantilla";
$lang['Install'] = "Instalar";
$lang['Download'] = "Descargar";

$lang['Edit_theme'] = "Editar Tema";
$lang['Edit_theme_explain'] = "En el siguiente formulario puede editar la configuraci�n del tema seleccionado";

$lang['Create_theme'] = "Crear Tema";
$lang['Create_theme_explain'] = "Utilice el siguiente formulario para crear un tema nuevo para la plantilla seleccionada. Cuando ingrese los colores (los cuales debe ingresar de forma hexadecimal) no debe incluir el # . Ejemplo: CCCCCC es v�lido, no asi lo seria colocar #CCCCCC";

$lang['Export_themes'] = "Exportar Tema";
$lang['Export_explain'] = "Desde este panel usted podra exportar el tema para la plantilla seleccionada. Seleccione la plantilla de la lista debajo y el programa crear� el archivo de configuraci�n del tema y asi podra guardarlo. Si no se puede grabar el archivo se le brindara a usted la oportunidad de Descargarlo. Para que el programa pueda guardarlo usted debe dar permiso de escritura a la carpeta de plantillas (template). Para mas informaci�n utilize la guia del foro phpBB 2";

$lang['Theme_installed'] = "El tema seleccionado ha sido instalado correctamente";
$lang['Style_removed'] = "El estilo seleccionado ha sido quitado de la base de datos. Para removerlo completamente debe borrar el directorio apropiado del directorio de plantillas (template)";
$lang['Theme_info_saved'] = "La informaci�n para la plantilla seleccionada ha sido guardada. Ahora debe regresar los permisos en theme_info.cgf y poner el directorio de plantillas (template) en modo de solo-lectura";
$lang['Theme_updated'] = "El tema seleccionado ha sido actualizado. Ahora debe exportar la configuraci�n del nuevo tema";
$lang['Theme_created'] = "Tema Creado. Ahora debe exportar el tema en el archivo de configuraci�n de temas para asi lograr mantenerlo seguro";

$lang['Confirm_delete_style'] = "Est� seguro que desea borrar este estilo";

$lang['Download_theme_cfg'] = "No se ha podido exportar el archivo ya que no se ha podido escribir en el archivo. Presione el bot�n debajo para descargar este archivo con su navegador. Una vez que lo haya descargado puede moverlo al directorio de las plantillas (template).";
$lang['No_themes'] = "La plantilla que ha seleccionado no tiene temas adjuntos. Para crear un nuevo tema presione en Crear Nuevo Tema en la izquierda del panel";
$lang['No_template_dir'] = "No se ha logrado abrir la carpeta de plantillas. Esto puede deberse a que este con permisos sin lectura, o que �sta no exista.";
$lang['Cannot_remove_style'] = "No puede quitar el estilo seleccionado ya que es el que esta por defecto en el foto. Por favor cambia el que se utiliza por defecto e int�ntelo nuevamente";
$lang['Style_exists'] = "El nombre de estilo seleccionado ya existe, por favor vuelva atr�s y seleccione otro distinto";

$lang['Click_return_styleadmin'] = "Presione %sAqu�%s para volver a la Administraci�n de Estilos";

$lang['Theme_settings'] = "Configuraci�n de Temas";
$lang['Theme_element'] = "Elementos de Temas";
$lang['Simple_name'] = "Nombre simple";
$lang['Value'] = "Valor";
$lang['Save_Settings'] = "Guardar Configuraci�n";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Imagen de Fondo";
$lang['Background_color'] = "Color de Fondo";
$lang['Theme_name'] = "Nombre de Tema";
$lang['Link_color'] = "Color de Link";
$lang['Text_color'] = "Color de Texto";
$lang['VLink_color'] = "Color de Link Visitado";
$lang['ALink_color'] = "Color de Link Activo";
$lang['HLink_color'] = "Color de Link Hoover";
$lang['Tr_color1'] = "Tabla Fila Color 1";
$lang['Tr_color2'] = "Tabla Fila Color 2";
$lang['Tr_color3'] = "Tabla Fila Color 3";
$lang['Tr_class1'] = "Tabla Fila Clase 1";
$lang['Tr_class2'] = "Tabla Fila Clase 2";
$lang['Tr_class3'] = "Tabla Fila Clase 3";
$lang['Th_color1'] = "Tabla Encabezado Color 1";
$lang['Th_color2'] = "Tabla Encabezado Color 2";
$lang['Th_color3'] = "Tabla Encabezado Color 3";
$lang['Th_class1'] = "Tabla Encabezado Clase 1";
$lang['Th_class2'] = "Tabla Encabezado Clase 2";
$lang['Th_class3'] = "Tabla Encabezado Clase 3";
$lang['Td_color1'] = "Tabla Celda Color 1";
$lang['Td_color2'] = "Tabla Celda Color 2";
$lang['Td_color3'] = "Tabla Celda Color 3";
$lang['Td_class1'] = "Tabla Celda Clase 1";
$lang['Td_class2'] = "Tabla Celda Clase 2";
$lang['Td_class3'] = "Tabla Celda Clase 3";
$lang['fontface1'] = "Fuente 1";
$lang['fontface2'] = "Fuente 2";
$lang['fontface3'] = "Fuente 3";
$lang['fontsize1'] = "Fuente 1";
$lang['fontsize2'] = "Fuente 2";
$lang['fontsize3'] = "Fuente 3";
$lang['fontcolor1'] = "Fuente Color 1";
$lang['fontcolor2'] = "Fuente Color 2";
$lang['fontcolor3'] = "Fuente Color 3";
$lang['span_class1'] = "Espacio Clase 1";
$lang['span_class2'] = "Espacio Clase 2";
$lang['span_class3'] = "Espacio Clase 3";
$lang['img_poll_size'] = "Imagen de la Encuesta [px]";
$lang['img_pm_size'] = "Tama�o de Mensajes Privados [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Bienvenidos a la Instalaci�n de los foros phpBB 2";
$lang['Initial_config'] = "Configuraci�n Basica";
$lang['DB_config'] = "Configuraci�n de la Base de Datos";
$lang['Admin_config'] = "Configuraci�n del Administrador";
$lang['continue_upgrade'] = "Una vez que haya descargado el archivo de configuraci�n presione sobre \"Continuar Actualizaci�n\" para continuar con el proceso. por favor espere que se suba el archivo de configuraci�n hasta que el proceso de actualizaci�n finalice";
$lang['upgrade_submit'] = "Continuar Actualizaci�n";

$lang['Installer_Error'] = "Un error ha ocurrido durante la Instalaci�n";
$lang['Previous_Install'] = "No se ha detectado una Instalaci�n previa";
$lang['Install_db_error'] = "Un error ha ocurrido actualizando la Base de Datos";

$lang['Re_install'] = "Su instalaci�n previa todav�a se encuentra activa. <br /><br />Si desea reinstlar los foros phpBB 2 presione Si en el boton debajo. Por favor tenga en cuenta que al realizar esto se destruir� la informaci�n existente, no se har�n copias de seguridad. El usuario administrador y la contrase�a que usted usaba anteriormente ser�n creados nuevamente, m�s no otro tipo de informaci�n <br /><br />�Piense cuidadosamente �ntes de presionar SI!";

$lang['Inst_Step_0'] = "Gracias por elegir phpBB 2. Para finalizar la instalaci�n por favor complete los datos requeridos debajo. Tenga en cuenta que la Base de Datos destinada a los foros ya deber�a existir. Si est� instalando en una Base de Datos que utiliza OBDC, por ejemplo MS Access primero deber� crear un DNS y despu�s continuar.";

$lang['Start_Install'] = "Comenzar Instalaci�n";
$lang['Finish_Install'] = "Finalizar Inatalaci�n";

$lang['Default_lang'] = "Lenguaje por defecto";
$lang['DB_Host'] = "Nombre de Dominio de la Base de Datos / DSN";
$lang['DB_Name'] = "Nombre de su base de Datos";
$lang['DB_Username'] = "Nombre de usuario de la base de datos";
$lang['DB_Password'] = "Contrase�a de la base de datos";
$lang['Database'] = "Su Base de Datos";
$lang['Install_lang'] = "Elija el Lenguaje de Instalaci�n";
$lang['dbms'] = "Tipo de Base de Datos";
$lang['Table_Prefix'] = "Prefijo para tablas en la Base de datos";
$lang['Admin_Username'] = "Nombre de Usuario del Administrador";
$lang['Admin_Password'] = "Contrase�a del Administrador";
$lang['Admin_Password_confirm'] = "Contrase�a de acceso del Administrador [ Confirma ]";

$lang['Inst_Step_2'] = "Su usuario administrador y contrase�a han sido creados. En este punto el proceso de Instalaci�n B�sica ha sido completado. Ahora ser� enviado una pantalla que le permitir� administrar la nueva instalaci�n. Por favor asegurece de verificar la Configuraci�n General y de haber realizado los cambios requeridos. Gracias por escoger phpBB 2";

$lang['Unwriteable_config'] = "Su archivo de configuraci�n esta en un modo de no-escritura. Una copia del archivo de configuraci�n podr� ser descargada cuando presione el bot�n siguiente. Usted debe subir este fichero en el mismo directorio donde se encuentre el foro phpBB 2. Una vez que esto se haya realizado debe ingresar usando el usuario de administrador y contrase�a que usted escogio en el formulario anterior y as� visitar el Control de Administraci�n para ver la configuraci�n general. Gracias por escoger phpBB 2";
$lang['Download_config'] = "Descargar Configuraci�n";

$lang['ftp_choose'] = "Escoger M�todo de Descarga";
$lang['ftp_option'] = "<br />Ya que las extensiones FTP est�n disponibles en esta versi�n de PHP usted podr� escoger si quiere, mediante FTP, colocar el archivo en su lugar autom�ticamente.";
$lang['ftp_instructs'] = "Usted ha seleccionado subir autom�ticamente por ftp el archivo en la cuenta que contiene el phpBB 2. Por favor ingrese la informaci�n solicitada para facilitar el proceso. Tenga en cuenta que la ruta FTP debe ser la ruta exacta al PHPBB 2 como si fuera a subir los archivos usando cualquier cliente de ftp.";
$lang['ftp_info'] = "Ingrese la Informaci�n de su FTP";
$lang['Attempt_ftp'] = "Intentar subir archivo mediante ftp en forma autom�tica";
$lang['Send_file'] = "Env�enme el archivo a mi y yo lo subir� personalmente por FTP";
$lang['ftp_path'] = "Ruta FTP al phpBB 2";
$lang['ftp_username'] = "Nombre de Usuario FTP";
$lang['ftp_password'] = "Contrase�a FTP";
$lang['Transfer_config'] = "Iniciar Transferencia";
$lang['NoFTP_config'] = "El intento se subir por ftp el archivo de configuraci�n ha fallado. Por favor desc�rgue el archivo de configuraci�n y s�balo por FTP en forma manual.";

$lang['Install'] = "Instalar";
$lang['Upgrade'] = "Actualizar";


$lang['Install_Method'] = "Elija su m�todo de Instalacion";

$lang['Install_No_Ext'] = "La configuraci�n de PHP en su servidor no soporta el tipo de base de datos seleccionado";

$lang['Install_No_PCRE'] = "phpBB2 requiere el m�dulo de expresiones regulares compatible con Perl para php, que no figura como soportado en su configuraci�n de php!";

//
// Eso es todo amigos!!!!
// -------------------------------------------------

?>