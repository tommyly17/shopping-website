<?php
session_start();
$to = $_POST['email'];
$subject = "Confirmation of Order from Grocery Store";

$message = "
<html>
<head>
</head>
<body>
<p>Dear ".$_POST['fname']." ".$_POST['lname']."&#44;</p>
<p>Your order has been confirmed and will be delivered to the address below.</p>
<p>Address: </p>
<p>".$_POST['fname']." ".$_POST['lname']."</p>
<p>".$_POST['address']."</p>
<p>".$_POST['suburb']."&#44; ".$_POST['state']."&#44; ".$_POST['pcode']."</p>
<p>".$_POST['country']."</p>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <donotreply@tolygrocery.com>' . "\r\n";

mail($to,$subject,$message,$headers);
$_SESSION['cart'] = array();
?>
<html>
<body>
<p>Please check your inbox for confirmation of your order.</p>
</body>
</html>