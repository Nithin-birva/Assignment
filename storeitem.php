<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="store_val.php" method="post">
    <table border="2">
    <tr>
        <td colspan="2"><center><h1>Item Store</h1></center></td>
    </tr>
    <tr>
        <td><label for="">Enter item name: </label></td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td><label for="">Enter Item Price:</label></td>
        <td><input type="text" name="price"></td>
    </tr>
    <tr><td></td><td></td></tr>
    <tr>
    <td colspan="2"><center><button name="submit">Submit</button>
    <button name="reset">Reset</button></td>
    </tr>

    </table>

    </form>
    
</body>
</html>