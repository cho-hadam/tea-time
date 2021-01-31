<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/method.php');
include_once('../lib/row.php');

$user_id = $row['id'];

if($_COOKIE['over'] != 0){
    $overtime = (int)($_COOKIE['over']/60); //분 단위
    
    $fine = fine($row['car_type'], $overtime);
    $q = "UPDATE user SET price='$fine' WHERE id='$user_id'";
    mysqli_query($conn,$q);
    
    $_COOKIE['over'] = 0;
    echo "<script>location.href='../fine.php'</script>";
}else{
    $q = "UPDATE user SET price='0', location='NULL', price='0', time='0' WHERE id='$user_id'";
    mysqli_query($conn,$q);
    $_SESSION['remain'] = 0;
    echo "<script>location.href='../home.php'</script>";
}

mysqli_close($conn);
?>