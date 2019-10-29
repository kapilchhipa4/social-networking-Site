<?php
session_start();
if(isset($_SESSION['login']))
{
  $myid=$_SESSION['login'];
   
if(isset($_POST['id']))
{

$id=$_POST['id'];
$msg=$_POST['mymsg'];
$con=mysqli_connect("localhost", "root", "","social networking")
            or die("server not found");
$insertdata=("insert into private_msg set message_is='$msg', tomsg='$id ', frommsg='$myid'")or die("no");
 mysqli_query($con, $insertdata) or die("wrong query");

  }
    
}
   

?>