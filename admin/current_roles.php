<?php

require_once( __DIR__ . '/../bootstrap.php' );
require_once( __DIR__ . '/functions.php' );
$croles = '';

if ( isset( $_REQUEST ) ) {
	$id = $_REQUEST[ 'id' ];
} else {
	debug_to_console( 'danny' );
}

$current_roles = $auth->admin()->getRolesForUserById( $id );

debug_to_console( $current_roles );
exit;

//$croles = '[';
//foreach ( $current_roles as $key => $value ) {
//	$croles .= "'" .  $value . "'" . "," ;
//}
//$croles .= ']';
//
//$c_roles = JSON.stringify( $croles );

echo  $current_roles;
return $current_roles;
