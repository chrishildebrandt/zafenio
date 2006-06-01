<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_DATABASE_RESTORE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_RESTORE_EXPLAIN}</div></td>
</tr></table>
<form enctype="multipart/form-data" method="post" action="{S_DBUTILS_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr>
		
<th>{L_SELECT_FILE}</th>
	</tr>
	<tr>
		<td class="row1" align="center">&nbsp;
<input type="file" name="backup_file" class="post" />
&nbsp;&nbsp;{S_HIDDEN_FIELDS}<input type="submit" name="restore_start" value="{L_START_RESTORE}" class="mainoption" />&nbsp;</td>
	</tr>
</table></form>
