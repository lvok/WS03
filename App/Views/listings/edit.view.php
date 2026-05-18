<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section class="studio-page">
    <div class="studio-container">
        <!-- Left Side: Massive Title & Meta -->
        <div class="studio-side">
            <h1 class="studio-title">Edit Job<br>Listing</h1>
            
            <div class="studio-meta">
                <div class="meta-item">
                    <span class="meta-label">Location</span>
                    <span class="meta-value">Global Talent Network</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Established</span>
                    <span class="meta-value">2026 Edition</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Support</span>
                    <span class="meta-value">hr@prosple.com</span>
                </div>
            </div>
        </div>

        <!-- Right Side: The Form -->
        <div class="studio-main">
            <form method="POST" action="/WS03/Public/listings/update/<?= $listing->id ?>" class="studio-form">
                <input type="hidden" name="_method" value="PUT">
                <!-- Section: Job Information -->
                <div class="studio-section">
                    <span class="studio-section-label">01. Job Information</span>
                    
                 
                    <?php loadPartial('errors', ['errors' => $errors ?? []]) ?>
                        
                    <div class="studio-grid">
                        <div class="studio-group full">
                            <label class="studio-label" for="title">
                                <i class="fa fa-heading"></i> Job Title (required)
                            </label>
                            <input type="text" id="title" name="title" class="studio-input" placeholder="e.g. Lead Product Designer" value="<?= $listing->title ?? '' ?>" />
                        </div>

                        <div class="studio-group full">
                            <label class="studio-label" for="description">
                                <i class="fa fa-align-left"></i> Job Description (required)
                            </label>
                            <textarea id="description" name="description" class="studio-input studio-textarea" placeholder="Describe the role and responsibilities..." ><?= $listing->description ?? '' ?></textarea>
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="salary">
                                <i class="fa fa-money-bill-wave"></i> Annual Salary
                            </label>
                            <input type="text" id="salary" name="salary" class="studio-input" placeholder="e.g. $120k - $150k" value="<?= $listing->salary ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="tags">
                                <i class="fa fa-tags"></i> Tags
                            </label>
                            <input type="text" id="tags" name="tags" class="studio-input" placeholder="e.g. Remote, PHP, Senior" value="<?= $listing->tags ?? '' ?>" />
                        </div>

                        <div class="studio-group full">
                            <label class="studio-label" for="requirements">
                                <i class="fa fa-list-check"></i> Requirements
                            </label>
                            <input type="text" id="requirements" name="requirements" class="studio-input" placeholder="Education, Experience, etc." value="<?= $listing->requirements ?? '' ?>" />
                        </div>

                        <div class="studio-group full">
                            <label class="studio-label" for="benefits">
                                <i class="fa fa-gift"></i> Benefits
                            </label>
                            <input type="text" id="benefits" name="benefits" class="studio-input" placeholder="Remote, Health, Equity" value="<?= $listing->benefits ?? '' ?>" />
                        </div>
                    </div>
                </div>

                <!-- Section: Company Details -->
                <div class="studio-section">
                    <span class="studio-section-label">02. Company & Location</span>
                    
                    <div class="studio-grid">
                        <div class="studio-group full">
                            <label class="studio-label" for="company">
                                <i class="fa fa-industry"></i> Company Name (required)
                            </label>
                            <input type="text" id="company" name="company" class="studio-input" placeholder="e.g. Acme Corp" value="<?= $listing->company ?? '' ?>" />
                        </div>

                        <div class="studio-group full">
                            <label class="studio-label" for="address">
                                <i class="fa fa-location-dot"></i> Full Address
                            </label>
                            <input type="text" id="address" name="address" class="studio-input" placeholder="Street, Building, Floor" value="<?= $listing->address ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="city">
                                <i class="fa fa-city"></i> City
                            </label>
                            <input type="text" id="city" name="city" class="studio-input" placeholder="New York" value="<?= $listing->city ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="state">
                                <i class="fa fa-map"></i> State / Province
                            </label>
                            <input type="text" id="state" name="state" class="studio-input" placeholder="NY" value="<?= $listing->state ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="phone">
                                <i class="fa fa-phone"></i> Contact Phone
                            </label>
                            <input type="text" id="phone" name="phone" class="studio-input" placeholder="+1 (555) 000-0000" value="<?= $listing->phone ?? '' ?>" />
                        </div>

                        <div class="studio-group">
                            <label class="studio-label" for="email">
                                <i class="fa fa-envelope"></i> Application Email (required)
                            </label>
                            <input type="email" id="email" name="email" class="studio-input" placeholder="hiring@company.com" value="<?= $listing->email ?? '' ?>" />
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="studio-actions">
                    <button type="submit" class="studio-btn-pill">Update Listing</button>
                    <a href="/WS03/Public/listings" class="studio-btn-cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>

<?php loadPartial('footer'); ?>