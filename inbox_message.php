<?php 
session_start();
if(!isset($_SESSION['login']))
{
    header("Location:index.php");
}

        $con=mysqli_connect("localhost", "root", "", "social networking") or die("server not found");
        $abc=$_SESSION['login'];
        $query="select * from signup where mob !='$abc' order by name "; 
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
	color:white;
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
    .header_
{
width:100%;position:fixed; height:100px; background:#1B5F78; border:solid 1px #1B5F78; box-shadow:0px 0px 7px  #ccc;	
	
	
	}
	}
</style>
    
  <script>$(document).ready(function(){

 

});



</script>  
    
    
    
</head>

     <body>
	<div class="header_">
        <h1 style="text-align:center;display:inline-block;color:white;margin-left:170px;">
 Commerce College Education Group</h1>
    <img src="images/logo1.png" width="100px" style="float:left;">
<ul class="nav navbar-nav navbar-right" style="margin-right:30px;">
 <li class="active"><a class="fa fa-home" href="main.php">  Home</a></li>
          
             <li><a href="inbox_message.php" class="fa fa-envelope-open"> Inbox</a></li>
    <li><a class="fa fa-user-circle" href="profile.php"> Profile</a></li>
   
              <li><a class="fa fa-sign-in" href="logout.php">  Logout</a>
             
    </li>
			</ul>
        
        
        
        
        </div><br><br><br><br><br>
         <!-- header cloe-->
<div  class="container-fluid">
<div  class="row">
    
	<div  style=";background: #ccc; border:1px solid green; width:20%;height:560px; float:left;overflow:auto; padding-left:0px;">
     
<ul style="list-style-type:none; font-size:20px;color:white; height:550px;
	 padding-top:30px; display:inline-block;">
    <?php
  $id1=$_SESSION['login'];  
 $id11="select * from signup where mob='$id1'" ; 
$query_1=mysqli_query($con,$id11) or die("wrong query");
    $array_1=mysqli_fetch_array($query_1);
    $course_1=$array_1['course'] or die("not found");
    
    while($array=mysqli_fetch_array($a))
    {
        
        
        $mobi=$array['mob'];
        $name=$array['name']; 
    $faculty=$array['faculty'];
        if(($course_1==$array['course']) || ($array['faculty']!=""))
        {
        ?>
    <table><tr>
    <td width="10px">
    <?php if($array['status']=='y')
	{
		echo "<img src='images/online1.png' style='width:15px; height:15px;'>";
	}
    else
	{
	echo "&nbsp;&nbsp;";
	} ?>
    </td>
    
    <td width=60px;>
    <a style="cursor:default;" href="upload_image/<?php echo $array['image']; ?>">
<img src="upload_image/<?php echo $array['image']; ?>"
     style="border-radius:100%;width:50px;height:50px;"></a>
        </td><td>
    <li style="font-size:20px;"><a style="color:green;" name='<?php echo $name; ?>' id='<?php echo $mobi; ?>' href="#" class="chatbox" >
        
     <?php   if($faculty=="") {
         echo $array['name'];  
    } if($faculty!="")
    {
         echo $array['name']." Sir";  
    }
       ?> 
        
        
        </a></li></td></tr></table>
    <?php } 
    else
    {
    continue;
    }
    ?>
    
    <br>
  <?php  } ?>
</ul></div><!-- left side complete-->
    <!-- -->
    
 
    <div style="height:560px; background:#ccc; color:white;  font-size:20px; overflow:auto; width:80%; float:left; border:1px solid green; box-shadow:0px 0px 15px green;"  id="div1"> 
        <br>
    
          <?php
        $con=mysqli_connect("localhost", "root", "","social networking")
            or die("server not found");
        $query="select * from 	private_msg where tomsg='$abc' order by id desc";
        
        $res=mysqli_query($con,$query) or die("wrong query");
        while($array1=mysqli_fetch_array($res))
        {  
    
        
       
        $idforimg=$array1['frommsg'];
        $queryforimg= "select * from signup where mob='$idforimg'";
         $queryforimg1=   mysqli_query($con,$queryforimg) or die("your idea is wrong");
            $imgarray=mysqli_fetch_array($queryforimg1);
            $faculty_a=$imgarray['faculty'];
           
            ?>
  
 <div style="padding:3px 10px;border:6px solid #39c5ef; background-color:#39c5ef; border-radius:5px;color:darkgreen;width:60%;overflow:auto; min-height:100px;text-align:justify;margin-left:70px;box-shadow:inset 0px 0px 1px #ccc;display:inline-block;">
         <span style="color:#54f;font-size:15px;">
             
             
        <?php
            if($faculty_a=="")
            {
            
            echo $imgarray['name']; 
            }
            if($faculty_a!="")
            {
            echo $imgarray['name']." Sir"; 
            }
             ?>
     
     </span>
        
        
             <h6 style="float:right;color:blue; margin-top:0px; " >
                  <?php  echo $array1['time_msg']; ?>   </h6>
           
        <h4 style="color:white;">  <?php   echo $array1['message_is']; ?> </h4> 
       </div>
        &nbsp; &nbsp;
        <a style="cursor:default;" href="upload_image/<?php echo $imgarray['image'];?>">
            <img src="upload_image/<?php echo $imgarray['image']; ?>" style="width:50px;height:50px;margin-top:-100px; border-radius:100%;display:inline-block;"></a>
         <br><br>  
   <?php     } ?>
       
        
    
    </div>
    
    

     </div>
        </div>
    <!-- footer start-->
 <nav style="margin-bottom:0px; background-color:#1B5F78; border:0px;border-radius:0px;" class="navbar navbar-inverse"   >
<div class="container">

 <div >
    <p style="color:white;font-size:12px; text-align:center;margin-top:10px;">Developed by Commerce College Students @ 2014-2017</p>
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


    