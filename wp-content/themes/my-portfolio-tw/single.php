<?php get_header();?>

<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="row">

            <?php get_template_part( 'content', 'post' );?>
            
        </div>

    <?php endwhile; else: ?>
        
        <p>Page not found! :(</p>

    <?php endif; ?>
        
    <div class="row">
        
        <?php get_template_part( 'content', 'testimonials' );?>
        
    </div>

</div>





<?php get_footer();?>

