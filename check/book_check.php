<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/row.php');
include_once('../lib/utf.php');

extract($_POST);
$flag = 0;

$q = "SELECT * FROM user";
$db = mysqli_query($conn,$q);
while($dblo = mysqli_fetch_assoc($db)){
    if($dblo['location'] == $location){
        $flag = 1;
        echo "<script>alert('이미 선택된 자리입니다.'); history.back();</script>";
        break;
    }
}

if($flag == 0){
    $user_id = $_SESSION['user_id'];
    $q = "UPDATE user SET location='$location', time='$time' WHERE id='$user_id'";
    mysqli_query($conn,$q);
}

echo "<script>location.href='../payment.php';</script>";

mysqli_close($conn);
?>