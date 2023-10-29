jQuery(document).ready(function($) {
    _handleScroll();
    _removeTextTranslate();
    _showHideSearch();

    function _handleScroll() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll) {
                $('#site-header').addClass('header-fixed');
            } else {
                $('#site-header').removeClass('header-fixed');
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
