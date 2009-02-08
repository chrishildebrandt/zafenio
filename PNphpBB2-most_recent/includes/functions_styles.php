<?php
/***************************************************************************
 * Module           : PNphpBB2 (The forum for Postnuke)
 * Filename         : functions_styles.php
 * Begin            : June, 2004
 * Original file by : Carl Slaughter
 * Copyright        : (C) 2003 The PNphpBB Group
 * Contact          : support@pnphpbb.com
 *                  : http://www.pnphpbb.com
 *
 * $Id: functions_styles.php 192 2007-01-20 15:17:44Z kronos $
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

function create_cellpic($img, $filename)
{
  // Does the file exist?
  if ( @is_file($filename) )
  {    // We need to delete it
    $succ = @unlink($filename);
    if (!$succ) { return false; }
  }
  // Create the new file
  $succ = @imagejpeg($img, $filename);
  if (!$succ) { return false; }
  
  // Make it so admins can delete the files ;-)
  $succ = @chmod($filename, 0666);
  if (!$succ) { return false; }
  
  // Destroy the image
  @imagedestroy($img);
 
  return true;
}

function colorchange($color, $step)
{
  // This function takes a color passed to $color and creates
  // two new "shades" of the same color based on the $step value.
  // It returns the value of $colors in 5 elements:
  // 0 = ready to use hex value of a lighter shade of original $color
  // 1 = ready to use hex value of a darker shade of original $color
  // 2 = Array containing RGB of a lighter shade of original $color
  // 3 = Array containing RGB of original $color
  // 4 = Array containing RGB of a darker shade of original $color

  $rd = hexdec(substr($color, 1, 2));
  $bl = hexdec(substr($color, 3, 2));
  $gn = hexdec(substr($color, 5, 2));
 
  $med[0] = $rd;
  $med[1] = $bl;
  $med[2] = $gn;
 
  $lit[0] = ( $rd + $step ) > 255 ? 255 : $rd + $step;
  $lit[1] = ( $bl + $step ) > 255 ? 255 : $bl + $step;
  $lit[2] = ( $gn + $step ) > 255 ? 255 : $gn + $step;
 
  $dar[0] = ( $rd - $step ) < 0 ? 0 : $rd - $step;
  $dar[1] = ( $bl - $step ) < 0 ? 0 : $bl - $step;
  $dar[2] = ( $gn - $step ) < 0 ? 0 : $gn - $step;
 
  $colors[0] = "#" . dechex(($lit[0]<<16)|($lit[1]<<8)|$lit[2]);

  $colors[1] = "#" . dechex(($dar[0]<<16)|($dar[1]<<8)|$dar[2]);
 
  $colors[2] = $lit;
  $colors[3] = $med;
  $colors[4] = $dar;
 
 
  return $colors;
}

function imagecolorgradient($img, $hv, $x1, $y1, $x2, $y2, $f_c, $s_c)
{
  // Modified version of code by info@solanki.ch taken from php.net
  // posted: 14-Feb-2004 07:43

  // $img is the image handle.
  // $hv is either horizontal 'h' or vertical 'v' gradient.
  // $x1 and $y1 are the start points.
  // $x2 and $y2 the ending points.
  // $f_c and $s_c are the first and second color ARRAYs. 

  $y = ($y2 > $y1) ? $y2-$y1 : $y1-$y2; 
  $x = ($x2 > $x1) ? $x2-$x1 : $x1-$x2; 
 
  $r_range = ($f_c[0] > $s_c[0]) ? $f_c[0] - $s_c[0] : $s_c[0] - $f_c[0];
  $g_range = ($f_c[1] > $s_c[1]) ? $f_c[1] - $s_c[1] : $s_c[1] - $f_c[1];
  $b_range = ($f_c[2] > $s_c[2]) ? $f_c[2] - $s_c[2] : $s_c[2] - $f_c[2];

  switch ($hv)
  {
    case 'v':
    
      $r_px = $r_range / $y;
      $g_px = $g_range / $y;
      $b_px = $b_range / $y;
      $xy = $y;
      break;

    default:
      $r_px = $r_range / $x;
      $g_px = $g_range / $x;
      $b_px = $b_range / $x;
      $xy = $x;
      break;
  }

  $r = $f_c[0];
  $g = $f_c[1];
  $b = $f_c[2];
  
  for($i = 0;$i <= $xy;$i++)
  {
    $col = imagecolorallocate($img, round($r), round($g), round($b));
    if ($hv == 'v')
    {
      imageline($img, $x1, $y1+$i, $x2, $y1+$i, $col);
    }
    else
    {
      imageline($img, $x1+$i, $y1, $x1+$i, $y2, $col);
    }
  
    $r = ($f_c[0] < $s_c[0]) ? $r + $r_px : $r - $r_px;
    $g = ($f_c[1] < $s_c[1]) ? $g + $g_px : $g - $g_px;
    $b = ($f_c[2] < $s_c[2]) ? $b + $b_px : $b - $b_px;
  }
  
  return $img;
}

function create_css ( $stylesheet, $theme_name )
{
  global $board_config, $lang;
         
  $stylesheet->set_filenames(array(
		  'body' => 'default_style.tpl'
      )
  );

  // is this a Xanthia theme?
  if ( @$GLOBALS['xanthia_theme'] )
  {
    // Yes!
  
    // get the theme id
    $skinID = pnModAPIFunc('Xanthia','user','getSkinID', array('skin' => $theme_name));

    // check which palette to use
    $paletteid = pnModGetVar('Xanthia',''.$theme_name.'use');

    // get the color scheme
    $colors = pnModAPIFunc('Xanthia','user','getSkinColors',
			    array('skinid' => $skinID,
			          'paletteid' => $paletteid));

    // Get colors
    $colorset1 = colorchange($colors['color1'], 0x40);
    $colorset2 = colorchange($colors['color2'], 0x40);
    $colorset3 = colorchange($colors['color3'], 0x40);
    $colorset4 = ( $colors['color4'] ) ? colorchange($colors['color4'], 0x40) : colorchange($colors['color2'], 0x40);
    $colorset5 = ( $colors['color5'] ) ? colorchange($colors['color5'], 0x40) : colorchange($colors['color1'], 0x40);

    $stylesheet->assign_vars(array(
      'CSS_THEMENAME' => $theme_name,
      'CSS_BACKGROUND' => $colors['background'],
      'CSS_COLOR1' => $colors['color1'],
      'CSS_COLOR2' => $colors['color2'],
      'CSS_COLOR3' => $colors['color3'],
      'CSS_COLOR4' => $colors['color4'],
      'CSS_COLOR5' => $colors['color5'],
      'CSS_COLOR6' => $colors['color6'],
      'CSS_COLOR7' => $colors['color7'],
      'CSS_COLOR8' => $colors['color8'],
 
      'CSS_SEPCOLOR' => $colors['sepcolor'],
      'CSS_TEXT1' => $colors['text1'],
      'CSS_TEXT2' => $colors['text2'],
      'CSS_LINK' => $colors['link'],
      'CSS_VLINK' => $colors['vlink'],
      'CSS_HOVER' => $colors['hover'])
    );
  }
  else
  {
    // Legacy PN theme
    pnThemeLoad($theme_name);
    
    // Get Pn globals colors from legacy themes
    $colorset1 = colorchange(pnThemeGetVar('bgcolor1'), 0x40);
    $colorset2 = colorchange(pnThemeGetVar('bgcolor2'), 0x40);
    $colorset3 = colorchange(pnThemeGetVar('bgcolor3'), 0x40);
    $colorset4 = ( pnThemeGetVar('bgcolor4') ) ? colorchange(pnThemeGetVar('bgcolor4'), 0x40) : colorchange(pnThemeGetVar('bgcolor2'), 0x40);
    $colorset5 = ( pnThemeGetVar('bgcolor5') ) ? colorchange(pnThemeGetVar('bgcolor5'), 0x40) : colorchange(pnThemeGetVar('bgcolor1'), 0x40);

    $stylesheet->assign_vars(array(
      'CSS_THEMENAME' => $theme_name,
      'CSS_BACKGROUND' => pnThemeGetVar('bgcolor1'),
      'CSS_COLOR1' => pnThemeGetVar('bgcolor1'),
      'CSS_COLOR2' => pnThemeGetVar('bgcolor2'),
      'CSS_COLOR3' => pnThemeGetVar('bgcolor3'),
      'CSS_COLOR4' => pnThemeGetVar('bgcolor4'),
      'CSS_COLOR5' => pnThemeGetVar('bgcolor5'),
      'CSS_COLOR6' => pnThemeGetVar('bgcolor4'),
      'CSS_COLOR7' => pnThemeGetVar('bgcolor3'),
      'CSS_COLOR8' => pnThemeGetVar('bgcolor2'),
 
      'CSS_SEPCOLOR' => pnThemeGetVar('bgcolor1'),
      'CSS_TEXT1' => pnThemeGetVar('textcolor1'),
      'CSS_TEXT2' => pnThemeGetVar('textcolor2'),
      'CSS_LINK' => ( pnThemeGetVar('textcolor3') ) ? pnThemeGetVar('textcolor3') : pnThemeGetVar('textcolor1'),
      'CSS_VLINK' => ( pnThemeGetVar('textcolor4') ) ? pnThemeGetVar('textcolor4') : pnThemeGetVar('textcolor2'),
      'CSS_HOVER' => pnThemeGetVar('textcolor1'))
    );
  }
  
  // Build the cellpics
  //

  $cellpics_path = $board_config['template_path'] . "/cellpics/" . $theme_name;

  // Does the cellpic directory exist?
  if (!is_dir($cellpics_path))
  {
    // Nope lets create it
    // @umask(0);
    $succ = @mkdir($cellpics_path);
    if ($succ)
    {
      $succ = @chmod($cellpics_path, 0777);
    }
    if (!$succ) { return false; }
  }
  
  // Does the directory exist now?
  if (@is_dir($cellpics_path))
  {
    // Ok lets make the cellpics
    // Only if they do not already exisit
    // cellpic1
    if ( @!is_file($cellpics_path . '/cellpic1.jpg') )
    {
      $img = @imagecreatetruecolor(8, 27);
      $im = imagecolorgradient($img, 'v', 0, 0, 8, 27, $colorset1[3], $colorset1[2]);
      $succ = create_cellpic($img, $cellpics_path . '/cellpic1.jpg');
      if (!$succ) { return false; }
    }

    // cellpic2
    if ( @!is_file($cellpics_path . '/cellpic2.jpg') )
    {
      $img = @imagecreatetruecolor(300, 27);
      $im = imagecolorgradient($img, 'v', 0, 0, 300, 27, $colorset1[3], $colorset1[2]);
      $succ = create_cellpic($img, $cellpics_path . '/cellpic2.jpg');
      if (!$succ) { return false; }
    }
    
    // cellpic3
    if ( @!is_file($cellpics_path . '/cellpic3.jpg') )
    {
      $img = @imagecreatetruecolor(8, 38);
      $im = imagecolorgradient($img, 'v', 0, 0, 8, 38, $colorset4[4], $colorset4[2]);
      $succ = create_cellpic($img, $cellpics_path . '/cellpic3.jpg');
      if (!$succ) { return false; }
    }
      
    // cellpic4
    if ( @!is_file($cellpics_path . '/cellpic4.jpg') )
    {
      $img = @imagecreatetruecolor(8, 27);
      $im = imagecolorgradient($img, 'v', 0, 0, 8, 27, $colorset3[4], $colorset3[2]);
      $succ = create_cellpic($img, $cellpics_path . '/cellpic4.jpg');
      if (!$succ) { return false; }
    }
      
    // cellpic_bkg
    if ( @!is_file($cellpics_path . '/cellpic_bkg.jpg') )
    {
      $img = @imagecreatetruecolor(10, 80);
      $im = imagecolorgradient($img, 'v', 0, 0, 10, 70, $colorset5[4], $colorset5[2]);
      $im = imagecolorgradient($img, 'v', 0, 70, 10, 80, $colorset5[2], $colorset5[4]);
      $succ = create_cellpic($img, $cellpics_path . '/cellpic_bkg.jpg');
      if (!$succ) { return false; }
    }
  }
    
//  rmdir($board_config['template_path'] . '/cellpics/' . $theme_name);  

  $stylesheet->assign_var_from_handle('CSS_OUTPUT', 'body');
  $style_name = $board_config['template_path'] . "/styles/" . $theme_name . ".css";
  
  if ( $fp = @fopen($style_name, "wb") )
  {
    $find_output = ( isset($stylesheet->vars['CSS_OUTPUT']) ) ? $stylesheet->vars['CSS_OUTPUT'] : $stylesheet->_tpldata['.'][0]['CSS_OUTPUT'];
    @fwrite($fp, $find_output);
    //echo $find_output;
    @fclose($fp);
  }
  else
  {
    return false;
  }
  $stylesheet->destroy;
  return true;
}
?>
