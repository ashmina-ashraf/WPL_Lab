<?php

	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if ($conn->connect_error){
		die($conn->connect_error);
	}

	if(isset($_POST['submit'])){
		$item = $_POST['item'];
		$type = $_POST['type'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];

		$q2 = "INSERT INTO order_list(item, type_, qty, price) VALUES('$item', '$type', '$qty', '$price')";
		$conn->query($q2);

		header("Location: bill.php");
	}

?>