<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_GROUP_TITLE}</span></td>
</tr></table>
<form action="{S_GROUP_ACTION}" method="post" name="post">
<table border="0" cellpadding="3" cellspacing="1" class="forumline" align="center">
<tr> 
<th colspan="2">{L_GROUP_EDIT_DELETE}</th>
</tr>
<tr> 
<td class="row1" colspan="2"><span class="gensmall">{L_ITEMS_REQUIRED}</span></td>
</tr>
<tr> 
<td class="row1" width="38%">{L_GROUP_NAME}:</td>
<td class="row2" width="62%"> 
<input type="text" name="group_name" size="35" maxlength="40" value="{GROUP_NAME}" class="post" />
</td>
</tr>
<tr> 
<td class="row1">{L_GROUP_DESCRIPTION}:</td>
<td class="row2"> 
<textarea name="group_description" rows=5 cols=30 style="width: 350px" class="post">{GROUP_DESCRIPTION}</textarea>
</td>
</tr>
<tr> 
<td class="row1">{L_GROUP_MODERATOR}:</td>
<td class="row2"> 
<input type="text" class="post" name="username" maxlength="50" size="20" value="{GROUP_MODERATOR}" />
&nbsp; 
<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
</td>
</tr>
<tr> 
<td class="row1">{L_GROUP_STATUS}:</td>
<td class="row2"> 
<input type="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} />
{L_GROUP_OPEN} &nbsp;&nbsp; 
<input type="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} />
{L_GROUP_CLOSED} &nbsp;&nbsp; 
<input type="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} />
{L_GROUP_HIDDEN}</td>
</tr>
<!-- BEGIN group_edit -->
<tr> 
<td class="row1">{L_DELETE_MODERATOR} <br />
<span class="gensmall">{L_DELETE_MODERATOR_EXPLAIN}</span></td>
<td class="row2"> 
<input type="checkbox" name="delete_old_moderator" value="1">
{L_YES}</td>
</tr>
<tr> 
<td class="row1">{L_GROUP_DELETE}:</td>
<td class="row2"> 
<input type="checkbox" name="group_delete" value="1">
{L_GROUP_DELETE_CHECK}</td>
</tr>
<tr> 
<td class="row1"><span class="gen">{L_UPLOAD_QUOTA}</span></td>
<td class="row2">{S_SELECT_UPLOAD_QUOTA}</td>
</tr>
<tr> 
<td class="row1"><span class="gen">{L_PM_QUOTA}</span></td>
<td class="row2">{S_SELECT_PM_QUOTA}</td>
</tr>
<!-- END group_edit -->
<tr> 
<td class="cat" colspan="2" align="center"> 
<input type="submit" name="group_update" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" name="reset" class="button" />
</td>
</tr>
</table>
{S_HIDDEN_FIELDS}</form>
