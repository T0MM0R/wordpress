<?php

/* Template Name: Work Page
 * 
 */

get_header();

?>

<div class="grid_12 omega clearfix">

<?php 

    $args = array(
        'post_type' => 'work'
    );
    
    $the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php get_template_part( 'content', 'work' ); ?>

<?php endwhile; endif; ?>

</div>

<?php get_footer();?>
