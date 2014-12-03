    <div class="portfolio">
        
        <a href="<?php the_permalink();?>">
            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">
        </a>
        
        <h4>
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h4>
        
        <?php if (!is_single()) : ?>
            <?php the_field( 'description' ); ?>
        <?php endif; ?>
        
    </div>