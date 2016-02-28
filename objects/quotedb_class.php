<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 27.02.2016
 * Time: 14:56
 */
class QuoteDB extends ObjectDB
{
   protected static $table = "quotes";

   public function __construct()
   {
      parent::__construct(self::$table);
      $this->add("author", "ValidateTitle");
      $this->add("text", "ValidateSmallText");
   }

   public function loadRandom(){
      $select = new Select(self::$db);
      $select->from(self::$table, "*")
        ->rand()
        ->limit(1);
      $row = self::$db->selectRow($select);
      return $this->init($row);
   }
}

?>