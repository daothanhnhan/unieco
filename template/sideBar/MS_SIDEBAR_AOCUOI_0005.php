<div class="gb-product-sidebar-cuanhom widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-cuanhom">Sản phẩm mới nhất</h3>
        <div class="widget-content">
            <div class="gb-newlist-details">
                <?php
                    $product = new action_product();
                    $list_product_new = $product->getListProductNew_hasLimit(4);
                    foreach ($list_product_new as $item) {                        
                        $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                        $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                ?>
                    <div class="gb-product-sidebar_cuanhom-item">
                        <div class="gb-product-sidebar_cuanhom-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="review" class="img-responsive">
                            </a>
                        </div>
                        <div class="gb-product-sidebar_cuanhom-item-info">
                            <h4><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h4>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_CUANHOM_0002.php";?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </aside>
</div>