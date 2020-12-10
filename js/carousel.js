

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        autoWidth: true,
        loop: true,
        autoplay: true,
        autoplaySpeed: 2000,
        margin: 10,
        center: true,
        autoplayHoverPause: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    });
});