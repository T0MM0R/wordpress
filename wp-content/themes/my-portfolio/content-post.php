<div <?php if (has_post_thumbnail()) { echo "class=\"col-md-6\""; } ?>>
    <?php if(is_single()): ?>
        <div class="album pull-right"><?php echo get_custom_avatar( get_the_author_meta('user_email') , 100 , 'mysteryman' , 'gravatar' ); ?></div>
    <?php endif; ?>
    <div class="title">
        <h3><?php if(!is_single()) :?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php endif; ?></h3>
        <ul class="info">
            <li><?php the_author(); ?></li>
            <li>Posted in: <?php the_category(', '); ?></li>
            <li><?php the_time('F j, Y'); ?></li>
        </ul>
        
    </div>
        
    <?php if(is_single()): ?>

        <article>

            <?php the_content(); ?>

        </article>

    <?php else: ?>
        
    <div class="excerpt">

        <p>
            <?php the_excerpt(); ?>
            <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
        </p>

    </div>
        
    <?php endif; ?>
    
</div>

<?php if (has_post_thumbnail()) :?>
    <?php if (is_front_page() && in_category("featured")) : ?>

        <!-- Featured Image -->
        <div class="col-md-6 album">
            <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
        </div>
        
    <?php elseif (!is_front_page()) : ?>
        
        <!-- Featured Image -->
        <div class="col-md-6 album">
            <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
        </div>
        
    <?php endif; ?>

<?php endif; ?>
