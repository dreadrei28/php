<!DOCTYPE html>
<html>
<head>
	 	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	<title>Forum</title>
	<link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet"type="text/css" href="style/styles.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php	
//include config
include('config.php');

//check if already logged in
 
?>
<?php
if(isset($_POST['submit'])){

	$username = $_POST['username'];

	$password = $_POST['password'];
  if($user->login($username,$password)){ 

 } else {
            $message = '<p class="error">Wrong username or password</p>';
        }

    }//end if submit
?>	
 <div class="container">
    <div id="wrapper">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><H1>Forum</H1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">forum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <h1 class="display-3">Welcome to forum </h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="index.php" role="button">Logout</a>
  </p>
</div>
       
        <hr />


	

</body>
</html>
