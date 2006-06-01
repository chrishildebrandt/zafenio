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
$lang['Shadow_attachments'] = 'Fa³szywe Za³±czniki';
$lang['Forbidden_extensions'] = 'Zabronione Rozszerzenia';
$lang['Extension_control'] = 'Kontrola Rozszerzeñ';
$lang['Extension_group_manage'] = 'Zarz±dzaj Grupami Rozszerzeñ';
$lang['Special_categories'] = 'Specjalne Kategorie';

// Attachments -> Management
$lang['Attach_settings'] = 'Ustawienia Za³±czników';
$lang['Manage_attachments_explain'] = 'Tutaj mo¿esz konfigurowaæ g³ówne ustawienia Attachment Mod. Je¿eli wci¶niesz przycisk Przetestuj Ustawienia, wówczas Attachment Mod wykona kilka Systemowych Testów w celu upewnienia siê, ¿e Mod bêdzie dzia³a³ prawid³owo. Je¿eli masz problemy z dodawaniem za³±czników wtedy wykonuj±c ten Test a otrzymasz szczegó³owe komunikaty b³êdów.';
$lang['Attach_filesize_settings'] = 'Rozmiar Za³±cznika - Ustawienia';
$lang['Attach_number_settings'] = 'Ilo¶æ Za³±czników - Ustawienia';
$lang['Attach_options_settings'] = 'Opcje Za³±czników';

$lang['Upload_directory'] = 'Katalog do przechowywania za³±czników (wzglêdem katalogu root forum)';
$lang['Upload_directory_explain'] = 'Wprowad¼  wzglêdn± ¶cie¿kê z katalogu gdzie zainstalowa³e¶ phpBB2 do katalogu za³±czników. Przyk³ad: wpisz \'files\' je¿eli ¶cie¿ka do twojego phpBB2 to http://www.twojadomena.com/phpBB2 i katalog dla za³±czników jest pod adresem http://www.twojadomena.com/phpBB2/files.';
$lang['Attach_img_path'] = '¦cie¿ka do obrazka reprezentuj±cego za³±cznik';
$lang['Attach_img_path_explain'] = 'Ten obrazek jest wy¶wietlany obok linków do zal±czników we wpisach. Zostaw to pole puste je¿eli nie chcesz ¿eby ikona byla wy¶wietlana. To ustawienie nadpisuje ustawienia w Zarz±dzaj Grupami Rozszerzeñ.';
$lang['Attach_topic_icon'] = 'Ikona Za³±cznika dla Tematu';
$lang['Attach_topic_icon_explain'] = 'Ten obrazek jest wy¶wietlany przed nazw± tematu zawieraj±cego za³±czniki. Zostaw to pole puste je¿eli nie chcesz korzystaæ z tej opcji.';
$lang['Attach_display_order'] = 'Kolejno¶æ Wy¶wietlania Za³±czników';
$lang['Attach_display_order_explain'] = 'Tutaj mo¿esz wybraæ czy wy¶wietlaæ za³±czniki we Wpisach/PW Malej±co wg daty plików, w kolejno¶ci Najnowsze Za³±czniki u Góry lub Rosn±co wg daty plików, Najstarsze Za³±czniki u Góry.';

$lang['Max_filesize_attach'] = 'Rozmiar pliku';
$lang['Max_filesize_attach_explain'] = 'Maksymalny rozmiar za³±cznika (w Bajtach). Warto¶æ 0 oznacza \'bez ograniczeñ\'. To ustawienie jest zale¿ne od konfiguracji twojego serwera. Na przyk³ad, je¿eli konfiguracja PHP na serwerze zezwala jedynie na upload plików o wielko¶ci nie wiêkszej ni¿ 2MB wtedy Attachment Mod nie bêdzie w stanie tego zmieniæ.';
$lang['Attach_quota'] = 'Dostêpna przestrzeñ dyskowa dla Za³±czników';
$lang['Attach_quota_explain'] = 'Tutaj mo¿esz okre¶liæ maksymaln± pojemno¶æ WSZYSTKICH Za³±czników na twoim dysku.';
$lang['Max_filesize_pm'] = 'Maksymalny Rozmiar Pliku w Skrzynce Prywatnych Wiadomo¶ci';
$lang['Max_filesize_pm_explain'] = 'Maksymalna wielko¶æ u¿ywanej powierzchni dyskowej na za³±czniki ze Skrzynki PW dla ka¿dego u¿ytkownika.';

$lang['Max_attachments'] = 'Maksymalna ilo¶æ Za³±czników';
$lang['Max_attachments_explain'] = 'Tutaj mo¿esz okre¶liæ maksymaln± liczbê za³±czników w jednym wpisie.';
$lang['Max_attachments_pm'] = 'Maksymalna ilo¶æ Za³±czników w jednej Prywatnej Wiadomo¶ci';
$lang['Max_attachments_pm_explain'] = 'Zdefiniuj maksymaln± ilo¶æ za³±czników jak± u¿ytkownik mo¿e do³±czyæ do Prywatnej Wiadomo¶ci.';

