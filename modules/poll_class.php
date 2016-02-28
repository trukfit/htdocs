<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 28.02.2016
 * Time: 20:06
 */

class Poll extends Module{

   public function __construct()
   {
      parent::__construct();
      $this->add("title");
      $this->add("action");
      $this->add("data", null, true);
   }

   public function getTmplFile()
   {
      return "poll";
   }
}
?>