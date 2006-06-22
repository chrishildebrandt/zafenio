<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.2.2.1 2002/11/14 14:00:10 psotfx Exp $
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
  
$faq[] = array("--","Introduktion");
$faq[] = array("Hvad er BBkoder?", "BBKoder er en speciel udgave af HTML. Om du kan benytte BBkode i dine indl�g, er et valg administratoren afg�r. Ud over at det kan angives med virkning for hele forumet, kan det ogs� angives ud for hver indl�g, dette kan s�ttes n�r indl�gget skrives. BBkoden i sig selv en bygget op lige som HTML, der findes en start kode og en slut kode disse er omgivet af hak parenteser [ og ] i stedet for &lt; og &gt; De give en stor kontrol over hvad og hvordan indholdet pr�senteres. Afh�ngig af den template der bruges vil du opdage at det er meget nemt og intuitivt at bruge BBkoder, dette sker gennem den <i>v�lg og klik</i> bruger flade som findes og besked feltet n�r du skriver et nyt indl�g. Selv om der er lavet med denne neme brugerflade kan du stadig f� brug for denne lille vejledning.");

$faq[] = array("--","Tekst Formatering");
$faq[] = array("Hvordan man laver skriften fed, kursiv og/eller understreget", "BBKode best�r af start og slut koder der g�r det muligt hurtigt at �ndre udseende p� skrift typen. Dette kan g�res p� f�lgende m�dehis: <ul><li>For at lave en tekst streng fed, placere da disse start/stop koder hhv. foran og bagved teksten <b>[b][/b]</b>, f.eks. <br /><br /><b>[b]</b>Hej<b>[/b]</b><br /><br /> vil blive til <b>Hej</b></li><li> P� samme m�de kan der laves understregning med disse koder <b>[u][/u]</b>, f.eks.:<br /><br /><b>[u]</b>God Morgen<b>[/u]</b><br /><br />vil blive vist som <u>God Morgen</u></li><li>for at lave kursiv skrives <b>[i][/i]</b>, f.eks.<br /><br />Dette er <b>[i]</b>Fantastisk!<b>[/i]</b><br /><br />vil vises som Dette er <i>Fantastisk!</i></li></ul>");
$faq[] = array("Hvordan �ndre man st�rrelsen og farven", "For at �ndre farven p� teksten og st�rrelsen benyttes f�lgende start / stop koder. Var opm�rksom p� at udseendet vil v�re afh�ngig af slutbrugerens browser og ops�tning: <ul><li>Skift af skriftens farve sker ved at omkranse dem af <b>[color=][/color]</b>. Du kan enten angive en farve dette skal dog ske p� engelsk (f.eks. red, blue, yellow, osv.) eller du kan angive den hexadecimale 3 dobbelte alternativ, f.eks. #FFFFFF=hvid, #000000=sort, #00FF00=gr�n. et eksempel p� brugen kunne v�re at lave en r�d tekst:<br /><br /><b>[color=red]</b>Hallo!<b>[/color]</b><br /><br />eller<br /><br /><b>[color=#FF0000]</b>Hallo!<b>[/color]</b><br /><br />Dette vil give <span style=\"color:red\">Hallo!</span></li><li> i begge tilf�lde. Tekst st�rrelsen kan �ndres p� samme m�de ved at bruge <b>[size=][/size]</b>. disee start/stop koder er afh�ngige af den template som du bruger men det anbefalede format er et tal der angive hvor mange pixel skriften skal v�re, startende fra 1 (s� lille at den ikke kan ses) helt op til 29 (meget stor). For eksempel:<br /><br /><b>[size=9]</b>LILLE<b>[/size]</b><br /><br />vil i almindelighed f�re til <span style=\"font-size:9px\">LILLE</span><br /><br />mens:<br /><br /><b>[size=24]</b>KOLOENORM!<b>[/size]</b><br /><br />vil se ud som <span style=\"font-size:24px\">KOLOENORM!</span></li></ul>");
$faq[] = array("Kan jeg kombinere de forskellige koder?", "Ja, og selvf�lgelig kan du ,for at fange l�serens opm�rksomhed skrive som dette:<br /><br /><b>[size=18][color=red][b]</b>SE P� MIG!<b>[/b][/color][/size]</b><br /><br />dette vil give et output som vil se ud som dette <span style=\"color:red;font-size:18px\"><b>SE P� MIG!</b></span><br /><br />Vi anbefaler dog ikke at lave for meget af den slags tekst! Husk det er op til dig, forfatteren af indl�gget at alle koder ogs� afsluttes korrekt med deres tilh�rende stop kode(r). F.eks. er f�lgende ikke en korrekt skrive m�de:<br /><br /><b>[b][u]</b>Dette er forkert<b>[/b][/u]</b>");

