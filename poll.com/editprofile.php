<?php

include('./inc/connect.inc.php');
session_start();

?>

<!DOCTYPE html>
<html>

  <head>

    <meta type="text/html" charset="utf-8"
      name="viewport" content="width=device-width, initial-scale=1, maximum-scale=.4, user-scalable=0">
    <title>Edit Profile</title>
    <link href="poll.css.php" rel="stylesheet" type="text/css">

  </head>

  <body class='epbg'>

    <div class="backheader">
      <form><input type="button"  class='question' value="&#8592;" onClick="history.go(-1);return true;" /></form>
      <h3>Edit your profile</h3>
    </div>

    <div class='profcovnamecontainer'>
      <a class='covpicep'><img src="covpicsample.jpg" height="20%" width="100%" alt="cover pic"></a>
      <a class='profpicep'><img src="profpicsample.jpg"></a>
      <a class="nameep"><?php echo $_SESSION["name"]?></a>
    </div>

    <div class='uep'>

      <form class='epf' action='' method='' >

        <div class='epfh unh'>
          <h1><?php echo $_SESSION['username']; ?></h1>
        </div>

        <div class='epfi unf'>
          <input class='efpif' type='text' name='username' placeholder='Type new username' />
          <input class='epfis' type='submit' name='submitun' value='&#10004;' />
        </div>

      </form>

      <form class='epf' action='' method='' >

        <div class='epfh emh'>
          <h1><?php echo $_SESSION['email']; ?></h1>
        </div>

        <div class='epfi emf'>
          <input class='efpif' type='text' name='email' placeholder='Type new email' />
          <input class='epfis' type='submit' name='submitem' value='&#10004;' />
        </div>

      </form>

      <form class='epf' action='' method='' >

        <div class='epfh pwh'>
          <h1>Password</h1>
        </div>

        <div class='epfi pwf'>
          <input class='efpipw' type='text' name='oldpassword' placeholder='Type old password' />
          <input class='efpipw' type='text' name='newpassword1' placeholder='Type New password' />
          <input class='efpif' type='text' name='newpassword2' placeholder='Repeat new password' />
          <input class='epfis' type='submit' name='submitpw' value='&#10004;' />
        </div>

      </form>

    </div>

    <script type="text/javascript" src='jquery-2.1.4.min.js'></script>
    <script type="text/javascript">
      $(document).ready(function() {

        $('.epfi').hide();

        $('.unh').click(function() {
          $('.unf').slideToggle(150);
          $('.emf').slideUp(150);
          $('.pwf').slideUp(150);
        })

        $('.emh').click(function() {
          $('.emf').slideToggle(150);
          $('.unf').slideUp(150);
          $('.pwf').slideUp(150);
        })

        $('.pwh').click(function() {
          $('.pwf').slideToggle(150);
          $('.unf').slideUp(150);
          $('.emf').slideUp(150);
        })


      });
    </script>

  </body>

</html>
