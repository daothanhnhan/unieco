<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
<?php 
    $action_service = new action_service(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_service->getServiceLangDetail_byUrl($slug,$lang);
    $row = $action_service->getServiceDetail_byId($rowLang['service_id'],$lang);
    $_SESSION['sidebar'] = 'serviceDetail';
    $service_breadcrumb = $action_service->getServiceCatLangDetail_byId($row['servicecat_id'], $lang);
    $breadcrumb_url = $service_breadcrumb['friendly_url'];
    $breadcrumb_name = $service_breadcrumb['lang_servicecat_name'];
    $use_breadcrumb = true;
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_serviceDetail($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<div class="gb-single-blog_cuanhom">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 gb-single-blog_cuanhom-right">
                <div class="gb-single-blog_cuanhom-right-title">
                    <h1><?= $rowLang['lang_service_name'] ?></h1>
                </div>
                <div class="gb-single-blog_cuanhom-right-info">
                    <ul>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"> Admin</a></li>
                        <!-- <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#"> <?= date('d-m-Y', strtotime($row['service_created_date']))  ?></a></li> -->
                        <!-- <li><i class="fa fa-comment-o" aria-hidden="true"></i><a href="#"> 5 comments</a></li> -->
                    </ul>
                </div>
                <div class="gb-single-blog_cuanhom-right-text">
                    <?= $rowLang['lang_service_content'] ?>
                </div>

               

            </div>
             <div class="col-sm-3 gb-blog-left">
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0008.php";?>
                <?php //include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0002.php";?>
            </div> 
        </div>
         <!--bình luận-->
                <?php include DIR_EMAIL."MS_EMAIL_CUANHOM_0002.php";?>

                <!--tin tức liên quan-->
                <?php include DIR_NEWS."MS_NEWS_AOCUOI_0009.php";?>
    </div>
</div>