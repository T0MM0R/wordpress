<?php get_header();?>

<div class="row">
    
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="card">
        
            <h3><?php the_title(); ?></h3>

            <hr>

                <article>

                    <?php the_content(); ?>

                </article>
            
            <hr>
                
            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">

        </div>

            <?php endwhile; else: ?>

                <p>Page not found</p>

            <?php endif; ?>
            
        </div>

</div>

<?php get_footer();?>

