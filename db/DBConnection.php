<?php
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', 'password');
  define('DATABASE', 'shedule');

  function getDatabase() 
  {
      $link = mysql_connect(HOST, USER, PASSWORD);
      if(!$link)
      {
          die("err:" . mysql_error());
      }
      mysql_select_db(DATABASE, $link);
      return $link;
  }
?>
