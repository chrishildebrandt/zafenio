<?php

/***************************************************************************

 *                          lang_faq.php [english]

 *                            -------------------

 *   begin                : Wednesday Oct 3, 2001

 *   copyright            : (C) 2001 The phpBB Group

 *   email                : support@phpbb.com

 *

 *   $Id: lang_faq.php,v 1.1 2003/04/28 20:11:02 bob Exp $

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
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Logg Inn og Registrerings Problemer");
$faq[] = array("Hvorfor kan jeg ikke logge inn?", "Har du registrert deg? Du M� registrere deg for � kunne logge inn. Har du blitt svartelistet fra forumet? (En beskjed vil bli vist dersom du er det.) I s� fall b�r du ta kontakt med webmasteren eller administratoren for � finne ut hvorfor. Hvis du er registrert, ikke er svartelistet og fremdeles ikke kan logge inn, sjekk og dobbelsjekk brukernavn og passord. Vanligvis er dette problemet. Hvis dette ikke er problemet kontakt administratoren da forumet kan v�re feilkonfigurert.");
$faq[] = array("Hvorfor trenger jeg � registrere meg?", "Det er mulig at du ikke trenger det, det er opp til administratoren av forumet om du m� registrere deg eller ikke for � skrive innlegg. Dersom du registrerer deg vil du f� tilgang til finesser som ikke er tilgjenglig for en gjestebruker, slik som � velge et avatar bilde, private meldinger til andre brukere, brukergruppe abonnement, osv. Registreringen tar bare et par minutter, anbefales.");
$faq[] = array("Hvorfor blir jeg logget ut automatisk?", "Hvis du ikke haker av i <i>Logg meg p� automatisk hver gang</i> boksen n�r du logger inn i forumet, vil du kun bli logget inn for en forh�ndsbestemt tid. Dette for og forhindre misbruk av kontoen av andre. For og forbli innlogget m� du hake av i boksen n�r du logger inn. Dette er ikke anbefalt dersom du bruker en datamaskin som er delt med andre, f.eks. et bibliotek, Internett kaf�, skole nettverk osv.");
$faq[] = array("Hvordan hindrer jeg mitt brukernavn fra � bli vist i Hvem er online listen?", "I din profil vil du finne valget <i>Skjul at du er online</i>. Dersom du haker av i denne boksen, vil du kun sees av administratoren og deg selv. Du vil bli registrert som en skjult bruker.");
$faq[] = array("Jeg har glemt mitt passord!", "Ingen panikk! Ditt passord kan ikke hentes ut igjen, men det kan bli erstattet. For � gj�re dette g� til logg inn siden og trykk p� <u>Jeg har glemt passordet</u>, f�lg instruksjonene og du f�r et nytt passord innen kort tid.");
$faq[] = array("Jeg har registrert meg, men kan ikke logge inn!", "Sjekk f�rst at du har skrevet inn brukernavn og passord riktig. Dersom de er riktige kan en av to ting ha skjedd. Hvis COPPA support er aktivisert og du trykte <u>Jeg er under 13 �r</u> linken mens du registrerte deg, m� du f�lge instruksjonene du mottok. Dersom dette ikke er problemet er det mulig at kontoen din trenger aktivisering. Noen forumer krever at alle nye registreringer skal aktiviseres, enten av deg eller av administratoren, f�r du kan logge inn. Du ville f�tt beskjed ved registrering om aktivisering var n�dvendig. Dersom du mottok en e-post, f�lg instruksjonene. Hvis du ikke mottok en e-post, kan du ha skrevet inn en ugyldig e-postadresse. Hovedgrunnen til at aktivisering er brukt, er og hindre at <i>useri�se</i> brukere utnytter forumet anonymt. Hvis du er sikker p� at e-postadressen du oppga er riktig, ta kontakt med administratoren.");
$faq[] = array("Jeg har registrert meg tidligere, men kan ikke logge inn mer?!", "De mest sannsynlige grunnene er; Du har skrevet inn feil brukernavn eller passord (sjekk e-posten du mottok da du registrerte deg) eller at administratoren har slettet din konto. Dersom det siste er tilfelle har du kanskje ikke skrevet et innlegg? Det er vanlig at administratorene sletter brukere som ikke skriver innlegg for � holde st�rrelsen p� databasen nede. Pr�v � registrer deg p� nytt og bli med i noen diskusjoner.");


$faq[] = array("--","Bruker Profil og Innstillinger");
$faq[] = array("Hvordan endrer jeg mine innstillinger?", "Alle dine innstillinger (hvis du er registrert) er lagret i databasen. For � forandre den trykk p� <u>Profil</u> linken. (Vanligvis vist �verst p� siden, men ikke alltid.) Dette vil tillate deg � forandre p� alle dine innstillinger.");
$faq[] = array("Klokken er ikke riktig!", "Klokken er antakeligvis riktig, men tiden du ser kan v�re i en annen tidssone en den du oppholder deg i. Hvis dette er tilfelle kan du endre tidssonen i din profil til ditt omr�de, f.eks. London, Paris, New York, Sydney, osv. Kun registrerte brukere kan forandre tidssonen. Dersom du ikke er registrert og �nsker denne funksjonen, er dette et fint tidspunkt � registrere deg.");
$faq[] = array("Jeg har forandret tidssonen og tiden er fortsatt feil!", "Hvis du er sikker p� at du har satt tidssonen riktig og klokken fortsatt er feil, er den mest sannsynlige grunnen sommertid. Forumet er ikke designet til � h�ndtere byttet mellom vintertid og sommertid, s� om sommeren kan tiden v�re en time feil.");
$faq[] = array("Mitt spr�k er ikke i listen!", "Den mest sannsynlige grunnen er enten at administratoren ikke har installert spr�ket eller at ingen har oversatt forumet til ditt spr�k. Pr�v og sp�r administratoren om han/hun kan installere spr�ket, og om det ikke finnes en oversettelse kan du gjerne lage en. Mer informasjon finner du p� phpBB Group sin hjemmeside. (Se linken nederst p� siden.)");
$faq[] = array("Hvordan viser jeg et bilde under mitt brukernavn?", "Det kan v�re to bilder under brukernavnet n�r du ser p� innleggene. Det f�rste er et bilde som viser din rangering, vanligvis stjerner, som viser hvor mange innlegg du har gjort eller din status i forumet. Under dette kan det v�re et st�rre bilde som er kalt en avatar. Dette er vanligvis et unikt eller personlig bilde til hver bruker. Det er opp til administratoren og aktivisere avatars, samt bestemme p� hvilken m�te du kan velge en avatar. Dersom du ikke f�r valgt en avatar, er dette bestemt av administratoren. Du kan sp�rre om hvorfor. (De har nok en god grunn!)");
$faq[] = array("Hvordan endrer jeg min rangering?", "Din rangering er vanligvis basert p� antall innlegg, men unntak finnes. (Rangeringer vises under ditt brukernavn i innlegg og i din profil, avhengig av hvilken stil som er valgt.) Rangering brukes ogs� til og identifisere spesielle brukere. F.eks. moderatorer og administratorer kan ha en spesiell rangering. Vennligst ikke utnytt forumet ved � skrive un�dvendig mange innlegg for og bedre din rangeringen, da vil sannsynligvis moderatorene eller administratorene senke innleggsantallet ditt.");
$faq[] = array("N�r jeg trykker p� e-post linken til en bruker, blir jeg bedt om � logge inn?", "Beklager, men kun registrerte brukere kan sende e-post til andre via den innebygde e-post funksjonen. (Kun hvis administratoren har aktivisert denne funksjonen.) Dette for � hindre mistenkelig bruk av e-post systemet av anonyme brukere.");


$faq[] = array("--","Innleggs Problemer");
$faq[] = array("Hvordan skriver jeg et innlegg i forumet?", "Klikk p� den relevante knappen enten i forum- eller temasiden. Det er mulig at du m� registrere deg f�r du kan skrive et innlegg. Dine rettigheter er listet opp nederst p� siden i forum- og temasidene. (F.eks. <i>Du kan starte nye temaer i dette forumet, Du kan svare p� temaer i dette forumet, osv.</i>)");
$faq[] = array("Hvordan endrer eller sletter jeg et innlegg?", "Hvis du ikke er administrator eller moderator kan du kun endre eller slette dine egne innlegg. Du kan endre et innlegg (noen ganger kun for et begrenset tidsrom etter det er skrevet) ved � klikke p� <i>Endre</i> knappen for det innlegget.  Dersom noen allerede har svart p� innlegget, vil det vises en liten tekst nedenfor innlegget hvor det st�r antall ganger innlegget er endret. Teksten vil ikke komme opp hvis ingen har svart p� innlegget, ei heller hvis administratoren eller moderatoren har redigert innlegget. (De skal gi beskjed om hva de har forandret p� og hvorfor.) Legg merke til at vanlige brukere ikke kan slette et innlegg etter at noen har svart p� det.");
$faq[] = array("Hvordan legger jeg til en signatur til innleggene mine?", "For � legge til en signatur m� du f�rst lage en, dette gj�res i din profil. N�r den er laget haker du av i <i>Bruk signatur</i> boksen n�r du skriver innlegget, for at denne skal vises. Du kan ogs� legge til en signatur som standard til alle dine innlegg ved � hake av i <i>Bruk alltid signatur</i> boksen i din profil. (Du kan fortsatt hindre at din signatur vises ved � ta vekk haken i <i>Bruk signatur</i> boksen n�r du skriver innlegget.)");
$faq[] = array("Hvordan lager jeg en avstemning?", "� lage en avstemning er enkelt. N�r du skriver det f�rste innlegget i et tema (eller endrer det f�rste innlegget i et tema, hvis du har rettighetene) burde du se en <i>Legg til en avstemning</i> boks nedenfor innleggs boksen. (Hvis du ikke ser denne har du antakeligvis ikke rettighetene til � lage en avstemning.) Du b�r skrive en tittel og minst to valg. For � legge til et valg til sp�rsm�let er det bare � skrive inn alternativet og klikke p� <i>Legg til alternativ</i> knappen. Du kan ogs� sette en tidsgrense for avstemningen, bruk 0 hvis du ikke �nsker � sette en sluttdato. Det vil v�re en grense for hvor mange alternativer det kan v�re, dette er bestemt av administratoren.");
$faq[] = array("Hvordan endrer eller sletter jeg en avstemning?", "Som med innlegg kan kun brukeren som skrev innlegget, moderatorer eller administratorer endre avstemningen. For � endre en avstemning, klikk p� endre knappen til det f�rste innlegget i temaet. (Dette inneholder alltid avstemningen.) Dersom ingen har avlagt en stemme kan brukeren slette eller endre avstemningen. Kun moderatorer og administratorer kan endre eller slette avstemningen hvis noen har stemt. Dette for � hindre at noen jukser ved � bytte valg halvveis inne i avstemningen.");
$faq[] = array("Hvorfor kan jeg ikke lese et forum?", "Noen forumer er begrenset til noen brukere eller grupper. For � lese, skrive, osv. er det mulig at du trenger en spesiell rettighet, kun moderatorer og administratorer kan gi deg denne rettigheten. Du kan eventuelt ta kontakt med en av dem.");
$faq[] = array("Hvorfor kan jeg ikke stemme i avstemninger?", "Kun registrerte brukere kan stemme. (For � hindre at noen jukser i avstemningen.) Hvis du er registrert og fortsatt ikke kan stemme, har du ikke rettighetene til � stemme.");


$faq[] = array("--","Formatering og Tema Typer");
$faq[] = array("Hva er BBCode?", "BBCode er en variasjon av HTML, om BBCode kan brukes i forumet er bestemt av administratoren. Du kan ogs� deaktivisere BBCode i et innlegg n�r du skriver eller endrer innlegget. BBCode ligner p� HTML i formateringen, men taggene er omringet av firkant parenteser [ og ] i stedet for &lt; og &gt; og gir en bedre kontroll over hvordan noe blir vist. Mer informasjon om BBCode finner du p� guiden i innleggsiden.");
$faq[] = array("Kan jeg bruke HTML?", "Det er opp til administratoren om du kan bruke HTML eller ikke. Hvis det er tillatt � bruke HTML vil du sannsynligvis bare kunne bruke noen tagger. Dette er en <i> sikkerhets </i> funksjon som skal hindre noen fra � utnytte forumet, ved � bruke tagger som kan �delegge utseendet eller skape andre problemer. Hvis HTML er aktivisert kan du deaktivisere det n�r du skriver eller endrer innlegget.");
$faq[] = array("Hva er smil?", "Smil er sm� bilder som kan brukes til � uttrykke f�lelser ved � bruke en kort kode, f.eks. :) betyr glad, :( betyr lei seg. Hele listen av smil kan sees i innleggsiden. Pr�v og begrense bruken av smil, da disse kan gj�re et innlegg uleselig og en moderator kan bestemme seg for � ta dem bort eller slette innlegget helt.");
$faq[] = array("Kan jeg bruke bilder?", "Du kan bruke bilder i dine innlegg. Derimot er det ingen funksjon for �yeblikket som tillater deg � laste opp bilder direkte til forumet. Du m� derfor linke til et bilde som ligger p� en offentlig Internett server, f.eks. http://www.et-ukjent-sted.net/mitt-bilde.gif. Du kan ikke linke til et bilde p� din egen PC (hvis du ikke har en offentlig tilgjenglig server) eller bilder lagret bak passord mekanismer, som f.eks. hotmail eller yahoo e-post kontoer, passordbeskyttet sider, osv. For � vise et bilde kan du bruke enten BBCode [img] tagg eller HTML (hvis tillatt).");
$faq[] = array("Hva er annonseringer?", "Annonseringer er ofte viktig informasjon og b�r leses snarest mulig. Annonseringer vises �verst p� alle sidene i det forumet de er postet. Din mulighet til � skrive en annonsering er avhengig av hvilke rettigheter som er p�krevd. Disse er satt av administratoren.");
$faq[] = array("Hva er prioriterte temaer?", "Prioriterte temaer vises under annonseringene i forumet og kun p� den f�rste siden. De er som regel ganske viktige, s� de b�r leses snarest mulig. Administratoren bestemmer hvilke rettigheter du m� ha for � skrive et prioritert tema i hvert forum.");
$faq[] = array("Hva er stengte temaer?", "Stengte temaer har blitt l�st av moderatoren eller administratoren. Du kan ikke svare p� et stengt tema, og eventuelle avstemninger er automatisk avsluttet. Temaer kan bli avsluttet av mange grunner.");


$faq[] = array("--","Bruker Niv�er og Grupper");
$faq[] = array("Hva er en administrator?", "En administrator er en enkelt bruker som er tildelt den h�yeste grad av kontroll over hele forumet. Denne/disse brukerne kan kontrollere alle funksjoner av forum driften som inkluderer blant annet og sette rettigheter, utestenge brukere, lage brukergrupper eller moderatorer osv. De har ogs� full moderator rettighet i alle forumene.");
$faq[] = array("Hva er en moderator?", "En moderator er en enkelt bruker (eller en gruppe brukere) som skal overv�ke forumet fra dag til dag. Denne/disse brukerne har rettighetene til � endre eller slette innlegg, og l�se/l�se opp, flytte, slette og dele temaer i det forumet de modererer. Vanligvis er moderatorer der for � hindre brukere i og g� <i>utenfor tema</i> eller skrive upassende eller st�tende innlegg.");
$faq[] = array("Hva er en brukergruppe?", "Administratorer kan dele brukere opp i brukergrupper. Hver bruker kan h�re til flere grupper (dette er forskjellig fra de fleste andre forumer) og hver gruppe kan bli gitt individuelle rettigheter. Dette gj�r det lett for administratoren � sette opp flere brukere som moderatorer for et forum, eller � gi dem rettighetene til � lese et privat forum, osv.");
$faq[] = array("Hvordan blir jeg medlem av en brukergruppe?", "For � bli medlem av en brukergruppe, klikk p� Grupper linken. (Vanligvis �verst p� siden avhengig av stilen valgt.) Du kan da se alle brukergruppene. Ikke alle grupper er <i>offentlig tilgjenglig</i>, noen er stengt og noen kan til og med ha skjult medlemskap. Dersom gruppen er �pen, kan du sp�rre om � bli medlem ved � klikke p� den tilh�rende knappen. Gruppe moderatoren m� f�rst godkjenne deg, og du kan f� sp�rsm�l om hvorfor du vil bli medlem av gruppen. Vennligst godta gruppe moderatorens svar hvis de gir deg avslag, et eventuelt avslag vil v�re godt begrunnet.");
$faq[] = array("Hvordan blir jeg en gruppe moderator?", "Brukergrupper er startet av administratoren som velger en gruppe moderator. Hvis du �nsker � starte en brukergruppe m� du ta kontakt med administratoren. Send administratoren en privat melding.");


$faq[] = array("--","Private Meldinger");
$faq[] = array("Jeg kan ikke sende private meldinger!", "Det er tre grunner til dette; du er ikke registrert og/eller ikke logget inn, administratoren har deaktivisert private meldinger for hele forumet eller administratoren har stoppet deg fra � sende meldinger. Dersom det siste er tilfellet burde du sp�rre administratoren om grunnen.");
$faq[] = array("Jeg fortsetter � f� u�nskede private meldinger!", "I framtiden vil vi legge til en funksjon som gj�r at du kan stoppe private meldinger fra en bruker. Dersom du fortsetter � motta u�nskede private meldinger, kan du ta kontakt med administratoren. Administratoren kan (og kommer om n�dvendig til �) ta fra en bruker rettighetene til � sende private meldinger.");
$faq[] = array("Jeg har mottatt spam, upassende eller st�tende e-post fra noen i dette forumet!", "Vi beklager � h�re dette. E-post funksjonen i dette forumet har en sikkerhets funksjon som kan hjelpe til � spore brukere som sender slike meldinger. Send en e-post til administratoren med en full kopi av e-posten du mottok. Det er veldig viktig at du inkluderer toppen da denne inneholder detaljer om hvilken bruker som sendte deg e-posten. Administratoren kan da ta aff�re.");


//
// These entries should remain in all languages and for all modifications
//

$faq[] = array("--","Sp�rsm�l Ang�ende phpBB 2.");
$faq[] = array("Hvem skrev dette forumet?", "Denne programvaren (i sin umodifiserte form) er produsert, lansert og har copyright av <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Den er gjort tilgjenglig under GNU General Public Licence og kan bli fritt distribuert, f�lg linken for mer informasjon.");
$faq[] = array("Hvorfor er ikke X funksjonen tilgjenglig?", "Denne programvaren er skrevet og lisensiert av phpBB Group. �nsker du at en funksjon legges til forumet, send en foresp�rsel til phpBB Group p� deres hjemmeside phpbb.com. Vennligst ikke send funksjonsettersp�rsler til forumet hos phpbb.com, gruppen bruker sourceforge til � h�ndtere nye funksjoner. Vennligst les igjennom forumene for og se hva v�r innstilling er til den �nskede funksjonen og f�lg prosedyren angitt der.");
$faq[] = array("Hvem kontakter jeg ang�ende st�tende og/eller rettslige saker relatert til dette forumet?", "Kontakt administratoren av dette forumet. Dersom du ikke kan finne ut hvem du skal kontakte, kan moderatorene v�re behjelpelige. Hvis du fortsatt ikke f�r kontakt m� du kontakte eieren av domenet. (Gj�r et whois s�k.) Dersom forumet er p� en fri server (f.eks. yahoo, free.fr, f2s.com, osv.), kontakter du de ansvarlige for driften der. Vennligst legg merke til at phpBB Group har absolutt ingen kontroll og kan p� ingen m�te bli holdt ansvarlig over hvordan, hvor eller av hvem dette forumet blir brukt. Det er meningsl�st � kontakte phpBB Group ang�ende rettslige saker som ikke er direkte relatert til phpbb.com sin hjemmeside, eller programvaren til phpBB. Hvis du sender e-post til phpBB Group ang�ende tredjeparts bruk av denne programvaren, kan du vente deg et avvisende svar eller intet svar overhodet.");


//
// This ends the FAQ entries
//

?>