<?php
?>
<div class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>Copyright &copy; <?php echo date('Y'); ?> Weston Ledford | All Rights Reserved</p>
            </div>

        </div>
    </div>
</div>

<div class="cookie-bar is-active" data-cookie-bar="">
    <div class="container cookie-bar__container">
        <a class="cookie-bar__logo" href="#"> <img style="width: 40px;" src="/wp-content/uploads/2023/11/US_flag_51_stars.svg_.png" class="cookie-bar__logo-image" alt=""> </a>
        <div class="cookie-bar__wrap">
            <div class="cookie-bar__content">
                <p>We use cookies to provide necessary website functionality, improve your experience and analyze our traffic. Please check our <a href="/gdpr.php">Privacy Policy</a>.</p>
            </div>
            <div class="cookie-bar__actions"> <button type="button" class="cookie-bar__button" style="color: #000;" data-close-action=""> OK </button></div>
        </div>
    </div>
</div>
<?php
wp_footer();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    jQuery(".cookie-bar__button").on("click", function() {
        jQuery.cookie('HideCookieMessage', 'true', { expires: 120, path: '/'});
        jQuery('.cookie-bar').hide();
    });
    (function (jQuery) {
        if (jQuery.cookie('HideCookieMessage')) { jQuery('.cookie-bar').hide(); } else {
            jQuery('.cookie-bar').show(); }
    })(jQuery);
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('.your-class').slick({
            dots: true,
            infinite: true,
            prevArrow: jQuery('.prev'),
            nextArrow: jQuery('.next'),
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
    });
    });
</script>
</body>
</html>