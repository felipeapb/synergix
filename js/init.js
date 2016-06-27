(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

  $('.d').click(function() {
  var destino= $(this).attr('data-destino');
  $('.box_superior_servicos').fadeIn(1000);
  $('.a').hide();
  $('.'+destino).fadeIn();

});
$('.fechando').click(function() {
  $('.box_superior_servicos').fadeOut(1000);
  $('.a').fadeOut(1000);

});

$(function(){ //
   var navbarTop = 1000; // retorna a posicao

   $(window).scroll(function(){ // evento scroll
      var windowTop = $(window).scrollTop();

      if (navbarTop < windowTop) {
          $('#top').addClass("absoluto"); //adiciona a classe
          //$('#navbar').css({ position: 'fixed', top: 0 }); ou altere o estilo conforme quiser

      } else {
          $('#top').removeClass("absoluto"); //remove a classe

          //$('#navbar').css('position','static'); ou altere o estilo
      }
  });
var fundo= 2
setInterval(function(){
 if(fundo>5){ fundo=1}

$('.alternado').removeClass('alt1').fadeOut(500);
$('.alternado').removeClass('alt2').fadeOut(500);
$('.alternado').removeClass('alt3').fadeOut(500);
$('.alternado').removeClass('alt4').fadeOut(500);
$('.alternado').removeClass('alt5').fadeOut(500);
$('.alternado').addClass('alt'+fundo++).fadeIn(2050);


 }, 8000);

});
