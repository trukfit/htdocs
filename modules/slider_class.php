<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 28.02.2016
 * Time: 20:01
 */
class Slider extends Module{

   public function __construct()
   {
      parent::__construct();
      $this->add("course");
   }

   public function getTmplFile()
   {
     return "slider";
   }
}
?>