<form method="POST" action="{S_POLL_ACTION}">
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr> 
<th>Poll</th>
</tr>
<tr>
<td class="row2">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td align="center"><strong>{POLL_QUESTION}</strong></td>
</tr>
<tr>
<td align="center"><table cellspacing="0" cellpadding="1" border="0">
<!-- BEGIN poll_option -->
<tr> 
<td> 
<input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" />
&nbsp;</td>
<td>{poll_option.POLL_OPTION_CAPTION}</td>
</tr>
<!-- END poll_option -->
</table></td>
</tr>
<tr>
<td align="center"><input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="button" /></td>
</tr>
<tr>
<td align="center" class="gensmall"><strong><a href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a></strong></td>
</tr>
</table>
{S_HIDDEN_FIELDS}
</td>
</tr>
</table>
</form>
<br clear="all" />