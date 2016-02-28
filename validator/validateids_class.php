<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 27.02.2016
 * Time: 14:18
 */
class ValidateIDs extends Validator{

   protected function validate(){
      $data = $this->data;
      if(is_null($data)) return;
      if(!preg_match("/^\d+(,\d+)*\d?$/")) $this->setErrors(self::CODE_UNKNOWN);
   }
}
?>