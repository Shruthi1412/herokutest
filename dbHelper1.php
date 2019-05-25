<?php
//Defining Constants

define('HOST','arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');// hostname/machineip/serverip is localhost

define('USER','ir7tqjrbc7r2a1yt');// user in our case is root

define('PASS','cz1omzq4rp47hmgf');//password here is null or blank that is no password

define('DB','t3e5qwphdxcr97rb');

//Connecting to Database

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
//this query is used to connect PHP files to MySQL database
?>