$faq[] = array("--","Citat og fast bredde tekst");
$faq[] = array("Citere en tekst n�r der svares", "Dette kan g�res p� 2 m�der, du kan citere tekst med eller uden reference.<ul><li>N�r du benytter citat funktionen til at besvare et indl�g, b�r du bem�rke at citatet tilf�res omkranset af start og slut koderne: <b>[quote=\"\"][/quote]</b>. Denne metode giver dig mulighed for at citere med en reference til en person eller hvad du nu m�tte �nske at der skal st�! For eksempel hvis der �nskes at citere en tekst streng som bo har skrevet, skrives:<br /><br /><b>[quote=\"BO\"]</b>Teksten som BO har skrevet placeres her<b>[/quote]</b><br /><br /> der resultat som andre brugere vil se, vil v�re at der st�r BO skrev: foran teksten. Husk at du altid <b>skal</b> skrive anf�relses tegn \"\" omkring navnet du citere, du er ikke valgfrie.</li><li>Den anden metode giver dig fri mulighed for at citere uden at angive kilde. For at g�re dette omkranses teksten af <b>[quote][/quote]</b> start og stop koderne. n�r s� teksten vises vil der simpelt hen st�, Citat: foran selve teksten.</li></ul>");
$faq[] = array("Skrive kode eller fast brede tekst", "Hvis du �nsker at kunne skrive en tekst hvor i der skal indg� en tekst som til forveksling ligne noget kode, eller hvis teksten skal have fast bredde, f.eks. Courier skrift typen. Skal du omkranse teksten med start / stop koderne <b>[code][/code]</b>, f.eks.<br /><br /><b>[code]</b>echo \"Dette er noget kode\";<b>[/code]</b><br /><br />Al formatering det benyttes inden i <b>[code][/code]</b> blive bevaret og vist n�r du senere ser indl�get.");

$faq[] = array("--","Lave lister");
$faq[] = array("Lave en unummereret liste", "BBkode underst�tter 2 former for lister, unummererede og nummererede. De er i bund og grund det samme som de tilsvarende HTML koder. En unummereret liste viser listens indhold lige efter hinanden, hver liste element indledes med en indrykning med en prik foran. For at lave s�dan liste benyttes <b>[list][/list]</b> og hver liste punkt adskilles med <b>[*]</b>. f.eks. for at liste dine favorit farver:<br /><br /><b>[list]</b><br /><b>[*]</b>R�d<br /><b>[*]</b>Bl�<br /><b>[*]</b>Gul<br /><b>[/list]</b><br /><br />Dette vil lave f�lgende liste:<ul><li>R�d</li><li>Bl�</li><li>Gul</li></ul>");
$faq[] = array("Lave en nummereret liste", "Den anden type liste er en nummereret liste, som giver dig mulighed for at specificere hvad der skal v�re foran listens punkter. For at lave en nummereret liste skal du bruge <b>[list=1][/list]</b> eller alternativt <b>[list=a][/list]</b> for at lave en liste der indledes med alfabetet. Lige som med unummererede lister hvert punkt p� listen skal adskilles med <b>[*]</b>. F.eks:<br /><br /><b>[list=1]</b><br /><b>[*]</b>G� til butikken<br /><b>[*]</b>K�b en ny computer<br /><b>[*]</b>Tramp p� den n�r den g�r i stykker<br /><b>[/list]</b><br /><br />vil se ud som dette:<ol type=\"1\"><li>G� til butikken</li><li>K�b en ny computer</li><li>Tramp p� den n�r den g�r i stykker</li></ol>Lige s� kan du med en alfabet liste bruge:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Det f�rste svar<br /><b>[*]</b>Det 2 svar<br /><b>[*]</b>Det 3 svar<br /><b>[/list]</b><br /><br />som vises som<ol type=\"a\"><li>Det f�rste svar</li><li>Det 2 svar</li><li>Det 3 svar</li></ol>");

