<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_DATABASE_BACKUP}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_BACKUP_EXPLAIN}</div></td>
</tr></table>
<form method="post" action="{S_DBUTILS_ACTION}">
<table cellspacing="1" cellpadding="3" border="0" align="center" class="forumline">
<tr>
		
<th colspan="2">{L_BACKUP_OPTIONS}</th>
	</tr>
	<tr>
		<td class="row2">{L_FULL_BACKUP}</td>
		<td class="row2"><input type="radio" name="backup_type" value="full" checked /></td>
	</tr>
	<tr>
		<td class="row1">{L_STRUCTURE_BACKUP}</td>
		<td class="row1"><input type="radio" name="backup_type" value="structure" /></td>
	</tr>
	<tr>
		<td class="row2">{L_DATA_BACKUP}</td>
		<td class="row2"><input type="radio" name="backup_type" value="data" /></td>
	</tr>
	<tr>
		<td class="row1">{L_ADDITIONAL_TABLES}</td>
		<td class="row1">
<input type="text" name="additional_tables" class="post" />
</td>
	</tr>
	<tr>
		<td class="row1">{L_GZIP_COMPRESS}</td>
		<td class="row1">{L_NO} <input type="radio" name="gzipcompress" value="0" checked /> &nbsp;{L_YES} <input type="radio" name="gzipcompress" value="1" /></td>
	</tr>
	<tr>
		
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS}
<input type="submit" name="backupstart" value="{L_START_BACKUP}" class="mainoption" /></td>
	</tr>
</table></form>
