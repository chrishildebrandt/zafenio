<tr>
<td class="row1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" class="row1" colspan="2"><strong>{L_MSG_ICONS}</strong></td>
<td></td>
</tr>
<tr>
<td width="10%">
<input type="radio" name="postimageselect" value="NONE" checked />
</td>
<td>
{L_MSG_ICON_NO_ICON}
</td>
</tr>
</table>
</td>
<td class="row2" class="gen"> 
<table width="450px" border="0" cellspacing="0" cellpadding="0">
<!-- BEGIN post_images_row -->
<tr>
<!-- BEGIN post_images_column -->
<td class="row2" align="center">
<input type="radio" name="postimageselect" value="{post_images_row.post_images_column.POST_IMAGE_NUM}" {post_images_row.post_images_column.POST_IMAGE_CHECKED} />
<img src="{post_images_row.post_images_column.POST_IMAGE}" {POSTICONS_SIZE} border="0" alt="{post_images_row.post_images_column.POST_IMAGE_NAME}" title="{post_images_row.post_images_column.POST_IMAGES_NAME}" />
</td>
<!-- END post_images_column -->
</tr>
<!-- END post_images_row -->
</table>
</td>
</tr>