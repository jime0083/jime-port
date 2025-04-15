<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">JIME</a>
            </div>
            <nav class="main-navigation">
                <ul class="nav-menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/profile')); ?>">Profile</a></li>
                    <li><a href="<?php echo esc_url(home_url('/work')); ?>">Work</a></li>
                    <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main id="main" class="site-main"> 