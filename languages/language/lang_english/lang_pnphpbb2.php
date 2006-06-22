<?php
/***************************************************************************
 *                            lang_pnphpbb2.php [English]
 *                              -------------------
 *     begin                : Tue Jan 13 2003
 *     update               : Fri May 17 2003
 *     copyright            : (C) 2003-2004 the PNphpBB Group
 *     email                : support@itsallbutstraw.com
 *
 *     $Id: lang_pnphpbb2.php,v 1.7 2004/10/15 20:55:21 carls Exp $
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
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

// Profiles/Registration
$lang['PNphpBB2_Change_Profile'] = 'Change Your PostNuke Profile';
$lang['PNphpBB2_Refresh_Profile'] = 'Refresh Your PostNuke Profile';
$lang['PNphpBB2_Profile_Info'] = 'This information is used in PNphpBB2 only. All profile information that is shared between PostNuke and PNphpBB2 is set in the PostNuke Profile Settings.';
$lang['PNphpBB2_Get_PN_Avatar'] = 'From PostNuke';

// Advanced Quick Reply Mod
$lang['Post_Image'] = "Msg Icon";
$lang['Quick_Reply'] = 'Quick Reply';
$lang['Quick_quote'] = 'Quote the last message';
$lang['Quick_add_smilies'] = 'Smiles';
$lang['QuoteSelelected'] = 'Quote selected';
$lang['QuoteSelelectedEmpty'] = 'Select a text anywhere on a page and try again';
$lang['Quick_Reply_smilies'] = 'all';

// Tell-A-Friend Mod
$lang['Tell_Friend'] = "Email to a Friend.";
$lang['Tell_Friend_Sender_User'] = "Your Name:";
$lang['Tell_Friend_Sender_Email'] = "Your Email:";
$lang['Tell_Friend_Reciever_User'] = "Your Friend's Name:";
$lang['Tell_Friend_Reciever_Email'] = "Your Friend's Email:";
$lang['Tell_Friend_Msg'] = "Your message:";
$lang['Tell_Friend_Title'] = "Tell A Friend";
$lang['Tell_Friend_Body'] = "Hi,\nI just read the topic >>{TOPIC}<< at {SITENAME} and thought you might be interested. Here is the link: {LINK}\n\nGo and read it and if you want to reply you can register for your own account if you have not done so already.";

// Printable Topic
$lang['Print_View'] = "Printable version";

// Credits
$lang['Powered_by'] = "Powered by ";
$lang['PNphpBB_group'] = "The PNphpBB Group";
$lang['Credits'] = "Credits";

// Full page maximize/minimize
$lang['PNphpBB2_Minimize'] = "Minimize";
$lang['PNphpBB2_Maximize'] = "Maximize"; 

// Full page maximize/minimize
$lang['PNphpBB2_SubForum_Off'] = "Sub-Category";
$lang['PNphpBB2_SubForum_On'] = "Sub-Forum"; 

// Hierarchies Mod

$lang['Forum_issub'] = 'The forum you selected contains sub categories.<br>Therefore it is not possible to view posts.';

//MsgIcon Mod
$lang['Msg_Icons'] = 'Message Icons';
$lang['Msg_Icon_No_Icon'] = 'No Icon';
$lang['More_msg_icons'] = "View more icons";

//Code Block mod by Daz
$lang['code_more'] = "View More of this Code";
$lang['code_even_more'] = "View Even More of this Code";
$lang['code_less'] = "View Less of this Code";
$lang['code_select'] = "Select All of this Code";

// Duplicated from phpBB admin language file for admin link :-(
$lang['Admin'] = 'Administration';
$lang['Moderate'] = 'Moderate this forum';

// New version of the User authorization levels output
$lang['Rules_header'] = 'In this forum you can:';
$lang['Rules_post'] = 'Post new topics';
$lang['Rules_reply'] = 'Reply to topics';
$lang['Rules_edit'] = 'Edit your posts';
$lang['Rules_delete'] = 'Delete your posts';
$lang['Rules_vote'] = 'Vote in polls';
$lang['Rules_attach'] = 'Attach files';
$lang['Rules_download'] = 'Download files';
$lang['Rules_moderate_table'] = '%sModerate%s';
//$lang['Rules_moderate'] = 'You <b>can</b> %smoderate this forum%s'; // %s replaced by a href links, do not remove! 

// Added Re: for replies, Hardcoded in phpBB
$lang['Re'] = 'RE:';

// Legend
$lang['Legend'] = 'Legend';

// User online mod
$lang['Status'] = 'Status: ';
$lang['Online'] = 'Online!';
$lang['Offline'] = 'Offline';

// Merge topics mod
$lang['Refresh'] = 'Refresh';
$lang['Merge_topics'] = 'Merge topics';
$lang['Merge_title'] = 'New topic title';
$lang['Merge_title_explain'] = 'This will be the new title of the final topic. Let it blank if you want the system to use the title of the destination topic';
$lang['Merge_topic_from'] = 'Topic to merge';
$lang['Merge_topic_from_explain'] = 'This topic will be merge to the other topic. You can input the topic id, the url of the topic, or the url of a post in this topic';
$lang['Merge_topic_to'] = 'Destination topic';
$lang['Merge_topic_to_explain'] = 'This topic will get all the posts of the precedent topic. You can input the topic id, the url of the topic, or the url of a post in this topic';
$lang['Merge_from_not_found'] = 'The topic to merge hasn\'t been found';
$lang['Merge_to_not_found'] = 'The destination topic hasn\'t been found';
$lang['Merge_topics_equals'] = 'You can\'t merge a topic with itself';
$lang['Merge_from_not_authorized'] = 'You are not a authorized to moderate topics coming from the forum of the topic to merge';
$lang['Merge_to_not_authorized'] =  'You are not a authorized to moderate topics coming from the forum of the destination topic';
$lang['Merge_poll_from'] = 'There is a poll on the topic to merge. It will be copied to the destination topic';
$lang['Merge_poll_from_and_to'] = 'The destination topic already has got a poll. The poll of the topic to merge will be deleted';
$lang['Merge_confirm_process'] = 'Are you sure you want to merge <br />"<b>%s</b>"<br />to<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'The topics have been successfully merged.';

//limited post edit time MOD 
$lang['edit_time_past'] = 'You are not allowed to edit your post. You have to edit your post within <b>%d</b> minutes, after you posted your message.'; 

// Support status items
$lang['Support_topic'] = 'Support Topic';
$lang['support_status'][-1] = 'Select status';
$lang['support_status'][0] = 'Submitted';
$lang['support_status'][1] = 'Reported';
$lang['support_status'][2] = 'Confirmed';
$lang['support_status'][3] = 'Assigned';
$lang['support_status'][4] = 'Fixed';
$lang['support_status'][5] = 'Solved';
$lang['support_status'][6] = 'User Error';
$lang['support_status'][7] = 'More Input Needed';
$lang['support_status'][8] = 'Already Reported';
$lang['support_status'][9] = 'Abandoned';
$lang['support_status'][10] = 'Answered';
$lang['support_status'][11] = 'Completed';

$lang['support_color'][1] = 'blue';
$lang['support_color'][2] = 'red';
$lang['support_color'][3] = 'magenta';
$lang['support_color'][4] = 'green';
$lang['support_color'][5] = 'purple';
$lang['support_color'][6] = 'brown';
$lang['support_color'][7] = 'orange';
$lang['support_color'][8] = 'gray';
$lang['support_color'][9] = 'black';
$lang['support_color'][10] = 'green';
$lang['support_color'][11] = 'green';

// Pagination
$lang['Navigation'] = 'Navigation';
$lang['First_Post'] = 'First post';
$lang['Jump_Page'] = 'Enter the page number you wish to goto';

// Replace existing phpBB language entries
$lang['Search_new'] = 'View new posts';

// Gravatrs
$lang['Use_gravatar'] = "Use your <a href=\"http://www.gravatar.com\">Gravatar</a>";
//
// That's all Folks!
// -------------------------------------------------

?>