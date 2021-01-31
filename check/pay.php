<?php
function pay($str) {
    session_start();
    include_once('../lib/mysql_conn.php');
    include_once('../lib/utf.php');
    include_once('../lib/row.php');
    
    extract($_POST);

    if($str == "추가") {
        $go = "timer";
    } else {
        $go = "home";
    }
    
    if($point==""){
        $point = 0;
    }
    if($point_check=='on'){
        $point_check = 1;
    }else{
        $point_check = 0;
    }
    
    if($point>$row['point']){
        echo '<script> alert("포인트가 부족합니다."); history.back(); </script>';
    }else{
        if($user_pass==""){
            echo '<script> alert("패스워드를 입력해주세요."); history.back(); </script>';
        }else{
            if(password_verify($user_pass, $row['pw'])){
                (int)$pay += (int)$point;
                if($pay>=$row['price']){
                    if($str == "추가") {
                        $_SESSION['plus'] = 1;
                    }
                    $pay -= $row['price'];
    
                    $bid = $row['id'];
                    $dbpoint = $row['point']-$point;
                    if($str == "추가") {
                        $dbpoint += $row['price']*0.01;
                    }
    
                    if($point_check == 1){
                        $dbpoint += $pay;
                        $point = $dbpoint-$row['point'];
                        $q = "UPDATE user SET point='$dbpoint' WHERE id='$bid'";
                        mysqli_query($conn, $q);
    
                        if($point<0){
                            $point *= -1;
                            echo "<script>alert('결제 되었습니다. 포인트 {$point} 원 사용되었습니다.'); location.href='../{$go}.php';</script>";
                        }else{
                            echo "<script>alert('결제 되었습니다. 포인트 {$point} 원 적립되었습니다.'); location.href='../{$go}.php';</script>";
                        }
                    }else{
                        $q = "UPDATE user SET point='$dbpoint' WHERE id='$bid'";
                        mysqli_query($conn, $q);
                        echo "<script>alert('결제 되었습니다. 거스름돈 {$pay} 원입니다.'); location.href='../{$go}.php';</script>";
                    }
                    if($str == "벌금") {
                        $q = "UPDATE user SET price='0', location='NULL', price='0', time='0', point='$dbpoint' WHERE id='$user_id'";
                        mysqli_query($conn,$q);
                    }
                }else{
                    echo "<script>alert('결제금이 모자랍니다.'); history.back();</script>";
                }
            }else{
            echo "<script>alert('비밀번호가 틀렸습니다.'); history.back();</script>";
            }
        }
    }
    
    mysqli_close($conn);
}
?>