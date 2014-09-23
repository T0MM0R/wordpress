<div <?php if (has_post_thumbnail()) { echo "class=\"col-md-6\""; } ?>>
    <div class="title">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <ul class="info">
            <?php if(is_single()): ?><li class="img album"><?php echo get_custom_avatar( get_the_author_meta('user_email') , 100 , 'mysteryman' , 'gravatar' ); ?></li><?php endif; ?>
            <li><a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a></li>
            <li>Posted in: <?php the_category(', '); ?></li>
            <li><?php the_time('F j, Y'); ?></li>
        </ul> 
    </div>

    <div class="excerpt">
        
        <?php if(is_single()): ?>
            <?php the_content(); ?>
        
        <?php else: ?>
        
        <p>
            <?php the_excerpt(); ?>
            <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
        </p>
        
        <?php endif; ?>
    </div>
</div>

<?php if (has_post_thumbnail()) :?>
<!-- Featured Image -->
<div class="col-md-6 album">
    <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
</div>
<?php endif; ?>
