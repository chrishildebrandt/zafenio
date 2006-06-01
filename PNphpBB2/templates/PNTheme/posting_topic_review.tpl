<br />
<!-- BEGIN switch_inline_mode -->
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr>
<td class="cat" align="center">{L_TOPIC_REVIEW}</td>
</tr>
<tr>
<td class="row1"><iframe width="100%" height="300" src="{U_REVIEW_TOPIC}">
<!-- END switch_inline_mode -->
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="forumline">
<tr>
<th width="22%" class="thc">{L_AUTHOR}</th>
<th class="thc">{L_MESSAGE}</th>
</tr>
<!-- BEGIN postrow -->
<tr>
<td width="22%" valign="top" class="{postrow.ROW_CLASS}"><span class="name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span>
<br />
<img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="150" height="1" /></td>
<td class="{postrow.ROW_CLASS}" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /><span class="postdetails">{L_POSTED}: 
{postrow.POST_DATE}</span></td>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<!-- Begin PNphpBB2 Attachment Mod -->
<td class="postbody">{postrow.MESSAGE}{postrow.ATTACHMENTS}</td>
<!-- End PNphpBB2 Attachment Mod -->
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="2" height="1" class="spacerow"><img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<!-- END postrow -->
</table>
<!-- BEGIN switch_inline_mode -->
</iframe></td>
</tr>
</table>
<!-- END switch_inline_mode -->
