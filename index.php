<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="hero-description"><?php bloginfo('description'); ?></p>
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