<?php
$link = mysqli_connect("localhost", "root", "", "feedbackform");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$subname=mysqli_real_escape_string($link, $_REQUEST['subname']);
$staffname = mysqli_real_escape_string($link, $_REQUEST['staffname']);
$punc=mysqli_real_escape_string($link, $_REQUEST['punctual']);
$communi=mysqli_real_escape_string($link, $_REQUEST['comm']);
$teach=mysqli_real_escape_string($link, $_REQUEST['teaching']);
$interact=mysqli_real_escape_string($link, $_REQUEST['objectives']);
$aids=mysqli_real_escape_string($link, $_REQUEST['time']);
$discipline=mysqli_real_escape_string($link, $_REQUEST['regular']);
$perform=mysqli_real_escape_string($link, $_REQUEST['skills']);
$comments=mysqli_real_escape_string($link, $_REQUEST['comment']);
$sql="INSERT into faculty values ('$_REQUEST[subname]','$_REQUEST[staffname]','$_REQUEST[punctual]','$_REQUEST[comm]','$_REQUEST[teaching]','$_REQUEST[objectives]','$_REQUEST[time]','$_REQUEST[regular]','$_REQUEST[skills]','$_REQUEST[comment]')";
if(mysqli_query($link, $sql)){
        header("location: theory5.php");

    echo "Feedback is given successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>