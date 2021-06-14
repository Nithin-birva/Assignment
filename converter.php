<html>
<head><title>Assignmen4</title></head>


     <h2>
        String Conversion Operations
    </h2>
    <h4>REVERSE-1</h4>
    <h4>LENGTH-2  </h4>
    <h4>SUB STRING-3</h4>
    <h4>UPPER CASE-4</h4>
    <h4>LOWER CASE-5</h4>
    <h4>NUMBER OF WORDS-6</h4>
    
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br>
        <input type="text" name="convert"  placeholder="Enter 1-6" required/>

        <br><br>
        <input type="submit" name="submit" value="Convert"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST['convert'];
        $txt = $_POST['txt'];

        switch($string){
            case '1': $rev = strrev($txt);
                            echo 'reversed string of '. $txt. ' is: '. $rev;
                            break;
            case '2': $len = strlen($txt);
                            echo "length of the string ".$txt. " is: ". $len;
                            break;
            case '3':$sub = substr($txt, 5, 13);
                            echo "substring of the string ".$txt. " is: ". $sub;
                            break;
            case '4': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case '5':$low = strtolower($txt);
                            echo "string ".$txt. " in lowercase is: ". $low;
                            break;
            case '6':$wrd = str_word_count($txt);
                            echo " number of words in the string ".$txt. " is: ". $wrd;
                            break;

        }
       
    }     
?> 
</center>
</body>
</html>

