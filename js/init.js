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

  $('.linha').click(function() {
  var destino= $(this).attr('data-destino');

$('.v').slideUp(500);
$('.v1').removeClass('padrao');
$('.v7').removeClass('padrao');


$('.'+destino).slideDown(600);

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
  $('.v1').addClass('padrao');
  $('.v7').addClass('padrao');

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
$('.texto1').fadeIn(200);
var texto=1;
setInterval(function(){
 if(fundo==8){ fundo=1;}
  if(texto==7){ texto=0;}
texto++;

$('.alternado').removeClass('alt1').fadeOut(200);
$('.alternado').removeClass('alt2').fadeOut(200);
$('.alternado').removeClass('alt3').fadeOut(200);
$('.alternado').removeClass('alt4').fadeOut(200);
$('.alternado').removeClass('alt5').fadeOut(200);
$('.alternado').removeClass('alt6').fadeOut(200);
$('.alternado').removeClass('alt7').fadeOut(200);
$('.texto1').fadeOut(200);
$('.texto2').fadeOut(200);
$('.texto3').fadeOut(200);
$('.texto4').fadeOut(200);
$('.texto5').fadeOut(200);
$('.texto6').fadeOut(200);
$('.texto7').fadeOut(200);

$('.bl').removeClass('seletoresverde');
$('.bol'+fundo).addClass('seletoresverde');

$('.alternado').addClass('alt'+fundo++).fadeIn(300);
$('.texto'+texto).fadeIn(300);


 }, 4000);
 $('.bl').click(function() {
  var destino=$(this).attr('data-destino');
  var texto=$(this).attr('data-texto');
  $('.alternado').removeClass('alt1').fadeOut(500);
  $('.alternado').removeClass('alt2').fadeOut(500);
  $('.alternado').removeClass('alt3').fadeOut(500);
  $('.alternado').removeClass('alt4').fadeOut(500);
  $('.alternado').removeClass('alt5').fadeOut(500);
  $('.alternado').removeClass('alt6').fadeOut(500);
  $('.alternado').removeClass('alt7').fadeOut(500);
  $('.texto1').fadeOut(500);
  $('.texto2').fadeOut(500);
  $('.texto3').fadeOut(500);
  $('.texto4').fadeOut(500);
  $('.texto5').fadeOut(500);
  $('.texto6').fadeOut(500);
  $('.texto7').fadeOut(500);

$('.alternado').addClass(destino).fadeIn();

$('.'+texto).fadeIn();

 });

 //enviando email


   $(".loads").hide();

   $(".erro").hide();

   $(".sucesso").hide();

    $("#botao").click(function(){
     var nome     = jQuery.trim($("#first_name").val());
     var sobrenome    = jQuery.trim($("#last_name").val());
     var email  = jQuery.trim($("#email").val());
     var mensagem = jQuery.trim($("#texto").val());

    if(nome != "" && email != "" && sobrenome != "" && mensagem != "") {
 $(".loads").show();
 $(".erro").hide();
 $(".sucesso").hide();
//enviando usando ajax
$.ajax({
  type: "POST",
  url: "../admin/email",
  data: "nome="+nome+"&sobrenome="+sobrenome+"&email="+email+"&mensagem="+mensagem,
  success: function(ret){
    if(ret == 'ok') {
						$(".loads").hide();

						$(".sucesso").show();

						$(".erro").hide();

	} else {
						alert('Problema no envio do email. Favor entrar em contato pelo email synergix@synergix.com.br');
  }
}
 });
    }else{
     $(".erro").show().text('Por favor, preencha todos os campos');
    }
  });

});
