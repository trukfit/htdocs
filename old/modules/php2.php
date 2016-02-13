<?php
   /*if(isset($_POST["go"])){
      $n_1 = $_POST["n_1"];
      $n_2 = $_POST["n_2"];
      $sum = 0;
      if((is_numeric($n_1)) && is_numeric($n_2)){
         $sum = $n_1 + $n_2;
         echo "Сумма чисел ".$n_1." и ".$n_2." равна ".$sum;
      }
      else echo "Одно или оба введенных значения не являются числами";
   }
for($i = 0; $i < 10; $i++){
   $t = mt_rand(10, 100);
   $r = sin($t);
   $y = round($r, 4);
   echo $y."<br />";

}

for($i = 0; $i < 5; $i++){
   $r = chr(mt_rand(110, 120));
   echo $r;
}

if(isset($_POST["go"])){
   $n_1 = $_POST["n_1"];
   $r = trim($n_1);
   echo "Пароль без пробелов ".$r."<br />";
   echo "Длина пароля ".strlen($r)."<br />";
   echo "Хэш пароля ".md5($r);
}

$ar = array(4, 6, 87, 14, 65, 8);
$ar2 = array(24, 6, 77, 4, 15, 7);
$ar3 = array_merge($ar, $ar2);
print_r($ar3);
echo "<br />";
$ar3 = array_unique($ar3);
print_r($ar3);
echo "<br />";
asort($ar3);
print_r($ar3);

if(isset($_POST["go"])){
   $n_1 = $_POST["n_1"];
   $m_1 = $_POST["m_1"];
   $year = $_POST["year"];
  if(checkdate($m_1, $n_1, $year)){
     $time = mktime(23, 59, 59, $m_1, $n_1, $year);
     echo date("d-m-Y H:i:s", $time);
  }
   else echo "Некорректная дата";
}

if(isset($_POST["go"])){
   $name = $_POST["name"];
   $commit = $_POST["commit"];
   $file = fopen("name.txt", "a+t");
   fwrite($file, "$name => $commit\n");
   fclose($file);
   $file = fopen("name.txt", "r+t");
   while(!feof($file)){
      echo fread($file, 30);
      echo "<br />";
   }
}

$array = parse_ini_file("set.ini", true);
 echo "<span style = color:".$array['color']['color'].">Привет всем!</span>";
echo "<span style = font-size:".$array['size']['size'].">Привет всем!</span>";
   */
$dir = "./images/";
if(isset($_FILES["upload_file"])){
 $upload = $_FILES["upload_file"]["tmp_name"];
 $upload_name = $_FILES["upload_file"]["name"];
 $upload_size = $_FILES["upload_file"]["size"];
 $upload_type = $_FILES["upload_file"]["type"];
 $upload_code = $_FILES["upload_file"]["error"];

 if($upload_code == 0){
  $upload_name = $dir . $upload_name;
  if(copy($upload, $upload_name)) echo "Файл ". $upload_name." успешно загружен в папку ".$dir;
 }
 else echo "Неизвестная ошибка";
}


?>

 <html>
   <head>
   </head>
   <body>
   <form name = "my_form" action = "php2.php" method = "post" enctype="multipart/form-data">
      <input type = "file" name = "upload_file" />
      <input type = "submit" name = "go" />
   </form>
   </body>
</html>


