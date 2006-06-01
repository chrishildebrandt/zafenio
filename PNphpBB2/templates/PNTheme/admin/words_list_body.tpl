<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_WORDS_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_WORDS_TEXT}</div></td>
</tr></table>
<form method="post" action="{S_WORDS_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr> 
<th>{L_WORD}</th>
<th>{L_REPLACEMENT}</th>
<th colspan="2">{L_ACTION}</th>
</tr>
<!-- BEGIN words -->
<tr> 
<td class="{words.ROW_CLASS}" align="center">{words.WORD}</td>
<td class="{words.ROW_CLASS}" align="center">{words.REPLACEMENT}</td>
<td class="{words.ROW_CLASS}"><a href="{words.U_WORD_EDIT}">{L_EDIT}</a></td>
<td class="{words.ROW_CLASS}"><a href="{words.U_WORD_DELETE}">{L_DELETE}</a></td>
</tr>
<!-- END words -->
<tr> 
<td colspan="5" align="center" class="cat">{S_HIDDEN_FIELDS} 
<input type="submit" name="add" value="{L_ADD_WORD}" class="mainoption" />
</td>
</tr>
</table>
</form>
