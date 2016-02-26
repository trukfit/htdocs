<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 20:30
 */
class ValidateIP extends Validator{

   protected function validate(){
      $data = $this->data;
      if($data == 0) return;
      if(!preg_match("/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\./", $data)) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>