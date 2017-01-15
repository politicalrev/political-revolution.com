<section class="page responsive-text">
    <!--<div class="letterhead">
        <i class="fa fa-star star"></i> 
        <i class="fa fa-star star"></i> 
        <i class="fa fa-star star"></i> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/button.svg" alt="TPR Logo"> 
        <i class="fa fa-star star"></i> 
        <i class="fa fa-star star"></i> 
        <i class="fa fa-star star"></i>
    </div>-->
    <?php the_content(); ?>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
