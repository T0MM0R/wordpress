<div id="featured" class="container-fluid">
    <div class="row">
        <div class="flexslider">
            <ul class="slides">
                <?php $work = new WP_Query( array('post_type' => 'work', 'posts_per_page' => 1, 'orderby' => 'rand') ) ?>
                <?php if ( $work->have_posts() ) : ?> 
                    <?php while ( $work->have_posts() ) : ?>
                        <?php $work->the_post() ?>
                            <li>
                                <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ) ?>" alt="<?php the_title() ?> featured image">
                                <div id="featured-info" class="featured-album">
                                    <a href="<?php the_permalink() ?>">
                                        <h3><?php the_title() ?></h3>
                                        <h4><?php the_field( 'description' ) ?></h4>
                                    </a>
                                </div>
                            </li>        
                    <?php endwhile ?> 
                <?php endif ?>            
            </ul>
        </div>
    </div>
</div>

