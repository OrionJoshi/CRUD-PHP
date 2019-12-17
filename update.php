<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="test_db";


//create Connection

$conn=new mysqli($db_host,$db_user,$db_password,$db_name);

//check Connection

if($conn-> connect_error){
	die("Connection Failed");
}
echo "Connection Successfully <hr>";

$sql="UPDATE student SET name='happy',roll='123',address='Perth' WHERE id=7";

if($conn->query($sql)==TRUE){
	echo "Record Update Successfully"
}else
{
	echo "Unable to update data";
}
//connection close
$conn->close();



?>