
//=============
// carroseu
//============
$('.clientesCarro').slick({
  dots: true,
  infinite: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  infinite: true,
  autoplay: true,
});

$('.servicosCarro').slick({
  dots: true,
  infinite: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
//fim carrosel

window.onscroll = function(){
  var top = window. scrollY || document.documentElement.scrollTop;
  console.log(top);

  if(top > 700){
  console.log("adiciona meu menu fixo");
  document.getElementById('top').classList.add('top');
  document.getElementById('top').classList.remove('top site');
  }

  else{
    console.log("remover meu menu fixo");
    document.getElementById('top').classList.remove('menu-fixo');
    document.getElementById('top').classList.add('top site');
  }
}

// verifica se a classe open está presente no elemento com a classe menu-mobile. Se estiver presente, a classe é removida e o ícone do menu é alterado para "btn-abrirmenu.svg". Caso contrário, a classe open é adicionada, e o ícone do menu é alterado para "btn-fecharmenu.svg".
function menuShow() {
  let menuMobile = document.querySelector('.menu-mobile');
  if (menuMobile.classList.contains('open')) {
      menuMobile.classList.remove('open');
      document.querySelector('.icon-menu').src = "img/menu/btn-abrirmenu.svg";
  } else {
      menuMobile.classList.add('open');
      document.querySelector('.icon-menu').src = "img/menu/btn-fecharmenu.svg";
  }
}
//quando o botão "Toggle Menu" é clicado, a função toggleMenu() é chamada. Essa função seleciona o elemento <body> do documento HTML usando document.querySelector('body') e, em seguida, alterna a classe menu-aberto usando classList.toggle('menu-aberto'). A classe menu-aberto define a propriedade CSS overflow: hidden, o que impede o scroll quando essa classe é aplicada ao elemento <body>.

//menu mobile//
function toggleMenu() { 
  var bodyElement = document.querySelector('body');
  bodyElement.classList.toggle('menu-aberto');

  //ocultar,mostrar,menu
  var menu = document.getElementById("menu");
  if (menu.classList.contains("menu-visivel")) {
      menu.classList.remove("menu-visivel"); // Oculta o menu
  } else {
      menu.classList.add("menu-visivel"); // Mostra o menu
  }
}

//Seta-voltar ao topo//

//seta que faz a página voltar ao topo//
$(document).ready(function() {
  $(window).scroll(function() {

    if ($(this).scrollTop() > 20) {
      $('#myLink').fadeIn();
    } else {

      $('#myLink').fadeOut();
    }
  });

  $('#myLink').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 800);
  });
});

