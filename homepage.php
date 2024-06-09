<?php
session_start();
$con = mysqli_connect("localhost","root","","feedbackform") or die("Unable to  connect");

$eno=$_SESSION["eno"];

?>
<html>
    <title>HOMEPAGE</title>
<body bgcolor=aliceblue>

        <style>
        header{
    background-color: aliceblue;       
}
            .btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

    
            ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: blueviolet;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
                
            a.obsnclick:hover, a.onclick:active {color: red;}
    </style>
  
    
  <div><header>
                 <h2><center><img id="Image1" src="Images/arkp.png" style="width:30%;" /></center>
                  Welcome 

                  <?php $query="select fullname from studentinfo where enrollmentno = '$eno'";

                    $result=mysqli_query($con,$query);

                      if($result){
                          while($row=mysqli_fetch_array($result))
                          {
                              $fullname=$row["fullname"];
                              echo $fullname;
                          }
                       } 
                   ?>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a href ="logout.php" value="logout" name="logout"> Logout</a></h2>

        <ul style="color:White;background-color:#336666;font-weight:bold;">
  <li><a type="button" class="onclick" href="homepage.php">Home</a></li>
  <li><a type="button" class="onclick" href="profile.php">Profile</a></li>
  <li><a type="button" class="onclick" href="feedback.php">Feedback</a></li>
  <li><a type="button" class="onclick" href="about.php">About</a></li>
</ul> </header>

    </div>
    <img src="Images/Anjuman I Islam.jpg" width=350px hieght=30px >
<img src="Images/abdul-razzak-kalsekar-polytechnic-new-panvel-navi-mumbai-yv1o.jpg"  width="975" height="520">
    <img src="Images/Fundamentals-of-ICT.gif" width="600" height="520">
     <img src="Images/DSC_0265-min.JPG" width="725" height="520">
    </body>
</html>

