<?php
session_start();

if(isset($_POST['login_submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password_login'];
    
$con= mysqli_connect("localhost", "root", "","social networking") or die ("server not found");
   $query= "select * from signup where mob='$username'";
    $a=mysqli_query($con,$query) or die("wrong query");
    $array=mysqli_fetch_array($a);
    if($array['mob']==$username && $array['password']==$password)
    {   $name1=$array['name'];
        $_SESSION['login']=$username;
        $_SESSION['name']=$name1;
        header("Location:main.php");
     $query1="update signup set status='y' where mob='$username'";
     mysqli_query($con,$query1);
        
    }
    else
    {
        header("Location:index.php?incorrect=1");
    }
}