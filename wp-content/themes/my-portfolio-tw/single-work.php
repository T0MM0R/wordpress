<?php get_header();?>
    
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="card">

            <h3><?php the_title(); ?></h3>

            <hr>

            <article>

                <?php the_content(); ?>

            </article>

            <a class="btn btn-primary" href="<?php the_field('project_url'); ?>">View Project &rarr;</a>

            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">

        </div>

        <?php endwhile; else: ?>

            <p>Page not found</p>

        <?php endif; ?>

    </div>

<?php get_footer();?>

