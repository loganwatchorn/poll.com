<?php

include('./inc/connect.inc.php');
session_start();

$un = $_SESSION['username'];

echo 'Welcome, '.$un.'!';
?>

<!DOCTYPE html>
<html>
  <body>

    <a href='logout.php'>Logout</a>

  </body>
</html>
