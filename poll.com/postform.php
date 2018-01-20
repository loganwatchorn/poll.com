<?php

?>

<!DOCTYPE html>
<html>

  <head>

    <meta type="text/html" charset="utf-8">
    <title></title>
    <link href="poll.css.php" rel="stylesheet" type="text/css">

  </head>

  <body>

    <div class='pw'>

      <div class='pacwrapper'>
        <div class='pac'>
          <img src='profpicsample.jpg' />
          <h2>Username</h2>
        </div>
      </div>

      <div class='pq'>
        <h3>What is the nicest car?</h3>
      </div>

      <div class='postanswers'>
        <div class='pfanswerbutton'><p class='pp'>20%</p><p class='pa'>Mclaren P1</p></div>
        <div class='pfanswerbutton'><p class='pp'>20%</p><p class='pa'>LaFerrari</p></div>
        <div class='pfanswerbutton'><p class='pp'>20%</p><p class='pa'>Lamborghini Aventador</p></div>
        <div class='pfanswerbutton'><p class='pp'>20%</p><p class='pa'>Audi r8</p></div>
        <div class='pfanswerbutton'><p class='pp'>20%</p><p class='pa'>Mercedes SLS</p></div>
      </div>

      <div class='pf'>
        <div class='pfc'>
          <h4>Comments:</h4>
          <h3>1738</h3>
        </div>
        <div class='pfv'>
          <h4>Votes:</h4>
          <h3>2657</h3>
        </div>
      </div>

    </div>

    <script type="text/javascript" src='jquery-2.1.4.min.js'></script>
    <script type="text/javascript">

      $(document).ready(function(){

        $('.rowtable2').click(function() {
          $('.postanswers').toggle();
        });

      });

      $('.pp').hide();
      $('.pa').addClass('pabeforeclicked');

      $('.pfanswerbutton').click(function() {
        $('.pp').slideRight(200);
        $('.pa').removeClass('pabeforeclicked');
        $(this).css('background-color','blue');
      });

    </script>

  </body>

</html>
