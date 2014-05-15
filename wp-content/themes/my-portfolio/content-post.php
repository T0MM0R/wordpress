<div class="clearfix">
    <header class="title">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header>
    
    <ul class="info">
        <li>Posted in: <?php the_category(', '); ?></li>
        <li>Written by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
        <li>On: <?php the_time('F j, Y'); ?></li>
    </ul>
    
    <div class="excerpt">
        <?php the_excerpt(); ?>
        <p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
    </div>
</div>
