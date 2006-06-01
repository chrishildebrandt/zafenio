<?php
// Begin PNphpBB2 Module
if (!defined("LOADED_AS_MODULE")) {
	 die ("You can't access this file directly...");
}

global $post_id;

$pntable = pnDBGetTables();
$ModName = basename( dirname( __FILE__ ) );
// End PNphpBB2 Module

define('IN_PHPBB', true);

// Begin PNphpBB2 Module
$phpbb_root_path = './modules/' . $ModName . '/';
// End PNphpBB2 Module
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/functions_post.'.$phpEx);

$topic = (isset($HTTP_POST_VARS['topic'])) ? $HTTP_POST_VARS['topic'] : $HTTP_GET_VARS['topic']; 
$friendname =  $HTTP_POST_VARS['friendname'];
$message = $HTTP_POST_VARS['message'];
// Begin PNphpBB2 Module
$link =  pnGetBaseURL() . append_sid("viewtopic") . "&" . $HTTP_GET_VARS['link'];
// End PNphpBB2 Module

$PHP_SELF = $HTTP_SERVER_VARS['PHP_SELF'];

$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);

if (!$userdata['session_logged_in']) 
{ 
	redirect(append_sid("login.$phpEx?redirect=tellafriend.$phpEx&topic=$topic_title&link=" . POST_TOPIC_URL . "=$topic_id", true));
} 
        
$mail_body = str_replace("{TOPIC}", trim(stripslashes($topic)), $lang['Tell_Friend_Body']);
$mail_body = str_replace("{LINK}", $link, $mail_body);
$mail_body = str_replace("{SITENAME}", $board_config['sitename'], $mail_body);

$template->assign_vars(array(
  'L_TELL_FRIEND_TITLE' => $lang['Tell_Friend_Title'],
  'L_TELL_FRIEND_EMAIL_MESSAGE' => $lang['Tell_Friend_Email_Message'],
  'L_TELL_FRIEND_SENDER_USER' => $lang['Tell_Friend'],
  'L_TELL_FRIEND_SENDER_USER' => $lang['Tell_Friend_Sender_User'],
  'L_TELL_FRIEND_SENDER_EMAIL' => $lang['Tell_Friend_Sender_Email'],
  'L_TELL_FRIEND_RECIEVER_USER' => $lang['Tell_Friend_Reciever_User'],
  'L_TELL_FRIEND_RECIEVER_EMAIL' => $lang['Tell_Friend_Reciever_Email'],
  'L_TELL_FRIEND_MSG' => $lang['Tell_Friend_Msg'],
  'L_TELL_FRIEND_BODY' => $mail_body,
  'SUBMIT_ACTION' => append_sid("tellafriend"),
  'L_SUBMIT' => $lang['Send_email'],
  'SITENAME' => $board_config['sitename'], 
  'TOPIC' => trim(stripslashes($topic)), 
  'LINK' => $link, 
/* Begin PNphpBB2 Module */
  'SENDER_NAME' => pnVarPrepForDisplay($userdata['username']), 
/* End PNphpBB2 Module */
  'SENDER_MAIL' => $userdata['user_email'])
);

if ( isset($HTTP_POST_VARS['submit']) )
{
	$error = FALSE;
	
	if ( !empty($HTTP_POST_VARS['friendemail']) && (strpos($HTTP_POST_VARS['friendemail'],"@")>0) )
	{
		$friendemail = trim(stripslashes($HTTP_POST_VARS['friendemail']));
		if (!$HTTP_POST_VARS['friendname']) { $friendname=substr($friendemail,0,strpos($HTTP_POST_VARS['friendemail'],"@")); };
	}
	else
	{
		$error = TRUE;
		$error_msg = "You have not entered a (valid) email address";
	}

	if ( !$error )
	{
		include($phpbb_root_path . 'includes/emailer.'.$phpEx);
		$emailer = new emailer($board_config['smtp_delivery']);

		$email_headers = 'X-AntiAbuse: Board servername - ' . $server_name . "\n";
		$email_headers .= 'X-AntiAbuse: User_id - ' . $userdata['user_id'] . "\n";
		$email_headers .= 'X-AntiAbuse: Username - ' . $userdata['username'] . "\n";
		$email_headers .= 'X-AntiAbuse: User IP - ' . decode_ip($user_ip) . "\r\n";
					
	  $emailer->from($userdata['username'] . " <". $userdata['user_email'] .">");

		$emailer->replyto($userdata['username'] . " <". $userdata['user_email'] .">");

		$emailer->use_template('tellafriend_email', $userdata['user_lang']);
		$emailer->email_address($friendname .'<'. $friendemail .'>');
		$emailer->set_subject(trim(stripslashes($topic)));
		$emailer->extra_headers($email_headers);
							
		$emailer->assign_vars(array(
			'SITENAME' => $board_config['sitename'], 
			'BOARD_EMAIL' => $board_config['board_email'], 
			'FROM_USERNAME' => $userdata['username'], 
			'TO_USERNAME' => $friendname, 
			'MESSAGE' => $message)
			);
		$emailer->send();
		$emailer->reset();

		$template->assign_vars(array(
			'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($HTTP_POST_VARS['link']) . '">'
		));
					
		$message = $lang['Email_sent'] . '<br /><br />' . sprintf($lang['Click_return_index'],  '<a href="' . append_sid("index.$phpEx") . '">', '</a>');

		message_die(GENERAL_MESSAGE, $message);
	}

	if ( $error )
	{
		$template->set_filenames(array(
			'reg_header' => 'error_body.tpl')
		);
		$template->assign_vars(array(
			'ERROR_MESSAGE' => $error_msg)
		);
		$template->assign_var_from_handle('ERROR_BOX', 'reg_header');
	}
}

include($phpbb_root_path . 'includes/page_header.'.$phpEx);

$template->set_filenames(array("body" => "tellafriend_body.tpl"));
$template->pparse("body");

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
?>
