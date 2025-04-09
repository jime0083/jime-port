<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="page-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/shake.jpg" alt="Profile">
    <h1>Contact</h1>
</section>

<div class="contact-description-section">
    <div class="container">
        <p class="contact-description-text">下記フォームに必要事項をご入力してください。</p>
    </div>
</div>

<div class="contact-1-container">
    <div class="contact-1-section">
    <?php echo do_shortcode('[contact-form-7 id="e61dea0" title="Contact1"]'); ?>
    </div>
</div>

<?php get_footer(); ?>