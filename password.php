<?php require_once('lib/isset_login.php'); ?>
<html>
    <head>
        <title>비밀번호 찾기</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
            <form name="password_form" method="POST" action="check/password_check.php">
                <b class="title">비밀번호 찾기</b><br><br>
                <input type="text" name="user_name" size="24" placeholder="NAME"><br>
                <input type="text" name="user_id" size="24" placeholder="ID"><br>
                <input type="submit" value="찾기" class="button size"><br><br>
                <a href="./index.php" class="point bluefont">login</a>
            </form>
        </div>
    </body>
</html>