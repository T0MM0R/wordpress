<?php header("HTTP/1.0 404 Not Found"); ?>
<?php get_header();?>

<?php 

            $args = array(
                'post_type' => 'work'
            );

            $the_query = new WP_Query( $args );

?>

<div>
    <p>We could not find what you were looking for! :(</p>
    <p>Check out some of our latest work instead</p>
    
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php get_template_part( 'content', 'work' ); ?>

    <?php endwhile; endif; ?>
    
    <p>Like what you see? Contact us today to book your event!</p>
    <a href="contact" alt="contact us to book your event!" class="btn btn-primary btn-block">Book your Event &rarr;</a>
</div>

<?php get_footer();?>

