<?php

require 'dbconfig.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO login (email,password) VALUES('$email','$password')";

if(mysqli_query($conn,$sql)){
	echo"Registered Successfully";
}
else{
	echo "ERROR:could not excute".mysqli_error($conn);
}
header("location:welcome.php");

?>