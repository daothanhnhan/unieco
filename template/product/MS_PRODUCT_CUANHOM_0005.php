<?php
    $action_product = new action_product();
    $product_relative = $action_product->getListProductRelate_byIdCat_hasLimit($rowCat['productcat_id'], 3);
?>
<div id="gn-aocuoi-sanpham gb-mauvaytuongtu-ely" style="padding: 50px 0">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">MẪU VÁY TƯƠNG TỰ</h3>
                <div class="mkd-separator-with-icon-holder clearfix mkd-default-icon" style="margin-top: 7px;margin-bottom: 18px">
                    <span class="mkd-separator-left"></span>
                    <div class="mkd-default-icon-holder"></div>
                    <span class="mkd-separator-right"></span>
                </div>
            </div>
            <?php 
            foreach ($product_relative as $item) {
                $row1 = $item;
                $rowLang1 = $action_product->getProductLangDetail_byId($item['product_id'],$lang);
            ?>
            <div class="col-md-4">
                <div class="gb-product-items">
                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                        <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang1['lang_product_name'] ?>" class="img-responsive">
                    </a>
                     <h4>
                        <a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a>
                    </h4>
                    <div class="price"><?= number_format($row1['product_price']) ?> VNĐ</div>
                    <?php include DIR_CART."MS_CART_AOCUOI_0001.php";?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>