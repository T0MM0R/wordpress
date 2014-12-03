<div class="card clearfix">
    
    <?php if (has_post_thumbnail() && !is_single() && !is_front_page()) : ?>
    
        <div class="col-md-6">
            <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
        </div>
    
        <div class="col-md-6">
            <div class="title">
                <h3>
                    <?php if(!is_single()) :?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php else: ?>
                        <?php the_title(); ?>
                    <?php endif; ?>
                </h3>
                <ul class="info">
                    <li>By: <?php the_author(); ?></li>
                    <li>Published in <?php the_category(', '); ?></li>
                    <li>On <?php the_time('F j, Y'); ?></li>
                </ul>
            </div>
            <p>
                <?php the_excerpt(); ?>
            </p>
        </div>

        <div>
            <p>
                <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
            </p>
        </div>
    
    <?php elseif (!is_single() && !is_front_page()) : ?>
    
        <div>
            <div class="title">
                <h3>
                    <?php if(!is_single()) :?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php else: ?>
                        <?php the_title(); ?>
                    <?php endif; ?>
                </h3>
                <ul class="info">
                    <li>By: <?php the_author(); ?></li>
                    <li>Published in <?php the_category(', '); ?></li>
                    <li>On <?php the_time('F j, Y'); ?></li>
                </ul>
            </div>
            <p>
                <?php the_excerpt(); ?>
            </p>
        </div>

        <div>
            <p>
                <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
            </p>
        </div>
    
    <?php elseif (has_post_thumbnail() && is_front_page() && in_category('featured')) : ?>
    
        <div class="title">
            <h3>
                <?php if(!is_single()) :?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php else: ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </h3>
            <ul class="info">
                <li>By: <?php the_author(); ?></li>
                <li>Published in <?php the_category(', '); ?></li>
                <li>On <?php the_time('F j, Y'); ?></li>
            </ul>
        </div>
    
        <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
    
        <p>
            <?php echo substr(get_the_excerpt(), 0, 150) . " . . ."; ?>
        </p>
        
        <div>
            <p>
                <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
            </p>
        </div>
        
    <?php elseif (is_front_page()) : ?>
    
        <div class="title">
            <h3>
                <?php if(!is_single()) :?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php else: ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </h3>
            <ul class="info">
                <li>By: <?php the_author(); ?></li>
                <li>Published in <?php the_category(', '); ?></li>
                <li>On <?php the_time('F j, Y'); ?></li>
            </ul>
        </div>
        
        <?php if (has_post_thumbnail()) : ?>
    
            <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
        
        <?php endif; ?>
    
        <p>
            <?php echo substr(get_the_excerpt(), 0, 150) . " . . ."; ?>
        </p>
        
        <div>
            <p>
                <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
            </p>
        </div>
    
    <?php elseif (is_single()): ?>
        
        <div class="title">
            <h3>
                <?php if(!is_single()) :?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php else: ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </h3>
            <ul class="info">
                <li>By: <?php the_author(); ?></li>
                <li>Published in <?php the_category(', '); ?></li>
                <li>On <?php the_time('F j, Y'); ?></li>
            </ul>
        </div>
    
        <article>
                
            <?php if (has_post_thumbnail() && is_single()) : ?>
            <div class="col-md-4 pull-right">
                <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
            </div>
            <?php endif; ?>

            <?php the_content(); ?>

        </article>
    
    <?php endif; ?>
        
</div>

<?php if (is_single()) : ?>

<div class="card clearfix">
    <h3>About The Author</h3>
    <div class="album pull-left">
        <?php echo get_custom_avatar( get_the_author_meta('user_email'), 100 , 'mysteryman' , 'gravatar' ); ?>
    </div>
    <div class="col-md-8">
        <h1><?php the_author(); ?></h1>
        <ul class="info">
            <li><a href="mailto:<?php the_author_meta('user_email'); ?>"><i class="fa fa-envelope"></i></a></li>
            <li><a href="<?php the_author_meta('user_url'); ?>" target="_blank"><i class="fa fa-home"></i></a></li>
            <li><a href="<?php the_author_meta('twitter'); ?>"><i class="fa fa-twitter fa-2"></i></a></li>
            <li><a href="<?php the_author_meta('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
        </ul>
        <p><?php the_author_meta('description'); ?></p>
    </div>
</div>

<?php endif; ?>