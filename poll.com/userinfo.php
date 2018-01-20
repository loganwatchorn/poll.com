<?php
if (isset($_GET['un'])) {
	$username = mysql_real_escape_string($_GET['un']);
	if (ctype_alnum($username)) {
 		//check user exists
		$check = mysql_query("SELECT * FROM users WHERE username='$username'");
		if (mysql_num_rows($check)==1) {
			$get = mysql_fetch_assoc($check);
			$userid = $get['id'];
			$username = $get['username'];
			$name = $get['name'];
		}
	}
}

?>
