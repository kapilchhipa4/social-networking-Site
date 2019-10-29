<?php 
session_start();
if(!isset($_SESSION['login']))
{
    header("Location:index.php");
}

        $con=mysqli_connect("localhost", "root", "", "social networking") or die("server not found");
        $abc=$_SESSION['login'];
        $query="select * from signup where 1 order by name "; 
        $a=mysqli_query($con,$query) or die("data doesn't exist");



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap -3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="files/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="files/jquery.min.js" type="text/javascript" ></script>
 
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
    .chat_header{ width: 100%; height: 30px; background:#06f; color: #fff; font-size:17px; padding-top: 4px;padding-left:5px;   }
    .chat_box_main{ width: 300px; height: 300px; background: #fff; box-shadow: 0px 0px 7px #333;}
    .bottom_fix{ width: auto; position: fixed; margin-right: 50px; bottom: 0; right: 0; height: auto;}
    .close{ font-size: 15px; color: #fff; float: right;margin-right: 10px;}
    .texarea{ width: 95%; height: 100px; border: solid 1px #ccc;box-shadow:inset 0px 0px 7px #ccc;  padding:2px 2px; margin:60px 7px; }
    .h{ font-size: 17px; color:#000; padding: 7px;}
    .button{ width:100px; padding: 10px; color: #fff; border-radius: 4px; border: solid 1px #06f; background: #06f; margin-top: -30px;  }
    .success{ width: 100%; height: 30px; padding-top: 7px; background-color: chartreuse; position: absolute; z-index: 999; display: none;color: #fff; font-size: 15px; text-align: center; }
</style>
    
  <script>$(document).ready(function(){

 

});



</script>  
    
    
    
</head>

    <body>
	<Header class=" modal-header"  style="background:#004040;">
        <img src="images/logo1.png" width="150px" style="float:left;" >
<span style="color:#FFF;"><h1 style="text-align:center">
Commerce College Group</h1></span>
   
<ul class="nav navbar-nav navbar-right">
 <li class="active"><a class="fa fa-home" href="main.php">  Home</a></li>
          
             <li><a href="inbox_message.php" class="fa fa-envelope-open"> Inbox</a></li>
    <li><a class="fa fa-user-circle" href="profile.php"> Profile</a></li>
   
              <li><a class="fa fa-sign-in" href="Logout.php">  Logout</a>
             
    </li>
			</ul>
			 </Header> <!-- end of header and navigation bar -->
          
<div  class="container-fluid">
<div  class="row">
    
	<div  style=" border-radius:10px;background: #cc9900;
    border:1px solid green; width:25%;height:560px; float:left;overflow:auto;">
     
<ul style="list-style-type:none; font-size:20px;color:white; height:550px;
	 padding-top:30px; display:inline-block;">
    <?php
    while($array=mysqli_fetch_array($a))
    {
        $mobi=$array['mob'];
        $name=$array['name']; ?>
<img src="upload_image/<?php echo $array['image']; ?>"
     style="border-radius:100%;width:50px;height:50px;">
        
       <li style="font-size:20px;"><a name='<?php echo $name; ?>' id='<?php echo $mobi; ?>' href="#" class="chatbox" ><?php echo $array['name']; ?> </a></li><br>
  <?php  } ?>
</ul></div><!-- left side complete-->
    <!-- -->
    
 
    <div style="height:560px; background:orange; overflow:auto; border-radius:5px; color:white;  font-size:20px; overflow:auto; width:75%; float:left;" id="div1"> 
    
          <?php
        $con=mysqli_connect("localhost", "root", "","social networking")
            or die("server not found");
        $query="select * from 	private_msg where tomsg='$abc' order by id desc";
        $res=mysqli_query($con,$query) or die("wrong query");
        while($array1=mysqli_fetch_array($res))
        {  
        ?>
          &nbsp;
        <?php
            echo $array1['frommsg'];  ?>
       
        <div style="padding:3px 10px; background-color:#eae1e1; border-radius:5px;color:darkgreen; width:60%; margin-left:30px;">
             <h6 style="float:right; margin-top:0px; " >
                  <?php  echo $array1['time_msg']; ?>   </h6>
           
        <h4>  <?php   echo $array1['message_is']; ?> </h4> 
       </div> 
   <?php     }
 ?>
       <br> 
        
    
    </div>
    
    

     </div>
        </div>
    <!-- footer start-->
 <nav style="margin-bottom:0px; background-color:rgb(0,64,64);" class="navbar navbar-inverse" >
<div class="container">
<div class="navbar-text pull-left">
	<p style="color:white;">Copyright 2017. All Rights Reserved.
</div>
 <div class="navbar-text pull-right">
    <p style="color:white;">Developed by Commerce College Students</p>
  </div>
</div>
  </nav><!-- footer end-->
    
        <div class="bottom_fix"></div>

<script>$(document).ready(function(){
    $(".chatbox").click(function(){
        var mobi=$(this).attr("id");
        var name=$(this).attr("name");
       
       $('.bottom_fix').html('<div class="chat_box_main"><div class="success"></div><div class="chat_header"><span class="close">X</span>'+name+'</div><span class="h">Sent message</span><textarea class="texarea" name="mymsg" id="mymsg"></textarea><div align="center"><input type="submit" name="submit" class="button" value="Send" id="'+mobi+'"/></div></div>'); 
        
        
        
         
       $(".button").click(function(){
            
              var toid=$(this).attr("id");
        var msg=$('#mymsg').val();
           if(msg=="")
               {
                   
                return false;   
                   
                   
               }
               
            
          $.ajax({
           url:'datasend.php',
              type:'POST',
              data:'id='+toid+'&mymsg='+msg,
              success:function(data)
              {
                  
                $(".success").slideToggle();
                   $(".success").html("successfully message sent");
                  setTimeout(function(){
                      
                       $(".success").slideToggle();
                      
                      
                  },2000);
               $("#mymsg").val("");   
                  
                  
              }
        
              
              
          }); 
        
    });
         
        
        
        
        
        $(".close").click(function(){
        $('.bottom_fix').empty();
        
    });
        
        
       //send message script
        
       
        
        
    });
    
   
    
});</script>

   
        
        
    </body>
</html>


    