<?php

include('./inc/connect.inc.php');

session_start();

$submit = strip_tags(@$_POST["submit"]);
$un = strip_tags(@$_POST["username"]);
$n = strip_tags(@$_POST["name"]);
$em = strip_tags(@$_POST["email"]);
$pw = strip_tags(@$_POST["password"]);
$pw2 = strip_tags(@$_POST["password2"]);
$d = date("Y-m-d");

if ($submit) {

  //check for existance
  if ($un&&$n&&$em&&$pw&&$pw2) {
    $un_check = mysql_query("SELECT username FROM users WHERE username='$un'");
    //Check the amount of rows where username = $un
    $check = mysql_num_rows($un_check);
    if ($check==0) {
      if (strlen($pw)<25||strlen($pw)>7) {
        $pw = md5($pw);
        $pw2 = md5($pw2);
        if ($pw=$pw2) {
          if (strlen($un)<25) {
            if (strlen($n)<25) {
              if (strlen($em)<50) {
                $queryreg = mysql_query("INSERT INTO users (id,username,name,email,password,sign_up_date)
                VALUES ('','$un','$n','$em','$pw','$d')");
                header('location: feed.php');
                exit();
              }
              else {echo '<p class="suphperror">Your Email must be under 50 characters long!<p>';}
            }
            else {echo "<p class='suphperror'>Your Name must be under 25 characters long!<p>";}
          }
          else {echo '<p class="suphperror">Your Username must be under 25 characters long!<p>';}
        }
        else {echo '<p class="suphperror">Your Password\'s don\'t match!<p>';}
      }
      else {echo '<p class="suphperror" >Your Password must be under 25 and over 5 characters long!</p>';}
    }
    else {echo '<p class="suphperror">Sorry '.$n.', the Username "'.$un.'" has already been taken :\'(';}
  }
  else {echo '<div class="suphperror"><p class="suphperror" >Please fill out all fields</p></div>';}
}

?>

<!DOCTYPE  html>
<html>

<head>

  <meta charset="utf-8"
    name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
  <title>Sign-Up!</title>
  <link href="poll.css.php" rel="stylesheet" type="text/css">

</head>

<body class='signupbg'>

  <div>
    <h2 class='suwelcome'>Welcome to</h2>
    <h1 class='sulogo'>Poll.com</h1>
  </div>

  <div class='sucaa'>
    <h2>Create an account &#8595;</h2>
  </div>

  <form action='signup.php' method='POST'>

    <div class='sufields'>

      <div>
        <h4>Username</h4>
        <input type='text' name='username' placeholder='johnapp_1' value='<?php echo $un ?>' />
      </div>

      <div>
        <h4>Name</h4>
        <input type='text' name='name' placeholder='Johnny Appleseed' value='<?php echo $n ?>' />
      </div>

      <div>
        <h4>Email</h4>
        <input type='text' name='email' placeholder='johnnyappleseed@example.com' value='<?php echo $em ?>' />
      </div>

      <div>
        <h4>Password</h4>
        <input type='password' name='password' placeholder='iliketrees246' />
      </div>

      <div>
        <h4>Repeat Password</h4>
        <input type='password' name='password2' placeholder='iliketrees246' />
      </div>

    </div>

    <div class='createaccountbutton'>
      <input type='submit' name='submit' value='Finished!'/>
    </div>

  </form>

</body>

</html>