$faq[] = array("--", "Fremstilling af Links");
$faq[] = array("Lave et link til en anden hjemmeside", "phpBB BBKode giver mulighed for flere m�der at lave links p� (URIs, Uniform Resource Indicators) eller mere kendt som URLs.<ul><li>Den f�rste af disse metoder benytter<b>[url=][/url]</b> start / stop koderne, efter URL= kan udfyldes med stien til den side som linket skal pege p�. For eksempel for at lave et link til phpBB.com skal du skrive:<br /><br /><b>[url=http://www.phpbb.com/]</b>Bes�g phpBB!<b>[/url]</b><br /><br />Det vil se ud som dette link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Bes�g phpBB!</a> Hvis du pr�ver dette vil du opdage at linket �bner i et nyt vindue, for at brugerne kan forts�tte med at kigge i forumet hvis de �nsker.</li><li>Hvis du �nsker et URLen skal vises som navnet p� linket kan dette g�res ved at lave det p� denne m�de:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Det vil give et link der ser s�ledes ud, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Tilslut har phpBB ogs� noget kaldet <i>Magiske Links</i>, dette vil g�re alle korrekt indtastede Internet adresser til et link, uden at du angiver nogle start eller stop koder, ej heller det indledende http://. F.eks ved at skrive www.phpbb.com i dit indl�g vil automatisk generere f�lgende link <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> n�r indl�gget senere vises.</li><li>Det samme g�lder for email adresser, du kan enten angive en adresse bestemt ved at skrive:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />hvilket vil lave denne link <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> eler du kan blot skrive no.one@domain.adr i indl�gget. det vil automatisk blive oversat n�r det vises.</li></ul>Som med alle andre BBKoder kan du angive URLs omkring alle andre koder, s�som <b>[img][/img]</b> (se n�ste punkt), <b>[b][/b]</b>, osv. Lige som me tekst formaterings koderne er det op til dig at sikre at de korrekte start / stop koder er til stede i den rigtige r�kkef�lge for eksempel:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />er <u>ikke</u> rigtigt hvilket kan f�re til at dit indl�g bliver slette, s� v�r opm�rksom.");

$faq[] = array("--", "Inds�tte billede i indl�g");
$faq[] = array("Tilf�je et billede til et indl�g", "phpBB BBKode indeholder start/stop koder til at vise billeder i dine indl�g. Der er 2 meget vigtige ting at huske p� n�r disse koder bruges; mange brugere �nsker ikke for mange billeder i indl�ggene og for det andet det billede som du �nsker at bruge skal allerede v�re tilg�ngeligt p� Internettet (Det kan ikke kun v�re p� din egen computer, med mindre du k�re en webserver!). Det findes p.t. ingen m�de hvorp� lokale billeder kan h�ndteres i phpBB (Alle disse punkter forventes og blive l�st i den n�ste store release of phpBB). For at vise et bilede skal du omkranse dets URL med <b>[img][/img]</b> start og stop koderne. For eksempel:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Som beskrevet ovenfor kan du omkranse et billede med <b>[url][/url]</b> koder hvis du �nsker, f.eks.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />som s� vil blive vist s�ledes:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Andre ting");
$faq[] = array("Kan jeg tilf�je mine egne start og stop koder?", "Nej, Ikke direkte i phpBB 2.0. Vi fors�ger af finde en metode til at tilbyde egne BBkoder i den n�ste store version");

//
// This ends the BBCode guide entries
//

?>
