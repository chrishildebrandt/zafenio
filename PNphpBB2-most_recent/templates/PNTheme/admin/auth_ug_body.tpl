<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_AUTH_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="subtitle">{L_USER_OR_GROUPNAME}: {USERNAME}</div></td>
</tr></table>
<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<form method="post" action="{S_AUTH_ACTION}">
<!-- BEGIN switch_user_auth -->
<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2">{USER_LEVEL}<br /></td>
</tr><tr>
<br />
<td class="row2">{USER_GROUP_MEMBERSHIPS}<br /></td>
</tr><tr>
<!-- END switch_user_auth -->
<!-- BEGIN switch_group_auth -->
<td class="row2">{GROUP_MEMBERSHIP}<br /></td>
</tr><tr>
<!-- END switch_group_auth -->
<td class="row2"><div class="subtitle">{L_PERMISSIONS}</div></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_AUTH_EXPLAIN}</div></td>
</tr></table>
<br />
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr>
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<th width="30%" class="thCornerL" colspan="{INC_SPAN}">{L_FORUM}</th>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
<!-- BEGIN acltype -->
<th class="thTop">{acltype.L_UG_ACL_TYPE}</th>
<!-- END acltype -->
<th class="thCornerR">{L_MODERATOR_STATUS}</th>
</tr>
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<!-- BEGIN categorie -->
<tr> 
<!-- BEGIN inc -->
<td class="row2"><span class="gen">&nbsp;&nbsp;</span></td>
<!-- END inc -->
<td colspan="{categorie.INC_SPAN}" class="{categorie.CLASS_CAT}" align="left" nowrap> <span class="cattitlemed">{categorie.CAT_TITLE}</span></td>
</tr>
<!-- BEGIN forums -->
<tr> 
<!-- BEGIN inc -->
<td class="row2"></td>
<!-- END inc -->
<td class="row1" align="left" colspan="{categorie.forums.INC_SPAN}"><span class="gentbl">{categorie.forums.FORUM_NAME}</span></td>
<!-- BEGIN aclvalues -->
<td class="row2" align="center">{categorie.forums.aclvalues.S_ACL_SELECT}</td>
<!-- END aclvalues -->
<td class="row1" align="center">{categorie.forums.S_MOD_SELECT}</td>
</tr>
<!-- END forums -->
<!-- END categorie -->
<!-- End PNphpBB2 Categories Hierarchie Mod -->
<tr> 
<td colspan="{S_COLUMN_SPAN}" class="row1" align="center"><span class="gensmall">{U_SWITCH_MODE}</span></td>
</tr>
<tr> 
<td colspan="{S_COLUMN_SPAN}" class="catbottom" align="center" height="28">{S_HIDDEN_FIELDS} 
<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" class="button" name="reset" />
</td>
</tr>
</table>
</form>
</tr>
</table>
