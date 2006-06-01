<?php
/***************************************************************************
 *                            lang_admin_attach.php [Polish]
 *                              -------------------
 *     begin                : Sun Mar 17 2002
 *     copyright            : (C) 2002 Marek Sliwinski
 *     email                : elfy@tolkien.com.pl
 *
 *     $Id: lang_admin_attach.php,v 1.1 2003/04/20 09:27:26 bob Exp $
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
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Administracja';
$lang['Shadow_attachments'] = 'Fa�szywe Za��czniki';
$lang['Forbidden_extensions'] = 'Zabronione Rozszerzenia';
$lang['Extension_control'] = 'Kontrola Rozszerze�';
$lang['Extension_group_manage'] = 'Zarz�dzaj Grupami Rozszerze�';
$lang['Special_categories'] = 'Specjalne Kategorie';

// Attachments -> Management
$lang['Attach_settings'] = 'Ustawienia Za��cznik�w';
$lang['Manage_attachments_explain'] = 'Tutaj mo�esz konfigurowa� g��wne ustawienia Attachment Mod. Je�eli wci�niesz przycisk Przetestuj Ustawienia, w�wczas Attachment Mod wykona kilka Systemowych Test�w w celu upewnienia si�, �e Mod b�dzie dzia�a� prawid�owo. Je�eli masz problemy z dodawaniem za��cznik�w wtedy wykonuj�c ten Test a otrzymasz szczeg�owe komunikaty b��d�w.';
$lang['Attach_filesize_settings'] = 'Rozmiar Za��cznika - Ustawienia';
$lang['Attach_number_settings'] = 'Ilo�� Za��cznik�w - Ustawienia';
$lang['Attach_options_settings'] = 'Opcje Za��cznik�w';

$lang['Upload_directory'] = 'Katalog do przechowywania za��cznik�w (wzgl�dem katalogu root forum)';
$lang['Upload_directory_explain'] = 'Wprowad�  wzgl�dn� �cie�k� z katalogu gdzie zainstalowa�e� phpBB2 do katalogu za��cznik�w. Przyk�ad: wpisz \'files\' je�eli �cie�ka do twojego phpBB2 to http://www.twojadomena.com/phpBB2 i katalog dla za��cznik�w jest pod adresem http://www.twojadomena.com/phpBB2/files.';
$lang['Attach_img_path'] = '�cie�ka do obrazka reprezentuj�cego za��cznik';
$lang['Attach_img_path_explain'] = 'Ten obrazek jest wy�wietlany obok link�w do zal�cznik�w we wpisach. Zostaw to pole puste je�eli nie chcesz �eby ikona byla wy�wietlana. To ustawienie nadpisuje ustawienia w Zarz�dzaj Grupami Rozszerze�.';
$lang['Attach_topic_icon'] = 'Ikona Za��cznika dla Tematu';
$lang['Attach_topic_icon_explain'] = 'Ten obrazek jest wy�wietlany przed nazw� tematu zawieraj�cego za��czniki. Zostaw to pole puste je�eli nie chcesz korzysta� z tej opcji.';
$lang['Attach_display_order'] = 'Kolejno�� Wy�wietlania Za��cznik�w';
$lang['Attach_display_order_explain'] = 'Tutaj mo�esz wybra� czy wy�wietla� za��czniki we Wpisach/PW Malej�co wg daty plik�w, w kolejno�ci Najnowsze Za��czniki u G�ry lub Rosn�co wg daty plik�w, Najstarsze Za��czniki u G�ry.';

$lang['Max_filesize_attach'] = 'Rozmiar pliku';
$lang['Max_filesize_attach_explain'] = 'Maksymalny rozmiar za��cznika (w Bajtach). Warto�� 0 oznacza \'bez ogranicze�\'. To ustawienie jest zale�ne od konfiguracji twojego serwera. Na przyk�ad, je�eli konfiguracja PHP na serwerze zezwala jedynie na upload plik�w o wielko�ci nie wi�kszej ni� 2MB wtedy Attachment Mod nie b�dzie w stanie tego zmieni�.';
$lang['Attach_quota'] = 'Dost�pna przestrze� dyskowa dla Za��cznik�w';
$lang['Attach_quota_explain'] = 'Tutaj mo�esz okre�li� maksymaln� pojemno�� WSZYSTKICH Za��cznik�w na twoim dysku.';
$lang['Max_filesize_pm'] = 'Maksymalny Rozmiar Pliku w Skrzynce Prywatnych Wiadomo�ci';
$lang['Max_filesize_pm_explain'] = 'Maksymalna wielko�� u�ywanej powierzchni dyskowej na za��czniki ze Skrzynki PW dla ka�dego u�ytkownika.';

$lang['Max_attachments'] = 'Maksymalna ilo�� Za��cznik�w';
$lang['Max_attachments_explain'] = 'Tutaj mo�esz okre�li� maksymaln� liczb� za��cznik�w w jednym wpisie.';
$lang['Max_attachments_pm'] = 'Maksymalna ilo�� Za��cznik�w w jednej Prywatnej Wiadomo�ci';
$lang['Max_attachments_pm_explain'] = 'Zdefiniuj maksymaln� ilo�� za��cznik�w jak� u�ytkownik mo�e do��czy� do Prywatnej Wiadomo�ci.';

$lang['Disable_mod'] = 'Wy��cz Attachment Mod';
$lang['Disable_mod_explain'] = 'Ta opcja jest dost�pna g��wnie dla testowania nowych szablon�w lub schemat�w. Wy��czone zostan� wszystkie funkcje zwi�zane z za��cznikami z wyj�tkiem tych w Panelu Administracyjnym.';
$lang['PM_Attachments'] = 'Zezwalaj na Za��czniki w Prywatnych Wiadomo�ciach';
$lang['PM_Attachments_explain'] = 'Zezwalaj/Zabro� dodawania za��cznik�w do Prywatnych Wiadomo�ci.';
$lang['Ftp_upload'] = 'W��cz kopiowanie na serwer FTP';
$lang['Ftp_upload_explain'] = 'W��cz/Wy��cz opcje kopiowania plik�w na serwer FTP. Je�eli ustawisz t� opcj� na Tak, wtedy musisz zdefiniowa� Ustawienia FTP dla Za��cznik�w a Katalog do przechowywania za��cznik�w przestanie by� u�ywany.';
$lang['Attachment_topic_review'] = 'Czy za��czniki maj� by� pokazywane w Przegl�dzie Tematu?';
$lang['Attachment_topic_review_explain'] = 'Je�li wybierzesz Tak, wszystkie za��czniki b�d� pokazywane w oknie Przegl�d Tematu kiedy b�dziesz pisa� odpowied�.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Tutaj mo�esz wprowadzi� Adres IP lub nazw� serwera FTP u�ywanego do uploadu plik�w. Je�eli zostawisz to pole puste, zostanie u�yty serwer na kt�rym zainstalowane jest forum phpBB2. Pami�taj, �e niedozwolone jest dodawanie do adresu ftp:// lub czego� innego, tylko sam adres np. ftp.foo.com lub jeszcze lepiej adres IP (b�dzie szybciej dzia�a�).';

$lang['Attach_ftp_path'] = '�cie�ka FTP do katalogu przechowywania plik�w';
$lang['Attach_ftp_path_explain'] = 'W katalogu tym b�d� przechowywane wszystkie za��czniki. Katalog ten <b>nie musi</b> by� chroniony przez ustawienie odpowiednich atrybut�w poleceniem chmod. Nie wprowadzaj w to pole twojego adresu IP ani adresu FTP, domy�lnym adresem IP jest tw�j localhost. To pole przeznaczone jest tylko na FTP Path.';
$lang['Ftp_download_path'] = 'Download Link to FTP Path';
$lang['Ftp_download_path_explain'] = 'Wprowad� wzgl�dn� �cie�k� od katalogu gdzie jest phpBB2. Przyk�ad: wpisz \'ftpfiles\' je�eli �cie�ka do twojego phpBB2 to http://www.twojadomena.com/phpBB2 i katalog dla za��cznik�w jest pod adresem http://www.twojadomena.com/phpBB2/ftpfiles. Zostaw to pole puste je�eli katalog znajduje si� poza twoim katalogiem root serwera. Je�eli to pole b�dzie puste nie b�dziesz m�gl u�ywa� \'fizycznej\' metody pobierania plik�w.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Tutaj mo�esz skasowa� te za��czniki kt�re s� zwi�zane z wpisami ale fizycznie nie istniej� na dysku i te pliki kt�re istniej� na twoim dysku ale nie s� zwi�zane z �adnym wpisem. Mo�esz �ci�gn�� lub wy�wietli� plik, klikaj�c na niego - je�eli nie ma linku to znaczy �e plik nie istnieje.';
$lang['Shadow_attachments_file_explain'] = 'Skasuj wszystkie Za��czniki, kt�re zachowa�y si� na dysku ale nie s� zwi�zane z �adnym wpisem.';
$lang['Shadow_attachments_row_explain'] = 'Skasuj z wpis�w wszystkie linki, komentarze do za��cznik�w, kt�rych nie ma na dysku.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Zarz�dzanie Rozszerzeniami Plik�w';
$lang['Manage_extensions_explain'] = 'Tutaj mo�esz zarz�dza� Rozszerzeniami Plik�w. Je�eli chcesz zezwoli�/zabroni� dodawania za��cznik�w o danym Rozszerzeniu, prosz� u�yj opcji Zarz�dzaj Grupami Rozszerze�.';
$lang['Explanation'] = 'Obja�nienie';
$lang['Extension_group'] = 'Grupa Rozszerze�';
$lang['Invalid_extension'] = 'Nieprawid�owe Rozszerzenie';
$lang['Extension_exist'] = 'Rozszerzenie %s ju� istnieje'; // replace %s with the Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Zarz�dzanie Grupami Rozszerze�';
$lang['Manage_extension_groups_explain'] = 'Tutaj mo�esz kasowa� i zmienia� Grupy Rozszerze�, mo�esz wy��czy� Grupy Rozszerze�, przydzieli� do nich specajaln� Kategori�, zmieni� mechanizm �ci�gania za��cznik�w i mo�esz ustawi� Upload Icon, plik graficzny kt�ry b�dzie wy�wietlany przed Za��cznikiem nale��cym do Grupy.';
$lang['Special_category'] = 'Specjalna Kategoria';
$lang['Category_images'] = 'obrazki';
$lang['Category_wma_files'] = 'pliki wma';
$lang['Category_swf_files'] = 'pliki flash';
$lang['Allowed'] = 'Zezwolone';
$lang['Download_mode'] = 'Tryb Pobierania';
$lang['Upload_icon'] = 'Upload Icon';
$lang['Max_groups_filesize'] = 'Max. Rozmiar Pliku';
$lang['Extension_group_exist'] = 'Grupa Rozszerze� %s ju� istnieje'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Zarz�dzanie Specjalnymi Kategoriami';
$lang['Manage_categories_explain'] = 'Tutaj mo�esz konfigurowa� Specjalne Kategorie. Mo�esz ustawia� Specjalne Parametry i Warunki dla Specjalnych Kategorii przypisanych do Grup Rozszerze�.';
$lang['Settings_cat_images'] = 'Ustawienia dla Specjalnej Kategorii: Obrazki';
$lang['Settings_cat_wma'] = 'Ustawienia dla Specjalnej Kategorii: Pliki WMA';
$lang['Settings_cat_flash'] = 'Ustawienia dla Specjalnej Kategorii: Pliki Flash';
$lang['Display_inlined'] = 'Wy�wietlaj Obrazki bezpo�rednio we wpisie';
$lang['Display_inlined_explain'] = 'Wybierz czy wy�wietla� obrazki bezpo�rednio we wpisie (Tak) czy pokazywa� obrazki jako link na kt�ry trzeba klikn�� by je wy�wietli�?';
$lang['Max_image_size'] = 'Maksymalna Rozdzielczo�� Obrazka';
$lang['Max_image_size_explain'] = 'Tutaj mo�esz zdefiniowa� maksymalny dozwolony Rozmiar Obrazka jaki mo�e by� za��czony (Szeroko�� x Wysoko�� w pikselach).<br />Je�eli ustawisz 0x0, ta opcja zostanie wy��czona. Z niekt�rymi Obrazkami ta opcja nie b�dzie dzia�a� w zwi�zku z ograniczeniami PHP.';
$lang['Image_link_size'] = 'Rozdzielczo�� Obrazka nim zostanie zamieniony na Link';
$lang['Image_link_size_explain'] = 'Je�eli zdefiniowana tutaj rozdzielczo�� zostanie osi�gni�ta przez obrazek to wtedy b�dzie pokazywany jako link.<br />Ta opcja dzia�a tylko gdy <i>Wy�wietlaj Obrazki bezpo�rednio we wpisie</i> jest w��czone.<br />Je�eli w tym polu ustawisz 0x0, w�wczas r�wnie� ta funkcja zostanie wy��czona. Z niekt�rymi Obrazkami ta opcja nie b�dzie dzia�a� w zwi�zku z ograniczeniami PHP.';
$lang['Assigned_group'] = 'Przypisana Grupa';

$lang['Image_create_thumbnail'] = 'Utw�rz Miniaturk� Obrazka';
$lang['Image_create_thumbnail_explain'] = 'Zawsze tw�rz Miniaturk�. Ta funkcja nadpisuje (ma wy�szy priorytet) prawie wszystkie ustawienia dla Specjalnych Kategorii, z wyj�tkiem <i>Maksymalna Rozdzielczo�� Obrazka</i>. Z t� funkcj� w��czon� Miniaturka jest wy�wietlana we wpisie i U�ytkownik mo�e na ni� klikn�� aby otworzy� ca�y Obrazek.<br />Pami�taj, �e ta funkcja wymaga zainstalowanego Imagick. Je�eli Imagick nie jest zainstalowany lub tryb Safe-Mode jest w��czony w�wczas zostanie u�yta biblioteka GD. Je�eli ten typ pliku graficznego nie jest obs�ugiwany przez PHP w�wczas ta funkcja nie zostanie u�yta.';
$lang['Image_min_thumb_filesize'] = 'Minimalny Rozmiar Pliku Miniaturki';
$lang['Image_min_thumb_filesize_explain'] = 'Je�eli obrazek jest mniejszy ni� zdefiniowany rozmiar pliku w�wczas Miniaturka nie zostanie utworzona poniewa� ju� sam obrazek jest wystarczaj�co ma�y i Miniaturka by�aby nieczytelna.';
$lang['Image_imagick_path'] = 'Imagick Program (ca�a �cie�ka)';
$lang['Image_imagick_path_explain'] = 'Wpisz �cie�k� do programu conwertuj�cego imagick, zazwyczaj /usr/bin/convert (w windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Szukaj Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Zarz�dzaj Zabronionymi Rozszerzeniami';
$lang['Manage_forbidden_extensions_explain'] = 'Tutaj mo�esz dodawa� lub kasowa� zabronione rozszerzenia. Rozszerzenia php, php3 i php4 s� domy�lnie niedozwolone - nie mo�esz ich skasowa�.';
$lang['Forbidden_extension_exist'] = 'Zabronione Rozszerzenie %s ju� istnieje'; // replace %s with the extension

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Administracja Za��cznikami';
$lang['Control_panel_explain'] = 'Tutaj mo�esz wy�wietli� i zarz�dza� wszystkimi Za��cznikami posortowanymi wg U�ytkownik�w, Za��cznik�w, Wy�wietle� itd....';
$lang['File_comment_cp'] = 'Komentarz do pliku';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'U�yj * jako zamiennika dowolnego ci�gu znak�w';
$lang['Size_smaller_than'] = 'Rozmiar Za��cznika mniejszy ni� (bajt�w)';
$lang['Size_greater_than'] = 'Rozmiar Za��cznika wi�kszy ni� (bajt�w)';
$lang['Count_smaller_than'] = 'Licznik �ci�gni�� jest mniejszy ni�';
$lang['Count_greater_than'] = 'Licznik �ci�gni�� jest wi�kszy ni�';
$lang['More_days_old'] = 'Poka� starsze ni� ? dni';
$lang['No_attach_search_match'] = 'Nie znaleziono Za��cznik�w spe�niaj�cych twoje kryteria';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Ilo�� Za��cznik�w';
$lang['Total_filesize'] = 'Ca�kowite miejsce zajmowane przez wszystkie Za��czniki';
$lang['Number_posts_attach'] = 'Ilo�� wpis�w z Za��cznikami';
$lang['Number_topics_attach'] = 'Ilo�� temat�w z Za��cznikami';
$lang['Number_users_attach'] = 'Ilo�� u�ytkownik�w kt�rzy dodali Za��czniki';
$lang['Number_pms_attach'] = 'Suma wszystkich Za��cznik�w w Prywatnych Wiadomo�ciach';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statystyki Za��cznik�w dla: %s'; // replace %s with username
$lang['Size_in_kb'] = 'Rozmiar (KB)';
$lang['Downloads'] = '�ci�gni��';
$lang['Post_time'] = 'Czas wpisu';
$lang['Posted_in_topic'] = 'Zamieszczony w Temacie';
$lang['Submit_changes'] = 'Zatwierd�  Zmiany';

// Sort Types
$lang['Sort_Attachments'] = 'Za��czniki';
$lang['Sort_Size'] = 'Rozmiar';
$lang['Sort_Filename'] = 'Nazwa pliku';
$lang['Sort_Comment'] = 'Komentarz';
$lang['Sort_Extension'] = 'Rozszerzenie';
$lang['Sort_Downloads'] = '�ci�gni��';
$lang['Sort_Posttime'] = 'Czasu wpisu';
$lang['Sort_Posts'] = 'Wpis�w';

// View Types
$lang['View_Statistic'] = 'Statystyka';
$lang['View_Search'] = 'Szukaj';
$lang['View_Username'] = 'U�ytkownik';
$lang['View_Attachments'] = 'Za��czniki';

// Successfully updated
$lang['Attach_config_updated'] = 'Konfiguracja Za��cznik�w Zosta�a Uaktualniona';
$lang['Click_return_attach_config'] = 'Kliknij %sTutaj%s aby powr�ci� do Konfiguracji Za��cznik�w';
$lang['Test_settings_successful'] = 'Ustawienia Przetestowane, konfiguracja wygl�da na prawid�ow�.';

// Some basic definitions
$lang['Attachments'] = 'Za��czniki';
$lang['Attachment'] = 'Za��cznik';
$lang['Extensions'] = 'Rozszerzenia';
$lang['Extension'] = 'Rozszerzenie';

// Auth pages
$lang['Auth_attach'] = 'Za��czniki';
$lang['Auth_download'] = 'Pobierz Pliki';

?>