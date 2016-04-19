<!DOCTYPE html>
<html>
    <head lang="en">
        
        <title>
            <?php 
            
            wp_title( '|', true, 'right' );
            
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
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
                            'menu_class' => 'nav navbar-nav',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>

                </nav>
            </div>
        </header>
        
