<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="error-page">
    <!-- Backdrop glows -->
    <div class="job-backdrop-glow glow-purple" style="top: -10%; left: -10%;"></div>
    <div class="job-backdrop-glow glow-blue" style="bottom: -10%; right: -10%;"></div>
    
    <div class="error-bg-title"><?=$status?></div>

    <div class="error-wrap">
        <div class="error-card">
            <h1 class="error-title"><?=$message?></h1>
            <p class="error-text">
                This Page Doesn’t Exist
            </p>

            <div class="error-actions">
                <a href="/WS03/Public/listings" class="btn error-btn-primary">
                    Back to listings
                </a>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>