<html>
<head>
   <style>
      img{
         width: 500px;
      }
   </style>
</head>
<?php
$d = "modules/random_image/images";
   $f = scandir(".");
$k = mt_rand(2, count($f) - 2);
 echo "<img src = $f[$k]>";
print_r($f);
?>

</html>
