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

<section class="career" id="career">
    <div class="container">
        <h2 class="section-title">Career</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">2017.9</div>
                <div class="timeline-content">
                    <h3>フリーランスエンジニアとして活動開始</h3>
                    <p>HTML,CSS,Javascript(jQuery)をしようしたLP制作、WordPressを使用してのWEB制作、WEBデザイン等の案件を中心に活動</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2020.8</div>
                <div class="timeline-content">
                    <h3>株式会社来図フォース入社</h3>
                    <p>Vue.jsを使用してのフロントエンド開発案件を経験</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2022.6</div>
                <div class="timeline-content">
                    <h3>退社、再びフリーランスに</h3>
                    <p>Vueを使用したフロントエンド案件、WordPressを使用したWEB政策案件を中心に活動</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2023.6</div>
                <div class="timeline-content">
                    <h3>個人開発開始</h3>
                    <p>「中間くん」「ダサオワ」などのWEBアプリを開発</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skills">
    <div class="container">
        <h2>スキル</h2>
        <div class="skills-grid">
            <?php
            $skills = get_terms(array(
                'taxonomy' => 'skill',
                'hide_empty' => false,
            ));

            if ($skills && !is_wp_error($skills)) {
                foreach ($skills as $skill) {
                    ?>
                    <div class="skill-card">
                        <h3><?php echo esc_html($skill->name); ?></h3>
                        <p><?php echo esc_html($skill->description); ?></p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<section class="projects">
    <div class="container">
        <h2>プロジェクト</h2>
        <div class="projects-grid">
            <?php
            $projects = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => 6,
            ));

            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post();
                    ?>
                    <article class="project-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="project-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="project-content">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="button">詳細を見る</a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <h2>お問い合わせ</h2>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="1" title="お問い合わせフォーム"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?> 