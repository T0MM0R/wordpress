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
        <div class="thumbnail col-md-8">
            
            <article>
               <?php the_content(); ?> 
            </article>
        </div>
        <div class="thumbnail col-md-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" 
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBdd41ph5PmiBzzmgYaJi65soPJrrAZIZQq=<?= get_field('location')['address'] ?>" 
                        allowfullscreen></iframe>
            </div>
            <ul class="list-group">
                <li class="list-group-item list-group-item-info">Square feet <span class="badge"><?php the_field('squarefeet')?></span></li>
                <li class="list-group-item list-group-item-info">Acreage <span class="badge"><?php the_field('acreage')?></span></li>
                <li class="list-group-item list-group-item-info">Bedrooms <span class="badge"><?php the_field('bedrooms')?></span></li>
                <li class="list-group-item list-group-item-info">Bathrooms <span class="badge"><?php the_field('bathrooms')?></span></li>
                <li class="list-group-item list-group-item-info">Floors <span class="badge"><?php the_field('floors')?></span></li>
            </ul>
        </div>
    </div>
</div>

<?php endwhile; else: ?>
        
    <?php wp_redirect(get_404_template()) ?>

<?php endif; ?>





<?php get_footer();?>

