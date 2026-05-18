<?php 

use Framework\Session;


?>
<?php $successMessage = Session::getFlashMessage('success');

?>
<?php if($successMessage !== null) : ?>
                <div class="studio-alert studio-alert-success">
                    <i class="fa fa-check-circle"></i>
                    <?= $successMessage ?>
                </div>
<?php endif; ?>

<?php $errorMessage = Session::getFlashMessage('error');

?>
<?php if($errorMessage !== null) : ?>
                <div class="studio-alert studio-alert-error">
                    <i class="fa fa-exclamation-circle"></i>
                    <?= $errorMessage ?>
                </div>
<?php endif; ?>

<?php if(isset($errors)) : ?>
                        <?php foreach($errors as $error) : ?>
                            <div class="studio-alert studio-alert-error">
                                <i class="fa fa-exclamation-circle"></i>
                                <?= $error ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
