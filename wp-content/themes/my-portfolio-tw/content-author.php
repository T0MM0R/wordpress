<?php 

            $args = array(
                
                'role' => 'Administrator'
                
                
            );

            $user_query = new WP_User_Query($args);

        ?>
        
<?php if ( ! empty( $user_query->results) ) : ?>

        
    <?php foreach ( $user_query->results as $user ) : ?>
        <div class="row card">
            <div class="album pull-left">
                <?php echo get_custom_avatar( get_the_author_meta('user_email') , 100 , 'mysteryman' , 'gravatar' ); ?>
            </div>
            <div class="col-md-8">
                <h1><?php echo $user->display_name; ?></h1>
                <ul class="info">
                    <li><a href="mailto:<?php the_author_meta('user_email', $user->ID); ?>"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="<?php the_author_meta('user_url', $user->ID); ?>" target="_blank"><i class="fa fa-home"></i></a></li>
                    <li><a href="<?php the_author_meta('twitter', $user->ID); ?>"><i class="fa fa-twitter fa-2"></i></a></li>
                    <li><a href="<?php the_author_meta('facebook', $user->ID); ?>"><i class="fa fa-facebook"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <?php if (is_page('contact')) : ?>
                    <p><?php echo get_the_author_meta('description', $user->ID); ?></p>
                <?php endif; ?>
            </div>
        </div>

    <?php endforeach; ?>

<?php endif; ?>

