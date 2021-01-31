<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/utf.php');

extract($_POST);

if($user_id=="" || $user_pass==""){
    echo '<script> alert("아이디나 패스워드를 입력해주세요."); history.back(); </script>';
}else{
    $q = "SELECT * FROM user WHERE id='$user_id'";
    $dbid = mysqli_query($conn,$q);
    $row = mysqli_fetch_assoc($dbid);

    if(password_verify($user_pass, $row['pw'])){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_pass'] = $row['pw'];
        $_SESSION['user_name'] = $row['name'];

       echo "<script>alert('로그인 되었습니다.'); location.href='../home.php';</script>";
    }else{
       echo "<script>alert('비밀번호가 틀렸습니다.'); history.back();</script>";
    }
}

mysqli_close($conn);
?>