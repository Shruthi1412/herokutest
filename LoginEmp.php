<?php

$email = $_POST['email'];
$password = $_POST['password'];
require_once('dbHelper.php');
$sql = "SELECT * FROM employee WHERE Email='$email' and Password='$password'";   
$res = mysql_query($con,$sql);
$check = mysql_fetch_array($res);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
?>
