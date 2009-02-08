<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post">
{ERROR_BOX}
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td ><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2" class="thc">{L_REGISTRATION_INFO}</th>
</tr>
<tr>
<td class="row2" colspan="2" ><span class="gensmall">{P_PROFILE_INFO}</span></td>
</tr>
<tr>
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="changeprofile" value="{P_CHANGE_PROFILE}" class="button" />
&nbsp;&nbsp; 
<input type="submit" value="{P_REFRESH_PROFILE}" name="refreshprofile" class="button" />
</td>
</tr>
<tr>
<td class="row1">{L_SIGNATURE}:<br />
<span class="gensmall">{L_SIGNATURE_EXPLAIN}<br />
<br />
{HTML_STATUS}<br />
{BBCODE_STATUS}<br />
{SMILIES_STATUS}</span></td>
<td class="row2">
<textarea name="signature" style="width: 300px" rows="6" cols="30" class="post">{SIGNATURE}</textarea>
</td>
</tr>
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
<tr>
<th colspan="2" class="thc">{L_PREFERENCES}</th>
</tr>
<tr>
<td class="row1">{L_PUBLIC_VIEW_EMAIL}:</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_HIDE_USER}:</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="hideonline" value="1" {HIDE_USER_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="hideonline" value="0" {HIDE_USER_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_NOTIFY_ON_REPLY}:<br />
<span class="gensmall">{L_NOTIFY_ON_REPLY_EXPLAIN}</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_NOTIFY_ON_PRIVMSG}:</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_POPUP_ON_PRIVMSG}:<br />
<span class="gensmall">{L_POPUP_ON_PRIVMSG_EXPLAIN}</span></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="popup_pm" value="1" {POPUP_PM_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="popup_pm" value="0" {POPUP_PM_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_ALWAYS_ADD_SIGNATURE}:</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_ALWAYS_ALLOW_BBCODE}:</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} />&nbsp;</td>
<td>{L_NO}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1">{L_ALWAYS_ALLOW_HTML}:</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES} />&nbsp;</td>
<td>{L_YES}&nbsp;&nbsp;</td>
<td><input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO} />&nbsp;</td>
					<td>{L_NO}</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_ALWAYS_ALLOW_SMILIES}:</td>
		<td class="row2">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} />&nbsp;</td>
					<td>{L_YES}&nbsp;&nbsp;</td>
					<td><input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} />&nbsp;</td>
					<td>{L_NO}</td>
				</tr>
			</table>
		</td>
	</tr>
	<!-- BEGIN force_word_wrapping -->
	<tr> 
		<td class="row1"><span class="gen">{L_WORD_WRAP}:</span><br /><span class="gensmall">{L_WORD_WRAP_EXPLAIN}</span></td>
		<td class="row2"><span class="gensmall"><input type="text" name="user_wordwrap" value="{WRAP_ROW}" size="2" maxlength="2" class="post" /> {L_WORD_WRAP_EXTRA}</span></td>
	</tr>
	<!-- END force_word_wrapping -->
	<!-- BEGIN switch_overide_style -->
	<tr>
		<td class="row1">{L_BOARD_STYLE}:</td>
		<td class="row2"><span class="gensmall">{STYLE_SELECT}</span></td>
	</tr>
	<!-- END switch_overide_style -->
	<!-- BEGIN switch_avatar_block -->
	<tr>
		<td class="cat" colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<th colspan="2" class="thc">{L_AVATAR_PANEL}</th>
	</tr>
	<tr>
		<td class="row1" colspan="2">
			<table width="70%" cellspacing="2" cellpadding="0" border="0" align="center">
				<tr>
					<td width="65%" class="gensmall">{L_AVATAR_EXPLAIN}</td>
					<td align="center" class="gensmall">
          	{L_CURRENT_IMAGE}<br />
						{AVATAR}<br />
						<input type="checkbox" name="avatardel" />
						&nbsp;{L_DELETE_AVATAR}
          </td>
				</tr>
			</table>
		</td>
	</tr>
	<!-- BEGIN switch_avatar_local_upload -->
	<tr>
		<td class="row1">{L_UPLOAD_AVATAR_FILE}:</td>
		<td class="row2">
			<input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}" />
			<input type="file" name="avatar" class="post" style="width:200px" />
		</td>
	</tr>
	<!-- END switch_avatar_local_upload -->
	<!-- BEGIN switch_avatar_remote_upload -->
	<tr>
		<td class="row1">{L_UPLOAD_AVATAR_URL}:<br />
			<span class="gensmall">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span>
    </td>
		<td class="row2">
			<input type="text" name="avatarurl" size="40" class="post" style="width:200px" />
		</td>
	</tr>
	<!-- END switch_avatar_remote_upload -->
	<!-- BEGIN switch_avatar_remote_link -->
	<tr>
		<td class="row1">{L_LINK_REMOTE_AVATAR}:<br />
			<span class="gensmall">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span>
    </td>
		<td class="row2">
			<input type="text" name="avatarremoteurl" size="40" class="post" style="width:200px" />
		</td>
	</tr>
	<!-- END switch_avatar_remote_link -->
	<!-- BEGIN switch_allow_gravatars -->
	<tr>
		<td class="row1">{L_USE_GRAVATAR}:</td>
		<td class="row2">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="radio" name="usegravatar" value="1" {USE_GRAVATAR_YES} />&nbsp;</td>
					<td>{L_YES}&nbsp;&nbsp;</td>
					<td><input type="radio" name="usegravatar" value="0" {USE_GRAVATAR_NO} />&nbsp;</td>
					<td>{L_NO}</td>
				</tr>
			</table>
		</td>
	</tr>
	<!-- END switch_allow_gravatars -->
	<!-- BEGIN switch_avatar_local_gallery -->
	<tr>
		<td class="row1">{L_AVATAR_GALLERY}:</td>
		<td class="row2">
			<input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}" class="button" />
			<input type="submit" name="getpnavatar" value="{P_AVATAR_RETRIEVE}" class="button" />
		</td>
	</tr>
	<!-- END switch_avatar_local_gallery -->
	<!-- END switch_avatar_block -->
	<tr>
		<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
			<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
			&nbsp;&nbsp; 
			<input type="reset" value="{L_RESET}" name="reset" class="button" />
		</td>
	</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td ><a href="{U_INDEX}">{L_INDEX}</a></td>
	</tr>
</table>
</form>
