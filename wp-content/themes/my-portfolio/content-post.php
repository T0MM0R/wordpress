
    <div class="title">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <ul class="info">
            <?php if(is_single()): ?><li><?php echo get_avatar( get_the_author_meta('user_email') , 100 ); ?></li><?php endif; ?>
            <li>Author: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
            <li>Posted in: <?php the_category(', '); ?></li>
            <li>Date: <?php the_time('F j, Y'); ?></li>
        </ul> 
    </div>

    <div class="excerpt">
        
        <?php if(is_single()): ?>
        
            <?php the_content(); ?>
            <?php comments_template(); ?>
        
        <?php else: ?>
        
        <p>
            <?php the_excerpt(); ?>
            <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
        </p>
        
        <?php endif; ?>
        
        
    </div>
