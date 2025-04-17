<?php
/*
Template Name: Work
*/
get_header(); ?>

<section class="page-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/pc2.jpg" alt="Profile">
    <h1>Work</h1>
</section>

<div class="work-description-section fade-in-section">
    <div class="container">
        <p class="work-description-text">これまでに携わった案件の一部を紹介します。</p>
    </div>
</div>

<div class="development-service-section ">
    <div class="service-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/enginer.jpg">
    </div>
    
    <div class="container">
        <div class="service-content">
            <h2 class="service-title">Website Creation <span class="service-title-jp">WEBサイト作成</span></h2>
            <p class="service-description">
                主にWordPressを使用したコーポレートサイトやShopfiyを使用したECサイト、LPの作成をしています。
            </p>
        </div>
    </div>
    <div class="current-achievements">
                    <h3>主な実績</h3>
                    <ul>
                        <li>某造園会社コーポレートサイト作成（Android/iOS:Java,Objective-C）</li>
                        <li>某IT系企業コーポレートサイト作成（Android/iOS:Java,Objective-C）</li>
                        <li>某コーヒー豆販売ECサイト作成（Android/iOS:Java,Objective-C）</li>
                        <li>某英会話学習サービスLP作成(AWS:Java/JavaScript/PHP)</li>
                    </ul>
    </div>
</div>


<div class="development-service-section fade-in-section">
    <div class="service-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/enginer3.jpg" alt="開発ミーティング">
    </div>
    
    <div class="container">
        <div class="service-content">
            <h2 class="service-title">FrontEnd Development <span class="service-title-jp">フロントエンド開発</span></h2>
            <p class="service-description">
                主にVue.jsを使用したWebサービスの開発をしています
            </p>
        </div>
    </div>
    <div class="current-achievements">
                    <h3>現行の主な実績</h3>
                    <ul>
                        <li>某設計toB向けアプリ（Android/iOS:Java,Objective-C）</li>
                        <li>某カーシェアtoC向けアプリ（Android/iOS:Java,Objective-C）</li>
                        <li>某アンケートアプリ(AWS:Java/JavaScript/PHP)</li>
                    </ul>
    </div>
</div>

<div class="development-service-section fade-in-section">
    <div class="service-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pc1.jpg" alt="開発ミーティング">
    </div>
    
    <div class="container">
        <div class="service-content">
            <h2 class="service-title">Personal Development <span class="service-title-jp">個人開発</span></h2>
            <p class="service-description">
                個人でWebアプリを開発しデザインからグロースハックまで1人で行っています
            </p>
        </div>
    </div>
    <div class="current-achievements">
                    <h3>現行の主な実績</h3>
                    <ul>
                        <li><a href="">中間くん</a></li>
                        <li><a href="">ダサオワ</a></li>
                        <li><a href="">黒歴史の空地</a></li>
                    </ul>
    </div>
</div>

<?php get_footer(); ?>