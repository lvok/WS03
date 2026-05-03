<?php
    loadPartial('head');
    loadPartial('navbar');
    loadPartial('showcase');
?>

<section class="cta-section">
    <!-- Background effects -->
    <div class="cta-glow cta-glow--1"></div>
    <div class="cta-glow cta-glow--2"></div>
    <div class="cta-overlay"></div>
    <div class="cta-texture"></div>

    <div class="container mx-auto max-w-6xl px-4 cta-inner">
        <span class="cta-eyebrow">
            <i class="fa fa-compass"></i>
            Browse Openings
        </span>

        <h2 class="cta-heading">
            Available <span class="cta-heading-accent">Opportunities</span>
        </h2>

        <p class="cta-supporting">
            Explore job openings from different categories and companies.
        </p>

        <div class="cta-actions">
            <a href="/WS03/Public/listings" class="btn cta-btn-primary">
                <i class="fa fa-arrow-right"></i>
                View All Jobs
            </a>
        </div>
    </div>
</section>

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
    <div class="job-backdrop-glow glow-purple"></div>

    <div class="container mx-auto max-w-6xl px-4 relative z-10">
        <div class="jobs-section-header">
            <span class="jobs-section-badge-glass">LATEST JOBS</span>
            <h2 class="jobs-section-title">Recent Listings</h2>
            <p class="jobs-section-subtitle">
                Here are some of the recently posted job opportunities.
            </p>
        </div>

        <div class="jobs-grid">
            <article class="job-card" style="animation-delay: 0.05s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Engineering</span>
                        <span class="job-badge badge-local">Local</span>
                    </div>
                    <h3 class="job-card-title">Software Engineer</h3>
                    <p class="job-card-description">Develop software applications and support technical projects.</p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$80,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">New York</span>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-btn-glass-full">View Details</a>
                </div>
            </article>

            <article class="job-card" style="animation-delay: 0.15s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Marketing</span>
                        <span class="job-badge badge-remote">Remote</span>
                    </div>
                    <h3 class="job-card-title">Marketing Specialist</h3>
                    <p class="job-card-description">Assist in planning and managing company marketing activities.</p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$70,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">San Francisco</span>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-btn-glass-full">View Details</a>
                </div>
            </article>

            <article class="job-card" style="animation-delay: 0.25s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Web</span>
                        <span class="job-badge badge-local">Local</span>
                    </div>
                    <h3 class="job-card-title">Web Developer</h3>
                    <p class="job-card-description">Build and maintain websites and business web applications.</p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$75,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Los Angeles</span>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-btn-glass-full">View Details</a>
                </div>
            </article>

            <article class="job-card" style="animation-delay: 0.35s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Analytics</span>
                        <span class="job-badge badge-remote">Remote</span>
                    </div>
                    <h3 class="job-card-title">Data Analyst</h3>
                    <p class="job-card-description">
                        We are hiring a Data Analyst to analyze and interpret data for insights.
                    </p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$65,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Chicago</span>
                        </div>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <span class="job-tag">Data Analysis</span>
                                <span class="job-tag">Statistics</span>
                            </div>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-btn-glass-full">View Details</a>
                </div>
            </article>

            <article class="job-card" style="animation-delay: 0.45s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Design</span>
                        <span class="job-badge badge-local">Local</span>
                    </div>
                    <h3 class="job-card-title">Graphic Designer</h3>
                    <p class="job-card-description">
                        Join our creative team as a Graphic Designer and bring ideas to life.
                    </p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$60,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Miami</span>
                        </div>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <span class="job-tag">Graphic Design</span>
                                <span class="job-tag">Creative</span>
                            </div>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-btn-glass-full">View Details</a>
                </div>
            </article>

            <article class="job-card" style="animation-delay: 0.55s;">
                <div class="job-card-content">
                    <div class="job-card-top">
                        <span class="job-card-category">Data Science</span>
                        <span class="job-badge badge-remote">Remote</span>
                    </div>
                    <h3 class="job-card-title">Data Scientist</h3>
                    <p class="job-card-description">
                        We're looking for a Data Scientist to analyze complex data and generate insights.
                    </p>
                    <div class="job-meta-glass">
                        <div class="job-meta-row">
                            <span class="job-meta-label">Salary</span>
                            <span class="job-salary">$90,000</span>
                        </div>
                        <div class="job-meta-row">
                            <span class="job-meta-label">Location</span>
                            <span class="job-location">Seattle</span>
                        </div>
                        <div class="job-meta-row job-tags-row">
                            <span class="job-meta-label">Tags</span>
                            <div class="job-tags">
                                <span class="job-tag">Data Science</span>
                                <span class="job-tag">Machine Learning</span>
                            </div>
                        </div>
                    </div>
                    <a href="/WS03/Public/listings/details" class="job-btn-glass-full">View Details</a>
                </div>
            </article>
        </div>

        <div class="jobs-footer-link-wrap">
            <a href="/WS03/Public/listings" class="jobs-footer-link">
                <span>Show All Jobs</span>
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<section class="bottom-cta-section">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="cta-banner-glass">
            <div class="cta-banner-content">
                <h2 class="cta-banner-title">Post a Job Opening</h2>
                <p class="cta-banner-text">Share your job listing and reach thousands of applicants today.</p>
            </div>

            <a href="/WS03/Public/listings/create" class="btn btn-primary hero-btn-white">
                <i class="fa fa-edit"></i>
                Post a Job
            </a>
        </div>
    </div>
</section>

<?php
loadPartial('footer');
?>