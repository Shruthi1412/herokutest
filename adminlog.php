<?php

$username = $_POST['username'];
$password = $_POST['password'];

require_once('dbHelper1.php');
$sql = "SELECT * FROM data WHERE email='$username' and password='$password' and designation='Manager'";
$res = mysql_query($con,$sql);
$check = mysql_fetch_array($res);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
?>
