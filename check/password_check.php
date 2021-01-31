<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/utf.php');

extract($_POST);

$_SESSION['id'] = $user_id;

if($user_name=="" || $user_id==""){
    echo "<script>alert('모든 정보를 입력하세요.'); location.href='../password.php';</script>";
}else{
    $q = "SELECT * FROM user WHERE name='$user_name' && id='$user_id'";
    $db = mysqli_query($conn,$q);
    $row = mysqli_fetch_assoc($db);
    if($row['id']==$user_id){
        echo "<script>location.href='../change_pw.php';</script>";
    }else{
        echo "<script>alert('없는 계정입니다.'); location.href='../password.php';</script>";
    }
   
}



mysqli_close($conn);
?>