<?php
require_once( __DIR__ . '/../bootstrap.php' );

//d( $_GET );
//$id = $_GET[ 'email' ];
//$email = $auth->getEmail();
//$email = $_GET['email'];
//echo $email;
//$id = 16;

if ( isset( $_GET ) ) {
	$id = $_GET[ 'id' ];
	debug_to_console( $id );
	exit;
   //echo $id;
	$roles = [];
	$roles = $auth->admin()->getRolesForUserById( $id );
   //d( $roles );
   //echo $roles['email'];
   //echo 'danny';

   //function buildRoles() {
	//$list_of_roles = \Delight\Auth\Role::getNames();

	foreach ( $roles as $key => $value ) {
		echo( "    <option value=$key selected='selected'>" . $value . "</option>" );
		//$auth->admin()->addRoleForUserById( $id, $value );
	}
}