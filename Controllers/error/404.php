<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="error-page">
    <!-- Backdrop glows -->
    <div class="job-backdrop-glow glow-purple" style="top: -10%; left: -10%;"></div>
    <div class="job-backdrop-glow glow-blue" style="bottom: -10%; right: -10%;"></div>
    
    <div class="error-bg-title">404</div>

    <div class="error-wrap">
        <div class="error-card">
            <div class="error-icon-wrap">
                <div class="error-icon-spin">
                    <i class="fa fa-ghost"></i>
                </div>
            </div>

            <span class="error-badge">Error 404</span>
            <h1 class="error-title">Page Not Found</h1>
            <p class="error-text">
                The page you are looking for has vanished into the digital void. Don't worry, even the best explorers get lost sometimes.
            </p>

            <div class="error-actions">
                <a href="/WS03/Public/" class="btn error-btn-primary">
                    <i class="fa fa-house"></i>
                    Back to Home
                </a>

                <a href="/WS03/Public/listings" class="btn error-btn-secondary">
                    <i class="fa fa-briefcase"></i>
                    Browse Jobs
                </a>
            </div>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>