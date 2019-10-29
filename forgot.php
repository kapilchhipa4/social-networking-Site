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

	<div class="container" >
    
 <div class="row"><div class="col-lg-6" >
    <img src="images/logo1.png" style="width:150px; float:left;opacity:0.7;"> 
 <ul class="nav navbar-primary">
<li style="display:inline-block;"> <a class="a" href="index.php">Home</a></li>
 <li style="display:inline-block;"> 
 <a class="a" href="contact.php">Contact us</a></li></ul></div>
 <div class="col-lg-6"><br>
     
 <form method="post" action="login.php" style="display:inline-block">
 <h4 style="color:white; display:inline-block;">User name:</h4>
     
<input style="display:inline-block; border-radius:5px; height:30px;" type="text" name="username"  placeholder=" Enter Mobile number" />&nbsp;
<h4 style="color:white; display:inline-block;">Password:</h4>
<input style="display:inline-block; border-radius:5px; height:30px;" type="password" name="password_login" placeholder=" Password" />
<input style="display:inline-block;" class="btn-default" type="submit" value="login" name="login_submit" />
</form><br><br>
     <a  style="float:right;font-weight:bold;text-decoration:none;" href="forgot.php">forgot password</a>
   
     </div></div></div>




    </Header>
    <div class="container">
    <h1 style="text-align:center;color:green;font-weight:bold;">Recover Your Password</h1>
        <form method="post" action="forgot.php">
        <table><tr><th>
            Mobile:&nbsp;&nbsp;
            
            </th>
            <td><input type="text" name="mob" class="input1"></td></tr></table><br>
  <table>      <tr><th>Email:&nbsp;&nbsp;&nbsp;</th>
            <td><input type="email" name="email" class="input1"></td></tr></table><br>
             <table><tr><th>DOB:&nbsp;&nbsp;&nbsp;&nbsp;</th><td><input type="date" name="date" class="input1"></td></tr></table><br>
  <table><tr><th>Password Recovery Question:&nbsp;&nbsp;</th>
      <td><select name="passrecovery" style="width:200px; height:30px;" required="required">
             
             <option value="1"> What is your favorite color</option>
               <option value="2"> What is your favorite Place</option>  <option value="3"> What is your favorite food</option>
          </select></td></tr></table><br>
       <table><tr><th>Answer:</th>  
            <td><input type="text" name="ans" class="input1"></td></tr></table><br>
    <input style="margin-left:100px;" type="submit" name="submit" class="btn">
    </form>
    
    
    </div>
    </body></html>
<?php
if(isset($_POST['submit']))
   {
$mob=$_POST['mob'];
$email=$_POST['email'];
$que=$_POST['passrecovery'];
$ans=$_POST['ans'];
$dob=$_POST['date'];

$con=mysqli_connect("localhost","root","","social networking") or die("server not found");
$query="select * from signup where mob='$mob'";
$b=mysqli_query($con,$query) or die("you are providing wrong Information");
$array=mysqli_fetch_array($b);
if($array['mob']==$mob && $array['dob']==$dob && $array['email']==$email && $array['que']==$que && $array['ans']==$ans)
{
    echo "<h1 style='text-align:center';>your passsword is:".$array['password']."</h1>";
}
    else
    {
        echo "<h1 style='text-align:center';> you are providing Wrong Information</h1>";
    }
   }

   
?>