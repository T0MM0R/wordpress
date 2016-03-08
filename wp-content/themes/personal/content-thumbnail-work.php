<?php if (is_front_page()) {$work = new WP_Query(array("post_type" => "work", 'posts_per_page' => 3));} else {$work = new WP_Query(array("post_type" => "work"));} ?>
<?php $i = 0; ?>
<div class="row">
    <div class="recent-work">
    <?php if ($work->have_posts()): while ($work->have_posts()): $i++; $work->the_post(); ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <?php if (has_post_thumbnail()): the_post_thumbnail(array(350, 233)); endif; ?>
            <div class="caption">
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <div class="excerpt"><?php the_excerpt(); ?></div>
              <p><a href="<?php the_field('project-url'); ?>" class="btn btn-block btn-primary" role="button" target="blank">View project &rarr;</a></p>
            </div>
          </div>
        </div>
        <?php if (0 == $i%3) { echo "<div class='clearfix'></div>"; } ?>
    <?php endwhile; endif; ?>
    </div>
</div>