<?php


define('HOST','localhost');// hostname/machineip/serverip is localhost

define('USER','root');// user in our case is root

define('PASS','');//password here is null or blank that is no password

define('DB','leave');

//Connecting to Database

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	if($_SERVER['REQUEST_METHOD']=='POST')
	{

		$image = $_POST['image'];
		$name8 = $_POST['name8'];
		$name9 = $_POST['name9'];
		$name = $_POST['name'];


		//require_once('dbHelper.php');

		//$sql ="SELECT max(id) as id FROM employee_profile";

		//$res = mysqli_query($con,$sql);

		$extension='png';
		$upload_path = 'uploads/';
		$file_url = $upload_path . getFileName() . '.' . $extension;


		//$id = 0;

		//$path = "uploads/$id.png";

		$actualpath = "http://192.168.56.1:80/leave/$file_url";

		$sql = "INSERT INTO employee_profile (name,p_email,mobile,photo) VALUES ('$name','$name8','$name9','$actualpath')";

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


	function getFileName()
	{
		$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
		$sql = "SELECT max(id) as id FROM employee_profile";
		$result = mysqli_fetch_array(mysqli_query($con,$sql));

		mysqli_close($con);
		if($result['id']==null)
			return 1;
		else
			return ++$result['id'];
	}