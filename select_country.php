<?php

require 'dbconfig.php';

$sql="SELECT DISTINCT country FROM country_to_state";

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
	echo "error not Fetched";
}
?>