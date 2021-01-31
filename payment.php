<?php
require_once('lib/not_login.php');
include_once('lib/mysql_conn.php');
include_once('lib/row.php');
include_once('lib/method.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Payment</title>
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
        <form name="book" method="POST" action="check/payment_check.php">
            <b class="title">결제</b><br><br><br>
            
            결제할 금액 &nbsp;
            <b class="bluefont">
            <?php
            $money = price($row['car_type'], $row['time'], $row['special']);

            $user_id = $row['id'];
            $q = "UPDATE user SET price='$money' WHERE id='$user_id'";
            mysqli_query($conn,$q);
            
            echo $money;
            ?></b> 원
            <br><br>
            
            <input type="text" name="point" size="24" placeholder="잔여 포인트  <?=$row['point']?> 원"><br>
            
            <input type="text" name="pay" size="24" placeholder="결제금 입력"><br>

            <input type="password" name="user_pass" size="24" placeholder="PASSWORD CHECK"><br><br>

            <div class="point"><input type="checkbox" name="point_check" id="special">
            <label for="special" class="point">거스름돈 포인트 적립<span></span></label></div><br>

            <input type="submit" value="결제" class="button size">
        </form>
        </div>
    </body>
</html>
