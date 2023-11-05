jQuery(function ($) {
    "use strict";
    const poison_filter_product = () => {
        const isShop = $('.poison-shop');
        if (!isShop.length) return;

        const resultsElement = $('.poison-shop__result__wrap'),
            btnLoadMore = $('#poison-shop__result__loadmore'),
            ids_cat = $('#ids_cat_product'),
            ids_type = $('#ids_type_product'),
            rmInput = $('.remove-input'),
            btnSearch = $('#btn-search'),
            inputSearch = $('.poison-shop__sidebar-search').find('input');

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

                        if (val.is_loadmore)
                            resultsElement.append(data.items);
                        else
                            resultsElement.html(data.items);
                    }
                });

            } catch (e) {
                console.log(e);
            }
        };

        function get_params_call_ajax(is_loadmore, current_page) {
            let query = resultsElement.data('query'),
                category = ids_cat.val(),
                type = ids_type.val(),
                s = inputSearch.val();

            resultsElement.data('currentpage', current_page);
            resultsElement.attr('data-currentpage', current_page);
            __ajax_filter({ category, type, query, current_page, is_loadmore, s });
        }

        $('input[data-checkbox]').on('click', function (e) {
            let input_val = $(this).val(),
                input_type = $(this).data('checkbox');

            if (input_type == 'cat') {
                if ($(this).is(':checked')) {
                    category_ids.push(input_val);
                } else {
                    category_ids.splice($.inArray(input_val, category_ids), 1);
                }
                ids_cat.val(JSON.parse(JSON.stringify(category_ids)))
            } else {
                if ($(this).is(':checked')) {
                    type_ids.push(input_val);
                } else {
                    type_ids.splice($.inArray(input_val, type_ids), 1);
                }
                ids_type.val(JSON.parse(JSON.stringify(type_ids)))
            }

            get_params_call_ajax(false, 1);
        });

        //load more
        btnLoadMore.on('click', function (e) {
            let currentPage = parseInt(resultsElement.data('currentpage')) + 1;
            get_params_call_ajax(true, currentPage);
        });

        btnSearch.on('click', function (e) {            
            get_params_call_ajax(false, 1);
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

    };

    $(window).on('load', function () {
        poison_filter_product();
    });

})