<?php get_header();?>
</div>
    <div id="featured" class="clearfix flexslider">
        
        <ul class="slides">
            <?php 

                $args = array(
                    'post_type' => 'work'
                );

                $the_query = new WP_Query( $args );

            ?>

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li style="background-color: <?php the_field( 'background_color' ); ?>;">
                <div class="container">
                    <div class="grid_8">
                        <img src="<?php the_field( 'homepage_slider_image' ); ?>" alt="<?php the_title(); ?> featured image">
                    </div>
                    <div id="featured-info" class="grid_4 omega">
                        <h5>Featured Project</h5>
                        <h3 style="color:<?php the_field( 'button_color' ); ?>;"><?php the_title(); ?></h3>
                        <p><?php the_field( 'description' ) ;?></p>
                        <a class="btn blue" href="<?php the_field( 'url' ); ?>" style="background-color:<?php the_field( 'button_color' ); ?>;">View Project &rarr;</a>
                    </div>
                </div>
            </li>        
            <?php endwhile; endif; ?>            
        </ul>

    </div>

    <div class="container clearfix">
        <div class="grid_12 omega">
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
    
        <div class="push_2 grid_10 omega clearfix">
            <article>
                
                <?php get_template_part( 'content', 'post' ); ?>
                
            </article>
        </div>
        
        <?php endwhile; endif; ?>
        
        <div class="grid_12 omega clearfix">
                        
            <div class="grid_8">
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
            
            <div class="grid_4 recent-post">
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

