<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= esc($meta['description'] ?? '') ?>">
    <meta name="keywords" content="<?= esc($meta['keywords'] ?? '') ?>">
    <meta name="author" content="<?= esc($meta['author'] ?? '') ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="<?= esc($meta['og']['type'] ?? 'website') ?>">
    <meta property="og:title" content="<?= esc($meta['og']['title'] ?? '') ?>">
    <meta property="og:description" content="<?= esc($meta['og']['description'] ?? '') ?>">
    <meta property="og:image" content="assets/images/hero_image.svg">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="<?= esc($meta['twitter']['card'] ?? 'summary_large_image') ?>">
    <meta name="twitter:title" content="<?= esc($meta['twitter']['title'] ?? '') ?>">
    <meta name="twitter:description" content="<?= esc($meta['twitter']['description'] ?? '') ?>">

    <title><?= esc($meta['title'] ?? 'IronPDF for C++') ?></title>

    <!-- Preload critical assets for LCP optimization -->
    <link rel="preload" href="assets/fonts/GothamMedium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="assets/fonts/GothamBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="assets/fonts/GothamBlack.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="assets/images/hero_image.svg" as="image">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/logo.svg">
</head>
<body>
    <!-- Skip Link for Accessibility -->
    <a href="#main-content" class="skip-link"><?= esc($accessibility['skipLink'] ?? 'Skip to main content') ?></a>

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg" role="navigation" aria-label="Main navigation">
            <div class="container-fluid px-3 px-md-5">
                <a href="/" class="navbar-brand logo" aria-label="<?= esc($navigation['brand'] ?? 'Iron Software') ?> - Home">
                    <img src="assets/images/logo.svg" alt="<?= esc($navigation['brand'] ?? 'Iron Software') ?> Logo" width="100" height="20" loading="eager">
                </a>

                <!-- Mobile menu toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav nav-links ms-lg-4" role="menubar">
                        <?php if (!empty($navigation['links'])): ?>
                            <?php foreach ($navigation['links'] as $index => $link): ?>
                                <?php if (!empty($link['dropdown'])): ?>
                                    <li class="nav-item dropdown" role="none">
                                        <a href="#" class="nav-link dropdown-toggle" role="menuitem" aria-haspopup="true" aria-expanded="false" id="dropdown<?= $index ?>" data-bs-toggle="dropdown">
                                            <?= esc($link['text']) ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown<?= $index ?>" role="menu">
                                            <?php foreach ($link['dropdown'] as $dropdownItem): ?>
                                                <li role="none"><a class="dropdown-item" href="#" role="menuitem"><?= esc($dropdownItem) ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item" role="none">
                                        <a href="#" class="nav-link" role="menuitem"><?= esc($link['text']) ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
