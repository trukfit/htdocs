<?php
   if(isset($_POST["go"])){
   $name = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $color = $_POST["color"];
      echo "<span style = 'color: $color'> "
        .$name."<br>".$lastname.
        "</span>";
}
   echo '<form name = "my_form" action = "site.php" method = "post" >
           <table>
               <tr>
                   <td>Имя: </td>
                       <td>
                       <input type = "text" name = "firstname" autofocus = "autofocus" placeholder="Имя"/>
                   </td>
               </tr>
               <tr>
                   <td>Фамилия: </td>
                   <td>
                       <input type = "text" name = "lastname" placeholder="Фамилия"/>
                   </td>
               </tr>
               <tr>
                   <td>E-mail:</td>
                   <td>
                       <input type = "email" name = "email" placeholder = "ваш e-mail"/>
                   </td>
               </tr>
               <tr>
                   <td>Дата рождения: </td>
                   <td>
                       <input type = "datetime-local" name = "date" placeholder="Дата рождения"/>
                   </td>
               </tr>
               <tr>
                   <td>Телефон: </td>
                   <td>
                       <input type = "tel" name = "tel" pattern = "8495-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="Телефон"/> пример 8495-111-11-11
                   </td>
               </tr>
               <tr>
                   <td>Пароль: </td>
                   <td>
                       <input type = "password" name = "password" placeholder="Пароль"/>
                   </td>
               </tr>
               <tr>
                   <td>range: </td>
                   <td>
                       <input type = "range" name = "range" placeholder="range"/>
                   </td>
               </tr>
               <tr>
                   <td colspan = "2">
                       <input type = "submit" name = "go" />
                   </td>
               </tr>
               <tr>
                   <td colspan = "2">
                       <progress value = "3" max = "10"></progress>
                   </td>
               </tr>
               <tr>
                   <td colspan = "2">
                       <input type = "color" name = "color" />
                   </td>
               </tr>
           </table>
       </form>';
?>