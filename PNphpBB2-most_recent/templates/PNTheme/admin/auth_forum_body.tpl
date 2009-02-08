<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" align="center">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_AUTH_TITLE}</span></td>
</tr><tr>
<td class="row2">
<div class="genmed">{L_AUTH_EXPLAIN}</div></td>
</tr><tr>
<td class="row2"><div class="subtitle"> {L_FORUM}: {FORUM_NAME}</div></td>
</tr>
</table>
<form method="post" action="{S_FORUMAUTH_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<!-- BEGIN forum_auth_titles -->
<th>{forum_auth_titles.CELL_TITLE}</th>
<!-- END forum_auth_titles -->
</tr>
<tr> 
<!-- BEGIN forum_auth_data -->
<td class="row1" align="center">{forum_auth_data.S_AUTH_LEVELS_SELECT}</td>
<!-- END forum_auth_data -->
</tr>
<tr> 
<td colspan="{S_COLUMN_SPAN}" align="center" class="row1"><span class="gensmall">{U_SWITCH_MODE}</span></td>
</tr>
<tr> 
<td colspan="{S_COLUMN_SPAN}" class="cat" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" name="reset" class="button" />
</td>
</tr>
</table>
</form>
