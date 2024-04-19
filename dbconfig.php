<?php

$host="localhost";
$username="root";
$password="";
$database="teanso_task";

$conn=mysqli_connect($host,$username,$password,$database);

if($conn==false){
	die("connection_error: " .mysqli_connect_error());
}
else{
	// echo("Connected Successfully");
}

?>
