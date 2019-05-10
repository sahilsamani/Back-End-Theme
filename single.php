<!--This page is dedicated to the individual posts that open when the user clicks on a blog post -->
<?php


    get_header();


    while(have_posts()) {
        the_post();  ?>


<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-12.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p style="color: white;"></p>
        </div>
    </div>
</div>

<!--This block of code will add a small metabox that will allow users to head to the previous page-->
<div class="container container--narrow page-section">

    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/news'); ?>"><i class="fa fa-home" aria-hidden="true"></i> News Blog Home </a> <span class="metabox__main">Posted By <?php the_author_posts_link(); ?> on <?php the_time('j.n.y'); ?></span></p>
    </div>

    <div class="generic_content"><?php the_content(); ?></div>
</div>


<?php }

    get_footer();

    ?>
