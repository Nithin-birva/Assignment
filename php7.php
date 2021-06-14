<!DOCTYPE html>

<head>
	<title>Electricity Bill</title>
</head>


<body>
	<div id="page-wrap">
		<h1>Calculate Electricity Bill</h1>

		<form action="" method="post">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		
	</div>
</body>
</html>

<?php
  $units = $_POST['units'];  
  if($units <= 100) {
    $bill = ($units * 3);
    echo "Bill Amount is- $bill";
    }
    else if($units > 100 && $units <= 200) {
        $bill = ($units * 4);
        echo "Bill Amount is- $bill";
    }
    else if($units > 200 && $units <= 300) {
    
        $bill = ($units * 5);
        echo "Bill Amount is- $bill";
    }
    else {
        
        $bill = ($units * 6);
        echo "Bill Amount is- $bill";
    }
   

?>