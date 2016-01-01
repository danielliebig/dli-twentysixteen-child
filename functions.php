<?php

// Get admin styles
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');
function my_admin_theme_style() {
   wp_enqueue_style('dli-twentysixteen-child-admin-theme', get_stylesheet_directory_uri() . '/admin.css');
}

// Get twentysixteen styles
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'twentysixteen-style', get_template_directory_uri() . '/style.css' );
}

// Get dli-twentysixteen-child styles
add_action( 'wp_enqueue_scripts', 'enqueue_dli-twentysixteen-child_styles' );
function enqueue_dli_twentysixteen_child_styles() {
	wp_enqueue_style( 'dli-twentysixteen-child-styles', get_stylesheet_directory_uri() . '/stylesheets/screen.css' );
}