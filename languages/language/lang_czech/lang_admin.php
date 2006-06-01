<?php
/***************************************************************************
 *                            lang_admin.php [Czech]
 *                            ----------------------
 *     characterset         : Windows-1250
 *     phpBB version        : 2.0.2
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : azu@atmplus.cz
 *                          : emilio@emilio.cz
 *     www                  : http://phpbb.atmplus.cz
 *
 *     $Id: lang_admin.php,v 1.1 2003/02/19 18:31:23 bob Exp $
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Obecn�";
$lang['Users'] = "U�ivatel�";
$lang['Groups'] = "Skupiny";
$lang['Forums'] = "F�rum";
$lang['Styles'] = "Styly";

$lang['Configuration'] = "Konfigurace";
$lang['Permissions'] = "Svolen�";
$lang['Manage'] = "Administrace";
$lang['Disallow'] = "Nepovolen� jm�na";
$lang['Prune'] = "Pro�i�t�n�";
$lang['Mass_Email'] = "Hromadn� e-mail";
$lang['Ranks'] = "Hodnocen�";
$lang['Smilies'] = "Emotikony (smajl�ky)";
$lang['Ban_Management'] = "Zak�z�n� vstupu";
$lang['Word_Censor'] = "Cenzura slov";
$lang['Export'] = "Exportovat";
$lang['Create_new'] = "Vytvo�it";
$lang['Add_new'] = "P�idat";
$lang['Backup_DB'] = "Z�lohovat datab�zi";
$lang['Restore_DB'] = "Obnovit datab�zi";


//
// Index
//
$lang['Admin'] = "Administrace";
$lang['Not_admin'] = "Nem�te opr�vn�n� k administraci tohoto f�ra";
$lang['Welcome_phpBB'] = "V�tejte na phpBB";
$lang['Admin_intro'] = "D�kujeme �e jste si zvolil(a) phpBB jako �e�en� pro va�e f�rum. Tato str�nka slou�� k rychl�mu zobrazen� r�zn�ch statistik va�eho f�ra. Pokud se budete cht�t vr�tit zp�t na tuto str�nku klikn�te na odkaz <u>Obsah administrace</u> v lev�m panelu. Pro n�vrat na obsah va�eho f�ra, klikn�te na logo f�ra um�st�n�m t� na lev�m panelu. Ostatn� odkazy na lev�m panelu t�to str�nky v�s dovedou k jednotliv�m polo�k�m mo�n�ho nastaven� f�ra dle va�ich po�adavk�, ka�d� str�nka obsahuje n�vod jak pou��t danou funkci.";
$lang['Main_index'] = "Obsah f�ra";
$lang['Forum_stats'] = "Statistiky f�ra";
$lang['Admin_Index'] = "Obsah administrace";
$lang['Preview_forum'] = "N�hled na f�rum";

$lang['Click_return_admin_index'] = "Klikn�te %szde%s pro n�vrat na obsah administrace";

$lang['Statistic'] = "Statistiky";
$lang['Value'] = "Hodnota";
$lang['Number_posts'] = "Po�et p��sp�vk�";
$lang['Posts_per_day'] = "P��sp�vk� za den";
$lang['Number_topics'] = "Po�et t�mat";
$lang['Topics_per_day'] = "T�mat za den";
$lang['Number_users'] = "Po�et u�ivatel�";
$lang['Users_per_day'] = "U�ivatel� za den";
$lang['Board_started'] = "F�rum spu�t�no";
$lang['Avatar_dir_size'] = "Velikost adres��e s obr�zky postavi�ek";
$lang['Database_size'] = "Velikost datab�ze";
$lang['Gzip_compression'] ="GZIP komprese";
$lang['Not_available'] = "Nedostupn�";

$lang['ON'] = "Ano"; // This is for GZip compression
$lang['OFF'] = "Ne";


//
// DB Utils
//
$lang['Database_Utilities'] = "Datab�zov� n�stroje";

$lang['Restore'] = "Obnoven�";
$lang['Backup'] = "Z�lohov�n�";
$lang['Restore_explain'] = "Tato funkce je ur�ena k �pln�mu obnoven� v�ech datab�zov�ch tabulek phpBB f�ra z ulo�en�ch soubor�. Jestli�e to v� server podporuje, m��ete pou��t GZIP komprimovan� textov� soubory a ty pak budou automaticky dekomprimov�ny. <b>POZOR</b> T�mto budou p�eps�na ve�ker� existuj�c� data. Obnoven� pot�ebuje del�� �as na zpracov�n�, proto pros�m neodch�zejte z t�to str�nky dokud nebude v�e dokon�eno.";
$lang['Backup_explain'] = "Tato funkce je ur�ena ke kompletn� z�loze dat phpBB f�ra. Jestli�e pou��v�te n�kter� dal�� tabulky spole�n� s phpBB datab�z�, doporu�ujeme je t� zaz�lohovat, zadejte proto pros�m n�zvy tabulek a odd�lte je odd�lova�em (,). Jestli�e to v� server podporuje, m��ete pou��t GZIP kompresy dat pro zmen�en� velikosti soubor� p�ed jejich sta�en�m do va�eho po��ta�e.";

$lang['Backup_options'] = "Nastaven� z�lohy";
$lang['Start_backup'] = "Spustit z�lohov�n�";
$lang['Full_backup'] = "Kompletn� z�loha";
$lang['Structure_backup'] = "Z�lohovat pouze strukturu";
$lang['Data_backup'] = "Z�lohovat pouze data";
$lang['Additional_tables'] = "Dal�� tabulky";
$lang['Gzip_compress'] = "GZIP komprese soubor�";
$lang['Select_file'] = "Zvolit soubor";
$lang['Start_Restore'] = "Spustit obnoven�";

$lang['Restore_success'] = "Datab�ze byla �sp�n� obnovena.<br><br>Va�e f�rum by nyn� m�lo b�t ve stavu p�ed proveden�m z�lohy.";
$lang['Backup_download'] = "Pros�m vy�kejte za��tku stahov�n�";
$lang['Backups_not_supported'] = "Lituji, ale z�lohov�n� datab�ze nen� v sou�asn� dob� ve ve�em datab�zov�m syst�mu podporov�no";

$lang['Restore_Error_uploading'] = "Vyskytla se chyba p�i nahr�v�n� souboru z�lohy";
$lang['Restore_Error_filename'] = "Vyskytl se probl�m s n�zvem souboru, zkuste jin�";
$lang['Restore_Error_decompress'] = "Nebylo mo�n� dekomprimovat GZIP soubor, pou�ijte textov� soubor";
$lang['Restore_Error_no_file'] = "Nebyl nahr�n ��dn� soubor";


//
// Auth pages
//
$lang['Select_a_User'] = "Zvolit u�ivatele";
$lang['Select_a_Group'] = "Zvolit skupinu";
$lang['Select_a_Forum'] = "Zvolit f�rum";
$lang['Auth_Control_User'] = "U�ivatelsk� opr�vn�n�";
$lang['Auth_Control_Group'] = "Opr�vn�n� skupiny";
$lang['Auth_Control_Forum'] = "Opr�vn�n� f�ra";
$lang['Look_up_User'] = "Zvolit u�ivatele";
$lang['Look_up_Group'] = "Zvolit skupinu";
$lang['Look_up_Forum'] = "Zvolit f�rum";

$lang['Group_auth_explain'] = "Zde m��ete m�nit opr�vn�n� a p�i�adit moderov�n� skupin� u�ivatel�. Nezapome�te p�ed zm�nou opr�vn�n� aby skupina opr�vn�n�ch m�la st�le povolen vstup u�ivatele na f�rum.";
$lang['User_auth_explain'] = "Zde m��ete m�nit opr�vn�n� a p�i�adit moderov�n� zvolen�mu u�ivateli. Nezapome�te p�ed zm�nou opr�vn�n� aby skupina opr�vn�n�ch m�la st�le povolen vstup u�ivatele na f�rum.";
$lang['Forum_auth_explain'] = "Zde m��ete nastavit �rove� zabezpe�en� f�ra. M��ete zvolit z�kladn� nebo roz���en� m�d pro tuto �innost. Roz���en� m�d nab�z� mnohem v�t�� �k�lu mo�nost� pro nastaven� f�ra. Pamatujte, �e p�ed zm�nou zabezpe�en� f�ra by se na f�ru nem�li prov�d�t jin� operace.";

$lang['Simple_mode'] = "Z�kladn� re�im";
$lang['Advanced_mode'] = "Roz���en� re�im";
$lang['Moderator_status'] = "Moder�tor";

$lang['Allowed_Access'] = "P��stup povolen";
$lang['Disallowed_Access'] = "P��stup zam�tnout";
$lang['Is_Moderator'] = "Je moder�torem";
$lang['Not_Moderator'] = "Nen� moder�torem";

$lang['Conflict_warning'] = "Varov�n�, autoriza�n� konflikt";
$lang['Conflict_access_userauth'] = "Tento u�ivatel m� po�adovan� p��stupov� pr�va k tomuto f�ru p�es �lenstv� ve skupin�. M��ete povolit opr�vn�n� skupin� nebo odstranit tohoto u�ivatele ze skupiny pro �pln� zabr�n�n� po�adovan�ch p��stupov�ch pr�v.";
$lang['Conflict_mod_userauth'] = "Tento moder�torsk� m� po�adovan� pr�va pro toto f�rum p�es �lenstv� ve skupin�. M��ete povolit opr�vn�n� skupin� nebo odstranit tohoto u�ivatele ze skupiny pro �pln� zabr�n�n� po�adovan�ch p��stupov�ch pr�v.";
$lang['Conflict_access_groupauth'] = "N�sleduj�c� u�ivatel (u�ivatel�) maj� po�adovan� pr�va pro toto f�rum p�es jejich nastaven� opr�vn�n�. M��ete povolit opr�vn�n� skupin� nebo odstranit tohoto u�ivatele ze skupiny pro �pln� zabr�n�n� po�adovan�ch p��stupov�ch pr�v.";
$lang['Conflict_mod_groupauth'] = "N�sleduj�c� u�ivatel (u�ivatel�) maj� po�adovan� pr�va pro toto f�rum p�es jejich nastaven� opr�vn�n�. M��ete povolit opr�vn�n� skupin� nebo odstranit tohoto u�ivatele ze skupiny pro �pln� zabr�n�n� po�adovan�ch p��stupov�ch pr�v.";

$lang['Public'] = "Ve�ejn�";
$lang['Private'] = "Soukrom�";
$lang['Registered'] = "Registrovan�";
$lang['Administrators'] = "Administr�tor";
$lang['Hidden'] = "skryt�";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "V�ichni";
$lang['Forum_REG'] = "Registrovan�";
$lang['Forum_PRIVATE'] = "Soukrom�";
$lang['Forum_MOD'] = "Moder�tor";
$lang['Forum_ADMIN'] = "Administr�tor";

$lang['View'] = "Zobrazit";
$lang['Read'] = "��st";
$lang['Post'] = "Odeslat";
$lang['Reply'] = "Odpov�d�t";
$lang['Edit'] = "Upravit";
$lang['Delete'] = "Odstranit";
$lang['Sticky'] = "D�le�it�";
$lang['Announce'] = "Ozn�men�";
$lang['Vote'] = "Hlasov�n�";
$lang['Pollcreate'] = "Hlas p�id�n";

$lang['Permissions'] = "Opr�vn�n�";
$lang['Simple_Permission'] = "Z�kladn� opr�vn�n�";

$lang['User_Level'] = "U�ivatelsk� �rove�";
$lang['Auth_User'] = "U�ivatel";
$lang['Auth_Admin'] = "Administr�tor";
$lang['Group_memberships'] = "�lenstv� u�ivatelsk� skupiny";
$lang['Usergroup_members'] = "Tato skupina m� n�sleduj�c� �leny";

$lang['Forum_auth_updated'] = "Opr�vn�n� f�ra aktualizov�no";
$lang['User_auth_updated'] = "U�ivatelsk� opr�vn�n� aktualizov�no";
$lang['Group_auth_updated'] = "Opr�vn�n� skupiny aktualizov�no";

$lang['Auth_updated'] = "Opr�vn�n� bylo aktualizov�no";
$lang['Click_return_userauth'] = "Klikn�te %szde%s pro n�vrat do u�ivatelsk�ho opr�vn�n�";
$lang['Click_return_groupauth'] = "Klikn�te %szde%s pro n�vrat do opr�vn�n� skupiny";
$lang['Click_return_forumauth'] = "Klikn�te %szde%s pro n�vrat na opr�vn�n� f�ra";


//
// Banning
//
$lang['Ban_control'] = "Zak�z�n� vstupu";
$lang['Ban_explain'] = "Zde m��ete zak�zat vstup zvolen�m u�ivatel�m. M��ete zak�zat konkr�tn�ho u�ivatele nebo rozsah IP adres nebo jm�no po��ta�e. Touto metodou ochr�n�te va�e f�rum proti vstupu ne��douc�ch u�ivatel� na str�nky f�ra. Proti registraci u�ivatele pod jin�m jm�nem m��ete zak�zat jeho e-mailovou adresu.";
$lang['Ban_explain_warn'] = "D�vejte si pros�m pozor p�i zad�v�n� rozsahu IP adres zda jsou v�echny adresy od za��tku do konce v seznamu. Doporu�uje se aby byl seznam ulo�en�ch IP adres v datab�zi co nejmen��, proto se pokuste rad�ji pou��t znaku \"*\" pro specifikaci nam�sto zad�v�n� rozsahu IP adres. Pokud je p�esto nutno zadat rozsah IP adres, pokuste se aby byl seznam co nejkrat��.";

$lang['Select_username'] = "Zvolte u�ivatele";
$lang['Select_ip'] = "Zvolte IP";
$lang['Select_email'] = "Zvolte e-mailovou adresu";

$lang['Ban_username'] = "Zak�z�n� vstupu zadan�m u�ivatel�m";
$lang['Ban_username_explain'] = "Chcete-li p�idat do zak�zan�ch n�kter�ho u�ivatele, zadejte zde jeho jm�no, p��padn� jej vyhledejte ze seznamu registrovan�ch u�ivatel�.";

$lang['Ban_IP'] = "Zak�z�n� vstupu dle IP adresy nebo jm�na po��ta�e";
$lang['IP_hostname'] = "IP adresa nebo jm�no po��ta�e";
$lang['Ban_IP_explain'] = "Zde m��ete zadat n�zev po��ta�e, �i IP adresy, kter�m chcete zak�zat vstup. Jednotliv� adresy �i jm�na od sebe odd�lte odd�lov�em. Chcete-li zadat rozsah IP adres, odd�lte je od sebe znakem \"-\". M��ete pou��t i znak \"*\" pro nahrazen� ��sti �et�zce.";

$lang['Ban_email'] = "Zak�z�n� vstupu dle e-mailov�ch adres";
$lang['Ban_email_explain'] = "Zde m��ete zadat seznam emailov�ch adres, kter�m chcete zamezit vstup, jednotliv� adresy od sebe odd�lte odd�lova�em. M��ete pou��t i znak \"*\" pro nahrazen� ��sti adresy, nap�. *@hotmail.com";

$lang['Unban_username'] = "Vyjmut� u�ivatel� ze seznamu zak�zan�ch";
$lang['Unban_username_explain'] = "Jestli�e chcete vyjmout n�kter� u�ivatele z tohoto seznamu, ozna�te je pomoc� my�i �i kl�vesnice a potvr�te odesl�n�m.";

$lang['Unban_IP'] = "Vyjmut� IP adres ze seznamu zak�zan�ch";
$lang['Unban_IP_explain'] = "Jestli�e chcete vyjmout n�kter� IP adresz z tohoto seznamu, ozna�te je pomoc� my�i �i kl�vesnice a potvr�te odesl�n�m.";

$lang['Unban_email'] = "Vyjmut� e-mailov�ch adres ze seznamu zak�zan�ch";
$lang['Unban_email_explain'] = "Jestli�e chcete vyjmout n�kter� e-mailov� adresy z tohoto seznamu, ozna�te je pomoc� my�i �i kl�vesnice a potvr�te odesl�n�m.";

$lang['No_banned_users'] = "��dn� zak�zan� u�ivatel�";
$lang['No_banned_ip'] = "��dn� zak�zan� IP adresy";
$lang['No_banned_email'] = "��dn� zak�zan� e-mail adresy";

$lang['Ban_update_sucessful'] = "Seznam zak�zan�ch u�ivatel� byl �sp�n� aktualizov�n";
$lang['Click_return_banadmin'] = "Klikn�te %szde%s pro n�vrat do ovl�dac�ho panelu zak�zan� vstupu";


//
// Configuration
//
$lang['General_Config'] = "Konfigurace";
$lang['Config_explain'] = "N�e uveden� polo�ky v�m umo�n� nastavit f�rum dle va�ich po�adavk�. Pro nastaven� u�ivatel� a f�ra pou��vejte odkazy v lev� ��sti str�nky.";

$lang['Click_return_config'] = "Klikn�te %szde%s pro n�vrat do konfigurace";

$lang['General_settings'] = "Obecn� nastaven� f�ra";
$lang['Server_name'] = "Jm�no dom�ny";
$lang['Server_name_explain'] = "Dom�nov� jm�no tohoto f�ra b�� na";
$lang['Script_path'] = "Cesta ke skript�m";
$lang['Script_path_explain'] = "Cesta ke skript�m phpBB, relativn� um�st�n� v dom�n�";
$lang['Server_port'] = "Port serveru";
$lang['Server_port_explain'] = "Port na kter�m b�� v� server, standardn� 80";
$lang['Site_name'] = "Jm�no f�ra";
$lang['Site_desc'] = "Popis f�ra";
$lang['Board_disable'] = "Zablokovat f�rum";
$lang['Board_disable_explain'] = "T�mto znep��stupn�te f�rum pro u�ivatele. Neodhla�ujte se pokud jste znep��stupnil f�rum, jinak se nebudete moci nalogovat zp�t!";

$lang['Acct_activation'] = "Zp�sob aktivace ��tu";
$lang['Acc_None'] = "��dn�"; // These three entries are the type of activation
$lang['Acc_User'] = "U�ivatelem";
$lang['Acc_Admin'] = "Administr�torem";

$lang['Abilities_settings'] = "Z�kladn� nastaven� pro u�ivatele a f�rum";
$lang['Max_poll_options'] = "Maxim�ln� hodnota p�i hlasov�n�";
$lang['Flood_Interval'] = "Ochrann� interval";
$lang['Flood_Interval_explain'] = "Po�et vte�in, po kter� mus� u�ivatel po�kat mezi p��sp�vky";
$lang['Board_email_form'] = "E-mail u�ivatele p�es toto f�rum";
$lang['Board_email_form_explain'] = "Umo��uje zas�l�n� e-mail� jin�m u�ivatel�m p�es toto f�rum";
$lang['Topics_per_page'] = "T�mat na str�nku";
$lang['Posts_per_page'] = "P��sp�vk� na str�nku";
$lang['Hot_threshold'] = "P��sp�vky do p��pustn� hranice";
$lang['Default_style'] = "V�choz� vzhled";
$lang['Override_style'] = "Nahradit u�ivatelem zvolen� vzhled";
$lang['Override_style_explain'] = "Pou�ije v�choz� vzhled nam�sto zvolen�ho u�ivatelem";
$lang['Default_language'] = "V�choz� jazyk";
$lang['Date_format'] = "Form�t datumu";
$lang['System_timezone'] = "�asov� p�smo f�ra";
$lang['Enable_gzip'] = "Povolit GZIP kompresi";
$lang['Enable_prune'] = "Povolit pro�i�t�n� f�ra";
$lang['Allow_HTML'] = "Povolit HTML";
$lang['Allow_BBCode'] = "Povolit zna�ky";
$lang['Allowed_tags'] = "Povolen� HTML zna�ky";
$lang['Allowed_tags_explain'] = "odd�lte zna�ky odd�lova�em (,)";
$lang['Allow_smilies'] = "Povolit emotikony (smajl�ky)";
$lang['Smilies_path'] = "Cesta k um�st�n� smajl�k�";
$lang['Smilies_path_explain'] = "Cesta mimo v� phpBB ko�enov� adres��, p�.: images/smilies";
$lang['Allow_sig'] = "Povolit podpisy";
$lang['Max_sig_length'] = "Maxim�ln� d�lka podpisu";
$lang['Max_sig_length_explain'] = "Maxim�ln� po�et znak� u�ivatelova podpisu";
$lang['Allow_name_change'] = "Povolit zm�nu u�ivatelsk�ho jm�na";

$lang['Avatar_settings'] = "Nastaven� obr�zk� postavi�ek";
$lang['Allow_local'] = "Povolit galerii postavi�ek";
$lang['Allow_remote'] = "Povolit vzd�len� obr�zky postavi�ek";
$lang['Allow_remote_explain'] = "Obr�zek postavi�ky propojen na jin� WWW server";
$lang['Allow_upload'] = "Povolit p�ihr�v�n� obr�zk� postavi�ek";
$lang['Max_filesize'] = "Maxim�ln� velikost souboru s obr�zkem postavi�ky";
$lang['Max_filesize_explain'] = "Pro p�ihr�v�n� soubor� obr�zk� postavi�ek";
$lang['Max_avatar_size'] = "Maxim�ln� rozm�ry obr�zku postavi�ky";
$lang['Max_avatar_size_explain'] = "(v��ka x ���ka v bodech)";
$lang['Avatar_storage_path'] = "Cesta k ukl�d�n� obr�zk� postavi�ek";
$lang['Avatar_storage_path_explain'] = "Cesta mimo v� phpBB ko�enov� adres��, p�.: images/avatars";
$lang['Avatar_gallery_path'] = "Cesta ke galerii obr�zk� postavi�ek";
$lang['Avatar_gallery_path_explain'] = "Cesta mimo v� phpBB ko�enov� adres�� pro p�ednastaven� obr�zky, p�.: images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA nastaven�";
$lang['COPPA_fax'] = "COPPA faxov� ��slo";
$lang['COPPA_mail'] = "COPPA mailov� adresy";
$lang['COPPA_mail_explain'] = "Toto je seznam adres na kter� budou rodi�e zas�lat COPPA registra�n� formul��";

$lang['Email_settings'] = "Nastaven� e-mail�";
$lang['Admin_email'] = "Administr�torova e-mailov� adresa:";
$lang['Email_sig'] = "Podpis e-mailu";
$lang['Email_sig_explain'] = "Tento text bude p�ipojen ke v�em e-mail�m odeslan�m z tohoto f�ra";

$lang['Use_SMTP'] = "Pou��t SMTP Server pro e-mail";
$lang['Use_SMTP_explain'] = "Zvolte Ano jestli�e chcete odes�lat e-maily p�es jm�no serveru nam�sto lok�ln� mail funkce.";
$lang['SMTP_server'] = "Adresa SMTP serveru";
$lang['SMTP_username'] = "SMTP ��et";
$lang['SMTP_username_explain'] = "Zadejte pouze v p��pad�, �e to v� SMTP server vy�aduje";
$lang['SMTP_password'] = "SMTP heslo";
$lang['SMTP_password_explain'] = "Zadejte pouze v p��pad�, �e to v� SMTP server vy�aduje";

$lang['Disable_privmsg'] = "Soukrom� zpr�vy";
$lang['Inbox_limits'] = "Max. po�et p��sp�vk� ve slo�ce doru�en�";
$lang['Sentbox_limits'] = "Max. po�et p��sp�vk� ve slo�ce odeslan�";
$lang['Savebox_limits'] = "Max. po�et p��sp�vk� ve slo�ce ulo�en�";

$lang['Cookie_settings'] = "Nastaven� Cookie";
$lang['Cookie_settings_explain'] = "Toto detailn� nastaven� definuje jak budou zas�l�ny cookies ve va�em prohl�e�i. Doporu�ujeme ponechat v�choz� hodnoty nastaven� cookie ale je mo�no zm�nit hodnoty dle va�ich po�adavk�, nastaven� se projev� a� po p��t�m p�ihl�en�.";
$lang['Cookie_domain'] = "Dom�na Cookie";
$lang['Cookie_name'] = "Jm�no Cookie";
$lang['Cookie_path'] = "Cesta k Cookie";
$lang['Cookie_secure'] = "Zabezpe�en� Cookie";
$lang['Cookie_secure_explain'] = "Jestli�e v� server b�� p�es SSL nastavte na povoleno, jesli�e ne tak nastavte zak�z�no";
$lang['Session_length'] = "D�lka platnosti Session [ vte�in ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Administratce f�ra";
$lang['Forum_admin_explain'] = "Z tohoto panelu m��ete p�id�vat, odstranit, upravovat, t��dit a synchronizovat kategorie a f�ra";
$lang['Edit_forum'] = "�prava f�ra";
$lang['Create_forum'] = "Vytvo�it nov� f�rum";
$lang['Create_category'] = "vytvo�it novou kategorii";
$lang['Remove'] = "Vyjmout";
$lang['Action'] = "Akce";
$lang['Update_order'] = "Aktualizovat instrukce";
$lang['Config_updated'] = "Zm�na konfigurace f�ra byla �sp�n� provedena";
$lang['Edit'] = "Upravit";
$lang['Delete'] = "Odstranit";
$lang['Move_up'] = "p�esunout nahoru";
$lang['Move_down'] = "p�esunout dolu";
$lang['Resync'] = "Synchronizovat";
$lang['No_mode'] = "M�d nebyl p�i�azen";
$lang['Forum_edit_delete_explain'] = "N�e uveden� formul�� v�m umo�n� �pravy obecn�ho nastaven� f�ra. Pro nastaven� u�ivatel� a f�ra pou��vejte odkazy v lev� ��sti str�nky.";

$lang['Move_contents'] = "P�esunout ve�ker� obsah";
$lang['Forum_delete'] = "Odstranit f�rum";
$lang['Forum_delete_explain'] = "N�e uveden� formul�� v�m umo�n� odstranit f�ra �i kategorie a rozhodnout kam chcete d�t v�echna t�mata kter� jsou v n�m obsa�eny.";

$lang['Status_locked'] = 'Zamknuto';
$lang['Status_unlocked'] = 'Odemknuto';
$lang['Forum_settings'] = "Obecn� nastaven� f�ra";
$lang['Forum_name'] = "Jm�no f�ra";
$lang['Forum_desc'] = "Popis";
$lang['Forum_status'] = "Stav f�ra";
$lang['Forum_pruning'] = "Automatick� pro�i�t�n�";

$lang['prune_freq'] = "Kontrolovat star�� t�mata ka�d�ch";
$lang['prune_days'] = "Odstranit t�mata kter� jsou star��";
$lang['Set_prune_data'] = "Chcete nastavit povolen� automatick�ho pro�i�t�n� tohoto f�ra, ale nem�te nastavenu �etnost nebo po�et dn�. Vra�te se pros�m zp�t a zadejte po�adovan� hodnoty.";

$lang['Move_and_Delete'] = "P�esunout a odstranit";

$lang['Delete_all_posts'] = "Odstranit v�echny p��sp�vky";
$lang['Nowhere_to_move'] = "Sem to nelze p�esunout";

$lang['Edit_Category'] = "�prava kategorie";
$lang['Edit_Category_explain'] = "Pou�ijte rento formul�� pro �pravu jm�na kategorie.";

$lang['Forums_updated'] = "F�rum a informace o skupin� byly aktualizov�ny";

$lang['Must_delete_forums'] = "Mus�te odstranit v�echna f�ra je�t� p�ed odstran�n�m t�to kategorie";

$lang['Click_return_forumadmin'] = "Klikn�te %szde%s pro n�vrat do administrace f�ra";


//
// Smiley Management
//
$lang['smiley_title'] = "�prava emotikon (smajl�k�)";
$lang['smile_desc'] = "Na t�to str�nce m��ete p�id�vat, odeb�rat a upravovat emotikony (smajl�ky), kter� mohou Va�i u�ivatel� pou��vat v p��sp�vc�ch a soukrom�ch zpr�v�ch.";

$lang['smiley_config'] = "Nastaven� smajl�ku";
$lang['smiley_code'] = "K�d smajl�ku";
$lang['smiley_url'] = "Grafick� soubor smajl�ku";
$lang['smiley_emot'] = "V�raz smajl�ku";
$lang['smile_add'] = "P�idej nov� smajl�k";
$lang['Smile'] = "Smajl�k";
$lang['Emotion'] = "V�raz";

$lang['Select_pak'] = "Vyberte (.pak) soubor";
$lang['replace_existing'] = "Nahradit dosavadn� smajl�k";
$lang['keep_existing'] = "Keep Existing Smiley";
$lang['smiley_import_inst'] = "Rozbalte kolekci smajl�k� a nahrajte v�echny soubory do p��slu�n�ho adres��e smajl�k� pro instalaci.  Pak vyberte spr�vnou informaci v tomto formul��i k importov�n� kolekce smajl�k�.";
$lang['smiley_import'] = "Import kolekce smajl�k�";
$lang['choose_smile_pak'] = "Vyberte soubor smajl�k� (.pak)";
$lang['import'] = "Importuj smajl�ky";
$lang['smile_conflicts'] = "Co ud�lat v p��pad� konflikt� ?";
$lang['del_existing_smileys'] = "P�ed importov�n�m sma�te dosavadn� smajl�ky";
$lang['import_smile_pack'] = "Importovat kolekci smajl�k�";
$lang['export_smile_pack'] = "Vytvo�it kolekci smajl�k�";
$lang['export_smiles'] = "Pokud chcete vytvo�it kolekci smajl�k� z dosud u��van�ch smajl�k�, klikn�te %szde%s a st�hn�te soubor smiles.pak. Pojmenujte tento p��slu�n� soubor, ale nezapome�te zachovat p��ponu (.pak). Pak vytvo�te komprimovan� soubor v�ech va�ich smajl�k� i s va��m souborem nastaven� .pak";

$lang['smiley_add_success'] = "Smajl�k byl �sp�n� p�id�n !";
$lang['smiley_edit_success'] = "Smajl�k byl �sp�n� zm�n�n !";
$lang['smiley_import_success'] = "Soubor smajl�k� byl �sp�n� importov�n !";
$lang['smiley_del_success'] = "Smajl�k byl �sp�n� odstran�n";
$lang['Click_return_smileadmin'] = "Klikn�te %szde%s k n�vratu na administraci smajl�k�";


//
// User Management
//
$lang['User_admin'] = "U�ivatelsk� administrace";
$lang['User_admin_explain'] = "Zde m��ete zm�nit informaci o u�ivateli a n�kter� specifick� nastaven�. K �prav� pr�v pou�ijte u�ivatele a skupinov� povolovac� syst�m.";

$lang['Look_up_user'] = "Zvolit u�ivatele";

$lang['Admin_user_fail'] = "Nelze zm�nit nastaven� u�ivatele.";
$lang['Admin_user_updated'] = "Zm�na nastaven� u�ivatele prob�hla �sp�n�.";
$lang['Click_return_useradmin'] = "Klikn�te %szde%s k n�vratu do U�ivatelsk� administrace";

$lang['User_delete'] = "Odstranit tohoto u�ivatele";
$lang['User_delete_explain'] = "Zde sma�ete tohoto u�ivatele. Nelze vz�t zp�t !";
$lang['User_deleted'] = "U�ivatel �sp�n� odstran�n.";

$lang['User_status'] = "U�ivatel je aktivn�";
$lang['User_allowpm'] = "M��e pos�lat soukrom� zpr�vy";
$lang['User_allowavatar'] = "M��e zobrazovat postavi�ky";

$lang['Admin_avatar_explain'] = "Zde m��ete vid�t a odstranit sou�asnou u�ivatelovu postavi�ku.";

$lang['User_special'] = "Zvl�tn� oblasti administr�torsk�ch nastaven�";
$lang['User_special_explain'] = "Tyto oblasti nem��ou b�t upravov�ny u�ivateli. Zde m��ete nastavit jejich za�azen� a dal�� oblasti, kter� nejsou u�ivatel�m p�i�azeny.";


//
// Group Management
//
$lang['Group_administration'] = "Skupinov� administrace";
$lang['Group_admin_explain'] = "Z tohoto panelu m��ete spravovat v�echny u�ivatelsk� skupiny, m��ete odstranit, vytvo�it a m�nit sou�asn� skupiny. M��ete vyb�rat moder�tory, zamknout otev�en�/uzav�en� skupiny a nastavit jm�no a popis skupiny";
$lang['Error_updating_groups'] = "P�i nahr�v�n� skupin do�lo k chyb�";
$lang['Updated_group'] = "Skupina byla �sp�n� nahr�na";
$lang['Added_new_group'] = "Nov� skupina byla �sp�n� vytvo�ena";
$lang['Deleted_group'] = "Skupina byla �sp�n� odstran�na";
$lang['New_group'] = "Vytvo�it novou skupinu";
$lang['Edit_group'] = "Zm�nit skupinu";
$lang['group_name'] = "Jm�no skupiny";
$lang['group_description'] = "Popis skupiny";
$lang['group_moderator'] = "Moder�tor skupiny";
$lang['group_status'] = "Nastaven� skupiny";
$lang['group_open'] = "Otev�en� skupina";
$lang['group_closed'] = "Uzav�en� skupina";
$lang['group_hidden'] = "Skryt� skupina";
$lang['group_delete'] = "odstranit skupinu";
$lang['group_delete_check'] = "odstranit tuto skupinu";
$lang['submit_group_changes'] = "Odeslat zm�ny";
$lang['reset_group_changes'] = "Obnovit zm�ny";
$lang['No_group_name'] = "Mus�te zadat jm�no pro tuto skupinu";
$lang['No_group_moderator'] = "Mus�te zadat moder�tora pro tuto skupinu";
$lang['No_group_mode'] = "Mus�te zadat nastaven� t�to skupiny, otev�en� nebo uzav�en�.";
$lang['No_group_action'] = "Nebyla vybr�na ��dn� akce";
$lang['delete_group_moderator'] = "odstranit moder�tora p�vodn� skupiny ?";
$lang['delete_moderator_explain'] = "Pokud m�n�te moder�tora skupiny, zatrhn�te toto pol��ko k odstran�n� p�vodn�ho moder�tora z t�to skupiny.  V opa�n�m p��pad� se tento u�ivatel stane b�n�m �lenem t�to skupiny.";
$lang['Click_return_groupsadmin'] = "Klikn�te %sude%s k n�vratu do Skupinov� administrace.";
$lang['Select_group'] = "Vyberte skupinu";
$lang['Look_up_group'] = "Vyhledejte skupinu";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Pro�i�t�n� f�ra";
$lang['Forum_Prune_explain'] = "Tato funkce odstran� v�echna t�mata, ke kter�m nebyly p�id�ny p��sp�vky za V�mi zadan� po�et dn�. Pokud nezad�te po�et dn�, pak budou odstran�na v�echna t�mata. nebudou odstran�na t�mata, v nich� b�� hlasov�n� a stejn� tak se neodstran� ozn�men�. Tato t�mata budete muset odstranit ru�n�.";
$lang['Do_Prune'] = "Pro�istit";
$lang['All_Forums'] = "V�echna f�ra";
$lang['Prune_topics_not_posted'] = "Pro�istit t�mata bez odpov�di star��";
$lang['Topics_pruned'] = "T�mata pro�i�t�na";
$lang['Posts_pruned'] = "P��sp�vky pro�i�t�ny";
$lang['Prune_success'] = "Pro�i�t�n� f�r prob�hlo �sp�n�.";


//
// Word censor
//
$lang['Words_title'] = "Slovn� cenzura";
$lang['Words_explain'] = "Z tohoto kontroln�ho panelu m��ete p�idat, zm�nit a odstranit slova, kter� budou automaticky cenzurov�na na va�ich f�rech. Stejn� tak nebude mo�n� zaregistrovat u�ivatelsk� jm�na obsahuj�c� tyto v�razy. Hv�zdi�ku (*) lze pou��t za ��st slova, tak�e nap�. v�raz 'test' vyhled� v�raz 'protestovat', test* potom 'testovat' a *test slovo 'protest'.";
$lang['Word'] = "Slovo";
$lang['Edit_word_censor'] = "Zm��te slovn� cenzuru";
$lang['Replacement'] = "N�hrada";
$lang['Add_new_word'] = "P�idejte nov� slovo";
$lang['Update_word'] = "Nahrajte slovn� cenzuru";

$lang['Must_enter_word'] = "Mus�te vlo�it slovo a jeho n�hradu";
$lang['No_word_selected'] = "K �prav� nebylo vybr�no ��dn� slovo";

$lang['Word_updated'] = "Vybran� slovo bylo �sp�n� nahr�no do cenzury";
$lang['Word_added'] = "Slovo bylo �sp�n� p�id�no do cenzury";
$lang['Word_removed'] = "Cenzurovan� slovo bylo �sp�n� odstran�no";

$lang['Click_return_wordadmin'] = "Klikn�te %szde%s k n�vratu do Administrace slovn� cenzury";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Odtud m��ete zaslat vzkaz jak�mukoliv u�ivateli nebo v�em z vybran� skupiny. Stane se tak zasl�n�m e-mailu na zadanou administr�torskou adresu, p�i�em� u�ivatel�m bude zasl�na slep� kopie. Pokud zas�l�te vzkaz v�t�� skupin�, pros�m, m�jte chvilku strpen� a nezastavujte akci, kdy� se prov�d�. Je zcela b�n�, �e hromadn� korespondence trv� del�� dobu a budete upozorn�ni, kdy� se akce dokon��";
$lang['Compose'] = "Napsat";

$lang['Recipients'] = "P��jemci";
$lang['All_users'] = "V�ichni u�ivatel�";

$lang['Email_successfull'] = "Va�e zpr�va byla odesl�na";
$lang['Click_return_massemail'] = "Klikn�te %szde%s k n�vratu na formul�� Hromadn� korespondence";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administrace hodnocen�";
$lang['Ranks_explain'] = "T�mto formul��em p�id�v�te, m�n�te, prohl��te a ma�ete hodnocen�. M��ete rovn� vytvo�it vlastn� nastaven� hodnocen�, kter� mohou b�t p�i�azena p�es funkci nastaven� u�ivatele.";

$lang['Add_new_rank'] = "P�idat nov� hodnocen�";

$lang['Rank_title'] = "N�zev hodnocen�";
$lang['Rank_special'] = "Nastavit jako zvl�tn� hodnocen�";
$lang['Rank_minimum'] = "Minim�ln� po�et p��sp�vk�";
$lang['Rank_maximum'] = "Maxim�ln� po�et p��sp�vk�";
$lang['Rank_image'] = "Obr�zek hodnocen�";
$lang['Rank_image_explain'] = "Pou�ijte tuto funkci k definov�n� mal�ho obr�zku spojen�ho s dan�m hodnocen�m. Cesta mimo v� phpBB ko�enov� adres�� a n�zev souboru, p�.: images/ranks/images1.gif";

$lang['Must_select_rank'] = "Mus�te vybrat hodnocen�";
$lang['No_assigned_rank'] = "Nebylo zad�no ��dn� zvl�tn� hodnocen�";

$lang['Rank_updated'] = "Hodnocen� bylo �sp�n� zm�n�no";
$lang['Rank_added'] = "Hodnocen� bylo �sp�n� p�id�no";
$lang['Rank_removed'] = "Hodnocen� bylo �sp�n� zru�eno";
$lang['No_update_ranks'] = "Hodnocen� byla �sp�n� odstran�no, ov�em u�ivatelsk� ��ty s t�mto hodnocen�m se nezm�nily. Bude zapot�eb� tato hodnocen� upravit ru�n�";

$lang['Click_return_rankadmin'] = "Klikn�te %szde%s na n�vrat do Administrace hodnocen�";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Spr�va nepovolen�ch u�ivatelsk�ch jmen";
$lang['Disallow_explain'] = "Zde m��ete spravovat u�ivatelsk� jm�na, kter� nebudou povolena k pou�it�.  Nepovolen� u�ivatelsk� jm�na mohou obsahovat \*\.  Upozor�ujeme, �e nebudete moci ur�it ji� registrovan� u�ivatelsk� jm�no. Nejd��ve ho mus�te odstranit a n�sledn� jej nepovolit";

$lang['Delete_disallow'] = "odstranit";
$lang['Delete_disallow_title'] = "Odstranit nepovolen� u�ivatelsk� jm�no";
$lang['Delete_disallow_explain'] = "M��ete odstranit nepovolen� u�ivatelsk� jm�no tak, �e jej vyberete ze seznamu a zm��knete tla��tko Odstranit";

$lang['Add_disallow'] = "P�idat";
$lang['Add_disallow_title'] = "P�idat nepovolen� u�ivatelsk� jm�no";
$lang['Add_disallow_explain'] = "M��ete zak�zat n�kter� nepovolen� u�ivatelsk� jm�na. Tato jm�na si nebude moci ��dn� u�ivatel zaregistrovat. M��ete pou��t i znak \"*\" pro nahrazen� ��sti jm�na";

$lang['No_disallowed'] = "��dn� nepovolen� u�ivatelsk� jm�na";

$lang['Disallowed_deleted'] = "Nepovolen� u�ivatelsk� jm�no bylo �sp�n� odstran�no";
$lang['Disallow_successful'] = "Nepovolen� u�ivatelsk� jm�no bylo �sp�n� p�id�no";
$lang['Disallowed_already'] = "Jm�no, kter� jste zadali, nem��e b�t zak�z�no. Bu� se ji� vyskytuje v tomto seznamu nebo v seznamu cenzurovan�ch slov, nebo existuje toto�n� u�ivatelsk� jm�no";

$lang['Click_return_disallowadmin'] = "Klikn�te %szde%s pro n�vrat do Administrace nastaven� nepovolen�ch u�ivatelsk�ch jmen";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administrace styl�";
$lang['Styles_explain'] = "Zde m��ete p�id�vat, odeb�rat a spravovat styly (vzory a motivy) dostupn� pro va�e u�ivatele";
$lang['Styles_addnew_explain'] = "Tento seznam obsahuje v�echny motivy, kter� jsou dostupn� pro vzory, kter� nyn� m�te. ��sti na tomto seznamu je�t� nebyly nainstalov�ny do odpov�daj�c� datab�ze phpBB. Pro nainstalov�n� klikn�te na instala�n� odkaz vedle zad�n�";

$lang['Select_template'] = "Vybrat vzor";

$lang['Style'] = "Styl";
$lang['Template'] = "Vzor";
$lang['Install'] = "Nainstalovat";
$lang['Download'] = "St�hnout";

$lang['Edit_theme'] = "Upravit motiv";
$lang['Edit_theme_explain'] = "Ve spodn�m formul��i m��ete upravovat nastaven� pro zvolen� vzor";

$lang['Create_theme'] = "Vytvo�it motiv";
$lang['Create_theme_explain'] = "Ve spodn�m formul��i m��ete vytvo�it nov� motiv. P�i zad�v�n� barev (pro kter� pou�ijete hexadecim�ln� hodnoty) neuv�d�jte znak #, tzn. hodnota CCCCCC je platn�, #CCCCCC nikoliv";

$lang['Export_themes'] = "Exportovat motivy";
$lang['Export_explain'] = "V tomto panelu m��ete exportovat zad�n� motivu pro zvolen� vzor. Vyberte vzor ze spodn�ho v�b�ru a skript vytvo�� konfigura�n� soubor motiv a bude jej cht�t ulo�it do vybran�ho adres��e vzor�. Pokud se mu to nepoda��, nab�dne v�m mo�nost soubor st�hnout na disk. Aby se mohl soubor ulo�it, je nutn�, aby byl zapisovateln� p��stup pro p��slu�n� adres��. Pro v�ce informac� se pod�vejte na u�ivatelsk� manu�l k phpBB 2.";

$lang['Theme_installed'] = "Vybran� motiv byl �sp�n� nainstalov�n";
$lang['Style_removed'] = "Vybran� styl byl odstran�n z datab�ze. K pln�mu odstran�n� tohoto stylu ze syst�mu mus�te odstranit p��slu�n� styl z adres��e vzor�.";
$lang['Theme_info_saved'] = "Informace ke zvolen�mu vzoru byly ulo�eny. Te� nastavte povolen� na theme_info.cfg (a tak� vybran�ho adres��i vzor�) na 'jen ke �ten�'";
$lang['Theme_updated'] = "Vybran� motiv byl zm�n�n. Vyexportujte nyn� nastaven� nov�ho motivu";
$lang['Theme_created'] = "Motiv vytvo�en. Vyexportujte nyn� nov� motiv do konfigura�n�ho souboru kv�li bezpe�n�mu ulo�en� nebo pou�it� pro jin� p��pady";

$lang['Confirm_delete_style'] = "Jste si jisti, ,�e chcete odstranit tento styl";

$lang['Download_theme_cfg'] = "Nelze zapisovat do informac� konfigura�n�ho souboru. Klikn�te na spodn� tla��tko ke sta�en� souboru va��m prohl�e�em. A� jej st�hnete, m��ete jej p�esunout do adres��e obsahuj�c�ho soubory vzor�. Pak m��ete zabalit soubory pro distribuci nebo pou��t jinde, kdy� chcete";
$lang['No_themes'] = "Ke vzoru, kter� jste vybrali, se nev�ou ��dn� motivy. Nov� motiv vytvo��te kliknut�m na 'Vytvo�it nov�' na lev� stran� panelu";
$lang['No_template_dir'] = "Nelze otev��t adres�� se vzory. Mo�n�, �e jej nelze p�es server ��st nebo neexistuje";
$lang['Cannot_remove_style'] = "Nelze odstranit vybran� styl, je-li stanoven jako p�vodn� pro f�rum. Zm��te, pros�m,  p�vodn� styl a zkuste to znovu.";
$lang['Style_exists'] = "Jm�no stylu ji� existuje. Pros�m vra�te se a zvolte jin� jm�no.";

$lang['Click_return_styleadmin'] = "Klikn�te %szde%s k n�vratu do Administrace styl�";

$lang['Theme_settings'] = "Nastaven� motivu";
$lang['Theme_element'] = "Sou��st vzoru";
$lang['Simple_name'] = "Jednoduch� n�zev";
$lang['Value'] = "Hodnota";
$lang['Save_Settings'] = "Ulo� nastaven�";

$lang['Stylesheet'] = "Zad�n� stylu CSS";
$lang['Background_image'] = "Obr�zek pozad�";
$lang['Background_color'] = "Barva pozad�";
$lang['Theme_name'] = "Jm�no motivu";
$lang['Link_color'] = "Barva odkazu";
$lang['Text_color'] = "Barva textu";
$lang['VLink_color'] = "Barva nav�t�ven�ho odkazu";
$lang['ALink_color'] = "Barva aktivn�ho odkazu";
$lang['HLink_color'] = "Hover Link Colour";
$lang['Tr_color1'] = "Barva ��dku tabulky 1";
$lang['Tr_color2'] = "Barva ��dku tabulky 2";
$lang['Tr_color3'] = "Barva ��dku tabulky 3";
$lang['Tr_class1'] = "T��da ��dku tabulky 1";
$lang['Tr_class2'] = "T��da ��dku tabulky 2";
$lang['Tr_class3'] = "T��da ��dku tabulky 3";
$lang['Th_color1'] = "Barva titulu tabulky 1";
$lang['Th_color2'] = "Barva titulu tabulky 2";
$lang['Th_color3'] = "Barva titulu tabulky 3";
$lang['Th_class1'] = "Table Header Class 1";
$lang['Th_class2'] = "Table Header Class 2";
$lang['Th_class3'] = "Table Header Class 3";
$lang['Td_color1'] = "Barva bu�ky tabulky 1";
$lang['Td_color2'] = "Barva bu�ky tabulky 2";
$lang['Td_color3'] = "Barva bu�ky tabulky 3";
$lang['Td_class1'] = "Table Cell Class 1";
$lang['Td_class2'] = "Table Cell Class 2";
$lang['Td_class3'] = "Table Cell Class 3";
$lang['fontface1'] = "Vzhled p�sma 1";
$lang['fontface2'] = "Vzhled p�sma 2";
$lang['fontface3'] = "Vzhled p�sma 3";
$lang['fontsize1'] = "Velikost p�sma 1";
$lang['fontsize2'] = "Velikost p�sma 2";
$lang['fontsize3'] = "Velikost p�sma 3";
$lang['fontcolor1'] = "Barva p�sma 1";
$lang['fontcolor2'] = "Barva p�sma 2";
$lang['fontcolor3'] = "Barva p�sma 3";
$lang['span_class1'] = "Rozp�t� t��d 1";
$lang['span_class2'] = "Rozp�t� t��d 2";
$lang['span_class3'] = "Rozp�t� t��dy 3";
$lang['img_poll_size'] = "Velikost obr�zku pro hlasov�n� [v pixelech]";
$lang['img_pm_size'] = "Velikost obr�zku pro soukromou zpr�vu [v pixelech]";


//
// Install Process
//
$lang['Welcome_install'] = "V�tejte v instalaci phpBB 2";
$lang['Initial_config'] = "Z�kladn� nastaven�";
$lang['DB_config'] = "Nastaven� datab�ze";
$lang['Admin_config'] = "Administr�torsk� nastaven�";
$lang['continue_upgrade'] = "Po t�, co jste st�hli konfigura�n� soubor na v� disk m��ete spodn�m tla��tkem 'Pokra�ovat v instalaci nov�j�� verze'.Po�kejte s nahr�n�m konfigura�n�ho souboru dokud nen� ukon�ena instalace nov�j�� verze.";
$lang['upgrade_submit'] = "Pokra�ujte v instalov�n� nov�j�� verze";

$lang['Installer_Error'] = "B�hem instalace se objevila chyba";
$lang['Previous_Install'] = "Byla nalezena p�ede�l� instalace";
$lang['Install_db_error'] = "B�hem nahr�v�n� nov�j�� instalace datab�ze se objevila chyba";

$lang['Re_install'] = "Va�e p�ede�l� instalace je st�le aktivn�. <br /><br />Pokud si p�ejete p�einstalovat phpBB 2, pokra�ujte tla��tkem 'Ano'. Uv�domte se, pros�m, �e v tomto p��pad� se zni�� ve�ker� data; nedojde k z�lohov�n�. Administr�torsk� u�ivatelsk� jm�no a heslo, kter� jste pou��vali k nalogov�n� budou po reinstalaci p�ed�l�ny, ��dn� dal�� nastaven� nebudou zachov�na.<br /><br />Zamyslete se pozorn� p�ed zm��knut�m tla��tka 'Ano'!";

$lang['Inst_Step_0'] = "Thank you for choosing phpBB 2. In order to complete this install please fill out the details requested below. Please note that the database you install into should already exist. If you are installing to a database that uses ODBC, e.g. MS Access you should first create a DSN for it before proceeding.";

$lang['Start_Install'] = "Za��t instalaci";
$lang['Finish_Install'] = "Ukon�it instalaci";

$lang['Default_lang'] = "P�vodn� jazyk boardu";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "N�zev va�� datab�ze";
$lang['DB_Username'] = "U�ivatelsk� jm�no datab�ze";
$lang['DB_Password'] = "Heslo datab�ze";
$lang['Database'] = "Va�e datab�ze";
$lang['Install_lang'] = "Vyberte jazyk pro instalaci";
$lang['dbms'] = "Typ datab�ze";
$lang['Table_Prefix'] = "P�edpona pro tabulky v datab�zi";
$lang['Admin_Username'] = "Administr�torsk� u�iv. jm�no";
$lang['Admin_Password'] = "Administr�torsk� heslo";
$lang['Admin_Password_confirm'] = "Administr�torsk� heslo [ Potvrdit ]";

$lang['Inst_Step_2'] = "Va�e u�ivatelsk� jm�no bylo vytvo�eno. V tomto momentu je z�kladn� instalace u konce. Nyn� budete p�eneseni na dal�� ��st, kter� v�m umo�n� dal�� administraci nov� instalace. Zkontrolujte, pros�m, detaily Obecn�ch preferenc� a ud�lejte nezbytn� zm�ny. D�ky, �e jste si vybrali phpBB 2.";

$lang['Unwriteable_config'] = "Na v� konfigura�n� soubor nelze nyn� zapisovat. Kopie tohoto souboru bude sta�ena, kdy� kliknete tla��tko dole. Posl�ze nahrajte tento soubor do adres��e phpBB 2. Pot� se p�ihla�te jako administr�tor s heslem, kter� jste zadali v p�edchoz�m formul��i a nav�tivte administr�torsk� centrum (odkaz se objev� ve spodn� ��sti ka�d� str�nky pot�, co se nalogujete) a zkontrolujte obecnou konfiguraci. D�ky, �e jste si vybrali phpBB 2.";
$lang['Download_config'] = "St�hnout konfigura�n� soubor";

$lang['ftp_choose'] = "Vyberte si zp�sob st�hnut�";
$lang['ftp_option'] = "<br />Vzhledem k tomu, �e je v t�to verzi umo�n�n roz���en� p�enos php m��e v�m b�t d�n prostor nejd��ve p�en�st v� konfigura�n� soubor automaticky.";
$lang['ftp_instructs'] = "Vybrali jste automatickou volbu p�enosu. Zadejte, pros�m, informace k uskute�n�n� tohoto procesu. Pros�m, pamatujte na to, �e cesta p�enosu m� b�t p�esn� takov�, jakou byste zad�vali cestu p�es jak�hokoliv b�n�ho klienta.";
$lang['ftp_info'] = "Zadejte va�e informace p�enosu FTP";
$lang['Attempt_ftp'] = "Pokus o p�enos konfigura�n�ho souboru na m�sto";
$lang['Send_file'] = "Po�lete mi soubor a j� jej p�enesu s�m";
$lang['ftp_path'] = "Cesta FTP na phpBB";
$lang['ftp_username'] = "Va�e u�ivatelsk� jm�no FTP";
$lang['ftp_password'] = "Va�e heslo FTP";
$lang['Transfer_config'] = "Za��t p�enos";
$lang['NoFTP_config'] = "Pokus p�en�st soubor na m�sto selhal. Pros�m, st�hn�te a pak nahrajte konfigura�n� soubor sami.";

$lang['Install'] = "Instalovat";
$lang['Upgrade'] = "Inovovat verzi";

$lang['Install_Method'] = "Vyberte druh instalace";

$lang['Install_No_Ext'] = "Nastaven� php na va�em serveru nepodporuje datab�zi, kterou jste zvolili";

$lang['Install_No_PCRE'] = "phpBB2 po�aduje the Perl-Compatible Regular Expressions Module pro php, co� va�e konfigurace php z�ejm� nepodporuje!";

//
// That's all Folks!
// -------------------------------------------------


?>