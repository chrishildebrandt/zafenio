<?php
/***************************************************************************
* lang_faq.php [dutch]
* -------------------
* begin : Wednesday Oct 3, 2001
* copyright : (C) 2001 The phpBB Group
* email : support@phpbb.com
*
* $Id: lang_faq.php,v 1.1 2003/02/20 15:26:50 bob Exp $
*
*
***************************************************************************/

/***************************************************************************
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
***************************************************************************/

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

$faq[] = array("--","Login en Registratie Bewerkingen");
$faq[] = array("Waarom kan ik niet inloggen?", "Het zou kunnen zijn dat je gebanned bent, als dat het geval is wordt dit gemeld tijdens het inloggen. In dat geval kan je het beste contact opnemen met de beheerder of webmaster van de site. Indien je geregistreerd en niet gebanned bent kun je het beste je inlog gegevens nogmaals controleren. Zorg er ook voor dat CAPSlock uit staat op je toetsenbord. Kijk ook in je email of je geen activatie emails hebt ontvangen van de forum software.");
$faq[] = array("Waarom moet ik eigenlijk registreren?", "Registratie geeft je toegang tot bijkomende functies die voor gasten niet beschikbaar zijn zoals bepaalde avatar afbeeldingen, priv� berichten, gebruikersgroepen, enz. Het registreren bestaat over het algemeen uit het invullen van je naam, email en wachtwoord, de overige gegevens zijn optioneel. Het registreren neemt dus niet veel tijd in beslag.");
$faq[] = array("Waarom wordt ik automatisch uitgelogd?", "Als je <i>Log mij automatisch in</i> niet aanvinkt wordt je na een bepaalde tijd uit veiligheids overwegingen weer uitgelogd. Indien je dat vakje wel aanvinkt blij je ingelogd, dit is echter niet aan te raden op een publieke PC op b.v. een universiteit of in een bibliotheek of Internetcaf�.");
$faq[] = array("Hoe kan ik vermijden dat mijn gebruikersnaam verschijnt in de online gebruikers lijst?", "In je profiel staat een optie <i>Laat niet zien dat je online bent</i>, indien je kiest voor <i>ja</i> ben je alleen zichbaar voor administrators of jezelf. Je wordt geteld als een verborgen gebruiker.");
$faq[] = array("Ik ben mijn wachtwoord kwijt!", "Geen paniek! De wachtwoorden kunnen niet opgehaald worden, wel kan er een nieuw wachtwoord aangemaakt worden. Om dit te doen ga je naar de Inloggen pagina en daar klik je op <u>Wachtwoord vergeten</u>, volg hierna de instructies, er wordt een wachtwoord opgestuurd naar het email adres dat in je profiel staat.");
$faq[] = array("Ik ben geregistreerd maar kan niet inloggen!", "Kijk eerst na of je je juiste gebruikersnaam en wachtwoord hebt ingegeven. Indien deze goed zijn kunnen er een of twee zaken gebeurd zijn . Indien COPPA ondersteuning is ingeschakeld en je klikte op de <u>Ik ben jonger dan 13 jaar</u> link tijdens registratie dan moet je de instrukties volgen. Indien dit niet het geval is dan moet je account geactiveerd worden. Sommige boards vereisen dat alle nieuwe registraties worden geactiveerd, of door uzelf of door administrator vooraleer je kan inloggen. Bij registratie wordt dit ook vermeld. Indien je een email hebt ontvangen volg dan de instrukties, indien je geen email hebt ontvangen ben je dan zeker dat je een geldig emailadres hebt? Een reden waarom activatie nodig is, is de mogelijkheid om misbruik van naamloze inzendingen te vermijden. Indien je zeker bent van het emailadres contacteer dan de board administrator.");
$faq[] = array("Ik was in het verleden geregistreerd maar kan niet meer inloggen?!", "De meest aannemelijke redenen hiervoor zijn; je hebt een onjuiste gebruikersnaam of wachtwoord ingegeven (kijk de email die je toen bij registratie hebt gekregen) of de administrator heeft uw account gewist voor een bepaalde redenen. Je hebt mischien nooit iets gepost? Het is gebruikelijk voor boards om periodiek gebruikers te wissen die niets hebben gepost om de ruimte van de database te beperken. Probeer opnieuw te registreren en doe mee aan de discusies.");