$lang['Disable_mod'] = 'Wy³±cz Attachment Mod';
$lang['Disable_mod_explain'] = 'Ta opcja jest dostêpna g³ównie dla testowania nowych szablonów lub schematów. Wy³±czone zostan± wszystkie funkcje zwi±zane z za³±cznikami z wyj±tkiem tych w Panelu Administracyjnym.';
$lang['PM_Attachments'] = 'Zezwalaj na Za³±czniki w Prywatnych Wiadomo¶ciach';
$lang['PM_Attachments_explain'] = 'Zezwalaj/Zabroñ dodawania za³±czników do Prywatnych Wiadomo¶ci.';
$lang['Ftp_upload'] = 'W³±cz kopiowanie na serwer FTP';
$lang['Ftp_upload_explain'] = 'W³±cz/Wy³±cz opcje kopiowania plików na serwer FTP. Je¿eli ustawisz t± opcjê na Tak, wtedy musisz zdefiniowaæ Ustawienia FTP dla Za³±czników a Katalog do przechowywania za³±czników przestanie byæ u¿ywany.';
$lang['Attachment_topic_review'] = 'Czy za³±czniki maj± byæ pokazywane w Przegl±dzie Tematu?';
$lang['Attachment_topic_review_explain'] = 'Je¶li wybierzesz Tak, wszystkie za³±czniki bêd± pokazywane w oknie Przegl±d Tematu kiedy bêdziesz pisa³ odpowied¼.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Tutaj mo¿esz wprowadziæ Adres IP lub nazwê serwera FTP u¿ywanego do uploadu plików. Je¿eli zostawisz to pole puste, zostanie u¿yty serwer na którym zainstalowane jest forum phpBB2. Pamiêtaj, ¿e niedozwolone jest dodawanie do adresu ftp:// lub czego¶ innego, tylko sam adres np. ftp.foo.com lub jeszcze lepiej adres IP (bêdzie szybciej dzia³aæ).';

