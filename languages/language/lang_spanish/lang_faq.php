<?php
/***************************************************************************
 *                          lang_faq.php [espa�ol]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   
 *   traducci�n a espa�ol : Daniel Gonz�lez Cuellar (webmaster@ba-k.com)
 *   			    Mariano Martene (correo@webfactory.com)
 *                          Patricio Marin (pmarin@hotmail.com)
 *
 *   $Id: lang_faq.php,v 0.9 2002/03/05 16:42:08 Pato[100%Q]
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   Esta es una aplicaci�n de software libre, puede re-distribuirla y/o modificarla
 *   bajo los terminos de la GNU (Licencia P�blica General), la cual fue publicada
 *   por la Free Software Foundation (Fundaci�n del Software Libre). Esto en la licencia
 *   de la versi�n 2 o posterior.
 *
 ***************************************************************************/
 
// 
// Para agregar una entrada a las FAQ solo agregue una linea con el siguiente formato:
// $faq[] = array("pregunta", "respuesta");
// Si quieres separar una seccion escribe $faq[] = array("--","Un texto de separaci�n puede ir aqui si lo deseas");
// Los enlaces se crean automaticamente :)
//
// NO OLVIDE poner ; al final de cada linea.
// NO PONGA dobles comillas (") en las entradas de sus FAQ, si es absolutamente necesario entonces escribalo asi: \"texto\"
//
// Los temas y entradas de las FAQ aparecer�n en el mismo orden en el que est�n en este archivo.
//

  
$faq[] = array("--","Acerca del ingreso (login) y registro");
$faq[] = array("�Por qu� no puedo ingresar?", "�Ya se registr�? Debe registrarse en el sistema antes de poder acceder a �l. �Ha sido bloquedado en el foro? (si es asi un mensaje aparecer�). Si esto sucede envie un mensaje al administrador del foro para encontrar la causa. Si se ha registrado y no ha sido bloquedado verifique que su nombre de usuario y contrase�a coincidan, es el problema mas com�n. Si esta seguro de que est�n correctos los datos, envie un mensaje al administrador, es posible que el foro est� mal configurado y/o tenga fallos en la programaci�n.");
$faq[] = array("�Por qu� me tengo que registrar para todo?", "No esta obligado a hacerlo, la decisi�n la toman los administradores y moderadores. Sin embargo estar registrado le da muchas ventajas que como usuario invitado no difrutar�a, como tener su gr�fico personalizado (avatar), mensajes privados, suscripcion a grupos de usuarios, etc.... Solo le tomar� unos segundos, es muy recomendable.");
$faq[] = array("�Por qu� mi sesi�n de usuario expira automaticamente?", "Si no activa la casilla <i>Ingresar autom�ticamente</i> cuando ingresa al foro, sus datos se guardan en una cookie que se elimina al salir de la p�gina o en cierto tiempo. Esto previene que su cuenta pueda ser usada por alguien m�s. Para que el sistema le reconozca autom�ticamente solo active la casilla al ingresar. NO es recomendable si accesa al foro desde una computadora compartida (caf�-internet, biblioteca, colegio ...)");
$faq[] = array("�Como evito aparecer en las listas de usuarios conectados?", "En su perfil, encontrar� la opci�n <i>Ocultar mi estado de conexi�n</i>, si activa esta opci�n aparecer� solo para los administradores, moderadores y para si mismo, para los demas ser� un usuario oculto.");
$faq[] = array("�He perdido mi contrase�a!", "Calma, si su contrase�a no pueda ser recuperada puede desactivarla o cambiarla. Para hacer esto dirijase a la p�gina de registro y haga click en <u>Olvid� mi contrase�a</u>, siga las instrucciones y estar� dentro en muy poco tiempo");
$faq[] = array("�Me he registrado y no puedo ingresar!", "Primeramente verifique sus datos (usuario y contrase�a). Si todo es correcto hay dos posibles razones. Si el Sistema de Protecci�n Infantil (COPPA) esta activado y cuando se registro eligi� la opci�n <u>Soy menor de 13 a�os</u> entonces tendr� que seguir algunas instrucciones que se te dar�n para activar la cuenta. En otros casos el administrador pide que las cuentas se activen mediante un correo electr�nico, asi que revise su correo y confirme su suscripci�n. Algunos foros necesitan confirmaci�n de registro. Si no sucede nada de esto contacte al administrador del foro.");
$faq[] = array("Hace un tiempo me registr�, pero ahora no puedo ingresar", "Las posibles razones son: ingres� un nombre de usuario o contrase�a incorrectos (verifique el mensaje que se le envia al registrarse). Es posible que el administrador haya borrado su cuenta, esto es muy frecuente, pues si no ha escrito ningun mensaje en cierto tiempo el administrador puede borrar el usuario para que la base de datos no se sature de registros. Si es asi registrese de nuevo y participe :)");


