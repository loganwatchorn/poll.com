<?php

include('./inc/connect.inc.php');

session_start();

$signin = @$_POST["signin"];
$un = @$_POST["username"];
$pw = @$_POST["password"];
$pw_md5=md5($pw);

if ($signin) {
  if ($un&&$pw) {
    $query = mysql_query("SELECT * FROM users WHERE username='$un'");
    $numrows = mysql_num_rows($query);
    if ($numrows==1) {
      while ($row = mysql_fetch_array($query)) {
        $dbid = $row['id'];
        $dbun = $row["username"];
        $dbpw = $row["password"];
        $dbn = $row["name"];
        $dbem = $row["email"];
      }
      if ($un==$dbun&&$pw_md5==$dbpw) {
        $_SESSION['id']=$dbid;
        $_SESSION['username']=$dbun;
        $_SESSION['name']=$dbn;
        $_SESSION['email']=$dbem;
        header('location: feed.php');
        exit();
      }
      else {echo '<p class="siphperror">Wrong Password/Username. Try again!<p>';}
    }
    else {echo '<p class="siphperror">That username does not exist.<br>Try again? Or</p><a href="signup.php">Sign Up</a>';}
  }
  else {echo '<p class="siphperror" >Please fill out all fields</p>';}
}

?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset='utf-8'
      name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
    <title>Sign-in!</title>
    <link href="poll.css.php" rel="stylesheet" type="text.css">

  </head>

  <body class='signinbg'>

    <div>
          <h1 class='silogo'>Poll.com</h1>
    </div>

    <form action='signin.php' method='POST'>
      <div class='sifields'>

        <div>
          <input type='text' name='username' placeholder='username' value='<?php echo $un ?>' />
        </div>

        <div>
          <input type='password' name='password' placeholder='password' />
        </div>

      </div>

      <div class='signinbutton'>
        <input type='submit' name='signin' value='Sign In'/>
      </div>

    </form>

  </body>

</html>