$lang['Attach_ftp_path'] = '¦cie¿ka FTP do katalogu przechowywania plików';
$lang['Attach_ftp_path_explain'] = 'W katalogu tym bêd± przechowywane wszystkie za³±czniki. Katalog ten <b>nie musi</b> byæ chroniony przez ustawienie odpowiednich atrybutów poleceniem chmod. Nie wprowadzaj w to pole twojego adresu IP ani adresu FTP, domy¶lnym adresem IP jest twój localhost. To pole przeznaczone jest tylko na FTP Path.';
$lang['Ftp_download_path'] = 'Download Link to FTP Path';
$lang['Ftp_download_path_explain'] = 'Wprowad¼ wzglêdn± ¶cie¿kê od katalogu gdzie jest phpBB2. Przyk³ad: wpisz \'ftpfiles\' je¿eli ¶cie¿ka do twojego phpBB2 to http://www.twojadomena.com/phpBB2 i katalog dla za³±czników jest pod adresem http://www.twojadomena.com/phpBB2/ftpfiles. Zostaw to pole puste je¿eli katalog znajduje siê poza twoim katalogiem root serwera. Je¿eli to pole bêdzie puste nie bêdziesz mógl u¿ywaæ \'fizycznej\' metody pobierania plików.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Tutaj mo¿esz skasowaæ te za³±czniki które s± zwi±zane z wpisami ale fizycznie nie istniej± na dysku i te pliki które istniej± na twoim dysku ale nie s± zwi±zane z ¿adnym wpisem. Mo¿esz ¶ci±gn±æ lub wy¶wietliæ plik, klikaj±c na niego - je¿eli nie ma linku to znaczy ¿e plik nie istnieje.';
$lang['Shadow_attachments_file_explain'] = 'Skasuj wszystkie Za³±czniki, które zachowa³y siê na dysku ale nie s± zwi±zane z ¿adnym wpisem.';
$lang['Shadow_attachments_row_explain'] = 'Skasuj z wpisów wszystkie linki, komentarze do za³±czników, których nie ma na dysku.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Zarz±dzanie Rozszerzeniami Plików';
$lang['Manage_extensions_explain'] = 'Tutaj mo¿esz zarz±dzaæ Rozszerzeniami Plików. Je¿eli chcesz zezwoliæ/zabroniæ dodawania za³±czników o danym Rozszerzeniu, proszê u¿yj opcji Zarz±dzaj Grupami Rozszerzeñ.';
$lang['Explanation'] = 'Obja¶nienie';
$lang['Extension_group'] = 'Grupa Rozszerzeñ';
$lang['Invalid_extension'] = 'Nieprawid³owe Rozszerzenie';
$lang['Extension_exist'] = 'Rozszerzenie %s ju¿ istnieje'; // replace %s with the Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Zarz±dzanie Grupami Rozszerzeñ';
$lang['Manage_extension_groups_explain'] = 'Tutaj mo¿esz kasowaæ i zmieniaæ Grupy Rozszerzeñ, mo¿esz wy³±czyæ Grupy Rozszerzeñ, przydzieliæ do nich specajaln± Kategoriê, zmieniæ mechanizm ¶ci±gania za³±czników i mo¿esz ustawiæ Upload Icon, plik graficzny który bêdzie wy¶wietlany przed Za³±cznikiem nale¿±cym do Grupy.';
$lang['Special_category'] = 'Specjalna Kategoria';
$lang['Category_images'] = 'obrazki';
$lang['Category_wma_files'] = 'pliki wma';
$lang['Category_swf_files'] = 'pliki flash';
$lang['Allowed'] = 'Zezwolone';
$lang['Download_mode'] = 'Tryb Pobierania';
$lang['Upload_icon'] = 'Upload Icon';
$lang['Max_groups_filesize'] = 'Max. Rozmiar Pliku';
$lang['Extension_group_exist'] = 'Grupa Rozszerzeñ %s ju¿ istnieje'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Zarz±dzanie Specjalnymi Kategoriami';
$lang['Manage_categories_explain'] = 'Tutaj mo¿esz konfigurowaæ Specjalne Kategorie. Mo¿esz ustawiaæ Specjalne Parametry i Warunki dla Specjalnych Kategorii przypisanych do Grup Rozszerzeñ.';
$lang['Settings_cat_images'] = 'Ustawienia dla Specjalnej Kategorii: Obrazki';
$lang['Settings_cat_wma'] = 'Ustawienia dla Specjalnej Kategorii: Pliki WMA';
$lang['Settings_cat_flash'] = 'Ustawienia dla Specjalnej Kategorii: Pliki Flash';
$lang['Display_inlined'] = 'Wy¶wietlaj Obrazki bezpo¶rednio we wpisie';
$lang['Display_inlined_explain'] = 'Wybierz czy wy¶wietlaæ obrazki bezpo¶rednio we wpisie (Tak) czy pokazywaæ obrazki jako link na który trzeba klikn±æ by je wy¶wietliæ?';
$lang['Max_image_size'] = 'Maksymalna Rozdzielczo¶æ Obrazka';
$lang['Max_image_size_explain'] = 'Tutaj mo¿esz zdefiniowaæ maksymalny dozwolony Rozmiar Obrazka jaki mo¿e byæ za³±czony (Szeroko¶æ x Wysoko¶æ w pikselach).<br />Je¿eli ustawisz 0x0, ta opcja zostanie wy³±czona. Z niektórymi Obrazkami ta opcja nie bêdzie dzia³aæ w zwi±zku z ograniczeniami PHP.';
$lang['Image_link_size'] = 'Rozdzielczo¶æ Obrazka nim zostanie zamieniony na Link';
$lang['Image_link_size_explain'] = 'Je¿eli zdefiniowana tutaj rozdzielczo¶æ zostanie osi±gniêta przez obrazek to wtedy bêdzie pokazywany jako link.<br />Ta opcja dzia³a tylko gdy <i>Wy¶wietlaj Obrazki bezpo¶rednio we wpisie</i> jest w³±czone.<br />Je¿eli w tym polu ustawisz 0x0, wówczas równie¿ ta funkcja zostanie wy³±czona. Z niektórymi Obrazkami ta opcja nie bêdzie dzia³aæ w zwi±zku z ograniczeniami PHP.';
$lang['Assigned_group'] = 'Przypisana Grupa';

