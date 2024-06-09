<html>
    <title>THEORY5</title>
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
  #submitbtn{
          background-color: #336666;
          color: white;
          padding: 10px;
          border:none;
          width: 80px;
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
            
            a.onclick:hover, a.onclick:active {color: red;}
    </style>
     
    <div><header>
                 <h2><center><img id="Image1" src="arkp.png" style="width:30%;" /></center>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                     <a href ="logout.php" value="logout" name="logout"> Logout</a></h2>

        <ul style="color:White;background-color:#336666;font-weight:bold;">
  <li><a type="button" class="onclick" href="#home">Home</a></li>
  <li><a type="button" class="onclick" href="#news">Profile</a></li>
  <li><a type="button" class="onclick" href="feedback.php">Feedback</a></li>
  <li><a type="button" class="onclick" href="#about">About</a></li>
</ul> </header>

    </div>
    <form action="insert.php" method="post"> 
    <h3><center>
    <table width="800px" border="0">
        <tr>
         
            <td >
                Subject name: <select class="subject" name="subname" >
                 <option value=Electrical Technology>Electrical Technology</option>
      
               
                        
            </select>
            </td>
            <td>
                Staff Name : <select class="faculty" name="staffname" >
                 <option value=Ahsan Sir>Ahsan Sir</option>
                
                        
            </select>
            </td>
          <td>
                Feedback Number: <span id="" style="font-weight:bold;"> Fifth</span>
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
      <td><input type="radio" name="punctual" value="1" >Poor
      <input type="radio" name="punctual" value="2">Good
      <input type="radio" name="punctual" value="4">Very Good
      <input type="radio" name="punctual" value="6" >Excellent
    </td>
  </tr>
    <tr>
    <td align="center">2</td>
    <td>COMMUNICATION SKILLS </td>
      <td><input type="radio" name="comm" value="1" >Poor
      <input type="radio" name="comm" value="2">Good
      <input type="radio" name="comm" value="4">Very Good
      <input type="radio" name="comm" value="6" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">3</td>
    <td>PRESENTATION SKILLS</td>
      <td><input type="radio" name="teaching" value="1" >Poor
      <input type="radio" name="teaching" value="2">Good
      <input type="radio" name="teaching" value="4">Very Good
      <input type="radio" name="teaching" value="6" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">4</td>
        <td>INTERACTION WITH STUDENTS</td>
      <td><input type="radio" name="objectives" value="1">Poor
      <input type="radio" name="objectives" value="2">Good
      <input type="radio" name="objectives" value="4">Very Good
      <input type="radio" name="objectives" value="6" >Excellent
      </td>
  </tr>
    <tr>
    
        <td align="center">5</td>
    <td >USE OF TEACHING AIDS</td>
      <td><input type="radio" name="time" value="1">Poor
      <input type="radio" name="time" value="2">Good
      <input type="radio" name="time" value="4">Very Good
      <input type="radio" name="time" value="6" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">6</td>
    <td>ABILITY TO MAINTAIN DISCIPLINE</td>
      <td><input type="radio" name="regular" value="1">Poor
      <input type="radio" name="regular" value="2">Good
      <input type="radio" name="regular" value="4">Very Good
      <input type="radio" name="regular" value="6" >Excellent
      </td>
  </tr>
    <tr>
        <td align="center">7</td>
    <td>OVERALL PERFORMANCE</td>
      <td><input type="radio" name="skills" value="1">Poor
      <input type="radio" name="skills" value="2">Good
      <input type="radio" name="skills" value="4">Very Good
      <input type="radio" name="skills" value="6" >Excellent
      </td>
  </tr>
    <tr>
    <td align="center">8</td>
    <td>COMMENT</td>
      <td><input type="text"  name="comment" size="40" value="">
      </td>
  </tr>
    </table> <br><input type="submit" name="submit"  value="submit" id="submitbtn">   </center>
     </form>
 
        </body>
    


</html>




