<?php
/***************************************************************************
 * Module        : PNphpBB2 (The forum for Postnuke)
 * Filename      : pninit.php
 * Copyright     : (C) 2003 The PNphpBB Group
 * Contact       : support@pnphpbb.com
 *               : http://www.pnphpbb.com
 *
 * Initialize the PNphpBB2 module and setup datasets
 *
 * $Id: pninit.php,v 1.12 2004/10/18 13:42:20 carls Exp $
 *
 ***************************************************************************/
 
// Check for AutoTheme

// modification mouzaia .71
$cWhereIsPerso = WHERE_IS_PERSO;
if ( !(empty($cWhereIsPerso)) ) { 
	include("modules/NS-Multisites/head.inc.php"); 
} else {
	$thistheme = pnVarPrepForOs(pnUserGetTheme());
	global $themesarein;
	if (@file(WHERE_IS_PERSO . "themes/" . $thistheme . "/theme.php")) {
		$themesarein = WHERE_IS_PERSO;
	} else {
		$themesarein = "";
	}
}
if ( @file($themesarein . "themes/" . $thistheme . "/theme.cfg") )
{
  $ModName = basename( dirname( __FILE__ ) );
  $phpbb_root_path = './modules/' . $ModName . '/';
  define('IN_PHPBB', true);
  include($phpbb_root_path.'extension.inc');
	$starttime = 0;
  // Get PostNuke's Default Language and use this for PNphpBB2 default.
  if (!function_exists('getPNlanguage'))
  {
    include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
  }
  $language = getPNlanguage();

  // If no language files exist for PostNuke language then use english
  if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx))
  {
    $language = "english";
  }

  define('PNPHPBB_INSTALL', true);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);
  if ( !empty($lang['AutoTheme_Support']) )
  {
    echo $lang['AutoTheme_Support'];
  }
  else
  {
    echo "You are using AutoTheme, please select a non-AutoTheme theme to perforum the install/upgrade/removal.";
  }
  die;
}

