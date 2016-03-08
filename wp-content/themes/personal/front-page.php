<?php get_header();?>


<div class="jumbotron" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; text-align: center;">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="page-header">
        <h2>Recent Work <small>Check out my most recent projects!</small></h2>
    </div>
    
    <?php get_template_part('content', 'thumbnail-work'); ?>
</div>

<?php $testimonials = new WP_Query(array("post_type" => "testimonial", "posts_per_page" => 1)); ?>
<?php if ( $testimonials->have_posts() ) : while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
<div class="jumbotron" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; background-color: graytext;">
    <div class="container">
        <div class="row">

            <?php get_template_part('content', 'testimonial'); ?>
            
        </div>
    </div>
</div>
<?php endwhile; endif; ?>


<div class="container">
    <div class="recent-posts">
        <div class="page-header">
            <h2>Recent Posts <small>Read about what I have been learning!</small></h2>
        </div>
        
        <?php get_template_part('content', 'thumbnail-posts'); ?>
        
    </div>
</div>

<?php get_footer();?>

