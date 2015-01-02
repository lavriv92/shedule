<?php
  require_once('./models/Group.php');

  class IndexController 
  {
    public function displayData() {
      $results = Group::getAll();
      return $results;
    }
  }
?>
