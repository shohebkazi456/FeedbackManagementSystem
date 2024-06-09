
<html>    
    <body style="background-color:rgb(240, 240, 240)">
        <form method="post" action="studentregistration.php" enctype="multipart/form-data">
        

    <center><img src="Images/arkp.png" width=400px hieght=150px >
    <title>Student Infromation</title>
  
   <h1 ALIGN="CENTER"><marquee><i><top>Student Registration Page</top></i></marquee></h1>
        <table border="1">

        <tr>
          <td>Profile Photo:</td>
                <td><input type="file" name="pimage" required>
            </td>
        </tr>

        <tr>
            <td>Full Name:</td>
                <td><input type="text" name="fname" placeholder="Enter your Full Name" required>
            </td>
            </tr>
      
        <tr>
            <td>Enrollment No:</td>
            <td><input type="text" name="eno" placeholder="Enter your Enrollment no." required>
            </td>
        </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Enter Password" required></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="cpassword" placeholder="Renter Password" required></td>
            </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" value="Male" checked required> Male<br>
  <input type="radio" name="gender" value="Female" required> Female<br>
            </td>
        </tr>
      <tr>
          <td>Date of birth:</td>
          <td><input type="date" name="bday" min="01-01-1995" max="31-12-2003" required> 
          </td></tr>
                     
        
        
        <tr>
            <div>
                <td>Year of Admission:</td>
                 <td><select id="txetYear" name="yradmin" onclick="Calculateyear();" required>
                                    <option value="2017" >2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                     <option value="2012">2012</option>
                     </select>
                </div>
        </tr>
           
        <tr>
            <td>Department:</td>
            <td><input type="text" name="dept" placeholder="Enter your Department" required>
            </td>
        </tr>
            <tr>
            <td>Semester:</td>
            <td><select class="semester" name="sem" required>
                 <option value=1st>1st</option>
                  <option value=2nd>2nd</option>
                  <option value=3rd>3rd</option>
                  <option value=4th>4th</option>
                  <option value=5th>5th</option>
                  <option value=6th>6th</option>
                        
            </select>
            </td>
        </tr>
        <tr>
            <td>Email id:</td>
            <td><input type="text" name="email" placeholder="Enter your Email" required>
            </td>
                 </tr>
        </table>
            <h4 align="center">Note: Username is your Enrollment no.</h4>
        <a href="studentlogin.php"><input type="button" class=" back_btn" name="back" id="back_btn" value="Back" ></a>
<input type="submit" name="submit" class=" signup_btn" id="submit_btn" value="signup" >
            </center>      
     </form>
       </body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
    $con = mysqli_connect("localhost","root","","feedbackform") or die("Unable to  connect");
    $fullname=$_POST['fname'];
    $eno=$_POST['eno'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    $gender=$_POST['gender'];
    $birthdate=$_POST['bday'];
    $yearadmin=$_POST['yradmin'];
    $department=$_POST['dept'];   
    $sem=$_POST['sem'];
    $email=$_POST['email'];


    $filename=$_FILES['pimage']['name'];
    $tmpfile=$_FILES['pimage']['tmp_name'];
    $folder="Profile Images/".$filename;
  
  
   $count=0;
   $res= mysqli_query($con,"select *from studentinfo WHERE enrollmentno = '$_POST[eno]'");
   $count=mysqli_num_rows($res);

   $count1=0;
   $res1= mysqli_query($con,"select *from studentinfo WHERE email = '$email'");
   $count1=mysqli_num_rows($res1);
    if($count>0)
    {
        echo '<script type="text/javascript"> alert("Enrollment number already exists...try another enrollment number") </script>';
    }
    elseif ($count1>0) {
      echo '<script type="text/javascript"> alert("Email already exists...try another Email") </script>';
    }
    elseif($count==0 && $count1==0)
    {

      if($password==$cpassword)
      {
        move_uploaded_file($tmpfile, $folder);
      $password=md5($password);

      mysqli_query($con,"insert into studentinfo values ('','$folder','$_POST[fname]','$_POST[eno]','$password','$_POST[gender]','$_POST[bday]','$_POST[yradmin]','$_POST[dept]','$_POST[sem]','$_POST[email]')");
      
        $_SESSION["eno"] = $eno;

           echo '<script type="text/javascript"> alert("User registered successfully go to login page") </script>';
      }

      else
      {
        echo '<script type="text/javascript"> alert("Password did not match") </script>';
      }
      

           // header("location:homepage.php");
    }
      
    
}
?>