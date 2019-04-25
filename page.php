<!--This page is dedicated to individual pages-->

<?php


    get_header();


    while(have_posts()) {
        the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/misc/tocumwal-misc-12.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p style="color: white;">DONT FORGET TO REPLACE ME LATER.</p>
        </div>
    </div>
</div>


<div class="container container--narrow page-section">

    <!--This line of code will get the ID of the current page we are viewing and then WordPress will use that number to look up the ID of its Parent page and if the page doesn't have a parent, it returns a 0, which evaluates to false-->
    <?php  
        
        $varParent = wp_get_post_parent_id(get_the_ID());
        if($varParent) { ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($varParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($varParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

    <?php }
      
      ?>

    <!--This block of code basically states how the user can navigate to different child pages and its parent page will appear on the small beige navigation box-->

    <?php 
        
    $testingArray = get_pages(array(
    
        'child_of' => get_the_ID()
    ));
        
    if($varParent or $testingArray)  { ?>
    <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($varParent); ?>"><?php echo get_the_title($varParent); ?></a></h2>
        <ul class="min-list">

            <!--This block of code is the conditional logic. It states that if the user is on the parent page the Look for child page variable will equal to the var parent variable. If the condition is false then the user can get the current ID  of the page that the user is viewing-->
            <?php 
        
                if($varParent) {
                    
                    $LookforChildrenOf = $varParent;
                    
                } else {
                    
                    $LookforChildrenOf = get_the_ID();
                }
        
                wp_list_pages(array (
      
                'title_li' => NULL,
                'child_of' => $LookforChildrenOf,
                'sort_column' => 'menu_order'    
            )); ?>
        </ul>
    </div>
    <?php } ?>


    <div class="generic-content">
        <?php the_content(); ?>
    </div>

</div>


<?php }

    get_footer();

?>
