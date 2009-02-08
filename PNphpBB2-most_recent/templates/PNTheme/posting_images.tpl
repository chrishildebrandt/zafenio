<script language="javascript" type="text/javascript">
<!--
function posticon(text) {
	opener.document.forms['post'].postimageselect.value = text;
	opener.document.forms['post'].message.focus();
	window.close();
}
//-->
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumline">
<tr>
<th>{L_MSG_ICONS}</th>
</tr>
<tr>
<td>
<table width="100" border="0" cellspacing="0" cellpadding="5">
<!-- BEGIN post_images_row -->
<tr align="center">
<!-- BEGIN post_images_column -->
<td>
<a href="javascript:posticon('{post_images_row.post_images_column.POST_IMAGE_NUM}')"><img src="{post_images_row.post_images_column.POST_IMAGE}" alt="{post_images_row.post_images_column.POST_IMAGE_NAME}" {POSTICONS_SIZE} border="0" title="{post_images_row.post_images_column.POST_IMAGES_NAME}" /></a></td>
<!-- END post_images_column -->
</tr>
<!-- END post_images_row -->
</table>
</td>
</tr>
<tr>
<td class="genmed" align="center"><br />
<a href="javascript:window.close();">{L_CLOSE_WINDOW}</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
