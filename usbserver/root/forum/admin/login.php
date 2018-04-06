<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
      <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div id="login">

    <?php

    //process login form if submitted
    if(isset($_POST['submit'])){

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if($user->login($username,$password)){ 

            //logged in return to index page
            header('Location: index.php');
            exit;
        

        } else {
            $message = '<p class="error">Wrong username or password</p>';
        }

    }//end if submit

    if(isset($message)){ echo $message; }
    ?>

    <form action="" method="post">
    <p><label>Username</label><input type="text" name="username" value=""  /></p>
    <p><label>Password</label><input type="password" name="password" value=""  /></p>
    <p><label></label><input type="submit" name="submit" value="Login"  /></p>
    </form>



<!-- Material form login -->
<form>
    <p class="h4 text-center mb-4">Sign in</p>

    <!-- Material input email -->
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="materialFormLoginEmailEx" class="form-control">
        <label for="materialFormLoginEmailEx">Your email</label>
    </div>

    <!-- Material input password -->
    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="materialFormLoginPasswordEx" class="form-control">
        <label for="materialFormLoginPasswordEx">Your password</label>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-default" type="submit">Login</button>
    </div>
</form>
<!-- Material form login -->
                      

                      
</div>
</body>
</html>