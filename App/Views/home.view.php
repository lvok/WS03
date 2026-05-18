<?php
    loadPartial('head');
    loadPartial('navbar');
    loadPartial('showcase');
?>

<?php loadPartial('topBanner'); ?>

<!-- Job Marquee Scroller -->
<div class="job-marquee-wrapper">
    <div class="job-marquee-content">
        <span class="marquee-item"><i class="fa fa-briefcase"></i> Software Engineer</span>
        <span class="marquee-item"><i class="fa fa-chart-line"></i> Marketing Specialist</span>
        <span class="marquee-item"><i class="fa fa-code"></i> Web Developer</span>
        <span class="marquee-item"><i class="fa fa-database"></i> Data Analyst</span>
        <span class="marquee-item"><i class="fa fa-pen-nib"></i> Graphic Designer</span>
        <span class="marquee-item"><i class="fa fa-microchip"></i> Data Scientist</span>
        <!-- Duplicate for loop -->
        <span class="marquee-item"><i class="fa fa-briefcase"></i> Software Engineer</span>
        <span class="marquee-item"><i class="fa fa-chart-line"></i> Marketing Specialist</span>
        <span class="marquee-item"><i class="fa fa-code"></i> Web Developer</span>
        <span class="marquee-item"><i class="fa fa-database"></i> Data Analyst</span>
        <span class="marquee-item"><i class="fa fa-pen-nib"></i> Graphic Designer</span>
        <span class="marquee-item"><i class="fa fa-microchip"></i> Data Scientist</span>
    </div>
</div>

<section class="jobs-section">

    <div class="container mx-auto max-w-6xl px-4 relative z-10">
        <div class="jobs-section-header" data-scroll>
            <span class="jobs-section-badge-glass">LATEST JOBS</span>
            <div class="jobs-title-container">
                <h2 class="jobs-background-title">Recent Listings</h2>
            </div>
        </div>
    
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

        <div class="jobs-footer-link-wrap" data-scroll>
            <a href="/WS03/Public/listings" class="jobs-footer-link">
                <span>Show All Jobs</span>
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<?php loadPartial('bottomBanner'); ?>

<?php
loadPartial('footer');
?>