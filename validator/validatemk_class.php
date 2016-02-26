<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 20:48
 */
class ValidateMK extends Validator{

   const MAX_LEN = 255;
   const CODE_EMPTY = "ERROR_MK_EMPTY";
   const CODE_MAX_LEN = "ERROR_MK_MAX_LEN";

   protected function validate(){
      $data = $this->data;
      if(mb_strlen($data) == 0) $this->setErrors(self::CODE_EMPTY);
      if(mb_strlen($data) > self::MAX_LEN) $this->setErrors(self::CODE_MAX_LEN);
   }
}
?>