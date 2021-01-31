<?php require_once('lib/not_login.php'); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Book</title>
        <link rel="stylesheet" type="text/css" href="css/realBook.css">
    </head>
    <body>
        <div class="container">
        <form name="book" method="POST" action="check/book_check.php">
            <div class="selectLoc">
                <div class="a">
                    <b class="title">A</b><br>
                    <input type="radio" name="location" id="radio1" value="A-1" checked>
                    <label for="radio1">A-1</label> 
                    <input type="radio" name="location" id="radio2" value="A-2">
                    <label for="radio2">A-2</label>
                    <input type="radio" name="location" id="radio3" value="A-3">
                    <label for="radio3">A-3</label>
                    <input type="radio" name="location" id="radio4" value="A-4">
                    <label for="radio4">A-4</label>
                </div>

                <div class="b">
                    <b class="title">B</b><br>
                    <input type="radio" name="location" id="radio5" value="B-1">
                    <label for="radio5">B-1</label>
                    <input type="radio" name="location" id="radio6" value="B-2">
                    <label for="radio6">B-2</label> <br>
                    <input type="radio" name="location" id="radio7" value="B-3">
                    <label for="radio7">B-3</label>
                    <input type="radio" name="location" id="radio8" value="B-4">
                    <label for="radio8">B-4</label>
                </div>
            </div>
            <br>

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
