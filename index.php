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
            <h2 class="section-title">Work</h2>
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
                                <h3 class="work-title">Webアプリケーション開発</h3>
                                <p class="work-description">Vue.jsを使用したモダンなWebアプリケーション開発</p>
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
                                <h3 class="work-title">コーポレートサイト制作</h3>
                                <p class="work-description">WordPressを使用した企業サイトの制作</p>
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
                                <h3 class="work-title">LP制作</h3>
                                <p class="work-description">HTML/CSSを使用したランディングページの制作</p>
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
                                <h3 class="work-title">ECサイト開発</h3>
                                <p class="work-description">Shopifyを使用したECサイトの開発</p>
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
                                <h3 class="work-title">SNSアプリ開発</h3>
                                <p class="work-description">Reactを使用したSNSアプリケーションの開発</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-modal="work6">
                        <div class="work-item">
                            <div class="work-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/enginer3.jpg" alt="ポートフォリオ6">
                            </div>
                            <div class="work-info">
                                <span class="work-date">2023.06.10</span>
                                <h3 class="work-title">予約システム開発</h3>
                                <p class="work-description">Laravel+Vueを使用した予約システムの開発</p>
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

    <!-- モーダルウィンドウ -->
    <div class="modal" id="work1">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-body">
                <div class="modal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt="Webアプリケーション開発">
                </div>
                <div class="modal-info">
                    <h3>Webアプリケーション開発</h3>
                    <p class="modal-description">ユーザーフレンドリーなタスク管理アプリケーションの開発</p>
                    <div class="modal-tech">
                        <h4>使用技術</h4>
                        <ul>
                            <li>フロントエンド: Vue.js, Vuex</li>
                            <li>スタイリング: SCSS, Tailwind CSS</li>
                            <li>バックエンド: Node.js, Express</li>
                            <li>データベース: MongoDB</li>
                            <li>開発環境: Docker, Git</li>
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
                    <h3>コーポレートサイト制作</h3>
                    <p class="modal-description">モダンで高パフォーマンスな企業サイトの制作</p>
                    <div class="modal-tech">
                        <h4>使用技術</h4>
                        <ul>
                            <li>CMS: WordPress</li>
                            <li>テーマ開発: PHP, JavaScript</li>
                            <li>スタイリング: SCSS</li>
                            <li>プラグイン: ACF Pro, Contact Form 7</li>
                            <li>開発環境: Local by Flywheel, Git</li>
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
                    <h3>LP制作</h3>
                    <p class="modal-description">高いコンバージョン率を実現するランディングページの制作</p>
                    <div class="modal-tech">
                        <h4>使用技術</h4>
                        <ul>
                            <li>フロントエンド: HTML5, CSS3</li>
                            <li>インタラクション: JavaScript, jQuery</li>
                            <li>レスポンシブデザイン: Media Queries</li>
                            <li>アニメーション: GSAP</li>
                            <li>開発環境: VS Code, Git</li>
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
                    <h3>ECサイト開発</h3>
                    <p class="modal-description">カスタマイズ性の高いECサイトの開発とデザイン</p>
                    <div class="modal-tech">
                        <h4>使用技術</h4>
                        <ul>
                            <li>プラットフォーム: Shopify</li>
                            <li>カスタマイズ: Liquid, JavaScript</li>
                            <li>スタイリング: SCSS</li>
                            <li>決済システム: Stripe連携</li>
                            <li>開発環境: Shopify CLI, Git</li>
                        </ul>
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
                    <h3>SNSアプリ開発</h3>
                    <p class="modal-description">リアルタイムコミュニケーションを実現するSNSアプリケーション</p>
                    <div class="modal-tech">
                        <h4>使用技術</h4>
                        <ul>
                            <li>フロントエンド: React, Redux</li>
                            <li>バックエンド: Firebase</li>
                            <li>リアルタイム通信: WebSocket</li>
                            <li>UI/UXデザイン: Material-UI</li>
                            <li>開発環境: Create React App, Git</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="work6">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-body">
                <div class="modal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/enginer3.jpg" alt="予約システム開発">
                </div>
                <div class="modal-info">
                    <h3>予約システム開発</h3>
                    <p class="modal-description">使いやすさを重視した予約管理システム</p>
                    <div class="modal-tech">
                        <h4>使用技術</h4>
                        <ul>
                            <li>バックエンド: Laravel</li>
                            <li>フロントエンド: Vue.js, Vuex</li>
                            <li>データベース: MySQL</li>
                            <li>認証: Laravel Sanctum</li>
                            <li>開発環境: Docker, Git</li>
                        </ul>
                    </div>
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