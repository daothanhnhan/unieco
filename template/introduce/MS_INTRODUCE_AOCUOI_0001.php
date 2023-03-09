<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
<?php 
     $action_page = new action_page(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_page->getPageLangDetail_byUrl($slug,$lang);
    $row = $action_page->getPageDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'pageDetail';

    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_page($slug, $lang);
?>
<div class="gb-introvechungtoi_rem">
    <div class="container">
        <div class="row">
            <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
            <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
            <div class="col-md-9">
                <div class="gb-introvechungtoi_rem-left">

                    <h2><?= $rowLang['lang_page_name'] ?></h2>
                    <!-- <div class="gb-divider"></div> -->
                    <?= $rowLang['lang_page_content'] ?>

                </div>

            </div>
            <div class="col-md-3 gb-blog-left">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0009.php";?>
                
            </div>
        </div>
                <?php include DIR_EMAIL."MS_EMAIL_CUANHOM_0002.php";?>

    </div>
</div>