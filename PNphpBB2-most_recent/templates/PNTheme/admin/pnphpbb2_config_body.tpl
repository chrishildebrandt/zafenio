<table width="100%" border="0" cellpadding="3" cellspacing="1" border="0" class="forumline" bgcolor=""#ffffff">
<tr>
<td class="row2" align="center"><span class="maintitle">{L_CONFIGURATION_TITLE}</span></td>
</tr><tr>
<td class="row2"><div class="genmed">{L_CONFIGURATION_EXPLAIN}</div></td>
</tr></table>
<form action="{S_MODE_ACTION}" method="post">
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
<tr>
<th class="thHead" colspan="2">{L_PNPHPBB2_OPTIONS}</th>
</tr>
<tr>
<td class="row1">{L_THEME_MATCHING}<br />{L_THEME_MATCHING_EXPLAIN}</td>
<td class="row2"><input type="radio" name="theme_matching" value="1" {S_THEME_MATCHING_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="theme_matching" value="0" {S_THEME_MATCHING_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_MEMBERS_ONLINE}<br />{L_PNPHPBB2_MEMBERS_ONLINE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_members_online" value="1" {S_PNPHPBB2_MEMBERS_ONLINE_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_members_online" value="0" {S_PNPHPBB2_MEMBERS_ONLINE_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_MEMBERS_ONLINE_ANNON}<br />{L_PNPHPBB2_MEMBERS_ONLINE_ANNON_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_members_online_annon" value="1" {S_PNPHPBB2_MEMBERS_ONLINE_ANNON_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_members_online_annon" value="0" {S_PNPHPBB2_MEMBERS_ONLINE_ANNON_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_LOGO_ON}<br />{L_PNPHPBB2_LOGO_ON_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_logo_on" value="1" {S_PNPHPBB2_LOGO_ON_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_logo_on" value="0" {S_PNPHPBB2_LOGO_ON_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_QUICKREPLY}<br />{L_PNPHPBB2_QUICKREPLY_EXPLAIN}</td>
<td class="row2">
<input type="radio" name="pnphpbb2_quickreply" value="2" {S_PNPHPBB2_QUICKREPLY_ADV} />
{L_PNPHPBB2_QUICKREPLY_ADV}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_quickreply" value="1" {S_PNPHPBB2_QUICKREPLY_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_quickreply" value="0" {S_PNPHPBB2_QUICKREPLY_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_SHORTURLS}<br />{L_PNPHPBB2_SHORTURLS_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_shorturls" value="1" {S_PNPHPBB2_SHORTURLS_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_shorturls" value="0" {S_PNPHPBB2_SHORTURLS_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_POST_ORDER}<br />{L_PNPHPBB2_POST_ORDER_EXPLAIN}</td>
<td class="row2"><nobr><input type="radio" name="pnphpbb2_post_order" value="1" {S_PNPHPBB2_POST_ORDER_NEWEST} />
{L_LAST_POST}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_post_order" value="0" {S_PNPHPBB2_POST_ORDER_OLDEST} />
{L_FIRST_POST}</nobr></td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_POST_CONFIRM}<br />{L_PNPHPBB2_POST_CONFIRM_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_post_confirm" value="1" {S_PNPHPBB2_POST_CONFIRM_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_post_confirm" value="0" {S_PNPHPBB2_POST_CONFIRM_NO} />
{L_NO}</td>
</tr>
<tr> 
<td class="row1">{L_EDIT_TIME}<br /><span class="gensmall">{L_EDIT_TIME_EXPLAIN}</span></td> 
<td class="row2"><input type="text" size="4" maxlength="4" name="edit_time" value="{EDIT_TIME}" /></td> 
</tr> 
<tr>
<td class="row1">{L_PNPHPBB2_ALLOW_FULL_PAGE}<br />{L_PNPHPBB2_ALLOW_FULL_PAGE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_allow_full_page" value="1" {S_PNPHPBB2_ALLOW_FULL_PAGE_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_allow_full_page" value="0" {S_PNPHPBB2_ALLOW_FULL_PAGE_NO} />
{L_NO}</td>
</tr>	
<tr>
<td class="row1">{L_PNPHPBB2_FULL_PAGE}<br />{L_PNPHPBB2_FULL_PAGE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_full_page" value="1" {S_PNPHPBB2_FULL_PAGE_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_full_page" value="0" {S_PNPHPBB2_FULL_PAGE_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_PN_PM}<br />{L_PNPHPBB2_PN_PM_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_pn_pm" value="1" {S_PNPHPBB2_PN_PM_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_pn_pm" value="0" {S_PNPHPBB2_PN_PM_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_PN_LINK}<br />{L_PNPHPBB2_PN_LINK_EXPLAIN}</td>
<td class="row2" nowrap="nowrap"><input type="text" name="pnphpbb2_pn_link" value="{PNPHPBB2_PN_LINK}" /></td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_PN_TEXT}<br />{L_PNPHPBB2_PN_TEXT_EXPLAIN}</td>
<td class="row2" nowrap="nowrap"><input type="text" name="pnphpbb2_pn_text" value="{PNPHPBB2_PN_TEXT}" /></td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_TEMPLATE_COMPILER}<br />{L_PNPHPBB2_TEMPLATE_COMPILER_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_template_compiler" value="1" {S_PNPHPBB2_TEMPLATE_COMPILER_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_template_compiler" value="0" {S_PNPHPBB2_TEMPLATE_COMPILER_NO} />
{L_NO}</td>
</tr>
<tr>
<th class="thHead" colspan="2">{L_PNPHPBB2_HIERARCHY_SETTINGS}</th>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_ALLOW_SUB_CHANGE}<br />{L_PNPHPBB2_ALLOW_SUB_CHANGE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_allow_sub_change" value="1" {S_PNPHPBB2_ALLOW_SUB_CHANGE_YES} />
{L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_allow_sub_change" value="0" {S_PNPHPBB2_ALLOW_SUB_CHANGE_NO} />
{L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_SUB_FORUM}<br />{L_PNPHPBB2_SUB_FORUM_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_sub_forum" value="1" {PNPHPBB2_SUB_FORUM_YES} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_sub_forum" value="0" {PNPHPBB2_SUB_FORUM_NO} /> {L_NO}</td>
</tr>
<tr>
<th class="thHead" colspan="2">{L_PNPHPBB2_ANNOUNCEMENT_SETTINGS}</th>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_ENABLE_ACCOUNCE}<br />{L_PNPHPBB2_ENABLE_ACCOUNCE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="pnphpbb2_enable_announce" value="1" {PNPHPBB2_ENABLE_ACCOUNCE_YES} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_enable_announce" value="0" {PNPHPBB2_ENABLE_ACCOUNCE_NO} /> {L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_ANNOUNCEMENT_DURATION}<br />{L_PNPHPBB2_ANNOUNCEMENT_DURATION_EXPLAIN}</td>
<td class="row2">
<input type="text" maxlength="4" size="4" name="pnphpbb2_announcement_duration" value="{PNPHPBB2_ANNOUNCEMENT_DURATION}" class="post" /></td>
</tr>
<!-- BEGIN switch_global_announce -->
<tr>
<td class="row1">{L_PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE}</td>
<td class="row2"><input type="radio" name="pnphpbb2_split_global_announce" value="1" {PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE_YES} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_split_global_announce" value="0" {PNPHPBB2_SPLIT_GLOBAL_ANNOUNCE_NO} /> {L_NO}</td>
</tr>
<!-- END switch_global_announce -->
<tr>
<td class="row1">{L_PNPHPBB2_SPLIT_ANNOUNCE}</td>
<td class="row2"><input type="radio" name="pnphpbb2_split_announce" value="1" {PNPHPBB2_SPLIT_ANNOUNCE_YES} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_split_announce" value="0" {PNPHPBB2_SPLIT_ANNOUNCE_NO} /> {L_NO}</td>
</tr>
<tr>
<td class="row1">{L_PNPHPBB2_SPLIT_STICKY}</td>
<td class="row2"><input type="radio" name="pnphpbb2_split_sticky" value="1" {PNPHPBB2_SPLIT_STICKY_YES} /> {L_YES}&nbsp;&nbsp;
<input type="radio" name="pnphpbb2_split_sticky" value="0" {PNPHPBB2_SPLIT_STICKY_NO} /> {L_NO}</td>
</tr>
<!-- BEGIN switch_xs_config -->
<tr>
<th class="thHead" colspan="2">{L_XS_SETTINGS}</th>
</tr>
<!-- BEGIN switch_updated -->
<tr>
<td class="row3" colspan="2" align="left">{L_XS_UPDATED}<br /><br />{L_XS_UPDATED_EXPLAIN}</td>
</tr>
<!-- END switch_updated -->
<!-- BEGIN switch_xs_warning -->
<tr>
<td class="row3" colspan="2" align="left">{L_XS_WARNING}<br /><br />{L_XS_WARNING_EXPLAIN}</td>
</tr>
<!-- END switch_xs_warning -->
<tr>
<td class="row1">{L_XS_DEF_TEMPLATE}<br />{L_XS_DEF_TEMPLATE_EXPLAIN}</td>
<td class="row2"><input type="text" name="xs_def_template" value="{XS_DEF_TEMPLATE}" /></td>
</tr>
<tr>
<td class="row1">{L_XS_CHECK_SWITCHES}<br />{L_XS_CHECK_SWITCHES_EXPLAIN}</td>
<td class="row2">
<input type="radio" name="xs_check_switches" value="0" <?php echo !$this->vars['XS_CHECK_SWITCHES'] ? 'checked="checked" ' : ''; ?>/> {L_XS_CHECK_SWITCHES_0}<br />
<br />
<input type="radio" name="xs_check_switches" value="2" <?php echo $this->vars['XS_CHECK_SWITCHES'] == 2 ? 'checked="checked" ' : ''; ?>/> {L_XS_CHECK_SWITCHES_2}<br />
<br />
<input type="radio" name="xs_check_switches" value="1" <?php echo $this->vars['XS_CHECK_SWITCHES'] == 1 ? 'checked="checked" ' : ''; ?>/> {L_XS_CHECK_SWITCHES_1}
</td>
</tr>
<tr>
<td class="row1">{L_XS_USE_ISSET}</td>
<td class="row2"><input type="radio" name="xs_use_isset" value="1" <?php echo $this->vars['XS_USE_ISSET'] ? 'checked="checked" ' : ''; ?>/> {L_YES}&nbsp;&nbsp;<input type="radio" name="xs_use_isset" value="0" <?php echo !$this->vars['XS_USE_ISSET'] ? 'checked="checked" ' : ''; ?>/> {L_NO}</td>
</tr>
<tr>
<td class="cat" colspan="2" align="center">{L_XS_SETTINGS_CACHE}</td>
</tr>
<tr>
<td class="row1">{L_XS_USE_CACHE}<br />{L_XS_CACHE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="xs_use_cache" value="1" <?php echo $this->vars['XS_USE_CACHE'] ? 'checked="checked" ' : ''; ?>/> {L_YES}&nbsp;&nbsp;<input type="radio" name="xs_use_cache" value="0" <?php echo !$this->vars['XS_USE_CACHE'] ? 'checked="checked" ' : ''; ?>/> {L_NO}</td>
</tr>
<tr>
<td class="row1">{L_XS_CACHE_DIR}<br />{L_XS_CACHE_DIR_EXPLAIN}</td>
<td class="row2" nowrap="nowrap"><input type="text" name="xs_cache_dir" value="{XS_CACHE_DIR}" /><br />
<br />
<input type="radio" name="xs_cache_dir_absolute" value="1" <?php echo $this->vars['XS_CACHE_DIR_ABSOLUTE'] ? 'checked="checked" ' : ''; ?>/> {L_XS_DIR_ABSOLUTE}<br />
{L_XS_DIR_ABSOLUTE_EXPLAIN}<br />
<input type="radio" name="xs_cache_dir_absolute" value="0" <?php echo !$this->vars['XS_CACHE_DIR_ABSOLUTE'] ? 'checked="checked" ' : ''; ?>/> {L_XS_DIR_RELATIVE}<br />
{L_XS_DIR_RELATIVE_EXPLAIN}
</td>
</tr>
<tr>
<td class="row1">{L_XS_AUTO_COMPILE}<br />{L_XS_AUTO_COMPILE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="xs_auto_compile" value="1" <?php echo $this->vars['XS_AUTO_COMPILE'] ? 'checked="checked" ' : ''; ?>/> {L_YES}&nbsp;&nbsp;<input type="radio" name="xs_auto_compile" value="0" <?php echo !$this->vars['XS_AUTO_COMPILE'] ? 'checked="checked" ' : ''; ?>/> {L_NO}</td>
</tr>
<tr>
<td class="row1">{L_XS_AUTO_RECOMPILE}<br />{L_XS_AUTO_RECOMPILE_EXPLAIN}</td>
<td class="row2"><input type="radio" name="xs_auto_recompile" value="1" <?php echo $this->vars['XS_AUTO_RECOMPILE'] ? 'checked="checked" ' : ''; ?>/> {L_YES}&nbsp;&nbsp;<input type="radio" name="xs_auto_recompile" value="0" <?php echo !$this->vars['XS_AUTO_RECOMPILE'] ? 'checked="checked" ' : ''; ?>/> {L_NO}</td>
</tr>
<tr>
<td class="row1">{L_XS_SEPARATOR}<br />{L_XS_SEPARATOR_EXPLAIN}</td>
<td class="row2"><input type="text" name="xs_separator" value="{XS_SEPARATOR}" /></td>
</tr>
<tr>
<td class="row1">{L_XS_PHP}<br />{L_XS_PHP_EXPLAIN}</td>
<td class="row2"><input type="text" name="xs_php" value="{XS_PHP}" /></td>
</tr>
<!-- END switch_xs_config -->	
<tr>
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" class="liteoption" />
</td>
</tr>
</table></form>
<br clear="all" />
<!-- BEGIN switch_xs_config -->
<table width="99%" cellpadding="4" cellspacing="1" border="0" align="center" class="forumline">
<tr>
<th class="thHead" colspan="2">{L_XS_DEBUG_HEADER}</th>
</tr>
<tr>
<td colspan="2" class="row3" align="center">{L_XS_DEBUG_EXPLAIN}</td>
</tr>
<tr>
<th class="thHead" colspan="2">{L_XS_DEBUG_VARS}</th>
</tr>
<tr>
<td class="row1" align="left">{<b></b>TEMPLATE<b></b>}</td>
<td class="row2" align="left">{TEMPLATE}</td>
</tr>
<tr>
<td class="row1" align="left">{<b></b>PHP<b></b>}</td>
<td class="row2" align="left">{PHP}</td>
</tr>
<tr>
<td class="row1" align="left">{<b></b>TEMPLATE_NAME<b></b>}</td>
<td class="row2" align="left">{TEMPLATE_NAME}</td>
</tr>
<tr>
<td class="row1" align="left">{<b></b>LANG<b></b>}</td>
<td class="row2" align="left">{LANG}</td>
</tr>
<tr>
<th class="thHead" colspan="2">{XS_DEBUG_HDR1}</th>
</tr>
<tr>
<td class="row1" align="left">{L_XS_DEBUG_TPL_NAME}</td>
<td class="row2" align="left">{XS_DEBUG_FILENAME1}</td>
</tr>
<tr>
<td class="row1" align="left">{L_XS_DEBUG_CACHE_FILENAME}</td>
<td class="row2" align="left">{XS_DEBUG_FILENAME2}</td>
</tr>
<tr>
<td class="row1" align="left">{L_XS_DEBUG_DATA}</td>
<td class="row2" align="left">{XS_DEBUG_DATA}</td>
</tr>
<tr>
<th class="thHead" colspan="2">{XS_DEBUG_HDR2}</th>
</tr>
<tr>
<td class="row1" align="left">{L_XS_DEBUG_TPL_NAME}</td>
<td class="row2" align="left">{XS_DEBUG_FILENAME3}</td>
</tr>
<tr>
<td class="row1" align="left">{L_XS_DEBUG_CACHE_FILENAME}</td>
<td class="row2" align="left">{XS_DEBUG_FILENAME4}</td>
</tr>
<tr>
<td class="row1" align="left">{L_XS_DEBUG_DATA}</td>
<td class="row2" align="left">{XS_DEBUG_DATA2}</td>
</tr>
</table>
<!-- END switch_xs_config -->