$faq[] = array("--","Preferencias de usuario y configuraciones");
$faq[] = array("�C�mo puedo cambiar mi configuraci�n?", "Todos sus datos y configuraciones (si estas registrado) est�n archivados en nuestra base de datos. Para modificarlos pincha en el link <u>Perfil</u>, generalmente se encuentra arriba de cada p�gina.");
$faq[] = array("El tiempo en los foros no es correcto (horas)!", "Las horas son corectas, es posible que estes viendo las horas correspondientes a otra zona horaria, si este es el caso, ingresa a tu perfil y define tu zona horaria deacuerdo a tu ubicaci�n (ej. Londres, Paris, New York, Sydney, etc.) Cambiando esto las horas deben de aparecer deacuerdo a tu zona y tiempo. Si no te has registrado es tiempo de hacerlo :)");
$faq[] = array("He cambiado la zona horaria en mi perfil, pero el tiempo sigue siendo incorrecto", "Si estas segur@ de que la zona horaria es correcta es posible que se deba a los horarios de verano implementados por algunos paises.");
$faq[] = array("Mi idioma no est� en la lista!", "Esto se puede deber a que el administrador no ha instalado el paquete de tu lenguaje para el foro o nadie ha creado una traducci�n :(  si es asi, sientete libre de hacer una traducci�n (miles de personas te lo agradecer�n), la informaci�n la encuentras en el  phpBB Group website (Pincha en el link que se encuentra al final de la p�gina)");
$faq[] = array("C�mo puedo poner una imagen abajo de mi nombre de usuario?", "Hay dos tipos de im�genes debajo de tu nombre de usuario, la primera es el RANK, que est� asociada con el n�mero de mensajes que has escrito en el foro (generalmente son estrellas o bloques), la segunda es el AVATAR, que es un gr�fico generalmente �nico y personal, el administrador decide si se pueden usar o no, si es posible usarlos puedes introducirlo en tu perfil. En caso de que no exista esa opci�n, contacta al administrador y pide que sea activada esa opci�n :)");
$faq[] = array("�Como puedo cambiar mi RANK?", "No puedes cambiar tu RANK directamente, ya que este es asociado directamente con el n�mero de mensajes posteados o tu estado de moderador, administrador o RANKs especiales. Por favor, no abuses de postear innecesariamente para incrementar tu RANK.");
$faq[] = array("Cuando doy click sobre el link de e-mail me pide que me registre", "Para poder enviar e-mail a un usuario via formulario (si el administrador lo tiene activado) necesitas estar registrado, esto para evitar SPAM o mensajes maliciosos de usuarios anonimos.");


$faq[] = array("--","Publicaci�n de mensajes");
$faq[] = array("�Como puedo publicar un mensaje en el foro?", "Facil, registrate como miembro del foro (pinchando en el link de registro, generalmente arriba de cada p�gina), despues del registro pinchas en <i>Enviar nuevo mensaje<i>, ahi se te presentar� un panel con el que facilmente publicar�s un mensaje :)");
$faq[] = array("�C�mo puedo editar o borrar un mensaje?", "Si no eres el administrador o moderador del foro, solo puedes borrar los mensajes que hayas enviado tu mismo. Puedes editar un mensaje hachiendo click en <i>editar</i> si alguien ya ha respondido a tu mensaje, encontrar�s un peque�o texto en el tuyo diciendo que ha sido modificado y las veces que lo has hecho, no aparece si fue un moderador o el administrador el que lo edito (la mayoria de las veces dejan un mensaje aclaratorio).");
$faq[] = array("�Como puedo agregar una firma a mi mensaje?", "Para insertar una firma en tu mensaje primero debes crear una, esto se hace modificando tu perfil. Una vez creada activas la opci�n <i>Agregar firma</i> cuando postees un mensaje. Tambi�n puedes hacer que todos tus mensajes tengan tu firma, activando la opci�n el tu perfil.");
$faq[] = array("�C�mo creo una encuesta?", "Crear una encuesta es facil, cuando inicias un nuevo tema notar�s la opci�n <i>Crear una encuesta</i>, introduces los datos de la encuesta, como titulo y opciones, tienes la posibilidad de poner limite al numero de participantes (0 es infinito)");
$faq[] = array("�C�mo edito o borro una encuesta?edit or delete a poll?", "Si eres el que inicio la encuesta puedes editarla de la misma manera que tu mensaje, sin embargo esto solo funcionar� si la encuesta aun no tiene respuestas, pues de tenerlas solo el administrador o moderadores podr�n editarla o borrarla");
$faq[] = array("�Por qu� no puedo accesar a alg�n foro?", "Algunos foros est�n limitados a ciertos grupos de usuarios, para verlos, postear, editar, etc, necesitas tener ciertas autorizaciones, las cuelas solo te puede dar un moderador o administrador del foro.");
$faq[] = array("�Por qu� no puedo votar en las encuestas?", "Solo miembros registrados pueden votar en las encuestas (para prevenir resultados trucados), si te has registrado pero no puedes votar, es posible que no tengas autorizaci�n para votar en esa encuesta :(.");


