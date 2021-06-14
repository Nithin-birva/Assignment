<!DOCTYPE html>

    <head>
	    <title>Application Form</title>
    </head>
    <body>
    <div >
                
                    
                    <form action="form_val.php" method="post" enctype="multipart/form-data">
                    <table cellpadding="4" width="50%" bgcolor="wheat" align="center" cellspacing="2" border="3"> 
                        <tr>
                            <td colspan="2" ><center><h1>NMAM IT NITTE</h1>
                            <h1><u> PG APPLICATION FORM</u></h1></center></td>
                        </tr>
                        <tr>
                            <td>  <label>Name:</label></td>
                            <td> <input type="text" class="form-control" placeholder="First name" name="ftname" required>
                                <input type="text" class="form-control" placeholder="Middle name" name="mdname">
                                <input type="text" class="form-control" placeholder="Last name" name="ltname" ></td>
                        </tr>
                            <td><label>Upload Image</label></td>
                            
                            <td><input type="file" name="file"  class="form-control ggg input-lg" ></td>
                                                    
                        </tr>

                        <tr>
                                <td><label for="name"> Father Name:</label></td>
                                <td><input type="text" class="form-control"  name="fathername" required></td>
                        </tr>

                        <tr>
                                <td><label for="comments"> Address:</label></td>
                                <td><textarea class="form-control" type="textarea" name="address"  placeholder="Address" maxlength="6000" rows="4"></textarea></td>
                        </tr>  

                        <tr>
                                <td><label for="name"> Contact No:</label></td>
                                <td><input type="text" class="form-control" placeholder="mobile no"  name="mblno" required></td>
                        </tr>

                        <tr>
                                <td><label for="email"> Email:</label></td>
                                <td><input type="email" class="form-control" placeholder="Email" name="mail" required></td>
                        </tr>

                        <tr>
                                <td><label > date of Birth:</label></td>
                                <td><input type="date" class="form-control"  name="dob" required></td>
                        </tr>

                        <tr>
                                <td><label > Gender:</label></td>
                               <td> <input type="radio" class="form-control"  name="gender" value="male" >Male
                                <input type="radio" class="form-control"  name="gender" value="female" >Female</td>
                        </tr>

                        <tr>
                                <td><label > Percentage in degree:</label></td>
                                <td><input type="text" class="form-control" placeholder="Percentage"  name="perc" required></td>
                        </tr>

                        <tr>
                                <td><label> Hobbies:</label></td>
                                <td><input type="checkbox" class="form-control"  name="hoby_list[]" value="Cricket">Cricket
                                <input type="checkbox" class="form-control"  name="hoby_list[]" value="photography">Photography
                                <input type="checkbox" class="form-control"  name="hoby_list[]" value="listening music">listening music
                                </td>
                        </tr>

                        <tr>
                                <td><label for="name"> Institution studied:</label></td>
                                <td><input type="text" class="form-control" placeholder="College name"  name="clg" required></td>
                        </tr>

                        <tr>
                                <td><label for="email"> Course Studied:</label></td>
                                <td><input type="radio" class="form-control"  name="course" value="BCA">BCA<br>
                                <input type="radio" class="form-control"  name="course" value="BSC" >BSC<br>
                                <input type="radio" class="form-control"  name="course" value="BCOM" >B.COM<br>
                                <input type="radio" class="form-control"  name="course" value="BE" >B.E</td>
                        </tr>

                        <tr>
                                <td><label for="name"> Course Offered</label></td>
                                <td><select name="pg">
                                  <option value="MCA">MCA</option>
                                  <option value="MBA">MBA</option>
                                  <option value="M.Tech">M.Tech</option>
                                  <option value="MSc">MSc</option>
                                </select></td>
                        </tr>


                        
                       <tr>
                                
                                <td colspan="2"><center><button type="submit" class="btn btn-lg btn-warning btn-block" value="submit" name="submit" >SUBMIT</button>
                                <input type="reset"></center></td>
                        </tr>
                    </form>
                
                    
                </div>
            </div>
            


    
      
     
     
    </body>
    

</html>
