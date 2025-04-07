<?php
/*
Template Name: Profile
*/
get_header(); ?>

<section class="page-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/garden office3.jpg" alt="Profile">
    <h1>Profile</h1>
</section>

<section class="about fade-in-section" id="about">
    <div class="container">
        <div class="about-content">
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/man-icon.png" alt="プロフィール画像">
            </div>
            <div class="about-text">
                <h2>About Me</h2>
                <p>フリーランスエンジニアとして、Web開発の世界で活動しています。</p>
                <p>特にフロントエンド開発を得意とし、ユーザー体験を重視した開発を心がけています。</p>
                <p>Vue.jsやWordPressを中心に、モダンな技術を活用した開発を行っています。</p>
                <p>個人開発では、ユーザーのニーズに応えた実用的なWebアプリケーションの開発に取り組んでいます。</p>
                <p>常に新しい技術にアンテナを張り、より良いソリューションを提供できるよう努めています。</p>
            </div>
        </div>
    </div>
</section>

<section class="career" id="career">
    <div class="container">
        <h2 class="section-title">Career</h2>
        <div class="timeline">
            <div class="timeline-item fade-in-section">
                <div class="timeline-date">2017.9</div>
                <div class="timeline-content">
                    <h3>フリーランスエンジニアとして活動開始</h3>
                    <p>HTML,CSS,Javascript(jQuery)をしようしたLP制作、WordPressを使用してのWEB制作、WEBデザイン等の案件を中心に活動</p>
                </div>
            </div>
            <div class="timeline-item fade-in-section">
                <div class="timeline-date">2020.8</div>
                <div class="timeline-content">
                    <h3>株式会社来図フォース入社</h3>
                    <p>Vue.jsを使用してのフロントエンド開発案件を経験</p>
                </div>
            </div>
            <div class="timeline-item fade-in-section">
                <div class="timeline-date">2022.6</div>
                <div class="timeline-content">
                    <h3>退社、再びフリーランスに</h3>
                    <p>Vueを使用したフロントエンド案件、WordPressを使用したWEB政策案件を中心に活動</p>
                </div>
            </div>
            <div class="timeline-item fade-in-section">
                <div class="timeline-date">2023.6</div>
                <div class="timeline-content">
                    <h3>個人開発開始</h3>
                    <p>「中間くん」「ダサオワ」などのWEBアプリを開発</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact fade-in-section">
    <div class="contact-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/codeing2.jpg" alt="コーディング背景">
    </div>
    <div class="container">
        <div class="contact-content">
            <h2 class="section-title">Contact</h2>
            <p class="contact-description">お仕事のご依頼等につきましてはお問い合わせフォームよりお問い合わせください</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact-button">お問い合わせページへ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>