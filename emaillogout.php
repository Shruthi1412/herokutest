<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$s1 = $_POST['s1'];




		require_once('dbHelper.php');

		$sql = "DELETE FROM emailidentify WHERE email='$s1' and status='login'";


		if(mysqli_query($con,$sql))
		{
			echo "el";
		}
		else
		{
			echo "enl";

		}
	}
	else
	{
echo 'error';
}