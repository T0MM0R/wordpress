<?php get_header();?>
<p>this is the single-work.php file</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h3><?php the_title(); ?></h3>
<?php the_field( 'description' ); ?>
<hr>

<?php endwhile; else: ?>

<?php endif; ?>

<?php get_footer();?>

