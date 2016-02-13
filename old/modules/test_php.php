<?php
  /* define("g", 9.8);
   echo g;
echo defined("g");
  */

$f = parse_ini_file("set.ini");
print_r($f);
echo "<br />";
echo "<p style = 'background: ".$f['background']."'>Привет</p>";
?>
