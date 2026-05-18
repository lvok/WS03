<?php
$isListingsPage = strpos($_SERVER['REQUEST_URI'], '/listings') !== false;
$btnText = $isListingsPage ? 'Go Back to Home' : 'Browse Opportunities';
$btnLink = $isListingsPage ? '/WS03/Public/' : '/WS03/Public/listings';
?>
<section class="top-banner-section">
    <div class="top-banner-bg" style="background-image: url('/WS03/Public/images/banner-bg.png');"></div>
    <div class="container mx-auto max-w-6xl px-4 relative z-10">
        <div class="top-banner-wrapper" data-scroll>
            <div class="top-banner-left">
                <span class="top-banner-badge"><i class="fa fa-bolt"></i> Elevate Your Career</span>
                <h2 class="top-banner-title">Discover roles at leading tech companies.</h2>
                <p class="top-banner-desc">Explore curated opportunities from the most innovative companies worldwide. Find a workplace where you can thrive.</p>
                
                <div class="top-banner-actions">
                    <a href="<?= $btnLink ?>" class="btn top-banner-btn-primary">
                        <?php if ($isListingsPage): ?>
                            <i class="fa fa-arrow-left"></i> <?= $btnText ?>
                        <?php else: ?>
                            <?= $btnText ?> <i class="fa fa-arrow-right"></i>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
            
            <div class="top-banner-right">
                <div class="top-banner-stats-box">
                    <div class="tb-stat-item">
                        <span class="tb-stat-num">200+</span>
                        <span class="tb-stat-text">New jobs daily</span>
                    </div>
                    <div class="tb-stat-divider"></div>
                    <div class="tb-stat-item">
                        <span class="tb-stat-num">50k+</span>
                        <span class="tb-stat-text">Active hiring managers</span>
                    </div>
                    <div class="tb-stat-divider"></div>
                    <div class="tb-stat-item">
                        <span class="tb-stat-num">98%</span>
                        <span class="tb-stat-text">Success rate</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
