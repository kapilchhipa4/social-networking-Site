<?php
session_start();
$mobile12=$_SESSION['login'];
$con=mysqli_connect("localhost","root","","social networking") or die("server not found");

if(isset($_POST['updatename']))
{
    $name1=$_POST['name'];
   $query= "update signup set name='$name1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
    
}
if(isset($_POST['updateemail']))
{   
    $email1=$_POST['email'];
   $query= "update signup set email='$email1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}

if(isset($_POST['updatedob']))
{   
    $dob1=$_POST['dob'];
   $query= "update signup set dob='$dob1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}


if(isset($_POST['updatecourse']))
{   
    $course1=$_POST['course'];
   $query= "update signup set course='$course1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}

if(isset($_POST['updateyear']))
{   
    $year1=$_POST['year'];
   $query= "update signup set year='$year1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}

if(isset($_POST['updategender']))
{   
    $gender1=$_POST['gender'];
   $query= "update signup set gender='$gender1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}

if(isset($_POST['pass']))
{   
    $password1=$_POST['password'];
   $query= "update signup set password='$password1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}
if(isset($_POST['updaterollno']))
{   
    $rollno1=$_POST['rollno'];
   $query= "update signup set rollno='$rollno1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}
if(isset($_POST['updateaddress']))
{   
    $address1=$_POST['address'];
   $query= "update signup set address='$address1' where mob='$mobile12' ";
    mysqli_query($con,$query) or die("something went wrong");
    header("Location:profile.php");
}


?>