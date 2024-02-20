<?php 
require_once("db_connection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add google translation to translation of the page -->
    <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); }
    </script>
    <script type="text/javascript"src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- translation finished -->

        <div id="google_translate_element"> </div>
        <h2 id="welcome"> Money Transfer management system </h2>
        <title>Login to System </title>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="script.js"> </script>
    </head>
     
<body class="body">

    <div class="Login_frame">
        <h3 style="text-align: center; color: white; margin-top: -20px;"> Access users  </h3>
        <p style="text-align: center; color:white"> Authorized users able to sign in</p> 
        <form id="login_form" action="Login_user.php" method="post">
            <div class="userbox">
                <input id="usr" class="usr" type="text" name="username" placeholder="Username"> 
                <input id="pass" class="pass" type="password" name="password" placeholder="Password"> <br>
                <button type="submit" class="btn btn-primary" onclick="user_check()">Sign In</button>
                <label style="color: floralwhite;"> <input  type="checkbox" name="remember"> Remember me </label>
            </div>
        </form>

    </div>
    

</body>
</html>