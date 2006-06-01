<table cellspacing="2" cellpadding="2" border="0" align="center">
<tr>
<td>{INBOX_IMG}</td>
<td class="nav">{INBOX} &nbsp;</td>
<td>{SENTBOX_IMG}</td>
<td class="nav">{SENTBOX} &nbsp;</td>
<td>{OUTBOX_IMG}</td>
<td class="nav">{OUTBOX} &nbsp;</td>
<td>{SAVEBOX_IMG}</td>
<td class="nav">{SAVEBOX} &nbsp;</td>
</tr>
</table>
<br clear="all" />
<form method="post" action="{S_PRIVMSGS_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td>{REPLY_PM_IMG}</td>
<td width="100%" class="nav">&nbsp;<a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="3">{BOX_NAME} :: {L_MESSAGE}</th>
</tr>
<tr>
<td class="row2"><span class="genmed">{L_FROM}:</span></td>
<td class="row2" colspan="2"><span class="genmed">{MESSAGE_FROM}</span></td>
</tr>
<tr>
<td class="row2"><span class="genmed">{L_TO}:</span></td>
<td class="row2" colspan="2"><span class="genmed">{MESSAGE_TO}</span></td>
</tr>
<tr>
<td class="row2"><span class="genmed">{L_POSTED}:</span></td>
<td class="row2" colspan="2"><span class="genmed">{POST_DATE}</span></td>
</tr>
<tr>
<td class="row2"><span class="genmed">{L_SUBJECT}:</span></td>
<td width="100%" class="row2"><span class="genmed">{POST_SUBJECT}</span></td>
<td nowrap="nowrap" class="row2" align="right">&nbsp;{QUOTE_PM_IMG} {EDIT_PM_IMG}</td>
</tr>
<tr>
<td valign="top" colspan="3" class="row1"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<!-- Begin PNphpBB2 Attachment Mod -->
<td class="postbody">{MESSAGE}
<!-- BEGIN postrow -->
{ATTACHMENTS}
<!-- END postrow -->
</td>
<!-- End PNphpBB2 Attachment Mod -->
</tr>
</table>
</td>
</tr>
<tr>
<td height="28" valign="bottom" colspan="3" class="row1"> {PROFILE_IMG} {PM_IMG} 
{EMAIL_IMG} {WWW_IMG} {AIM_IMG} {YIM_IMG} {MSN_IMG} {ICQ_IMG}</td>
</tr>
<tr>
<td class="cat" colspan="3" align="right">{S_HIDDEN_FIELDS}
<input type="submit" name="save" value="{L_SAVE_MSG}" class="button" />
&nbsp; 
<input type="submit" name="delete" value="{L_DELETE_MSG}" class="button" />
<!-- BEGIN switch_attachments -->
&nbsp; 
<input type="submit" name="pm_delete_attach" value="{L_DELETE_ATTACHMENTS}" class="button" />
<!-- END switch_attachments -->
</td>
</tr>
</table>
<table width="100%" cellspacing="2" border="0" cellpadding="2">
<tr>
<td>{REPLY_PM_IMG}</td>
<td width="100%" class="nav">&nbsp;<a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
</form>
<br clear="all" />
<div align="left">{JUMPBOX}</div>
