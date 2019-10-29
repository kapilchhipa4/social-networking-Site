<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location:index.php");
}
$mob= $_SESSION['login'];
$con=mysqli_connect("localhost", "root","","social networking") or die("server not found");
$query="select * from signup where mob='$mob' ";
$a=mysqli_query($con,$query) or die("wrong query");
$array=mysqli_fetch_array($a) or die("not found");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap -3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="files/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="files/jquery.min.js" type="text/javascript" ></script>
    <script>
    $(document).ready(function() {      
    
     $("#rollno01").click(function(){
       
        $("#rollno1").removeAttr("readonly");
        $("#rollno1").removeAttr("value");
        $("#rollno1").attr("placeholder","Enter roll no.");
        $("#updaterollno").css({"visibility":"visible"});
        $("#updaterollnocancel").css({"visibility":"visible"});
    });    
        
        
    $("#name01").click(function(){
       
        $("#name1").removeAttr("readonly");
        $("#name1").removeAttr("value");
        $("#name1").attr("placeholder","Enter New Name");
        $("#updatename").css({"visibility":"visible"});
        $("#updatenamecancel").css({"visibility":"visible"});
    });
         $("#email01").click(function(){
       
        $("#email1").removeAttr("readonly");
        $("#email1").removeAttr("value");
        $("#email1").attr("placeholder","Enter New Email");
         $("#updateemail").css({"visibility":"visible"});
        $("#updateemailcancel").css({"visibility":"visible"});
    });
         $("#dob01").click(function(){
       
        $("#dob1").removeAttr("readonly");
        $("#dob1").removeAttr("value");
        $("#dob1").attr("placeholder","Enter New DOB");
         $("#updatedob").css({"visibility":"visible"});
        $("#updatedobcancel").css({"visibility":"visible"});
    });
         $("#mobile01").click(function(){
       
        $("#mobile1").removeAttr("readonly");
        $("#mobile1").removeAttr("value");
        $("#mobile1").attr("placeholder","Enter New Mobile No.");
         $("#updatemobile").css({"visibility":"visible"});
        $("#updatemobilecancel").css({"visibility":"visible"});
    });
         $("#course01").click(function(){
       
        $("#course1").removeAttr("readonly");
        $("#course1").removeAttr("value");
        $("#course1").attr("placeholder","Enter New Course like BCA,BBA,B.Com ");
         $("#updatecourse").css({"visibility":"visible"});
        $("#updatecoursecancel").css({"visibility":"visible"});
    });
        
         $("#year01").click(function(){
       
        $("#year1").removeAttr("readonly");
        $("#year1").removeAttr("value");
        $("#year1").attr("placeholder","Enter New Year");
         $("#updateyear").css({"visibility":"visible"});
        $("#updateyearcancel").css({"visibility":"visible"});
    });
         $("#gender01").click(function(){
       
        $("#gender1").removeAttr("readonly");
        $("#gender1").removeAttr("value");
        $("#gender1").attr("placeholder","Enter Gender");
         $("#updategender").css({"visibility":"visible"});
        $("#updategendercancel").css({"visibility":"visible"});
    });
         $("#password01").click(function(){
        
       $("#password1").removeAttr("readonly");
        $("#password1").removeAttr("value");
        $("#password1").attr("placeholder","Enter New Password");
         $("#updatepassword").css({"visibility":"visible"});
        $("#updatepasswordcancel").css({"visibility":"visible"});
    });
        
            $("#address01").click(function(){
        
       $("#address1").removeAttr("readonly");
        $("#address1").removeAttr("value");
        $("#address1").attr("placeholder","Enter your Address");
         $("#updateaddress").css({"visibility":"visible"});
        $("#updateaddresscancel").css({"visibility":"visible"});
    });
       // edit button code end;
        
        
        //cance button code started
        $("#updatenamecancel").click(function(){
        
        $("#updatenamecancel").css({"visibility":"hidden"});
         $("#updatename").css({"visibility":"hidden"});
         $("#name1").removeAttr("placeholder");
        $("#name1").attr("value", "<?php echo $array['name'];?> ");
        $("#name1").attr("readonly","readonly");
       
         });
        
        
        $("#updateemailcancel").click(function(){
        
        $("#updateemailcancel").css({"visibility":"hidden"});
         $("#updateemail").css({"visibility":"hidden"});
          $("#email1").removeAttr("placeholder");
        $("#email1").attr("value","<?php echo $array['email'];?>");
         $("#email1").attr("readonly","readonly");
       
        
        });
        
        
        $("#updatedobcancel").click(function(){
        
        $("#updatedobcancel").css({"visibility":"hidden"});
         $("#updatedob").css({"visibility":"hidden"});
         $("#dob1").removeAttr("placeholder");
        $("#dob1").attr("value","<?php echo $array['dob'];?>");
         $("#dob1").attr("readonly","readonly");
       
        
        });
        
        
        $("#updatemobilecancel").click(function(){
        
        $("#updatemobilecancel").css({"visibility":"hidden"});
         $("#updatemobile").css({"visibility":"hidden"});
          $("#mobile").removeAttr("placeholder");
        $("#mobile1").attr("value","<?php echo $array['mob'];?>");
         $("#mobile1").attr("readonly","readonly");
      
        
         });
        
        
        $("#updatecoursecancel").click(function(){
        
        $("#updatecoursecancel").css({"visibility":"hidden"});
         $("#updatecourse").css({"visibility":"hidden"});
         $("#coursee1").removeAttr("placeholder");
        $("#course1").attr("value","<?php echo $array['course'];?>");
         $("#course1").attr("readonly","readonly");
          
        
        });
        
        $("#updateyearcancel").click(function(){
        
        $("#updateyearcancel").css({"visibility":"hidden"});
         $("#updateyear").css({"visibility":"hidden"});
        $("#year1").removeAttr("placeholder");
        $("#year1").attr("value","<?php echo $array['year'];?>");
         $("#year1").attr("readonly","readonly");

        
        });
        
        $("#updategendercancel").click(function(){
        
        $("#updategendercancel").css({"visibility":"hidden"});
         $("#updategender").css({"visibility":"hidden"});
         $("#gender1").removeAttr("placeholder");
        $("#gender1").attr("value","<?php echo $array['gender'];?>");
         $("#gender1").attr("readonly","readonly");
        
        });
        
        $("#updatepasswordcancel").click(function(){
        
        $("#updatepasswordcancel").css({"visibility":"hidden"});
         $("#updatepassword").css({"visibility":"hidden"});
         $("#password1").removeAttr("placeholder");
        $("#password1").attr("value","<?php echo $array['password'];?>");
       $("#password1").attr("readonly","readonly");
        
        });
        
           $("#updaterollnocancel").click(function(){
        
        $("#updaterollnocancel").css({"visibility":"hidden"});
         $("#updaterollno").css({"visibility":"hidden"});
         $("#rollno1").removeAttr("placeholder");
        $("#rollno1").attr("value","<?php echo $array['rollno'];?>");
       $("#rollno1").attr("readonly","readonly");
        
        });
         $("#updateaddresscancel").click(function(){
        
        $("#updateaddresscancel").css({"visibility":"hidden"});
         $("#updateaddress").css({"visibility":"hidden"});
         $("#address1").removeAttr("placeholder");
        $("#address1").attr("value","<?php echo $array['address'];?>");
       $("#address1").attr("readonly","readonly");
        
        });
        
        // cancel button code end.
        
        //submit button code start
        
    $("#updatename").click(function(){
       
        
 });
    
         $("#updateemail").click(function(){
        $("#email1").attr("value","<?php echo $array['email']; ?> ");
        
 });
        
         $("#updatedob").click(function(){
        $("#dob1").attr("value","<?php echo $array['dob']; ?> ");
        
 });
    
    
    
    
    
    } );
    </script>
