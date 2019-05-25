<?php
//Defining Constants

define('HOST','localhost');// hostname/machineip/serverip is localhost

define('USER','root');// user in our case is root

define('PASS','');//password here is null or blank that is no password

define('DB','crud');

//Connecting to Database

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
//this query is used to connect PHP files to MySQL database
?>