<table width="100%" cellspacing="4" cellpadding="0" border="0">
<tr>
<td align="left" valign="bottom" class="gensmall">
<!-- BEGIN switch_user_logged_in -->
{LAST_VISIT_DATE}<br />
<!-- END switch_user_logged_in -->
{CURRENT_TIME}<br />
{S_TIMEZONE}<br />
<a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}</td>
<td align="right" valign="bottom" class="gensmall">
<!-- BEGIN switch_user_logged_in -->
<a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a><br />
<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br />
<!-- END switch_user_logged_in -->
<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a><br />
<!-- BEGIN switch_user_logged_in -->
<a href="{U_MARK_READ}"><strong>{L_MARK_FORUMS_READ}</strong></a></td>
<!-- END switch_user_logged_in -->
</tr>
</table>
<!-- Begin PNphpBB2 Module Announcements Mod -->
<!-- BEGIN switch_annonce -->
<table width="100%" cellpadding="1" cellspacing="1" border="0" class="forumline">
<tr>
<th colspan="3" align="center" height="25" class="thCornerL" nowrap="nowrap">{switch_annonce.L_ANNONCE}</th>
<th>&nbsp;{L_POSTED}&nbsp;</th>
</tr>
<!-- BEGIN topicrow -->
<tr>
<td class="row1" align="center" valign="middle" width="35">
<img src="{switch_annonce.topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.switch_annonce.L_TOPIC_FOLDER_ALT}" title="{switch_annonce.topicrow.L_TOPIC_FOLDER_ALT}" />
</td>
<!-- Image Mod -->
<td class="row1" align="center" valign="middle" width="16">{switch_annonce.topicrow.ICON}</td>
<!-- Image Mod -->
<td class="row2 gensmall">&nbsp;<a href="{switch_annonce.topicrow.U_VIEW_TOPIC}" class="topictitle">{switch_annonce.topicrow.TOPIC_TITLE}</a>&nbsp;({switch_annonce.topicrow.FORUM_TITLE})</td>
<td class="row2 gensmall" align="center" nowrap="nowrap" width="122">{switch_annonce.topicrow.LAST_POST}</td>
</tr> 
<!-- END topicrow -->
</table>
<br>
<!-- END switch_annonce -->
<!-- End PNphpBB2 Module Announcements Mod -->
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<!-- Begin PNphpBB2 Categories Hierarchie Mod -->
<th colspan="{INC_SPAN}" class="thCornerL" height="25" nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
<th>&nbsp;{L_TOPICS}&nbsp;</th>
<th>&nbsp;{L_POSTS}&nbsp;</th>
<th>&nbsp;{L_LASTPOST}&nbsp;</th>
</tr>
<!-- BEGIN catrow -->
<tr> 
<!-- BEGIN inc -->
<td class="{catrow.inc.INC_ROW}" width="46">&nbsp;</td>
<!-- END inc -->
<td class="cat" colspan="{catrow.INC_SPAN}" height="28"><a href="{catrow.U_VIEWCAT}" class="cat">{catrow.CAT_DESC}</a></td> 
<td class="rowpic" colspan="3" align="right">&nbsp;</td> 
</tr>
<!-- End PNphpBB2 Categories Hierarchie Mod -->
<!-- BEGIN forumrow -->
<tr>
<!-- BEGIN inc -->
<td class="{catrow.forumrow.inc.INC_ROW}">&nbsp;</td>
<!-- END inc -->
<td class="{catrow.forumrow.INC_ROW}" align="center" valign="middle" height="45"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></td>
<td class="row1" width="100%" height="45" colspan="{catrow.forumrow.INC_SPAN}"> <a href="{catrow.forumrow.U_VIEWFORUM}" class="nav">{catrow.forumrow.FORUM_NAME}</a><br />
{catrow.forumrow.FORUM_DESC}<br />
{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</td>
<td class="row2 gensmall" align="center">{catrow.forumrow.TOPICS}</td>
<td class="row2 gensmall" align="center">{catrow.forumrow.POSTS}</td>
<td class="row2 gensmall" align="center" nowrap="nowrap">{catrow.forumrow.LAST_POST}</td>
</tr>
<!-- END forumrow -->
<!-- END catrow -->
</table>
<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
<tr> 
<td class="gensmall">
  <p class="breadcrumbs"><a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a></p>
  <p class="datetime">{S_TIMEZONE}</p>
</td>
</tr>
</table>
<!-- BEGIN switch_members_online -->
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="2"><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></td>
</tr>
<tr>
<td class="row1" rowspan="3"><img src="{WHOSONLINE}" alt="{L_WHO_IS_ONLINE}" title="{L_WHO_IS_ONLINE}" />
</td>
<td class="row1 gensmall" width="100%">{TOTAL_POSTS}<br />
{TOTAL_USERS}<br />
{NEWEST_USER}</td>
</tr>
<tr>
<td class="row1 gensmall">{TOTAL_USERS_ONLINE} &nbsp; [ <strong>{L_WHOSONLINE_ADMIN}</strong> 
] &nbsp; [ <strong>{L_WHOSONLINE_MOD}</strong> ]<br />
{RECORD_USERS}<br />
{LOGGED_IN_USER_LIST}</td>
</tr>
<tr>
<td class="row1 gensmall">{L_ONLINE_EXPLAIN}</td>
</tr>
</table>
<!-- END switch_members_online -->
<!-- BEGIN switch_user_logged_out -->
<br />
<form action="user.php" method="post" style="margin:0">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat">{L_LOGIN_LOGOUT}</td>
</tr>
<tr>
<td class="row1 gensmall" align="center">{L_USERNAME}: 
<input type="text" name="uname" size="10" maxlength="25">
&nbsp;&nbsp;&nbsp;{L_PASSWORD}:
<input type="password" name="pass" size="10" maxlength="32"> 
<input type="hidden" name="url" value="index.php?name={T_MODNAME}">
<input type="hidden" name="module" value="NS-User">
<input type="hidden" name="op" value="login">
<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
</td>
</tr>
</table>
</form>
<!-- END switch_user_logged_out -->
<br clear="all" />
<!-- <table cellspacing="3" border="0" cellpadding="0"> -->
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="8"><a class="topictitle">{L_LEGEND}</a></td>
</tr>
<tr>
<td>
<table cellspacing="3" border="0" align="center" cellpadding="0">
<tr>
<td><img src="{FORUM_NEW_IMG}" alt="{L_NEW_POSTS}" title="{L_NEW_POSTS}" /></td>
<td class="gensmall">{L_NEW_POSTS}</td>
<td>&nbsp;</td>
<td><img src="{FORUM_IMG}" alt="{L_NO_NEW_POSTS}" title="{L_NO_NEW_POSTS}" /></td>
<td class="gensmall">{L_NO_NEW_POSTS}</td>
<td>&nbsp;</td>
<td><img src="{FORUM_LOCKED_IMG}" alt="{L_FORUM_LOCKED}" title="{L_FORUM_LOCKED}" /></td>
<td class="gensmall">{L_FORUM_LOCKED}</td>
</tr>
</table>
</td>
</tr>
</table>
