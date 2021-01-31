<?php
session_start();
include_once('lib/mysql_conn.php');
include_once('lib/row.php');

$user_id = $_SESSION['user_id'];
$q = "DELETE FROM user WHERE id='$user_id'";
mysqli_query($conn,$q);
session_destroy();
?>
<meta charset="utf-8">
<script>alert("회원 탈퇴 되었습니다."); location.href="./index.php";</script>