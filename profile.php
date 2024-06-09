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
                 <h2><center><img id="Image1" src="arkp.png" style="width:30%;" /></center>
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

  <br><br><br><br>


            <?php $query="select * from studentinfo where enrollmentno = '$eno'";

                    $result=mysqli_query($con,$query);

                      if($result){
                          while($row=mysqli_fetch_array($result))
                          {
                              $fullname=$row["fullname"];
                              $eno=$row["enrollmentno"];
                              $gender=$row["gender"];
                              $bdate=$row["birthdate"];
                              $yadmin=$row["yearadmin"];
                              $dept=$row["department"];
                              $sem=$row["sem"];
                              $email=$row["email"];
                              $pimage=$row["pimage"];
                          }
                       }
            ?>

            <center>

            <table cellspacing="0" cellpadding="4" rules="all" id="MainContent_GridView1" style="background-color:White;border-style:None;border-collapse:collapse;">


              <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Profile</th>
                        <?php echo "<td><img src='$pimage' height='200px' width'200px></td>" ?>
                </tr>


               <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Name</th>
                        <td><?php echo $fullname ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Enrollment No</th>
                        <td><?php echo $eno ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Gender</th>
                        <td><?php echo $gender ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Birth Date</th>
                        <td><?php echo $bdate ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Year of Admission</th>
                        <td><?php echo $yadmin ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Department</th>
                        <td><?php echo $dept ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Semester</th>
                        <td><?php echo $sem ?></td>
                </tr>

                 <tr  style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Email ID</th>
                        <td><?php echo $email ?></td>
                </tr>

            </table>

            </center>

    </div>

    <br><br><br>
    </body>
</html>

