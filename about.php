<?php
session_start();
$con = mysqli_connect("localhost","root","","feedbackform") or die("Unable to  connect");

$eno=$_SESSION["eno"];

?>

<html>
    <title>ABOUT</title>
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
     <h2>About Us</h2>
Anjuman-I-Islam’s A.R. Kalsekar Polytechnic (ARKP), established in the year 2002-2003 managed by the prestigious Anjuman-I-Islam trust Mumbai. ARKP and AIKTC is a hi-tech bustling campus spread over 10.58 acres of land, launched with the support of philanthropist Haji Abdul Razzak Kalsekar Sahab. The 5-acre plot where A.I’s ARKP is situated was donated by Old Students Association (OSA) M.H Saboo Siddique College of Engineering.

We have three year full time diploma engineering courses of mechanical engineering, civil engineering, computer engineering, electronic engineering, electrical and telecommunication engineering located at panvel it is well connected to railway station and bus depot we offer high quality particular base teaching and learning experience with opportunities for higher studies and placement through our expertize human resource and state of art infrastructure.
    
    
            <h2 class="text-light-color">Introduction to its Genesis including its Registration Status</h2>
            <p class="text-justify">The <strong>Anjuman-I-Islam, Mumbai </strong>was <strong>founded in 1874 </strong>by a small group of devote Muslims lead by none other than <strong>Dr.Badruddin Tyabji (First Chief Justice of Bombay High Court) </strong> with a ‘desire to see the Muslim Community rise higher in the moral, social and educational scale’. It <strong>started with one school </strong>and today it has more than <strong>eighty institutions </strong> from pre-primary schools to graduate and postgraduate level including, College of Engineering &amp; Polytechnic, Unani Medical College, College of Education, College of Commerce &amp; Economics, Institute of Management Studies, College of Hotel management and Catering Technology, College of Home Science etc. It has a high reputation of being a Muslim minority organization catering to the needs of more than <strong>100 Thousand students </strong> under its umbrella (even larger than university like Aligarh Muslim University). At present the prime focus of the Anjuman is towards <strong>quality, transparency, growth and of course to become world class </strong>. Anjuman is therefore fully focused on establishing an integrated campus in Navi Mumbai having faculties in Engineering, Management, Pharmacy, Architecture and Computer applications (Information Technology). Besides, Anjuman-I-Islam provides several services and facilities to the society through various programmes and also manages a number of trusts as indicated in the enclosed list. <strong>(Please See Annexure A)</strong>
            </p>
            <p class="text-justify margin-sm">The constitution of Anjuman-I-Islam has changed in the last hundred years. In 1946 an association called the "ANJUMAN-I-ISLAM ASSOCIATION" was incorporated under the Indian Companies Act of 1913. The Anjuman now acts as an incorporated body having its own Memorandum of Association and Articles of Association. The Anjuman also acts as trustee for a number of charities in addition to Anjuman-I-Islam Charities governed by the scheme of 1932.</p>
      
           
     
</body>

</html>

