<form action="{S_PROFILE_ACTION}" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="{S_COLSPAN}">{L_AVATAR_GALLERY}</th>
</tr>
<tr>
<td class="cat" align="center" colspan="6"><table width="0%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="genmed">{L_CATEGORY}:&nbsp;</td>
<td>{S_CATEGORY_SELECT}&nbsp;</td>
<td><input type="submit" class="button" value="{L_GO}" name="avatargallery" /></td>
</tr>
</table> 
</td>
</tr>
<!-- BEGIN avatar_row -->
<tr>
<!-- BEGIN avatar_column -->
<td class="row1" align="center"><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="{avatar_row.avatar_column.AVATAR_NAME}" title="{avatar_row.avatar_column.AVATAR_NAME}" /></td>
<!-- END avatar_column -->
</tr>
<tr>
<!-- BEGIN avatar_option_column -->
<td class="row2" align="center">
<input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" />
</td>
<!-- END avatar_option_column -->
</tr>
<!-- END avatar_row -->
<tr>
<td class="cat" colspan="{S_COLSPAN}" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="mainoption" />
&nbsp;&nbsp; 
<input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="button" />
</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
</form>
