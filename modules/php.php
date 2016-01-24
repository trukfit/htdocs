<?php
   function getN($str){
     switch($str){
        case "один": echo 1;
           break;
        case "два": echo 2;
           break;
     }
   }
getN("один");
echo "<br />";
$array = array();
$k = 0;
for($i = 1; $i <= 5; $i++)
   for($j = 1; $j <= 4; $j++){
      $array[$k] = $i * $j;
      $k++;
   }
   for($i = 0; $i < count($array); $i++){
      echo $i."<br />";
   }
print_r($array);
echo "<br />";
$r = array(array(11, 12, 13, 14, 15), array(21, 22, 23, 24, 25), array(31,32, 33, 34, 35));
echo "<table border = '1'>";
for($i = 0; $i < count($r); $i++){
   echo "<tr>";
   for($j = 0; $j < count($r[$i]); $j++){
      echo "<td>".$r[$i][$j]."</td>";
   }
   echo "</tr>";
}
echo "</table";

?>