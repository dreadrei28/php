<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	

	<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>


</body>
</html>