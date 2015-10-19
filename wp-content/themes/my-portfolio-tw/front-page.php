<?php get_header();?>


<div class="container-fluid" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; text-align: center;">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
        </div>
    </div>
</div>
    
<div id="content" class="container">
        
    <div class="row">

        <h5>Recent Work</h5>
        <div class="flexslider card">
            <ul class="slides">
            <?php $work = new WP_Query( array('post_type' => 'work') )?>

            <?php if ( $work->have_posts() ) : while ( $work->have_posts() ) : $work->the_post(); ?>

            <li>

                <?php get_template_part( 'content', 'work' ); ?>

            </li>

        <?php endwhile; endif; ?>
            </ul>
        </div>
        
    </div>
    
</div>

<?php
    $fp_args = array(
        'post_type' => 'post',
        'category_name' => 'featured',
        'posts_per_page' => 1
    );
    $featured_post = new WP_Query( $fp_args );
?>
<?php if ( $featured_post->have_posts() ) : while ( $featured_post->have_posts() ) : $featured_post->the_post(); ?>
<div class="container-fluid" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; text-align: center;">

    <div class="container">
        <div class="row">
        <?php the_content() ?>
        </div>
    </div>
    
</div>
<?php endwhile; endif; ?>

<div class="container">
    <div class="row">

        <h5>Latest Posts</h5>
        <div class="recent-post">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'cat' => -33
            );

            $posts = new WP_Query( $args );

            ?>

            <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>

                <div class="col-md-4">
                    <?php get_template_part( 'content', 'post' ); ?>
                </div>

            <?php endwhile; endif; ?>

        </div>

    </div>
    
    <div class="row">
        
        <h5>Testimonial</h5>
        
        <?php get_template_part( 'content', 'testimonials' );?>
        
    </div>
    
</div>

<?php get_footer();?>

