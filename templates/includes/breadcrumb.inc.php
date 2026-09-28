<?php namespace ProcessWire; ?>
<section class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-wrapper">
            <h2 class="breadcrumb-text"><?= htmlspecialchars($page->title) ?></h2>
            <ol class="breadcrumb-content">
                <li class="breadcrumb-list"><a href="<?= $rootUrl ?>" class="breadcrumb-link">Home</a></li>
                <?php foreach ($page->parents()->not("id=1") as $parentPage): ?>
                    <li class="breadcrumb-list"><a href="<?= $parentPage->url ?>" class="breadcrumb-link"><?= htmlspecialchars($parentPage->title) ?></a></li>
                <?php endforeach; ?>
                <li class="breadcrumb-list active"><?= htmlspecialchars($page->title) ?></li>
            </ol>
        </div>
    </div>
</section>
