<link href="/plugin/lightgallery/lightgallery.css" rel="stylesheet">

<?php 
    $action = new action();
    $action_product = new action_product();                                                                               
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];
        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang[$nameColIdProductCat_productCatLanguage],$lang);//var_dump($rowCat);
        $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat[$nameColId_productCat],'desc',$trang,20,$slug);
    }else{
        $rows = $action->getList($nameTable_product,'','',$nameColId_product,'desc',$trang,20,'san-pham');echo 'dat';
        
    }
    $_SESSION['sidebar'] = 'productCat';//var_dump($rows);
    // $rows['data'] = array();
?>  
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<?php 
    // $action_lang = new action_lang();
    // $url_lang = $action_lang->get_url_lang_productcat($slug, $lang);
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
<div id="gn-aocuoi-sanpham" style="padding: 50px 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row" id="lightgallery">
                <?php 
                    $d = 0;
                    foreach ($rows['data'] as $row) {
                        $d++;
                        $rowLang1 = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                        $row1 = $action_product->getProductDetail_byId($row['product_id'],$lang); 
                ?>
                    <div class="col-md-3"  data-src="/images/<?= $row1['product_img'] ?>">
                        <div class="gb-product-items">
                            <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $row1['product_name'] ?>" class="img-responsive">
                            <!-- <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2> -->
                        </div>
                    </div>
                <?php 
                    if ($d%4==0) {
                        echo '<hr style="width:100%;border:0;" />';
                    }
                } ?>
                </div>
                <?php //include DIR_PAGINATION."MS_PAGINATION_AOCUOI_0008.php";?>
                <div style="text-align: center;"><?= $rows['paging'] ?></div>
            </div>
            <div class="col-md-3" style="display: none;">
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0008.php";?>
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0001.php";?>
                <?php// include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0005.php";?>
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

    
    function load_url (id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           if (confirm('Th??m s???n ph???m th??nh c??ng, b???n c?? mu???n thanh to??n lu??n kh??ng')) {
              window.location = '/gio-hang';
          }else{
              location.reload();
          }  
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name+"&product_price="+price+"&product_quantity=1&action=add");
        xhttp.send();        
    }
</script>