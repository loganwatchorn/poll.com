<?php

?>

<!DOCTYPE html>
<html>

  <head>

    <meta type="text/html" charset="utf-8">
    <title></title>
    <link href="poll.css.php" rel="stylesheet" type="text/css">

  </head>

  <body class='sbg'>

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

      <div class='pollsearchresults'>
        <h1>Fav color?</h1>
        <h2>1 week ago</h2>
        <h1 class='psrv'>1738</h1>
      </div>

      <div class='usersearchresults'>
        <img src='profpicsample.jpg'>
        <h1>loganwatchorn</h1>
        <h2>Logan Watchorn</h1>
      </div>

    </div>

    <script type='text/javascript' src='jquery-2.1.4.min.js'></script>
    <script type='text/javascript'>

    $(document).ready(function() {

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
