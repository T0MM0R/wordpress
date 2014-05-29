<?php get_header();?>

<div class="grid_12 omega clearfix">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3><?php the_title(); ?></h3>
    <div class="intro">
        <p><?php the_field( 'description' ); ?></p>
    </div>
    
    <hr>
    
    <div class="project-images">
        
        <?php the_field( 'project_images' ); ?>
        
    </div>

    <?php endwhile; else: ?>
    
        <p>Page not found</p>

    <?php endif; ?>

</div>

<?php get_footer();?>

