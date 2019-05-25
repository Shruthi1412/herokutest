<?php
include 'dbHelper.php';




if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 

$id  = $_GET['name'];
		
$sql = "SELECT * FROM login WHERE date='".$id."'";
$result = $con->query($sql);

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
$con->close();

?>