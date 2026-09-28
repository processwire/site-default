<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <section class="about-us-wrapper padding-top-50 padding-bottom-50">
            <div class="container">
                <?php if ($page->page_subtitle): ?>
                    <div class="typo-line">
                        <h4 class="sub-header"><?= htmlspecialchars($page->page_subtitle) ?></h4>
                    </div>
                <?php endif; ?>
                
                <h2 class="header"><?= htmlspecialchars($page->title) ?></h2>
                <br />

                <?php if ($page->lead_intro): ?>
                    <div class="lead-intro description" style="font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                        <?= nl2br(htmlspecialchars($page->lead_intro)) ?>
                    </div>
                <?php endif; ?>

                <?php if ($page->content_blocks && count($page->content_blocks)): ?>
                    <div class="content-sections">
                        <?php foreach ($page->content_blocks as $block): ?>
                            <div class="content-block-item" style="margin-bottom: 30px;">
                                <?php if ($block->block_title): ?>
                                    <h3 class="block-title" style="color: #2b3990; font-size: 20px; font-weight: 700; margin-bottom: 12px;">
                                        <?= htmlspecialchars($block->block_title) ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($block->block_text): ?>
                                    <div class="description" style="line-height: 1.8;">
                                        <?= nl2br(htmlspecialchars($block->block_text)) ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
