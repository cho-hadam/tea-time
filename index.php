<?php require_once('lib/isset_login.php'); ?>
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
            <form name="login_form" method="post" action="check/login_check.php">
                <b class="title">LOGIN</b><br><br><br>
                <input type="text" name="user_id" size="24" placeholder="ID"><br>
                <input type="password" name="user_pass" size="24" placeholder="PASSWORD"><br>
                <input type="submit" value="login" class="button size"><br><br>
                <a href="./password.php" class="point grayfont">Forgot password?</a>
                <a class="point grayfont"> · </a>
                <a href="./signup.php" class="point bluefont">Create an account</a>
            </form>
        </div>
    </body>
</html>