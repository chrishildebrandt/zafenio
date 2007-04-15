<?php
/* -----------------------------------------------------------------------------
	 PNpnphpbb22 Postnuke search
	 By: Carl Slaughter
	 Updated: 03/24/2003
	 -----------------------------------------------------------------------------
*/

$search_modules[] = array(
   'title' => 'Forums',
   'func_search' => 'search_pnphpbb2',
   'func_opt' => 'search_pnphpbb2_opt');

function search_pnphpbb2_opt($vars)
{
    // load the language file
    pnModLangLoad('PNphpBB2', 'search');

   global $bgcolor1,
        	$bgcolor2,
        	$bgcolor3,
        	$textcolor1,
        	$textcolor2;

		$output = new pnHTML();
    $output->SetInputMode(_PNH_VERBATIMINPUT);

		$output->Text("<table border=\"0\" width=\"100%\"><tr bgcolor=\"$bgcolor2\"><td><font class=\"pn-normal\" style=\"text-color:$textcolor1\"><input type=\"checkbox\" name=\"active_pnphpbb2\" id=\"active_pnphpbb2\" value=\"1\" checked>&nbsp;<label for=\"active_pnphpbb2\">"._SEARCH_FORUMS."</label></font></td></tr></table>");
		return $output->GetOutput();
}

function truncate_text($desctext, $length = 300, $break_words = false)
{
    // load the language file
    pnModLangLoad('PNphpBB2', 'search');

	 $etc = "...<br><br>";
	 $nomoresolinebreak = "<br><br>";

   if ($length == 0)
	 {
	 		return '';
	 }
   if (strlen($desctext) > $length)
	 {
      $length -= strlen($etc);
      $fragment = substr($desctext, 0, $length+1);
      if ($break_words)
			{
			 	 $fragment = substr($fragment, 0, -1);
			}
      else
			{
      	 $fragment = preg_replace('/\s+(\S+)?$/', '', $fragment);
         return $fragment.$etc;
			}
   }
	else
	{
      return $desctext.$nomoresolinebreak;
	}
}

