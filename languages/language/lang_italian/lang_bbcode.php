<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.2 2003/04/29 22:48:07 bob Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
//	Translation produced by tesno
//	http://www.snowbox.it/
//

//
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array("--","Introduzione");
$faq[] = array("Cos'� il BBCode?", "BBCode � un ampliamento/attrezzo speciale del codice HTML. L'uso del BBCode nei tuoi messaggi nel forum � determinato dall'amministratore. Inoltre puoi disabilitare il BBCode in ogni messaggio attraverso il modulo di invio. Il BBCode stesso ha uno stile simile all'HTML, i tag sono racchiusi in parentesi quadre [ e ] piuttosto che in &lt; e &gt; e offre grande controllo su cosa e come vogliamo mostrare qualcosa. La facilit� di utilizzo del BBCode nei tuoi messaggi dipende dal modello che stai utilizzando. Per ogni problema puoi far riferimento a questa guida.");

$faq[] = array("--","Formattazione del testo");
$faq[] = array("Come creare il testo in grassetto, sottolineato o corsivo", "Il BBCode include dei tag per permetterti di cambiare velocemente lo stile di base del tuo testo. Questo avviene nel seguente modo: <ul><li>Per il testo in grassetto usa <b>[b][/b]</b>, es. <br /><br /><b>[b]</b>Ciao<b>[/b]</b><br /><br >diventer� <b>Ciao</b></li><li>Per il testo sottolineato usa<b>[u][/u]</b>, es.:<br /><br /><b>[u]</b>Buon Giorno<b>[/u]</b><br /><br />diventa <u>Buon Giorno</u></li><li>Per il testo in corsivo usa<b>[i][/i]</b>, es.<br /><br >Questo � <b>[i]</b>Grande!<b>[/i]</b><br /><br />diventa Questo � <i>Grande!</i></li></ul>");
$faq[] = array("Come cambiare il colore o la dimensione del testo", "Per modificare il colore o la dimensione del testo puoi usare i seguenti tag. Ricordati che queste impostazioni dipendono dal browser e dal sistema di chi guarda il messaggio: <ul><li>Per cambiare il colore del testo racchiudilo tra <b>[color=][/color]</b>. Puoi anche specificare un nome di colore conosciuto (es. rosso, blu, giallo, ecc.) o alternativamente il codice esadecimale, es. #FFFFFF, #000000. Per esempio, per creare un testo rosso puoi usare:<br /><br /><b>[color=red]</b>Ciao!<b>[/color]</b><br /><br />or<br /><br /><b>[color=#FF0000]</b>Ciao!<b>[/color]</b><br /><br />entrambi danno come risultato <span style=\"color:red\">Ciao!</span></li><li>Per cambiare la dimensione del testo usa <b>[size=][/size]</b>. Questo tag dipende dal modello che stai usando ma il formato raccomandato � un valore numerico che rappresenti la dimensione del testo in pixel, iniziando da 1 (cos� piccolo che non si riesce a vedere) fino a 29 (molto grande). Per esempio:<br /><br /><b>[size=9]</b>PICCOLO<b>[/size]</b><br /><br />generalmente � <span style=\"font-size:9px\">PICCOLO</span><br /><br />mentre:<br /><br /><b>[size=24]</b>ENORME!<b>[/size]</b><br /><br />sar� <span style=\"font-size:24px\">ENORME!</span></li></ul>");
$faq[] = array("Posso combinare i tag di formattazione?", "S�, certo, per esempio per richiamare l'attenzione puoi scrivere:<br /><br /><b>[size=18][color=red][b]</b>GUARDAMI!<b>[/b][/color][/size]</b><br /><br />cio� <span style=\"color:red;font-size:18px\"><b>GUARDAMI!</b></span><br /><br />Ti consigliamo di non usare troppo testo come questo, comunque! Ricorda che tu, l'autore, devi assicurarti che tutti i tags siano chiusi in modo corretto. Per esempio, quello che segue non � corretto:<br /><br /><b>[b][u]</b>Questo � sbagliato<b>[/b][/u]</b>");

$faq[] = array("--","Citazioni e testo a larghezza fissa");
$faq[] = array("Citazioni di testo nelle risposte", "Ci sono due modi per fare una citazione, con un referente o senza.<ul><li>Quando utilizzi la funzione citazione per rispondere ad un messaggio sul forum devi notare che il testo del messaggio viene incluso nella finestra del messaggio tra <b>[quote=\"\"][/quote]</b>. Questo metodo ti permette di fare una citazione riferendoti ad una persona o qualsiasi altra cosa che hai deciso di inserire! Per esempio, per citare un pezzo di testo di Mr. Blobby devi inserire:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Il testo di Mr. Blobby andr� qui<b>[/quote]</b><br /><br />Nel messaggio verr� automaticamente aggiunto, Mr. Blobby ha scritto: prima del testo citato. Ricorda che tu <b>devi</b> includere le parentesi \"\" attorno al nome che stai citando, non sono opzionali.</li><li>Il secondo metodo ti permette di citare qualcosa alla cieca. Per utilizzare questo metodo, racchiudi il testo tra i tags <b>[quote][/quote]</b>. Quando vedrai il messaggio comparir� semplicemente, Citazione: prima del testo stesso.</li></ul>");
$faq[] = array("Mostrare il codice", "Se vuoi mostrare un pezzo di codice o qualcosa che ha bisogno di una larghezza fissa, es. courier devi racchiudere il testo tra i tag <b>[code][/code]</b>, es.<br /><br /><b>[code]</b>echo \"Questo � un codice\";<b>[/code]</b><br /><br />Tutta la formattazione utilizzata tra i tag <b>[code][/code]</b> viene mantenuta quando viene visualizzata in seguito.");

