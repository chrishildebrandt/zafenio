/* $Id: default_style.tpl,v 1.4 2004/09/23 17:51:53 carls Exp $ */
/* Based on the original Style Sheet for the PNTheme v2 Theme for phpBB version 2+
Edited by Daz  - http://www.forumimages.com
Updated for use on PNphpBB2 by Carls */

/* General text */
.gensmall
{
  font-size: 11px;

}

.genmed
{
  font-size: 10px;
}

/* titles for the topics:could specify viewed link colour too */
.topictitle
{
  font-size: 11px;
  font-weight: bold;
  text-align: left;

}

a.topictitle:visited
{
  color: {CSS_VLINK};
}

a.topictitle:hover
{
  color: {CSS_HOVER};
}

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name
{
  font-size: 11px;
  font-weight: bold;
}

/* Begin moving tword phpbb 2.2 style data */
p.breadcrumbs
{
  margin: 0px;
  float: left;
  font-weight: bold;
  white-space: normal;
}

p.datetime
{
  margin: 0px;
  float: right;
  white-space: nowrap;
}

/* Added for Mozilla - still need to look at the black background problem though */
iframe
{
  border: 0;
}

hr{border: 0px solid {CSS_COLOR2};border-top-width:1px;height:0px}

/* Form elements */
form
{
  display: inline;
}

input
{
  margin-bottom: 2px;
  margin-top: 2px;
  text-indent: 2px;
}

input,textarea,select
{
  border-color: {CSS_COLOR2};
  color: {CSS_TEXT2};
  font-size: 11px;
}


/* Fancy form styles for IE */
input,textarea,select,input.button
{
  border-width: 1px;
  font: normal 11px Verdana,Arial,Helvetica,sans-serif;
}

/* The buttons used for bbCode styling in message post */
input.button
{
  background-color: {CSS_COLOR1};
  color: {CSS_TEXT1};
}

input.catbutton
{
  background-color:{CSS_COLOR1};
  color: {CSS_TEXT1};
  font-size: 10px;
}

/* None-bold submit button */
input.liteoption
{
  background-color: {CSS_COLOR1};
  color: {CSS_TEXT1};
}

/* The main submit button option */
input.mainoption
{
  background-color: {CSS_COLOR1};
  color: {CSS_TEXT1};
  font-weight:bold;
}

/* The text input fields background colour */
input.post,textarea.post,select
{
  background-color: {CSS_COLOR1};
  color: {CSS_TEXT1};
}

/* Category gradients*/
td.cat
{
  font-weight:bold;
  letter-spacing:1px;
  color: {CSS_TEXT1};
  background-color: {CSS_COLOR3};  
  background-image: url('../cellpics/{CSS_THEMENAME}/cellpic1.jpg');
  height:27px;
}
td.catRupt
{
  font-weight:bold;
  letter-spacing: 1px;
  color: {CSS_TEXT1};
  background-color: {CSS_COLOR3};
  background-image: url('../cellpics/{CSS_THEMENAME}/cellpic1.jpg');
  height:27px;
}

/* Main table cell colours and backgrounds */
td.row1
{
  background-color: {CSS_COLOR1};
  color: {CSS_TEXT1};
}

td.row2
{
  background-color: {CSS_COLOR2};
  color: {CSS_TEXT1};
}

td.row3
{
  background-color: {CSS_COLOR3};
  color: {CSS_TEXT1};
}

td.spacerow
{
  background-color: {CSS_SEPCOLOR};
  color: {CSS_TEXT1};
}

/* This is for the table cell above the Topics,Post & Last posts on the index.php */
td.rowpic
{
  background-color: {CSS_COLOR3};
  background-image: url('../cellpics/{CSS_THEMENAME}/cellpic2.jpg');
  background-repeat: repeat-y;
}

/* Attach mod specific */
td.attachrow
{
  font: normal 11px Verdana, Arial, Helvetica, sans-serif;
  color: {T_BODY_TEXT};
  border-color: {T_BODY_TEXT};
}

