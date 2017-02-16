<?php
session_start();

if ($_POST['quantity'] > $_POST['stock']) {
	echo '<p>There was not enough stock to fulfill your order. Please enter a lower amount.</p>';
}
else if ($_POST['quantity'] > 20) {
	echo "<p>You've exceeded the allowed maximum order for this item. Please enter a lower amount.</p>";
}
else if ($_POST['quantity'] < 1) {
	echo "<p>Incorrect amount. Please enter a correct amount.</p>";
}
else {
	$product = array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'price'=>$_POST['price'], 'quantity'=>$_POST['quantity'], 'size'=>$_POST['size']); //creates new product to add to cart

	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array(); //Creates array if new session for $_SESSION['cart']
	}
	else {
		$found = false; //initialises value
		foreach ($_SESSION['cart'] as &$item) { //runs through the list
			if ($_POST['id'] == $item['id']) { //finds item in list
				$found = true; //items has been found
				$new_quantity = $_POST['quantity'] + $item['quantity'];
				$item = array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'price'=>$_POST['price'], 'quantity'=>$new_quantity);
			}
		}
	}
	if ($found == false) { //if not found then just add product to array
			array_push($_SESSION['cart'], $product);
		}
		
	echo '<p>Your item has been added to the cart. Click <a href="view_cart.php">here</a> to view cart.</p>';
}
?>