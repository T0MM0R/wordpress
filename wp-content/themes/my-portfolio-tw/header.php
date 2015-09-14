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
        
        <div id="nav" class="navbar navbar-default navbar-fixed-top container-fluid">
            <div class="logo pull-left hidden-xs"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="logo"></div>
            <hgroup id="logo" class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="menu">MENU</span>
                </button>

                <a href="<?php echo site_url(); ?>">
                    <h1><?php bloginfo( 'name' ); ?> -></h1>
                    <h2 class="visible-md-inline-block visible-lg-inline-block"><?php bloginfo( 'description' ) ;?></h2>
                </a>

            </hgroup>

            <nav class="navbar-collapse collapse" id="nav1">

<!--                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->

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
        
