<?php

define('HOST','localhost');// hostname/machineip/serverip is localhost

define('USER','root');// user in our case is root

define('PASS','');//password here is null or blank that is no password

define('DB','business_automation');

$connect = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

$id  = $_GET['name'];

   
  if($_SERVER['REQUEST_METHOD']=='GET'){

		$sql = "SELECT * FROM permission WHERE ename='$id'";
		
		$r = mysqli_query($connect,$sql);
		
		$res = mysqli_fetch_array($r);
		
		$result = array();
		
		array_push($result,array(
			"dol"=>$res['dol'],
			"reason"=>$res['reason'],
			"num"=>$res['num'],
			"eid"=>$res['eid'],
			"ename"=>$res['ename'],
			"status"=>$res['status'],
			
			
			
			)
		);
		
		echo json_encode(array("result"=>$result));
		
		mysqli_close($connect);
  }


?>