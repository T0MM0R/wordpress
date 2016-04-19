<?php

/* Template Name: Work Page
 * 
 */

get_header();

?>
<div class="container">
    <div class="row">

        <?php 

            $args = array(
                'post_type' => 'work'
            );

            $the_query = new WP_Query( $args );

        ?>

        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php get_template_part( 'content', 'work' ); ?>
            <?php if ( 0 == (($the_query->current_post + 1) % 2) ): ?>
            <div class="clearfix"></div>
            <?php endif; ?>

        <?php endwhile; endif; ?>

    </div>
</div>

<?php get_footer();?>
