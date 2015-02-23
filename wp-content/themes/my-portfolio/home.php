<?php get_header();?>


<div class="container">
    
    <?php if ( have_posts() ) : $count = 0; while ( have_posts() ) : $count++; the_post(); ?>
    
    <div class="row blog">

        <?php get_template_part( 'content', 'post' );?>
        
    </div>

    <?php endwhile; else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>
            
    
<?php get_template_part( 'content', 'testimonials' );?>
        
</div>





<?php get_footer();?>