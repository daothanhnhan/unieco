<div id="bg-footer-aocuoi">

    <div class="mkd-footer-top-holder" style="padding-bottom: 50px">

        <div class="container">

            <div class="row">

                <div class="col-md-4" style="position: relative;top: -40px;">

                    <!-- <h4><?php echo $rowConfig['web_name'] ?></h4> -->
                    <img src="images/logotext.png" width="100%" style="max-width: 215px; border-radius: 7px;">

                    <!-- <p style="margin-bottom: 30px"><?php echo $rowConfig['web_email'] ?></p> -->
                    <strong style="display: block;margin: 10px 0"><?= $rowConfig['web_name'] ?></strong>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Trụ sở chính: <?= $rowConfig['content_home1'] ?></p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Văn phòng giao dịch: Phòng 601, tòa nhà Tuấn Hạnh, 82/116 Nhân Hòa, Quận Thanh Xuân, thành phố Hà Nội.</p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i> <?= $rowConfig['content_home3'] ?></p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $rowConfig['content_home2'] ?></p>

                    <!-- <h4>ĐĂNG KÝ ĐỂ NHẬN TIN</h4> -->

                    <?php //include DIR_EMAIL."MS_EMAIL_AOCUOI_0004.php";?>

                </div>

                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7626208954966!2d105.80425145018333!3d21.002150485944146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9868fb14dd%3A0x84a37b6111ef5965!2zODIsIDExNiBOaMOibiBIw7JhLCBOaMOibiBDaMOtbmgsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1569379077301!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                   <!--  <h4>TIN TỨC MỚI NHẤT</h4>

                    <?php

                        $news = new action_news();

                        $list_news_new = $news->getListNewsNew_hasLimit(3);

                        foreach ($list_news_new as $item) {

                    ?>

                        <div class="mkd_tweet_text">

                            <div class="mkd-tweet-icon">

                                <i class="fa fa-twitter" aria-hidden="true"></i>

                            </div>

                            <div class="mkd-tweet-holder">

                                <a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a>  

                            </div>

                        </div>

                    <?php } ?>
 -->
                </div>

                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.558929854469!2d105.77611105018272!3d20.970220785961622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134532a4fd22e8d%3A0x8a1495acc0e5c0ca!2zNzggTMOqIEzhu6NpLCBQLiBOZ3V54buFbiBUcsOjaSwgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1569378995249!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    <?php //include DIR_SOCIAL."MS_SOCIAL_AOCUOI_0002.php";?>

                </div>

            </div>



        </div>



    </div>



</div>