<?php 
$conn = new mysqli('localhost', 'root', '', 'restaurant');
if ($conn->connect_error){
	die($conn->connect_error);
}

$q1 = "CREATE TABLE order_list(id int(10) AUTO_INCREMENT PRIMARY KEY, item varchar(50), type_ varchar(50), qty int(10), price int(10))";

if ($conn->query($q1)){
	echo 'Table creation successful';
}
else{
	echo ' Failed';
}



?>