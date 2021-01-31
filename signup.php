<?php require_once('lib/isset_login.php'); ?>
<html>
    <head>
        <title>회원가입</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
            <form name="signup_form" method="POST" action="check/signup_check.php">
                <b class="title">SIGN UP</b><br><br>
                <input type="text" name="user_name" size="24" placeholder="NAME"><br>
                <input type="text" name="user_id" size="24" placeholder="ID"><br>
                <input type="password" name="user_pass" size="24" placeholder="PASSWORD"><br><br>
                차량 종류 
                <select name="car_type">
                    <option value="경형">경형</option>
                    <option value="소형">소형</option>
                    <option value="중형">중형</option>
                    <option value="대형">대형</option>
                </select><br><br>
                <input type="text" name="car_number" size="24" placeholder="CAR NUMBER"><br><br>
                 <input type="checkbox" name="special" id="special">
                <label for="special">장애인 차량<span></span></label>
                <br><br><br>
                <input type="submit" value="sign up" class="button size"><br><br>
                <a href="./index.php" class="point bluefont">login</a>
            </form>
        </div>
    </body>
</html>