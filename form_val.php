<?php
$pgcourse =$_POST['pg'];
$course = $_POST['course'];
$percentage = $_POST['perc'];


        if( $pgcourse == 'MCA' or $pgcourse == 'MTech'){
            if( $percentage >= 70){
                if($pgcourse =='MTech' and $course == 'B.E'){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be B.E "); </script>';
                }
                if($pgcourse =='MCA' and ($course == 'BCA' or $course == 'BSc')){                    
                echo '("Registration Successful ")';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 70%"); </script>';
            }
        }
        elseif( $pgcourse == 'MBA'){
            if( $percentage >= 60){
                echo '<script>alert("Registration Successful "); </script>';
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 60%"); </script>';
            }
        }
        else{
            if( $percentage >= 40){
                if($pgcourse =='MSc' and ($course == 'BCA' or $course == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 40%"); </script>';
            }
        }

?>


<html>
<head>

</head>
<body>
<table cellpadding="6" width="50%" bgcolor="wheat" align="center" cellspacing="2" border="10">  
    <tr>    
    <td  align="center" colspan="2"><font color="#0000FF"><h1>NMAM IT NITTE</h1><h1> YOUR PG APLLICATION DETAILS<h1></font></td>  
    </tr>    
    <tr>    
    <td>Name:</td>    
    <td><?php echo $_POST['ftname']; ?>
    <?php echo $_POST['mdname']; ?>
    <?php echo $_POST['ltname']; ?> </td>  
    </tr>  
    <tr>    
    <tr>
    <td>image</td>
    <td><?php
        $fname=$_FILES['file']['name'];
        $ftype=$_FILES['file']['type'];
        $fsize=$_FILES['file']['size'];
        $floc=$_FILES['file']['tmp_name'];
        $fstore="uploads/".$fname;
        move_uploaded_file($floc,$fstore);?>
        <image  src="<?php echo $fstore; ?>" height="100" width="100"> 
        
     
     </td>
    </tr>
    <td>Father name:</td>   
    <td><?php echo $_POST['fathername']; ?></td>  
    </tr>  
    <tr>    
        <td>Address:</td>    
        <td><?php echo $_POST['address'];?></td> 
    </tr>    
        <td>Phone NO:</td>    
        <td><?php echo $_POST['mblno']; ?></td>  
    </tr>  

    </tr>    
        <td>Email</td>    
        <td><?php echo $_POST['mail']; ?></td>  
    </tr> 

    <tr>
        <td>Date of Birth</td>    
        <td><?php echo $_POST['dob']; ?></td>
    </tr>

    <tr>
        <td>Gender</td>    
        <td><?php $selected_radio=$_POST['gender'];
		echo $selected_radio ?></td>
    </tr>

    <tr>
        <td>Percentage in Degree</td>    
        <td><?php echo $_POST['perc']; ?></td>
    </tr>


    <tr>
        <td>Hobbies</td>    
        <td><?php 
            $hobbi = $_POST['hoby_list'];
            if(empty($hobbi)) 
            {
                echo("You didn't select any Hobbies.");
            } 
            else 
            {
                $N = count($hobbi);
                for($i=0; $i < $N; $i++)
                {
                    echo($hobbi[$i] . " ");
                }
            } 
        ?></td>
    </tr>

    <tr>
        <td>Institution Studied</td>    
        <td><?php echo $_POST['clg']; ?></td>
    </tr>

    <tr>
        <td>Course studied</td>    
        <td><?php
          $selected_course=$_POST['course'];
          echo $selected_course;
         ?></td>
    </tr>


    <tr>
        <td>Course Offered</td>    
        <td><?php 
             $select_val=$_POST['pg'];
             echo $select_val;         
        ?></td>
    </tr>


    
</table>

</body>
</html>
