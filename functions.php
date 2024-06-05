<?php

function load_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.0', true);
    wp_enqueue_style('bootstrp-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0', 'all');
    wp_enqueue_style('origami-css', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');