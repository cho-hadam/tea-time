<?php
require_once('lib/not_login.php');
include_once('lib/mysql_conn.php');
include_once('lib/row.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
        <a href="./modify.php">
            <input type="button" value="회원정보 수정" class="button homebtn">
        </a>
        <a href="./logout.php">
            <input type="button" value="log out" class="button homebtn">
        </a><br>
        <button class="button pointbtn">포인트 
        <?=$row['point']?></button><br>
        <a href="./secession.php" class="point bluefont">회원탈퇴</a>
        </div>
    </body>
</html>
