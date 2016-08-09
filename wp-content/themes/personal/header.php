<!DOCTYPE html>
<html>
    <head>
        
        <title>
            <?php 
            
            wp_title( '|', true, 'right' );
            
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1, user-scalable=0">
        
        <?php wp_head(); ?>
        
    </head>
    
    <body <?php body_class() ?>>
        
        <header id="nav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div id="logo" class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="menu">MENU</span>
                    </button>

                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?> -></a>

                </div>

                <nav class="navbar-collapse collapse" id="nav1">

                    <?php
                        $args = array(
                            'menu', 
                            'main',
                            'menu_class' => 'nav navbar-nav',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                    <div class="navbar-form navbar-right">
                        <?php if ( dynamic_sidebar( 'header_right' ) ): ?>

                        <?php endif; ?>
                    </div>

                </nav>
            </div>
        </header>
        