$faq[] = array("--","Formateo de mensajes y tipos de temas");
$faq[] = array("�Qu� es el c�digo BBCode?", "BBCode es una implementaci�n especial del HTM, la forma en la que el BBCode se usa es determinada por el administrador, es muy similar al HTML, las etiquetas van entre corchetes [ y ] para mas informaci�n puedes ver el manual de BBCode, el enlace aparece cada vez que vas a publicar un mensaje.");
$faq[] = array("�Puedo usar HTML?", "Depende de que el administrador tenga habilidata la opci�n y de cuales etiquetas HTML est�n activadas, ya que muchas etiquetas HTML podrian da�ar severamente la estructura del mensaje.");
$faq[] = array("�Qu� son los smileys?", "Smileys o emot�conos son peque�os gr�ficos que pueden ser usados para expresar emociones, aparecen introduciendo un pequelo c�digo, por ejemplo:  :) significa feliz, :( significa triste. La lista completa de smileys se despliega cuando envias un mensaje.");
$faq[] = array("�Puedo postear im�genes?", "Las imagenes pueden ser adheridas al mensaje, insertandolas al momento de redactarlo. No puede haber im�genes de sitios de correo, busqueda o cualquier autentificacion (Yahoo, Hotmail...).");
$faq[] = array("�Qu� son los anuncios?", "Los anuncios contienen informaci�n importante para los usuarios.");
$faq[] = array("�Qu� son los Temas Importantes?", "Los Temas Importantes aparecen debajo de los anuncios y solo en la primera p�gina, es informaci�n muy importante que deber�as leer :)");
$faq[] = array("�Qu� son los temas cerrados o bloquedados?", "Los temas cerrados o bloqueados son precidamente eso, temas en los que ya no se puede postear, esto lo decide el administrador o moderadores.");


$faq[] = array("--","Niveles de usuario y grupos");
$faq[] = array("�Qu� son los administradores?", "Los administradores son gente asignada con alto nivel de control sobre el foro entero, pueden controlar permisos, moderadores y todo tipo de configuraciones.");
$faq[] = array("�Qu� son los moderadores?", "Moderadores son personas que tienen el poder de editar o borrar foros, cerrarlos o abrirlos. Son designados por el administrador  tienen menos opciones que este.");
$faq[] = array("�Qu� son los grupos de usuarios?", "los Grupos de usuarios es una de las formas en las que el administrador del foro puede agrupar usuarios. Un usuario puede pertenecer a varios grupos. Esto se hace con el fin de conceder permisos solctivos sobre el foro (como volver a todo un grupo moderadores).");
$faq[] = array("�como puedo pertenecer a un Grupo de usuarios?", "Da click en Grupos de usuarios y pide tu inscripcion, recibiras un mail si eres aceptado. No todos los grupos son abiertos.");
$faq[] = array("�C�mo me convierto en el moderador de un grupo de usuarios?", "Solo el administrador puede asignar ese permiso, contacta con el :)");


$faq[] = array("--","Mensajer�a privada");
$faq[] = array("No puedo enviar mensajes privados!", "Hay tres posibles razones: No estas registrado o no has ingresado, el administrador deshabilito el sistema de mensajes privadoso el administrador ha desabilidato para ti la mensajer�a.");
$faq[] = array("Quiero evitar mensajes privados no deseados!", "En un futuro ser� agregada la caracter�stica de ignorar mensajes, por ahora solo envia un mensaje al administrador si recibes mensajes no deseados :(.");
$faq[] = array("He recibido spam o correos amaliciosos de alguien en este foro!", "Lo sentimos mucho, la caracteristica de mandar mails tiene amplios conceptos de seguridad y privacidad. Envia el mail al administrador, tal como venia, incluyendo headers y demas, el tomar� acciones.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Acerca de phpBB2");
$faq[] = array("�Quien program� este foro??", "Esta aplicaci�n (en su forma original) es producida, liberada y con derechos de autor pertenecientes al <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Est� hecho bajo la GNU (Licencia P�blica General) y es de libre distribuci�n (click en el enlace para conocer mas detalles)");
$faq[] = array("�Por qu� este foro no tiene X cosa?", "Este foro fue escrito y licenciado a trav�s de phpBB Group. Si cree que deberia tener alguna otra opci�n o caracter�stica visite phpbb.com y mire lo que el phpBB Group tiene que decir. Por favor, no publique mensajes de ese tipo en los foros de phpBB.com, los miembros de Sourceforge estan llenos de ideas y en constante innovaci�n para agregarle mejoras a este foro.");
$faq[] = array("�A quien puedo contactar acerca de abusos o usos ilegales relacionados con este foro?", "Puede contactar al administrador del foro, si no encuentra la forma de contactarlo intente contactando a cualquiera de los moderadores. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.");

//
// Aqu� terminan las FAQ :)
//

?>