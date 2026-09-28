<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';

$headers = [];
if ($page->table_headers) {
    $headers = array_map('trim', explode(',', $page->table_headers));
}
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <section class="padding-top-50 padding-bottom-50">
            <div class="container">
                <div class="row text-center">
                    <?php if ($page->document_note): ?>
                        <div class="typo-line" style="margin-bottom: 30px;">
                            <h2 class="header" style="font-size: 24px; margin-top: 20px;">
                                <?= htmlspecialchars($page->document_note) ?>
                            </h2>
                        </div>
                    <?php else: ?>
                        <div class="typo-line" style="margin-bottom: 30px;">
                            <h2 class="header" style="font-size: 26px; margin-top: 20px;">
                                <?= htmlspecialchars($page->title) ?>
                            </h2>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="minimalistBlack" style="width: 100%; margin-top: 20px; border-collapse: collapse;">
                                <?php if (count($headers)): ?>
                                    <thead>
                                        <tr>
                                            <?php foreach ($headers as $th): ?>
                                                <th style="padding: 12px 16px; font-weight: bold; background-color: #2b3990; color: #fff; text-align: left;">
                                                    <?= htmlspecialchars($th) ?>
                                                </th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                <?php endif; ?>
                                <tbody>
                                    <?php if ($page->table_rows && count($page->table_rows)): ?>
                                        <?php foreach ($page->table_rows as $row): ?>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                                <?php if ($row->cell_1 !== ''): ?>
                                                    <td style="padding: 12px 16px; text-align: left; vertical-align: top;">
                                                        <?= nl2br(htmlspecialchars($row->cell_1)) ?>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($row->cell_2 !== ''): ?>
                                                    <td style="padding: 12px 16px; text-align: left; vertical-align: top;">
                                                        <?= nl2br(htmlspecialchars($row->cell_2)) ?>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($row->cell_3 !== ''): ?>
                                                    <td style="padding: 12px 16px; text-align: left; vertical-align: top;">
                                                        <?= nl2br(htmlspecialchars($row->cell_3)) ?>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($row->cell_4 !== ''): ?>
                                                    <td style="padding: 12px 16px; text-align: left; vertical-align: top;">
                                                        <?= nl2br(htmlspecialchars($row->cell_4)) ?>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($row->cell_5 !== ''): ?>
                                                    <td style="padding: 12px 16px; text-align: left; vertical-align: top;">
                                                        <?= nl2br(htmlspecialchars($row->cell_5)) ?>
                                                    </td>
                                                <?php endif; ?>
                                                <?php if ($row->cell_link): ?>
                                                    <td style="padding: 12px 16px; text-align: center; vertical-align: top;">
                                                        <a href="<?= htmlspecialchars($row->cell_link) ?>" target="_blank" class="btn btn-sm btn-primary" style="padding: 4px 12px; font-size: 13px;">
                                                            <i class="fa fa-file-pdf-o"></i> View / Download
                                                        </a>
                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
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
