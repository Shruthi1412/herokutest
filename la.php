<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$email1 = $_POST['email1'];
		$email2 = $_POST['email2'];
		$email3 = $_POST['email3'];
		
		
		
		require_once('dbHelper.php');
		
		$sql = "INSERT INTO leave (dol,reason,num,doj,emp_id,emp_name) VALUES ('$name','$password','$email','$email1','$email2','$email3')";
		
		
		if(mysqli_query($con,$sql)){
			echo "Successfully Registered";
		}
		else
		{
			echo "Could not register";

		}
	}
	else
	{
echo 'error';
}