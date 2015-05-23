<div class="recent-post">
    <article>
        <h5>Latest Post</h5>
        <?php $recent_post = new WP_Query( array('post_type' => 'post', 'cat' => -2, 'posts_per_page' => 1) ) ?>
        <?php if ( $recent_post->have_posts() ) : ?>
            <?php while ( $recent_post->have_posts() ) : ?>
                <?php $recent_post->the_post() ?>
                    <?php get_template_part( 'content', 'post' ) ?>
            <?php endwhile ?>
        <?php endif ?>

    </article>
</div>