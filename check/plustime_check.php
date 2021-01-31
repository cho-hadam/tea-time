<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/row.php');

extract($_POST);

$user_id = $_SESSION['user_id'];
$q = "UPDATE user SET time='$time' WHERE id='$user_id'";
mysqli_query($conn,$q);

echo "<script>location.href='../payment.php';</script>";

mysqli_close($conn);
?>