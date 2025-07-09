<?php

function portfolio_files() {
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/src/output.css'));
    wp_enqueue_style('portfolio_custom_fonts', get_theme_file_uri('/src/fonts.css'));

    if (is_front_page() || is_page('contact')) {
        wp_enqueue_script('portfolio_main_script', get_theme_file_uri('/src/index.js'), [], null, true);
    }
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function portfolio_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('site-icon');
}

add_action('after_setup_theme', 'portfolio_features');

function custom_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'custom_excerpt_more');

add_image_size('768w-by-432l', 768, 432, true);