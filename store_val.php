<html>
<head><title>Assignmen4</title></head>

     <h2>
        Bill Details
    </h2>
     <?php
     if($_POST)  
    {   
        $names = $_POST['name']; 
        $price = $_POST['price'];

        $name = explode(',',$names);
        $x = count($name);

        $prc = explode(',',$price);

        echo '<body ><table border="2">
            <tr style="background-color:red">
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$name[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo 'Total Amount : '.$total;
        echo '<br>';

        $max= max($prc);
        $ky = array_search($max, $prc);
        echo '<br>';
        echo 'Costliest item : '.$name[$ky];

        $min= min($prc);
        $key = array_search($min, $prc);
        echo '<br>';
        echo 'Cheapest item Is: '.$name[$key];
}     
?>

    
</body>
</html>
