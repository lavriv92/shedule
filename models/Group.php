<?php
require('./db/DBConnection.php');

class Group 
{
    function __construct($name) 
    {
      $this->name = $name;   
    }

    public static function getAll() {
      $db = getDatabase();
      $query = mysql_query("SELECT groups.id as group_id, 
                                   groups.name as group_name, 
                                   subjects.id as subject_id, 
                                   subjects.name as subject_name 
                            FROM groups 
                            INNER JOIN subjects 
                                ON subjects.group_id=groups.id;", $db);
      if(!$query)
      {
        die("err: ". mysql_error());
      }
      $rows = [];
      while($row = mysql_fetch_assoc($query))
      {
        $rows[] = $row;
      }
      return $rows;
    }
}
?>
