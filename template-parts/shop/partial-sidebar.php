<?php
$product_cat = poison_get_terms_product('product_cat');
$product_type = poison_get_terms_product('loai_san_pham');
$product_ids_ft = wc_get_featured_product_ids();
$product_ids_sale = wc_get_product_ids_on_sale();
?>

<div class="poison-shop__sidebar-inner">
    <div class="poison-shop__sidebar-search">
        <input type="text" name="shop_search" value="" placeholder="Tìm kiếm sản phẩm...">
        <a href="javascript:void(0)" id="btn-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 1.99997C9.1446 2.00008 7.80887 2.32433 6.60427 2.94566C5.39966 3.56699 4.3611 4.46739 3.57525 5.57172C2.78939 6.67606 2.27902 7.95232 2.08672 9.29401C1.89442 10.6357 2.02576 12.0039 2.46979 13.2846C2.91382 14.5652 3.65766 15.721 4.63925 16.6557C5.62084 17.5904 6.81171 18.2767 8.11252 18.6576C9.41333 19.0384 10.7864 19.1026 12.117 18.8449C13.4477 18.5871 14.6975 18.0149 15.762 17.176L19.414 20.828C19.6026 21.0101 19.8552 21.1109 20.1174 21.1086C20.3796 21.1064 20.6304 21.0012 20.8158 20.8158C21.0012 20.6304 21.1064 20.3796 21.1087 20.1174C21.111 19.8552 21.0102 19.6026 20.828 19.414L17.176 15.762C18.164 14.5086 18.7792 13.0024 18.9511 11.4157C19.123 9.82902 18.8448 8.22599 18.1482 6.79006C17.4517 5.35414 16.3649 4.14333 15.0123 3.2962C13.6597 2.44908 12.096 1.99986 10.5 1.99997ZM4.00001 10.5C4.00001 8.77606 4.68483 7.12276 5.90382 5.90378C7.1228 4.68479 8.7761 3.99997 10.5 3.99997C12.2239 3.99997 13.8772 4.68479 15.0962 5.90378C16.3152 7.12276 17 8.77606 17 10.5C17 12.2239 16.3152 13.8772 15.0962 15.0962C13.8772 16.3152 12.2239 17 10.5 17C8.7761 17 7.1228 16.3152 5.90382 15.0962C4.68483 13.8772 4.00001 12.2239 4.00001 10.5Z" fill="white" />
            </svg>
        </a>
    </div>

    <div class="poison-shop__sidebar-category">
        <h6 class="poison-shop__sidebar-heading">TÌM THEO DANH MỤC</h6>
        <div class="poison-shop__sidebar-listcheckbox">
        <input type="hidden" id="ids_cat_product" value="">
            <?php if (!empty($product_cat)) { ?>
                <?php foreach ($product_cat as $category) { ?>
                    <div class="poison-shop__sidebar-listcheckbox__item">
                        <input type="checkbox" data-checkbox="cat" id="<?= $category->slug ?>" name="<?= $category->slug ?>" value="<?= $category->term_id ?>">
                        <label for="<?= $category->slug ?>"> <?= $category->name ?> (<?= $category->count ?>)</label><br>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <div class="poison-shop__sidebar-type">
        <h6 class="poison-shop__sidebar-heading">CHỌN LOẠI SẢN PHẨM</h6>
        <div class="poison-shop__sidebar-listcheckbox">
            <input type="hidden" id="ids_type_product" value="">
            <?php if (!empty($product_type)) { ?>
                <?php foreach ($product_type as $type) { ?>
                    <div class="poison-shop__sidebar-listcheckbox__item">
                        <input type="checkbox" data-checkbox="type" id="<?= $type->slug ?>" name="<?= $type->slug ?>" value="<?= $type->term_id ?>">
                        <label for="<?= $type->slug ?>"> <?= $type->name ?></label><br>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <div class="poison-shop__sidebar-featured">
        <h6 class="poison-shop__sidebar-heading">SẢN PHẨM NỖI BẬT</h6>
        <div class="poison-shop__sidebar-listproduct">
            <?php if (!empty($product_ids_ft)) { ?>
                <?php poison_list_product_sidebar($product_ids_ft); ?>
            <?php } else { ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php } ?>
        </div>
    </div>

    <div class="poison-shop__sidebar-sales">
        <h6 class="poison-shop__sidebar-heading">SẢN PHẨM GIẢM GIÁ</h6>
        <div class="poison-shop__sidebar-listproduct">
            <?php if (!empty($product_ids_sale)) { ?>
                <?php poison_list_product_sidebar($product_ids_sale); ?>
            <?php } else { ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php } ?>
        </div>
    </div>
</div>