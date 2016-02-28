<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 27.02.2016
 * Time: 12:34
 */
class CommentDB extends ObjectDB{

   protected static $table = "comments";

   public function __construct()
   {
      parent::__construct(self::$table);
      $this->add("article_id", "ValidateID");
      $this->add("user_id", "ValidateID");
      $this->add("parent_id", "ValidateID");
      $this->add("text", "ValidateSmallText");
      $this->add("date", "ValidateDate", self::TYPE_TIMESTAMP, $this->getDate());
   }

   protected function postInit()
   {
      $this->link = URL::get("article", "", array("id" => $this->article_id));
      $this->link = URL::addID($this->link, "comment_".$this->id);
      return true;
   }

   public static function getAllOnArticleID($article_id){
      $select = new Select(self::$db);
      $select->from(self::$table, "*")
         ->where("`article_d` =".self::$db->getSQ(), array($article_id))
         ->order("date");
      $comments = ObjectDB::buildMultiple(__CLASS__, self::$db->select($select));
      $comments = ObjectDB::addSubObject($comments, "UserDB", "user", "user_id");
      return $comments;
   }

   public static function getCountOnArticleID($article_id){
      $select = new Select(self::$db);
      $select->from(self::$table, array("COUNT(id)"))
        ->where("`article_d` =".self::$db->getSQ(), array($article_id));
      return self::$db->selectCell($select);

   }
}
?>