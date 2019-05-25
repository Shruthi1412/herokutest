<?php


define('HOST','localhost');// hostname/machineip/serverip is localhost

define('USER','root');// user in our case is root

define('PASS','');//password here is null or blank that is no password

define('DB','business_automation');

//Connecting to Database

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		
        $name1 = $_POST['name1'];
		$name2 = $_POST['name2'];
		$name3 = $_POST['name3'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$url = $_POST['url'];
		$name = $_POST['name'];
		
		
		
		//require_once('dbHelper.php');
		
		//$sql ="SELECT max(id) as id FROM employee_profile";
		
		//$res = mysqli_query($con,$sql);
		
		$extension='png';
		$upload_path = 'uploads/';
		$file_url = $upload_path . getFileName() . '.' . $extension;
		
		
		//$id = 0;

		//$path = "uploads/$id.png";
		
		$actualpath = "http://192.168.1.10:81/leave/$file_url";
		
		$sql = "INSERT INTO images (name1,name2,name3,date,time,url,name) VALUES ('$name1','$name2','$name3','$date','$time','$url','$name')";
		
		if(mysqli_query($con,$sql))
		{
			file_put_contents($file_url,base64_decode($image));
			echo "Successfully Uploaded";
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