$lang['Image_create_thumbnail'] = 'Utwórz Miniaturkê Obrazka';
$lang['Image_create_thumbnail_explain'] = 'Zawsze twórz Miniaturkê. Ta funkcja nadpisuje (ma wy¿szy priorytet) prawie wszystkie ustawienia dla Specjalnych Kategorii, z wyj±tkiem <i>Maksymalna Rozdzielczo¶æ Obrazka</i>. Z t± funkcj± w³±czon± Miniaturka jest wy¶wietlana we wpisie i U¿ytkownik mo¿e na ni± klikn±æ aby otworzyæ ca³y Obrazek.<br />Pamiêtaj, ¿e ta funkcja wymaga zainstalowanego Imagick. Je¿eli Imagick nie jest zainstalowany lub tryb Safe-Mode jest w³±czony wówczas zostanie u¿yta biblioteka GD. Je¿eli ten typ pliku graficznego nie jest obs³ugiwany przez PHP wówczas ta funkcja nie zostanie u¿yta.';
$lang['Image_min_thumb_filesize'] = 'Minimalny Rozmiar Pliku Miniaturki';
$lang['Image_min_thumb_filesize_explain'] = 'Je¿eli obrazek jest mniejszy ni¿ zdefiniowany rozmiar pliku wówczas Miniaturka nie zostanie utworzona poniewa¿ ju¿ sam obrazek jest wystarczaj±co ma³y i Miniaturka by³aby nieczytelna.';
$lang['Image_imagick_path'] = 'Imagick Program (ca³a ¶cie¿ka)';
$lang['Image_imagick_path_explain'] = 'Wpisz ¶cie¿kê do programu conwertuj±cego imagick, zazwyczaj /usr/bin/convert (w windows: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Szukaj Imagick';

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Zarz±dzaj Zabronionymi Rozszerzeniami';
$lang['Manage_forbidden_extensions_explain'] = 'Tutaj mo¿esz dodawaæ lub kasowaæ zabronione rozszerzenia. Rozszerzenia php, php3 i php4 s± domy¶lnie niedozwolone - nie mo¿esz ich skasowaæ.';
$lang['Forbidden_extension_exist'] = 'Zabronione Rozszerzenie %s ju¿ istnieje'; // replace %s with the extension

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Administracja Za³±cznikami';
$lang['Control_panel_explain'] = 'Tutaj mo¿esz wy¶wietliæ i zarz±dzaæ wszystkimi Za³±cznikami posortowanymi wg U¿ytkowników, Za³±czników, Wy¶wietleñ itd....';
$lang['File_comment_cp'] = 'Komentarz do pliku';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'U¿yj * jako zamiennika dowolnego ci±gu znaków';
$lang['Size_smaller_than'] = 'Rozmiar Za³±cznika mniejszy ni¿ (bajtów)';
$lang['Size_greater_than'] = 'Rozmiar Za³±cznika wiêkszy ni¿ (bajtów)';
$lang['Count_smaller_than'] = 'Licznik ¶ci±gniêæ jest mniejszy ni¿';
$lang['Count_greater_than'] = 'Licznik ¶ci±gniêæ jest wiêkszy ni¿';
$lang['More_days_old'] = 'Poka¿ starsze ni¿ ? dni';
$lang['No_attach_search_match'] = 'Nie znaleziono Za³±czników spe³niaj±cych twoje kryteria';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Ilo¶æ Za³±czników';
$lang['Total_filesize'] = 'Ca³kowite miejsce zajmowane przez wszystkie Za³±czniki';
$lang['Number_posts_attach'] = 'Ilo¶æ wpisów z Za³±cznikami';
$lang['Number_topics_attach'] = 'Ilo¶æ tematów z Za³±cznikami';
$lang['Number_users_attach'] = 'Ilo¶æ u¿ytkowników którzy dodali Za³±czniki';
$lang['Number_pms_attach'] = 'Suma wszystkich Za³±czników w Prywatnych Wiadomo¶ciach';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statystyki Za³±czników dla: %s'; // replace %s with username
$lang['Size_in_kb'] = 'Rozmiar (KB)';
$lang['Downloads'] = '¦ci±gniêæ';
$lang['Post_time'] = 'Czas wpisu';
$lang['Posted_in_topic'] = 'Zamieszczony w Temacie';
$lang['Submit_changes'] = 'Zatwierd¼  Zmiany';

// Sort Types
$lang['Sort_Attachments'] = 'Za³±czniki';
$lang['Sort_Size'] = 'Rozmiar';
$lang['Sort_Filename'] = 'Nazwa pliku';
$lang['Sort_Comment'] = 'Komentarz';
$lang['Sort_Extension'] = 'Rozszerzenie';
$lang['Sort_Downloads'] = '¦ci±gniêæ';
$lang['Sort_Posttime'] = 'Czasu wpisu';
$lang['Sort_Posts'] = 'Wpisów';

// View Types
$lang['View_Statistic'] = 'Statystyka';
$lang['View_Search'] = 'Szukaj';
$lang['View_Username'] = 'U¿ytkownik';
$lang['View_Attachments'] = 'Za³±czniki';

// Successfully updated
$lang['Attach_config_updated'] = 'Konfiguracja Za³±czników Zosta³a Uaktualniona';
$lang['Click_return_attach_config'] = 'Kliknij %sTutaj%s aby powróciæ do Konfiguracji Za³±czników';
$lang['Test_settings_successful'] = 'Ustawienia Przetestowane, konfiguracja wygl±da na prawid³ow±.';

// Some basic definitions
$lang['Attachments'] = 'Za³±czniki';
$lang['Attachment'] = 'Za³±cznik';
$lang['Extensions'] = 'Rozszerzenia';
$lang['Extension'] = 'Rozszerzenie';

// Auth pages
$lang['Auth_attach'] = 'Za³±czniki';
$lang['Auth_download'] = 'Pobierz Pliki';

?>