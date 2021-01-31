<?php
session_start();
include_once('../lib/mysql_conn.php');
include_once('../lib/row.php');
include_once('../lib/utf.php');

extract($_POST);

if($user_name==""){
    $user_name = $row['name'];
}
if($car_number==""){
    $car_number = $row['car_num'];
}

if($special=='on'){
    $special = 1;
}else{
    $special = 0;
}

$bid = $row['id'];
$q = "UPDATE user SET name='$user_name', car_num='$car_number', car_type='$car_type', special='$special' WHERE id='$bid'";

mysqli_query($conn, $q);

echo "<script>alert('수정이 완료되었습니다.'); location.href='../home.php'</script>";

mysqli_close($conn);
?>