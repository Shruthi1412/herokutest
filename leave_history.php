<?php

$servername = "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
//Define your database username here.
$username = "ir7tqjrbc7r2a1yt";
//Define your database password here.
$password = "cz1omzq4rp47hmgf";
//Define your database name here.
$dbname = "t3e5qwphdxcr97rb";
require_once('dbHelper.php');

		$res= mysqli_query($con,("SELECT email FROM emailidentify WHERE status='login'"));

		$row1= mysqli_fetch_array($res);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM record WHERE email='$row1[0]'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    // output data of each row
    while($row[] = $result->fetch_assoc()) {

		$tem = $row;

	   $json = json_encode($tem);


    }

} else {
    echo "0 results";
}
 echo $json;
$conn->close();
?>
