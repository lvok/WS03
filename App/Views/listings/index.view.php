<?php
loadPartial('head');
loadPartial('navbar');
?>
<?php loadPartial('topBanner'); ?>


<section class="jobs-section">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="jobs-section-header">
            <span class="jobs-section-badge">All Opportunities</span>
            <h1 class="jobs-section-title">Browse All Jobs</h1>
            <p class="jobs-section-subtitle">
                Explore available openings across engineering, design, marketing, and data roles.
            </p>
        </div>

        <div class="jobs-grid">
            <?php foreach($listings as $listing) : ?>
            <article class="job-card" style="animation-delay: 0.05s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category"><?= $listing->title ?></span>
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
        <div class="back-link-wrap">
            <a href="/WS03/Public/" class="back-link">
                <i class="fa fa-arrow-left"></i>
                <span>Back to Home</span>
            </a>
        </div>
    </div>



</section>



<?php
loadPartial('footer');
?>