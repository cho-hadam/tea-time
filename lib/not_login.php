<?php
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>alert('로그인 해주세요.')</script>";
    header('Location: index.php');
}
?>