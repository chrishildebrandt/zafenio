<tr>
<th colspan="2">{L_ADD_A_POLL}</th>
</tr>
<tr>
<td class="row1" colspan="2"><span class="gensmall">{L_ADD_POLL_EXPLAIN}</span></td>
</tr>
<tr>
<td class="row1"><strong>{L_POLL_QUESTION}</strong></td>
<td class="row2"><input type="text" name="poll_title" size="50" maxlength="255" class="post" value="{POLL_TITLE}" /></td>
</tr>
<!-- BEGIN poll_option_rows -->
<tr>
<td class="row1"><strong>{L_POLL_OPTION}</strong></td>
<td class="row2"><span class="genmed"><input type="text" name="poll_option_text[{poll_option_rows.S_POLL_OPTION_NUM}]" size="50" class="post" maxlength="255" value="{poll_option_rows.POLL_OPTION}" /></span> &nbsp;<input type="submit" name="edit_poll_option" value="{L_UPDATE_OPTION}" class="liteoption" /> <input type="submit" name="del_poll_option[{poll_option_rows.S_POLL_OPTION_NUM}]" value="{L_DELETE_OPTION}" class="liteoption" /></td>
</tr>
<!-- END poll_option_rows -->
<tr>
<td class="row1"><strong>{L_POLL_OPTION}</strong></td>
<td class="row2"><span class="genmed"><input type="text" name="add_poll_option_text" size="50" maxlength="255" class="post" value="{ADD_POLL_OPTION}" /></span> &nbsp;<input type="submit" name="add_poll_option" value="{L_ADD_OPTION}" class="button" /></td>
</tr>
<tr>
<td class="row1"><strong>{L_POLL_LENGTH}</strong></td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="text" name="poll_length" size="3" maxlength="3" class="post" value="{POLL_LENGTH}" /></td>
<td>&nbsp;<strong>{L_DAYS}</strong></td>
<td class="gensmall">&nbsp;&nbsp;{L_POLL_LENGTH_EXPLAIN}</td>
</tr>
</table>
</td>
</tr>
<!-- BEGIN switch_poll_delete_toggle -->
<tr>
<td class="row1"><strong>{L_POLL_DELETE}</strong></td>
<td class="row2"><input type="checkbox" name="poll_delete" /></td>
</tr>
<!-- END switch_poll_delete_toggle -->
