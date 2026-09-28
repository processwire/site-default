<?php namespace ProcessWire;
include './includes/head.inc.php';
include './includes/header.inc.php';
?>
<div id="wrapper-content">
    <div class="main-content">
        <?php include './includes/breadcrumb.inc.php'; ?>
        
        <div class="about-us-content padding-top-20 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <h2 class="post-title"><?= htmlspecialchars($page->leader_name ?: $page->title) ?></h2>
                        <?php if ($page->leader_designation): ?>
                            <div class="typo-line">
                                <h4 class="sub-header"><?= htmlspecialchars($page->leader_designation) ?></h4>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($page->leader_quote): ?>
                            <div class="leader-quote" style="font-style: italic; font-size: 17px; margin-bottom: 20px; color: #555;">
                                "<?= htmlspecialchars($page->leader_quote) ?>"
                            </div>
                        <?php endif; ?>

                        <div class="description" style="line-height: 1.8; font-size: 15px;">
                            <?= nl2br(htmlspecialchars($page->leader_message)) ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <?php 
                        $photoUrl = '';
                        if ($page->images && count($page->images)) {
                            $photoUrl = $page->images->first()->url;
                        } else if ($page->name === 'about-us-message-from-chairman') {
                            $photoUrl = $rootUrl . 'assets/images/ajeenkya-patil.jpg';
                        } else if ($page->name === 'about-us-message-from-principal') {
                            $photoUrl = $rootUrl . 'assets/images/anand-shigli.JPG';
                        } else if ($page->name === 'about-us-message-director') {
                            $photoUrl = $rootUrl . 'assets/images/director.jpg';
                        }
                        if ($photoUrl): ?>
                            <img src="<?= $photoUrl ?>" alt="<?= htmlspecialchars($page->leader_name) ?>" class="img-responsive img-Disp" style="border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
