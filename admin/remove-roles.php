<?php

require_once( __DIR__ . '/../bootstrap.php' );
require_once( __DIR__ . '/functions.php' );
debug_to_console( 'in remove roles'  );

if ( isset( $_GET ) ) {
	$id = $_GET[ 'id' ];
	debug_to_console( $id  );
	debug_to_console( 'croles' );
	$c_roles = $_GET[ 'croles' ];
	//$c_roles = explode(",", $current_roles );
} else {
	debug_to_console( 'danny' );
}

for ( $k = 0; $k < count( $c_roles ); $k ++ ) {
	debug_to_console( $c_roles[ $k ] );
	//$auth->admin()->removeRoleForUserById( 1, \Delight\Auth\Role::$c_roles[ $k ]);
}

//foreach ( $current_roles as $key => $value ) {
//	//echo $value . "<br>";
//	//debug_to_console( $value );
//	//try {
//	//	$auth->admin()->removeRoleForUserById( $id, \Delight\Auth\Role::$value);
//	//}
//	//catch (\Delight\Auth\UnknownIdException $e) {
//	//	// unknown user ID
//	//}



//function buildRoles( \Delight\Auth\Auth $auth, $id ) {
//	$list_of_roles = \Delight\Auth\Role::getNames();
//
//	$rolesJson = '';
//
//	for ( $k = 0; $k < count( $list_of_roles ); $k ++ ) {
//
//		$theRole = $auth->admin()->getRolesForUserById( $id );
//		//debug_to_console( $theRole );
//		//debug_to_console( $list_of_roles[ $k ] );
//		//d( $theRole );
//		//exit;
//
//		if ( in_array( $list_of_roles[ $k ], $theRole ) === true ) {
//			$rolesJson .= "    <option selected='selected' value=$k >" . $list_of_roles[ $k ] . "</option>";
//
//		} else {
//			$rolesJson .= "    <option value=$k>" . $list_of_roles[ $k ] . "</option>";
//		}
//	}
//
//	echo( $rolesJson );
//	//$( 'js_roles' ).load('user-roles.php');
//	return( $rolesJson );
//}