$faq[] = array("Hoe verander ik mijn instellingen?", "Al uw instellingen (indien je geregistreerd bent) zijn opgeslagen in de database. Om deze aan te passen, klik op de <u>Profiel</u> link (meestal bovenaan de bladzijde maar anders is ook mogelijk). Dit laat je toe om al je instellingen te wijzigen");
$faq[] = array("De tijden zijn niet juist!", "De tijden zijn meestal juist, alhoewel wat je ziet zijn tijden getoond in een andere tijdzone dan de uwe. Indien zo moet je in uw profiel instellingen deze aan uw tijdzone aanpassen , bvb. Londen, Parijs, New York, Sydney, enz. Let wel dat de tijdzone aanpassen, zoals de meeste instellingen enkel kan worden gedaan de geregistreerde gebruikers. Dus als je niet geregistreerd bent is dit een goed tijdstip om het wel te doen, als je ons deze woordspeling vergeeft!");
$faq[] = array("Ik veranderde de tijdzone en de tijd is nog steeds fout!", "Indien je zeker bent dat de tijdzone correct is ingesteld en de tijd is nog steeds verschillend het meest mogelijke antwoord is daglicht besparings tijd (of zomertijd zoals bekend in UK en andere plaatsen). Dit board is niet ontwikkeld om een onderscheid te maken tussen standaard en zomertijd zodat tijdens de zomermaanden de tijd een uur verschild met de werkelijke tijd.");
$faq[] = array("Mijn taal is niet in de lijst!", "De meest mogelijke redenen is dat de administrator deze taal niet heeft geinstalleerd of er heeft nog niemand vertaald board in uw taal. Probeer aan de board administrator te vragen uw taal te installeren, indien deze niet bestaat ben je zo vrij dit te maken. Meer informatie kan gevonden worden op de phpBB Groep website (zie link op bodem bladzijde)");
$faq[] = array("Hoe kan ik een afbeelding tonen onder mijn gebruikersnaam?", "Er kunnen twee afbeeldingen staan onder een gebruikersnaam bij het bekijken van posts. De eerste is een afbeelding in overeenstemming met uw rang, meestal hebben ze de vorm van sterren of blokjes die aangeven hoeveel posts je gemaakt hebt made of uw status op het forum. Daaronder staat een grotere afbeelding meer gekend als avatar, deze is meestal persoonlijk voor elke gebruiker. Het is aan de board administrator om avatars toe te laten en de keuze te geven aan beschikbare avatars. Indien je geen avatars kan gebruiken is dit een keuze van de board admin, vraag hem naar de reden (we zijn zeker dat ze goed zijn!)");
$faq[] = array("Hoe kan ik mijn rang aanpassen?", "Normaal gezien kan dit niet (rangs verschijnen onder uw gebruikersnaam in topics en uw profiel afhankelijk van de style). Meeste gebruiken rangs om aan te tonen hoeveel posts je hebt gemaakt en om sommige gebruikers te tonen, bvb. moderators en administrators kunnen een speciale rang hebben. Misbruik de board niet door onnodige posts te maken om zo sneller van rang te verhogen, hierdoor is het mogelijk dat de moderator of administrator het aantal posts verlaagd.");
$faq[] = array("Waneer ik klik op de email van een gebruiker vraagt men om in te loggen?", "Sorry maar alleen geregistreerde gebruikers kunnen email verzenden via het ingebouwde emailformulier(als de admin deze funktie heeft ingeschakeld). De is om misbruik te voorkomen van het email systeem door anonieme gebruikers.");

