<?php
 define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','usbw');
define('DBNAME','forum');

$db = new PDO("mysql:host=".DBHOST.";port=3307;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone
date_default_timezone_set('Asia/Manila');
mysql_select_db('forum');
?>