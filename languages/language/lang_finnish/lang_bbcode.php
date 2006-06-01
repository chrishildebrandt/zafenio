<?php
/***************************************************************************
 *                         lang_bbcode.php [finnish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.1 2003/02/19 18:32:45 bob Exp $
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
//	Translation produced by Jorma Aaltonen (bullitt)
//	http://www.pitro.com/
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

$faq[] = array("--","Esittely");
$faq[] = array("Mit� on BBCode?", "BBcode on erityinen muoto HTML:st�. Se, voitko k�ytt�� BBCodea viesteiss� riippuu yll�pidosta. Lis�ksi voit poistaa BBCoden viestikohtaisesti viestin yll�pitoruudulla. BBCode itsess��n muistuttaa HTML:��, tagit suljetaan hakasuluilla [ ja ] eik� &lt; ja &gt; ja se antaa paremmaan mahdollisuuden m��ritell� mit� ja miten asiat n�ytet��n. K�ytett�v�st� mallisivusta riippuen  voit huomata, ett� BBCoden k�ytt� viesteiss� on helpompaa hiirell� toimivan liittym�n kautta viestialueen yl�puolella viestiruudulla. T�st� huolimatta seuraava opas voi olla hy�dyllinen.");

$faq[] = array("--","Tekstin muotoilu");
$faq[] = array("Kuinka tehd��n lihavoitu, kursivoitu ja alleviivattu teksti", "BBCode sis�lt�� tagit, joilla voi nopeasti muuttaa tekstisi perustyylin. T�m� saavutetaan seuraavin keinoin: <ul><li>Lihavoidaksesi tekstin sulje se tagein <b>[b][/b]</b>, esim. <br /><br /><b>[b]</b>Tervehdys<b>[/b]</b><br /><br />n�kyy <b>Tervehdys</b></li><li>Alleviivaukseen k�yt�t <b>[u][/u]</b>, esimerkiksi:<br /><br /><b>[u]</b>Hyv�� huomenta<b>[/u]</b><br /><br />n�kyy <u>Hyv�� huomenta</u></li><li>Kursivoituun tekstiin k�yt�t <b>[i][/i]</b>, esim.<br /><br />T�m� on <b>[i]</b>Hienoa!<b>[/i]</b><br /><br />N�kyy, T�m� on <i>Hienoa!</i></li></ul>");
$faq[] = array("Kuinka muutetaan tekstin v�ri� tai kokoa", "Seuraavilla tageilla voit muuttaa tekstin v�ri� tai kokoa. Muista, ett� lopputulos riippuu lukijan selaimesta ja j�rjestelm�st�: <ul><li>Muutat tekstin v�rin k�ytt�m�ll� ymp�rill� <b>[color=][/color]</b>. Voit k�ytt�� joko tavallista v�rin nime� (esim. red, blue, yellow, jne.) tai vastaavaa heksadesimaaliarvoa, esim. #FFFFFF, #000000. Jos haluat esim. punaista teksti� voit k�ytt��:<br /><br /><b>[color=red]</b>Tervehdys!<b>[/color]</b><br /><br />tai<br /><br /><b>[color=#FF0000]</b>Tervehdys!<b>[/color]</b><br /><br />n�ytt�v�t molemmat <span style=\"color:red\">Tervehdys!</span></li><li>Tekstin kokoa muutetaan samalla tavalla k�ytt�m�ll� <b>[size=][/size]</b>. T�m�n tagin toiminta riippuu k�yt�ss� olevasta mallisivusta, suositeltu tapa on kuitenkin k�ytt�� numeerista arvoa esitt�m��n tekstin koko pikselein�, aloittaen 1:st� (niin pient�, ett� sit� ei voi lukea) p��ttyen 29:��n (eritt�in iso). Esimerkiksi:<br /><br /><b>[size=9]</b>PIENI<b>[/size]</b><br /><br />on normaalisti <span style=\"font-size:9px\">PIENI</span><br /><br />kun taas:<br /><br /><b>[size=24]</b>ISO!<b>[/size]</b><br /><br />n�kyy <span style=\"font-size:24px\">ISO!</span></li></ul>");
$faq[] = array("Voinko yhdistell� muotoilutageja?", "Tottakai voit. Esim. jos haluat her�tt�� jonkun huomion voit kirjoittaa:<br /><br /><b>[size=18][color=red][b]</b>LUE MINUT!<b>[/b][/color][/size]</b><br /><br />t�m� n�kyy <span style=\"color:red;font-size:18px\"><b>LUE MINUT!</b></span><br /><br />Emme suosittele, ett� k�yt�t paljoa n�in muotoiltua teksti�! Muista, ett� sin� viestin kirjoittana vastaat siit�, ett� tagit on suljettu kuten pit��. Esimerkiksi seuraava on v��rin:<br /><br /><b>[b][u]</b>T�m� on v��rin<b>[/b][/u]</b>");

$faq[] = array("--","Lainaaminen ja asettelultaan kiinte�n tekstin k�ytt�");
$faq[] = array("Tekstin lainaaminen vastauksissa", "Teksti� voi lainata kahdella tavalla, viittauksella ja ilman.<ul><li>Kun k�yt�t Lainaa toimintoa vastatessasi viestiin foorumissa huomaa, ett� teksti lis�t��n viesti-ikkunaan suljettuna tageihin <b>[quote=\"\"][/quote]</b> . T�m� menetelm� antaa sinulle mahdollisuuden lainata viitaten henkil��n tai mihin tahansa haluat! Esim. lainataksesi viesti� Herra Virtaselta kirjoitat:<br /><br /><b>[quote=\"Herra Virtanen\"]</b>Herra Virtasen teksti tulisi t�h�n<b>[/quote]</b><br /><br />Lopputuloksena lis�tt�isiin automaattisesti, Herra Virtanen kirjoitti: ennen varsinaista teksti�. Muista, ett� sinun <b>t�ytyy</b> lis�t� lainausmerkit \"\" lainattavan nimen ymp�rille, ne ovat pakolliset.</li><li>Toinen tapa sallii sinun lainata jotain sokkona. T�t� varten suljet tekstin tageihin <b>[quote][/quote]</b> . Viestiss� n�kyy vain, Lainaus: ennen varsinaista teksti�.</li></ul>");
$faq[] = array("Koodin tai kiinte�mittaisen tekstin n�ytt�", "Jos haluat n�ytt�� p�tk�n koodia tai jotain, joka vaatii kiinte�n asettelun, esim. Courier tyyppinen fontti, sinun tulee ymp�r�id� teksti tagein <b>[code][/code]</b> , esim.<br /><br /><b>[code]</b>echo \"T�m� on p�tk� koodia\";<b>[/code]</b><br /><br />Kaikki muotoilu tagien <b>[code][/code]</b> sis�ll� on s�ilytetty kun viesti� katsotaan.");

$faq[] = array("--","Luetteloiden luonti");
$faq[] = array("J�rjest�m�tt�m�n luettelon luonti", "BBCode tukee kahden tyyppisi� luetteloita, j�rjest�m�tt�mi� ja j�rjestettyj�. Ne ovat p��osin samat kuin vastaavat HTML:ss�. J�rjest�m�tt�m�ss� luettelossa jokainen alkio n�ytet��n per�kk�in luettelomerkill� sisennettyn�. J�rjest�m�t�n lista luodaan k�ytt�m�ll� <b>[list][/list]</b> ja m��rittelem�ll� jokainen luettelon alkio k�ytt�m�ll� <b>[*]</b>. Esimerkiksi luettelon lempiv�reist�si voisit tehd�:<br /><br /><b>[list]</b><br /><b>[*]</b>Punainen<br /><b>[*]</b>Sininen<br /><b>[*]</b>Keltainen<br /><b>[/list]</b><br /><br />T�m� luo seuraavanlaisen luettelon:<ul><li>Punainen</li><li>Sininen</li><li>Keltainen</li></ul>");
$faq[] = array("J�rjestetyn luettelon luonti", "Toinen luettelotyyppi, j�rjestetty luettelo, antaa sinulle mahdollisuuden m��ritell� jokaisen alkion esitysmuoto. Luot j�rjestetyn luettelon k�ytt�m�ll� <b>[list=1][/list]</b> numeroituun luetteloon ja vastaavasti <b>[list=a][/list]</b> aakkostettuun luetteloon. Kuten j�rjest�m�tt�m�ss�kin luettelossa kaikki alkiot m��ritell��n k�ytt�m�ll� <b>[*]</b>. Esimerkiksi:<br /><br /><b>[list=1]</b><br /><b>[*]</b>K�y kaupassa<br /><b>[*]</b>Osta uusi tietokone<br /><b>[*]</b>Kiroile koneelle kun se kaatuu<br /><b>[/list]</b><br /><br />luo seuraavanlaisen luettelon:<ol type=\"1\"><li>K�y kaupassa</li><li>Osta uusi tietokone</li><li>Kiroile koneelle kun se kaatuu</li></ol>Kun taas aakkoselliseen listaan k�ytt�isit:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Ensimm�inen vastaus<br /><b>[*]</b>Toinen vastaus<br /><b>[*]</b>Kolmas vastaus<br /><b>[/list]</b><br /><br />joka n�ytt�isi<ol type=\"a\"><li>Ensimm�inen vastaus</li><li>Toinen vastaus</li><li>Kolmas vastaus</li></ol>");

$faq[] = array("--", "Linkkien luonti");
$faq[] = array("Linkkaaminen toiseen sivustoon", "phpBB BBCode tukee useaa tapaa luoda URI, Uniform Resource Indicators paremmin tunnettu URL.<ul><li>Ensimm�inen niist� k�ytt�� <b>[url=][/url]</b> tagia, mit� tahansa kirjoitat = merkin j�lkeen tulkitaan URL:ksi. Esimerkiksi linkki phpBB.com sivuille tehd��n:<br /><br /><b>[url=http://www.phpbb.com/]</b>Vieraile phpBB sivuilla!<b>[/url]</b><br /><br />T�m� loisi seuraavanlaisen linkin, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Vieraile phpBB sivuilla!</a> Huomaat, ett� linkki aukeaa uuteen ikkunaa joten k�ytt�j� voi jatkaa foorumien selaamista niin halutessaan.</li><li>Jos haluat ett� URL itse n�kyy linkkin� voit k�ytt��:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />T�m� luo seuraavanlaisen linkin, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Lis�ksi phpBB:ss� on ominaisuus jota kutsutaan nimell� <i>Magic Links</i>, t�m� muuntaa kaikki muodollisesti oikein kirjoitetut URL:t linkiksi  ilman, ett� sinun t�ytyy m��ritt�� tageja tai edes alkua http://. Esim. kirjoittamalla www.phpbb.com viestiisi luodaan automaattisesti <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> kun viesti� katsotaan.</li><li>Sama p�tee my�s s�hk�postiosoitteisiin. Voit joko m��ritell� osoitteen esim:<br /><br /><b>[email]</b>ei.kukaan@domain.adr<b>[/email]</b><br /><br />joka n�ytt�� <a href=\"emailto:ei.kukaan@domain.adr\">ei.kukaan@domain.adr</a> tai voit kirjoittaa pelk�st��n ei.kukaan@domain.adr viestiisi ja se muutetaan automaattisesti viesti� katsottaessa.</li></ul>Kuten kaikissa BBCode tageissa voi ymp�r�id� URL:n mill� tahansa muilla tageilla, kuten <b>[img][/img]</b> (katso seuraava kohta), <b>[b][/b]</b>, jne. Kuten muotoilutageissa muista, ett� sinun teht�v�si on varmistaa, ett� tagien alku ja sulkuj�rjestys ovat oikein. Esim:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>ei</u> ole oikein, mik� voi johtaa viestisi poistamiseen. Joten ole tarkkana.");

$faq[] = array("--", "Kuvien n�ytt� viesteiss�");
$faq[] = array("Kuvan lis��minen viestiin", "phpBB BBCode sis�lt�� tagin kuvien lis��miseen viestiin. T�m�n tagin k�ytt��n liittyy kaksi eritt�in t�rke�� asiaa; useat k�ytt�j�t eiv�t pid� liiallisesta kuvien k�yt�st� ja toiseksi k�ytett�vien kuvien on jo oltava internetiss� saatavilla (kuvatiedosto ei voi olla omalla koneellasi, ellet pid� webserveri�!). T�ll� hetkell� ei ole mahdollista s�ilytt�� kuvia paikallisesti phpBB:ll� (t�m� pyrit��n muuttamaan seuraavassa phpBB versiossa). N�ytt��ksesi kuvan sinun t�ytyy ymp�r�id� kuvan URL <b>[img][/img]</b> tageilla. Esim:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kuten yl�puolella URL osiossa selostettiin voit ymp�r�id� kuvan <b>[url][/url]</b> tageilla halutessasi, esim.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />n�ytt�isi:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Muut aiheet");
$faq[] = array("Voinko lis�t� omia tageja?", "Et, ainakaan suoraan phpBB 2.0:ssa. Harkitsemme muunneltavien BBCode tagien lis��mist� seuraavassa isommassa versiop�ivityksess�");

//
// This ends the BBCode guide entries
//

?>