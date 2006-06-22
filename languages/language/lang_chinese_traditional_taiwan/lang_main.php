<?php
/***************************************************************************
 *                            lang_main.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.2 2003/04/20 09:26:34 bob Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *                            Traditional Chinese Translation [�c�餤��y�t]
 *                              -------------------
 *     begin                : Thu Nov 26 2001
 *     by                   : �p�ˤl, OOHOO, �Ӯa�M�h, ��
 *     email                : kyo.yoshika@msa.hinet.net
 *                            webdev@hotmail.com
 *                            sjwu1@ms12.hinet.net
 *                            f8806077@mail.dyu.edu.tw
 *
 *     last modify          : Sun Jun 9 2002
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
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'big5';
$lang['DIRECTION'] = 'LTR';
$lang['LEFT'] = 'LEFT';
$lang['RIGHT'] = 'RIGHT';
// $lang['DATE_FORMAT'] = 'Y-m-d'; // This should be changed to the default date format for your language, php date() format
// Begin PNphpBB2 Module
//$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT'] = _DATEBRIEF;
// End PNphpBB2 Module
// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = '�c�餤��j�ƪ���&nbsp;<a href="http://phpbb-tw.net/"><font color="#FF6633">�˿߬P�yPBB2����j�ƶ}�o�p��</font></a>&nbsp;�s�@';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = '����';
$lang['Category'] = '����';
$lang['Topic'] = '�D�D';
$lang['Topics'] = '�D�D';
$lang['Replies'] = '�^��';
$lang['Views'] = '�[��';
$lang['Post'] = '�o��';
$lang['Posts'] = '�峹';
$lang['Posted'] = '�o���';
$lang['Username'] = '�|���W��';
$lang['Password'] = '�n�J�K�X';
$lang['Email'] = '�q�l�l��';
$lang['Poster'] = '�^�ФH';
$lang['Author'] = '�o��H';
$lang['Time'] = '�ɶ�';
$lang['Hours'] = '�p�ɤ�';
$lang['Message'] = '���e';

$lang['1_Day'] = '1 ��';
$lang['7_Days'] = '7 ��';
$lang['2_Weeks'] = '2 �P��';
$lang['1_Month'] = '1 �Ӥ�';
$lang['3_Months'] = '3 �Ӥ�';
$lang['6_Months'] = '6 �Ӥ�';
$lang['1_Year'] = '1 �~';

$lang['Go'] = 'Go';
$lang['Jump_to'] = '�e��';
$lang['Submit'] = '�e�X';
$lang['Reset'] = '���]';
$lang['Cancel'] = '�M��';
$lang['Preview'] = '�w��';
$lang['Confirm'] = '�T�{';
$lang['Spellcheck'] = '�����ˬd';
$lang['Yes'] = '�O';
$lang['No'] = '�_';
$lang['Enabled'] = '�}��';
$lang['Disabled'] = '����';
$lang['Error'] = '���~';

$lang['Next'] = '�U�@��';
$lang['Previous'] = '�W�@��';
$lang['Goto_page'] = '�e������';
$lang['Joined'] = '���U�ɶ�';
$lang['IP_Address'] = 'IP ��}';

$lang['Select_forum'] = '��ܤ@�Ӫ���';
$lang['View_latest_post'] = '�˵��̫�o���峹';
$lang['View_newest_post'] = '�˵��̷s�o���峹';
$lang['Page_of'] = '��<b>%d</b>��(�@<b>%d</b>��)'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ ���X';
$lang['AIM'] = 'AIM Address';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = '����T���q';

$lang['Forum_Index'] = '%s ����';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '�o��s�D�D';
$lang['Reply_to_topic'] = '�^�ХD�D';
$lang['Reply_with_quote'] = '�ި��^��';

$lang['Click_return_topic'] = '�I�� %s�o��%s ��^�D�D'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '�I�� %s�o��%s ��^����';
$lang['Click_return_forum'] = '�I�� %s�o��%s ��^����';
$lang['Click_view_message'] = '�I�� %s�o��%s �˵��z���峹';
$lang['Click_return_modcp'] = '�I�� %s�o��%s ��^�����޲z����x';
$lang['Click_return_group'] = '�I�� %s�o��%s ��^�s�ո�T����';

$lang['Admin_panel'] = '�i�J�t�κ޲z����x';

$lang['Board_disable'] = '�t�Υثe�Ȯɰ���A��, �еy��A��';


//
// Global Header strings
//
$lang['Registered_users'] = '�ثe�u�W���U�|��:';
$lang['Browsing_forum'] = '���b�s�����Ϫ��|��:';
$lang['Online_users_zero_total'] = '�ثe�S���ϥΪ̦b�u�W :: ';
$lang['Online_users_total'] = '�ثe�`�@�� %d ��ϥΪ̦b�u�W :: ';
$lang['Online_user_total'] = '�ثe�`�@�� %d ��ϥΪ̦b�u�W :: ';
$lang['Reg_users_zero_total'] = '0 ��|��, ';
$lang['Reg_users_total'] = '%d ��|��, ';
$lang['Reg_user_total'] = '%d ��|��, ';
$lang['Hidden_users_zero_total'] = '0 �����Τ� ';
$lang['Hidden_user_total'] = '%d �����Τ� ';
$lang['Hidden_users_total'] = '%d �����Τ� ';
$lang['Guest_users_zero_total'] = '0 ��X��';
$lang['Guest_users_total'] = '%d ��X��';
$lang['Guest_user_total'] = '%d ��X��';
$lang['Record_online_users'] = '�̰��u�W�H�ưO���� <font color=\"#FF6633\"><b>%s</b></font> �H  [ �O���ɶ� :: <font color=\"#FF6633\"><b>%s</b></font> ]'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%s�t�κ޲z��%s';
$lang['Mod_online_color'] = '%s�����޲z��%s';

$lang['You_last_visit'] = '�z�̫�X�ݩ� %s'; // %s replaced by date/time
$lang['Current_time'] = '�{�b���ɶ��O %s'; // %s replaced by time

$lang['Search_new'] = '�˵��s�o���峹';
$lang['Search_your_posts'] = '�˵��z�o���峹';
$lang['Search_unanswered'] = '�˵����^�Ъ��D�D';

$lang['Register'] = '�|�����U';
$lang['Profile'] = '�ӤH���';
$lang['Edit_profile'] = '�s��ӤH���';
$lang['Search'] = '�j�M';
$lang['Memberlist'] = '�|���C��';
$lang['FAQ'] = '�`�����D';
$lang['BBCode_guide'] = 'BBCode �N�X����';
$lang['Usergroups'] = '�|���s��';
$lang['Last_Post'] = '�̫�o��';
$lang['Moderator'] = '�����޲z��';
$lang['Moderators'] = '�����޲z��';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '�ثe�S���o���峹'; // Number of posts
$lang['Posted_articles_total'] = '�ثe�`�@�o��F <b>%d</b> �g�峹'; // Number of posts
$lang['Posted_article_total'] = '�ثe�`�@�o��F <b>%d</b> �g�峹'; // Number of posts
$lang['Registered_users_zero_total'] = '�ثe�S�����U�|��'; // # registered users
$lang['Registered_users_total'] = '�ثe�`�@�� <b>%d</b> ����U�|��'; // # registered users
$lang['Registered_user_total'] = '�ثe�� <b>%d</b> ����U�|��'; // # registered users
$lang['Newest_user'] = '�̷s���U���|��: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = '�q�z�W�����{��S���s�峹';
$lang['No_new_posts'] = '�S���s�峹';
$lang['New_posts'] = '�s�峹';
$lang['New_post'] = '�s�峹';
$lang['No_new_posts_hot'] = '�S���s�峹 [ ���� ]';
$lang['New_posts_hot'] = '�s�峹 [ ���� ]';
$lang['No_new_posts_locked'] = '�S���s�峹 [ ��w ]';
$lang['New_posts_locked'] = '�s�峹 [ ��w ]';
$lang['Forum_is_locked'] = '�����w�Q��w';


//
// Login
//
$lang['Enter_password'] = '�п�J�z���n�J�W�٤αK�X';
$lang['Login'] = '�n�J';
$lang['Logout'] = '�n�X';

$lang['Forgotten_password'] = '�ѰO�K�X';

$lang['Log_me_in'] = '�۰ʵn�J';

$lang['Error_login'] = '�z��J�F�L�Ī��n�J�W�٩ο��~���K�X';


//
// Index page
//
$lang['Index'] = '����';
$lang['No_Posts'] = '�S���峹';
$lang['No_forums'] = '�o�ӰQ�װϨS�����Ϫ���';

$lang['Private_Message'] = '�p�H�T��';
$lang['Private_Messages'] = '�p�H�T��';
$lang['Who_is_Online'] = '�d�ݽ֦b�u�W';

$lang['Mark_all_forums'] = '�N�Ҧ������Хܬ��w�\Ū';
$lang['Forums_marked_read'] = '�Ҧ������w�Q�Хܬ��w�\Ū';


//
// Viewforum
//
$lang['View_forum'] = '�˵�����';

$lang['Forum_not_exist'] = '�z��ܪ��������s�b';
$lang['Reached_on_error'] = '�����i��w�Q�����Τ��s�b';

$lang['Display_topics'] = '�峹�ƧǮɶ�';
$lang['All_Topics'] = '�Ҧ��D�D';

$lang['Topic_Announcement'] = '<b>���i:</b>';
$lang['Topic_Sticky'] = '<b>�m��:</b>';
$lang['Topic_Moved'] = '<b>����:</b>';
$lang['Topic_Poll'] = '<b>[ ���� ]</b>';

$lang['Mark_all_topics'] = '�N�Ҧ��D�D�Хܬ��w�\Ū';
$lang['Topics_marked_read'] = '�o�Ӫ������D�D�w�Q�Хܬ��w�\Ū';

$lang['Rules_post_can'] = '�z <b>�i�H</b> �b�o�Ӫ����o��峹';
$lang['Rules_post_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ����o��峹';
$lang['Rules_reply_can'] = '�z <b>�i�H</b> �b�o�Ӫ����^�Ф峹';
$lang['Rules_reply_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ����^�Ф峹';
$lang['Rules_edit_can'] = '�z <b>�i�H</b> �b�o�Ӫ����s��峹';
$lang['Rules_edit_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ����s��峹';
$lang['Rules_delete_can'] = '�z <b>�i�H</b> �b�o�Ӫ����R���峹';
$lang['Rules_delete_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ����R���峹';
$lang['Rules_vote_can'] = '�z <b>�i�H</b> �b�o�Ӫ����i��벼';
$lang['Rules_vote_cannot'] = '�z <b>�L�k</b> �b�o�Ӫ����i��벼';
$lang['Rules_moderate'] = '�z <b>�i�H</b> %s���檩���޲z�\��%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = '�o�Ӫ����ثe�S���峹<br />�Ы��U<b>�o��s�D�D</b>�����s�o��s���峹�D�D';


//
// Viewtopic
//
$lang['View_topic'] = '�[�ݤ峹';

$lang['Guest'] = '�X��';
$lang['Post_subject'] = '�峹�D�D';
$lang['View_next_topic'] = '�U�@�g�D�D';
$lang['View_previous_topic'] = '�W�@�g�D�D';
$lang['Submit_vote'] = '�e�X�벼';
$lang['View_results'] = '�[�ݥثe�벼���G';

$lang['No_newer_topics'] = '�o�Ӫ����S���s���D�D';
$lang['No_older_topics'] = '�o�Ӫ����S���ª��D�D';
$lang['Topic_post_not_exist'] = '�z�Ҭd�ݪ��D�D�Τ峹���s�b';
$lang['No_posts_topic'] = '�o�ӥD�D�S���^�Ф峹';

$lang['Display_posts'] = '�q���e���峹�}�l���';
$lang['All_Posts'] = '�Ҧ��峹';
$lang['Newest_First'] = '�̷s��';
$lang['Oldest_First'] = '���ª�';

$lang['Back_to_top'] = '�^����';

$lang['Read_profile'] = '�˵��|���ӤH���';
$lang['Send_email'] = '�o�e�q�l�l��';
$lang['Visit_website'] = '���[�o��H���ӤH����';
$lang['ICQ_status'] = 'ICQ ���A';
$lang['Edit_delete_post'] = '�s��/�R���o�g�峹';
$lang['View_IP'] = '�˵��o��H�� IP ��}';
$lang['Delete_post'] = '�R���峹';

$lang['wrote'] = '�g��'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = '�ި��^��'; // comes before bbcode quote output.
$lang['Code'] = '�N�X'; // comes before bbcode code output.

$lang['Edited_time_total'] = ' %s �b %s �@�F�� %d ���ק�'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = '%s �b %s �@�F�� %d ���ק�'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = '��w�D�D';
$lang['Unlock_topic'] = '�Ѱ���w';
$lang['Move_topic'] = '���ʥD�D';
$lang['Delete_topic'] = '�R���D�D';
$lang['Split_topic'] = '���ΥD�D';

$lang['Stop_watching_topic'] = '�����q�\�o�ӥD�D (�^�гq��)';
$lang['Start_watching_topic'] = '�q�\�o�ӥD�D (�^�гq��)';
$lang['No_longer_watching'] = '�z�w�g�����q�\�o�ӥD�D (�^�гq��)';
$lang['You_are_watching'] = '�z�w�g�q�\�F�o�ӥD�D (�^�гq��)';

$lang['Total_votes'] = '�`�벼��';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '�峹���e';
$lang['Topic_review'] = '�˵��D�D';

$lang['No_post_mode'] = '�S�����w���o��Ҧ�'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = '�o��s�D�D';
$lang['Post_a_reply'] = '�o��^��';
$lang['Post_topic_as'] = '�o��D�D��';
$lang['Edit_Post'] = '�s��峹';
$lang['Options'] = '�ﶵ';

$lang['Post_Announcement'] = '���i';
$lang['Post_Sticky'] = '�m��';
$lang['Post_Normal'] = '���`';

$lang['Confirm_delete'] = '�z�T�w�n�R���o�g�峹��?';
$lang['Confirm_delete_poll'] = '�z�T�w�n�R���o�Ӳ��ﬡ�ʶ�?';

$lang['Flood_Error'] = '�Y�T�c�N���ֳt�o�����, �еy��A��';
$lang['Empty_subject'] = '�o��s�D�D�����n���峹���D';
$lang['Empty_message'] = '�o��峹�����n���峹���e';
$lang['Forum_locked'] = '�o�Ӫ����w�g�Q��w�F, �z�L�k�b�o�Ӫ����o��, �^�ЩάO�s��D�D';
$lang['Topic_locked'] = '�o�ӥD�D�w�g�Q��w�F, �z�L�k�b�o�ӥD�D�s��峹�άO�^��';
$lang['No_post_id'] = '�S�����w��H';
$lang['No_topic_id'] = '�z������ܭn�^�Ъ��D�D';
$lang['No_valid_mode'] = '�z�u��o��, �^�нs��άO�ި��^�аT��, �Ъ�^����';
$lang['No_such_post'] = '�S���ŦX���峹, �Ъ�^����';
$lang['Edit_own_posts'] = '�ܩ�p! �z�S���v�O�s���L�|�����峹';
$lang['Delete_own_posts'] = '�ܩ�p! �z�S���v�O�R����L�|�����峹';
$lang['Cannot_delete_replied'] = '�ܩ�p! �z����R���w���^�Ф峹���D�D';
$lang['Cannot_delete_poll'] = '�ܩ�p! �z�L�k�R���i�椤�����ﬡ��';
$lang['Empty_poll_title'] = '�z������J���諸�D�D';
$lang['To_few_poll_options'] = '�z�ܤֻݭn��J��Ӳ��諸����';
$lang['To_many_poll_options'] = '�z�����ﶵ�ؤӦh�F';
$lang['Post_has_no_poll'] = '�o�g�峹�S�����ﬡ��';
$lang['Already_voted'] = '�z�w�g��L���F';
$lang['No_vote_option'] = '�z�������w�벼������';

$lang['Add_poll'] = '���ﬡ��';
$lang['Add_poll_explain'] = '�p�G�z���Q�]�m����\��, �бN���B�d��';
$lang['Poll_question'] = '����D�D';
$lang['Poll_option'] = '���ﶵ��';
$lang['Add_option'] = '�s�W����';
$lang['Update'] = '��s';
$lang['Delete'] = '�R��';
$lang['Poll_for'] = '�������';
$lang['Days'] = '��'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ ��J 0 �άO�ťլ��S�����������ﬡ�� ]';
$lang['Delete_poll'] = '�R�����ﬡ��';

$lang['Disable_HTML_post'] = '�����o�g�峹�� HTML �y�k�\��';
$lang['Disable_BBCode_post'] = '�����o�g�峹�� BBCode �N�X�\��';
$lang['Disable_Smilies_post'] = '�����o�g�峹�����Ÿ��\��';

$lang['HTML_is_ON'] = 'HTML �y�k <u>�}��</u>';
$lang['HTML_is_OFF'] = 'HTML �y�k <u>����</u>';
$lang['BBCode_is_ON'] = '%sBBCode �N�X%s <u>�}��</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode �N�X%s <u>����</u>';
$lang['Smilies_are_ON'] = '���Ÿ� <u>�}��</u>';
$lang['Smilies_are_OFF'] = '���Ÿ� <u>����</u>';

$lang['Attach_signature'] = '���Wñ�W (ñ�W�ɥi�H�b�ӤH��Ƹ̭����)';
$lang['Notify'] = '���H�^�Ф峹�ɳq����';
$lang['Delete_post'] = '�R���峹';

$lang['Stored'] = '�z���T���w�g���\�o�e';
$lang['Deleted'] = '�z���T���w�g���\�R��';
$lang['Poll_delete'] = '�z�����ﬡ�ʤw�g���\�R��';
$lang['Vote_cast'] = '�P�±z�ѻP�벼';

$lang['Topic_reply_notification'] = '�D�D�^�гq��';

$lang['bbcode_b_help'] = '����: [b]text[/b]  (alt+b)';
$lang['bbcode_i_help'] = '����: [i]text[/i]  (alt+i)';
$lang['bbcode_u_help'] = '���u: [u]text[/u]  (alt+u)';
$lang['bbcode_q_help'] = '�ި��^��: [quote]text[/quote]  (alt+q)';
$lang['bbcode_c_help'] = '��ܵ{���N�X: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = '�C��: [list]text[/list] (alt+l)';
$lang['bbcode_o_help'] = '�̧ǱƦC: [list=]text[/list]  (alt+o)';
$lang['bbcode_p_help'] = '���J�Ϥ�: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = '���J URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = '�����Ҧ��}�Ҫ� BBCode ����';
$lang['bbcode_s_help'] = '�r���C��: [color=red]text[/color]  �z�]�i�H�ϥ��C��s�X, �Ҧp: #FF0000';
$lang['bbcode_f_help'] = '�r���j�p: [size=x-small]small text[/size]';

$lang['Emoticons'] = '���Ÿ�';
$lang['More_emoticons'] = '��h���Ÿ�';

$lang['Font_color'] = '�r���C��';
$lang['color_default'] = '�w�]��';
$lang['color_dark_red'] = '�`����';
$lang['color_red'] = '����';
$lang['color_orange'] = '���';
$lang['color_brown'] = '�Ħ�';
$lang['color_yellow'] = '����';
$lang['color_green'] = '���';
$lang['color_olive'] = '���V��';
$lang['color_cyan'] = '�C���';
$lang['color_blue'] = '�Ŧ�';
$lang['color_dark_blue'] = '�`�Ŧ�';
$lang['color_indigo'] = '�Q��';
$lang['color_violet'] = '����';
$lang['color_white'] = '�զ�';
$lang['color_black'] = '�¦�';

$lang['Font_size'] = '�r���j�p';
$lang['font_tiny'] = '���p';
$lang['font_small'] = '�p';
$lang['font_normal'] = '���`';
$lang['font_large'] = '�j';
$lang['font_huge'] = '���j';

$lang['Close_Tags'] = '��������';
$lang['Styles_tip'] = '����: �榡�i�H�ֳt�M�Φb��ܪ���r�W';


//
// Private Messaging
//
$lang['Private_Messaging'] = '�p�H�T��';

$lang['Login_check_pm'] = '�n�J�ˬd�z���p�H�T��';
$lang['New_pms'] = '�z�� <b>%d</b> �ӷs���p�H�T��'; // You have 2 new messages
$lang['New_pm'] = '�z�� <b>%d</b> �ӷs���p�H�T��'; // You have 1 new message
$lang['No_new_pm'] = '�z�S���s���p�H�T��';
$lang['Unread_pms'] = '�z�� <b>%d</b> �ӥ�Ū���p�H�T��';
$lang['Unread_pm'] = '�z�� <b>%d</b> �ӥ�Ū���p�H�T��';
$lang['No_unread_pm'] = '�z���p�H�T�����ݹL�F';
$lang['You_new_pm'] = '�z����F�s���p�H�T��';
$lang['You_new_pms'] = '���s���p�H�T���b�z������';
$lang['You_no_new_pm'] = '�z�S���s���p�H�T��';

$lang['Unread_message'] = '���\Ū���p�H�T��';
$lang['Read_message'] = '�w�\Ū���p�H�T��';

$lang['Read_pm'] = '�w�\Ū���p�H�T��';
$lang['Post_new_pm'] = '�o��p�H�T��';
$lang['Post_reply_pm'] = '�^�Шp�H�T��';
$lang['Post_quote_pm'] = '�ި��^��';
$lang['Edit_pm'] = '�s��p�H�T��';

$lang['Inbox'] = '����';
$lang['Outbox'] = '�H��';
$lang['Savebox'] = '�x�s��';
$lang['Sentbox'] = '�H��ƥ�';
$lang['Flag'] = '���A';
$lang['Subject'] = '�D�D';
$lang['From'] = '�Ӧ�';
$lang['To'] = '����H';
$lang['Date'] = '���';
$lang['Mark'] = '���';
$lang['Sent'] = '�o�e';
$lang['Saved'] = '�x�s';
$lang['Delete_marked'] = '�R�����';
$lang['Delete_all'] = '�R������';
$lang['Save_marked'] = '�x�s���';
$lang['Save_message'] = '�x�s�T��';
$lang['Delete_message'] = '�R���T��';

$lang['Display_messages'] = '��ܤ��e���p�H�T��'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '�Ҧ��T��';

$lang['No_messages_folder'] = '�o���ɮק��S���p�H�T��';

$lang['PM_disabled'] = '�Q�װϪ��p�H�T���\��w�g�Q����';
$lang['Cannot_send_privmsg'] = '�ܩ�p! ���O�t�κ޲z���T��z�o�e�p�H�T�����O�H';
$lang['No_to_user'] = '�z������ܵo�e��H�~��e�X�p�H�T��';
$lang['No_such_user'] = '�ܩ�p! �o�ӷ|���W�٨ä��s�b';

$lang['Disable_HTML_pm'] = '�����o�g�T���� HTML �y�k�\��';
$lang['Disable_BBCode_pm'] = '�����o�g�T���� BBCode �N�X�\��';
$lang['Disable_Smilies_pm'] = '�����o�g�T�������Ÿ��\��';

$lang['Message_sent'] = '�z���p�H�T���w�g�e�X';

$lang['Click_return_inbox'] = '�I�� %s�o��%s ��^����';
$lang['Click_return_index'] = '�I�� %s�o��%s ��^����';

$lang['Send_a_new_message'] = '�o�e�s���p�H�T��';
$lang['Send_a_reply'] = '�^�Шp�H�T��';
$lang['Edit_message'] = '�s��p�H�T��';

$lang['Notification_subject'] = '�z���s���p�H�T��';

$lang['Find_username'] = '�M��|���W��';
$lang['Find'] = '�M��';
$lang['No_match'] = '�S���j�M��ŦX��';

$lang['No_post_id'] = '�S�����w��H';
$lang['No_such_folder'] = '�S���ŦX�����';
$lang['No_folder'] = '�S�����w���';

$lang['Mark_all'] = '��ܥ���';
$lang['Unmark_all'] = '��������';

$lang['Confirm_delete_pm'] = '�z�T�w�n�R���o�g�p�H�T����?';
$lang['Confirm_delete_pms'] = '�z�T�w�n�R���o�Ǩp�H�T����?';

$lang['Inbox_size'] = '�z�����󧨤w�g�ϥΤF %d%% '; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '�z���H�󧨤w�g�ϥΤF %d%% ';
$lang['Savebox_size'] = '�z���x�s���w�g�ϥΤF %d%% ';

$lang['Click_view_privmsg'] = '�I�� %s�o��%s �i�J�p�H�T������';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '�˵� :: %s ���ӤH���'; // %s is username
$lang['About_user'] = '���� %s'; // %s is username

$lang['Preferences'] = '���n�]�w';
$lang['Items_required'] = '�Хܦ� * �����ض��T���g';
$lang['Registration_info'] = '�|�����U���';
$lang['Profile_info'] = '�ӤH���';
$lang['Profile_info_warn'] = '�o�Ǹ�T�N��~���}';
$lang['Avatar_panel'] = '�Y������O';
$lang['Avatar_gallery'] = '�t�ά�ï';

$lang['Website'] = '�ӤH����';
$lang['Location'] = '�Ӧ�';
$lang['Contact'] = '�p��';
$lang['Email_address'] = '�q�l�l��H�c';
$lang['Email'] = '�q�l�l��';
$lang['Send_private_message'] = '�o�e�p�H�T��';
$lang['Hidden_email'] = '[ ���� ]';
$lang['Search_user_posts'] = '�d�� %s �o���Ҧ��峹';
$lang['Interests'] = '����';
$lang['Occupation'] = '¾�~';
$lang['Poster_rank'] = '����';

$lang['Total_posts'] = '�`�o���';
$lang['User_post_pct_stats'] = '�Q�װϤ峹�`�ƪ� %d%% '; // 1.25% of total
$lang['User_post_day_stats'] = '�����C�ѵo�� %.2f '; // 1.5 posts per day
$lang['Search_user_posts'] = '�d�� %s �o���Ҧ��峹'; // Find all posts by username

$lang['No_user_id_specified'] = '�z�ҿ�ܪ��|���W�٤��s�b';
$lang['Wrong_Profile'] = '�z�S���v�O�ק�O�H���ӤH���.';

$lang['Only_one_avatar'] = '�u����w�@���Y��';
$lang['File_no_data'] = '�z�Ҵ��Ѫ� URL �èS�����';
$lang['No_connection_URL'] = '�z�Ҵ��Ѫ� URL �L�k�s��';
$lang['Incomplete_URL'] = '�z�Ҵ��Ѫ� URL ������';
$lang['Wrong_remote_avatar_format'] = '�q�o�� URL �ҳs�����ӤH���ɬO�L�Ī��ɮ׮榡';
$lang['No_send_account_inactive'] = '�ܩ�p!! �ѩ�z���b���ثe�B�󰱥Ϊ��A, �]���z�L�k���o�s���K�X. �и�t�κ޲z���p���߰ݬ�����T.';

$lang['Always_smile'] = '�ϥΪ��Ÿ�';
$lang['Always_html'] = '�ϥ� HTML �y�k';
$lang['Always_bbcode'] = '�ϥ� BBCode �N�X';
$lang['Always_add_sig'] = '�b�峹�����[�ө�ñ�W';
$lang['Always_notify'] = '�D�D�^�гq��';
$lang['Always_notify_explain'] = '���H�^�бz�ҵo���D�D��, �t�η|�H�e�q�l�l��q���z. �o���]�w�]�i�H�����b�z�o��峹���ܧ�';

$lang['Board_style'] = '��������';
$lang['Board_lang'] = '�y�t�]�w';
$lang['No_themes'] = '��Ʈw�̨S���G���D�D';
$lang['Timezone'] = '�ɰϳ]�w';
$lang['Date_format'] = '�ɶ��榡';
$lang['Date_format_explain'] = '�ƦC�y�k�ϥ� PHP <a href=\"http://www.php.net/date\" target=\"_other\">date()</a>  ��� ';
$lang['Signature'] = '�ө�ñ�W';
$lang['Signature_explain'] = '�b��r�Ϥ�����r�N���[�b�z�o���峹�W, �H %d �Ӧr����';
$lang['Public_view_email'] = '��ܹq�l�l��H�c';

$lang['Current_password'] = '�ثe�K�X';
$lang['New_password'] = '��J�s�K�X';
$lang['Confirm_password'] = '�T�{�s�K�X';
$lang['Confirm_password_explain'] = '�p�G�z�n�ܧ�q�l�l���}, �z������J�ثe�ϥΪ��K�X';
$lang['password_if_changed'] = '�p�G�z�Q�󴫱K�X����, �п�J�z�n�������K�X';
$lang['password_confirm_if_changed'] = '�ЦA��J�@���z�n�������K�X';

$lang['Avatar'] = '�ӤH�Y��';
$lang['Avatar_explain'] = '�z���ӤH�Y���N�|��ܦb�z�ҵo���峹����. �@���u��u�Τ@�ӹ���, �e�פ��i�W�L  %d ����, ���פ��i�W�L  %d �����ӥB�ɮפj�p���i�W�L %dkB';
$lang['Upload_Avatar_URL'] = '�q�s���W�ǹ���';
$lang['Upload_Avatar_URL_explain'] = '��J�Y���s��, �t�αN�|����ɽƻs�ܨt�θ�';
$lang['Pick_local_Avatar'] = '�Ѭ�ï���������';
$lang['Link_remote_Avatar'] = '�Ѻ��}�s���Y������';
$lang['Link_remote_Avatar_explain'] = '��J�Y�����ɳs�����}, �t�αN�|�۰ʳs����z�Q�n�����}';
$lang['Avatar_URL'] = '�Y�����ɪ����}';
$lang['Select_from_gallery'] = '�q�t�ά�ï�̿�ܹ���';
$lang['View_avatar_gallery'] = '�t�ά�ï';

$lang['Select_avatar'] = '����Y��';
$lang['Return_profile'] = '�����';
$lang['Select_category'] = '��ܺ���';

$lang['Delete_Image'] = '�R������';
$lang['Current_Image'] = '�ثe�ϥΪ�����';

$lang['Notify_on_privmsg'] = '���s���p�H�T���ɥH�q�l�l��q��';
$lang['Popup_on_privmsg'] = '���s���p�H�T���ɸ��X�p�����q��';
$lang['Popup_on_privmsg_explain'] = '���H�o�e�p�H�T�����z�ɷ|���X�@�Ӥp�����q��';
$lang['Hide_user'] = '���ñz���W�u���A';

$lang['Profile_updated'] = '�z���ӤH��Ƥw�g������s';
$lang['Profile_updated_inactive'] = '�z���ӤH��Ƥw�g������s, �M�ӱz�w�ק�L���n���, �ҥH�z���b���w�Q�Ȱ�. �Х��ˬd�z���q�l�l��H�c, ��X�p�󭫷s�}�ұb��, �Y�ݭn�q�L�t�κ޲z���f��, �Э@�ߵ���';

$lang['Password_mismatch'] = '�z��J���K�X���~';
$lang['Current_password_mismatch'] = '�z�Ҵ��Ѫ��o�ӱK�X�P��Ʈw����';
$lang['Password_long'] = '�z�ҿ�J���K�X���׶W�L 32 �Ӧr��';
$lang['Username_taken'] = '�ܩ�p!! �z�ҿ�ܪ��|���W�٤w�Q���U�ϥ�';
$lang['Username_invalid'] = '�ܩ�p!! �|���W�٤����o�]�t�D�k�r��, �Ҧp: \'\'';
$lang['Username_disallowed'] = '�ܩ�p!! �z�ҿ�ܪ��|���W�٤w�Q����';
$lang['Email_taken'] = '�ܩ�p!! �z�ҿ�J���q�l�l���}�w�Q���U�ϥ�';
$lang['Email_banned'] = '�ܩ�p!! �z�ҿ�J���q�l�l���}�w�Q����';
$lang['Email_invalid'] = '�ܩ�p!! �z��J�����O�X�k���q�l�l���}';
$lang['Signature_too_long'] = '�z���ө�ñ�W�Ӫ�';
$lang['Fields_empty'] = '�z�����T���g�Хܦ�*������';
$lang['Avatar_filetype'] = '�Y�����ɮ榡������ .jpg, .gif �άO .png';
$lang['Avatar_filesize'] = '�Y���ɮפj�p�����j�� 0 kB �åB�p��'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = '�Y�����ɤؤo�����p��  pixels(����)�e �M  pixels(����)��';

$lang['Welcome_subject'] = '�w��Ө� %s �Q�װ�'; // Welcome to my.com forums
$lang['New_account_subject'] = '�s���|���b��';
$lang['Account_activated_subject'] = '�b���w�g�ҥ�';

$lang['Account_added'] = '�P�±z�����U, �z���b���w�Q�إ�.<br />�z�{�b�i�H��J�|���b���αK�X�n�J�Q�װ�';
$lang['Account_inactive'] = '�z���b���w�Q�إ�, �M�ӱz�ݭn�����b���ҥε{�ǫ�~��n�J�Q�װ�.<br />�t�Τw�g�N�z���b���ҥΧǸ��H�e��z���q�l�l��H�c, ���ˬd�z���q�l�l��H�c�H���o��������T.<br /><b>�Ъ`�N: �Цb�@�P�������}�ұz���b��, �t�κ޲z���N�|�w���R���L�Ī��b��</b>';
$lang['Account_inactive_admin'] = '�z���b���w�Q�إ�, �M�ӳo�ӰQ�װϪ��|����楲����o�t�κ޲z�������, �|���b���~�|�Q�ҥ�.<br /> �t�Τw�g��z���b���ӽжi�׬�����T�H�e��z���q�l�l��H�c, ���H���ˬd�z���q�l�l��H�c�`�N�ӽжi��';
$lang['Account_active'] = '�z���b���w�g�ҥ�, �D�`�P�±z�����U!';
$lang['Account_active_admin'] = '�o�ӱb���w�g�Q�ҥ�';
$lang['Reactivate'] = '�z���b���w�g��_�ҥ�!';
$lang['Already_activated'] = '�z�w�g�ҥιL�z���b���F';
$lang['COPPA'] = '�z���b���Q�إ�, ���O�ݭn�޲z�����. ���ˬd�z���q�l�l��H�c��o�ԲӰT��.';

$lang['Registration'] = '�|�����U�P�N�n��';
$lang['Reg_agreement'] = '�o�ӰQ�װϪ��t�κ޲z���M�����޲z���|���i��b�Ĥ@�ɶ����ק�β������󦳪�ĳ�ʪ��峹, �M�Ӻ޲z�H�����i��\Ū�Ҧ����峹, �]���Q�װϪ��峹���e���N���誺���שηN��, �޲z�ζ�������ͩҵo���峹���e�t���󪺳d��.<br /><br />�z�����P�N���o�����d�|, �T��, �ʫU, ����, ���, ���~�H�Φ����ʧO�[���Υ��󦳥i��y���H�k�欰�������峹, �p�G�zĲ�ǤF�H�W���W�w, ����N�|�ߧY����z���i�J�åB�ä��}�� (�z�������A�ȴ��ѰӤ]�N�|�Q�o��q��). �Ҧ��峹�o��H�� IP ��}���N�Q�x�s�H������󪺹H�k���`�o��.<br /><br />�z�����P�N����, �t�κ޲z���H�Ϊ����޲z���֦��b����ɶ��R��, �ק�, ���ʩ���������D�D���v�O. �@���@�ӨϥΪ�, �z�����P�N�z�Ҵ��Ѫ������T���N�Q�s�J��Ʈw��, �o�Ǹ�T���F����, �t�κ޲z���Ϊ����޲z�����~���|��~���}, �����O�ҥ���i��ɭP��Ƽ��S���b�ȤJ�I�欰.<br /><br />�o�ӰQ�װϨt�Ψϥ�cookie���x�s�z���ӤH��T, �o��cookie���]�t����z���g��J�L����T, ���̥u����K�z���K�����s��. �ӹq�l�l���}�u�ΨӰ����z�P�N�H�W�����, �T�{�z�����U��T�ϥ�.';

$lang['Agree_under_13'] = '�ڦP�N�H�W����(���O��<b>����13��</b>)';
$lang['Agree_over_13'] = '�ڦP�N�H�W����(�ӥB��<b>�w��13��</b>)';
$lang['Agree_not'] = '�ڤ��P�N�H�W����';

$lang['Wrong_activation'] = '�z�ҿ�J���b���ҥΧǸ��P��Ʈw����';
$lang['Send_password'] = '�o�e�s���K�X����';
$lang['Password_updated'] = '�s���K�X�w�إ�, ���ˬd�z���q�l�l��H�c�H���o�b���ҥΪ�������T';
$lang['No_email_match'] = '�z�Ҵ��Ѫ��q�l�l���}�P�ϥΪ̦W�٤���';
$lang['New_password_activation'] = '�s���K�X�ҥ�';
$lang['Password_activated'] = '�z���b���w�Q���s�ҥ�, ���ˬd�z���q�l�l��H�c, �èϥαz�Ҧ��쪺�s�K�X���s�n�J';

$lang['Send_email_msg'] = '�o�e�q�l�l��T��';
$lang['No_user_specified'] = '���s�b���|��';
$lang['User_prevent_email'] = '�o�ӷ|�����Ʊ榬��q�l�l��, �й��յo�e�p�H�T��';
$lang['User_not_exist'] = '���s�b���|��';
$lang['CC_email'] = '�o�e�@�Ӷl��ƥ����ۤv';
$lang['Email_message_desc'] = '�o�ӰT�������O�¤�r�榡, �Ф��n�[�J���� HTML �y�k�άO BBCode �N�X. �Ъ�^�ÿ�J�z���q�l�l���}.';
$lang['Flood_email_limit'] = '�z�L�k�P�ɵo�e�q�l�l�󵹨�L�|��, �еy��A��';
$lang['Recipient'] = '�����l��';
$lang['Email_sent'] = '�q�l�l��w�g�o�e';
$lang['Send_email'] = '�o�e�q�l�l��';
$lang['Empty_subject_email'] = '�o�ӹq�l�l�󥲶��n���D�D';
$lang['Empty_message_email'] = '�z������J�q�l�l�󤺮e';


//
// Memberslist
//
$lang['Select_sort_method'] = '��ܱƦC�覡';
$lang['Sort'] = '�̧ǱƦC';
$lang['Sort_Top_Ten'] = '�Q�j�Ʀ�';
$lang['Sort_Joined'] = '���U�ɶ�';
$lang['Sort_Username'] = '�|���W��';
$lang['Sort_Location'] = '�Ӧۦa��';
$lang['Sort_Posts'] = '�峹�`��';
$lang['Sort_Email'] = '�q�l�l��';
$lang['Sort_Website'] = '�ӤH����';
$lang['Sort_Ascending'] = '�̧ǻ��W';
$lang['Sort_Descending'] = '�̧ǻ���';
$lang['Order'] = '����';


//
// Group control panel
//
$lang['Group_Control_Panel'] = '�|���s�ձ���x';
$lang['Group_member_details'] = '�|���s�ղM��';
$lang['Group_member_join'] = '�[�J�s��';

$lang['Group_Information'] = '�s�հT��';
$lang['Group_name'] = '�s�զW��';
$lang['Group_description'] = '�s�մy�z';
$lang['Group_membership'] = '�s�ը���';
$lang['Group_Members'] = '�s�զ���';
$lang['Group_Moderator'] = '�s�ղժ�';
$lang['Pending_members'] = '�f�ַ|��';

$lang['Group_type'] = '�s�էκA';
$lang['Group_open'] = '�}��s��';
$lang['Group_closed'] = '�ʳ��s��';
$lang['Group_hidden'] = '���θs��';

$lang['Current_memberships'] = '�ثe�|��';
$lang['Non_member_groups'] = '�S���|�����s��';
$lang['Memberships_pending'] = '�|�������f�֤�';

$lang['No_groups_exist'] = '�s�դ��s�b';
$lang['Group_not_exist'] = '�o�ӷ|���s�դ��s�b';

$lang['Join_group'] = '�[�J�s��';
$lang['No_group_members'] = '�o�Ӹs�եثe�S������';
$lang['Group_hidden_members'] = '�o�Ӹs�լO���Ϊ�, �ҥH�z�L�k�˵���������';
$lang['No_pending_group_members'] = '�o�Ӹs�ըS���f�֤����|��';
$lang['Group_joined'] = '�z�w�g�P�N�ӽХ[�J�o�ӷ|���s��<br />�o�Ӹs�ժ��ժ��N�|�q���z�O�_��\�[�J';
$lang['Group_request'] = '���@�ӷ|���ӽХ[�J�z���s��';
$lang['Group_approved'] = '�z���ШD�w�g��o���';
$lang['Group_added'] = '�z�w�g�Q�[�J�o�ӷ|���s��';
$lang['Already_member_group'] = '�z�w�g�O�o�Ӹs�ժ�����';
$lang['User_is_member_group'] = '�ӷ|���w�g�O�o�Ӹs�ժ�����';
$lang['Group_type_updated'] = '�s�էκA�w�g������s';

$lang['Could_not_add_user'] = '�z�ҿ�ܪ��|�����s�b';
$lang['Could_not_anon_user'] = '�z����N�X�ȦC���s�զ���';

$lang['Confirm_unsub'] = '�z�T�w�z�n�����[�J�o�Ӹs�ժ��ӽж�?';
$lang['Confirm_unsub_pending'] = '�z�ӽХ[�J�o�Ӹs�թ|����o���, �z�T�w�n�����ӽж�?';

$lang['Unsub_success'] = '�z�w�g�����ӽХ[�J�o�Ӹs��.';

$lang['Approve_selected'] = '�����';
$lang['Deny_selected'] = '��^���';
$lang['Not_logged_in'] = '�z�������n�J�~��[�J�s��.';
$lang['Remove_selected'] = '�������';
$lang['Add_member'] = '�W�[����';
$lang['Not_group_moderator'] = '�ѩ�z���ݩ�޲z�ζ�����, �]���S���v�Q����o�Ӱʧ@!';

$lang['Login_to_join'] = '�n�J�޲z�Υ[�J�s�ը���';
$lang['This_open_group'] = '�o�O�@�Ӷ}��s��, �I��ӽХ[�J';
$lang['This_closed_group'] = '�o�O�@�ӫʳ����s��, �������ӽХ[�J';
$lang['This_hidden_group'] = '�o�O�@�����θs��, �L�k�D�ʥ[�J';
$lang['Member_this_group'] = '�z�O�o�Ӹs�ժ�����';
$lang['Pending_this_group'] = '�z�b�o�Ӹs�ժ��������b�f�֤�';
$lang['Are_group_moderator'] = '�z�O�o�Ӹs�ժ��ժ�';
$lang['None'] = '�S��';

$lang['Subscribe'] = '�ӽХ[�J';
$lang['Unsubscribe'] = '�����ӽ�';
$lang['View_Information'] = '�˵������T��';


//
// Search
//
$lang['Search_query'] = '�峹�j�M�t��';
$lang['Search_options'] = '�j�M�ﶵ';

$lang['Search_keywords'] = '�j�M����r';
$lang['Search_keywords_explain'] = '�z�i�H�ϥ�\'���L�B��k\'���覡�ӷj�M. <u>AND</u> �N��]�t. <u>OR</u> �N��i�]�t. <u>NOT</u> �N���]�t.';
$lang['Search_author'] = '�j�M�o��H';
$lang['Search_author_explain'] = '�z�i�H�ϥ� * �U�Φr���j�M';

$lang['Search_for_any'] = '�j�M�ŦX�H�W���@����r�����';
$lang['Search_for_all'] = '�j�M�ŦX�H�W�Ҧ�����r�����';
$lang['Search_title_msg'] = '�j�M�峹�D�D�Τ��e';
$lang['Search_msg_only'] = '�u�j�M�峹���e';

$lang['Return_first'] = '�j�M���G���'; // followed by xxx characters in a select box
$lang['characters_posts'] = '�����';

$lang['Search_previous'] = '�ɶ��d��'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = '�ƦC����';
$lang['Sort_Time'] = '�o��ɶ�';
$lang['Sort_Post_Subject'] = '�峹���D';
$lang['Sort_Topic_Title'] = '�D�D';
$lang['Sort_Author'] = '�o��H';
$lang['Sort_Forum'] = '����';

$lang['Display_results'] = '��ܼҦ�';
$lang['All_available'] = '�Ҧ���';
$lang['No_searchable_forums'] = '�z�S���j�M�峹���v��';

$lang['No_search_match'] = '�S�������D�D�Τ峹�ŦX�z�n�j�M������';
$lang['Found_search_match'] = '�� %d ����ƲŦX�z�j�M������'; // eg. Search found 1 match
$lang['Found_search_matches'] = '�� %d ����ƲŦX�z�j�M������'; // eg. Search found 24 matches

$lang['Close_window'] = '��������';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '��p! �u�� %s �i�H�b�o�Ӫ����o���i';
$lang['Sorry_auth_sticky'] = '��p! �u�� %s �i�H�b�o�Ӫ����o��m���峹';
$lang['Sorry_auth_read'] = '��p! �u�� %s �i�H�\Ū�o�Ӫ������D�D';
$lang['Sorry_auth_post'] = '��p! �u�� %s �i�H�b�o�Ӫ����o��s�D�D';
$lang['Sorry_auth_reply'] = '��p! �u�� %s �i�H�^�гo�Ӫ������峹';
$lang['Sorry_auth_edit'] = '��p! �u�� %s �i�H�s��o�Ӫ������峹';
$lang['Sorry_auth_delete'] = '��p! �u�� %s �i�H�R���o�Ӫ������峹';
$lang['Sorry_auth_vote'] = '��p! �u�� %s �i�H�b�o�Ӫ����o�_�벼';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>�ΦW�X��</b>';
$lang['Auth_Registered_Users'] = '<b>���U�|��</b>';
$lang['Auth_Users_granted_access'] = '<b>�S��|��</b>';
$lang['Auth_Moderators'] = '<b>�����޲z��</b>';
$lang['Auth_Administrators'] = '<b>�t�κ޲z��</b>';

$lang['Not_Moderator'] = '�z�S���޲z�o�Ӫ������v�O';
$lang['Not_Authorised'] = '������v';

$lang['You_been_banned'] = '�z�w�Q����|�����<br />�и򪩭��޲z��, �s�պ޲z���άO�t�κ޲z���p���߰ݬ�����T';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 ��|���� '; // There ae 5 Registered and
$lang['Reg_users_online'] = '%d ��|���� '; // There ae 5 Registered and
$lang['Reg_user_online'] = '%d ��|���� '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 �����Φb�u�W'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d �����Φb�u�W'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d �����Φb�u�W'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d ��X�Ȧb�u�W'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 ��X�Ȧb�u�W'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d ��X�Ȧb�u�W'; // There is 1 Guest user online
$lang['No_users_browsing'] = '�ثe�S���ϥΪ��s���o�ӰQ�װ�';

$lang['Online_explain'] = '�o�Ǹ�Ʈھڪ��O�̪� 5 �������|�������ʰO��';

$lang['Forum_Location'] = '������m';
$lang['Last_updated'] = '�̫��s��';

$lang['Forum_index'] = '�Q�װϭ���';
$lang['Logging_on'] = '���b�n�J';
$lang['Posting_message'] = '���b�o��峹';
$lang['Searching_forums'] = '�j�M�Q�װϤ峹';
$lang['Viewing_profile'] = '�˵��ӤH���';
$lang['Viewing_online'] = '�˵��֦b�u�W';
$lang['Viewing_member_list'] = '�˵��|���M��';
$lang['Viewing_priv_msgs'] = '�˵��p�H�T��';
$lang['Viewing_FAQ'] = '�˵��`�����D';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = '�����޲z����x';
$lang['Mod_CP_explain'] = '�b�o�ӱ���O��, �z�i�H����h�������޲z�\��. �z�i�H��w, �Ѱ���w, ���ʩΧR������ƶq���峹�D�D';

$lang['Select'] = '���';
$lang['Delete'] = '�R��';
$lang['Move'] = '����';
$lang['Lock'] = '��w';
$lang['Unlock'] = '�Ѱ�';

$lang['Topics_Removed'] = '��ܪ��D�D�w�q��Ʈw����';
$lang['Topics_Locked'] = '��ܪ��D�D�w��w';
$lang['Topics_Moved'] = '��ܪ��D�D�w����';
$lang['Topics_Unlocked'] = '��ܪ��D�D�w�Ѱ���w';
$lang['No_Topics_Moved'] = '�S���D�D�Q����';

$lang['Confirm_delete_topic'] = '�z�T�w�z�n�����ҿ�ܪ��D�D��?';
$lang['Confirm_lock_topic'] = '�z�T�w�z�n��w�ҿ�ܪ��D�D��?';
$lang['Confirm_unlock_topic'] = '�z�T�w�z�n�Ѱ���w�ҿ�ܪ��D�D��?';
$lang['Confirm_move_topic'] = '�z�T�w�z�n���ʩҿ�ܪ��D�D��?';

$lang['Move_to_forum'] = '���ʨ�';
$lang['Leave_shadow_topic'] = '�b�ª������W�d�U�Q���ʪ��D�D';

$lang['Split_Topic'] = '�D�D���α���x';
$lang['Split_Topic_explain'] = '�z�i�H�ϥΤU�C���N�@�ӥD�D���Φ��G, �z�i�H��ܤ��έӧO���峹�άO�q���w���峹���j';
$lang['Split_title'] = '�s���D�D�W��';
$lang['Split_forum'] = '�m��s�D�D������';
$lang['Split_posts'] = '���ο�ܪ��峹';
$lang['Split_after'] = '�q���w���峹���j';
$lang['Topic_split'] = '�z��ܪ��D�D�w�g��������';

$lang['Too_many_error'] = '�z���w�F�L�h���峹. �z�u�i�H��ܤ@�ӫ��w���峹�Ӥ��ΥD�D!';

$lang['None_selected'] = '�z�S����ܥ���D�D�Ӱ���o�Ӱʧ@, �Ъ�^�æܤֿ�ܤ@�ӥD�D.';
$lang['New_forum'] = '�s����';

$lang['This_posts_IP'] = '�o��H�� IP ��}';
$lang['Other_IP_this_user'] = '�o�ӨϥΪ̦^�ЮɥιL���䥦 IP ��}';
$lang['Users_this_IP'] = '�ϥΪ̵o��ɨӦ۳o�� IP ��}';
$lang['IP_info'] = 'IP ��}���i';
$lang['Lookup_IP'] = '�M�� IP ��}';


//
// Timezones ... for display on each page
//
$lang['All_times'] = '�Ҧ����ɶ����� %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 �p��';
$lang['-11'] = 'GMT - 11 �p��';
$lang['-10'] = 'HST (�L�¦i)';
$lang['-9'] = 'GMT - 9 �p��';
$lang['-8'] = 'PST (����/�[���j)';
$lang['-7'] = 'MST (����/�[���j)';
$lang['-6'] = 'CST (����/�[���j)';
$lang['-5'] = 'EST (����/�[���j)';
$lang['-4'] = 'GMT - 4 �p��';
$lang['-3.5'] = 'GMT - 3.5 �p��';
$lang['-3'] = 'GMT - 3 �p��';
$lang['-2'] = '���j��v';
$lang['-1'] = 'GMT - 1 �p��';
$lang['0'] = 'GMT';
$lang['1'] = 'CET (�ڬw)';
$lang['2'] = 'EET (�ڬw)';
$lang['3'] = 'GMT + 3 �p��';
$lang['3.5'] = 'GMT + 3.5 �p��';
$lang['4'] = 'GMT + 4 �p��';
$lang['4.5'] = 'GMT + 4.5 �p��';
$lang['5'] = 'GMT + 5 �p��';
$lang['5.5'] = 'GMT + 5.5 �p��';
$lang['6'] = 'GMT + 6 �p��';
$lang['6.5'] = 'GMT + 6.5 �p��';
$lang['7'] = 'GMT + 7 �p��';
$lang['8'] = '�x�_�ɶ� (GMT + 8 �p��)';
$lang['9'] = 'GMT + 9 �p��';
$lang['9.5'] = 'GMT + 9.5 �p��';
$lang['10'] = 'EST (�D�w)';
$lang['11'] = 'GMT + 11 �p��';
$lang['12'] = 'GMT + 12 �p��';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT - 12 �p��) �J���¦��J�q, �ʥ[�L�q';
$lang['tz']['-11'] = '(GMT - 11 �p��) ���~�q, �ļ���';
$lang['tz']['-10'] = '(GMT - 10 �p��) �L�¦i';
$lang['tz']['-9'] = '(GMT - 9 �p��) ���Դ��[';
$lang['tz']['-8'] = '(GMT - 8 �p��) �ӥ��v�зǮɶ� (���� & �[���j)';
$lang['tz']['-7'] = '(GMT - 7 �p��) �s�ϼзǮɶ� (���� & �[���j)';
$lang['tz']['-6'] = '(GMT - 6 �p��) �����зǮɶ� (���� & �[���j), �������';
$lang['tz']['-5'] = '(GMT - 5 �p��) �F���зǮɶ� (���� & �[���j), �i���j, �Q��, ��h';
$lang['tz']['-4'] = '(GMT - 4 �p��) �j��v�зǮɶ� (�[���j), �d�ԥd��, �Ԥڴ�';
$lang['tz']['-3.5'] = '(GMT - 3.5 �p��) �ê���';
$lang['tz']['-3'] = '(GMT - 3 �p��) �ڦ�, ���y�մ���Q��, ��v��, �֧J���s�q';
$lang['tz']['-2'] = '(GMT - 2 �p��) ���j��v, �ȴ˪Q�q, �t���Ǯ��q';
$lang['tz']['-1'] = '(GMT - 1 �p��) �ȳt���s�q, ���w��';
$lang['tz']['0'] = '(GMT) �d�ĥ����d, ���f�L, �R�B��, �۴�, ������, �Xù����';
$lang['tz']['1'] = '(GMT + 1 �p��) �f�L, ���|�뺸, ��������, ���w��, �ھ�, ù��';
$lang['tz']['2'] = '(GMT + 2 �p��) �[������, �n�D, �بF';
$lang['tz']['3'] = '(GMT + 3 �p��) �ڮ�F, �Q���w, ������, �`����';
$lang['tz']['3.5'] = '(GMT + 3.5 �p��) �w����';
$lang['tz']['4'] = '(GMT + 4 �p��) �����F��, �ڮw, �����دS, �Ĥ�Q��';
$lang['tz']['4.5'] = '(GMT + 4.5 �p��) �إ���';
$lang['tz']['5'] = '(GMT + 5 �p��) ��d�S�L��, �촵�����ڼw, �ة԰E, �𤰤z';
$lang['tz']['5.5'] = '(GMT + 5.5 �p��) �s�R, �[���U��, ���w�Դ�, �s�w��';
$lang['tz']['6'] = '(GMT + 6 �p��) ���X��, �i�۩Y, �N�N��';
$lang['tz']['6.5'] = '(GMT + 6.5 �p��) ����';
$lang['tz']['7'] = '(GMT + 7 �p��) �Ҩ�, �e��, ���[�F';
$lang['tz']['8'] = '(GMT + 8 �p��) �_��, ����, �B��, �s�[�Y, �x�_';
$lang['tz']['9'] = '(GMT + 9 �p��) �j��, ���E, �~��, �F��, �Ȯw���J';
$lang['tz']['9.5'] = '(GMT + 9.5 �p��) ���o�p�w, �F����';
$lang['tz']['10'] = '(GMT + 10 �p��) ������, �ڥ��s�X����, ����, ���ѫ�';
$lang['tz']['11'] = '(GMT + 11 �p��) ���[��, �s�d���h����, ��ù���s�q';
$lang['tz']['12'] = '(GMT + 12 �p��) ���J��, ���F�y, ����, ���к��s�q';

$lang['datetime']['Sunday'] = '�P����';
$lang['datetime']['Monday'] = '�P���@';
$lang['datetime']['Tuesday'] = '�P���G';
$lang['datetime']['Wednesday'] = '�P���T';
$lang['datetime']['Thursday'] = '�P���|';
$lang['datetime']['Friday'] = '�P����';
$lang['datetime']['Saturday'] = '�P����';
$lang['datetime']['Sun'] = '�P����';
$lang['datetime']['Mon'] = '�P���@';
$lang['datetime']['Tue'] = '�P���G';
$lang['datetime']['Wed'] = '�P���T';
$lang['datetime']['Thu'] = '�P���|';
$lang['datetime']['Fri'] = '�P����';
$lang['datetime']['Sat'] = '�P����';
$lang['datetime']['January'] = '�@��';
$lang['datetime']['February'] = '�G��';
$lang['datetime']['March'] = '�T��';
$lang['datetime']['April'] = '�|��';
$lang['datetime']['May'] = '����';
$lang['datetime']['June'] = '����';
$lang['datetime']['July'] = '�C��';
$lang['datetime']['August'] = '�K��';
$lang['datetime']['September'] = '�E��';
$lang['datetime']['October'] = '�Q��';
$lang['datetime']['November'] = '�Q�@��';
$lang['datetime']['December'] = '�Q�G��';
$lang['datetime']['Jan'] = '�@��';
$lang['datetime']['Feb'] = '�G��';
$lang['datetime']['Mar'] = '�T��';
$lang['datetime']['Apr'] = '�|��';
$lang['datetime']['May'] = '����';
$lang['datetime']['Jun'] = '����';
$lang['datetime']['Jul'] = '�C��';
$lang['datetime']['Aug'] = '�K��';
$lang['datetime']['Sep'] = '�E��';
$lang['datetime']['Oct'] = '�Q��';
$lang['datetime']['Nov'] = '�Q�@��';
$lang['datetime']['Dec'] = '�Q�G��';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = '�t�ΰT��';
$lang['Critical_Information'] = '���j�T��';

$lang['General_Error'] = '�@����~';
$lang['Critical_Error'] = '���j���~';
$lang['An_error_occured'] = '�o�Ϳ��~';
$lang['A_critical_error'] = '�o�ͭ��j���~';

//
// That's all Folks!
// -------------------------------------------------

?>