$faq[] = array("--","Creazione di liste");
$faq[] = array("Creare una lista non ordinata", "BBCode supporta due tipi di liste, ordinate e non. Sono essenzialmente la stessa cosa del loro equivalente in HTML. Una lista non ordinata mostra ogni oggetto nella tua lista in modo sequenziale, uno dopo l'altro inserendo un punto per ogni riga. Per creare una lista non ordinata usa <b>[list][/list]</b> e definisci ogni oggetto nella lista usando <b>[*]</b>. Per esempio per fare una lista dei tuoi colori preferiti puoi usare:<br /><br /><b>[list]</b><br /><b>[*]</b>Rosso<br /><b>[*]</b>Blu<br /><b>[*]</b>Giallo<br /><b>[/list]</b><br /><br />Questo mostrer� questa lista:<ul><li>Rosso</li><li>Blu</li><li>Giallo</li></ul>");
$faq[] = array("Creare una lista ordinata", "Una lista ordinata ti permette di controllare il modo in cui ogni oggetto della lista viene mostrato. Per creare una lista ordinata usa <b>[list=1][/list]</b> per creare una lista numerata o alternativamente <b>[list=a][/list]</b> per una lista alfabetica. Come per la lista non ordinata gli oggetti vengono specificati utilizzando <b>[*]</b>. Per esempio:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Vai al negozio<br /><b>[*]</b>Compra un novo computer<br /><b>[*]</b>Impreca sul computer quando si blocca<br /><b>[/list]</b><br /><br />verr� mostrato cos�:<ol type=\"1\"><li>Vai al negozio</li><li>Compra un nuovo computer</li><li>Impreca sul computer quando si blocca</li></ol>mentre per una lista alfabetica devi usare:<br /><br /><b>[list=a]</b><br /><b>[*]</b>La prima risposta possibile<br /><b>[*]</b>La seconda risposta possibile<br /><b>[*]</b>La terza risposta possibile<br /><b>[/list]</b><br /><br />sar�<ol type=\"a\"><li>La prima risposta possibile</li><li>La seconda risposta possibile</li><li>La terza risposta possibile</li></ol>");

$faq[] = array("--", "Creare link");
$faq[] = array("Linkare un altro sito", "Il BBCode di phpBB supporta diversi modi per creare URI, uniform resource indicators meglio conosciuti come URL.<ul><li>Il primo di questi utilizza il tag <b>[url=][/url]</b>, qualunque cosa digiti dopo il segno = generer� il contenuto del tag che si comporter� come URL. Per esempio per linkarsi a phpBB.com devi usare:<br /><br /><b>[url=http://www.phpbb.com/]</b>Visita phpBB!<b>[/url]</b><br /><br />Questo genera il seguente link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visita phpBB!</a> Come puoi vedere il link si apre in una nuova finestra cos� l'utente pu� continuare a navigare nei forum.</li><li>Se vuoi che l'URL stesso venga mostrato come link puoi fare questo semplicemente usando:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Questo genera il seguente link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Inoltre phpBB dispone di una funzione chiamata <i>Magic Link</i>, questo cambier� ogni URL sintatticamente corretta in un link senza la necessit� di specificare nessun tag o http://. Per esempio digitando www.phpbb.com nel tuo messaggio automaticamente verr� cambiato in <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> e verr� mostrato nel messaggio finale.</li><li>La stessa cosa accade per gli indirizzi email, puoi specificare un indirizzo esplicitamente, per esempio:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />che mostrer� <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> o puoi digitare no.one@domain.adr nel tuo messaggio e verr� automaticamente convertito.</li></ul>Come per tutti i tag del BBCode puoi includere le URL in ogni altro tag come <b>[img][/img]</b> (guarda il successivo punto), <b>[b][/b]</b>, ecc. Come per i tag di formattazione dipende da te verificare che tutti i tag siano correttamente aperti e chiusi, per esempio:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>non</u> � corretto e potrebbe cancellare il tuo messaggio. Quindi presta attenzione.");

$faq[] = array("--", "Mostrare immagini nei messaggi");
$faq[] = array("Aggiungere una immagine al messaggio", "Il BBCode di phpBB incorpora un tag per l'inclusione di immagini nei tuoi messaggi. Ci sono due cose importanti da ricordare nell'usare questo tag; a molti utenti non piacciono molte immagini nei messaggi e in secondo luogo l'immagine deve essere gi� disponibile su internet (non pu� esistere solo sul tuo computer per esempio, a meno che tu non abbia un webserver!). Non c'� modo di salvare le immagini localmente con phpBB (forse nella prossima release di phpBB). Per mostrare delle immagini devi inserire l'URL che rimanda all'immagine con il tag <b>[img][/img]</b>. Per esempio:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Puoi inserire un'immagine nel tag <b>[url][/url]</b> se vuoi, es.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />genera:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Altre cose");
$faq[] = array("Posso aggiungere i miei tag personali?", "No, non direttamente in phpBB 2.0. Stiamo cercando di rendere i tag del BBCode pi� versatili per la prossima versione");

//
// This ends the BBCode guide entries
//

?>