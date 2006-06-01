<?php

/***************************************************************************
 *                            lang_admin.php [Polish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1 2003/04/20 09:27:26 bob Exp $
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
// Translation by Mike Paluchowski and Radek Kmiecicki
// http://www.phpbb.pl/
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Og�lne";
$lang['Users'] = "U�ytkownicy";
$lang['Groups'] = "Grupy";
$lang['Forums'] = "Fora";
$lang['Styles'] = "Style";

$lang['Configuration'] = "Konfiguracja";
$lang['Permissions'] = "Zezwolenia";
$lang['Manage'] = "Zarz�dzaj";
$lang['Disallow'] = "Zabro� nazwy";
$lang['Prune'] = "Czyszczenie";
$lang['Mass_Email'] = "Mas. Korespondencja";
$lang['Ranks'] = "Rangi";
$lang['Smilies'] = "U�mieszki";
$lang['Ban_Management'] = "Banicja";
$lang['Word_Censor'] = "Cenzura S��w";
$lang['Export'] = "Eksport";
$lang['Create_new'] = "Utw�rz";
$lang['Add_new'] = "Dodaj";
$lang['Backup_DB'] = "Kopia Zapasowa";
$lang['Restore_DB'] = "Odtwarzanie";


//
// Index
//
$lang['Admin'] = "Administracja";
$lang['Not_admin'] = "Nie masz autoryzacji do administracji tym forum";
$lang['Welcome_phpBB'] = "Witamy w phpBB";
$lang['Admin_intro'] = "Dzi�kujemy, �e wybra�e� phpBB do obs�ugi Twojego forum. Ten ekran przedstawia kr�tki przegl�d r�norodnych danych statystycznych, dotycz�cych forum. Mo�esz wr�ci� do tej strony klikaj�c odno�nik <u>Indeks Administracji</u> na lewym panelu. Aby powr�ci� do strony g��wnej forum kliknij logo phpBB na w lewym panelu. Inne odno�niki po lewej stronie ekranu daj� dost�p do narz�dzi kontroluj�cych ka�dy aspekt zachowania forum. Ka�de z nich zawiera osobne instrukcje u�ycia.";
$lang['Main_index'] = "Str. G��wna Forum";
$lang['Forum_stats'] = "Statystyki Forum";
$lang['Admin_Index'] = "Indeks Administracji";
$lang['Preview_forum'] = "Podgl�d Forum";

$lang['Click_return_admin_index'] = "Kliknij %sTutaj%s aby powr�ci� do Indeksu Administracji";

$lang['Statistic'] = "Statystyki";
$lang['Value'] = "Warto��";
$lang['Number_posts'] = "Liczba post�w";
$lang['Posts_per_day'] = "Post�w dziennie";
$lang['Number_topics'] = "Liczba temat�w";
$lang['Topics_per_day'] = "Temat�w dziennie";
$lang['Number_users'] = "Liczba u�ytkownik�w";
$lang['Users_per_day'] = "U�ytk. dziennie";
$lang['Board_started'] = "Start Forum";
$lang['Avatar_dir_size'] = "Katalog Emblemat�w";
$lang['Database_size'] = "Baza Danych";
$lang['Gzip_compression'] ="Kompresja Gzip";
$lang['Not_available'] = "Niedost�pne";

$lang['ON'] = "TAK"; // This is for GZip compression
$lang['OFF'] = "NIE"; 


//
// DB Utils
//
$lang['Database_Utilities'] = "Narz�dzia Bazy Danych";

$lang['Restore'] = "Przywracanie";
$lang['Backup'] = "Kopia Zapasowa";
$lang['Restore_explain'] = "Tutaj przeprowadzone zostanie odtwarzanie wszystkich tabeli phpBB z zapisanego pliku. Je�eli tw�j serwer na to pozwala mo�esz poda� plik skompresowany w gzip a zostanie on automatycznie rozpakowany. <b>UWAGA</b> Nadpisane zostan� wszystkie istniej�ce dane. Proces przywracania mo�e d�ugo potrwa� i do jego zako�czenia nie wolno odej�� z tej strony.";
$lang['Backup_explain'] = "Tutaj mo�esz utworzy� kopi� zapasow� wszystkich danych phpBB. Je�eli masz dodatkowo utworzone tabele w tej samej bazie danych co phpBB, kt�re chcia�by� skopiowa� wpisz ich nazwy oddzielone przecinkami w pole Dodatkowe Tabele. Je�eli Tw�j serwer ma tak� funkcj� mo�esz tak�e skompresowa� plik w gzip aby zmniejszy� jego rozmiar przed �ci�gni�ciem.";

$lang['Backup_options'] = "Opcje Kopii";
$lang['Start_backup'] = "Zacznij Kopiowanie";
$lang['Full_backup'] = "Pe�na Kopia";
$lang['Structure_backup'] = "Tylko Struktura";
$lang['Data_backup'] = "Tylko Dane";
$lang['Additional_tables'] = "Dodatkowe Tabele";
$lang['Gzip_compress'] = "Skompresuj plik w Gzip";
$lang['Select_file'] = "Wybierz plik";
$lang['Start_Restore'] = "Zacznij Odtwarzanie";

$lang['Restore_success'] = "Baza Danych zosta�a odtworzona.<br /><br />Twoje forum powinno ju� wr�ci� do stanu sprzed wykonania kopii.";
$lang['Backup_download'] = "�ci�ganie rozpocznie si� lada chwila, zaczekaj";
$lang['Backups_not_supported'] = "Przepraszamy, ale kopie zapasowe nie s� obecnie obs�ugiwane dla Twojego systemu";

$lang['Restore_Error_uploading'] = "B��d w wysy�aniu pliku z danymi";
$lang['Restore_Error_filename'] = "Problem z nazw� pliku, spr�buj wys�a� inny";
$lang['Restore_Error_decompress'] = "Nie mog� zdekompresowa� pliku, wy�lij sam plik tekstowy";
$lang['Restore_Error_no_file'] = "Nie wys�ano �adnego pliku";


//
// Auth pages
//
$lang['Select_a_User'] = "Wybierz U�ytkownika";
$lang['Select_a_Group'] = "Wybierz Grup�";
$lang['Select_a_Forum'] = "Wybierz Forum";
$lang['Auth_Control_User'] = "Kontrola Zezwole� U�ytkownik�w"; 
$lang['Auth_Control_Group'] = "Kontrola Zezwole� Grup"; 
$lang['Auth_Control_Forum'] = "Kontrola Zezwole� For"; 
$lang['Look_up_User'] = "Wybierz U�ytkownika"; 
$lang['Look_up_Group'] = "Wybierz Grupy"; 
$lang['Look_up_Forum'] = "Wybierz Forum"; 

$lang['Group_auth_explain'] = "Tutaj mo�esz zmienia� zezwolenia i status moderatora przydzielony ka�dej grupie u�ytkownik�w. Nie zapomnij zmieniaj�c ustawienia, �e indywidualne uprawnienia mog� nadal zezwala� u�ytkownikowi na dost�p do for itp. Zostaniesz ostrze�ony gdy tak si� stanie.";
$lang['User_auth_explain'] = "Tutaj mo�esz zmienia� zezwolenia i status moderatora dla ka�dego u�ytkownika. Nie zapomnij zmieniaj�c ustawienia, �e uprawnienia grupowe mog� nadal zezwala� u�ytkownikowi na dost�p do for itp. Zostaniesz ostrze�ony gdy tak si� stanie.";
$lang['Forum_auth_explain'] = "Tutaj mo�esz zmieni� poziomy autoryzacji dla ka�dego forum. Masz do dyspozycji metod� prost� i zaawansowan�, z kt�rych druga oferuje wi�ksze mo�liwo�ci kontroli ustawie�. Pami�taj, �e zmiana ustawie� dotycz�cych for zadecyduje o tym, co u�ytkownicy b�d� mogli na nich robi�.";

$lang['Simple_mode'] = "Tryb Prosty";
$lang['Advanced_mode'] = "Tryb Zaawansowany";
$lang['Moderator_status'] = "Status Moderatora";

$lang['Allowed_Access'] = "Dost�p Zezwolony";
$lang['Disallowed_Access'] = "Dost�p Zabroniony";
$lang['Is_Moderator'] = "Moderator";
$lang['Not_Moderator'] = "Nie Moderator";

$lang['Conflict_warning'] = "Ostrze�enie o Konflikcie Autoryzacji";
$lang['Conflict_access_userauth'] = "Ten u�ytkownik nadal ma dost�p do tego forum dzi�ki uprawnieniom grupowym. Aby w pe�ni pozbawi� go tych uprawnie� musisz zmieni� ustawienia danej grupy, lub go z niej usun��. Grupy daj�ce mu prawa (i fora, kt�rych to dotyczy) s� wypisane poni�ej.";
$lang['Conflict_mod_userauth'] = "Ten u�ytkownik nadal ma prawa moderatora dzi�ki uprawnieniom grupowym. Aby w pe�ni pozbawi� go tych uprawnie� musisz zmieni� ustawienia danej grupy, lub go z niej usun��. Grupy daj�ce mu prawa (i fora, kt�rych to dotyczy) s� wypisane poni�ej.";

$lang['Conflict_access_groupauth'] = "Poni�szy u�ytkownik (lub u�ytkownicy) nadal ma dost�p do tego forum dzi�ki ustawieniom indywidualnym. Aby pozbawi� go tych uprawnie� musisz zmieni� ich zezwolenia. U�ytkownicy o takich prawach (i fora, kt�rych to dotyczy) s� wypisane poni�ej.";
$lang['Conflict_mod_groupauth'] = "Poni�szy u�ytkownik (lub u�ytkownicy) nadal ma prawa moderatora na tym forum dzi�ki ustawieniom indywidualnym. Aby pozbawi� go tych uprawnie� musisz zmieni� ich zezwolenia. U�ytkownicy o takich prawach (i fora, kt�rych to dotyczy) s� wypisane poni�ej.";

$lang['Public'] = "Publiczne";
$lang['Private'] = "Prywatne";
$lang['Registered'] = "Zarejestrowani";
$lang['Administrators'] = "Administratorzy";
$lang['Hidden'] = "Ukryte";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "WSZYSCY";
$lang['Forum_REG'] = "ZAREJESTR.";
$lang['Forum_PRIVATE'] = "PRYWATNE";
$lang['Forum_MOD'] = "MODERAT.";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Widoczny";
$lang['Read'] = "Czytanie";
$lang['Post'] = "Pisanie";
$lang['Reply'] = "Odpowiedzi";
$lang['Edit'] = "Edycja";
$lang['Delete'] = "Usuwanie";
$lang['Sticky'] = "Przyklejone";
$lang['Announce'] = "Og�oszenia"; 
$lang['Vote'] = "G�osowanie";
$lang['Pollcreate'] = "Tworzenie ankiet";

$lang['Permissions'] = "Zezwolenia";
$lang['Simple_Permission'] = "Proste Zezwolenia";

$lang['User_Level'] = "Poziom u�ytkownika"; 
$lang['Auth_User'] = "U�ytkownik";
$lang['Auth_Admin'] = "Administrator";
$lang['Group_memberships'] = "Cz�onkostwo w grupach";
$lang['Usergroup_members'] = "Tak grupa ma nast�puj�cyh cz�onk�w";

$lang['Forum_auth_updated'] = "Zezwolenia For zosta�y zaktualizowane";
$lang['User_auth_updated'] = "Zezwolenia U�ytkownik�w zosta�y zaktualizowane";
$lang['Group_auth_updated'] = "Zezwolenia Grup zosta�y zaktualizowane";

$lang['Auth_updated'] = "Zezwolenia zosta�y zmienione";
$lang['Click_return_userauth'] = "Kliknij %sTutaj%s aby powr�ci� do Zezwole� U�ytkownik�w";
$lang['Click_return_groupauth'] = "Kliknij %sTutaj%s aby powr�ci� do Zezwole� Grup";
$lang['Click_return_forumauth'] = "Kliknij %sTutaj%s aby powr�ci� do Zezwole� For";


//
// Banning
//
$lang['Ban_control'] = "Kontrola Banicji";
$lang['Ban_explain'] = "Tutaj mozesz kontrolowa� banicje u�ytkownik�w. Uzyskasz to przez banowanie danego u�ytkownika, zakresu numer�w IP lub host�w. Dzi�ki tym metodom u�ytkownik nie dostanie si� nawet na stron� g��wn�. Aby zapobiec rejestracji pod innymi nazwami mo�esz tak�e zbanowa� konkretny adres email. Pami�taj jednak, �e zbanowanie adresu email nie uniemo�liwia uczestnictwa w dzia�alno�ci forum, to tego s�u�� dwie pierwsze metody.";
$lang['Ban_explain_warn'] = "Pami�taj, �e wpisanie zakresu adres�w IP oznacza dopisanie do listy ka�dego adresu z podanego zakresu. Gdzie tylko b�dzie to mo�liwe dodawane b�d� znaki zamienne, ograniczaj�ce liczb� wpis�w. Je�eli naprawd� musisz wpisa� zakres, staraj si� by by� najmniejszy lub lepiej podaj konkretne adresy.";

$lang['Select_username'] = "Wybierz Nazw� U�ytkownika";
$lang['Select_ip'] = "Wybierz IP";
$lang['Select_email'] = "Wybierz adres Email";

$lang['Ban_username'] = "Zbanuj jednego lub wielu konkretnych u�ytkownik�w";
$lang['Ban_username_explain'] = "Mo�esz zbanowa� wielu u�ytkownik�w jednocze�nie korzystaj�c z kombinacji przycisk�w myszy i klawiatury odpowiednich dla twojego komputera i przegl�darki";

$lang['Ban_IP'] = "Zbanuj jeden lub wi�cej adres�w IP lub host�w";
$lang['IP_hostname'] = "Adresy IP lub hosty";
$lang['Ban_IP_explain'] = "Aby poda� kilka adres�w IP lub host�w oddziel je przecinkami. Aby okre�li� zakres adres�w IP oddziel pocz�tkowy i ko�cowy my�lnikiem (-), znakiem zamiennym jest *.";

$lang['Ban_email'] = "Zbanuj jeden lub wi�cej adres�w email";
$lang['Ban_email_explain'] = "Aby poda� wi�cej ni� jeden adres email, oddziel je przecinkami. Znakiem zamiennym jest *, np. *@hotmail.com.";

$lang['Unban_username'] = "Odbanuj jednego lub wi�cej u�ytkownik�w";
$lang['Unban_username_explain'] = "Mo�esz odbanowa� wielu u�ytkownik�w jednocze�nie korzystaj�c z kombinacji przycisk�w myszy i klawiatury odpowiednich dla twojego komputera i przegl�darki.";

$lang['Unban_IP'] = "Odbanuj jeden lub wi�cej adres�w IP";
$lang['Unban_IP_explain'] = "Mo�esz odbanowa� wiele adres�w IP jednocze�nie korzystaj�c z kombinacji przycisk�w myszy i klawiatury odpowiednich dla twojego komputera i przegl�darki.";

$lang['Unban_email'] = "Odbanuj jeden lub wi�cej adres�w email";
$lang['Unban_email_explain'] = "Mo�esz odbanowa� wiele adres�w email jednocze�nie korzystaj�c z kombinacji przycisk�w myszy i klawiatury odpowiednich dla twojego komputera i przegl�darki.";

$lang['No_banned_users'] = "Brak zbanowanych nazw";
$lang['No_banned_ip'] = "Brak zbanowanych adres�w IP";
$lang['No_banned_email'] = "Brak zbanowanych adres�w email";

$lang['Ban_update_sucessful'] = "Lista banicji zosta�a zaktualizowana";
$lang['Click_return_banadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Kontroli Banicji";


//
// Configuration
//
$lang['General_Config'] = "Ustawienia G��wne";
$lang['Config_explain'] = "Poni�szy formularz pozwala dostosowa� wszystkie g��wne opcje forum. Szczeg�owa konfiguracja For i U�ytkownik�w jest dost�pna z odno�nik�w po lewej stronie.";

$lang['Click_return_config'] = "Kliknij %sTutaj%s aby powr�ci� do Ustawie� G��wnych";

$lang['General_settings'] = "Generalne Ustawienia Forum";
$lang['Server_name'] = "Nazwa Domeny";
$lang['Server_name_explain'] = "Nazwa domeny, z kt�rej dzia�a to forum";
$lang['Script_path'] = "�cie�ka skryptu";
$lang['Script_path_explain'] = "�cie�ka pod kt�r� znajduje si� phpBB2 relatywnie do nazwy domeny";
$lang['Server_port'] = "Port Serwera";
$lang['Server_port_explain'] = "Port na kt�rym dzia�a tw�j serwer, zwykle 80, zmie� tylko je�li jest inny";
$lang['Site_name'] = "Nazwa Strony";
$lang['Site_desc'] = "Opis Strony";
$lang['Board_disable'] = "Wy��cz forum";
$lang['Board_disable_explain'] = "To uczyni forum niedost�pnym dla u�ytkownik�w. Pozosta� w tym czasie zalogowany, inaczej nie b�dziesz m�g� si� powt�rnie zalogowa�!";
$lang['Acct_activation'] = "W��cz aktywacj� kont";
$lang['Acc_None'] = "Brak"; // These three entries are the type of activation
$lang['Acc_User'] = "U�ytkownik";
$lang['Acc_Admin'] = "Admin";

$lang['Abilities_settings'] = "Podstawowe Ustawienia Forum i U�ytkownik�w";
$lang['Max_poll_options'] = "Maksymalna liczba opcji ankiety";
$lang['Flood_Interval'] = "Interwa� Anty-Floodowy";
$lang['Flood_Interval_explain'] = "Ilo�� sekund, zanim mo�na wys�a� nowy post"; 
$lang['Board_email_form'] = "Email przez forum";
$lang['Board_email_form_explain'] = "U�ytkownicy wysy�aj� email'e przez forum";
$lang['Topics_per_page'] = "Temat�w na Stron�";
$lang['Posts_per_page'] = "Post�w na Stron�";
$lang['Hot_threshold'] = "Post�w do okre�lenia Popularny";
$lang['Default_style'] = "Domy�lny Styl";
$lang['Override_style'] = "Zignoruj Styl U�ytkownika";
$lang['Override_style_explain'] = "Zamienia styl u�ytkownika na domy�lny";
$lang['Default_language'] = "Domy�lny J�zyk";
$lang['Date_format'] = "Format Daty";
$lang['System_timezone'] = "Strefa Czasowa Systemu";
$lang['Enable_gzip'] = "W��cz Komprecj� GZip";
$lang['Enable_prune'] = "W��cz Czyszczenie Forum";
$lang['Allow_HTML'] = "Zezw�l na HTML";
$lang['Allow_BBCode'] = "Zezw�l na BBCode";
$lang['Allowed_tags'] = "Dozwolone tagi HTML";
$lang['Allowed_tags_explain'] = "Oddziel znaczniki przecinkami";
$lang['Allow_smilies'] = "Zezw�l na U�mieszki";
$lang['Smilies_path'] = "�cie�ka dost�pu do U�mieszk�w";
$lang['Smilies_path_explain'] = "�cie�ka od katalogu g��wnego forum, np. images/smilies";
$lang['Allow_sig'] = "Zezw�l na Pospisy";
$lang['Max_sig_length'] = "Maksymalna d�ugo�� podpisu";
$lang['Max_sig_length_explain'] = "Maksymalna ilo�� znak�w w podpisie u�ytkownika";
$lang['Allow_name_change'] = "Zezw�l na zmiany Nazw U�ytkownika";

$lang['Avatar_settings'] = "Ustawienia Emblemat�w";
$lang['Allow_local'] = "W��cz galeri� emblemat�w";
$lang['Allow_remote'] = "W��cz zdalne emblematy";
$lang['Allow_remote_explain'] = "Emblematy b�d� wy�wietlane z innych serwer�w";
$lang['Allow_upload'] = "W��cz wysy�anie emblemat�w";
$lang['Max_filesize'] = "Maksymalny rozmiar pliku emblematu";
$lang['Max_filesize_explain'] = "Dla obrazk�w wysy�anych na serwer";
$lang['Max_avatar_size'] = "Maksymalne Rozmiary Emblematu";
$lang['Max_avatar_size_explain'] = "(Wysoko�� x Szeroko�� w pikselach)";
$lang['Avatar_storage_path'] = "�cie�ka Zapisu Emblemat�w";
$lang['Avatar_storage_path_explain'] = "�cie�ka od katalogu g��wnego phpBB, np. images/avatars";
$lang['Avatar_gallery_path'] = "�cie�ka Galerii Emblemat�w";
$lang['Avatar_gallery_path_explain'] = "�cie�ka od katalogu g��wnego phpBB dla wcze�niej �adowanych plik�w, np. images/avatars/gallery";

$lang['COPPA_settings'] = "Ustawienia COPPA";
$lang['COPPA_fax'] = "Numer Faxu COPPA";
$lang['COPPA_mail'] = "Adres Pocztowy COPPA";
$lang['COPPA_mail_explain'] = "To jest adres pocztowy, pod kt�ry rodzice b�d� przesy�ali formularze rejestracji COPPA";

$lang['Email_settings'] = "Ustawienia Email'i";
$lang['Admin_email'] = "Adres Email Admina";
$lang['Email_sig'] = "Podpis pod Email";
$lang['Email_sig_explain'] = "Ten tekst b�dzie dodawany do ka�dej wiadomo�ci wysy�anej przez forum";
$lang['Use_SMTP'] = "U�ywaj Serwera SMTP";
$lang['Use_SMTP_explain'] = "Powiedz tak, je�li chcesz aby wiadomo�ci email by�y przesy�ane przez odpowiedni serwer zamiast lokalnej funkcji mail";
$lang['SMTP_server'] = "Adres Serwera SMTP";
$lang['SMTP_username'] = "Nazwa U�ytkownika SMTP";
$lang['SMTP_username_explain'] = "Wpisz nazw� tylko je�li tw�j serwer smtp wymaga tego";
$lang['SMTP_password'] = "Has�o SMTP";
$lang['SMTP_password_explain'] = "Wpisz has�o tylko je�li tw�j serwer smtp wymaga tego";

$lang['Disable_privmsg'] = "Prywatne Wiadomo�ci";
$lang['Inbox_limits'] = "Maks. wiadomo�ci w Skrzynce";
$lang['Sentbox_limits'] = "Maks. wiadomo�ci w Wys�anych";
$lang['Savebox_limits'] = "Maks. wiadomo�ci w Zapisanych";

$lang['Cookie_settings'] = "Ustawienia Cookies"; 
$lang['Cookie_settings_explain'] = "Kontroluj� w jaki spos�b zdefiniowane zostanie cookie wys�ane do przegl�darki. W wi�kszo�ci przypadk�w powinny wystarczy� warto�ci domy�lne. Je�li zechcesz je zmieni� r�b to ostro�nie, nieprawid�owe ustawienia mog� uniemo�liwi� logowanie.";
$lang['Cookie_domain'] = "Domena Cookie";
$lang['Cookie_name'] = "Nazwa Cookie";
$lang['Cookie_path'] = "�cie�ka Cookie";
$lang['Cookie_secure'] = "Bezpieczne Cookie [ https ]";
$lang['Cookie_secure_explain'] = "Je�li tw�j serwer dzia�a na SSL ustaw to na w��czone, inaczej pozostaw wy��czone";
$lang['Session_length'] = "D�ugo�� Sesji [ sekundy ]";

//
// Forum Management
//
$lang['Forum_admin'] = "Administracja Forum";
$lang['Forum_admin_explain'] = "W tym miejscu mo�esz dodawa�, usuwa�, modyfikowa�, zmienia� kolejno�� i ponownie synchronizowa� kategorie i fora.";
$lang['Edit_forum'] = "Edytuj forum";
$lang['Create_forum'] = "Nowe Forum";
$lang['Create_category'] = "Nowa Kategoria";
$lang['Remove'] = "Usu�";
$lang['Action'] = "Dzia�anie";
$lang['Update_order'] = "Aktualizuj Porz�dek";
$lang['Config_updated'] = "Konfiguracja Forum Zosta�a Zaktualizowana";
$lang['Edit'] = "Edycja";
$lang['Delete'] = "Usu�";
$lang['Move_up'] = "W g�r�";
$lang['Move_down'] = "W d�";
$lang['Resync'] = "Synch.";
$lang['No_mode'] = "Nie okre�lono trybu";
$lang['Forum_edit_delete_explain'] = "Poni�szy formularz pozwoli zmieni� wszystkie podstawowe opcje forum. Aby zmieni� szczeg�owe ustawienia U�ytkownik�w i For skorzystaj z odno�nik�w po lewej.";

$lang['Move_contents'] = "Przenie� ca�� zawarto��";
$lang['Forum_delete'] = "Usu� Forum";
$lang['Forum_delete_explain'] = "Poni�szy formularz pozwoli na usuni�cie forum (lub kategorii) i zdecydowanie co zrobi� z tematami (lub forami), kt�re by�y w nim zawarte.";

$lang['Forum_settings'] = "Generalne Ustawienia Forum";
$lang['Forum_name'] = "Nazwa Forum";
$lang['Forum_desc'] = "Opis";
$lang['Forum_status'] = "Status Forum";
$lang['Forum_pruning'] = "Automatyczne Czyszczenie";

$lang['prune_freq'] = 'Sprawd� wiek tematu co';
$lang['prune_days'] = "Usu� tematy, w kt�rych nie pisano nic przez";
$lang['Set_prune_data'] = "W��czy�e� automatyczne czyszczenie dla tego forum ale nie okresli�e� jego parametr�w. Wr�� i wpisz wszystkie dane.";

$lang['Move_and_Delete'] = "Przenie� i Usu�";

$lang['Delete_all_posts'] = "Usu� wszystkie posty";
$lang['Nowhere_to_move'] = "Nie ma dok�d przenie��";

$lang['Edit_Category'] = "Edytuj Kategori�";
$lang['Edit_Category_explain'] = "U�yj tego formularza do zmiany nazwy kategorii.";

$lang['Forums_updated'] = "Dane dotycz�ce For i Kategorii zosta�y zaktualizowane";

$lang['Must_delete_forums'] = "Musisz usun�� wszystkie fora przed usuni�ciem tej kategorii";

$lang['Click_return_forumadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji Forum";


//
// Smiley Management
//
$lang['smiley_title'] = "Edycja U�mieszk�w";
$lang['smile_desc'] = "Na tej stronie mo�esz dodawa�, usuwa� i zmienia� ikony emocji lub u�mieszki, kt�re u�ytkownicy mog� u�ywa� w swoich postach i prywatnych wiadomo�ciach.";

$lang['smiley_config'] = "Konfiguracja U�mieszku";
$lang['smiley_code'] = "Kod U�mieszku";
$lang['smiley_url'] = "Plik Obrazka U�mieszku";
$lang['smiley_emot'] = "Emocja U�mieszku";
$lang['smile_add'] = "Nowy U�mieszek";
$lang['Smile'] = "U�miech";
$lang['Emotion'] = "Emocja";

$lang['Select_pak'] = "Wybierz Plik Paczki (.pak)";
$lang['replace_existing'] = "Zamie� Istniej�cy U�miech";
$lang['keep_existing'] = "Zachowaj Istniej�cy U�miech";
$lang['smiley_import_inst'] = "Powiniene� rozpakowa� paczk� u�mieszk�w i wys�a� pliki do odpowiedniego katalogu U�mieszk�w. Potem ustaw odpowiednio poni�szy formularz i importuj paczk�.";
$lang['smiley_import'] = "Import Paczki U�mieszk�w";
$lang['choose_smile_pak'] = "Wybierz Plik .pak Paczki U�mieszk�w";
$lang['import'] = "Importuj U�mieszki";
$lang['smile_conflicts'] = "Co zrobi� w przypadku konflikt�w";
$lang['del_existing_smileys'] = "Usu� istniej�ce u�mieczki przed importem";
$lang['import_smile_pack'] = "Importuj Paczk�";
$lang['export_smile_pack'] = "Utw�rz Paczk�";
$lang['export_smiles'] = "Aby utworzy� paczk� u�mieszk�w z obecnie zainstalowanych kliknij %sTutaj%s aby �ci�gn�� plik .pak u�mieszk�w. Nazwij go odpowiednio zachowuj�c rozszerzenie .pak. Potem spakuj ten plik razem z obrazkami u�mieszk�w w archiwum zip.";

$lang['smiley_add_success'] = "U�mieszek zosya� dodany";
$lang['smiley_edit_success'] = "U�mieszek zosta� zaktualizowany";
$lang['smiley_import_success'] = "Paczka U�mieszk�w zosta�a zaimportowana!";
$lang['smiley_del_success'] = "U�mieszek zosta� usuni�ty";
$lang['Click_return_smileadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji U�mieszkami";


//
// User Management
//
$lang['User_admin'] = "Administracja U�ytkownikami";
$lang['User_admin_explain'] = "Tutaj mo�esz zmieni� informacje o u�ytkowniku i ustawione przez niego opcje. Aby zmieni� jego prawa dost�pu skorzystaj z systemu zmiany zezwole�.";

$lang['Look_up_user'] = "Poka� u�ytkownika";

$lang['Admin_user_fail'] = "Nie mo�na by�o zaktualizowa� profilu u�ytkownika.";
$lang['Admin_user_updated'] = "Profil u�ytkownika zosta� zaktualizowany.";
$lang['Click_return_useradmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji U�ytkownikami";

$lang['User_delete'] = "Usu� tego u�ytkownika";
$lang['User_delete_explain'] = "Kliknij tutaj aby usun�� tego u�ytkownika, nie mo�na tego cofn��.";
$lang['User_deleted'] = "U�ytkownik zosta� usuni�ty.";

$lang['User_status'] = "U�ytkownik jest aktywny";
$lang['User_allowpm'] = "Mo�e wysy�a� Prywatne Wiadomo�ci";
$lang['User_allowavatar'] = "Mo�e pokazywa� Emblemat";

$lang['Admin_avatar_explain'] = "Tutaj mo�esz zobaczy� i usun�� obecny Emblemat u�ytkownika.";

$lang['User_special'] = "Specjalne pola administratora";
$lang['User_special_explain'] = "Tych p�l nie mog� zmienia� sami u�ytkownicy. Mo�esz tutaj zmodyfikowa� ich status i inne opcje dotycz�ce ich mo�liwo�ci dzia�ania.";


//
// Group Management
//
$lang['Group_administration'] = "Administracja Grupami";
$lang['Group_admin_explain'] = "Z tego panelu mo�esz administrowa� wszystkimi grupami u�ytkownik�w; mo�esz je usuwa�, tworzy� i zmienia� ustawienia. Mo�esz wybiera� moderator�w, zmienia� na otwarte lub zamkni�te i modyfikowa� nazw� oraz opis.";
$lang['Error_updating_groups'] = "Wyst�pi� b��d podczas aktualizacji grup";
$lang['Updated_group'] = "Grupa zosta�a zaktualizowana";
$lang['Added_new_group'] = "Nowa grupa zosta�a utworzona";
$lang['Deleted_group'] = "Grupa zosta�a usuni�ta";
$lang['New_group'] = "Utw�rz now� grup�";
$lang['Edit_group'] = "Edytuj grup�";
$lang['group_name'] = "Nazwa Grupy";
$lang['group_description'] = "Opis Grupy";
$lang['group_moderator'] = "Moderator Grupy";
$lang['group_status'] = "Status Grupy";
$lang['group_open'] = "Otwarta";
$lang['group_closed'] = "Zamkni�ta";
$lang['group_hidden'] = "Ukryta";
$lang['group_delete'] = "Usu� Grup�";
$lang['group_delete_check'] = "Usu� t� grup�";
$lang['submit_group_changes'] = "Wy�lij Zmiany";
$lang['reset_group_changes'] = "Anuluj Zmiany";
$lang['No_group_name'] = "Musisz wpisa� nazw� dla tej grupy";
$lang['No_group_moderator'] = "Musisz poda� moderatora tej grupy";
$lang['No_group_mode'] = "Musisz poda� tryb dzia�ania grupy, otwarta lub zamkni�ta";
$lang['delete_group_moderator'] = "Usun�� poprzedniego moderatora grupy?";
$lang['delete_moderator_explain'] = "Je�eli zmieniasz moderatora zaznacz to pole aby usun�� starego moderatora. Je�eli tego nie zrobisz stanie si� on zwyk�ym cz�onkiem grupy.";
$lang['Click_return_groupsadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji Grupami.";
$lang['Select_group'] = "Wybierz grup�";
$lang['Look_up_group'] = "Poka� grup�";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Czyszczenie Forum";
$lang['Forum_Prune_explain'] = "Usuni�te zostan� tematy, w kt�rych nie napisano nic nowego przez okre�lon� liczb� dni. Je�eli nie wpiszesz �adnej liczby usuni�te zostan� wszystkie tematy. Nietkni�te pozostan� tematy z aktywnymi ankietami oraz og�oszenia. B�dziesz musia� usun�� je r�cznie.";
$lang['Do_Prune'] = "Wykonaj";
$lang['All_Forums'] = "Wszystkie Fora";
$lang['Prune_topics_not_posted'] = "Wyczy�� tematy bez nowych odpowiedzi przez dni";
$lang['Topics_pruned'] = "Usuni�to temat�w";
$lang['Posts_pruned'] = "Usuni�to post�w";
$lang['Prune_success'] = "Czyszczenie zosta�o wykonane";


//
// Word censor
//
$lang['Words_title'] = "Cenzura S��w";
$lang['Words_explain'] = "Z tego miejsca mo�esz dodawa�, zmienia� i usuwa� s�owa, kt�re zostan� automatycznie ocenzurowane na Twoich forach. Dodatkowo ludzie nie b�d� mogli si� rejestrowa� z nazwami zawieraj�cymi te s�owa. Znaki uniwersalne (*) s� dozwolone, np. *test* obejmie przetestowanie, test* obejmie testowanie, *test obejmie przedtest.";
$lang['Word'] = "S�owo";
$lang['Edit_word_censor'] = "Zmie� Cenzur�";
$lang['Replacement'] = "Zamiennik";
$lang['Add_new_word'] = "Dodaj nowe s�owo";
$lang['Update_word'] = "Aktualizuj cenzora";

$lang['Must_enter_word'] = "Musisz wpisa� s�owo i jego zamiennik";
$lang['No_word_selected'] = "Nie wybrano s�owa do edycji";

$lang['Word_updated'] = "Wybrana cenzura zosta�a zaktualizowana";
$lang['Word_added'] = "Nowa cenzura zosta�a dodana";
$lang['Word_removed'] = "Wybrana cenzura zosta�a usuni�ta";

$lang['Click_return_wordadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji Cenzur�";


//
// Mass Email
//
$lang['Mass_email_explain'] = "St�d mo�esz wys�a� wiadomo�� do wszystkich u�ytkownik�w lub wszystkich cz�onk�w kt�rej� grupy. Zostanie to wykonane przez wys�anie email'a pod podany adres administrcyjny, wraz z kopia BCC (pol. UDW) wys�an� do wszystkich u�ytkownik�w. Je�eli wysy�asz list do du�ej grupy os�b czekaj cierpliwie na zako�czenie procesu i nie przerywaj go. Wysy�anie masowej korespondencji mo�e zaj�� du�o czasu, i po zako�czeniu procesu zostaniesz o tym powiadomiony.";
$lang['Compose'] = "Utw�rz"; 

$lang['Recipients'] = "Odbiorcy"; 
$lang['All_users'] = "Wszyscy U�ytkownicy";

$lang['Email_successfull'] = "Twoja wiadomo�� zosta�a wys�ana";
$lang['Click_return_massemail'] = "Kliknij %sTutaj%s aby powr�ci� do formularza Masowej Korespondencji";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administracja Rangami";
$lang['Ranks_explain'] = "U�ywaj�c tego formularza mo�esz dodawa�, zmienia�, przegl�da� i usuwa� rangi. Mo�esz te� tworzy� specjalne rangi i przydziela� je poprzez system zarz�dzania u�ytkownik�w.";

$lang['Add_new_rank'] = "Dodaj now� rang�";

$lang['Rank_title'] = "Nazwa Rangi";
$lang['Rank_special'] = "Jest Rang� Specjaln�";
$lang['Rank_minimum'] = "Minimum Post�w";
$lang['Rank_maximum'] = "Maksimum Post�w";
$lang['Rank_image'] = "Obraz Rangi";
$lang['Rank_image_explain'] = "Mo�esz tutaj okre�li� ma�y obrazek zwi�zany z dan� rang�";

$lang['Must_select_rank'] = "Musisz wybra� rang�";
$lang['No_assigned_rank'] = "Nie okre�lono rang specjalnych";

$lang['Rank_updated'] = "Ranga zosta�a zaktualizowana";
$lang['Rank_added'] = "Ranga zosta�a dodana";
$lang['Rank_removed'] = "Ranga zosta�a usuni�ta";
$lang['No_update_ranks'] = "Ranga zosta�a usuni�ta, jednak�e konta u�ytkownik�w, kt�rym zosta�a przydzielona nie zosta�y zmienione. B�dziesz musia� r�cznie usun�� rang� z tych kont";

$lang['Click_return_rankadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji Rangami";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Kontrola Zabronionych Nazw";
$lang['Disallow_explain'] = "Tutaj mo�esz kontrolowa� nazwy u�ytkownik�w, kt�rych nie wolno u�ywa�. Zabronione nazwy mog� zawiera� znak zamienny *. Pami�taj, �e nie mo�esz zabroni� nazwy, kt�ra ju� zosta�a zarejestrowana. Najpierw usu� tego u�ytkownika a potem dopisz tutaj nazw�.";

$lang['Delete_disallow'] = "Usu�";
$lang['Delete_disallow_title'] = "Usu� Zabronion� Nazw�";
$lang['Delete_disallow_explain'] = "Mo�esz usun�� zabronion� nazw� wybieraj�c j� z tej listy i klikaj�c Wy�lij.";

$lang['Add_disallow'] = "Dodaj";
$lang['Add_disallow_title'] = "Dodaj Zabronion� Nazw�";
$lang['Add_disallow_explain'] = "Mo�esz zabroni� korzystania z jakiej� nazwy wykorzystuj�c znak * r�wnowa�ny dowolnemu ci�gowi znak�w";

$lang['No_disallowed'] = "Brak Zabronionych Nazw";

$lang['Disallowed_deleted'] = "Zabroniona nazwa zosta�a usuni�ta";
$lang['Disallow_successful'] = "Zabroniona nazwa zosta�a dodana";
$lang['Disallowed_already'] = "Nazwa, kt�r� wpisa�e�, nie mo�e by� zakazana. Albo jest ju� na li�cie albo istnieje ju� taki u�ytkownik.";

$lang['Click_return_disallowadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji Zabronionymi Nazwami";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administracja Stylami";
$lang['Styles_explain'] = "Korzystaj�c z tego narz�dzia mo�esz dodawa�, usuwa� i zarz�dza� stylami (oraz szablonami) dost�pnymi dla u�ytkownik�w";
$lang['Styles_addnew_explain'] = "Poni�sza lista zawiera wszystkie style, kt�re s� dost�pne dla posiadanych przez ciebie szablon�w. Elementy na tej li�cie nie zosta�y jeszcze zainstalowane w bazie danych phpBB. Aby zainstalowa� styl po prostu kliknij odno�nik Instaluj obok wpisu";

$lang['Select_template'] = "Wybierz Szablon";

$lang['Style'] = "Styl";
$lang['Template'] = "Szablon";
$lang['Install'] = "Instaluj";
$lang['Download'] = "�ci�gnij";

$lang['Edit_theme'] = "Edytuj Styl";
$lang['Edit_theme_explain'] = "W formularzu poni�ej mo�esz zmieni� ustawienia dla wybranego stylu";

$lang['Create_theme'] = "Utw�rz Styl";
$lang['Create_theme_explain'] = "U�yj formularza poni�ej aby utworzy� nowy styl dla wybranego szablonu. Wpisuj�c kolory (do kt�rych mo�esz u�ywa� jedynie warto�ci szesnastkowych) nie dodawaj pocz�tkowego #, np. CCCCCC jest poprawne ale #CCCCCC ju� nie.";

$lang['Export_themes'] = "Eksportuj Styl";
$lang['Export_explain'] = "Z tego panelu mo�esz eksportowa� dane stylu dla wybranego szablonu. Wybierz styl z poni�szej listy, a skrypt utworzy plik jego konfiguracji i spr�buje zapisa� go w wybranym katalogu styl�w. Je�eli nie b�dzie mo�liwe zapisanie pliku otrzymasz mo�liwo�� �ci�gni�cia go. Aby plik zosta� zapisany serwer musi mie� uprawnienia zapisu w danym katalogu. Wi�cej informacji znajdziesz w podr�czniku phpBB 2.";

$lang['Theme_installed'] = "Wybrany styl zosta� zainstalowany";
$lang['Style_removed'] = "Wybrany styl zosta� usuni�ty z bazy danych. Aby ca�kowicie usun�� styl z systemu musisz usun�� go r�cznie z katalogu szablon�w.";
$lang['Theme_info_saved'] = "Informacje o stylu dla wybranego szablonu zosta�y zapisane. Powiniene� teraz przywr�ci� uprawnienia dost�pu pliku theme_info.cfg (i je�li to potrzebne tak�e dla katalogu szablon�w) na 'tylko do odczytu'.";
$lang['Theme_updated'] = "Wybrany styl zosta� zaktualizowany. Powiniene� wyeksportowa� nowe ustawienia.";
$lang['Theme_created'] = "Styl utworzony. Powiniene� teraz wyeksportowa� go do pliku konfiguracyjnego aby go zabezpieczy� lub u�y� gdzie indziej.";

$lang['Confirm_delete_style'] = "Czy na pewno chcesz usun�� ten styl";

$lang['Download_theme_cfg'] = "Eksporter nie m�g� zapisa� pliku z informacjami o stylu. Kliknij przycisk poni�ej aby �ci�gn�� ten plik przez przegl�dark�. Kiedy ju� go �ci�gniesz wy�lij go r�cznie do katalogu z plikami szablonu. Mo�esz wtedy spakowa� pliki dla dystrybucji lub u�ycia gdzie indziej.";
$lang['No_themes'] = "Wybrany szablon nie ma �adnych do��czonych styl�w. Aby utworzy� nowy styl kliknij odno�nik Utw�rz Nowy na lewym panelu.";
$lang['No_template_dir'] = "Otwarcie katalogu szablon�w by�o niemo�liwe. By� mo�e nie istnieje lub serwer nie ma do niego praw dost�pu.";
$lang['Cannot_remove_style'] = "Nie mo�esz usun�� wybranego stylu, poniewa� jest obecnie domy�lnym dla forum. Zmie� ustawienia domy�lne i spr�buj ponownie.";
$lang['Style_exists'] = "Nazwa stylu, kt�r� wybra�e� ju� istnieje, wr�� i spr�buj z inn� nazw�.";

$lang['Click_return_styleadmin'] = "Kliknij %sTutaj%s aby powr�ci� do Administracji Stylami";

$lang['Theme_settings'] = "Ustawienia Tematu";
$lang['Theme_element'] = "Element Tematu";
$lang['Simple_name'] = "Prosta Nazwa";
$lang['Value'] = "Warto��";
$lang['Save_Settings'] = "Zapisz Ustawienia";

$lang['Stylesheet'] = "Arkusz CSS";
$lang['Background_image'] = "Obrazek T�a";
$lang['Background_color'] = "Kolor T�a";
$lang['Theme_name'] = "Nazwa Tematu";
$lang['Link_color'] = "Kolor Odno�nika";
$lang['Text_color'] = "Kolor Tekstu";
$lang['VLink_color'] = "Kolor Odwiedzonego Odno�nika";
$lang['ALink_color'] = "Kolor Aktywnego Odno�nika";
$lang['HLink_color'] = "Kolor Odno�nika pod Kursorem";
$lang['Tr_color1'] = "Kolor Rz�du Tabeli 1";
$lang['Tr_color2'] = "Kolor Rz�du Tabeli 2";
$lang['Tr_color3'] = "Kolor Rz�du Tabeli 3";
$lang['Tr_class1'] = "Klasa Rz�du Tabeli 1";
$lang['Tr_class2'] = "Klasa Rz�du Tabeli 2";
$lang['Tr_class3'] = "Klasa Rz�du Tabeli 3";
$lang['Th_color1'] = "Kolor Nag��wka Tabeli 1";
$lang['Th_color2'] = "Kolor Nag��wka Tabeli 2";
$lang['Th_color3'] = "Kolor Nag��wka Tabeli 3";
$lang['Th_class1'] = "Klasa Nag��wka Tabeli 1";
$lang['Th_class2'] = "Klasa Nag��wka Tabeli 2";
$lang['Th_class3'] = "Klasa Nag��wka Tabeli 3";
$lang['Td_color1'] = "Kolor Kom�rki Tabeli 1";
$lang['Td_color2'] = "Kolor Kom�rki Tabeli 2";
$lang['Td_color3'] = "Kolor Kom�rki Tabeli 3";
$lang['Td_class1'] = "Klasa Kom�rki Tabeli 1";
$lang['Td_class2'] = "Klasa Kom�rki Tabeli 2";
$lang['Td_class3'] = "Klasa Kom�rki Tabeli 3";
$lang['fontface1'] = "Czcionka 1";
$lang['fontface2'] = "Czcionka 2";
$lang['fontface3'] = "Czcionka 3";
$lang['fontsize1'] = "Rozmiar Czcionki 1";
$lang['fontsize2'] = "Rozmiar Czcionki 2";
$lang['fontsize3'] = "Rozmiar Czcionki 3";
$lang['fontcolor1'] = "Kolor Czcionki 1";
$lang['fontcolor2'] = "Kolor Czcionki 2";
$lang['fontcolor3'] = "Kolor Czcionki 3";
$lang['span_class1'] = "Klasa Span 1";
$lang['span_class2'] = "Klasa Span 2";
$lang['span_class3'] = "Klasa Span 3";
$lang['img_poll_size'] = "Rozmiar Obrazka G�osowania [px]";
$lang['img_pm_size'] = "Rozmiar Statustu Pr. Wiadom. [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Witamy w Instalacji phpBB 2";
$lang['Initial_config'] = "Podstawowa Konfiguracja";
$lang['DB_config'] = "Konfiguracja Bazy Danych";
$lang['Admin_config'] = "Konfiguracja Admina";
$lang['continue_upgrade'] = "Kiedy �ci�gniesz plik konfiguracyjny na sw�j komputer mo�esz klikn�� przycisk \"Kontynuuj Aktualizacj�\" aby przej�� dalej. Zaczekaj z wys�aniem pliku konfiguracyjnego na serwer do zako�czenia aktualizacji.";
$lang['upgrade_submit'] = "Kontynuuj Aktualizacj�";

$lang['Installer_Error'] = "Wyst�pi� b��d podczas instalacji";
$lang['Previous_Install'] = "Wykryto poprzedni� instalacj�";
$lang['Install_db_error'] = "Wyst�pi� b��d przy aktualizacji bazy danych";

$lang['Re_install'] = "Twoja poprzednia instalacja jest nadal aktywna.<br /><br />Je�eli chcesz ponownie zainstalowa� phpBB 2 kliknij przycisk Tak poni�ej. Pami�taj, �e wykonanie tego usunie wszystkie istniej�ce dane bez �adnych kopii zapasowych! Konto administratora zostanie odtworzone z t� sam� nazw� i has�em co przed ponown� instalacj� ale bez innych ustawie�.<br /><br />Zastan�w si� przed wci�ni�ciem Tak!";

$lang['Inst_Step_0'] = "Dzi�kujemy, �e wybra�e� phpBB 2. Aby zainstalowa� forym wpisz poni�sze szczeg�y. Pami�taj, �e baza danych, w kt�rej chcesz zainstalowa� forum powinna wcze�niej istnie�. Je�eli instalujesz w bazie danych u�ywaj�cej ODBC, np. MS Access powiniene� najpierw utworzy� odpowiednie DSN.";

$lang['Start_Install'] = "Zacznij Instalacj�";
$lang['Finish_Install'] = "Zako�cz Instalacj�";

$lang['Default_lang'] = "Domy�lny J�zyk Forum";
$lang['DB_Host'] = "Server Bazy Danych / DSN";
$lang['DB_Name'] = "Nazwa Bazy Danych";
$lang['DB_Username'] = "U�ytkownik Bazy Danych";
$lang['DB_Password'] = "Has�o Bazy Danych";
$lang['Database'] = "Baza Danych";
$lang['Install_lang'] = "Wybierz J�zyk Instalacji";
$lang['dbms'] = "Typ Bazy Danych";
$lang['Table_Prefix'] = "Prefiks dla tabel w bazie danych";
$lang['Admin_Username'] = "Nazwa Administratora";
$lang['Admin_Password'] = "Has�o Administratora";
$lang['Admin_Password_confirm'] = "Has�o Administratora [ Potwierd� ]";

$lang['Inst_Step_2'] = "Konto administratora zosta�o utworzone. W tej chwili podstawowa instalacja jest zako�czona. Zostaniesz przeniesiony do strony, kt�ra pozwoli ci zmieni� wszelkie ustawienia forum. Pami�taj o sprawdzeniu Konfiguracji G��wnej i zmianie tych opcji, kt�re tego wymagaj�. Dzi�kujemy, �e wybra�e� phpBB 2.";

$lang['Unwriteable_config'] = "Tw�j plik konfigiracyjny nie mo�e zosta� zapisany. Jego kopia zostanie wys�ana do ciebie je�li wci�niesz poni�szy przycisk. Powiniene� wys�a� j� r�cznie do katalogu z phpBB 2. Kiedy to zrobisz zaloguj si� do nowego forum, u�ywaj�c twoich danych podanych wcze�niej, oraz odwiedzi� centrum administracji forum (do kt�rego odno�nik pojawi si� na dole ka�dej strony forum, kiedy si� zalogujesz) aby zmieni� opcje. Dzi�kujemy, �e wybra�e� phpBB 2.";
$lang['Download_config'] = "�ci�gnij Plik Konfiguracyjny";

$lang['ftp_choose'] = "Wybierz Metod� �ci�gania";
$lang['ftp_option'] = "<br />Je�eli opcje FTP s� dost�pne w tej wersji PHP mo�esz mie� tak�e mo�liwo�� automatycznego wys�ania pliku w odpowiednie miejsce przez FTP.";
$lang['ftp_instructs'] = "Wybra�e� opcj� automatycznego wys�ania pliku do katalogu zawieraj�cego phpBB 2. Poni�ej wpisz informacje potrzebne do wykonania tego polecenia. Pami�taj, �e �cie�ka do phpBB 2 powinna by� dok�adnie taka jak� u�ywasz przy po��czeniach z FTP przez inne programy.";
$lang['ftp_info'] = "Wpisz informacj� o twoim FTP";
$lang['Attempt_ftp'] = "Spr�buj wys�a� plik przez ftp automatycznie";
$lang['Send_file'] = "Wy�lij plik do mnie a ja umieszcz� go r�cznie na serwerze";
$lang['ftp_path'] = "�cie�ka FTP do phpBB 2";
$lang['ftp_username'] = "U�ytkownik FTP";
$lang['ftp_password'] = "Has�o FTP";
$lang['Transfer_config'] = "Rozpocznij Transfer";
$lang['NoFTP_config'] = "Pr�ba wys�ania pliku drog� ftp na swoje miejsce nie powiod�a si�. �ci�gnij plik konfiguracyjny i wy�lij go na miejsce samodzielnie.";

$lang['Install'] = "Instalacja";
$lang['Upgrade'] = "Aktualizacja";


$lang['Install_Method'] = "Wybierz metod� instalacji";

$lang['Install_No_Ext'] = "Konfiguracja php na serwerze nie obs�uguje wybranej bazy danych";

$lang['Install_No_PCRE'] = "phpBB2 wymaga kompatybilnego z Perlem Modu�u Wyra�e� Regularnych, kt�rego twoja konfiguracja php najwyra�niej nie obs�uguje!";

//Added birthday mod 
$lang['Enable_birthday_greeting'] = "Uaktywnij �yczenia urodzinowe"; 
$lang['Birthday_greeting_expain'] = "U�ytkownicy, kt�rzy podali dat� urodzenia dostan� �yczenia, kiedy odwiedz� forum w dniu urodzin."; 
$lang['Next_birthday_greeting'] = "Najbli�sze urodziny - popup"; 
$lang['Next_birthday_greeting_expain'] = "Ta opcja �ledzi nadchodz�ce urodziny"; 
$lang['Wrong_next_birthday_greeting'] = "Podana data by�a nieprawid�owa, spr�buj ponownie"; 
$lang['Max_user_age'] = "Maksymalny wiek"; 
$lang['Min_user_age'] = "Minimalny wiek"; 
$lang['Min_user_age_explain'] = "Podanie warto�ci 0 sprawi, �e u�ytkownicy b�d� mogli wpisywa� liczb� z nieograniczonego zakresu"; 
$lang['Birthday_lookforward'] = "Z�� �yczenia 'na zak�adk�'"; 
$lang['Birthday_lookforward_explain'] = "Liczba dni do urodzin u�ytkownika, od kt�rej skrypt zacznie sprawdza� czy jest on online";

//
// That's all Folks!
// -------------------------------------------------

?>
