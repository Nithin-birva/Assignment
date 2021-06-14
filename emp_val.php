<?php   
    if($_POST)  
    {   
        $cat = $_POST['cat']; 
        $basic = $_POST['salary'];
        $empno = $_POST['eno'];
        $ftname = $_POST['fname'];
        $ltname = $_POST['lname'];
         $selected_radio=$_POST['gender'];
         $phone=$_POST['phone'];
         $design=$_POST['desig'];
         $selected_cat=$_POST['cat'];
         
        // $fname=$_FILES['file']['name'];
        // $ftype=$_FILES['file']['type'];
        // $fsize=$_FILES['file']['size'];
        // $floc=$_FILES['file']['tmp_name'];
        // $fstore="uploads/".$fname;
        // move_uploaded_file($floc,$fstore);
        echo'';
     
     
        $salary=0;  
        $da=0;
        $hra=0;
        $pf=0;
        $tax=0;
        if ($cat == 'part_time')
        {

        $hrs = $_POST['hours'];
            $salary = $hrs * 100;
        }
        elseif ($cat == 'full_time')
        {
            
            if($basic < 1000){

            $da= $basic * 0.45;
            $hra= $basic * 0.10;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic < 5000 and $basic >=1000){
                            
            $da= $basic * 0.75;
            $hra= $basic * 0.20;
            $pf=1200;
            $tax=$basic * 0.05;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic > 5000){
                            
            $da= $basic * 0.90;
            $hra= $basic * 0.30;
            $pf=$basic * 0.05;
            $tax=$basic * 0.15;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
        }
        elseif ($cat == 'contract')
        {
            
            if($basic < 5000){

            $da= 200;
            $hra= 0;
            $tax=0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $tax;
            }
            elseif($basic > 5000 and $basic <=25000){
                            
            $da= $basic * 0.15;
            $hra= 1000;
            $tax=$basic * 0.03;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
            elseif($basic > 25000){
                            
            $da= $basic * 0.20;
            $hra= $basic * 0.00;
            $tax=$basic * 0.09;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
        }
        if($cat == 'part_time'){
            echo "Employee No :$empno";
            echo "</br>";
            
            echo "Employee Name :$ftname $ltname";
            echo "</br>";
            echo "Gender :$selected_radio " ;
            echo "</br>";
            echo "Phone No: $phone " ;
            echo "</br>";
            echo "Designation: $design " ;
            echo "</br>";
            echo "Job category: $cat " ;
            echo "</br>";
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The Salary is $salary";          
        }
        elseif($cat == 'full_time'){
        echo "Employee No :$empno";
        echo "</br>";
        echo "Employee Name :$ftname $ltname";
        echo "</br>";
		echo "Gender :$selected_radio " ;
        echo "</br>";
        echo "Phone No: $phone " ;
        echo "</br>";
        echo "Designation: $design " ;
        echo "</br>";
        echo "Job category: $cat " ;
        echo "</br>";
        echo " Basic Salary : $basic"; 
        echo "</br>";
        echo " DA :$da"; 
        echo "</br>";        
        echo "HRA :$hra"; 
        echo "</br>";
        echo "PF : $pf"; 
        echo "</br>";
        echo "Tax :$tax"; 
        echo "</br>";
        echo " Gross Salary :$gross"; 
        echo "</br>";
        echo "Net Salary is $salary"; 
        echo "</br>";            
        }
        elseif($cat == 'contract'){
            echo "Employee No :$empno";
        echo "</br>";
        echo "Employee Name :$ftname $ltname";
        echo "</br>";
		echo "Gender :$selected_radio " ;
        echo "</br>";
        echo "Phone No: $phone " ;
        echo "</br>";
        echo "Designation: $design " ;
        echo "</br>";
        echo "Job category: $cat " ;
        echo "</br>";
        echo "Basic Salary:  $basic"; 
        echo "</br>";
        echo " DA : $da"; 
        echo "</br>";        
        echo "HRA :$hra"; 
        echo "</br>";
        echo "Tax :$tax"; 
        echo "</br>";
        echo "Gross Salary : $gross"; 
        echo "</br>";
        echo "Net Salary : $salary"; 
        echo "</br>";            
        }
    }     
?> 