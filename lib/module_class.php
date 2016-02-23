<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 23.02.2016
 * Time: 19:16
 */
abstract class Module extends AbstractModules{

   public function __construct()
   {
      parent::__construct(new View(Config::DIR_TMPL));
   }
}
?>