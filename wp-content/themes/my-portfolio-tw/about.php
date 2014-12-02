<?php

/* Template Name: About Page
 * 
 */

get_header();

?>
<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="about card col-md-6">
        <h5><?php the_title(); ?></h5>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive margin-bottom-10 visible-md visible-lg' ) ) ?>
        <?php endif; ?>
        <?php the_content(); ?>
    </div>
    
    <?php endwhile; endif; ?>
    
    <div class="about col-md-4">
        
        <?php get_template_part('content', 'author'); ?>
        
    </div>
</div>

<?php get_footer();?>
