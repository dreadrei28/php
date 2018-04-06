<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	

	<?php
	// pass valid/invalid emails
	$email = "mail@example.com";
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo '"' . $email . '" = VALID'."\n";
	}
	
else
{
		echo '"' . $email . '" = INVALID'."\n";
	}

?>


</body>
</html>