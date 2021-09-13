$(document).ready(function(){
 // fadeout flash messages on click
 $('#content .close').click(function(){
     $(this).parent().fadeOut();
     return false;
 });

 // fade out flash messages after 5 seconds
 $('.alert').animate({opacity: 1.0}, 5000).fadeOut();
});