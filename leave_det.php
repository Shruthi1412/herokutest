<?php
include 'dbconfig.php';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$id  = $_GET['name'];
		
$sql = "SELECT * FROM permission WHERE eid='".$id."'";

//$sql = "DELETE FROM userreq WHERE grp='".$id."'";


$result = $conn->query($sql);

if ($result->num_rows >0) {
    // output data of each row
    while($row[] = $result->fetch_assoc()) 
	{
	 $tem = $row;
     $json = json_encode($tem);
	  
	}
	
} else {
    echo "0 results";
}
 echo $json;
$conn->close();

?>