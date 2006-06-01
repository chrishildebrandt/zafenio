<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_RANKS_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_RANKS_TEXT}</div></td>
</tr></table>
<form action="{S_RANK_ACTION}" method="post">
<table class="forumline" cellpadding="3" cellspacing="1" border="0" align="center">
<tr> 
<th colspan="2">{L_RANKS_TITLE}</th>
</tr>
<tr> 
<td class="row1" width="38%">{L_RANK_TITLE}:</td>
<td class="row2" width="62%"> 
<input type="text" name="title" size="35" maxlength="40" value="{RANK}" class="post" />
</td>
</tr>
<tr> 
<td class="row1">{L_RANK_SPECIAL}</td>
<td class="row2"> 
<input type="radio" name="special_rank" value="1" {SPECIAL_RANK} />
{L_YES} &nbsp;&nbsp; 
<input type="radio" name="special_rank" value="0" {NOT_SPECIAL_RANK} />
{L_NO}</td>
</tr>
<tr> 
<td class="row1">{L_RANK_MINIMUM}:</td>
<td class="row2"> 
<input type="text" name="min_posts" size="5" maxlength="10" value="{MINIMUM}" class="post" />
</td>
</tr>
<tr> 
<td class="row1">{L_RANK_IMAGE}:<br />
<span class="gensmall">{L_RANK_IMAGE_EXPLAIN}</span></td>
<td class="row2"> 
<input type="text" name="rank_image" size="40" maxlength="255" value="{IMAGE}" class="post" />
<br />
{IMAGE_DISPLAY}</td>
</tr>
<tr> 
<td class="cat" colspan="2" align="center"> 
<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" class="button" />
</td>
</tr>
</table>
{S_HIDDEN_FIELDS}</form>
