<tr>
  <th>{L_OPTIONS}</th>
  <th><b>{L_QUICK_REPLY}</b></th>
</tr>
<tr>
  <td class="row1" rowspan="1" align="left">
    <form action='{POST_ACTION}' method='post' name='post' onsubmit='return checkForm(this)'>
    <table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td>
          <input type='checkbox' name='quick_quote'>
        </td>
        <td>
          {L_QUOTE_LAST_MESSAGE}
        </td>
      </tr>
      <!-- BEGIN user_logged_in -->
      <tr>
        <td>
          <input type='checkbox' name='attach_sig' {user_logged_in.ATTACH_SIGNATURE}>
        </td>
        <td>
          {L_ATTACH_SIGNATURE}
        </td>
      </tr>
      <tr>
        <td>
          <input type='checkbox' name='notify' {user_logged_in.NOTIFY_ON_REPLY}>
        </td>
        <td>
          {L_NOTIFY_ON_REPLY}
        </td>
      </tr>
      <!-- END user_logged_in -->
    </table>
  </td>
  
  <td class="row1" valign="top">
<script language="JavaScript" type="text/javascript">

// Startup variables
var imageTag = false;
var theSelection = false;

// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav  = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));

var is_moz = 0;

var is_win   = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac    = (clientPC.indexOf("mac")!=-1);

// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]');
imageTag = false;

function openAllSmiles(){
	smiles = window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'height=250,width=300,resizable=yes,scrollbars=yes');
	smiles.focus();
	return false;
}

function openPostImages(){
	postimages = window.open('{U_MORE_POST_IMAGES}', '_postimages', 'height=250,width=300,resizable=yes,scrollbars=yes');
	postimages.focus();
	return false;
}

function quoteSelection() {
	theSelection = false;
	theSelection = document.selection.createRange().text; // Get text selection
	if (theSelection) {
		// Add tags around selection
		text = '[quote]\n' + theSelection + '\n[/quote]\n';
	  if (document.post.message.createTextRange && document.post.message.caretPos) {
		  var caretPos = document.post.message.caretPos;
		  caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		  document.post.message.focus();
	  }else{
		  document.post.message.value  += text;
		  document.post.message.focus();
	  }
    document.post.message.focus();
		theSelection = '';
		return;
	}else{
		alert('{L_NO_TEXT_SELECTED}');
	}
}

function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

function checkForm() {
	formErrors = false;
	if (document.post.message.value.length < 2) {
		formErrors = '{L_EMPTY_MESSAGE}';
	}
	if (formErrors) {
		alert(formErrors);
		return false;
	}else{
		if (document.post.quick_quote.checked) {
			document.post.message.value = document.post.last_msg.value + document.post.message.value;
		} 
		document.post.quick_quote.checked = false;
		return true;
	}
}
<!-- BEGIN adv_quick_reply -->
// Replacement for arrayname.length property
function getarraysize(thearray) {
	for (i = 0; i < thearray.length; i++) {
		if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null))
			return i;
		}
	return thearray.length;
}

// Replacement for arrayname.push(value) not implemented in IE until version 5.5
// Appends element to the array
function arraypush(thearray,value) {
	thearray[ getarraysize(thearray) ] = value;
}

// Replacement for arrayname.pop() not implemented in IE until version 5.5
// Removes and returns the last element of an array
function arraypop(thearray) {
	thearraysize = getarraysize(thearray);
	retval = thearray[thearraysize - 1];
	delete thearray[thearraysize - 1];
	return retval;
}

function bbfontstyle(bbopen, bbclose) {
	var txtarea = document.post.message;

	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			txtarea.value += bbopen + bbclose;
			txtarea.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		txtarea.focus();
		return;
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbopen, bbclose);
		return;
	}
	else
	{
		txtarea.value += bbopen + bbclose;
		txtarea.focus();
	}
	storeCaret(txtarea);
}

