<?php

require 'dbconfig.php';

$email=$_GET['email'];
$password=$_GET['password'];

$sql="SELECT email,password FROM user WHERE email='$email' and password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	while($res=mysqli_fetch_all($result,MYSQLI_ASSOC)){
		$data=[
			'message'=>"Fetched SuccessFully",
			'data'=>$res
		];
		echo json_encode($data);
	}
}
else{
	$data=[
			'message'=>"Incorrect email or password",
			'data'=>'no data'
		];
		echo json_encode($data);
}
?>