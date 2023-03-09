<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">

<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">

<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<div style="clear: both;"> </div>
<div class="gb-slideshow_aocuoi row" style="top: 0px;">

    <div class="gb-slideshow_aocuoi-slide owl-carousel owl-theme">

        <?php
            $array = json_decode($rowConfig['slideshow_home'], true);
            foreach ($array as $key => $val) {
                $img = json_decode($val, true);
                if ($img != '') {
                    ?>
        <div class="item">

            <div class="images-slide" style="background-image: url(images/<?= $img['image']?>);">

                <!--  <img src="images/bridal-shop-slide-3-background.jpg" alt="" class="img-responsive"> -->
                <!--<div class="s row">
    <div class="col-md-3 col-sm-3 col-xs-3 info">
        <span class="fa fa-home"></span>
        <span class="so-lieu"> 100+ </span>
        <br><span>Home Lifts Installed</span>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3 info">
        <span class="fa fa-building"></span>
        <span class="so-lieu"> 40+ </span>
        <br><span>Passenger Lifts Installed</span>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3 info">
        <span class="glyphicon glyphicon-briefcase"></span>
        <span class="so-lieu"> 360+ </span>
        <br><span>Passenger Lifts Repaired & Maintained</span>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3 info">
        <span class="fa fa-arrow-circle-up"></span>
        <span class="so-lieu"> 360+ </span>
        <br><span>Passenger Lifts Repaired & Maintained</span>
    </div>
</div>-->

            </div>

        </div>
        <?php                            
              }
          }
        ?>


    </div>

</div>



<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {

        $('.gb-slideshow_aocuoi-slide').owlCarousel({

            loop: true,

            margin: 0,

            navSpeed: 500,

            nav: true,

            dots: false,

            autoplay: true,

            rewind: true,

            navText: [],

            items: 1

        });

    });
</script>