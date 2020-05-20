$(function() {
  "use strict";

  // show or hide side bar
  $('.sidebar-btn').on('click' , function(){
    $('.sidebar').fadeToggle(1500);
  })

  // calc capital
  $('#site_desc').on('keyup' , function(){
     var legth = $(this).val().length,
     remain = 90 - legth ;
     $('.sm_site_desc').html('just remain ' + remain + 'capital').css('color' , 'red') ;
     if ( remain == 0){
        $('.sm_site_desc').html('no capital remain').css('color' , 'red') ;
     }
  })

    // calc capital
    // calc capital
  $('#ab_desc').on('keyup' , function(){
    var legth = $(this).val().length,
    remain = 250 - legth ;
    $('.sm_ab_desc').html('just remain ' + remain + 'capital').css('color' , 'red') ;
    if ( remain == 0){
       $('.sm_ab_desc').html('no capital remain').css('color' , 'red') ;
    }
 })



});
