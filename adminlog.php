<?php

$username = $_POST['username'];
$password = $_POST['password'];

require_once('dbHelper1.php');
$sql = "select * from data where email='$username' and password='$password' and designation='Manager'";
$res = mysqli_query($con,$sql);
$check = mysqli_fetch_array($res);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
?>
