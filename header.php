<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>

</head>

<body>


    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>The Tocumwal</strong> Archive</a></h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <li><a href="<?php echo site_url('/about') ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('/stories') ?>">Stories</a></li>
                        <li><a href="<?php echo site_url('/Add a New Story') ?>">Add a New Story</a></li>
                        <li><a href="<?php echo site_url('/news') ?>">News</a></li>
                        <li><a href="<?php echo site_url('/Add News') ?>">Add News</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="<?php echo site_url('/gallery') ?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('/Get in Touch') ?>">Get in Touch</a></li>
                    </ul>

                    <!--This block of code is for the user log in, log out, and sign in buttons. This will enable the user to sign in his account, then log in to post stories and news on the website-->
                </nav>
                <div class="site-header__util">
                    <?php if(is_user_logged_in()) { ?>
                    <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small  btn--dark-orange float-left btn--with-photo">
                        <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                        <span class="btn__text">Log Out</span>
                    </a>

                    <?php } else { ?>
                    <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>

                    <?php } ?>

                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>
