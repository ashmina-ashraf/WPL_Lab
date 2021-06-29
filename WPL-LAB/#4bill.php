<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if ($conn->connect_error){
		die($conn->connect_error);
	}

	$q = "SELECT * FROM order_list";
	$res = $conn->query($q);
	while ($row = $res->fetch_assoc()){

?>

<html>
	<head>
		<title>Restaurant</title>
		<link rel="stylesheet" type="text/css" href="restaurant.css">
	</head>

	<body>
		<div class="container">

			<div class="bill">
				<h3>Bill</h3>
					<table align="center" cellpadding="10" >
						<tr>
							<th>Item</th>
							<td> <?php echo $row['item']; ?></td>
						</tr>

						<tr>
							<th>Type</th>
							<td><?php echo $row['type_']; ?> </td>
						</tr>

						<tr>
							<th>Quantity</th>
							<td><?php echo $row['qty']; ?> </td>
						</tr>

						<tr>
							<th>Price</th>
							<td><?php echo $row['price']; ?> </td>
						</tr>
					</table>
				</form>
			</div>			
		</div>

	</body>
</html>
<?php
}
?>