

<!--CONTENT-->

<div class="Content-Main">   
  <?php include DIR_SLIDESHOW."MS_SLIDESHOW_DENMOC_0001.php";?>


    <!-- tin tucs -->

    <!-- <div class="container" class="gb-ely-icon">

        <div class="row gb-icon-ely">

            <div class="col-md-4">

                <a href="/doi-ngu-nhan-vien"><img src="/images/Ely-wedding-101.jpg" class="img-responsive"></a>

            </div>

            <div class="col-md-4">

                <a href="/chat-luong-dich-vu"><img src="/images/Ely-wedding-102.jpg" class="img-responsive"></a>

            </div>

            <div class="col-md-4">

                <a href="/chup-anh-cuoi"><img src="/images/Ely-wedding-103.jpg" class="img-responsive"></a>

            </div>

        </div>

    </div> -->

<!-- giới thiệu -->



    <?php //include DIR_PRODUCT."MS_PRODUCT_AOCUOI_0002.php";?>

    <!-- dịch vụ -->



    <?php //include DIR_PRODUCT."MS_PRODUCT_AOCUOI_0001.php";?>



    <!--giới thiệu dịch vụ sản phẩm-->



    <?php include DIR_NEWS."MS_NEWS_AOCUOI_0006.php";?>



    <!-- năng lực công ty -->



    <?php include DIR_INTRODUCE."MS_INTRODUCE_AOCUOI_0002.php";?>



    <?php //include DIR_BANNER."MS_BANNER_AOCUOI_0001.php";?>

    <!-- đối tác -->



    <?php// include DIR_PRODUCT."MS_PRODUCT_AOCUOI_0003.php";?>



    <?php //include DIR_PRODUCT."MS_PRODUCT_AOCUOI_0005.php";?>



    <?php //include DIR_NEWS."MS_NEWS_AOCUOI_0004.php";?>



    <?php// include DIR_CUSTOMER."MS_CUSTOMER_ELY_0001.php";?>



    <?php //include DIR_BANNER."MS_BANNER_AOCUOI_0002.php";?>



    <?php //include DIR_PARTNER."MS_PARTNER_AOCUOI_0001.php";?>



</div>



<style>

/* Center the loader */

#loader {

  position: absolute;

  left: 50%;

  top: 50%;

  z-index: 1;

  width: 150px;

  height: 150px;

  margin: -75px 0 0 -75px;

  border: 16px solid #f3f3f3;

  border-radius: 50%;

  border-top: 16px solid #3498db;

  width: 120px;

  height: 120px;

  -webkit-animation: spin 2s linear infinite;

  animation: spin 2s linear infinite;

}



@-webkit-keyframes spin {

  0% { -webkit-transform: rotate(0deg); }

  100% { -webkit-transform: rotate(360deg); }

}



@keyframes spin {

  0% { transform: rotate(0deg); }

  100% { transform: rotate(360deg); }

}



/* Add animation to "page content" */

.animate-bottom {

  position: relative;

  -webkit-animation-name: animatebottom;

  -webkit-animation-duration: 1s;

  animation-name: animatebottom;

  animation-duration: 1s

}



@-webkit-keyframes animatebottom {

  from { bottom:-100px; opacity:0 } 

  to { bottom:0px; opacity:1 }

}



@keyframes animatebottom { 

  from{ bottom:-100px; opacity:0 } 

  to{ bottom:0; opacity:1 }

}



#myDiv {

  /*display: none;*/

  text-align: center;

}

.gb-popup-overlay{

    position: fixed;

    top: 0;

    right: 0;

    bottom: 0;

    left: 0;

    z-index: 9999;

    -webkit-overflow-scrolling: touch;

    outline: 0;

        background: rgba(0, 0, 0, 0.7);

        display: flex;

        align-items: center;

        justify-content: center;

}

.gb-popup-overlay-content{

        position: fixed;

    width: 550px;

    /*background: #fff;*/

    z-index: 9999;

    top: 50%;

    left: 50%;

    transform: translate(-50%, -50%);

}

@media screen and (max-width: 500px){

  .gb-popup-overlay-content{

    /*position: relative;*/

    width: 85%;

    background: #fff;

}

}

.gb-popup-overlay-content .close_poup{

    width: 40px;

    height: 40px;

    background: red;

    color: #fff;

    position: absolute;

    z-index: 9999999999999;

    right: -26px;

    top: -20px;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

}

</style>



<!-- <div id="loader"></div> -->



<!-- <div class="gb-popup-overlay"></div> -->

    <!-- <div class="gb-popup-overlay-content">

        <div class="close_poup">

          <i class="fa fa-times" aria-hidden="true"></i>

        </div>

        <div id="myDiv">

            <a href=""><img src="/images/pop-up.jpg" alt="" class="img-responsive"></a>

        </div>

    </div> -->

<script>

var myVar;



function myFunction() {

    myVar = setTimeout(showPage);

}



function showPage() {

  document.getElementById("loader").style.display = "none";

  document.getElementById("myDiv").style.display = "block";

}

$(document).ready(function(){

    $('.close_poup').click(function(){

        $('.gb-popup-overlay').css('display','none');

        $('.gb-popup-overlay-content').css('display','none');

    });

    $('.gb-popup-overlay').click(function(){

        $('.gb-popup-overlay-content').css('display','none');

        $(this).css('display','none');

    })

});

</script>

<script type="text/javascript">

function popuptu () {

  $('.gb-popup-overlay').css('display','none');

  $('.gb-popup-overlay-content').css('display','none');

  // alert('tuan');

}

<?php

  if (isset($_SESSION['popup'])) {

?>

popuptu();

<?php 

  }

  if (!isset($_SESSION['popup'])) { 

    $_SESSION['popup'] = 'true';

  }

// unset($_SESSION['popup']);

?>

</script>

