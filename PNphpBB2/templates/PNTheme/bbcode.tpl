<!-- BEGIN ulist_open --><ul><!-- END ulist_open -->
<!-- BEGIN ulist_close --></ul><!-- END ulist_close -->

<!-- BEGIN olist_open --><ol type="{LIST_TYPE}"><!-- END olist_open -->
<!-- BEGIN olist_close --></ol><!-- END olist_close -->

<!-- BEGIN listitem --><li><!-- END listitem -->

<!-- BEGIN quote_username_open --><table width="90%" cellspacing="1" cellpadding="3" border="0" align="center">
<tr>
<td><span class="genmed"><strong>{USERNAME} {L_WROTE}:</strong></span></td>
</tr>
<tr>
<td class="quote"><!-- END quote_username_open -->
<!-- BEGIN quote_open --><table width="90%" cellspacing="1" cellpadding="3" border="0" align="center">
<tr>
<td><span class="genmed"><strong>{L_QUOTE}:</strong></span></td>
</tr>
<tr>
<td class="quote"><!-- END quote_open -->
<!-- BEGIN quote_close --></td>
</tr>
</table><!-- END quote_close -->
<!-- BEGIN code_open -->
<table width="90%" cellspacing="1" cellpadding="3" border="0" align="center">
<tr>
<td><span class="genmed"><strong>{L_CODE}:</strong></span></td>
</tr>
<tr>
<td class="code">
<!-- END code_open -->
<!-- BEGIN code_close -->
</td>
</tr>
</table>
<!-- END code_close -->
<!-- BEGIN b_open --><span style="font-weight:bold"><!-- END b_open -->
<!-- BEGIN b_close --></span><!-- END b_close -->
<!-- BEGIN u_open --><span style="text-decoration:underline"><!-- END u_open -->
<!-- BEGIN u_close --></span><!-- END u_close -->
<!-- BEGIN i_open --><span style="font-style:italic"><!-- END i_open -->
<!-- BEGIN i_close --></span><!-- END i_close -->
<!-- BEGIN color_open --><span style="color:{COLOR}"><!-- END color_open -->
<!-- BEGIN color_close --></span><!-- END color_close -->
<!-- BEGIN size_open --><span style="font-size:{SIZE}px; line-height:normal"><!-- END size_open -->
<!-- BEGIN size_close --></span><!-- END size_close -->
<!-- BEGIN img --><img src="{URL}" alt="Image" title="Image" border="0" /><!-- END img -->
<!-- BEGIN url --><a href="{URL}" target="_blank" class="postlink">{DESCRIPTION}</a><!-- END url -->
<!-- BEGIN email --><a href="mailto:{EMAIL}">{EMAIL}</a><!-- END email -->
<!-- BEGIN code_new_open -->
<script type="text/javascript">
function selectAll(elementId) { 
  var element = document.getElementById(elementId); 
  if ( document.selection ) { 
    var range = document.body.createTextRange(); 
    range.moveToElementText(element); 
    range.select(); 
  } 
  if ( window.getSelection ) { 
    var range = document.createRange(); 
    range.selectNodeContents(element); 
    var blockSelection = window.getSelection(); 
    blockSelection.removeAllRanges(); 
    blockSelection.addRange(range); 
  } 
} 

function resizeLayer(layerId, newHeight) { 
  var myLayer = document.getElementById(layerId); 
  myLayer.style.height = newHeight + 'px'; 
} 

function codeDivStart() { 
  var randomId = Math.floor(Math.random() * 2000); 
  var imgSrc = '{IMAGE_PATH}/'; 
  document.write('<div class="codetitle">Code:<img src="{IMAGE_PATH}/nav_expand.gif" width="14" height="10" title="{L_CODE_MORE}" onclick="resizeLayer(' + randomId + ', 200)" onmouseover="this.style.cursor = \'pointer\'" /><img src="{IMAGE_PATH}/nav_expand_more.gif" width="14" height="10" title="{L_CODE_EVEN_MORE}" onclick="resizeLayer(' + randomId + ', 500)" onmouseover="this.style.cursor = \'pointer\'" /><img src="{IMAGE_PATH}/nav_contract.gif" width="14" height="10" title="{L_CODE_LESS}" onclick="resizeLayer(' + randomId + ', 50)" onmouseover="this.style.cursor = \'pointer\'" /><img src="{IMAGE_PATH}/nav_select_all.gif" width="14" height="10" title="{L_CODE_SELECT}" onclick="selectAll(' + randomId + ')" onmouseover="this.style.cursor = \'pointer\'" /></div><div class="codediv" id="' + randomId + '">'); 
}
</script>
<div align="center">
<script type="text/javascript">codeDivStart()</script>
<!-- END code_new_open -->
<!-- BEGIN code_new_close --></div></div><!-- END code_new_close -->
