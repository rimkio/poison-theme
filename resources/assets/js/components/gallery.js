import lightGallery from 'lightgallery';
import lgVideo from 'lightgallery/plugins/video';

(function ($) {
    "use strict";

    const PoisionSlickVideoGallery = () => {
        const WrapCarousel = $('.section-our-gallery__carousel');
        if (!WrapCarousel.length) return;
        WrapCarousel.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 300,
            dots: true,
            arrows: false,
            infinite: false,
        });
    }

    $(window).on("load", function () {
        let videoCarousel = document.getElementsByClassName('section-our-gallery__carousel-item');
        for (let item of videoCarousel) {
            lightGallery(item, {
                plugins: [lgVideo],
                videojs: true,
                videojsOptions: {
                    muted: false,
                },
            })
        }

        lightGallery(document.getElementById('thumbnails-gallery'), {
            thumbnail: true,
        });

    });

    $(document).ready(function () {
        PoisionSlickVideoGallery();
    })
})(jQuery); 