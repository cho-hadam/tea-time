<?php
require_once('lib/not_login.php');
if($_COOKIE['over'] != 0){
    echo
    "<script>
        alert('시간이 초과되어 추가할 수 없습니다.');
        history.back();
    </script>";
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plus Time</title>
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div class="container">
        <form name="book" method="POST" action="check/plustime_check.php">
            시간 선택 
            <select name="time">
                <option value="30">30분</option>
                <option value="60">1시간</option>
                <option value="90">1시간 30분</option>
                <option value="120">2시간</option>
            </select><br><br>

            <input type="submit" value="선택" class="button homebtn">
        </form>
        </div>
    </body>
</html>
