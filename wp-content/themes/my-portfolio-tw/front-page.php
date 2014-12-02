<?php get_header();?>
</div>

    <div id="content" class="container">
    
        <h5>Featured Post</h5>
        <div class="row card">
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
        
        <h5>Recent Work</h5>
        <div class="row card">
            <div class="flexslider">
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
            
        <h5>Latest Post</h5>
        <div class="row recent-post card">
            <article>

                <?php

                wp_reset_postdata();

                $args = array(
                    'post_type' => 'post',
                    'cat' => -2,
                    'posts_per_page' => 1
                );

                $the_query = new WP_Query( $args );

                ?>

                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php get_template_part( 'content', 'post' ); ?>

                <?php endwhile; endif; ?>

            </article>
        </div>
        
        <h5>Testimonial</h5>
        <div class="row card">
            <?php get_template_part( 'content', 'testimonials' );?>
        </div>
    </div>

<?php get_footer();?>

