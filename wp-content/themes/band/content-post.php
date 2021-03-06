<div class="col-md-4">
    <div class="card">
        <section class="headline clearfix">
            <?php if ( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('thumbnail', array('class' => 'img img-responsive pull-left')) ?>
            <?php endif ?>
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
            <span>Published on: <?php the_date() ?></span>
        </section>
        <section class="body">
            <article><?php the_excerpt() ?></article>
        </section>
        <a class="btn btn-default btn-block" href="<?php the_permalink() ?>" title="Read more about <?php the_title() ?>">Read More &rarr;</a>
    </div>
</div>

