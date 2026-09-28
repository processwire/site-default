<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <section class="gallery-wrapper gallery-3col padding-top-20 padding-bottom-100">
            <div class="whatwedo padding-top-20 padding-bottom-0">
                <div class="container">
                    <div class="typo-line">
                        <h2 class="header"><?= htmlspecialchars($page->title) ?></h2>
                    </div>
                </div>
                
                <div class="container">
                    <?php if ($page->lead_intro): ?>
                        <div class="lead-intro description" style="margin-bottom: 25px;">
                            <?= nl2br(htmlspecialchars($page->lead_intro)) ?>
                        </div>
                    <?php endif; ?>

                    <div class="row padding-top-20">
                        <div class="col-sm-12">
                            <div id="galleryContainer" class="galleryContainer" style="display: flex; flex-wrap: wrap; gap: 20px;">
                                <?php if ($page->images && count($page->images)): ?>
                                    <?php foreach ($page->images as $img): ?>
                                        <div style="flex: 1 1 calc(33.333% - 20px); min-width: 280px; position: relative; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                                            <a href="<?= $img->url ?>" data-fancybox-group="galleryDepartment" class="fancybox link-gallery" title="<?= htmlspecialchars($img->description ?: $page->title) ?>">
                                                <img src="<?= $img->url ?>" alt="<?= htmlspecialchars($img->description ?: $page->title) ?>" class="img-responsive" style="width: 100%; height: 240px; object-fit: cover; display: block;" />
                                                <div class="hover-effect" style="position: absolute; inset: 0; background: rgba(43, 57, 144, 0.6); opacity: 0; transition: opacity 0.3s; display: flex; align-items: center; justify-content: center;">
                                                    <i class="fa fa-search-plus" style="color: #fff; font-size: 28px;"></i>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<style>
.galleryContainer div:hover .hover-effect {
    opacity: 1 !important;
}
</style>
<?php
include './includes/footer.inc.php';
?>
