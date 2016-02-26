<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 26.02.2016
 * Time: 19:33
 */
class ValidateName extends Validator{

   const MAX_LEN = 100;
   const CODE_EMPTY = "ERROR_NAME_EMPTY";
   const CODE_INVALID = "ERROR_NAME_INVALID";
   const CODE_MAX_LEN = "ERROR_NAME_MAX_LEN";

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