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
            
            <?php if (has_post_thumbnail()) : ?>
                
                <?php the_post_thumbnail() ?>
            
            <?php endif; ?>


        </div>

            <?php endwhile; else: ?>

                <p>Page not found</p>

            <?php endif; ?>
            
        </div>

</div>

<?php get_footer();?>

