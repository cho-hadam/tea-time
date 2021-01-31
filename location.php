<?php
require_once('lib/not_login.php');
include_once('lib/mysql_conn.php');
include_once('lib/row.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Location</title>
        <link rel="stylesheet" type="text/css" href="css/location.css">
    </head>
    <body>
        <div class="container">
            <div>
                현재 주차 위치는 
                <b class="title bluefont"><?=$row['location']?></b> 입니다.
                <br><br>
            </div>
            <a href="./timer.php"><input type="button" value="돌아가기" class="button homebtn"></a>
        </div>
    </body>
</html>
