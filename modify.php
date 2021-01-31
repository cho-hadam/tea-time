<?php require_once('lib/not_login.php'); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
        <form name="modify_form" method="POST" action="check/modify_check.php">
            <b class="title">회원정보 수정</b><br>
            수정을 원하는 것만 입력하세요.<br><br><br>
            <input type="text" name="user_name" size="24" placeholder="NAME"><br>
            차량 종류 
            <select name="car_type">
                <option value="경형">경형</option>
                <option value="소형">소형</option>
                <option value="중형">중형</option>
                <option value="대형">대형</option>
            </select><br>
            <input type="text" name="car_number" size="24" placeholder="CAR NUMBER"><br><br>
                <input type="checkbox" name="special" id="special">
            <label for="special">장애인 차량<span></span></label>
            <br><br><br>
            <input type="submit" value="수정" class="button size"><br><br>
            <a href="./home.php" class="point bluefont">home</a>
        </form>
        </div>
    </body>
</html>
