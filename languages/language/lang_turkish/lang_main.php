<?php
/***************************************************************************
 *                            lang_main.php [Turkish]
 *                              -------------------
 *     begin                : Wed Jan 9 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1 2003/06/04 15:47:59 bob Exp $
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
// Translation by:
//
// Onur Turgay (postexitus)  :: onurturgay@isnet.net.tr :: http://welcome.to/aaal2000
// Erdem Corapcioglu (erdem) :: erdem@smtg.org         :: http://www.smtg.org
//
// For questions and comments use: onurturgay@isnet.net.tr
//

// Comment out the line below if you use windows based server
// setlocale(LC_ALL, 'tr_TR.ISO-8859-9');

$lang['ENCODING'] = 'iso-8859-9';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] ='d M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = _DATEBRIEF;
// End PNphpBB2 Module

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategori';
$lang['Topic'] = 'Ba�l�k';
$lang['Topics'] = 'Ba�l�klar';
$lang['Replies'] = 'Cevaplar';
$lang['Views'] = 'G�r�nt�leme';
$lang['Post'] = 'Mesaj';
$lang['Posts'] = 'Mesajlar';
$lang['Posted'] = 'Tarih';
$lang['Username'] = 'Kullan�c� Ad�';
$lang['Password'] = '�ifre';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'G�nderen';
$lang['Author'] = 'Yazar';
$lang['Time'] = 'Saat';
$lang['Hours'] = 'Saat';
$lang['Message'] = 'Mesaj';

$lang['1_Day'] = '1 G�nl�k';
$lang['7_Days'] = '7 G�nl�k';
$lang['2_Weeks'] = '2 Haftal�k';
$lang['1_Month'] = '1 Ayl�k';
$lang['3_Months'] = '3 Ayl�k';
$lang['6_Months'] = '6 Ayl�k';
$lang['1_Year'] = '1 Y�ll�k';

$lang['Go'] = 'OK';
$lang['Jump_to'] = 'Forum Se�in';
$lang['Submit'] = 'G�nder';
$lang['Reset'] = 'Sil';
$lang['Cancel'] = '�ptal';
$lang['Preview'] = '�nizleme';
$lang['Confirm'] = 'Onayla';
$lang['Spellcheck'] = 'Spellcheck';
$lang['Yes'] = 'Evet';
$lang['No'] = 'Hay�r';
$lang['Enabled'] = 'A��k';
$lang['Disabled'] = 'Kapal�';
$lang['Error'] = 'Hata';

$lang['Next'] = 'Sonraki';
$lang['Previous'] = '�nceki';
$lang['Goto_page'] = 'Sayfa';
$lang['Joined'] = 'Kay�t';
$lang['IP_Address'] = 'IP Adresi';

$lang['Select_forum'] = 'Bir Forum Se�in';
$lang['View_latest_post'] = 'Son Mesajlar� G�r';
$lang['View_newest_post'] = 'Yeni Mesajlar� G�r';
$lang['Page_of'] =  '<b>%d</b>. sayfa  (Toplam <b>%d</b> sayfa)'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Numaras�';
$lang['AIM'] = 'AIM Adresi';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Forum Ana Sayfas�';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Yeni Ba�l�k G�nder';
$lang['Reply_to_topic'] = 'Cevap G�nder';
$lang['Reply_with_quote'] = 'Al�nt�yla Cevap Ver';

$lang['Click_return_topic'] = 'Mesajlara d�nmek i�in %sburaya%s t�klay�n'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Bir daha denemek i�in %sburaya%s t�klay�n';
$lang['Click_return_forum'] = 'Foruma d�nmek i�in %sburaya%s t�klay�n';
$lang['Click_view_message'] = 'Mesaj�n�z� g�rmek i�in %sburaya%s t�klay�n';
$lang['Click_return_modcp'] = 'Moderator Kontrol Paneline d�nmek i�in %sburaya%s t�klay�n';
$lang['Click_return_group'] = 'Grup bilgilerine d�nmek i�in %sburaya%s t�klay�n';

$lang['Admin_panel'] = 'Y�netim Paneli';

$lang['Board_disable'] = '�zg�n�z, forumumuz �imdilik kapal�d�r. L�tfen daha sonra tekrar deneyiniz.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Kay�tl� Kullan�c�lar:';
$lang['Browsing_forum'] = 'Bu forumu gezen kullan�c�lar:';
$lang['Online_users_zero_total'] = 'Toplam <b>0</b> kullan�c� online :: ';
$lang['Online_users_total'] = 'Toplam <b>%d</b> kullan�c� online :: ';
$lang['Online_user_total'] = $lang['Online_users_total'];
$lang['Reg_users_zero_total'] = '0 Kay�tl�, ';
$lang['Reg_users_total'] = '%d Kay�tl�, ';
$lang['Reg_user_total'] = '%d Kay�tl�, ';
$lang['Hidden_users_zero_total'] = '0 Gizli ve ';
$lang['Hidden_user_total'] = '%d Gizli ve ';
$lang['Hidden_user_total'] = '%d Gizli ve ';
$lang['Guest_users_zero_total'] = '0 Misafir';
$lang['Guest_users_total'] = '%d Misafir';
$lang['Guest_user_total'] = '%d Misafir';
$lang['Record_online_users'] = 'Sitede bug�ne kadar en �ok <b>%s</b> ki�i %s tarihinde online oldu.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdmin%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = 'Son ziyaretiniz: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Forum Saati: %s'; // %s replaced by time

$lang['Search_new'] = 'Son geli�inizden bu yana g�nderilen mesajlar';
$lang['Search_your_posts'] = 'Kendi mesajlar�n�z';
$lang['Search_unanswered'] = 'Cevaplanmam�� mesajlar';

$lang['Register'] = 'Kay�t Ol';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profilinizi De�i�tirin';
$lang['Search'] = 'Arama';
$lang['Memberlist'] = '�ye Listesi';
$lang['FAQ'] = 'SSS';
$lang['BBCode_guide'] = 'BBCode Kullanma K�lavuzu';
$lang['Usergroups'] = 'Kullan�c� Gruplar�';
$lang['Last_Post'] = 'Son G�nderilen';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderator';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Kullan�c�lar�m�z toplam <b>0</b> mesaj att�lar'; // Number of posts
$lang['Posted_articles_total'] = 'Kullan�c�lar�m�z toplam <b>%d</b> mesaj att�lar'; // Number of posts
$lang['Posted_article_total'] = 'Kullan�c�lar�m�z toplam <b>%d</b> mesaj att�lar'; // Number of posts
$lang['Registered_users_zero_total'] = 'Toplam <b>0</b> kay�tl� kullan�c�m�z var'; // # registered users
$lang['Registered_users_total'] = 'Toplam <b>%d</b> kay�tl� kullan�c�m�z var'; // # registered users
$lang['Registered_user_total'] = 'Toplam <b>%d</b> kay�tl� kullan�c�m�z var'; // # registered users
$lang['Newest_user'] = 'Son kaydolan kullan�c�m�z: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Son ziyaretinizden bu yana hi� yeni mesaj yok';
$lang['No_new_posts'] = 'Yeni mesaj yok';
$lang['New_posts'] = 'Yeni mesaj var';
$lang['New_post'] = 'Yeni mesaj var';
$lang['No_new_posts_hot'] = 'Yeni mesaj yok [ Pop�ler ]';
$lang['New_posts_hot'] = 'Yeni mesaj var [ Pop�ler ]';
$lang['No_new_posts_locked'] = 'Yeni mesaj yok [ Kilitli ]';
$lang['New_posts_locked'] = 'Yeni mesaj var [ Kilitli ]';
$lang['Forum_is_locked'] = 'Forum kilitlenmi�tir';


//
// Login
//
$lang['Enter_password'] = 'L�tfen Kullan�c� �sminizi ve �ifrenizi Giriniz';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';

$lang['Forgotten_password'] = '�ifremi Unuttum';

$lang['Log_me_in'] = 'Beni hat�rla';

$lang['Error_login'] = 'Yanl�� ya da aktive edilmemi� bir kullan�c� ad� veya yanl�� bir �ifre girdiniz';


//
// Index page
//
$lang['Index'] = 'Ana Sayfa';
$lang['No_Posts'] = 'Mesaj Yok';
$lang['No_forums'] = 'Bu sitenin hen�z hi� forumu yok';

$lang['Private_Message'] = '�zel Mesaj';
$lang['Private_Messages'] = '�zel Mesajlar';
$lang['Who_is_Online'] = 'Kimler Online';

$lang['Mark_all_forums'] = 'T�m forumlar� okunmu� say';
$lang['Forums_marked_read'] = 'T�m forumlar okunmu� say�ld�';


//
// Viewforum
//
$lang['View_forum'] = 'Forumu g�r�nt�le';

$lang['Forum_not_exist'] = 'Se�ti�iniz forum bu sitede bulunmamaktad�r';
$lang['Reached_on_error'] = 'Bu sayfaya bir hata sonucu geldiniz';

$lang['Display_topics'] = 'Mesajlar� g�ster';
$lang['All_Topics'] = 'Hepsi';

$lang['Topic_Announcement'] = '<b>Duyuru:</b>';
$lang['Topic_Sticky'] = '<b>Sabit:</b>';
$lang['Topic_Moved'] = '<b>Ta��nd�:</b>';
$lang['Topic_Poll'] = '<b>[ Anket ]</b>';

$lang['Mark_all_topics'] = 'T�m mesajlar� okunmu� say';
$lang['Topics_marked_read'] = 'Bu forumdaki t�m mesajlar okunmu� say�ld�';

$lang['Rules_post_can'] = 'Bu forumda yeni konular <b>a�abilirsiniz</b>';
$lang['Rules_post_cannot'] = 'Bu forumda yeni konular <b>a�amazs�n�z</b>';
$lang['Rules_reply_can'] = 'Bu forumdaki mesajlara cevap <b>verebilirsiniz</b>';
$lang['Rules_reply_cannot'] = 'Bu forumdaki mesajlara cevap <b>veremezsiniz</b>';
$lang['Rules_edit_can'] = 'Bu forumdaki mesajlar�n�z� <b>de�i�tirebilirsiniz</b>';
$lang['Rules_edit_cannot'] = 'Bu forumdaki mesajlar�n�z� <b>de�i�tiremezsiniz</b>';
$lang['Rules_delete_can'] = 'Bu forumdaki mesajlar�n�z� <b>silebilirsiniz</b>';
$lang['Rules_delete_cannot'] = 'Bu forumdaki mesajlar�n�z� <b>silemezsiniz</b>';
$lang['Rules_vote_can'] = 'Bu forumdaki anketlerde oy <b>kullanabilirsiniz</b>';
$lang['Rules_vote_cannot'] = 'Bu forumdaki anketlerde oy <b>kullanamazs�n�z</b>';
$lang['Rules_moderate'] = 'Bu forumu %smodere%s <b>edebilirsiniz</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Bu forumda hi� mesaj yok<br />Yeni bir tane g�ndermek i�in<b>Yeni Ba�l�k Yolla</b> linkine t�klay�n';


//
// Viewtopic
//
$lang['View_topic'] = 'Ba�l��� G�r�nt�le';

$lang['Guest'] = 'Misafir';
$lang['Post_subject'] = 'Mesaj konusu';
$lang['View_next_topic'] = 'Sonraki ba�l�k';
$lang['View_previous_topic'] = '�nceki ba�l�k';
$lang['Submit_vote'] = 'Oy Ver';
$lang['View_results'] = 'Sonu�lar� G�r';

$lang['No_newer_topics'] = 'Bu forumda daha yeni ba�l�k yok';
$lang['No_older_topics'] = 'Bu forumda daha eski ba�l�k yok';
$lang['Topic_post_not_exist'] = 'Se�ti�iniz ba�l�k bu forumda yok';
$lang['No_posts_topic'] = 'Bu ba�l��a hi� cevap gelmemi�';

$lang['Display_posts'] = 'Mesajlar� g�ster';
$lang['All_Posts'] = 'Hepsi';
$lang['Newest_First'] = 'yeniden-eskiye';
$lang['Oldest_First'] = 'eskiden-yeniye';

$lang['Back_to_top'] = 'Ba�a d�n';

$lang['Read_profile'] = 'Kullan�c� profilini g�r';
$lang['Send_email'] = 'Kullan�c�ya e-mail g�nder';
$lang['Visit_website'] = 'Kullan�c�n�n web sitesini ziyaret et';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Mesaj� de�i�tir/sil';
$lang['View_IP'] = 'Bu mesaj� g�nderenin IP adresine bak';
$lang['Delete_post'] = 'Bu mesaj� sil';

$lang['wrote'] = 'demi� ki'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Al�nt�'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'En son %s taraf�ndan %s tarihinde de�i�tirildi, toplamda %d kere de�i�tirildi'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'En son %s taraf�ndan %s tarihinde de�i�tirildi, toplamda %d kere de�i�tirildi'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Bu ba�l��� kilitle';
$lang['Unlock_topic'] = 'Bu ba�l���n kilidini a�';
$lang['Move_topic'] = 'Bu ba�l��� ta��';
$lang['Delete_topic'] = 'Bu ba�l��� sil';
$lang['Split_topic'] = 'Bu ba�l��� b�l';

$lang['Stop_watching_topic'] = 'Bu ba�l��� takip etmeyi b�rak';
$lang['Start_watching_topic'] = 'Bu ba�l��� cevaplar i�in takip et';
$lang['No_longer_watching'] = 'Art�k bu ba�l��� takip etmiyorsunuz';
$lang['You_are_watching'] = '�u anda bu ba�l��� cevaplar i�in takip ediyorsunuz';

$lang['Total_votes'] = 'Toplam Oylar';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Mesaj G�vdesi';
$lang['Topic_review'] = 'Orjinal Mesaj';

$lang['No_post_mode'] = 'Hi�bir post metodu se�ilmedi'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Yeni bir ba�l�k g�nder';
$lang['Post_a_reply'] = 'Cevap G�nder';
$lang['Post_topic_as'] = 'Mesaj T�r�';
$lang['Edit_Post'] = 'Mesaj� De�i�tir';
$lang['Options'] = 'Se�enekler';

$lang['Post_Announcement'] = 'Duyuru';
$lang['Post_Sticky'] = 'Sabit';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Bu mesaj� silmek istedi�inize emin misiniz?';
$lang['Confirm_delete_poll'] = 'Bu anketi silmek istedi�inize emin misiniz?';

$lang['Flood_Error'] = 'Son mesaj�n�zdan bu kadar k�sa s�re sonra bir yenisini g�nderemezsiniz, l�tfen k�sa bir s�re sonra tekrar deneyiniz';
$lang['Empty_subject'] = 'Yeni bir ba�l�k a�arken konu belirtmek zorundas�n�z';
$lang['Empty_message'] = 'Bo� bir mesaj g�nderemezsiniz';
$lang['Forum_locked'] = 'Bu forum kilitlenmi�tir, yeni bir ba�l�k a�amazs�n�z, cevap g�nderebilir ya da mesajlar� de�i�tirebilirsiniz';
$lang['Topic_locked'] = 'Bu ba�l�k kilitlenmi�tir, cevap yazamaz ya da mesajlar� de�i�tiremezsiniz';
$lang['No_post_id'] = 'De�i�tirmek i�in bir mesaj se�melisiniz';
$lang['No_topic_id'] = 'Cevap vermek i�in bir mesaj se�melisiniz';
$lang['No_valid_mode'] = 'Sadece mesaj gonderebilir, de�i�tirebilir, cevap verebilir, al�nt� yapabilirsiniz; l�tfen geri d�n�p tekrar deneyin';
$lang['No_such_post'] = 'B�yle bir mesaj yok, l�tfen geri d�n�p tekrar deneyin';
$lang['Edit_own_posts'] = '�zg�n�z, sadece kendi mesajlar�n�z� de�i�tirebilirsiniz';
$lang['Delete_own_posts'] = '�zg�n�z, sadece kendi mesajlar�n�z� silebilirsiniz';
$lang['Cannot_delete_replied'] = '�zg�n�z, cevap verilmi� olan mesajlar�n�z� silemezsiniz';
$lang['Cannot_delete_poll'] = '�zg�n�z, aktif bir anketi silemezsiniz';
$lang['Empty_poll_title'] = 'Anketiniz i�in bir ba�l�k girmelisiniz';
$lang['To_few_poll_options'] = 'Anket i�in en az iki ��k girmelisiniz';
$lang['To_many_poll_options'] = 'Anket i�in �ok fazla ��k girdiniz';
$lang['Post_has_no_poll'] = 'Bu mesajda anket yoktur';
$lang['Already_voted'] = 'Bu anket i�in daha �nce oy kulland�n�z';
$lang['No_vote_option'] = 'Oy kullan�rken bir ��k belirtmelisiniz';

$lang['Add_poll'] = 'Anket Ekle';
$lang['Add_poll_explain'] = 'E�er mesaj�n�za bir anket eklemek istemiyorsan�z, a�a��daki b�l�mleri bo� b�rak�n';
$lang['Poll_question'] = 'Anket sorusu';
$lang['Poll_option'] = 'Anket ��kk�';
$lang['Add_option'] = 'Bu ��kk� ekle';
$lang['Update'] = 'G�ncelle';
$lang['Delete'] = 'Sil';
$lang['Poll_for'] = 'G�sterim s�resi';
$lang['Days'] = 'G�n'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ S�n�rlama koymamak i�in 0 yaz�n ya da bo� b�rak�n ]';
$lang['Delete_poll'] = 'Anketi sil';

$lang['Disable_HTML_post'] = 'Bu mesajda HTML kullanma';
$lang['Disable_BBCode_post'] = 'Bu mesajda BBCode kullanma';
$lang['Disable_Smilies_post'] = 'Bu mesajda Smilileri kullanma';

$lang['HTML_is_ON'] = 'HTML <u>A��k</u>';
$lang['HTML_is_OFF'] = 'HTML <u>Kapal�</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>A��k</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>Kapal�</u>';
$lang['Smilies_are_ON'] = 'Smililer <u>A��k</u>';
$lang['Smilies_are_OFF'] = 'Smililer <u>Kapal�</u>';

$lang['Attach_signature'] = '�mzam� ekle (imzan�z profil b�l�m�nden de�i�tirilebilir)';
$lang['Notify'] = 'Cevap geldi�inde bana haber ver';
$lang['Delete_post'] = 'Bu mesaj� sil';

$lang['Stored'] = 'Mesaj�n�z ba�ar�yla g�nderilmi�tir';
$lang['Deleted'] = 'Mesaj�n�z ba�ar�yla silinmi�tir';
$lang['Poll_delete'] = 'Anketiniz ba�ar�yla silinmi�tir';
$lang['Vote_cast'] = 'Oyunuz ankete eklendi';

$lang['Topic_reply_notification'] = 'Cevap g�zleme';

$lang['bbcode_b_help'] = 'Kal�n yaz�: [b]metin[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Italic yaz�: [i]metin[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Alt�izgili yaz�: [u]metin[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Al�nt�: [quote]metin[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kod g�r�nt�leme: [code]kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Liste: [list]liste[/list] (alt+l)';
$lang['bbcode_o_help'] = 'S�ral� liste: [list=]metin[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Resim koy: [img]http://adres[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL koy: [url]http://url[/url] ya da [url=http://url]metin[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'A��k t�m BBCode komutlar�n� sonland�r�r.';
$lang['bbcode_s_help'] = 'Font rengi: [color=red]metin[/color]  Tiyo: color=#FF0000 diye de kullan�lailbir';
$lang['bbcode_f_help'] = 'Font boyutu: [size=x-small]k���k font[/size]';

$lang['Emoticons'] = 'Smiley Paneli';
$lang['More_emoticons'] = 'T�m smilileri g�ster';

$lang['Font_color'] = 'Font rengi';
$lang['color_default'] = 'Standart';
$lang['color_dark_red'] = 'Koyu k�rm�z�';
$lang['color_red'] = 'K�rm�z�';
$lang['color_orange'] = 'Turuncu';
$lang['color_brown'] = 'Kahverengi';
$lang['color_yellow'] = 'Sar�';
$lang['color_green'] = 'Ye�il';
$lang['color_olive'] = 'Haki';
$lang['color_cyan'] = 'Turkuaz';
$lang['color_blue'] = 'Mavi';
$lang['color_dark_blue'] = 'Koyu mavi';
$lang['color_indigo'] = 'Mor';
$lang['color_violet'] = 'Eflatun';
$lang['color_white'] = 'Beyaz';
$lang['color_black'] = 'Siyah';

$lang['Font_size'] = 'Font boyutu';
$lang['font_tiny'] = 'Ufac�k';
$lang['font_small'] = 'K���k';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'B�y�k';
$lang['font_huge'] = 'Kocaman';

$lang['Close_Tags'] = 'Komutlar� Sonland�r';
$lang['Styles_tip'] = 'Tavsiye: Yaz�y� se�erek burdaki stilleri daha rahat uygulayabilirsiniz';


//
// Private Messaging
//
$lang['Private_Messaging'] = '�zel Mesajlar';

$lang['Login_check_pm'] = '�zel mesajlar�n�z� kontrol etmek i�in login olun';
$lang['New_pms'] = '%d adet yeni mesaj�n�z var'; // You have 2 new messages
$lang['New_pm'] = '%d adet yeni mesaj�n�z var'; // You have 1 new message
$lang['No_new_pm'] = 'Yeni mesaj�n�z yok';
$lang['Unread_pms'] = '%d adet okunmam�� mesaj�n�z var';
$lang['Unread_pm'] = '%d adet okunmam�� mesaj�n�z var';
$lang['No_unread_pm'] = 'Okunmam�� mesaj�n�z yok';
$lang['You_new_pm'] = 'Yeni bir �zel mesaj sizi bekliyor';
$lang['You_new_pms'] = 'Yeni �zel mesajlar sizi bekliyor';
$lang['You_no_new_pm'] = 'Bekleyen yeni mesaj�n�z yok';

$lang['Unread_message'] = 'Okunmam�� mesaj';
$lang['Read_message'] = 'Okunmu� mesaj';

$lang['Read_pm'] = 'Mesaj� oku';
$lang['Post_new_pm'] = 'Mesaj� g�nder';
$lang['Post_reply_pm'] = 'Mesaja cevap ver';
$lang['Post_quote_pm'] = 'Al�nt� yap';
$lang['Edit_pm'] = 'Mesaj� d�zenle';

$lang['Inbox'] = 'Gelenler';
$lang['Outbox'] = 'G�nderilenler';
$lang['Savebox'] = 'Saklananlar';
$lang['Sentbox'] = 'Ula�anlar';
$lang['Flag'] = 'Durum';
$lang['Subject'] = 'Konu';
$lang['From'] = 'Kimden';
$lang['To'] = 'Kime';
$lang['Date'] = 'Tarih';
$lang['Mark'] = '��aret';
$lang['Sent'] = 'G�nderildi';
$lang['Saved'] = 'Kaydedildi';
$lang['Delete_marked'] = 'Se�ilenleri Sil';
$lang['Delete_all'] = 'Hepsini Sil';
$lang['Save_marked'] = 'Se�ilenleri Sakla';
$lang['Save_message'] = 'Mesaj� Sakla';
$lang['Delete_message'] = 'Mesaj� Sil';

$lang['Display_messages'] = 'mesajlar� g�ster'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'T�m';

$lang['No_messages_folder'] = 'Bu klas�rde hi� mesaj�n�z yok';

$lang['PM_disabled'] = 'Bu sitede �zel Mesajla�ma engellenmi�tir';
$lang['Cannot_send_privmsg'] = '�zg�n�z, administrator sizin �zel mesaj atma hakk�n�z� iptal etmi�tir';
$lang['No_to_user'] = 'Bu mesaj� g�ndermek i�in bir kullan�c� ad� belirtmelisiniz';
$lang['No_such_user'] = '�zg�n�z, b�yle bir kullan�c� bulunmamaktad�r';

$lang['Disable_HTML_pm'] = 'Bu mesajda HTML\'i kapa';
$lang['Disable_BBCode_pm'] = 'Bu mesajda BBCode\'u kapa';
$lang['Disable_Smilies_pm'] = 'Bu mesajda Smilileri kullanma';

$lang['Message_sent'] = 'Mesaj�n�z g�nderilmi�tir';

$lang['Click_return_inbox'] = 'Gelenler Kutusuna d�nmek i�in %sburaya%s t�klay�n';
$lang['Click_return_index'] = 'Ana Sayfaya gitmek i�in %sburaya%s t�klay�n';

$lang['Send_a_new_message'] = 'Yeni bir �zel mesaj g�nder';
$lang['Send_a_reply'] = '�zel bir mesaja cevap ver';
$lang['Edit_message'] = '�zel mesaj� de�i�tir';

$lang['Notification_subject'] = 'Yeni bir �zel mesaj geldi';

$lang['Find_username'] = 'Kullan�c� ad� bul';
$lang['Find'] = 'Bul';
$lang['No_match'] = 'Kullan�c� ad� bulunamad�';

$lang['No_post_id'] = 'Mesaj ID\'si belirtilmemi�';
$lang['No_such_folder'] = 'B�yle bir klas�r yok';
$lang['No_folder'] = 'Klas�r belirtilmemi�';

$lang['Mark_all'] = 'Hepsini i�aretle';
$lang['Unmark_all'] = '��aretleri kald�r';

$lang['Confirm_delete_pm'] = 'Bu mesaj� silmek istedi�inize emin misiniz?';
$lang['Confirm_delete_pms'] = 'Bu mesajlar� silmek istedi�inize emin misiniz?';

$lang['Inbox_size'] = 'Gelenler Kutunuz %d%% dolu'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Ula�anlar Kutunuz %d%% dolu';
$lang['Savebox_size'] = 'Saklananlar Kutunuz %d%% dolu';

$lang['Click_view_privmsg'] = 'Gelenler Kutunuza gitmek i�in %sburaya%s t�klay�n�z';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profili g�r�nt�lenen :: %s'; // %s is username
$lang['About_user'] = '%s hakk�nda'; // %s is username

$lang['Preferences'] = 'Se�enekler';
$lang['Items_required'] = '* i�aretli b�l�mler aksi belirtilmedik�e doldurulmak zorundad�r';
$lang['Registration_info'] = 'Kay�t bilgileri';
$lang['Profile_info'] = 'Profil';
$lang['Profile_info_warn'] = 'Bu bilgiler herkes taraf�ndan g�r�lebilecektir';
$lang['Avatar_panel'] = 'Avatar kontrol paneli';
$lang['Avatar_gallery'] = 'Avatar galerisi';

$lang['Website'] = 'Web sitesi';
$lang['Location'] = 'Nerden';
$lang['Contact'] = 'Haberle�me:';
$lang['Email_address'] = 'E-mail adresi';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = '�zel mesaj g�nder';
$lang['Hidden_email'] = '[ Gizli ]';
$lang['Search_user_posts'] = 'Bu kullan�c�n�n g�nderdi�i mesajlar� bul';
$lang['Interests'] = '�lgi alanlar�';
$lang['Occupation'] = 'Meslek';
$lang['Poster_rank'] = 'Kullan�c� derecesi';

$lang['Total_posts'] = 'Mesaj Say�s�';
$lang['User_post_pct_stats'] = 'T�m mesajlar�n %.2f%%'; // 1.25% of total
$lang['User_post_day_stats'] = 'Ortalama herg�n %.2f mesaj'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s taraf�ndan g�nderilen t�m mesajlar� bul'; // Find all posts by username

$lang['No_user_id_specified'] = '�zg�n�z, b�yle bir kullan�c� yok';
$lang['Wrong_Profile'] = 'Kendinizin olmayan bir profili de�i�tiremezsiniz';

$lang['Only_one_avatar'] = 'Sadece bir tip avatar se�ilebilir';
$lang['File_no_data'] = 'Verdi�iniz URL\'deki dosya bilgi i�ermiyor';
$lang['No_connection_URL'] = 'Verdi�iniz URL ile ba�lant� kurulamad�';
$lang['Incomplete_URL'] = 'Verdi�iniz URL tamamlanmam��';
$lang['Wrong_remote_avatar_format'] = 'URL\'sini verdi�iniz avatar, do�ru bir formatta de�il';
$lang['No_send_account_inactive'] = '�u anda �ifreniz belirlenemiyor ��nk� hesab�n�z aktif de�il. L�tfen forum admini ile g�r���n�z';

$lang['Always_smile'] = 'Smilileri her zaman kullan';
$lang['Always_html'] = 'Her zaman HTML kullan';
$lang['Always_bbcode'] = 'Her zaman BBCode kullan';
$lang['Always_add_sig'] = 'Her zaman imzam� ekle';
$lang['Always_notify'] = 'Her zaman beni cevaplardan haberdar et';
$lang['Always_notify_explain'] = 'Sizin g�nderdi�iniz biz ba�l��a her cevap geldi�inde sizi e-mail ile haberdar eder. Bu her mesaj g�nderi�inizde de de�i�tirilebilir.';

$lang['Board_style'] = 'Ana tema';
$lang['Board_lang'] = 'Dil';
$lang['No_themes'] = 'Kay�tl� tema yok';
$lang['Timezone'] = 'Zaman dilimi';
$lang['Date_format'] = 'Saat format�';
$lang['Date_format_explain'] = 'Kullan�lan yaz�m tarz� PHP\'deki <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> fonksiyonuna e�tir';
$lang['Signature'] = '�mza';
$lang['Signature_explain'] = 'Bu g�nderdi�iniz mesajlara eklenebilecek bir yaz� blo�udur. %d karakterlik bir limit vard�r';
$lang['Public_view_email'] = 'Herzaman e-mail adresimi g�ster';

$lang['Current_password'] = '�imdiki �ifreniz';
$lang['New_password'] = 'Yeni �ifreniz';
$lang['Confirm_password'] = 'Yeni �ifrenizi tekrar girin';
$lang['Confirm_password_explain'] = '�ifrenizi ya da e-mail adresinizi de�i�tirmek i�in �ifrenizi tekrar girerek onaylaman�z gerekmektedir';
$lang['password_if_changed'] = 'Sadece de�i�tirmek istiyorsan�z �ifrenizi yazmal�s�n�z';
$lang['password_confirm_if_changed'] = 'Sadece �ifrenizi de�i�tirdiyseniz yeni �ifrenizi onaylamal�s�n�z';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Mesajlar�n�z�n yan�ndaki k���k resim. Bir seferde sadece bir resim g�sterilebilir, geni�li�i %d pixelden, y�ksekli�i %d pixelden ve boyutu %dkB\'tan b�y�k olamaz.';
$lang['Upload_Avatar_file'] = 'Bilgisayar�n�zdan bir avatar yollay�n';
$lang['Upload_Avatar_URL'] = 'Bir URL\'den Avatar g�nderin';
$lang['Upload_Avatar_URL_explain'] = 'Avatar\'�n oldu�u sitenin URL\'sini girin, buraya kopyalanacakt�r';
$lang['Pick_local_Avatar'] = 'Avatar\'� galeriden se�in';
$lang['Link_remote_Avatar'] = 'Ba�ka bir siteden Avatar se�in';
$lang['Link_remote_Avatar_explain'] = '�stedi�iniz ba�ka bir Avatar�n URLsini girin. Bu siteye kopyalanmayacakt�r';
$lang['Avatar_URL'] = 'Avatar URL\'si';
$lang['Select_from_gallery'] = 'Galeriden Avatar se�in';
$lang['View_avatar_gallery'] = 'Galeriyi g�ster';

$lang['Select_avatar'] = 'Avatar� Se�';
$lang['Return_profile'] = '�ptal';
$lang['Select_category'] = 'Kategori se�';

$lang['Delete_Image'] = 'Avatar� sil';
$lang['Current_Image'] = '�u andaki Avatar';

$lang['Notify_on_privmsg'] = '�zel Mesaj gelince beni haberdar et';
$lang['Popup_on_privmsg'] = '�zel Mesaj gelince yeni bir pencere a�';
$lang['Popup_on_privmsg_explain'] = 'Bu se�ene�i se�erek, yeni bir �zel Mesaj geldi�inde yeni bir pencere ile haberdar edilirsiniz';
$lang['Hide_user'] = 'Online oldu�umu gizle';

$lang['Profile_updated'] = 'Profiliniz g�ncellendi';
$lang['Profile_updated_inactive'] = 'Profiliniz g�ncellendi, ama baz� �nemli bilgileri de�i�tirdi�iniz i�in hesab�n�z aktif de�il. Yeniden aktif hale getirmek i�in yapman�z gerekenleri bulmak i�in e-mail\'inizi kontrol edin, e�er admin onay� gerekiyorsa, adminin onaylamas�n� bekleyin';

$lang['Password_mismatch'] = 'Girdi�iniz �ifreler birbirini tutmuyor';
$lang['Current_password_mismatch'] = 'Girdi�iniz �ifre �u andaki �ifrenizi tutmuyor';
$lang['Password_long'] = '�ifreniz 32 karakterden uzun olamaz';
$lang['Username_taken'] = '�zg�n�z bu kullan�c� ismi daha �nce al�nm��';
$lang['Username_invalid'] = '�zg�n�z bu kullan�c� ismi \' gibi izin verilmeyen bir karakter i�eriyor';
$lang['Username_disallowed'] = '�zg�n�z bu kullan�c� ismine izin verilmiyor';
$lang['Email_taken'] = '�zg�n�z bu e-mail adresi ba�ka bir kullan�c� taraf�naan kullan�l�yor';
$lang['Email_banned'] = '�zg�n�z bu e-mail adresi yasaklanm�� (banlanm��)';
$lang['Email_invalid'] = '�zg�n�z bu e-mail adresi do�ru de�il';
$lang['Signature_too_long'] = '�mzan�z �ok uzun';
$lang['Fields_empty'] = 'Zorunlu b�l�mleri doldurmal�s�n�z';
$lang['Avatar_filetype'] = 'Avatar�n format� .jpg, .gif ya da .png olmal�d�r';
$lang['Avatar_filesize'] = 'Avatar dosyas� %d kB\'tan az olmal�d�r'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Avatar�n geni�li�i %d pixelden, y�ksekli�i %d pixelden k���k olmal�d�r';

$lang['Welcome_subject'] = '%s Forumlar�na Ho�geldiniz'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Yeni kullan�c� hesab�';
$lang['Account_activated_subject'] = 'Hesap aktif hale getirilmi�tir';

$lang['Account_added'] = 'Kaydoldu�unuz i�in te�ekk�rler, hesab�n�z yarat�lm��t�r. Kullan�c� isminiz ve �ifrenizle login olabilirsiniz';
$lang['Account_inactive'] = 'Hesab�n�z yarat�lm��t�r. Aktivasyon kodu e-mail\'inize g�nderilmi�tir. Daha fazla bilgi i�in e-mail\'inizi kontrol ediniz';
$lang['Account_inactive_admin'] = 'Hesab�n�z yarat�lm��t�r. Ama hesab�n�z�n aktif hale gelmesi i�in admin onay� gerekmektedir. Onlara bir e-mail g�nderilmi�tir ve hesab�n�z aktif hale geldi�inde size haber verilecektir';
$lang['Account_active'] = 'Hesab�n�z aktif hale getirilmi�tir. Kaydoldu�unuz i�in te�ekk�r ederiz';
$lang['Account_active_admin'] = 'Hesap aktif hale getirilmi�tir';
$lang['Already_activated'] = 'Hesab�n�z� daha �nce aktif hale getirmi�tiniz';
$lang['Reactivate'] = 'Hesab�n�z� yeniden aktif hale getirmelisiniz!';
$lang['COPPA'] = 'Hesab�n�z yarat�lm��t�r ama onaylanmas� gerekmektedir, detaylar i�in e-mail\'inizi kontrol ediniz.';

$lang['Registration'] = 'Kay�t Anla�mas�';
$lang['Reg_agreement'] = 'Bu forumun y�neticileri ve moderat�rleri her ne kadar itiraz edilebilecek her t�rl� materyali m�mk�n oldu�u kadar k�sa s�rede siteden kald�racak da olsa, b�t�n mesajlar�n incelenmesi m�mk�n olmamaktad�r. Bu durumda siz buraya g�nderilen her mesaj�n, onu g�nderen kullan�c�n�n g�r��lerini yans�tt���n�, moderat�rlerin, adminlerin ya da webmasterlar�n (kendilerine ait mesajlar d���nda) sorumlu tutulam�yaca��n� pe�inen kabul etmi� bulunuyorsunuz.<br /><br />A�a��lay�c�, m�stehcen, kaba, iftira niteli�inde, nefret dolu, tehdit edici, sekse y�nelik ya da kanunlarla �eli�ecek i�erikler g�ndermeyece�inizi kabul ediyorsunuz. Bunlar� dikkate almaman�z durumunda hemen ve s�resizce siteden uzakla�t�r�l�rs�n�z (ve servis sa�lay�c�n�z da haberdar edilir). Her mesaj�n IP adresi bunlar� engellemek i�in kaydedilmektedir. Bu forumun moderat�rleri, adminleri ya da webmaster�n�n, kendi iradeleri do�rultusuna herhangi bir ba�l��� silme, ta��ma, kilitleme yetkisi oldu�unu kabul ediyorsunuz. Bir kullan�c� olarak her girdi�iniz bilginin veritaban�nda saklanaca��n� kabul ediyorsunuz. Her ne kadar bu bilgiler sizin bilginiz d���nda 3. �ah�slara verilmeyecek olsa da, herhangi bir \'hack\' olay� sonucunda bu bilgiler 3. �ah�slara da��l�rsa bundan webmaster, moderat�r ya da adminleri sorumlu tutamazs�n�z.<br /><br />Bu forum sistemi, baz� bilgileri bilgisayar�n�zda saklamak i�in cookie\'leri kullanmaktad�r. Girdi�iniz �zel bilgilerin hi�biri bu cookie\'lerde bulunmamaktad�r, bunlar�n tek amac� forumda daha rahat bir gezinti yapabilmenizdir. E-mail adresiniz sadece kayd�n�z� onaylamak ve �ifrenizi yollamak i�indir (Ve unuttu�unuz zaman �ifrenizi yeniden yollamak i�in).<br /><br />A�a��daki kabul ediyorum linkine basmak sureti ile yukar�daki b�t�n ko�ullar�n ba�lay�c�l���n� kabul edersiniz.';

$lang['Agree_under_13'] = 'Yukar�daki ko�ullar� kabul ediyorum ve 13 ya��n <b>alt�nday�m</b>';
$lang['Agree_over_13'] = 'Yukar�daki ko�ullar� kabul ediyorum ve 13 ya��n <b>�st�ndeyim</b>';
$lang['Agree_not'] = 'Bu ko�ullar� kabul etmiyorum';

$lang['Wrong_activation'] = 'Girdi�iniz aktivasyon kodu veritaban�ndaki ile uyu�muyor.';
$lang['Send_password'] = 'Bana yeni bir �ifre g�nder';
$lang['Password_updated'] = 'Yeni �ifreniz yarat�ld�, nas�l aktif hale getirece�inizi ��renmek i�in e-mail\'inizi kontrol ediniz';
$lang['No_email_match'] = 'Bu kullan�c� i�in verdi�iniz e-mail adresi veritaban�ndaki ile uyu�muyor';
$lang['New_password_activation'] = 'Yeni �ifre aktivasyonu';
$lang['Password_activated'] = 'Hesab�n�z yeniden aktif hale getirilmi�tir. Login olmak i�in e-mail\'inize g�nderilen �ifreyi kullan�n';

$lang['Send_email_msg'] = 'E-mail g�nder';
$lang['No_user_specified'] = 'Kullan�c� ismi se�ilmedi';
$lang['User_prevent_email'] = 'Bu kullan�c� e-mail almak istemiyor. �zel Mesaj g�ndermeyi deneyin';
$lang['User_not_exist'] = 'B�yle bir kullan�c� yok';
$lang['CC_email'] = 'Bu e-mail\'in bir kopyas�n� kendinize g�nderin';
$lang['Email_message_desc'] = 'Bu mesaj d�z metin i�ercektir, BBCode ya da HTML kullan�lmayacakt�r. Cevap adresi olarak sizin e-mail adresiniz girilmi�tir';
$lang['Flood_email_limit'] = '�u anda ba�ka bir e-mail g�nderemezsiniz, l�tfen daha sonra tekrar deneyiniz';
$lang['Recipient'] = 'Al�c�';
$lang['Email_sent'] = 'E-mail g�nderilmi�tir';
$lang['Send_email'] = 'E-mail\'i g�nder';
$lang['Empty_subject_email'] = 'E-mail i�in bir konu belirtmelisiniz';
$lang['Empty_message_email'] = 'E-mail\'le g�nderilecek bir mesaj yazmal�s�n�z';


//
// Memberslist
//
$lang['Select_sort_method'] = 'S�ralama stilini se�iniz';
$lang['Sort'] = 'S�rala';
$lang['Sort_Top_Ten'] = 'TOP 10';
$lang['Sort_Joined'] = 'Giri� tarihi';
$lang['Sort_Username'] = 'Kullan�c� ismi';
$lang['Sort_Location'] = 'Yer';
$lang['Sort_Posts'] = 'Toplam mesaj';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Web sitesi';
$lang['Sort_Ascending'] = 'Artan';
$lang['Sort_Descending'] = 'Azalan';
$lang['Order'] = 'D�zen';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grup Kontrol Paneli';
$lang['Group_member_details'] = 'Grup �yeli�i Detaylar�';
$lang['Group_member_join'] = 'Bir Gruba Kat�l';

$lang['Group_Information'] = 'Grup Bilgileri';
$lang['Group_name'] = 'Grup ad�';
$lang['Group_description'] = 'Grup a��klamas�';
$lang['Group_membership'] = 'Grup �yeli�i';
$lang['Group_Members'] = 'Grup �yeleri';
$lang['Group_Moderator'] = 'Grup Moderator�';
$lang['Pending_members'] = 'Onay bekleyen �yeler';

$lang['Group_type'] = 'Grup t�r�';
$lang['Group_open'] = 'A��k grup';
$lang['Group_closed'] = 'Kapal� grup';
$lang['Group_hidden'] = 'Gizli grup';

$lang['Current_memberships'] = '�u andaki �yelikler';
$lang['Non_member_groups'] = '�ye olunmam�� gruplar';
$lang['Memberships_pending'] = 'Onay bekleyen �yelikler';

$lang['No_groups_exist'] = 'Hi� kullan�c� grubu yok';
$lang['Group_not_exist'] = 'B�yle bir kullan�c� grubu yok';

$lang['Join_group'] = 'Gruba kat�l';
$lang['No_group_members'] = 'Bu grubun hi� �yesi yok';
$lang['Group_hidden_members'] = 'Bu grup gizlenmi�, �yelikleri g�remezsiniz';
$lang['No_pending_group_members'] = 'Bu grupta hi� onay bekleyen �yelik yok';
$lang['Group_joined'] = 'Bu gruba ba�ar�yla kaydoldunuz<br />�yeli�iniz moderator taraf�ndan onayland���na haberdar edileceksiniz';
$lang['Group_request'] = 'Grubunuza kat�lmak i�in bir ba�vuru var';
$lang['Group_approved'] = 'Ba�vurunuz onaylanm��t�r';
$lang['Group_added'] = 'Bu gruba eklendiniz';
$lang['Already_member_group'] = 'Zaten bu grubun �yesisiniz';
$lang['User_is_member_group'] = 'Kullan�c� zaten bu grubun �yesi';
$lang['Group_type_updated'] = 'Grup t�r� g�ncellendi';

$lang['Could_not_add_user'] = 'Se�ti�iniz kullan�c� yok';
$lang['Could_not_anon_user'] = 'Misafir bir kullan�c�y� �ye yapamazs�n�z';

$lang['Confirm_unsub'] = 'Bu gruptan �yeli�inizi sildirmek istedi�inize emin misiniz?';
$lang['Confirm_unsub_pending'] = 'Bu gruba �yeli�iniz hen�z onaylanmad�, gene de sildirmek istedi�inize emin misiniz?';

$lang['Unsub_success'] = 'Bu gruptan kayd�n�z silinmi�tir';

$lang['Approve_selected'] = 'Se�ilenleri onayla';
$lang['Deny_selected'] = 'Se�ilenleri reddet';
$lang['Not_logged_in'] = 'Bir gruba kat�lmak i�in login olman�z laz�m.';
$lang['Remove_selected'] = 'Se�ilenleri ��kar';
$lang['Add_member'] = '�ye Ekle';
$lang['Not_group_moderator'] = 'Bu grubun moderatoru de�ilsiniz, bunu yapamazs�n�z.';

$lang['Login_to_join'] = 'Gruba kat�lmak ya da grubu y�netmek i�in login olmal�s�n�z';
$lang['This_open_group'] = 'Bu a��k bir grup, �yelik istemek i�in t�klay�n';
$lang['This_closed_group'] = 'Bu kapal� bir grup, yeni �yelik al�nm�yor';
$lang['This_hidden_group'] = 'Bu gizli bir grup, otomatik �ye al�m�na izin verilmiyor';
$lang['Member_this_group'] = 'Bu grubun �yesisiniz';
$lang['Pending_this_group'] = 'Bu gruba �yeli�iniz onay i�in beklemede';
$lang['Are_group_moderator'] = 'Bu grubun moderator�s�n�z';
$lang['None'] = 'Yok';

$lang['Subscribe'] = '�ye ol';
$lang['Unsubscribe'] = '�yelik sildir';
$lang['View_Information'] = 'Grup hakk�nda';


//
// Search
//
$lang['Search_query'] = 'Arama';
$lang['Search_options'] = 'Arama Se�enekleri';

$lang['Search_keywords'] = 'Anahtar Kelimeleri Ara';
$lang['Search_keywords_explain'] = '<u>AND</u> ile sonu�larda bulunmas� zorunlu kelimeleri, <u>OR</u> ile sonu�larda olabilecek kelimeleri ve <u>NOT</u> ile sonu�ta olmamas� gereken kelimeleri tan�mlayabilirsiniz. * i�areti ile kelimenin bir b�l�m�n� girip gerisinin bulunmas�n� sa�layabilirsiniz';
$lang['Search_author'] = 'Yazar� Ara';
$lang['Search_author_explain'] = '* ile kelimenin bir k�sm�n� girip tutan sonuclar� bulabilirsiniz';

$lang['Search_for_any'] = 'Herhangi bir terim i�in ara ya da girilen �nermeyi kullan';
$lang['Search_for_all'] = 'B�t�n terimler i�in ara';
$lang['Search_title_msg'] = 'Ba�l�k ve mesaj metninde ara';
$lang['Search_msg_only'] = 'Sadece mesaj metninde ara';

$lang['Return_first'] = 'Mesaj�n ilk'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karakterini g�ster';

$lang['Search_previous'] = 'S�re'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'S�ralama';
$lang['Sort_Time'] = 'Zaman';
$lang['Sort_Post_Subject'] = 'Konu';
$lang['Sort_Topic_Title'] = 'Ba�l�k';
$lang['Sort_Author'] = 'Yazar';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = 'Sonu�lar';
$lang['All_available'] = 'T�m�';
$lang['No_searchable_forums'] = 'Bu sitedeki hi�bir forumda arama yapma yetkiniz yok';

$lang['No_search_match'] = 'Arama kriterlerinize uygun mesaj ya da ba�l�k bulunamad�';
$lang['Found_search_match'] = 'Arama sonucunda %d adet mesaj bulundu'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Arama sonucunda %d adet mesaj bulundu'; // eg. Search found 24 matches

$lang['Close_window'] = 'Pencereyi kapat';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '�zg�n�z, sadece %s bu foruma duyuru g�nderebilir';
$lang['Sorry_auth_sticky'] = '�zg�n�z, sadece %s bu foruma sabit mesaj g�nderebilir';
$lang['Sorry_auth_read'] = '�zg�n�z, sadece %s bu forumdaki mesajlar� okuyabilir';
$lang['Sorry_auth_post'] = '�zg�n�z, sadece %s bu foruma ba�l�k g�nderebilir';
$lang['Sorry_auth_reply'] = '�zg�n�z, sadece %s bu forumdaki mesajlara cevap verebilir';
$lang['Sorry_auth_edit'] = '�zg�n�z, sadece %s bu forumdaki mesajlar� de�i�tirebilir';
$lang['Sorry_auth_delete'] = '�zg�n�z, sadece %s bu forumdaki mesajlar� silebilir';
$lang['Sorry_auth_vote'] = '�zg�n�z, sadece %s bu forumdaki anketlere oy verebilir';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>misafirler</b>';
$lang['Auth_Registered_Users'] = '<b>kay�tl� kullan�c�lar</b>';
$lang['Auth_Users_granted_access'] = '<b>�zel haklara sahip kullan�c�lar</b>';
$lang['Auth_Moderators'] = '<b>moderatorler</b>';
$lang['Auth_Administrators'] = '<b>administratorler</b>';

$lang['Not_Moderator'] = 'Bu forumun moderat�r� de�ilsiniz';
$lang['Not_Authorised'] = '�zniniz yok';

$lang['You_been_banned'] = 'Bu forumdan at�ld�n�z<br />Ayr�nt�l� bilgi i�in webmaster ya da forum admini ile ba�lant�ya ge�in';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 kay�tl� kullan�c� ve '; // There ae 5 Registered and
$lang['Reg_users_online'] = '%d kay�tl� kullan�c� ve '; // There ae 5 Registered and
$lang['Reg_user_online'] = '%d kay�tl� kullan�c� ve '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 gizli kullan�c� online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d gizli kullan�c� online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d gizli kullan�c� online'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d misafir online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 misafir online'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d misafir online'; // There is 1 Guest user online
$lang['No_users_browsing'] = '�u anda bu forumu dola�an kullan�c� yok';

$lang['Online_explain'] = 'Bu bilgi son 5 dakika i�inde aktif olan kullan�c�lara dayanmaktad�r';

$lang['Forum_Location'] = 'Forumdaki Yeri';
$lang['Last_updated'] = 'Son g�ncelleme';

$lang['Forum_index'] = 'Forum Ana Sayfa';
$lang['Logging_on'] = 'Giri� yap�yor';
$lang['Posting_message'] = 'Mesaj g�nderiyor';
$lang['Searching_forums'] = 'Arama yap�yor';
$lang['Viewing_profile'] = 'Profil g�r�nt�l�yor';
$lang['Viewing_online'] = 'Kimin online oldu�una bak�yor';
$lang['Viewing_member_list'] = '�ye listesine bak�yor';
$lang['Viewing_priv_msgs'] = '�zel mesajlar�na bak�yor';
$lang['Viewing_FAQ'] = 'SSS\'� g�r�nt�l�yor';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderator Kontrol Paneli';
$lang['Mod_CP_explain'] = 'A�a��daki formu kullanarak bu forumda moderasyon yapabilirsiniz. �stedi�iniz say�da forumu silebilir, ta��yabilir, kilitleyebilir ya da kilidini a�abilirsiniz';

$lang['Select'] = 'Se�';
$lang['Delete'] = 'Sil';
$lang['Move'] = 'Ta��';
$lang['Lock'] = 'Kilitle';
$lang['Unlock'] = 'Kilidi A�';

$lang['Topics_Removed'] = 'Se�ti�iniz ba�l�klar veritaban�ndan ba�ar�yla silinmi�lerdir';
$lang['Topics_Locked'] = 'Se�ti�iniz ba�l�klar kilitlenmi�lerdir';
$lang['Topics_Moved'] = 'Se�ti�iniz ba�l�klar ta��nm��t�r';
$lang['Topics_Unlocked'] = 'Se�ti�iniz ba�l�klar�n kilidi a��lm��t�r';
$lang['No_Topics_Moved'] = 'Hi�bir ba�l�k ta��nmam��t�r';

$lang['Confirm_delete_topic'] = 'Se�ti�iniz ba�l���n/ba�l�klar�n silinmesini istedi�inize emin misiniz?';
$lang['Confirm_lock_topic'] = 'Se�ti�iniz ba�l���n/ba�l�klar�n kilitlenmesini istedi�inize emin misiniz?';
$lang['Confirm_unlock_topic'] = 'Se�ti�iniz ba�l���n/ba�l�klar�n kilitlerinin a��lmas�n� istedi�inize emin misiniz?';
$lang['Confirm_move_topic'] = 'Se�ti�iniz ba�l���n/ba�l�klar�n ta��nmas�n� istedi�inize emin misiniz?';

$lang['Move_to_forum'] = 'Bu foruma ta��:';
$lang['Leave_shadow_topic'] = 'Eski forumda g�lgesini b�rak';

$lang['Split_Topic'] = 'Ba�l�k B�lme Kontrol Paneli';
$lang['Split_Topic_explain'] = 'Bu form ile bir ana ba�l���, ister tek tek mesaj se�erek ister belli bir mesajdan ay�rarak ikiye b�lebilirsiniz';
$lang['Split_title'] = 'Yeni konu ba�l���';
$lang['Split_forum'] = 'Yeni ba�l���n forumu';
$lang['Split_posts'] = 'Se�ilen mesajlar� ay�r';
$lang['Split_after'] = 'Se�ilen mesajdan ay�r';
$lang['Topic_split'] = 'Se�ilen ba�l� ba�ar�yla ayr�lm��t�r';

$lang['Too_many_error'] = '�ok fazla mesaj se�tiniz. Ba�l��� sadece bir mesajdan ay�rabilirsiniz!';

$lang['None_selected'] = 'Bu i�lemi yapmak i�in hi�bir ba�l��� se�mediniz. L�tfen geri d�n�p bir tane se�iniz';
$lang['New_forum'] = 'Yeni forum';

$lang['This_posts_IP'] = 'Bu mesaj� g�nderenin IP adresi';
$lang['Other_IP_this_user'] = 'Bu kullan�c�n�n di�er IP adresleri';
$lang['Users_this_IP'] = 'Bu IP adresini kullanan di�er kullan�c�lar';
$lang['IP_info'] = 'IP bilgisi';
$lang['Lookup_IP'] = 'Bu IP adresini ara';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'T�m saatler %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Saat';
$lang['-11'] = 'GMT - 11 Saat';
$lang['-10'] = 'GMT - 10 Saat';
$lang['-9'] = 'GMT - 9 Saat';
$lang['-8'] = 'GMT -8 Saat';
$lang['-7'] = 'GMT -7 Saat';
$lang['-6'] = 'GMT -6 Saat';
$lang['-5'] = 'GMT -5 Saat';
$lang['-4'] = 'GMT - 4 Saat';
$lang['-3.5'] = 'GMT - 3.5 Saat';
$lang['-3'] = 'GMT - 3 Saat';
$lang['-2'] = 'GMT -2 Saat';
$lang['-1'] = 'GMT - 1 Saat';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT +1 Saat';
$lang['2'] = 'GMT +2 Saat';
$lang['3'] = 'GMT + 3 Saat';
$lang['3.5'] = 'GMT + 3.5 Saat';
$lang['4'] = 'GMT + 4 Saat';
$lang['4.5'] = 'GMT + 4.5 Saat';
$lang['5'] = 'GMT + 5 Saat';
$lang['5.5'] = 'GMT + 5.5 Saat';
$lang['6'] = 'GMT + 6 Saat';
$lang['6.5'] = 'GMT + 6.5 Saat';
$lang['7'] = 'GMT + 7 Saat';
$lang['8'] = 'GMT +8 Saat';
$lang['9'] = 'GMT + 9 Saat';
$lang['9.5'] = 'GMT +9.5 Saat';
$lang['10'] = 'GMT +10 Saat';
$lang['11'] = 'GMT + 11 Saat';
$lang['12'] = 'GMT + 12 Saat';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT -12:00 Saat';
$lang['tz']['-11'] = 'GMT -11:00 Saat';
$lang['tz']['-10'] = 'GMT -10:00 Saat';
$lang['tz']['-9'] = 'GMT -9:00 Saat';
$lang['tz']['-8'] = 'GMT -8:00 Saat';
$lang['tz']['-7'] = 'GMT -7:00 Saat';
$lang['tz']['-6'] = 'GMT -6:00 Saat';
$lang['tz']['-5'] = 'GMT -5:00 Saat';
$lang['tz']['-4'] = 'GMT -4:00 Saat';
$lang['tz']['-3.5'] = 'GMT -3:30 Saat';
$lang['tz']['-3'] = 'GMT -3:00 Saat';
$lang['tz']['-2'] = 'GMT -2:00 Saat';
$lang['tz']['-1'] = 'GMT -1:00 Saat';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT +1:00 Saat';
$lang['tz']['2'] = 'GMT +2:00 Saat';
$lang['tz']['3'] = 'GMT +3:00 Saat';
$lang['tz']['3.5'] = 'GMT +3:30 Saat';
$lang['tz']['4'] = 'GMT +4:00 Saat';
$lang['tz']['4.5'] = 'GMT +4:30 Saat';
$lang['tz']['5'] = 'GMT +5:00 Saat';
$lang['tz']['5.5'] = 'GMT +5:30 Saat';
$lang['tz']['6'] = 'GMT +6:00 Saat';
$lang['tz']['6.5'] = 'GMT +6:30 Saat';
$lang['tz']['7'] = 'GMT +7:00 Saat';
$lang['tz']['8'] = 'GMT +8:00 Saat';
$lang['tz']['9'] = 'GMT +9:00 Saat';
$lang['tz']['9.5'] = 'GMT +9:30 Saat';
$lang['tz']['10'] = 'GMT +10:00 Saat';
$lang['tz']['11'] = 'GMT +11:00 Saat';
$lang['tz']['12'] = 'GMT +12:00 Saat';

$lang['datetime']['Sunday'] = 'Pazar';
$lang['datetime']['Monday'] = 'Pazartesi';
$lang['datetime']['Tuesday'] = 'Sal�';
$lang['datetime']['Wednesday'] = '�ar�amba';
$lang['datetime']['Thursday'] = 'Per�embe';
$lang['datetime']['Friday'] = 'Cuma';
$lang['datetime']['Saturday'] = 'Cumartesi';
$lang['datetime']['Sun'] = 'Pzr';
$lang['datetime']['Mon'] = 'Pts';
$lang['datetime']['Tue'] = 'Sal';
$lang['datetime']['Wed'] = '�r�';
$lang['datetime']['Thu'] = 'Pr�';
$lang['datetime']['Fri'] = 'Cum';
$lang['datetime']['Sat'] = 'Cmt';
$lang['datetime']['January'] = 'Ocak';
$lang['datetime']['February'] = '�ubat';
$lang['datetime']['March'] = 'Mart';
$lang['datetime']['April'] = 'Nisan';
$lang['datetime']['May'] = 'May�s';
$lang['datetime']['June'] = 'Haziran';
$lang['datetime']['July'] = 'Temmuz';
$lang['datetime']['August'] = 'A�ustos';
$lang['datetime']['September'] = 'Eyl�l';
$lang['datetime']['October'] = 'Ekim';
$lang['datetime']['November'] = 'Kas�m';
$lang['datetime']['December'] = 'Aral�k';
$lang['datetime']['Jan'] = 'Oca';
$lang['datetime']['Feb'] = '�ub';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Nis';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'Hzr';
$lang['datetime']['Jul'] = 'Tem';
$lang['datetime']['Aug'] = 'A�u';
$lang['datetime']['Sep'] = 'Eyl';
$lang['datetime']['Oct'] = 'Ekm';
$lang['datetime']['Nov'] = 'Ksm';
$lang['datetime']['Dec'] = 'Arl';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Bilgi';
$lang['Critical_Information'] = 'Kritik Bilgi';

$lang['General_Error'] = 'Genel Hata';
$lang['Critical_Error'] = 'Kritik Hata';
$lang['An_error_occured'] = 'Bir hata olu�tu';
$lang['A_critical_error'] = 'Kritik bir hata olu�tu';

// Translator credit
$lang['TRANSLATION_INFO'] = "T�rk�e �eviri : Onur Turgay & Erdem �orap��o�lu";
//
// That's all Folks!
// -------------------------------------------------

?>