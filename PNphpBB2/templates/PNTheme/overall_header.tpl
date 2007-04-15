<!-- BEGIN switch_fullpage -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
<!-- END switch_fullpage -->
{META}
<!-- BEGIN switch_fullpage -->
<title>{SITENAME} :: {PAGE_TITLE}</title>
<html dir="{S_CONTENT_DIRECTION}">
<link rel="stylesheet" href="themes/{CSS_PNTHEME}/style/styleNN.css" type="text/css">
<link rel="stylesheet" href="{CSS_PNPHPBB}" type="text/css">
<style type="text/css">
@import url("themes/{CSS_PNTHEME}/style/style.css");
</style>
<!-- END switch_fullpage -->
<!-- BEGIN switch_enable_pm_popup -->
<script language="javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->
<!-- BEGIN switch_fullpage -->
</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">
<!-- END switch_fullpage -->

<a name="top" id="top"></a>
{SESSIONS}
{FORUM_HEADER}
<table class="bodyline" width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td align="center" valign="top">
      <!-- BEGIN switch_logo_on -->
      <table class="topbkg" width="100%" cellspacing="2" cellpadding="1" border="0">
        <tr>
          <td align="left" valign="top" width="25%"><a href="{U_INDEX}"><img src="templates/{T_THEME_NAME}/images/{THEME_IMAGES}logo_small.gif" border="0" alt="{L_INDEX}" title="{L_INDEX}" {LOGOSIZE} /></a></td>
        </tr>
      </table>
      <!-- END switch_logo_on -->
      <table class="navbar" width="100%" cellspacing="1" cellpadding="2" border="0">
        <tr align="center">
          <td>
            <a href="{U_FAQ}"> {L_FAQ}</a>&nbsp; &#8226;&nbsp;
            <strong><a href="{U_SEARCH}"> {L_SEARCH}</a></strong>&nbsp; &#8226;&nbsp;
            <!-- BEGIN switch_user_logged_in -->
            <a href="{U_MEMBERLIST}"> {L_MEMBERLIST}</a>&nbsp; &#8226;&nbsp; 
            <a href="{U_GROUP_CP}"> {L_USERGROUPS}</a>&nbsp; &#8226;&nbsp;
            <!-- END switch_user_logged_in -->
            <!-- BEGIN switch_user_logged_out -->
            <a href="user.php"> {L_REGISTER}</a>&nbsp; &#8226;&nbsp;
            <!-- END switch_user_logged_out -->
            <!-- BEGIN switch_user_logged_in -->
            <a href="{U_PROFILE}"> {L_PROFILE}</a>&nbsp; &#8226;&nbsp;
            <!-- END switch_user_logged_in -->
            <a href="{U_PRIVATEMSGS}"> {PRIVATE_MESSAGE_INFO}</a>
          </td>
        </tr>
        <tr align="center">
          <td>
            <a href="{U_LOGIN_LOGOUT}"> {L_LOGIN_LOGOUT}</a>
            <!-- BEGIN switch_allow_sub_change -->
            &nbsp;&#8226; &nbsp;<a href="{U_SUBFORUM}"> {L_SUBFORUM}</a>
            <!-- END switch_allow_sub_change -->
            <!-- BEGIN switch_allow_full_page -->
            &nbsp;&#8226; &nbsp;<a href="{U_MIN_MAX}"> {L_MIN_MAX}</a>
            <!-- END switch_allow_full_page -->
            <!-- BEGIN switch_admin -->
            &nbsp;&#8226; &nbsp;<a href="{U_ADMIN_LINK}"> {L_ADMIN_INFO}</a>
            <!-- END switch_admin -->
          </td>
        </tr>
      </table>
	      <br clear="all">
      
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
				<tr>
					<td>
                    