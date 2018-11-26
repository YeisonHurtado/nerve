$(document).ready(function (e) {
   $('#sign_up').on('click', function(e){
       e.preventDefault();
       $('div.rol-screen').fadeIn(1000);
       $('div.rol-container').slideDown(400);
   });

   $('div.rol-screen').on('click', function(e){
       $('div.rol-screen').fadeOut(1000);
       $('div.rol-container').slideUp(400);
   });
});
