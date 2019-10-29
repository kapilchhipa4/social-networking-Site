<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location:index.php");
}
$con=mysqli_connect("localhost", "root", "","social networking") or die("server not found");
$mob=$_SESSION['login'];
if(isset($_POST['upload_image']))
{
$image=$_FILES['image']['name'];
$temname=$_FILES['image']['tmp_name'];
move_uploaded_file($temname,"upload_image/$image");
    
    $query="update signup set image='$image' where mob='$mob' ";
    mysqli_query($con,$query) or die("wrong query");
    header("Location:profile.php");
}
?>