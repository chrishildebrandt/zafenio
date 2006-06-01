
<h1>{L_POSTS_DELETE}</h1>

<p>{L_POSTS_DELETE_EXPLAIN}</p>

<form action="{S_POSTS_ACTION}" method="post">
  <table cellpadding="4" cellspacing="1" border="0" class="forumline" align="center" width="400">
	<tr> 
	  <th colspan="2" class="thHead">{L_POSTS_DELETE}</th>
	  </tr>
	<tr> 
	  <td class="row1">{L_FORUM_NAME}</td>
	  <td class="row1"><span class="row1">{NAME}</span></td>
	</tr>
	<tr> 
	  <td class="catBottom" colspan="2" align="center">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="mainoption" /></td>
	</tr>
  </table>
</form>

<!--

	$Log: posts_delete_body.tpl,v $
	Revision 1.1  2004/07/13 19:16:09  carls
	Mod keep unread add
	Updated mod comments to include version and date

	Revision 1.1  2004/01/31 04:44:21  carls
	*** empty log message ***

	Revision 1.1  2003/07/03 22:10:52  carls
	*** empty log message ***

	Revision 1.1  2003/07/03 21:25:03  carls
	Repair missing </form> in multiblock, that prevented user from loggin in with it.
	
	Revision 1.1  2003/06/30 03:34:42  carls64
	*** empty log message ***
	
	Revision 1.1  2002/04/16 03:16:21  darkjedi
	Hinzufügen zweier Templates zum Verscheiben sowie zum Löschen von Posts
	
	

-->
