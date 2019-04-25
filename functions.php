<?php

/*Created a brand new function and within this function I called a WordPress function and pointed towards the css file that we wanted to load*/
function the_archive_files() {
    
//    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
    /*This block of code will load the css file*/
    wp_enqueue_style('the_archive_main_styles', get_stylesheet_uri());
}

/* WordPress has a function named add_action and we gave it two arguments*/
add_action('wp_enqueue_scripts','the_archive_files');

/*This block of code will update the title tag on each page. So each page will have its unique title tag*/
function the_archive_features () {
    
    
    
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'the_archive_features');
