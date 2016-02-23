<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 23.02.2016
 * Time: 19:00
 */
class Select extends AbstractSelect{

   public function __construct()
   {
      parent::__construct(DataBase::getDBO());
   }
}
?>