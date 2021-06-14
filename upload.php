<html>
<body>
<h2>Bill Details</h2>
<?php

$itno=$_POST['itno'];
$itname=$_POST['itname'];
$price=$_POST['price'];
$code=$_POST['code'];
$quantity=$_POST['quantity'];
$total=$quantity*$price;

echo"Item No     : $itno</br>";
echo"Item Name: $itname</br>";
echo"Price: $price</br>";
echo"Item Code: $code</br>";
echo"Item Quantity: $quantity</br>";
echo"Total Price: $total </br>"; 
?>
</body>
</html>