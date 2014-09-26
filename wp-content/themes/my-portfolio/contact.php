<?php

/* Template Name: Contact Page
 * 
 */

get_header();

?>
<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h5><?php the_title(); ?></h5>
    
    <div class="about album col-md-8">
        <?php the_content(); ?>
    </div>
    
    <?php endwhile; endif; ?>
    
    <div class="about album col-md-4">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive margin-bottom-10 visible-md visible-lg' ) ) ?>
        <?php endif; ?>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h5>Photographers</h5>
            <?php get_template_part('content', 'author'); ?>
        </div>
    </div>
</div>

<?php get_footer();?>
