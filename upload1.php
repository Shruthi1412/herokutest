<?php


define('HOST','localhost');// hostname/machineip/serverip is localhost

define('USER','root');// user in our case is root

define('PASS','');//password here is null or blank that is no password

define('DB','leave');

//Connecting to Database

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	if($_SERVER['REQUEST_METHOD']=='POST')
	{

		
		$name8 = $_POST['name8'];
		$name9 = $_POST['name9'];
		$name = $_POST['name'];


		//require_once('dbHelper.php');

		//$sql ="SELECT max(id) as id FROM employee_profile";

		//$res = mysqli_query($con,$sql);

		


		//$id = 0;

		//$path = "uploads/$id.png";

		

		$sql = "INSERT INTO employee_profile (name,p_email,mobile,photo) VALUES ('$name','$name8','$name9')";

		if(mysqli_query($con,$sql))
		{
			file_put_contents($file_url,base64_decode($image));
			echo "Successfully Uploaded";
		}
		else{
					echo "Error uploading!! No duplicate entries allowed.";

		}

		mysqli_close($con);
	}
	else
	{
		echo "Error";
	}


	
