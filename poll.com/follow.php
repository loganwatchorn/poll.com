<?php

include('./inc/connect.inc.php');
session_start();
include('userinfo.php');

$action = $_GET['action'];
$myaccountid = $_SESSION['id'];

if ($action == 'follow') {
  mysql_query("INSERT INTO follows VALUES ('','$myaccountid','$userid')");
  header("location: useraccount.php?un=$username");
  exit();
}

if ($action == 'unfollow') {
  mysql_query("DELETE FROM follows WHERE follower='$myaccountid' AND followed='$userid'");
  header("location: useraccount.php?un=$username");
  exit();
}







?>
