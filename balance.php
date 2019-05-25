<?php

define('HOST','localhost');// hostname/machineip/serverip is localhost

define('USER','root');// user in our case is root

define('PASS','');//password here is null or blank that is no password

define('DB','leave');

$connect = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

//$id  = $_GET['name'];
$str = $_GET['name'];
$pieces = explode("-", $str);
$n1=$pieces[0];
$n2=$pieces[1];
//$n3=$pieces[2];	
//$n4=$pieces[3];	
   
  if($_SERVER['REQUEST_METHOD']=='GET'){

		$sql = "SELECT ename, monthyear, sum( num ) as tot FROM permission WHERE ename = '$n1' AND monthyear = '$n2'";
		
		$r = mysqli_query($connect,$sql);
		
		$res = mysqli_fetch_array($r);
		
		$result = array();
		
		array_push($result,array(
			"dol"=>$res['tot'],
			//"reason"=>$res['tot'],
			//"num"=>$res['monthyear'],
			//"eid"=>$res['ename'],
			//"ename"=>$res['ename'],
			//"status"=>$res['ename'],
			
			
			
			)
		);
		
		echo json_encode(array("result"=>$result));
		
		mysqli_close($connect);
  }


?>