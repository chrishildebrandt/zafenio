<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_USER_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_USER_EXPLAIN}</div></td>
</tr></table>
<form method="post" name="post" action="{S_USER_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th>{L_USER_SELECT}</th>
</tr>
<tr> 
<td class="row1" align="center">
<input type="text" class="post" name="username" maxlength="50" size="20" />
<input type="hidden" name="mode" value="edit" />
{S_HIDDEN_FIELDS}
<input type="submit" name="submituser" value="{L_LOOK_UP}" class="mainoption" />
<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="button" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
</td>
</tr>
</table>
</form>
