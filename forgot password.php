<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap -3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<style>
.a
{
	color:white;
	font-size:18px;
}
a:hover
{
	background:none !important;
	color:#CCC;
}
.input1
{
	width:250px;
	height:40px;
	border-radius:5px;
}
th
{
	font-size:20px;
}
select
{
	border-radius:5px;
}
	
</style>
</head>

<body>
<Header class=" modal-header"  style="background:#004040;">
    
<!--<span style="color:#FFF;"><h1 style="text-align:center">
Welcome to Commerce College Group</h1></span>-->

	<div class="container" >
    
 <div class="row"><div class="col-lg-6" >
    <img src="images/logo1.png" style="width:150px; float:left;"> 
 <ul class="nav navbar-primary">
<li style="display:inline-block;"> <a class="a" href="index.php">Home</a></li>
 <li style="display:inline-block;"> 
 <a class="a" href="contact.php">Contact us</a></li></ul></div>
</div></div></Header>
 
 <div class="container">
<div class="row">
<div class="col-lg-8">
<img  class="img-responsive" src="images/group.png" />
    <?php
    if(isset($_REQUEST['err']))
    {
        echo"<h1 style='text-align:center;'> Congratulation";
        echo"<h1  style='text-align:center;' >your password is.";
		
    }
	 if(isset($_REQUEST['err2']))
    {
        echo"<h1 style='text-align:center;'> something went wrong";
        echo"<h1  style='text-align:center;' > Please try again";
    }
 
?>
</div>
 <div class="col-lg-4">

<h1 style="text-align:center; font-weight:bold;">Recover Your Password</h1><br />
    <form method="post" action="forgot password1.php">
    <center>
    <table><br /><tr align="center" >

<th>Mob:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input class="input1" type="tel" placeholder="  Enter Mobile Number" name="mob" required="required"/></td></tr>
</table>
<table><br />
<th>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input class="input1" type="email" placeholder="  Enter Email" name="email" required="required" /></td></tr>
</table>
<table><br />
<tr >

<th>DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input class="input1" type="date" name="dob" required="required"/></td></tr>
</table>
<table><br /><tr >
 <table>
   <tr>
     <th>Password Recovery Question:</th>
     <td><p>
       <select required="Question" style="width:160px; height:30px;" name="question">
         <option value="none">Select Question</option>
         <option value="1" >what is your favourite food</option>
         <option value="2" >what is your favourite color</option>
         <option value="3">what is your first teacher name</option>
       </select>
     </p></td>
   </tr>
 </table>

 
 <p>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input1" type="text" placeholder="write ans" name="ans" required="required" />	
   	 </p>
 <p><br /></p></tr></table></center>
 </p>
 <center><input class="btn btn-lg" type="submit" name="submit" value="Submit" />
</center></form>



</body></html>


