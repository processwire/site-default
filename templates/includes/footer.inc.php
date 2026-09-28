<?php namespace ProcessWire; ?>
<!-- FOOTER-->
<footer class="inner-page-footer">
    <div class="footer-enquiry-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="footer-enquiry-card">
                        <span class="enquiry-subtitle">FOR ADMISSION ENQUIRY</span>
                        <!-- <h3 class="enquiry-main"><a href="tel:8237901176">8237901176</a></h3> -->
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="footer-enquiry-card">
                        <span class="enquiry-subtitle">SEND EMAIL FOR ENQUIRY</span>
                        <h3 class="enquiry-main"><a href="mailto:<?= htmlspecialchars($settings->setting_email ?: "dean@dypds.com") ?>"><?= htmlspecialchars($settings->setting_email ?: "dean@dypds.com") ?></a></h3>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-copyright">
        <div class="container">
            <div class="text-center"><?= htmlspecialchars($settings->setting_copyright ?: "&copy; 2024 BY DYPDS. ALL RIGHT RESERVE.") ?></div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<script src="<?= $rootUrl ?>assets/libs/jquery/jquery-2.2.3.min.js"></script>
<script src="<?= $rootUrl ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $rootUrl ?>assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= $rootUrl ?>assets/libs/detect-browser/browser.js"></script>
<script src="<?= $rootUrl ?>assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="<?= $rootUrl ?>assets/libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="<?= $rootUrl ?>assets/libs/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script src="<?= $rootUrl ?>assets/libs/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script src="<?= $rootUrl ?>assets/libs/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script src="<?= $rootUrl ?>assets/libs/wow-js/wow.min.js"></script>
<script src="<?= $rootUrl ?>assets/libs/slick-slider/slick.min.js"></script>
<script src="<?= $rootUrl ?>assets/libs/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= $rootUrl ?>assets/libs/jquery.vticker.js"></script>
<script src="<?= $rootUrl ?>assets/libs/jquery.appear.js"></script>
<script src="<?= $rootUrl ?>assets/libs/jquery.countTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<!-- MAIN JS-->
<script src="<?= $rootUrl ?>assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        if ($.fn.fancybox) {
            $(".fancybox").fancybox({
                openEffect: 'none',
                closeEffect: 'none'
            });
        }
    });
</script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="<?= $rootUrl ?>assets/js/header.js"></script>
<style>
    .breadcrumb .breadcrumb-text {
        font-size: 50px;
    }
</style>