<style>
a
{
	color:white;
	text-decoration:none;
}
a:link
{
	text-decoration:none;
	color:white;
}
a:hover
{
	text-decoration:none;
	color:#000;
}
a:visited
{
	text-decoration:none;
	color:#white;
}
a:active
{
	text-decoration:none;
	color:#C00;
}
    .textbox
    {
        width:300px;
        height:40px;
        border-radius: 5px;
    }
.center1
    {
        margin-left: auto;
        margin-right: auto;
    }
</style>
</head>

<body style="background:#f2ffe6;">
    
	<Header class=" modal-header"  style="background:#004040;">
 
        <img src="images/logo1.png" width="100px" style="float:left;">
   <h1 style="text-align:center;color:white;display:inline;margin-left:200px;">
 Commerce College Educational Group</h1>
   
<ul class="nav navbar-nav navbar-right">
 <li class="active"><a class="fa fa-home" href="main.php">  Home</a></li>
          
             <li><a href="inbox_message.php" class="fa fa-envelope-open"> Inbox</a></li>
    <li><a class="fa fa-user-circle" href="profile.php"> Profile</a></li>
   
              <li><a class="fa fa-sign-in" href="logout.php">  Logout</a>
             
    </li>
			</ul>
			 </Header> <!-- end of header and navigation bar -->
    <div class="container">
        <div class="row"><br><br>
            <div class="col-lg-3">
 <img src="upload_image/<?php echo $array['image']; ?>" style="height:200px; border-radius:100px; width:200px;" class="img-responsive" >
                <h3>Update Profile</h3>
                <form method="post" action="update_image.php" enctype="multipart/form-data">
            <input type="file" name="image" accept=".gif,.jpg,.jpeg,.png,.bmp"><br>
            <input type="submit" name="upload_image" value="update.." class="btn " style="color:blue;font-size:20px;">
                    </form>
               
            </div>
            
            <!-- right hadn side-->
        <div class="col-lg-9"> 
          
     <form  method="post" action="profile_update.php"  enctype="multipart/form-data">
        
            <table style="font-size:20px; padding:5px; width:80%;">  
                
                <tr><th> Name:</th><th><input  name="name" class="textbox form-control" id="name1" type="text" value= " <?php echo $array['name'] ?>" readonly></th>
                  <th><input type="button" id="name01" value="Edit" name="editname"></th>
    <th><input type="submit" id="updatename" name="updatename" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updatenamecancel" value="cancel" style="visibility:hidden;"></th>
                </tr>
                
                 <tr><th> Email:</th>
    <th><input name="email" class="textbox form-control" type="email" id="email1" value="<?php echo $array['email'] ?>" readonly ></th>
                 <th><input type="button" id="email01" value="Edit" name="editemail" ></th>
 <th><input name="updateemail" type="submit" id="updateemail" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updateemailcancel" value="cancel" style="visibility:hidden;"></th>
                </tr>
                
    <tr><th> DOB:</th>
    <th><input name="dob" class="textbox form-control" type="text" id="dob1" value="<?php echo $array['dob'] ?>" readonly></th>
     <th><input type="button" value="Edit" id="dob01" name="editdob"></th>
     <th><input name="updatedob" type="submit" id="updatedob" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updatedobcancel" value="cancel" style="visibility:hidden;"></th>
                
                </tr>
                
   
     <tr><th>Course:</th>
    <th><input name="course" class="textbox form-control" id="course1" type="text" value= "<?php echo $array['course'] ?>" readonly></th>
     <th><input type="button" id="course01" value="Edit" name="editcourse"></th>
     <th><input name="updatecourse" type="submit" id="updatecourse" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updatecoursecancel" value="cancel" style="visibility:hidden;"></th>            
    </tr>
                
     <tr><th>Year:</th>
    <th><input name="year" class="textbox form-control" id="year1" type="text" value="<?php echo $array['year'] ?>" readonly></th>
     <th><input type="button" id="year01" value="Edit" name="edityear"></th>
     <th><input name="updateyear" type="submit" id="updateyear" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updateyearcancel" value="cancel" style="visibility:hidden;"></th>            
    </tr>

    
     <tr><th>Gender:</th>
    <th><input name="gender" class="textbox form-control" id="gender1" type="text" value="<?php echo $array['gender'] ?>" readonly ></th>
     <th><input type="button" id="gender01" value="Edit" name="editgender"></th>
     <th><input  name="updategender" type="submit" id="updategender" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updategendercancel" value="cancel" style="visibility:hidden;"></th>            
                </tr>
                
    <tr><th>Password:</th>
    <th><input name="password" class="textbox form-control" id="password1" type="text" value="<?php echo $array['password'] ?>" readonly ></th>
     <th><input type="button" id="password01" value="Edit" name="editpass"></th>
     <th><input name="pass" type="submit" id="updatepassword" value="update" style="visibility:hidden;"></th >
        <th><input type="button" id="updatepasswordcancel" value="cancel" style="visibility:hidden;"></th></tr>
               
     <tr><th>Roll No.:</th>
    <th><input name="rollno" class="textbox form-control" id="rollno1" type="text" value="<?php echo $array['rollno'] ?>" readonly ></th>
     <th><input type="button" id="rollno01" value="Edit" name="editrollno"></th>
     <th><input name="updaterollno" type="submit" id="updaterollno" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updaterollnocancel" value="cancel" style="visibility:hidden;"></th> </tr>
                
    <tr><th>Address:</th>
    <th><input name="address" class="textbox form-control" id="address1" type="text" value="<?php echo $array['address'] ?>" readonly ></th>
     <th><input type="button" id="address01" value="Edit" name="editaddress"></th>
     <th><input name="updateaddress" type="submit" id="updateaddress" value="update" style="visibility:hidden;"></th >
    <th><input type="button" id="updateaddresscancel" value="cancel" style="visibility:hidden;"></th> </tr>
                            

  </table></form>
                    </div>
            
           
            </div>
                

    </div>
    
   
    
    <br><br><br><br><br>
    <!-- footer start -->
    <nav style="margin-bottom:0px; background-color:rgb(0,64,64);" class="navbar navbar-inverse navbar-fixed-bottom ">
<div class="container">
<div>



    <p style="color:white;text-align:center;margin-top:15px;font-size:12px;">Developed by Commerce College Students @ 2014-2017</p>
  </div>
</div>
  </nav>
</body>
</html>

