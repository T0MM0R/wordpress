<?php global $count; ?>
<?php if ( $count % 2 ) : ?>
<div class="<?php echo (has_post_thumbnail() && !is_single() && !is_front_page() ) ? "col-md-6" : ""; ?>">

            <div class="title">
                <h3>
                    <?php if(!is_single()) :?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php else: ?>
                    <?php the_title(); ?>
                    <?php endif; ?>
                </h3>
                <ul class="info">
                    <li>By: <?php the_author(); ?></li>
                    <li>Published in <?php the_category(', '); ?></li>
                    <li>On <?php the_time('F j, Y'); ?></li>
                </ul>
            </div>

            <?php if(is_single()): ?>

                <article>

                    <?php the_content(); ?>

                </article>
    
                <div class="row">
       
                    <?php comments_template(); ?>
        
                </div>

                <?php get_template_part( 'content', 'author-single' ); ?>

        <?php else: ?>

                <p>
                    <?php the_excerpt(); ?>
                    <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
                </p>

        <?php endif; ?>

        </div>

    <?php if (has_post_thumbnail()) :?>
        <?php if (is_front_page() && in_category("featured")) : ?>

            <!-- Featured Image -->
            <div class="col-md-6 album">
                <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
            </div>

        <?php elseif (!is_front_page() && !is_single()) : ?>

            <!-- Featured Image -->
            <div class="col-md-6 album">
                <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
            </div>

        <?php endif; ?>

    <?php endif; ?>
        
<?php else: ?>
        
    <?php if (has_post_thumbnail()) :?>
        <?php if (is_front_page() && in_category("featured")) : ?>

            <!-- Featured Image -->
            <div class="col-md-6 album">
                <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
            </div>

        <?php elseif (!is_front_page() && !is_single()) : ?>

            <!-- Featured Image -->
            <div class="col-md-6 album">
                <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')); ?>
            </div>
            
        <?php endif; ?>

    <?php endif; ?>
            
    <div class="<?php echo (has_post_thumbnail() && !is_single() && !is_front_page() ) ? "col-md-6" : ""; ?>">

            <div class="title">
                <h3>
                    <?php if(!is_single()) :?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php else: ?>
                    <?php the_title(); ?>
                    <?php endif; ?>
                </h3>
                <ul class="info">
                    <li>By: <?php the_author(); ?></li>
                    <li>Published in <?php the_category(', '); ?></li>
                    <li>On <?php the_time('F j, Y'); ?></li>
                </ul>
            </div>

            <?php if(is_single()): ?>

                <article>

                    <?php the_content(); ?>

                </article>
        
                <div class="row">
       
                    <?php comments_template(); ?>
        
                </div>

                
                <?php get_template_part( 'content', 'author-single' ); ?>

        <?php else: ?>

                <p>
                    <?php the_excerpt(); ?>
                    <a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a>
                </p>

        <?php endif; ?>

        </div>
        
<?php endif; ?>

