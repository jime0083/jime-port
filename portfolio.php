<?php
/*
Template Name: Portfolio
*/
get_header(); ?>

<section class="page-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt="Profile">
    <h1>Portfolio</h1>
</section>

<div class="work-description-section fade-in-section">
    <div class="container">
        <p class="work-description-text">制作物の一例です</p>
    </div>
</div>

<div class="portfolio-cards-section">
    <div class="container">
        <div class="portfolio-grid">
            <a href="<?php echo esc_url(home_url('/portfolio/web-development')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="Web開発">
                </div>
                <div class="portfolio-content">
                    <h3>Web Development</h3>
                    <p>モダンなWebアプリケーション開発の実績を紹介します。</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/mobile-app')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/iphone.jpg" alt="モバイルアプリ">
                </div>
                <div class="portfolio-content">
                    <h3>Mobile App</h3>
                    <p>スマートフォン向けアプリケーション開発の実績を紹介します。</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/system-development')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg" alt="システム開発">
                </div>
                <div class="portfolio-content">
                    <h3>System Development</h3>
                    <p>企業向けシステム開発の実績を紹介します。</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/web-development')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="Web開発">
                </div>
                <div class="portfolio-content">
                    <h3>Web Development</h3>
                    <p>モダンなWebアプリケーション開発の実績を紹介します。</p>
                </div>
            </a>

        </div>
    </div>
</div>

<?php get_footer(); ?>