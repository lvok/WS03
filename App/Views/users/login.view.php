<?php
    loadPartial('head');
    loadPartial('navbar');
?>

<section class="studio-page">
    <div class="studio-container-centered">
        <!-- Left Side: Massive Title & Meta -->
        <div class="studio-side">
            <h1 class="studio-title">Welcome<br>Back</h1>
            
            <div class="studio-meta">
                <div class="meta-item">
                    <span class="meta-label">Access</span>
                    <span class="meta-value">Member Dashboard</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Security</span>
                    <span class="meta-value">Encrypted Session</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Help</span>
                    <span class="meta-value">support@prosple.com</span>
                </div>
            </div>
        </div>

        <!-- Right Side: The Form -->
        <div class="studio-main">
            <form method="POST" action="/WS03/Public/auth/login" class="studio-form">
                <!-- Section: Login Credentials -->
                <div class="studio-section">
                    <span class="studio-section-label">01. Login Details</span>
                    
                    <?php if(isset($errors)) : ?>
                        <?php foreach($errors as $error) : ?>
                            <div class="studio-alert studio-alert-error">
                                <i class="fa fa-exclamation-circle"></i>
                                <?= $error ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                        
                    <div class="studio-grid">
                        <div class="studio-group full">
                            <label class="studio-label" for="email">
                                <i class="fa fa-envelope"></i> Email Address
                            </label>
                            <input type="email" id="email" name="email" class="studio-input" placeholder="john@example.com" value="<?= $user['email'] ?? '' ?>" />
                        </div>

                        <div class="studio-group full">
                            <label class="studio-label" for="password">
                                <i class="fa fa-lock"></i> Password
                            </label>
                            <div class="studio-input-wrapper">
                                <input type="password" id="password" name="password" class="studio-input" placeholder="••••••••" />
                                <button type="button" class="password-toggle" data-target="password">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="studio-actions">
                    <button type="submit" class="studio-btn-pill">Login</button>
                    <a href="/WS03/Public/auth/register" class="studio-btn-cancel">Don't have an account? Register</a>
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
