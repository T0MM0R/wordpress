<?php ( ! have_posts() ) ? wp_redirect(get_404_template()): ""; ?>
<?php get_header();?>

<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <hr>

    <?php endwhile; else: ?>
        
        index
        
    <?php endif; ?>

</div>

<?php get_template_part( 'content', 'testimonials' );?>



<?php get_footer();?>