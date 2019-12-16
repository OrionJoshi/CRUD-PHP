<?php
	
	$conn=mysqli_connect("localhost","root","","test_db");
	
	if(!$conn){
		
		die("Connection Faild!");
	}

	echo "Connection Successfuly <hr> ";

?>