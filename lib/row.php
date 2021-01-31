<?php
$user_id = $_SESSION['user_id'];
$q = "SELECT * FROM user WHERE id='$user_id'";
$dbid = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($dbid);
?>