<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 23.02.2016
 * Time: 19:02
 */
abstract class ObjectDB extends AbstractObjectDb{

   private static $months = array("янв", "фев", "март", "апр", "май", "июнь", "июль", "авг", "сен", "окт", "ноя", "дек");

   public function __construct($table)
   {
      parent::__construct($table, Config::FORMAT_DATE);
   }

   protected static function getMonth($date = false){
      if($date) $date = strtotime($date);
      else $date = time();
      return self::$months[date("n", $date) - 1];
   }

   public function preEdit($field, $value){
      return true;
   }

   public function postEdit($field, $value){
      return true;
   }
}
?>