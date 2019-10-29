<?php
session_start();  
if(isset($_POST['submit']))
{
$mob=$_POST['mob'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$question=$_POST['question'];
$ans=$_POST['ans']; 
$con= mysqli_connect("localhost", "root", "","social networking") or die ("server not found");
   $query= "select * from signup where mob='$mob'";
    $a=mysqli_query($con,$query) or die("wrong query");
    $array=mysqli_fetch_array($a);
    if($array['mob']==$mob && $array['email']==$email && $array['dob']==$dob && $array['question']==$question && $array['ans']==$ans )
    {  
		header("Location:forgot password.php?err=1");
       
    }
  else
  {
	 header("Location:forgot password.php?err2=1");
  }}
  ?>