<?php 

            $args = array(
                
                'role' => array('Author', 'Administrator', 'Contributor', 'Editor')
                
                
            );

            $user_query = new WP_User_Query($args);

        ?>
        
<?php if ( ! empty( $user_query->results) ) : ?>

        
    <?php foreach ( $user_query->results as $user ) : ?>
        <div class="row">
            <div class="col-md-4">
                <?php echo get_custom_avatar( $user->user_email , 100 , 'mysteryman' , 'gravatar' ); ?>
            </div>
            <div class="col-md-8">
                <h1><?php echo $user->display_name; ?></h1>
                <ul class="info">
                    <li><a href="mailto:<?php echo $user->user_email; ?>"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="<?php echo $user->user_url; ?>" target="_blank"><i class="fa fa-home"></i></a></li>
                    <li><a href="<?php echo get_the_author_meta('twitter', $user->ID); ?>"><i class="fa fa-twitter fa-2"></i></a></li>
                    <li><a href="<?php echo get_the_author_meta('facebook', $user->ID); ?>"><i class="fa fa-facebook"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <p><?php echo get_the_author_meta('description', $user->ID); ?></p>
            </div>
        </div>

    <?php endforeach; ?>

<?php endif; ?>
