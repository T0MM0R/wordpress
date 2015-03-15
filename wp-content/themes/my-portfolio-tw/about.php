<?php

/* Template Name: About Page
 * 
 */

get_header();

?>
<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="about card">
        <h5><?php the_title(); ?></h5>
        <?php the_content(); ?>
    </div>
    
    <?php endwhile; endif; ?>
    
    <?php get_template_part( 'content', 'author-single' ); ?>
    
</div>

<?php get_footer();?>
