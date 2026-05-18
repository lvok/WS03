<?php
    loadPartial('head');
    loadPartial('navbar');
?>

<section class="studio-page">
    <div class="studio-container-centered">
        <!-- Left Side: Massive Title & Meta -->
        <div class="studio-side">
            <h1 class="studio-title">Join the<br>Network</h1>
            
            <div class="studio-meta">
                <div class="meta-item">
                    <span class="meta-label">Community</span>
                    <span class="meta-value">Global Talent Network</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Access</span>
                    <span class="meta-value">Exclusive Listings</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Support</span>
                    <span class="meta-value">support@prosple.com</span>
                </div>
            </div>
        </div>

        <!-- Right Side: The Form -->
        <div class="studio-main">

            <?php loadPartial('errors', ['errors' => $errors ?? []]) ?>
            
            <form method="POST" action="/WS03/Public/auth/register" class="studio-form">
                <!-- Section: Personal Information -->
                <div class="studio-section">
                    <span class="studio-section-label">01. Personal Details</span>
                    
                        
                    <div class="studio-grid">
                        <div class="studio-group full">
                            <label class="studio-label" for="name">
                                <i class="fa fa-user"></i> Full Name (required)
                            </label>
                            <input type="text" id="name" name="name" class="studio-input" placeholder="John Doe" value="<?= $user['name'] ?? '' ?>" value="<?= $user['name'] ?? ''?>" />
                        </div>

                        <div class="studio-group full">
                            <label class="studio-label" for="email">
                                <i class="fa fa-envelope"></i> Email Address (required)
                            </label>
                            <input type="email" id="email" name="email" class="studio-input" placeholder="john@example.com" value="<?= $user['email'] ?? '' ?>" value="<?= $user['email'] ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="city">
                                <i class="fa fa-city"></i> City
                            </label>
                            <input type="text" id="city" name="city" class="studio-input" placeholder="e.g. New York" value="<?= $user['city'] ?? '' ?>" value="<?= $user['city'] ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="state">
                                <i class="fa fa-map-marker-alt"></i> State
                            </label>
                            <input type="text" id="state" name="state" class="studio-input" placeholder="e.g. NY" value="<?= $user['state'] ?? '' ?>" value="<?= $user['state'] ?? '' ?>" />
                        </div>
                    </div>
                </div>

                <!-- Section: Security -->
                <div class="studio-section">
                    <span class="studio-section-label">02. Security</span>
                    
                    <div class="studio-grid">
                        <div class="studio-group">
                            <label class="studio-label" for="password">
                                <i class="fa fa-lock"></i> Password
                            </label>
                            <div class="studio-input-wrapper">
                                <input type="password" id="password" name="password" class="studio-input" placeholder="Min. 8 characters" />
                                <button type="button" class="password-toggle" data-target="password">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="password_confirmation">
                                <i class="fa fa-shield-alt"></i> Confirm Password
                            </label>
                            <div class="studio-input-wrapper">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="studio-input" placeholder="Repeat password" />
                                <button type="button" class="password-toggle" data-target="password_confirmation">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="studio-actions">
                    <button type="submit" class="studio-btn-pill">Create Account</button>
                    <a href="/WS03/Public/auth/login" class="studio-btn-cancel">Already have an account? Login</a>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.password-toggle');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    });
});
</script>

<?php loadPartial('footer'); ?>