    <div class="col-md-3 portfolio">
        
        <a href="<?php the_permalink();?>">
            <img class="img img-responsive" src="<?php the_field( 'homepage_slider_image' ); ?>">
        </a>
        
        <h4>
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h4>
        
        <?php the_field( 'description' ); ?>
        
    </div>