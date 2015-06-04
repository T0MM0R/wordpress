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
    
    <body <?php if (is_front_page()) { echo "class='home'"; } ?>>
        
        <div id="nav" class="navbar navbar-default navbar-fixed-top container-fluid">
            <hgroup id="logo" class="navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="menu">MENU</span>
                </button>

                <a href="<?php echo site_url(); ?>">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <h2><?php bloginfo( 'description' ) ;?></h2>
                </a>

            </hgroup>
            
            <nav class="navbar-collapse collapse" id="nav1">
                <div class="contact">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="tel:+15176676212" alt="Call me">(517)667-6212</a></li>
                        <li><a href="mailto:thomasscot@gmail.com" alt="Send me a message">thomasscot@gmail.com</a></li>
                        <li><a href="https://www.google.com/maps/place/Amorphotograph/@42.929494,-85.309552,17z/data=!3m1!4b1!4m2!3m1!1s0x88185d29410e6283:0x9d9a84023d194eaf" alt="address">Lowell, MI 49331</a></li>
                    </ul>
                </div>
               <?php
                    $args = array(
                        'menu_class'      => 'nav navbar-nav'
                    );
                    wp_nav_menu( $args );
                ?>
                
            </nav>
            
        </div>
        
