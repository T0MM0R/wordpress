<?php get_header();?>

<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row">

            <?php get_template_part( 'content', 'post' );?>
            
        </div>

    <?php endwhile; else: ?>
        
        <?php wp_redirect(get_404_template()); ?>

    <?php endif; ?>
        
    <?php get_template_part( 'content', 'testimonials' );?>

</div>





<?php get_footer();?>

