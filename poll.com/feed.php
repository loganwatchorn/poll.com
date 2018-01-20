<?php
include ('./inc/navbar.inc.php');
include('./inc/connect.inc.php');
?>

<!DOCTYPE html>
<html language="en">

  <head>

    <meta charset="utf-8"
    name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
    <title>Feed</title>
    <link href="poll.css.php" rel="stylesheet" type="text/css">

  </head>

  <body spacing="none">

    <div class="mainheader">
      <h1>Poll.com</h1>
      <a href="settings.php"><img src='settings.png' /></a>
    </div>

    <div>
      <button class='rowtablefeed'>
        <img src='rowtable-row.png' class='rowimg' />
        <img src='rowtable-table.png' class='tableimg' />
      </button>
    </div>

    <div class='feed'>
      <?php
      include('postform.php');
      ?>
    </div>

    <script type='text/javascript' src='jquery-2.1.4.min.js'></script>
    <script type='text/javascript'>

      $('.f').css('background-color','#3c3c3c');
      $('.f').css('border-bottom','10px solid #970100');
      $('.f').css('padding-bottom','10px');


      var rowtableoffset = jQuery('button.rowtablefeed').offset().top;
      jQuery(window).scroll(function(){
        var scrollpos = jQuery(window).scrollTop();
        if (scrollpos >= rowtableoffset) {
          jQuery('button.rowtablefeed').addClass('rowtablefixed');
        }
        else {
          jQuery('button.rowtablefeed').removeClass('rowtablefixed');
        }
      });


      $('.tableimg').hide();

      $('.rowtablefeed').click(function() {
        $('.postanswers').toggle();
        $('.pacwrapper').toggle();
        $('.pq').toggleClass('pqcondensed');
        $('.pf').toggleClass('pfcondensed');
        $('.pw').toggleClass('pwcondensed');

        $('.tableimg').toggle();
        $('.rowimg').toggle();
      });

    </script>

  </body>


</html>
