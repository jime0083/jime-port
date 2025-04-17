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
                    <h3>造園会社コーポレートサイト</h3>
                    <p>WordPressを使用したコーポレートサイト</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/mobile-app')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/iphone.jpg" alt="モバイルアプリ">
                </div>
                <div class="portfolio-content">
                    <h3>コーヒー豆販売ECサイト</h3>
                    <p>Shopfiyを使用したECサイトの制作</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/system-development')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg" alt="システム開発">
                </div>
                <div class="portfolio-content">
                    <h3>中間くん</h3>
                    <p>複数人の現在位置から移動距離や交通費が中間になる場所を割り出すサービス</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/web-development')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="Web開発">
                </div>
                <div class="portfolio-content">
                    <h3>ダサオワ</h3>
                    <p>AIが1万円以内であなたのコーディネートを考えるサービス</p>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/portfolio/web-development')); ?>" class="portfolio-card">
                <div class="portfolio-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="Web開発">
                </div>
                <div class="portfolio-content">
                    <h3>黒歴史の空地</h3>
                    <p>ネットネイティブの人たちや炎上が怖い人たち向けのネットを学ぶSNS</p>
                </div>
            </a>

        </div>
    </div>
</div>

<?php get_footer(); ?>