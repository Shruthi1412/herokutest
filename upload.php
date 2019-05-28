<?php


define('HOST','arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');// hostname/machineip/serverip is localhost

define('USER','ir7tqjrbc7r2a1yt');// user in our case is root

define('PASS','cz1omzq4rp47hmgf');//password here is null or blank that is no password

define('DB','t3e5qwphdxcr97rb');

//Connecting to Database

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	if($_SERVER['REQUEST_METHOD']=='POST')
	{

		$image = $_POST['image'];
		$name = $_POST['name'];
		$name8 = $_POST['name8'];
		$name9 = $_POST['name9'];


		//require_once('dbHelper.php');

		//$sql ="SELECT max(id) as id FROM employee_profile";

		//$res = mysqli_query($con,$sql);

		//$extension='png';
		//$upload_path = 'https://github.com/Shruthi1412/herokutest/edit/master/uploads/';
		//$file_url = $upload_path . getFileName() . '.' . $extension;


		//$id = 0;

		//$path = "uploads/$id.png";

		//$actualpath = "$file_url";
		$sql="INSERT INTO employee_profile (photo,name,p_email,mobile) VALUES (?,'$name','$name8','$name9')";
		//$sql = "INSERT INTO images (image) VALUES (?)";
		
		
		$stmt = mysqli_prepare($con,$sql);

		mysqli_stmt_bind_param($stmt,"s",$image);
		mysqli_stmt_execute($stmt);
		
		$check = mysqli_stmt_affected_rows($stmt);
		
		if($check == 1){
			echo "Uploaded Successfully";
		}else{
			echo "Error Uploading Image";
		}
		mysqli_close($con);
	}else{
		echo "Error";
	}


