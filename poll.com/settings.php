<?php

include('./inc/connect.inc.php');
session_start();

?>

<!DOCTYPE html>

<html>

<head>
<meta type="text/html" charset="utf-8"
  name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
<title>Settings</title>
<link href="poll.css.php" rel="stylesheet" type="text/css">
</head>

<body class='setbg'>

<div class="setheader">
 <form>
  <input type="button" value="&#8592;" onClick="history.go(-1);return true;" />
</form>
 <h1>Settings</h1>
</div>

<div class='setoptions'>
  <a href='editprofile.php'>Edit Profile</a>
  <a href='logout.php'>Logout</a>
</div>









</body>

</html>
