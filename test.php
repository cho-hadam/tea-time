<html>
    <head>
        <meta charset="utf-8">
        <title>Payment</title>
        <link rel="stylesheet" type="text/css" href="css/book.css">
    </head>
    <body>
        <div><br><br><br><br><br><br>
        <?php
        require_once('lib/not_login.php');
        include_once('lib/mysql_conn.php');
        include_once('lib/row.php');
        date_default_timezone_set('Asia/Seoul');

        function timeCal($time) {
            switch($time){
                case 30: $_SESSION['time_end'] += 1800; break;
                case 60: $_SESSION['time_end'] += 3600; break;
                case 90: $_SESSION['time_end'] += 5400; break;
                case 120: $_SESSION['time_end'] += 7200; break;
                default: echo "시간 에러: ".$row['time'];
            }
        }
        
        if(!isset($_SESSION['time_end'])){
            $_SESSION['time_end'] = 0;
            $_SESSION['plus'] = 0;
            timeCal($row['time']);
        }else if($_SESSION['plus'] == 1){
            $_SESSION['plus'] = 0;
            timeCal($row['time']);
        }

        
        ?>

        <script>
        const dbtime = <?=$_SESSION['time_end']?>;
        
        let timerId = null, start = null;
        let now = 0, over = 0;

        function printCal(time, timeName) {
            let hour = Math.floor(time/3600)
                let min = Math.floor((time-(hour*3600))/60);
                let sec = time-(hour*3600)-(min*60);

                hour = hour<10 ? '0'+hour : hour;
                min = min<10 ? '0'+min : min;
                sec = sec<10 ? '0'+sec : sec;

                printTime = `${timeName} 시간<br>
                            <b class="title bluefont">
                            ${hour}:${min}:${sec}</b>`;
        }

        timerId = setInterval(()=>{
            let remain = dbtime - now;
            let time = "";
            if(remain > 0) {
                printCal(remain, "남은");
            }else {
                if(typeof(start) == null) {
                    start = 0;
                }
                if(dbtime < 0) {
                    now = dbtime*-1;
                }
                over = now-start;

                printCal(over, "초과");
            }
            document.getElementById("result").innerHTML = printTime;
            now++;
        },1000);
        function stopTimer() {
            if(timerId != null){
                clearInterval(timerId);
                <?php $_SESSION['time_end'] = 
                        "<script>document.write(remain);</script>" ?>
            }
            if(over != 0) {
                document.cookie = `over=${over}`;
                <?php $_SESSION['time_end'] = 
                        "<script>document.write(remain*-1);</script>" ?>
            }
        }
        window.onbeforeunload = function() {
            if(timerId != null){
                clearInterval(timerId);
                <?php $_SESSION['time_end'] = 
                        "<script>document.write(remain);</script>" ?>
            }
            if(over != 0) {
                document.cookie = `over=${over}`;
                <?php $_SESSION['time_end'] = 
                        "<script>document.write(remain*-1);</script>" ?>
            }
        }
        </script>
        <div id="result"></div>
        <br><br><br>
        <a href="./location.php">
            <input type="button" value="위치 확인" class="button homebtn"
            onclick="stopTimer();">
        </a><br>
        <a href="./plustime.php">
            <input type="button" value="시간 추가" class="button homebtn"
            onclick="stopTimer();">
        </a>
        <form name="timer" method="post" action="check/over_check.php">
            <input type="submit" value="이용 종료" class="button homebtn"
            onclick="stopTimer();">
        </form>
        </div>
    </body>
</html>