function PNphpBB2_init()
{
  global $phpbb_root_path, $table_prefix, $lang, $modversion;

  list($dbconn) = pnDBGetConn();
  $pntable = pnDBGetTables();
  
  $ModName = basename( dirname( __FILE__ ) );
  $phpbb_root_path = './modules/' . $ModName . '/';
  define('IN_PHPBB', true);
  include($phpbb_root_path.'extension.inc');
  $table_prefix = pnConfigGetVar('prefix') . "_phpbb_";

  // Get PostNuke's Default Language and use this for PNphpBB2 default.
  if (!function_exists('getPNlanguage'))
  {
    include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
  }
  $language = getPNlanguage();

  // If no language files exist for PostNuke language then use english
  if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx))
  {
    $language = "english";
  }

  define('PNPHPBB_INSTALL', true);
  include_once($phpbb_root_path . "pnversion.php");
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_main.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);

	include_once($phpbb_root_path . 'install/includes/functions_install.' . $phpEx);

  $upgrade = pnVarCleanFromInput('UpgradephpBB2');

  if ($upgrade == "Cancel")
  {
    return false;
  }

  // Check for the existance of the PNphpBB2 forum database if it does not 
  // exist then create it.
  $dbms = pnConfigGetVar('dbtype');
  $dbhost = pnConfigGetVar('dbhost');
  $dbname = pnConfigGetVar('dbname');
  $dbuser = pnConfigGetVar('dbuname');
  $dbpasswd = pnConfigGetVar('dbpass');
 	$id = pnModGetIDFromName($ModName);

  // Determin if the user already has an older version of the forum installed
  // in phpbb_ rather than the new way.

  $test = $dbconn->Execute("SELECT user_id FROM " . $table_prefix . "users");
  if ($test)
  {
    define('PHPBB_INSTALLED', true);
    $test->Close();
  }
   
  // Check to see if a stand alone phpBB table set exists
  // only if a PNphpBB table set does not (Helps to eliminate duplicate code)
  if ( !defined("PHPBB_INSTALLED") )
  {
    $test = $dbconn->Execute("SELECT user_id FROM phpbb_users");
    if ($test)
    {
      define('OLD_PHPBB_INSTALLED', true);
      $test->Close();
    }
  }
  
  // Code to check to make sure proper files/directories are writable.
  // modules/PNphpBB2/templates/PNTheme/styles
  // modules/PNphpBB2/templates/PNTheme/cellpics
  $check = pnVarCleanFromInput('writable');

  if ( $check <> "good" && empty($upgrade) )
  {
    page_header($lang['PNphpBB2_Install'], 'index.php?module=Modules&amp;type=admin&amp;func=initialise&amp;id=' . $id . '&amp;authid=' . pnSecGenAuthKey());

    page_common_text($lang['Write_Perm_Desc'], "left", true);
    page_common_text("-", "center");

    $file = $phpbb_root_path . "templates/PNTheme/styles";
    
    if ( $ModName == "PNphpBB2" ) 
    {
      echo "              <tr>\n";
      echo "                <td align=\"left\">\n";
      echo "                  <img src='" . $phpbb_root_path . "install/green_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_1'] . "</font>\n";
      echo "                </td>\n";
      echo "              </tr>\n";
      $baddir = 0;
    }
    else
    {
      echo "              <tr>\n";
      echo "                <td align=\"left\">\n";
      echo "                  <img src='" . $phpbb_root_path . "install/red_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_2'] . "</font>\n";
      echo "                </td>\n";
      echo "              </tr>\n";
      $baddir = 1;
    } 

    if ( is_writable($file) ) 
    {
      echo "              <tr>\n";
      echo "                <td align=\"left\">\n";
      echo "                  <img src='" . $phpbb_root_path . "install/green_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_3'] . "</font>\n";
      echo "                </td>\n";
      echo "              </tr>\n";
      $chmod = 0;
    }
    else
    {
      echo "              <tr>\n";
      echo "                <td align=\"left\">\n";
      echo "                  <img src='" . $phpbb_root_path . "install/red_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_4'] . "</font>\n";
      echo "                </td>\n";
      echo "              </tr>\n";
      $chmod = 1;
    } 
  
    $file = $phpbb_root_path . "templates/PNTheme/cellpics";
    
    if ( is_writable($file) ) 
    {
      echo "              <tr>\n";
      echo "                <td align=\"left\">\n";
      echo "                  <img src='" . $phpbb_root_path . "install/green_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_5'] . "</font>\n";
      echo "                </td>\n";
      echo "              </tr>\n";
      $chmod = 0;
    }
    else
    {
      echo "              <tr>\n";
      echo "                <td align=\"left\">\n";
      echo "                  <img src='" . $phpbb_root_path . "install/red_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_6'] . "</font>\n";
      echo "                </td>\n";
      echo "              </tr>\n";
      $chmod = 1;
    } 

    page_common_text("-", "center");

    if ($chmod == 1 || $baddir == 1 )
    {
      if ( $chmod == 1 )
      {
        page_common_text($lang['Write_Perm_Correct'] . "<br>", "left", true);
      }
      if ( $baddir == 1 )
      {
        page_common_text($lang['Location_Correct'] . "  " . $lang['Current_Location'] . ".modules/" . $ModName, "left", true);
      }
      page_common_text($lang['Please_Correct'], "left", true);

      echo "              <tr>\n";
      echo "                <td align=\"center\">\n";
      echo "                  <br><input type=\"hidden\" name=\"writable\" value=\"check\"><input type=\"submit\" value=\"" . $lang['Re_Check'] . "\">\n";
      echo "                </td>\n";
      echo "              </tr>\n";
    }
    else
    {
      if ($chmod == 0)
      {
        page_common_text($lang['Write_Perm_Good'], "left", true);
        echo "              <tr>\n";
        echo "                <td align=\"center\">\n";
        echo "                  <br><input type=\"hidden\" name=\"writable\" value=\"good\"><input type=\"submit\" value=\"" . $lang['Check_Continue'] . "\">\n";
        echo "                </td>\n";
        echo "              </tr>\n";
      }
    } 
    page_footer();
    exit;
  }
  
  if ( !defined("PHPBB_INSTALLED") && !defined("OLD_PHPBB_INSTALLED") || $upgrade == "New" )
  {
    include('./modules/' . $ModName . '/install/install.' . $phpEx);
    return true;
  }

  // Check to see if we need to upgrade an existing install or convert from a stand alone
  // version of phpBB.

  // We need to not only look in the OLD prefix, but the new preofix.
  // The may be a better way to dtermin this but I am setteling for the easy way
  // right now :-)
   
  // Check the OLD locations first because if we are upgrading we need to know this!
   
  if (defined('OLD_PHPBB_INSTALLED'))
  {
    $version_info=$dbconn->Execute("SELECT config_value FROM " . $modversion['old_table_prefix'] . "config WHERE config_name = 'version'");
  }
  else
  {
    $version_info=$dbconn->Execute("SELECT config_value FROM " . $table_prefix . "config WHERE config_name = 'version'");
  }

  if ($version_info)
  {
    list($version) = $version_info->fields;
    $version_info->Close();
  }
  else
  {
    if (in_array('PNphpBB2_no_version',$lang))
    {
      die($lang['PNphpBB2_no_version']);
    }
    else
    {
      die("Could not obtain version information.");
    }
  }
 
  if (defined('OLD_PHPBB_INSTALLED'))
  {
    $attachmod_install=$dbconn->Execute("SELECT config_name FROM " . $modversion['old_table_prefix'] . "attachments_config WHERE config_name = 'attach_version'");
  }
  else
  {
    $attachmod_install=$dbconn->Execute("SELECT config_name FROM " . $table_prefix . "attachments_config WHERE config_name = 'attach_version'");
  }

  if ($attachmod_install)
  {
    list($attach_version) = $attachmod_install->fields;
    $attachmod_install->Close();
    if ( (int) str_replace(".","",$attach_version) < (int) str_replace(".","", $modversion['attach_version']))
    {
      define('ATTACH_UPDATE', true);
    }
  }
  else
  {  
    define('ATTACH_INSTALL', true);
  }
  
  $vercheck = intval( substr($version,3,2) );
  
  if ($vercheck > 0)
  {
    define("PNPHPBB2_UPGRADE", true);
  }
  else
  {
    page_header($lang['PNphpBB2_Install'], 'index.php');
    page_common_text($lang['PNphpBB2_bad_version'] . $version, "center", true, true);
    page_common_form('', $lang['PNphpBB2_Done']);
    page_footer();
    return false;
  }

  if (defined("OLD_PHPBB_INSTALLED") && empty($upgrade))
  {
    // Old prefix information found. Ask if we are upgrading a stand alone version of phpBB2 or older version
    // PNphpBB2 or phpBB2pnmod-F, 203, 203-Attachments
     
    page_header($lang['PNphpBB2_Install'], 'index.php?module=Modules&amp;type=admin&amp;func=initialise&amp;id=' . $id . '&amp;authid=' . pnSecGenAuthKey());

    echo "              <tr>\n";
    echo "                <td align=\"center\">\n";
    echo "                  <font style=\"font-size:150%;\"><b>" . $lang["PNphpBB2_Important"] . "</b></font>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"center\">\n";
    echo "                  <font color=\"red\"><b>" . $lang["PNphpBB2_phpBB_Tables_Found"] . "</b></font>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"center\">\n";
    echo "                  <b><font style=\"font-size:120%;\">" . $lang["PNphpBB2_three_options"] . "</font></b>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"left\">\n";
    echo "                  <input type=\"radio\" name=\"UpgradephpBB2\" value=\"Module\">\n";
    echo "                  <font style=\"font-size:110%;\">" . $lang["PNphpBB2_option_one"] . "</font>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"left\">\n";
    echo "                  <input type=\"radio\" name=\"UpgradephpBB2\" value=\"phpBB\">\n";
    echo "                  <font style=\"font-size:120%;\">" . $lang["PNphpBB2_option_two"] . "</font>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"left\">\n";
    echo "                  <input type=\"radio\" name=\"UpgradephpBB2\" value=\"New\">\n";
    echo "                  <font style=\"font-size:120%;\">" . $lang["PNphpBB2_option_three"] . "</font>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"left\">\n";
    echo "                  <input type=\"radio\" name=\"UpgradephpBB2\" value=\"Cancel\" checked>\n";
    echo "                  <font style=\"font-size:120%;\">" . $lang["PNphpBB2_option_four"] . "</font>\n";
    echo "                  <br><br>\n";
    echo "                </td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td colspan=\"3\" align=\"left\"><font style=\"font-size:120%;\">" . $lang["PNphpBB2_Upgrade_Disclaimer"] . "</font></td>\n";
    echo "              </tr>\n";
    echo "              <tr>\n";
    echo "                <td align=\"center\">\n";
    echo "                  <br><input  type=\"submit\" name=\"Continue\" value=\"" . $lang["Submit"] . "\" style=\"font-size: 12pt; font-weight: bold\">\n";
    echo "                </td>\n";
    echo "              </tr>\n";

    page_footer();
    return false;
  }

  if ($upgrade == "phpBB")
  {
    define('PHPBB2_TO_PNPHPBB2', true);
  }

  if (!file_exists($phpbb_root_path . 'install/'))
  {
    return true;
  }
   

  if (defined("PNPHPBB2_UPGRADE") || defined("ATTACH_INSTALL") || defined("ATTACH_UPDATE") || empty($upgrade) )
  {
    // We need to upgrade versions
    include("./modules/$ModName/install/pnphpbb2_update.$phpEx");
  }
  return true;
}

