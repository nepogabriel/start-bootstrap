<?php
//1-registrando css e js
function gs_theme_styles() {
    
    //bootstrap css
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    //font awesome
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
    //fonte do google
    wp_enqueue_style('googlelora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('googlelora', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    //clean blog css
    wp_enqueue_style('cleanblog_css', get_template_directory_uri().'/css/clean-blog.min.css');

    //jquery
    wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js');
    //bootstrap js
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js');
    //clean blog js
    wp_enqueue_script('cleanblog_js', get_template_directory_uri().'/js/clean-blog.min.js');


}

function gs_after_setup() {
    
}