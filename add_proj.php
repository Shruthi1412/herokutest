<?php

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$s1 = $_POST['s1'];
		$s2 = $_POST['s2'];
		$s3 = $_POST['s3'];
		$s4 = $_POST['s4'];
		$s5 = $_POST['s5'];
		$s6 = $_POST['s6'];
		
		require_once('dbHelper.php');
		
		
		$sql = "INSERT INTO projects(eid,ename,ptitle,pdomain,description,dos) VALUES ('$s1','$s2','$s3','$s4','$s5','$s6')";
		
		
		if(mysqli_query($con,$sql)){
			echo "Successfully Submitted";
		}
		else
		{
			echo "Could not submit";

		}
	}else{
echo 'error';
}