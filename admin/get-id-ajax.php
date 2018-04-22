<?php
require_once( 'config.php' );
require_once( 'functions.php' );
require_once( __DIR__ . '/../assets/vendor/autoload.php' );
$id = -1;

if ( isset( $_REQUEST ) ) {
	debug_to_console( $_REQUEST );
	//$id = $_GET[ 'id' ];
	debug_to_console( 'kelley' );
} else {
	echo 'danny';
	debug_to_console( 'danny' );
}