function search_pnphpbb2($vars)
{
    // load the language file
    pnModLangLoad('PNphpBB2', 'search');

   list($startnum,
        $active_pnphpbb2,
				$q,
				$bool) = pnVarCleanFromInput('startnum',
                                      'active_pnphpbb2',
																			'q',
																			'bool');
   if (!$active_pnphpbb2)
	 {
      return;
   }

	 global $bgcolor1,
        	$bgcolor2,
        	$bgcolor3,
        	$bgcolor4,
        	$textcolor1,
        	$textcolor2,
        	$pntable,
					$pnconfig;

	 $ModName = "PNphpBB2";
	 define('IN_PHPBB', true);
	 $phpbb_root_path = "./modules/". $ModName . "/";
	 $table_prefix = $pnconfig[prefix] . "_phpbb_";
	 include($phpbb_root_path . "extension.inc");
	 include_once($phpbb_root_path . "includes/constants." . $phpEx);

	 $output = new pnHTML();

   if (!isset($startnum))
	 {
      $startnum = 1;
   }

   list($dbconn) = pnDBGetConn();
   $pntable = pnDBGetTables();

	 if (empty($bool))
	 {
      $bool = 'OR';
   }

   $flag = false;

	 //do we want every topic to appear just once?
	 $connkeys  	 = "" . TOPICS_TABLE . ".topic_id = " . POSTS_TABLE . ".topic_id";
//	 $connkeys  	 = "" . TOPICS_TABLE . ".topic_last_post_id = " . POSTS_TABLE . ".post_id";

	 $lastvisit  = 0;
	 $viewforums = ""; //list of forums user can see if private
	 $readforums = ""; //list of forums user can look into if private
	 $modforums  = ""; //list of forums where user is moderator
	 $userstate  = 0;  //just for guests

	 if (pnUserLoggedIn())
	 {
			$uid = pnUserGetVar('uid');
			$userstate = AUTH_REG; //permission level for registered users
//			die($uid);
			//are you an board admin?
			$query = "SELECT user_level FROM   " . USERS_TABLE . " WHERE  user_id = $uid";

			$result = $dbconn->Execute($query);

			list($level) = $result->fields;

			if ($level == ADMIN)
			{
			 	 $userstate = AUTH_ADMIN;  //user have complete access
			}
			else
			{
			 	 $query = "SELECT " . AUTH_ACCESS_TABLE . ".forum_id,
				  	 	 		max(" . AUTH_ACCESS_TABLE . ".auth_view),
					 		 		max(" . AUTH_ACCESS_TABLE . ".auth_read),
					 		 		max(" . AUTH_ACCESS_TABLE . ".auth_mod)
				  		 		FROM   " . USER_GROUP_TABLE . " INNER JOIN " . AUTH_ACCESS_TABLE . " ON " . USER_GROUP_TABLE . ".group_id = " . AUTH_ACCESS_TABLE . ".group_id
				  		 		WHERE  " . USER_GROUP_TABLE . ".user_id = $uid
	  			  	 		GROUP BY " . AUTH_ACCESS_TABLE . ".forum_id";

				$result = $dbconn->Execute($query);

				while (list($forum_id, $auth_view, $auth_read, $auth_mod) = $result->fields)
				 {
				    $result->MoveNext();
						//let's make a nice list of forums the user is allowed to view, read and moderate
						if($auth_read | $auth_mod) $readforums .= empty($readforums) ? $forum_id : ", " . $forum_id;
						if($auth_view | $auth_mod) $viewforums .= empty($viewforums) ? $forum_id : ", " . $forum_id;", " . $forum_id;
						if($auth_mod)	$modforums  .= empty($modforums)  ? $forum_id : ", " . $forum_id;", " . $forum_id;
				 }
			}
   }

	 //let's see if we can optimize the query
	 $view_private = !empty($viewforums) ? " OR (" . FORUMS_TABLE . ".auth_view = ". AUTH_ACL . " AND " . TOPICS_TABLE . ".forum_id IN ($viewforums)) " : "";
	 $read_private = !empty($readforums) ? " OR (" . FORUMS_TABLE . ".auth_read = ". AUTH_ACL . " AND " . TOPICS_TABLE . ".forum_id IN ($readforums)) " : "";
	 if (!empty($modforums))
	 {
	 		$view_mod = " OR (" . FORUMS_TABLE . ".auth_view = ". AUTH_MOD . " AND " . TOPICS_TABLE . ".forum_id IN ($modforums)) ";
			$read_mod = " OR (" . FORUMS_TABLE . ".auth_read = ". AUTH_MOD . " AND " . TOPICS_TABLE . ".forum_id IN ($modforums)) ";
	 }
	 else
	 {
		  $view_mod = $read_mod = "";
	 }

	 //now for the main query - plz don't expect me to explain this monster
	 $query = "SELECT
	 					" . TOPICS_TABLE . ".topic_title,
						" . TOPICS_TABLE . ".topic_id,
						" . TOPICS_TABLE . ".forum_id,
						" . TOPICS_TABLE . ".topic_replies,
						" . TOPICS_TABLE . ".topic_views,
						" . USERS_TABLE . ".username,
						" . POSTS_TABLE . ".post_id,
						" . POSTS_TABLE . ".poster_id,
						" . POSTS_TABLE . ".post_time,
						" . POSTS_TEXT_TABLE . ".post_text,
						" . FORUMS_TABLE . ".forum_name,
						" . FORUMS_TABLE . ".cat_id,
						" . CATEGORIES_TABLE . ".cat_title
						FROM ((" . TOPICS_TABLE . "
						INNER JOIN " . POSTS_TABLE . " ON $connkeys)
						INNER JOIN " . USERS_TABLE . " ON " . USERS_TABLE . ".user_id = " . POSTS_TABLE . ".poster_id)
						INNER JOIN " . POSTS_TEXT_TABLE . " ON " . POSTS_TEXT_TABLE . ".post_id = " . POSTS_TABLE . ".post_id
						INNER JOIN " . FORUMS_TABLE . " ON " . FORUMS_TABLE . ".forum_id = " . TOPICS_TABLE . ".forum_id
						INNER JOIN " . CATEGORIES_TABLE . " ON " . CATEGORIES_TABLE . ".cat_id = " . FORUMS_TABLE . ".cat_id
						WHERE (" . FORUMS_TABLE . ".auth_view <= $userstate $view_private $view_mod)
		  			AND   (" . FORUMS_TABLE . ".auth_read <= $userstate $read_private $read_mod)
		  			AND   " . TOPICS_TABLE . ".topic_status <> " . TOPIC_MOVED . "
						AND ";

    $w = search_split_query($q);
    if (isset($w))
		{
     	 foreach ($w as $word)
			 {
          if ($flag)
					{
             switch ($bool)
						 {
                case 'AND' :
                   $query .= ' AND ';
                   break;
                case 'OR' :
                   default :
                   $query .= ' OR ';
                   break;
             }
          }
          $query .= '(';

      		// get post_text and match up forums/topics/posts
   				$query .= POSTS_TEXT_TABLE . ".post_text LIKE '$word'\n";
      		$query .= "and " . POSTS_TABLE . ".post_id=" . POSTS_TEXT_TABLE . ".post_id \n";
   				$query .= "and " . POSTS_TABLE . ".topic_id=" . TOPICS_TABLE . ".topic_id \n";
  				$query .= "and " . TOPICS_TABLE . ".forum_id=" . FORUMS_TABLE . ".forum_id";
      		$query .= ')';
   				$flag = true;
					$no_flag = false;
			 }
		}
		else
		{
     	 $no_flag = true;
    }

   	$query .= " ORDER BY " . POSTS_TABLE . ".post_time DESC";

	 	if ($result = $dbconn->Execute($query))
    {
		 	$total_rows = $result->RecordCount();
    }

	 	if ($total_rows > 100)
	 	{
		 	 $query .= ' LIMIT 100';
	 	}

	 	$result = $dbconn->Execute($query);

   	if(!$result->EOF) {
        $output->Text(_SEARCH_FORUMS_TITLE . ":");
				$output->SetInputMode(_PNH_VERBATIMINPUT);

        $check_duplicate = "TestyTester";
        $output->Text("<ul>");
        while(!$result->EOF)
				{
				   $row = $result->GetRowAssoc(false);
           $row['topic_title'] = stripslashes($row['topic_title']);

           if($row['topic_title'] <> $check_duplicate)
					 {
           	 $output->Text("<li><b><a class=\"pn-normal\" href=\"modules.php?op=modload&name=" . $ModName . "&file=viewtopic&t=" . $row['topic_id'] . "&highlight=" . preg_replace("/%/","",$word) . "\">" . $row['topic_title'] . "</a></b> (" . _SEARCH_FORUMS_REPLIES . ": " . $row['topic_replies'] . " | " . _SEARCH_FORUMS_VIEWS . ": " . $row['topic_views'] . ")<br>");
						 $row['post_text'] = strip_tags($row['post_text']);
             $row['post_text'] = truncate_text($row['post_text']);
             $output->Text("<font class=\"pn-normal\">" . $row['post_text'] . "</font>");
           }
					 else
					 {
           	 $check_duplicate = $row['topic_title'];
					 }
					 $result->MoveNext();
        }

        $output->Text("</ul>\n");
				if ($total_rows > 10)
				{
           $output->Text("<a class=\"pn-normal\" href=\"modules.php?op=modload&name=" . $ModName . "&file=search\">" . _SEARCH_FORUMS_MORE . ".....</a>");
        }
    }
		else
		{
        $output->SetInputMode(_PNH_VERBATIMINPUT);
        $output->Text('<font class="pn-normal">' . _SEARCH_FORUMS_TITLE . ': ' . _SEARCH_FORUMS_NOPOSTS . '</font>');
        $output->SetInputMode(_PNH_PARSEINPUT);
		}
		$output->Linebreak();

		return $output->GetOutput();
}
?>