    <div class="col-md-6 portfolio">
        
        <a href="<?php the_permalink();?>">
            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">
        </a>
        
        <div class="caption">
            <h4>
                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
            </h4>

            <p><?php the_field( 'description' ); ?></p>
        </div>
        
        <?php if ($wp_query->post_count%2): ?>
        <div class="clearfix"></div>
        <?php endif; ?>

    </div>