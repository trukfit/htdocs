<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 25.02.2016
 * Time: 19:30
 */
class ValidateDate extends Validator{

   protected function validate(){
      $data = $this->data;
      if(!is_null($data) && strtotime($data) === false) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>