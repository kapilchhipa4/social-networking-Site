<?php
session_start();
if(isset($_POST['send']))
{
    $message=$_POST['message'];
    $name=$_SESSION['name'];
     $con=mysqli_connect("localhost", "root", "", "social networking") or die("server not found");
    $date=date("y-m-d");
   $query= "insert into message set to1='$name', message='$message', date='$date' ";
    mysqli_query($con,$query) or die("wrong query");
    header("Location:main.php");
    
}