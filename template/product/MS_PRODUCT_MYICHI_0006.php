<?php 
    $action = new action();
    $action_product = new action_product();                                                                                
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];
        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang[$nameColIdProductCat_productCatLanguage],$lang);
        $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat[$nameColId_productCat],'desc',$trang,9,$slug);
    }else{
        $rows = $action->getList($nameTable_product,'','',$nameColId_product,'desc',$trang,9,'san-pham');
        
    }
    $_SESSION['sidebar'] = 'productCat';
?>  
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_productcat($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">

<div class="gb-page-product_myichi">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="gb-page-product_myichi-intro">
                    <?php
                        if($slug == "san-pham"){
                    ?>
                        <p></p>
                    <?php
                        }else{
                    ?>
                        <p></p>
                    <?php } ?>

                    <h2><?= $rowCat['productcat_name'] ?></h2>

                    <img src="/images/<?= $rowCat['productcat_img'] ?>" alt="" class="img-responsive">
                    <p>
                        <?= $rowCat['productcat_des'] ?>
                    </p>
                    <!-- <div class="gb-page-product_myichi-intro-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rf1cYX37-A4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div> -->
                </div>
                <div class="gb-page-product_myichi-body">
                    <?php include DIR_SEARCH."MS_SEARCH_MYICHI_0002.php";?>
                    <div class="row">
                        <?php 
                            $d = 0;
                            foreach ($rows['data'] as $row) {
                                $d++;
                                $rowLang1 = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                $row1 = $action_product->getProductDetail_byId($row['product_id'],$lang); 
                        ?>
                            <div class="col-md-4 col-sm-4">
                                <div class="product_item_myichi">
                                    <div class="product_item_img_myichi">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                        </a>
                                        <!--PRICES-->
                                            <?php include DIR_PRODUCT."MS_PRODUCT_MYICHI_0003.php";?>
                                    </div>
                                    <div class="product_item_text_myichi">
                                        <h2>
                                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                                <?= $rowLang1['lang_product_name'] ?>
                                            </a>
                                        </h2>
                                        <div class="product_item_price_chitiet_myichi">
                                            <!--PRICES-->
                                <?php //include DIR_PRODUCT."MS_PRODUCT_MYICHI_0002.php";?>
                                <!--MUA HÀNG-->
                                <?php //include DIR_CART."MS_CART_MYICHI_0001.php";?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php include DIR_PAGINATION."MS_PAGINATION_MYICHI_0001.php";?>
                </div>
            </div>
            <div class="col-md-3">
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_MYICHI_0002.php";?>
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_MYICHI_0003.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MYICHI_0004.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MYICHI_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MYICHI_0005.php";?>
            </div>
        </div>
    </div>
</div>