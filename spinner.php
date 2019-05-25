<?php
$host='arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$username='ir7tqjrbc7r2a1yt';
$password='cz1omzq4rp47hmgf';
$db='t3e5qwphdxcr97rb';
$con= mysqli_connect($host,$username,$password) or die("Connection failed");
mysqli_select_db($con,$db) or die("db selection failed");

$result=mysqli_query($con,"SELECT leavetypes FROM leave1");
while($row=mysqli_fetch_assoc($result)){
$tmp[]=$row;
}
echo json_encode($tmp);
mysqli_close($con);
?>
