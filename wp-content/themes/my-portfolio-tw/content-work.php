<div class="portfolio <?php echo (!is_front_page()) ? 'card col-md-5' : '' ;?>">
        
        <div class="title">
            <h3>
                <?php if(!is_single()) :?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php else: ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </h3>
            <ul class="info">
                <li>By: <?php the_author(); ?></li>
                <li>Published in <?php the_category(', '); ?></li>
                <li>On <?php the_time('F j, Y'); ?></li>
            </ul>
        </div>
        
        <a href="<?php the_permalink();?>">
            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">
        </a>
        
        <?php if (!is_single()) : ?>
            <p>
                <?php the_field( 'description' ); ?>
            </p>
            
            <a class="btn btn-primary" href="<?php the_field('project_url'); ?>">View Project &rarr;</a>
        <?php endif; ?>
        
    </div>