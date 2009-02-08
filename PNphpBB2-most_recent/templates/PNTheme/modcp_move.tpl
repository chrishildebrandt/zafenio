<form action="{S_MODCP_ACTION}" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
<tr>
<th>{MESSAGE_TITLE}</th>
</tr>
<tr>
<td class="row1" align="center"><br />
{L_MOVE_TO_FORUM} &nbsp; {S_FORUM_SELECT}<br />
<br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="checkbox" name="move_leave_shadow" checked="checked" /></td>
<td>&nbsp;{L_LEAVESHADOW}</td>
</tr>
</table>
<br />
{MESSAGE_TEXT}<br />
<br />
{S_HIDDEN_FIELDS}
<input class="mainoption" type="submit" name="confirm" value="{L_YES}" />
&nbsp;&nbsp; 
<input class="button" type="submit" name="cancel" value="{L_NO}" />
<br />
<br />
</td>
</tr>
<tr>
<td class="cat">&nbsp;</td>
</tr>
</table>
</form>