// ***************************************************
// * upgrade the PNphpBB2 module from an old version *
// ***************************************************

function PNphpBB2_upgrade()
{
  global $phpbb_root_path, $table_prefix, $lang, $modversion;
  // Same code is used for both install and upgrades so we call the 
  // init function and return the results ;-)

  return PNphpBB2_init();
}

// ******************************
// * Delete the PNphpBB2 module *
// ******************************

function PNphpBB2_delete()
{
  global $phpbb_root_path, $table_prefix, $lang, $modversion;

  list($dbconn) = pnDBGetConn();
  $pntable = pnDBGetTables();
  
  $ModName = basename( dirname( __FILE__ ) );
  $phpbb_root_path = './modules/' . $ModName . '/';
  define('IN_PHPBB', true);
	$starttime = 0;
  include($phpbb_root_path.'extension.inc');

  $table_prefix = pnConfigGetVar('prefix') . "_phpbb_";

  // Get PostNuke's Default Language and use this for PNphpBB2 default.
  if (!function_exists('getPNlanguage'))
  {
    include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
  }
  $language = getPNlanguage();

  // If no language files exist for PostNuke language then use english
  if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx))
  {
    $language = "english";
  }

  define('PNPHPBB_INSTALL', true);
  include_once($phpbb_root_path . "pnversion.php");
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_main.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);

	include_once($phpbb_root_path . 'install/includes/functions_install.' . $phpEx);

  $remove_pnphpbb = pnVarCleanFromInput('remove');
  $cancel = pnVarCleanFromInput('cancel');
  
  if ( $cancel )
  {
    pnredirect('index.php?module=Modules&type=admin&func=list');
  }
  
  if ( $remove_pnphpbb )
  {
    define('IN_PHPBB', true);
    define('LOADED_AS_MODULE', true);
    $ok_to_remove_pnphpbb2 =  pnVarCleanFromInput('ok_to_remove_pnphpbb2');

    if ( $remove_pnphpbb && $ok_to_remove_pnphpbb2 == "whynot" )
    {
	    include($phpbb_root_path . "install/remove_pnphpbb2.$phpEx");
      return $removed;
    }
    else
    {
      pnredirect("index.$phpEx");
 	    exit;
    }
  }
  
  $dbms = pnConfigGetVar('dbtype');
  $dbhost = pnConfigGetVar('dbhost');
  $dbname = pnConfigGetVar('dbname');
  $dbuser = pnConfigGetVar('dbuname');
  $dbpasswd = pnConfigGetVar('dbpass');

 	$id = pnModGetIDFromName($ModName);

  $test = $dbconn->Execute("SELECT user_id FROM " . $table_prefix . "users");
  if ($test)
  {
    define('PHPBB_INSTALLED', true);
    $test->Close();
  }
 
  if (!defined("PHPBB_INSTALLED") || !file_exists($phpbb_root_path . 'install/remove_pnphpbb2.' . $phpEx))
  {
    // Assume PNphpBB2 has been removed, or the remove script does not exist.
    // Return to PostNuke and allow to be removed from module list
    return true;
  }

  page_header($lang['PNphpBB2_Remove_Prompt'], "index.php?module=Modules&amp;type=admin&amp;func=remove&amp;id=" . $id . "&amp;authid=". pnSecGenAuthKey(), "remove");
  page_common_text("-", "center");

  page_common_text(sprintf($lang["PNphpBB2_Remove_Text"],$table_prefix), "center", true);
  page_common_text("-", "center");
	
	echo "					  <tr>\n"; 
	echo "			 			  <td align=\"center\" colspan=\"2\">\n";
	echo "							  <input type=\"submit\" name=\"remove\" value=\"" . $lang["PNphpBB2_Remove_Prompt"] . "\" style=\"font-size: 120%;\" />&nbsp;&nbsp;&nbsp;\n";
	echo "							  <input type=\"submit\" name=\"cancel\" value=\"" . $lang["PNphpBB2_Cancel"] . "\" style=\"font-size: 120%; font-weight: bold\"/>\n";
	echo "								<input type=\"hidden\" name=\"ok_to_remove_pnphpbb2\" value=\"whynot\" />\n";
	echo "							</td>\n";
	echo "						</tr>\n";

  page_footer();
  // CloseTable();
  // include 'footer.php';
  exit;
}

