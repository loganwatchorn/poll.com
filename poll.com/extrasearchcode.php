<?php

  $search = @$_POST["search"];

if (isset($search)) {
  header('location: search.php');

$search_sql_users = "SELECT * FROM users WHERE username LIKE '%".$search."%' OR name '%".$search."%' ";
$search_query_users = mysql_query($search_sql_users);
if (mysql_num_rows($search_query_users)!=0) {
  $search_rs_users = mysql_fetch_assoc($search_query_users);
  $un=$search_rs_users['username'];
  $n=$search_rs_users['name'];

  echo "
    <a href='useraccount.php?un=$un' class='usersearchresults'>
    <img src='profpicsample.jpg'>
    <h1>$un</h1>
    <h2>$n</h1>
    </a>
    ";

  /*if (mysql_num_rows($search_query_users)!=0) {
    do {echo"
      <a href='useraccount.php?un=$un' class='usersearchresults'>
      <img src='profpicsample.jpg'>
      <h1>$un</h1>
      <h2>$n</h1>
      </a>
      ";
    }
    while ($search_rs_users=mysql_fetch_assoc($search_query_users));
  }*/
}
else {echo '
  <h1 class="srerror">No results found :\'(</h1>
  ';}
}

?>
