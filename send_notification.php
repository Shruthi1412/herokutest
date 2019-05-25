<?php

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$s1 = $_POST['s1'];
		$s2 = $_POST['s2'];
		$s3 = $_POST['s3'];
	
		
		
		require_once('dbHelper.php');
		
		
		$sql = "INSERT INTO notification(date,time,subject) VALUES ('$s1','$s2','$s3')";
		
		
		if(mysqli_query($con,$sql)){
			echo "Sent Successfully ";
		}
		else
		{
			echo "Could not send!!!! ";

		}
	}else{
echo 'error';
}