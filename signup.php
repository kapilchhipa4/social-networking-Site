<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$mob=$_POST['mob'];
$course=$_POST['course'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$faculty=$_POST['faculty'];
$passrecoveryque=$_POST['passrecovery'];
$passrecoveryans=$_POST['passrecoveryans'];
$con=mysqli_connect("localhost","root","", "social networking") or die("server not found");
if(isset($_POST['submit']))
{   
if($password==$password1 && strlen($mob)==10)
{
   $query= "insert into signup set name='$name', email='$email', 
    dob='$dob', mob='$mob', course='$course', year='$year', 
    gender='$gender', password='$password', faculty='$faculty',que='$passrecoveryque',ans='$passrecoveryans' ";
    mysqli_query($con, $query) or die("query failed");
    header("Location:index.php?err1=1");
    
}
else
{   
    header("Location:index.php?err=1");
}
}
