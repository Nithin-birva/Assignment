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
	$rev=0;
	$sum=0;
	$n1=$num;
	while($num>1)
	{
		$rem=$num%10;
		$rev=($rev*10)+$rem;
		$sum=$sum+$rem;
		$num=($num/10);
	}
	
	

	echo "reverse of no is:$rev"; echo "<br>";
	echo "Sum of no is:$sum"; echo "<br>";
	
	if($n1==$rev)
	echo "Number $n1 is palindrome";
	else
	echo "Number $n1 is not a palindrome";
?>