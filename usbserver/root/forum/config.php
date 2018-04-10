<?php
 	$database_host = 'localhost';
 	$database_port = '3307';
 	$database_name = 'forum';
 	$database_username = 'root';
 	$database_password = 'usbw';

 	$mysqli = new mysqli($database['host'], $database['username'], $database['password'], $database['name']);

//set timezone
date_default_timezone_set('Asia/Manila');
mysql_select_db('forum');
?>