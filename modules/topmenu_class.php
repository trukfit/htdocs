<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 28.02.2016
 * Time: 17:38
 */
class TopMenu extends Module{

   public function __construct()
   {
      parent::__construct();
      $this->add("uri");
      $this->add("items", null, true);
   }

   public function getTmplFile()
   {
      return "topmenu";
   }
}
?>