td.attachheader
{
  font: normal 11px Verdana, Arial, Helvetica, sans-serif;
  color: {T_BODY_TEXT};
  border-color: {T_BODY_TEXT};
  background-color: {T_TR_COLOR3};
}

table.attachtable
{
  font: normal 12px Verdana, Arial, Helvetica, sans-serif;
  color: {T_BODY_TEXT};
  border-color: {T_BODY_TEXT};
  border-collapse: collapse;
}

/* Header cells */
th.thc, th
{
  background-color: {CSS_COLOR4};
  background-image: url('../cellpics/{CSS_THEMENAME}/cellpic3.jpg');
  font-size: 11px;
  color: {CSS_TEXT2};
  font-weight: bold;
  white-space: nowrap;
  text-align: center;
  height: 27px;
  vertical-align: middle;
}

th.thc a:link, th.thc a:active, th.thc a:visited, th a:link, th a:active, th a:visited
{
  color: {CSS_TEXT2};
  font-size:11px;
  font-weight:bold;
}

th.thc a:hover, th a:hover
{
  color: {CSS_HOVER};
  font-size:11px;
  font-weight:bold;
}

th.thl
{
  background-color: {CSS_COLOR4};
  background-image: url('../cellpics/{CSS_THEMENAME}/cellpic3.jpg');
  font-size: 11px;
  color: {CSS_TEXT2};
  font-weight: bold;
  white-space: nowrap;
  text-align: left;
  height: 27px;
  vertical-align: middle;
}

th.thl a:link, th.thl a:active, th.thl a:visited
{
  color: {CSS_VLINK};
}

th.thl a:hover
{
  color: {CSS_HOVER};
}

/* This is for the error messages that pop up */
.errorline
{
  background-color: {CSS_COLOR4};
  color: {CSS_TEXT1};
  border: 1px solid {CSS_COLOR1};
  text-align: left;
}

/* This is the border line & background colour round the entire page */
.bodyline
{
  background-color: {CSS_COLOR2};
  color: {CSS_TEXT1};
  border: 1px solid {CSS_COLOR3};
  text-align: left;
}

/* This is the outline round the main forum tables */
.forumline
{
  background-color: {CSS_COLOR3};
  color: {CSS_TEXT1};
  border: 1px solid {CSS_COLOR3};
  text-align: left;
}

/* This is the line in the posting page which shows the rollover
help line. This is actually a text box,but if set to be the same
colour as the background no one will know;)*/
.helpline
{
  background-color: {CSS_BACKGROUND};
  border-style: none;
  color: {CSS_TEXT1};
  text-align: left;
}

/* The largest text used in the index page title and toptic title etc. */
.maintitle,h1
{
  font: bold 20px/120% "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
  text-decoration: none;
  text-align: left;
}

/*logo size in header*/
.mainlogo
{
  font: bold 24px/120% "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
  text-decoration: none;
  text-align: left;
}

.logosmall
{
  font: bold 8px/100% "Tr;ebuchet MS",Verdana,Arial,Helvetica,sans-serif;
  text-decoration: none;
  text-align: left;
}

.mainheader
{
  font: bold 16px/100%;
  background-color: {CSS_COLOR4};
  text-align: left;
}

.authheader
{
  background-color: {CSS_COLOR4};
  font-size: 10px;
  text-align: left;
}

/* Used for the navigation text,(Page 1,2,3 etc) and the navigation bar when in a forum */
.nav
{
  font-weight: bold;
  color : {CSS_LINK};
  text-align:left;
}

a.nav
{
  text-decoration: none;
  font-weight: bold;
  color : {CSS_LINK};
  text-align:left;
}

a.nav:hover
{
  text-decoration: underline;
  color : {CSS_HOVER};
}

.postbody
{
  font: 12px/125% Verdana,Arial,Helvetica,sans-serif;
  text-align: left;
}

/* Location,number of posts,post date etc */
.postdetails
{
  color: {CSS_TEXT1};
  font-size: 10px;
  text-align: left;
}

.subtitle,h2
{
  color: {CSS_TEXT1};
  font: bold 18px/180% "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
  text-decoration: none;
  text-align: left;
}

