<?php
session_start();
if(!isset($_SESSION['login']))
{
    header:("Location:index.php");
}
if(isset($_SESSION['login']))
{
  $myid=$_SESSION['login'];
   
 $con=mysqli_connect("localhost", "root", "","social networking")
            or die("server not found");  
   
    
    
    $fchmessages="select * from message  order by id  ";
    
    $fsl=mysqli_query($con, $fchmessages);
    while($arr=mysqli_fetch_array($fsl))
    {
    $id=$arr['id'];
    $uid=$arr['uid'];
    $usmsg=$arr['user_message'];
    $msgdt=$arr['time'];
    
    
    $fcdetail2="select * from signup where mob='$uid'   ";
    
    $fsl2=mysqli_query($con, $fcdetail2);
    $arr2=mysqli_fetch_array($fsl2);
    $name_u=$arr2['name'];
     $nimge_u=$arr2['image'];
    
    $faculty=$arr2['faculty'];
    
    ?>



  <div class="chat_hr_">
        <div class="nameid">
                    
                    <img src="upload_image/<?php echo $nimge_u; ?>" width='50' height='50' style='border-radius:50%;margin-top:30px;'/>
                
                  </div>
            <div style="overflow:auto;"  class="chat_message_drop">
                
                <div  class="time"> <?php echo $msgdt; ?></div>
                
               <?php if($faculty=="") { ?>
        <div style="color:green;font-size:15px;font-weight:bold;">   <?php echo $name_u; ?> </div> 
                <?php } 
                 if($faculty!="")
                 {
                 ?>
                <div style="color:green;font-size:15px;font-weight:bold;">   <?php echo "Sir. ".$name_u; ?> </div> 
                <?php } ?>
                
                
               <br/><br/><br/>
                
                <?php echo $usmsg; ?>
                
     


</div></div>
   

<?php
   }}
?>