<div class="hero-box-wrapper">
    <section class="hero-section hero-box zenith-hero">
        <div class="hero-grid-bg"></div>
        <div class="container mx-auto max-w-6xl px-4 hero-grid relative z-10">
            <!-- LEFT COLUMN — Text & CTAs -->
            <div class="hero-left">
                <!-- Animated status badge -->
                <div class="hero-live-badge">
                    <span class="live-pulse"></span>
                    <span>2,400+ jobs posted this week</span>
                </div>

                <h2 class="hero-zenith-title">
                    <span class="d-block hero-text-reveal" style="animation-delay: 0s;">Discover.</span>
                    <span class="d-block hero-text-reveal" style="animation-delay: 0.15s;">Connect.</span>
                    <span class="d-block hero-text-reveal text-white" style="animation-delay: 0.3s;">Elevate.</span>
                </h2>

                <p class="hero-subtext hero-text-reveal" style="animation-delay: 0.45s;">
                    Browse opportunities from different companies and take the next step in your career journey today.
                </p>

                <!-- Fake search input -->
                <div class="hero-search-pill hero-text-reveal" style="animation-delay: 0.55s;">
                    <i class="fa fa-search"></i>
                    <span class="hero-search-typed" id="heroSearchTyped"></span>
                    <span class="hero-search-cursor">|</span>
                    <button class="hero-search-btn">Search</button>
                </div>

                <div class="hero-cta-row hero-text-reveal" style="animation-delay: 0.65s;">
                    <a href="/WS03/Public/listings" class="btn hero-btn-white">
                        Explore Jobs
                    </a>
                    <a href="/WS03/Public/listings/create" class="btn hero-btn-icon-text">
                        <span class="icon-circle"><i class="fa fa-asterisk"></i></span>
                        Post a Job
                    </a>
                </div>

                <!-- Stats row -->
                <div class="hero-stats-row hero-text-reveal" style="animation-delay: 0.75s;">
                    <div class="hero-stat">
                        <span class="hero-stat-number" data-target="12000">0</span>
                        <span class="hero-stat-label">Active Jobs</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="hero-stat-number" data-target="8500">0</span>
                        <span class="hero-stat-label">Companies</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="hero-stat-number" data-target="45000">0</span>
                        <span class="hero-stat-label">Hired</span>
                    </div>
                </div>
            </div>


        </div>

        <!-- BOTTOM OVERLAPPING DATA ROW -->
        <div class="container mx-auto max-w-6xl px-4 relative z-20 zenith-data-container">
            <div class="zenith-data-row">
                <div class="zenith-data-card">
                    <div class="data-card-header">
                        <div class="data-icon"><i class="fa fa-briefcase"></i></div>
                        <span class="data-title">Software Engineer</span>
                    </div>
                    <div class="data-card-body">
                        <span class="data-value">+12.4%</span>
                        <span class="data-trend"><i class="fa fa-arrow-trend-up"></i> Trending</span>
                    </div>
                </div>
                <div class="zenith-data-card">
                    <div class="data-card-header">
                        <div class="data-icon"><i class="fa fa-chart-line"></i></div>
                        <span class="data-title">Data Analyst</span>
                    </div>
                    <div class="data-card-body">
                        <span class="data-value">+8.2%</span>
                        <span class="data-trend"><i class="fa fa-arrow-trend-up"></i> Trending</span>
                    </div>
                </div>
                <div class="zenith-data-card data-card-dark">
                    <div class="data-card-header">
                        <div class="data-icon"><i class="fa fa-robot"></i></div>
                        <span class="data-title">Platform AI</span>
                    </div>
                    <div class="data-card-body">
                        <span class="data-value">98.5%</span>
                        <span class="data-label">Match Accuracy</span>
                    </div>
                </div>
                <div class="zenith-data-stats">
                    <div class="z-stat">
                        <span class="z-stat-val">12K+</span>
                        <span class="z-stat-lbl">Active Roles</span>
                    </div>
                    <div class="z-stat">
                        <span class="z-stat-val">24h</span>
                        <span class="z-stat-lbl">Avg Response</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trusted companies strip -->
        <div class="hero-trusted-strip">
            <span class="hero-trusted-label">Trusted by teams at</span>
            <div class="hero-trusted-logos-static">
                <div class="trusted-logo"><i class="fab fa-google"></i> Google</div>
                <div class="trusted-logo"><i class="fab fa-microsoft"></i> Microsoft</div>
                <div class="trusted-logo"><i class="fab fa-amazon"></i> Amazon</div>
                <div class="trusted-logo"><i class="fab fa-spotify"></i> Spotify</div>
                <div class="trusted-logo"><i class="fab fa-stripe"></i> Stripe</div>
                <div class="trusted-logo"><i class="fab fa-slack"></i> Slack</div>
                <div class="trusted-logo"><i class="fab fa-github"></i> GitHub</div>
                <div class="trusted-logo"><i class="fab fa-figma"></i> Figma</div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // ─── Typing effect ───
    const searchPhrases = ['UI/UX Designer in Manila', 'Remote Frontend Developer', 'Marketing Manager', 'Data Analyst — Entry Level', 'Full-Stack Engineer'];
    let phraseIdx = 0, charIdx = 0, isDeleting = false;
    const typedEl = document.getElementById('heroSearchTyped');

    function typeLoop() {
        if (!typedEl) return;
        const current = searchPhrases[phraseIdx];
        if (!isDeleting) {
            typedEl.textContent = current.substring(0, charIdx + 1);
            charIdx++;
            if (charIdx === current.length) { isDeleting = true; setTimeout(typeLoop, 1800); return; }
            setTimeout(typeLoop, 70);
        } else {
            typedEl.textContent = current.substring(0, charIdx - 1);
            charIdx--;
            if (charIdx === 0) { isDeleting = false; phraseIdx = (phraseIdx + 1) % searchPhrases.length; setTimeout(typeLoop, 400); return; }
            setTimeout(typeLoop, 35);
        }
    }
    typeLoop();

    // ─── Stat counter animation ───
    const counters = document.querySelectorAll('.hero-stat-number');
    const observerOptions = { threshold: 0.5 };
    const counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.getAttribute('data-target'));
                const duration = 2000;
                const start = performance.now();
                function tick(now) {
                    const elapsed = now - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.floor(eased * target).toLocaleString() + (progress >= 1 ? '+' : '');
                    if (progress < 1) requestAnimationFrame(tick);
                }
                requestAnimationFrame(tick);
                counterObserver.unobserve(el);
            }
        });
    }, observerOptions);
    counters.forEach(function (c) { counterObserver.observe(c); });

    // Removed particle dots and 3D tilt logic for a cleaner interface

});
</script>