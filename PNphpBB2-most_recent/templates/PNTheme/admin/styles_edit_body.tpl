<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_THEMES_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_THEMES_EXPLAIN}</div></td>
</tr></table>
<form action="{S_THEME_ACTION}" method="POST">
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr> 
<th colspan="3" class="thc">{L_THEME_SETTINGS}</th>
</tr>
<tr> 
<td class="row1" align="right">{L_THEME_NAME}:</td>
<td class="row2" colspan="2"> 
<input type="text" size="25" maxlength="100" name="style_name" value="{THEME_NAME}" class="post">
</td>
</tr>
<tr> 
<td class="row1" align="right">{L_TEMPLATE}:</td>
<td class="row2" colspan="2">{S_TEMPLATE_SELECT}</td>
</tr>
<tr> 
<th class="thc">{L_THEME_ELEMENT}</th>
<th height="28" class="thc">{L_VALUE}</th>
<th class="thc">{L_SIMPLE_NAME}</th>
</tr>
<tr> 
<td class="row1" align="right" nowrap>{L_STYLESHEET}:<br />
<span class="gensmall">{L_STYLESHEET_EXPLAIN}<br />
to use for this theme.</span></td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="head_stylesheet" value="{HEAD_STYLESHEET}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BACKGROUND_IMAGE}:</td>
<td class="row2" > 
<input type="text" size="25" maxlength="100" name="body_background" value="{BODY_BACKGROUND}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BACKGROUND_COLOR}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="body_bgcolor" value="{BODY_BGCOLOR}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BODY_TEXT_COLOR}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="body_text" value="{BODY_TEXT_COLOR}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BODY_LINK_COLOR}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="body_link" value="{BODY_LINK_COLOR}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BODY_VLINK_COLOR}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="body_vlink" value="{BODY_VLINK_COLOR}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BODY_ALINK_COLOR}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="body_alink" value="{BODY_ALINK_COLOR}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_BODY_HLINK_COLOR}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="body_hlink" value="{BODY_HLINK_COLOR}" class="post">
</td>
<td class="row2">&nbsp;</td>
</tr>
<tr> 
<td class="row1" align="right">{L_TR_COLOR1}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="tr_color1" value="{TR_COLOR1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="tr_color1_name" value="{TR_COLOR1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TR_COLOR2}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="tr_color2" value="{TR_COLOR2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="tr_color2_name" value="{TR_COLOR2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TR_COLOR3}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="tr_color3" value="{TR_COLOR3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="tr_color3_name" value="{TR_COLOR3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TR_CLASS1}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="tr_class1" value="{TR_CLASS1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="tr_class1_name" value="{TR_CLASS1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TR_CLASS2}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="tr_class2" value="{TR_CLASS2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="tr_class2_name" value="{TR_CLASS2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TR_CLASS3}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="tr_class3" value="{TR_CLASS3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="tr_class3_name" value="{TR_CLASS3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TH_COLOR1}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="th_color1" value="{TH_COLOR1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="th_color1_name" value="{TH_COLOR1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TH_COLOR2}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="th_color2" value="{TH_COLOR2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="th_color2_name" value="{TH_COLOR2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TH_COLOR3}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="th_color3" value="{TH_COLOR3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="th_color3_name" value="{TH_COLOR3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TH_CLASS1}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="th_class1" value="{TH_CLASS1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="th_class1_name" value="{TH_CLASS1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TH_CLASS2}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="th_class2" value="{TH_CLASS2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="th_class2_name" value="{TH_CLASS2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TH_CLASS3}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="th_class3" value="{TH_CLASS3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="th_class3_name" value="{TH_CLASS3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TD_COLOR1}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="td_color1" value="{TD_COLOR1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="td_color1_name" value="{TD_COLOR1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TD_COLOR2}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="td_color2" value="{TD_COLOR2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="td_color2_name" value="{TD_COLOR2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TD_COLOR3}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="td_color3" value="{TD_COLOR3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="td_color3_name" value="{TD_COLOR3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TD_CLASS1}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="td_class1" value="{TD_CLASS1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="td_class1_name" value="{TD_CLASS1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TD_CLASS2}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="td_class2" value="{TD_CLASS2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="td_class2_name" value="{TD_CLASS2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_TD_CLASS3}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="td_class3" value="{TD_CLASS3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="td_class3_name" value="{TD_CLASS3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTFACE_1}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="50" name="fontface1" value="{FONTFACE1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontface1_name" value="{FONTFACE1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTFACE_2}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="50" name="fontface2" value="{FONTFACE2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontface2_name" value="{FONTFACE2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTFACE_3}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="50" name="fontface3" value="{FONTFACE3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontface3_name" value="{FONTFACE3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTSIZE_1}:</td>
<td class="row2"> 
<input type="text" size="4" maxlength="4" name="fontsize1" value="{FONTSIZE1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontsize1_name" value="{FONTSIZE1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTSIZE_2}:</td>
<td class="row2"> 
<input type="text" size="4" maxlength="4" name="fontsize2" value="{FONTSIZE2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontsize2_name" value="{FONTSIZE2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTSIZE_3}:</td>
<td class="row2"> 
<input type="text" size="4" maxlength="4" name="fontsize3" value="{FONTSIZE3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontsize3_name" value="{FONTSIZE3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTCOLOR_1}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="fontcolor1" value="{FONTCOLOR1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontcolor1_name" value="{FONTCOLOR1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTCOLOR_2}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="fontcolor2" value="{FONTCOLOR2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontcolor2_name" value="{FONTCOLOR2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_FONTCOLOR_3}:</td>
<td class="row2"># <input type="text" size="6" maxlength="6" name="fontcolor3" value="{FONTCOLOR3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="fontcolor3_name" value="{FONTCOLOR3_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_SPAN_CLASS_1}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="span_class1" value="{SPAN_CLASS1}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="span_class1_name" value="{SPAN_CLASS1_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_SPAN_CLASS_2}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="span_class2" value="{SPAN_CLASS2}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="span_class2_name" value="{SPAN_CLASS2_NAME}" class="post">
</tr>
<tr> 
<td class="row1" align="right">{L_SPAN_CLASS_3}:</td>
<td class="row2"> 
<input type="text" size="25" maxlength="25" name="span_class3" value="{SPAN_CLASS3}" class="post">
</td>
<td class="row2"> 
<input type="text" size="25" maxlength="100" name="span_class3_name" value="{SPAN_CLASS3_NAME}" class="post">
</tr>
<tr> 
<td class="cat" colspan="3" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="submit" value="{L_SAVE_SETTINGS}" class="mainoption" />
</td>
</tr>
</table>
</form>

<br clear="all">
