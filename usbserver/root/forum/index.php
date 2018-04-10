<?php
    include('header.php');

?>
<body align='center'>
    <div id='wrapper'>
        <div id='content'>
            <form action='login.php' method="post" >
                <h1>Log In to Forum.</h1>
                Username : <input type="text" name="username"/></br>
                Password : <input type="password" name="password"/></br>
                    <input type="submit" name="login" value="Log In">
                    <input type="submit" name="signup" value="Signup">
                </form>
        </div>
    </div>    

</body>