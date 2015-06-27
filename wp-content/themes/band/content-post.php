<div class="col-md-4">
    <div class="card">
        <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('thumbnail', array('class' => 'img img-responsive pull-left')) ?>
        <?php endif ?>
        <h1><a href="<?php the_permalink ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h1>
        <h2><?php the_category() ?></h2>
        <span>Published on: <?php the_date() ?></span>
        <article><?php the_excerpt() ?></article>
    </div>
</div>

