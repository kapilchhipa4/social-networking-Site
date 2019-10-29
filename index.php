<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap -3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="files/jquery.min.js"></script>
    <script type="text/javascript" src="files/myjquery.js"></script>
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
    .ab
    {
        font-size: 20px;
        background: red;
        padding: 5px 20px;
        color:white;
        border-radius: 4px;
    }
     .bc
    {
        font-size: 20px;
        background: orange;
        padding: 5px 20px;
        color:white;
        border-radius: 4px;
    }
     .cd
    {
        font-size: 20px;
        background: green;
        padding: 5px 20px;
        color:white;
        border-radius: 4px;
    }
    .match
    {
        font-size: 20px;
        background: green;
        padding: 5px 20px;
        color:white;
        border-radius: 4px;
    }
    .notmatch
    {
        font-size: 20px;
        background: red;
        padding: 5px 20px;
        color:white;
        border-radius: 4px;   
    }
	
</style>
    
   
    
    
</head>

<body>
<Header class=" modal-header"  style="background:#004040;">
    
<!--<span style="color:#FFF;"><h1 style="text-align:center">
Welcome to Commerce College Group</h1></span>-->

	<div class="container-fluid" >
    
 <div class="row"><div class="col-lg-6" >
    <img src="images/logo1.png" style="width:150px; float:left;opacity:0.7;"> 
     
      <ul class="nav navbar-primary " style="margin-top:50px;float:right;margin-right:200px; ">
<li style="display:inline-block;"> <a class="a" href="index.php">Home</a></li>
 <li style="display:inline-block;"> 
 <a class="a" href="contact.php">Contact us</a></li></ul>
</div>
 <div class="col-lg-6"><br>
     
 <form method="post" action="login.php" style="display:inline-block">
 <h4 style="color:white; display:inline-block;">User name:</h4>
     
<input style="display:inline-block; border-radius:5px; height:30px;" type="text" name="username" required="required"  placeholder=" Enter Mobile number" />&nbsp;
<h4 style="color:white; display:inline-block;">Password:</h4>
<input style="display:inline-block; border-radius:5px; height:30px;" type="password" required="required" name="password_login" placeholder=" Password" />
<input style="display:inline-block;" class="btn-default" type="submit" value="login" name="login_submit" />
</form><br><br>
     
     <a  style="float:right;font-weight:bold;text-decoration:none;" href="forgot.php">forgot password</a>
   
     </div></div></div>




    </Header>
<div class="container">
<div class="row">
<div class="col-lg-7">

   
    <img  class="img-responsive" src="images/group.png" style="opacity:0.3; "/>
   
     <span style=" font-size:20px;color:green;margin-left:80px;">University Commerce College, J.L.N.   Marg, Jaipur </span>
     <?php  
    if(isset($_REQUEST['err']))
    {
        echo"<h1 style='text-align:center;'> something went wrong";
        echo"<h1  style='text-align:center;' > Please try again";
    }
    if(isset($_REQUEST['err1']))
    {
        echo "<h1 style='text-align:center;'> Congratulation </h1>";
        echo "<h1 style='text-align:center;'> your account is successful created";
        echo "<h1 style='text-align:center;'> Now you can log in</h1>";
    }
    if(isset($_REQUEST['incorrect']))
    {
        echo "<h1 style='text-align:center;'> username or password is incorrect</h1>";
            
            echo "<h1 style='text-align:center;'>Please try again....</h1>";
            
    }
?>
</div>

<div class="col-lg-5">

<h1 style="text-align:center; font-weight:bold;">Create Your Account</h1><br />
    <form method="post" action="signup.php">
<table>

<tr><th> Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input class="input1" type="text" name="name" placeholder="  Enter full Name" required="required"/></td></tr>
<tr ></table>
<table><br />
<th>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input class="input1" type="email" placeholder="  Enter Email" name="email" required="required" /></td></tr>
</table>
<table><br />
<tr >

<th>DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input class="input1" placeholder="Enter D.O.B." type="date" name="dob" required="required"/></td></tr>
</table>
<table><br /><tr >

<th>Mob:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input class="input1" type="tel" placeholder="  Enter Mobile Number" name="mob" required="required"/></td></tr>
</table><br />

    <table><tr></td><th>Course:&nbsp;&nbsp;&nbsp;&nbsp;</th><td>
 <select  style="width:120px; height:30px;" name="course">
 <option value="">Select Course</option>
 <option value="BCA" name="bca">BCA</option>
 <option value="BBA" name="bba">BBA</option>
 <option value="B.com" name="bcom">B.com</option>
 </select>
 <select  style="width:120px; height:30px;" name="year">
 <option value="" >Select Year</option>
 <option value="I year" name="1styear">I year</option>
 <option value="II year" name="2styear">II year</option>
 <option value="III year" name="3styear">III year</option>
 </select>
 </td><td style="color:red">*only for Students</td>
 </tr></table><br />
    
    <table><tr >
<th>Faculty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th><select name="faculty" style="width:250px;">
 <option selected="selected" value="">Select Dep. </option>
    <option value="Principle">Principle</option>
    <option value="vice principle">Vice Principles</option>
    <option value="BCA Dep.">BCA Dep.</option>
 <option value="BBA Dep.">BBA Dep.</option> 
<option value="BCOM Dep.">B.Com Dep.</option>
    <option value="Library Dep.">Library Dep.</option>
    <option value="Other Dep.">Other Dep.</option>

    </select></th><td style="color:red;">*only for Faculty</td></tr>
</table> <br />
    
    
 <table><tr >
<th>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th><input type="radio"  name="gender" value="male"  checked />Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" />female</th></tr>
</table> <br />
    
 <table><tr><th>Password:</th>
     <td><input class="input1" type="password" name="password" required="required" placeholder="  Enter password" id="status" /></td><td><span id="_status"></span></td></tr></table><br />
 <table><tr><th style="width:50px;"> Confirm Password:</th><td><input class="input1" type="password"
 placeholder="  Confirm password" name="password1" required="required" id="status1" /></td><td><span id="_status1" ></span></td></tr></table><br>
     <table><tr><th>Password Recovery Question</th>
         
         <td><select name="passrecovery" style="width:200px; height:30px;" required="required">
            <option value="">Select any Question</option> 
             <option value="1"> What is your favorite color</option>
               <option value="2"> What is your favorite Place</option>  <option value="3"> What is your favorite food</option>
             </select>
 </td></tr></table>
    
    <br />
    <table><tr><th>Answer:</th><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" required="required" name="passrecoveryans" class="input1" placeholder="Write your Answer"></td>
</tr></table><br>
    <center><input class="btn btn-lg" type="submit" name="submit" value="Sign Up" />
    </center></form>
 </div>
</div>
</div>

<div style="padding-top:30px;"></div>
<nav style="background-color:#004040;" 
class="navbar modal-footer navbar-inverse">
<div class="container">
<div class="row">
<div class="col-lg-4"></div>

<div class="col-lg-4">

<div class="navbar-text">
<h3 style="text-align:center; color:white;font-size:12px;">Developed by BCA Students @ 2014-2017</h3>
  </div>
  <div class="col-lg-4"></div>
  </div>
</div>
  </nav>
</body>
</html>
