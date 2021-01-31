<?php
session_start();
if(isset($_SESSION['user_id'])){
    echo "<script>alert('로그인이 되어있습니다.')</script>";
    header('Location: home.php');
}
?>