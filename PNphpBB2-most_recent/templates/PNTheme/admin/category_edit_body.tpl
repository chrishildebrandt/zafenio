<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_EDIT_CATEGORY}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_EDIT_CATEGORY_EXPLAIN}</div></td>
</tr></table>
<form action="{S_FORUM_ACTION}" method="post">
<table cellpadding="3" cellspacing="1" border="0" class="forumline" align="center">
<tr> 
<th colspan="2">{L_EDIT_CATEGORY}</th>
</tr>
<tr> 
<td class="row1">{L_CATEGORY}</td>
<td class="row2"><input type="text" size="25" name="cat_title" value="{CAT_TITLE}" class="post" /></td>
</tr>
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<tr>
<td class="row1">{L_CAT_DESCRIPTION}</td>
<td class="row2"><textarea rows="5" cols="45" wrap="virtual" name="cat_desc" class="post">{CAT_DESCRIPTION}</textarea></td>
</tr>
<tr>
<td class="row1">{L_CATEGORY_ATTACHMENT}</td>
<td class="row2"><select name="cat_main">{S_CAT_LIST}</select></td>
</tr>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
<tr> 
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="mainoption" /></td>
</tr>
</table>
</form>
<br clear="all" />
