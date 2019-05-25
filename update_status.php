<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$email = $_POST['email'];



		require_once('dbHelper.php');

		//$sql = "INSERT INTO permission (status) VALUES ('$email') WHERE ename = '$name'" ;

		$sql = "UPDATE permission SET status='$email' WHERE email='$name'";
		$sql1= "SELECT * FROM permission WHERE email='$name'";
		$res= mysqli_query($con,$sql1);
		$row= mysqli_fetch_array($res);


		$sql2= "INSERT INTO record (dol,reason,num,type,email,status) VALUES ('$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$email')";
		$sql3= "DELETE FROM permission WHERE email='$name'";
if(mysqli_query($con,$sql)){
if(mysqli_query($con,$sql2)){
if(mysqli_query($con,$sql3)){
 echo "Records updated";
 }else{
 echo "Records not updated";
 }
 }
 }

	}
	else
	{
echo 'error';
}