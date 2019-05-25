<?php

$servername = "localhost";
//Define your database username here.
$username = "root";
//Define your database password here.
$password = "";
//Define your database name here.
$dbname = "leave";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM permission";
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