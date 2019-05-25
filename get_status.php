<?php
	if($_SERVER['REQUEST_METHOD']=='GET'){

		$id  = $_GET['name'];

		require_once('dbHelper.php');

		$sql = "SELECT * FROM permission WHERE eid='".$id."'";

		$r = mysqli_query($con,$sql);

		$res = mysqli_fetch_array($r);

		$result = array();

		array_push($result,array(
			"name2"=>$res['status'],


			)
		);

		echo json_encode(array("result"=>$result));

		mysqli_close($con);

	}