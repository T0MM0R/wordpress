<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="jumbotron" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()) ?>) center no-repeat; background-attachment: fixed; background-size: cover; text-align: center;">
    <div class="container">
        <div class="row">

            <div class="page-header">
                <h1><?php the_title(); ?></h1>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="thumbnail col-md-10 col-md-offset-1">
            <article>
               <?php the_content(); ?> 
            </article>
            <section>
                <?php comments_template(); ?>
            </section>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
        
    <?php wp_redirect(get_404_template()) ?>

<?php endif; ?>





<?php get_footer();?>

