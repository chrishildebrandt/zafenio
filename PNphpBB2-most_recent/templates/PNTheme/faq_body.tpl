<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tr>
<th>{L_FAQ_TITLE}</th>
</tr>
<tr>
<td class="row1"> 
<!-- BEGIN faq_block_link -->
<strong>{faq_block_link.BLOCK_TITLE}</strong><br />
<!-- BEGIN faq_row_link -->
<a href="{faq_block_link.faq_row_link.U_FAQ_LINK}">{faq_block_link.faq_row_link.FAQ_LINK}</a><br />
<!-- END faq_row_link -->
<br />
<!-- END faq_block_link -->
</td>
</tr>
<tr>
<td class="cat">&nbsp;</td>
</tr>
</table>
<br clear="all" />
<!-- BEGIN faq_block -->
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tr>
<td class="cat" align="center">{faq_block.BLOCK_TITLE}</td>
</tr>
<!-- BEGIN faq_row -->
<tr> 
<td class="{faq_block.faq_row.ROW_CLASS}" valign="top"><a name="{faq_block.faq_row.U_FAQ_ID}"></a><strong>{faq_block.faq_row.FAQ_QUESTION}</strong><br />
<span class="postbody">{faq_block.faq_row.FAQ_ANSWER}<br />
<a href="#top" class="gensmall">{L_BACK_TO_TOP}</a></span></td>
</tr>
<tr>
<td class="spacerow" height="1"><img src="templates/{T_THEME_NAME}/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<!-- END faq_row -->
</table>
<!-- END faq_block -->

<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td valign="top" nowrap="nowrap">
  <p class="breadcrumbs"><a href="{U_INDEX}">{L_INDEX}</a></p>
  <p class="datetime">{S_TIMEZONE}</p>
</td> 
</tr>
</table>
<br class="gensmall" />
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td align="right" valign="middle" nowrap="nowrap">{JUMPBOX}</td> 
</tr>
</table>
<br clear="all" />

