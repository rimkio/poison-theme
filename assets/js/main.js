jQuery(document).ready(function($) {

    _handleScroll();

    _removeTextTranslate();

    _showHideSearch();

    _sliderNguonNguyenLieu();

    function _sliderNguonNguyenLieu() {
        if ($('.carousel-nguyen-lieu').length) {
            $('.carousel-nguyen-lieu').slick({
                dots: false,
                autoplay: false,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                prevArrow: '<button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.390524 8.94281C-0.130175 8.42211 -0.130175 7.57789 0.390524 7.05719L7.05719 0.390524C7.57789 -0.130175 8.42211 -0.130175 8.94281 0.390524C9.46351 0.911223 9.46351 1.75544 8.94281 2.27614L3.21895 8L8.94281 13.7239C9.46351 14.2446 9.46351 15.0888 8.94281 15.6095C8.42211 16.1302 7.57789 16.1302 7.05719 15.6095L0.390524 8.94281Z" fill="white"/></svg></button>',
                nextArrow: '<button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.60948 7.05719C10.1302 7.57789 10.1302 8.42211 9.60948 8.94281L2.94281 15.6095C2.42211 16.1302 1.57789 16.1302 1.05719 15.6095C0.536492 15.0888 0.536492 14.2446 1.05719 13.7239L6.78105 8L1.05719 2.27614C0.536492 1.75544 0.536492 0.911223 1.05719 0.390524C1.57789 -0.130175 2.42211 -0.130175 2.94281 0.390524L9.60948 7.05719Z" fill="white"/></svg></button>'
            });
        }

    }

    function _handleScroll() {

        $(window).scroll(function() {

            var scroll = $(window).scrollTop();

            if (scroll > 200) {

                $('header.poison-header').addClass('header-fixed');

            } else {

                $('header.poison-header').removeClass('header-fixed');

            }

        });

    }



    function _removeTextTranslate() {

        // Find the link element with the specified class and data attribute



        var link = $(".translate-menu .gt_float_switcher .gt_options a.nturl[data-gt-lang='en']");



        // Check if the link element exists

        if (link.length > 0) {

            link.html('<img data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/svg/en.svg" alt="en" src="/wp-content/plugins/gtranslate/flags/svg/en.svg">');

        }

        //VI

        var linkVi = $(".translate-menu .gt_float_switcher .gt_options a.nturl[data-gt-lang='vi']");



        // Check if the link element exists

        if (linkVi.length > 0) {

            linkVi.html('<img data-gt-lazy-src="/wp-content/plugins/gtranslate/flags/svg/vi.svg" alt="vi" src="/wp-content/plugins/gtranslate/flags/svg/vi.svg">');

        }

    }



    function _showHideSearch() {

        $(".menu-icon-wrap a.menu-search").click(function(e) {

            e.stopPropagation();

            $(".nav-search-form").toggleClass("search-opened");

        });



        $(document).click(function(e) {

            if (!$(e.target).closest('.nav-search-form').length) {

                $(".nav-search-form").removeClass("search-opened");

            }

        });

    }





});

