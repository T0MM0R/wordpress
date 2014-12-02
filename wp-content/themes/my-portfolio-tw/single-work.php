<?php get_header();?>

<div class="row">
    <div class="container card">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        
        <hr>

        <div class="project-images col-md-12 no-padding">
            
            <article>

                <?php the_content(); ?>
                
            </article>
            

        </div>

        <?php endwhile; else: ?>

            <p>Page not found</p>

        <?php endif; ?>

    </div>
</div>

<?php get_footer();?>

