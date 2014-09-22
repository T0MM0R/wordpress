<?php

/* Template Name: About Page
 * 
 */

get_header();

?>
<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="about">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
    
    <?php endwhile; endif; ?>
    
    <div class="row">
        <h5>Photographers</h5>
        
        <?php get_template_part('content', 'author'); ?>
        
    </div>
</div>

<?php get_footer();?>
