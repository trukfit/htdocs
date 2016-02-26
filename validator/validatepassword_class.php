<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 26.02.2016
 * Time: 19:53
 */
class ValidatePassword extends Validator{

   const MAX_LEN = 100;
   const MIN_LEN = 6;
   const CODE_EMPTY = "ERROR_PASSWORD_EMPTY";
   const CODE_CONTENT = "ERROR_PASSWORD_INVALID";
   const CODE_MAX_LEN = "ERROR_PASSWORD_MAX_LEN";
   const CODE_MIN_LEN = "ERROR_PASSWORD_MIN_LEN";

   protected function validate(){
      $data = $this->data;
      if(mb_strlen($data) == 0) $this->setErrors(self::CODE_EMPTY);
      else{
         if(mb_strlen($data) < self::MIN_LEN) $this->setErrors(self::CODE_MIN_LEN);
         elseif(mb_strlen($data) > self::MAX_LEN) $this->setErrors(self::CODE_MAX_LEN);
         elseif(!preg_match("/^[a-z0-9_]+$/i", $data)) $this->setErrors(self::CODE_CONTENT);
      }
   }
}
?>