  <div class="icon-fixed-right post-sidebar">
    <div class="widget-title">
      <p>Liên hệ với chúng tôi</p>
    </div>
    <div class="widget-img">
      <strong>
        <img src="/images/bg-support.png">
      </strong>
    </div>
                <?php include DIR_CONTACT."MS_CONTACT_CUANHOM_0005.php";?>

    
</div>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        if ($(window).width() >= 992) {
            $(".icon-fixed-right").sticky({topSpacing:15,bottomSpacing:815});
        } else {
            $(".icon-fixed-right").trigger('sticky.destroy');
        }
    });
</script>
