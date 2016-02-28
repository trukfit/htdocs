<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 27.02.2016
 * Time: 12:34
 */
class SectionDB extends ObjectDB{

   protected static $table = "sections";

   public function __construct()
   {
      parent::__construct(self::$table);
      $this->add("title", "ValidateTitle");
      $this->add("img", "ValidateIMG");
      $this->add("description", "ValidateText");
      $this->add("meta_desc", "ValidateMD");
      $this->add("meta_key", "ValidateMK");
   }

   protected function postInit()
   {
      if(!is_null($this->img)) $this->img = Config::DIR_IMG_ARTICLES.$this->img;
      $this->link = URL::get("section", "", array("id" => $this->id));
      return true;
   }

   protected function preValidate(){
      if(!is_null($this->img)) $this->img = basename($this->img);
      return true;
   }

}
?>