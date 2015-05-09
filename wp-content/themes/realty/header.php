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
    
    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>

                </div>

                <div class="navbar-collapse collapse" id="nav1">

                   <?php
                        $args = array(
                            'menu', 
                            'main',
                            'menu_class'      => 'nav navbar-nav',
                            'walker' => new My_Walker_Nav_Menu()
                        );
                        wp_nav_menu( $args );
                    ?>

                </div>
            </div>
        </nav>
        