$ModName = basename( dirname( __FILE__ ) );
if ($ModName <> "PNphpBB2")
{
  list($dbconn) = pnDBGetConn();
  $pntable = pnDBGetTables();
  
  $ModName = basename( dirname( __FILE__ ) );
  $phpbb_root_path = './modules/' . $ModName . '/';
  define('IN_PHPBB', true);
	$starttime = 0;
  include($phpbb_root_path.'extension.inc');
  $table_prefix = pnConfigGetVar('prefix') . "_phpbb_";
 	$id = pnModGetIDFromName($ModName);

  // Get PostNuke's Default Language and use this for PNphpBB2 default.
  if (!function_exists('getPNlanguage'))
  {
    include_once($phpbb_root_path . 'includes/functions.' . $phpEx);
  }
  $language = getPNlanguage();

  // If no language files exist for PostNuke language then use english
  if ( !file_exists($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx))
  {
    $language = "english";
  }

  define('PNPHPBB_INSTALL', true);
  include_once($phpbb_root_path . "pnversion.php");
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_main.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_admin.' . $phpEx);
  include_once($phpbb_root_path . 'language/lang_' . $language . '/lang_pnphpbb2_admin.' . $phpEx);

	include_once($phpbb_root_path . 'install/includes/functions_install.' . $phpEx);

  page_header($lang['PNphpBB2_Install'], 'index.php?module=Modules&amp;type=admin&amp;func=regenerate&amp;authid=' . pnSecGenAuthKey());

  page_common_text($lang['Write_Perm_Desc'], "left", true);
  page_common_text("-", "center");

  echo "                <td align=\"left\">\n";
  echo "                  <img src='" . $phpbb_root_path . "install/red_check.gif'  alt='' border='0' align='absmiddle'><font class=\"pn-title\">" . $lang['Write_Perm_2'] . "</font>\n";
  echo "                </td>\n";
  echo "              </tr>\n";

  page_common_text("-", "center");

  page_common_text($lang['Location_Correct'] . "  " . $lang['Current_Location'] . ".modules/" . $ModName, "left", true);
//  page_common_text($lang['Please_Correct'], "left", true);

  echo "              <tr>\n";
  echo "                <td align=\"center\">\n";
  echo "                  <br><input type=\"hidden\" name=\"writable\" value=\"check\"><input type=\"submit\" value=\"" . _REGENERATE . "\">\n";
  echo "                </td>\n";
  echo "              </tr>\n";

  page_footer();
  exit;
}

?>