<?php
session_start();
$con = mysqli_connect("localhost","root","","feedbackform") or die("Unable to  connect");

$eno=$_SESSION["eno"];

?>

<html>
    <title>FEEDBACK</title>
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

    <br>
        <center>
<h3>
        <table width="550px" border="0">
        <tr>
         
            <td >
                Academic Year : <span id="" style="font-weight:bold;">2017-2018</span>
            </td>
            
            <td>
                Course : <span id="" style="font-weight:bold;">Computer</span>
            </td>
            <td>
                Class : <span id="" style="font-weight:bold;">CO3GA</span>
            </td>    
            </tr></table></h3>
            <span style='color:#8E4585;font-size: 14px;font-weight: bold;'><u><b><h3>THEORY</h3></b></u></span>
            <table cellspacing="0" cellpadding="4" rules="all" id="MainContent_GridView1" style="background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;border-collapse:collapse;">
                <caption align="Left">
                        
                </caption><tr style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Sr.No.</th><th scope="col">Subject</th><th scope="col">StaffName</th><th scope="col">&nbsp;</th>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_0">1</span>
                    </td><td>Applied Mathematics</td><td>Tasleem Mahamad Patel</td><td align="center" style="width:150px;"><a  style="color:#333333;" href="theory1.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_1">2</span>
                </td><td>Data Structure Using ‘C’</td><td>Shaista Zulfiquar Khan</td><td align="center" style="width:150px;"><a style="color:#333333;" href="theory2.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_2">3</span>
                </td><td>Digital Techniques</td><td>Ubaid Farooq Saudagar</td><td align="center" style="width:150px;"><a style="color:#333333;"  href="theory3.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_3">4</span>
                </td><td>Relational Database Management System</td><td>Imran Abdul Rashid Shaikh</td><td align="center" style="width:150px;"><a style="color:#333333;" href="theory4.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_4">5</span>
                </td><td>Electricl Technology</td><td>Ahsan Ismail Sayyed</td><td align="center" style="width:150px;"><a style="color:#333333;" href="theory5.php">Give Feedback</a></td>
                </tr>
            </table>
                <span style='color:#8E4585;font-size: 14px;font-weight: bold;'><b><u><h3>PRACTICAL</h3></u></b></span>
                <table cellspacing="0" cellpadding="4" rules="all" id="MainContent_GridView1" style="background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;border-collapse:collapse;">
                <caption align="Left">
                        
                </caption><tr style="color:White;background-color:#336666;font-weight:bold;">
                        <th scope="col">Sr.No.</th><th scope="col">Subject</th><th scope="col">StaffName</th><th scope="col">&nbsp;</th>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_1">1</span>
                    </td><td>Data Structure Using ‘C’</td><td>Shaista Zulfiquar Khan</td><td align="center" style="width:150px;"><a style="color:#333333;" href="prac1.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_2">2</span>
                    </td><td>Graphical User Interface (GUI)</td><td>Muddasir Siraj Mahadik</td><td align="center" style="width:150px;"><a style="color:#333333;" href="prac2.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_3">3</span>
                    </td><td>Relational Database Management System</td><td>Imran Abdul Rashid Shaikh</td><td align="center" style="width:150px;"><a style="color:#333333;" href="prac3.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_4">4</span>
                    </td><td>Digital Techniques</td><td>Ubaid Farooq Saudagar</td><td align="center" style="width:150px;"><a style="color:#333333;" href="prac4.php">Give Feedback</a></td>
                </tr><tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_4">5</span>
                    </td><td>Electricl Technology</td><td>Ahsan Ismail Sayyed</td><td align="center" style="width:150px;"><a style="color:#333333;" href="prac5.php">Give Feedback</a></td>
                </tr>
                    <tr style="color:#333333;background-color:White;">
                        <td align="center" style="width:30px;">
                        <span id="MainContent_GridView1_lblRowNumber_4">6</span>
                        </td><td>Professional Practices </td><td>Ubaid Farooq Saudagar</td><td align="center" style="width:150px;"><a style="color:#333333;" href="prac6.php">Give Feedback</a></td>
                </tr>
    </table>
            </center>
              
     
    </div>
     
</body>

</html>

