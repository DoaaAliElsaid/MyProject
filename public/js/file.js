$(document).ready(function(){
    $('.formFilter').show();
    $('.formFilter2').hide();
    $('.advanced').click(function(){
        $('.formFilter').toggle();
        $('.formFilter2').toggle();
    });
});
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    autoplay: {
        delay: 1000,
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        440: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
    }
});