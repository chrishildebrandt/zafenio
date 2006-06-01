<form action="{S_SEARCH_ACTION}" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td ><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
<tr>
<th colspan="4" class="thc">{L_SEARCH_QUERY}</th>
</tr>
<tr>
<td class="row1" colspan="2" width="50%"><strong>{L_SEARCH_KEYWORDS}:</strong><br />
<span class="gensmall">{L_SEARCH_KEYWORDS_EXPLAIN}</span></td>
<td class="row2" colspan="2"> <input type="text" style="width: 300px" class="post" name="search_keywords" size="30" />
<br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="search_terms" value="any" checked="checked" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;{L_SEARCH_ANY_TERMS}</td>
</tr>
<tr>
<td><input type="radio" name="search_terms" value="all" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;{L_SEARCH_ALL_TERMS}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" colspan="2"><strong>{L_SEARCH_AUTHOR}:</strong><br />
<span class="gensmall">{L_SEARCH_AUTHOR_EXPLAIN}</span></td>
<td class="row2" colspan="2">
<input type="text" style="width: 300px" class="post" name="search_author" size="30" />
</td>
</tr>
<tr>
<th colspan="4" class="thc">{L_SEARCH_OPTIONS}</th>
</tr>
<tr>
<td class="row1" align="right">{L_FORUM}:&nbsp;</td>
<td class="row2">
<select class="post" name="search_forum">{S_FORUM_OPTIONS}</select>
</td>
<td class="row1" align="right" nowrap="nowrap">{L_SEARCH_PREVIOUS}:&nbsp;</td>
<td class="row2">
<select class="post" name="search_time">{S_TIME_OPTIONS}</select>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="search_fields" value="all" checked="checked" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;{L_SEARCH_MESSAGE_TITLE}</td>
</tr>
<tr>
<td><input type="radio" name="search_fields" value="msgonly" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;{L_SEARCH_MESSAGE_ONLY}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" align="right">{L_CATEGORY}:&nbsp;</td>
<td class="row2">
<select class="post" name="search_cat">{S_CATEGORY_OPTIONS}</select>
</td>
<td class="row1" align="right">{L_SORT_BY}:&nbsp;</td>
<td class="row2">
<select class="post" name="sort_by">{S_SORT_OPTIONS}</select>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="sort_dir" value="ASC" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;{L_SORT_ASCENDING}</td>
</tr>
<tr>
<td><input type="radio" name="sort_dir" value="DESC" checked="checked" /></td>
<td nowrap="nowrap" class="genmed">&nbsp;{L_SORT_DESCENDING}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="row1" align="right" nowrap="nowrap">{L_DISPLAY_RESULTS}:&nbsp;</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><input type="radio" name="show_results" value="posts" /></td>
<td class="genmed" nowrap="nowrap">&nbsp;{L_POSTS}&nbsp;&nbsp;</td>
<td><input type="radio" name="show_results" value="topics" checked="checked" /></td>
<td class="genmed" nowrap="nowrap">&nbsp;{L_TOPICS}</td>
</tr>
</table>
</td>
<td class="row1" align="right">{L_RETURN_FIRST}:&nbsp;</td>
<td class="row2">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><select class="post" name="return_chars">{S_CHARACTER_OPTIONS}</select></td>
<td class="genmed" nowrap="nowrap">&nbsp;{L_CHARACTERS}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="cat" colspan="4" align="center">{S_HIDDEN_FIELDS}<input class="button" type="submit" value="{L_SEARCH}" />
</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td ><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
</form>
<br clear="all" />
<div align="left">{JUMPBOX}</div>
