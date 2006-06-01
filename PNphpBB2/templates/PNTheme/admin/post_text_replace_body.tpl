<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_CONFIGURATION_TITLE}</span></td>
</tr><tr>
<td class="row2"><span class="genmed">{L_CONFIGURATION_EXPLAIN}</span></td>
</tr>
<tr>
<td class="row2"><div class="genmed">{L_RESULTS}</div></td>
</tr>
</table>
<form action="{S_CONFIG_ACTION}" method="post">
<table width="99%" cellpadding="3" cellspacing="1" border="0" align="center" class="forumline">
<tr> 
<th colspan="2">{L_GENERAL_SETTINGS}</th>
</tr>
<tr> 
<td class="row1" width="38%">{L_OLD_LINK}<br />
<span class="gensmall">{L_OLD_LINK_EXPLAIN}</span></td>
<td class="row2" width="62%"> 
<input type="text" maxlength="255" size="40" name="find_text" value="{OLD_LINK}" class="post" />
</td>
</tr>
<tr> 
<td class="row1">{L_NEW_LINK}<br />
<span class="gensmall">{L_NEW_LINK_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" maxlength="255" size="40" name="replace_with" value="{NEW_LINK}" class="post" />
</td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="test" value="{L_TEST}" class="mainoption" />
&nbsp;&nbsp;
<input type="submit" name="submit" value="{L_SUBMIT}" class="button" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" class="button" />
</td>
</tr>
</table>
</form>
<br clear="all" />
