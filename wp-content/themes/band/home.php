<?php get_header() ?>

<div id="main" class="container">
    
    
    <?php $featured_post = new WP_Query( array('post_type' => 'post', 'cat' => 3, 'posts_per_page' => 1) ) ?>

    <?php if ( $featured_post->have_posts() ): while ( $featured_post->have_posts() ): $featured_post->the_post() ?>
    
    <div class="row">
        <?php get_template_part('content', 'featured') ?>
    </div>
    
    <?php endwhile; endif; ?>
    
    
    <div class="row">
        <?php if ( have_posts() ): while ( have_posts() ): the_post() ?>
        
            <?php get_template_part('content', 'post') ?>
        
        <?php endwhile; endif; ?>
    </div>
    
</div>

<?php get_footer() ?>