$faq[] = array("--","Posting Onderwerpen");
$faq[] = array("Hoe post ik een topic in een forum?", "Gemakkelijk, klik op de overeenstemmende knop in het forum of topic scherm. Mischien moet je registreren om een bericht te posten, de beschikbare mogelijkheden staan in een lijst op de bodem van een forum en topic scherm (de <i>Je mag nieuwe onderwerpen plaatsen, Je mag reacties plaatsen, enz.<i> lijst)");
$faq[] = array("Hoe kan ik een post bewerken of wissen?", "Indien je geen board admin of forum moderator bent kan je enkel je eigen posts bewerken of wissen. Je kan een post bewerken (soms maar een beperkte tijd na het aanmaken) door te klikken op de <i>edit</i> knop van de te wijzigen post. Indien iemand reeds geantwoord heeft op uw post vind je een kleine tekst op de post waneer je teruggaat naar de topic, deze geeft het aantal keer terug dat je je post bewerkt hebt. Dit komt enkel te voorschijn indien niemand heeft geantwoord, het komt ook niet tevoorschijn als moderators of administrators de post bewerkt hebben (zij zouden een bericht moeten nalaten wat ze hebben aangepast en waarom). Noteer dat normale gebruikers geen post kunnen wissen eens erop geantwoord is.");
$faq[] = array("Hoe kan ik een handtekening toevoegen aan mijn post?", "Om een handtekening toe te voegen aan een post moet je eerst een aanmaken, dit kan je doen via uw profiel. Eens gemaakt kan je de <i>Onderschrift gebruiken </i> box aankruisen op het posting formulier om uw handtekening(onderschrift) toe te voegen. Je kan ook via uw profiel deze funktie aankruisen zodat alle posts automatisch met onderschrift worden geplaatst(nadien kan je steeds bepalen of er al dan niet een onderschrift bij moet of niet door op het formulier deze funktie uit te schakelen)");
$faq[] = array("Hoe kan ik een Opiniepeiling(poll) maken?", "Een Opiniepeiling maken is gemakkelijk, wanner je een nieuwe topic post (of de eerste post van een topic bewerkt, als je toelating hebt) je zou moeten zien <i>Voeg een poll toe</i> onderaan het post formulier (indien je dit niet ziet heb je waarschijnlijk geen toelating om Peilingen(polls)te maken). Je moet eerst een titel ingeven (of vraag) en minstens twee opties (typ eerste optie en klik op de <i>Voeg keuze toe</i> knop. Je kan ook een tijdslimiet instellen voor de peiling, 0 is een eeuwigdurende peiling. Er is een limiet op het aantal opties, deze zijn ingesteld door de board administrator");
$faq[] = array("Hoe kan ik een Opiniepeiling(poll) bewerken of wissen?", "Zoals met posts, Opiniepeilingen kunnen enkel bewerkt worden door de originele poster, een moderator of board admin. Om een opiniepeiling te bewerken klik op de eerste post in de topic (Hiermee is steeds de opiniepeiling mee gelinkt). Indien niemand heeft gestemd dan kunnen gebruikers de peiling wissen of bewerken, indien men reeds heeft gestemd kunnen enkel moderators of administrators deze bewerken of wissen. Dit is om te behoeden dat tijdens een peiling er beinvloedbare aanpassingen kunnen gebeuren");
$faq[] = array("Waarom krijg ik geen toegang tot een forum?", "Sommige forums zijn voorbehouden aan bepaalde gebruikers of groepen. Om te bekijken, lezen, posten, enz. heb je speciale toelating nodig, enkel de forum moderator en board admin kunnen toegang verschaffen, raadpleeg hen.");
$faq[] = array("Waarom kan ik niet stemmen in een Opiniepeiling(poll)?", "Alleen geregistreerde gebruikers kunnen stemmen in een peiling(om bedrog te vermijden). Indien je geregistreerd bent en nog steeds niet kan stemmen heb je waarschijnlijk niet de nodige toegangsrechten.");

