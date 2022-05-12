<?php
include 'user.php';

    $testobj = new User();
  $testobj->delete($_GET['id']);

?>