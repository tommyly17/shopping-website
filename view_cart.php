<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();

//Login for database
$servername = "rerun";
$username = "potiro";
$password = "pcXZb(kL";
$dbname = "poti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
?>
<h2>Shopping Cart</h2>
<div class="bluetable">
<table>
	<tr>
		<td>Product ID</td>
		<td>Product Name</td>
		<td>Unit Price</td>
		<td>Quantity</td>
		<td>Subtotal</td>
	</tr>
<?php
if(($_SESSION['cart'] != array())) {
	$total = 0;
	$count = 0;
	foreach ($_SESSION['cart'] as $item) {
		$subtotal = $item['price'] * $item['quantity'];
		$subtotalformatted = number_format((float)$subtotal, 2, '.', '');
		$total += $subtotal;
		$count += $item['quantity'];
		//$sql = "select * from products where product_id='$item'"; //Query
		//$result = mysqli_query($conn, $sql); //Executes query
		//while ($row = $result->fetch_assoc()) {
		echo '<tr>
				<td>'.$item["id"].'</td>
				<td>'.$item['name'].'</td>
				<td>$'.$item['price'].'</td>
				<td>'.$item['quantity'].'</td>
				<td>$'.$subtotalformatted.'</td>
			</tr>';//FINISH REMOVE BUTTON!
		}
	$totalformatted = number_format((float)$total, 2, '.', '');
	echo '<tr>
			<td colspan="4">Total</th>
			<td>$'.$totalformatted.'</td>
		</tr>';
	echo '<tr>
			<td colspan="4">Total Number of Items</th>
			<td>'.$count.'</td>
		</tr>';
	echo '</table>';
	echo '</div>';
	echo '<br>';
	echo '<form method="link" action="empty_cart.php"><input type="submit" value="Clear cart"/></form> <form method="link" action="checkout.php" target="top_right"><input type="submit" value="Checkout"/></form>'; //Button for clearing cart
}
else {
	echo '</table>';
	echo '</div>';
	echo '<br>';
	echo "Your cart is empty!";
}
?>
</html>