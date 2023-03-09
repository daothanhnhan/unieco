<?php 
    $action_service = new action_service(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_service->getServiceLangDetail_byUrl($slug,$lang);
    $row = $action_service->getServiceDetail_byId($rowLang['service_id'],$lang);
    $_SESSION['sidebar'] = 'serviceDetail';

?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
<div class="gb-single-blog_ruouvang">
    <div class="container">
        <div class="row">
            <div class="col-md-9 gb-single-blog_ruouvang-right">
                
                <div class="gb-single-blog_ruouvang-right-text">
                    <?= $rowLang['lang_service_content'] ?>
                </div>

                <!-- bình luận -->
                <?php include DIR_EMAIL."MS_EMAIL_AOCUOI_0002.php";?>
                <!-- tin tức liên quan -->
                <?php include DIR_NEWS."MS_NEWS_H2D_0003.php";?>

            </div>
            <div class="col-md-3 gb-blog-left">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0002.php";?>
            </div>
        </div>
        <?php include DIR_NEWS."MS_NEWS_AOCUOI_0009.php";?>
    </div>
</div>