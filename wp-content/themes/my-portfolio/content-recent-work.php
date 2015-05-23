<div class="album">
    <h5>Albums</h5>
    <div class="row">
        <?php $albums = new WP_Query( array('post_type' => 'work', 'posts_per_page' => 4) ) ?>
        <?php if ( $albums->have_posts() ) : ?>
            <?php while ( $albums->have_posts() ) : ?>
                <?php $albums->the_post() ?>
                    <?php get_template_part( 'content', 'work' ) ?>
            <?php endwhile ?> 
        <?php endif ?>
    </div>
</div>