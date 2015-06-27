<?php get_header() ?>

<div id="main" class="container">
    <div class="row">
        <?php if ( have_posts() ): while ( have_posts() ): the_post() ?>
        
            <?php get_template_part('content', 'post') ?>
        
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer() ?>

