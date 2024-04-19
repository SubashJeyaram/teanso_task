<?php

require 'dbconfig.php';

$email=$_GET['email'];

$sql="SELECT email FROM user WHERE email='$email'";

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
			'message'=>"not",
			'data'=>'NEW email'
		];
		echo json_encode($data);
}
?>