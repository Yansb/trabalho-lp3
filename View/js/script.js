//evento

$(function(){

    $('#blue').click(function(){
      $('p').css("background-color","blue");
      $('p').fadeOut('');
      $('p').delay(1000);
      $('p').fadeIn('');


    });

    $('#red').click(function(){
        $('p').css("background-color","red");
        $('p').fadeOut('slow');
        $('p').delay(1000);
        $('p').fadeIn('slow');

    });








});
    
    
    