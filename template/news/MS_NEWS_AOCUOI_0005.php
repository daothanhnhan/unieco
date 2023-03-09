<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_AOCUOI_0001.php";?>

<?php 

    $action = new action();

    $action_news = new action_news();     

    if (isset($_GET['slug']) && $_GET['slug'] != '') {

        $slug = $_GET['slug'];

        $rowCatLang = $action_news->getNewsCatLangDetail_byUrl($slug,$lang);

        $rowCat = $action_news->getNewsCatDetail_byId($rowCatLang[$nameColIdNewsCat_newsCatLanguage],$lang);

        if (newsCatPageHasSub) {

            $rows = $action_news->getNewsList_byMultiLevel_orderNewsId($rowCat[$nameColId_newsCat],'desc',$trang,6,$slug);

        } else {

            $rows = $action_news->getNewsCat_byNewsCatIdParentHighest($rowCat[$nameColId_newsCat],'desc');

        }        

    }

    else $rows = $action->getList($nameTable_news,'','',$nameColId_news,'asc',$trang,6,'news-cat'); 

?>

<div class="gb-page-blog_cuanhom">

    <div class="container">

        <div class="row">

                <?php if(newsCatPageHasSub){?>

                <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">

                <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang"> 

            <div class="col-sm-9">

                <div class="row">

                    <?php 

                        $d = 0;

                        foreach ($rows['data'] as $item) { 

                            $d++;

                            $action_news1 = new action_news(); 

                            $rowLang1 = $action_news1->getNewsLangDetail_byId($item['news_id'],$lang);

                            $row1 = $action_news1->getNewsDetail_byId($item['news_id'],$lang);

                    ?>

                    <div class="col-sm-6">

                        <?= $item['news_sub_info1'] ?>

                    </div>

                    <?php } } ?>

                </div>

                <?php include DIR_PAGINATION."MS_PAGINATION_AOCUOI_0001.php";?>

            </div>

        
        </div>

    </div>

</div>