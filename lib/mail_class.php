<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 23.02.2016
 * Time: 19:13
 */
class Mail extends AbstractMail{

   public function __construct()
   {
      parent::__construct(new View(Config::DIR_EMAILS), Config::ADM_EMAIL);
      $this->setFromName(Config::ADM_NAME);
   }
}
?>