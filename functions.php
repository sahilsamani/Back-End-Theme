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

/*These lines of code introduce WordPress functions that are used to create the theme of the web page and the custom post type*/
add_action('after_setup_theme', 'the_archive_features');

/*Redirect Subscriber accounts out of admin and onto homepage*/

add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
    
    $ourCurrentUser = wp_get_current_user();
    
    if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber')  {
        
        wp_redirect(site_url('/'));
        exit;
    }
    

}
//Customize the Login Screen

add_filter('login_headerurl', 'theHeaderUrl');

function theHeaderUrl() {
    
    return esc_url(site_url('/'));
}

//curl -X POST https://sahils.sgedu.site/wp-admin/admin-ajax.php -d 'action=query-attachments&post_id=0&query[orderby]=date&query[order]=DESC&query[post_per_page]=40&query[paged]=1'