<?php
include 'class.php';

// $user = new User($conn);
//     $user-> delete_contact($_GET['id']);
    $testobj = new User();
  $testobj->delete($_GET['id']);

?>