<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="maintitle">{L_SEARCH_MATCHES}</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td ><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th width="150" class="thc">{L_AUTHOR}</th>
<th width="100%" class="thc">{L_MESSAGE}</th>
</tr>
<!-- BEGIN searchresults -->
<tr>
<td class="cat" colspan="2">&nbsp;{L_TOPIC}:&nbsp;<a href="{searchresults.U_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a></td>
</tr>
<tr>
<td width="150" valign="top" class="row1" rowspan="2"><span class="name">{searchresults.POSTER_NAME}</span><br />
<br />
<span class="postdetails">{L_REPLIES}: <strong>{searchresults.TOPIC_REPLIES}</strong><br />
{L_VIEWS}: <strong>{searchresults.TOPIC_VIEWS}</strong></span><br />
<img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="150" height="1" />
</td>
<td width="100%" valign="top" class="row1"><img src="{searchresults.MINI_POST_IMG}" alt="{searchresults.L_MINI_POST_ALT}" title="{searchresults.L_MINI_POST_ALT}" border="0" /><span class="postdetails">{L_FORUM}:&nbsp;<strong><a href="{searchresults.U_FORUM}" class="postdetails">{searchresults.FORUM_NAME}</a></strong>&nbsp; 
&nbsp;{L_POSTED}: {searchresults.POST_DATE}&nbsp; &nbsp;{L_SUBJECT}: <strong><a href="{searchresults.U_POST}">{searchresults.POST_SUBJECT}</a></strong></span></td>
</tr>
<tr>
<td valign="top" class="row1"><span class="postbody">{searchresults.MESSAGE}</span></td>
</tr>
<!-- END searchresults -->
<tr>
<td class="cat" colspan="2">&nbsp;</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td ><a href="{U_INDEX}">{L_INDEX}</a><br />
{PAGINATION}</td>
</tr>
</table>
<br clear="all" />
<div align="left">{JUMPBOX}</div>
