<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<select name="dropDown" class="dropdown-content"  id="dropDown">
		<option  value=""> <a href="pen.php" target="">select</a></option >
		
            <option  value="pen.php"> <a href="pen.php" target="right">Pen</a></option >
            <option  value="pencil.php"> <a href="pen.php" target="right">Pencil</a></option >
		</select>

        <script>
var dropDownValue = document.getElementById("dropDown");

dropDownValue.onchange = function()
{
if(this.selectedIndex !== 0)
{
    window.location.href=this.value;
}
};
</script>
 <form action="upload.php" method="post">  
<table border="1">
    <tr>
    <th>Itemno</th>
        <td><input type="number" readonly="readonly" name="itno" value="111"></td>
        <tr>
        <th>Itemname</th>
        <td><input type="text" readonly="readonly" name="itname" value="Pen"></td>
        </tr>
        <tr>
        <th>Item price</th>
        <td><input type="number" readonly="readonly" name="price" value="20"></td>
        </tr>
        <tr>
        <th>Item code</th>
        <td><input type="number" readonly="readonly" name="code" value="324"></td>
        </tr>
        <tr>
        <th>Quantity</th>
        <td><input type="number" name="quantity"></td>
    </tr>
    <tr>
        <td colspan="2"><button name="submit">Submit</button></td>
    </tr></form> 
</table>
</body>
</html>