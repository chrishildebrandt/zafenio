#
# Basic DB data for PNphpBB2 devel
#
# $Id: pnphpbb2_mysql_basic.sql,v 1.7 2004/10/06 19:51:23 carls Exp $

# -- PNphpBB2 Module Config parms
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_version', '1.2g');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_logo_on', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_quickreply', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_shorturls', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_post_confirm', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_post_order', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_allow_full_page', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_full_page','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_pn_pm','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_template_compiler','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_members_online','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_members_online_annon','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_allow_sub_change','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_sub_forum','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_enable_announce','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_split_global_announce','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_announcement_duration','7');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_split_announce','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_split_sticky','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_post_images','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_pn_link', "");
INSERT INTO phpbb_config (config_name, config_value) VALUES ('pnphpbb2_pn_text', "");

# -- User post edit time
INSERT INTO phpbb_config (config_name, config_value) VALUES ('edit_time', '0');

# -- Theme matching
INSERT INTO phpbb_config (config_name, config_value) VALUES ('theme_matching', '0');

# -- eXtreme Styles mod
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_cache_dir', 'cache');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_cache_dir_absolute', 0);
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_auto_compile', 1);
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_auto_recompile', 1);
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_use_cache', 1);
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_separator', '/');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_php', "php");
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_def_template', 'PNTheme');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_use_isset', 1);
INSERT INTO phpbb_config (config_name, config_value) VALUES ('xs_check_switches', 1);

# -- Topic and Post icons
ALTER TABLE phpbb_posts ADD COLUMN post_icon TINYINT (2) UNSIGNED DEFAULT '0' NOT NULL; 
ALTER TABLE phpbb_topics ADD COLUMN topic_icon TINYINT (2) UNSIGNED DEFAULT '0' NOT NULL; 

# -- Forum sub-categories
ALTER TABLE phpbb_categories ADD cat_main MEDIUMINT(8) UNSIGNED DEFAULT '0' NOT NULL;
ALTER TABLE phpbb_categories ADD cat_desc TEXT NOT NULL;

# -- Forum sort options
ALTER TABLE phpbb_forums ADD COLUMN topic_sort_order TINYINT (2) DEFAULT '0' NOT NULL;
ALTER TABLE phpbb_forums ADD COLUMN post_sort_order TINYINT (2) DEFAULT '0' NOT NULL;

# -- Support Status
ALTER TABLE phpbb_forums ADD COLUMN support_forum TINYINT (1) DEFAULT '0' NOT NULL;
ALTER TABLE phpbb_topics ADD COLUMN support_status TINYINT (3) DEFAULT '0' NOT NULL; 

# -- Exclude forum from global announcments
ALTER TABLE phpbb_forums ADD COLUMN exclude_global_announce TINYINT (1) DEFAULT '0' NOT NULL;
