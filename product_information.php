<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();

//Gets ID passed through URL
$id = $_GET["id"];

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

$sql = "SELECT * FROM products WHERE product_id='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) 
{
     echo "<h2>Product Information</h2>";
	 //echo '<form method="get" action="shopping_cart.php?id='.$row["product_id"].'">';
	 //Table headings
	 echo '<form method="post" action="shopping_cart.php" target="bottom_right">';
	 echo '<div class="CSSTableGenerator">';
	 echo "<table>
			<tr>
			  <td>Product ID</td>
			  <td>Product Name</td>
			  <td>Unit Price</td>
			  <td>Size</td>
			  <td>In Stock</td>
			</tr>";
     //Data of table
	 while($row = $result->fetch_assoc()) 
	{
		 $name = $row['product_name'];
		 $price = $row['unit_price'];
		 $stock = $row['in_stock'];
		 $size = $row['unit_quantity'];
		 echo "<tr>
			     <td>".$id."</td>
				 <td>".$name."</td>
				 <td>$".$price."</td>
				 <td>".$size."</td>
				 <td>".$row["in_stock"]."</td>
			   </tr>";
    }
    echo "</table>";
	echo '</div>';
	echo '<input type="hidden" name="id" value="'.$id.'">';
	echo '<input type="hidden" name="name" value="'.$name.'">';
	echo '<input type="hidden" name="price" value="'.$price.'">';
	echo '<input type="hidden" name="stock" value="'.$stock.'">';
	echo '<br>';
	//echo '<a href="shopping_cart.php?id='.$id.'" target="bottom_right"">Click here to add to cart</a>';
	echo '<input type="number" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart"/>';
	echo '</form>';
	echo '<p>The maximum amount of items you are allowed to add in one go is 20.</p>';
} 
else 
{
     echo "Please click an item on the left.";
}
?>
</body>
</html>