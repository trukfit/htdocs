<?php
/**
 * Created by PhpStorm.
 * User: Фанит Шириев
 * Date: 22.02.2016
 * Time: 21:17
 */
class Request{

   private $data;

   public function __construct(){
      $this->data = $this->xss($_REQUEST);
   }

   public function __get($name){
      if(isset($this->data[$name])) return $this->data[$name];
   }

   private function xss($data){
      if(is_array($data)){
         $escaped = array();
         foreach($data as $key => $value){
            $escaped[$key] = $this->xss($value);
         }
         return $escaped;
      }
      return trim(htmlspecialchars($data));
   }
}
?>