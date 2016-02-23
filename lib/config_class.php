<?php
/**
 * Created by PhpStorm.
 * User: Fanit Shiriev
 * Date: 22.02.2016
 * Time: 12:26
 */

abstract class Config{

   const SITENAME = "FeezyShop.ru";
   const SECRET = "NAILYA";
   const ADDRESS = "http://site.ru";
   const ADM_NAME = "Фанит Шириев";
   const ADM_EMAIL = "admin@feezyshop.ru";

   const DB_HOST = "localhost";
   const DB_USER = "root";
   const DB_PASSWORD = "trukfit";
   const DB_NAME = "weezy";
   const DB_PREFIX = "feezy_";
   const DB_SYM_QUERY = "?";

   const DIR_IMG = "/images/";
   const DIR_IMG_ARTICLES = "/images/articles/";
   const DIR_IMG_AVATAR = "/images/avatar/";
   const DIR_TMPL = "/Server/web/Apache24/htdocs/tmpl";
   const DIR_EMAILS = "/Server/web/Apache24/htdocs/tmpl/emails";

   const FILE_MESSAGES = "/Server/web/Apache24/htdocs/text/messages.ini";

   const COUNT_ARTICLES_ON_PAGE = 3;
   const COUNT_SHOW_PAGES = 10;

   const FORMAT_DATE = "%d.%m.%Y %H:%M:%S";

   const MIN_SEARCH_LEN = 3;
   const LEN_SEARCH_RES = 255;

   const DEFAULT_AVATAR = "default.png";
   const MAX_SIZE_AVATAR = 51200;
}
?>