<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 27.02.2016
 * Time: 14:18
 */
class ValidateCourseType extends Validator{

   const MAX_COURSETYPE = 3;

   protected function validate(){
      $data = $this->data;
      if(!is_int($data)) $this->setErrors(self::CODE_UNKNOWN);
      else{
         if(($data < 1) || ($data > self::MAX_COURSETYPE)) $this->setErrors(self::CODE_UNKNOWN);
      }
   }
}
?>