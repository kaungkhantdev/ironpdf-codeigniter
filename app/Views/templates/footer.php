    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <!-- Beta Signup Section -->
        <section class="beta-signup-section" aria-labelledby="beta-signup-title">
            <div class="container px-3 px-md-5">
                <h2 id="beta-signup-title" class="beta-signup-title text-center">
                    <?php
                        $betaTitle = $betaSignup['title'] ?? 'Sign up to our Beta Program';
                        $betaHighlight = $betaSignup['highlight'] ?? '';
                        if ($betaHighlight && strpos($betaTitle, $betaHighlight) !== false) {
                            echo str_replace($betaHighlight, '<span class="highlight">' . esc($betaHighlight) . '</span>', esc($betaTitle));
                        } else {
                            echo esc($betaTitle);
                        }
                    ?>
                </h2>
                <form class="signup-form beta-form" action="#" method="POST" role="form" aria-label="Beta program signup form">
                    <div class="input-group mx-auto">
                        <label for="beta-email-input" class="visually-hidden">Email address</label>
                        <input
                            type="email"
                            id="beta-email-input"
                            class="form-control"
                            placeholder="<?= esc($betaSignup['form']['placeholder'] ?? 'Enter email address') ?>"
                            required
                            autocomplete="email"
                            aria-required="true"
                        >
                        <button type="submit" class="btn btn-signup" aria-label="Sign up for beta program">
                            <?= esc($betaSignup['form']['button'] ?? 'Sign up now') ?><span class="btn-arrow" aria-hidden="true"> ›</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>
