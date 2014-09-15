<!DOCTYPE html>
<html>
    <head>
        
        <title>
            <?php 
            
            wp_title( '|', true, 'right' );
            
            bloginfo( 'name' );
            
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        
        <?php wp_head(); ?>
        
    </head>
    <body>
        
        <div class="navbar navbar-default navbar-fixed-top">
            <header>
                <div class="container-fluid">
                    <hgroup id="logo" class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2><?php bloginfo( 'description' ) ;?></h2>
                    </hgroup>
                    <nav class="navbar-collapse collapse" id="nav1">
                       <?php
                            $args = array(
                                'menu', 
                                'main',
                                'menu_class'      => 'nav navbar-nav navbar-right'
                            );
                            wp_nav_menu( $args );
                        ?>
                    </nav>
                </div>
            </header>
        
