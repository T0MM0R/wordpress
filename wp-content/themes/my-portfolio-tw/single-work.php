<?php get_header();?>
    
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="card row">
            <h3><?php the_title(); ?></h3>
            <hr>
            <div class="col-md-8">
                
                <article>

                    <?php the_content(); ?>

                </article>
                
                <a class="btn btn-block btn-primary" href="<?php the_field('project_url'); ?>">View Project &rarr;</a>
            
            </div>
            
            <div class="col-md-4">
                <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">
            </div>

        </div>
        
        

        <?php endwhile; else: ?>

            <p>Page not found</p>

        <?php endif; ?>

    </div>

<?php get_footer();?>

