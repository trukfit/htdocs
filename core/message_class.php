<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 23.02.2016
 * Time: 18:26
 */
class Message{

   private $data;

   public function __construct($file){
      $this->data = parse_ini_file($file);
   }

   public function get($name){
      return $this->data[$name];
   }
}
?>