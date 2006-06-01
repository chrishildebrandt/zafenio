<?php

/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.1 2003/04/28 20:11:02 bob Exp $
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
//   Norwegian translation by lanes, shantra & water
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


$faq[] = array("--","Introduksjon");
$faq[] = array("Hva er BBCode?", "BBCode er en tilpasset utgave av HTML, og det er opp til administrator av forumene om du har anledning til � benytte BBCode i innleggene dine. Du kan ogs� selv deaktivere BBCode i hvert enkelt innlegg dersom du �nsker det. BBCode f�ler et lignende prinsipp som HTML, men bruker [ og ] isteden for &lt; og &gt;. Du har ogs� mer kontroll med hvilket og hvordan innholdet vises. Avhengig av hvilken stil som benyttes p� forumene, eller hvilken stil du selv har valgt, er det veldig lett � bruke BBCode vha. knapper p� skjemaet for � legge til innlegg.<br /><br />");

$faq[] = array("--","Tekst formatering");
$faq[] = array("Hvordan kan jeg skrive fet, kursiv og understreket tekst?", "BBCode har tagger som gj�r det lett � formatere tekst p� f�lgende m�ter: <ul><li>For � gj�re tekst fet omgir du den med <b>[b][/b]</b>, f.eks. <br /><br /> <b>[b]</b>Fet tekst<b>[/b]</b><br /><br />blir formatert slik : <b>Fet tekst</b><br /><br /></li><li>Bruk <b>[u][/u]</b> for � understreke tekst, f.eks. <br /><br /><b>[u]</b>Understreket tekst<b>[/u]</b><br /><br />blir formatert slik : <u>Understreket tekst<br /><br /></u></li><li>Bruk <b>[i][/i]</b> for � sette tekst i kursiv , f.eks.<br /><br /><b>[i]</b>Dette er kursiv<b>[/i]</b><br /><br /> blir formatert slik : <i>Dette er kursiv</i><br /><br /></li></ul>");
$faq[] = array("Hvordan kan jeg endre tekstst�rrelse og farge?", "Du kan bruke f�lgende tagger for � endre tekstens farge og st�rrelse, men husk at formateringen vil kunne variere i forskjellige nettlesere og operativsystemer. <ul><li>Du kan endre tekstens farge med <b>[color=][/color]</b>, og du kan benytte godkjente fargenavn (f.eks. red, blue, yellow, osv.) eller heksadesimalkode (f.eks. #FFFFFF, #000000). For � formatere teksten med r�d kan du bruke : <br /><br /><b>[color=red]</b>Dette er r�d tekst<b>[/color]</b><br /> <br />eller<br /><br /><b>[color=#FF0000]</b>Dette er r�d tekst<b>[/color]</b><br /><br /> som begge vil formatere teksten slik : <span style=\"color:red\">Dette er r�d tekst</span><br /><br /> </li><li> Du kan endre tekstens st�rrelse p� tilsvarende m�te med <b>[size=][/size]</b>. Denne taggen er avhegning av hvilken stil forumet benytter, men det anbefales � bruke nummerisk verdi for � angi st�rrelse i piksler. Du kan angi st�rrelser fra 1 (som gir n�rmest uleselig tekst) og opp til 29 (som blir veldig stort). <br /><br /><b>[size=9]</b> liten tekst<b>[/size]</b><br /><br />blir formatert slik : <span style=\"font-size:9px\">liten tekst </span><br /><br />og<br /><br /><b>[size=24]</b>STOR TEKST<b>[/size]</b><br /><br /> blir formatert slik :  <span style=\"font-size:24px\">STOR TEKST</span></li></ul>");
$faq[] = array("Kan jeg kombinere formateringstagger?", "Ja, for � virkelig vekke oppmerksomhet kan du f.eks. benytte :<br /><br /><b>[size=18][color=red][b]</b>LES HER!<b>[/b][/color][/size]</b><br /><br />som blir formatert slik : <span style=\"color:red;font-size:18px\"><b>LES HER!</b></span><br /><br />Vi anbefaler at du ikke benytter dette mye, det kan bli vanskelig � lese og det er opp til deg som skriver innlegget � s�rge for at du bruker korrekt formatert BBCode. Det er f.eks. lett � \"g� seg bort\" hvis du bruker for mange tagger i hverandre, f�lgende er et eksempel p� dette :<br /><br /><b>[b][u]</b> Dette er feil!<b>[/b][/u]</b><br /><br />");

$faq[] = array("--","Sitere og vise predefinert tekst");
$faq[] = array("Sitere tekst i svar", "Du kan sitere b�de med og uten referanse til  opprinnelig forfatter.<ul><li>N�r du bruker siter funksjonen for � svare p� et innlegg vil du se at teksten du siterer er satt inn i <b>[quote=\"\"][/quote]</b> tagger. Denne metoden gir deg full anlednig til � sitere en annen person eller hva som helst annet du �nsker � sitere. Hvis f.eks �nsker � sitere en Mr. Blobby uttalelse skriver du :<br /><br /><b>[quote=\"Mr. Blobby\"]</b>Mr. Blobbys uttalelse<b>[/quote]</b><br /><br /> Mr. Blobby skrev: vil automatisk bli lagt til f�r teksten du siterer. Husk at du <b>m�</b> bruke anf�rselstegn, \"\", rundt navnet p� den du siterer.<br /><br /></li><li>Du kan ogs� sitere uten � angi hvem eller hva du siterer, bruk <b>[quote][/quote]</b> tagger rundt teksten du �nsker � sitere. N�r du siterer vha. denne metoden vil Sitat : automatisk bli satt inn f�r teksten du siterer.<br /><br /></li></ul>");
$faq[] = array("Skrive kode eller predefinert tekst", "Hvis du �nsker � vise kode eller predefinert tekst bruker du taggene <b>[code][/code]</b>, f.eks. <br /><br /><b>[code]</b>echo \"Dette er kode\";<b>[/code]</b><br /><br />All tekst som settes i disse taggene vil beholde formatet du benytter n�r den vises i innlegget.<br /><br />");

