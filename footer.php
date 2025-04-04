</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
            <div class="social-links">
                <?php if (get_theme_mod('github_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('github_url')); ?>" target="_blank" rel="noopener">GitHub</a>
                <?php endif; ?>
                <?php if (get_theme_mod('linkedin_url')) : ?>
                    <a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>" target="_blank" rel="noopener">LinkedIn</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 