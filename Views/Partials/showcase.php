<div class="hero-box-wrapper">
    <section class="hero-section hero-box">
        <!-- Background glow blobs -->
        <div class="hero-glow hero-glow--1"></div>
        <div class="hero-glow hero-glow--2"></div>
        <div class="hero-overlay"></div>

        <div class="container mx-auto max-w-6xl px-4 hero-grid">
            <!-- LEFT COLUMN — Text & CTAs -->
            <div class="hero-left">
                <h2 class="hero-headline">
                    <span class="d-block">Find.</span>
                    <span class="d-block">Match.</span>
                    <span class="d-block">Succeed.</span>
                </h2>

                <p class="hero-subtext">
                    Browse opportunities from different companies and take the next step in your career journey today.
                </p>

                <form method="GET" action="/WS03/Public/listings" class="hero-search-form">
                    <div class="search-input-group">
                        <i class="fa fa-search search-icon"></i>
                        <input type="text" name="keywords" placeholder="Job title or keyword" class="search-input">
                    </div>
                    <div class="search-divider"></div>
                    <div class="search-input-group">
                        <i class="fa fa-map-marker-alt search-icon"></i>
                        <input type="text" name="location" placeholder="Location" class="search-input">
                    </div>
                    <button type="submit" class="search-btn">
                        Search
                    </button>
                </form>

                <div class="hero-cta-row">
                    <a href="/WS03/Public/listings" class="btn hero-btn-white">
                        Explore Jobs
                    </a>
                    <a href="/WS03/Public/listings/create" class="btn hero-btn-icon-text">
                        <span class="icon-circle"><i class="fa fa-asterisk"></i></span>
                        Post a Job
                    </a>
                </div>
            </div>

            <!-- RIGHT COLUMN — 3D Asset -->
            <div class="hero-right">
                <div class="hero-3d-wrapper">
                    <img src="/WS03/Public/hero/hero_job_icon.png" alt="3D Glass Job Icon" class="hero-3d-image">
                </div>
            </div>
        </div>
    </section>
</div>