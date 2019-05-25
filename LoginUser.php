<?php

$email = $_POST['email'];
$password = $_POST['password'];
require_once('dbHelper.php');
$sql = "SELECT * FROM admin WHERE Email='$email' and Password='$password'";   
$res = mysqli_query($con,$sql);
$check = mysqli_fetch_array($res);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
?>