<?php ( ! have_posts() ) ? wp_redirect(get_404_template()): ""; ?>
<?php get_header();?>

<div class="container">
    
    <div class="row">
        
        
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
        <div class="single">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>

        <?php endwhile; else: ?>

            index

        <?php endif; ?>
            
        
    </div>

</div>

<?php get_footer();?>