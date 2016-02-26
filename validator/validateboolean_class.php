<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 19:26
 */
class ValidateBoolean extends Validator{

   protected function validate()
   {
     $data = $this->data;
      if(($data != 0) && ($data != 1)) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>