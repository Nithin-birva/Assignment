<html>
<head><title>Random</title></head>
<body>
<p>Number generated randomly is  <?php
    $choice = rand(1, 100);
    echo $choice;
?>.<br> square root of <?php echo $choice?> is <?php
    echo sqrt($choice);
?>.</p>
</body>
</html>
