<?php 

$host     = "localhost:3307"; 
$username = "root"; 
$password = "Padmini1330"; 
$db_name  = "mini_project"; 


$con = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
	//echo "connected";
}

?>