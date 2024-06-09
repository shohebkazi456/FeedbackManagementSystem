
<html>
<title>Student LOGIN</title>
<body style="background-color:rgb(240, 240, 240)">
    <form  method="post" action="studentlogin.php" >
<center>
<img src="Images/arkp.png" width=400px hieght=150px ><br>
    
   
        <h2>STUDENT LOGIN</h2>
        Username:<input type="text" values="inputvalues" placeholder="Enter Your Username" name="eno" required><br>
       
    Password:<input type="password" values="inputvalues"  placeholder="Enter Your Password" name="password" required><br><br>
       <input type="submit" name="submit1" value="Signin">
    </center>
    <br>
        <span style="padding-left:38em;"> New Student please <a href="studentregistration.php">click here</a> to sign up first.</span>
      </form>
       </body>
    </html>

<?php
session_start();
if(isset($_POST['submit1']))
    {
    $eno=$_POST['eno'];
   $password=md5($_POST['password']);
    
    
    $con = mysqli_connect("localhost","root","","feedbackform") or die("Unable to  connect");
    $query=mysqli_query($con, "SELECT * FROM studentinfo WHERE enrollmentno='$eno' AND password='$password' ");
    $numrows = mysqli_num_rows($query);

    
   if($numrows == 1)
    {
       //while($rows = mysqli_fetch_assoc($q))
     {  
            $_SESSION["eno"] = $eno;
            $_SESSION["password"] = $password;
      
          
        }
       header("location: homepage.php");
   }
           else
           {
               echo '<script type="text/javascript"> alert("Incorrect username or password") </script>'; 
           }
    }
 
?>
 