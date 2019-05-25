<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$s1 = $_POST['s1'];




		require_once('dbHelper.php');

		$sql = "INSERT INTO emailidentify (email,status) VALUES ('$s1','login')";


		if(mysqli_query($con,$sql))
		{
			echo "ei";
		}
		else
		{
			echo "eni";

		}
	}
	else
	{
echo 'error';
}