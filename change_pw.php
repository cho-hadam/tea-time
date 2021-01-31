<?php require_once('lib/isset_login.php'); ?>
<html>
    <head>
        <title>비밀번호 변경</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
            <form name="password_form" method="POST" action="check/change_check.php">
                <b class="title">비밀번호 변경</b><br><br>
                <input type="password" name="user_pass" size="24" placeholder="PASSWORD"><br>
                <input type="submit" value="변경" class="button size"><br><br>
            </form>
        </div>
    </body>
</html>