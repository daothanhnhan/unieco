<link href="/plugin/lightgallery/lightgallery.css" rel="stylesheet">
<?php
    $action_news = new action_news();
    // $home_recomended_pro = $action_product->getListProductHot_hasLimit(9);
    // $home_recomended_pro = $action_product->getProductCat_byProductCatIdParent_home(0, 'desc');
    $home_recomended_pro = $action->getList('news', '', '','news_id', 'desc', '' , '4', '');
?>
<div id="gn-aocuoi-sanpham">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">SẢN PHẨM & DỊCH VỤ
</h3>
                <div class="mkd-separator-with-icon-holder clearfix mkd-default-icon" style="margin-top: 7px;margin-bottom: 18px">
                    <span class="mkd-separator-left"></span>
                    <div class="mkd-default-icon-holder"></div>
                    <span class="mkd-separator-right"></span>
                </div>
                <p>Tổng hợp các sản phẩm và dịch vụ của công ty TNHH UNIECO Việt Nam.</p>
            </div>
            <div class="row">
            <?php 
            $d = 0;
            foreach ($home_recomended_pro as $item) {
                $d++;
                $row = $item;
                $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang);
                if ($d==5) {
                    break;
                }
            ?>
            <div class="col-md-3 col-xs-6">
                <div class="gb-product-items">
                    <a href="/<?= $rowLang['friendly_url'] ?>">
                        <img src="/images/<?= $row['news_img'] ?>" alt="<?= $rowLang['lang_news_name'] ?>" class="img-responsive">
                    </a>
                    <h2><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a></h2>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>

</div>

<script src="/plugin/lightgallery/picturefill.min.js"></script>
<script src="/plugin/lightgallery/lightgallery.js"></script>
<script src="/plugin/lightgallery/lg-pager.js"></script>
<script src="/plugin/lightgallery/lg-autoplay.js"></script>
<script src="/plugin/lightgallery/lg-fullscreen.js"></script>
<script src="/plugin/lightgallery/lg-zoom.js"></script>
<script src="/plugin/lightgallery/lg-hash.js"></script>
<script src="/plugin/lightgallery/lg-share.js"></script>

<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery')); 
</script>