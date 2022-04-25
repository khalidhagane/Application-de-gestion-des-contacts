<?php
include 'class.php';

    $testobj = new User();
  $testobj->delete($_GET['id']);

?>