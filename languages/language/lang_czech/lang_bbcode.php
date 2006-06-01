<?php
/***************************************************************************
 *                         lang_bbcode.php [Czech]
 *                         -----------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     email                : azu@atmplus.cz
 *     www                  : phpbb.atmplus.cz
 *
 *     $Id: lang_bbcode.php,v 1.1 2003/02/19 18:31:23 bob Exp $
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

$faq[] = array("--","�vod");
$faq[] = array("Co jsou zna�ky ?", "Zna�ky jsou zvl�tn� p��kazy vlo�en� do HTML. Puo��v�n� zna�ek ve va�ich p��sp�vc�ch ve f�ru povoluje administr�tor. M��ete si dodate�n� zak�zat pou��v�n� zna�ek v jednotliv�ch p��sp�vc�ch ve formul��i k zasl�n� p��sp�vku. Zna�ky jsou velmi podobn� stylu HTML, p��kazy jsou zaps�ny ve slo�en�chch z�vork�ch [] a uzav�raj� v�dy n�jak� text, kter� se n�sledn� chov� dle t�chto p��kaz�. Zna�ky v�m umo�n� rychl� form�tovan� psan�ho textu. Sami se tedy m��ete rozhodnout zda budete cht�t pou��vat tyto zna�ky, kter� jsou zahrnuty ve formul��i pro odesl�n� p��sp�vku �i budete pou��vat HTML.");

$faq[] = array("--","Form�tov�n� textu");
$faq[] = array("Jak vytvo�it text psan� tu�n�, kurz�vou �i podtr�en�", "Zna�ky obsahuj� p��kazy pro rychlou zm�nu stylu va�eho textu. M��ete se pod�vat jak m��ete snadno dos�hnout po�adovan�ho v�sledku.<ul><li>Pro vytvo�en� tu�n� psan�ho textu, obklop�te text mezi <b>[b][/b]</b><br /><br /><p>p��klad: <b>[b]</b>Ahoj<b>[/b]</b><br />V�sledkem je <b>Ahoj</b></li></p><p><li>Pro podtr�en� textu, obklop�te text mezi <b>[u][/u]</b><br /><br />p��klad: <b>[u]</b>Dobr� den<b>[/u]</b><br />V�sledkem je <u>Dobr� den</u></li></p><p><li>Pro text psan� kurz�vou, obklop�te text mezi <b>[i][/i]</b><br /><br />p��klad: Toto je <b>[i]</b>uk�zka<b>[/i]</b><br />V�sledkem je Toto je <i>uk�zka</i></li></p></ul>");
$faq[] = array("Jak zm�nit barvu a velikost p�sma", "Pro zm�nu barvy nebo velikosti textu je ur�eno n�kolik p��kaz�. Dejte si pozor na to jak bude v�stup zobrazen v z�vislosti na va�em prohl�e�i a syst�mu:<ul><li>pro zm�nu barvy textu, obklop�te po�adovan� text mezi <b>[color=][/color]</b>. M��ete pou��t bu� n�zvy barev (p�. red, blue, yellow, atd.) nebo odpov�daj�c� hexadecim�ln� k�d barvy, p�. #FFFFFF, #000000. Na p��kladu si uk�eme jak vytvo�it �erven� text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b><br /><br />nebo<br /><br /><b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br /><br />V�sledkem bude <span style=\"color:red\">Ahoj!</span></li><li>Zm�nu velikosti textu provedeme obdobn� pou�it�m <b>[size=][/size]</b>. Tento p��kaz m� p�eddefinovan� ��seln� hodnoty, kter� maj� p�i�azenu odpov�daj�c� velikosti p�sma v bodech, po��naje 1 (velice mal� p�smo, nejmen�� viditeln�) a� po 29 (velmi velk�). Pro uk�zku:<br /><br /><b>[size=9]</b>MAL�<b>[/size]</b><br /><br />V�sledkem je <span style=\"font-size:9px\">MAL�</span><br /><br />zat�mco:<br /><br /><b>[size=24]</b>VELK�<b>[/size]</b><br /><br />zobraz� <span style=\"font-size:24px\">VELK�</span></li></ul>");
$faq[] = array("Je mo�no spojovat form�tovac� zna�ky ?", "Ano, toto je mo�n�, na n�sleduj�c�m p��kladu si uk�eme jak spr�vn� tyto zna�ky zapsat. Je velice d�le�it� dodr�et i jejich sled.<br /><br /><b>[size=18][color=red][b]</b>Pod�vej se<b>[/b][/color][/size]</b><br /><br />V�sledkem je <span style=\"color:red;font-size:18px\"><b>Pod�vej se</b></span><br /><br />Pokud nedodr��te sled ukon�en� zna�ek v po�ad� v jak�m byly vkl�d�ny, bude text zobrazen chybn�! V�dy je zapot�eb� uzav�rat zna�ky ve sledu v jak� byly zad�ny. Pod�vejte se na n�sleduj�c� uk�zku kde jsou zna�ky nekorektn� uzav�eny:<br /><br /><p><b>[b][u]</b>Toto je �patn�<b>[/b][/u]</b></p>");

$faq[] = array("--","Citace a pevn� ���ka textu p�i odesl�n�");
$faq[] = array("Citace textu v odpov�di", "Jsou dva zp�soby zad�n� citovan�ho textu, s pouk�z�n�m a bez n�j.<ul><li>Kdy� je to vhodn� m��ete pou��t cit�t k p��sp�vku, kter� p�id� pouk�z�n� a text do zvl�tn�ho boxu v p��sp�vku. Text citace uzav�ete mezi <b>[quote=\"\"][/quote]</b>. Tento zp�sob p�id� k citaci va�e pouk�z�n� koho citujete nebo komu je ur�en. V n�sleduj�c�m p��kladu si uk�eme jak zad�me text, kter� vyslovil Karel Nov�k:<br /><br /><b>[quote=\"Karel Nov�k\"]</b>Toto je text, kter� vyslovil tento p�n.<b>[/quote]</b><br /><br /> V�sledkem bude automatick� p�id�n� pouk�z�n� Karel Nov�k napsal: a text citace. Pokud chcete zadat text jako sv�j vlastn� cit�t p��padn� nikoho neur�ovat, zad�te jen z�vorky \"\". Tato volba nen� povinn�.</li><p><li>Druh�m zp�sobem je citovat text bez pouk�z�n�. Po�adovan� text, kter� chcete citovat uzav�ete mezi <b>[quote][/quote]</b>. Kdy� si zobraz�te v�sledek takov�to zpr�vy, bude zde nejprve nam�sto pouk�z�n� jen napsal: a text cit�tu.</li></p></ul>");

$faq[] = array("V�stup k�du nebo pevn� ���ka dat", "Jestli�e chcete vlo�it kus k�du nebo cokoliv co vy�aduje pevnou ���ku (font typu Courier), obklopte text mezi <b>[code][/code]</b><br /><br /><p>nap��klad: <b>[code]</b>echo \"Toto je kod\";<b>[/code]</b></p>");

$faq[] = array("--","Generov�n� seznamu");
$faq[] = array("Vytv��en� jednoduch�ho seznamu", "Zna�ky obsahuj� i p��kazy pro vytv��en� seznam�. Podporov�ny jsou dva druhy seznam�, jednoduch� a struktorovan�. Jednoduch� seznam zobraz� jednotlive polo�ky seznamu postupn� pod sebou odd�len� punt�kem. Pro vytvo�en� seznamu pou�ijte <b>[list][/list]</b> a definujte jednotliv� polo�ky pomoc� <b>[*]</b>. Pod�vejte se na n�sleduj�c� uk�zku jednoduch�ho seznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>�erven�<br /><b>[*]</b>modr�<br /><b>[*]</b>zelen�<br /><b>[/list]</b><br /><br />V�sledkem by bylo:<ul><li>�erven�</li><li>modr�</li><li>zelen�</li></ul>");
$faq[] = array("Vytv��en� strukturovan�ho seznamu", "Druh�m zp�sobem je vytv��en� strukturovan�ch seznam�. Od p�edchoz�ho typu se li�� znakem p�ed textem jednotliv�ch polo�ek, nam�sto te�ky je zde pou�it n�kter� ze dvou zp�sob� vzestupn�ho ozna�en� polo�ek seznamu. Pro vytvo�en� ��slovan�ho seznamu pou�ijte <b>[list=1][/list]</b> a pro abecedn� seznam <b>[list=a][/list]</b>. Jednotliv� polo�ky seznamu definujete pomoc� <b>[*]</b>. Pod�vejte se na n�sleduj�c� uk�zku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>�erven�<br /><b>[*]</b>modr�<br /><b>[*]</b>zelen�<br /><b>[/list]</b><br /><br />V�sledkem bude:<ol type=\"1\"><li>�erven�</li><li>modr�</li><li>zelen�</li></ol>Pro vytvo�en� abecedn�ho seznamu pou�ijte:<br /><br /><b>[list=a]</b><br /><b>[*]</b>prvn� mo�n� odpov��<br /><b>[*]</b>druh� mo�n� odpov��<br /><b>[*]</b>t�et� mo�n� odpov��<br /><b>[/list]</b><br /><br />V�sledek:<ol type=\"a\"><li>prvn� mo�n� odpov��</li><li>druh� mo�n� odpov��</li><li>t�et� mo�n� odpov��</li></ol>");

$faq[] = array("--", "Vytvo�en� odkazu");
$faq[] = array("Odkaz na jin� webov� str�nky", "phpBB zna�ky podporuj� vytvo�en� URL odkaz� odkazuj�c�ch se na jin� internetov� str�nky �i emailov� adresy.<ul><li>Prvn�m zp�sobem je pou��t <b>[url=][/url]</b> zna�ky, za znak = pak dopln�te URL adresu na kterou chcete odkazovat. Text mezi ob�ma zna�kama bude zv�razn�n a slou�it jako odkaz na uvedenou URL adresu. Pod�vejte se na n�sleduj�c� p�iklad odkazuj�c� na server phpbb.com:<br /><br /><b>[url=http://www.phpbb.com/]</b>Str�nky phpBB<b>[/url]</b><br /><br />T�mto se vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Str�nky phpBB</a> Pokud kliknete na tento vytvo�en� odkaz, otev�e se v�m v nov�m okn� prohl�e�e odkaz na kter� sm��ujete.</li><li>Jestli�e chcete zobrazit URL p��mo jako odkaz pou�ijte n�sleduj�c� postup:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />T�mto se vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>V p��pad� zad�n� syntakticky spr�vn�ho URL i bez po��te�n�ho http:// do textu p��sp�vky automaticky odkaz na zadanou URL adresu. Pro uk�zku si m��ete zkusit napsat do p��sp�vku www.phpbb.com a uvid�te, �e se v�m text ve v�sledku zobraz� automaticky jako odkaz <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Obdobn�m zp�sobem se daj� vytv��et i odkazy na emailov� adresy, zadejte po�adovanou emailovou adresu dle p��kladu:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />V�sledekm pak bude <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> nebo m��ete zadat v textu p��psp�vku no.one@domain.adr a adresa se op�t automaticky p�em�n� na odkaz.</li></ul>URL odkaz m��ete zadat mezi kter�koliv dal�� zna�ky: Uzav�ete-li URL mezi <b>[img][/img]</b> (viz n�sleduj�c� kapitola) m��e b�t odkazem i obr�zek. Pouze op�t nezapom��te na spr�vnou posloupnost uzav�r�n� zna�ek.");

$faq[] = array("--", "Zobrazen� obr�zk� v p��sp�vc�ch");
$faq[] = array("P�id�n� obr�zku do p��sp�vku", "phpBB zna�ky d�le umo��uj� vkl�d�n� obr�zk� do textu p��sp�vku �i zpr�vy. Toto je velice u�ite�n� vlastnost, d�ky n� nemus�te odkazovat na soubory obr�zk� o kter�ch nap��klad p�ete, ale v�ichni u�ivatel� je ihned vid� ve va�em p��sp�vku. Jak bylo uvedeno v��e, m��ete vyu��t obr�zku k vytvo�en� URL odkazu na v� server nabo nap��klad pro zv�t�eninu mal�ho obr�zku zde v p��sp�vku. Obr�zek se mus� ov�em v�dy nach�zet na internetu a b�t tak dostupn� pro v�echny u�ivatele, nelze se tedy odkazovat na soubory kter� m�te nap��klad na lok�ln�m disku va�eho po��ta�e, jeliko� k nim by u�ivatel� internetu nem�li p��stup. Pro zobrazen� obr�zku mus�te uzav��t URL obr�zku mezi <b>[img][/img]</b>.<br /><br />p��klad: <b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Jestli�e zad�te URL adresu obr�zku mezi <b>[url][/url]</b>, m��e b�t odkazem obr�zek.<br /><br />p��klad: <b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />V�sledkem bude:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

//
// This ends the BBCode guide entries
//

?>