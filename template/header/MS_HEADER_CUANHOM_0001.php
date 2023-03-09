<!--MENU MOBILE-->

<?php include_once DIR_MENU."MS_MENU_AOCUOI_0002.php"; ?>

<!-- End menu mobile-->



<!--MENU DESTOP-->

<header>

    <!-- <div class="gb-header-aocuoi">

        <div class="container">

            <div class="gb-top-header_aocuoi">

                <div class="row">

                    <div class="col-md-8 col-sm-6">

                        <div class="gb-top-header_aocuoi-left"> -->

    <?php //include DIR_CONTACT."MS_CONTACT_AOCUOI_0001.php";?>

    <!--  </div>

                    </div> -->

    <!-- <div class="col-md-4 col-sm-6">

                        <div class="gb-top-header_aocuoi-right"> -->

    <?php //include DIR_SOCIAL."MS_SOCIAL_AOCUOI_0001.php";?>
    <!-- 
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div> -->

    <div class="gb-body-aocuoi">

        <div class="container">

            <div class="gb-top-header_aocuoi">

                <div class="row">

                    <div class="col-md-2">

                        <a href="/" class="imgLogo">

                            <img src="/images/<?= $rowConfig['web_logo'] ?>">

                        </a>

                    </div>

                    <div class="col-md-8 hidden-xs hidden-sm">

                        <?php include DIR_MENU."MS_MENU_AOCUOI_0001.php";?>

                    </div>
                    <div class="col-md-2">
                        <div id="ttwmenu" class="multi_language">
         <ul>
           <li>
             <a href="#" title="">
                <?php if ($lang == 'vn') { ?>
                <img src="/images/ptd_vn.jpg" class="ptd_lgue">VN
                <?php } else { ?>
                <img src="/images/ptd_en.jpg" class="ptd_lgue">EN
                <?php } ?>
             </a>
             <ul>
               <li class="translation-icons">
                 <a href="javascript:void(0)" title="" data-placement="0" onclick="lang_vn()">
                   <img src="/images/ptd_vn.jpg" class=" ptd_lgue">VN
                 </a>
               </li>
               <li class="translation-icons">
                 <a href="javascript:void(0)" title="" data-placement="1" onclick="lang_en()">
                   <img src="/images/ptd_en.jpg" class="ptd_lgue">EN
                 </a>
               </li>
             </ul>
           </li>
         </ul>
       </div>
                    </div>
                    <!--<div class="col-md-2">
                        <div id="ttwmenu" class="multi_language">
                            <ul>
                                <li>
                                    <a href="#" title="">
                                        <img src="/images/ptd_vn.jpg" class="ptd_lgue">VN
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" title="">
                                                <img src="/images/ptd_vn.jpg" class=" ptd_lgue">VN
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <img src="/images/ptd_en.jpg" class="ptd_lgue">EN
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                </div>

            </div>

        </div>

        <?php include DIR_SEARCH."MS_SEARCH_AOCUOI_0002.php";?>

    </div>



</header>

<!-- <div id="header-mobie">

    <a href="/" class="imgLogo_mobie">

        <img src="../images/logo-dark.png" >

    </a>

    <i class="fa fa-bars" aria-hidden="true"></i>

    <ul>

        <li><a href="">Home</a></li>

       <li><a href="">Home</a></li>

    </ul>

</div>
 -->


<script src="/plugin/sticky/jquery.sticky.js"></script>

<script>
    $(document).ready(function () {

        $(".sticky-menu").sticky({
            topSpacing: 0
        });

        $('.gb-cart_search .fa-search').click(function () {

            $(".search-aocuoi").fadeIn("slow");

            $(".search-aocuoi input").focus();

            return false;

        })

        $('.glyphicon-remove').click(function () {

            console.log($(this).parents(".search-aocuoi").fadeOut("slow"))

        })

        $('.fa-bars').click(function () {

            $(this).next().slideToggle()("slow");

            // console.log(1)

        })



    });
</script>