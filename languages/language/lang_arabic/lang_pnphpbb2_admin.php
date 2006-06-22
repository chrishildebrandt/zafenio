<?php
/***************************************************************************
 *                       lang_pnphpbb2_admin.php [English]
 *                       ---------------------------------
 *     begin                : Tue March 16 2003
 *     update               : Sun October 11 2004
 *     copyright            : (C) 2003-2004 the PNphpBB Group
 *     email                : support@pnphpbb.com
 *
 *     $Id: lang_pnphpbb2_admin.php,v 1.14 2004/10/15 20:56:40 carls Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
//

if ( defined('PNPHPBB_INSTALL') )
{
  // Installation
  $lang['PNphpBB2_Install'] = "ÊÑßíÈ ÇáPNphpBB2 ";
  $lang['PNphpBB2_Installed'] = "Çá PNphpBB2 ãæÌæÏ æäÔØ";
  $lang['PNphpBB2_Install_Title'] = "ÊÑßíÈ ÌÏÇæá Çá PNphpBB2 Çáì %s*";
  $lang['PNphpBB2_Install_Complete']  = "<b>áŞÏ Êã ÇáÊÑßíÈ ÇáÇÓÇÓí ááPNphpBB2 </b><br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "ÅÖÛØ Úáì  " . $lang['Finish_Install'] . " ááÚæÏÉ Çáì ÕİÍÉ ÇáÇÏÇÑÉ ÇáÑÆíÓíÉ İí ÇáãæŞÚ æãä Ëã ÊäÔíØ Çá PNphpBB2.<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "ÈÅãßÇäß ÇáÏÎæá Çáì ÕİÍÉ ÅÚÏÇÏÇÊ ÇáãäÊÏíÇÊ ãä ÎáÇá ÕİÍÉ ÇáÇÏÇÑÉ İí ÇáãæŞÚ Ãæ ãä ÎáÇá ÇáÑÇÈØ ÇáãæÌæÏ İí ÕİÍÉ ÇáãäÊÏì<br /><br />";
  $lang['PNphpBB2_Install_Complete'] .= "íÑÌì ÇáÊÍŞŞ ãä ÇáÇÚÏÇÏÇÊ ÇáÚÇãÉ ááãäÊÏíÇÊ ŞÈá ÇáÇÓÊÎÏÇã æÔßÑ áÃÓÊÎÏÇãß Çá PNphpBB2.</b>";
  $lang['Populate_DB_phpBB'] = "ÅäÔÇÁ ÇáÌÏÇæá ÈÅÓÊÎÏÇã ÇáÈíÇäÇÊ ÇáÇİÊÑÇÖíÉ";
  $lang['Populate_DB_PNphpBB'] = "ÅäÔÇÁ ÌÏÇæá Çá PNphpBB ÈÅÓÊÎÏÇã ÇáãÚáæãÇÊ ÇáãÍÏÏÉ";
  $lang['Populate_DB_Admin'] = "ÅÖÇİÉ ãÚáæãÇÊ ÇáãÔÑİ İí ÇáÌÏÇæá";
  $lang['AutoTheme_Support'] = "İíãÇ íÈÏæ Ãäß ÊÓÊÎÏã ÊÕãíãÇ ÅäÔÆ ÈæÇÓØÉ  AutoTheme <br>åäÇß ãÔÇßá ãÚÑæİÉ ÚäÏ ÊÑßíÈ Çá PNphpBB ÅĞÇ ßäÊ ÊÓÊÎÏã Çá AutoTheme.</br> íÑÌì ÇáÊÍæíá Çáì ÊÕãíã áÇíÓÊÎÏã åĞÇ ÇáÈÑäÇãÌ æŞã ÈÚãáíÉ ÇáÊÑßíÈ / ÇáÊÍÏíË/ ÇáÊÑŞíÉ / ÇáÇÒÇáÉ æãä Ëã íãßäß ÇáÊÍæíá ãÌÏÏÇ Çáì åĞÇ ÇáÊÕãíã<br><br>ÔßÑÇ áß<br> PNphpBB "; 

  // Write permitions for styles and cellpics
  $lang['Write_Perm_Desc'] = "íÊã ÇáÊÍŞŞ ãä ãßÇä æÌæÏ ÇáÈÑäÇãÌ ÇáãáÍŞ æßĞáß ãä ÇáÕáÇÍíÇÊ Úáì ÇáãÌáÏÇÊ";
  $lang['Write_Perm_1'] = "ãßÇä ÇáÈÑäÇãÌ ÇáãáÍŞ ÕÍíÍ";
  $lang['Write_Perm_2'] = "íÌÈ Ãä íæÖÚ ÇáÈÑäÇãÌ ÇáãáÍŞ İí ÇáãÌáÏ ÇáÊÇáí modules/PNphpBB2.";
  $lang['Write_Perm_3'] = "./modules/PNphpBB2/templates/PNTheme/styles ŞÇÈá ááßÊÇÈÉ";
  $lang['Write_Perm_4'] = "./modules/PNphpBB2/templates/PNTheme/styles ÛíÑ ŞÇÈá ááßÊÇÈÉ";
  $lang['Write_Perm_5'] = "./modules/PNphpBB2/templates/PNTheme/cellpics ŞÇÈá ááßÊÇÈÉ";
  $lang['Write_Perm_6'] = "./modules/PNphpBB2/templates/PNTheme/cellpics ÛíÑ ŞÇÈá ááßÊÇÈÉ";
  $lang['Check_Continue'] = "ÅÓÊãÑÇÑ";
  $lang['Re_Check'] = "ÅÚÇÏÉ ÇáÊÍŞŞ";  
  $lang['Write_Perm_Correct'] = "ÇáãÌáÏÇÊ ÈÇáÇÚáì íÌÈ Ãä Êßæä ŞÇÈáÉ ááßÊÇÈÉ ãä ÎáÇá Çá PNphpBB.";
  $lang['Location_Correct'] = "íÌÈ Ãä íßæä ÇáPNphpBB2 İí ÇáãÌáÏ PNphpBB2 ÊÍÊ ÇáãÌá modules.";
  $lang['Current_Location'] = "áŞÏ ŞãÊ ÈæÖÚå İí: ";
  $lang['Write_Perm_Good'] = "ßá ÔíÁ íÈÏæ ÌíÏÇ ... íÑÌì ÇáÖÛØ Úáì  <u>ÅÓÊãÑÇÑ</u>.";
  $lang['Please_Correct'] = "íÑÌì ÅÕáÇÍ ÇáãÔÇßá æãä Ëã ÇáÖÛØ Úáì <u>ÅÚÇÏÉ ÇáÊÍŞŞ</u>.";

  // Update
  $lang['PNphpBB2_Upgrade'] = "ÊÍÏíË ÇáPNphpBB2 ";
  $lang['PNphpBB2_Move_Tables_No'] = "ÇáÌÏÇæá ãæÌæÏÉ ÍÇáíÇ İí  %s*.<br /><br />ÇáÌÏÇæá %s* áÇíãßä äŞáåÇ.";
  $lang['PNphpBB2_Move_Tables_Yes'] = "äŞá ÇáÌÏÇæá Çáì ÇáãßÇä ÇáÌÏíÏ";
  $lang['PNphpBB2_Delete_Users'] = "ÅÒÇáÉ ÇáÇÚÖÇÁ ãä ÇáÈæÓÊ äíæß ÈÅÓÊËäÇÁ ÇáãÔÑİíä";
  $lang['PNphpBB2_Delete_Groups'] = "ãÓÍ ÃÑŞÇã ÇáÇÚÖÇÁ ãä ÌÏæá ãÌãæÚÇÊ ÇáÚÖæíÉ";
  $lang['PNphpBB2_Populate_Users'] = "ÅäÔÇÁ ÌÏÇæá ÇáÇÚÖÇÁ æÇáãÌãæÚÇÊ İí ÇáÈæÓÊ äíæß ÈÅÓÊÎÏÇã ÃÚÖÇÁ Çá phpBB ";
  $lang['PNphpBB2_Database_Type'] = "äæÚ ŞæÇÚÏ ÇáÈíÇäÇÊ";
  $lang['PNphpBB2_Update_phpBB'] = "ÊÍÏíË ÅÕÏÇÑ  Çá phpBB ÑŞã %s Çáì %s";
  $lang['PNphpBB2_Update_PNphpBB'] = "ÊÍÏíË ÅÕÏÇÑ Çá PNphpBB ÑŞã %s Çáì %s";
  $lang['PNphpBB2_Update_Attach'] = "ÊÍÏíË ÈÑäÇãÌ ÇáãÑİŞÇÊ ãä ÇáÇÕÏÇÑ %s Çáì %s";
  $lang['PNphpBB2_Install_PNphpBB'] = "ÇáŞíÇã ÈÚãáíÇÊ ÇáÊÛííÑ áŞæÇÚÏ ÇáÈíÇäÇÊ ÇáÎÇÕÉ ÈÇá PNphpBB %s ";
  $lang['PNphpBB2_Optimize_Analyze'] = 'ÊÍÓíä ÇáÌÏÇæá';
  $lang['PNphpBB2_Update_Schemas'] = "ÊÍÏíË ŞæÇÚÏ ÇáÈíÇäÇÊ";
  $lang['PNphpBB2_No_Updates'] =  "áÇíæÌÏ ÊÍÏíËÇÊ ÖÑæÑíÉ";
  $lang['PNphpBB2_Update_Data'] = "ÊÍÏíË ÇáÈíÇäÇÊ";
  $lang['PNphpBB2_Attach'] = "ÅÕÏÇÑ ÈÑäÇãÌ ÇáãÑİŞÇÊ ";
  $lang['PNphpBB2_Updating_Paths'] = "ÊÍÏíË ÌÏæá ÇáÇÚÏÇÏÇÊ config table";
  $lang['PNphpBB2_Delete_Themes'] = "ãÓÍ ãÚáæãÇÊ ÇáÊÕãíã æ ÇáÔßá ÇáŞÏíãÉ themes/style ";
  $lang['PNphpBB2_Install_Themes'] = "ÊÑßíÈ ÇáÊÕãíã ÇáÌÏíÏ (PNTheme)";
  $lang['PNphpBB2_Board_Theme'] = "ÊÍÏíÏ ÇáÊÕãíã ÇáÇİÊÑÇÖí ÈÍíË íßæä åæ  PNTheme";
  $lang['PNphpBB2_User_Theme'] = "ÊÍÏíÏ ÇáÊÕãíã ÇáÇİÊÑÇÖí áßá ÇáÇÚÖÇÁ Çáì PNTheme";
  $lang['PNphpBB2_Clear_Sessions'] = "ãÓÍ ÌãíÚ ãÚáæãÇÊ ÇáÒíÇÑÇÊ æÇáÏÎæá sessions  ãä ÌÏÇæá Çá sessions ";
  $lang['PNphpBB2_Cant_SQL'] = "CAN'T CHANGE MSSQL-TABLE. PLEASE DO THE FOLLOWING MANUALLY:<br />IN PHPBB_QUOTA_LIMITS, CHANGE QUOTA_LIMIT TO FROM INT TO BIGINT.</p>";
  $lang['PNphpBB2_Update_Complete'] = "áŞÏ ÅßÊãá ÊÍÏíË Çá PNphpBB2 ";
  $lang['PNphpBB2_Update_Complete'] .= "ÅĞÇ ÍÕáÊ Ãí ÃÎØÇÁ ÎáÇá åĞå ÇáÚãáíÉ íÑÌì ØÈÇÚÉ ÕİÍÉ ÇáÇÎØÇÁ æãä Ëã ÒíÇÑÉ www.pnphp.com Ãæ www.fayez2.comááÏÚã æÇáãÓÇÚÏÉ .<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "ÊÃßÏ ãä Ãäß ŞÏ äÔØÊ åĞÇ ÇáÈÑäÇãÌ ÇáãáÍŞ ŞÈá ÇáãæÇÕáÉ æãä Ëã ãÑÇÌÚÉ ßá ÇáÇÚÏÇÏÇÊ İí ÕİÍÉ ÇáÇÏÇÑÉ<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "ÅĞÇ ÑßÈ ÈÑäÇãÌ ÇáãÑİŞÇÊ ÎáÇá åĞå ÇáÚãáíÉ İíÑÌì Ãä ÊäÔØå áßí ÊÊãßä ãä ÅÓÊÎÏÇãå.<br /><br />";
  $lang['PNphpBB2_Update_Complete'] .= "<b>ÔßÑÇ áÇÓÊÎÏÇãß PNphpBB!</b>";
  $lang['PNphpBB2_phpBB_Tables_Found'] = "áŞÏ æÌÏ ÇáÈÑäÇãÌ Ãä ÌÏÇæá ÇáphpBB_* ãæÌæÏÉ ÍÇáíÇ İí ŞæÇÚÏ ÈíÇäÇÊ ÇáÈæÓÊ äíæß Åäå ãä ÇáÖÑæÑí ";
  $lang['PNphpBB2_phpBB_Tables_Found'] .= " Ãä Êİåã ãÇÓíŞæã ÈÚãáå åĞÇ ÇáÈÑäÇãÌ.";
  $lang['PNphpBB2_three_options'] = "áÏíß ÃÑÈÚÉ ÎíÇÑÇÊ İí åĞå ÇááÍÙÉ";
  $lang['PNphpBB2_option_one'] = "1. ÇáÊÑŞíÉ ãä ÇáÇÕÏÇÑ ÇáÓÇÈŞ ãä Çá PNphpBB2 Ãæ phpBB2pnmod";
  $lang['PNphpBB2_option_two'] = "2. ÇáÊÍæíá ãä ÇáÇÕÏÇÑ ÇáãÓÊŞá ãä  phpBB ( 2.0.x) Åáì PNphpBB2";
  $lang['PNphpBB2_option_three'] = "3. Úãá ÊÑßíÈ ÌÏíÏ áá PNphpBB2";
  $lang['PNphpBB2_option_four'] = "3. ÇáÛÇÁ ÇáÊÑßíÈ";
  $lang['PNphpBB2_Upgrade_Disclaimer'] = "íÑÌì ãáÇÍÙÉ  <font color=\"red\"><b>ÇáÊÍĞíÑÇÊ ÇáÊÇáíÉ</b></font><br /><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>ÅÎÊíÇÑ ÇáÎíÇÑ ÇáËÇäí </b> ÓíãÓÍ ßá ÇáÇÚÖÇÁ ãä ŞæÇÚÏ ÇáÈíÇäÇÊ ÇáÍÇáíÉ ÇáÎÇÕÉ ÈÇáÈæÓÊ äíæß æÓíŞæã ÈÅÖÇİÉ ÇáÇÚÖÇÁ ÇáãæÌæÏíä İí ÌÏÇæá Çá phpBB2 </br><br />";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "<b>ÅÎÊíÇÑ ÇáÎíÇÑ ÇáËÇáË</b> ÓíÑßÈ äÓÎÉ ÌÏíÏÉ ãä Çá PNphpBB2 æÓíÊÑß ÌÏÇæá ÇáphpBB_* ÇáÍÇáíÉ ÇáãæÌæÏÉ İí ŞæÇÚÏ ÈíÇäÇÊ ÇáÈæÓÊ äíæß</br></br>";
  $lang['PNphpBB2_Upgrade_Disclaimer'] .= "ÈãÌÑÏ Ãä íÊã åĞÇ áä íßæä åäÇß ÎØ ÑÌÚÉ ãä åĞÇ ÇáÊÍÏíË İÚáíß Ãä Êßæä ãÊÃßÏ ãä Ãäß ŞÏ ŞãÊ ÈÚãá äÓÎÉ ÅÍÊíÇØíÉ ãä ŞæÇÚÏ ÇáÈíÇäÇÊ ÇáÎÇÕÉ ÈÈÑäÇãÌí PostNuke æ phpBB2 ";
  $lang['PNphpBB2_bad_version']  = "ãÔßáÉ İí ÇáÇÕÏÇÑ<br /><br />åĞÇ ÇáÊÍæíá íÏÚã İŞØ phpBB ÇáãÓÊŞá Ğæ ÇáÇÕÏÇÑ 2.0.1 Ãæ ÃÚáì<br /><br />";
  $lang['PNphpBB2_bad_version'] .= "ÓÊÍÕá Úáì ÎØÇÁ ÅĞÇ ßäÊ ÊÍÇæá ÊÍæíá phpBB 2.1.x(2.2) <br /><br />";
  $lang['PNphpBB2_bad_version'] .= "ãÚáæãÇÊ ÇáÇÕÏÇÑ ÇáÊí æÌÏåÇ ÇáÈÑäÇãÌ: ";
  $lang['PNphpBB2_no_version'] = "áã íÓÊØÚ ÇáÈÑäÇãÌ ÅíÌÇÏ ãÚáæãÇÊ ÇáÇÕÏÇÑ";
  $lang['PNphpBB2_Updating_links'] = "ÊÍÏíË ÑæÇÈØ ÇáãÔÇÑßÇÊ";

  // Removal
  $lang['PNphpBB2_Remove_Prompt'] = "ÅÒÇáÉ  PNphpBB2";
  $lang['PNphpBB2_Removed'] = "ÊãÊ ÅÒÇáÉ ÇáPNphpBB2 ";
  $lang['PNphpBB2_Remove_Text'] = "ÃäÊ Úáì æÔß ÅÒÇáÉ Çá PNphpBB2 æÌãíÚ ÌÏÇæáå ãä  PostNuke (%s*).<br /><br />ÓÊİŞÏ ÌãíÚ ÇáãÚáæãÇÊ ÇáãÑÊÈØÉ Èå! åá ÃäÊ ãÊÃßÏ ãä Ğáß¿";
  $lang['PNphpBB2_Remove_Title'] = "ÅÒÇáÉ ÌÏÇæá Çá PNphpBB2 ãä %s*";
  $lang['PNphpBB2_Remove_Notes'] = "ÊãÊ ÅÒÇáÉ ÌãíÚ ÌÏÇæá ÇáThe PNphpBB2 ";

  // General
  $lang['PNphpBB2_Running'] = "íÚãá";
  $lang['PNphpBB2_Failed'] = "İÔá";
  $lang['PNphpBB2_ButOK'] = "áßä ... äÚã!";
  $lang['PNphpBB2_Completed'] = "ÅßÊãá";
  $lang['PNphpBB2_Done'] = "Êã";
  $lang['PNphpBB2_Aborted'] = "ÅíŞÇİ ÇáÚãáíÉ";
  $lang['PNphpBB2_Cancel'] = "ÅáÛÇÁ";
  $lang['PNphpBB2_Progress'] = "ÇáÍÇáÉ";
  $lang['PNphpBB2_Some_Failed'] = "İÔáÊ ÈÚÖ ÇáÚãáíÇÊ ãÚ ŞæÇÚÏ ÇáÈíÇäÇÊ¡ ÈíÇäÇÊ ÇáÇÎØÇÁ ÇáãÓÌáÉ åí ßãÇ íáí: <br />ŞÏ ÊÍÊÇÌ Çáì ÊÖíİ¡ ÊÍÑÑ¡ ÊÍĞİ ÈÚÖ ÇáÌÏÇæá Ãæ ÇáÈíÇäÇÊ<br />";
  $lang['PNphpBB2_No_Errors'] = "áÇíæÌÏ ÃÎØÇÁ";
  $lang['PNphpBB2_Results'] = "ÇáäÊÇÆÌ";
  $lang['PNphpBB2_Installing'] = "íÊã ÇáÊÑßíÈ";
  $lang['PNphpBB2_Updating'] = "íÊã ÇáÊÍÏíË";
  $lang['PNphpBB2_Important'] = "***ãåã ÌÏÇ ***";
}

// Additional administration links
$lang['Users_aguide'] = "Ïáíá ÇáãÓÊÎÏã";
$lang['Forum_Manual'] = "Ïáíá ÇáãäÊÏì";


// PNphpBB2 config options
$lang['pnphpbb2_settings'] = "ÅÚÏÇÏÇÊ Çá PNphpBB2";
$lang['pnphpbb2_settings_explain'] = "ãä åäÇ ÊÓÊØíÚ ÊÛííÑ ÇáÎíÇÑÇÊ æÇáÇÚÏÇÏÇÊ ÇáÎÇÕÉ ÈÇáÈÑäÇãÌ ÇáãáÍŞ PNphpBB2";

$lang['pnphpbb2_options'] = "ÊÚÏíáÇÊ Çá PNphpBB2 æÎíÇÑÇÊå";

$lang['pnphpbb2_quickreply'] = "ÅÓãÍ ÈÎÇÕíÉ ÇáÑÏ ÇáÓÑíÚ";
$lang['pnphpbb2_quickreply_explain'] = "ÊÓÊØíÚ ÊäÔíØ Ãæ ÊÚØíá ÎÇÕíÉ ÇáÑÏ ÇáÓÑíÚ";

$lang['pnphpbb2_logo_on'] = "ÅÚÑÖ ÇáæŞæ ÇáÎÇÕÉ È PNphpBB2 İí ÇáãäÊÏì";
$lang['pnphpbb2_logo_on_explain'] = "ÅĞÇ ŞãÊ ÈÊÚØíá ÇááæŞæ İäÑÌæ ÅÈŞÇÁ ÇáÑÇÈØ ÇáÎÇÕ ÈäÇ İí ÃÓİá ÇáÕİÍÉ";

$lang['pnphpbb2_shorturls'] = "ÅÓÊÎÏã ÇáÚäÇæíä ÇáãÎÊÕÑÉ İí ÇáãÔÇÑßÇÊ";
$lang['pnphpbb2_shorturls_explain'] = "ÊäÔíØ Ãæ ÊÚØíá ÅÓÊÎÏÇã ÎÇÕíÉ ÇáÚäÇæíä ÇáãÎÊÕÑÉ İí ÇáãÔÇÑßÇÊ";

$lang['pnphpbb2_post_order'] = "ØÑíŞÉ ÊÑÊíÈ ÇáãÔÇÑßÇÊ İí ÇáãäÊÏì";
$lang['pnphpbb2_post_order_explain'] = "ÇáÊÑÊíÈ ÇáÇİÊÑÇÖí æÇáĞí Úáì ÃÓÇÓå ÊÚÑÖ ÇáãÔÇÑßÇÊ";
$lang['pnphpbb2_post_order_explain'] .= "<br>ÊÓÊØíÚ ÊÎØí åĞÇ ÇáÎíÇÑ ãä ÎáÇá ŞÓã ÅÏÇÑÉ ÇáãäÊÏì";

$lang['pnphpbb2_post_confirm'] = "ÊÚØíá ÊÃßíÏ ßÊÇÈÉ ÇáãæÖæÚ";
$lang['pnphpbb2_post_confirm_explain'] = "ÈåĞÇ ÇáÇÚÏÇÏ ÊÓÊØíÚ ÊÚØíá ÕİÍÉ ÊÃßíÏ ÇáãÔÇÑßÇÊ.æÈĞáß İÅä ÇáÚÖæ ÓíĞåÈ ãÈÇÔÑÉ Çáì ÇáãæÖæÚ ÇáĞí ÔÇÑß İíå ÈÚÏ ÅÑÓÇá ÇáãÔÇÑßÉ ãÈÇÔÑÉ.";

$lang['pnphpbb2_allow_full_page'] = "ÅÓãÍ ááÇÚÖÇÁ ÈÊÕÛíÑ æÊßÈíÑ ãÓÇÍÉ ÚÑÖ ÇáãäÊÏì";
$lang['pnphpbb2_allow_full_page_explain'] = "ãä ÎáÇá ÇáãäÊÏì ÊÓÊØíÚ ÇáÓãÇÍ ááÇÚÖÇÁ ÈÊÕÛíÑ Ãæ ÊßÈíÑ ÇáãäÊÏì ÎÇÑÌ ÅØÇÑ ÇáÈæÓÊ äíæß";

$lang['pnphpbb2_full_page'] = "ÅÌÚá ÇáãäÊÏì ãßÈÑÇ ßæÖÚ ÅİÊÑÇÖí";
$lang['pnphpbb2_full_page_explain'] = "ÈåĞÇ ÇáÇÚÏÇÏ ÊÓÊØíÚ ÇáÓãÇÍ ááãÔÑİ ÈÃä íÌÚá ÇáæÖÚ ÇáÇİÊÑÇÖí áÚÑÖ ÇáãäÊÏì ãßÈÑÇ ÈÍíË íßæä ÎÇÑÌ ÅØÇÑ ÇáÈæÓÊ äíæß";

$lang['pnphpbb2_pn_pm'] = "ÅÓÊÎÏã äÙÇã ÇáÈæÓÊ äíæß ááÑÓÇÆá ÇáÎÇÕÉ";
$lang['pnphpbb2_pn_pm_explain'] = "åĞÇ ÇáÇÚÏÇÏ ÓíÑÈØ ÇáãäÊÏì ÈäÙÇã ÇáÑÓÇÆá ÇáÎÇÕÉ ÇáÎÇÕ ÈÇáÈæÓÊ äíæß ÈÏáÇ Úä äÙÇã ÇáÑÓÇÆá ÇáÎÇÕÉ ÇáÊÇÈÚ ááãäÊÏì";

$lang['pnphpbb2_pn_link'] = "ÑÇÈØ ÅÚÇÏÉ ÇáãÓÊÎÏãíä Çáì ãæŞÚß ÇáÇÕáí";
$lang['pnphpbb2_pn_link_explain'] = "ÃÏÎá ÇáÑÇÈØ ÇáĞí ÓíÚíÏ ÇáãÓÊÎÏãíä Çáì ÇáãæŞÚ ÇáÑÆíÓí İí ÍÇáÉ ÎÑæÌ ÇáãäÊÏì ãä ÇáÇØÇÑ ÇáÚÇã ááãæŞÚ";

$lang['pnphpbb2_pn_text'] = "ÇáäÕ ÇáĞí ÓíÚÑÖ Úáì ÇáÑÇÈØ ÃÚáÇå";
$lang['pnphpbb2_pn_text_explain'] = "Óíßæä åĞÇ åæ ÇáäÕ ÇáßÊÇÈí ÇáãÑİŞ ÈÇáÑÇÈØ æãä Çáããßä Ãä íßæä ÍÊì ÈáÛÉ ÇáåÊãá Ãæ ÍÊì ÑÇÈØ áÕæÑÉ";

$lang['pnphpbb2_members_online'] = "ÊÚØíá ŞÇÆãÉ ãä ÇáãÊæÇÌÏæä İí ÇáÕİÍÉ ÇáÑÆíÓíÉ ááãäÊÏì";
$lang['pnphpbb2_members_online_explain'] = "åĞÇ ÇáÎíÇÑ Óíãßä ÇáÇÔÑÇİ ãä ÊÚØíá ŞÇÆãÉ ãä ÇáãÊæÇÌÏæä ÃÓİá ÇáÕİÍÉ ÇáÑÆíÓíÉ ááãäÊÏì";

$lang['pnphpbb2_members_online_annon'] = "ÅÎİÇÁ ŞÇÆãÉ ãä ÇáãÊæÇÌÏíä Úä ÇáÒæÇÑ ÇáÛíÑ ãÓÌáíä";
$lang['pnphpbb2_members_online_annon_explain'] = "ÅĞÇ áã ÊŞã ÈÊÚØíá åĞå ÇáŞÇÆãÉ İÈÅãßÇäß Úáì ÇáÇŞá ÅÎİÇÆåÇ Úä ÇáÛíÑ ãÓÌáíä";

$lang['pnphpbb2_template_compiler'] = "ÅÓÊÎÏã ãÚÇáÌ ÇáŞæÇáÈ ÇáÌÏíÏ";
$lang['pnphpbb2_template_compiler_explain'] = "ÅÓÊÎÏã ÈÑäÇãÌ eXtreme Styles mod  </br>åĞÇ ÇáÈÑäÇãÌ íŞæã Èßá ßİÇÆå ÈÊÍÓíä ÃÏÇÁ äÙÇã ÇáŞæÇáÈ İí Çá phpBB ßãÇ Çäå áÏíå ÇáßËíÑ ãä ÇáããíÒÇÊ ÇáÌíÏÉ. ÍíË Ãäå íÓÊØíÚ ãÚÇáÌÉ æÊäİíĞ ÇáãáİÇÊ ÈÓÑÚÉ ÚÇáíÉ ÌÏÇ İáÏíå äÙÇã ßÇÔ íÓÊØíÚ ÊÓÑíÚ ÇáŞæÇáÈ ãÑÇÊ ÚÏíÏÉ æíÓãÍ ÈÅÓÊÎÏÇã ÇáÈí ÇÊÔ Èí İí ÇáŞæÇáÈ æÛíÑåÇ ãä ÇáããíÒÇÊ. íÑÌì ãáÇÍÙÉ Ãä åĞÇ åæ ÅÕÏÇÑ ÊÌÑíÈí æŞÏ áÇíÚãá ÌíÏÇ ãÚ ÈÚÖ ÇáÇÌÒÇÁ ãä ÇáÈÑäÇãÌ";

$lang['pnphpbb2_updated'] = "Êã ÊÍÏíË ÅÚÏÇÏÇÊ ÇáPNphpBB2 ";
$lang['PNphpBB2_Upgrade'] = "ÊÍÏíËÇÊ ÇáPNphpBB2 ";
$lang['pnphpbb2_click_return_config'] = "ÅÖÛØ  %såäÇ %s ááÚæÏÉ Çáì ÅÚÏÇÏÇÊ ÇáPNphpBB2";

$lang['pnphpbb2_allow_sub_change'] = "ÅÓãÍ ááÃÚÖÇÁ ÈÊÍæíá äÙÇã ÇáÊÕäíİ/ ÇáãäÊÏì ÇáİÑÚí";
$lang['pnphpbb2_allow_sub_change_explain'] = "åĞÇ ÇáÇÚÏÇÏ ÓíÓãÍ ááÃÚÖÇÁ ÈÇáÊÍæíá ãä æÅáì ØÑíŞÊí ÇáÚÑÖ ÈÇáÊÕÇäíİ Ãæ ÈÇáãäÊÏíÇÊ ÇáİÑÚíÉ ÅĞÇ ßäÊ áÇÊÑíÏ Ãä ÊÓÊÎÏã åĞå ÇáÎÇÕíÉ İÈßá ÈÓÇØÉ áÇÊÖíİ ÊÕÇäíİ Ãæ ãäÊÏíÇÊ İÑÚíÉ İí ãæŞÚß";

$lang['pnphpbb2_index_announce'] = "ÅÚÑÖ ÇáÇÚáÇäÇÊ Úáì ÇáÕİÍÉ ÇáÑÆíÓíÉ";
$lang['pnphpbb2_index_announce_explain'] = "ÓíÓãÍ åĞÇ ÇáÇÚÏÇÏ ÈÚÑÖ ÅÚáÇäÇÊ ÇáãäÊÏì Úáì ÇáÕİÍÉ ÇáÑÆíÓíÉ ááãäÊÏì";

// Mod Title: eXtreme Styles mod
// Mod Version: 0.5
// Author: Vjacheslav Trushkin <slava@trushkin.net>

$lang['xs_warning'] = 'ÊÍĞíÑ : áÇíãßä ßÊÇÈÉ ÇáßÇÔ.';
$lang['xs_warning_explain'] = 'ÊÍŞŞ ãä Ãäß ŞÏ ÃäÔÃÊ ãÌáÏÇ ááßÇÔ ÈÍíË íãßä ÍİÙå İíå æãä Ãä ÕáÇÍíÉ ÇáÏÎæá Çáíå ŞÏ ÛíÑÊ Çáì  (chmod) to 777 ÈÍíË íãßä ááÈÑäÇãÌ ÇáßÊÇÈÉ Çáíå. ÅĞÇ ßÇä ÇáÓíÑİÑ íÚãá İí ÇáäÙÇã ÇáÂãä İãä ÇáãÍÊãá Ãä íßæä ÖÑæÑíÇ Ãä ÊÛíÑ İÇÕá Çáãáİ Çáì  "." İí ÇáÇÚÏÇÏ ÈÇáÇÓİá<br /><br />ÅĞÇ áã íÚãá ÇáßÇÔ Úáì ÇáÓíÑİÑ İÇá ÊŞáŞ İÅä eXtreme Styles mod íÓÊØíÚ ÒíÇÏÉ ÓÑÚÉ ÇáãäÊÏì ãÑÇÊ ÚÏÉ ÍÊì ÈÏæä ÇáßÇÔ';

$lang['xs_updated'] = 'Êã ÊÍÏíË ÇáÇÚÏÇÏÇÊ';
$lang['xs_updated_explain'] = 'ÊÍÊÇÌ Çáì Çä ÊÍÏË åĞå ÇáÕİÍÉ ŞÈá Ãä ÊÃÎĞ ÇáÇÚÏÇÏÇÊ ÇáÌÏíÏÉ ÍíÒ ÇáÊäİíĞ. <a href="%s">ÅÖÛØ åäÇ</a> áÅÚÇÏÉ ÊÍÏíË ÇáÕİÍÉ.';

// ACP navigation bar
$lang['Extreme_Styles'] = 'ÃÔßÇá eXtreme ';
if(empty($lang['Updates']))
{

}
if(empty($lang['Styles']))
{

}

// Headers
$lang['xs_settings'] = 'ÅÚÏÇÏÇÊ ÈÑäÇãÌ eXtreme Styles  v%s ';
$lang['xs_settings_cache'] = 'ÅÚÏÇÏÇÊ ÇáßÇÔ';

// Options
// xs_use_cache
$lang['xs_use_cache'] = 'ÅÓÊÎÏã ÇáßÇÔ';
$lang['xs_cache_explain'] = 'ÇáßÇÔ ÓíÍİÙ İí ÇáÏÓß æÓíÓÇÚÏ İí ÊÓÑíÚ äÙÇã ÇáŞæÇáÈ áÇäå áä íßæä åäÇß ãä ÏÇÚ áãÚÇáÌÉ ÇáŞæÇáÈ ßá ãÑÉ ÊÚÑÖ İíåÇ.';
// xs_cache_dir
$lang['xs_cache_dir'] = 'ãÌáÏ ÇáßÇÔ';
$lang['xs_cache_dir_explain'] = 'ÓíÊã ßÊÇÈÉ ßá ÇáßÇÔ Çáì Ğáß ÇáãÌáÏ æ / Ãæ ÇáãÌáÏÇÊ ÇáİÑÚíÉ. ÇáãáİÇÊ æÇáÊí ÊÓÊÎÏã äİÓ ÇáÇÓã Óæİ íßÊÈ İæŞåÇ. áÇÊßÊÈ  "/" ŞÈá ÅÓã ÇáãÌáÏ ÅÇá ÅĞÇ ßÇä ÅÓã ÇáãÌáÏ æãÓÇÑå ãØáŞÇ. ÇáãØáŞ íÚäí ÇáãÓÇÑ ÇáßÇãá ßãáİ Úáì ÇáŞÑÕ ÇáÕáÈ İí ÇáÓíÑİÑ íÑÌì Ãä áÇÊÎáØ Èíäå æÈíä ÚäæÇä ÇáãæŞÚ ÇáãØáŞ. ÃãÇ ÇáäÓÈí İíÚäí ÇáãÓÇÑ ÅÈÊÏÇÁ ãä ãÌáÏ phpBB ';
// xs_cache_dir_absolute
$lang['xs_dir_absolute'] = 'ÇáãÓÇÑ ÇáãØáŞ';
$lang['xs_dir_absolute_explain'] = '(ãËá "/home/some_website/htdocs/phpbb/cache")';
$lang['xs_dir_relative'] = 'ÇáãÓÇÑ ÇáäÓÈí';
$lang['xs_dir_relative_explain'] = 'ÇáãÓÇÑ ÈÇáäÓÈÉ áãÓÇÑ ãäÊÏì ÇáphpBB  (ãËá "cache")';
// xs_auto_compile
$lang['xs_auto_compile'] = 'ÍİÙ ÇáßÇÔ ÊáŞÇÆíÇ';
$lang['xs_auto_compile_explain'] = 'ÓíŞæã åĞÇ ÇáÇÚÏÇÏ ÈÍİÙ ÇáŞæÇáÈ ÇáãÚÇáÌÉ ÊáŞÇÆíÇ ÅĞÇ ÅÍÊÇÌ ÇáÇãÑ æ ÓíÍİÙåÇ İí ãÌáÏ ÇáßÇÔ';
// xs_auto_recompile
$lang['xs_auto_recompile'] = 'Şã ÈÅÚÇÏÉ ãÚÇáÌÉ ÇáßÇÔ ÊáŞÇÆíÇ';
$lang['xs_auto_recompile_explain'] = 'ÓíŞæã åĞÇ ÇáÇÚÏÇÏ ÈÅÚÇÏÉ ãÚÇáÌÉ ÇáßÇÔ ÊáŞÇÆíÇ ÅĞÇ Êã ÊÛííÑ ãáİ ÇáŞÇáÈ ÇáÇÕáí';
// xs_separator
$lang['xs_separator'] = 'İÇÕáÉ ÅÓã Çáãáİ';
$lang['xs_separator_explain'] = 'ÅĞÇ ÅÓÊÎÏãÊ Çá "/" İÅä ÇáßÔ ÓíÍİÙ İí ãÌáÏ İÑÚí ÈÅÓã ÇáŞÇáÈ (ãËáÇ "subSilver/admin/page_header.php" ÓíÍİÙ Çáì ãÌáÏ ÇáßÇÔ ß  "subSilver/admin/page_header.php"),æÅĞÇ ÍÏÏÊå Çáì ÔíÁ ÂÎÑ ãËá "." İßá ÇáßÇÔ ÓíÍİÙ Çáì ãÌáÏ æÇÍÏ (ãËáÇ "subSilver/admin/page_header.php" ÓíÍİÙ Çáì ãÌáÏ ÇáßÇÔ ß "subSilver.admin.page_header.php")';
// xs_php
$lang['xs_php'] = 'ÅãÊÏÇÏ ãáİ ÇáßÇÔ';
$lang['xs_php_explain'] = 'åĞÇ åæ ÅãÊÏÇÏ ãáİ ÇßÇÔ. ÇáãáİÇÊ ÊÍİÙ Úáì Ôßá php áÇÊßÊÈ ÇáäŞØÉ.';
// xs_def_template
$lang['xs_def_template'] = 'ãÌáÏ ÇáŞÇáÈ ÇáÇİÊÑÇÖí';
$lang['xs_def_template_explain'] = 'ÅĞÇ áã íßä ãáİ Çátpl ãæÌæÏÇ İí ãÌáÏ ÇáŞÇáÈ ÇáÍÇáí æĞáß ŞÏ íÍÏË ÚäÏãÇ íÊã ÊÑßíÈ ÇáÈÑäÇãÌ ÈØÑíŞÉ ÎÇØÆÉ İÅä äÙÇã ÇáŞÇáÈ ÓíÈÍË Úä äİÓ Çáãáİ İí åĞÇ ÇáãÌáÏ ÅÊÑßå ÎÇáíÇ áÊÚØíá åĞå ÇáÎÇÕíÉ';
// xs_check_switches
$lang['xs_check_switches'] = 'ÊÍŞŞ ãä ÇáãÍæáÇÊ ÎáÇá ÇáãÚÇáÌÉ';
$lang['xs_check_switches_explain'] = 'åĞå ÇáÎÇÕíÉ ÓÊÊÍŞŞ ãä ÇáÇÎØÇÁ İí ÇáŞæÇáÈ. Åä ÊÚØíáåÇ Óæİ íÓÑÚ ÇáãÚÇáÌÉ æáßäå ÓíÛİá Úä ÇáÇÎØÇÁ ÅĞÇ ßÇäÊ ãæÌæÏÉ<br /><br /> ÇáÊÍŞŞ ÇáĞßí ÓíÊÍŞŞ ãä æÌæÏ ÇáÇÎØÇÁ İí ÇáŞÇáÈ æãä Ëã ÓíÕáÍ ÇáÇÎØÇÁ ÇáãÚÑæİÉ ÊáŞÇÆíÇ æíÑÌì ãáÇÍÙÉ Ãä åĞÇ ÇáÇÚÏÇÏ íÚãá ÃÈØÃ ŞáíáÇ ãä ÇáÊÍŞŞ ÇáÈÓíØ<br /><br />æáßä ÃÍíÇäÇ ŞÏ ÊÚãá ÇáŞæÇáÈ ÌíÏÇ ÚäÏ ÊÚØíá åĞå ÇáÎÇÕíÉ æĞáß ŞÏ íÍÏË Úä ßÊÇÈÉ ÇáåÊãá ÈØÑíŞÉ ÓíÆÉ<br /><br />ÅĞÇ ßÇäÊ ÎÇÕíÉ ÇáßÇÔ ãÚØáÉ İãä ÇáÇİÖá ÊÚØíá åĞå ÇáÎÇÕíÉ áÊÓÑíÚ ÇáãÚÇáÌÉ';
$lang['xs_check_switches_0'] = 'ãÚØá';
$lang['xs_check_switches_1'] = 'ÊÍŞŞ Ğßí';
$lang['xs_check_switches_2'] = 'ÊÍŞŞ ÈÓíØ';
// xs_use_isset
$lang['xs_use_isset'] = 'ÊÍŞŞ ãä ÇáãÊÛíÑÇÊ æÇáÊí ÊÓÊÎÏã ÏÇáÉ isset() İí ÇáßæÏ ÇáãÚÇáÌ';

// Debug info
$lang['xs_debug_header'] = 'ãÚáæãÇÊ ÇáÇÎØÇÁ';
$lang['xs_debug_explain'] = 'ãä åäÇ ÊÓÊØíÚ ÇáÍÕæá Úáì ãÚáæãÇÊ Úä ÇáãÔÇßá ÚäÏ ÅÚÏÇÏ ÇáßÇÔ';
$lang['xs_debug_vars'] = 'ãÊÛíÑÇÊ ÇáŞÇáÈ';
$lang['xs_debug_tpl_name'] = 'ÅÓã ãáİ ÇáŞÇáÈ';
$lang['xs_debug_cache_filename'] = 'ÅÓã ãáİ ÇáßÇÔ';
$lang['xs_debug_data'] = 'ÈíÇäÇÊ ÇáÊÍÑí';

$lang['xs_check_hdr'] = 'ÇáÊÍŞŞ ãä ÇáßÇÔ á %s';
$lang['xs_check_filename'] = 'ÎØÇÁ : ÅÓã Çáãáİ ÛíÑ ÕÍíÍ';
$lang['xs_check_openfile1'] = 'ÎØÇÁ : áÇíãßä İÊÍ Çáãáİ  "%s". ÓíÍÇæá ÇáÈÑäÇãÌ ÅäÔÇÁ ãÌáÏÇÊ';
$lang['xs_check_openfile2'] = 'ÎØÇÁ : áÇíãßä İÊÍ Çáãáİ  "%s" ááãÑÉ ÇáËÇäíÉ: áŞÏ ÅÓÊÓáã ÇáÈÑäÇãÌ !';
$lang['xs_check_nodir'] = 'ÌÇÑí ÇáÊÍŞŞ "%s" áÇæÌæÏ  áãËá åĞÇ ÇáãÌáÏ';
$lang['xs_check_nodir2'] = 'ÎØÇÁ: áÇíãßä ÅäÔÇÁ ÇáãÌáÏ "%s"ÑÈãÇ íÊæÌÈ Úáíß ÇáÊÍŞŞ ãä ÇáÕáÇÍíÇÊ İí ÇáãæŞÚ';
$lang['xs_check_createddir'] = 'Êã ÅäÔÇÁ ÇáãÌáÏ "%s"';
$lang['xs_check_dir'] = 'ÌÇÑí ÇáÊÍŞŞ "%s" ÇáãÌáÏ ãæÌæÏ ÃÕáÇ';
$lang['xs_check_ok'] = 'Êã İÊÍ Çáãáİ  "%s" ááßÊÇÈÉ æßá ÔíÁ íÈÏæ Úáì ãÇíÑÇã ';

// Styles
$lang['xs_styles_id'] = 'ID';
$lang['xs_styles_template'] = 'ÇáŞÇáÈ';
$lang['xs_styles_style'] = 'ÇáÔßá';
$lang['xs_styles_user'] = 'ÇáÇÚÖÇÁ';
$lang['xs_styles_options'] = 'ÇáÎíÇÑÇÊ';
$lang['xs_styles_set_default'] = 'ÊÍÏíÏ ÇáæÖÚ ÇáÇİÊÑÇÖí';
$lang['xs_styles_no_override'] = 'áÇÊÊÌÇæÒ ÅÚÏÇÏÇÊ ÇáÚÖæ';
$lang['xs_styles_do_override'] = 'ÊÌÇæÒ ÅÚÏÇÏÇÊ ÇáÚÖæ';
$lang['xs_styles_switch_all'] = 'Íæá ÌãíÚ ÇáÇÚÖÇÁ Çáì åĞÇ ÇáÔßá';
$lang['xs_styles_switch_all2'] = 'Íæá ÌãíÚ ÇáÇÚÖÇÁ Çáì :';
$lang['xs_styles_defstyle'] = 'ÇáÔßá ÇáÇİÊÑÇÖí';
$lang['xs_styles_available'] = 'ÇáÇÔßÇá ÇáãÊÇÍÉ';

// Categories Hierarchies Mod
$lang['Category_attachment'] = "äÑİŞ ÈÇáÊÕäíİ";
$lang['Use_sub_forum'] = "ÅÚÑÖ ÇáÊÕäíİÇÊ ÇáİÑÚíÉ ßãäÊÏíÇÊ";
$lang['Use_sub_forum_explain'] = "ÅÓãÍ ááãÔÑİíä ááĞåÇÈ ÅİÊÑÇÖíÇ Çáì ÃÍÏ ÇáãäÊÏíÇÊ ÇáİÑÚíÉ Ãæ ÇáÊÕäíİÇÊ ÇáİÑÚíÉ";
$lang['Category_desc'] = "ÇáæÕİ";
$lang['Hierarchy_setting'] = "ÅÚÏÇÏÇÊ ÇáÊÕÇäíİ ÇáåÑãíÉ";
$lang['Category_config_error_fixed'] = "ÎØÇÁ İí ÅÚÏÇÏ ÇáÊÕäíİ Êã ÅÕáÇÍå";

// Split Announcements/Stickys
$lang['announce_settings'] = "ÅÚÏÇÏÇÊ ÇáÇÚáÇä";
$lang['enable_announce'] = "ÚÑÖ ÅÚáÇäÇÊ ÇáãäÊÏì İí ÇáÕİÍÉ ÇáÑÆíÓíÉ";
$lang['enable_announce_explain'] = "åĞÇ ÇáÇÚÏÇÏ ÓíäÔØ Ãæ íÚØá ÚÑÖ ÅÚáÇäÇÊ ÇáãäÊÏì İí ÇáÕİÍÉ ÇáÑÆíÓíÉ";

$lang['announcement_duration'] = "ãÏÉ ÇáÇÚáÇä";
$lang['announcement_duration_explain'] = "ÚÏÏ <strong>ÇáÇíÇã </strong> áÚÑÖ ÇÚáÇäÇÊ ÇáãäÊÏì İí ÇáÕİÍÉ ÇáÑÆíÓíÉ";
$lang['announcement_duration_explain'] .= "<br/>ÅÏÎÇá  <b>0</b> ÓíÚÑÖ ÇáÇÚáÇä áİÊÑÉ ÛíÑ ãÍÏÏÉ";

$lang['split_global_announce'] = "æÒÚ ÇáÇÚáÇäÇÊ ÇáÚÇãÉ";
$lang['split_announce'] = "æÒÚ ÇáÇÚáÇäÇÊ Úáì ÇáãäÊÏíÇÊ";
$lang['split_sticky'] = "æÒÚ ÇáãæÖæÚ ÇáãáÕŞ Úáì ÇáãäÊÏíÇÊ";

// Topic & Post sort options
$lang['topic_sort_order'] = "ØÑíŞÉ ÊÑÊíÈ ÇáãæÇÖíÚ";
$lang['post_sort_order'] = "ØÑíŞÉ ÊÑÊíÈ ÇáãÔÇÑßÇÊ";
$lang['First_Post'] = "Ãæá ãÔÇÑßÉ";
$lang['sorted_default'] = "ÇáæÖÚ ÇáÇİÊÑÇÖí";

// Replacement Rank image admin
$lang['Rank_image'] = 'ÕæÑÉ ÇáÊŞííã';
$lang['Rank_image_explain'] = 'ÅÓÊÎÏã åĞÇ ÇáÇÚÏÇÏ áÊÚííä ÇáÕæÑÉ ÇáÕÛíÑÉ ÇáÊí ÊÓÊÎÏã İí ÇáÊŞííã';
$lang['Rank_image_explain'] .= '<br/>åĞÇ ÇáãÓÇÑ åæ ÈÇáäÓÈÉ Çáì ãÓÇÑ Çá PNphpBB2  ÅĞÇ ÃÏÎáÊ ãÓÇÑÇ äÓÈíÇ Çáì ãßÇä ÇáÕæÑÉ<br/>áÇÍÙ Ãäå ÚäÏ ßÊÇÈÉ ÅÓã ÇáÕæÑÉ ßãËá (image.gif),İÅä ÇáÈÑäÇãÌ ÓíÍÇæá ÈÅÓÊÎÏÇã ÅÓã ÇáŞÇáÈ Ãæ ÊÕãíã ÇáÈæÓÊ äíæß Ãæ ãáİ ÇááÛÉ'; 
$lang['Admin_intro'] = 'ÔßÑÇ áÇÓÊÎÏÇãß Çá PNphpBB . åĞå ÇáÕİÍÉ ÓÊÚØíß ÔÑÍÇ ÓÑíÚÇ áãÎÊáİ ÇáÇÍÕÇÆíÇÊ İí ãäÊÏÇß. ÊÓÊØíÚ ÇáÚæÏÉ Çáì åĞå ÇáÕİÍÉ ÈÇáÖÛØ Úáì ÕİÍÉ ÇáÇÏÇÑÉ ÇáÑÆíÓíÉ İí ÇáŞÇÆãÉ ÇáÌÇäÈíÉ. ãä ÎáÇá ÇáÑæÇÈØ İí ÌÇäÈ ÇáÕİÍÉ ÓÊÓÊØíÚ ÇáÏÎæá Çáì ÇáÇÚÏÇÏÇÊ ÇáãÎÊáİÉ ááÊÍßã İí ÅÚÏÇÏÇÊ ÇáãäÊÏì. ';

$lang['PNphpBB_Version'] = 'ÅÕÏÇÑ ÇáPNphpBB2 ';
$lang['phpBB_Version'] = 'ÅÕÏÇÑ ÇáphpBB ';

// limited post edit time MOD 
$lang['edit_time'] = 'ÇáæŞÊ ÇáãÊÇÍ áÊÍÑíÑ ÇáãÔÇÑßÇÊ'; 
$lang['edit_time_explain'] = 'ÇáæŞÊ ÈÇáÏŞÇÆŞ æÇáĞí íãßä ááãÓÊÎÏã İíå ãä ÊÚÏíá ãÔÇÑßÇÊåã ÅĞÇ ÃÏÎáÊ ÕİÑÇ İĞáß íÚäí ÈÃä ÇáãÏÉ ÛíÑ ãÍÏÏÉ'; 

// Enable-Disable theme matching functions
$lang['theme_matching'] = "ÊÔÛíá ãØÇÈŞÉ ÊÕãíã ÇáãäÊÏì áÊÕãíã ÇáãæŞÚ";
$lang['theme_matching_explain'] = "ÈÅãßÇäß ÊÔÛíá ãØÇÈŞÉ ÊÕãíã ÇáãäÊÏì ááãæŞÚ ãä ÎáÇá åĞÇ ÇáÇÚÏÇÏ. åĞå ÇáÎÇÕíÉ ÓÊÍÇæá ÅäÔÇÁ ãáİ Ôßá (Style Sheet ) ÌÏíÏ ÈÅÓÊÎÏÇã ãáİ ÇáÊÕãíã. íÑÌì ãáÇÍÙÉ Ãä Úáíß ãÓÍ Ğáß Çáãáİ İí ÍÇáÉ ÊÚØíá ÇáÎÇÕíÉ";

// Exclude forum from global announcments
$lang['Exclude_global_announce'] = 'ÅÓÊËäÇÁ åĞÇ ÇáãäÊÏì ãä ÇáÇÚáÇäÇÊ ÇáÚÇãÉ';
$lang['Exclude_global_announce_explain'] = 'ÅĞÇ ŞãÊ ÈÅÎÊíÇÑ åĞÇ ÇáÎíÇÑ İÓæİ íÕÈÍ åĞÇ ÇáãäÊÏì ãÓÊËäì ãä ÇáÇÚáÇäÇÊ ÇáÚÇãÉ';

// Support forum
$lang['Support_forum'] = 'åĞÇ ãäÊÏì ááÏÚã';
$lang['Support_forum_explain'] = 'ÅĞÇ ßäÊ ÓÊÓÊÎÏã åĞÇ ÇáãäÊÏì ßãäÊÏì ÏÚã İÅäå ÓíÕÈÍ ÈÅãßÇäß Ãä ÊÓÊÎÏã ÚáÇãÇÊ ÊÍÏíÏ ÍÇáÉ ÇáãæÖæÚ áãÓÇÚÏÊß İí ÊŞÏíã ÇáÏÚã áßá ãÔÇÑßÉ';

//
// That's all Folks!
// -------------------------------------------------

?>
