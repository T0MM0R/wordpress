<?php get_header();?>
</div>
    
<!--    <div id="featured" class="container-fluid no-padding">
        
        <div class="row">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                        $args = array(
                            'post_type' => 'work'
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>" alt="<?php the_title(); ?> featured image">
                            <div id="featured-info" class="featured-album">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                    <h4><?php the_field( 'description' ) ;?></h4>
                                </a>
                            </div>
                            
                    </li>        
                    <?php endwhile; endif; ?>            
                </ul>
            </div>
        </div>
        
    </div>-->

    <div id="content" class="container">
    
        <h5>Featured Post</h5>
        <div class="row">
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
        <div class="row">
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
        <div class="row recent-post">
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
        <div class="row">
            <?php get_template_part( 'content', 'testimonials' );?>
        </div>
    </div>

<?php get_footer();?>

