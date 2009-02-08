<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_FORUM_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_FORUM_EXPLAIN}</div></td>
</tr></table>
<form method="post" action="{S_FORUM_ACTION}">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr> 
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<th class="thc" colspan="{INC_SPAN}">{L_FORUM_TITLE}</th>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
</tr>
<!-- BEGIN catrow -->
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<tr>
<!-- BEGIN inc -->
<td class="row2"><span class="gen">&nbsp;&nbsp;</span></td>
<!-- END inc -->
<td class="cat"   colspan="{catrow.INC_SPAN}"><span class="cattitle"><b><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></b></span></td>
<td class="cat" align="center" valign="middle"><span class="gen"><a href="{catrow.U_CAT_EDIT}" class="gen">{L_EDIT}</a></span></td>
<td class="cat" align="center" valign="middle"><span class="gen"><a href="{catrow.U_CAT_DELETE}" class="gen">{L_DELETE}</a></span></td>
<td class="cat" align="center" valign="middle" nowrap="nowrap"><span class="gen"><a href="{catrow.U_CAT_MOVE_UP}" class="gen">{L_MOVE_UP}</a> <a href="{catrow.U_CAT_MOVE_DOWN}" class="gen">{L_MOVE_DOWN}</a></span></td>
<td class="cat"  align="center" valign="middle"><span class="gen">&nbsp;</span></td>
</tr>
<tr>
<!-- BEGIN inc -->
<td class="row2"></td>
<!-- END inc -->
<td class="row3" colspan="{catrow.INC_SPAN_ALL}"><span class="gensmall">{catrow.CAT_DESCRIPTION}</span></td>
</tr>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
<!-- BEGIN forumrow -->
<tr> 
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<!-- BEGIN inc -->
<td class="row2"><span class="gen">&nbsp;&nbsp;</span></td>
<!-- END inc -->
<td class="row2" colspan="{catrow.forumrow.INC_SPAN}"><span class="gen"><a href="{catrow.forumrow.U_VIEWFORUM}" target="_new">{catrow.forumrow.FORUM_NAME}</a></span><br /><span class="gensmall">{catrow.forumrow.FORUM_DESC}</span></td>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
<td class="row1" align="center">{catrow.forumrow.NUM_TOPICS}</td>
<td class="row2" align="center">{catrow.forumrow.NUM_POSTS}</td>
<td class="row1" align="center"><a href="{catrow.forumrow.U_FORUM_EDIT}">{L_EDIT}</a></td>
<td class="row2" align="center"><a href="{catrow.forumrow.U_FORUM_DELETE}">{L_DELETE}</a></td>
<td class="row1" align="center"><a href="{catrow.forumrow.U_FORUM_MOVE_UP}">{L_MOVE_UP}</a> 
<br />
<a href="{catrow.forumrow.U_FORUM_MOVE_DOWN}">{L_MOVE_DOWN}</a></td>
<td class="row2" align="center"><a href="{catrow.forumrow.U_FORUM_RESYNC}">{L_RESYNC}</a><br />
<a href="{catrow.forumrow.U_FORUM_PERMISSIONS}">{L_PERMISSIONS}</a></td>
</tr>
<!-- END forumrow -->
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<tr>
<!-- BEGIN inc -->
<td class="row2"><span class="gen">&nbsp;&nbsp;</span></td>
<!-- END inc -->
<td colspan="{catrow.INC_SPAN_ALL}" class="row2"><input class="post" type="text" name="{catrow.S_ADD_FORUM_NAME}" /> <input type="submit" class="liteoption"  name="{catrow.S_ADD_FORUM_SUBMIT}" value="{L_CREATE_FORUM}" /></td>
</tr>
<tr>
<!-- BEGIN inc -->
<td class="row2"></td>
<!-- END inc -->
<td colspan="{catrow.INC_SPAN_ALL}" height="1" class="spaceRow"><img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<!-- END catrow -->
<tr>
<td colspan="{INC_SPAN}" class="catBottom"><input class="post" type="text" name="categoryname" /> <input type="submit" class="liteoption"  name="addcategory" value="{L_CREATE_CATEGORY}" /></td>
</tr>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
</table>
</form>