$faq[] = array("--","Generere lister");
$faq[] = array("Lage en ikke sortert liste", "BBCode st�tter b�de sorterte og ikke-sorterte lister, som i praksis er lik tilsvarende lister laget med HTML. En ikke-sorterte liste viser en vanlig punktliste med punkter som mark�r for hvert nye punkt p� lista. Bruk <b>[list][/list]</b>, og angi hvert punkt med <b>[*]</b>, for � lage en ikke-sorterte liste. <br /><br /><b>[list]</b><br /><b>[*]</b>R�d<br /><b>[*]</b>Bl�<br /><b>[*]</b>Gul<br /><b>[/list]</b><br /><br /> formateres slik : <ul><li>R�d</li><li>Bl�</li><li>Gul</li></ul>");
$faq[] = array("Lage en sortert liste", "Velge du en sortert liste kan erstatte det vanlige punktlista med en nummerert eller alfabetisert liste. Bruk <b>[list=1][/list]</b> for � lage en nummerert liste eller <b>[list=a][/list]</b> for � lage alfabetisert liste, og <b>[*]</b> for � angi hvert punkt p� lista.<br /><br /><b>[list=1]</b><br /><b>[*]</b>G� til butikken<br /><b>[*]</b>Kj�p ny pc<br /><b>[*]</b>Kjeft p� pc-en n�r den kr�sjer<br /><b>[/list]</b><br /><br /> formateres slik :<ol type=\"1\"><li>G� til butikken</li><li>Kj�p ny pc</li><li>Kjeft p� pc-en n�r den kr�sjer</li></ol> Alternativt lage du en alfabetisert liste slik :<br /><br /><b>[list=a]</b><br /><b>[*]</b>Det f�rste svaralternativet<br /><b>[*]</b>Det andre svaralternativet<br /><b>[*]</b>Det tredje svaralternativet<br /><b>[/list]</b><br /><br />som vil bli formatert slik :<ol type=\"a\"><li>Det f�rste svaralternativet</li><li>Det andre svaralternativet</li><li>The Det tredje svaralternativet</li></ol>");

$faq[] = array("--", "Lage linker");
$faq[] = array("Eksterne linker", "Du kan velge mellom flere metoder for � lage URL-er eller linker med BBCode.<ul><li><b>Med [url=][/url]</b> taggene vil teksten mellom taggene linke til det du skriver etter the = f.eks. :<br /><br /><b>[url=http://www.phpbb.com/]</b>Bes�k phpBB!<b>[/url]</b><br /><br />gir f�lgende link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Bes�k phpBB!</a> Legg merke til at linken �pnes i et nytt vindu slik at forumet beholdes i det originale nettleservinduet.<br /><br /></li><li>Hvis du �nsker at selve URL-en skal v�re synlig bruker du :<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />som gir f�lgende link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a><br /><br /></li><li>PhpBB har en funksjon som kalles <i>Magic Links</i>, som automatisk konverterer alle korrekt formaterte URL-er til linker, du trenger ikke engang skrive http:// f�rst. Hvis du f.eks. skriver www.phpbb.com i innlegget ditt vil teksten automatisk bli konvertert til <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.<br /><br /></li><li><i>Magic Links</i> fungerer ogs� med e-postadresser, du kan enten skrive :<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />som formateres slik : <a href=\"mailto:no.one@domain.adr\">no.one@domain.adr</a> eller du kan skrive, som ogs� formateres slik :  <a href=\"mailto:no.one@domain.adr\">no.one@domain.adr</a>.<br /><br /></li></ul>Som med alle andre BBCode tagger kan du bruke URL taggene sammen med andre formateringstagger, f.eks. <b>[img][/img]</b> (se neste seksjon), <b>[b][/b]</b>, osv. P� lik linje med formateringstaggene m� du selv s�rge for at alle taggene �pnes og lukkes korrekt.<br /><br />Dette eksemplet :  <b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />er <u>ikke</u> korrekt formatert, og i et slikt tilfellet kan du risikere at innlegget ditt blir slettet.<br /><br />");

$faq[] = array("--", "Vise bilder i posteringer");
$faq[] = array("Legge til bilde(r) i et innlegg", "phpBB BBCode har en tagg som gj�r det mulig � vise bilder i innleggene dine. N�r du vurderer � bruke bilder i innleggene er det viktig er klar over f�lgende, mange brukere foretrekker temaer som ikke er overlesset med bilder. I tillegg m� ogs� bildet/bildene du skal bruke allerede finnes p� www (det holder f.eks. ikke at du har bildet p� pc-en din). Det er ikke mulig � lagre eller laste opp bilder til phpBB, men dette vil bli mulig i neste versjon, phpBB 2.2.<br /><br /> For � vise bilder i et innlegg m� du bruke BBCode taggene <b>[img][/img]</b> rundt bildenes URLer som i eksemplet under<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Du kan ogs� bruke bilder som linker vha. <b>[url][/url]</b>, f.eks.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />gir :<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br /><br />");

$faq[] = array("--", "Annet");
$faq[] = array("Kan jeg lage mine egne koder?", "Nei, dette er dessverre ikke mulig i phpBB 2, men det er godt mulig det blir funksjonalitet for dette i neste hovedversjon, phpBB 2.2.<br /><br />");


//
// This ends the BBCode guide entries
//

?>