$faq[] = array("--","Formatting en Topic Types");
$faq[] = array("Wat is BBCode?", "BBCode is een speciale uitvoering van HTML, of je al dan niet BBCode kan gebruiken is bepaald door de administrator (je kan dit ook uitschakelen op het postformulier). BBCode opzich is gelijk in style als HTML, tags zijn ingesloten in rechte haken [ en ] inplaats van &lt; en &gt; en het geeft een betere controle over wat en hoe iets wordt getoond. Voor meer info over BBCode bekijk de BBcode faq op het posting formulier.");
$faq[] = array("Kan ik HTML gebruiken?", "Dat hangt er vanaf of de administrator dit toelaat, zij hebben er volledige controle over. Indien je toelating hebt zullen maar een paar tags werken. Dit is een <i>veiligheids</i> procedure om het board te beschermen zodat sommige de layout kunnen verwoesten of andere problemen met zich meebrengen. Als HTML is ingeschakeld kan je het uitschakelen op het posting formulier.");
$faq[] = array("Wat zijn Smileys?", "Smileys, of Emoticons zijn kleine grafische afbeeldingen die gebruikt kunnen worden om bepaalde expresies of gevoelens te tonen volgens een code, bvb. :) betekend gelukkig, :( betekend triest. De volledige lijst van emoticons kan gezien worden via het posting formulier. Probeer niet teveel smileys te plaatsen in uw posts, ze kunnen vlug een post onleesbaar maken en een moderator kan beslissen deze te verwijderen en de post in zijn geheel te verwijderen");
$faq[] = array("Kan ik Afbeeldingen posten?", "Afbeeldingen kunnen inderdaad worden getoond in uw post. Alhoewel, er is geen funktie tot uploading van afbeeldingen naar deze board. Je kan een link plaatsen naar een afbeelding op een publiek toegankelijke web server, bvb. http://www.een-ongekende-plaats.net/mijn-foto.gif. Je kan niet linken naar afbeeldingen opgeslagen op uw eigen PC (of het is een publiek toegankelijke server) noch afbeeldingen opgeslagen op bvb, e.g. hotmail of yahoo mailboxes, sites met wachtwoord beveiliging, enz. Om de afbeelding te tonen gebruik je liefst de BBCode [img] tag of soortgelijk in HTML (indien toegelaten).");
$faq[] = array("Wat zijn mededelingen?", "Mededelingen bevatten meestal belangrijke informatie en zou je zo snel mogelijk moeten lezen. Mededelingen verschijnen bovenaan van elk blad in het forum waar ze zijn gepost. Of je al dan niet een mededeling kan posten hangt af van de boardinstellingen, deze zijn ingesteld door de administrator.");
$faq[] = array("Wat zijn Sticky topics?", "Sticky topics verschijnen onder de mededelingen in het forum en enkel op de eerste bladzijde. Deze zijn meestal van belang dus deze zou je moeten lezen bij voorkeur. Zoals met mededelingen is het de board administrator die bepaald wie sticky topics kan posten in elk forum.");
$faq[] = array("Wat zijn Locked topics?", "Locked topics zijn zo vergrendeld door de forum moderator of board administrator. Je kan niet antwoorden op locked topics en elke peiling die deze topic bevat is automatisch beeindigd. Topics kunnen gelocked voor verschillende redenen.");

$faq[] = array("--","Gebruikers Peil en Groepen");
$faq[] = array("Wat zijn Administrators?", "Administrators zijn mensen toegewezen aan het hoogste peil over de controle van dit board. Deze mensen hebben controle op alle facetten van dit board zoals permissies, banning gebruikers, aanmaken gebruikersgroepen of moderators, enz. Zij hebben ook moderator toegankelijkheden in al de forums.");
$faq[] = array("Wat zijn Moderators?", "Moderators zijn enkelingen (of groepen van enkelingen) wiens job is hun forum van dag tot dag op te volgen naar goed gebruik. Zij hebben het vermogen om posts te bewerken te wissen of locken, unlock, verplaatsen, wissen en splitsen van topics in het forum waar zij moderator van zijn. Meestal zijn moderators die behoeden dat er <i>off-topic(afwijken van de topic)<i> gegaan wordt of lasterpraat wordt gepost.");
$faq[] = array("Wat zijn Gebruikersgroepen?", "Gebruikersgroeps zijn een manier waarop board administrators gebruikers in een groep kan plaatsen. Elke gebruiker kan toebehoren aan meerdere groepen (verschillend met meeste andere boards) en elke groep kunnen andere toegangsrechten krijgen. Dit maakt het gemakkelijk voor de administrators om verschillende gebruikers als moderators van een forum te maken, of toegang te verlenen aan een privaat forum, enz.");
$faq[] = array("Hoe kan ik toetreden tot een Gebruikersgroep?", "Om toe te treden tot een gebruikersgroep klik de Gebruikersgroepen link bovenaan de bladzijde (verschillend volgens template ontwerp), je kan dan alle gebruikersgroepen zien. Niet alle groepen hebben <i>open toegang</i>, sommige zijn gesloten en andere hebben mischien verborgen lidmaatschap. Als de board open is kan je een aanvraag tot toetreding doen door te klikken op de overeenstemmende knop. De gebruikersgroep moderator moet uw aanvraag goedkeuren, ze kunnen je vragen waarom je wil toetreden tot een groep. Leg je neer bij het besluit van een groep moderator indien deze je aanvraag afkeurd, dit doen ze met redenen.");
$faq[] = array("Hoe kan ik een Gebruikersgroep Moderator worden?", "Gebruikersgroepen zijn initieel gecre�erd door de board admin, zij kiezen ook een board moderator. Indien je interesse hebt in het maken van een gebruikersgroep moet je eerst contact opnemen met de admin, stuur hem een privaat bericht.");

