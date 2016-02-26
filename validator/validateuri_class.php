<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 26.02.2016
 * Time: 21:10
 */
class ValidateURI extends Validator{

   const MAX_LEN = 255;

   protected function validate(){
      $data = $this->data;
      if(mb_strlen($data) > self::MAX_LEN) $this->setErrors(self::CODE_UNKNOWN);
      else{
         $pattern = "~^(?:/[a-z0-9.,_@%&?+=\~/-]*)?(?:#[^ '\"&<>]*)?$~i";
         if(!preg_match($pattern, $data)) $this->setErrors(self::CODE_UNKNOWN);
      }

   }
}
?>