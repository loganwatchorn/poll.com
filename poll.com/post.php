<?php

include('./inc/connect.inc.php');
session_start();

$submit = strip_tags(@$_POST['post']);
$q = strip_tags(@$_POST['question']);
$a1 = strip_tags(@$_POST['a1']);
$a2 = strip_tags(@$_POST['a2']);
$a3 = strip_tags(@$_POST['a3']);
$a4 = strip_tags(@$_POST['a4']);
$a5 = 'other';
$d = date("Y-m-d H:i:s");//, strtotime(str_replace('-', '/', $d)));//date added(datetime)
$ab = $_SESSION['username'];//added by
$pt = $_SESSION['username'];//user posted to

if ($submit) {
  if ($q&&$a1&&$a2) {
    if (strlen($q)<200) {
      if (strlen($a1)<100||strlen($a2)<100||strlen($a3)<100||strlen($a4)<100||strlen($a5)<100) {
    $queryreg = mysql_query("INSERT INTO posts VALUES ('','$q','$a1','$a2','$a3','$a4','$a5','$d','$ab','$pt')");
        header('location: feed.php');
        exit();
      }
      else {echo '<p class="pfphperror">Your answers must be under 100 characters long<p>';}
    }
    else {echo '<p class="pfphperror">Your question must be under 200 characters long<p>';}
  }
  else {echo '<p class="pfphperror">you must fill out the question field and at least 2 answer fields<p>';}
}


?>

<!DOCTYPE html>
<html language="en">

  <head>

    <meta charset="utf-8"
      name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
    <title>Post</title>
    <link href="poll.css.php" rel="stylesheet" type="text/css">

  </head>
  <body spacing="none" class='pbackground'>

    <div class="backheader">
  <form><input type="button"  class='question' value="&#8592;" onClick="history.go(-1);return true;" /></form>
      <h3>Create a Post</h3>
      <input type='button' class='answer showquestion' value='&#8592;' />
      <input type='button' class='photoanswer showquestion' value='&#8592;' />
    </div>

    <form action='post.php' method='post'>

      <div class='pffields'>

        <div class='pfq question'>
          <textarea class='qinput' name='question' placeholder='What is your question?' value='<?php echo $q ?>'></textarea>
        </div>

        <div class='pfa answer'>

          <div class='qdemo'>
            <p></p>
          </div>

          <div>
            <input class='afield' id='ex' type='text' name='a1' placeholder='Answer 1(required)' value='<?php echo $a1 ?>' />
          </div>

          <div>
            <input class='afield' type='text' name='a2' placeholder='Answer 2(required)' value='<?php echo $a2 ?>' />
          </div>

          <div>
            <input class='afield' type='text' name='a3' placeholder='Answer 3' value='<?php echo $a3 ?>' />
          </div>

          <div>
            <input class='afield' type='text' name='a4' placeholder='Answer 4' value='<?php echo $a4 ?>' />
          </div>

          <div class='addother answer'>
            <h1 class='otherh1'>Other</h1><h1 class='othercheck'>&#10004;</h1>
          </div>


        </div>

      </div>

      <div class='postbutton answer'>
        <input type='submit' name='post' value='Done'/>
      </div>

    </form>

    <form action='' method=''>

      <div class='photoanswer'>

        <div class='qdemo'>
          <p></p>
        </div>

        <div class='postphotoslots'>

          <button class='pps1'>
            <h1>Add Photo</h1>
          </button>

          <button class='pps2'>
            <h1>Add Photo</h1>
          </button>

          <button class='pps3'>
            <h1>Add Photo</h1>
          </button>

          <button class='pps4'>
            <h1>Add Photo</h1>
          </button>

        </div>

        <div class='addother'>
          <h1 class='otherh1'>Other</h1><h1 class='othercheck'>&#10004;</h1>
        </div>

        <div class='postbutton'>
          <input type='submit' name='post' value='Done'/>
        </div>

      </div>

    </form>

    <div>
      <button class='showanswers question'>+Answers</button>
      <button class='showphotoanswers question'>+Photos</button>
    </div>

    <script type='text/javascript' src='jquery-2.1.4.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function() {

      var $question = $('.question');
      var $answer = $('.answer');
      var $photoanswer = $('.photoanswer');
      var $showanswer = $('.showanswers');
      var $showquestion = $('.showquestion');
      var $showphotoanswer = $('.showphotoanswers');

      $(".qinput").keyup(function () {
        var $qinput = $('.qinput').val();
        $('.qdemo').html($qinput);
      });


      $answer.hide();
      $photoanswer.hide();

      $showanswer.click(function() {
        $answer.show();
        $question.hide();
        $photoanswer.hide();
      });

      $showquestion.click(function() {
        $question.show();
        $answer.hide();
        $photoanswer.hide();
      });

      $showphotoanswer.click(function() {
        $photoanswer.show();
        $question.hide();
        $answer.hide();
      });

      $('.othercheck').hide();

      $('.addother').click(function() {
        $('.othercheck').slideToggle(100);
      });

      //$('.qdemo').append($qinput);



    });

    </script>


  </body>

</html>
