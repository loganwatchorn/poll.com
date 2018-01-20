<?php

include ('./inc/navbar.inc.php');
include('./inc/connect.inc.php');
//$username = $_SESSION['username'];
include('userinfo.php');

//"Posted" section
$post = '';
$noposts = '';

$getposts=mysql_query("SELECT * FROM posts WHERE added_by='$username' AND user_posted_to='$username'
  ORDER BY id DESC limit 10") or die(mysql_error());
while ($row = mysql_fetch_assoc($getposts)) {
  $id = $row['id'];
  $q = $row['question'];
  $a1 = $row['answer_1'];
  $a2 = $row['answer_2'];
  $a3 = $row['answer_3'];
  $a4 = $row['answer_4'];
  $a5 = $row['answer_5'];
  $time_added = $row['time_added'];
  $added_by = $row['added_by'];
  $user_posted_to = $row['user_posted_to'];

  $post .= "
  <div class='pw'>

    <div class='pacwrapper'>
      <div class='pac'>
        <img src='profpicsample.jpg' />
        <h2>$added_by</h2>
      </div>
    </div>

    <div class='pq'>
      <h3>$q</h3>
    </div>

    <div class='postanswers'>
      <div><p class='pp'></p><p class='pa'>$a1</p></div>
      <div><p class='pp'></p><p class='pa'>$a2</p></div>
      <div><p class='pp'></p><p class='pa'>$a3</p></div>
      <div><p class='pp'></p><p class='pa'>$a4</p></div>
      <div><p class='pp'></p><p class='pa'>$a5</p></div>
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
  ";
}

$numrows = mysql_num_rows($getposts);
if ($numrows==0) {
	$noposts = '<h1 class="usernoposts">You haven\'t posted anything yet</h1>';
}

//"Direct" section
$directposts = '';
$nodirectposts = '';

$getdirectposts=mysql_query("SELECT * FROM posts WHERE added_by!='$username' AND user_posted_to='$username'
  ORDER BY id DESC limit 10") or die(mysql_error());
while ($row = mysql_fetch_assoc($getdirectposts)) {
  $id = $row['id'];
  $q = $row['question'];
  $a1 = $row['answer_1'];
  $a2 = $row['answer_2'];
  $a3 = $row['answer_3'];
  $a4 = $row['answer_4'];
  $a5 = $row['answer_5'];
  $time_added = $row['time_added'];
  $added_by = $row['added_by'];
  $user_posted_to = $row['user_posted_to'];

  $directposts .= "
  <div class='pw'>

    <div class='pacwrapper'>
      <div class='pac'>
        <img src='profpicsample.jpg' />
        <h2>$added_by</h2>
      </div>
    </div>

    <div class='pq'>
      <h3>$q</h3>
    </div>

    <div class='postanswers'>
      <div><p class='pp'></p><p class='pa'>$a1</p></div>
      <div><p class='pp'></p><p class='pa'>$a2</p></div>
      <div><p class='pp'></p><p class='pa'>$a3</p></div>
      <div><p class='pp'></p><p class='pa'>$a4</p></div>
      <div><p class='pp'></p><p class='pa'>$a5</p></div>
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
  ";
}
$directnumrows = mysql_num_rows($getdirectposts);
if ($directnumrows==0) {
  $nodirectposts = '<h1 class="usernoposts">No one has made a post directly to your page</h1>';
}

$myid = $_SESSION['id'];
$followerquery = mysql_query("SELECT * FROM follows WHERE followed='$myid'") or die(mysql_error());
$numfollowers = mysql_num_rows($followerquery);



?>

<!DOCTYPE html>
<html language="en">

<head>

<meta charset="utf-8"
  name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
<title>Your Account</title>
<link href="poll.css.php" rel="stylesheet" type="text/css">

</head>
<body spacing="none">

<div class="aheader">
 <h1><?php echo $username?></h1>
 <a href="settings.php"><img src='settings.png' /></a>
</div>

<div class='profcovnamecontainer'>
 <img class="covpic" src="covpicsample.jpg" height="20%" width="100%" alt="cover pic">
 <img class="profpic" src="profpicsample.jpg">
 <h1 class="name"><?php echo $name?></h1>
 <p class='followers'>Followers: <?php echo $numfollowers ?></p>
</div>

<div class='pdv'>
  <a class="asked"><h3>Posts<br><strong><?php echo $numrows ?></strong></h3></a>
  <a class="direct"><h3>Direct<br><strong><?php echo $directnumrows; ?></strong></h3></a>
  <a class="votes"><h3>Votes<br><strong>-#-</strong></h3></a>
</div>

  <div>
    <button class="rowtable">
      <img src="rowtable-row.png" class="rowimg" />
      <img src="rowtable-table.png" class="tableimg" />
    </button>
  </div>

<div class='aif'>

  <div class='postsasked'>
    <?php
    echo $post;
    echo $noposts;
    ?>
  </div>

  <div class='directposts'>
    <?php
    echo $directposts;
    echo $nodirectposts
    ?>
  </div>

  <div class='numvotes'>
  </div>

</div>

<script type="text/javascript" src='jquery-2.1.4.min.js'></script>
<script type="text/javascript">

$(document).ready(function() {

  $('.a').css('background-color','#3c3c3c');
  $('.a').css('border-bottom','10px solid #970100');
  $('.a').css('padding-bottom','10px');

  var $direct = $('.directposts');
  var $asked = $('.postsasked');
  var $votes = $('.numvotes');

  $direct.hide();
  $asked.show();
  $votes.hide();


  $('.direct').click(function() {
    $direct.show();
    $asked.hide();
    $votes.hide();
  });

  $('.asked').click(function() {
    $direct.hide();
    $asked.show();
    $votes.hide();
  });

  $('.votes').click(function() {
    $direct.hide();
    $asked.hide();
    $votes.show();
  });

  var rowtableoffset = jQuery('button.rowtable').offset().top;
  jQuery(window).scroll(function(){
    var scrollpos = jQuery(window).scrollTop();
    if (scrollpos >= rowtableoffset) {
      jQuery('button.rowtable').addClass('rowtablefixed');
    }
    else {
      jQuery('button.rowtable').removeClass('rowtablefixed');
    }
  });


  $('.tableimg').hide();

  $('.rowtable').click(function() {
    $('.postanswers').toggle();
    $('.pacwrapper').toggle();
    $('.pq').toggleClass('pqcondensed');
    $('.pf').toggleClass('pfcondensed');
    $('.pw').toggleClass('pwcondensed');

    $('.tableimg').toggle();
    $('.rowimg').toggle();
  });

  $('.pwcondensed').click(function() {
    $('next.postanswers').toggle();
    $('next.pacwrapper').toggle();
    $('next.pq').toggleClass('pqcondensed');
    $('next.pf').toggleClass('pfcondensed');
    $('next.pw').toggleClass('pwcondensed');
  });

  $('.postanswers').hide();
  $('.pacwrapper').hide();
  $('.pq').addClass('pqcondensed');
  $('.pf').addClass('pfcondensed');
  $('.pw').addClass('pwcondensed');


  $(".pa:empty").parent().hide();


});




</script>

</body>

</html>
