<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/utf.php');

extract($_POST);

if($user_pass==""){
    echo "<script>alert('비밀번호를 입력하세요.'); history.back();</script>";
}else{
    $user_id = $_SESSION['id'];
    $user_pass = password_hash($user_pass, PASSWORD_DEFAULT);
    $q = "UPDATE user SET pw='$user_pass' WHERE id='$user_id'";
    $db = mysqli_query($conn,$q);
    echo "<script>alert('비밀번호를 변경하였습니다.'); location.href='../index.php';</script>";
}



mysqli_close($conn);
?>