<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">

<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div id="gn-aocuoi-sanpham" style="padding: 50px 0;padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Đối tác của chúng tôi</h3>
                <div class="mkd-separator-with-icon-holder clearfix mkd-default-icon" style="margin-top: 7px;margin-bottom: 18px">
                    <span class="mkd-separator-left"></span>
                    <div class="mkd-default-icon-holder"></div>
                    <span class="mkd-separator-right"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="doitac_slide owl-carousel owl-theme">
                <div class="item">
                    <img src="/images/dt1.png">
                </div>
                <div class="item">
                    <img src="/images/dt2.png">
                </div>
                <div class="item">
                    <img src="/images/dt3.png">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
                $(document).ready(function () {
                    $('.doitac_slide').owlCarousel({
                        loop: true,
                        nav: false,
                        navText: [],
                        autoplay: true,
                        dots: false,
                        margin: 60,
                        responsive: {
                            0: {
                                items: 1,
                                nav: false,
                            },
                            768: {
                                items: 1,
                                nav: false,
                            },
                            992: {
                                items: 2,
                                nav: false,
                            }
                        }
                    });
                });
            </script>