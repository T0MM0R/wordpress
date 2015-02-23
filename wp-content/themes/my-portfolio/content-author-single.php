<div class="author">
    <h3>About The Author</h3>

    <?php echo get_custom_avatar( get_the_author_meta('user_email'), 100 , 'mysteryman' , 'gravatar' ); ?>


    <h1><?php the_author(); ?></h1>
    <ul class="info">
        <li><a href="mailto:<?php the_author_meta('user_email'); ?>"><i class="fa fa-envelope"></i></a></li>
        <li><a href="<?php the_author_meta('user_url'); ?>" target="_blank"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php the_author_meta('twitter'); ?>"><i class="fa fa-twitter fa-2"></i></a></li>
        <li><a href="<?php the_author_meta('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
    </ul>
    <p><?php the_author_meta('description'); ?></p>
</div>
