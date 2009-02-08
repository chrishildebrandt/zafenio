<form method="post" action="{S_MODCP_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<td align="left" class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}</td>
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
</tr>
</table>
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="5" align="center">{L_MOD_CP}</td>
</tr>
<tr>
<td class="row1" colspan="5" align="center"><span class="genmed">{L_MOD_CP_EXPLAIN}</span></td>
</tr>
<tr>
<th width="4%">&nbsp;</th>
<th>&nbsp;{L_TOPICS}&nbsp;</th>
<th width="8%">&nbsp;{L_REPLIES}&nbsp;</th>
<th width="17%">&nbsp;{L_LASTPOST}&nbsp;</th>
<th width="5%">&nbsp;{L_SELECT}&nbsp;</th>
</tr>
<!-- BEGIN topicrow -->
<tr>
<td class="row1"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
<!-- Begin PNphpBB2 Attachment Mod -->
<td class="row1">&nbsp;<span class="topictitle">{topicrow.TOPIC_ATTACHMENT_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span></td>
<!-- End PNphpBB2 Attachment Mod -->
<td class="row2" align="center"><span class="postdetails">{topicrow.REPLIES}</span></td>
<td class="row1" align="center"><span class="postdetails">{topicrow.LAST_POST_TIME}</span></td>
<td class="row2" align="center"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" /></td>
</tr>
<!-- END topicrow -->
<tr> 
<td colspan="5" align="right" class="cat"> {S_HIDDEN_FIELDS} 
<input type="submit" name="delete" class="catbutton" value="{L_DELETE}" />
&nbsp; 
<input type="submit" name="move" class="catbutton" value="{L_MOVE}" />
&nbsp; 
<input type="submit" name="lock" class="catbutton" value="{L_LOCK}" />
&nbsp; 
<input type="submit" name="unlock" class="catbutton" value="{L_UNLOCK}" />
</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br />
<br />
{PAGINATION}</td>
</tr>
</table>
</form>
