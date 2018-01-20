<?php

  include ('./inc/navbar.inc.php');
  include('./inc/connect.inc.php');

  $output = '';
  $useroutput = '';

  if (isset($_GET['search'])) {
    $searchq = $_GET['search'];

    $query = mysql_query("SELECT * FROM posts WHERE question LIKE '%$searchq%'") or die ('Could not search');
    $count = mysql_num_rows($query);

    if ($count==0) {
      $output = 'No results found';
    }
    else {
      while ($row = mysql_fetch_array($query)) {
        $question = $row['question'];

        $output .= "
                   <div class='pollsearchresults'>
                   <h1>$question</h1>
                   <h2>1 week ago</h2>
                   <h3 class='psrv'>1738</h3>
                   </div>
                   ";
      }
    }

    $userquery = mysql_query("SELECT * FROM users WHERE username LIKE '%$searchq%' OR name like '%$searchq'") or die ('Could not search');
    $usercount = mysql_num_rows($userquery);

    if ($usercount==0) {
      $useroutput = 'Couln\'t find that user :\'(';
    }
    else {
      while ($userrow = mysql_fetch_array($userquery)) {
        $username = $userrow['username'];
        $name = $userrow['name'];

        $useroutput .= "
                       <a class='usersearchresults' href='useraccount.php?un=$username'>
                         <img src='profpicsample.jpg'>
                         <h1>$username</h1>
                         <h2>Logan Watchorn</h1>
                       </a>
                       ";
      }
    }

  }

?>

<!DOCTYPE html>
<html language="en">

<head>

<meta charset="utf-8"
  name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0"></meta>
<title>Search</title>
<link href="poll.css.php" rel="stylesheet" type="text/css"></link>

</head>
<body spacing="none" class='sbg'>

<div class='searchwrapper'></div>

<div class='searchbar'>
 <form action="search.php" method="GET" />
  <input type="text" name="search"   placeholder="Search" />
 </form>
</div>

<div class='searchpollsusers'>
  <div class='searchpolls'><h1>Polls</h1></div>
  <div class='searchusers'><h1>Users</h1></div>
</div>

<div class='searchresultarea'>

  <div class='polls'>
    <?php echo $output; ?>
  </div>

  <div class='users'>
    <?php echo $useroutput; ?>
  </div>

</div>

<script type='text/javascript' src='jquery-2.1.4.min.js'></script>
<script type='text/javascript'>


  $(document).ready(function() {

    $('.s').css('background-color','#3c3c3c');
    $('.s').css('border-bottom','10px solid #970100');
    $('.s').css('padding-bottom','10px');

    $('.searchusers').addClass('normalfw');
    $('.searchpolls').click(function() {
      $('.searchusers').addClass('normalfw');
      $('.searchpolls').removeClass('normalfw');
    });
    $('.searchusers').click(function() {
      $('.searchpolls').addClass('normalfw');
      $('.searchusers').removeClass('normalfw');
    })

    $('.usersearchresults').hide();

    $('.searchpolls').click(function() {
      $('.pollsearchresults').show();
      $('.usersearchresults').hide();
    });

    $('.searchusers').click(function() {
        $('.usersearchresults').show();
        $('.pollsearchresults').hide();
    });

  });

</script>

</body>

</html>
