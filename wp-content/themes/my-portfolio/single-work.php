<?php get_header();?>

<div class="row">
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <h3><?php the_title(); ?></h3>
        <div class="intro">
            <p><?php the_field( 'description' ); ?></p>
        </div>

        <hr>

        <div class="project-images col-md-12 no-padding">

            <?php the_field( 'project_images' ); ?>
            

        </div>

        <?php endwhile; else: ?>

            <p>Page not found</p>

        <?php endif; ?>

    </div>
</div>

<?php get_footer();?>

