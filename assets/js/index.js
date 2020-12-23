// CSSインポート
import '../sass/app.scss';

// JSインポート
import 'bootstrap';
import 'slick-carousel';

$(function() {
  // slick
  $(".slick-news").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 2000,
    arrows: true,
    dots: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    }, ],
  });
  // スムーススクロール
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
