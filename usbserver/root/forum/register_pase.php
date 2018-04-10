<?php
	include("config.php");
	include("function.php");
	$username = $_POST['username'];
	$password = $_POST['password'];

	$MIN_LENGTH = 8;

	if ( $username == "" || $password == "" ){
		echo "Username and Password field must be Filled in";
	}else {
		if ( hasInvalidCharacters($username)){
			echo "Username can contain letters and numbers only";
		}else {
			if ( strlen($password) >= $MIN_LENGTH) {
			} else {
				echo "Please enter a password with a minimum length of 8 characters.";
			

	$password = encrypt($password);

	$sql="INSERT INTO forum.user_account(username,password)
			VALUES (?,?);";

	$stmt = $mysqli -> prepare($sql);
	$stmt-> blind_param('ss',$username, $password);		
	
	
	if ($stmt->execute()) {
		echo "Successfully registered as : ".$username;
	}else {
		echo "Failed to register, please try again";
	}
	}
}
}



?>