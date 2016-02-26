<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 20:26
 */
class ValidateImg extends Validator{

   protected function validate(){
      $data = $this->data;
      if(!is_null($data) && !preg_match("/^[a-z0-9-_]+\.(jpg|jpeg|gif|png)$/i", $data)) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>