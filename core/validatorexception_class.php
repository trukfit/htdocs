<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 23.02.2016
 * Time: 12:41
 */
class ValidatorException extends Exception{

   private $errors;

   public function __construct($errors){
      parent::__construct();
      $this->errors =$errors;
   }

   public function getErrors(){
      return $this->errors;
   }
}
?>