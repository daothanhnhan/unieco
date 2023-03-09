<div class="gb-danhmucsanpham_cuanhom widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-cuanhom">Danh mục sản phẩm</h3>
        <div class="widget-content">
            <div class="accordion-default">
                <ul class="accordion">
                    <?php
                        $product = new action_product();
                        $list_product_sidebar = $product->getListProductCat_byOrderASC();
                        foreach ($list_product_sidebar as $item) {
                    ?>
                        <li class="accordion-toggle"><a href="/<?= $item['friendly_url'] ?>"> <?= $item['productcat_name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </aside>
</div>