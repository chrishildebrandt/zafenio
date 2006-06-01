<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td class="nav" align="left" valign="top">
      <a href="{U_VIEW_TOPIC}"><span class="maintitle">{TOPIC_TITLE}</span></a>
      <br/>{PAGINATION}
    </td>
    <!-- <td class="gensmall" align="right" valign="bottom">{NAVBARTEXTTOP}</td> -->
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
    <td class="nav" valign="top" width="100%">
      <a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}{NAV_SEPARATOR}<a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a>
    </td>
    <td align="right">{S_TOPIC_ADMIN}</td>
  </tr>
  <tr>
    <td align="left" nowrap="nowrap">
      <a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" title="{L_POST_REPLY_TOPIC}" /></a>
    </td>
    <td nowrap="nowrap">
      {NAVBAR}
    </td> 
  </tr>
</table>
{POLL_DISPLAY}
<!-- BEGIN display_support_status -->
<table class="forumline" width="100%" cellpadding="5" cellspacing="1" border="0">
  <tr>
    <th colspan="2">{L_SUPPORT_TOPIC}</th>
  </td>
  <tr>
    <td class="row1" width="25%">{L_STATUS}</td>
    <td class="row2" align="center">{L_CURRENT_STATUS}</td>
  </tr>
</table>
<br class="gensmall">
<!-- END display_support_status -->
<!-- BEGIN support_status_update -->
<table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
  <form method="post" name="select_status" action="{S_SUPPORT_STARUS_ACTION}" onSubmit="if(document.select_status.support_status.value == -1){return false;}">
  <tr>
    <th colspan="3">{L_SUPPORT_TOPIC}</th>
  </td>
  <tr>
    <td class="row1" width="25%">{L_STATUS}</td>
    <td class="row2" width="30%" align="center">{L_CURRENT_STATUS}</td>
    <td class="row3" align="right">{S_SUPPORT_STATUS}</td>
  </tr>
  </form>
</table>
<br class="gensmall">
<!-- END support_status_update -->
<table class="forumline" width="100%" cellspacing="1" border="0">
  {QUICKREPLY_OUTPUT_DESC}
  <tr>
    <th class="th" width="20%">{L_AUTHOR}</th>
    <th class="th" width="80%">{L_MESSAGE}</th>
  </tr>
  <!-- BEGIN postrow -->
  <tr>
    <td class="{postrow.ROW_CLASS}">
      <table width="100%" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td valign="middle">
            <span class="name"><a name="{postrow.U_POST_ID}"></a><strong>{postrow.POSTER_NAME}</strong></span>{postrow.POSTER_STATUS_IMG}
          </td>
        </tr>
      </table>
    </td>
    <td class="{postrow.ROW_CLASS}">
      <table width="100%" border="0" cellpadding="3" cellspacing="0">
        <tr>
          <!-- BEGIN posticon -->
          <td>
            {postrow.posticon.ICON}
          </td>
          <!-- END posticon -->
					<td width="100%" class="postdetails">
            <span style="float:left;"><b>{L_POST_SUBJECT}:</b> {postrow.POST_SUBJECT}&nbsp;</span>
            <span style="float:right;"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0"  /></a><b>{L_POSTED}:</b> {postrow.POST_DATE}</span>
          </td>
				</tr>
      </table>
    </td>
  </tr>
  <tr>
    <td valign="top" class="{postrow.ROW_CLASS}" rowspan="2">
      <table width="100%" border="0" cellpadding="5" cellspacing="0">
        <tr>
          <td>
            <span class="postdetails">{postrow.POSTER_RANK}<br />
            {postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br />
            <span style="border-top-style: solid; border-top-width: 1">{postrow.POSTER_JOINED}</span><br />
            {postrow.POSTER_POSTS}<br />
            {postrow.POSTER_FROM}<br />
            {postrow.POSTER_STATUS}</span>
            <!-- <img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="150" height="1" /> -->
          </td>
        </tr>
      </table>
    </td>
    <td class="{postrow.ROW_CLASS}">
      <table width="100%" cellpadding="5" cellspacing="0">
        <tr>
          <td valign="top" class="postbody">{postrow.MESSAGE}</td>
        </tr>
        <tr>
          <td height="40" valign="bottom" class="genmed">
          <!-- Begin PNphpBB2 Attachment Mod -->
            {postrow.ATTACHMENTS}
          <!-- End PNphpBB2 Attachment Mod -->
            <span class="postbody">{postrow.SIGNATURE}</span>
            <span class="gensmall">{postrow.EDITED_MESSAGE}</span>
          </td>
        <tr>
        <tr>
	        <td class="gensmall" align="right">{postrow.REPORT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}&nbsp;</td>
	      </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td valign="bottom" nowrap="nowrap" class="{postrow.ROW_CLASS}">
      <div class="gensmall" style="float:left">&nbsp;{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} {postrow.ICQ_IMG}&nbsp;</div>
      <div class="gensmall" style="float:right">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} <a href="#top"><img src="{postrow.ICON_UP}" border="0" alt="{L_BACK_TO_TOP}" title="{L_BACK_TO_TOP}" /></a></div>
    </td>
  </tr>

  <tr>
    <td colspan="2" height="1"><img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="1" height="1" border="0"/></td>
  </tr>
  <!-- END postrow -->
  {QUICKREPLY_OUTPUT_ASC}
  <tr>
    <td class="cat" colspan="2" height="28">
      <table cellspacing="0" cellpadding="2" border="0" align="center">
        <tr>
          <td>
            <form method="post" action="{S_POST_DAYS_ACTION}">
            <table cellspacing="0" cellpadding="0" border="0" align="center">
	            <tr align="center"> 
		            <td nowrap="nowrap">
                  {L_DISPLAY_POSTS}:&nbsp;&nbsp;{S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;&nbsp;
                  <input type="submit" value="{L_GO}" class="catbutton" name="submit" />
                </td>
              </tr>
            </table>
            </form>
          </td>
        </tr>
        <tr align="center">
          <td>{JUMPBOX}</td>
        </tr> 
      </table>
    </td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
    <td colspan="3" align="right" valign="top">
      <div class="gensmall">{S_TIMEZONE}</div>
    </td>
  </tr>
  <tr>
    <td align="left" nowrap="nowrap">
      <a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" title="{L_POST_REPLY_TOPIC}" /></a>
    </td>
    <td colspan="2" nowrap="nowrap">{NAVBAR}</td>
  </tr>
  <tr>
    <td class="nav" valign="top">{PAGINATION}</td>
    <td rowspan="2" align="right" valign="top">{S_TOPIC_ADMIN}</td>
  </tr>
  <tr>
    <td class="nav" width="100%">
      &nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}{NAV_SEPARATOR}
      <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td class="gensmall" align="right" valign="top">
      <!-- {NAVBARTEXTBOT}-->
      <!-- {S_AUTH_LIST} -->
    </td>
  </tr>
</table>
