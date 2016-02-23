<?php
/**
 * Created by PhpStorm.
 * User: Фанит Шириев
 * Date: 23.02.2016
 * Time: 12:33
 */
abstract class Validator{

   const CODE_UNKNOWN = "UNKNOWN_ERROR";

   protected $data;
   private $errors = array();

   public function __construct($data){
      $this->data = $data;
      $this->validate();
   }

   abstract protected function validate();

   public function getErrors(){
      return $this->errors;
   }

   public function isValid($code){
     return count($this->errors) == 0;
   }

   protected function setErrors($code){
     $this->errors[] = $code;
   }
}
?>