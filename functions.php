<?php
if (!defined('ABSPATH')) exit;

// テーマサポート
function jime_port_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'jime_port_setup');

// スタイルシートとスクリプトの読み込み
function jime_port_scripts() {
    wp_enqueue_style('jime-port-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
    wp_enqueue_script('jime-port-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'jime_port_scripts');

// カスタム投稿タイプ：プロジェクト
function jime_port_register_post_types() {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'プロジェクト',
            'singular_name' => 'プロジェクト'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'jime_port_register_post_types');

// カスタムタクソノミー：スキル
function jime_port_register_taxonomies() {
    register_taxonomy('skill', 'project', array(
        'labels' => array(
            'name' => 'スキル',
            'singular_name' => 'スキル'
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'jime_port_register_taxonomies'); 