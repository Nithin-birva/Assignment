<html>

<body>

	<form action="" method="post">
	<label>Enter number</label>
	<input type="text" name="number">
	<button  name="submit">Submit</button>
	</form>
	
</body>
</html>


<?php  
$num=$_POST['number'];
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes $num is an Armstrong number";  
}  
else  
{  
echo "No $num is not an armstrong number";  
}  
?>  