$(document).ready(function() {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.slider-nav',
        // autoplay: true,
        // autoplaySpeed: 2000,
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        arrows: false,
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        // autoplay: true,
        // autoplaySpeed: 2000,
    });
});