<?php 
$con = new mysqli('localhost', 'root', '');
if ($con -> connect_error){
	die($con->connect_error);
}

$q1 = "CREATE DATABASE restaurant";
if ($con->query($q1)){
	echo 'Database Created';
}
else{
	echo 'Database creation failed';
}

?>