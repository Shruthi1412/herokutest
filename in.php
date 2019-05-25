<?php

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$s1 = $_POST['s1'];
		$s2 = $_POST['s2'];
		$s3 = $_POST['s3'];
		$s4 = $_POST['s4'];
	
		
		
		require_once('dbHelper.php');
		
		
		$sql = "INSERT INTO login(date,time,eid,ename) VALUES ('$s1','$s2','$s3','$s4')";
		
		
		if(mysqli_query($con,$sql)){
			echo "Successfully applied";
		}
		else
		{
			echo "Could not apply!!!! ";

		}
	}else{
echo 'error';
}