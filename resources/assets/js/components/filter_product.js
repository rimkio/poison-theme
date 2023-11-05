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
                    beforeSend: function() {
                        $('.poison-shop__result').addClass('loading');    
                    },
                    success: function (data) {
                        $('.poison-shop__result').removeClass('loading');
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

        $('#clear-input').on('click', function (e) {    
            inputSearch.val('');        
            inputSearch.focus();
            $('.poison-shop__sidebar-search').removeClass('input-filling');
            get_params_call_ajax(false, 1);
        });

        inputSearch.keyup(function (event) {
            let s = inputSearch.val();
            if (s === '') {
                $('.poison-shop__sidebar-search').removeClass('input-filling');
            } else {
                $('.poison-shop__sidebar-search').addClass('input-filling');
            }
        });

        $('.poison-shop__sidebar-heading').on('click', function (e) {
            $(this).parent().find('.wrap-toggle').slideToggle(500);
        });

    };

    $(window).on('load', function () {
        poison_filter_product();
    });

})