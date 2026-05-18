<section class="impact-banner-wrapper">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="impact-cta-banner" data-scroll>
            <span class="impact-badge">Employers & Fast-Growing Teams</span>
            <h2 class="impact-title">HIRE THE TOP 1%</h2>
            <p class="impact-desc">
                Stop sifting through resumes. Connect instantly with pre-vetted, elite talent ready to elevate your team.
            </p>
            <div class="impact-actions">
                <?php if(\Framework\Session::has('user')) : ?>
                    <a href="/WS03/Public/listings/create" class="btn-impact-primary">
                        Start Hiring Now <i class="fa fa-arrow-right"></i>
                    </a>
                <?php else : ?>
                    <a href="/WS03/Public/auth/login" class="btn-impact-primary">
                        Login to Post a Job <i class="fa fa-sign-in-alt"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>