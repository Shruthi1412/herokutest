<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		
		require_once('dbHelper.php');
		
		$sql = "INSERT INTO employee (Name,Email,Password) VALUES ('$name','$email','$password')";
		
		
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