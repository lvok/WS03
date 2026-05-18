<?php if(isset($errors)) : ?>
    <?php foreach($errors as $error) : ?>
        <div class="studio-alert studio-alert-error">
            <i class="fa fa-exclamation-circle"></i>
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>