<?php 
	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$id  = $_GET['name'];
		
		require_once('dbHelper.php');
		
		$sql = "SELECT * FROM employee_profile WHERE emp_id='".$id."'";
		
		$r = mysqli_query($con,$sql);
		
		$res = mysqli_fetch_array($r);
		
		$result = array();
		
		array_push($result,array(
			"name"=>$res['dob'],
			"email"=>$res['qualification'],
			"password"=>$res['designation'],
			"password1"=>$res['doj'],
			"password2"=>$res['f_name'],
			"password3"=>$res['b_grp'],
			"password4"=>$res['p_email'],
			"password5"=>$res['photo'],
			"password6"=>$res['mobile'],
			
			)
		);
		
		echo json_encode(array("result"=>$result));
		
		mysqli_close($con);
		
	}