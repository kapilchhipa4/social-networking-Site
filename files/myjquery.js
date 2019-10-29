$(document).ready(function(){
$("#status").keyup(function(){
   
    
    var len=$("#status").val().length;
    if(len<8)
        {
          $("#_status").text("week");
            $("#_status").addClass("ab");
            $("#_status").removeClass("bc");
            $("#_status").removeClass("cd");
        }
if(len>=8 && len<=15)
        {
            $("#_status").text("medium");
            $("#_status").removeClass("ab");
            $("#_status").addClass("bc");
            $("#_status").removeClass("cd");
        }
   if (len>15)
        {
            $("#_status").text("strong");
            $("#_status").removeClass("ab");
            $("#_status").removeClass("bc");
            $("#_status").addClass("cd");
            
            
        }
    if(len=="")
        { $("#_status").removeClass("ab");
            $("#_status").removeClass("bc");
              $("#_status").removeClass("cd"); 
         $("#_status").html("");
        }
    

});
    
 $("#status1").keyup(function(){
     
var first= $("#status").val();
var second=$("#status1").val();
     
if(first!=second)
    {
        $("#_status1").text("notmatch");
        $("#_status1").addClass("notmatch");
        $("#_status1").removeClass("match");
        
        
    }
if (first==second)
    {
        $("#_status1").text("match");
        $("#_status1").addClass("match");
               $("#_status1").removeClass("notmatch"); 
    }
   if(second==""){
       $("#_status1").removeClass("match");
            $("#_status1").removeClass("notmatch");
            $("#_status1").text("");
       
   }  
     
 });
      
    
});