<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_EMAIL_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_EMAIL_EXPLAIN}</div></td>
</tr></table>
<form method="post" action="{S_USER_ACTION}">

{ERROR_BOX}

<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline" width="98%">
<tr> 
<th colspan="2">{L_COMPOSE}</th>
</tr>
<tr> 
<td class="row1" align="right">{L_RECIPIENTS}</td>
<td class="row2" align="left">{S_GROUP_SELECT}</td>
</tr>
<tr> 
<td class="row1" align="right">{L_EMAIL_SUBJECT}</td>
<td class="row2"> <input type="text" name="subject" size="45" maxlength="100" tabindex="2" class="post" value="{SUBJECT}" /> 
</td>
</tr>
<tr> 
<td class="row1" align="right" valign="top"> {L_EMAIL_MSG}
<td class="row2"> <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post">{MESSAGE}</textarea> 
</tr>
<tr> 
<td colspan="2" align="center" class="cat"> 
<input type="submit" value="{L_EMAIL}" name="submit" class="mainoption" />
</td>
</tr>
</table>

</form>
