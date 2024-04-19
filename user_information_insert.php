<?php

require 'dbconfig.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$ph_number=$_POST['number'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$state=$_POST['state'];

$sql="INSERT INTO user (fname,lname,email,password,ph_number,gender,country,state) VALUES('$fname','$lname','$email','$password','$ph_number','$gender','$country','$state')";

if(mysqli_query($conn,$sql)){
	echo"Registered Successfully";
}
else{
	echo "ERROR:could not excute".mysqli_error($conn);
}
header("location:login.php");

?>