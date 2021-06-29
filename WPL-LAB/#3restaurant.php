<html>
	<head>
		<title>Restaurant</title>
		<link rel="stylesheet" type="text/css" href="restaurant.css">
		<script type="text/javascript">
			function validation(){
				var item = document.myForm.item.value;
				var qty = document.myForm.qty.value;
				var price = document.myForm.price.value;

				var letters = /^[A-Za-z]+$/

				if(!item.match(letters)){
					alert("Enter a valid item name");
					return false;
				}

				if (!qty.match(/^[0-9]+$/)){
					alert("Invalid quantity entry");
					return false;
				}

				if (!price.match(/^[0-9]+$/)){
					alert("Enter a valid price");
					return false;
				}
			}
		</script>
	</head>

	<body>
		<?php
			$conn = new mysqli('localhost', 'root', '', 'restaurant');
			if ($conn->connect_error){
				die($conn->connect_error);
			}

			$q = "SELECT * FROM item";
			$res = $conn->query($q);
		?>
		
		<div class="container">
			<h1>RESTAURANT</h1><br><br>

			<div class="bill">
				<h3>Bill Generation</h3>
				<form action="formaction.php" method="post" name="myForm" onsubmit="return validation()">
					<table align="center" cellpadding="10" >
						<tr>
							<th>Item</th>
							<td> <input type="text" name="item" required=""></td>
						</tr>

						<tr>
							<th>Type</th>
							<td>
								<select name = 'type' required="">
									<option value="Main Dish">Main Dish</option>
									<option value="Cool Drinks">Cool Drinks</option>
									<option value="Hot Drinks">Hot Drinks</option>
									<option value="Dessert">Dessert</option>
								</select>
							</td>
						</tr>

						<tr>
							<th>Quantity</th>
							<td><input type="text" name="qty" required=""></td>
						</tr>

						<tr>
							<th>Price</th>
							<td><input type="text" name="price" required=""></td>
						</tr>


						<tr>
							<td></td>
							<td> <input type="submit" name="submit" value="Generate Bill"></td>
						</tr>
					</table>
				</form>
			</div>			
		</div>

	</body>
</html>

