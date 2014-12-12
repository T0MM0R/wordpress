<?php get_header();?>

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
                    <article>

                        <?php get_template_part( 'content', 'post' ); ?>

                    </article>
                <?php endwhile; endif; ?>
            </div>
            
        </div>
            
        <h5>Latest Posts</h5>
        <div class="row recent-post">
            <article>

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

            </article>
        </div>
        
        <h5>Testimonial</h5>
        <div class="row">
            <?php get_template_part( 'content', 'testimonials' );?>
        </div>
    </div>

<?php get_footer();?>