/* This is the gradient background at the top of the page */
/* Not currently used in PNphpBB */
.topbkg
{
  background-image: url('../cellpics/{CSS_THEMENAME}/cellpic_bkg.jpg');
  background-repeat: repeat-x;
}

/* BBCode
 ------------ */
.quotetitle, .attachtitle {
	margin: 10px 5px 0px 5px;
	padding: 4px;
	border-width: 1px 1px 0px 1px;
	border-style: solid;
	border-color: {CSS_COLOR3};
	color: {CSS_TEXT2};
	background-color: {CSS_COLOR2};
	font-size: 0.85em;
	font-weight: bold;
}

.quotetitle .quotetitle {
	font-size: 1em;
}

.quotecontent, .attachcontent {
	margin: 0px 5px 10px 5px;
	padding: 5px;
	border-color: {CSS_COLOR3};
	border-width: 0px 1px 1px 1px;
	border-style: solid;
	font-weight: normal;
	font-size: 1em;
	line-height: 1.4em;
	font-family: "Lucida Grande", "Trebuchet MS", Helvetica, Arial, sans-serif;
	background-color: {CSS_COLOR1};
	color: {CSS_TEXT2};
}
.attachcontent {
	font-size: 0.85em;
}
.codetitle {
	margin: 10px 5px 0px 5px;
	padding: 2px 4px;
	border-width: 1px 1px 0px 1px;
	border-style: solid;
	border-color: {CSS_COLOR3};
	color: {CSS_TEXT2};
	background-color: {CSS_COLOR2};
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 0.8em;
}
.codecontent {
	margin: 0px 5px 10px 5px;
	padding: 5px;
	border-color: {CSS_COLOR3};
	border-width: 0px 1px 1px 1px;
	border-style: solid;
	font-weight: normal;
	color: {CSS_TEXT2};
	font-size: 0.85em;
	font-family: Monaco, 'Courier New', monospace;
	background-color: {CSS_COLOR1};
}
.syntaxbg {
	color: #FFFFFF;
}
.syntaxcomment {
	color: #FF8000;
}
.syntaxdefault {
	color: #0000BB;
}
.syntaxhtml {
	color: #000000;
}
.syntaxkeyword {
	color: #007700;
}
.syntaxstring {
	color: #DD0000;
}

/* Pagination */
.pi_current
{
	background-color: {CSS_COLOR4};
	border: 1px solid {CSS_TEXT1};
	padding: 1px 3px 1px 3px;
	color: {CSS_TEXT1};
	font-size: 10px;
	font-weight: normal;
	margin-right: 1px;
}

.pi_link
{
	background-color: {CSS_COLOR2};
	border: 1px solid {CSS_TEXT1};
	padding: 1px 3px 1px 3px;
	color: {CSS_TEXT1};
	font-size: 10px;
	font-weight: normal;
	margin-right: 1px;
}

.pi_firstlast
{
	background-color: {CSS_COLOR3};
	border: 1px solid {CSS_TEXT1};
	padding: 1px 3px 1px 3px;
	color: {CSS_TEXT1};
	font-size: 10px;
	font-weight: bold;
	margin-right: 1px;
}

.pi_plain
{
  background-color: {CSS_COLOR1};
	border: 1px solid {CSS_TEXT1};
	padding: 1px 3px 1px 3px;
	color: {CSS_TEXT1};
	font-size: 10px;
	font-weight: normal;
	margin-right: 1px;
}

.pi_current a:active,
.pi_current a:visited,
.pi_current a:link,
.pi_link a:active,
.pi_link a:visited,
.pi_link a:link,
.pi_firstlast a:active,
.pi_firstlast a:visited,
.pi_firstlast a:link
{
	text-decoration: none;
	color: {CSS_VLINK};
  font-size: 10px;
	font-weight: normal;
}

/* Inline images */
.inlineimg
{
  vertical-align: middle;
}

.navbar
{
	background-color: {CSS_COLOR3};
	padding: 3px;
	text-align: center;
	white-space: nowrap;
	border-top: 2px solid {CSS_COLOR4};
	border-bottom: 2px solid {CSS_COLOR4};
}

