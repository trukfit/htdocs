<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 19:23
 */
class ValidateActivation extends Validator{

   const MAX_LEN = 100;

   protected function validate()
   {
      $data = $this->data;
      if(mb_strlen($data) > self::MAX_LEN) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>