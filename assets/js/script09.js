//Sticky HEADER START
jQuery(window).scroll(function(){
  if (jQuery(window).scrollTop() >= 1) {
     jQuery('header').addClass('fixed');
  }
  else {
     jQuery('header').removeClass('fixed');
  }
});
//Sticky HEADER END

//add active class based on url
jQuery(function($) {
   var path = window.location.href; 
   $('ul li a').each(function() {
     if (this.href === path) {
       $(this).addClass('active');
     }
   });
 });
 //add active class based on url END



