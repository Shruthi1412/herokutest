<?php
$host='localhost';
$username='root';
$password='';
$db='crud';
$con= mysqli_connect($host,$username,$password) or die("Connection failed");
mysqli_select_db($con,$db) or die("db selection failed");

$result=mysqli_query($con,"SELECT leavetypes FROM leave1");
while($row=mysqli_fetch_assoc($result)){
$tmp[]=$row;
}
echo json_encode($tmp);
mysqli_close($con);
?>