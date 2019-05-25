<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		
		require_once('dbHelper.php');
		
		$sql = "INSERT INTO emp_reg (name,password,email,mobile) VALUES ('$name','$password','$email','$mobile')";
		
		
		if(mysqli_query($con,$sql)){
			echo "Successfully Registered";
		}
		else
		{
			echo "Could not register";

		}
	}else{
echo 'error';
}