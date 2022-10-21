$('.testimonios').owlCarousel({
    loop: true,
    margin:30,
    nav: false,
    dots: true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    items: 1,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true
});

$('.productos').owlCarousel({
    loop: true,
    margin:30,
    nav: false,
    dots: false,
    responsive:{
        0:{
            items:2
        },
        700:{
            items:3
        },
        1000:{
            items:4
        }
    },
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true
});