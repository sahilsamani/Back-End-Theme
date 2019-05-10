<!--This front-page.php will power the homepage of the website-->

<?php get_header(); ?>


<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-3.jpg') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome</h1>
        <h2 class="headline headline--medium">Please browse around for more information.</h2>


    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our Historical Stories</h2>

            <!--Creating a custom query for stories. This allows the story section to appear on the front page of the web page-->
            <?php  
            
                $homePageStories = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'story'
                
                ));
         
                while($homePageStories->have_posts())  {
                    
                    $homePageStories->the_post(); ?>

            <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php the_time('M'); ?></span>
                    <span class="event-summary__day"><?php the_time('d');?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php  the_title() ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                </div>


            </div>

            <?php }
            
                ?>





            <p class="t-center no-margin"><a href="<?php echo site_url('/stories');?> " class="btn btn--blue">View All Stories</a></p>

        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our News Blog</h2>

            <!--Created a custom query that enables us to query WordPress the content that we want. In this case we are quering WordPress to output the news blog content from the individual news blog post-->
            <?php  
                $homePagePosts = new WP_Query(array(
                
                'posts_per_page' => 2,
                ));
            
            /* This block of code is telling the user that while the variable $homepagePosts that has -> 'have_posts' is true, it will output the posts from the news blog post*/    
                while($homePagePosts->have_posts())  {
                    
                    $homePagePosts->the_post();?>

            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php the_time('M'); ?></span>
                    <span class="event-summary__day"><?php the_time('d');?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>


                </div>
            </div>

            <?php } wp_reset_postdata();
            
            ?>




            <p class="t-center no-margin"><a href="<?php echo site_url('/news'); ?>" class="btn btn--yellow">View All News Blog Posts</a></p>
        </div>
    </div>
</div>

<!--This line of code is the story smart slider which is used in the front page of the web page-->

<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
<!--
<div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(images/bus.jpg);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Transportation</h2>
        <p class="t-center">All students have free unlimited bus fare.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(images/apples.jpg);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">An Apple a Day</h2>
        <p class="t-center">Our dentistry program recommends eating apples.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(images/bread.jpg);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Food</h2>
        <p class="t-center">Fictional University offers lunch plans for those in need.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>
-->


<?php get_footer(); ?>
