global.$ = global.jQuery = require('jquery');
import 'slick-carousel';

(function ($) {
    "use strict";

    const PoisionPromotionsCarousel = () => {
        const WrapCarousel = $('.home-our-promotions__carousel');
        WrapCarousel.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 300,
            dots: true,
            arrows: false,
            infinite: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    $(window).on("load", function () {


    });

    $(document).ready(function () {
        PoisionPromotionsCarousel();
    })
})(jQuery); 