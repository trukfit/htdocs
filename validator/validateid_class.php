<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 20:22
 */
class ValidateID extends Validator{

   protected function validate(){
      $data = $this->data;
      if((!is_null($data) && (!is_int($data)) || ($data < 0 ))) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>