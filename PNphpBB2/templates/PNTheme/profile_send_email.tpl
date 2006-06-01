<script language="javaScript" type="text/javascript">
<!--
function checkForm(formObj) {

	formErrors = false;    

	if (formObj.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE_EMAIL}";
	}
	else if ( formObj.subject.value.length < 2)
	{
		formErrors = "{L_EMPTY_SUBJECT_EMAIL}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	}
}
//-->
</script>
<form action="{S_POST_ACTION}" method="post" name="post" onsubmit="return checkForm(this)">
{ERROR_BOX}
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2">{L_SEND_EMAIL_MSG}</th>
</tr>
<tr>
<td class="row1" width="22%">{L_RECIPIENT}</td>
<td class="row2" width="78%"><span class="genbold">{USERNAME}</span></td>
</tr>
<tr>
<td class="row1">{L_SUBJECT}</td>
<td class="row2">
<input type="text" name="subject" size="45" maxlength="100" style="width:450px" tabindex="2" class="post" value="{SUBJECT}" />
</td>
</tr>
<tr>
<td class="row1" valign="top">{L_MESSAGE_BODY}<br />
<span class="gensmall">{L_MESSAGE_BODY_DESC}</span></td>
<td class="row2">
<textarea name="message" rows="25" cols="40" style="width:500px" tabindex="3" class="post">{MESSAGE}</textarea>
</td>
</tr>
<tr>
<td class="row1"><strong>{L_OPTIONS}</strong></td>
<td class="row2">
<table cellspacing="0" cellpadding="1" border="0">
<tr>
<td> 
<input type="checkbox" name="cc_email"  value="1" checked="checked" />
</td>
<td>{L_CC_EMAIL}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="cat" colspan="2" align="center">
{S_HIDDEN_FIELDS}<input type="submit" tabindex="6" name="submit" class="mainoption" value="{L_SEND_EMAIL}" />
</td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
</form>
<br clear="all" />
<div align="left">{JUMPBOX}</div>
