<?php get_header();?>


<div class="container-fluid" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; height: 600px; text-align: center;">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; endif; ?>
    </div>
</div>
    
<div id="content" class="container">
        
    <div class="row">

        <div class="col-md-8">

            <h5>Recent Work</h5>
            <div class="flexslider card">
                <ul class="slides">
            <?php

            wp_reset_postdata();

            $args = array(
                'post_type' => 'work'

            );

            $the_query = new WP_Query( $args );

            ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <li>

                    <?php get_template_part( 'content', 'work' ); ?>

                </li>

            <?php endwhile; endif; ?>
                </ul>
            </div>

        </div>
        
        <div class="col-md-4">
        
            <h5>Featured Post</h5>
            <?php
            wp_reset_postdata();
            $args = array(
                'post_type' => 'post',
                'category_name' => 'featured',
                'posts_per_page' => 1
            );

            $the_query = new WP_Query( $args );

            ?>
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php get_template_part( 'content', 'post' ); ?>

            <?php endwhile; endif; ?>
        
        </div>
        
    </div>

    <div class="row">
            
        <h5>Latest Posts</h5>
        <div class="row recent-post">

            <?php

            wp_reset_postdata();

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'cat' => -33
            );

            $the_query = new WP_Query( $args );

            ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-md-4">
                    <?php get_template_part( 'content', 'post' ); ?>
                </div>

            <?php endwhile; endif; ?>
            
        </div>
        
    </div>
    
    <div class="row">
        
        <h5>Testimonial</h5>
        <div class="row">
            <?php get_template_part( 'content', 'testimonials' );?>
        </div>
        
    </div>
</div>

<?php get_footer();?>

