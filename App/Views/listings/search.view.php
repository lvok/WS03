<?php
loadPartial('head');
loadPartial('navbar');
?>
<?php loadPartial('topBanner'); ?>

<section class="jobs-section">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="jobs-section-header" data-scroll>
            <span class="jobs-section-badge">Search Results</span>
            <h1 class="jobs-section-title">
                <?php if ($keyword !== '' || $location !== ''): ?>
                    Results
                    <?php if ($keyword !== ''): ?>
                        for "<?= htmlspecialchars($keyword) ?>"
                    <?php endif; ?>
                    <?php if ($location !== ''): ?>
                        in "<?= htmlspecialchars($location) ?>"
                    <?php endif; ?>
                <?php else: ?>
                    All Jobs
                <?php endif; ?>
            </h1>

            <?php loadPartial('message') ?>

            <p class="jobs-section-subtitle">
                <?= count($listings) ?> listing<?= count($listings) !== 1 ? 's' : '' ?> found.
            </p>

            <!-- Search Form (pre-filled) -->
            <form action="/WS03/Public/listings/search" method="GET" class="hero-search-form" id="listing-search-form">
                <div class="search-input-group">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" name="keyword" class="search-input" placeholder="Job title, keyword, or company" id="search-keyword" value="<?= htmlspecialchars($keyword) ?>">
                </div>
                <div class="search-divider"></div>
                <div class="search-input-group">
                    <i class="fa fa-map-marker-alt search-icon"></i>
                    <input type="text" name="location" class="search-input" placeholder="City or state" id="search-location" value="<?= htmlspecialchars($location) ?>">
                </div>
                <button type="submit" class="search-btn" id="search-submit">Search</button>
            </form>
        </div>

        <?php if (count($listings) > 0): ?>
        <div class="jobs-grid">
            <?php foreach($listings as $listing) : ?>
            <article class="job-card" data-scroll style="animation-delay: 0.05s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category"><?= $listing->company ?></span>
                        <span class="job-badge badge-local">Local</span>
                    </div>
                    <h3 class="job-card-title"><?=$listing->title ?></h3>
                    <p class="job-card-description"><?=$listing->description ?></p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary"><?= formatSalary($listing->salary) ?></span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location"><?=$listing->city ?>, <?=$listing->state ?></span>
                        </div>          
                        <?php if (!empty($listing->tags)): ?>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <?php foreach (explode(',', $listing->tags) as $tag): ?>
                                    <span class="job-tag"><?= trim($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <a href="/WS03/Public/listings/<?= $listing->id ?? '' ?>" class="job-btn-glass-full">View Details</a>
                </div>           
            </article>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div style="text-align: center; padding: 4rem 0;">
            <div style="margin-bottom: 1.5rem;">
                <i class="fa fa-search" style="font-size: 3rem; color: rgba(255,255,255,0.15);"></i>
            </div>
            <h3 style="color: rgba(255,255,255,0.6); font-size: 1.4rem; font-weight: 600; margin-bottom: 0.75rem; font-family: var(--font-display);">No listings found</h3>
            <p style="color: rgba(255,255,255,0.35); font-size: 1rem; font-family: var(--font-body); max-width: 400px; margin: 0 auto;">
                Try adjusting your search terms or browse all available listings.
            </p>
        </div>
        <?php endif; ?>

        <div class="back-link-wrap">
            <a href="/WS03/Public/listings" class="back-link">
                <i class="fa fa-arrow-left"></i>
                <span>Back to All Listings</span>
            </a>
        </div>
    </div>
</section>

<?php
loadPartial('footer');
?>
