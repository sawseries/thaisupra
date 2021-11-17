$(document).ready(function() {
  $("#dropdown_menu").hover(function(){
    $("#dropdown_menu_content").show();
  });
  
  
  $("#dropdown_menu_content").hover(function(){
  },
  function(){
    $(this).fadeOut();
  }); 
  
});