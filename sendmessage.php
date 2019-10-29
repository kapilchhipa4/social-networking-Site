<?php
session_start();
if(isset($_SESSION['login']))
{
  $myid=$_SESSION['login'];
   
if(isset($_POST['chat_sed']))
{

$msg=$_POST['chat_sed'];

$con=mysqli_connect("localhost", "root", "","social networking")
            or die("server not found");
$insertdata=("insert into message set user_message='$msg', uid='$myid'")or die("no");
 mysqli_query($con, $insertdata);
}
   
}
?>