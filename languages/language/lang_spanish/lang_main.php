<?php

/***************************************************************************

 *                            lang_main.php [English]

 *                              -------------------

 *     begin                : Wed Dec 12 2001

 *     copyright            : Alexis Bellido Medina (alexis@ventanazul.com)

 *                            Mariano Martene (pacha@maestrosdelweb.com)

 *                            Angelika Lautz (alautz@promis.net)

 *                            Patricio Marin (pmarin@hotmail.com)

 *

 *     $Id: lang_main.php,v 1.2 2003/04/20 09:26:34 bob Exp $

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

// The format of this file is:

//

// ---> $lang['message'] = "text";

//

// Deberia tambien intentar configurar locale y codificaci�n de caracteres

// (mas direcci�n). La codificaci�n y direcci�n ser�n

// enviados a la plantilla. El locale puede que funcione

// o no, depende del soporte del Sistema Operativo y la

// sintaxis varia ... escoja como mejor la parezca!

//



$lang['ENCODING'] = "iso-8859-1";

$lang['DIRECTION'] = "ltr";

$lang['LEFT'] = "left";

$lang['RIGHT'] = "right";

//$lang['DATE_FORMAT'] =  "d M Y"; // Esto se deber�a cambiar al formato predeterminado para su idioma, formato como php date()
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = _DATEBRIEF;
// End PNphpBB2 Module


//

// Comunes, estos t�rminos se usan bastante

// en varias p�ginas

//

$lang['Forum'] = "Foro";

$lang['Category'] = "Categor�a";

$lang['Topic'] = "Tema";

$lang['Topics'] = "Temas";

$lang['Replies'] = "Respuestas";

$lang['Views'] = "Lecturas";

$lang['Post'] = "Mensaje";

$lang['Posts'] = "Mensajes";

$lang['Posted'] = "Publicado";

$lang['Username'] = "Nombre de Usuario";

$lang['Password'] = "Contrase�a";

$lang['Email'] = "Email";

$lang['Poster'] = "Autor";

$lang['Author'] = "Autor";

$lang['Time'] = "Horas";

$lang['Horas'] = "Horas";

$lang['Message'] = "Mensaje";



$lang['1_Day'] = "1 D�a";

$lang['7_Days'] = "7 D�as";

$lang['2_Weeks'] = "2 Semanas";

$lang['1_Month'] = "1 Mes";

$lang['3_Months'] = "3 Meses";

$lang['6_Months'] = "6 Meses";

$lang['1_Year'] = "1 A�o";



$lang['Go'] = "Ir";

$lang['Jump_to'] = "Cambiar a";

$lang['Submit'] = "Enviar";

$lang['Reset'] = "Resetear";

$lang['Cancel'] = "Cancelar";

$lang['Preview'] = "Vista Preliminar";

$lang['Confirm'] = "Confirmar";

$lang['Spellcheck'] = "Ortograf�a";

$lang['Yes'] = "Si";

$lang['No'] = "No";

$lang['Enabled'] = "Habilitado";

$lang['Disabled'] = "Deshabilitado";

$lang['Error'] = "Error";



$lang['Next'] = "Siguiente";

$lang['Previous'] = "Anterior";

$lang['Goto_page'] = "Ir a p�gina";

$lang['Joined'] = "Registrado";

$lang['IP_Address'] = "Direcci�n IP";



$lang['Select_forum'] = "Seleccione un foro";

$lang['View_latest_post'] = "Ver �ltimo mensaje";

$lang['View_newest_post'] = "Ver el mensaje mas reciente";

$lang['Page_of'] = "P�gina <b>%d</b> de <b>%d</b>"; // Ser� reemplazado con : P�gina 1 de 2 por ejemplo



$lang['ICQ'] = "N�mero ICQ";

$lang['AIM'] = "Direcci�n AIM";

$lang['MSNM'] = "MSN Messenger";

$lang['YIM'] = "Yahoo Messenger";



//$lang['Forum_Index'] = "%s Indice de Foros";  // eg. Nombre de Sitio Indice de Foros, %s se puede quitar si lo desea

$lang['Forum_Index'] = "Foros de discusi�n";  // eg. Nombre de Sitio Indice de Foros, %s se puede quitar si lo desea



$lang['Post_new_topic'] = "Publicar nuevo tema";

$lang['Reply_to_topic'] = "Responder al tema";

$lang['Reply_with_quote'] = "Responder citando";



$lang['Click_return_topic'] = "Click %saqu�%s para volver al tema"; // %s's son para los url, no quitar!

$lang['Click_return_login'] = "Click %saqu�%s para intentar de nuevo";

$lang['Click_return_forum'] = "Click %saqu�%s para volver al foro";

$lang['Click_view_message'] = "Click %saqu�%s para ver su mensaje";

$lang['Click_return_modcp'] = "Click %saqu�%s para volver al Panel de Control del Moderador";

$lang['Click_return_group'] = "Click %saqu�%s para volver a la Informaci�n del Grupo";



$lang['Admin_panel'] = "Ir a Panel de Administraci�n";



$lang['Board_disable'] = "Lo sentimos pero momentaneamente este foro no se encuentra disponible, por favor intente de ingresar luego";





//

// Global Header strings

//

$lang['Registered_users'] = "Usuarios Registrados:";

$lang['Browsing_forum'] = "Usuarios navengando este foro:";

$lang['Online_users_zero_total'] = "En total hay <b>0</b> usuarios online :: ";

$lang['Online_users_total'] = "En total hay <b>%d</b> usuarios online :: ";

$lang['Online_user_total'] = "En total hay <b>%d</b> usuario online :: ";

$lang['Reg_users_zero_total'] = "0 Registrados, ";

$lang['Reg_users_total'] = "%d Registrados, ";

$lang['Reg_user_total'] = "%d Registrado, ";

$lang['Hidden_users_zero_total'] = "0 Ocultos y ";

$lang['Hidden_user_total'] = "%d Ocultos y ";

$lang['Hidden_users_total'] = "%d Ocultos y ";

$lang['Guest_users_zero_total'] = "0 Invitados";

$lang['Guest_users_total'] = "%d Invitados";

$lang['Guest_user_total'] = "%d Invitado";

$lang['Record_online_users'] = "La mayor cantidad de usuarios online fue <b>%s</b> el %s"; // first %s = number of users, second %s is the date.



$lang['Admin_online_color'] = "%sAdministrador%s";

$lang['Mod_online_color'] = "%sModerador%s";



$lang['You_last_visit'] = "Su �ltima visita fu�: %s"; // %s reemplazado por fecha y hora

$lang['Current_time'] = "Fecha y hora actual: %s"; // %s reemplazado por hora



$lang['Search_new'] = "Ver mensajes desde �ltima visita";

$lang['Search_your_posts'] = "Ver sus mensajes";

$lang['Search_unanswered'] = "Ver mensajes sin respuesta";



$lang['Register'] = "Registrarse";

$lang['Profile'] = "Perfil";

$lang['Edit_profile'] = "Editar su perfil";

$lang['Search'] = "Buscar";

$lang['Memberlist'] = "Miembros";

$lang['FAQ'] = "FAQ";

$lang['BBCode_guide'] = "Gu�a BBCode";

$lang['Usergroups'] = "Grupos de Usuarios";

$lang['Last_Post'] = "Ultimo Mensaje";

$lang['Moderator'] = "Moderador";

$lang['Moderators'] = "Moderadores";





//

// Stats block text

//

$lang['Posted_articles_zero_total'] = "Nuestros usuarios han publicado <b>0</b> mensajes"; // Number of posts

$lang['Posted_articles_total'] = "Nuestros usuarios han publicado un total de <b>%d</b> mensajes"; // N�mero de mensajes

$lang['Posted_article_total'] = "Nuestros usuarios han publicado un total de <b>%d</b> mensajes"; // N�mero de mensajes

$lang['Registered_users_zero_total'] = "Tenemos <b>0</b> usuarios registrados"; // # registered users

$lang['Registered_users_total'] = "Tenemos <b>%d</b> usuarios registrados"; // # usuarios registrados

$lang['Registered_user_total'] = "Tenemos <b>%d</b> usuario registrado"; // # usuarios registrados

$lang['Newest_user'] = "El �ltimo usuario registrado es <b>%s%s%s</b>"; // un enlace a nombre de usuario, /a 



$lang['No_new_posts_last_visit'] = "No hay mensajes nuevos desde su �ltima visita";

$lang['No_new_posts'] = "No hay mensajes nuevos";

$lang['New_posts'] = "Mensajes nuevos";

$lang['New_post'] = "Mensaje nuevo";

$lang['No_new_posts_hot'] = "No hay mensajes nuevos [ Popular ]";

$lang['New_posts_hot'] = "Mensajes nuevos [ Popular ]";

$lang['No_new_posts_locked'] = "No hay mensajes nuevos [ Cerrado ]";

$lang['New_posts_locked'] = "Mensajes nuevos [ Cerrado ]";

$lang['Forum_is_locked'] = "Foro cerrado";





//

// Login

//

$lang['Enter_password'] = "Por favor ingrese su nombre de usuario y contrase�a para entrar";

$lang['Login'] = "Login";

$lang['Logout'] = "Logout";



$lang['Forgotten_password'] = "Olvid� mi contrase�a";



$lang['Log_me_in'] = "Entrar autom�ticamente en cada visita";



$lang['Error_login'] = "Ha ingresado un nombre de usuario incorrecto o inactivo o una contrase�a incorrecta";





//

// Index page

//

$lang['Index'] = "Indice";

$lang['No_Posts'] = "No hay mensajes";

$lang['No_forums'] = "No hay foros";



$lang['Private_Message'] = "Mensaje Privado";

$lang['Private_Messages'] = "Mensajes Privados";

$lang['Who_is_Online'] = "Quien est� Online";



$lang['Mark_all_forums'] = "Marcar todos los foros como leidos";

$lang['Forums_marked_read'] = "Todos los foros se han marcado como leidos";





//

// Viewforum

//

$lang['View_forum'] = "Ver Foro";



$lang['Forum_not_exist'] = "El foro seleccionado no existe";

$lang['Reached_on_error'] = "Ha llegado por error a esta p�gina";



$lang['Display_topics'] = "Mostrar temas anteriores";

$lang['All_Topics'] = "Todos los Temas";



$lang['Topic_Announcement'] = "<b>Anuncio:</b>";

$lang['Topic_Sticky'] = "<b>PostIt:</b>";

$lang['Topic_Moved'] = "<b>Movido:</b>";

$lang['Topic_Poll'] = "<b>[ Encuesta ]</b>";



$lang['Mark_all_topics'] = "Marcar todos los temas como leidos";

$lang['Topics_marked_read'] = "Los temas de este foro han sido marcados como leidos";



$lang['Rules_post_can'] = "<b>Puede</b> publicar nuevos temas en este foro";

$lang['Rules_post_cannot'] = "<b>Puede</b> publicar nuevos temas en este foro";

$lang['Rules_reply_can'] = "<b>Puede</b> responder a temas en este foro";

$lang['Rules_reply_cannot'] = "<b>No puede</b> responder a temas en este foro";

$lang['Rules_edit_can'] = "<b>Puede</b> editar sus mensajes en este foro";

$lang['Rules_edit_cannot'] = "<b>No puede</b> editar sus mensajes en este foro";

$lang['Rules_delete_can'] = "<b>Puede</b> borrar sus mensajes en este foro";

$lang['Rules_delete_cannot'] = "<b>No puede</b> borrar sus mensajes en este foro";

$lang['Rules_vote_can'] = "<b>Puede</b> votar en encuestas en este foro";

$lang['Rules_vote_cannot'] = "<b>No puede</b> votar en encuestas en este foro";

$lang['Rules_moderate'] = "<b>Puede</b> %smoderar este foro%s"; // %s reemplazado por enlaces, no quitar! 



$lang['No_topics_post_one'] = "No hay temas en este foro<br />Click en <b>Nuevo Tema</b> para publicar un nuevo tema";





//

// Viewtopic

//

$lang['View_topic'] = "Ver tema";



$lang['Guest'] = 'Invitado';

$lang['Post_subject'] = "<b>Asunto</b>";

$lang['View_next_topic'] = "Ver tema siguiente";

$lang['View_previous_topic'] = "Ver tema anterior";

$lang['Submit_vote'] = "Votar";

$lang['View_results'] = "Ver resultados";



$lang['No_newer_topics'] = "No hay temas nuevos en este foro";

$lang['No_older_topics'] = "No hay temas anteriores en este foro";

$lang['Topic_post_not_exist'] = "El tema o mensaje solicitado no existe";

$lang['No_posts_topic'] = "No existen mensajes para este tema";



$lang['Display_posts'] = "Mostrar mensajes de anteriores";

$lang['All_Posts'] = "Todos los mensajes";

$lang['Newest_First'] = "El m�s reciente primero";

$lang['Oldest_First'] = "El m�s antiguo primero";



$lang['Back_to_top'] = "Volver arriba";



$lang['Read_profile'] = "Ver perfil de usuario"; 

$lang['Send_email'] = "Enviar email a usuario";

$lang['Visit_website'] = "Visitar sitio web del autor";

$lang['ICQ_status'] = "Status ICQ";

$lang['Edit_delete_post'] = "Editar/Borrar este mensaje";

$lang['View_IP'] = "Ver IP del autor";

$lang['Delete_post'] = "Borrar este mensaje";



$lang['wrote'] = "escribi�"; // precede al nombre de usuario y es seguido por el texto citado

$lang['Quote'] = "Cita"; // viene antes de la salida de bbcode citar

$lang['Code'] = "C�digo"; // viene antes de la salida de bbcode c�digo



$lang['Edited_time_total'] = "Ultima edici�n por %s el %s, editado %d vez"; // Ultima edici�n por mi el Oct 2001, editado 1 vez

$lang['Edited_times_total'] = "Ultima edici�n por %s el %s, editado %d veces"; // Ultima edici�n por mi el Oct 2001, editado 2 veces



$lang['Lock_topic'] = "Cerrar este tema";

$lang['Unlock_topic'] = "Desbloquear este tema";

$lang['Move_topic'] = "Mover este tema";

$lang['Delete_topic'] = "Borrar este tema";

$lang['Split_topic'] = "Separar este tema";



$lang['Stop_watching_topic'] = "Dejar de observar este tema";

$lang['Start_watching_topic'] = "Observar este tema por respuestas";

$lang['No_longer_watching'] = "Ya no est� observando este tema";

$lang['You_are_watching'] = "Ahora est� observando este tema";



$lang['Total_votes'] = "Votos Totales";



//

// Posting/Replying (Not private messaging!)

//

$lang['Message_body'] = "Cuerpo del mensaje";

$lang['Topic_review'] = "Revisar tema";



$lang['No_post_mode'] = "No se especific� modo de mensaje"; // Si se llama posting.php sin un modo (newtopic/reply/delete/etc, no deber�a mostrarse normalmente)



$lang['Post_a_new_topic'] = "Publicar un nuevo tema";

$lang['Post_a_reply'] = "Publicar una respuesta";

$lang['Post_topic_as'] = "Publicar tema como";

$lang['Edit_Post'] = "Editar mensaje";

$lang['Options'] = "Opciones";



$lang['Post_Announcement'] = "Anuncio";

$lang['Post_Sticky'] = "PostIt";

$lang['Post_Normal'] = "Normal";



$lang['Confirm_delete'] = "�Est� seguro que quiere borrar este mensaje?";

$lang['Confirm_delete_poll'] = "�Est� seguro que quiere borrar esta encuesta?";



$lang['Flood_Error'] = "No puede publicar otro tema tan r�pido despu�s del �ltimo, por favor intente nuevamente en unos momentos";

$lang['Empty_subject'] = "Debe especificar un asunto cuando publique un nuevo tema";

$lang['Empty_message'] = "Debe escribir un mensaje para publicar";

$lang['Forum_locked'] = "Este foro est� cerrado y no puede publicar, responder o editar temas";

$lang['Topic_locked'] = "Este tema est� cerrado y no puede editar mensajes o responder";

$lang['No_post_id'] = "Debe seleccionar un mensaje para editar";

$lang['No_topic_id'] = "Debe seleccionar un tema al cual responder";

$lang['No_valid_mode'] = "Solo puede publicar, responder, editar o citar mensajes, por favor regrese e intente nuevamente";

$lang['No_such_post'] = "No existe ese mensaje, regrese e intente nuevamente";

$lang['Edit_own_posts'] = "Lo sentimos pero solo puede editar sus propios mensajes";

$lang['Delete_own_posts'] = "Lo sentimos pero solo puede borrar sus propios mensajes";

$lang['Cannot_delete_replied'] = "Lo sentimos pero no puede borrar mensajes que han sido respondidos";

$lang['Cannot_delete_poll'] = "Lo sentimos pero no puede borrar una encuesta activa";

$lang['Empty_poll_title'] = "Debe escribir un t�tulo para su mensaje";

$lang['To_few_poll_options'] = "Debe ingresar al menos dos opciones para la encuesta";

$lang['To_many_poll_options'] = "Ha ingresado demasiadas opciones para la encuesta";

$lang['Post_has_no_poll'] = "Este mensaje no tiene encuesta";



$lang['Add_poll'] = "Agregar una encuesta";

$lang['Add_poll_explain'] = "Si no desea agregar una encuesta a su tema deje los campos en blanco";

$lang['Poll_question'] = "Pregunta de la Encuesta";

$lang['Poll_option'] = "Opci�n de Encuesta";

$lang['Add_option'] = "Agregar Opci�n";

$lang['Update'] = "Actualizar";

$lang['Delete'] = "Borrar";

$lang['Poll_for'] = "Correr encuesta por";

$lang['Days'] = "D�as"; // This is used for the Run poll for ... Days + in admin_forums for pruning

$lang['Poll_for_explain'] = "[ Escriba 0 o deje en blanco para que la encuesta no termine ]";

$lang['Delete_poll'] = "Borrar Encuesta";

$lang['Already_voted'] = 'Usted ya ha votado en este encuesta'; 

$lang['No_vote_option'] = 'Debe especificar una opci�n al votar'; 



$lang['Disable_HTML_post'] = "Deshabilitar HTML en este mensaje";

$lang['Disable_BBCode_post'] = "Deshabilitar BBCode en este mensaje";

$lang['Disable_Smilies_post'] = "Deshabilitar Smilies en este mensaje";



$lang['HTML_is_ON'] = "HTML est� <u>ON</u>";

$lang['HTML_is_OFF'] = "HTML est� <u>OFF</u>";

$lang['BBCode_is_ON'] = "%sBBCode%s est� <u>ON</u>"; // %s are replaced with URI pointing to FAQ

$lang['BBCode_is_OFF'] = "%sBBCode%s est� <u>OFF</u>";

$lang['Smilies_are_ON'] = "Smilies est�n <u>ON</u>";

$lang['Smilies_are_OFF'] = "Smilies est�n <u>OFF</u>";



$lang['Attach_signature'] = "Adjuntar firma (la firma puede ser cambiada en el perfil)";

$lang['Notify'] = "Notificarme cuando se publique una respuesta";

$lang['Delete_post'] = "Borrar este mensaje";



$lang['Stored'] = "Su mensaje ha sido publicado con �xito";

$lang['Deleted'] = "Su mensaje ha sido borrado con �xito";

$lang['Poll_delete'] = "Su encuesta ha sido borrada con �xito";

$lang['Vote_cast'] = "Su voto ha sido publicado";



$lang['Topic_reply_notification'] = "Notificaci�n de Respuesta a Tema";



$lang['bbcode_b_help'] = "Negrita: [b]texto[/b]  (alt+b)";

$lang['bbcode_i_help'] = "Cursiva: [i]texto[/i]  (alt+i)";

$lang['bbcode_u_help'] = "Subrayado: [u]texto[/u]  (alt+u)";

$lang['bbcode_q_help'] = "Cita: [quote]texto[/quote]  (alt+q)";

$lang['bbcode_c_help'] = "C�digo: [code]c�digo[/code]  (alt+c)";

$lang['bbcode_l_help'] = "Lista: [list]texto[/list] (alt+l)";

$lang['bbcode_o_help'] = "Lista ordenada: [list=]texto[/list]  (alt+o)";

$lang['bbcode_p_help'] = "Insertar imagen: [img]http://url_imagen[/img]  (alt+p)";

$lang['bbcode_w_help'] = "Insertar URL: [url]http://url[/url] o [url=http://url]texto URL[/url]  (alt+w)";

$lang['bbcode_a_help'] = "Cerrar todos los marcadores de bbCode abiertos";

$lang['bbcode_s_help'] = "Color: [color=red]texto[/color]  Nota: Puede usar color=#FF0000";

$lang['bbcode_f_help'] = "Tama�o: [size=x-small]texto peque�o[/size]";



$lang['Emoticons'] = "Emoticons";

$lang['More_emoticons'] = "Ver mas Emoticons";



$lang['Font_color'] = "Color";

$lang['color_default'] = "Predeterminado";

$lang['color_dark_red'] = "Rojo oscuro";

$lang['color_red'] = "Rojo";

$lang['color_orange'] = "Naranja";

$lang['color_brown'] = "Marr�n";

$lang['color_yellow'] = "Amarillo";

$lang['color_green'] = "Verde";

$lang['color_olive'] = "Oliva";

$lang['color_cyan'] = "Cyan";

$lang['color_blue'] = "Azul";

$lang['color_dark_blue'] = "Azul Oscuro";

$lang['color_indigo'] = "Indigo";

$lang['color_violet'] = "Violeta";

$lang['color_white'] = "Blanco";

$lang['color_black'] = "Negro";



$lang['Font_size'] = "Tama�o";

$lang['font_tiny'] = "Miniatura";

$lang['font_small'] = "Peque�a";

$lang['font_normal'] = "Normal";

$lang['font_large'] = "Grande";

$lang['font_huge'] = "Enorme";



$lang['Close_Tags'] = "Cerrar marcadores";

$lang['Styles_tip'] = "Nota: Se pueden aplicar estilos r�pidamente al texto seleccionado";





//

// Private Messaging

//

$lang['Private_Messaging'] = "Mensajes Privados";



$lang['Login_check_pm'] = "Entre para ver sus mensajes privados";

$lang['New_pms'] = "Usted tiene %d mensajes nuevos"; // Usted tiene 2 mensajes nuevos

$lang['New_pm'] = "Usted tiene %d mensaje nuevo"; // Usted tiene 1 mensaje nuevo

$lang['No_new_pm'] = "Usted no tiene mensajes nuevos";

$lang['Unread_pms'] = "Usted tiene %d mensajes sin leer";

$lang['Unread_pm'] = "Usted tiene %d mensaje sin leer";

$lang['No_unread_pm'] = "Usted no tiene mensajes sin leer";

$lang['You_new_pm'] = "Tiene un nuevo mensaje privado en la bandeja de entrada";

$lang['You_new_pms'] = "Tiene nuevos mensajes privados en la bandeja de entrada";

$lang['You_no_new_pm'] = "No tiene mensajes privados nuevos";



$lang['Inbox'] = "Bandeja de Entrada";

$lang['Outbox'] = "Bandeja de Salida";

$lang['Savebox'] = "Elementos Guardados";

$lang['Sentbox'] = "Elementos Enviados";

$lang['Flag'] = "Marca";

$lang['Subject'] = "Asunto";

$lang['From'] = "De";

$lang['To'] = "Para";

$lang['Date'] = "Fecha";

$lang['Mark'] = "Marcar";

$lang['Sent'] = "Enviado";

$lang['Saved'] = "Guardado";

$lang['Delete_marked'] = "Borrar Marcados";

$lang['Delete_all'] = "Borrar Todos";

$lang['Save_marked'] = "Guardar Marcados"; 

$lang['Save_message'] = "Guardar Mensaje";

$lang['Delete_message'] = "Borrar Mensaje";



$lang['Display_messages'] = "Mostrar mensajes de los anteriores"; // Seguido por # de dias/semanas/meses

$lang['All_Messages'] = "Todos los mensajes";



$lang['No_messages_folder'] = "No tiene mensajes en esta carpeta";



$lang['PM_disabled'] = "Se han desactivado los Mensajes Privados en este Foro";

$lang['Cannot_send_privmsg'] = "Lo sentimos pero el administrador le ha desactivado la opci�n de enviar mensajes privados";

$lang['No_to_user'] = "Debe especificar un nombre de usuario para enviar este mensaje";

$lang['No_such_user'] = "Lo sentimos pero ese usuario no existe";



$lang['Disable_HTML_pm'] = "Deshabilitar HTML en este mensaje";

$lang['Disable_BBCode_pm'] = "Deshabilitar BBCode en este mensaje";

$lang['Disable_Smilies_pm'] = "Deshabilitar en este mensaje";



$lang['Message_sent'] = "Su mensaje ha sido enviado";



$lang['Click_return_inbox'] = "Click %saqu�%s para volver a su Bandeja de Entrada";

$lang['Click_return_index'] = "Click %saqu�%s para volver al Indice";



$lang['Send_a_new_message'] = "Enviar un nuevo mensaje privado";

$lang['Send_a_reply'] = "Responder a mensaje privado";

$lang['Edit_message'] = "Editar mensaje privado";



$lang['Notification_subject'] = "Ha llegado un nuevo mensaje privado";



$lang['Find_username'] = "Encontrar un usuario";

$lang['Find'] = "Encontrar";

$lang['No_match'] = "No se hallaron coincidencias";



$lang['No_post_id'] = "No se identific� un ID de mensaje";

$lang['No_such_folder'] = "No existe esa carpeta";

$lang['No_folder'] = "No se especific� una carpeta";



$lang['Mark_all'] = "Marcar todos";

$lang['Unmark_all'] = "Desmarcar todos";



$lang['Confirm_delete_pm'] = "�Est� seguro que desea borrar este mensaje?";

$lang['Confirm_delete_pms'] = "�Est� seguro que desea borrar estos mensajes?";



$lang['Inbox_size'] = "Su Bandeja de Entrada est� %d%% llena"; // eg. Su Bandeja de Entrada esta 50% llena

$lang['Sentbox_size'] = "Su Bandeja Elementos Enviados est� %d%% llena"; 

$lang['Savebox_size'] = "Su Bandeja de Elementos Guardados est� %d%% llena"; 



$lang['Click_view_privmsg'] = "Click %saqu�%s para visitar su Bandeja de Entrada";



$lang['Read_pm'] = 'Leer mensaje'; 

$lang['Post_new_pm'] = 'Enviar mensaje'; 

$lang['Post_reply_pm'] = 'Contestar mensaje'; 

$lang['Post_quote_pm'] = 'Citar mensaje'; 

$lang['Edit_pm'] = 'Editar mensaje'; 



$lang['Unread_message'] = 'Mensaje no leido'; 

$lang['Read_message'] = 'Mensaje leido'; 





//

// Profiles/Registration

//

$lang['Viewing_user_profile'] = "Viendo perfil :: %s"; // %s es nombre de usuario 

$lang['About_user'] = "Todo sobre %s"; // %s es nombre de usuario



$lang['Preferences'] = "Preferencias";

$lang['Items_required'] = "Los campos marcados con * son obligatorios a menos que se indique lo contrario";

$lang['Registration_info'] = "Informaci�n de Registraci�n";

$lang['Profile_info'] = "Informaci�n de Perfil";

$lang['Profile_info_warn'] = "Esta informaci�n estar� p�blicamente disponible";

$lang['Avatar_panel'] = "Panel de Control de Avatar";

$lang['Avatar_gallery'] = "Galer�a de Avatars";



$lang['Website'] = "Sitio Web";

$lang['Location'] = "Ubicaci�n";

$lang['Contact'] = "Contact� a";

$lang['Email_address'] = "Email";

$lang['Email'] = "Email";

$lang['Send_private_message'] = "Enviar mensaje privado";

$lang['Hidden_email'] = "[ Oculto ]";

$lang['Search_user_posts'] = "Buscar mensajes de este usuario";

$lang['Interests'] = "Intereses";

$lang['Occupation'] = "Ocupaci�n"; 

$lang['Poster_rank'] = "Rango del Autor";



$lang['Total_posts'] = "Cantidad de Mensajes";

$lang['User_post_pct_stats'] = "%.2f%% del total"; // 1.25% del total

$lang['User_post_day_stats'] = "%.2f mensajes por d�a"; // 1.5 mensajes por dia

$lang['Search_user_posts'] = "Buscar todos los mensajes de %s"; // Encontrar todos los mensajes del usuario



$lang['No_user_id_specified'] = "Lo sentimos pero ese usuario no existe";

$lang['Wrong_Profile'] = "No puede modificar un perfil que no sea el suyo propio.";



$lang['Only_one_avatar'] = "Solo se puede especificar un tipo de avatar";

$lang['File_no_data'] = "El archivo en el URL proporcionado no contiene datos";

$lang['No_connection_URL'] = "No se pudo establecer conexi�n con el URL proporcionado";

$lang['Incomplete_URL'] = "El URL est� incompleto";

$lang['Wrong_remote_avatar_format'] = "El URL del avatar remoto no es v�lido";

$lang['No_send_account_inactive'] = "Lo sentimos pero su contrase�a no puede ser recuparada porque su cuenta se encuentra actualmente desactivada. Por favor contacte al Administrador del Foro";



$lang['Always_smile'] = "Siempre activar Smilies";

$lang['Always_html'] = "Siempre permitir HTML";

$lang['Always_bbcode'] = "Siempre permitir BBCode";

$lang['Always_add_sig'] = "Siempre adjuntar mi Firma";

$lang['Always_notify'] = "Siempre avisarme cuando hay respuestas";

$lang['Always_notify_explain'] = "Env�a un email cuando alguien responde a un tema que Usted ha publicado. Esto puede ser cambiado siempre que Usted publica un mensaje";



$lang['Board_style'] = "Estilo del Foro";

$lang['Board_lang'] = "Idioma del Foro";

$lang['No_themes'] = "No hay temas en la base de datos";

$lang['Timezone'] = "Zona horaria";

$lang['Date_format'] = "Formato de Fecha";

$lang['Date_format_explain'] = "La sintaxis usada es id�ntica a la funci�n <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> de PHP";

$lang['Signature'] = "Firma";

$lang['Signature_explain'] = "Este es un bloque de texto que se puede agregar a los mensajes que publique. Existe un l�mite de %d caracteres";

$lang['Public_view_email'] = "Mostrar siempre mi Email";



$lang['Current_password'] = "Contrase�a actual";

$lang['New_password'] = "Nueva contrase�a";

$lang['Confirm_password'] = "Confirmar contrase�a";

$lang['Confirm_password_explain'] = "Debe confirmar su actual contrase�a si desea cambiar esta o su direcci�n de correo electr�nico";

$lang['password_if_changed'] = "Solo debe ingresar una contrase�a si desea cambiarla";

$lang['password_confirm_if_changed'] = "Solo necesita confirmar su contrase�a si la cambi� arriba";



$lang['Avatar'] = "Avatar";

$lang['Avatar_explain'] = "Muestra una peque�a imagen bajo sus detalles en los mensajes. Solo una imagen puede ser mostrada a la vez, su ancho no puede ser mayor que %d pixels, y su altura no mayor que %d pixels y el tama�o de archivo no mas de %dkB."; $lang['Upload_Avatar_file'] = "Enviar Avatar desde su PC";

$lang['Upload_Avatar_URL'] = "Enviar Avatar desde un URL";

$lang['Upload_Avatar_URL_explain'] = "Escriba el URL donde se encuentra el archivo de imagen de su Avatar, ser� copiado a este sitio.";

$lang['Pick_local_Avatar'] = "Seleccionar Avatar de la galer�a";

$lang['Link_remote_Avatar'] = "Vincular a un Avatar fuera de este sitio";

$lang['Link_remote_Avatar_explain'] = "Escriba el URL donde se encuentra el archivo de imagen de su Avatar.";

$lang['Avatar_URL'] = "URL de imagen de Avatar";

$lang['Select_from_gallery'] = "Seleccionar Avatar de nuestra galer�a";

$lang['View_avatar_gallery'] = "Mostrar Galer�a";



$lang['Select_avatar'] = "Seleccionar avatar";

$lang['Return_profile'] = "Cancelar avatar";

$lang['Select_category'] = "Seleccionar categor�a";



$lang['Delete_Image'] = "Borrar Imagen";

$lang['Current_Image'] = "Imagen Actual";



$lang['Notify_on_privmsg'] = "Notificarme por nuevos Mensajes Privados";

$lang['Popup_on_privmsg'] = "Desplegar nueva ventana cuando hay Mensajes Privados";

$lang['Popup_on_privmsg_explain'] = "Algunas plantillas pueden abrir una nueva ventana para informarle cuando ha recibido nuevos mensajes privados"; 

$lang['Hide_user'] = "Ocultar su status online";



$lang['Profile_updated'] = "Su perfil ha sido actualizado";

$lang['Profile_updated_inactive'] = "Su perfil ha sido actualizado, sin embargo, ha cambiado detalles importantes y su cuenta ha sido desactivada. Revise su email para averiguar como reactivar su cuenta, o si es necesaria la activaci�n del Administrador espere a que este reactive su cuenta";



$lang['Password_mismatch'] = "Las contrase�as que ingres� no coinciden";

$lang['Current_password_mismatch'] = "La contrase�a que ingres� no coincide con la que est� almacenada en la base de datos";

$lang['Password_long'] = "Su contrase�a no debe contener m�s de 32 caracteres";

$lang['Username_taken'] = "Lo lamentamos pero este nombre de usuario ya est� en uso";

$lang['Username_invalid'] = "El nombre de usuario contiene un caracter inv�lido como \"";

$lang['Username_disallowed'] = "Disculpe, este nombre de usuario est� restringido";

$lang['Email_taken'] = "Lo lamentamos pero esta direcci�n de correo electr�nico ya ha sido registrada por un usuario";

$lang['Email_banned'] = "Disculpe, esta direcci�n de correo electr�nico ha sido baneada";

$lang['Email_invalid'] = "La direcci�n de correo electr�nico ingresada es inv�lida";

$lang['Signature_too_long'] = "La firma es muy larga";

$lang['Fields_empty'] = "Debe completar los campos obligatorios";

$lang['Avatar_filetype'] = "El tipo de imagen del avatar debe ser .jpg, .gif o .png";

$lang['Avatar_filesize'] = "El tama�o de archivo del avatar debe ser menor de %d kB"; // El tama�o de archivo del avatar debe ser menor de 6 kB

$lang['Avatar_imagesize'] = "El avatar debe tener menos de %d pixels de ancho por %d pixels de alto"; 



$lang['Welcome_subject'] = "Bienvenido a los Foros de %s"; // Bienvenido a los Foros de Nombre de Sitio

$lang['New_account_subject'] = "Nueva cuenta de usuario";

$lang['Account_activated_subject'] = "Cuenta Activada";



$lang['Account_added'] = "Gracias por registrarse, su cuenta ha sido creada. Ahora puede entrar con su nombre de usuario y contrase�a";

$lang['Account_inactive'] = "Su cuenta ha sido creada. Sin embargo, este foro requiere activaci�n de la cuenta, una clave de activaci�n se ha enviado a su email. Por favor revise su email para mas informaci�n";

$lang['Account_inactive_admin'] = "Su cuenta ha sido creada. Sin embargo, este foro requiere activaci�n del Administrador. Un email ha sido enviado al Administrador y Usted ser� informado cuando su cuenta haya sido activada";

$lang['Account_active'] = "Su cuenta ha sido activada. Gracias por registrarse";

$lang['Already_activated'] = 'Usted ya ha activado su cuenta'; 

$lang['Account_active_admin'] = "La cuenta ha sido activada";

$lang['Reactivate'] = "�Reactive su cuenta!";

$lang['COPPA'] = "Su cuenta ha sido creada pero debe ser aprobada, por favor revise su email por mayores detalles.";



$lang['Registration'] = "Condiciones de Registro";

$lang['Reg_agreement'] = "Aun cuando los administradores y moderadores de estos foros har�n todo lo posible por remover  cualquier material cuestionable tan pronto como sea posible, es imposible revisar todos los mensajes. Por lo tanto Usted acepta que todos los mensajes publicados en estos foros expresan las opiniones de sus autores y no la de los administradores, moderadores o el webmaster (excepto en mensajes publicados por ellos mismos) por lo cual no se les considerar� responsables.<br /><br />Usted est� de acuerdo en no publicar material abusivo, obsceno, vulgar, de odio, amenazante, orientado sexualmente, o ningun otro que de alguna forma viole leyes vigentes. Si publicase material de esa �ndole su cuenta de acceso al foro ser� cancelada y su proveedor de Acceso a Internet ser� informado. La direcci�n IP de todos los mensajes es guardada para ayudar a cumplir estas normas. Usted est� de acuerdo en que el webmaster, administrador y moderadores de este Foro tienen el derecho de borrar, editar, mover o cerrar cualquier tema en cualquier momento si lo consideran conveniente. Como usuario Usted acepta que toda la informaci�n que ingrese sea almacenada en una base de datos. Aun cuando esta informaci�n no ser� proporcionada a terceros sin su consentimiento, el webmaster, administrador y moderadores no pueden responsabilizarse por intentos de hackers que puedan llevar a que esta informaci�n se vea comprometida.<br /><br />Este sistema de foros utiliza cookies para almacenar informaci�n en su computadora local. Estos cookies no contienen la informaci�n que Usted ha ingresado, solamente se utilizan para mejorar la visualizaci�n de los foros. El email solamente es usado para confirmar sus detalles de registro y contrase�a (y para enviar nuevas contrase�as si olvida la actual).<br /><br />Al registrarse Usted aceptar� todas estas condiciones.";



$lang['Agree_under_13'] = "Estoy de acuerdo con estas condiciones y soy <b>menor</b> de 13 a�os de edad";

$lang['Agree_over_13'] = "Estoy de acuerdo con estas condiciones y soy <b>mayor</b> de 13 a�os de edad";

$lang['Agree_not'] = "No estoy de acuerdo con estas condiciones";



$lang['Wrong_activation'] = "La clave de activaci�n suministrada no coincide con ninguna en la base de datos";

$lang['Send_password'] = "Enviarme una nueva contrase�a"; 

$lang['Password_updated'] = "Se ha creado una nueva contrase�a, por favor revise su email por detalles sobre como activarla";

$lang['No_email_match'] = "El email suministrado no coincide con el de ese nombre de usuario";

$lang['New_password_activation'] = "Activaci�n de nueva contrase�a";

$lang['Password_activated'] = "Su cuenta ha sido re-activada. Para entrar use la contrase�a provista en el email que recibi�";



$lang['Send_email_msg'] = "Enviar un email";

$lang['No_user_specified'] = "No se especific� usuario";

$lang['User_prevent_email'] = "Este usuario no desea recibir email. Intente enviarle un mensaje privado";

$lang['User_not_exist'] = "Ese usuario no existe";

$lang['CC_email'] = "Enviar una copia de este mensaje a Usted";

$lang['Email_message_desc'] = "Este mensaje ser� enviado como texto simple, no incluya HTML ni BBCode. La direcci�n de respuesta para este mensaje ser� su email.";

$lang['Flood_email_limit'] = "No puede enviar otro email en este momento, intentelo mas tarde";

$lang['Recipient'] = "Destinatario";

$lang['Email_sent'] = "El email ha sido enviado";

$lang['Send_email'] = "Enviar email";

$lang['Empty_subject_email'] = "Debe especificar un asunto para el email";

$lang['Empty_message_email'] = "Debe ingresar un mensaje para ser enviado";





//

// Memberslist

//

$lang['Select_sort_method'] = "Ordenar por";

$lang['Sort'] = "Ordenar";

$lang['Sort_Top_Ten'] = "Los 10 autores que m�s escriben";

$lang['Sort_Joined'] = "Fecha de Registro";

$lang['Sort_Username'] = "Nombre de usuario";

$lang['Sort_Location'] = "Ubicaci�n";

$lang['Sort_Posts'] = "Cantidad de mensajes";

$lang['Sort_Email'] = "Email";

$lang['Sort_Website'] = "Sitio Web";

$lang['Sort_Ascending'] = "Ascendente";

$lang['Sort_Descending'] = "Descendente";

$lang['Order'] = "Orden";





//

// Group control panel

//

$lang['Group_Control_Panel'] = "Panel de Control de Grupo";

$lang['Group_member_details'] = "Detalles de Membres�a de Grupo";

$lang['Group_member_join'] = "Unirse a Grupo";



$lang['Group_Information'] = "Informaci�n de Grupo";

$lang['Group_name'] = "Nombre de Grupo";

$lang['Group_description'] = "Descripci�n de Grupo";

$lang['Group_membership'] = "Membres�a de Grupo";

$lang['Group_Members'] = "Miembros de Grupo";

$lang['Group_Moderator'] = "Moderador de Grupo";

$lang['Pending_members'] = "Miembros Pendientes";



$lang['Group_type'] = "Tipo de Grupo";

$lang['Group_open'] = "Grupo Abierto";

$lang['Group_closed'] = "Grupo Cerrado";

$lang['Group_hidden'] = "Grupo Oculto";



$lang['Current_memberships'] = "Membres�as actuales";

$lang['Non_member_groups'] = "Grupos donde no es miembro";

$lang['Memberships_pending'] = "Membres�as pendientes";



$lang['No_groups_exist'] = "No existen Grupos";

$lang['Group_not_exist'] = "Ese grupo no existe";



$lang['Join_group'] = "Unirse a Grupo";

$lang['No_group_members'] = "Este grupo no tiene miembros";

$lang['Group_hidden_members'] = "Esta grupo est� oculto, no puede ver su membres�a";

$lang['No_pending_group_members'] = "Este grupo no tiene miembros pendientes";

$lang["Group_joined"] = "Subscripci�n a grupo exitosa <br />Usted ser� notificado cuando su subscripci�n sea aprobada por el moderador del grupo";

$lang['Group_request'] = "Se ha realizado un pedido para unirse al grupo";

$lang['Group_approved'] = "Su pedido ha sido aprobado";

$lang['Group_added'] = "Usted ha sido agregado a este grupo"; 

$lang['Already_member_group'] = "Usted ya es miembro de este grupo";

$lang['User_is_member_group'] = "El usuario ya es miembro de este grupo";

$lang['Group_type_updated'] = "Tipo de grupo actualizado con �xito";



$lang['Could_not_add_user'] = "El usuario que seleccion� no existe";

$lang['Could_not_anon_user'] = "No puede hacer a An�nimo un miembro de este grupo";



$lang['Confirm_unsub'] = "�Esta seguro que quiere cancelar la subscripci�n a este grupo?";

$lang['Confirm_unsub_pending'] = "Su subscripci�n a este grupo aun no ha sido aprobada, �Esta seguro que desea cancelar la subscripci�n?";



$lang['Unsub_success'] = "Su subscripci�n a este grupo ha sido cancelada.";



$lang['Approve_selected'] = "Aprobar seleccionados";

$lang['Deny_selected'] = "Denegar seleccionados";

$lang['Not_logged_in'] = "Debe entrar al Foro para unirse a un Grupo.";

$lang['Remove_selected'] = "Borrar Seleccionados";

$lang['Add_member'] = "Agregar Miembro";

$lang['Not_group_moderator'] = "Usted no es moderador de este grupo por lo que no puede realizar esta acci�n.";



$lang['Login_to_join'] = "Entre para unirse a un grupo o administrar las membres�as de un grupo";

$lang['This_open_group'] = "Este es un grupo abierto, click para solicitar membres�a";

$lang['This_closed_group'] = "Este es un grupo cerrado, no se aceptan mas usuarios";

$lang['This_hidden_group'] = "Este es un grupo oculto, no se permite la adici�n autom�tica de usuarios";

$lang['Member_this_group'] = "Usted es miembro de este grupo";

$lang['Pending_this_group'] = "Su membres�a en este grupo est� pendiente";

$lang['Are_group_moderator'] = "Usted es el moderador de grupo";

$lang['None'] = "Ninguno";



$lang['Subscribe'] = "Subscribirse";

$lang['Unsubscribe'] = "Cancelar Subscripci�n";

$lang['View_Information'] = "Ver Informaci�n";





//

// Search

//

$lang['Search_query'] = "Consulta de B�squeda";

$lang['Search_options'] = "Opciones de B�squeda";



$lang['Search_keywords'] = "Buscar por palabras clave";

$lang['Search_keywords_explain'] = "Puede usar <u>AND</u> para definir palabras que deben estar en los resultados, <u>OR</u> para definir palabras que pueden estar en los resultados y <u>NOT</u> para definir palabras que no deben estar en los resultados. Use * como un comod�n para las b�squedas parciales";

$lang['Search_author'] = "Buscar por Autor";

$lang['Search_author_explain'] = "Use * como un comod�n para b�squedas parciales";



$lang['Search_for_any'] = "Buscar cualquiera de las palabras o usar consulta tal como se escribi�";

$lang['Search_for_all'] = "Buscar todas las palabras";

$lang['Search_title_msg'] = "Buscar en t�tulos y texto de los mensjaes";

$lang['Search_msg_only'] = "Buscar solamente en el texto de los mensajes";



$lang['Return_first'] = "Mostrar los primeros"; // seguido por xxx caracteres en cuadro de texto

$lang['characters_posts'] = "caracteres de los mensajes";



$lang['Search_previous'] = "Buscar en los anteriores"; // seguido por dias, semanas, meses, a�os, en una lista desplegable



$lang['Sort_by'] = "Ordenar por";

$lang['Sort_Time'] = "Fecha Publicaci�n";

$lang['Sort_Post_Subject'] = "Asunto de Mensaje";

$lang['Sort_Topic_Title'] = "T�tulo del Tema";

$lang['Sort_Author'] = "Autor";

$lang['Sort_Forum'] = "Foro";



$lang['Display_results'] = "Mostrar resultados como";

$lang['All_available'] = "Todos los disponibles";

$lang['No_searchable_forums'] = "No tiene permiso para buscar en los foros de este sitio web";



$lang['No_search_match'] = "No hay temas o mensajes que coincidan con sus criterios de b�squeda";

$lang['Found_search_match'] = "Se encontr� %d coincidencia"; // eg. Se encontr� 1 coincidencia

$lang['Found_search_matches'] = "Se encontraron %d coincidencias"; // eg. Se encontraron 24 coincidencias



$lang['Close_window'] = "Cerrar Ventana";





//

// Entradas relacionadas con autorizaciones

//

// Los %s will ser�n reemplazados con uno de los siguientes arrays

$lang['Sorry_auth_announce'] = "Lo sentimos pero solo %s pueden publicar anuncios en este foro";

$lang['Sorry_auth_sticky'] = "Lo sentimos pero solo %s pueden publicar PostIt en este foro"; 

$lang['Sorry_auth_read'] = "Lo sentimos pero solo %s pueden leer temas en este foro"; 

$lang['Sorry_auth_post'] = "Lo sentimos pero solo %s pueden publicar temas en este foro"; 

$lang['Sorry_auth_reply'] = "Lo sentimos pero solo %s pueden responder a mensajes en este foro"; 

$lang['Sorry_auth_edit'] = "Lo sentimos pero solo %s pueden editar mensajes en este foro"; 

$lang['Sorry_auth_delete'] = "Lo sentimos pero solo %s pueden borrar mensajes en este foro"; 

$lang['Sorry_auth_vote'] = "Lo sentimos pero solo %s pueden votar en encuestas en este foro"; 



// Estos remplazan los %s en las cadenas de arriba

$lang['Auth_Anonymous_Users'] = "<b>usuarios an�nimos</b>";

$lang['Auth_Registered_Users'] = "<b>usuarios registrados</b>";

$lang['Auth_Users_granted_access'] = "<b>usuarios con acceso especial</b>";

$lang['Auth_Moderators'] = "<b>moderadores</b>";

$lang['Auth_Administrators'] = "<b>administradores</b>";



$lang['Not_Moderator'] = "Usted no es moderador en este foro";

$lang['Not_Authorised'] = "No Autorizado";



$lang['You_been_banned'] = "Se le ha restringido el acceso a este foro<br />Por favor contacte al webmaster o al administrador del foro para mayor informaci�n";





//

// Viewonline

//

$lang['Reg_users_zero_online'] = "Hay 0 usuarios registrados y "; // There ae 5 Registered and

$lang['Reg_users_online'] = "Hay %d usuarios registrados y "; // Hay 5 usuarios registrados y

$lang['Reg_user_online'] = "Hay %d usuario registrado y "; // Hay 1 usuario registrado y

$lang['Hidden_users_zero_online'] = "0 usuarios ocultos online"; // 6 Hidden users online

$lang['Hidden_users_online'] = "%d usuarios ocultos online"; // 6 usuarios ocultos online

$lang['Hidden_user_online'] = "%d usuario oculto online"; // 1 usuario oculto online

$lang['Guest_users_online'] = "Hay %d usuarios invitados online"; // Hay 10 usuarios invitados online

$lang['Guest_users_zero_online'] = "Hay 0 invitados online"; // There are 10 Guest users online

$lang['Guest_user_online'] = "Hay %d usuario invitado online"; // Hay 1 usuario invitado online

$lang['No_users_browsing'] = "No hay usuarios explorando este foro";



$lang['Online_explain'] = "Estos datos estan basados en usuarios activos durante los �ltimos 5 minutos";



$lang['Forum_Location'] = "Ubicaci�n del Foro";

$lang['Last_updated'] = "Ultima Actualizaci�n";



$lang['Forum_index'] = "Indice del Foro";

$lang['Logging_on'] = "Entrando";

$lang['Posting_message'] = "Publicando mensaje";

$lang['Searching_forums'] = "Buscando foros";

$lang['Viewing_profile'] = "Viendo Perfil";

$lang['Viewing_online'] = "Viendo quien est� online";

$lang['Viewing_member_list'] = "Viendo lista de miembros";

$lang['Viewing_priv_msgs'] = "Viendo mensajes privados";

$lang['Viewing_FAQ'] = "Viendo FAQ";





//

// Moderator Control Panel

//

$lang['Mod_CP'] = "Panel de Control del Moderador";

$lang['Mod_CP_explain'] = "Usando el siguiente formulario puede realizar operaciones de moderaci�n en este foro. Puede cerrar, desbloquear, mover o borrar cualquier n�mero de temas.";



$lang['Select'] = "Seleccionar";

$lang['Delete'] = "Borrar";

$lang['Move'] = "Mover";

$lang['Lock'] = "Cerrar";

$lang['Unlock'] = "Desbloquear";



$lang['Topics_Removed'] = "Los temas seleccionados han sido removidos con �xito de la base de datos.";

$lang['Topics_Locked'] = "Los temas seleccionados han sido cerrados";

$lang['Topics_Moved'] = "Los temas seleccionados han sido movidos";

$lang['Topics_Unlocked'] = "Los temas seleccionados han sido desbloqueados";

$lang['No_Topics_Moved'] = "No se movieron temas";



$lang['Confirm_delete_topic'] = "�Est� seguro que quiere eliminar el/los tema/s seleccionado/s?";

$lang['Confirm_lock_topic'] = "�Est� seguro que quiere cerrar el/los tema/s seleccionado/s?";

$lang['Confirm_unlock_topic'] = "�Est� seguro que quiere desbloquear el/los tema/s seleccionado/s?";

$lang['Confirm_move_topic'] = "�Est� seguro que quiere mover el/los tema/s seleccionado/s?";



$lang['Move_to_forum'] = "Mover al foro";

$lang['Leave_shadow_topic'] = "Dejar tema sombreado en antiguo foro.";



$lang['Split_Topic'] = "Panel de Control para Divisi�n de Temas";

$lang['Split_Topic_explain'] = "Usando el siguiente formulario puede dividir un tema en dos, ya sea seleccionando los mensajes individualmente o dividi�ndolo en un mensaje determinado";

$lang['Split_title'] = "T�tulo del nuevo tema";

$lang['Split_forum'] = "Foro para nuevo tema";

$lang['Split_posts'] = "Dividir mensajes seleccionados";

$lang['Split_after'] = "Dividir desde el mensaje seleccionado";

$lang['Topic_split'] = "El tema seleccionado ha sido dividido con �xito";



$lang['Too_many_error'] = "Ha seleccionado muchos mensajes. Solo puede escoger un mensaje para dividir un tema a partir de �l";



$lang['None_selected'] = "No ha seleccionado temas para esta operaci�n. Por favor regrese y seleccione al menos uno.";

$lang['New_forum'] = "Nuevo Foro";



$lang['This_posts_IP'] = "IP para este mensaje";

$lang['Other_IP_this_user'] = "Otros IP's desde los que este usuario ha publicado mensajes";

$lang['Users_this_IP'] = "Usuarios publicando de este IP";

$lang['IP_info'] = "Informaci�n IP";

$lang['Lookup_IP'] = "Buscar por IP";





//

// Zonas horarias ... para mostrar en cada p�gina

//

$lang['All_times'] = "Todas las horas son %s"; // ej. Todas las horas son GMT - 12 Horas 



// Estos se muestran en la lista desplegable de zona horaria

$lang['-12'] = 'GMT - 12 Horas'; 

$lang['-11'] = 'GMT - 11 Horas'; 

$lang['-10'] = 'GMT - 10 Horas'; 

$lang['-9'] = 'GMT - 9 Horas'; 

$lang['-8'] = 'GMT - 8 Horas'; 

$lang['-7'] = 'GMT - 7 Horas'; 

$lang['-6'] = 'GMT - 6 Horas'; 

$lang['-5'] = 'GMT - 5 Horas'; 

$lang['-4'] = 'GMT - 4 Horas'; 

$lang['-3.5'] = 'GMT - 3.5 Horas'; 

$lang['-3'] = 'GMT - 3 Horas'; 

$lang['-2'] = 'GMT - 2 Horas'; 

$lang['-1'] = 'GMT - 1 Horas'; 

$lang['0'] = 'GMT'; 

$lang['1'] = 'GMT + 1 Hora'; 

$lang['2'] = 'GMT + 2 Horas'; 

$lang['3'] = 'GMT + 3 Horas'; 

$lang['3.5'] = 'GMT + 3.5 Horas'; 

$lang['4'] = 'GMT + 4 Horas'; 

$lang['4.5'] = 'GMT + 4.5 Horas'; 

$lang['5'] = 'GMT + 5 Horas'; 

$lang['5.5'] = 'GMT + 5.5 Horas'; 

$lang['6'] = 'GMT + 6 Horas'; 

$lang['6.5'] = 'GMT + 6.5 Horas'; 

$lang['7'] = 'GMT + 7 Horas'; 

$lang['8'] = 'GMT + 8 Horas'; 

$lang['9'] = 'GMT + 9 Horas'; 

$lang['9.5'] = 'GMT + 9.5 Horas'; 

$lang['10'] = 'GMT + 10 Horas'; 

$lang['11'] = 'GMT + 11 Horas'; 

$lang['12'] = 'GMT + 12 Horas'; 



// These are displayed in the timezone select box 

$lang['tz']['-12'] = 'GMT - 12 Horas'; 

$lang['tz']['-11'] = 'GMT - 11 Horas'; 

$lang['tz']['-10'] = 'GMT - 10 Horas'; 

$lang['tz']['-9'] = 'GMT - 9 Horas'; 

$lang['tz']['-8'] = 'GMT - 8 Horas'; 

$lang['tz']['-7'] = 'GMT - 7 Horas'; 

$lang['tz']['-6'] = 'GMT - 6 Horas'; 

$lang['tz']['-5'] = 'GMT - 5 Horas'; 

$lang['tz']['-4'] = 'GMT - 4 Horas'; 

$lang['tz']['-3.5'] = 'GMT - 3.5 Horas'; 

$lang['tz']['-3'] = 'GMT - 3 Horas'; 

$lang['tz']['-2'] = 'GMT - 2 Horas'; 

$lang['tz']['-1'] = 'GMT - 1 Horas'; 

$lang['tz']['0'] = 'GMT'; 

$lang['tz']['1'] = 'GMT + 1 Hora'; 

$lang['tz']['2'] = 'GMT + 2 Horas'; 

$lang['tz']['3'] = 'GMT + 3 Horas'; 

$lang['tz']['3.5'] = 'GMT + 3.5 Horas'; 

$lang['tz']['4'] = 'GMT + 4 Horas'; 

$lang['tz']['4.5'] = 'GMT + 4.5 Horas'; 

$lang['tz']['5'] = 'GMT + 5 Horas'; 

$lang['tz']['5.5'] = 'GMT + 5.5 Horas'; 

$lang['tz']['6'] = 'GMT + 6 Horas'; 

$lang['tz']['6.5'] = 'GMT + 6.5 Horas'; 

$lang['tz']['7'] = 'GMT + 7 Horas'; 

$lang['tz']['8'] = 'GMT + 8 Horas'; 

$lang['tz']['9'] = 'GMT + 9 Horas'; 

$lang['tz']['9.5'] = 'GMT + 9.5 Horas'; 

$lang['tz']['10'] = 'GMT + 10 Horas'; 

$lang['tz']['11'] = 'GMT + 11 Horas'; 

$lang['tz']['12'] = 'GMT + 12 Horas'; 



$lang['datetime']['Sunday'] = "Domingo";

$lang['datetime']['Monday'] = "Lunes";

$lang['datetime']['Tuesday'] = "Martes";

$lang['datetime']['Wednesday'] = "Mi�rcoles";

$lang['datetime']['Thursday'] = "Jueves";

$lang['datetime']['Friday'] = "Viernes";

$lang['datetime']['Saturday'] = "S�bado";

$lang['datetime']['Sun'] = "Dom";

$lang['datetime']['Mon'] = "Lun";

$lang['datetime']['Tue'] = "Mar";

$lang['datetime']['Wed'] = "Mie";

$lang['datetime']['Thu'] = "Jue";

$lang['datetime']['Fri'] = "Vie";

$lang['datetime']['Sat'] = "Sab";

$lang['datetime']['January'] = "Enero";

$lang['datetime']['February'] = "Febrero";

$lang['datetime']['March'] = "Marzo";

$lang['datetime']['April'] = "Abril";

$lang['datetime']['May'] = "Mayo";

$lang['datetime']['June'] = "Junio";

$lang['datetime']['July'] = "Julio";

$lang['datetime']['August'] = "Augosto";

$lang['datetime']['September'] = "Septiembre";

$lang['datetime']['October'] = "Octubre";

$lang['datetime']['November'] = "Noviembre";

$lang['datetime']['December'] = "Diciembre";

$lang['datetime']['Jan'] = "Ene";

$lang['datetime']['Feb'] = "Feb";

$lang['datetime']['Mar'] = "Mar";

$lang['datetime']['Apr'] = "Abr";

$lang['datetime']['May'] = "May";

$lang['datetime']['Jun'] = "Jun";

$lang['datetime']['Jul'] = "Jul";

$lang['datetime']['Aug'] = "Ago";

$lang['datetime']['Sep'] = "Sep";

$lang['datetime']['Oct'] = "Oct";

$lang['datetime']['Nov'] = "Nov";

$lang['datetime']['Dec'] = "Dic";



//

// Errores (no relacionados con una falla espec�fica en 

// una p�gina)

//

$lang['Information'] = "Informaci�n";

$lang['Critical_Information'] = "Informaci�n Cr�tica";



$lang['General_Error'] = "Error General";

$lang['Critical_Error'] = "Error Cr�tico";

$lang['An_error_occured'] = "Ocurri� un Error";

$lang['A_critical_error'] = "Ocurri� un Error Cr�tico";



//

// �Eso es todo amigos!

// -------------------------------------------------



?>