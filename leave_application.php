<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$s1 = $_POST['s1'];
		$s2 = $_POST['s2'];
		$s3 = $_POST['s3'];

		$s5 = $_POST['s5'];



		require_once('dbHelper.php');

		$result= mysqli_query($con,("SELECT email FROM emailidentify WHERE status='login'"));

		$row= mysqli_fetch_array($result);




		$sql = "INSERT INTO permission (dol,reason,num,email,type,status) VALUES ('$s1','$s2','$s3','$row[0]','$s5','pending')";


						if(mysqli_query($con,$sql)){
							echo "Successfully applied";
						}

						else
						{
							echo "Not applied!! Your previous leave status is on pending.";

						}
						$sql1 = "DELETE FROM emailidentify WHERE email='$row[0]' and status='login'";


										if(mysqli_query($con,$sql1))
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