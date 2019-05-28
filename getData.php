<?php 
	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$id  = $_GET['name'];
		
		require_once('dbHelper.php');
		
		$sql = "SELECT * FROM employee_profile WHERE emp_id='".$id."'";
		
		$r = mysqli_query($con,$sql);
		
		$res = mysqli_fetch_array($r);
		
		$result = array();
		
		array_push($result,array(
			"name"=>$res['p_email'],
			"email"=>$res['mobile'],
			
			)
		);
		
		echo json_encode(array("result"=>$result));
		
		mysqli_close($con);
		
	}
