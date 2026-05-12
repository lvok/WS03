<?php
    loadPartial('head');
    loadPartial('navbar');
    loadPartial('topBanner');
?>

<!-- Listing Detail -->
<section class="listing-detail-section">
    <div class="container mx-auto max-w-6xl px-4 relative z-10">

        <!-- Back Navigation -->
        <div class="listing-back-wrap">
            <a href="/WS03/Public/listings" class="listing-back-link">
                <i class="fa fa-arrow-left"></i>
                <span>Back To Listings</span>
            </a>
        </div>

        <div class="listing-detail-grid">
            <!-- Main Content Column -->
            <div class="listing-main-col">
                <!-- Header Card -->
                <div class="listing-header-card">
                    <div class="listing-header-top">
                        <span class="job-card-category"><?= $listing->title ?></span>
                        <span class="job-badge badge-local">Local</span>
                    </div>
                    <h1 class="listing-detail-title"><?= $listing->title ?></h1>
                    <p class="listing-detail-desc"><?= $listing->description ?></p>

                    <div class="listing-meta-strip">
                        <div class="listing-meta-item">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary"><?= formatSalary($listing->salary) ?></span>
                        </div>
                        <div class="listing-meta-divider"></div>
                        <div class="listing-meta-item">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location"><?= $listing->city ?>, <?= $listing->state ?></span>
                        </div>
                        <?php if (!empty($listing->tags)): ?>
                        <div class="listing-meta-divider"></div>
                        <div class="listing-meta-item listing-meta-tags">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <?php foreach (explode(',', $listing->tags) as $tag): ?>
                                    <span class="job-tag"><?= trim($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Details Card -->
                <div class="listing-details-card">
                    <div class="listing-details-section">
                        <h3 class="listing-section-title">
                            <i class="fa fa-clipboard-list"></i>
                            Job Requirements
                        </h3>
                        <p class="listing-section-text"><?= $listing->requirements ?></p>
                    </div>

                    <div class="listing-details-divider"></div>

                    <div class="listing-details-section">
                        <h3 class="listing-section-title">
                            <i class="fa fa-gift"></i>
                            Benefits
                        </h3>
                        <p class="listing-section-text"><?= $listing->benefits ?></p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="listing-sidebar-col">
                <!-- Apply Card -->
                <div class="listing-apply-card">
                    <div class="listing-apply-icon">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <h3 class="listing-apply-title">Interested in this role?</h3>
                    <p class="listing-apply-text">
                        Put "Job Application" as the subject of your email and attach your resume.
                    </p>
                    <a href="mailto:<?= $listing->email ?>" class="listing-apply-btn">
                        <i class="fa fa-envelope"></i>
                        Apply Now
                    </a>
                    <span class="listing-apply-email"><?= $listing->email ?></span>
                </div>

                <!-- Actions Card -->
                <div class="listing-actions-card">
                    <a href="/WS03/Public/listings/edit/<?= $listing->id ?>" class="listing-action-btn listing-action-edit">
                        <i class="fa fa-pen"></i>
                        Edit Listing
                    </a>
                    <form method="POST" class="listing-action-form">
                        <button type="submit" class="listing-action-btn listing-action-delete">
                            <i class="fa fa-trash"></i>
                            Delete Listing
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
    loadPartial('footer');
?>