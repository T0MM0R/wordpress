<?php header("HTTP/1.0 404 Not Found"); ?>
<?php get_header();?>

<div>
    <p>We could not find what you were looking for! :(</p>
    
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <p>Check out some of our latest blog entries</p>
        <?php get_template_part( 'content', 'post' ); ?>
        <p>Looking for a photographer? Contact us today to book your event!</p>
        <a href="contact" alt="contact us to book your event!" class="btn btn-primary btn-block">Book your Event &rarr;</a>

    <?php endwhile; endif; ?>
    
    
</div>

<?php get_footer();?>

