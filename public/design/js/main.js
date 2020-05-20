$(function() {
  "use strict";

  // nice scroll
  $("html").niceScroll({
    cursorcolor: "#3f69c9",
  });

  // smoth scroll to next element
  $("header #start").click(function() {
    $("html, body").animate(
      {
        scrollTop: $(".portfolio").offset().top,
      },
      1000
    );
  });

  // animate progress par
  $(".progress .progress-bar").css("width", function() {
    return $(this).attr("aria-valuenow") + "%";
  });



   // hide cheveron btn
   $(window).scroll(function(){
    if($(window).scrollTop() > 500){
        $('#arr').fadeIn(1000);
    }else{
        $('#arr').fadeOut(1000);

    }
})

  //scroll top
  $('#arr').on('click' , function(){
    $("html , body").animate(
        {
          scrollTop: 0,
        },
        "3000"
      );
  })

 //loader animation
  setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 600);





});
