<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <div class="department-single padding-top-50 padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="department-content">
                            <div class="typo-line">
                                <h4 class="sub-header"><?= htmlspecialchars($page->dept_tagline ?: 'Department Overview') ?></h4>
                            </div>
                            <h2 class="header"><?= htmlspecialchars($page->title) ?></h2>
                            <br />
                            <div class="description" style="line-height: 1.8; font-size: 15px; margin-bottom: 25px;">
                                <?= nl2br(htmlspecialchars($page->dept_overview)) ?>
                            </div>

                            <?php if ($page->dept_objectives): ?>
                                <div class="dept-objectives" style="margin-top: 20px;">
                                    <h3 style="color: #2b3990; font-size: 20px; font-weight: 700; margin-bottom: 12px;">Key Objectives</h3>
                                    <div class="description" style="line-height: 1.8;">
                                        <?= nl2br(htmlspecialchars($page->dept_objectives)) ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="row padding-top-20">
                            <?php if ($page->images && count($page->images)): ?>
                                <?php foreach ($page->images as $img): ?>
                                    <div class="col-sm-12 col-md-6 playful" style="margin-bottom: 15px;">
                                        <a href="<?= $img->url ?>" class="fancybox" rel="gallery1">
                                            <figure class="softeffect">
                                                <img src="<?= $img->url ?>" class="img-responsive" style="border-radius: 6px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);" />
                                            </figure>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($page->dept_faculty && count($page->dept_faculty)): ?>
                <div class="doctor-wrapper padding-top-50">
                    <div class="container">
                        <div class="typo-line">
                            <h4 class="sub-header">Meet Our Team</h4>
                        </div>
                        <h2 class="header">Faculty Members</h2>
                        <br />

                        <div class="row">
                            <?php foreach ($page->dept_faculty as $faculty): ?>
                                <div class="col-md-6 col-sm-12" style="margin-bottom: 30px;">
                                    <div class="doctor-head-inner row" style="background: #fdfdfd; border: 1px solid #eee; border-radius: 8px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                                        <div class="col-sm-12">
                                            <div class="doctor-body">
                                                <h4 class="doctor-title" style="color: #2b3990; font-weight: 700; margin-bottom: 5px;">
                                                    <?= htmlspecialchars($faculty->member_name) ?>
                                                </h4>
                                                <div class="doctor-sub-title" style="color: #e31e24; font-weight: 600; margin-bottom: 10px;">
                                                    <?= htmlspecialchars($faculty->member_designation) ?>
                                                </div>
                                                <?php if ($faculty->member_qualification): ?>
                                                    <div class="description" style="color: #555;">
                                                        <strong>Qualification:</strong> <?= htmlspecialchars($faculty->member_qualification) ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
