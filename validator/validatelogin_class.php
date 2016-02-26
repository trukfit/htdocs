<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 20:34
 */
class ValidateLogin extends Validator{

   const MAX_LEN = 100;
   const CODE_EMPTY = "ERROR_LOGIN_EMPTY";
   const CODE_INVALID = "ERROR_LOGIN_INVALID";
   const CODE_MAX_LEN = "ERROR_LOGIN_MAX_LEN";

   protected function valide(){
      $data = $this->data;
      if(mb_strlen($data) == 0) $this->setErrors(self::CODE_EMPTY);
      else{
         if(mb_strlen($data) > self::MAX_LEN) $this->setErrors(self::CODE_MAX_LEN);
         elseif ($this->isContainQuotes($data)) $this->setErrors(self::CODE_INVALID);
      }
   }
}
?>