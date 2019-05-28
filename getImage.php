<?php
 
	if($_SERVER['REQUEST_METHOD']=='GET'){
		$id = $_GET['id'];
		$sql = "select * from employee_profile where p_email = '$id'";
		require_once('dbHelper.php');
		
		$r = mysqli_query($con,$sql);
		
		$result = mysqli_fetch_array($r);
		
		header('content-type: image/jpeg');
	
		echo base64_decode($result['photo']);
		
		mysqli_close($con);
		
	}else{
		echo "Error";
	}
