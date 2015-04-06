<?php get_header();?>
    
    <div id="featured" class="container-fluid">
        
        <div class="row">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                        $args = array(
                            'post_type' => 'work',
                            'posts_per_page' => 1,
                            'orderby' => 'rand'
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
        
    </div>

    <div id="content" class="container">
    
        <h5>Featured Post</h5>
        <article>
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

            
            <!-- Featured Image -->
            <div class="col-md-6 album">
                <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
            </div>

            <div class="title col-md-6">
                <h3>
                    <?php if(!is_single()) :?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php else: ?>
                    <?php the_title(); ?>
                    <?php endif; ?>
                </h3>
                <ul class="info">
                    <li>By: <?php the_author(); ?></li>
                    <li>Published in <?php the_category(', '); ?></li>
                    <li>On <?php the_time('F j, Y'); ?></li>
                </ul>
                
                <p>
                    <?php the_excerpt(); ?>
                    <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
                </p>
            </div>
            
            

        </article>
        <?php endwhile; endif; ?>
        
        <div class="row">        
            <div class="col-md-8 album">
                <h5>Albums</h5>
                
                <div class="row">        
                    <?php

                    wp_reset_postdata();

                    $args = array(
                        'post_type' => 'work'
                    );

                    $the_query = new WP_Query( $args );

                    ?>

                    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php get_template_part( 'content', 'work' ); ?>

                    <?php endwhile; endif; ?>
                </div>
                
            </div>
            
            <div class="col-md-4 recent-post">
                <article>
                    <h5>Latest Post</h5>
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
            
        </div>
        
        <div class="row">
            <?php get_template_part( 'content', 'testimonials' );?>
        </div>
    </div>

<?php get_footer();?>

