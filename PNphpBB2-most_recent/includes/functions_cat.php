<?php
// Begin PNphpBB2 Categories Hierarchie Mod
//
// enhance categories informations : description, last post, numbers of posts/topics, and so
function enhance_cat($cat_id)
{
//-- fix v 1.0.6
	global $HTTP_COOKIE_VARS, $category_rows, $forum_data, $is_auth_ary, $tracking_forums, $tracking_topics, $new_topic_data, $images, $lang, $board_config, $userdata, $phpEx;
//--

	if ($cat_id < 0) $cat_id=0;

	// default values
	$ind = -1;
	//-- v 1.0.5
	$categories_desc = ''; // all the sub-cat titles
	$forums_desc = ''; // all the sub-forum titles
	//--
	$cat_display = false;
	$cat_locked = true;
	$cat_unread_topics = false;
	$cat_posts = 0;
	$cat_topics = 0;
	$cat_post_time = 0;
	$cat_last_post = '';

	// look up for sub-categories
	for ($i=0; $i < count($category_rows); $i++)
	{
		// let's fix the cat_main : attached to  index : lvl 0
		if ($category_rows[$i]['cat_main']==$category_rows[$i]['cat_id']) $category_rows[$i]['cat_main'] = 0;

		// get the tab index for $cat_id
		if ( ($cat_id > 0) && ($category_rows[$i]['cat_id']==$cat_id) ) $ind = $i;

		// identify category which are daughters of the one running
		if ( $category_rows[$i]['cat_main']==$cat_id && $category_rows[$i]['cat_id']>0 )
		{
			// enhance sub-categories
			enhance_cat($category_rows[$i]['cat_id']);

			// get the result
			//-- v 1.0.5
			$categories_desc .= empty($categories_desc) ? '':', ';
			$categories_desc .= $category_rows[$i]['cat_title'];
			//--
			if ( $category_rows[$i]['cat_display'] ) $cat_display = true;
			if ( !($category_rows[$i]['cat_locked']) ) $cat_locked = false;
			if ( $category_rows[$i]['unread_topics'] ) $cat_unread_topics = true;
			$cat_posts = $cat_posts + $category_rows[$i]['posts'];
			$cat_topics = $cat_topics + $category_rows[$i]['topics'];
			if ( $cat_post_time < $category_rows[$i]['post_time']) 
			{
				$cat_post_time = $category_rows[$i]['post_time'];
				$cat_last_post = $category_rows[$i]['last_post'];
			}
		} //  if ($category_rows[$i]['cat_main']==$cat_id) || ( ($cat_id==0) && ($category_rows[$i]['cat_main']==$category_rows[$i]['cat_id']) )
	} // for ($i=0; $i < count($category_rows); $i++)

	// deal with the forums of the category
	if ($ind > -1)
	{
		// Raz
		$category_rows[$ind]['cat_display'] = false;
		$category_rows[$ind]['cat_locked'] = true;
		$category_rows[$ind]['unread_topics'] = false;
		$category_rows[$ind]['posts'] = 0;
		$category_rows[$ind]['topics'] = 0;
		$category_rows[$ind]['post_time'] = 0;
		$category_rows[$ind]['last_post'] = '';

		// look up for the forums of the category
		for ($j=0;$j<count($forum_data);$j++)
		{
			if ($forum_data[$j]['cat_id'] == $cat_id)
			{
				$forum_id = $forum_data[$j]['forum_id'];

				// valeur par défaut
				$display_forum = false;
				$unread_topics = false;
				$last_post = "";

				// forum visible ?
				if ( $display_forum = $is_auth_ary[$forum_id]['auth_view'] )
				{
					if ($forum_data[$j]['forum_status'] != FORUM_LOCKED)
					{
						if ( $userdata['session_logged_in'] && !empty($new_topic_data[$forum_id]) )
						{
							$forum_last_post_time = 0;
							while( list($check_topic_id, $check_post_time) = @each($new_topic_data[$forum_id]) )
							{
								if ( empty($tracking_topics[$check_topic_id]) )
								{
									$unread_topics = true;
									$forum_last_post_time = max($check_post_time, $forum_last_post_time);
								}
								else
								{
									if ( $tracking_topics[$check_topic_id] < $check_post_time )
									{
										$unread_topics = true;
										$forum_last_post_time = max($check_post_time, $forum_last_post_time);
									}
								}
							} //  end while( list($check_topic_id, $check_post_time) = @each($new_topic_data[$forum_id]) )
							if ( !empty($tracking_forums[$forum_id]) )
							{
								if ( $tracking_forums[$forum_id] > $forum_last_post_time )
								{
									$unread_topics = false;
								}
							}
							if ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all']) )
							{
								if ( $HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f_all'] > $forum_last_post_time )
								{
									$unread_topics = false;
								}
							}
						} //  if ( $userdata['session_logged_in'] && !empty($new_topic_data[$forum_id]) )
					} //  if ($forum_data[$j]['forum_status'] != FORUM_LOCKED)

					$posts = $forum_data[$j]['forum_posts'];
					$topics = $forum_data[$j]['forum_topics'];

					$last_post = $lang['No_Posts'];
					if ( $forum_data[$j]['forum_last_post_id'] )
					{
						$last_post_time = create_date($board_config['default_dateformat'], $forum_data[$j]['post_time'], $board_config['board_timezone']);
						$last_post = $last_post_time . '<br />';
// Begin PNphpBB2 Module
						$last_post .= ( $forum_data[$j]['user_id'] == ANONYMOUS ) ? ( ($forum_data[$j]['post_username'] != '' ) ? pnVarPrepForDisplay($forum_data[$j]['post_username']) . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $forum_data[$j]['user_id']) . '">' . pnVarPrepForDisplay($forum_data[$j]['username']) . '</a> ';
// End PNphpBB2 Module
						$last_post .= '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
					}

				} //  if ($display_forums = $is_auth_ary[$forum_data[$j]['forum_id']]['auth_view'])

				// enhanced forum row
				$forum_data[$j]['display_forum'] = $display_forum;
				$forum_data[$j]['unread_topics'] = $unread_topics;
				$forum_data[$j]['last_post'] = $last_post;

				// ok : add forum informations to the category
				if ($forum_data[$j]['display_forum'])
				{
					//-- v 1.0.5
					$forums_desc .= empty($forums_desc) ? '':', ';
// Begin PNphpBB2 Module
					$forums_desc .= '<a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id") . '">' . $forum_data[$j]['forum_name'] . '</a>';
// End PNphpBB2 Module
					//--
					$category_rows[$ind]['cat_display'] = true;
					if ( $forum_data[$j]['forum_status'] != FORUM_LOCKED ) $category_rows[$ind]['cat_locked'] = false;
					if ( $forum_data[$j]['unread_topics'] ) $category_rows[$ind]['unread_topics'] = true;
					$category_rows[$ind]['posts'] = $category_rows[$ind]['posts'] + $forum_data[$j]['forum_posts'];
					$category_rows[$ind]['topics'] = $category_rows[$ind]['topics'] + $forum_data[$j]['forum_topics'];
					if ( $forum_data[$j]['post_time'] > $category_rows[$ind]['post_time']) 
					{
						$category_rows[$ind]['post_time'] = $forum_data[$j]['post_time'];
						$category_rows[$ind]['last_post'] = $forum_data[$j]['last_post'];
					}
				} //  if ($display_forum)
			} // if ($forum_data['cat_id'] == $cat_id)
		} // for ($j=0;$j<count($forum_data);$j++)

		// all is done for the forums : add the sub-categories informations
		//-- v 1.0.5
		if ( empty($category_rows[$ind]['cat_desc']) )
		{
			$category_rows[$ind]['cat_desc']  = $forums_desc;
			$category_rows[$ind]['cat_desc'] .= ( empty($forums_desc) || empty($categories_desc) ) ? '': ', ';
			$category_rows[$ind]['cat_desc'] .= $categories_desc;
		}
		//--
		if ( $cat_display ) $category_rows[$ind]['cat_display'] = true;
		if ( !$cat_locked ) $category_rows[$ind]['cat_locked'] = false;
		if ( $cat_unread_topics ) $category_rows[$ind]['unread_topics'] = true;
		$category_rows[$ind]['posts'] = $category_rows[$ind]['posts'] + $cat_posts;
		$category_rows[$ind]['topics'] = $category_rows[$ind]['topics'] + $cat_topics;
		if ( $cat_post_time > $category_rows[$ind]['post_time']) 
		{
			$category_rows[$ind]['post_time'] = $cat_post_time;
			$category_rows[$ind]['last_post'] = $cat_last_post;
		}
	} // if ($ind > -1)
} // function enhance_cat_forum

function display_index_cat($catrow, $sub_forum, $main, $cur_depth = 0)
{
	global $total_categories, $category_rows, $total_forums, $forum_data, $forum_moderators, $images, $lang, $template, $phpEx;
	global $max_depth;
	if ( $sub_forum ) $cur_depth = 0;

	$cat_id = $catrow['cat_id'];
	if ($catrow['cat_display'])
	{
		// display cat title
// Begin PNphpBB2 Module
//		$class_catLeft = "catLeft";
// 		$class_catLeft = "cat";		
// End PNphpBB2 Module
// 		$class_rowpic  = "rowpic";
//		if (!$sub_forum && $main)
//		{
//			$class_catLeft = "catRupt";
//			$class_rowpic  = "catRupt";
//		}
		$template->assign_block_vars('catrow', array(
			'INC_SPAN'		=> $max_depth-$cur_depth + 2,
/* Begin PNphpBB2 Module */
/*			'CLASS_CATLEFT' => $class_catLeft, */
/*			'CLASS_ROWPIC'  => $class_rowpic, */
/* End PNphpBB2 Module */
			'CAT_ID'        => $cat_id,
			'CAT_DESC'      => $catrow['cat_title'],
			'U_VIEWCAT'     => append_sid("index.$phpEx?" . POST_CAT_URL . "=$cat_id"))
		);
		$color = true;
		$inc_row = true;
		for ($k=0; $k < $cur_depth; $k++ ) 
		{
			$template->assign_block_vars('catrow.inc', array('INC_ROW' => $inc_row ? "row1" : "row2" ) );
			$inc_row = !$inc_row;
		}

		// display forums
		for($j = 0; $j < $total_forums; $j++)
		{
			if ( ($forum_data[$j]['cat_id']==$cat_id) && $forum_data[$j]['display_forum'] )
			{
				$forum_id = $forum_data[$j]['forum_id'];
				$folder_image = ( $forum_data[$j]['unread_topics'] ) ? $images['forum_new'] : $images['forum']; 
				$folder_alt   = ( $forum_data[$j]['unread_topics'] ) ? $lang['New_posts'] : $lang['No_new_posts']; 
				if ($forum_data[$j]['forum_status'] == FORUM_LOCKED )
				{
					$folder_image = $images['forum_locked']; 
					$folder_alt = $lang['Forum_locked'];
				}
				$l_moderators = '&nbsp;';
				$moderator_list = '&nbsp;';
				if ( count($forum_moderators[$forum_id]) > 0 )
				{
					$l_moderators = ( count($forum_moderators[$forum_id]) == 1 ) ? $lang['Moderator'] : $lang['Moderators'];
					$moderator_list = implode(', ', $forum_moderators[$forum_id]);
				}
// Begin PNphpBB2 Module
				$row_color = ( $color ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
				$row_class = ( $color ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module
				$color = !$color;
				$odd = ( $sub_forum || ( intval($cur_depth / 2) == ($cur_depth/2) ) );
				$template->assign_block_vars('catrow.forumrow',	array(
					'INC_SPAN'		=> $max_depth-$cur_depth+1,
					'INC_ROW'		=> ( $odd ? "row1" : "row2" ),
					'ROW_COLOR' => '#' . $row_color,
					'ROW_CLASS' => $row_class,
					'FORUM_FOLDER_IMG' => $folder_image, 
					'FORUM_NAME' => $forum_data[$j]['forum_name'],
					'FORUM_DESC' => $forum_data[$j]['forum_desc'],
					'POSTS' => $forum_data[$j]['forum_posts'],
					'TOPICS' => $forum_data[$j]['forum_topics'],
					'LAST_POST' => $forum_data[$j]['last_post'],
					'MODERATORS' => $moderator_list,
					'L_MODERATOR' => $l_moderators, 
					'L_FORUM_FOLDER_ALT' => $folder_alt, 
					'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"))
				);
				$inc_row = true;
				for ($k=0; $k < $cur_depth; $k++ ) 
				{
					$template->assign_block_vars('catrow.forumrow.inc', array('INC_ROW' => $inc_row ? "row1" : "row2" ) );
					$inc_row = !$inc_row;
				}
			} //  if ( ($forum_data[$j]['cat_id']==$cat_id) && $forum_data[$j]['display_forum'] )
		} //  for($j = 0; $j < $total_forums; $j++)

		// display sub-cat title 
		for ($j=0; $j < $total_categories; $j++)
		{
			if (($category_rows[$j]['cat_main']==$cat_id) && ($category_rows[$j]['cat_display']))
			{
				if (!$sub_forum)
				{
					display_index_cat($category_rows[$j], $sub_forum, false, $cur_depth+1);
				}
				if ($sub_forum)
				{
					$subcat_id = $category_rows[$j]['cat_id'];
					$folder_image = ( $category_rows[$j]['unread_topics'] ) ? $images['category_new'] : $images['category']; 
					$folder_alt   = ( $category_rows[$j]['unread_topics'] ) ? $lang['New_posts'] : $lang['No_new_posts']; 
					if ($category_rows[$j]['cat_locked'] )
					{
						$folder_image = $images['category_locked']; 
						$folder_alt = $lang['Forum_locked'];
					}
// Begin PNphpBB2 Module
					$row_color = ( $color ) ? $phpbb_theme['td_color1'] : $phpbb_theme['td_color2'];
					$row_class = ( $color ) ? $phpbb_theme['td_class1'] : $phpbb_theme['td_class2'];
// End PNphpBB2 Module
					$color = !$color;
					$template->assign_block_vars('catrow.forumrow',	array(
						'INC_ROW'   => "row1",
						'ROW_COLOR' => '#' . $row_color,
						'ROW_CLASS' => $row_class,
						'FORUM_FOLDER_IMG' => $folder_image, 
						'FORUM_NAME' => $category_rows[$j]['cat_title'],
						'FORUM_DESC' => $category_rows[$j]['cat_desc'],
						'POSTS' => $category_rows[$j]['posts'],
						'TOPICS' => $category_rows[$j]['topics'],
						'LAST_POST' => $category_rows[$j]['last_post'],
						'MODERATORS' => "",
						'L_MODERATOR' => "", 
						'L_FORUM_FOLDER_ALT' => $folder_alt, 
						'U_VIEWFORUM' => append_sid("index.$phpEx?" . POST_CAT_URL . "=$subcat_id"))
					);
				} //  if ($sub_forum)
			} //  if ($category_rows[$j]['cat_main']==$cat_id)
		} // for ($j=0; $j < $total_categories; $j++)
	} //  if ($catrow['cat_display'])
} // end function display_index_cat($catrow, $sub_forum, $main)
// End PNphpBB2 Categories Hierarchie Mod
?>
