<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/utf.php');

extract($_POST);

$overlap = 0;
$q = "SELECT * FROM user";
$db = mysqli_query($conn,$q);
while($dblo = mysqli_fetch_assoc($db)){
    if($dblo['id'] == $user_id){
        echo "<script>alert('아이디 중복입니다.'); history.back();</script>";
        $overlap = 1;
        break;
    }
}

if($overlap != 1){
    if($user_name=="" || $user_id=="" || $user_pass=="" || $car_number==""){
        echo '<script> alert("전부 입력해주세요."); history.back(); </script>';
    }else{
        if($special=='on'){
            $special = 1;
        }else{
            $special = 0;
        }
    
        $user_pass = password_hash($user_pass, PASSWORD_DEFAULT);
    
        $q = "INSERT INTO user VALUES (
                '$user_name', '$user_id', '$user_pass', 
                '$car_number', '$car_type', '$special', 'NULL', '0', '0', '0'
            )";
    
        mysqli_query($conn, $q);
        echo "<script>alert('회원가입이 완료되었습니다.'); location.href='../index.php'</script>";
    }   
}
mysqli_close($conn);
?>