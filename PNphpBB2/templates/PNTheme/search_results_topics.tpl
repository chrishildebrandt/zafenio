<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="maintitle">{L_SEARCH_MATCHES}</td>
</tr>
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<th width="4%">&nbsp;</th>
<th>&nbsp;{L_FORUM}&nbsp;</th>
<th>&nbsp;{L_TOPICS}&nbsp;</th>
<th>&nbsp;{L_AUTHOR}&nbsp;</th>
<th>&nbsp;{L_REPLIES}&nbsp;</th>
<th>&nbsp;{L_VIEWS}&nbsp;</th>
<th>&nbsp;{L_LASTPOST}&nbsp;</th>
</tr>
<!-- BEGIN searchresults -->
<tr>
<td class="row1"><img src="{searchresults.TOPIC_FOLDER_IMG}" alt="{searchresults.L_TOPIC_FOLDER_ALT}" title="{searchresults.L_TOPIC_FOLDER_ALT}" /></td>
<td class="row1"><strong><a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_NAME}</a></strong></td>
<td class="row2"><span class="topictitle">{searchresults.NEWEST_POST_IMG}{searchresults.TOPIC_TYPE}<a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a></span><br />
<span class="gensmall">{searchresults.GOTO_PAGE}</span></td>
<td class="row1" align="center"><span class="postdetails">{searchresults.TOPIC_AUTHOR}</span></td>
<td class="row2" align="center"><span class="postdetails">{searchresults.REPLIES}</span></td>
<td class="row1" align="center"><span class="postdetails">{searchresults.VIEWS}</span></td>
<td class="row2" align="center" nowrap="nowrap"><span class="postdetails">{searchresults.LAST_POST_TIME}<br />
{searchresults.LAST_POST_AUTHOR} {searchresults.LAST_POST_IMG}</span></td>
</tr>
<!-- END searchresults -->
<tr>
<td class="cat" colspan="7">&nbsp;</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a><br />
{PAGINATION}</td>
</tr>
</table>
<br clear="all" />
<div align="left">{JUMPBOX}</div>
