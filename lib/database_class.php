<?php
/**
 * Created by PhpStorm.
 * User: Фанит Шириев
 * Date: 23.02.2016
 * Time: 18:53
 */
class DataBase extends AbstractDataBase{

   private static $db;

   public static function getDBO(){
      if(self::$db === null) self::$db = new DataBase(Config::DB_HOST, Config::DB_USER,
        Config::DB_PASSWORD, Config::DB_NAME, Config::DB_SYM_QUERY, Config::DB_PREFIX);
      return self::$db;
   }
}
?>