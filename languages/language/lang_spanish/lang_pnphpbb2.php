<?php
/***************************************************************************
 *                            lang_pnphpbb2.php [Spanish]
 *                              -------------------
 *     begin                : Tue Jan 13 2003
 *     update               : Sat September 16 2006
 *     copyright            : (C) 2003-2004 the PNphpBB Group
 *     email                : support@itsallbutstraw.com
 *
 *     $Id: lang_pnphpbb2.php,v 1.7 2004/10/15 20:55:21 carls Exp $
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
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//
// 2006-09-16 gnrx   -   Translated update to spanish
// Profiles/Registration
$lang['PNphpBB2_Change_Profile'] = 'Cambiar tu perfil de PostNuke';
$lang['PNphpBB2_Refresh_Profile'] = 'Refresca tu perfil de PostNuke';
$lang['PNphpBB2_Profile_Info'] = 'Esta información es usada en PNphpBB2 solamente. Toda información que es compartida entre PostNuke y PNphpBB2 está seteada en el perfil de PostNuke.';
$lang['PNphpBB2_Get_PN_Avatar'] = 'Desde PostNuke';

// Advanced Quick Reply Mod
$lang['Post_Image'] = "Msg Icono";
$lang['Quick_Reply'] = 'Respuesta Rápida';
$lang['Quick_quote'] = 'Citar el último mensaje';
$lang['Quick_add_smilies'] = 'Agrega emoticons';
$lang['QuoteSelelected'] = 'Cita elegida';
$lang['QuoteSelelectedEmpty'] = 'Selecciona cualquier texto en la página y prueba de nuevo';
$lang['Quick_Reply_smilies'] = 'todos';

// Tell-A-Friend Mod
$lang['Tell_Friend'] = "Envia email a amigo.";
$lang['Tell_Friend_Sender_User'] = "Tu nombre:";
$lang['Tell_Friend_Sender_Email'] = "Tu email:";
$lang['Tell_Friend_Reciever_User'] = "Nombre de tu amigo:";
$lang['Tell_Friend_Reciever_Email'] = "Email de tu amigo:";
$lang['Tell_Friend_Msg'] = "Tu mensaje:";
$lang['Tell_Friend_Title'] = "Dile a un amigo";
$lang['Tell_Friend_Body'] = "Hola,\nacabo de leer el tema >>{TOPIC}<< en {SITENAME} y creo que puede interesarte. Este es el enlace: {LINK}\n\nVes y leelo, y si quieres contestar puedes registrarte para tener tu propia cuenta, si es que aún no lo has hecho.";

// Printable Topic
$lang['Print_View'] = "Versión imprimible";

// Credits
$lang['Powered_by'] = "Powered by ";
$lang['PNphpBB_group'] = "The PNphpBB Group";
$lang['Credits'] = "Créditos";

// Full page maximize/minimize
$lang['PNphpBB2_Minimize'] = "Minimizar";
$lang['PNphpBB2_Maximize'] = "Maximizar"; 

// Full page maximize/minimize
$lang['PNphpBB2_SubForum_Off'] = "Sub-Categoria";
$lang['PNphpBB2_SubForum_On'] = "Sub-Foro"; 

// Hierarchies Mod

$lang['Forum_issub'] = 'El foro seleccionado contiene sub categorias.<br>Por lo tanto, no es posible ver mensajes.';

//MsgIcon Mod
$lang['Msg_Icons'] = 'Iconos de mensaje';
$lang['Msg_Icon_No_Icon'] = 'Sin icono';
$lang['More_msg_icons'] = "Ver más iconos";

//Code Block mod by Daz
$lang['code_more'] = "Ver más de este Código";
$lang['code_even_more'] = "Ver aún más de este Código";
$lang['code_less'] = "Ver menos de este Código";
$lang['code_select'] = "Seleccionar todo de este Código";

// Duplicated from phpBB admin language file for admin link :-(
$lang['Admin'] = 'Administración';
$lang['Moderate'] = 'Moderar este foro';

// New version of the User authorization levels output
$lang['Rules_header'] = 'En este foro tú puedes:';
$lang['Rules_post'] = 'Publicar nuevos mensajes';
$lang['Rules_reply'] = 'Responder a mensajes';
$lang['Rules_edit'] = 'Editar tus mensajes';
$lang['Rules_delete'] = 'Eliminar tus mensajes';
$lang['Rules_vote'] = 'Votar en encuestas';
$lang['Rules_attach'] = 'Adjuntar archivos';
$lang['Rules_download'] = 'Descargar archivos';
$lang['Rules_moderate_table'] = '%sModerar%s';
//$lang['Rules_moderate'] = 'You <b>can</b> %smoderate this forum%s'; // %s replaced by a href links, do not remove! 

// Added Re: for replies, Hardcoded in phpBB
$lang['Re'] = 'RE:';

// Legend
$lang['Legend'] = 'Leyenda';

// User online mod
$lang['Status'] = 'Estado: ';
$lang['Online'] = 'Conectado!';
$lang['Offline'] = 'Desconectado';

// Merge topics mod
$lang['Refresh'] = 'Actualizar';
$lang['Merge_topics'] = 'Unir mensajes';
$lang['Merge_title'] = 'Nuevo titulo para el tema';
$lang['Merge_title_explain'] = 'Este será el nuevo título del tema final. Dejelo en blanco si quieres que el sistema use el título del mensaje destino';
$lang['Merge_topic_from'] = 'Mensaje a unir';
$lang['Merge_topic_from_explain'] = 'Este mensaje será unido con el otro mensaje. Puedes introducir el ID del mensaje, la url del mensaje, o la url del mensaje en el hilo';
$lang['Merge_topic_to'] = 'Mensaje destino';
$lang['Merge_topic_to_explain'] = 'Este hilo cogerá todos los mensajes del hilo precedente. Puedes introducir el ID el mensaje, la url del mensaje, o la url del mensaje en este hilo';
$lang['Merge_from_not_found'] = 'El mensaje para unir no se a encontrado';
$lang['Merge_to_not_found'] = 'No encontré el tema destino';
$lang['Merge_topics_equals'] = 'No puedes unir un tema con el mismo';
$lang['Merge_from_not_authorized'] = 'No estas autorizado a moderar mensajes que vienen del foro del mensaje a unir';
$lang['Merge_to_not_authorized'] =  'No estas autorizado a moderar mensajes que vienen del foro del mensaje destino';
$lang['Merge_poll_from'] = 'Hay una encuesta en el tema que vas a unir. La encuesta será copiada al tema destino';
$lang['Merge_poll_from_and_to'] = 'El tema destino ya tiene una encuesta. The poll of the topic to merge will be deleted';
$lang['Merge_confirm_process'] = 'Estas seguro de querer unir los temas <br />"<b>%s</b>"<br />to<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'Los temas han sido unidos exitosamente.';

//limited post edit time MOD 
$lang['edit_time_past'] = 'No puedes editar tu mensaje. Puedes editar el mensaje en <b>%d</b> minutos, después de haber publicado tu mensaje.'; 

// Support status items
$lang['Support_topic'] = 'Mensaje Soporte';
$lang['support_status'][-1] = 'Selección status';
$lang['support_status'][0] = 'Sometido';
$lang['support_status'][1] = 'Reportado';
$lang['support_status'][2] = 'Confirmado';
$lang['support_status'][3] = 'Asignado';
$lang['support_status'][4] = 'Corregido';
$lang['support_status'][5] = 'Solucionado';
$lang['support_status'][6] = 'Error Usuario';
$lang['support_status'][7] = 'Necesita más entradas';
$lang['support_status'][8] = 'Nuevamente reportado';
$lang['support_status'][9] = 'Abandonado';
$lang['support_status'][10] = 'Contestado';
$lang['support_status'][11] = 'Completado';

$lang['support_color'][1] = 'azúl';
$lang['support_color'][2] = 'rojo';
$lang['support_color'][3] = 'magenta';
$lang['support_color'][4] = 'verde';
$lang['support_color'][5] = 'púrpura';
$lang['support_color'][6] = 'marrón';
$lang['support_color'][7] = 'naranja';
$lang['support_color'][8] = 'gris';
$lang['support_color'][9] = 'negro';
$lang['support_color'][10] = 'verde';
$lang['support_color'][11] = 'verde';

// Pagination
$lang['Navigation'] = 'Navegación';
$lang['First_Post'] = 'Primer mensaje';
$lang['Jump_Page'] = 'Introduzca el número de página a la que quiere ir';

// Replace existing phpBB language entries
$lang['Search_new'] = 'Ver nuevos mensajes';

// Gravatrs
$lang['Use_gravatar'] = "Use su <a href=\"http://www.gravatar.com\">Gravatar</a>";
//
// That's all Folks!
// -------------------------------------------------

?>