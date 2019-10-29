<?php
session_start();
if(!isset($_SESSION['login']))
{
    header("Location:index.php");
}
    
        $con=mysqli_connect("localhost", "root", "", "social networking") or die("server not found");
        $abc=$_SESSION['login'];
        $query="select * from signup where mob != '$abc' order by name "; 
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
    body{ background: #999;}
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
    .bottom_fix{ width: auto; position: fixed; margin-right: 250px; bottom: 0; right: 0; height: auto;}
    .close{ font-size: 15px; color: #fff; float: right;margin-right: 10px;}
    .texarea{ width: 95%; height: 100px; border: solid 1px #ccc;box-shadow:inset 0px 0px 7px #ccc;  padding:2px 2px; margin:60px 7px; }
    .h{ font-size: 17px; color:#000; padding: 7px;}
    .button{ width:100px; padding: 10px; color: #fff; border-radius: 4px; border: solid 1px #06f; background: #06f; margin-top: -30px;  }
    .success{ width: 100%; height: 30px; padding-top: 7px; background-color: chartreuse; position: absolute; z-index: 999; display: none;color: #fff; font-size: 15px; text-align: center; }
</style>
    
  <script>$(document).ready(function(){

 

});



</script>  
 <style>
.header_
{
width:100%;position:fixed; height:70px; background:#1B5F78; border:solid 1px #1B5F78; box-shadow:0px 0px 7px  #ccc;	
	
	
	}
	.header_ .logo{ float:left; margin:10px 50px;}
	
.header_ ul.menubar{ padding:0px; margin:0px; width:auto; float:right; margin-right:20px; margin-top:7px;}
.header_ ul.menubar li{ width:100px; margin-left:5px; padding:3px; float:left; color:#fff; font-weight:normal; text-align:center; }

.chat_area{ width:80%; margin-left: 7px; height:500px; background: #fff; float:left;}
.fix_div{ position:fixed; width:260px; height:90%; top:10.5%; overflow-y:scroll; right: 0; color: #000; background:#ccc; border-right:solid 1px #999;}

.chat_message_drop{ min-height: 60px; margin: 15px 70px; width:500px; border:solid 1px #06F; border-radius: 4px; padding:15px; color:#000; background-color:#f1f1f1;}
     .chat_message_drop .time{ float: right; color: #999; font-size: 14px; font-weight: bold; }     
     
     
     
     .message_area{ overflow-y: scroll;width: 100%; background: #fff; height: 320px;}
.chat_footor{ width:100%;height: 120px;  border:solid 1px #fff; }
     .chat_grp_header{ height: 50px; width:100%;  border:solid 1px #ccc;  }
     .chat_sed_btn{ margin: 5px 20px; width: 80%; height: 90%; box-shadow: inset 0px 0px 7px #ccc;}

     .chat_hr_{ width: 100%; min-height: 50px; height: auto;}

     .nameid { float: left; width: 160px;  padding: 8px; }
      .chat_sed_btn_z{ float: right;width:100px; padding: 10px; color: #fff; border-radius: 4px; border: solid 1px #06f; background: #06f; margin-top: 50px; margin-right: 50px;  }
</style>
<script>
$(document).ready(function(){
	//send message
    
    $(".message_area").html('<div align="center">loading..</div>');
    function mesTset()
    {
        
     $(".message_area").load("load_message.php");   
        
        
        
    }
setInterval(function(){ mesTset(); },2000);
    
$(".chat_sed_btn_z").click(function() {

	
var imessage = $('#chat_sed').val();

    post_data = {'chat_sed':imessage};
//send data to "shout.php" using jQuery $.post()
$.post('sendmessage.php', post_data, function(data) {
//append data into messagebox with jQuery fade effect!
  
$("#chat_sed").val("");
var scrolltoh = $('.message_area')[0].scrollHeight;
$('.message_area').scrollTop(scrolltoh);
});

});
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
        
        
        
        
        </div>

    
	
        
        <div class="fix_div">
     
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
    
    $cd=$_SESSION['login'];
        $faculty=$array['faculty'];
        

     if(($course_1==$array['course']) || ($array['faculty']!=""))
     {
    
    ?>
    

    
    
    
        
       <li style="font-size:18px; padding-left:-10px;">
           
           <table border="0"><tr>
           <td><?php 
		   if($array['status']=='y')
		   {echo "<img src='images/online1.png' style='width:15px; height:15px;'>";
		   }
		   else
		   {
			   echo "&nbsp;&nbsp;&nbsp; ";
		   }
		   
		   ?>
           
           
           </td>
           
           
           <td width="60">
               
               <a style="cursor:default;" href="upload_image/<?php echo $array['image']; ?>" target="_self">              
               <img id="im" class="img-responsive" src="upload_image/<?php echo $array['image']; ?>" style="border-radius:100%;width:50px;height:50px;"></a> </td>
               
<?php    if($faculty=="")
               {    ?>
               
    <td><a style="color:green;" name='<?php echo $name; ?>' id='<?php echo $mobi; ?>' href="#" class="chatbox"   ><?php echo $array['name']; ?> </a></td>
    
           <?php    }   
    if($faculty!="")
    {           ?>
         <td><a style="color:green;" name='<?php echo $name; ?>' id='<?php echo $mobi; ?>' href="#" class="chatbox"   ><?php echo $array['name']." Sir"; ?> </a></td>
          
               
<?php } ?>
               
    </tr></table>
           
           
           </li><?php }
    
    else
    {
        continue;
    }
    ?> <br><br>
  <?php  } ?>
</ul></div><!-- left side complete-->
    <!-- i will change-->
    
        <br/><br/><br/><br/>
        
       <div class="chat_area">
        <div class="chat_grp_header"><h4>Users</h4></div>
        <div class="message_area">
            
           
           
                
               
           </div>
        <div class="chat_footor">
            
            <input type="submit" name="submit" value="Send" class="chat_sed_btn_z">
            <textarea placeholder="Enter message.." name="chat_sed" id="chat_sed" class="chat_sed_btn"></textarea> </div>
        
        
        </div> 
        
        
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

 
        
     <div style="width:81%;height:40px;background-color:#1B5F78; z-index:-999;" class="navbar-fixed-bottom"><h5 style="text-align:center;color:white;">Developed by Commerce College BCA Students @2014-2017</h5></div>   
    
        
</body>
</html>
