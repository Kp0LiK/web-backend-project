function slowScroll(id){
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, 500);
}



$(document).on("scroll", function(){
    if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
    else 
        $("header").attr("class", "fixed");
});
$('.header_btn').on('click', function(){
    $('#about').slideToggle();
})

$('.slider__inner').slick({
    nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
    prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
    infinite: false
});

$(function(){

    $( document ).ready(function() {
    
        $('form').submit(function( event ) {
      alert('Заявка отправлена!');
    });
    });
});

