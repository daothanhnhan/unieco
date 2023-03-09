<style type="text/css">
    .line-tu{
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }
    .news-right{
        padding-left: 200px;
    }
</style> 
  <div id="gb-aocuoi-tintuc" style="background: #f1f1f1">
        <?php   
        $action_news = new action_news();  
        $listNew = $action_news->getListNewsNew_hasLimit(1);
        // print_r($listNew[0]);
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Tin tức</h3>
                    <div class="mkd-separator-with-icon-holder clearfix mkd-default-icon" style="margin-top: 7px;margin-bottom: 18px">
                        <span class="mkd-separator-left"></span>
                        <div class="mkd-default-icon-holder"></div>
                        <span class="mkd-separator-right"></span>
                    </div>
                    <p>Cập nhật những thông tin, tin tức, xu hướng, phong cách chụp ảnh mới nhất cùng ELY.</p>
                </div>
                <div class="col-md-6"> 
                    <?php   foreach ($listNew as $row) { ?>
                    <a href="/<?= $row['friendly_url'] ?>">
                        <img src="/images/<?= $row['news_img'] ?>" class="img-responsive">

                    </a>
                    <h2><a href="/<?= $row['friendly_url'] ?>"><?= $row['news_name'] ?></a></h2>
                    <p class="info-news"> <?= $row['news_des'] ?></p>
                    <?php   } ?>

                </div>
                <div class="col-md-6">
                    <?php   
                    $action_news = new action_news();  
                    $listNew = $action_news->getListNewsNew_hasLimit(4);
                    foreach ($listNew as $row) {
                        ?>
                        <div class="news-left">  
                            <a href="/<?= $row['friendly_url'] ?>">
                                <img src="/images/<?= $row['news_img'] ?>" class="img-responsive">

                            </a>
                        </div>
                        <div class="news-right"> 
                            <h2><a href="/<?= $row['friendly_url'] ?>"><?= $row['news_name'] ?></a></h2>
                            <p class="info-news line-tu"> <?= $row['news_des'] ?></p>

                        </div>
                        <div style="clear: both;margin-bottom: 10px;">   </div>
                        <?php   } ?>
                    </div>
                </div>

            </div> 
        </div>