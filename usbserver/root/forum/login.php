<?php
//include config
require_once('config.php');


//check if already logged in
 
?>
<?php
	$username = $_POST['username'];

	$password = $_POST['password'];



	$sql = "SELECT username, password FROM forum.user_account WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($res) == 1) {
			echo "<h1> Successfully connected.</h1>";
	}	else {
		echo "<h1>Username and Password not recognised.";
	}

	
?>	