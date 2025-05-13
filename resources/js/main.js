$(document).ready(function() {
    $('.fancybox').fancybox({
        'autoScale': true,
        'touch': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 500,
        'speedOut': 300,
        'autoDimensions': true,
        'centerOnScroll': true
    });

    // $('input[name=phone]').mask("+7(999)999-99-99");

    // $('.owl-carousel.teams').owlCarousel({
    //     margin: 20,
    //     loop: true,
    //     nav: false,
    //     autoplay: true,
    //     autoplayTimeout:2000,
    //     dots: false,
    //     responsive: {
    //         400: {
    //             items: 2
    //         },
    //         768: {
    //             items: 2
    //         },
    //         1200: {
    //             items: 6
    //         },
    //     },
    //     // navText:[navButtonBlack1,navButtonBlack2]
    // });

});

// const getQueryParams = (qs) => {
//     qs = qs.split('+').join(' ');
//     let params = {},
//         tokens,
//         re = /[?&]?([^=]+)=([^&]*)/g;
//     while (tokens = re.exec(qs)) {
//         params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
//     }
//     return params;
// }
