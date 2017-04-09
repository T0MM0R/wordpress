<?php

defined( 'ABSPATH' ) or die( 'This plugin requires WordPress' );

// Make sure that the Spark API Core class is loaded before anything else.
require_once( 'Core.php' );

spl_autoload_register( function( $class ){
	foreach( new \DirectoryIterator( __DIR__ ) as $file ){
		if( $file->isFile() && __FILE__ !== $file->getPathname() ){
			$class = $file->getBasename( '.php' );
			if( false === strpos( $class, '.' ) ){
				require_once( $file->getPathname() );
			}
		}
	}
} );