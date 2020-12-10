

$(document).ready(function(){
    $(".owl-carousel").each(function(index, el) {
        var containerHeight = $(el).height();
        $(el).find("img").each(function(index, img) {
            var w = $(img).prop('naturalWidth');
            var h = $(img).prop('naturalHeight');
            $(img).css({
            'width': Math.round(containerHeight * w / h) + 'px',
            'height': containerHeight + 'px'
            });
        }),
        $(el).owlCarousel({
            items: 1,
            autoWidth: true,
            loop: true,
            autoplay:true,
            autoplayTimeout:4000,
            margin:10,
            center: true,
            // autoWidth: true,
            autoplayHoverPause:true,
            nav    : true,
            smartSpeed :900,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        });
    });
});