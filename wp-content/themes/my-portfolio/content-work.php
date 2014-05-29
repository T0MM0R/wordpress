    <div class="grid_6 spotlight project" style="background-color: <?php the_field( 'background_color' );?>">
        
        <a href="<?php the_permalink();?>">
            <img src="<?php the_field( 'homepage_slider_image' ); ?>">
        </a>
        
        <h4>
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h4>
        
        <?php the_field( 'description' ); ?>
        
    </div>