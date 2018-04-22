<?php

require_once( __DIR__ . '/../bootstrap.php' );
require_once( __DIR__ . '/functions.php' );

if ( isset( $_REQUEST ) ) {
	//debug_to_console( $_REQUEST );
	$id = $_GET[ 'id' ];
	//debug_to_console( $id );
} else {
	debug_to_console( 'danny' );
}

function buildRoles( \Delight\Auth\Auth $auth, $id ) {
	$list_of_roles = \Delight\Auth\Role::getNames();

	$rolesJson = '';

	for ( $k = 0; $k < count( $list_of_roles ); $k ++ ) {

		$theRole = $auth->admin()->getRolesForUserById( $id );
		//debug_to_console( $theRole );
		//debug_to_console( $list_of_roles[ $k ] );
		//d( $theRole );
		//exit;

		if ( in_array( $list_of_roles[ $k ], $theRole ) === true ) {
			$rolesJson .= "    <option selected='selected' value=$k >" . $list_of_roles[ $k ] . "</option>";

		} else {
			$rolesJson .= "    <option value=$k>" . $list_of_roles[ $k ] . "</option>";
		}
	}

	echo( $rolesJson );
	//$( 'js_roles' ).load('user-roles.php');
	return( $rolesJson );
}

buildRoles( $auth, $id );

//$roles = [];
//$roles = $auth->admin()->getRolesForUserById( $id );
//
//foreach ( $roles as $key => $value ) {
//	echo( "    <option value=$key selected='selected'>" . $value . "</option>" );
//}