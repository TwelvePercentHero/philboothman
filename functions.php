<?php

// Adding CSS and JS files

function pb_setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,400&display=swap');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'pb_setup');