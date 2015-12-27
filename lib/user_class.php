<?php
   class User {
      private $db;
      private static $user = null;

      private function __construct(){
         $this->db = new mysqli("localhost", "root", "trukfit", "weezy") or die("Не удалось подключиться к базе данных");
      }

      public static function getObject(){
         if(self::$user === null) self::$user = new User();
         return self::$user;
      }

      public function regUser($login, $password, $email){
         if($login == "") return false;
         if($email == "") return false;
         if($password == "") return false;
         $password = md5($password);
         return $this->db->query("INSERT INTO `users` (`login`, `email`, `password`) VALUES ('$login', '$email', '$password')");
      }

      private function checkUser($login, $email, $password){
         $result_set = $this->db->query("SELECT `password` FROM `users` WHERE `login` = '$login' AND `email` = '$email'");
         $user = $result_set->fetch_assoc();
         $result_set->close();
         if(!$user) return false;
         return $user["password"] === $password;
      }

      public function isAuth(){
         session_start();
         $login = $_SESSION["login"];
         $email = $_SESSION["email"];
         $password = $_SESSION["password"];
         return $this->checkUser($login, $email, $password);
      }

      public function login($login, $email, $password){
         $password = md5($password);
         if($this->checkUser($login, $email, $password)){
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            return true;
         }
         else return false;
      }

      public function __destruct()
      {
         if($this->db) $this->db->close();
      }
   }
?>