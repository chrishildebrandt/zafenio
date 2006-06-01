<form name="post" action="{S_ACTION}" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
<tr> 
	<td align="left" valign="bottom"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}</span></td>
	<td align="right" valign="bottom">
		<span class="gen">{S_LIST_FORUMS}&nbsp;<input type="submit" name="go" value="{L_GO}" class="liteoption" /><br /></span>
		<span class="nav">{PAGINATION}</span>
	</td>
</tr>
</table>

<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
	<th align="center" height="25" class="thCornerL" nowrap="nowrap" width="20">&nbsp;{L_SELECT}&nbsp;</th>
	<th colspan="2" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_TITLE}&nbsp;</th>
	<th width="50" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	<th width="100" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	<th width="50" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>
	<th align="center" class="thCornerR" nowrap="nowrap" width="150">&nbsp;{L_LASTPOST}&nbsp;</th>
</tr>
<!-- BEGIN topicrow -->
<tr>
	<td class="row3" align="center" valign="middle"><input type="radio" name="topic_selected" value="{topicrow.TOPIC_ID}" /></span></td>
	<td class="row1" align="center" valign="middle" width="20"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	<td class="row1" align="left" valign="middle"><span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.REPLIES}</span></td>
	<td class="row3" align="center" valign="middle"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	<td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.VIEWS}</span></td>
	<td class="row3" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR}</span></td>
</tr>
<!-- END topicrow -->
<!-- BEGIN no_topics -->
<tr>
	<td colspan="7" class="row1" align="center" height="25"><span class="gen">{L_NO_TOPICS}</span></td>
</tr>
<!-- END no_topics -->
<tr>
	<td class="cat" colspan="7" align="center" height="28">
		<input type="submit" name="submit" value="{L_SELECT}" class="mainoption" />
		<input type="submit" name="cancel" value="{L_CANCEL}" class="liteoption" />
		{S_HIDDEN_FIELDS}
	</td>
</tr>
</table>
</form>