<?php get_header();?>
    
<div class="container-fluid center" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; height: 100%;">

    <div class="container">

        <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>

        </div>

    </div>

</div>

<div class="container center">
    <div class="author">
        <h3>Your agent</h3>
        <div class="row">
            <div class="col-md-4">
                <?php echo get_custom_avatar( get_the_author_meta('user_email'), 150 , 'mysteryman' , 'gravatar' ); ?>
            </div>
            <div class="col-md-8">
                <p><?php the_author_meta('description'); ?></p>
            </div>
        </div>
        
        <div class="row">
            <h1><?php the_author(); ?></h1>
            <ul class="info">
                <li><a href="mailto:<?php the_author_meta('user_email'); ?>"><i class="fa fa-envelope"></i></a></li>
                <li><a href="<?php the_author_meta('user_url'); ?>" target="_blank"><i class="fa fa-home"></i></a></li>
                <li><a href="<?php the_author_meta('twitter'); ?>"><i class="fa fa-twitter fa-2"></i></a></li>
                <li><a href="<?php the_author_meta('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
</div>


<?php get_footer();?>