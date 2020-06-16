<?php if (session()->get('validation_errors')) { ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('validation_errors')->listErrors(); ?>
    </div>
<?php } ?>

<?php if (session()->get('alert')) { ?>
    <?php $flash_alert = session()->getFlashdata('alert'); ?>
    <div class="alert alert-<?= $flash_alert['type']; ?>" role="alert">
        <?= $flash_alert['text']; ?>
    </div>
<?php } ?>