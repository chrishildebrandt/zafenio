
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td align="left" valign="bottom" nowrap>
			<span class="nav">
			<a href="{U_INDEX}" class="nav">{L_INDEX}</a>
			</span>
		</td>
	</tr>
</table>
{ERROR_BOX}
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline" align="center">
	<tr>
		<th class="thHead">{L_TELL_FRIEND_TITLE}</th>
	</tr>
	<tr>
		<td class="row1">
		<br><br>
		<form action="{SUBMIT_ACTION}" method="post">
		<table width="70%" align="center">
			<tr>
			<td>
			<span class="nav">{L_TELL_FRIEND_SENDER_USER}</span>
			</td>
			<td>
			<span class="nav">{SENDER_NAME}</span>
			</td>
			</tr>
			<tr>
			<td>
			<span class="nav">{L_TELL_FRIEND_SENDER_EMAIL}</span>
			</td>
			<td>
			<span class="nav">{SENDER_MAIL}</span>
			</td>
			</tr>
			<tr>
			<td>
			<span class="nav">{L_TELL_FRIEND_RECIEVER_USER}</span>
			</td>
			<td>
			<input type="text" name="friendname" size="25" maxlength="100">
			</td>
			</tr>
			<tr>
			<td>
			<span class="nav">{L_TELL_FRIEND_RECIEVER_EMAIL}</span>
			</td>
			<td>
			<input type="text" name="friendemail" size="25" maxlength="100">
			</td>
			</tr>
			<tr>
			<td valign=top>
			<span class="nav">{L_TELL_FRIEND_MSG}</span>
			</td>
			<td>
			<textarea name="message" rows="10" cols="50">{L_TELL_FRIEND_BODY}
			</textarea>
			</td>
			</tr>
			<input type="hidden" name="topic" value="">
		</table>
		<br><center>
		<input type="hidden" name="topic" size="25" maxlength="100" value="{TOPIC}">
		<input type="hidden" name="link" size="25" maxlength="100" value="{LINK}">
		<input type="submit" name="submit" class="mainoption" value="{L_SUBMIT}">
		</center>
		</form>
		<br />
		</td>
	</tr>
	<tr>
		<td height="28" class="catBottom">&nbsp;</td>
	</tr>
</table>

