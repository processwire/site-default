<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <section class="contact-wrapper padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="contact-content">
                        <div class="col-md-4 col-sm-4 col-xs-12 item">
                            <div class="contact-info">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-map-marker"></i><i class="icon2 fa fa-map-marker"></i></div>
                                <div class="line"></div>
                                <div class="contact-title">Our Address</div>
                                <div class="description">
                                    <?= nl2br(htmlspecialchars($settings->setting_address ?: "D Y Patil Dental School,\nD Y Patil Knowledge city,\nCharoli(bk), Pune-412105")) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 item">
                            <div class="contact-info">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-envelope"></i><i class="icon2 fa fa-envelope"></i></div>
                                <div class="line"></div>
                                <div class="contact-title">Email Address</div>
                                <div class="description">
                                    <a href="mailto:<?= htmlspecialchars($settings->setting_email ?: 'dean@dypds.com') ?>">
                                        <?= htmlspecialchars($settings->setting_email ?: 'dean@dypds.com') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 item">
                            <div class="contact-info">
                                <div class="btn-for-icon bottom"><i class="icon1 fa fa-phone"></i><i class="icon2 fa fa-phone"></i></div>
                                <div class="line"></div>
                                <div class="contact-title">Phone Number</div>
                                <div class="description">
                                    <a href="tel:<?= preg_replace('/[^0-9]/', '', $settings->setting_phone ?: '02035037848') ?>">
                                        <?= htmlspecialchars($settings->setting_phone ?: '020 – 35037848') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
