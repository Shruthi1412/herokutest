<?php


define('HOST','arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');// hostname/machineip/serverip is localhost

define('USER','ir7tqjrbc7r2a1yt');// user in our case is root

define('PASS','cz1omzq4rp47hmgf');//password here is null or blank that is no password

define('DB','t3e5qwphdxcr97rb');

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

		
		$sql1= "SELECT * FROM images";
		$res= mysqli_query($con,$sql1);
		$row= mysqli_fetch_array($res);
		

		//$id = 0;

		//$path = "uploads/$id.png";

		

		$sql = "INSERT INTO employee_profile (name,p_email,mobile,photo) VALUES ('$name','$name8','$name9','$row[1])";

		if(mysqli_query($con,$sql))
		{
			//file_put_contents($file_url,base64_decode($image));
			$dsql= "DELETE FROM images WHERE id='$row[0]'";
			if(mysqli_query($con,$dsql){
	
			echo "Successfully Uploaded";
			}
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


	
