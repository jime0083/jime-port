<?php get_header(); ?>

<section class="hero">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="Coding">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg" alt="Engineering">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/garden office3.jpg" alt="Office">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/iphone.jpg" alt="Mobile">
            </div>
        </div>
    </div>
    <div class="hero-content">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="hero-description"><?php bloginfo('description'); ?></p>
    </div>
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
                <a href="<?php echo esc_url(home_url('/#profile')); ?>" class="about-button">詳しいプロフィールはこちら</a>
            </div>
        </div>
    </div>
</section>

<section class="work-top fade-in-section" id="work">
    <div class="container">
        <div class="top-work-title">
            <h2 class="section-title">Portfolio</h2>
        </div>
        <div class="work-slider">
            <div class="swiper work-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-modal="work1">
                        <div class="work-item">
                            <div class="work-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt="ポートフォリオ1">
                            </div>
                            <div class="work-info">
                                <span class="work-date">2024.02.13</span>
                                <h3 class="work-title">コーポレートサイト作成</h3>
                                <p class="work-description">WordPressを使用した某造園会社コーポレートサイト</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-modal="work2">
                        <div class="work-item">
                            <div class="work-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pc2.jpg" alt="ポートフォリオ2">
                            </div>
                            <div class="work-info">
                                <span class="work-date">2024.01.15</span>
                                <h3 class="work-title">ECサイト作成</h3>
                                <p class="work-description">Shopifyを使用したコーヒー豆販売ECサイトの開発</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-modal="work3">
                        <div class="work-item">
                            <div class="work-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="ポートフォリオ3">
                            </div>
                            <div class="work-info">
                                <span class="work-date">2023.12.20</span>
                                <h3 class="work-title">個人開発アプリ「中間くん」</h3>
                                <p class="work-description">複数人の現在位置から移動距離や交通費が中間になる場所を割り出すサービス</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-modal="work4">
                        <div class="work-item">
                            <div class="work-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg" alt="ポートフォリオ4">
                            </div>
                            <div class="work-info">
                                <span class="work-date">2023.10.15</span>
                                <h3 class="work-title">個人開発アプリ「ダサオワ」</h3>
                                <p class="work-description">AIが1万円以内であなたのコーディネートを考えるサービス</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-modal="work5">
                        <div class="work-item">
                            <div class="work-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/enginer2.jpg" alt="ポートフォリオ5">
                            </div>
                            <div class="work-info">
                                <span class="work-date">2023.08.01</span>
                                <h3 class="work-title">黒歴史の空地</h3>
                                <p class="work-description">ネットネイティブの人たちや炎上が怖い人たち向けのネットを学ぶSNS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev work-prev"></div>
            <div class="swiper-button-next work-next"></div>
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

<!-- モーダルウィンドウ -->
<div class="modal" id="work1">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-body">
            <div class="modal-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt="Webアプリケーション開発">
            </div>
            <div class="modal-info">
                <h3>コーポレートサイト作成</h3>
                <p class="modal-description">WordPressを使用したコーポレートサイト</p>
                <div class="modal-tech">
                    <h4>使用技術</h4>
                    <ul>
                        <li>CMS: WordPress</li>
                        <li>使用言語: HTML,CSS,JavaScript(jQuery),PHP</li>
                        <li>デザイン作成:Adobe XD</li>
                        <li>開発環境: Local by Flywheel,Git</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="work2">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-body">
            <div class="modal-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pc2.jpg" alt="コーポレートサイト制作">
            </div>
            <div class="modal-info">
                <h3>ECサイト制作</h3>
                <p class="modal-description">Shopfiyを使用したECサイトの制作</p>
                <div class="modal-tech">
                    <h4>使用技術</h4>
                    <ul>
                        <li>CMS:Shopify</li>
                        <li>使用言語:HTML,CSS,JavaScript(jQuery)</li>
                        <li>デザイン作成:Adobe ilastrater</li>
                        <li>開発環境:Git</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="work3">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-body">
            <div class="modal-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/codeing.jpg" alt="LP制作">
            </div>
            <div class="modal-info">
                <h3>中間くん</h3>
                <p class="modal-description">複数人の現在位置から移動距離や交通費が中間になる場所を割り出すサービス</p>
                <div class="modal-tech">
                    <h4>使用技術</h4>
                    <ul>
                        <li>フロントエンド: HTML,CSS,JavaScript(Vue)</li>
                        <li>データベース:Firebase</li>
                        <li>開発環境:Git</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="work4">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-body">
            <div class="modal-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg" alt="ECサイト開発">
            </div>
            <div class="modal-info">
                <h3>ダサオワ</h3>
                <p class="modal-description">AIが1万円以内であなたのコーディネートを考えるサービス</p>
                <div class="modal-tech">
                    <h4>使用技術</h4>
                    <ul>
                        <li>フロントエンド: HTML,CSS,JavaScript(Vue)</li>
                        <li>データベース:Firebase</li>
                        <li>開発環境:Git</li>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="work5">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-body">
            <div class="modal-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/enginer2.jpg" alt="SNSアプリ開発">
            </div>
            <div class="modal-info">
                <h3>黒歴史の空地</h3>
                <p class="modal-description">ネットネイティブの人たちや炎上が怖い人たち向けのネットを学ぶSNS</p>
                <div class="modal-tech">
                    <h4>使用技術</h4>
                    <ul>
                        <li>フロントエンド: HTML,CSS,JavaScript(Vue)</li>
                        <li>データベース:Firebase</li>
                        <li>開発環境:Git</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?> 