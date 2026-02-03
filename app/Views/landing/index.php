    <main id="main-content">
        <!-- Hero Section -->
        <section class="hero" aria-labelledby="hero-title">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero-content container px-3 px-md-5">
                            <div class="hero-logo" aria-hidden="true">
                                <img src="assets/images/LOGO_PDF.svg" alt="" width="32" height="32" loading="eager">
                            </div>
                            <p class="hero-subtitle"><?= esc($hero['subtitle'] ?? '') ?></p>
                            <h1 id="hero-title" class="hero-title"><?= esc($hero['title'] ?? '') ?></h1>
                            <p class="hero-product"><?= esc($hero['product'] ?? '') ?></p>
                            <p class="coming-soon-text" aria-label="<?= esc($hero['comingSoon'] ?? 'Coming soon') ?>"><?= esc($hero['comingSoon'] ?? '') ?></p>
                        </div>

                        <!-- Sign Up -->
                        <div class="signup" aria-labelledby="signup-title">
                            <div class="container px-3 px-md-5">
                                <div class="signup-content">
                                    <h2 id="signup-title" class="signup-title"><?= esc($signup['title'] ?? '') ?></h2>
                                    <p class="signup-subtitle"><?= esc($signup['subtitle'] ?? '') ?></p>

                                    <form class="signup-form" action="#" method="POST" role="form" aria-label="Beta program signup form">
                                        <div class="input-group">
                                            <label for="email-input" class="visually-hidden">Email address</label>
                                            <input
                                                type="email"
                                                id="email-input"
                                                class="form-control"
                                                placeholder="<?= esc($signup['form']['placeholder'] ?? 'Enter email address') ?>"
                                                required
                                                autocomplete="email"
                                                aria-required="true"
                                                aria-describedby="email-help"
                                            >
                                            <button type="submit" class="btn btn-signup" aria-label="Sign up for beta program">
                                                <?= esc($signup['form']['button'] ?? 'Sign up now') ?><span class="btn-arrow" aria-hidden="true"> ›</span>
                                            </button>
                                        </div>
                                        <span id="email-help" class="visually-hidden">Enter your email to receive early access to <?= esc($hero['product'] ?? 'IronPDF for C++') ?></span>
                                    </form>

                                    <div class="coming-soon-banner" role="complementary" aria-label="Other upcoming beta programs">
                                        <span class="coming-soon-badge" aria-hidden="true"><?= esc($signup['banner']['badge'] ?? '# Coming Soon') ?></span>
                                        <p class="coming-soon-info mb-0">
                                            <span class="coming-soon-bottom-text"><?= esc($signup['banner']['text'] ?? '') ?></span>
                                            <?php if (!empty($signup['banner']['languages'])): ?>
                                                <?php foreach ($signup['banner']['languages'] as $index => $language): ?>
                                                    <?php if ($index > 0): ?>
                                                        <span class="separator" aria-hidden="true">|</span>
                                                    <?php endif; ?>
                                                    <strong><?= esc($language) ?></strong>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-none d-lg-block">
                        <div class="hero-image-wrapper">
                            <img src="assets/images/HERO_IMAGE.svg" alt="C++ programming language logo representing IronPDF C++ Beta" class="hero-image img-fluid" loading="eager" fetchpriority="high">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="" aria-labelledby="features-title">
            <div class="container px-3 px-md-5 features-section">
                <div class="features-header text-center">
                    <h2 id="features-title" class="features-title">
                        <?= esc($features['title'] ?? '') ?>
                        <img src="assets/images/badge.svg" alt="<?= esc($features['badge'] ?? 'Coming Soon') ?>" class="coming-soon-tag" width="auto" height="auto">
                    </h2>
                    <ul class="features-list">
                        <?php if (!empty($features['list'])): ?>
                            <?php foreach ($features['list'] as $feature): ?>
                                <li><span class="feature-hash">#</span> <?= esc($feature) ?></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="features-description-box">
              <div class="container px-3 px-md-5 features-section">
                <div class="features-description">
                    <?php if (!empty($features['description'])): ?>
                        <?php foreach ($features['description'] as $paragraph): ?>
                            <p><?= $paragraph ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
              </div>
            </div>
        </section>

        <!-- Why C++ Section -->
        <section class="why-section" aria-labelledby="why-title">
            <div class="container px-3 px-md-5">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="why-image-wrapper">
                            <img src="assets/images/image_file.svg" alt="HTML to PDF conversion illustration" class="why-image img-fluid" loading="lazy">
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="why-content">
                            <h2 id="why-title" class="why-title">
                                <?php
                                    $whyTitle = $whySection['title'] ?? '';
                                    $whyHighlight = $whySection['highlight'] ?? '';
                                    if ($whyHighlight && strpos($whyTitle, $whyHighlight) !== false) {
                                        echo str_replace($whyHighlight, '<span class="highlight">' . esc($whyHighlight) . '</span>', esc($whyTitle));
                                    } else {
                                        echo esc($whyTitle);
                                    }
                                ?>
                            </h2>
                            <?php if (!empty($whySection['paragraphs'])): ?>
                                <?php foreach ($whySection['paragraphs'] as $paragraph): ?>
                                    <p><?= esc($paragraph) ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Early Access Section -->
        <section class="early-access-section" aria-labelledby="early-access-title">
            <div class="container px-3 px-md-5">
                <h2 id="early-access-title" class="early-access-title">
                    <?php
                        $earlyTitle = $earlyAccess['title'] ?? '';
                        $earlyHighlight = $earlyAccess['highlight'] ?? '';
                        if ($earlyHighlight && strpos($earlyTitle, $earlyHighlight) !== false) {
                            echo str_replace($earlyHighlight, '<span class="highlight">' . esc($earlyHighlight) . '</span>', esc($earlyTitle));
                        } else {
                            echo esc($earlyTitle);
                        }
                    ?>
                </h2>
                <p class="early-access-description"><?= esc($earlyAccess['description'] ?? '') ?></p>

                <div class="product-cards">
                    <?php if (!empty($earlyAccess['products'])): ?>
                        <?php foreach ($earlyAccess['products'] as $product): ?>
                            <div class="product-card <?= $product['status'] === 'released' ? 'card-released' : '' ?>">
                                <span class="product-badge <?= esc($product['status']) ?>"><?= esc($product['badge']) ?></span>
                                <div class="product-name">
                                    <span class="iron">IRON</span><span class="pdf">PDF</span>
                                    <span class="product-lang"><?= esc($product['language']) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
