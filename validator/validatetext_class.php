<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 26.02.2016
 * Time: 20:03
 */
class ValidateText extends Validator{

   const MAX_LEN = 500000;
   const CODE_EMPTY = "ERROR_TEXT_EMPTY";
   const CODE_MAX_LEN = "ERROR_TEXT_MAX_LEN";

   protected function validate(){
      $data = $this->data;
      if(mb_strlen($data) == 0) $this->setErrors(self::CODE_EMPTY);
      elseif(mb_strlen($data) > self::MAX_LEN) $this->setErrors(self::CODE_MAX_LEN);
   }
}
?>