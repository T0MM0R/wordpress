<div class="clearfix">
    <header class="title">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header>
    
    <ul class="info">
        <?php if(is_single()): ?><li><?php echo get_avatar( get_the_author_meta('user_email') , 150 ); ?></li><?php endif; ?>
        <li>Posted in: <?php the_category(', '); ?></li>
        <li>Author: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
        <li>Date: <?php the_time('F j, Y'); ?></li>
    </ul>
    
    <div class="excerpt">
        
        <?php if(is_single()): ?>
        
            <?php the_content(); ?>
            <?php comments_template(); ?>
        
        <?php else: ?>
        
        <?php the_excerpt(); ?>
        <p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
        
        <?php endif; ?>
        
        
    </div>
</div>
