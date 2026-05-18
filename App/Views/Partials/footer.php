<footer class="site-footer-retool">
    <div class="footer-retool-container">
        <div class="footer-retool-top" data-scroll>
            <div class="footer-retool-col">
                <h4>About</h4>
                <p class="footer-about-text">
                    A simple platform for students and professionals to explore job opportunities.
                </p>
            </div>
            
            <div class="footer-retool-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/WS03/Public/">Home</a></li>
                    <li><a href="/WS03/Public/listings">Jobs</a></li>
                    <li><a href="/WS03/Public/listings/create">Post a Job</a></li>
                </ul>
            </div>

            <div class="footer-retool-col">
                <h4>Contact</h4>
                <ul>
                    <li><a href="mailto:support@prosple.com">support@prosple.com</a></li>
                    <li><a href="tel:+639123456789">+63 912 345 6789</a></li>
                    <li><span>Manila, Philippines</span></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-retool-bottom">
            <div class="footer-massive-brand-wrapper">
                <h1 class="footer-retool-brand">Prosple</h1>
            </div>
            
            <div class="footer-retool-legal">
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
                <div class="footer-copyright">&copy; PROSPLE <?= date('Y') ?></div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Reveal -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const scrollElements = document.querySelectorAll('[data-scroll]');
    if (!scrollElements.length) return;

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    scrollElements.forEach(function (el) {
        observer.observe(el);
    });
});
</script>
</body>
</html>