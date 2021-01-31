<?php 
require_once('lib/not_login.php');
include_once('lib/mysql_conn.php');
include_once('lib/row.php');
if($row['time'] != 0){
    header('Location: check/over_check.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
        <a href="./book.php"><input type="button" value="예매" class="button homebtn"></a>
        <a href="./mypage.php"><input type="button" value="my page" class="button homebtn"></a>
        </div>
    </body>
</html>
