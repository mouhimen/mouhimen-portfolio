<!-- filepath: mouhimen-portfolio/mouhimen-portfolio/template-parts/footer.php -->
<footer class="bg-[<?php echo get_theme_mod('mpw_footer_bg_color'); ?>] text-white py-6">
    <div class="container mx-auto text-center">
        <div class="social-links mb-4">
            <a href="<?php echo get_theme_mod('mpw_social_facebook'); ?>" class="mx-2">Facebook</a>
            <a href="<?php echo get_theme_mod('mpw_social_twitter'); ?>" class="mx-2">Twitter</a>
            <a href="<?php echo get_theme_mod('mpw_social_linkedin'); ?>" class="mx-2">LinkedIn</a>
            <a href="<?php echo get_theme_mod('mpw_social_github'); ?>" class="mx-2">GitHub</a>
        </div>
        <p>&copy; <?php echo date("Y"); ?> Mouhimen Portfolio. All rights reserved.</p>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); // important to show admin navbar?>