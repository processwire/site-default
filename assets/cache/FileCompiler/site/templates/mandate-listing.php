<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <section class="padding-top-50 padding-bottom-50">
            <div class="container">
                <div class="row text-center">
                    <div class="typo-line" style="margin-bottom: 30px;">
                        <h2 class="header" style="font-size: 26px; margin-top: 20px;">
                            <?= htmlspecialchars($page->title) ?>
                        </h2>
                    </div>

                    <?php if ($page->lead_intro): ?>
                        <div class="lead-intro description" style="font-size: 16px; line-height: 1.8; margin-bottom: 25px; text-align: left;">
                            <?= nl2br(htmlspecialchars($page->lead_intro)) ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($page->mandate_documents && count($page->mandate_documents)): ?>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table font-bold minimalistBlack" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                                    <thead>
                                        <tr class="text-center" style="background-color: #2b3990; color: #fff;">
                                            <th style="padding: 12px; width: 20%;">Annexure / Document No.</th>
                                            <th style="padding: 12px; text-align: left;">Title / Description</th>
                                            <th style="padding: 12px; width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($page->mandate_documents as $doc): ?>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <td style="padding: 12px; font-weight: bold; text-align: center; vertical-align: middle;">
                                                    <?= htmlspecialchars($doc->annexure_code) ?>
                                                </td>
                                                <td style="padding: 12px; text-align: left; vertical-align: middle;">
                                                    <?= nl2br(htmlspecialchars($doc->annexure_title)) ?>
                                                </td>
                                                <td style="padding: 12px; text-align: center; vertical-align: middle;">
                                                    <?php if ($doc->annexure_url): ?>
                                                        <a href="<?= htmlspecialchars($doc->annexure_url) ?>" target="_blank" class="btn btn-sm btn-primary" style="padding: 5px 15px; font-size: 13px;">
                                                            <i class="fa fa-file-pdf-o"></i> View Document
                                                        </a>
                                                    <?php else: ?>
                                                        <span class="text-muted">-</span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
