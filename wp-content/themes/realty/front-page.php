<?php get_header();?>

<div class="container">
    <?php the_content(); ?>
</div>

<?php $properties = new WP_Query(array("post_type" => "property")); ?>
<div class="container">
    <div class="page-header">
        <h2>Featured Properties!</small></h2>
    </div>
    <div id="myCarousel" class="carousel slide jumbotron" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <?php for ($i = 0; $i < $properties->post_count; $i++): ?>
        <li data-target="#myCarousel" data-slide-to="<?= $i+1 ?>" class="<?= ($i === 0)? "active" : "" ?>"></li>
      <?php endfor; ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php if ( $properties->have_posts() ): while ( $properties->have_posts() ): $properties->the_post() ?>
        <div class="item featured-properties <?php echo ($properties->current_post == 0)? "active": "";?> ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php the_post_thumbnail('large', array('class' => 'img-responsive img-thumbnail')); ?>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= get_field('featured_image_2')['sizes']['medium']; ?>" class="img-responsive img-rounded">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <img src="<?= get_field('featured_image_3')['sizes']['medium']; ?>" class="img-responsive img-rounded">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h2><?php the_title() ?></h2></div>
                            <div class="panel-body">
                                <?php the_excerpt() ?>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">Square feet <span class="badge"><?php the_field('squarefeet')?></span></li>
                                <li class="list-group-item list-group-item-info">Acreage <span class="badge"><?php the_field('acreage')?></span></li>
                                <li class="list-group-item list-group-item-info">Bedrooms <span class="badge"><?php the_field('bedrooms')?></span></li>
                            </ul>
                            <div class="panel-foot">
                                <a href="<?php the_permalink() ?>" class="btn btn-info btn-block">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
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
            <h2>Jim's Advice <small>Buying a home is a big decision!</small></h2>
        </div>
        
        <?php get_template_part('content', 'thumbnail-posts'); ?>
        
    </div>
</div>

<?php get_footer();?>

