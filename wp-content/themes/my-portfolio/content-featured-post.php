<div class="row featured-post">
    <h5>Featured Post</h5>
    <?php $featured_post = new WP_Query( array('post_type' => 'post', 'category_name' => 'featured', 'posts_per_page' => 1) ) ?>
    <?php if ( $featured_post->have_posts() ) : ?>
        <?php while ( $featured_post->have_posts() ) : ?>
            <?php $featured_post->the_post() ?>
                <article>
                    <div class="col-md-6 album">
                        <?php the_post_thumbnail('large', array( 'class' => 'img-responsive')) ?>
                    </div>
                    <div class="title col-md-6">
                        <h3>
                            <?php if( !is_single() ): ?>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            <?php else: ?>
                                <?php the_title() ?>
                            <?php endif ?>
                        </h3>
                        <ul class="info">
                            <li>By: <?php the_author() ?></li>
                            <li>Published in <?php the_category(', ') ?></li>
                            <li>On <?php the_time('F j, Y') ?></li>
                        </ul>
                        <p>
                            <?php the_excerpt() ?>
                            <a class="post-link" href="<?php the_permalink() ?>">Continue Reading &rarr;</a>
                        </p>
                    </div>
                </article>
        <?php endwhile ?>
    <?php endif ?>
</div>