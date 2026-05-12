<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="create-page">
    <!-- Animated background elements -->
    <div class="job-backdrop-glow glow-purple" style="top: -10%; left: -10%;"></div>
    <div class="job-backdrop-glow glow-blue" style="bottom: -10%; right: -10%;"></div>
    
    <div class="container mx-auto max-w-4xl px-4 relative z-10 py-12">
        <div class="form-shell-glass">
            <div class="form-hero-glass">
                <div class="form-hero-content">
                    <span class="form-badge-glass">EMPLOYER PORTAL</span>
                    <h1 class="form-title-main">Post a New Listing</h1>
                    <p class="form-subtitle">Connect with top-tier talent in the tech industry. Fill in the details below to reach thousands of candidates.</p>
                </div>
                <div class="form-hero-icon">
                    <i class="fa fa-briefcase"></i>
                </div>
            </div>

            <form method="POST" class="job-form-modern">
                <!-- Section: Job Details -->
                <div class="form-section-modern">
                    <div class="section-header-modern">
                        <i class="fa fa-clipboard-list"></i>
                        <h3>Job Information</h3>
                    </div>
                    
                    <div class="form-grid-modern">
                        <div class="form-group-modern full">
                            <label for="title">Job Title</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-heading"></i>
                                <input type="text" id="title" name="title" placeholder="e.g. Senior Frontend Engineer" required />
                            </div>
                        </div>

                        <div class="form-group-modern full">
                            <label for="description">Job Description</label>
                            <div class="input-wrap-modern align-top">
                                <i class="fa fa-align-left"></i>
                                <textarea id="description" name="description" rows="6" placeholder="Describe the role, responsibilities, and team culture..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <label for="salary">Annual Salary</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-money-bill-wave"></i>
                                <input type="text" id="salary" name="salary" placeholder="e.g. ₱500,000" />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <label for="requirements">Requirements</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-list-check"></i>
                                <input type="text" id="requirements" name="requirements" placeholder="React, PHP, AWS" />
                            </div>
                        </div>

                        <div class="form-group-modern full">
                            <label for="benefits">Benefits</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-gift"></i>
                                <input type="text" id="benefits" name="benefits" placeholder="Remote, Health Insurance, 401k" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section: Company Details -->
                <div class="form-section-modern">
                    <div class="section-header-modern">
                        <i class="fa fa-building"></i>
                        <h3>Company & Location</h3>
                    </div>

                    <div class="form-grid-modern">
                        <div class="form-group-modern full">
                            <label for="company">Company Name</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-industry"></i>
                                <input type="text" id="company" name="company" placeholder="e.g. Prosple Inc." required />
                            </div>
                        </div>

                        <div class="form-group-modern full">
                            <label for="address">Full Address</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-location-dot"></i>
                                <input type="text" id="address" name="address" placeholder="123 Business Avenue, Suite 100" />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <label for="city">City</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-city"></i>
                                <input type="text" id="city" name="city" placeholder="Manila" />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <label for="state">State / Province</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-map"></i>
                                <input type="text" id="state" name="state" placeholder="Metro Manila" />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <label for="phone">Contact Phone</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-phone"></i>
                                <input type="text" id="phone" name="phone" placeholder="+63 912 345 6789" />
                            </div>
                        </div>

                        <div class="form-group-modern">
                            <label for="email">Application Email</label>
                            <div class="input-wrap-modern">
                                <i class="fa fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder="hr@company.com" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions-modern">
                    <button type="submit" class="btn-modern btn-submit-modern">
                        <i class="fa fa-paper-plane"></i>
                        <span>Publish Listing</span>
                    </button>
                    <a href="/WS03/Public/listings" class="btn-modern btn-cancel-modern">
                        <i class="fa fa-xmark"></i>
                        <span>Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>