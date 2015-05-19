<?php get_header();?>
    
<div class="container-fluid center" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) 0 -100px no-repeat; background-attachment: fixed; background-size: cover; height: 600px;">

    <div class="container">

        <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

        </div>

    </div>

</div>

<?php get_footer();?>