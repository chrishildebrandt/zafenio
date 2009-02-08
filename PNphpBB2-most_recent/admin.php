<?php
//PNphpBB2

define('IN_PHPBB', true);
$ModName = basename( dirname( __FILE__ ) );
$phpbb_root_path = './modules/' . $ModName . '/';
include($phpbb_root_path . 'extension.inc');

if (!pnSecAuthAction(1, 'PNphpBB2::', '::', ACCESS_ADMIN)) {
   pnredirect("index.$phpEx");
}
$remove_pnphpbb = pnVarCleanFromInput('remove');

if ( $remove_pnphpbb )
{
  $ok_to_remove_pnphpbb2 =  pnVarCleanFromInput('ok_to_remove_pnphpbb2');
  $remove_cancel =  pnVarCleanFromInput('cancel');

  if ( $remove_pnphpbb && $ok_to_remove_pnphpbb2 == "whynot" && !$remove_cancel )
  {
	  include($phpbb_root_path . "install/remove_pnphpbb2.$phpEx");
	  exit;
  }
  else
  {
    pnredirect("index.$phpEx");
 	  exit;
  }
}

$pnadmin = pnVarCleanFromInput('pnadmin'); 

if (ereg("admin_",$pnadmin))
{
  include($phpbb_root_path . "admin/" . $pnadmin . "." .$phpEx);
 exit;
}
else		
{
  include($phpbb_root_path . "admin/index." . $phpEx);
  exit;
}

?>