function bbstyle(bbnumber) {
	var txtarea = document.post.message;

  txtarea.focus();
	donotinsert = false;
	theSelection = false;
	bblast = 0;

	if (bbnumber == -1) { // Close all open tags & default button names
		while (bbcode[0]) {
			butnumber = arraypop(bbcode) - 1;
			txtarea.value += bbtags[butnumber + 1];
			buttext = eval('document.post.addbbcode' + butnumber + '.value');
			eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
		}
		imageTag = false; // All tags are closed including image tags :D
		txtarea.focus();
		return;
	}

	if ((clientVer >= 4) && is_ie && is_win)
	{
		theSelection = document.selection.createRange().text; // Get text selection
		if (theSelection) {
			// Add tags around selection
			document.selection.createRange().text = bbtags[bbnumber] + theSelection + bbtags[bbnumber+1];
			txtarea.focus();
			theSelection = '';
			return;
		}
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbtags[bbnumber], bbtags[bbnumber+1]);
		return;
	}
	
	// Find last occurance of an open tag the same as the one just clicked
	for (i = 0; i < bbcode.length; i++) {
		if (bbcode[i] == bbnumber+1) {
			bblast = i;
			donotinsert = true;
		}
	}

	if (donotinsert) {		// Close all open tags up to the one just clicked & default button names
		while (bbcode[bblast]) {
				butnumber = arraypop(bbcode) - 1;
				txtarea.value += bbtags[butnumber + 1];
				buttext = eval('document.post.addbbcode' + butnumber + '.value');
				eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
				imageTag = false;
			}
			txtarea.focus();
			return;
	} else { // Open tags
	
		if (imageTag && (bbnumber != 14)) {		// Close image tag before adding another
			txtarea.value += bbtags[15];
			lastValue = arraypop(bbcode) - 1;	// Remove the close image tag from the list
			document.post.addbbcode14.value = "Img";	// Return button back to normal state
			imageTag = false;
		}
		
		// Open tag
		txtarea.value += bbtags[bbnumber];
		if ((bbnumber == 14) && (imageTag == false)) imageTag = 1; // Check to stop additional tags after an unclosed image tag
		arraypush(bbcode,bbnumber+1);
		eval('document.post.addbbcode'+bbnumber+'.value += "*"');
		txtarea.focus();
		return;
	}
	storeCaret(txtarea);
}

// From http://www.massless.org/mozedit/
function mozWrap(txtarea, open, close)
{
	var selLength = txtarea.textLength;
	var selStart = txtarea.selectionStart;
	var selEnd = txtarea.selectionEnd;
	if (selEnd == 1 || selEnd == 2) 
		selEnd = selLength;

	var s1 = (txtarea.value).substring(0,selStart);
	var s2 = (txtarea.value).substring(selStart, selEnd)
	var s3 = (txtarea.value).substring(selEnd, selLength);
	txtarea.value = s1 + open + s2 + close + s3;
	return;
}
<!-- END adv_quick_reply -->
//-->
</script>
  
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <!-- BEGIN adv_quick_reply -->
      <tr align="center">
        <td>
          <input type="button" class="button" value="&nbsp;B&nbsp;" accesskey="b" name="addbbcode0" style="font-weight:bold;" onclick="bbstyle(0)" />&nbsp;
          <input type="button" class="button" value="&nbsp;i&nbsp;" accesskey="i" name="addbbcode2" style="font-style:italic;" onclick="bbstyle(2)" />&nbsp;
          <input type="button" class="button" value="&nbsp;u&nbsp;" accesskey="u" name="addbbcode4" style="text-decoration: underline;" onclick="bbstyle(4)" />&nbsp;
          <input type="button" class="button" value="Quote" accesskey="q" name="addbbcode6" onclick="bbstyle(6)" />&nbsp;
          <input type="button" class="button" value="Code" accesskey="c" name="addbbcode8" onclick="bbstyle(8)" />&nbsp;
          <input type="button" class="button" value="List" accesskey="l" name="addbbcode10" onclick="bbstyle(10)" />&nbsp;
          <input type="button" class="button" value="List=" accesskey="o" name="addbbcode12" onclick="bbstyle(12)" />&nbsp;
          <input type="button" class="button" value="IMG" accesskey="p" name="addbbcode14" onclick="bbstyle(14)" />&nbsp;
          <input type="button" class="button" value="URL" accesskey="w" name="addbbcode16" onclick="bbstyle(16)" />
        </td>
      </tr>
      <!-- END adv_quick_reply -->
      <tr>
        <td class='row1' valign='top'>
          <textarea name='message' rows="6" cols="80" style="width:100%" tabindex='1' class='post' onselect='storeCaret(this);' onclick='storeCaret(this);' onkeyup='storeCaret(this);'></textarea>
        </td>
      </tr>
      <tr align="center" >
        <td>
          <input type="button" class="button" value="{L_POST_IMAGE}" accesskey="m" name="post_images" onclick="openPostImages();">&nbsp;
          <input type="button"  class="button" value="{L_ADD_SMILIES}" name="smiles_all" onclick="openAllSmiles();">&nbsp;
          <input type="button" class="button" value="{L_QUOTE_SELECTED}" name="quoteselected" onclick="javascript:quoteSelection();">
        </td>
      </tr>
      <tr align="center" >
        <td>
          <input type="submit" class="liteoption" value="{L_PREVIEW}" name="preview">&nbsp;
          <input type="submit" class="mainoption" value="{L_SUBMIT}" accesskey="s" name="post">
          <input type='hidden' name='mode' value='reply'>
          <input type='hidden' name='t' value='{TOPIC_ID}'>
          <input type='hidden' name='subject' value='{SUBJECT}'>
          <input type='hidden' name='last_msg' value='{LAST_MESSAGE}'>
          <input type='hidden' name='postimageselect' value=''>
          <input type="hidden" name="sid" value="{SID}">  
        </td>
      </tr>
    </table>
    </form>
  </td>
</tr>
