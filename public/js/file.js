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

/**          show_phone function               **/
function show_phone(id,mob) {
    var show_id = document.getElementById(id);
    show_id.innerHTML = "<a href='tel:"+mob+"' style='color: white;'>"+mob+"</a>";
    // document.getElementById(id).innerHTML = "<a href='tel:"+mob+"' style='color: white;'>"+mob+"</a>";
}

function show_phone2(id2,mob2) {
    //alert ('id2 = '+id2+'mob2 = '+mob2);
    document.getElementById(id2).innerHTML = "<a href='tel:"+mob2+"' style='color: white;'>"+mob2+"</a>";
}
