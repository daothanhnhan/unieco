<?php 
    $action = new action();
    $action_news = new action_news();     
    $home_video = $action_news->getNewsList_byMultiLevel_orderNewsId(85,'desc',1,3,'')['data'];
?>
<div id="gn-aocuoi-sanpham" style="padding: 50px 0;padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Video</h3>
                    <div class="mkd-separator-with-icon-holder clearfix mkd-default-icon" style="margin-top: 7px;margin-bottom: 18px">
                        <span class="mkd-separator-left"></span>
                        <div class="mkd-default-icon-holder"></div>
                        <span class="mkd-separator-right"></span>
                    </div>
                    <p>Bên cạnh việc lưu giữ phút giây hạnh phúc qua những tấm hình, ELY còn dành tặng riêng cho khách hàng thân thương những trích đoạn video vô cùng ý nghĩa. Cùng ELY nhìn lại khoảnh khắc không thể nào quên qua album video sau.</p>
                </div>
                <?php 
                foreach ($home_video as $item) { 
                ?>
                <div class="col-md-4">
                    <?= $item['news_sub_info1'] ?>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>