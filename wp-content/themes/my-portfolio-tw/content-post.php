<div class="card"> 
<div class="clearfix <?php echo is_front_page() ? "col-md-10 col-md-offset-1": ""; ?>">
    
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
                <li>Published in <?php the_category(', '); ?></li>
                <li>On <?php the_time('F j, Y'); ?></li>
            </ul>
        </div>
    
        <article>
            
            <div class="col-md-8">
                <?php the_content(); ?>
            </div>
            
            <div class="col-md-4">
                <?php if (has_post_thumbnail() && is_single()) : ?>
                    <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
                <?php endif; ?>
            </div>

        </article>
    
    <?php endif; ?>
        
</div>

<?php if (is_single()) : ?>
       
    <?php comments_template(); ?>

    <?php get_template_part( 'content', 'author-single' ); ?>

<?php endif; ?>