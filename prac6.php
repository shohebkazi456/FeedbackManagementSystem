<html>
    <title>PRACTICAL6</title>
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
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                     <a href ="logout.php" value="logout" name="logout"> Logout</a></h2>

        <ul style="color:White;background-color:#336666;font-weight:bold;">
  <li><a type="button" class="onclick" href="#home">Home</a></li>
  <li><a type="button" class="onclick" href="#news">Profile</a></li>
  <li><a type="button" class="onclick" href="feedback.php">Feedback</a></li>
  <li><a type="button" class="onclick" href="#about">About</a></li>
</ul> </header>

    </div>
    <h3><center>
    <table width="900px" border="0">
        <tr>
         
            <td >
                Subject name: <span id="" style="font-weight:bold;">	Professional Practices</span>
            </td>
            <td>
                Staff Name : <span id="" style="font-weight:bold;">Ubaid Farooq Saudagar</span>
            </td>
          <td>
                Feedback Number: <span id="" style="font-weight:bold;"> Fourth</span>
            </td></tr>
        </table></center>
    </h3>
<center>
    
    <table cellspacing="0" cellpadding="4" width="800px" rules="all" style="background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;border-collapse:collapse;">
  <tr style="color:White;background-color:#336666;font-weight:bold;">
    <th >Sr.No</th>
       <th>Feedback Parameter</th>
      <th>Staff Performance</th>
   
  </tr>
  <tr>
    <td align="center">1</td>
    <td>PUNCTUALITY</td>
      <td><input type="radio" name="punctual" value="Poor" >Poor
      <input type="radio" name="punctual" value="Good">Good
      <input type="radio" name="punctual" value="VeryGood">Very Good
      <input type="radio" name="punctual" value="Excellent" >Excellent
    </td>
  </tr>
    <tr>
    <td align="center">2</td>
    <td>COMMUNICATION SKILLS </td>
      <td><input type="radio" name="comm" value="Poor" >Poor
      <input type="radio" name="comm" value="Good">Good
      <input type="radio" name="comm" value="VeryGood">Very Good
      <input type="radio" name="comm" value="Excellent" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">3</td>
    <td>PRESENTATION SKILLS</td>
      <td><input type="radio" name="teaching" value="Poor" >Poor
      <input type="radio" name="teaching" value="Good">Good
      <input type="radio" name="teaching" value="VeryGood">Very Good
      <input type="radio" name="teaching" value="Excellent" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">4</td>
        <td>INTERACTION WITH STUDENTS</td>
      <td><input type="radio" name="objectives" value="Poor">Poor
      <input type="radio" name="objectives" value="Good">Good
      <input type="radio" name="objectives" value="VeryGood">Very Good
      <input type="radio" name="objectives" value="Excellent" >Excellent
      </td>
  </tr>
    <tr>
    
        <td align="center">5</td>
    <td >USE OF TEACHING AIDS</td>
      <td><input type="radio" name="time" value="Poor">Poor
      <input type="radio" name="time" value="Good">Good
      <input type="radio" name="time" value="VeryGood">Very Good
      <input type="radio" name="time" value="Excellent" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">6</td>
    <td>ABILITY TO MAINTAIN DISCIPLINE</td>
      <td><input type="radio" name="regular" value="Poor">Poor
      <input type="radio" name="regular" value="Good">Good
      <input type="radio" name="regular" value="VeryGood">Very Good
      <input type="radio" name="regular" value="Excellent" >Excellent
      </td>
  </tr>
    <tr>
        <td align="center">7</td>
    <td>OVERALL PERFORMANCE</td>
      <td><input type="radio" name="skills" value="Poor">Poor
      <input type="radio" name="skills" value="Good">Good
      <input type="radio" name="skills" value="VeryGood">Very Good
      <input type="radio" name="skills" value="Excellent" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">8</td>
    <td>COMMENT</td>
      <td><input type="text"  name="comment" size="40" value="">
      </td>
  </tr>
    </table> <br><input type="submit" name="submit"  value="submit" id="submitbtn">
    </center>
     
</body>

</html>

