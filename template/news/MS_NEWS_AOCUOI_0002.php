<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>
<?php 
    $action_news = new action_news(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_news->getNewsLangDetail_byUrl($slug,$lang);
    $row = $action_news->getNewsDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'newsDetail';
    $news_breadcrumb = $action_news->getNewsCatLangDetail_byId($row['newscat_id'], $lang);
    $breadcrumb_url = $news_breadcrumb['friendly_url'];
    $breadcrumb_name = $news_breadcrumb['lang_newscat_name'];
    $use_breadcrumb = true;
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_newsDetail($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<div class="gb-single-blog_cuanhom">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 gb-single-blog_cuanhom-right">
                <div class="gb-single-blog_cuanhom-right-title">
                    <h1><?= $rowLang['lang_news_name'] ?></h1>
                </div>
                <div class="gb-single-blog_cuanhom-right-info">
                    <ul>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"> Admin</a></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#"> <?= date('d-m-Y', strtotime($row['news_created_date']))  ?></a></li>
                        <!-- <li><i class="fa fa-comment-o" aria-hidden="true"></i><a href="#"> 5 comments</a></li> -->
                    </ul>
                </div>
                <div class="gb-single-blog_cuanhom-right-text">
                    <?= $rowLang['lang_news_content'] ?>
                </div>

                

            </div>
             <div class="col-sm-3 gb-blog-left">
                <?php// include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0008.php";?>
                <?php// include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_AOCUOI_0002.php";?>
            </div>
        </div>
        <!--bình luận-->
                <?php include DIR_EMAIL."MS_EMAIL_CUANHOM_0002.php";?>

                <!--tin tức liên quan-->
                <?php include DIR_NEWS."MS_NEWS_AOCUOI_0003.php";?>
    </div>
</div>