<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_BAN_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_BAN_EXPLAIN}</div></td>
</tr></table>
<form method="post" name="post" action="{S_BANLIST_ACTION}">
<table width="98%" cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_BAN_USER}</th>
</tr>
<tr> 
<td class="row1" width="38%">{L_USERNAME}:</td>
<td class="row2" width="62%"> 
<input type="text" class="post" name="username" maxlength="50" size="20" />
<input type="hidden" name="mode" value="edit" />
{S_HIDDEN_FIELDS} 
<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="button" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
</td>
</tr>
<tr> 
<th colspan="2">{L_UNBAN_USER}</th>
</tr>
<tr> 
<td class="row1">{L_USERNAME}: <br />
<span class="gensmall">{L_UNBAN_USER_EXPLAIN}</span></td>
<td class="row2">{S_UNBAN_USERLIST_SELECT}</td>
</tr>
<tr> 
<th colspan="2">{L_BAN_IP}</th>
</tr>
<tr> 
<td class="row1">{L_IP_OR_HOSTNAME}: <br />
<span class="gensmall">{L_BAN_IP_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" name="ban_ip" size="35" class="post" />
</td>
</tr>
<tr> 
<th colspan="2">{L_UNBAN_IP}</th>
</tr>
<tr> 
<td class="row1">{L_IP_OR_HOSTNAME}: <br />
<span class="gensmall">{L_UNBAN_IP_EXPLAIN}</span></td>
<td class="row2">{S_UNBAN_IPLIST_SELECT}</td>
</tr>
<tr> 
<th colspan="2">{L_BAN_EMAIL}</th>
</tr>
<tr> 
<td class="row1">{L_EMAIL_ADDRESS}: <br />
<span class="gensmall">{L_BAN_EMAIL_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" name="ban_email" size="35" class="post" />
</td>
</tr>
<tr> 
<th colspan="2">{L_UNBAN_EMAIL}</th>
</tr>
<tr> 
<td class="row1">{L_EMAIL_ADDRESS}: <br />
<span class="gensmall">{L_UNBAN_EMAIL_EXPLAIN}</span></td>
<td class="row2">{S_UNBAN_EMAILLIST_SELECT}</td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"> 
<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" class="button" />
</td>
</tr>
</table>
</form>
<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2"><div class="genmed">{L_BAN_EXPLAIN_WARN}</div></td>
</tr></table>
<br />