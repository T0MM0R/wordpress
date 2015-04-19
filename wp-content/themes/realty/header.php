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
        
        <div id="nav" class="navbar navbar-default navbar-fixed-top container-fluid">
            <hgroup id="logo" class="navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="menu">MENU</span>
                </button>

                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                </a>
                <h2><?php bloginfo( 'description' ) ;?></h2>

            </hgroup>
            
            <nav class="navbar-collapse collapse" id="nav1">
                
               <?php
                    $args = array(
                        'menu', 
                        'main',
                        'menu_class'      => 'nav navbar-nav'
                    );
                    wp_nav_menu( $args );
                ?>
                
                <div class="contact">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="tel:+15176676212" alt="Call me">(616)485-2749</a></li>
                        <li><a href="mailto:riverside.realty@hotmail.com" alt="Send me a message">riverside.realty@hotmail.com</a></li>
                    </ul>
                </div>
                
            </nav>
            
        </div>
        