$faq[] = array("--","Private Berichten");
$faq[] = array("Ik kan geen private berichten zenden!", "Hier zijn drie redenen voor; je bent niet geregistreerd en/of niet ingelogd, de board administrator heeft private berichten uitgeschakeld voor het gehele board of de board administrator heeft je verhinderd voor het verzenden van berichten. Is het dit laatste dan zou je de administrator moeten vragen waarom.");
$faq[] = array("Ik krijg steeds ongewenste private berichten!", "In de toekomst komt er een lijst met ongewenste mails in het private berichten systeem. Als je momenteel steeds ongewenst private berichten ontvangti nformeer dan de board admin, zij hebben de mogelijkheid om een gebruiker te verhinderen om private berichten te versturen.");
$faq[] = array("Ik heb spam of beledigende email gekregen van iemand van dit board!", "We vinden het spijtig dit te horen. Het email formulier van dit board heeft een beveiliging om zulke gebruikers op te sporen. Stuur een email naar de board administrator met een volledige copy van de email die je ontvangen hebt, het is heel belangrijk dat deze ook de hoofding bevat (deze geven details van de gebruiker die de email heeft gezonden). Dan kunnen ze aktie ondernemen.");

$faq[] = array("--","phpBB 2 Kwestie");
$faq[] = array("Waarom is X onderdeel niet verkrijgbaar?", "Deze software is geschreven door en met vergunning van de phpBB Groep. Indien je van mening bent dat een bepaalde module moet bijgevoegd worden bezoek dan de phpbb.com website en kijk wat de phpBB Groep te zeggen heeft. Stuur aub geen aanvragen naar de board op phpbb.com, de Groep gebruikt sourceforge om nieuwe ideen te ontwikkelen. Lees in de forums en kijk of er mischien reeds een module in uitwerking is en vol dan de uitgelegde procedure aldaar.");
$faq[] = array("Wie moet ik raadplegen ivm misbruik en/of legale zaken toepasselijk op dit board?", "Je kan de administrator van dit board raadplegen. Indien je niet weet wie dat is kan je eerst de forum moderators vragen wie je moet raadplegen. Krijg je nog steeds geen antwoord contacteer dan de eigenaar van de domeinnaam (doe een whois lookup) of, als dit een gratis service is (bvb. yahoo, free.fr, f2s.com, enz.), de management of misbruik department van deze service. Noteer dat de phpBB Groep absoluut geen controle heeft en niet verantwoordelijk is voor wie, waar en waarom dit board is gebruikt. Het is onnodig de phpBB Groep te raadplegen ivm met elke (ophouden, verantwoordelijkheid, enz.) zaak niet rechtstreeks verbonden aan de phpbb.com website of de software van phpBB zelf. Indien je een email stuurd naar de phpBB Groep over een derde partij die deze software gebruikt kan je kort of helemaal geen antwoord verwachten.");

?>
