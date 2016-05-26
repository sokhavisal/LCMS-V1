$(document).ready(function(){
   var $regexname=/^([a-zA-Z]{3,16})$/;
   $('#error').hide(); 
   $('#user').on('keypress keydown keyup',function(){
      //alert('event');     
      if ($(this).val().match($regexname)){
          $('#error').show(); 
          
      }
      if($(this).val()==""){
          $('#error').hide();
      }
           
      
   });
});
function test(){
    $('#user').popover('show' );
   
}

function passpopover(){
    $('#pass').popover('toggle' );
}