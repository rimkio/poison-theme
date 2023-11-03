jQuery(function ($) {
    "use strict";
    const poison_filter_product = () => {
        const isShop = $('.poison-shop');
        if (!isShop.length) return;

        const resultsElement = $('.poison-shop__result__wrap'),
            btnLoadMore = $('#poison-shop__result__loadmore'),
            rmInput = $('.remove-input'),
            labelSearching = $('.bph-block-filter-events-searching-label'),
            wrapInputSearching = $('.bph-block-filter-events-searching-input'),
            inputSearching = $('#bph-search');

        let category_ids = [],
            type_ids = [];

        function __ajax_filter(val = {}) {
            try {
                $.ajax({
                    type: "post",
                    url: php_data.ajax_url,
                    dataType: "json",
                    data: {
                        ...{ action: "poison_ajax_filter_product" },
                        ...val,
                    },
                    success: function (data) {
                        console.log(data)

                        if (data.hideLoadMore)
                            btnLoadMore.hide();
                        else
                            btnLoadMore.show();

                        if (val.isLoadMore)
                            resultsElement.append(data.items);
                        else
                            resultsElement.html(data.items);
                    }
                });

            } catch (e) {
                console.log(e);
            }
        };

        $(document).click(function (event) {
            if (!$(event.target).is(".bph-filter-dropdown-wrap .data-tax")) {
                $('.bph-filter-dropdown').slideUp();
                $('.data-tax').removeClass("active");
            }
        });

        $('input[data-checkbox]').on('click', function (e) {
            let input_val = $(this).val(),
                input_type = $(this).data('checkbox');

            if (input_type == 'cat') {
                if ($(this).is(':checked')) {
                    category_ids.push(input_val);
                } else {
                    category_ids.splice($.inArray(input_val, category_ids), 1);
                }
            } else {
                if ($(this).is(':checked')) {
                    type_ids.push(input_val);
                } else {
                    type_ids.splice($.inArray(input_val, type_ids), 1);
                }
            }

            let query = resultsElement.data('query'),
                current_page = 1,
                s = inputSearching.val(),
                isLoadMore = false;
            resultsElement.data('currentpage', 1);
            resultsElement.attr('data-currentpage', 1);
            __ajax_filter({ category_ids, type_ids, query, current_page, isLoadMore, s });
        });

        //load more
        $('.bph-btn-loadmore').on('click', function (e) {
            let start_date = dataDayStart.val(),
                end_date = dataDayEnd.val(),
                festival = dataFestival.data('tax'),
                genres = dataGenres.data('tax'),
                query = $block.data('query'),
                currentPage = parseInt($block.data('currentpage')) + 1,
                isLoadMore = true,
                s = inputSearching.val(),
                arg_post = $block.data('post');

            $block.data('currentpage', currentPage);
            $block.attr('data-currentpage', currentPage);
            __ajax_filter({ start_date, end_date, festival, genres, query, currentPage, isLoadMore, arg_post, s });
        });

        labelSearching.on('click', function (e) {
            $(this).parent().addClass('showing');
            setTimeout(function () {
                $('#bph-search').focus();
            }, 500)

        });

        rmInput.on('click', function (e) {
            inputSearching.val('');
            wrapInputSearching.removeClass('input-filling');
            let start_date = dataDayStart.val(),
                end_date = dataDayEnd.val(),
                festival = dataFestival.data('tax'),
                genres = dataGenres.data('tax'),
                query = $block.data('query'),
                currentPage = 1,
                s = inputSearching.val(),
                isLoadMore = false;
            $block.data('currentpage', 1);
            $block.attr('data-currentpage', 1);
            __ajax_filter({ start_date, end_date, festival, genres, query, currentPage, isLoadMore, s });
        });

        inputSearching.keyup(function (event) {
            let start_date = dataDayStart.val(),
                end_date = dataDayEnd.val(),
                festival = dataFestival.data('tax'),
                genres = dataGenres.data('tax'),
                query = $block.data('query'),
                currentPage = 1,
                s = $(this).val(),
                isLoadMore = false;
            $block.data('currentpage', 1);
            $block.attr('data-currentpage', 1);
            if (s === '') {
                wrapInputSearching.removeClass('input-filling');
            } else {
                wrapInputSearching.addClass('input-filling');
            }

            __ajax_filter({ start_date, end_date, festival, genres, query, currentPage, isLoadMore, s });
        });
    };

    $(window).on('load', function () {
        poison_filter_product();
    });

})