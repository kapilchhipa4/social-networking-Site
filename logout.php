<?php
session_start();
$a=$_SESSION['login'];
$con=mysqli_connect("localhost","root","","social networking") or die("server not found");
$query="update signup set status='n' where mob='$a'";
mysqli_query($con,$query) or die("wrong query");
 
    session_unset();
header("Location:index.php");
?>