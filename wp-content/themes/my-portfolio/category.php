<?php get_header();?>

<div class="container">
    
    <h1>Category: <?php single_cat_title(); ?></h1>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'post' );?>

    <?php endwhile; else: ?>
        
        <?php wp_redirect(get_404_template()); ?>

    <?php endif; ?>

</div>

<?php get_template_part( 'content', 'testimonials' );?>



<?php get_footer();?>