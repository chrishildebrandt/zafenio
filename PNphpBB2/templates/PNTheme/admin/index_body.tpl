<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><div class="maintitle" align="center">{L_WELCOME}</div></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_ADMIN_INTRO}</div></td>
</tr><tr>
<td class="row2"><div class="subtitle" align="center">{L_FORUM_STATS}</div></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr> 
<th width="25%">{L_STATISTIC}</th>
<th width="25%">{L_VALUE}</th>
<th width="25%" nowrap>{L_STATISTIC}</th>
<th width="25%">{L_VALUE}</th>
</tr>
<tr> 
<td class="row1" nowrap align="right">{L_PNPHPBB_VERSION}:</td>
<td class="row2"><strong>{PNPHPBB_VERSION}</strong></td>
<td class="row1" align="right">{L_PHPBB_VERSION}:</td>
<td class="row2"><strong>{PHPBB_VERSION}</strong></td>
</tr>
<tr> 
<td class="row1" nowrap align="right">{L_NUMBER_POSTS}:</td>
<td class="row2"><strong>{NUMBER_OF_POSTS}</strong></td>
<td class="row1" align="right">{L_POSTS_PER_DAY}:</td>
<td class="row2"><strong>{POSTS_PER_DAY}</strong></td>
</tr>
<tr> 
<td class="row1" nowrap align="right">{L_NUMBER_TOPICS}:</td>
<td class="row2"><strong>{NUMBER_OF_TOPICS}</strong></td>
<td class="row1" nowrap align="right">{L_TOPICS_PER_DAY}:</td>
<td class="row2"><strong>{TOPICS_PER_DAY}</strong></td>
</tr>
<tr> 
<td class="row1" nowrap align="right">{L_NUMBER_USERS}:</td>
<td class="row2">{NUMBER_OF_USERS}</td>
<td class="row1" nowrap align="right">{L_USERS_PER_DAY}:</td>
<td class="row2"><strong>{USERS_PER_DAY}</strong></td>
</tr>
<tr> 
<td class="row1" nowrap align="right">{L_BOARD_STARTED}:</td>
<td class="row2"><strong>{START_DATE}</strong></td>
<td class="row1" nowrap align="right">{L_AVATAR_DIR_SIZE}:</td>
<td class="row2"><strong>{AVATAR_DIR_SIZE}</strong></td>
</tr>
<tr> 
<td class="row1" nowrap align="right">{L_DB_SIZE}:</td>
<td class="row2"><strong>{DB_SIZE}</strong></td>
<td class="row1" align="right">{L_GZIP_COMPRESSION}:</td>
<td class="row2"><strong>{GZIP_COMPRESSION}</strong></td>
</tr>
</table>
<h1>{L_VERSION_INFORMATION}</h1>

{VERSION_INFO}

<br />
<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center">
<br />
<div class="subtitle">{L_WHO_IS_ONLINE}</div></td></tr></table>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr> 
<th width="20%">&nbsp;{L_USERNAME}&nbsp;</th>
<th width="20%">&nbsp;{L_STARTED}&nbsp;</th>
<th width="20%">&nbsp;{L_LAST_UPDATE}&nbsp;</th>
<th width="20%">&nbsp;{L_FORUM_LOCATION}&nbsp;</th>
<th width="20%">&nbsp;{L_IP_ADDRESS}&nbsp;</th>
</tr>
<!-- BEGIN reg_user_row -->
<tr> 
<td width="20%" class="{reg_user_row.ROW_CLASS}">&nbsp;<a href="{reg_user_row.U_USER_PROFILE}">{reg_user_row.USERNAME}</a>&nbsp;</td>
<td width="20%" align="center" class="{reg_user_row.ROW_CLASS}">&nbsp;{reg_user_row.STARTED}&nbsp;</td>
<td width="20%" align="center" nowrap class="{reg_user_row.ROW_CLASS}">&nbsp;{reg_user_row.LASTUPDATE}&nbsp;</td>
<td width="20%" class="{reg_user_row.ROW_CLASS}">&nbsp;<a href="{reg_user_row.U_FORUM_LOCATION}">{reg_user_row.FORUM_LOCATION}</a>&nbsp;</td>
<td width="20%" class="{reg_user_row.ROW_CLASS}">&nbsp;<a href="{reg_user_row.U_WHOIS_IP}" target="_phpbbwhois">{reg_user_row.IP_ADDRESS}</a>&nbsp;</td>
</tr>
<!-- END reg_user_row -->
<tr> 
<td colspan="5" height="1" class="row3"><img src="templates/{T_THEME_NAME}/images/spacer.gif" width="1" height="1" alt="."></td>
</tr>
<!-- BEGIN guest_user_row -->
<tr> 
<td width="20%" class="{guest_user_row.ROW_CLASS}">&nbsp;{guest_user_row.USERNAME}&nbsp;</td>
<td width="20%" align="center" class="{guest_user_row.ROW_CLASS}">&nbsp;{guest_user_row.STARTED}&nbsp;</td>
<td width="20%" align="center" nowrap class="{guest_user_row.ROW_CLASS}">&nbsp;{guest_user_row.LASTUPDATE}&nbsp;</td>
<td width="20%" class="{guest_user_row.ROW_CLASS}">&nbsp;<a href="{guest_user_row.U_FORUM_LOCATION}">{guest_user_row.FORUM_LOCATION}</a>&nbsp;</td>
<td width="20%" class="{guest_user_row.ROW_CLASS}">&nbsp;<a href="{guest_user_row.U_WHOIS_IP}" target="_phpbbwhois">{guest_user_row.IP_ADDRESS}</a>&nbsp;</td>
</tr>
<!-- END guest_user_row -->
</table>

<br />
