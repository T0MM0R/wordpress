<?php if (is_front_page()) {$recent_posts = new WP_Query(array("post_type" => "post", 'posts_per_page' => 3));} else {$recent_posts = new WP_Query(array("post_type" => "post"));} ?>
<?php $i = 0; ?>
<div class="row">
<?php if ($recent_posts->have_posts()): while ($recent_posts->have_posts()): $i++; $recent_posts->the_post(); ?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <?php if (has_post_thumbnail()): the_post_thumbnail(array(350, 233)); endif; ?>
        <div class="caption">
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <div class="excerpt"><?php the_excerpt(); ?></div>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-block btn-primary" role="button">Read more &rarr;</a></p>
        </div>
      </div>
    </div>
    <?php if (0 == $i%3) { echo "<div class='clearfix'></div>"; } ?>
<?php endwhile; endif; ?>
</div>