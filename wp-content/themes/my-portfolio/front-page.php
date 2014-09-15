<?php get_header();?>
</div>
    
    <div id="featured" class="container">
        <h5>Latest Albums</h5>
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
                    <div>
                        <a href="<?php the_field( 'url' ); ?>">
                            <div class="featured-album">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field( 'description' ) ;?></p>
                            </div>
                            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>" alt="<?php the_title(); ?> featured image">
                        </a>
                    </div>
                </li>        
                <?php endwhile; endif; ?>            
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">
            <h5>Featured Post</h5>
        </div>
    
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
    
        <div class="col-md-offset-2 col-md-10">
            <article>
                
                <?php get_template_part( 'content', 'post' ); ?>
                
            </article>
        </div>
        
        <?php endwhile; endif; ?>
        
        <div class="col-md-12">
                        
            <div class="col-md-8">
                <h5>Albums</h5>
                        
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
            
            <div class="col-md-4 recent-post">
                <article>
                    <h5>Latest Post</h5>
                    <?php
                    
                    wp_reset_postdata();
                    
                    $args = array(
                        'post_type' => 'post',
                        'cat' => -3,
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

<?php get_template_part( 'content', 'testimonials' );?>

<?php get_footer();?>

