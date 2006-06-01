<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="left" valign="top" >
      <a href="{U_VIEW_FORUM}"><span class="maintitle">{FORUM_NAME}</span></a>
      <br>{PAGINATION}
    </td>
    <!--
    <td class="gensmall" align="right" valign="bottom">{L_MODERATOR}: {MODERATORS}<br />
    {LOGGED_IN_USER_LIST}<br />
    <strong><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></strong></td>
    -->
  </tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
    <td class="nav" valign="bottom"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}{NAV_SEPARATOR}<a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></td>
  </tr>
  <tr>
    <td align="left" valign="bottom"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}"  /></a></td>
    <td class="gensmall" align="right" valign="bottom">{L_MODERATOR}: {MODERATORS}<br />
    {LOGGED_IN_USER_LIST}<br />
    <strong><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></strong></td>
  </tr>
</table>
<table border="0" cellpadding="2" cellspacing="1" width="100%" class="forumline">
  <tr>
    <!-- Image Mod -->
    <!--  <th colspan="2">&nbsp;{L_TOPICS}&nbsp;</th> -->
    <th colspan="3">&nbsp;{L_TOPICS}&nbsp;</th>
    <!-- Image Mod -->
		<th width="50">&nbsp;{L_REPLIES}&nbsp;</th>
		<th width="100">&nbsp;{L_AUTHOR}&nbsp;</th>
		<th width="50">&nbsp;{L_VIEWS}&nbsp;</th>
		<th>&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN topicrow -->
  <!-- mod : split topic type -->
  <!-- BEGIN topictype -->
  <tr>
    <td colspan="7" align="left" class="cat"><span class="topictitle">{topicrow.topictype.TITLE}</span></td>
  </tr>
  <!-- END topictype -->
  <!-- fin mod : split topic type -->
  <tr>
    <td height="34" class="row1"><a href="{topicrow.U_VIEW_TOPIC}"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" border="0" /></a></td>
    <!-- Image Mod -->
    <td class="row1" align="center" valign="middle" width="16">{topicrow.ICON}</td>
    <!-- Image Mod -->
		<!-- Begin PNphpBB2 Attachment Mod -->
		<td class="row1" width="100%">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_ATTACHMENT_IMG}<span class="topictitle">{topicrow.TOPIC_TYPE}</span><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a><span class="gensmall"><br />
		<!-- End PNphpBB2 Attachment Mod -->
		{topicrow.GOTO_PAGE}</span></td>
		<td class="row2" align="center"><span class="postdetails">{topicrow.REPLIES}</span></td>
		<td class="row3" align="center"><span class="postdetails">{topicrow.TOPIC_AUTHOR}</span></td>
		<td class="row2" align="center"><span class="postdetails">{topicrow.VIEWS}</span></td>
		<td class="row3" align="center" nowrap="nowrap"><span class="postdetails">&nbsp;{topicrow.LAST_POST_TIME}&nbsp;<br />
		{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></td>
	</tr>
	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
	<tr>
	  <td class="row1" colspan="7" align="center">{L_NO_TOPICS}</td>
	</tr>
	<!-- END switch_no_topics -->
	<tr>
	  <td class="cat" align="center" colspan="7">
      <table border="0" cellspacing="1" cellpadding="1" align="center">
			  <tr>
				  <td class="genmed" align="center">
					  <form method="post" action="{S_POST_DAYS_ACTION}">
						  {L_SORT_METHOD}:&nbsp;{S_SORT_METHOD}&nbsp;&nbsp;{L_ORDER}:&nbsp;{S_ORDER}&nbsp;&nbsp;
						  {L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;&nbsp;
						  <input type="submit" class="catbutton" value="{L_GO}" name="submit" />
						</form>
					</td>
				</tr>
				<tr class="genmed" align="center">
				  <td>{SEARCHBOX}&nbsp;&nbsp;{JUMPBOX}</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	  <td align="left" valign="top"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a></td>
		<td rowspan="2" class="gensmall" align="right" valign="top">{S_TIMEZONE}<br />
		<strong><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></strong><br />
		{L_MODERATOR}: {MODERATORS}<br />{LOGGED_IN_USER_LIST}</td>
	</tr>
	<tr>
	  <td class="nav" valign="top">{PAGINATION}</td>
	</tr>
	<tr>
	  <td class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}{NAV_SEPARATOR}<a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></td>
	</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr>
	  <td colspan="7" align="left" class="cat"><span class="topictitle">{L_LEGEND}</span></td>
		<!-- <td class="cat" colspan="8"><a class="topictitle">{L_LEGEND}</a></td> -->
	</tr>
	<tr>
	  <td>
		  <table width="100%" cellspacing="2" border="0" cellpadding="1">
			  <tr>
			    <td>
				    <table border="0" cellspacing="1" cellpadding="2">
					    <tr>
						    <td><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" title="{L_NEW_POSTS}" /></td>
								<td class="gensmall">{L_NEW_POSTS}</td>
								<td>&nbsp;&nbsp;</td>
								<td><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" title="{L_NO_NEW_POSTS}" /></td>
								<td class="gensmall">{L_NO_NEW_POSTS}</td>
								<td>&nbsp;&nbsp;</td>
								<td><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" title="{L_ANNOUNCEMENT}" /></td>
								<td class="gensmall">{L_ANNOUNCEMENT}</td>
  						</tr>
  						<tr>
    				    <td><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" title="{L_NEW_POSTS_HOT}" /></td>
    						<td class="gensmall">{L_NEW_POSTS_HOT}</td>
    						<td>&nbsp;</td>
    						<td><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" title="{L_NO_NEW_POSTS_HOT}" /></td>
    						<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
    						<td>&nbsp;</td>
    						<td><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" title="{L_STICKY}" /></td>
    						<td class="gensmall">{L_STICKY}</td>
  						</tr>
  						<tr>
    				    <td><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" title="{L_NEW_POSTS_LOCKED}" /></td>
    						<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
    						<td>&nbsp;</td>
    						<td><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" title="{L_NO_NEW_POSTS_LOCKED}" /></td>
    						<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
    						<td>&nbsp;</td>
   							<td>&nbsp;</td>
    						<td>&nbsp;</td>
  						</tr>
						</table>
					</td>
        	<td align="right" valign="top">{AUTHLIST}</td>
      	</tr>
			</table>
  	</td>
	</tr>
</table>
